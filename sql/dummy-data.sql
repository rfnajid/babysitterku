-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2016 at 06:00 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babysitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(8) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'e8d341d7372d98a47a55730a0cb75fbd'),
('admin6', 'c6b853d6a7cc7ec49172937f68f446c8');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(9) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `headline` varchar(1000) NOT NULL,
  `isi` mediumtext NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(40) NOT NULL DEFAULT 'default.jpg',
  `link` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `headline`, `isi`, `tanggal`, `gambar`, `link`) VALUES
(1, 'Tes Judul', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi enim tellus, maximus eu tristique non, elementum et turpis. Ut vel arcu augue. Donec eu aliquam enim. Integer tincidunt consectetur iaculis. Vivamus nec lobortis dui, quis placerat mi. Morbi fermentum arcu lacus, ac fermentum tellus placerat et. Donec diam orci, euismod quis ipsum id, fermentum tincidunt magna. Morbi vehicula congue ultrices. Nulla facilisi. Curabitur non velit tortor.\r\n\r\nUt sapien odio, rutrum vitae ornare sed, tempor eu lacus. Quisque in fringilla lectus. Nullam aliquam tellus in purus faucibus, nec volutpat odio suscipit. Donec at diam eu metus maximus pellentesque pulvinar ac dolor. Duis vestibulum enim nec pharetra consequat. Sed at iaculis est. In efficitur lorem leo, eu venenatis elit finibus sit amet. Donec dui sem, laoreet sed laoreet at, dictum eu eros. Nullam ante tortor, facilisis vel dolor eu, tempor posuere tellus. Nulla quam urna, tincidunt nec suscipit dignissim, accumsan quis lacus.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi enim tellus, maximus eu tristique non, elementum et turpis. Ut vel arcu augue. Donec eu aliquam enim. Integer tincidunt consectetur iaculis. Vivamus nec lobortis dui, quis placerat mi. Morbi fermentum arcu lacus, ac fermentum tellus placerat et. Donec diam orci, euismod quis ipsum id, fermentum tincidunt magna. Morbi vehicula congue ultrices. Nulla facilisi. Curabitur non velit tortor.</p>\r\n\r\n<p>Ut sapien odio, rutrum vitae ornare sed, tempor eu lacus. Quisque in fringilla lectus. Nullam aliquam tellus in purus faucibus, nec volutpat odio suscipit. Donec at diam eu metus maximus pellentesque pulvinar ac dolor. Duis vestibulum enim nec pharetra consequat. Sed at iaculis est. In efficitur lorem leo, eu venenatis elit finibus sit amet. Donec dui sem, laoreet sed laoreet at, dictum eu eros. Nullam ante tortor, facilisis vel dolor eu, tempor posuere tellus. Nulla quam urna, tincidunt nec suscipit dignissim, accumsan quis lacus. Suspendisse potenti. Proin sem nisl, tincidunt eu vehicula sit amet, placerat at ante. Vestibulum quis sapien vestibulum, commodo nisi in, sodales augue. Curabitur ornare orci vitae lorem ultrices gravida. Donec viverra magna dui, at condimentum orci aliquam vel.</p>\r\n\r\n<p>Donec bibendum a massa sit amet pellentesque. Phasellus nulla felis, suscipit eu luctus ac, faucibus sed augue. Morbi lacinia dignissim sem, vitae dapibus velit rutrum et. Nullam fermentum enim a lectus mattis tempus. Curabitur sit amet ornare ligula. Aliquam tortor lorem, tincidunt eu venenatis condimentum, posuere quis nisi. Phasellus pharetra lorem non ante lacinia, vel pharetra nibh sodales.</p>\r\n\r\n<p>Nam molestie mi sit amet scelerisque condimentum. Donec vel augue sit amet nibh lacinia lobortis lobortis vel metus. Cras porttitor, urna rutrum faucibus facilisis, odio ante imperdiet ex, sit amet lobortis felis ex vitae tortor. Nullam ultricies risus nibh, ac semper risus porttitor vel. Suspendisse nec placerat nulla, posuere eleifend velit. Donec eu auctor est. Pellentesque a sapien sed nunc sagittis finibus vitae ac sem. Mauris metus nisi, tempor ac lacus vitae, placerat laoreet purus. Nunc ac sapien lacus. Quisque sed felis venenatis, pretium dolor eget, tristique mauris. Praesent fringilla ut arcu vel semper. Suspendisse potenti. Etiam ac mollis metus.</p>\r\n\r\n<p>Mauris iaculis turpis in vehicula volutpat. Phasellus efficitur eu sem ac placerat. Curabitur semper nisl eros, id volutpat ante consequat eu. Mauris tincidunt tempus sollicitudin. Fusce euismod libero non arcu vulputate, sed interdum urna maximus. Donec sollicitudin ipsum orci, scelerisque molestie neque rutrum sed. Aliquam venenatis, ligula ut sodales efficitur, felis eros posuere velit, ut porttitor massa sem id nunc. Mauris hendrerit at justo sit amet viverra. Sed tincidunt enim eget malesuada bibendum. Morbi convallis, ligula et viverra consequat, tellus lectus egestas mi, feugiat mollis neque lacus et diam.</p>\r\n\r\n<p>In hac habitasse platea dictumst. Aenean eget lectus porttitor, convallis ligula elementum, suscipit velit. Maecenas porta ac ante ut dapibus. Cras nunc nisi, interdum eget nulla quis, scelerisque fringilla nisl. Ut vestibulum, turpis eget dignissim feugiat, libero sem efficitur purus, eu luctus risus arcu non libero. Etiam ac justo sit amet lorem interdum hendrerit. Fusce malesuada mollis mi, eget tempus augue interdum at. In venenatis est quis risus tincidunt pharetra. Donec blandit maximus fermentum. Nullam molestie ante metus, eu suscipit nunc efficitur sed. Duis sit amet ultrices purus, eget ultrices eros. Pellentesque cursus sapien non magna dapibus rutrum. Nunc a felis ut sem eleifend egestas. Fusce auctor, nisl in consequat scelerisque, mi lectus dictum nulla, vel bibendum odio odio porttitor erat. Ut a porttitor nibh, a fringilla tortor.</p>\r\n\r\n<p>Cras ac lacinia erat. Morbi hendrerit consequat lectus, posuere euismod tortor eleifend eget. Duis bibendum nunc nec lacus mattis, sagittis malesuada velit vulputate. Donec feugiat urna sit amet lectus semper, sit amet rhoncus sapien dapibus. Vestibulum posuere libero non venenatis scelerisque. Sed sodales, quam at imperdiet bibendum, est augue molestie libero, nec efficitur elit turpis quis ipsum. Proin eget fringilla urna. Aliquam pretium nec mi vitae mollis. Phasellus faucibus, odio in aliquet accumsan, dui erat finibus dui, nec varius urna est sit amet erat. Sed dapibus justo ut urna elementum sagittis. Phasellus blandit vitae nisi eget laoreet. Donec euismod eros vel ipsum efficitur ornare. Cras posuere consectetur eros nec facilisis.</p>\r\n\r\n<p>Maecenas tellus orci, viverra nec malesuada sit amet, ultricies quis elit. Nulla ut arcu eget diam fringilla maximus. Ut eget porta risus, dignissim cursus dolor. Donec vitae bibendum mauris. Proin ultrices nibh sit amet ex bibendum aliquam. Vestibulum tincidunt neque vitae erat ullamcorper ornare. Duis lobortis hendrerit arcu vitae suscipit. Sed pellentesque leo a augue pulvinar facilisis id ac elit. Fusce dui odio, consectetur eget hendrerit ut, elementum sed enim. Integer tortor ex, viverra eget arcu sit amet, interdum rutrum arcu.</p>\r\n\r\n<p>Fusce sed tellus non ex suscipit pharetra vel et neque. Duis quis viverra tellus. Proin aliquam mattis tempor. Phasellus tincidunt eu turpis vel facilisis. Nulla tristique placerat suscipit. Aenean lacinia diam eros, non faucibus tortor sagittis eget. Cras eu lobortis enim, sit amet laoreet urna. Nulla sed facilisis risus, vel lobortis tellus. Aliquam a pretium nisi.</p>\r\n\r\n<p>Proin sollicitudin venenatis hendrerit. Donec nulla eros, suscipit eu pharetra ac, convallis et enim. Phasellus sem mauris, placerat ac tristique at, blandit eget neque. Suspendisse varius semper massa, vitae scelerisque nisi porta quis. Fusce pulvinar tortor porttitor tellus porttitor malesuada. Proin in placerat libero. Aliquam viverra dolor eu volutpat scelerisque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent commodo nibh eu arcu tempor mollis. Vivamus maximus turpis velit, sit amet iaculis nulla accumsan eget. Sed feugiat, mi vitae egestas finibus, nunc justo consectetur ante, id pellentesque enim felis et odio. Duis est lacus, cursus at dui a, scelerisque tempus magna.</p>\r\n', '2016-03-22', 'Tes-Judul.jpg', 'Tes-Judul');

-- --------------------------------------------------------

--
-- Table structure for table `babysitter`
--

CREATE TABLE IF NOT EXISTS `babysitter` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telpon` varchar(16) NOT NULL,
  `pendidikan` varchar(32) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `kelamin` varchar(16) NOT NULL,
  `usia` tinyint(3) unsigned NOT NULL,
  `tinggi` tinyint(3) unsigned NOT NULL,
  `berat` tinyint(3) unsigned NOT NULL,
  `kota` varchar(16) DEFAULT NULL,
  `provinsi` varchar(32) NOT NULL,
  `skill_level` varchar(16) NOT NULL,
  `pengalaman` varchar(256) NOT NULL,
  `foto` varchar(16) NOT NULL DEFAULT 'default.jpg',
  `jawa` tinyint(1) NOT NULL,
  `luar_jawa` tinyint(1) NOT NULL,
  `keyword` varchar(1000) NOT NULL,
  `status` varchar(16) NOT NULL DEFAULT 'Available'
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `babysitter`
--

INSERT INTO `babysitter` (`id`, `nama`, `alamat`, `telpon`, `pendidikan`, `agama`, `kelamin`, `usia`, `tinggi`, `berat`, `kota`, `provinsi`, `skill_level`, `pengalaman`, `foto`, `jawa`, `luar_jawa`, `keyword`, `status`) VALUES
(1, 'Bambang1', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Bandar Lampung', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(2, 'Bambang2', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(3, 'Bambang3', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(4, 'Bambang4', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(5, 'Bambang5', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(6, 'Bambang6', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(7, 'Bambang7', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(8, 'Bambang8', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(9, 'Bambang9', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(10, 'Bambang10', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(11, 'Bambang11', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(12, 'Bambang12', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(13, 'Bambang13', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(14, 'Bambang14', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(15, 'Bambang15', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(16, 'Bambang16', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(17, 'Bambang17', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(18, 'Bambang18', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(19, 'Bambang19', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(20, 'Bambang20', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(21, 'Bambang21', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(22, 'Bambang22', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(23, 'Bambang23', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(24, 'Bambang24', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(25, 'Bambang25', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(26, 'Bambang26', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(27, 'Bambang27', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(28, 'Bambang28', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(29, 'Bambang29', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(30, 'Bambang30', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(31, 'Bambang31', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(32, 'Bambang32', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(33, 'Bambang33', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(34, 'Bambang34', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(35, 'Bambang35', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(36, 'Bambang36', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(37, 'Bambang37', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(38, 'Bambang38', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(39, 'Bambang39', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(40, 'Bambang40', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(41, 'Bambang41', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(42, 'Bambang42', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(43, 'Bambang43', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(44, 'Bambang44', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(45, 'Bambang45', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(46, 'Bambang46', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(47, 'Bambang47', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(48, 'Bambang48', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(49, 'Bambang49', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(50, 'Bambang50', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(51, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(52, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(53, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(54, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(55, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available'),
(56, 'Bambang', 'Karang Gayam', '352264', 'S1', 'Islam', 'Laki-Laki', 0, 168, 53, 'Blitar', '', 'Junior', 'Belum Ada', '20ed84308.png', 1, 1, 'Fresh Graduate, Sumatra', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `carakerja`
--

CREATE TABLE IF NOT EXISTS `carakerja` (
  `carakerja` varchar(60) NOT NULL,
  `id` int(11) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carakerja`
--

INSERT INTO `carakerja` (`carakerja`, `id`, `deskripsi`, `gambar`) VALUES
('Pilih Babysitter Anda', 8, 'Pilih Babysitter sesuai dengan kriteria dan kebutuhan Anda. Isi lengkap data diri Anda.', 'c7bb31428.png'),
('Lengkapi Persyaratan Administrasi', 9, 'Setelah menentukan pilihan Perawat yang sesuai dengan kebutuhan Anda, silahkan melengkapi persyaratan administrasi yang harus Anda lakukan.', 'd816ed8a0.png'),
('Babysitter Datang Ke Rumah Anda', 10, 'Setelah melengkapi persyaratan administrasi dan terjadi kesepakatan, dalam waktu kurang dari 12 jam kami akan mengantarkan Babysitter kami.\r\n', '10.png');

-- --------------------------------------------------------

--
-- Table structure for table `diliput`
--

CREATE TABLE IF NOT EXISTS `diliput` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(16) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diliput`
--

INSERT INTO `diliput` (`id`, `nama`, `gambar`, `link`) VALUES
(1, 'Suro', '1.png', 'http://dandelionteam.com'),
(2, 'Google', '2bc298af1.jpg', 'http://google.co.uk');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id` tinyint(9) unsigned NOT NULL,
  `pertanyaan` varchar(256) NOT NULL,
  `jawaban` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `pertanyaan`, `jawaban`) VALUES
