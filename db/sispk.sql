-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Agu 2021 pada 15.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'andre', '12345', 'andre'),
(2, 'admin', 'e', 'admin'),
(4, 'bejo', 'banget', 'bejobanget');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `kdGejala` int(10) NOT NULL,
  `kdPenyakit` int(10) NOT NULL,
  `nmGejala` varchar(100) NOT NULL,
  `mb` varchar(10) NOT NULL,
  `md` varchar(10) NOT NULL,
  `pakar` varchar(10) NOT NULL,
  `cf` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`kdGejala`, `kdPenyakit`, `nmGejala`, `mb`, `md`, `pakar`, `cf`) VALUES
(1, 1, 'Terdapat bekas gigitan', '0.8', '0.02', '0.78', '0.72'),
(2, 1, 'Bibit hilang dimakan usia muda', '0.74', '0.01', '0.73', '0.72'),
(3, 2, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.79'),
(4, 2, 'Daun Menggulung', '0.7', '0.02', '0.68', '0.79'),
(5, 2, 'Pertumbuhan bibit terlambat', '0.8', '0.04', '0.76', '0.79'),
(6, 3, ' Buah warna coklat dan tidak enak', '0.8', '0.05', '0.75', '0.64'),
(7, 3, 'Buah tidak terisi atau kosong', '0.8', '0.02', '0.78', '0.64'),
(8, 4, 'Tanaman seperti terbakar', '0.8', '0.04', '0.76', '0.74'),
(9, 4, 'Tanaman dan daun mengering', '0.8', '0.02', '0.78', '0.74'),
(10, 4, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.74'),
(12, 5, 'Jika dicabut di dalam batang terdapat ulat pengger', '0.8', '0.01', '0.79', '0.83'),
(14, 7, 'Menyerang malai dan biji menjadi coklat', '0.8', '0.00', '0.80', '0.87'),
(15, 7, 'Terjadi busuk leher', '0.8', '0.01', '0.79', '0.87'),
(16, 7, 'Kaluar sudah luas bercak terlihat coklat', '0.7', '0.02', '0.68', '0.87'),
(17, 7, 'Menyerang daun dan pelapah', '0.8', '0.02', '0.78', '0.87'),
(18, 9, 'Daun terkulai', '0.8', '0.01', '0.79', '0.88'),
(19, 9, 'Menyerang malai dan biji menjadi coklat', '0.8', '0.00', '0.80', '0.88'),
(20, 9, 'Akar membusuk', '0.84', '0.02', '0.82', '0.88'),
(21, 10, 'Adanya tanaman padi yang roboh', '0.75', '0.02', '0.73', '0.73'),
(22, 10, 'Ditengah sawah tidak ada tanaman', '0.75', '0.08', '0.67', '0.73'),
(23, 10, 'Terdapat bekas gigitan', '0.8', '0.02', '0.78', '0.73'),
(24, 3, 'Bulir padi berbintik-bintik hitam', '0.8', '0.01', '0.79', '0.64'),
(25, 3, 'Buah padi memiliki noda bekas isapan', '0.8', '0.01', '0.79', '0.64'),
(26, 11, 'Menyerang semua bagian tanaman ', '0.83', '0.02', '0.81', '0.90'),
(27, 11, 'Pertumbuhan tanaman kurang sempurna', '0.8', '0.03', '0.77', '0.90'),
(28, 11, 'Jumlah anakan berkurang', '0.75', '0.03', '0.72', '0.90'),
(29, 11, 'Pembungaan tertunda', '0.7', '0.04', '0.66', '0.90'),
(30, 13, 'Pertumbuhan tanaman kurang sempurna', '0.8', '0.03', '0.77', '0.78'),
(31, 13, 'Pada batang terdapat bekas tusukan', '0.78', '0.02', '0.76', '0.78'),
(32, 13, 'Buah padi memiliki noda bekas isapan', '0.8', '0.01', '0.79', '0.78'),
(33, 11, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.90'),
(34, 4, 'Buah tidak terisi atau kosong', '0.8', '0.02', '0.78', '0.74'),
(35, 5, ' Tanaman layu dan mati', '0.76', '0.01', '0.75', '0.83'),
(36, 5, 'Menyerang batang dan pelapah daun', '0.8', '0.01', '0.79', '0.83'),
(37, 6, 'Menyerang daun dan titik tumbuh', '0.76', '0.01', '0.75', '0.89'),
(38, 6, 'Terdapat garis-garis pada tulang daun', '0.8', '0.01', '0.79', '0.89'),
(39, 6, 'Garis melepuh dan berisi cairan kehitaman', '0.86', '0.02', '0.84', '0.89'),
(41, 10, 'Bibit hilang dimakan usia muda', '0.74', '0.01', '0.68', '0,73'),
(42, 1, 'Pada batang terdapat telur', '0.7', '0.02', '0.68', '0.72'),
(43, 2, 'Terdapat warna putih pada daun padi', '0.8', '0.02', '0.78', '0.79'),
(44, 18, 'Pelepah daun berwarna keperakan', '0.78', '0.01', '0.77', '0.75'),
(45, 18, 'Gagal membuahkan malai', '0.8', '0.01', '0.79', '0.75'),
(46, 18, 'Daun Menggulung', '0.7', '0.02', '0.68', '0.75'),
(47, 18, 'Tanaman layu dan mati', '0.76', '0.01', '0.75', '0.75'),
(48, 17, 'Jumlah anakan berkurang', '0.75', '0.03', '0.72', '0.80'),
(49, 17, 'Pertumbuhan tanaman kurang sempurna', '0.8', '0.03', '0.77', '0.80'),
(50, 12, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.82'),
(51, 12, 'Terlihat seperti rumput', '0.8', '0.02', '0.78', '0.82'),
(52, 12, 'Bercak-bercak gelap pada daun', '0.8', '0.01', '0.79', '0.82'),
(53, 17, 'Tanaman layu dan mati', '0.76', '0.01', '0.75', '0.80'),
(54, 8, 'Menyerang daun dan pelapah', '0.8', '0.02', '0.78', '0.86'),
(55, 8, 'Terjadi busuk leher', '0.8', '0.01', '0.79', '0.86'),
(56, 8, 'Menyerang malai dan biji menjadi coklat', '0.8', '0.00', '0.80', '0.86'),
(57, 8, 'Buah tidak terisi atau kosong', '0.8', '0.02', '0.78', '0.86'),
(58, 5, 'Buah tidak terisi atau kosong', '0.8', '0.02', '0.78', '0.83'),
(59, 5, 'Tanaman dan daun mengering', '0.8', '0.02', '0.78', '0.83'),
(60, 9, 'Tanaman layu dan mati', '0.76', '0.01', '0.75', '0.88'),
(61, 9, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.88'),
(62, 6, 'Tanaman dan daun mengering', '0.8', '0.02', '0.78', '0.89'),
(63, 14, 'Pertumbuhan tanaman kurang sempurna', '0.8', '0.03', '0.77', '0.79'),
(64, 7, 'Terdapat bercak yang berbentuk ketupat', '0.76', '0.01', '0.75', '0.87'),
(65, 14, 'Bulir membentuk bola spora di malai', '0.8', '0.02', '0.78', '0.79'),
(66, 14, 'Pembungaan tertunda', '0.7', '0.04', '0.76', '0.79'),
(67, 15, 'Biji Berserakan', '0.76', '0.02', '0.74', '0.78'),
(68, 15, 'Tangkai Patah', '0.8', '0.03', '0.77', '0.78'),
(69, 16, 'Bercak-bercak gelap pada daun', '0.8', '0.01', '0.79', '0.80'),
(70, 16, 'Kaluar sudah luas bercak terlihat coklat', '0.7', '0.02', '0.68', '0.80'),
(71, 16, 'Tanaman layu dan mati', '0.76', '0.01', '0.75', '0.80'),
(72, 16, 'Daun yang muncul menguning', '0.8', '0.03', '0.77', '0.80'),
(73, 19, 'Gagal membuahkan malai', '0.8', '0.01', '0.79', '0.82'),
(74, 19, 'Daun berwarna hijau gelap dan bergerigi', '0.83', '0.01', '0.81', '0.82'),
(75, 19, 'Malai tidak keluar, keluar sebagian', '0.83', '0.02', '0.82', '0.82'),
(76, 20, 'Adanya tanaman padi yang roboh', '0.75', '0.02', '0.73', '0.84'),
(77, 20, 'Gagal membuahkan malai', '0.8', '0.01', '0.79', '0.84'),
(78, 20, 'Menyerang batang dan pelapah daun', '0.8', '0.01', '0.79', '0.84'),
(79, 16, 'Daun terdapat bintik-bintik coklat ', '0.8', '0.01', '0.79', '0.80'),
(80, 14, 'Menyerang malai dan biji menjadi coklat', '0.8', '0.00', '0.80', '0.79'),
(81, 17, 'Pembungaan tertunda', '0.7', '0.04', '0.66', '0.80'),
(82, 12, 'Menyerang semua bagian tanaman', '0.83', '0.02', '0.81', '0.82'),
(111, 78, 'fsfsaf', '100', '50', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` int(10) NOT NULL,
  `nmPenyakit` varchar(150) NOT NULL,
  `persentase` varchar(15) NOT NULL,
  `data` text NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`id`, `nmPenyakit`, `persentase`, `data`, `tanggal`) VALUES
(191, 'Keong Mas', '89.3848559616', '[{\"kdGejala\":\"1\",\"kdPenyakit\":\"1\",\"nmGejala\":\"Terdapat bekas gigitan\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.72\",\"cek\":\"\",\"mb1\":\"0.4\",\"total\":\"2\",\"cfKombinasi\":\"0.5616\"},{\"kdGejala\":\"2\",\"kdPenyakit\":\"1\",\"nmGejala\":\"Bibit hilang dimakan usia muda\",\"mb\":\"0.74\",\"md\":\"0.01\",\"pakar\":\"0.73\",\"cf\":\"0.72\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.5256\"},{\"kdGejala\":\"42\",\"kdPenyakit\":\"1\",\"nmGejala\":\"Pada batang terdapat telur\",\"mb\":\"0.7\",\"md\":\"0.02\",\"pakar\":\"0.68\",\"cf\":\"0.72\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"1\",\"cfKombinasi\":\"0.48960000000000004\"}]', '2021-07-11 08:50:49'),
(192, 'Blast', '99.566401391679', '[{\"kdGejala\":\"17\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang daun dan pelapah\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"2\",\"cfKombinasi\":\"0.6786\"},{\"kdGejala\":\"64\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Terdapat bercak yang berbentuk ketupat\",\"mb\":\"0.76\",\"md\":\"0.01\",\"pakar\":\"0.75\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"1\",\"cfKombinasi\":\"0.6525\"},{\"kdGejala\":\"14\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang malai dan biji menjadi coklat\",\"mb\":\"0.8\",\"md\":\"0.00\",\"pakar\":\"0.80\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"4\",\"cfKombinasi\":\"0.6960000000000001\"},{\"kdGejala\":\"15\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Terjadi busuk leher\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.6873\"},{\"kdGejala\":\"16\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Kaluar sudah luas bercak terlihat coklat\",\"mb\":\"0.7\",\"md\":\"0.02\",\"pakar\":\"0.68\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"2\",\"cfKombinasi\":\"0.5916\"}]', '2021-07-11 18:36:30'),
(194, 'Fusarium ', '99.593705658902', '[{\"kdGejala\":\"3\",\"kdPenyakit\":\"2\",\"nmGejala\":\"Daun yang muncul menguning\",\"mb\":\"0.8\",\"md\":\"0.03\",\"pakar\":\"0.77\",\"cf\":\"0.79\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"6\",\"cfKombinasi\":\"0.6083000000000001\"},{\"kdGejala\":\"14\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang malai dan biji menjadi coklat\",\"mb\":\"0.8\",\"md\":\"0.00\",\"pakar\":\"0.80\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"4\",\"cfKombinasi\":\"0.6960000000000001\"},{\"kdGejala\":\"20\",\"kdPenyakit\":\"9\",\"nmGejala\":\"Akar membusuk\",\"mb\":\"0.84\",\"md\":\"0.02\",\"pakar\":\"0.82\",\"cf\":\"0.88\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"1\",\"cfKombinasi\":\"0.7215999999999999\"},{\"kdGejala\":\"18\",\"kdPenyakit\":\"9\",\"nmGejala\":\"Daun terkulai\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.88\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"1\",\"cfKombinasi\":\"0.6952\"},{\"kdGejala\":\"47\",\"kdPenyakit\":\"18\",\"nmGejala\":\"Tanaman layu dan mati\",\"mb\":\"0.76\",\"md\":\"0.01\",\"pakar\":\"0.75\",\"cf\":\"0.75\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"4\",\"cfKombinasi\":\"0.5625\"}]', '2021-07-12 01:05:42'),
(201, 'Keong Mas', '48.96', '[{\"kdGejala\":\"42\",\"kdPenyakit\":\"1\",\"nmGejala\":\"Pada batang terdapat telur\",\"mb\":\"0.7\",\"md\":\"0.02\",\"pakar\":\"0.68\",\"cf\":\"0.72\",\"cek\":\"\",\"mb1\":\"0.4\",\"total\":\"1\",\"cfKombinasi\":\"0.48960000000000004\"}]', '2021-07-12 01:11:38'),
(202, 'Walang Sangit', '50.56', '[{\"kdGejala\":\"25\",\"kdPenyakit\":\"3\",\"nmGejala\":\"Buah padi memiliki noda bekas isapan\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.64\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.5056\"}]', '2021-07-12 01:12:00'),
(203, 'Wereng Coklat', '56.24', '[{\"kdGejala\":\"25\",\"kdPenyakit\":\"3\",\"nmGejala\":\"Buah padi memiliki noda bekas isapan\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.64\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.5056\"},{\"kdGejala\":\"8\",\"kdPenyakit\":\"4\",\"nmGejala\":\"Tanaman seperti terbakar\",\"mb\":\"0.8\",\"md\":\"0.04\",\"pakar\":\"0.76\",\"cf\":\"0.74\",\"cek\":\"\",\"mb1\":\"0.4\",\"total\":\"1\",\"cfKombinasi\":\"0.5624\"}]', '2021-07-12 01:12:27'),
(206, 'Walang Sangit', '75.240448', '[{\"kdGejala\":\"7\",\"kdPenyakit\":\"3\",\"nmGejala\":\"Buah tidak terisi atau kosong\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.64\",\"cek\":\"\",\"mb1\":\"-0.6\",\"total\":\"4\",\"cfKombinasi\":\"0.49920000000000003\"},{\"kdGejala\":\"24\",\"kdPenyakit\":\"3\",\"nmGejala\":\"Bulir padi berbintik-bintik hitam\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.64\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"1\",\"cfKombinasi\":\"0.5056\"}]', '2021-07-12 01:15:30'),
(207, 'Blast', '99.566401391679', '[{\"kdGejala\":\"3\",\"kdPenyakit\":\"2\",\"nmGejala\":\"Daun yang muncul menguning\",\"mb\":\"0.8\",\"md\":\"0.03\",\"pakar\":\"0.77\",\"cf\":\"0.79\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"6\",\"cfKombinasi\":\"0.6083000000000001\"},{\"kdGejala\":\"14\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang malai dan biji menjadi coklat\",\"mb\":\"0.8\",\"md\":\"0.00\",\"pakar\":\"0.80\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"4\",\"cfKombinasi\":\"0.6960000000000001\"},{\"kdGejala\":\"15\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Terjadi busuk leher\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.6873\"},{\"kdGejala\":\"16\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Kaluar sudah luas bercak terlihat coklat\",\"mb\":\"0.7\",\"md\":\"0.02\",\"pakar\":\"0.68\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.5916\"},{\"kdGejala\":\"17\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang daun dan pelapah\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"2\",\"cfKombinasi\":\"0.6786\"},{\"kdGejala\":\"64\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Terdapat bercak yang berbentuk ketupat\",\"mb\":\"0.76\",\"md\":\"0.01\",\"pakar\":\"0.75\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"1\",\"cfKombinasi\":\"0.6525\"}]', '2021-07-15 18:54:08'),
(208, 'Wereng Coklat', '56.24', '[{\"kdGejala\":\"8\",\"kdPenyakit\":\"4\",\"nmGejala\":\"Tanaman seperti terbakar\",\"mb\":\"0.8\",\"md\":\"0.04\",\"pakar\":\"0.76\",\"cf\":\"0.74\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"1\",\"cfKombinasi\":\"0.5624\"}]', '2021-07-18 07:33:50'),
(209, 'Kerdil Rumput', '64.78', '[{\"kdGejala\":\"8\",\"kdPenyakit\":\"4\",\"nmGejala\":\"Tanaman seperti terbakar\",\"mb\":\"0.8\",\"md\":\"0.04\",\"pakar\":\"0.76\",\"cf\":\"0.74\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"1\",\"cfKombinasi\":\"0.5624\"},{\"kdGejala\":\"52\",\"kdPenyakit\":\"12\",\"nmGejala\":\"Bercak-bercak gelap pada daun\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.82\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"2\",\"cfKombinasi\":\"0.6478\"}]', '2021-07-18 07:34:52'),
(210, 'Ganjur', '59.25', '[{\"kdGejala\":\"45\",\"kdPenyakit\":\"18\",\"nmGejala\":\"Gagal membuahkan malai\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.75\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"3\",\"cfKombinasi\":\"0.5925\"}]', '2021-07-18 07:36:19'),
(211, 'Tungro', '72.9', '[{\"kdGejala\":\"26\",\"kdPenyakit\":\"11\",\"nmGejala\":\"Menyerang semua bagian tanaman \",\"mb\":\"0.83\",\"md\":\"0.02\",\"pakar\":\"0.81\",\"cf\":\"0.90\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"1\",\"cfKombinasi\":\"0.7290000000000001\"},{\"kdGejala\":\"65\",\"kdPenyakit\":\"14\",\"nmGejala\":\"Bulir membentuk bola spora di malai\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.79\",\"cek\":\"\",\"mb1\":\"1.0\",\"total\":\"1\",\"cfKombinasi\":\"0.6162000000000001\"}]', '2021-07-18 07:42:12'),
(212, 'Blast', '96.944745888', '[{\"kdGejala\":\"14\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang malai dan biji menjadi coklat\",\"mb\":\"0.8\",\"md\":\"0.00\",\"pakar\":\"0.80\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"4\",\"cfKombinasi\":\"0.6960000000000001\"},{\"kdGejala\":\"15\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Terjadi busuk leher\",\"mb\":\"0.8\",\"md\":\"0.01\",\"pakar\":\"0.79\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.6\",\"total\":\"2\",\"cfKombinasi\":\"0.6873\"},{\"kdGejala\":\"17\",\"kdPenyakit\":\"7\",\"nmGejala\":\"Menyerang daun dan pelapah\",\"mb\":\"0.8\",\"md\":\"0.02\",\"pakar\":\"0.78\",\"cf\":\"0.87\",\"cek\":\"\",\"mb1\":\"0.8\",\"total\":\"2\",\"cfKombinasi\":\"0.6786\"}]', '2021-07-18 07:49:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `kdPenyakit` int(11) NOT NULL,
  `nmPenyakit` varchar(100) NOT NULL,
  `detailPenyakit` text NOT NULL,
  `img` varchar(100) NOT NULL,
  `saran` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`kdPenyakit`, `nmPenyakit`, `detailPenyakit`, `img`, `saran`, `status`) VALUES
(1, 'Keong Mas', 'Pada umumnya keong mas (Pomacea caniculata. L) merupakan salah satu hama utama yang sangat rakus menyerang tanaman padi sawah terutama tanaman padi yang masih muda. ', 'keongmas.jpg', 'Moluskisida yaitu Racun Keong Mas atau moluskisida sintesis tidak dianjurkan digunakan untuk sebelum tanam atau pra tanam karena berspektrum luas, dapat membunuh ikan, cacing, bahkan itik yang memakan keong mas yang mati akibat racun kimia ini, sehingga penggunaannya harus secara hati-hati dan selalu diawasi.', 'Hama'),
(2, 'Ulat Daun', 'Tanaman padi yang terserang hama ini akan mengalami kerusakan pada daun, daun akan berubah warna menjadi kuning, mengulung, dan juga kering.', 'ulat daun.jpeg', 'Pengendalian hama ini dapat dilakukan dengan cara melakukan penyemprotan dengan insektida berbahan aktif.', 'Hama'),
(3, 'Walang Sangit', '(Leptocoriza acuta) walang sangit merupakan hama yang umum merusak bulir padi pada fase pemasakan, fase penumbuhan tanaman padi yang rentan terhadap serangan. walang sangit dari keluarnya malai sampai sampai matang susu. kerusakan yang disebabkan beras berubah warna dan mengapung serta hampa. Ambang ekonomi walang sangit adalah lebih dari satu ekor walang sangit per dua rumpun pada keluar malai sampai fase pembungaan.', 'walang sangit.jpg', '1 kendalikan  gulma di sawah da disekitar pertanaman <br>2. Pupuk lahan secara merata <br>3. Tangkap wlang sangit menggunakan jaring sebelum pembungaan', 'Hama'),
(4, 'Wereng Coklat', 'Wereng batang coklat (WBT) merupakan hama utama yang menyerang padi sangat membahayakan dan sulit dikendalikan karna: <br>1. Hama prusak tanaman padi kerna menghisap cairan padi secara langsung<br>2. merupakan vektor penularan penyakit kerdil rumput dan hampa', 'wereng coklat.jpg', '1. Gunakan peretas tahan wereng coklat <br>2. Berikan pupuk K untuk mengurangi kerusakan <br>3. Monitor peertanaman paling lambat 2 minggu sekali', 'Hama'),
(5, 'Pengerek Batang', 'Pengerek batang padi merupakan hama yang tergolong pengganggu utama. Hama ini menyerang tanaman padi pada semua fase pertumbuhan tanaman mulai dari persemaian hingga menjelang panen.', 'pengerek batang.png', 'Menggunakan Varitas tahan, meningkatkan kebersihan lingkungan, menggenangi sawah selama 15 hari setelah panen agar kepompong mati, membakar jerami 2. menggunakan BVR dan PESTONA', 'Hama'),
(6, 'Hawar Daun Bakteri', 'Bakteri Xanthomonas campestris pv oryzae merupakan bakteri yang tersebar luas dan dapat menurunkan hasil panen yang cukup signifikan. penyakit ini menyerang saat musim hujan atau musim kemarau yang basah, terutama pada lahan sawah yang selalu tergenang dan kandungan N tinggi. Penyakit ini menghasilkan dua gejala kresek dan hawar', 'hawar daun bakteri.jpg', 'Menanam varitas tahan penyakit seperti IR 36, IR 46, Cisadane, Cipunegara, menghindari luka mekanis, sinitasi lingkungan. 2. Pengendalian diawal dengan GLIO', 'Penyakit'),
(7, 'Blast', 'Gejala yang ditimbulkan jika tanaman padi terserang penyakit ini adalah daun akan memiliki bercak kuning pada bagian ujung, hingga berwarna kecoklatan dan juga kering pada tanaman.', 'blast.jpg', 'Pengendalian penyakit ini dapat dilakukan dengan cara melakukan pemupukan dengan pupuk nitrogen dengan dosis yang sesuai dan juga dengan cara melakukan penyemprotan menggunakan fungisida berbahan aktif.', 'Penyakit'),
(8, 'Busuk Pelepah Daun', 'Busuk pelepah pada dasarnya ditularkan oleh benih. penyakit ini terutama disebabkan oleh jamur Sarocladium orysae tetapi juga dalam beberapa kasus oleh sarocladium attenuatum. jamur bertahan pada sisa tanaman padi setelah panen dan dapat menyebabkan infeksi pada musim berikutnya', 'busuk pelepah.jpg', '1. Gunakan benih sehat, jika mungkin dari sumber yang bersertifikat<br>2. Gunakan jarak tanam yang lebih lebar 25cm x 25cm.<br>3. Hindari pertanaman tunggal dilahan yang sama, gunakan setidaknya dua varietas.<br>4. berikan pupuk kalium , kalsium sulfat atau seng pada tahap anakan.', 'Penyakit'),
(9, 'Fusarium ', 'Layu fusarium sendiri merupakan penyakit yang disebabkan oleh infeksi jamur patogen Fusarium oxysporum. layu fusarium dapat meneyerang tanaman apa saja seperti cabai, bawang, pisang dan padi. terutama pada musim hujan, pada musim hujan jamur fusarium oxysporum mudah berkembang biak dan mudah menyebar dari tamana satu ke tanaman lainya.', '', '1. sesuaikan pH tanah pada nilai 6,5 - 7,0 da gunakan nitrat sebagai sumber nitrogen.<br>2. tanam varietas yang tangguh jika tersedia di wilayah anda.<br>3. pantau lahan untuk melihat tanda-tanda penyakit.<br>4. ambil dan buang tanaman yang terdapak<br>5. bajak dan bakar sisi tanaman tanaman setelah panen         ', 'Penyakit'),
(10, 'Tikus', 'Hama tikus menyerang tanaman padi dari mulai masih menjadi bibit hingga tanaman memasuki masa pengisian bulir. Tikus aktif menyerang padi pada malam hari dan pada siang hari tikus bersembunyi di lubang pada tanggul irigasi, pematang sawah, pekarangan, semak, atau gulma. Dengan perkembangbiakannya yang sangat cepat, kerusakan yang ditimbulkan tikus akan sangat merugikan. Pada kondisi terparah serangan hama tikus bisa mengakibatkan tanaman padi gagal panen.                ', 'tikus.jpe', 'Salah satu cara yang paling efektif dalam mengendalikan hama tikus adalah dengan memanfaatkan musuh alaminya, yaitu ular              ', 'Hama'),
(11, 'Tungro', 'Tungro penyakit tungro disebabkan oleh dua jenis virus yang berbeda yaitu virus bentuk batang Rice Tungro Baciliform Virus (RTBV) dan virus bentuk bulat Rice Tungro Spherical Virus (RTSV). kedua virus tersebut tidak memiliki kekerabatan menularkan tanaman secara bersamaan. virus tungro hanya di tularkan oleh wereng hijau sebagai vektor.            ', 'Tungro.jpg', '1.gunakan varietas dengan tingkat ketahanan tertentu terhadap vektor<br>2. rotasikan tanaman dengan tanaman non-inang<br>3. Tanam serempak<br> 4. jadawalkan penanaman untuk memastikan pertumuhan yang hampir sinkron di setiap area.', 'Penyakit'),
(12, 'Kerdil Rumput', 'virus ditularkan oleh wereng coklat Nilavarvata (N. lungens, H. bakteri dan N. muiri) baik nimfa dan wereng dewasa berfotensi membaa virus untuk waktu yang lama dan karennya menginfeksi tanaman baru seca terus-menerus dan merambat            ', 'kerdil rumput.jpg', 'sulit dilakukan, usaha pencegahan dengan memusnakan tanaman yang terserang ada pengendalian vektor dengan BVR atau PESTONA                ', 'Penyakit'),
(13, 'Kepik Hijau', 'Kepik hijau nezara viridula dan lembing hijau hama ini merupakan salah satu hama utama pada tanaman kedelai dan bersifat polifag (pemakan segala) mulai dari padi, jagung, tebu, kentang, cabai dan kapas digasak. polong-polongan seperti kacang panjang, buncis dan kedelai. kepij hijau merusak tanaman padi ataupun tanaman lainya dengan cara menghisap bulir atau polong tanaman yang masih muda sehingga menjadi hampa berwarna kehitaman  dan bulir akan membusuk.           ', 'Kepik Hijau.jpg', '1. jalan satu-satunya jika serangan hama kepik hijau sudah tak terkendali adalah dengan menggunakan pestisida<br>2. pantau lahan secara telatur untuk mendeteksi gejala hama<br>3. janagan gunakan insektisida bersekala luas karena dapat berpengruh buruk bagi serangga menguntungkan.                ', 'Hama'),
(14, 'Noda Palsu', 'Noda palsu (False Smut) Jamur dapat merubah bulir padi pada malai menjadi kumpulan spora yang membentuk bola berwarna kuning kehijauan. Awalnya kecil kemudian dengan cepat dapat berkembang hingga garis tengah mencapai 1 cm atau lebih.               ', 'noda palsu.jpg', '1.Gunakan benih sehat dari penjual bersrtifikat<br>gunakan varietas yang tahan yang tersedia<br>3. jaga agar tanggul lahan dan saluran irigasi teta bersih<br>4. gunakan nitrogen secukupnya, dan bagi dalam beberapa kali pemberian.           ', 'Penyakit'),
(15, 'Burung', 'Hama burung sering ditemui di ladang persawahan , burung akan langsung memakan butir padi,Menyerang menjelang panen                 ', 'burung.jpg', 'Mengusir dengan bunyi-bunyian atau orang-orangan sawah                ', 'Hama'),
(16, 'Bercak Daun Coklat', 'Penyakit bercak daun coklat (brown leaf spot) pada anaman padi di sebabkan oleh cendawan helminthosporium oryzae hidup sebagai parasit, perusak kecambah dan buah, serta menimbulkan noda-noda pada duan inang. tanaman yang kurang sehat sangat mudah terserang penyakit ini. pada kondisi tanah yang kahat unsur kalium penyakit bercak coklat dapat menimbulkan kerugian 50 sampai 90 persen.              ', 'bercak.jpg', '1.pengendalian benih di air hangat +POC NASA, pemupukan berimbang, tanam padi tahan penyakit ini<br>2. pastikan pasokan unsur hara seimbang dan pantau unsur hara tanah secara telatur                ', 'Penyakit'),
(17, 'Wereng Hijau', 'Wereng Hijau atau Nephotettix virescens merupakan hama penyebar virus tungro yang menyebabkan penyakit tungro. wereng jenis ini biasanya menetas pada pelepah daun padi dan akan menetas enam hari kemudian, menyukai cairan daun yang mengkibatkan pengeringan pada daun, jumlah anakan berkurang dan kehampaan gabah yang tinggi.               ', 'wereng hijau.jpg', 'penggunaan musuh alami wereng hijau yang bisa digunakan adalah predator, parasitoid dan patogen karna dapat mencegah populasi wereng hijau yaitu: Laba-laba, kumbang karabid, kumbang koksinelid dan kepik mirid                ', 'Hama'),
(18, 'Ganjur', 'Ganjur Orsealia Oryzae merupakan jenis hama pada tanaman padi yang dikenal dengan hama ganjur, hama ini menyerang pada tanaman padi dengan luas yang sempit dan terpencar-pencar.', 'ganjur.jpg', 'perlunya pengematan rutin serangan ganjur dimulai sejak umur 7 hari setelah tanam.', 'Hama'),
(19, 'Kerdil Hampa', 'Virus kerdil hampa rice ragged stunt virus (RRSV) adalah penyakit yang menyerang padi dan juga juga nama bagi pennyebabnya anggota suku reoviridae yang mencangkup segolongan dengan bahan genetik RNA utas ganda.', 'kerdil hampa.jpg', '1.jarak tanam yang tidak terlalu rapat terutama saat musim hujan<br>2. jika perlu gunakan cara tanam sistem legowo<br>3. jangan gunakan area yang berlebihan dengan unsur K           ', 'Penyakit'),
(20, 'Busuk Batang ', 'penyakit busuk batang (Stem rot) pada tanaman padi adalah salahsatu penyakit dari tanaman padi yang menyerang atau menginfeksi bagian batang tanaman. penyakit ini menyebabkan terjadinya kebusukan pada batang sehingga batang tanaman padi mudah roboh atau rebah                ', 'busuk batang.jpg', '1. melakukan penyemprotan dengan menggunakan pestisida jenis fungisida yang berbahan aktir difenokonazol<br>2.lakukan peneglolaan air secara intermiten, jangan terlalu digenang dan sempatkan untuk pengeringanlahan                ', 'Penyakit'),
(78, 'tetster22', '                gdge', '-', '          fdfd      ', 'Penyakit');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`kdGejala`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`kdPenyakit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `kdGejala` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `kdPenyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
