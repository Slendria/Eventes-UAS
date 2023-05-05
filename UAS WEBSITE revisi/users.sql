-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2023 pada 15.28
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id_abt` int(11) NOT NULL,
  `jenis` mediumtext NOT NULL,
  `isi` longtext NOT NULL,
  `foto` text NOT NULL,
  `oleh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id_abt`, `jenis`, `isi`, `foto`, `oleh`) VALUES
(2, 'Apa itu Eventes?', 'Eventes merupakan sebuah tempat dimana para penggemar anime dan games dapat mencari kegiatan-kegiatan atau event yangdimana mereka dapat mengekspresikan diri mereka sendiri. Di event cosplay, para cosplayer dapat berpartisipasi dalam berbagai kategori, seperti kategori kostum terbaik, kategori make-up terbaik, kategori peran terbaik, dan sebagainya. Para cosplayer juga dapat berkompetisi dalam cosplay group, di mana mereka akan memerankan karakter dalam sebuah grup atau kelompok. Sedangkan di event games, para gamers atau penggemar games dapat mengikuti turnamen-turnamen games yang diselenggarakan di berbagai tempat dan pemenang dari turnamen games akan mendapatkan hadiah dalam bentuk cash maupun barang.', '', 'By kelvin garcia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `id_con` int(11) NOT NULL,
  `nomor` text NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`id_con`, `nomor`, `email`) VALUES
(1, '+081 0929 2922', 'kelvingar@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_evt` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` text NOT NULL,
  `lokasi` text NOT NULL,
  `isi` mediumtext NOT NULL,
  `gambar` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_evt`, `judul`, `tanggal`, `lokasi`, `isi`, `gambar`) VALUES
(29, 'Galaksi Fest Cosplay Competition 2023', 'Hari/Tanggal : Sabtu, 20 Mei 2023.\r\nPukul : 14:00 - Selesai.', 'Lavas Kopi Medan.', 'Link registrasi :                      \"https://bit.ly/galaksifest2023\"\r\n\r\n', 'blog_4.png'),
(31, 'MEDAN FAKKA COMMUNITY ESPORTS', 'Hari/Tgl: Sabtu & Minggu / 29&30 April 2023', 'Manhattan Times Square Lt. 2', '✦ Pendaftaran di buka sampai tgl : 29 April 2023\r\nBiaya registrasi : 20K/Org\r\nLink pendaftaran :                       \"https://bit.ly/coswalkbazar2\"\r\n\r\n✦ Payment:\r\nBCA 8280152499 A/N JESICA\r\n\r\nDANA, OVO, GOPAY 0822 7653 5190 JESICA', 'single_blog_3.png'),
(36, 'Little Akiba, Event Cosplay & Entertainment', '7 Mei 2023', 'Tiara Convention Hotel', 'Untuk pembelian tiket bisa scan dibarcode yang tertera.', 'blog_3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `usertype` varchar(55) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `email`, `password`, `alamat`, `image`, `usertype`) VALUES
(5, 'Mike', 'Mike', 'Mike@gmail.com', 'Mikesteve', 'Jl. Gaharu', '', 'admin'),
(7, 'ke', 'kel', 'ke@gmail.com', 'ke', 'ke', '', 'user'),
(9, 'popo', 'popo', 'popo@gmail.com', 'popo', 'popo', '', 'user'),
(11, 'admin', 'Mantap', 'l@gmail.com', 'admin', 'la', '', 'admin'),
(12, 'L', 'woke', 'l@gmail.com', 'l', 'l', '', 'user'),
(13, 'ka', 'ka', 'ka@gmail.com', '2c68e1d50809e4ae357bcffe1fc99d2a', 'ka', '', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_abt`);

--
-- Indeks untuk tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_con`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_evt`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id_abt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id_con` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_evt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
