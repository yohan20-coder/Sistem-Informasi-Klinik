-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2020 at 04:45 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id_dokter` varchar(50) NOT NULL,
  `nama_dokter` varchar(80) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('0a414b77-c623-4756-a90e-e79e41848955', 'Dr. Andi', 'Dokter Gigi', 'Jln Nangka', '08224794917'),
('a4984761-5718-461f-b341-513bb959f10b', 'Dr. Alexander', 'Penyakit  Dalam', 'Jln. Nangka', '082222211111'),
('b40e98ae-c71e-4fb2-ba02-9ccdd0d852e4', 'Dr. Vanesa', 'Kandungan', 'Jln Sam Ratulangi', '082247949173');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `ket_obat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `ket_obat`) VALUES
('7ce32342-2502-11e9-9d65-0071cc3b47b0', 'Paracetamol', 'Obat Penurun panas'),
('855bd201-f59f-40f3-b5cc-2aac870cf1ec', 'Mixagrip', '<p><tt><em><strong>Obat Flu</strong></em></tt></p>\r\n'),
('935a1bd4-9637-4b07-b898-4a34b58884ec', 'Oskadon', '<p><tt><em><strong>Batuk dan Pilek</strong></em></tt></p>\r\n'),
('bdd8885c-2502-11e9-9d65-0071cc3b47b0', 'Bodrex', 'Obat Batuk');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id_pasien` varchar(50) NOT NULL,
  `nomor_identitas` varchar(30) NOT NULL,
  `nama_pasien` varchar(80) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `nomor_identitas`, `nama_pasien`, `jenis_kelamin`, `alamat`, `no_telp`) VALUES
('206c7786-6ee1-476b-95c4-cf77cc8919bf', '0836277181', 'Risqa', 'P', 'Jln Anggrek', '0286621122'),
('36012093-b92d-4e7f-b9e5-44a95327422b', '233388811188', 'Ardian', 'L', 'Jln Nenas', '082236457889'),
('38fd8ba6-b4a2-4ef7-99b6-2adbeb33bd92', '06442177186', 'Keysa', 'P', 'Jln Eltari', '08466171821'),
('509a53e0-a02c-4d6f-b430-2994928e4282', '08662416261', 'Isnan', 'P', 'Jln kelimutu', '081345721333'),
('56bc8d8a-2a59-4371-be17-b130e409706c', '018772188', 'Piter', 'L', 'Jln Sam Ratulangi', '0813324266'),
('68b7518d-6cda-4f74-8401-8b01fa9096f9', '028671112118', 'Rosaaa', 'P', 'Jln Kelimutuuu', '082443111277'),
('7b43aaa3-567c-4927-8b7a-4e83aec2b959', '0765617182', 'Riskan', 'P', 'Jln Eltari', '0856162781'),
('83cb193a-5397-4d2b-99df-f920396f7212', '017651528186', 'Aris', 'L', 'Jln Durian', '08415524665'),
('a18199af-c910-4420-ab1b-55469db30f70', '122447', 'qsasa', 'L', 'KKK', '666'),
('aed055c2-928d-48e6-8619-f0a14ccfd836', '122445', 'andi', 'L', 'UU', '4444'),
('d1175557-cb63-4214-b404-4feb997f8305', '122445', 'andi', 'L', 'jjjj', '4444'),
('e90afc35-58fe-403b-a29e-6fb9cae54a37', '15553411133', 'Alex', 'L', 'Jln Durian', '082235155'),
('edd9ff0d-323b-4a68-ae85-4d38a866ee39', '122446', 'affs', 'P', 'jjjj', '555'),
('f755d30b-2d00-40a6-b29f-b2f600715d05', '122446', 'affs', 'P', 'HHH', '555'),
('fde30862-da9e-456b-b6fd-a2ef29ff6f89', '233388811187', 'Vanessa', 'P', 'Jln durian', '08444221567');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE `tb_poliklinik` (
  `id_poli` varchar(50) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `gedung` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`id_poli`, `nama_poli`, `gedung`) VALUES
('2ccd6804-812e-4fa9-9009-1ede11d93ff3', 'Poli 3.A', 'Lt.3'),
('4ee9e8c1-a5af-4f23-8983-ae44084441d2', 'Poli 4.B', 'Lt.1'),
('9c41025e-170e-435f-876c-dc7585d528b7', 'Poli 3.B', 'Lt.2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekammedis`
--

