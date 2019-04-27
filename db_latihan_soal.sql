-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Apr 2019 pada 07.51
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_soal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` tinytext,
  `a` varchar(50) DEFAULT NULL,
  `b` varchar(50) DEFAULT NULL,
  `c` varchar(50) DEFAULT NULL,
  `d` varchar(50) DEFAULT NULL,
  `knc_jwbn` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `a`, `b`, `c`, `d`, `knc_jwbn`, `gambar`, `tanggal`, `aktif`) VALUES
(1, 'Ilmuwan muslim yang dikenal sebagai penulis ensiklopedi kedokteran pertama adalah...', 'Al-Kindi', 'Ibnu Sina', 'Ar-Razi', 'Ali bin Rabbani attabari', 'd', '', '0000-00-00', 'Y'),
(2, 'Ibnu Sina adalah ilmuwan paling produktif yang penemuannya dalam bidang kedokteran sangat berpengaruh di dunia Barat. Salah satu karya menumentalnya di bidang kedokteran adalah... ', 'Qanun Fi Al-Tibb', 'Al-Madinah Al-Fadhilah', 'Kitabu al-Hudud ', 'Uyun-ul Hikmah', 'a', '', '0000-00-00', 'Y'),
(3, 'Ilmuwan muslim yang membahas penyakit cacar dan campak, dan bukunya dalam bidang ini diterjemahkan ke dalam bahasa Eropa adalah...', 'Ibnu Sina', 'Al-Farabi', 'Ar-Razi', 'Al-Kindi', 'a', '', '0000-00-00', 'Y'),
(4, 'Penggagas pertama berdirinya Dinasti Abbasiyah adalah...', 'Ali bin Abdullah', 'Ibrahim bin Ali', 'Abu Muslim al-Khurasani', 'Abdullah bin Ali', 'a', '', '0000-00-00', 'Y'),
(5, 'Berikut ini adalah salah satu nama tokoh ilmuwan muslim bidang Filsafat yang terkenal pada masa Abbasiyah adalah ...', 'Al-Quda i', 'Al-Kindi', 'Al-Khawarizmi', 'Al-Biruni', 'b', '', '0000-00-00', 'Y'),
(6, 'Tokoh kedokteran pada masa Abbasiyah yang mengarang kitab al-Qonun fi Tibb yaitu .... ', 'Ibnu Thufail', 'Ibnu Rusyd', 'Ibnu Baitar', 'Ibnu Sina', 'd', '', '0000-00-00', 'Y'),
(7, 'Filosof besar pertama Islam, dikenal berilmu pengetahuan luas dan mendalam serta memiliki 200 karya ilmiah  adalah ....', 'Al-Ghazali', 'Ar-Rozi', 'Al-Kindi', 'Ibnu Sina', 'b', '', '0000-00-00', 'Y'),
(8, 'Kesesuaian antara ilmuwan muslim dengan perannya dalam kemajuan kebudayaan/peradaban Islam pada masa Bani Abbasiyah adalah ....', 'At-Tabari : Sejarah', 'Bukhari dan Muslim : Hadist', 'Ibnu Hisyam : Teologi', 'Washil bin Atha : Tafsir', 'b', '', '0000-00-00', 'Y'),
(9, 'Faktor penyebab terbentuknya pemerintahan Dinasti Abbasiyah adalah....', 'Terbunuhnya khalifah terakhir Dinasti Umayah', 'Banyak muncul faham-faham Syiâ€™ah di masa Umayah ', 'Melemahnya kekuasaan kedaulatan Umayah', 'Mendapat serangan dari kelompok oposisi dari Dinas', 'c', '', '0000-00-00', 'Y'),
(10, 'Ibnu Musawaih, Ar-Razi & Avicenna merupakan para ilmuwan muslim di masa Daulah Abbasiyah bidang....', 'Astronomi', 'Tasawuf', 'Kedokteran', 'Fiqih', 'c', '', '0000-00-00', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
