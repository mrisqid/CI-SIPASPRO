-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql101.epizy.com
-- Generation Time: Aug 13, 2020 at 07:05 AM
-- Server version: 5.6.21-69.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25912138_sipaspro`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `mhs` varchar(256) NOT NULL,
  `nim` int(7) NOT NULL,
  `dospem` varchar(256) NOT NULL,
  `penguji1` varchar(256) NOT NULL,
  `penguji2` varchar(256) NOT NULL,
  `tgl` date NOT NULL,
  `waktua` time NOT NULL,
  `waktub` time NOT NULL,
  `lokasi` varchar(256) NOT NULL,
  `kuota` int(11) NOT NULL,
  `file` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `judul`, `mhs`, `nim`, `dospem`, `penguji1`, `penguji2`, `tgl`, `waktua`, `waktub`, `lokasi`, `kuota`, `file`, `is_active`) VALUES
(43, 'Pengembangan Aplikasi E-Semkom Prodi PTIK Berbasis Android', 'Fathur Rahman', 2514102, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-13', '08:00:00', '10:00:00', 'Online', 10, 'Seminar_Proposal_13_April.pdf', 1),
(44, 'Pengaruh Penerapan Program Remedial Online Terhadap Hasil Belajar Siswa Pada Mata Pelajaran Program Web dan Perangkat Bergerak di SMKN 1 Lubuk Sikaping', 'Desi Ambrina', 2516040, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-13', '08:00:00', '10:00:00', 'Online', 10, 'Seminar_Proposal_13_April1.pdf', 1),
(45, 'Perancangan Aplikasi Absensi Siswa Menggunakan QR Code Berbasis Android dengan PHP MySQL di SMKN 1 Payakumbuh', 'Siska Suciana', 2516092, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-13', '08:00:00', '10:00:00', 'Online', 10, 'Seminar_Proposal_13_April2.pdf', 1),
(46, 'Desain Enterpreneurship Store Hasil Karya Siswa Berbasis Android di SMKN 1 Pasaman', 'Sumila', 2516056, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-13', '08:00:00', '10:00:00', 'Online', 10, 'Seminar_Proposal_13_April3.pdf', 1),
(47, 'Perbandingan Hasil Belajar Siswa yang Menggunakan Media PPT dengan Media Gambar Pada Mata Pelajaran Bimbingan TIK di SMKN 2 Padang Panjang', 'Resti Rahmadhani', 2516149, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', '2020-04-13', '10:00:00', '12:00:00', 'Online', 10, 'Seminar_Proposal_13_April4.pdf', 1),
(48, 'Pengembangan Media Pembelajaran Komik Digital Biologi Pokok Bahasan Pencemaran Lingkungan Untuk Siswa Kelas VII SMP', 'Weni Sarma Fitri', 2516083, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', '2020-04-13', '10:00:00', '12:00:00', 'Online', 10, 'Seminar_Proposal_13_April5.pdf', 1),
(49, 'Perancangan Media Pembelajaran Pada Mata Pelajaran TIK Menggunakan Aplikasi Autoplay Media Studio di MAN Model Bukittinggi', 'Ticha Ardila', 2516102, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', '2020-04-13', '10:00:00', '12:00:00', 'Online', 10, 'Seminar_Proposal_13_April6.pdf', 1),
(50, 'Perbandingan Hasil Belajar TIK Siswa Menggunakan Strategi Aktif Index Card Match dengan Strategi Pembelajaran Ekspositori Pada Siswa Kelas XI di SMAN 5 Bukittinggi', 'Syafiah', 2516051, 'Dr. Supriadi, M.Pd', 'Liza Efriyanti, M.Kom', 'Riri Okra, M.Kom', '2020-04-13', '13:30:00', '15:30:00', 'Online', 10, 'Seminar_Proposal_13_April7.pdf', 1),
(51, 'Perancangan Sistem Informasi Perpustakaan di SMAN 2 Bukittinggi', 'Chesi Ludia Putri', 2516054, 'Dr. Supriadi, M.Pd', 'Liza Efriyanti, M.Kom', 'Riri Okra, M.Kom', '2020-04-13', '13:30:00', '15:30:00', 'Online', 10, 'Seminar_Proposal_13_April8.pdf', 1),
(52, 'Perancangan Sistem Informasi Pelaporan Bimbingan Konseling di SMPN 5 Bukittinggi', 'Iskandar', 2516052, 'Dr. Supriadi, M.Pd', 'Liza Efriyanti, M.Kom', 'Riri Okra, M.Kom', '2020-04-13', '13:30:00', '15:30:00', 'Online', 10, 'Seminar_Proposal_13_April9.pdf', 1),
(53, 'Perancangan Media Pembelajaran Administrasi dan Infrastruktur Jaringan Kelas XI SMK', 'Farwah Zulhulaifah Nur', 2516019, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Riri Okra, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_2020.pdf', 1),
(54, 'Perancangan Sistem Pendaftaran Audiens Seminar Proposal di IAIN Bukittinggi', 'Muhammad Risqi Darmawan', 2516026, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Riri Okra, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20201.pdf', 1),
(55, 'Perancangan Media Pembelajaran Industri Perhotelan Berbasis Android di SMKN 1 Matur', 'Rama Aditya', 2516168, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Riri Okra, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20202.pdf', 1),
(56, 'Perancangan Sistem Informasi Akademik Siswa Menggunakan Codeigniter 3 di SMKN 4 Payakumbuh', 'Zeki Marzuki', 2516136, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Riri Okra, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20203.pdf', 1),
(57, 'Perancangan Sistem Pakar Untuk Menentukan Strategi Pembelajaran Berbasis Web dengan Metode Certainty Factor di SMAN 1 Kecamatan Payakumbuh', 'Yassirli Amri', 2516163, 'Liza Efriyanti, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20204.pdf', 1),
(58, 'Perancangan E-Etalase Hasil Karya Inovatif Siswa SMK Negeri 1 Ampek Angkek Berbasis Android', 'Nahdatul Fadila', 2516063, 'Sarwo Derta, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Liza Efriyanti, M.Kom', '2020-04-29', '08:00:00', '10:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20205.pdf', 1),
(59, 'Aplikasi Sistem Pendukung Keputusan Seleksi Kepengurusan OSIM  di MAN 2 Bukittinggi', 'Khayranis Azhar', 2516067, 'Hari Antoni Musril, M.Kom', 'Dr. Supriadi, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-29', '10:00:00', '12:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20206.pdf', 1),
(60, 'Perancangan Media Pembelajaran Teknologi Informasi dan Komunikasi Menggunakan Aplikasi Autoplay dengan Materi Berbentuk Video Tutorial di SMA Muhammadiyah Padang Panjang', 'Silvia Afrianti', 2516021, 'Hari Antoni Musril, M.Kom', 'Dr. Supriadi, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-29', '10:00:00', '12:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20207.pdf', 1),
(61, 'Perancangan Media Pembelajaran Bahasa Pemograman Berbasis Android di SMKN 1 Baso', 'Rosi Kurnia Muktar', 2516073, 'Hari Antoni Musril, M.Kom', 'Dr. Supriadi, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-29', '10:00:00', '12:00:00', 'Online', 10, 'Surat_PEngantar_Seminar_29_April_20208.pdf', 1),
(62, 'Pengaruh Pendekatan Reciprocal Teaching Dalam Pembelajaran Dasar Desain Grafis (DDG) Terhadap Hasil Belajar Siswa SMKN 2 Padang Panjang', 'Indah Permata Rizki', 2516123, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-30', '08:00:00', '10:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_2020.pdf', 1),
(63, 'Perancangan Media Pembelajaran 3D Berbasis Augmented Reality Pengenalan Organ Tubuh Manusia untuk Kelas IV SDN 07 Nan Limo Hilir', 'Ari Antoni', 2516175, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-30', '08:00:00', '10:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20201.pdf', 1),
(64, 'Perancangan Simulasi Tes Potensi Akademik (TPA) di SMA N 2 Tilatang Kamang', 'Argis Afriza Sari', 2516176, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', '2020-04-30', '08:00:00', '10:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20202.pdf', 1),
(65, 'Perancangan Media Pembelajaran Interaktif Pada Mata Pelajaran Fiqih Kelas X Menggunakan Lectora Inspire di MAN 1 Pasaman', 'Septika Okta Madila', 2516179, 'Dr. Supriadi, M.Pd', 'Dr. Zulfani Sesmiarni, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-30', '08:00:00', '10:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20203.pdf', 1),
(66, 'Notifikasi Keterlambatan Pembayaran Sumbangan Pembangunan Pendidikan (SPP) Berbasis Android di SMKN 1 Baso', 'Fadlan', 2516030, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', '2020-04-30', '10:00:00', '12:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20204.pdf', 1),
(67, 'Perancangan Aplikasi Peminjaman Inventaris Sekolah di SMA Negeri 1 Talamau', 'Naufal Arife', 2516154, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', '2020-04-30', '10:00:00', '12:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20205.pdf', 1),
(68, 'Perancangan Jaringan Local Area Network Sebagai Monitoring Pembelajaran di Laboratorium Komputer SMK Genus Bukittinggi', 'Roma Rio', 2516177, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Liza Efriyanti, M.Kom', '2020-04-30', '10:00:00', '12:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20206.pdf', 1),
(69, 'Perancangan Media Pembelajaran Desain Grafis Menggunakan Lectora Inspire di SMK N 1 Tilatang Kamang', 'Nadia Dinillah', 2516115, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Liza Efriyanti, M.Kom', '2020-04-30', '10:00:00', '12:00:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20207.pdf', 1),
(70, 'Perancangan Local Area Network (LAN) dan Implementasi Netop Vision di Laboratorium Komputer MAN 1 Pasaman', 'Elysa Ramadani', 2516037, 'Hari Antoni Musril, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-30', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20208.pdf', 1),
(71, 'Perancangan Aplikasi E-Modul Pembelajaran Informatika di MTsN 6 Agam', 'Yudhi Permana Putra', 2516151, 'Hari Antoni Musril, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-30', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_20209.pdf', 1),
(72, 'Perancangan Video Tutorial Augmented Reality Mata Pelajaran PDV di SMK Muhammadiyah Bukittinggi', 'Muhammad Jihad', 2516065, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-30', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_202010.pdf', 1),
(73, 'Perancangan Media Pembelajaran 3D Berbasis Augmented Reality Pengenalan Organ Tubuh Manusia Untuk Kelas IV SDN 07 Nan Limo Hilir', 'Rahmat Hidayat', 2516172, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-30', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Kamis_30_April_202011.pdf', 1),
(74, 'Perancangan Sistem Informasi Kumpulan Judul Skripsi di Program Studi Pendidikan Matematika IAIN Bukittinggi', 'Arif Kurniawan', 2516178, 'Hari Antoni Musril, M.Kom', 'Dr. Supriadi, M.Pd', 'Liza Efriyanti, M.Kom', '2020-05-20', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Proposal_20_Mei.pdf', 1),
(75, 'Penerapan Media Pembelajaran Bahan Ajar Digital Untuk Meningkatkan Hasil Belajar Siswa Pada Mata Pelajaran TIK di MTS TI Canduang', 'Nurhayati Agustin', 2516164, 'Liza Efriyanti, M.Kom', 'Dr. Supriadi, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-05-20', '13:30:00', '15:30:00', 'Online', 10, 'Jadwal_Seminar_Proposal_20_Mei1.pdf', 0),
(77, 'Perancangan Aplikasi Penghitungan Angka Kredit Kegiatan Mahasiswa IAIN Bukittinggi Berbasis Android Menggunakan Bahasa Pemograman Java', 'Rahmadhani', 2516016, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '08:00:00', '12:00:00', 'Online', 10, '', 1),
(78, 'Perancangan E-Tracer Alumni dengan Menggunakan Pendekatan Metode Agile Studi Kasus Alumni MAN 1 Solok', 'Loren Anjelina', 2516001, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '08:00:00', '12:00:00', 'Online', 10, '', 1),
(79, 'Perancangan Sisfo Bursa Kerja Alumni Berbasis Web dengan PHP MySQL di SMK Cendana Padang Panjang', 'Nursakiyah', 2516011, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Hari Antoni Musril, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '08:00:00', '12:00:00', 'Online', 10, '', 1),
(80, 'Desain Mobile Learning Pada Mata Pelajaran Bahasa Inggris di SMAN 1 Ampek Angkek', 'Fitri Handayani', 2516086, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '08:00:00', '12:00:00', 'Online', 10, '', 1),
(81, 'Perancangan Agenda Harian Untuk Prodi PTIK IAIN Bukittinggi', 'Sepra Dewita', 2516033, 'Hari Antoni Musril, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '08:00:00', '12:00:00', 'Online', 10, '', 1),
(82, 'Perancangan Video Tutorial Penggunaan Komputer untuk Tenaga Pendidik dengan Menggunakan Aplikasi Corel Video Studio', 'Mira Sartika', 2516066, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '13:00:00', '16:00:00', 'Online', 10, '', 1),
(83, 'Perancangan Aplikasi Ulangan Harian Berbasis Komputer di MTsN Padang Panjang', 'Eni Elfina', 2516108, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '13:00:00', '16:00:00', 'Online', 10, '', 1),
(84, 'Perancangan Aplikasi Mobile Penyetoran Ayat untuk Mahasiswa Berbasis Android', 'Wiwit Putriana Sari', 2516004, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '13:00:00', '16:00:00', 'Online', 10, '', 1),
(85, 'Perancangan Aplikasi Agenda Berbasis Android dengan Fitur Push Notification dan Reminder', 'Resi Refita', 2516017, 'Riri Okra, M.Kom', 'Liza Efriyanti, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-09', '13:00:00', '16:00:00', 'Online', 10, '', 1),
(86, 'Efektivitas Penggunaan Media Pembelajaran Audio Visual untuk Meningkatkan Hasil Belajar Siswa pada Mata Pelajaran Bahasa Arab', 'Riza Piska', 2516038, 'Sarwo Derta, M.Kom', 'Liza Efriyanti, M.Kom', 'Riri Okra, M.Kom', '2020-04-09', '13:00:00', '16:00:00', 'Online', 10, '', 1),
(87, 'Perancangan Sistem Pengambilan Keputusan Pemilihan Dokter Kecil di SDN 11 Payakumbuh', 'Sherli Maharani Bestari', 2516060, 'Liza Efriyanti, M.Kom', 'Dr. Supriadi, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-14', '13:30:00', '15:30:00', 'Online', 10, '', 1),
(88, 'Sistem Pendukung Keputusan Seleksi Awal Calon Peserta Olimpiade Fisika dengan Menggunakan Metode AHP di SMAN 1 IV Koto', 'Agra Fanela', 2516003, 'Liza Efriyanti, M.Kom', 'Dr. Supriadi, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-14', '13:30:00', '15:30:00', 'Online', 10, '', 1),
(89, 'Perancangan Sistem Informasi Penerimaan Tamu di SMK Pembangunan', 'Mesi Lestari', 2516035, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-15', '08:00:00', '10:00:00', 'Online', 10, '', 1),
(90, 'Aplikasi Kehadiran Siswa Menggunakan QR Code Berbasis Mobile di SMK Genus Bukittinggi', 'Yeni Prastini', 2516061, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-15', '08:00:00', '10:00:00', 'Online', 10, '', 1),
(91, 'Perancangan Aplikasi Pembelajaran Bahasa Isyarat Bagi Penyandang Tuna Rungu Berbasis Android dengan Metode BISINDO di SLBN 1 Kecamatan Harau', 'Syarah Zulfarita', 2516085, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-15', '08:00:00', '10:00:00', 'Online', 10, '', 1),
(92, 'Pengembangan Aplikasi Mobile learning Pada Mata Pelajaran Bimbingan Konseling Teknologi Informasi Komunikasi (BK TIK) di SMAN 3 Bukittinggi', 'Rahmi Burnawati', 2516128, 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Sarwo Derta, M.Kom', '2020-04-15', '08:00:00', '10:00:00', 'Online', 10, '', 1),
(93, 'Perancangan Media Pembelajaran Berbasis Aplikasi Lectora Inspire untuk Mata Kuliah Bahasa Indonesia di IAIN Bukittinggi', 'Siti Fatimah Nasution', 2516064, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1),
(94, 'Desain Media Pembelajaran tentang Khulafaur Rasyidin Berbasis Android di MTI Candung', 'Amrizal', 2516096, 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', 'Hari Antoni Musril, M.Kom', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1),
(95, 'Perancangan Media Pembelajaran Fisika di Jurusan Teknik Komputer dan Jaringan SMK Negeri 1 Tanjung Raya', 'M. Ikhbal', 2516045, 'Hari Antoni Musril, M.Kom', 'Dr. Zulfani Sesmiarni, M.Pd', 'Dr. Supriadi, M.Pd', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1),
(96, 'Perancangan Program Aplikasi Pemberian Reward and Punishment Berbasis Android di SMKN 1 Baso', 'Delsi Indriani', 2516101, 'Riri Okra, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1),
(97, 'Perancangan Notifikasi Jadwal Mengajar Guru Berbasis Android di SMKN 1 Baso', 'Nurfadillah Oktaviani', 2516110, 'Riri Okra, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Sarwo Derta, M.Kom', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1),
(98, 'Aplikasi Try Out Ujian Sekolah Berbasis Smartphone', 'M. Irsyad', 2516112, 'Sarwo Derta, M.Kom', 'Dr. Supratman Zakir, M.Pd, M.Kom', 'Riri Okra, M.Kom', '2020-04-15', '10:00:00', '12:00:00', 'Online', 10, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_user`
--

