-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 15.02
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pt4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_Name` varchar(50) NOT NULL,
  `last_Name` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `register`
--

INSERT INTO `register` (`id`, `first_Name`, `last_Name`, `tanggal_lahir`, `username`, `password`, `email`) VALUES
(9, 'ryan', 'js', '2023-10-11', 'ryanjsnsyh', '$2y$10$Ii/X3D0km8SCpeilmOG7JOvZmKFNukzWalJYEU2ptTRetdePk.jPu', 'anasfuad50@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skin`
--

CREATE TABLE `skin` (
  `id_senjata` int(11) NOT NULL,
  `nama_senjata` varchar(50) NOT NULL,
  `jenis_senjata` varchar(50) NOT NULL,
  `harga_senjata` int(10) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `skin`
--

INSERT INTO `skin` (`id_senjata`, `nama_senjata`, `jenis_senjata`, `harga_senjata`, `tanggal_rilis`, `gambar`) VALUES
(18, 'Forsaken', 'Vandal', 2700, '2023-03-12', '20231025_083202.jpg'),
(20, 'Reaver ', 'Vandal', 2700, '2023-10-12', '20231025_083143.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `skin`
--
ALTER TABLE `skin`
  ADD PRIMARY KEY (`id_senjata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `skin`
--
ALTER TABLE `skin`
  MODIFY `id_senjata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
