-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Waktu pembuatan: 04 Nov 2022 pada 08.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(50) NOT NULL,
  `NIM` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `NIM`, `Nama`, `Alamat`, `Fakultas`) VALUES
(33, 'h07128723', 'qeq2', 'e2q2', 'FIB'),
(34, 'h07128723', 'qeq2', 'e2q2', 'FIB'),
(35, 'h08321', 'hj', 'nj', 'FMIPA'),
(36, 'sjnk', 'siu', 'jksnkj', 'FKG'),
(37, 'andja', 'dnawkj', 'dwajn', 'FKM'),
(38, 'knjk', 'jabwd', 'dawn', 'FK'),
(39, 'h0712872387y78', 'jhbsbab', 'dawb', 'FK'),
(40, 'najnka', 'sjq', 'suq', 'FIKP'),
(41, 'najnka', 'sjq', 'suq', 'FIKP'),
(42, 'knajd', 'dwandwadawkj', 'daw', 'FH'),
(43, 'dawdj', 'dwand', 'dawd', 'FK'),
(44, 'dawdj', 'dwand', 'dawd', 'FK'),
(45, 'dawdj', 'dwand', 'dawd', 'FK'),
(46, 'dawdj', 'dwand', 'dawd', 'FK'),
(47, 'jsnka', 'dkwndka', 'dwkandkw', 'FH'),
(48, 'jabds', 'dwdj', 'dwada', 'FISIP'),
(49, 'jabds', 'dwdj', 'dwada', 'FISIP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`,`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
