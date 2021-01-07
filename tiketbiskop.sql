-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2021 pada 09.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketbiskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `kursi` varchar(50) NOT NULL,
  `id_kursi` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id_checkout` int(11) NOT NULL,
  `id_booking` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id_checkout`, `id_booking`, `nama`, `nik`, `jumlah_tiket`, `total_harga`) VALUES
(10, 12, 'rianda', 1, 2, 130000),
(11, 14, 'rianda', 1, 2, 130000),
(12, 16, 'rianda', 1, 2, 130000),
(13, 18, 'rianda', 1, 1, 65000),
(14, 19, 'rianda', 1, 2, 130000),
(15, 21, 'rianda', 1, 1, 65000),
(16, 22, 'rianda', 1, 1, 65000),
(17, 23, 'rianda', 1, 1, 65000),
(18, 1, 'rianda', 1, 1, 65000),
(19, 2, 'rianda', 1, 1, 65000),
(20, 5, 'rianda', 1, 2, 130000),
(21, 7, 'rianda', 1, 2, 130000),
(22, 12, 'test', 112, 1, 75000),
(23, 16, 'ricky', 3, 1, 75000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `id_kursi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `studio` varchar(10) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`id_kursi`, `nama`, `status`, `studio`, `waktu`) VALUES
(1, 'A1', 'book', '1', '10:00'),
(2, 'A2', 'ada', '1', '10:00'),
(3, 'A3', 'book', '1', '10:00'),
(4, 'B1', 'ada', '1', '10:00'),
(5, 'B2', 'ada', '1', '10:00'),
(6, 'B3', 'ada', '1', '10:00'),
(7, 'C1', 'ada', '1', '10:00'),
(8, 'C2', 'ada', '1', '10:00'),
(9, 'C3', 'ada', '1', '10:00'),
(10, 'A1', 'book', '2', '10:00'),
(11, 'A2', 'ada', '2', '10:00'),
(12, 'A3', 'book', '2', '10:00'),
(13, 'B1', 'book', '2', '10:00'),
(14, 'B2', 'ada', '2', '10:00'),
(15, 'B3', 'ada', '2', '10:00'),
(16, 'C1', 'book', '2', '10:00'),
(17, 'C2', 'ada', '2', '10:00'),
(18, 'C3', 'ada', '2', '10:00'),
(19, 'A1', 'ada', '3', '10:00'),
(20, 'A2', 'ada', '3', '10:00'),
(21, 'A3', 'ada', '3', '10:00'),
(22, 'B1', 'ada', '3', '10:00'),
(23, 'B2', 'ada', '3', '10:00'),
(24, 'B3', 'ada', '3', '10:00'),
(25, 'C1', 'ada', '3', '10:00'),
(26, 'C2', 'ada', '3', '10:00'),
(27, 'C3', 'ada', '3', '10:00'),
(28, 'A1', 'ada', '1', '19:00'),
(30, 'A2', 'ada', '1', '19:00'),
(31, 'A3', 'ada', '1', '19:00'),
(32, 'B1', 'ada', '1', '19:00'),
(33, 'B2', 'ada', '1', '19:00'),
(34, 'B3', 'ada', '1', '19:00'),
(35, 'C1', 'ada', '1', '19:00'),
(36, 'C2', 'ada', '1', '19:00'),
(37, 'C3', 'ada', '1', '19:00'),
(46, 'A1', 'ada', '2', '19:00'),
(47, 'A2', 'ada', '2', '19:00'),
(48, 'A3', 'ada', '2', '19:00'),
(49, 'B1', 'ada', '2', '19:00'),
(50, 'B2', 'ada', '2', '19:00'),
(51, 'B3', 'ada', '2', '19:00'),
(52, 'C1', 'ada', '2', '19:00'),
(53, 'C2', 'ada', '2', '19:00'),
(54, 'C3', 'ada', '2', '19:00'),
(64, 'A1', 'ada', '3', '19:00'),
(65, 'A2', 'ada', '3', '19:00'),
(66, 'A3', 'ada', '3', '19:00'),
(67, 'B1', 'ada', '3', '19:00'),
(68, 'B2', 'ada', '3', '19:00'),
(69, 'B3', 'ada', '3', '19:00'),
(70, 'C1', 'ada', '3', '19:00'),
(71, 'C2', 'ada', '3', '19:00'),
(72, 'C3', 'ada', '3', '19:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_checkout` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `studio` varchar(50) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kd_tiket` int(11) NOT NULL,
  `foto_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_checkout`, `judul`, `waktu`, `studio`, `jumlah_kursi`, `total_harga`, `kd_tiket`, `foto_bukti`) VALUES
(15, 17, 'Doctor Strange', '10:00', '2', 1, 65000, 17, '20200430105349FB_IMG_1585554498139.jpg'),
(16, 18, 'Doctor Strange', '10:00', '2', 1, 65000, 18, '20200430113416FB_IMG_1585554492375.jpg'),
(17, 19, 'Doctor Strange', '10:00', '2', 1, 65000, 19, '20200430114914FB_IMG_1585554498139.jpg'),
(18, 20, 'Doctor Strange', '10:00', '2', 2, 130000, 20, '20200430115458FB_IMG_1585554500654.jpg'),
(19, 21, 'Doctor Strange', '10:00', '2', 2, 130000, 21, '20200430115915Penguins.jpg'),
(20, 10, 'Avengers: Infinity War', '10:00', '1', 2, 130000, 10, '202004301616533x3 9,12.PNG'),
(21, 12, 'Avengers: Infinity War', '10:00', '1', 2, 130000, 12, '20201130145915ikangoreng.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_film`
--

CREATE TABLE `tbl_film` (
  `kd_film` int(3) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `sampul` varchar(100) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `durasi` varchar(20) NOT NULL,
  `sutradara` varchar(50) NOT NULL,
  `sinopsis` varchar(300) NOT NULL,
  `link` varchar(100) NOT NULL,
  `harga` int(5) NOT NULL,
  `studio` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_film`
--

INSERT INTO `tbl_film` (`kd_film`, `judul`, `poster`, `sampul`, `genre`, `durasi`, `sutradara`, `sinopsis`, `link`, `harga`, `studio`) VALUES
(1, 'Avengers: Infinity War', '1.jpg', '1.jpg', 'Action, Adventure, Sci-Fi', '2 jam 40 menit', ' Joe Russo, Anthony Russo', 'The Avengers dan sekutu mereka harus bersedia mengorbankan segalanya dalam upaya untuk mengalahkan Thanos yang kuat sebelum ia berhasil menghancurkan alam semesta.', '6ZfuNTqbHE8', 75000, '1'),
(2, 'Doctor Strange', '2.jpg', '2.jpg', 'Action, Adventure, Fantasy', '1 jam 55 menit', 'Scott Derrickson', 'Dr. Stephen Strange mengalami sebuah kecelakaan yang fatal yang merusak kemampuan motorik kedua tangannya. Demi kesembuhannya, ia mengunjungi seorang penyihir misterius bernama Ancient One di Tibet.', 'HSzx-zryEgM', 65000, '2'),
(3, 'Spiderman: Homecoming', '3.jpg', '3.jpg', 'Action, Adventure, Sci-Fi', '2 jam 31 menit', 'Jon Watts', 'Peter Parker berusaha menyeimbangkan dua kehidupannya yang sangat bertolak belakang - menghentikan aksi penjualan senjata Chitauri oleh Adrian Toomes dan menjalani hari-hari selayaknya murid SMA.', 'lCkVr1n1eCA', 70000, '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tiket`
--

CREATE TABLE `tbl_tiket` (
  `kd_tiket` int(10) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `waktu` time NOT NULL,
  `studio` int(1) NOT NULL,
  `nama_kursi` varchar(2) NOT NULL,
  `harga` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `kd_transaksi` int(10) NOT NULL,
  `kd_film` int(3) NOT NULL,
  `waktu` time NOT NULL,
  `nik` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kd_tiket` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`nik`, `nama`, `password`, `level`) VALUES
(1, 'rianda', 'riandagantengbanget', 'user'),
(2, 'admin', 'admin', 'admin'),
(3, 'ricky', 'ricky', 'user'),
(4, 'test', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id_checkout`);

--
-- Indeks untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`id_kursi`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`);

--
-- Indeks untuk tabel `tbl_film`
--
ALTER TABLE `tbl_film`
  ADD PRIMARY KEY (`kd_film`);

--
-- Indeks untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`kd_transaksi`),
  ADD KEY `kd_film` (`kd_film`),
  ADD KEY `kd_tiket` (`kd_tiket`),
  ADD KEY `nik` (`nik`),
  ADD KEY `tbl_transaksi_ibfk_2` (`waktu`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id_checkout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `kursi`
--
ALTER TABLE `kursi`
  MODIFY `id_kursi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_tiket`
--
ALTER TABLE `tbl_tiket`
  MODIFY `kd_tiket` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `nik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
