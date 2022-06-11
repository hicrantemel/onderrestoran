-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 May 2022, 22:21:10
-- Sunucu sürümü: 5.7.31
-- PHP Sürümü: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `onderes`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `fiyat` int(11) NOT NULL,
  `resmi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kid` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `adi`, `fiyat`, `resmi`, `kid`, `gg`) VALUES
(1, 'İSKENDER', 40, 'etyemekleri13.jpg', 1, 1),
(2, 'KUZU GERDAN', 140, 'etyemekleri2.jpg', 1, 1),
(3, 'KUZU SIRTI', 140, 'etyemekleri3.jpg', 1, 1),
(4, 'TİRİT YEMEĞİ', 50, 'etyemekleri12.jpg', 1, 1),
(5, 'AFYON KEBABI (RAMAZAN KEBABI)', 50, 'etyemekleri5.jpg', 1, 1),
(6, 'KAYSERİ YAĞLAMASI', 50, 'etyemekleri6.jpg', 1, 1),
(7, 'ZADE KEBABI', 50, 'etyemekleri7.jpg', 1, 1),
(8, 'BOLU KÖFTESİ', 50, 'etyemekleri9.jpg', 1, 1),
(9, 'FIRIN KEBABI', 50, 'etyemekleri10.jpg', 1, 1),
(10, 'ÇEBİÇ', 50, 'etyemekleri11.jpg', 1, 1),
(11, 'OVMAÇ ÇORBASI', 25, 'corba1.jpg', 2, 1),
(12, 'İMARET ÇORBASI', 25, 'corba2.jpg', 2, 1),
(13, 'BAKLA ÇORBASI', 25, 'corba3.jpg', 2, 1),
(14, 'ARABAŞI ÇORBASI', 25, 'corba4.jpg', 2, 1),
(15, 'BAMYA ÇORBASI', 25, 'corba5.jpg', 2, 1),
(16, 'KONYA USULÜ ETLİ TOPALAK', 25, 'corba6.jpg', 2, 1),
(17, 'ERİŞTELİ YOĞURT ÇORBASI', 25, 'corba7.jpg', 2, 1),
(18, 'İSKORPİT ÇORBASI', 25, 'corba8.jpg', 2, 1),
(19, 'ISPANAK ÇORBASI', 25, 'corba9.jpg', 2, 1),
(20, 'KARALAHANA ÇORBASI', 25, 'corba10.jpg', 2, 1),
(21, 'SARAY HELVASI', 40, 'tatli1.jpg', 3, 1),
(22, 'SAC ARASI', 40, 'tatli2.jpg', 3, 1),
(23, 'MAFİŞ TATLISI', 40, 'tatli3.jpg', 3, 1),
(24, 'KABAK TATLISI', 40, 'tatli4.jpg', 3, 1),
(25, 'KEMALPAŞA TATLISI', 40, 'tatli5.jpg', 3, 1),
(26, 'TAŞ KADAYIF', 40, 'tatli6.jpg', 3, 1),
(27, 'LİMONLU PALUZE', 40, 'tatli7.jpg', 3, 1),
(28, 'SÜTLAÇ', 40, 'tatli11.jpg', 3, 1),
(29, 'KAZANDİBİ', 40, 'tatli9.jpg', 3, 1),
(30, 'HAVUÇ DİLİMİ BAKLAVA', 40, 'tatli10.jpg', 3, 1),
(31, 'ABANT KEBABI', 50, 'sebze1.jpg', 4, 1),
(32, 'ÇIRPMA', 50, 'sebze2.jpg', 4, 1),
(33, 'PATLICAN KAPAMA', 50, 'sebze3.jpg', 4, 1),
(34, 'KABAK ÇİÇEĞİ DOLMASI', 50, 'sebze4.jpg', 4, 1),
(35, 'BAMYA DOLMASI', 50, 'sebze5.jpg', 4, 1),
(36, 'KABAK ÇİNTMESİ', 50, 'sebze6.jpg', 4, 1),
(37, 'BAKLALI SARMA', 50, 'sebze7.jpg', 4, 1),
(38, 'MADIMAK', 50, 'sebze8.jpg', 4, 1),
(39, 'BAKLALI VE BEZELYELİ ENGİNAR', 50, 'sebze9.jpg', 4, 1),
(40, 'İLİBADA DOLMASI', 50, 'sebze10.jpg', 4, 1),
(41, 'MENGEN PİLAVI', 50, 'pilav1.jpg', 4, 1),
(42, 'PAŞA PİLAVI', 50, 'pilav2.jpg', 4, 1),
(43, 'GÖKÇESU PİLAVI', 50, 'pilav3.jpg', 4, 1),
(44, 'MANTARLI PİLAV', 50, 'pilav4.jpg', 4, 1),
(45, 'PATLICANLI VE ETLİ BULGUR PİLAVI', 50, 'pilav5.jpg', 4, 1),
(46, 'BOLU USULÜ KIYMALI KÜMBE', 30, 'borek2.jpg', 5, 1),
(47, 'TATAR BÖREĞİ', 30, 'borek3.jpg', 5, 1),
(48, 'ÇİBÖREK', 30, 'borek4.jpg', 5, 1),
(49, 'KAVURMA BÖREĞİ', 30, 'borek5.jpg', 5, 1),
(50, 'MEVLANA BÖREĞİ', 30, 'borek6.jpg', 5, 1),
(51, 'YUFKALI TANDIR BÖREĞİ', 30, 'borek7.jpg', 5, 1),
(52, 'SU BÖREĞİ', 30, 'borek8.jpg', 5, 1),
(53, 'PEYNİRLİ AFYON BÖREĞİ', 30, 'borek9.jpg', 5, 1),
(54, 'ISPANAKLI BÖREK', 30, 'borek10.jpg', 5, 1),
(55, 'ÇARŞAF BÖREĞİ', 30, 'borek11.jpg', 5, 1),
(56, 'AĞZI AÇIK PİDE', 30, 'pide1.jpg', 5, 1),
(57, 'KONYA BIÇAK ARASI PİDE', 30, 'pide2.jpg', 5, 1),
(58, 'CANTİK PİDESİ', 30, 'pide3.jpg', 5, 1),
(59, 'HAŞHAŞLI PİDE', 30, 'pide4.jpg', 5, 1),
(60, 'ÇARŞAMBA PİDESİ', 30, 'pide5.jpg', 5, 1),
(61, 'REYHAN ŞERBETİ', 10, 'icecek1.jpg', 6, 1),
(62, 'GÜL ŞERBETİ', 10, 'icecek2.jpg', 6, 1),
(63, 'DEMİRHİNDİ ŞERBETİ', 10, 'icecek3.jpg', 6, 1),
(64, 'LİMONATA', 10, 'icecek4.jpg', 6, 1),
(65, 'SALEP', 10, 'icecek5.jpg', 6, 1),
(66, 'KAVUNLU NANELİ SOĞUK ÇAY', 10, 'icecek6.jpg', 6, 1),
(67, 'ÇAY', 10, 'icecek7.jpg', 6, 1),
(68, 'KAHVE', 10, 'icecek8.jpg', 6, 1),
(69, 'MUZLU SÜT', 10, 'icecek9.jpg', 6, 1),
(70, 'AYRAN', 10, 'icecek10.jpeg', 6, 1),
(71, 'yÄ±ÅŸyhgf', 25, 'etyemekleri2', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
