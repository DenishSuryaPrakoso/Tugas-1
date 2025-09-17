<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['email'])) {
    // Jika belum login, arahkan ke halaman login
    header('Location: index.php');
    exit();
}

// Jika pengguna sudah login, lanjutkan dengan konten halaman lobby
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web PPKS</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time();?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Link Font -->
    <link rel="icon" href="Asset 3@2x.png" style="height: 70px;">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>

<body style="font-family: 'Fredoka'; font-size: small;">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="position: fixed; width: 100%; z-index: 100;">
        <div class="container-fluid">
          <a class="navbar-brand" href="lobby.php"><img src="assets/Logo Spada.png" class="logospada"></a>

          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link active" href="error.php">Berita</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="error.php">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="error.php">Hubungi Kami</a>
              </li>

            </ul>
                <a class="daftardonk" href="logout.php" role="button">Logout</a>

          </div>
        </div>
    </nav>

    <!-- KATA PENTING -->
    <div class="news-container" style="position: fixed; z-index: 10; margin-top: 90px;">
      <!-- dipake di aspek -->
      <div class="news-heading">KATA PENTING</div>

    <!-- KATA OENTING -->
    <div class="news">
      <a href="#" class="news-single ">
      Eksibisionisme: Tindakan seseorang menunjukkan alat kelaminnya kepada orang lain tanpa persetujuan.
        </a>

        <a href="#" class="news-single active">
          Doxing: Penyebaran data pribadi orang lain tanpa seizin pemilik data.
        </a>

        <a href="#" class="news-single active">
          Rape Jokes: Bentuk kekerasan seksual berupa lelucon yang menggunakan cerita tentang pemerkosaan.
        </a>

        <a href="#" class="news-single active">
          Impersonifikasi: Mencuri dan menggunakan identitas orang lain untuk menyebarkan media yang merugikan identitas pemilik.
        </a>

        <a href="#" class="news-single active">
          Flaming: Pengiriman ancaman, hinaan, pelecehan seksual berulang melalui media sosial.
        </a>

        <a href="#" class="news-single active">
          Online Surveilance: Memantau, melacak dan mengawasi kegiatan orang lain secara online.
        </a>

        <a href="#" class="news-single active">
          Bystander effect: Banyak orang di lokasi, akan sedikit yang mau membantu dalam mengurangi kekerasan.
        </a>

        <a href="#" class="news-single active">
          Victim blaming: Korban disalahkan atas kejadian buruk yang terjadi pada dirinya.
        </a>

        <a href="#" class="news-single active">
          NCII: Penyebaran foto atau video seksual yang dilakukan secara diam-diam dan disertai paksaan.
        </a>

        <a href="#" class="news-single active">
          Online Shaming: Menyerang pengguna internet lain dengan tujuan mempermalukan.
        </a>

        <a href="#" class="news-single active">
          Secondary Traumatic Stress: Kondisi seseorang yang mengalami stress karena terpapar emosi negatif saat berinteraksi.
        </a>

        <a href="#" class="news-single active">
          Sindrom Stockholm: Ketika korban mengembangkan perasaan positif terhadap pelaku penyanderaan.
        </a>

        <a href="#" class="news-single active">
          Himpaty: Ketika korban merasa empati atau afeksi terhadap pelaku kekerasan.
        </a>

        <a href="#" class="news-single active">
          False Accusation: Cerita korban tidak dipercaya dan dianggap memberikan tuduhan palsu.
        </a>

        <a href="#" class="news-single active">
          Playing Victim: Pelaku kekerasan memanipulasi informasi dan mengaku bahwa dirinya adalah korban.
        </a>

        <a href="#" class="news-single active">
          Tonic Immobility: Kelumpuhan sementara akibat trauma yang memicu ketakutan ekstrem.
        </a>

        <a href="#" class="news-single active">
          PTSD: Gangguan kesehatan mental setelah mengalami peristiwa traumatis.
        </a>

        <a href="#" class="news-single active">
          Sexual Grooming: Proses pendekatan secara personal dengan intensi memaksa kegiatan seksual tertentu.
        </a>

        <a href="#" class="news-single active">
          Secondary Victimisation: Korban mengalami trauma tambahan dari pihak berwenang atau masyarakat.
        </a>

        
      </div>
    </div>
    
    <!-- LANDINGPAGE -->
    <div class="container3-fluid p-5">
        <div class="row pt-5" style="margin-top: 50px;">
          <div class="col"><p class="textgede">Pencegahan<br>dan <span class="nangan">Penanganan</span><br>Kekerasan Seksual.</p>
          </div>
          <div class="col"><img src="assets/image1.png" class="lending"></div>
        </div>
    </div>

    <!-- EMOSIONAL -->
    <div class="container4-fluid">
        <div class="row ps-5 pe-5">
          <div class="col"><img src="assets/danger.png" class="denjer"></div>
          <div class="col" style="padding-bottom: -40px;"><p class="peringatan"><i class="bi bi-pause-circle paus"></i><br>Peringatan Konten Emosional</p>
          <p class="modalmodul">Modul ini mencakup topik-topik yang mungkin memicu respons emosional, terutama bagi mereka yang pernah mengalami kekerasan seksual. Mohon gunakan kebijaksanaan saat membaca. Jika Anda merasa tidak nyaman atau terpicu secara emosional, istirahatlah sejenak dan ambil waktu untuk diri Anda.</p>
          </div>
        </div>
    </div>

    <!-- FILOSOFI -->
    <div class="container-fluid">
        <div class="row">
          <div class="col"><p class="subtittle">1.0
          <p class="textgede2"><span class="nangan">Filosofi</span> Pendidikan Indonesia</p></p>
          <div class="kananindikit">
          <a class="buttontugas" href="topik1/filosofi.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Filosofi</span></a>
          <a class="buttontugas m-2" href="topik1/peran.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Peran Strategis Pendidikan Tinggi</span></a>
          <a class="buttontugas" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Filosofi</span></a></div>
        </div>
          <div class="col"><img src="assets/1715037843022 1.png" class="pusyank">
          <p class="quotes">Oke, sebelum kita ngobrolin tentang Pencegahan dan Penanganan Kekerasan  Seksual di Perguruan Tinggi, kita harus tahu dulu nih, apa sebenarnya  filosofi dan dasar hukum di Indonesia yang tujuannya adalah  untuk menciptakan  ruang pendidikan yang aman, sehat, dan nyaman supaya kita bisa  mencerdaskan kehidupan bangsa.</p></div>
        </div>
    </div>

    <!-- MENGHADAPI DAN MENGATASI KEKERASAN -->
    <div class="container-fluid text-center ps-5 pe-5 pt-4 pb-4 container6">
          <p class="subtittletengah">2.0</p>
          <p class="textgede3">Menghadapi dan<br>
            <span class="nangan">Mengatasi</span> Kekerasan</p>
          <p class="quotes2">"Filosofi dan dasar hukum pendidikan di Indonesia menggarisbawahi  pentingnya membentuk generasi yang beriman, cerdas, dan berjiwa  nasionalis. Itulah kenapa setiap lembaga pendidikan harus memastikan  lingkungan yang aman dan sehat, baik secara fisik maupun mental. Untuk  mencapai ini, kita perlu benar-benar serius menghadapi kekerasan di  lingkungan pendidikan."</p><br>

          <div class="satu">
            <a class="buttontugas" href="topik2/ketimpangan.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Ketimpangan Hak Pendidikan</span></a>
            <a class="buttontugas m-2" href="topik2/memahami.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Memahami Kekerasan di Lingkungan Pendidikan</span></a>
            <a class="buttontugas" href="topik2/lapisan.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Lapisan Identitas dan Kerentanan</span></a>
          </div>
          <div class="dua m-2">
          <a class="buttontugas m-2" href="topik2/setara.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Kesetaraan di Ruang Pendidikan</span></a>
          <a class="buttontugas" href="topik2/ringkasan.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Ringkasan Materi</span></a></div>
    </div>
    
    <!-- EITTS ADA QUIZZ -->
    <div class="container-fluid pt-5 pb-5 container5">
        <div class="row p-5">
          <div class="col ps-5 pt-4 butonkiri">

            <div class="row pt-5 geserbwh">
              <a class="buttontugasbwh" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Lapisan Identitas dan Kerentanan</span></a>
              <a class="buttontugasbwh mt-2 mb-2" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Kesetaraan di Ruang Pendidikan</span></a>
              <a class="buttontugasbwh" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Cara Membantu Teman</span></a>  
            </div>

          </div>

          <div class="col me-5 mt-5">
            <div class="textgede4">Eitts,<br>
            <span class="nangan">Ada Quiz</span> nih!!</div>
            <p class="quotes3">Di materi 2.0, kita kan sudah membahas tentang 'Menghadapi dan Mengatasi  Kekerasan'. Nah, kuis ini dibuat untuk mengukur seberapa paham kamu  dengan materi yang sudah diberikan oleh pada materi ini. Yuk, kita coba lihat seberapa banyak yang kamu ingat!</p>
          </div>
        </div>
    </div>

    <!-- MEMAHAMI KEKERASAN SEKSUAL -->
    <div class="container5-fluid pt-5 iyh">
        <div class="row ps-5 pe-5">
          <div class="col"><p class="subtittle">3.0
          <p class="textgede5"><span class="nangan">Memahami</span> Kekerasan Seksual</p></p>
          <p class="quotes4">Kekerasan seksual masih menjadi masalah serius di perguruan tinggi Indonesia. Menurut survei terhadap 76 kampus negeri dan swasta, 75% responden melaporkan ada kasus kekerasan seksual di kampus mereka (Nurtjahyo dkk., 2021). Catatan Komnas Perempuan tahun 2020 juga menunjukkan bahwa kekerasan terjadi di semua tingkat pendidikan, dari PAUD hingga perguruan tinggi. Universitas menempati urutan pertama dengan 27% kasus. Dari semua kekerasan di sekolah, 88% adalah kekerasan seksual.</p>
        </div>
          <div class="col"><img src="assets/_416d4424-71db-4aa3-b51a-0ed388a54e73 1.png" class="hmm">
        </div>
      </div>
    </div>

    <!-- DALAMI YUKK! -quiz -->
    <div class="container-fluid mb-3 container5">
        <div class="row ps-5 pe-5 pt-4">
          
          <div class="col me-5 mt-2">
            <div class="textgede4"><img src="assets/cewek.png" class="cewek"></div>
              <p class="quotes5">Kekerasan seksual bisa menimpa siapa saja atau dilakukan oleh siapa saja  di kampus, entah itu mahasiswa, dosen, staf, atau orang lain di  lingkungan kampus. Kementerian Pendidikan mengecam segala bentuk  kekerasan seksual di perguruan tinggi, terutama yang terjadi dalam  konteks Tridharma. Pada topik ini, kita akan melihat berbagai jenis  kekerasan seksual dan membahas bagaimana kita bisa berperilaku dengan  baik di lingkungan kampus.</p>
            </div>

            <div class="col ps-5 butonkanan"> 
              <div class="textgede6"><span class="nangan">Dalami</span> yuk!!</div>
              <div class="row pt-5 geserbwh">
                <a class="buttontugasbwh" href="topik3/bentuk.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Definisi dan Bentuk Kekerasan</span></a>
                <a class="buttontugasbwh mt-2 mb-1" href="topik3/pola.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Pola-pola Relasi</span></a>
                <a class="buttontugasbwh mt-1 mb-2" href="topik3/ringkasan.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Ringkasan Materi</span></a>  
                <a class="buttontugasbwh" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Mengidentifikasi Kekerasan Seksual</span></a>  
              </div>
  
            </div>
        </div>
    </div>

    <!-- DAMPAK KEKERASAN SEKSUAL -->
    <div class="container-fluid text-center pb-5 pt-5">
        <p class="subtittletengah pb-3">4.0</p>
        <p class="textgede3"><b></b>
          <span class="nangan">Dampak</span><br>Kekerasan Seksual</p>
        <p class="quotes2">Setelah kita belajar tentang filosofi pendidikan, mengenal berbagai  bentuk kekerasan, dan memahami kekerasan seksual lebih dalam, sekarang  kita perlu mendalami dampak yang ditimbulkan oleh kekerasan seksual.  Dengan memahami dampaknya, kita bisa berperan serta dalam mencegah  terjadinya kekerasan seksual!</p><br>

        <div class="satu">
          <a class="buttontugas" href="topik4/definisi.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Definisi dan Bentuk Paksaan</span></a>
          <a class="buttontugas m-2" href="topik4/reaksi.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Reaksi Tubuh Terhadap Trauma</span></a>
          <a class="buttontugas" href="topik4/respon.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Respon Pendukung Korban</span></a>
        </div>

        <div class="dua m-2 pb-5">
          <a class="buttontugas m-2" href="topik4/ringkasan.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">Ringkasan Materi</span></a>
          <a class="buttontugas" href="error.php" id="myButton" role="button"><i class="bi bi-pen"></i><span class="materi">Quiz: Paksaan</span></a></div>
        <div class="dip" style=" padding-bottom: 4%;"></div>
    </div>
  
    <!-- QUIZ -->
    <div class="container-fluid text-center pt-5 pb-5">
      <div class="dip" style="padding-top: 3.2%;"></div>
      <div class="textgede7">Ayo <span class="nangan">Mulai Quiz!</span></div>
      <img src="assets/1715824774471.png" style="position: absolute; z-index: -3; width: 38%; left: 0;">
      <p class="quotes6">Nah udah baca semua materinya kan? Pasti sekarang udah lebih ngerti tentang PPKS dan cara pencegahannya kan!? Ayo coba tes kemampuan kamu lewat quiz ini!!</p>
      <a class="buttonquiz m-2" href="start.php" id="myButton" role="button"><i class="bi bi-book"></i><span class="materi">QUIZ FINAL!!</span></a>
      <div class="dip" style="padding-bottom: 15%;"></div>
    </div>

    <div class="footer p-5" style="background-color: #fad20a;">
            <div class="row">
                <div class="col-md-4 text-start">
                    <h5>Tentang Kami</h5>
                    <p>Website ini bertujuan untuk mensosialisasikan dan menguji pengetahuan mahasiswa terkait Satuan Tugas Pencegahan dan Penanganan Kekerasan Seksual di lingkungan kampus. Website ini tentunya juga menyediakan informasi yang mudah dimengerti sehingga kami harap mahasiswa dapat lebih mengetahui dan memahami apa itu kekerasan seksual, bentuk kekerasan seksual dan lebih mengenal Satgas PPKS</p>
                </div>
                <div class="col-md-4 text-center">
                    <h5>Hubungi Kami</h5>
                    <p>Cilebut Bumi Pertiwi<br>
                    Bogor, Jawa Barat. 16710<br>
                    Indonesia<br>
                    Email: azfikar27@gmail.com<br>
                    Telepon: (+62)81319217617</p>
                </div>
                <div class="col-md-4 text-end">
                    <h5>Ikuti Kami</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://wa.me/+6281319217617" style="color: black;">Whatsapp</a></li>
                        <li><a href="https://www.twitter.com" style="color: black;">Twitter</a></li>
                        <li><a href="https://www.instagram.com/abcdezzettt" style="color: black;">Instagram</a></li>
                    </ul>
                </div>
            </div>

    
    </div>
    <script src="main.js"></script>
</body>
</php>