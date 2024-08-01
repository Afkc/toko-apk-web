-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 08:32 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(15) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jenis_barang` varchar(30) NOT NULL,
  `ukuran` varchar(15) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `id_suplier` varchar(15) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_brg`, `jenis_barang`, `ukuran`, `warna`, `id_suplier`, `harga`, `jumlah`) VALUES
('170400001', 'Adidas', 'Sepatu', '39', 'Koran', '', 300000, 0),
('170400002', 'Adidas', 'Sepatu', '39', 'Koran', '', 300000, 0),
('170400003', 'Vans', 'Sepatu', '39', 'Hitam', '', 130000, 0),
('170400004', 'Reggy', 'Sepatu', '39', 'Hitam', '', 250000, 0),
('170400005', 'Dr. Faris', 'Sepatu', '40', 'Merah', '', 120000, 0),
('170400006', 'Dr. Faris', 'Sepatu', '40', 'Coklat', '', 230000, 0),
('170400007', 'Adidas', 'Sepatu', '42', 'Hijau', '', 0, 0),
('170400008', 'Dr. Faris', 'Sepatu', '41', 'Hijau', '', 0, 0),
('170400009', 'Mr. A', 'Sepatu', '42', 'Coklat', '', 499000, 0),
('170400010', 'Nike', 'Sepatu', '40', 'Coklat', '', 225000, 0),
('170400011', 'Mr. A', 'Sepatu', '40', 'Coklat', '', 0, 0),
('170400012', 'Dr. Faris', 'Sepatu', '40', 'Coklat', '', 0, 0),
('170400013', 'Undefeated', 'Sepatu', '40', 'Coklat', '', 0, 0),
('170400014', 'Mr. Hamcyx', 'Sepatu', '39', 'Coklat', '', 0, 0),
('170400015', 'Premium', 'Kemeja Panjang', 'M', 'Hitam', '', 0, 0),
('170400016', 'Onfire', 'Kemeja Panjang', '', 'Hitam', '', 195000, 0),
('170400017', 'Irondad', 'Kemeja Panjang', 'M', 'Merah', '', 195000, 0),
('170400018', 'Points', 'Kemeja Panjang', 'M', 'Abu-abu', '', 195000, 0),
('170400019', 'F2O', 'Kemeja Panjang', '', '', '', 0, 0),
('170400020', 'Black Angel', 'Kemeja Panjang', 'XL', 'Biru', '', 195000, 0),
('170400021', 'Black Angel', 'Kemeja Panjang', 'XL', 'Garis', '', 0, 0),
('170400022', 'Epick Holiday', 'Kemeja Panjang', 'L', 'Maroon', '', 180000, 0),
('170400023', 'The Killing', 'Kemeja Panjang', 'S', '', '', 0, 0),
('170400024', 'Crime Story', 'Kemeja Panjang', 'L', 'Ijo Kotak', '', 210000, 0),
('170400025', 'Bad Boy', 'Kemeja Panjang', 'XXL', 'Coklat', '', 279000, 0),
('170400026', 'Onfire', 'Kemeja Panjang', 'L', 'Kotak', '', 200000, 0),
('170400027', 'Onfire', 'Kemeja Panjang', 'L', 'Biru Muda', '', 200000, 0),
('170400028', 'Black Angel', 'Kemeja Panjang', 'M', 'Biru Tua', '', 225000, 0),
('170400029', 'Crime Story', 'Kemeja Panjang', 'L', 'Ijo Tua', '', 210000, 0),
('170400030', 'Vulture', 'Kemeja Panjang', 'M', 'Merah', '', 210000, 0),
('170400031', 'Crime Story', 'Kemeja Panjang', 'L', 'Coklat', '', 185000, 0),
('170400032', 'Twinty TW22', 'Kemeja Panjang', 'XL', 'Putih', '', 0, 0),
('170400033', 'Rock Stones', 'Kemeja Panjang', 'L', 'Merah', '', 0, 0),
('170400034', 'X-Pose', 'Kemeja Panjang', 'XL', '', '', 0, 0),
('170400035', 'Emine', 'Kemeja Panjang', 'L', 'Kotak', '', 165000, 0),
('170400036', 'Envynityhight', 'Kemeja Panjang', 'XL', 'Ungu', '', 0, 0),
('170400037', 'Olegun', 'Kemeja Panjang', 'M', 'Biru', '', 245000, 0),
('170400038', 'Black Angel', 'Kemeja Panjang', 'L', 'Merah', '', 195000, 0),
('170400039', 'Insor', 'Kemeja Panjang', 'L', '', '', 229000, 0),
('170400040', 'Berlink', 'Kemeja Panjang', 'L', 'Abu-abu', '', 0, 0),
('170400041', 'Demochist', 'Kemeja Panjang', 'L', 'Biru', '', 215000, 0),
('170400042', 'Price', 'Kemeja Panjang', 'XL', 'Maroon', '', 210000, 0),
('170400043', 'Crime Story', 'Kemeja Panjang', 'XL', 'Hijau', '', 210000, 0),
('170400044', 'Online', 'Kemeja Panjang', 'L', 'Biru', '', 0, 0),
('170400045', 'F2D', 'Kemeja Pendek', 'M', 'Pink', '', 160000, 0),
('170400046', 'Neverdead', 'Topi', '', 'Hitam', '', 125000, 0),
('170400047', 'Neverdead', 'Topi', '', 'Coklat', '', 125000, 0),
('170400048', 'Old Cloth', 'Topi', '', 'Hijau', '', 125000, 0),
('170400049', 'Old Cloth', 'Topi', '', 'Merah', '', 120000, 0),
('170400050', 'Neverdead', 'Topi', '', 'Hijau', '', 125000, 0),
('170400051', 'ShaNge', 'Topi', '', 'Hitam', '', 100000, 0),
('170400052', 'Old Cloth', 'Topi', '', 'Hitam', '', 135000, 0),
('170400053', 'ShaNge', 'Topi', '', 'Merah', '', 100000, 0),
('170400054', 'Revolution', 'Topi', '', 'Abu-abu', '', 80000, 0),
('170400055', 'Busted Apparel', 'Topi', '', 'Merah', '', 0, 0),
('170400056', 'BSTD', 'Topi', '', 'Abu-abu', '', 0, 0),
('170400057', 'Vultures', 'Topi', '', 'Kotak-kota', '', 0, 0),
('170400058', 'Busted Apparel', 'Topi', '', 'Merah', '', 0, 0),
('170400059', 'ShaNge', 'Topi', '', 'Hitam', '', 100000, 0),
('170400060', 'On Fire', 'Topi', '', 'Merah', '', 100000, 0),
('170400061', 'Olegun', 'Topi', '', 'Hitam', '', 130000, 0),
('170400062', 'ShaNge', 'Topi', '', 'Merah', '', 100000, 0),
('170400063', 'Neverdead', 'Topi', '', 'Hitam', '', 125000, 0),
('170400064', 'ShaNge', 'Topi', '', 'Merah', '', 100000, 0),
('170400065', 'Epidemic', 'Topi', '', 'Hitam', '', 125000, 0),
('170400066', 'ShaNge', 'Topi', '', 'Hitam', '', 100000, 0),
('170400067', 'Insider', 'Singlet', 'XL', 'Coklat', '', 229000, 0),
('170400068', 'Insider', 'Singlet', 'L', 'Maroon', '', 229000, 0),
('170400069', 'Insider', 'Singlet', 'L', 'Abu-abu', '', 229000, 0),
('170400070', 'Insider', 'Singlet', 'XL', 'Abu-abu Tu', '', 229000, 0),
('170400071', 'X-Pose', 'Singlet', '', 'Hitam', '', 125000, 0),
('170400072', 'X-Pose', 'Singlet', '', 'Merah Abu', '', 125000, 0),
('170400073', 'X-Pose', 'Singlet', '', 'Abu-abu', '', 125000, 0),
('170400074', 'Grey Side', 'Singlet', 'L', 'Putih Biru', '', 115000, 0),
('170400075', 'X-Pose', 'Blazer', '', 'Hitam', '', 0, 0),
('170400076', 'On Fire', 'Blazer', 'XL', 'Hitam', '', 220000, 0),
('170400077', 'Rock Rider', 'Blazer', '', 'Hitam', '', 0, 0),
('170400078', 'Rock Rider', 'Blazer', '', 'Abu-abu', '', 0, 0),
('170400079', 'On Fire', 'Blazer', 'XL', 'Hitam', '', 220000, 0),
('170400080', 'Chris Cole', 'Celana', '33', 'Abu', '', 0, 0),
('170400081', 'Billabong', 'Celana', '30', 'Abu', '', 0, 0),
('170400082', 'Chris Cole', 'Celana', '33', 'Abu', '', 0, 0),
('170400083', 'Chris Cole', 'Celana', '31', 'Abu', '', 0, 0),
('170400084', 'Insight', 'Celana', '29', 'Hitam', '', 0, 0),
('170400085', 'Cremi Story', 'Celana', 'M', 'Coklat', '', 260000, 0),
('170400086', 'Cremi Story', 'Celana', 'L', 'Coklat', '', 260000, 0),
('170400087', 'Cremi Story', 'Celana', 'XL', 'Coklat', '', 260000, 0),
('170400088', 'Onfire', 'Celana', 'L', 'Abu', '', 205000, 0),
('170400089', 'Kick Denim', 'Celana', '', '', '', 0, 0),
('170400090', 'Insight', 'Celana', '28', 'Biru', '', 0, 0),
('170400091', 'Insight', 'Celana', '30', 'Biru', '', 0, 0),
('170400092', 'Onfire', 'Celana', 'M', 'Biru', '', 205000, 0),
('170400093', 'Onfire', 'Celana', 'S', 'Biru', '', 200000, 0),
('170400094', 'Onfire', 'Celana', 'M', 'Biru', '', 205000, 0),
('170400095', 'Onfire', 'Celana', 'M', 'Biru', '', 200000, 0),
('170400096', 'Kiddrock', 'Celana', '25', 'Biru', '', 0, 0),
('170400097', 'Onfire', 'Celana', 'XL', 'Biru', '', 0, 0),
('170400098', 'Onfire', 'Celana', 'L', 'Hitam', '', 190000, 0),
('170400099', 'Onfire', 'Celana', 'L', 'Biru', '', 205000, 0),
('170400100', 'Kiddrock', 'Celana', '25', 'Hitam', '', 220000, 0),
('170400101', 'Kiddrock', 'Celana', '25', 'Biru', '', 220000, 0),
('170400102', 'Insight', 'Celana', '31', 'Biru', '', 210000, 0),
('170400103', 'Points', 'Celana', 'L', 'Biru', '', 230000, 0),
('170400104', 'Points', 'Celana', 'M', 'Biru', '', 210000, 0),
('170400105', 'Points', 'Celana', 'XL', 'Hitam', '', 230000, 0),
('170400106', 'Olc', 'Celana', '30', 'Biru', '', 295000, 0),
('170400107', 'Insight', 'Celana', '30', 'Abu', '', 210000, 0),
('170400108', 'Insight', 'Celana', '29', 'Biru', '', 210000, 0),
('170400109', 'Kick Denim', 'Celana', '32', 'Abu', '', 185000, 0),
('170400110', 'Insight', 'Celana', '27', 'Biru', '', 235000, 0),
('170400111', 'Onfire', 'Celana', 'M', 'Biru', '', 225000, 0),
('170400112', 'Jronegan', 'Celana', 'L', 'Abu', '', 230000, 0),
('170400113', 'Jronegan', 'Celana', 'M', 'Abu', '', 225000, 0),
('170400114', 'In Black', 'Celana', 'S', 'Hitam', '', 230000, 0),
('170400115', 'Grayscale', 'Celana', '34', 'Hitam', '', 275000, 0),
('170400116', 'NTF', 'Celana', '32', 'Coklat', '', 185000, 0),
('170400117', 'NTF', 'Celana', '30', 'Coklat', '', 185000, 0),
('170400118', 'NTF', 'Celana', '30', 'Coklat', '', 185000, 0),
('170400119', 'Outleave', 'Celana', 'XL', 'Coklat', '', 0, 0),
('170400120', 'Outleave', 'Celana', 'L', 'Coklat Mud', '', 0, 0),
('170400121', 'Outleave', 'Celana', 'L', 'Coklat Mud', '', 0, 0),
('170400122', 'Ironclad', 'Celana', 'XL', 'Hitam', '', 250000, 0),
('170400123', 'Doublesteven', 'Celana', '25', 'Hitam', '', 0, 0),
('170400124', 'RVJ', 'Celana', 'M', 'Abu', '', 220000, 0),
('170400125', 'Kiddrock', 'Celana', 'S', 'Biru', '', 220000, 0),
('170400126', 'Onfire', 'Celana', 'L', 'Biru', '', 225000, 0),
('170400127', 'Onfire', 'Celana', '', 'Biru', '', 225000, 0),
('170400128', 'Onfire', 'Celana', 'L', 'Biru', '', 225000, 0),
('170400129', 'Grayscale', 'Celana', '', 'Biru', '', 0, 0),
('170400130', 'Beatelight', 'Celana', '', 'Hitam', '', 0, 0),
('170400131', 'Shange Lengan Pendek', 'Baju', 'L, M, XL', 'BD, AB, HT', '', 110000, 0),
('170400132', 'Shange Lengan Panjang', 'Baju', 'L, M, XL', 'BD, AB, HT', '', 140000, 0),
('170400133', 'Shange Pendek Full Body', 'Baju', 'L, M, XL', 'BD, AB, HT', '', 130000, 0),
('170400134', 'Kaos Epidemic', 'Baju', 'L, M, XL', 'HITAM', '', 120000, 0),
('170400135', 'Kaos Busted', 'Baju', 'L, M, XL', 'HITAM', '', 120000, 0),
('170400136', 'Kaos Epodemic Full Body', 'Baju', 'L, M, XL', 'HITAM', '', 150000, 0),
('170400137', 'Kaos Onfire', 'Baju', 'L, M, XL', 'AB', '', 100000, 0),
('170400138', 'Kaos Onfire Junior', 'Baju', 'L, M, XL', 'AB', '', 85000, 0),
('170400139', 'Kaos Kombinasi DMCT', 'Baju', 'L, M, XL', 'MRH, PTH, ', '', 105000, 0),
('170400140', 'Kaos Kombinasi Neverdead', 'Baju', 'L, M, XL', 'AB', '', 110000, 0),
('170400141', 'Kaos Gioarmy Kombinasi', 'Baju', 'L, M, XL', 'LORENG', '', 145000, 0),
('170400142', 'Kaos Kombinasi Onfire', 'Baju', 'L, M, XL', 'LORENG', '', 105000, 0),
('170400143', 'Kaos Kombinasi Onfire', 'Baju', 'L, M, XL', 'LORENG', '', 115000, 0),
('170400144', 'Kaos Kombinasi Onfire', 'Baju', 'L, M, XL', 'LORENG', '', 100000, 0),
('170400145', 'Celana Boxer', 'Celana', 'All Size', 'HTM, MRH, ', '', 80000, 0),
('170400146', 'Celana Boxer', 'Celana', 'All Size', 'HTM, MRH, ', '', 90000, 0),
('170400147', 'Sweter Gioarmy', 'Baju', 'L, M, XL', 'HTM, AB, B', '', 215000, 0),
('170400148', 'Sweter Crime Story', 'Baju', 'XL', 'HITAM', '', 225000, 0),
('170400149', 'Kaos Folder Panjang', 'Baju', 'L', 'BD, AB, HT', '', 125000, 0),
('170400150', 'Jaket Parka', 'Jaket', 'L, XL', 'BD, AB, HT', '', 300000, 0),
('170400151', 'Jaket Bomber', 'Jaket', 'M', 'HTM, HJ, C', '', 250000, 0),
('170400152', 'Jaket Levis', 'Jaket', 'M', 'BD', '', 290000, 0),
('170400153', 'Kaos Pigmen Lengan Panjang', 'Baju', 'XL, L', 'HTM, ABU', '', 150000, 0),
('170400154', 'Sandal Grayscale', 'Sandal', '', 'HITAM LORE', '', 100000, 0),
('170400155', 'Sandal Gioamrock', 'Sandal', '', 'CATUR HITA', '', 85000, 0),
('170400156', 'Sandal Onfire', 'Sandal', '', 'BIRU HITAM', '', 110000, 0),
('170400157', 'Sandal Ocox', 'Sandal', '', 'COKLAT', '', 125000, 0),
('170400158', 'Sendal Onfore Gunung', 'Sandal', '', 'BIRU', '', 115000, 0),
('170400159', 'Sandal Kiddrock', 'Sandal', '', 'HITAM', '', 130000, 0),
('170400160', 'Kaos Clipart', 'Baju', '', 'M', '', 100000, 0),
('170400161', 'Outleave', 'Tas Kecil', '', 'Coklat', '', 150000, 0),
('170400162', 'Onfire', 'Tas Kecil', '', 'Hitam', '', 125000, 0),
('170400163', 'Emweconcepe', 'Tas Pinggang', '', 'Hitam', '', 105000, 0),
('170400164', 'Outleve', 'Tas Pinggang', '', 'Biru', '', 150000, 0),
('170400165', 'Epc Holiday', 'Tas Gendong', '', 'Biru', '', 160000, 0),
('170400166', 'Gendong Ceril Old', 'Tas Gendong', '', 'Hitam', '', 200000, 0),
('170400167', 'Epidemic', 'Tas Gendong', '', 'Biru', '', 195000, 0),
('170400168', 'Epidemic', 'Tas Gendong', '', 'Dominan', '', 185000, 0),
('170400169', 'Busted', 'Tas Gendong', '', 'Hijau', '', 225000, 0),
('170400170', 'Grayscale', 'Tas Gendong', '', 'Biru', '', 175000, 0),
('170400171', 'Onfire', 'Tas Gendong', '', 'Biru', '', 140000, 0),
('170400172', 'Onfire', 'Tas Gendong', '', 'Biru', '', 140000, 0),
('170400173', 'Busted', 'Tas Gendong', '', 'Hijau', '', 195000, 0),
('170400174', 'Gio Army', 'Tas Gendong', '', 'Dominan', '', 175000, 0),
('170400175', 'The Phmed', 'Tas Gendong', '', 'Hitam', '', 190000, 0),
('170400176', 'Epidemic', 'Tas Gendong', '', 'Dominan', '', 185000, 0),
('170400177', 'Onfire', 'Tas Gendong', '', 'Dominan', '', 140000, 0),
('170400178', 'Onfire', 'Tas Gendong', '', 'Dominan', '', 299000, 0),
('170400179', 'Onfire', 'Tas Gendong', '', 'Dominan', '', 140000, 0),
('170400180', 'Onfire', 'Tas Gendong', '', 'Dominan', '', 180000, 0),
('170400181', 'Grayscale', 'Tas Gendong', '', 'Biru', '', 195000, 0),
('170400182', 'Epidemic', 'Tas Gendong', '', 'Merah Hita', '', 175000, 0),
('170400183', 'Onfire', 'Tas Gendong', '', 'Dominan Hi', '', 140000, 0),
('170400184', 'Effek', 'Tas Gendong', '', 'Dominan', '', 160000, 0),
('170400185', 'Kiddrock', 'Tas Gendong', '', 'Hitam', '', 0, 0),
('170400186', 'We Stile Own Zole', 'Tas Kecil', '', 'Hitam', '', 0, 0),
('170400187', 'Onfire', 'Tas Gendong', '', 'Dominan', '', 125000, 0),
('170400188', 'Ep', 'Tas Gendong', '', 'Hitam', '', 140000, 0),
('170400189', 'Onfire', 'Tas Gendong', '', 'Dominan Me', '', 140000, 0),
('170400190', 'Onfire', 'Tas Gendong', '', 'Dominan Bi', '', 195000, 0),
('170400191', 'ep', 'Tas Gendong', '', 'Hitam', '', 100000, 0),
('170400192', 'Epi Holiday', 'Tas Kecil', '', 'Dominan Ku', '', 0, 0),
('170400193', 'Grayscale', 'Tas Gendong', '', 'Hijau', '', 195000, 0),
('170400194', 'Tas Berdasi', 'Tas Selendang', '', 'Cream', '', 195000, 0),
('170400195', 'Onfire', 'Dompet', '', 'Coklat', '', 80000, 0),
('170400196', 'Olegun', 'Dompet', '', 'Hitam', '', 125000, 0),
('170400197', 'Grey Side', 'Dompet', '', 'Coklat', '', 120000, 0),
('170400198', 'Revolution', 'Dompet', '', 'Hitam', '', 80000, 0),
('170400199', 'Old Cloth', 'Dompet', '', 'Dominan', '', 110000, 0),
('170400200', 'Onfire', 'Sabuk', '', 'Hitam', '', 85000, 0),
('170400201', 'Grey Side', 'Sabuk', '', 'Hitam', '', 139000, 0),
('170400202', 'All', 'Topeng', '', 'All', '', 50000, 0),
('170400203', 'All', 'Gelang Karet', '', 'All', '', 0, 0),
('170400204', 'All', 'Gelang', '', 'All', '', 0, 0),
('170400205', 'All', 'Kalung Rante', '', 'All', '', 0, 0),
('170400206', 'Epidemic', 'Botol', '', '', '', 80000, 0),
('170400207', 'Busted', 'Kaos Kaki', '', 'All', '', 20000, 0),
('170400208', '', 'Syall', '', '', '', 0, 0),
('ID BARANG', 'NAMA BARANG', 'JENIS BARANG', 'UKURAN', 'WARNA', 'ID SUPPLIER', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `no_trx` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `batal_jual`
--

CREATE TABLE `batal_jual` (
  `kd_trx` varchar(10) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `kasir` varchar(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `harga_total` int(10) NOT NULL,
  `tgl_trx` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batal_jual`
--

INSERT INTO `batal_jual` (`kd_trx`, `id_barang`, `kasir`, `nama_brg`, `jumlah`, `harga`, `harga_total`, `tgl_trx`) VALUES
('TR00000013', 'BR-001', 'admin', 'celana Jeans', 2, 150000, 300000, '2017-04-07'),
('TR00000023', 'BR-003', 'admin', 'Celana Black Hawk', 1, 180000, 180000, '2017-04-07'),
('TR00000025', 'BR-005', 'admin', 'Tas Ransel', 1, 120000, 120000, '2017-04-07'),
('TR00000027', 'BR-005', 'admin', 'Tas Ransel', 1, 120000, 120000, '2017-04-07'),
('TR00000109', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000042', '1517500026007', 'vecky', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000013', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000014', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000014', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000018', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000021', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000021', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000023', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000023', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000039', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000039', 'BR-005', 'admin', 'Tas Ransel', 2, 100000, 200000, '2017-04-07'),
('TR00000058', 'BR-001', 'admin', 'celana Jeans', 1, 150000, 150000, '2017-04-07'),
('TR00000112', 'BR-001', 'admin', 'celana Jeans', 2, 150000, 300000, '2017-04-07'),
('TR00000003', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000013', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000013', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000013', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000013', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000014', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000015', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000016', '1517500026007', 'admin', 'Sandal GrayScale', 5, 100000, 500000, '2017-04-09'),
('TR00000016', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000017', '1517500026007', 'admin', 'Sandal GrayScale', 1, 150000, 150000, '2017-04-09'),
('TR00000020', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000038', '1517500026007', 'vecky', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000046', '1517500026007', 'vecky', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000053', '1517500026007', 'admin', 'Sandal GrayScale', 1, 100000, 100000, '2017-04-09'),
('TR00000001', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2011-11-24'),
('TR00000002', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2017-04-17'),
('TR00000002', '170400059', 'admin', 'ShaNge', 1, 100000, 100000, '2017-04-17'),
('TR00000003', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2017-04-17'),
('TR00000005', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2017-04-17'),
('TR00000005', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2017-04-17'),
('TR00000006', '170400001', 'admin', 'Adidas', 1, 300000, 300000, '2017-04-17'),
('TR00000006', '170400046', 'admin', 'Neverdead', 1, 125000, 125000, '2017-04-17'),
('TR00000008', '170400046', 'diah', 'Neverdead', 1, 125000, 125000, '2017-04-17'),
('TR00000008', '170400001', 'diah', 'Adidas', 1, 300000, 300000, '2017-04-17');

--
-- Triggers `batal_jual`
--
DELIMITER $$
CREATE TRIGGER `batal_jual` AFTER DELETE ON `batal_jual` FOR EACH ROW BEGIN
  INSERT INTO batal_jual
        (       kd_trx,
                id_barang,
                kasir,
                nama_brg,
                jumlah,
                harga,
                harga_total,
                tgl_trx
        )
  VALUES
        (      OLD.kd_trx,
               OLD.id_barang,
               OLD.kasir,
               OLD.nama_brg,
               OLD.jumlah,
               OLD.harga,
               OLD.harga_total,
               OLD.tgl_trx
        );
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `batal_jual_kembali_stok` AFTER INSERT ON `batal_jual` FOR EACH ROW BEGIN
	UPDATE barang SET jumlah=jumlah+NEW.jumlah
	WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `no_trx`
--

CREATE TABLE `no_trx` (
  `id` int(1) NOT NULL,
  `no_trx` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `no_trx`
--

INSERT INTO `no_trx` (`id`, `no_trx`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_sp` varchar(7) NOT NULL,
  `nm_sp` varchar(50) NOT NULL,
  `alamat_sp` text NOT NULL,
  `tlp_sp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_sp`, `nm_sp`, `alamat_sp`, `tlp_sp`) VALUES
('SP-002', 'CV. Busana Indah', 'Karawang 123', '0267 7678688'),
('SP-01', 'CV.Busana Anugerah', 'bandung', '022 3453453');

-- --------------------------------------------------------

--
-- Table structure for table `trx_out`
--

CREATE TABLE `trx_out` (
  `kd_trx` varchar(10) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `kasir` varchar(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `harga_total` int(10) NOT NULL,
  `tgl_trx` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `trx_out`
--
DELIMITER $$
CREATE TRIGGER `barang_terjual` AFTER INSERT ON `trx_out` FOR EACH ROW BEGIN
	UPDATE barang SET jumlah=jumlah-NEW.jumlah
	WHERE id_barang=NEW.id_barang;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `batal_tr_penjualan` AFTER DELETE ON `trx_out` FOR EACH ROW BEGIN


INSERT INTO `batal_jual`

(`kd_trx`, `id_barang`, `kasir`, `nama_brg`, `jumlah`, `harga`, `harga_total`, `tgl_trx`) VALUES 


(              OLD.kd_trx,
               OLD.id_barang,
               OLD.kasir,
               OLD.nama_brg,
               OLD.jumlah,
               OLD.harga,
               OLD.harga_total,
               OLD.tgl_trx
);

END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `trx_sementara`
--

CREATE TABLE `trx_sementara` (
  `kd_trx` varchar(15) NOT NULL,
  `id_barang` varchar(10) NOT NULL,
  `kasir` varchar(20) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(7) NOT NULL,
  `hrg_total` int(10) NOT NULL,
  `tgl_trx` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(7) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `no_tlp`, `level`) VALUES
('admin', 'admin', 'admin', 'admin', 'karawang', '085810506502', 'admin'),
('US-001', 'diah', '070897', 'diah komalasari', 'kampung munjul kidul, Desa Curug, Kecamatan Klari ', '083814137032', 'admin'),
('US-002', 'irpan', '12345', 'irpan', 'Kp. Banyu Resmi Kel. Banyu Resmi Kec. Bagendit Kota Garut', '083825772666', 'admin'),
('user', 'user', 'user', 'user', 'karawang', '085810506502', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`no_trx`);

--
-- Indexes for table `no_trx`
--
ALTER TABLE `no_trx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
