-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 01.25
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webgis-php`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `kode_kabupaten` varchar(100) NOT NULL,
  `nama_kabupaten` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `luas_wilayah` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`id_kabupaten`, `kode_kabupaten`, `nama_kabupaten`, `koordinat`, `jumlah_penduduk`, `luas_wilayah`) VALUES
(1, '3302', 'Banyumas', '-7.362274826893668, 109.10943969842893', 82317924, 17083020.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kode_kecamatan` varchar(100) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `jumlah_penduduk` int(11) NOT NULL,
  `luas_wilayah` float(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`kode_kecamatan`, `id_kabupaten`, `nama_kecamatan`, `jumlah_penduduk`, `luas_wilayah`) VALUES
('3302010', 1, 'Lumbir', 90, 90.00),
('3302020', 1, 'Wangon', 90, 90.00),
('3302040', 1, 'RAWALO', 54386, 4964.00),
('3302050', 1, 'KEBASEN', 69723, 5399.00),
('3302060', 1, 'KEMRANJEN', 74357, 6071.00),
('3302070', 1, 'SUMPIUH', 59276, 6001.00),
('3302080', 1, 'TAMBAK', 51991, 5203.00),
('3302090', 1, 'SOMAGEDE', 38748, 4011.00),
('3302100', 1, 'KALIBAGOR', 59430, 3573.00),
('3302110', 1, 'BANYUMAS', 54305, 3809.00),
('3302120', 1, 'PATIKRAJA', 62966, 4322.00),
('3302130', 1, 'PURWOJATI', 38368, 3786.00),
('3302140', 1, 'AJIBARANG', 104534, 6653.00),
('3302150', 1, 'GUMELAR', 55093, 9395.00),
('3302160', 1, 'PEKUNCEN', 77886, 9270.00),
('3302170', 1, 'CILONGOK', 127607, 10534.00),
('3302180', 1, 'KARANGLEWAS', 69377, 3248.00),
('3302190', 1, 'KEDUNGBANTENG', 64209, 6022.00),
('3302200', 1, 'BATURRADEN', 54622, 4553.00),
('3302210', 1, 'SUMBANG', 97752, 5342.00),
('3302220', 1, 'KEMBARAN', 83387, 2592.00),
('3302710', 1, 'PURWOKERTO SELATAN', 73753, 1375.00),
('3302720', 1, 'PURWOKERTO BARAT', 53860, 740.00),
('3302730', 1, 'PURWOKERTO TIMUR', 55679, 842.00),
('3302740', 1, 'PURWOKERTO UTARA', 50573, 901.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `npsn` int(11) NOT NULL,
  `kode_kecamatan` varchar(100) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL,
  `koordinat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`npsn`, `kode_kecamatan`, `nama_sekolah`, `alamat_sekolah`, `status`, `jenjang_pendidikan`, `koordinat`) VALUES
(20301860, '3302040', 'SMP DIPONEGORO 8 RAWALO', 'Jl. Raya Tambaknegara Rawalo Banyumas', 'SWASTA', 'SMP', '-7.5303767,109.1889583'),
(20301875, '3302090', 'SMP PGRI 2 SOMAGEDE', 'JL. PRAMUKA No.2', 'SWASTA', 'SMP', '-7.5341000,109.3554000'),
(20301921, '3302710', 'SMKS TUJUH LIMA 1 PURWOKERTO', 'JL. MARGANTARA TANJUNG', 'SWASTA', 'SMK', '-7.4375550,109.2174433'),
(20301967, '3302050', 'SMP NEGERI 3 KEBASEN', 'Mandirancan Kebasen Banyumas', 'NEGERI', 'SMP', '-7.5598000,109.2482000'),
(20301969, '3302730', 'SMPN 3 PURWOKERTO', 'Jl. Gereja No.20 Purwokerto', 'NEGERI', 'SMP', '-7.4196480,109.2280000'),
(20301971, '3302210', 'SMPN3 3 SUMBANG', 'Jalan Raya Baturaden Timur', 'NEGERI', 'SMP', '-7.3187000,109.2519000'),
(20301981, '3302170', 'SMP NEGERI 1 CILONGOK', 'Jl. Raya Pernasidi Cilongok Banyumas', 'NEGERI', 'SMP', '-7.4286000,109.1295000'),
(20302020, '3302220', 'SD NEGERI LARANGAN', 'Jln. Kecamatan No. 3 Kembaran', 'NEGERI', 'SD', '-7.4021667,109.2863683'),
(20302058, '3302180', 'SD NEGERI SEMAYA', 'Jalan Grumbul Semaya No. 09', 'NEGERI', 'SD', '-7.3374000,109.2006000'),
(20302080, '3302130', 'SD NEGERI KALIURIP', 'Jl. Desa Kaliurip No.10', 'NEGERI', 'SD', '-7.4822517,109.0917017'),
(20302124, '3302140', 'SMKS MAARIF NU 1 AJIBARANG', 'JL. RAYA AJIBARANG KM 1 AJIBARANG KP 53163', 'SWASTA', 'SMK', '-7.4011000,109.0770000'),
(20302131, '3302100', 'SMKS POLITEKNIK YP3I BANYUMAS', 'JL. RAYA PURWOKERTO-BANYUMAS KM 12 KEC.KALIBAGOR KAB.BANYUMAS', 'SWASTA', 'SMK', '-7.4888183,109.2992333'),
(20302171, '3302110', 'SMAN 1 BANYUMAS', 'JL. PRAMUKA NO.13 BANYUMAS', 'NEGERI', 'SMA', '-7.5211000,109.2935000'),
(20302172, '3302200', 'SMAN 1 BATURRADEN', 'JL. RAYA REMPOAH TIMUR NO.786', 'NEGERI', 'SMA', '-7.3632033,109.2396650'),
(20302736, '3302120', 'SD NEGERI 1 PATIKRAJA', 'Jl. Raya Patikraja No.14', 'NEGERI', 'SD', '-7.4838017,109.2237567'),
(20302800, '3302070', 'SD NEGERI 1 SUMPIUH', 'Jalan Pungkuran No.3', 'NEGERI', 'SD', '-7.6114117,109.3646967'),
(20330449, '3302060', 'SMKS MAARIF NU 1 KEMRANJEN', 'JL. RAYA SIBRAMA KM 0,6 KEMRANJEN BANYUMAS 53194', '', 'SMK', '-7.5690000,109.2970000'),
(20338226, '3302150', 'SMAS PGRI GUMELAR', 'JL. PRAMUKA NO.4 GUMELAR', 'SWASTA', 'SMA', '-7.3770000,108.9795000'),
(20343694, '3302740', 'SD NEGERI 1 BOBOSAN', 'Jl. Kamandaka 11B', 'NEGERI', 'SD', '-7.4083250,109.2224700'),
(20362745, '3302080', 'SMP IT PERMATA HATI BANJARNEGARA', 'Jl. Abu Bakar No 11 RT 05 RW 01, Pertambakan', 'SWASTA', 'SMP', '-7.3803000,109.6907000'),
(69761899, '3302720', 'SMAS BOARDING SCHOOL PUTRA HARAPAN PURWOKERTO', 'JL. KS TUBUN GANG SLOBOR NO. 03 KOBER PURWOKERTO BARAT', 'SWASTA', 'SMA', '-7.4162767,109.2164817'),
(69851459, '3302160', 'SMK PONDOK PESANTREN HILYATUL QUR\'AN (PPHQ))', 'Jl. Curug Cipendok No.1 Tumiyang', 'SWASTA', 'SMK', '-7.3572540,109.1170040'),
(607248470, '3302190', 'SMK WALIJAWA KEDUNGBANTENG', 'JL. RAYA KARANGANYAR CACABAN', 'SWASTA', 'SMK', '-6.9997580,1705010');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kode_kecamatan`),
  ADD KEY `kecamatan_ibfk_1` (`id_kabupaten`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`npsn`),
  ADD KEY `kode_kecamatan` (`kode_kecamatan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_2` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id_kabupaten`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD CONSTRAINT `sekolah_ibfk_2` FOREIGN KEY (`kode_kecamatan`) REFERENCES `kecamatan` (`kode_kecamatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
