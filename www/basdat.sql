-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2015 at 11:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `basdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
`id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `isi` text NOT NULL,
  `id_map` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `kategori`, `isi`, `id_map`) VALUES
(1, 'ahahaha', 1, '<p>ahahaha</p>\r\n\r\n<p><img alt="" src="https://aiseistory.files.wordpress.com/2011/03/grha-sabha-pramana.jpg" style="height:172px; width:172px" /></p>\r\n', 1),
(2, 'campus', 1, '<p>campus</p>\r\n', 2),
(3, 'Parkiran Fakultas Teknik', 1, '<p>Masyarakat yang ada disekitar kampus-kampus di UGM tidak boleh parkir sembarangan tempat di sekitar kampus . Setiap kampus pasti ada tempat parkir untuk sepeda, sepeda motor ataupun mobil. Biasanya di dalam kampus ada satpam atau petugas untuk memberi selembar kartu kuning untuk karcis setiap kendaraan dan diberikan lagi ke petugas saat akan keluar dari area kampus. Jika tidak ada kartu kuning biasanya menggunakan STNK. Beberapa kantong parking di UGM.</p>\r\n\r\n<ol>\r\n	<li>Parkiran Fakultas Teknik</li>\r\n	<li>Parkiran PAU Pascasarjana</li>\r\n	<li>Parkiran Taman Biologi</li>\r\n	<li>Parkiran Perpustakaan</li>\r\n	<li>Parkiran Perpustakaan 2</li>\r\n	<li>Parkiran Lembah</li>\r\n	<li>Parkiran Lembah 2</li>\r\n	<li>Parkiran Fak. Ilmu Budaya</li>\r\n	<li>Parkiran Masjid Kampus</li>\r\n	<li>Parkiran Fakultas Hukum</li>\r\n	<li>Parkiran Fakultas Fisipol</li>\r\n	<li>Parkiran Fak. Ekonomi dan Bisnis</li>\r\n	<li>Parkiran Fakultas Kehutanan</li>\r\n	<li>Parkiran Fakultas Pertanian</li>\r\n	<li>Parkiran Fak. Teknologi Pertanian</li>\r\n	<li>Parkiran Diploma Ekonomi</li>\r\n	<li>Parkiran Gelanggang Mahasiswa</li>\r\n	<li>Parkiran Fakultas Geografi</li>\r\n	<li>Parkiran Fak. MIPA</li>\r\n	<li>Parkiran Fak. MIPA Selatan</li>\r\n	<li>Parkiran Gedung Perpustakaan Vokasi</li>\r\n</ol>\r\n\r\n<p>Parkiran Sekolah Vokasi</p>\r\n', 4),
(4, 'Masjid Kampus UGM', 5, '<p>Setiap mahasiswa UGM pasti tahu maskam(Masjid Kampus). Maskam terletak di utara kampus D3 Ekonomika dan Bisnis. InsyaAllah ada Lembaga yang memberikan kajian setiap pekan di Maskam. Selain mahasiswa UGM sendiri, masyarakat sekitar sering datang dan beribadah di Maskam UGM.</p>\r\n', 5),
(5, 'FoodCourt', 2, '<p>Foodcourt UGM, mahasiswa UGM mana yang tidak tahu tempat ini. Berarti dia benar-benar mahasiswa katrok nan ndeso.FoodCourt UGM adalah tempat makan yang disediakan oleh pihak Universitas untuk menampung PKL yang tadinya berjualan di sekitar UGM namun tidak tertib, kemudian muncul gagasan untun membuatkan tempat bagi para PKL(Pedagang Kaki Lima). FoodCourt terletak bersebelahan dengan gelanggang, jika membawa kendaraan bisa lewat bundaran UGM, jika jalan kaki, bisa lewat kopma.&nbsp; DI sini terdapat berbagai macam makanan tersedia, segala macam es, float, ayam geprek, nasi goreng, bakso, mie ayam, bakwan kawi, dan masih banyak lagi. Selain itu tersedia juga free-wifi bagi para mahasiswa yang suka nongkrong sambil wifi-an (fakir wifi).&nbsp;</p>\r\n', 6),
(6, 'Perpustakaan Pusat UGM', 1, '<p>Terletak di belakang auditorium Grha Sabha Pramana (GSP), merupakan bangunan perpustakaan 6 lantai yang terlengkap dan terbesar di UGM. Di sini terdapat berbagai macam buku untuk studi literatur, atau untuk menjadi bacaan bagi para mahasiswa yang suka membaca. Dilengkapi dengan fasilitas, lift, full AC, serta wifi, Perpustakaan Pusat juga sering dijadikan tempat untuk nongkrong untuk sekedar browsing internet. Selain itu, disediakan pula tempat untuk berdiskusi, belajar bersama di setiap lantainya. Di lantai bawah terdapat Sampoerna Corner, dengan fasilitas,AC, PC mac dengan koneksi internet cepat untuk digunakan belajar mahasiswa tetapi dengan waktu yang terbatas, yaitu 2 Jam</p>\r\n', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'campus'),
(2, 'food'),
(3, 'Fotocopy'),
(4, 'Accomodation'),
(5, 'Ibadah'),
(6, 'Belanja');

