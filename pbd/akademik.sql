-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Bulan Mei 2019 pada 03.31
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `username`, `password`) VALUES
(1, 'ekowin', 'ekowin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dt_prodi`
--

CREATE TABLE `dt_prodi` (
  `idprodi` int(4) NOT NULL,
  `kdprodi` varchar(6) NOT NULL,
  `nmprodi` varchar(70) NOT NULL,
  `akreditasi` enum('A','B','C','-') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dt_prodi`
--

INSERT INTO `dt_prodi` (`idprodi`, `kdprodi`, `nmprodi`, `akreditasi`) VALUES
(332, '3', 'Manajemen Infromatika', 'B'),
(333, 'C', 'C', 'C'),
(334, '2', 'A', 'B'),
(335, '4', 'D', 'B'),
(336, '8', 'E', 'B'),
(337, '02', 'akutansi', 'B');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `username`, `password`) VALUES
(1, 'macek', 'macek'),
(2, 'aulia', 'aulia'),
(3, 'shinta', 'shinta'),
(4, 'ongki', 'ongki'),
(5, 'tika', 'tika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabeldosen`
--

CREATE TABLE `tabeldosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `prodi` varchar(64) NOT NULL,
  `nip` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabeldosen`
--

INSERT INTO `tabeldosen` (`id`, `nama`, `prodi`, `nip`, `gambar`) VALUES
(6, 'Dewi Kania W', 'Manajemen Informatika', '10009990121', '5cb3d34f20c15.jpg'),
(10, 'Eko Win Kenali', 'Manajemen Informatika', '188888', '5cb4013519efa.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelmahasiswa`
--

CREATE TABLE `tabelmahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `npm` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `prodi` varchar(64) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabelmahasiswa`
--

INSERT INTO `tabelmahasiswa` (`id`, `nama`, `npm`, `email`, `prodi`, `gambar`) VALUES
(6, 'Made Slimacek', '17753043', 'madeslimacek2@gmail.com', 'Manajemen Informatika', '5cb40042529f6.jpg'),
(7, 'dqdq', 'dwqdqwd', 'qwdwqdqw', 'dqdq', '5cb3fe829305c.jpg'),
(8, 'ongki alexander', '17753047', 'ongki.alexander97@gmail.com', 'Manajemen Informatika', '5cc6565982218.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('admin', 'admin', 'admin'),
('aul', 'aul', 'mahasiswa'),
('ekowin', 'ekowin', 'dosen'),
('macek', 'macek', 'admin'),
('ongki', 'ongki', 'mahasiswa'),
('shinta', 'shinta', 'mahasiswa'),
('tika', 'tika', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dt_prodi`
--
ALTER TABLE `dt_prodi`
  ADD PRIMARY KEY (`idprodi`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabeldosen`
--
ALTER TABLE `tabeldosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabelmahasiswa`
--
ALTER TABLE `tabelmahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dt_prodi`
--
ALTER TABLE `dt_prodi`
  MODIFY `idprodi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabeldosen`
--
ALTER TABLE `tabeldosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabelmahasiswa`
--
ALTER TABLE `tabelmahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
