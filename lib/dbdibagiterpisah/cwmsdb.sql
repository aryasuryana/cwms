-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2022 pada 16.06
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cwmsdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`) VALUES
(1, 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
(2, 'userlsp', '24a9f05da4c73006aca9f5bc44d1e92b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblcarwashbooking`
--

CREATE TABLE `tblcarwashbooking` (
  `id` int(11) NOT NULL,
  `bookingId` bigint(10) DEFAULT NULL,
  `packageType` varchar(120) DEFAULT NULL,
  `carWashPoint` int(11) DEFAULT NULL,
  `idpaketcuci` int(11) DEFAULT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `washDate` date DEFAULT NULL,
  `washTime` time DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `status` varchar(120) DEFAULT NULL,
  `adminRemark` mediumtext DEFAULT NULL,
  `paymentMode` varchar(120) DEFAULT NULL,
  `txnNumber` varchar(120) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `lastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblcarwashbooking`
--

INSERT INTO `tblcarwashbooking` (`id`, `bookingId`, `packageType`, `carWashPoint`, `idpaketcuci`, `fullName`, `mobileNumber`, `washDate`, `washTime`, `message`, `status`, `adminRemark`, `paymentMode`, `txnNumber`, `postingDate`, `lastUpdationDate`) VALUES
(1, 316460298, '1', 1, 0, 'ANuj kumar', 1234567890, '2021-12-16', '11:45:00', 'NA', 'Completed', 'Washing completed', 'e-Wallet', '345345345', '2021-12-13 19:14:22', '2022-03-15 14:30:56'),
(2, 647869499, '3', 2, 0, 'Anuj kumar', 1234567890, '2021-12-30', '15:47:00', 'na', 'Completed', 'hy', 'Debit/Credit Card', '987654', '2021-12-13 19:14:47', '2022-03-14 11:18:13'),
(16, 291370761, '1', NULL, 0, 'qwerty', 987654321, '2022-03-14', '21:20:00', 'mauuu', 'New', NULL, NULL, NULL, '2022-03-14 13:15:04', NULL),
(17, 997733819, '1', NULL, 0, 'qwerty', 987654321, '2022-03-02', '12:22:00', 'esdad', 'New', NULL, NULL, NULL, '2022-03-14 13:19:55', NULL),
(18, 697964170, '2', NULL, 0, 'qwerty', 913456782, '2022-04-07', '02:23:00', 'cvvvv', 'New', NULL, NULL, NULL, '2022-03-14 13:23:31', NULL),
(19, 953231145, '2', 1, 0, 'hay', 913456782, '2022-03-14', '12:11:00', 'w', 'Completed', 'sudah', 'Debit/Credit Card', '3000', '2022-03-14 13:24:59', '2022-03-14 13:30:42'),
(20, 481825465, '1', NULL, 0, 'yyyy', 1234567890, '2022-03-11', '11:11:00', 'mau', 'New', NULL, NULL, NULL, '2022-03-14 13:26:24', NULL),
(21, 337531986, '2', 1, 0, 'yyyy', 913456782, '2022-02-27', '22:22:00', 'yyy', 'Completed', 'dah', 'Cash', '3000', '2022-03-14 13:27:04', '2022-03-15 14:53:21'),
(22, 304627149, '3 ', 1, 0, 'sadad', 1234567890, '0000-00-00', '11:11:00', 'mau dah', 'New', NULL, NULL, NULL, '2022-03-14 13:28:59', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblwashingpoints`
--

CREATE TABLE `tblwashingpoints` (
  `id` int(11) NOT NULL,
  `washingPointName` varchar(255) DEFAULT NULL,
  `washingPointAddress` varchar(255) DEFAULT NULL,
  `contactNumber` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tblwashingpoints`
--

INSERT INTO `tblwashingpoints` (`id`, `washingPointName`, `washingPointAddress`, `contactNumber`) VALUES
(1, 'Pencucian Baiman', ' Jln.Baik Selamat Sampai Tujuan', 913456782);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbpaketcuci`
--

CREATE TABLE `tbpaketcuci` (
  `id` int(11) NOT NULL,
  `namapaket` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbpaketcuci`
--

INSERT INTO `tbpaketcuci` (`id`, `namapaket`, `deskripsi`, `harga`) VALUES
(1, 'Cuci Mobil Kecil \r\n', 'Suzuki Karimun, Toyota Agya, Swift, Agya, Honda Ja...\r\n', '40000'),
(2, 'Cuci Mobil Sedang\r\n', 'CRV, HRV, Mobilio, Civic\r\n', '45000'),
(3, 'Cuci Mobil Besar\r\n\r\n', 'Fortuner, Pajero, Robicorn\r\n', '50000\r\n'),
(4, 'Cuci Mobil Sangat Besar\r\n', 'Alphard, Lexus, Vellfire\r\n', '55000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tblcarwashbooking`
--
ALTER TABLE `tblcarwashbooking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carWashPoint` (`carWashPoint`);

--
-- Indeks untuk tabel `tblwashingpoints`
--
ALTER TABLE `tblwashingpoints`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbpaketcuci`
--
ALTER TABLE `tbpaketcuci`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tblcarwashbooking`
--
ALTER TABLE `tblcarwashbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tblwashingpoints`
--
ALTER TABLE `tblwashingpoints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbpaketcuci`
--
ALTER TABLE `tbpaketcuci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
