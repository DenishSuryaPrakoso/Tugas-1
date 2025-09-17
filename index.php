<?php
session_start();
require 'koneksi.php'; // Mengimpor file koneksi

// Cek jika form login telah dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Mempersiapkan dan menjalankan query
    $stmt = $conn->prepare("SELECT * FROM ppks WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verifikasi password
        if (password_verify($password, $row['password'])) {
            // Login berhasil, set sesi
            $_SESSION['email'] = $email;
            
            // Arahkan ke lobby.php
            header('Location: lobby.php');
            exit();
        } else {
            // Password salah
            $error = "Email atau password salah!";
        }
    } else {
        // Email tidak ditemukan
        $error = "Email atau password salah!";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PPKS</title>
    <link rel="stylesheet" href="login.css?v=<?php echo time();?>">
    <link rel="icon" href="Asset 3@2x.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body style="font-family: 'Fredoka'; font-size: small;">
    <div class="login-box">
        <img src="assets/Logo Spada.png">
        <h2>Selamat Datang!</h2>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form action="index.php" method="post">
        <br>
            <div class="mb-2 pt-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email anda!" required>
            </div>
            <div class="mb-1">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password anda!" required>
            </div>
            <a href="lupapw.html" class="lupa">Lupa Password</a>
            <br>
            <input type="submit" class="tombollogin" value="Masuk" name="masuk"><br><br>
            <p>Belum punya akun? <a href="daftar.php" class="link">Daftar!</a></p>
        </form>
    </div>
</body>
</html>
