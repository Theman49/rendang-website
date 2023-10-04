-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2021 at 10:46 AM
-- Server version: 10.3.31-MariaDB-cll-lve
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakdeny1_rendang`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(4) NOT NULL,
  `id_session` varchar(1000) NOT NULL,
  `id_menu` int(20) NOT NULL,
  `jumlah_order` int(4) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_session`, `id_menu`, `jumlah_order`, `total_harga`) VALUES
(20, '2300495288', 5, 1, 37000),
(30, '3551261852', 1, 1, 35000),
(31, '3551261852', 5, 1, 37000),
(32, '3762932505', 4, 1, 45000);

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id_menu` int(20) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `harga` int(6) NOT NULL,
  `id_kategori` varchar(1) NOT NULL,
  `deskripsi` text NOT NULL,
  `rating` int(1) NOT NULL,
  `promo` int(6) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id_menu`, `nama_menu`, `harga`, `id_kategori`, `deskripsi`, `rating`, `promo`, `gambar`) VALUES
(1, 'Ayam Kalasan', 35000, 'A', '<pre>\r\nKripik Sanjai Balado Bulat merupakan olahan singkong yang dipotong menyerupai bulatan dan diberi saus khas minang \r\n			yang rasa dan tekstur nya renyah pedas manis, orang2 minang menyebutnya dengan \"Sanjai Balado Merah\"\r\nSpesial untuk kamu dari Unikayo, \"Kripik Sanjai Balado Bulat\"\r\nTekstur Sanjai Balado yang renyah bikin nyantaimu makin seru \r\n\r\ncocok dimakan ketika :\r\n- cemilan nonton film \r\n- cemilan kerja \r\n- cemilan belajar\r\n- cemilan nongkrong bareng temen\r\ndll \r\n\r\nKetahahan : \r\n- Suhu ruang : 3 bulan\r\n<pre>', 5, 0, 'ayam-kalasan-1'),
(4, 'Rendang Mamakoe', 45000, 'A', '<pre>\r\nRendang Sapi\r\n\r\nDiolah dari daging sapi segar dengan bumbu khas. Daging empuk dan rasa juara. Dimasak secara TRADISIONAL tanpa presto.\r\n\r\nCocok untuk disajikan untuk hidangan keluarga\r\n\r\nBerat bersih :\r\n\r\n- 350gr ( isi 5 potong) irisan besar\r\n\r\n- 500gr ( isi 7-8 potong) irisan besar<pre>', 5, 0, 'rendang-1'),
(5, 'Ayam Serundeng', 37000, 'C', '<pre>\r\nAyam serundeng diolah dengan parutan kelapa dicampur bumbu khas blessing kitchen.\r\n\r\nCara penyajian :\r\n\r\n1. Siapkan minyak dengan api sedang\r\n\r\n2. Ambil daging dari kemasan lalu goreng dengan api kecil. Setelah matang angkat, tiriskan.\r\n\r\n3. Ambil Serundeng, goreng terpisah dengan api kecil. Angkat dan saring lalu tiriskan.\r\n\r\n4. Sajikan dengan sambal goreng<pre>', 5, 0, 'ayam-serundeng-1'),
(6, 'Empal Serundeng', 27000, 'C', '<pre>\r\nEmpal dibuat dari daging sapi segar yang diolah dengan bumbu khas bersama dengan parutan kelapa.\r\n\r\nCara penyajian :\r\n\r\n1. Siapkan minyak dengan api sedang\r\n\r\n2. Ambil daging dari kemasan lalu goreng dengan api kecil. Setelah matang angkat, tiriskan.\r\n\r\n3. Ambil Serundeng, goreng terpisah dengan api kecil. Angkat dan saring lalu tiriskan.\r\n\r\n4. Sajikan dengan sambal goreng<pre>', 5, 0, 'empal-serundeng-1');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(5) NOT NULL,
  `order_id` int(30) NOT NULL,
  `id_session` varchar(30) NOT NULL,
  `id_menu` int(4) NOT NULL,
  `jumlah_order` int(11) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `order_id`, `id_session`, `id_menu`, `jumlah_order`, `total_harga`) VALUES
(1, 1617477526, '3286405024', 4, 1, 45000),
(2, 1105983896, '1844998552', 1, 2, 70000),
(3, 709353969, '1765536928', 4, 1, 45000),
(4, 2102038310, '3551261852', 6, 1, 27000),
(5, 1409533335, '3551261852', 1, 2, 70000),
(6, 211572904, '3551261852', 4, 1, 45000),
(7, 592090593, '3551261852', 5, 3, 111000),
(8, 1832500580, '3551261852', 6, 1, 27000),
(9, 1469347384, '3551261852', 5, 1, 37000),
(10, 1027976689, '3551261852', 6, 1, 27000),
(11, 1819496716, '3551261852', 4, 2, 90000);

-- --------------------------------------------------------

--
-- Table structure for table `jasa_kirim`
--

CREATE TABLE `jasa_kirim` (
  `id_jasa` int(1) NOT NULL,
  `nama_jasa` varchar(20) NOT NULL,
  `tarif_jasa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jasa_kirim`
--

INSERT INTO `jasa_kirim` (`id_jasa`, `nama_jasa`, `tarif_jasa`) VALUES
(1, 'JNE - OKE', 19000),
(2, 'JNE - REGULER', 22000),
(3, 'JNE - YES', 37000),
(4, 'JNT - REGULER', 19000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(1) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('A', 'Paket Hemat'),
('B', 'Paket 2'),
('C', 'Paket 3');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_midtrans`
--

CREATE TABLE `transaksi_midtrans` (
  `order_id` varchar(30) NOT NULL,
  `id_session` varchar(100) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `gross_amount` varchar(15) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `status_code` int(5) NOT NULL,
  `bank` varchar(15) NOT NULL,
  `va_number` varchar(30) NOT NULL,
  `transaction_time` varchar(30) NOT NULL,
  `expire_time` text NOT NULL,
  `pdf_url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_midtrans`
--

INSERT INTO `transaksi_midtrans` (`order_id`, `id_session`, `nama_pembeli`, `gross_amount`, `payment_type`, `status_code`, `bank`, `va_number`, `transaction_time`, `expire_time`, `pdf_url`) VALUES
('1027976689', '3551261852', 'Deny Lukman', '27000.00', 'bank_transfer', 201, 'bni', '9889613548481633', '1633189019', '1633275419', 'https://app.sandbox.midtrans.com/snap/v1/transactions/266028a2-f4a8-41cb-a759-aba987ffe0d9/pdf'),
('1819496716', '3551261852', 'Andika', '90000.00', 'bank_transfer', 200, 'bca', '96135023295', '1633189157', '1633275557', 'https://app.sandbox.midtrans.com/snap/v1/transactions/3bddd362-132c-4e49-b6f1-6a6b091c2f0e/pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `transaksi_midtrans`
--
ALTER TABLE `transaksi_midtrans`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id_menu` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
