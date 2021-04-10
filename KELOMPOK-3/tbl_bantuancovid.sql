-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2021 pada 16.22
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_bantuan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bantuancovid`
--

CREATE TABLE `tbl_bantuancovid` (
  `id` int(11) NOT NULL,
  `jenis_alokasi` varchar(100) NOT NULL,
  `jumlah_transaksi` varchar(100) NOT NULL,
  `jumlah_dana` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nomor_hape` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_bantuancovid`
--

INSERT INTO `tbl_bantuancovid` (`id`, `jenis_alokasi`, `jumlah_transaksi`, `jumlah_dana`, `nama_lengkap`, `nomor_hape`, `email`) VALUES
(23, 'Kuota Mahasiswa', '10', '500000', 'DWI YANNUR ALKAHFI', '0884848', 'khafi@gmail.com'),
(24, 'Hand Sanitizer', '25', '500.000', 'Putri Indah Lestari', '08953318485', 'putri@gmail.com'),
(25, 'Hand Sanitizer', '1000', '800000000000', 'AJI KURNIA', '088888888', 'aji@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bantuancovid`
--
ALTER TABLE `tbl_bantuancovid`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bantuancovid`
--
ALTER TABLE `tbl_bantuancovid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
