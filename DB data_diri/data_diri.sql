-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2021 pada 01.18
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_diri`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_about`, `nama`, `profile`, `email`, `phone`) VALUES
(1, 'Agus Permadi', 'Full Stack developer1', 'agsperr@gmail.com', '0819923456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nama_pengunjung` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_contact`, `nama_pengunjung`, `email`, `subject`, `message`) VALUES
(3, 'suradi', 'bastian@gmail.com', 'report', 'halo apakabar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id_pekerjaan`, `nama_pekerjaan`, `nama_perusahaan`, `thn_masuk`, `thn_keluar`) VALUES
(1, 'Sales Marketing', 'PT. Bintang Toedjoe , Jakarta Barat', 2016, 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan1`
--

CREATE TABLE `pekerjaan1` (
  `id_pekerjaan` int(11) NOT NULL,
  `nama_pekerjaan` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_keluar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerjaan1`
--

INSERT INTO `pekerjaan1` (`id_pekerjaan`, `nama_pekerjaan`, `nama_perusahaan`, `thn_masuk`, `thn_keluar`) VALUES
(1, 'Marchandise', 'PT. Indomarco Prismatama', 2018, 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sd`
--

CREATE TABLE `tb_sd` (
  `id_sd` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sd`
--

INSERT INTO `tb_sd` (`id_sd`, `nama`, `alamat`, `thn_masuk`, `thn_lulus`) VALUES
(1, 'SDN Kramat 2 Kota Cirebon', 'Jl. Raya Klayan No 666. Kec Gunung Jati Kab Cirebon', 2004, 2010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_sma`
--

CREATE TABLE `tb_sma` (
  `id_sma` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_sma`
--

INSERT INTO `tb_sma` (`id_sma`, `nama`, `alamat`, `thn_masuk`, `thn_lulus`) VALUES
(1, 'SMK Gracika Kota Cirebon ', 'Jl, Perjuangan No 76', 2013, 2016);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_smp`
--

CREATE TABLE `tb_smp` (
  `id_smp` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_lulus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_smp`
--

INSERT INTO `tb_smp` (`id_smp`, `nama`, `alamat`, `thn_masuk`, `thn_lulus`) VALUES
(1, 'SMPN 13 Kota Cirebon', 'Jl. Merdeka No 1', 2010, 2013);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_univ`
--

CREATE TABLE `tb_univ` (
  `id_univ` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `thn_masuk` int(11) NOT NULL,
  `thn_lulus` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_univ`
--

INSERT INTO `tb_univ` (`id_univ`, `nama`, `alamat`, `prodi`, `thn_masuk`, `thn_lulus`) VALUES
(1, 'UNIVERSITAS CATUR INSAN CENDIKIA', 'Jl. Kesambi No 202', 'Sistem Informasi', 2019, 'Belum Lulus');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  ADD PRIMARY KEY (`id_pekerjaan`);

--
-- Indeks untuk tabel `tb_sd`
--
ALTER TABLE `tb_sd`
  ADD PRIMARY KEY (`id_sd`);

--
-- Indeks untuk tabel `tb_sma`
--
ALTER TABLE `tb_sma`
  ADD PRIMARY KEY (`id_sma`);

--
-- Indeks untuk tabel `tb_smp`
--
ALTER TABLE `tb_smp`
  ADD PRIMARY KEY (`id_smp`);

--
-- Indeks untuk tabel `tb_univ`
--
ALTER TABLE `tb_univ`
  ADD PRIMARY KEY (`id_univ`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan1`
--
ALTER TABLE `pekerjaan1`
  MODIFY `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sd`
--
ALTER TABLE `tb_sd`
  MODIFY `id_sd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_sma`
--
ALTER TABLE `tb_sma`
  MODIFY `id_sma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_smp`
--
ALTER TABLE `tb_smp`
  MODIFY `id_smp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_univ`
--
ALTER TABLE `tb_univ`
  MODIFY `id_univ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