CREATE TABLE `jadwal_user` (
  `id` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_user`
--

INSERT INTO `jadwal_user` (`id`, `id_jadwal`, `id_user`, `status`, `date_created`) VALUES
(36, 75, 5, 1, '2020-06-26 15:10:35'),
(37, 74, 13, 0, '2020-06-28 13:24:49'),
(38, 62, 13, 0, '2020-06-28 13:25:38'),
(39, 63, 13, 0, '2020-06-28 13:25:51'),
(40, 74, 15, 0, '2020-06-28 17:09:12'),
(41, 66, 12, 0, '2020-06-28 18:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `nim` varchar(7) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `nim`, `email`, `image`, `password`, `role_id`, `is_active`, `date`) VALUES
(1, 'Admin', '-', 'admin@gmail.com', 'Logo_iain_png1.png', '$2y$10$kYxHzqaQ/NDKUiqEmM2Mj.R3piJ9dHqb36Fx2vtXYcg4uMG3UxXca', 1, 1, '2020-06-07 23:32:43'),
(2, 'Muslimah', '2516027', 'muslimah@gmail.com', 'logo3.png', '$2y$10$Rrgfvv0O/bzfW6d6.t/AauZ04D/PvuNY0/owi0ihBerDlSe/FOKyC', 2, 1, '2020-05-27 10:14:24'),
(4, 'Muhammad Ilyas', '3212023', 'ilyas@gmail.com', 'default.jpg', '$2y$10$ZpF2rGu0EHW/mo3iso6CcuJLdq6U7sY/SVomzx3pX0I8jTTsgehNW', 2, 1, '2020-05-29 12:41:26'),
(5, 'Muhammad Risqi Darmawan', '2516026', 'mrisqid@gmail.com', 'logo21.png', '$2y$10$CkhF7CrUux.xIKf8Qz9iUe5VRwmzfach.JrX2S9irZZoZ6ZoxgBre', 2, 1, '2020-06-07 03:03:14'),
(6, 'Darmansyah', '2516107', 'Darmansyah.oct@gmail.com', 'default.jpg', '$2y$10$tLVXivty7Bd4jz6Scxa3setvmE7v7YmiwuLobh6nhjtfxSzciK7PC', 2, 1, '2020-06-07 10:25:16'),
(13, 'Citra Widya Herawati', '2516029', 'citrawidyah@gmail.com', 'default.jpg', '$2y$10$UVQeconZOfSCmzB94H70JuppnZ37HUvBQbaQevEFQ2dlAD1R2cYSi', 2, 1, '2020-06-28 01:52:39'),
(11, 'Admin', '0000000', 'kuynostalgia@gmail.com', 'default.jpg', '$2y$10$sFvcfeQJjXvVWBt/WjpcNeOKaHV3xoMkAocSLXW2yh3Bl.nGg1ZT6', 2, 1, '2020-06-27 08:56:05'),
(10, 'Thomas Gunawan', '2517016', 'tgunawan811@gmail.com', 'logo.png', '$2y$10$so60GCYemTjSy2vkozEPt.3/TkrAgEj7syqsaRJHiP8UClGULRHpa', 2, 1, '2020-06-25 12:07:14'),
(9, 'Suci rhd', '2516080', 'sucirahmadani080srd@gmail.com', 'default.jpg', '$2y$10$tySYUYwDlXRDtY5wgu2tG.1LGoDTaKw.74Z7IwH7B4IQvApt9xGE6', 2, 1, '2020-06-08 22:00:15'),
(12, 'ISKANDAR', '2516052', 'iskandar@gmail.com', 'default.jpg', '$2y$10$c6//gG4vUjqg/EKvyee3se1IorOLLD6.1NjV6z5FpntL72Bws3OVG', 2, 1, '2020-06-27 16:23:52'),
(14, 'roma rio', '2516177', 'romakerens@gmail.com', 'default.jpg', '$2y$10$YBko6RJxdm7gPEpRT1SQDOBSci76qoCAdNpr6ZNC1M5ittPJcpeZ.', 2, 1, '2020-06-28 16:25:46'),
(15, 'Widya Wahyuni', '2516049', 'widyawahyuni1997@gmail.com', 'default.jpg', '$2y$10$uBjQQCpron6p19sCxP/NiOuZmP8WeUXTdTf2IpOHQA7jYGv3Junk2', 2, 1, '2020-06-28 17:03:02'),
(16, 'DENI PUTRI NINGSIH', '2516048', 'ningsih.deniputri@yahoo.co.id', 'default.jpg', '$2y$10$p1LxilqbcCLKQ1ddTxQJ2ertyvqyYOit5EHvVY/.05f60THosONXO', 2, 1, '2020-06-28 18:31:20'),
(17, 'Widia Ramadhani', '2516104', 'widiaramadhani131@gmail.com', 'widia5.jpg', '$2y$10$ndMyCHSeGTj0YTdQsNa6ne94g.AUPnGJ.5af4GMiqJD6zDas6Ztlq', 2, 1, '2020-06-28 23:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal_user`
--
ALTER TABLE `jadwal_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `jadwal_user`
--
ALTER TABLE `jadwal_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
