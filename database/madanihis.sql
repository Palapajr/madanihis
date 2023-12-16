-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Des 2023 pada 02.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `madanihis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip_nik` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `nope` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `hobi` varchar(100) NOT NULL,
  `tmt_kerja` date NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `unit` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL,
  `foto` varchar(240) NOT NULL DEFAULT 'default.jpg',
  `create_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nip_nik`, `username`, `password`, `fullname`, `pendidikan`, `gender`, `nope`, `agama`, `hobi`, `tmt_kerja`, `jabatan`, `unit`, `alamat`, `user_akses`, `user_status`, `foto`, `create_date`) VALUES
(1, '1471090704970021', 'admin', '78d8045d684abd2eece923758f3cd781489df3a48e1278982466017f', 'Big Bos Tuan Muda Qumfa', 'S1-Sistem Informasi', 'L', '0822222222', 'Islam', 'Touring', '2023-12-07', 'IT Staff', 'Unit IT', 'Pekanbaru', 1, 1, 'default.jpg', '2023-12-15 09:48:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
