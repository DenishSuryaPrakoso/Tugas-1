<?php
session_start();
$conn = new mysqli('localhost:3307', 'root', '', 'satgas');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Ambil skor dan nama pengguna dari sesi
$user_id = $_SESSION['user_id'] ?? null;
$user_name = $_SESSION['user_name'] ?? null;
$score = $_SESSION['score'] ?? 0;

// Format skor dengan dua digit desimal
$formatted_score = number_format($score, 2);

// Jika tidak ada user_id di sesi, redirect ke index.php
if (!$user_id) {
    header("Location: index.php");
    exit;
}

// Kosongkan sesi setelah skor disimpan
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Quiz</title>
    <link rel="icon" href="Asset 3@2x.png">
    <link rel="stylesheet" href="results.css?v=<?php echo time(); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Fredoka'; font-size: small;">
    <div class="login-box"><br><br><br><br><br><br>
        <h5>Hai <span style="text-decoration: underline;"><?php echo htmlspecialchars($user_name); ?></span>, Terima kasih sudah mengikuti quiz ini! <br>
        Skor akhir kamu adalah: <span style="text-decoration: underline;"><?php echo $formatted_score; ?></span></h5><br><br>
        <a href="lobby.php" class="tombollogin">Kembali ke Halaman Utama</a>
        <br><br><br><br><br><br>
    </div>
</body>
</html>