(1, 'Apakah layanan ini tidak gratis?', 'Ya. Tentu saja ada fee untuk babysitter'),
(2, 'Dimana Layanan ini Tersedia?', 'Untuk saat ini tersedia di Jakarta, Tangerang, Depok, Surabaya, Bandung, Semarang, dan Jogja');

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `foto` varchar(16) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_babysitter`
--

CREATE TABLE IF NOT EXISTS `gallery_babysitter` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `foto` varchar(15) NOT NULL,
  `deskripsi` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_babysitter`
--

INSERT INTO `gallery_babysitter` (`id`, `id_babysitter`, `foto`, `deskripsi`) VALUES
(1, 1, '5571016d3.jpg', 'Contoh');

-- --------------------------------------------------------

--
-- Table structure for table `kenapa`
--

CREATE TABLE IF NOT EXISTS `kenapa` (
  `id` int(11) NOT NULL,
  `kenapa` varchar(100) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `gambar` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kenapa`
--

INSERT INTO `kenapa` (`id`, `kenapa`, `deskripsi`, `gambar`) VALUES
(1, 'Babysitter Terbanyak', 'Kami memiliki list babysitter dari seluruh Indonesia yang siap bekerja kepada anda', 'aeb627294.png'),
(2, 'Terjamin', 'Jika tidak cocok dengan babysitter terpilih akan kami ganti', 'b252e7c36.png');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(11) NOT NULL,
  `jenis` varchar(16) NOT NULL,
  `isi` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `jenis`, `isi`) VALUES
(1, 'Hotline 1', '0811-2318-05'),
(2, 'Hotline 2', '0811-3663-747'),
(3, 'Email', 'admin@babysitterku.id');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `kota` varchar(16) NOT NULL,
  `provinsi` varchar(16) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=197 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`kota`, `provinsi`, `id`) VALUES
('Agam', 'Sumatera Barat', 144),
('Ambarawa', 'Jawa Tengah', 73),
('Asahan', 'Sumatera Utara', 123),
('Bandar Lampung', 'Lampung', 195),
('Bandung', 'Jawa Barat', 86),
('Bangkalan', 'Jawa Timur', 22),
('Bangkinang', 'Riau', 141),
('Banjar', 'Jawa Barat', 105),
('Banjarnegara', 'Jawa Tengah', 40),
('Bantul', 'D.I. Yogyakarta', 76),
('Banyumas', 'Jawa Tengah', 182),
('Banyuwangi', 'Jawa Timur', 8),
('Batam', 'Kepulauan Riau', 155),
('Batang', 'Jawa Tengah', 42),
('Batu', 'Jawa Timur', 18),
('Batubara', 'Sumatera Utara', 124),
('Batubulan', 'Bali', 81),
('Baturaja', 'Sumatera Selatan', 166),
('Bekasi', 'Jawa Barat', 88),
('Bengkalis', 'Riau', 140),
('Binjai', 'Sumatera Utara', 132),
('Bintan', 'Kepulauan Riau', 157),
('Blitar', 'Jawa Timur', 23),
('Blora', 'Jawa Tengah', 43),
('Bogor', 'Jawa Barat', 91),
('Bojonegoro', 'Jawa Timur', 24),
('Bondowoso', 'Jawa Timur', 11),
('Boyolali', 'Jawa Tengah', 44),
('Brebes', 'Jawa Tengah', 46),
('Bukittinggi', 'Sumatera Barat', 149),
('Ciamis', 'Jawa Barat', 90),
('Cibinong', 'Jawa Barat', 89),
('Cikarang', 'Jawa Barat', 87),
('Cilacap', 'Jawa Tengah', 47),
('Cilegon', 'Banten', 108),
('Cimahi', 'Jawa Barat', 106),
('Cirebon', 'Jawa Barat', 93),
('Dairi', 'Sumatera Utara', 125),
('Deli Serdang', 'Sumatera Utara', 126),
('Demak', 'Jawa Tengah', 48),
('Denpasar', 'Bali', 79),
('Depok', 'Jawa Barat', 92),
('Dharmasraya', 'Sumatera Barat', 145),
('Dumai', 'Riau', 142),
('Garut', 'Jawa Barat', 94),
('Gianyar', 'Bali', 80),
('Gresik', 'Jawa Timur', 20),
('Gunung Kidul', 'D.I. Yogyakarta', 77),
('Gunungsitoli', 'Sumatera Utara', 133),
('Indramayu', 'Jawa Barat', 95),
('Jakarta Barat', 'D.K.I. Jakarta', 117),
('Jakarta Pusat', 'D.K.I. Jakarta', 119),
('Jakarta Selatan', 'D.K.I. Jakarta', 121),
('Jakarta Timur', 'D.K.I. Jakarta', 118),
('Jakarta Utara', 'D.K.I. Jakarta', 116),
('Jambi', 'Jambi', 158),
('Jember ', 'Jawa Timur', 9),
('Jepara', 'Jawa Tengah', 50),
('Jogja', 'D.I. Yogyakarta', 161),
('Jombang', 'Jawa Timur', 25),
('Karanganyar', 'Jawa Tengah', 51),
('Karawang', 'Kalimantan Barat', 96),
('Karo', 'Sumatera Utara', 127),
('Kayuagung', 'Sumatera Selatan', 165),
('Kebumen', 'Jawa Tengah', 52),
('Kediri', 'Jawa Timur', 26),
('Kendal', 'Jawa Tengah', 53),
('Klaten', 'Jawa Tengah', 54),
('KUDUS', 'Jawa Tengah', 175),
('Kulon Progo', 'D.I. Yogyakarta', 78),
('Kuningan', 'Jawa Barat', 97),
('Kuta', 'Bali', 83),
('Labuhan Batu', 'Sumatera Utara', 128),
('Lahat', 'Sumatera Selatan', 163),
('Lamongan', 'Jawa Timur', 27),
('Lampung Barat', 'Lampung', 186),
('Lampung Selatan', 'Lampung', 185),
('Lampung Tengah', 'Lampung', 183),
('Lampung Timur', 'Lampung', 187),
('Lampung Utara', 'Lampung', 184),
('Langkat', 'Sumatera Utara', 129),
('Lebak', 'Banten', 111),
('Lubuklinggau', 'Sumatera Selatan', 168),
('Lumajang', 'Jawa Timur', 13),
('Madiun', 'Jawa Timur', 28),
('Magelang', 'Jawa Tengah', 55),
('Magetan', 'Jawa Timur', 29),
('Majalengka', 'Jawa Barat', 98),
('Malang', 'Jawa Timur', 15),
('Mandailing Natal', 'Sumatera Utara', 130),
('Medan', 'Sumatera Utara', 134),
('Mesuji', 'Lampung', 188),
('Metro', 'Lampung', 196),
('Mojokerto', 'Jawa Timur', 21),
('Muara Bungo', 'Jambi', 159),
('Muara Enim', 'Sumatera Selatan', 164),
('Muaradua', 'Sumatera Selatan', 167),
('Negara', 'Bali', 84),
('Nganjuk', 'Jawa Timur', 30),
('Ngawi', 'Jawa Timur', 31),
('Nias', 'Sumatera Utara', 131),
('Pacitan', 'Jawa Timur', 32),
('Padang', 'Sumatera Barat', 150),
('Padang Panjang', 'Sumatera Barat', 151),
('Padang Pariaman', 'Sumatera Barat', 146),
('Padangsidempuan', 'Sumatera Utara', 135),
('Pagar Alam', 'Sumatera Selatan', 169),
('Palembang', 'Sumatera Selatan', 170),
('Pamekasan', 'Jawa Timur', 33),
('Pandeglang', 'Banten', 112),
('Pangandaran', 'Jawa Barat', 99),
('Pangkal Pinang', 'Bangka Belitung', 172),
('Pariaman', 'Sumatera Barat', 152),
('Pasaman', 'Sumatera Barat', 148),
('Pasuruan', 'Jawa Timur', 16),
('Pati', 'Jawa Tengah', 56),
('Payakumbuh', 'Sumatera Barat', 153),
('Pekalongan', 'Jawa Tengah', 57),
('Pekanbaru', 'Riau', 143),
('Pemalang', 'Jawa Tengah', 58),
('Pematangsiantar', 'Sumatera Utara', 136),
('Pesawaran', 'Lampung', 189),
('Ponorogo', 'Jawa Timur', 34),
('Pringsewu', 'Lampung', 190),
('Probolinggo', 'Jawa Timur', 14),
('Purbalingga', 'Jawa Tengah', 60),
('Purwakarta', 'Jawa Barat', 100),
('Purwodadi', 'Jawa Tengah', 49),
('Purwokerto', 'Jawa Tengah', 41),
('Purworejo', 'Jawa Tengah', 61),
('Rembang', 'Jawa Tengah', 62),
('Salatiga', 'Jawa Tengah', 71),
('Sambas', 'Kalimantan Barat', 180),
('Sampang', 'Jawa Timur', 35),
('Sawahlunto', 'Sumatera Barat', 154),
('Semarang', 'Jawa Tengah', 64),
('Serang', 'Banten', 107),
('Sibolga', 'Sumatera Utara', 137),
('Sidoarjo', 'Jawa Timur', 19),
('Singaraja', 'Bali', 85),
('Situbondo', 'Jawa Timur', 10),
('Sleman', 'D.I. Yogyakarta', 75),
('Solo', 'Jawa Tengah', 162),
('Solok', 'Sumatera Barat', 147),
('Sragen', 'Jawa Tengah', 65),
('Subang', 'Jawa Barat', 101),
('Sukabumi', 'Jawa Barat', 102),
('Sukoharjo', 'Jawa Tengah', 66),
('Sumedang', 'Jawa Barat', 103),
('Sumenep', 'Jawa Timur', 36),
('Sungai Penuh', 'Jambi', 160),
('Sungailiat', 'Bangka Belitung', 171),
('Surabaya', 'Jawa Timur', 7),
('Surakarta', 'Jawa Tengah', 72),
('Tangerang', 'Banten', 109),
('Tangerang Selata', 'Banten', 110),
('Tanggamus', 'Lampung', 193),
('Tanjung Pinang', 'Kepulauan Riau', 156),
('Tanjungbalai', 'Sumatera Utara', 138),
('Tasikmalaya', 'Jawa Barat', 104),
('Tebing Tinggi', 'Sumatera Utara', 139),
('Tegal', 'Jawa Tengah', 67),
('Temanggung', 'Jawa Tengah', 68),
('Trenggalek', 'Jawa Timur', 37),
('Tuban', 'Jawa Timur', 38),
('Tulang Bawang', 'Lampung', 191),
('Tulang Bawang Ba', 'D.K.I. Jakarta', 192),
('Tulungagung', 'Jawa Timur', 39),
('Ubud', 'Bali', 82),
('Ungaran', 'Jawa Tengah', 63),
('Way Kanan', 'D.K.I. Jakarta', 194),
('Wonogiri', 'Jawa Tengah', 69),
('Wonosobo', 'Jawa Tengah', 70),
('Yogyakarta', 'D.I. Yogyakarta', 74);

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE IF NOT EXISTS `lamaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `kelamin` varchar(9) NOT NULL,
  `tempat_lahir` varchar(40) NOT NULL,
  `tanggal_lahir` tinyint(3) unsigned NOT NULL,
  `bulan_lahir` tinyint(3) unsigned NOT NULL,
  `tahun_lahir` smallint(4) unsigned NOT NULL,
  `tinggi_badan` tinyint(3) unsigned NOT NULL,
  `berat_badan` tinyint(3) unsigned NOT NULL,
  `anak_ke` tinyint(3) unsigned NOT NULL,
  `saudara` tinyint(3) unsigned NOT NULL,
  `agama` varchar(9) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `jalan` varchar(70) NOT NULL,
  `rt` tinyint(3) unsigned NOT NULL,
  `rw` tinyint(3) unsigned NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(32) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `asal_pendidikan` varchar(30) NOT NULL,
  `lulus_tahun` smallint(4) unsigned NOT NULL,
  `riwayat_penyakit` varchar(1024) NOT NULL DEFAULT '-',
  `nama_ortu` varchar(40) DEFAULT NULL,
  `pekerjaan_ortu` varchar(40) DEFAULT NULL,
  `nama_suami` varchar(40) DEFAULT NULL,
  `pekerjaan_suami` varchar(40) DEFAULT NULL,
  `posisi` varchar(28) NOT NULL,
  `foto_wajah` varchar(40) NOT NULL,
  `foto_seluruh_badan` varchar(40) DEFAULT NULL,
  `berkas_lamaran` varchar(40) DEFAULT NULL,
  `mengetahui` varchar(8) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `pengalaman` varchar(100) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `deskripsi` varchar(1024) NOT NULL DEFAULT '-',
  `tanggal` date NOT NULL,
  `status` enum('BELUM DICEK','SUDAH DICEK','AKAN DIPANGGIL','') DEFAULT 'BELUM DICEK'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id`, `nama`, `kelamin`, `tempat_lahir`, `tanggal_lahir`, `bulan_lahir`, `tahun_lahir`, `tinggi_badan`, `berat_badan`, `anak_ke`, `saudara`, `agama`, `active`, `jalan`, `rt`, `rw`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `telpon`, `email`, `pendidikan_terakhir`, `asal_pendidikan`, `lulus_tahun`, `riwayat_penyakit`, `nama_ortu`, `pekerjaan_ortu`, `nama_suami`, `pekerjaan_suami`, `posisi`, `foto_wajah`, `foto_seluruh_badan`, `berkas_lamaran`, `mengetahui`, `keahlian`, `pengalaman`, `gaji`, `deskripsi`, `tanggal`, `status`) VALUES
(1, 'Ridhazis Faranto Najid', 'LAKI-LAKI', 'Surabaya', 24, 11, 1994, 167, 70, 1, 3, 'ISLAM', 1, 'karan bulak', 0, 0, 'kaliasin', 'genteng', 'Surabaya', 'Jawa Timur', '081252364846', 'ridha@it.student.pens.ac.id', 'D3 LAINNYA', 'PENS', 1998, 'tidak ada', 'samsu', 'pns', '', '', '', 'w-Ridhazis-F_2016_04_07.png', 'b-Ridhazis-F_2016_04_07.png', 'f-Ridhazis-F_2016_04_07.zip', 'Teman', 'programmer', 'lumayan', '3,500,000', '-', '2016-04-07', 'BELUM DICEK'),
(2, 'Citra', 'PEREMPUAN', 'Bandung', 7, 12, 1990, 165, 50, 2, 2, 'ISLAM', 0, 'braga', 0, 0, 'bandung', 'bandung', 'bandung', 'Jawa Barat', '089135353135315', 'citra@mii.co.id', 'SMA SEDERAJAT', 'SMAN 3 BANDUNG', 2005, '', 'sugianto', 'businessman', '-', '-', '', 'w-Citra_2016_04_07.png', 'b-Citra_2016_04_07.png', 'f-Citra_2016_04_07.zip', 'Iklan', 'banyak ', 'sedikit', '2500000', '-', '2016-04-07', 'SUDAH DICEK');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE IF NOT EXISTS `layanan` (
  `layanan` varchar(32) NOT NULL,
  `id` int(11) NOT NULL,
  `deskripsi` varchar(512) NOT NULL,
  `link` varchar(100) NOT NULL,
  `gambar` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jenis` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_babysitter`
--

CREATE TABLE IF NOT EXISTS `order_babysitter` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `ktp` varchar(32) NOT NULL,
  `telpon` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `latitude` float(10,6) NOT NULL,
  `longitude` float(10,6) NOT NULL,
  `waktu_hubungi` varchar(64) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `tujuan` varchar(512) NOT NULL,
  `keterangan` varchar(512) NOT NULL,
  `status` enum('BELUM DICEK','SUDAH DICEK','SUDAH DIHUBUNGI') NOT NULL DEFAULT 'BELUM DICEK',
  `tanggal` date NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_babysitter`
--

INSERT INTO `order_babysitter` (`id`, `id_babysitter`, `nama`, `ktp`, `telpon`, `email`, `latitude`, `longitude`, `waktu_hubungi`, `jumlah_anak`, `tujuan`, `keterangan`, `status`, `tanggal`, `active`) VALUES
(1, 1, 'coba', '354252452', '454262', 'coba@email', 0.000000, 0.000000, 'besok jam 4', 2, 'tidak ada tujuan', 'mengasuh yang kecil', 'SUDAH DIHUBUNGI', '2016-04-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `link` varchar(32) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `nama`, `link`, `isi`) VALUES
(1, 'Syarat & Ketentuan', 'term', '<p>&lt;p style=&quot;text-align:center&quot;&gt;&lt;span style=&quot;font-size:18px&quot;&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;&lt;strong&gt;Syarat &amp;amp; Ketentuan Umum Pengambilan Perawat&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p style=&quot;text-align:center&quot;&gt;&amp;nbsp;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;Syarat Pengambilan Perawat.&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna Jasa atau Client adalah Warga Negara Indonesia (WNI) yang memiliki Kartu Identitas (KTP/SIM) atau Warga Negara Asing (WNA) yang memiliki Passport dan Visa ijin tinggal atau menetap di Indonesia.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna Jasa atau Client wajib mengisi formaulir secara online atau yang tersedia di Insan Medika sebelum pengambilan perawat.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna Jasa atau Client wajib melampirkan foto copy Kartu Identitas yang masih berlaku (KTP/SIM/Passport) setelah penandatanganan kontrak.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna Jasa atau Client wajib untuk membayar biaya administrasi kepada agency serta biaya transportasi yang besarnya ditentukan oleh Agency.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna jasa hanya berhak menggunakan 1 Perawat untuk merawat 1 pasien dan tidak diperkenankan menggunakan 1 Perawat untuk mengurus 2 pasien kecuali ada kesepakatan tertulis antara Pengguna Jasa dan Agency dengan pembayaran honor 2 kali lipat.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;Ketentuan Kontrak.&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Masa kontrak antara Pengguna Jasa dan Perawat anggota Agency Insan Medika adalah 1 tahun atau 6 bulan. Apabila sudah lewat masa kontrak, Pengguna Jasa dapat memperpajang atau memulangkan perawat.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Untuk perpanjangan masa kontrak, Pengguna Jasa dikenakan biaya 70% dari biaya administrasi awal, untuk perpanjangan kontrak seterusnya dikenakan biaya 50% dari biaya administrasi awal.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Apabila selama masa kontrak belum berakhir pasien meninggal, maka kontrak dengan otomatis berakhir. Pengguna Jasa wajib mengembalikan Perawat ke Insan Medika. Pengguna jasa tidak diperkenankan mengalihkan perawat untuk merawat pasien lain.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Apabila selama masa kontrak pasien sudah sembuh dan tidak memerlukan lagi Perawat, Pengguna Jasa dapat memulangkan Perawat.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Apabila selama masa kontrak terdapat ketidakcocokan antara Pengguna Jasa dan Perawat, maka Pengguna Jasa berhak meminta penukaran dengan Perawat baru. Garansi penukaran Perawat diberikan 3&amp;nbsp;kali selama masa 3 bulan pertama. Apabila sudah lewat garansi penukaran, maka Agency tidak berkewajiban untuk mencarikan pengganti kecuali pihak pengguna jasa melakukan pembayaran sebesar 70% dari biaya administrasi awal.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;Ketentuan Fee.&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pengguna jasa wajib membayar fee bulanan sebesar yang telah ditentukan oleh Agency.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Untuk setiap&amp;nbsp; perpanjangan kontrak dengan perawat yang sama, Pengguna Jasa dikenakan kenaikan fee sebesar 10%.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Pembayaran fee ditransfer maksimal setiap tanggal 10 setiap bulan nya.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;Ketentuan Tambahan.&lt;/strong&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Insan Medika akan menelepon atau melakukan kunjungan sewaktu-waktu untuk melihat kondisi tenaga kerja di rumah pengguna jasa dengan pemberitahuan dulu sebelumnya&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Perlu diketahui bahwa Perawat kami bukanlah Asisten rumah tangga yang dipekerjakan melakukan pekerjaan rumah tangga yang bukan porsinya seperti membersihkan rumah, mencuci pakaian seluruh keluarga serta memasak untuk satu rumah. Perawat kami hanya melakukan tugas atau pekerjaan yang berkaitan dengan pasien saja, seperti membersihkan kamar pasien, membuatkan makanan untuk pasien dll. Namun jika sudah ada Asisten Rumah Tangga alangkah baiknya tugas ini diberikan kepada Asisten Rumah Tangga yang ada sehingga Perawat kami bisa bekerja maksimal.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Perawat kami adalah tenaga professional yang telah menjalani pendidikan dan pelatihan, bekerja sesuai dengan Job order dan standar kompetensi yang telah kami berikan yaitu merawat pasien dan mencurahkan semua sumber daya untuk kesembuhan pasien.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Apabila Pengguna Jasa melanggar kesepakatan dengan memaksa Perawat kami melakukan pekerjaan Asisten Rumah Tangga untuk mengurus pekerjaan rumah tangga, serta tidak memberikan hak-hak perawat sesuai dengan yang terlampir dalam kontrak, Insan Medika akan memberikan teguran lisan, atau menarik Perawat kami dengan atau tanpa melalui persetujuan dari Pengguna Jasa.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Segala tindakan kriminal atau pidana yang dilakukan oleh tenaga kerja adalah bukan tanggung jawab pihak agency, untuk hal ini pihak agency membantu dalam memberikan informasi keberadaan tenaga kerja.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;</p>\r\n\r\n<p>&lt;ul&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;li&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;p&gt;&lt;span style=&quot;font-family:verdana,geneva,sans-serif&quot;&gt;Agar perawat betah bekerja, dihimbau, menjalin hubungan kerja yang baik. Diperhatikan kualitas komunikasi, makan cukup dan istirahat yang memadai. (Hindari komentar negatif, seperti: perawat kerjanya tidur terus, padahal, semalam, perawat yang bersangkutan begadang (tidak tidur), dan lain sebagainya.&lt;/span&gt;&lt;/p&gt;<br />\r\n&nbsp;&nbsp; &nbsp;&lt;/li&gt;<br />\r\n&lt;/ul&gt;<br />\r\n&nbsp;</p>\r\n'),
(2, 'About', 'about', '<p>&nbsp;</p>\r\n\r\n<p>Salam Hangat,</p>\r\n\r\n<p style="text-align:justify">Berawal dari sebuah Visi untuk menjadikan Indonesia yang lebih baik, mengurangi angka pengangguran serta meningkatkan derajat kualitas hidup masyarakat, kami hadir dengan sebuah konsep layanan kesehatan di rumah. Kami telah membantu menghubungkan ribuan orang pencari kerja&nbsp;di bidang kesehatan dengan ribuah client dari seluruh Indonesia untuk mendapatkan Perawat berkualitas. Perawat kami&nbsp;terdiri dari perawat profesional dengan latar belakang pendidikan di bidang kesehatan. Tidak hanya itu kami juga memberikan layanan pendukung yang terintegrasi dengan layanan healthcare. Kami berharap apa yang telah kami kerjakan ini memberikan dampak yang besar bagi banyak orang.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Try Wibowo</p>\r\n\r\n<p>CEO</p>\r\n'),
(3, 'Lowongan Kerja', 'lowongan', '<p style="text-align:center"><strong><span style="font-size:20px">PT Insan Medika Persada Membuka Lowongan Kerja&nbsp;</span></strong></p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<p style="text-align:center"><strong><span style="font-size:20px"><iframe align="top" frameborder="0" height="380" scrolling="no" src="https://www.youtube.com/embed/ngosPzObzoQ" width="550"></iframe></span></strong></p>\r\n\r\n<p style="text-align:center">&nbsp;</p>\r\n\r\n<p><strong><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Perawat Home Care Stand By</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Laki-laki atau Perempuan Sehat Jasmani &amp; Rohani Maksimal 35 Tahun</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Pendidikan Diploma&nbsp;Keperawatan atau&nbsp;Sarjana Keperawatan (Diutamakan Ners Yang Sudah Memiliki STR)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Pas Foto 3x4 (4&nbsp;lembar)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy KTP&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy Ijazah Terakhir Dilegalisir</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Transkrip Nilai&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Sertifikat Kompetensi&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy KK&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Surat Ijin Orang Tua&nbsp;</span></span></li>\r\n</ul>\r\n\r\n<p><strong><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Perawat Home Care Visit&nbsp;</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Laki-laki atau Perempuan Sehat Jasmani &amp; Rohani Maksimal 35 Tahun</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Berdomisili di Jabodetabek &amp; Jogja</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Pendidikan Diploma&nbsp;Keperawatan atau&nbsp;Sarjana Keperawatan, Diutamakan Ners Yang Sudah Memiliki STR</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Pengalaman Kerja Minimal 1 Tahun di Rumah Sakit/ Klinik (Diutamakan IGD &amp; ICU)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Pas Foto 3x4 (4&nbsp;lembar)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy KTP&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy Ijazah Terakhir Dilegalisir</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Transkrip Nilai&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Sertifikat Kompetensi&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy SKCK</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Memiliki Kendaraan Sendiri (SIM C)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Bersedia Melakukan Perawatan Visit (Home Care Visit)</span></span></li>\r\n</ul>\r\n\r\n<p><strong><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Caregiver / Perawat Lansia&nbsp;</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Laki-laki atau Perempuan Sehat Jasmani &amp; Rohani Maksimal 35 Tahun</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Pendidikan Diploma&nbsp;Kebidanan, D1 Asisten Perawat &amp; SMK Kesehatan</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Pas Foto 3x4 (4&nbsp;lembar)</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy KTP&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy Ijazah Terakhir Dilegalisir</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Transkrip Nilai&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Sertifikat Kompetensi Bagi Bidan</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Sertifikat Magang/PKL Bagi D1 &amp; SMK Kesehatan</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Foto Copy KK&nbsp;</span></span></li>\r\n	<li><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Menyerahkan Surat Ijin Orang Tua&nbsp;</span></span></li>\r\n</ul>\r\n\r\n<p><strong><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Fisioterapi</span></span></strong></p>\r\n\r\n<ul>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Laki - Laki atau perempuan sehat jasmani dan rohani, maksimal 35 tahun (Fisioterapi perempuan, khusus untuk Anak Berkebutuhan Khusus)</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Pendidikan Diploma 3 Fisioterapi atau SMK Kesehatan jurusan Keperawatan Sosial untuk Therapis Anak)</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Pas Foto 3x4 (4&nbsp;lembar)</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Foto Copy KTP&nbsp;</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Foto Copy Ijazah Terakhir Dilegalisir</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Transkrip Nilai&nbsp;</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Sertifikat Kompetensi&nbsp;</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Sertifikat Magang/PKL Bagi SMK Kesehatan</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Foto Copy KK&nbsp;</span></span></li>\r\n	<li><span style="font-size:14px"><span style="font-family:verdana,geneva,sans-serif">Menyerahkan Surat Ijin Orang Tua&nbsp;</span></span></li>\r\n</ul>\r\n\r\n<p><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">Kirim Lamaran Melalui Pos atau Datang Walk in Interview Langsung :</span></span></p>\r\n\r\n<p><strong><span style="font-size:16px"><span style="font-family:verdana,geneva,sans-serif">PT Insan Medika Persada</span></span></strong></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Jl. Ringroad Timur No 21 D Banguntapan, Bantul, Daerah Istimewa Yogyakarta</span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Telp (0274) 4546 041&nbsp;- 0823 0245 7282&nbsp;</span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">Atau Melalui Email :</span></span></p>\r\n\r\n<p><span style="font-family:verdana,geneva,sans-serif"><span style="font-size:14px">lamar.insanmedika@gmail.com</span></span></p>\r\n\r\n<p style="text-align:center"><a href="http://www.insanmedika.co.id/lamaran"><img alt="" src="http://world.smslane.com/images/register_button.jpg" style="height:66px; width:269px" /></a></p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(4, 'Syarat & Ketentuan Babysitter', 'tos-tenaga-kerja', '<p>&nbsp;</p>\r\n\r\n<p style="text-align:center"><span style="font-size:18px"><strong>Syarat dan ketentuan menjadi Anggota Perawat Insan Medika</strong></span></p>\r\n\r\n<ol><br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Laki-laki/Perempuan sehat jasmani dan rohani (tidak bertato dan tidak cacat) warga negara Indonesia berusia minimal 17 tahun, Usia maksimal 35 tahun dan bersedia bekerja sesuai dengan posisi yang dipilih dengan job diskripsi yang telah ditentukan.</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Lulusan SMK Kesehatan, D1 Keperawatan, D3 Keperawatan - S1 Keperawatan</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Melampirkan foto copy Kartu Keluarga 2 lembar</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Melampirkan foto copy Ijasah terakhir 3 lembar</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Melampirkan pas foto 3x4 berwarna (4 lembar)</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Anggota Insan Medika wajib menyerahkan segala persyaratan administrasi sebelum pelatihan dan penandatanganan kontrak kerja.</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Bersedia stand by di rumah pasien selama pasien sakit, atau menemani pasien di RS</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Anggota Insan Medika bersedia tinggal di rumah client dan bersedia untuk ditempatkan di kota yang telah ditunjuk oleh Agency atau sesuai dengan kesepakatan.</li>\r\n	<br />\r\n	<li>&nbsp;&nbsp; &nbsp;</li>\r\n	<li>Anggota Insan Medika wajib untuk mematuhi tata tertib Agency serta poin-poin yang tertulis dalam kontrak kerja.</li>\r\n	<br />\r\n	<br />\r\n	&nbsp;\r\n</ol>\r\n\r\n<p><br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
  `id` tinyint(3) unsigned NOT NULL,
  `paket` varchar(32) NOT NULL,
  `deskripsi` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `gambar` varchar(16) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi` varchar(32) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`provinsi`, `id`) VALUES
('D.K.I. Jakarta', 1),
('Nanggroe Aceh Darussalam', 5),
('Sumatera Utara', 6),
('Sumatera Barat', 7),
('Riau', 8),
('Kepulauan Riau', 9),
('Jambi', 10),
('Bengkulu', 11),
('Bangka Belitung', 12),
('Sumatera Selatan', 13),
('Lampung', 14),
('Banten', 15),
('Jawa Barat', 16),
('Jawa Tengah', 17),
('D.I. Yogyakarta', 18),
('Jawa Timur', 19),
('Bali', 21),
('Nusa Tenggara Barat', 22),
('Nusa Tenggara Timur', 23),
('Kalimantan Barat', 24),
('Kalimantan Tengah', 25),
('Kalimantan Selatan', 26),
('Kalimantan Timur', 27),
('Kalimantan Utara', 28),
('Sulawesi Utara', 29),
('Sulawesi Selatan', 33),
('Sulawesi Barat', 34),
('Sulawesi Tenggara', 35),
('Sulawesi Tengah', 36),
('Gorontalo', 37),
('Maluku', 38),
('Maluku Utara', 39),
('Papua', 40),
('Papua Barat', 41),
('LOMBOK', 42),
('KUPANG', 43);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL,
  `id_babysitter` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `review` varchar(512) NOT NULL,
  `bintang` smallint(1) unsigned NOT NULL,
  `status` varchar(32) NOT NULL DEFAULT 'BELUM DICEK'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` smallint(5) unsigned NOT NULL,
  `nama` varchar(40) NOT NULL,
  `gambar` varchar(40) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `nama`, `gambar`, `link`) VALUES
(1, 'Bayi', '87fe5ecc7.jpg', ''),
(2, 'Momongan', 'fb31fe1d3.jpg', ''),
(3, 'Tes', '7599742c6.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(9) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `isi` mediumtext NOT NULL,
  `video` varchar(128) NOT NULL,
  `cover` varchar(40) NOT NULL,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `nama`, `isi`, `video`, `cover`, `foto`) VALUES
(1, 'Entrepreneur Muda', 'Rishi adalah seorang social entrepreneur yang membantu masyarakat tidak beruntung memasang panel tenaga surya di rumah mereka secara gratis. Ketika pindah ke apartemen baru, Rishi mendapatkan bantuan dari pandai ahli untuk memperbaiki beberapa perlengkapan interior apartemen.', 'https://www.youtube.com/watch?v=RwnSX-3ncSA', 'e0a490473.jpg', '1.jpg'),
(2, '#1 Youtuber', 'Pewdiepie adalah seorang komentator permainan video Swedia di YouTube. Felix menspesialisasi dalam permainan video bergenre horor dan aksi. Salurannya adalah salah satu saluran di YouTube dengan pertumbuhan tercepat, dan pada 11 Juli 2013, ia memiliki lebih dari 10 juta pelanggan', 'https://www.youtube.com/watch?v=5DvgE04YzU8', '2.jpg', '2.jpg'),
(3, 'Gadis', 'Bambangi adalah sebuah nama laki-laki Indonesia yang banyak digunakan oleh suku Jawa. Nama ini berarti ksatria. Tokoh-tokoh yang bernama Bambang antara lain adalah: Agus Bambang Priyanto, salah satu relawan pertama yang membantu korban Bom Bali.', 'https://www.youtube.com/watch?v=0-ZSoZScqBU', 'd9878720c.jpg', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE IF NOT EXISTS `tim` (
  `id` tinyint(3) unsigned NOT NULL,
  `foto` varchar(16) NOT NULL DEFAULT 'default.jpg',
  `nama` varchar(50) NOT NULL,
  `job` varchar(16) NOT NULL,
  `keterangan` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tim`
--

INSERT INTO `tim` (`id`, `foto`, `nama`, `job`, `keterangan`) VALUES
(1, '1.jpg', 'Tes', 'tes', 'Orang yang sangat berbakat dan multitalent');

-- --------------------------------------------------------

--
-- Table structure for table `youtube`
--

CREATE TABLE IF NOT EXISTS `youtube` (
  `id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(64) NOT NULL,
  `thumbnail` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `youtube`
--

INSERT INTO `youtube` (`id`, `judul`, `link`, `thumbnail`) VALUES
(1, 'Testimoni 1', 'https://www.youtube.com/watch?v=S-FmGZXcKNo', '1.jpg'),
(2, 'Testimoni 2', 'https://www.youtube.com/watch?v=a2W_SJOjlpI', '0e1159ea3.jpg'),
(3, 'Testimoni 3', 'https://www.youtube.com/watch?v=ngosPzObzoQ', 'b2beb70c1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `link_artikel` (`link`);

--
-- Indexes for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kota` (`kota`),
  ADD KEY `provinsi` (`provinsi`),
  ADD KEY `kelamin` (`kelamin`),
  ADD KEY `agama` (`agama`),
  ADD KEY `usia` (`usia`),
  ADD FULLTEXT KEY `keyword` (`keyword`);

--
-- Indexes for table `carakerja`
--
ALTER TABLE `carakerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diliput`
--
ALTER TABLE `diliput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_babysitter`
--
ALTER TABLE `gallery_babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`);

--
-- Indexes for table `kenapa`
--
ALTER TABLE `kenapa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jenis` (`jenis`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`kota`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `provinsi` (`provinsi`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`layanan`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`jenis`) USING BTREE;

--
-- Indexes for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`provinsi`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_suster` (`id_babysitter`,`id_user`),
  ADD KEY `review_user` (`id_user`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `youtube`
--
ALTER TABLE `youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `babysitter`
--
ALTER TABLE `babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `carakerja`
--
ALTER TABLE `carakerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `diliput`
--
ALTER TABLE `diliput`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` tinyint(9) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_babysitter`
--
ALTER TABLE `gallery_babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kenapa`
--
ALTER TABLE `kenapa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `youtube`
--
ALTER TABLE `youtube`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `babysitter`
--
ALTER TABLE `babysitter`
  ADD CONSTRAINT `suster_kota` FOREIGN KEY (`kota`) REFERENCES `kota` (`kota`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `kota`
--
ALTER TABLE `kota`
  ADD CONSTRAINT `kota_ibfk_1` FOREIGN KEY (`provinsi`) REFERENCES `provinsi` (`provinsi`) ON UPDATE CASCADE;

--
-- Constraints for table `order_babysitter`
--
ALTER TABLE `order_babysitter`
  ADD CONSTRAINT `order_babysitter_ibfk_1` FOREIGN KEY (`id_babysitter`) REFERENCES `babysitter` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_suster` FOREIGN KEY (`id_babysitter`) REFERENCES `babysitter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
