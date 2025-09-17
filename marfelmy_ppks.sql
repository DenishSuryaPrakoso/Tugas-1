-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Jun 2024 pada 21.38
-- Versi server: 10.6.18-MariaDB-cll-lve
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marfelmy_ppks`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppks`
--

CREATE TABLE `ppks` (
  `id` int(11) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` char(15) NOT NULL,
  `smt` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ppks`
--

INSERT INTO `ppks` (`id`, `namalengkap`, `prodi`, `email`, `password`, `nohp`, `smt`) VALUES
(25, 'admin 2', 'Teknologi Rekayasa Multimedia', 'finavarzah@yahoo.com', '$2y$10$9Vm0szHgAGevs.LEzqVPNOeYNnY3X3gGfNcSLvdDuam4yoA3TyuhK', '085710664699', 4),
(26, 'Waode Lubna Astrid Herawati', 'Teknologi Rekayasa Multimedia', 'waodelubna@gmail.com', '$2y$10$UoBWBCfeqIITMbvvMyrXBO7UMRE7S1xUcIk5ImJnKqNU61VZQ63wC', '081287890345', 2),
(27, 'ATIQA RAISA MUMTAZ ', 'Teknologi Rekayasa Multimedia', 'atiqaraisam@gmail.com', '$2y$10$CX/w6alrbUwjbgSayFpt1udCrJkYRU50IZ3Hla.GqAURyHpq7yYim', '081287890344', 2),
(28, 'Nashira Shakila', 'Teknologi Rekayasa Multimedia', 'nashakilash@gmail.com', '$2y$10$4kiHfk8w6GL8Spo3LTKzMuCoGvl6sGHQt26CJ.odH3Nt1am85gGU6', '081387891344', 2),
(29, 'Abdul Rahman', 'Teknologi Rekayasa Multimedia', 'norickabegp500@gmail.com', '$2y$10$4gXDPtvV2hOaiclRzWP4feucpx17VguEduhyFatQyjJ/lP3noGA12', '081285090345', 2),
(30, 'Indera Nata Raharja ', 'Teknologi Rekayasa Multimedia', 'inderaharja777@gmail.com', '$2y$10$c7l/do3B2nHEeTTgGC7EU.K/FCZ4LBgt7LcW7WB7ZeBqpY5hlFAlK', '085710661678', 2),
(31, 'Khaisya Naura Tazkia ', 'Teknologi Rekayasa Multimedia', '26khaisya@gmail.com', '$2y$10$PieXMp/e3dflyINyaQDp7O6HV8JpWpF8Yv8jVOaivaBZN0aPNlpeK', '081210661588', 2),
(32, 'Affifah Nurhaliza Putri', 'Teknologi Rekayasa Multimedia', 'affifahnurhaliza@gmail.com', '$2y$10$NJoZF/u2eTvqCERtVZeBCuwc88t2V/r5Huqoe8/tsnDciJCh8x53C', '0895392155248', 2),
(33, 'Arlyn', 'Teknologi Rekayasa Multimedia', 'anantaarlyn@gmail.com', '$2y$10$hmzlqllBl6kYMDMDh20TUuhMbPxI6kn8cUUoZit5wFzgrLL.JH5s2', '081234561588', 2),
(34, 'Mahesa Waskita Prawira Negara', 'Teknologi Rekayasa Multimedia', 'mahesawaskita@gmail.com', '$2y$10$.2LmwGDJDEUzeEwbLnDLPe28AjRz8aHafFI4GFgDB87uaIqL8Fjm.', '085894993071', 2),
(35, 'Muhammad Riza Aljauzy', 'Teknologi Rekayasa Multimedia', 'date13970@gmail.com', '$2y$10$F/wlMLnpdntHtezvdjrtd.Wl0zkt3xEO6njHAScziOeboo3TrUk/W', '0895410670495', 2),
(36, 'zahra dyva', 'Teknologi Rekayasa Multimedia', 'zahradyva123@gmail.com', '$2y$10$0IOgXlfYpi6ruH35JcthZO6zRtyq9Ak7sWfEgT5u3YIKzMWOG8vx2', '081314595061', 2),
(37, 'Bintang Rafa Audy Prasetyanto', 'Teknologi Rekayasa Multimedia', 'Rafaaudy05@gmail.com', '$2y$10$SjzzkkPtGTxtnyCP6Okr6O0ZdgDo6PiPwV5aH5LZn8e.U1RRE.YZu', '087826938473', 2),
(38, 'Ghina Agriani', 'Teknologi Rekayasa Multimedia', 'ghinaagriani.siregar@gmail.com', '$2y$10$I/zdghC8FJaOfoNq.ReyYezD451Ovwu7TTNQ3OFG96B6jzKFnUuS6', '081388386251', 2),
(39, 'abinayajubaidi', 'Teknologi Rekayasa Multimedia', 'abinayajubaidi01@gmail.com', '$2y$10$0cO68jF7gS/hoNjyD0DhLeWCMHrSjmkzs6OANV0SLKvcO0PCBfxDm', '0895390005248', 2),
(40, 'Fizard Surya Pratama Ramadhan', 'Teknologi Rekayasa Multimedia', 'fizardsurya@gmail.com', '$2y$10$5fXZnGLK.bF2mGoDnMozb.ap3ZzkUp.JPt0ZEdRjpuz1SWfUgONXm', '085771677527', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `option_a` text NOT NULL,
  `option_b` text NOT NULL,
  `option_c` text NOT NULL,
  `option_d` text NOT NULL,
  `correct_option` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `questions`
--

INSERT INTO `questions` (`id`, `question_text`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_option`) VALUES
(0, '1. Pengertian Playing Victim terkait sebab dan akibat psikologi nya adalah?', 'Kecenderungan seseorang untuk mencari simpati dan perhatian dari orang lain dengan berperan sebagai korban.', 'Perilaku seseorang yang selalu menganggap dirinya sebagai korban dalamn setiap situasi tanpa mengambil tindakan tanggungjawab atas tindakannya sendiri.', 'Pengalaman traumatis arau kekurangan perhatian di masa lalu.', 'Sulitnya mengatasi masalah secara mandiri dan ketergantungan pada orang lain untuk memperoleh empati dan dukungan.', 'B'),
(1, '2. Apa yang dimaksud dengan Online Surveilance?', 'Mengambil dan menyebar data pribadi orang lain.', 'Mengirim pesan secara berulang-ulang melalui media sosial.', 'Menyerang dengan tujuan mempermalukan.', 'Memantau kegiatan seseorang secara daring.', 'D'),
(2, '3. Gangguan psikologis yang mengganggu korban sehingga memiliki ikatan erat dengan pelaku disebut?', 'Doxing.', 'Flaming.', 'Sindrom Stockholm.', 'Victim Blaming.', 'C'),
(3, '4. Menyerang pengguna internet lain dengan tujuan mempermalukan disebut?', 'Reviktimisasi.', 'Online Shaming.', 'Online Surveilance.', 'Sexual Grooming.', 'B'),
(4, '5. Apa istilah dalam hal kekerasan seksual yang merujuk kepada sikap manipulasi?', 'Playing Victim.', 'Flaming.', 'Sexual Grooming.', 'Rape Jokes.', 'C'),
(5, '6. PTSD (Post Traumatic Stress Disorder) memiliki berbagai dampak, seperti?', 'Waspada berlebihan', 'Sesak nafas.', 'Gatal-gatal.', 'Tenang.', 'A'),
(6, '7. Di mana letak pojok istilah berada, menurut anda?', 'Navbar.', 'Header.', 'Sidebar.', 'Body', 'A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`) VALUES
(27, 'Zulfikar'),
(28, 'kemal'),
(29, 'admin 2'),
(30, 'admin 2'),
(31, 'admin 2'),
(32, 'Waode Lubna Astrid Herawati'),
(33, 'ATIQA RAISA MUMTAZ '),
(34, 'Nashira Shakila'),
(35, 'Abdul Rahman'),
(36, 'Abdul Rahman'),
(37, 'Indera Nata Raharja '),
(38, 'Khaisya Naura Tazkia '),
(39, 'Affifah Nurhaliza Putri'),
(40, 'Arlyn'),
(41, 'Mahesa Waskita Prawira Negara'),
(42, 'Muhammad Riza Aljauzy'),
(43, 'zahra dyva'),
(44, 'Bintang Rafa Audy Prasetyanto'),
(45, 'Ghina Agriani'),
(46, 'abinayajubaidi'),
(47, 'Fizard Surya Pratama Ramadhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_answers`
--

CREATE TABLE `user_answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `chosen_option` char(1) NOT NULL,
  `is_correct` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_answers`
--

INSERT INTO `user_answers` (`id`, `user_id`, `question_id`, `chosen_option`, `is_correct`) VALUES
(138, 14, 6, 'A', 1),
(139, 15, 0, 'B', 1),
(140, 15, 1, 'D', 1),
(141, 15, 2, 'C', 1),
(142, 15, 3, 'B', 1),
(143, 15, 4, 'C', 1),
(144, 15, 5, 'A', 1),
(145, 15, 6, 'A', 1),
(146, 16, 0, 'B', 1),
(147, 16, 1, 'D', 1),
(148, 16, 2, 'B', 0),
(149, 16, 3, 'C', 0),
(150, 16, 4, 'B', 0),
(151, 16, 5, 'A', 1),
(152, 16, 6, 'A', 1),
(153, 17, 0, 'B', 1),
(154, 17, 1, 'C', 0),
(155, 17, 2, 'D', 0),
(156, 17, 3, 'C', 0),
(157, 17, 4, 'C', 1),
(158, 17, 5, 'A', 1),
(159, 17, 6, 'A', 1),
(160, 18, 0, 'B', 1),
(161, 18, 1, 'D', 1),
(162, 18, 2, 'C', 1),
(163, 18, 3, 'B', 1),
(164, 18, 4, 'C', 1),
(165, 18, 5, 'A', 1),
(166, 18, 6, 'B', 0),
(167, 19, 0, 'B', 1),
(168, 19, 1, 'D', 1),
(169, 19, 2, 'C', 1),
(170, 19, 3, 'C', 0),
(171, 19, 4, 'C', 1),
(172, 19, 5, 'A', 1),
(173, 19, 6, 'C', 0),
(174, 20, 0, 'B', 1),
(175, 20, 1, 'D', 1),
(176, 20, 2, 'C', 1),
(177, 20, 3, 'B', 1),
(178, 20, 4, 'C', 1),
(179, 20, 5, 'A', 1),
(180, 20, 6, 'D', 0),
(181, 21, 0, 'B', 1),
(182, 21, 1, 'D', 1),
(183, 21, 2, 'C', 1),
(184, 21, 3, 'B', 1),
(185, 21, 4, 'B', 0),
(186, 21, 5, 'A', 1),
(187, 21, 6, 'A', 1),
(188, 22, 0, 'B', 1),
(189, 22, 1, 'D', 1),
(190, 22, 2, 'C', 1),
(191, 22, 3, 'B', 1),
(192, 22, 4, 'C', 1),
(193, 22, 5, 'A', 1),
(194, 22, 6, 'C', 0),
(195, 23, 0, 'B', 1),
(196, 23, 1, 'B', 0),
(197, 23, 2, 'B', 0),
(198, 23, 3, 'B', 1),
(199, 23, 4, 'C', 1),
(200, 23, 5, 'A', 1),
(201, 23, 6, 'A', 1),
(202, 24, 0, 'B', 1),
(203, 24, 1, 'D', 1),
(204, 24, 2, 'C', 1),
(205, 24, 3, 'B', 1),
(206, 24, 4, 'C', 1),
(207, 24, 5, 'A', 1),
(208, 24, 6, 'A', 1),
(209, 25, 0, 'B', 1),
(210, 25, 1, 'D', 1),
(211, 25, 2, 'C', 1),
(212, 25, 3, 'B', 1),
(213, 25, 4, 'C', 1),
(214, 25, 5, 'A', 1),
(215, 25, 6, 'A', 1),
(216, 26, 0, 'B', 1),
(217, 26, 1, 'D', 1),
(218, 26, 2, 'C', 1),
(219, 26, 3, 'B', 1),
(220, 26, 4, 'C', 1),
(221, 26, 5, 'A', 1),
(222, 26, 6, 'B', 0),
(223, 27, 0, 'B', 1),
(224, 27, 1, 'D', 1),
(225, 27, 2, 'C', 1),
(226, 27, 3, 'B', 1),
(227, 27, 4, 'C', 1),
(228, 27, 5, 'A', 1),
(229, 27, 6, 'C', 0),
(230, 28, 0, 'A', 0),
(231, 28, 1, 'A', 0),
(232, 28, 2, 'A', 0),
(233, 28, 3, 'A', 0),
(234, 28, 4, 'A', 0),
(235, 28, 5, 'A', 1),
(236, 28, 6, 'A', 1),
(237, 31, 0, 'B', 1),
(238, 31, 1, 'D', 1),
(239, 31, 2, 'C', 1),
(240, 31, 3, 'B', 1),
(241, 31, 4, 'C', 1),
(242, 31, 5, 'A', 1),
(243, 31, 6, 'A', 1),
(244, 32, 0, 'B', 1),
(245, 32, 1, 'D', 1),
(246, 32, 2, 'C', 1),
(247, 32, 3, 'B', 1),
(248, 32, 4, 'C', 1),
(249, 32, 5, 'A', 1),
(250, 32, 6, 'A', 1),
(251, 33, 0, 'B', 1),
(252, 33, 1, 'D', 1),
(253, 33, 2, 'C', 1),
(254, 33, 3, 'B', 1),
(255, 33, 4, 'C', 1),
(256, 33, 5, 'A', 1),
(257, 33, 6, 'A', 1),
(258, 34, 0, 'B', 1),
(259, 34, 1, 'D', 1),
(260, 34, 2, 'C', 1),
(261, 34, 3, 'B', 1),
(262, 34, 4, 'C', 1),
(263, 34, 5, 'A', 1),
(264, 34, 6, 'A', 1),
(265, 36, 0, 'A', 0),
(266, 36, 1, 'D', 1),
(267, 36, 2, 'C', 1),
(268, 36, 3, 'B', 1),
(269, 36, 4, 'C', 1),
(270, 36, 5, 'A', 1),
(271, 36, 6, 'A', 1),
(272, 37, 0, 'B', 1),
(273, 37, 1, 'D', 1),
(274, 37, 2, 'C', 1),
(275, 37, 3, 'B', 1),
(276, 37, 4, 'A', 0),
(277, 37, 5, 'A', 1),
(278, 37, 6, 'A', 1),
(279, 38, 0, 'B', 1),
(280, 38, 1, 'D', 1),
(281, 38, 2, 'B', 0),
(282, 38, 3, 'B', 1),
(283, 38, 4, 'B', 0),
(284, 38, 5, 'A', 1),
(285, 38, 6, 'A', 1),
(286, 39, 0, 'A', 0),
(287, 39, 1, 'D', 1),
(288, 39, 2, 'C', 1),
(289, 39, 3, 'B', 1),
(290, 39, 4, 'A', 0),
(291, 39, 5, 'A', 1),
(292, 39, 6, 'A', 1),
(293, 40, 0, 'B', 1),
(294, 40, 1, 'D', 1),
(295, 40, 2, 'C', 1),
(296, 40, 3, 'B', 1),
(297, 40, 4, 'C', 1),
(298, 40, 5, 'A', 1),
(299, 40, 6, 'A', 1),
(300, 41, 0, 'B', 1),
(301, 41, 1, 'D', 1),
(302, 41, 2, 'C', 1),
(303, 41, 3, 'C', 0),
(304, 41, 4, 'C', 1),
(305, 41, 5, 'A', 1),
(306, 41, 6, 'A', 1),
(307, 42, 0, 'B', 1),
(308, 42, 1, 'D', 1),
(309, 42, 2, 'C', 1),
(310, 42, 3, 'B', 1),
(311, 42, 4, 'C', 1),
(312, 42, 5, 'A', 1),
(313, 42, 6, 'A', 1),
(314, 43, 0, 'B', 1),
(315, 43, 1, 'D', 1),
(316, 43, 2, 'C', 1),
(317, 43, 3, 'B', 1),
(318, 43, 4, 'C', 1),
(319, 43, 5, 'A', 1),
(320, 43, 6, 'A', 1),
(321, 44, 0, 'B', 1),
(322, 44, 1, 'D', 1),
(323, 44, 2, 'C', 1),
(324, 44, 3, 'B', 1),
(325, 44, 4, 'C', 1),
(326, 44, 5, 'A', 1),
(327, 44, 6, 'A', 1),
(328, 45, 0, 'B', 1),
(329, 45, 1, 'D', 1),
(330, 45, 2, 'C', 1),
(331, 45, 3, 'B', 1),
(332, 45, 4, 'C', 1),
(333, 45, 5, 'A', 1),
(334, 45, 6, 'A', 1),
(335, 46, 0, 'B', 1),
(336, 46, 1, 'D', 1),
(337, 46, 2, 'C', 1),
(338, 46, 3, 'B', 1),
(339, 46, 4, 'C', 1),
(340, 46, 5, 'A', 1),
(341, 46, 6, 'A', 1),
(342, 47, 0, 'B', 1),
(343, 47, 1, 'D', 1),
(344, 47, 2, 'C', 1),
(345, 47, 3, 'B', 1),
(346, 47, 4, 'C', 1),
(347, 47, 5, 'A', 1),
(348, 47, 6, 'A', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_scores`
--

CREATE TABLE `user_scores` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_scores`
--

INSERT INTO `user_scores` (`id`, `user_id`, `score`, `name`) VALUES
(30, 27, 85, 'Zulfikar'),
(31, 28, 28, 'kemal'),
(32, 31, 100, 'admin 2'),
(33, 32, 100, 'Waode Lubna Astrid Herawati'),
(34, 33, 100, 'ATIQA RAISA MUMTAZ '),
(35, 34, 100, 'Nashira Shakila'),
(36, 36, 85, 'Abdul Rahman'),
(37, 37, 85, 'Indera Nata Raharja '),
(38, 38, 71, 'Khaisya Naura Tazkia '),
(39, 39, 71, 'Affifah Nurhaliza Putri'),
(40, 40, 100, 'Arlyn'),
(41, 41, 85, 'Mahesa Waskita Prawira Negara'),
(42, 41, 85, 'Mahesa Waskita Prawira Negara'),
(43, 42, 100, 'Muhammad Riza Aljauzy'),
(44, 43, 100, 'zahra dyva'),
(45, 44, 100, 'Bintang Rafa Audy Prasetyanto'),
(46, 45, 100, 'Ghina Agriani'),
(47, 46, 100, 'abinayajubaidi'),
(48, 47, 100, 'Fizard Surya Pratama Ramadhan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ppks`
--
ALTER TABLE `ppks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_answers`
--
ALTER TABLE `user_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indeks untuk tabel `user_scores`
--
ALTER TABLE `user_scores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ppks`
--
ALTER TABLE `ppks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `user_answers`
--
ALTER TABLE `user_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT untuk tabel `user_scores`
--
ALTER TABLE `user_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `user_answers`
--
ALTER TABLE `user_answers`
  ADD CONSTRAINT `user_answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
