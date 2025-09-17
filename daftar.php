<?php
session_start();

// Sertakan file koneksi ke database
include('koneksi.php');

// Periksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Melindungi input pengguna untuk mencegah serangan SQL injection
    $namalengkap = mysqli_real_escape_string($conn, $_POST['namalengkap']);
    $prodi = mysqli_real_escape_string($conn, $_POST['prodi']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $verifikasipassword = $_POST['verifikasipassword'];
    $smt = mysqli_real_escape_string($conn, $_POST['smt']);
    $nohp = mysqli_real_escape_string($conn, $_POST['nohp']);

    // Memverifikasi bahwa password dan verifikasi password cocok
    if ($password === $verifikasipassword) {
        // Meng-hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Mempersiapkan query untuk memasukkan data pengguna baru
        $stmt = $conn->prepare("INSERT INTO ppks (namalengkap, prodi, email, password, smt, nohp) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $namalengkap, $prodi, $email, $hashed_password, $smt, $nohp);

        // Menjalankan statement
        if ($stmt->execute()) {
            // Pendaftaran berhasil, tetapkan pesan sukses dan redirect
            $_SESSION['success'] = "Pendaftaran berhasil. Silakan login.";
            header("Location: index.php");
            exit();
        } else {
            // Terjadi kesalahan dalam penyimpanan data, tetapkan pesan kesalahan
            $_SESSION['error'] = "Terjadi kesalahan. Silakan coba lagi.";
            header("Location: daftar.php");
            exit();
        }

        // Menutup statement
        $stmt->close();
    } else {
        // Password dan verifikasi password tidak cocok
        $_SESSION['error'] = "Password dan Verifikasi password tidak cocok.";
        header("Location: daftar.php");
        exit();
    }
}

// Menutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PPKS</title>
    <link rel="icon" href="Asset 3@2x.png">
    <link rel="stylesheet" href="daftar.css?v=<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Fredoka'; font-size: small;">
    <div class="login-box">
    <?php
        // Tampilkan pesan keberhasilan jika ada
        if (isset($_SESSION['success'])) {
            echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
            unset($_SESSION['success']); // Hapus pesan setelah ditampilkan
        }

        // Tampilkan pesan kesalahan jika ada
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Hapus pesan setelah ditampilkan
        }
        ?>
        <img src="assets/Logo Spada.png">
        <h2>Registrasi akun SPADA</h2>
        <br>
        <form action="" method="post">
        <div class="row">
            <div class="mb-1">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap anda!" required>
            </div>
            <div class="col">
                <div class="mb-2">
                    <label class="form-label">Program Studi</label>
                    <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukkan prodi anda!" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Alamat Email anda!" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password anda!" required>
                </div>
            </div>
            <div class="col">
                <div class="mb-2">
                    <label class="form-label">Semester (contoh:4)</label>
                    <input type="text" class="form-control" id="smt" name="smt" placeholder="Masukkan semester anda!" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">No. Hp</label>
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukkan No. Hp anda!" required>
                </div>
                <div class="mb-2">
                    <label class="form-label">Verifikasi Password</label>
                    <input type="password" class="form-control" id="verifikasipassword" name="verifikasipassword" placeholder="Masukkan Kembali Password anda!" name="" required>
                </div>
            </div>
        </div>
        <input type="submit" class="tombollogin" value="Daftar" name="simpan">
    </form>
        <p class="po">Catatan: agar akun Spada Indonesia anda dapat tetap terhuhung dengan layanan di perguruan tinggi anda, sebaiknya gunakan email yang sama</p>
        <p class="pe">Sudah punya akun? <a href="index.php" class="link">Masuk!</a></p>
    </div>
</body>
</html>