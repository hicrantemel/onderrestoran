-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 May 2022, 22:21:22
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
-- Tablo için tablo yapısı `rezervasyon`
--

DROP TABLE IF EXISTS `rezervasyon`;
CREATE TABLE IF NOT EXISTS `rezervasyon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `sadi` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(60) COLLATE utf8mb4_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `mesaj` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kisi` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  `kid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `rezervasyon`
--

INSERT INTO `rezervasyon` (`id`, `adi`, `sadi`, `email`, `konu`, `tarih`, `mesaj`, `kisi`, `gg`, `kid`) VALUES
(1, 'semih', 'aktaş', 'semih@gmail.com', 'doğum günü', '2022-05-11', 'djhhdh fdhfhdhfdfsdgfuyg', 50, 0, 1),
(2, 'hicran', 'aktaş', 'semih@gmail.com', 'doğum günü', '2022-05-11', 'wegh', 50, 1, 2),
(3, 'eklendi', 'dfg', 'jfjkgnd@gmail.com', 'doğum günü', '2022-05-15', 'dxfghjk', 50, 1, 1),
(4, 'eklendi', 'temel', 'jfjkgnd@gmail.com', 'doğum günü', '2022-05-05', 'cfghjk', 50, 1, 1),
(7, 'rakiye', 'özkaya', 'hazaraga@hotmail.com', 'doğum günü', '2022-05-22', 'kuzu eti mantar ciger yasak', 4, 1, 1),
(5, 'hazar', 'ağa', 'hazaraga@hotmail.com', 'aşiret yemeği', '2022-05-21', 'KJHDIHSDHF', 500, 1, 1),
(6, 'hazar', 'ağa', 'hazaraga@hotmail.com', 'aşiret yemeği', '2022-05-21', 'ASDFGHBJKLŞ', 500, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
