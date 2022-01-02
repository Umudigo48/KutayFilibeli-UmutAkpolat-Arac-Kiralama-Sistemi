-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 02 Oca 2022, 00:29:41
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `aracKiralama`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aracBilgileri`
--

CREATE TABLE `aracBilgileri` (
  `id` int(11) NOT NULL,
  `aciklama_metni` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `airbag_sayisi` int(11) NOT NULL,
  `arac_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `arac_anlik_km` int(11) NOT NULL,
  `bagaj_hacmi` int(11) NOT NULL,
  `baslik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `foto_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `gunluk_kiralik_fiyati` int(11) NOT NULL,
  `gunluk_km_sinir` int(11) NOT NULL,
  `koltuk_sayisi` int(11) NOT NULL,
  `min_ehliyet_yasi` int(11) NOT NULL,
  `modeli` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `rezerve` int(11) NOT NULL,
  `teslim_alinma_tarihi` date NOT NULL,
  `teslim_edilecegi_tarih` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `aracBilgileri`
--

INSERT INTO `aracBilgileri` (`id`, `aciklama_metni`, `airbag_sayisi`, `arac_adi`, `arac_anlik_km`, `bagaj_hacmi`, `baslik`, `foto_adi`, `gunluk_kiralik_fiyati`, `gunluk_km_sinir`, `koltuk_sayisi`, `min_ehliyet_yasi`, `modeli`, `rezerve`, `teslim_alinma_tarihi`, `teslim_edilecegi_tarih`) VALUES
(1, 'passat araci ile keyfini cikarin', 4, 'passat', 4000, 344, 'Passat ', 'passat.jpg', 300, 300, 4, 18, 'passat', 0, '2022-01-02', '2022-01-13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiralik_bilgileri`
--

CREATE TABLE `kiralik_bilgileri` (
  `id` int(11) NOT NULL,
  `alinan_ucret` int(11) NOT NULL,
  `alinma_tarihi` date NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `musteri_ad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `musteri_soyad` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `son_km` int(11) NOT NULL,
  `verilis_km` int(11) NOT NULL,
  `verilme_tarihi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kiralik_bilgileri`
--

INSERT INTO `kiralik_bilgileri` (`id`, `alinan_ucret`, `alinma_tarihi`, `kullanici_id`, `musteri_ad`, `musteri_soyad`, `son_km`, `verilis_km`, `verilme_tarihi`) VALUES
(1, 34, '2022-01-14', 1, 'kadir', 'yaren', 300, 3, '2021-12-11'),
(2, 234, '2022-01-04', 1, 'kadir', '2342', 300, 234, '2022-01-01'),
(3, 234, '2022-01-07', 1, '234', '234', 300, 45, '2022-01-01'),
(4, 234, '2022-01-07', 1, '234', '234', 300, 45, '2022-01-01'),
(5, 234, '2022-01-13', 1, '345', '345', 300, 345, '2022-01-02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `kullanici_tipi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `sifre` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `kullanici_tipi`, `sifre`) VALUES
(1, 'kadir', 'yonetici', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `rezervasyon`
--

CREATE TABLE `rezervasyon` (
  `id` int(11) NOT NULL,
  `adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `aracId` int(11) NOT NULL,
  `soyadi` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sirketBilgisi`
--

CREATE TABLE `sirketBilgisi` (
  `id` int(11) NOT NULL,
  `adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `arac_sayisi` int(11) NOT NULL,
  `sehir` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `sirket_adi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `sirket_puani` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `aracBilgileri`
--
ALTER TABLE `aracBilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kiralik_bilgileri`
--
ALTER TABLE `kiralik_bilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `rezervasyon`
--
ALTER TABLE `rezervasyon`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sirketBilgisi`
--
ALTER TABLE `sirketBilgisi`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `aracBilgileri`
--
ALTER TABLE `aracBilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kiralik_bilgileri`
--
ALTER TABLE `kiralik_bilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `rezervasyon`
--
ALTER TABLE `rezervasyon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `sirketBilgisi`
--
ALTER TABLE `sirketBilgisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
