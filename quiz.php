<?php
session_start();
$conn = new mysqli('localhost:3307', 'root', '', 'satgas');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Menyimpan nama pengguna saat pertama kali memulai kuis
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['name'])) {
    $name = $_POST['name'];
    $stmt = $conn->prepare("INSERT INTO users (name) VALUES (?)");
    $stmt->bind_param("s", $name);
    $stmt->execute();

    $_SESSION['user_id'] = $stmt->insert_id;
    $_SESSION['user_name'] = $name;  // Simpan nama pengguna dalam sesi
    $_SESSION['question_id'] = 0;
    $_SESSION['score'] = 0;

    header("Location: quiz.php");
    exit;
}

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];  // Ambil nama pengguna dari sesi
$current_question_id = $_SESSION['question_id'];

// Query soal saat ini dari database
$stmt = $conn->prepare("SELECT * FROM questions WHERE id = ?");
$stmt->bind_param("i", $current_question_id);
$stmt->execute();
$result = $stmt->get_result();
$question = $result->fetch_assoc();

if (!$question) {
    // Menyimpan skor ke tabel user_scores dengan nama pengguna
    $score = $_SESSION['score'];
    $stmt = $conn->prepare("INSERT INTO user_scores (user_id, name, score) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $user_id, $user_name, $score);
    $stmt->execute();

    // Redirect ke halaman hasil
    header("Location: results.php");
    exit;
}

// Menangani pengiriman jawaban
if (isset($_POST['submit'])) {
    $chosen_option = $_POST['pricing'] ?? null;
    if ($chosen_option) {
        $is_correct = $chosen_option == $question['correct_option'] ? 1 : 0;

        if ($is_correct) {
            $_SESSION['score'] += 14.28571428571429;
        }

        $stmt = $conn->prepare("INSERT INTO user_answers (user_id, question_id, chosen_option, is_correct) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisi", $user_id, $current_question_id, $chosen_option, $is_correct);
        $stmt->execute();

        $_SESSION['question_id']++;

        header("Location: quiz.php");
        exit;
    } else {
        $error = "Pilih jawaban Anda!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PPKS</title>
    <link rel="icon" href="Asset 3@2x.png">
    <link rel="stylesheet" href="quiz.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Fredoka'; font-size: small;">
    <div class="login-box">
        <h2>QUIZ</h2>
        <p style="text-decoration:underline;">Kerjakan soal ini dengan cermat!</p><br>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>

        <h4><?php echo $question['question_text']; ?></h4>
        <form action="" method="post">
            <div class="card-container">
                <div class="card">
                    <input type="radio" name="pricing" id="card1" value="A">
                    <label for="card1"><h2>A</h2><br><?php echo $question['option_a']; ?></label>
                </div>
                <div class="card">
                    <input type="radio" name="pricing" id="card2" value="B">
                    <label for="card2"><h2>B</h2><br><?php echo $question['option_b']; ?></label>
                </div>
                <div class="card">
                    <input type="radio" name="pricing" id="card3" value="C">
                    <label for="card3"><h2>C</h2><br><?php echo $question['option_c']; ?></label>
                </div>
                <div class="card">
                    <input type="radio" name="pricing" id="card4" value="D">
                    <label for="card4"><h2>D</h2><br><?php echo $question['option_d']; ?></label>
                </div>
            </div>
            <button type="submit" name="submit" class="tombollogin">Submit</button>
        </form>
    </div>
</body>
</html>
