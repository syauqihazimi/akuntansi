-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 03:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siak`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `no_reff` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_reff` varchar(40) NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`no_reff`, `id_user`, `nama_reff`, `keterangan`) VALUES
(111, 1, 'Kas', 'Kas'),
(112, 1, 'Perlengkapan', 'Perlengkapan Perusahaan'),
(113, 1, 'Piutang Usaha', 'Piutang Usaha'),
(121, 1, 'Peralatan', 'Peralatan Perusahaan'),
(122, 1, 'Akumulasi Peralatan', 'Akumulasi Peralatan'),
(211, 1, 'Utang Usaha', 'Utang Usaha'),
(212, 1, 'Utang Bank', 'Utang Bank'),
(311, 1, 'Modal', 'Modal'),
(312, 1, 'Prive', 'Prive'),
(411, 1, 'Pendapatan Jasa', 'Pendapatan Jasa'),
(511, 1, 'Beban Sewa', 'Beban Sewa'),
(512, 1, 'Beban Iklan', 'Beban Iklan'),
(513, 1, 'Beban Penyusutan Peralatan', 'Beban Penyusutan Peralatan'),
(514, 1, 'Beban Air', 'Beban Air'),
(515, 1, 'Beban Operasional', 'Beban Operasional'),
(516, 1, 'Beban Gaji', 'Beban Gaji');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_reff` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jenis_saldo` enum('debit','kredit','','') NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `no_reff`, `tgl_input`, `tgl_transaksi`, `jenis_saldo`, `saldo`) VALUES
(55, 1, 111, '2021-02-01 21:01:17', '2021-02-01', 'debit', 200000000),
(56, 1, 311, '2021-02-01 21:03:40', '2021-02-01', 'kredit', 200000000),
(57, 1, 121, '2021-02-02 21:04:21', '2021-02-02', 'debit', 80000000),
(58, 1, 112, '2021-02-02 21:05:10', '2021-02-02', 'debit', 10000000),
(59, 1, 111, '2021-02-02 21:05:32', '2021-02-02', 'kredit', 90000000),
(60, 1, 121, '2021-02-04 21:07:57', '2021-02-04', 'debit', 5000000),
(61, 1, 111, '2021-02-04 21:10:20', '2021-02-04', 'kredit', 1000000),
(62, 1, 211, '2021-02-04 21:10:53', '2021-02-04', 'kredit', 4000000),
(63, 1, 511, '2021-02-07 21:11:39', '2021-02-07', 'debit', 7000000),
(64, 1, 111, '2021-02-07 21:15:17', '2021-02-07', 'kredit', 7000000),
(67, 1, 512, '2021-02-09 21:23:41', '2021-02-09', 'debit', 1500000),
(68, 1, 111, '2021-02-09 21:24:56', '2021-02-09', 'kredit', 1500000),
(69, 1, 111, '2021-02-10 21:26:17', '2021-02-10', 'debit', 20000000),
(70, 1, 212, '2021-02-10 21:31:16', '2021-02-10', 'kredit', 20000000),
(75, 1, 111, '2021-02-12 21:37:09', '2021-02-12', 'debit', 20000000),
(76, 1, 411, '2021-02-12 21:37:48', '2021-02-12', 'kredit', 20000000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `jk`, `alamat`, `email`, `username`, `password`, `last_login`) VALUES
(1, 'Kelas 5A SI FST 2019', 'laki-laki', 'SI FST', 'kelas5a@gmail.com', 'kelas5a', '69005bb62e9622ee1de61958aacf0f63', '2021-12-20 22:14:08'),
(2, 'accountant', 'perempuan', 'Bogor', 'syauqihazimi@gmail.com', 'accountant', '69005bb62e9622ee1de61958aacf0f63', '2021-11-25 01:31:26'),
(3, 'finance', 'perempuan', 'Jakarta', 'helloworld@gmail.com', 'finance', '69005bb62e9622ee1de61958aacf0f63', '2021-12-15 15:45:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`no_reff`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `no_reff` (`no_reff`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akun`
--
ALTER TABLE `akun`
  ADD CONSTRAINT `akun_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
