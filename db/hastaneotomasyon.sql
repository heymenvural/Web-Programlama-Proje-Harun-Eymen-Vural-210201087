-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2024, 03:21:48
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hastaneotomasyon`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adminler`
--

CREATE TABLE `adminler` (
  `admin_id` int(11) NOT NULL,
  `admin_ad` varchar(50) NOT NULL,
  `admin_soyad` varchar(50) NOT NULL,
  `admin_tc` varchar(11) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `adminler`
--

INSERT INTO `adminler` (`admin_id`, `admin_ad`, `admin_soyad`, `admin_tc`, `admin_pass`) VALUES
(1, 'Harun Eymen', 'Vural', '25603229986', '12345'),
(2, 'Behic', 'Elibol', '14383545058', 'behic123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doktor`
--

CREATE TABLE `doktor` (
  `doktor_id` int(11) NOT NULL,
  `doktor_ad` varchar(255) NOT NULL,
  `doktor_soyad` varchar(255) NOT NULL,
  `doktor_hastane` varchar(255) NOT NULL,
  `doktor_klinik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `doktor`
--

INSERT INTO `doktor` (`doktor_id`, `doktor_ad`, `doktor_soyad`, `doktor_hastane`, `doktor_klinik`) VALUES
(1, 'Eymen', 'Vural', 'Kocaeli Üniversitesi Araştırma Hastanesi', 'Nöroloji'),
(2, 'Dilara ', 'GÖRMEZ AÇIK', 'Kocaeli Üniversitesi Araştırma Hastanesi', 'Kardiyoloji'),
(3, 'Behic', 'Elibol', 'Seka Devlet Hastanesi', 'Ağız Ve Diş Sağlığı'),
(4, 'Kübra', 'ERAT', 'Seka Devlet Hastanesi', 'Genel Cerrahi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hasta`
--

CREATE TABLE `hasta` (
  `user_id` int(11) NOT NULL,
  `user_ad` varchar(50) NOT NULL,
  `user_soyad` varchar(50) NOT NULL,
  `user_sifre` varchar(255) NOT NULL,
  `user_tc` varchar(11) NOT NULL,
  `user_tel` varchar(15) NOT NULL,
  `user_mail` varchar(100) NOT NULL,
  `user_adres` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `hasta`
--

INSERT INTO `hasta` (`user_id`, `user_ad`, `user_soyad`, `user_sifre`, `user_tc`, `user_tel`, `user_mail`, `user_adres`) VALUES
(1, 'Kemal', 'Tekoğlan', '1234', '10000000001', '5553686745', 'kemaltekeoglan@gmail.com', 'Kent 5'),
(2, 'Ceyhun', 'Erdemir', '1234', '10000000002', '5316789867', 'ceyhunerdemir@gmail.com', 'Kadıköy Mahallesi'),
(3, 'İrem', 'Doğancı', '1234', '10000000003', '5411233225', 'iremdoganci@gmail.com', 'Semihayverdi KYK Kız Yurdu'),
(4, 'Ece Damlasu', 'Duran', '1234', '10000000004', '5328414120', 'edaduran@gmail.com', 'Kent 1'),
(5, 'Emine Beyza', 'Tufan', '1234', '10000000005', '5416781887', 'eminebeyzatufi@gmail.com', 'Kız KYK Yurdu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_tarih` date NOT NULL,
  `randevu_saat` time NOT NULL,
  `randevu_hastane` varchar(255) NOT NULL,
  `randevu_klinik` varchar(255) NOT NULL,
  `randevu_doktor` varchar(255) NOT NULL,
  `randevu_hasta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_tarih`, `randevu_saat`, `randevu_hastane`, `randevu_klinik`, `randevu_doktor`, `randevu_hasta_id`) VALUES
(5, '2024-05-22', '11:00:00', 'Kocaeli Üniversitesi Araştırma Hastanesi', 'Nöroloji', 'Eymen', 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `adminler`
--
ALTER TABLE `adminler`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_tc` (`admin_tc`);

--
-- Tablo için indeksler `doktor`
--
ALTER TABLE `doktor`
  ADD PRIMARY KEY (`doktor_id`);

--
-- Tablo için indeksler `hasta`
--
ALTER TABLE `hasta`
  ADD PRIMARY KEY (`user_id`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`),
  ADD KEY `randevu_hasta_id` (`randevu_hasta_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `adminler`
--
ALTER TABLE `adminler`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `doktor`
--
ALTER TABLE `doktor`
  MODIFY `doktor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `hasta`
--
ALTER TABLE `hasta`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `randevu`
--
ALTER TABLE `randevu`
  ADD CONSTRAINT `randevu_ibfk_1` FOREIGN KEY (`randevu_hasta_id`) REFERENCES `hasta` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
