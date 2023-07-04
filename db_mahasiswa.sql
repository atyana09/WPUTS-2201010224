-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Jul 2023 pada 11.45
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbmhs`
--

CREATE TABLE `tbmhs` (
  `id` int NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nim` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prodi` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jeniskelamin` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `idmhs` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbmhs`
--

INSERT INTO `tbmhs` (`id`, `nama`, `nim`, `prodi`, `jeniskelamin`, `tgl_lahir`, `idmhs`) VALUES
(3, 'I MADE ATYAN', '2201010224', 'TI-MDI', 'LAKI-LAKI', '2023-05-19', '9e4a36fa7f07883876b406b734df7238'),
(6, 'YOGA', '2201010238', 'TI-MDI', 'LAKI-LAKI', '2003-06-12', '2019c11a478c4dfd042910d76efe7db3'),
(7, 'RADITYA', '2201010456', 'TI-MDI', 'LAKI-LAKI', '2004-05-05', '083b9d11a60d7aeecc481dbc52b1e10e');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int NOT NULL,
  `nama` varchar(35) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `username` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `passkey` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `iduser` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id`, `nama`, `email`, `username`, `passkey`, `iduser`) VALUES
(1, 'atyana ', 'atyana@gmail.com', 'atyana', '1234567', '807659cd883fc0a63f6ce615893b3558');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbmhs`
--
ALTER TABLE `tbmhs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
