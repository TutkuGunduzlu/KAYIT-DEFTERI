-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 02 Tem 2018, 14:36:14
-- Sunucu sürümü: 10.1.29-MariaDB
-- PHP Sürümü: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `rehber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisiler`
--

CREATE TABLE `kisiler` (
  `ad` varchar(30) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `mobilNo` varchar(15) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `evNo` varchar(15) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL,
  `eposta` varchar(30) CHARACTER SET utf16 COLLATE utf16_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kisiler`
--

INSERT INTO `kisiler` (`ad`, `mobilNo`, `evNo`, `eposta`) VALUES
('DILAN ÇIÇEK', '05321251547', '02123265963', 'dilancicek@gmail.com'),
('GIZEM BEKTAŞ', '05312655962', '03255418547', 'gizembektas@outlook.com'),
('MUHAMMED DEMIROL', '05321265214', '02123653265', 'muhammeddemirol@gmail.com'),
('REYHAN ÜNAL', '05312655962', '02162547848', 'reyhanunal@gmail.com'),
('RUKIYE BAKI', '05312655962', '03255418547', 'rukiyebaki@hotmail.com'),
('SEMRA GÜLER', '05362696859', '02142514852', 'semraguler@gmail.com'),
('SÜMBÜL KARADAĞ', '05321451586', '02123653265', 'sumbulkaradag@hotmail.com'),
('TUTKU GÜNDÜZLÜ', '05321546852', '03462514875', 'tutkugunduzlu@gmail.com'),
('YÜKSEL ASLAN', '05321544875', '02123265963', 'yukselaslan@hotmail.com'),
('ZEYNEP ÖZTÜRKMEN', '05362693541', '04462155854', 'zeynepoztrkmn@outlook.com');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisiler`
--
ALTER TABLE `kisiler`
  ADD PRIMARY KEY (`ad`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
