-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 24 May 2022, 22:20:50
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
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi_sadi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(25) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kid` int(11) NOT NULL,
  `gg` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adi_sadi`, `email`, `konu`, `mesaj`, `kid`, `gg`) VALUES
(1, 'hicran temel', 'hazaraga@hotmail.com', 'tuvaletler', 'RDFVVHKGHGDGJHJLHKG', 0, 1),
(2, 'hicran temel', 'hazaraga@hotmail.com', 'tuvaletler', 'RDFVVHKGHGDGJHJLHKG', 1, 1),
(3, 'hicran temel', 'hazaraga@hotmail.com', 'tuvaletler', 'FGHJGFDSFGHJHGFDS', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