CREATE TABLE `tb_rekammedis` (
  `id_rm` varchar(50) NOT NULL,
  `id_pasien` varchar(50) NOT NULL,
  `keluhan` text NOT NULL,
  `id_dokter` varchar(50) NOT NULL,
  `diagnosa` text NOT NULL,
  `id_poli` varchar(50) NOT NULL,
  `tgl_periksa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekammedis`
--

INSERT INTO `tb_rekammedis` (`id_rm`, `id_pasien`, `keluhan`, `id_dokter`, `diagnosa`, `id_poli`, `tgl_periksa`) VALUES
('19196b71-8b38-4997-9f03-671ef7e1b3c3', 'fde30862-da9e-456b-b6fd-a2ef29ff6f89', 'Kepala Sakit dan Flu', 'a4984761-5718-461f-b341-513bb959f10b', 'Kurang Istirahat', '9c41025e-170e-435f-876c-dc7585d528b7', '2019-02-22'),
('6efb38fa-79d4-4028-b5f3-4fc49207b183', '36012093-b92d-4e7f-b9e5-44a95327422b', 'Panas Dan Kepala Sakit', '0a414b77-c623-4756-a90e-e79e41848955', 'Demam', '9c41025e-170e-435f-876c-dc7585d528b7', '2019-02-22'),
('87998886-e10a-48c6-8007-930498000e3a', 'fde30862-da9e-456b-b6fd-a2ef29ff6f89', '<p><code><em><strong>Mual-Mual, Perut Sakit Dan Pusing</strong></em></code></p>\r\n', '0a414b77-c623-4756-a90e-e79e41848955', '<p><code><em><strong>Gejala Penyakit Mag</strong></em></code></p>\r\n', '9c41025e-170e-435f-876c-dc7585d528b7', '2019-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rm_obat`
--

CREATE TABLE `tb_rm_obat` (
  `id` int(8) NOT NULL,
  `id_rm` varchar(50) NOT NULL,
  `id_obat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rm_obat`
--

INSERT INTO `tb_rm_obat` (`id`, `id_rm`, `id_obat`) VALUES
(2, '6efb38fa-79d4-4028-b5f3-4fc49207b183', '7ce32342-2502-11e9-9d65-0071cc3b47b0'),
(3, '6efb38fa-79d4-4028-b5f3-4fc49207b183', 'bdd8885c-2502-11e9-9d65-0071cc3b47b0'),
(4, '19196b71-8b38-4997-9f03-671ef7e1b3c3', '855bd201-f59f-40f3-b5cc-2aac870cf1ec'),
(5, '19196b71-8b38-4997-9f03-671ef7e1b3c3', 'bdd8885c-2502-11e9-9d65-0071cc3b47b0'),
(6, '87998886-e10a-48c6-8007-930498000e3a', '855bd201-f59f-40f3-b5cc-2aac870cf1ec'),
(7, '87998886-e10a-48c6-8007-930498000e3a', 'bdd8885c-2502-11e9-9d65-0071cc3b47b0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(50) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
('1', 'ardian', 'andi', 'admin', 'admin'),
('7dbd187b-be5d-41c8-b2c1-a867dc403e7e', 'Ardian', 'user', 'user', 'user'),
('cc268e27-2368-11e9-9d65-0071cc3b47b0', 'andi', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indexes for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD PRIMARY KEY (`id_rm`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_poli` (`id_poli`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_rm` (`id_rm`),
  ADD KEY `id_obat_2` (`id_obat`),
  ADD KEY `id_obat_3` (`id_obat`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_rekammedis`
--
ALTER TABLE `tb_rekammedis`
  ADD CONSTRAINT `tb_rekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `tb_pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekammedis_ibfk_2` FOREIGN KEY (`id_poli`) REFERENCES `tb_poliklinik` (`id_poli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekammedis_ibfk_3` FOREIGN KEY (`id_dokter`) REFERENCES `tb_dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rm_obat`
--
ALTER TABLE `tb_rm_obat`
  ADD CONSTRAINT `tb_rm_obat_ibfk_1` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`),
  ADD CONSTRAINT `tb_rm_obat_ibfk_2` FOREIGN KEY (`id_rm`) REFERENCES `tb_rekammedis` (`id_rm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
