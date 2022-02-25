-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2022 pada 14.32
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_user`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id_form` int(11) NOT NULL,
  `nama_form` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id_form`, `nama_form`) VALUES
(1, 'Surat Keterangan Kurang Mampu'),
(2, 'Surat Keterangan Belum Pernah Kawin / Nikah'),
(3, 'Surat Keterangan Ahli Waris'),
(4, 'Surat Keterangan Meninggal'),
(5, 'Surat Keterangan Usaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_ahli_waris`
--

CREATE TABLE `sk_ahli_waris` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(1000) NOT NULL,
  `tempat_lahir` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(1000) NOT NULL,
  `agama` varchar(1000) NOT NULL,
  `pekerjaan` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` int(100) NOT NULL,
  `ahli_waris` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_belum_pernah_menikah`
--

CREATE TABLE `sk_belum_pernah_menikah` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(1000) NOT NULL,
  `tempat_lahir` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(1000) NOT NULL,
  `agama` varchar(1000) NOT NULL,
  `pekerjaan` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sk_belum_pernah_menikah`
--

INSERT INTO `sk_belum_pernah_menikah` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `nik`, `content`, `createdAt`, `id_user`, `id_form`) VALUES
(22, 'Putu', 'Laki - Laki', 'Tabanan', '1990-10-12', 'Indonesia', 'Hindu', 'Petani', 'Jalan Raya', '12121', 'KTP.pdf', '2022-02-10', 11, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_kurang_mampu`
--

CREATE TABLE `sk_kurang_mampu` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(1000) NOT NULL,
  `agama` varchar(1000) NOT NULL,
  `pekerjaan` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` varchar(1000) NOT NULL,
  `nama_anak` varchar(1000) NOT NULL,
  `jk_anak` varchar(100) NOT NULL,
  `tempat_lahir_anak` varchar(1000) NOT NULL,
  `tanggal_lahir_anak` date NOT NULL,
  `kewarganegaraan_anak` varchar(1000) NOT NULL,
  `agama_anak` varchar(1000) NOT NULL,
  `pekerjaan_anak` varchar(1000) NOT NULL,
  `alamat_anak` varchar(1000) NOT NULL,
  `nik_anak` varchar(1000) NOT NULL,
  `jumlah_saudara` varchar(1000) NOT NULL,
  `keterangan_anak` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_form` int(11) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sk_kurang_mampu`
--

INSERT INTO `sk_kurang_mampu` (`id`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `kewarganegaraan`, `agama`, `pekerjaan`, `alamat`, `nik`, `nama_anak`, `jk_anak`, `tempat_lahir_anak`, `tanggal_lahir_anak`, `kewarganegaraan_anak`, `agama_anak`, `pekerjaan_anak`, `alamat_anak`, `nik_anak`, `jumlah_saudara`, `keterangan_anak`, `content`, `id_user`, `id_form`, `createdAt`) VALUES
(12, 'yuygyt', '- Pilih Jenis Kelamin', '', '0000-00-00', '- Pilih Kewarganegaraan', '- Pilih Agama', '- Pilih Pekerjaan', '', '', '', '- Pilih Jenis Kelamin', '', '0000-00-00', '- Pilih Kewarganegaraan', '- Pilih Agama', '- Pilih Pekerjaan', '', '', '', '- Pilih Status Anak', '', 11, 1, '2022-02-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_meninggal`
--

CREATE TABLE `sk_meninggal` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `tempat_lahir` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(1000) NOT NULL,
  `agama` varchar(1000) NOT NULL,
  `pekerjaan` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` varchar(1000) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `meninggal_karena` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sk_usaha`
--

CREATE TABLE `sk_usaha` (
  `id` int(11) NOT NULL,
  `nama` varchar(1000) NOT NULL,
  `jenis_kelamin` varchar(1000) NOT NULL,
  `tempat_lahir` varchar(1000) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarganegaraan` varchar(1000) NOT NULL,
  `agama` varchar(1000) NOT NULL,
  `pekerjaan` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL,
  `nik` varchar(1000) NOT NULL,
  `jenis_usaha` varchar(1000) NOT NULL,
  `guna_surat` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `createdAt` date NOT NULL DEFAULT current_timestamp(),
  `id_user` int(11) NOT NULL,
  `id_form` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `telepon` varchar(1000) NOT NULL,
  `alamat` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`, `telepon`, `alamat`) VALUES
(11, 'I Made Suwibawa', 'Made', '123', 'user', '087860186268', 'Br. Pemudungan'),
(12, 'admin', 'admin', '123', 'admin', '087', 'Belimbing'),
(14, 'user', 'user', '123', 'user', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id_form`);

--
-- Indeks untuk tabel `sk_ahli_waris`
--
ALTER TABLE `sk_ahli_waris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_form` (`id_form`);

--
-- Indeks untuk tabel `sk_belum_pernah_menikah`
--
ALTER TABLE `sk_belum_pernah_menikah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_form` (`id_form`);

--
-- Indeks untuk tabel `sk_kurang_mampu`
--
ALTER TABLE `sk_kurang_mampu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_form` (`id_form`);

--
-- Indeks untuk tabel `sk_meninggal`
--
ALTER TABLE `sk_meninggal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_form` (`id_form`);

--
-- Indeks untuk tabel `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_form` (`id_form`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `form`
--
ALTER TABLE `form`
  MODIFY `id_form` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sk_ahli_waris`
--
ALTER TABLE `sk_ahli_waris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sk_belum_pernah_menikah`
--
ALTER TABLE `sk_belum_pernah_menikah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `sk_kurang_mampu`
--
ALTER TABLE `sk_kurang_mampu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `sk_meninggal`
--
ALTER TABLE `sk_meninggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sk_usaha`
--
ALTER TABLE `sk_usaha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `sk_ahli_waris`
--
ALTER TABLE `sk_ahli_waris`
  ADD CONSTRAINT `sk_ahli_waris_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_ahli_waris_ibfk_2` FOREIGN KEY (`id_form`) REFERENCES `form` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sk_belum_pernah_menikah`
--
ALTER TABLE `sk_belum_pernah_menikah`
  ADD CONSTRAINT `sk_belum_pernah_menikah_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_belum_pernah_menikah_ibfk_2` FOREIGN KEY (`id_form`) REFERENCES `form` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sk_kurang_mampu`
--
ALTER TABLE `sk_kurang_mampu`
  ADD CONSTRAINT `sk_kurang_mampu_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_kurang_mampu_ibfk_2` FOREIGN KEY (`id_form`) REFERENCES `form` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sk_meninggal`
--
ALTER TABLE `sk_meninggal`
  ADD CONSTRAINT `sk_meninggal_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_meninggal_ibfk_2` FOREIGN KEY (`id_form`) REFERENCES `form` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sk_usaha`
--
ALTER TABLE `sk_usaha`
  ADD CONSTRAINT `sk_usaha_ibfk_1` FOREIGN KEY (`id_form`) REFERENCES `form` (`id_form`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sk_usaha_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