-- --------------------------------------------------------

--
-- Stand-in structure for view `lengkap`
--
CREATE TABLE IF NOT EXISTS `lengkap` (
`id` int(11)
,`judul` varchar(255)
,`kategori` varchar(255)
,`isi` text
,`id_map` int(11)
,`nama` varchar(255)
,`lat` double
,`lng` double
,`deskripsi` text
);
-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE IF NOT EXISTS `map` (
`id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `koordinat` point NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`id`, `nama`, `koordinat`, `deskripsi`) VALUES
(1, 'ugm', '\0\0\0\0\0\0\0nò≤ù¿ã@.ò[@', 'ini ugm test'),
(2, 'foodcourt', '\0\0\0\0\0\0\0nò≤ù¿‚ÊT2\0î[@', 'ini tempat makan fakir kampus haha'),
(3, 'maskam', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'ini maskam ugm'),
(4, 'gedung perpustakaan pusat', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'ini perpus vrohh'),
(5, 'gelanggang', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'ini gelang gank'),
(6, 'kos b45', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'tempat kebebasan'),
(7, 'bs', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'blimbing sayur'),
(8, 'gsp', '\0\0\0\0\0\0\0ã@.ò[@ã@.ò[@', 'aoisdhfiusdhfkugsdki'),
(9, 'poin', '\0\0\0\0\0\0\0ã@.ò[@gõ”ò[@', 'ppoiuy'),
(10, 'lol', '\0\0\0\0\0\0\0nò≤ù¿ã@.ò[@', 'sajidlaasdas'),
(11, 'lol', '\0\0\0\0\0\0\0ã@.ò[@nò≤ù¿', 'sajidlaasdas'),
(12, 'lokasi', '\0\0\0\0\0\0\0nò≤ù¿‚ÊT2\0î[@', 'askdlas'),
(13, 'asnklf', '\0\0\0\0\0\0\0nò≤ù¿‚ÊT2\0î[@', 'askmld;aslasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'qwerty');

-- --------------------------------------------------------

--
-- Structure for view `lengkap`
--
DROP TABLE IF EXISTS `lengkap`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lengkap` AS select `artikel`.`id` AS `id`,`artikel`.`judul` AS `judul`,`kategori`.`kategori` AS `kategori`,`artikel`.`isi` AS `isi`,`artikel`.`id_map` AS `id_map`,`map`.`nama` AS `nama`,st_x(`map`.`koordinat`) AS `lat`,st_y(`map`.`koordinat`) AS `lng`,`map`.`deskripsi` AS `deskripsi` from ((`artikel` join `kategori`) join `map`) where ((`artikel`.`id_map` = `map`.`id`) and (`artikel`.`kategori` = `kategori`.`id`)) group by `artikel`.`id`;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
 ADD PRIMARY KEY (`id`), ADD KEY `id_map` (`id_map`), ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
