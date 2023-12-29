-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 07:05 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukcapil`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_bayi`
--

CREATE TABLE `data_bayi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_tgl_lahir` text NOT NULL,
  `tempat_dilahirkan` varchar(100) NOT NULL,
  `anak_keberapa` int(225) NOT NULL,
  `penolong_kelahiran` varchar(100) NOT NULL,
  `berat` tinyint(1) NOT NULL,
  `panjang` tinyint(1) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_bayi`
--

INSERT INTO `data_bayi` (`id`, `nama_lengkap`, `jenis_kelamin`, `tempat_tgl_lahir`, `tempat_dilahirkan`, `anak_keberapa`, `penolong_kelahiran`, `berat`, `panjang`, `foto`) VALUES
(5, 'gino aditya putra ramadani', 'laki-laki', 'Mataram, 23 september 2020', 'Mataram', 4, 'Dr. martiana ., SpBd', 5, 45, '61dd9c154ccc7.png'),
(6, 'reza gunawan', 'laki-laki', 'mataram 28 agustus 2021', 'Mataram', 1, 'dokter dan bidan', 5, 45, '61e6deab82731.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_kartu_keluarga`
--

CREATE TABLE `data_kartu_keluarga` (
  `no` int(11) NOT NULL,
  `nama_lengkap` varchar(180) NOT NULL,
  `nik` int(16) NOT NULL,
  `jenis_kelamin` enum('PRIA','WANITA','','') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('ISLAM','HINDU','KATOLIK','KRISTEN','BUDHA','KOHUCU') NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `jenis_pekerjaan` text NOT NULL,
  `golongan_darah` varchar(4) NOT NULL,
  `status` enum('BELUM MENIKAH','MENIKAH','','') NOT NULL,
  `status_hubungan` text NOT NULL,
  `kwn` enum('WNI','WNA') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_akta`
--

CREATE TABLE `detail_akta` (
  `no_akta` varchar(225) NOT NULL,
  `id_bayi` int(11) NOT NULL,
  `warga_negara` enum('indonesia','asing') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` text NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `bulan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `anak_ke` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_akta`
--

INSERT INTO `detail_akta` (`no_akta`, `id_bayi`, `warga_negara`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `bulan`, `tahun`, `nama`, `anak_ke`) VALUES
('18-UHT-8-2019', 3, 'indonesia', '13 Februari 2022', 'laki-laki', '', 'dua ribu dua', 'Jony gunawan hadi', 'kedua dari bapak jerrome dan ibu sijabat', 'pertama dari bapak dan ibu'),
('18-UHT-20-2020', 5, 'indonesia', 'Mataram', '23 september 2020', 'laki-laki', 'september ', 'dua ribu dua puluh', 'Gino Aditya putra ramadani', 'tiga dari bapak tejo dan ibu sukiem'),
('18-UHT-8-2021', 6, 'indonesia', 'Mataram', 'mataram 28 agustus 2021', 'laki-laki', 'Februari', '2021', 'reza gunawan', 'pertama dari bapak tejo dan ibu sukiem');

-- --------------------------------------------------------

--
-- Table structure for table `ktp`
--

CREATE TABLE `ktp` (
  `NIK` varchar(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `usia` int(225) NOT NULL,
  `tanggal_lahir` varchar(225) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `desa_kelurahan` text NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `agama` enum('katolik','kristen','islam','hindu','budha','konghucu') NOT NULL,
  `status` varchar(225) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `kwn` enum('wni','wna') NOT NULL,
  `cek_nama` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktp`
--

INSERT INTO `ktp` (`NIK`, `foto`, `nama`, `usia`, `tanggal_lahir`, `tempat_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `desa_kelurahan`, `kecamatan`, `agama`, `status`, `pekerjaan`, `kwn`, `cek_nama`) VALUES
('08908211231312', 'orang4.png', 'naruto shipuden', 33, '27 oktober 1933', 'konoha', 'laki-laki', 'jl subak no 10 desa bumigora', '01', '05', 'Dayan Peken', 'Ampenan', 'budha', 'sudah menikah', 'pendekar hokage', 'wni', 24),
('2020202400112', 'orang4.png', 'Rini Panjaitan', 25, '25 Oktober 1998', 'Medan', 'perempuan', 'jl.ketapang no 10 Gg blitar Desa Bumigora', '01', '02', 'Dayan Peken', 'Ampenan', 'kristen', 'belum menikah', 'pegawai swasta', 'wni', 13),
('21381203812382131', 'orang1.jpg', 'christopher michael lauw', 15, '13 Februari 2002', 'mataram', 'laki-laki', 'jl koperasi Gg jeruk', '02', '01', 'dayan peken', 'ampenan', 'katolik', 'belum menikah', 'pelajar ', 'wni', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `NO_PELAYANAN` int(11) NOT NULL,
  `JENIS_PELAYANAN` varchar(100) NOT NULL,
  `ALUR_PELAYANAN` text NOT NULL,
  `SYARAT_DAPDUK` text NOT NULL,
  `PELAYANAN_ONLINE` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `username`, `email`, `password`) VALUES
(1, 'christopher michael lauw', 'Jl. Bhintang No 10 Gerung', 'michael111', 'michaellauw889@gmail.com', '$2y$10$FUKQwTqAHLD2BEa8gqNzoufMjflrCeBIXFsibO4MJ6FPuSe9KGBee'),
(2, 'gunawan aditya', 'Jl. Bhintang No 10 Gerung', 'gunawan222', 'gunawan@gmail.com', '$2y$10$MOitxVFD1TQA6C57LHTtv.QFe6d/PIXJyjN1VlW3VE1fcDRPlvAtC'),
(3, 'Jony gunawan hadi', 'Jl. Dirgantara No 1 Desa Bumigora', 'jony778', 'jony@gmail.com', '$2y$10$toDWKIhy7.MDO5yeCy/ky.GBF3UeYelsirw.at5EUGiofu2IFq2hy');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE `warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `usia` int(225) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(100) NOT NULL,
  `kwn` enum('wni','wna') NOT NULL,
  `no_telp` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id`, `nama`, `usia`, `foto`, `nik`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `agama`, `kwn`, `no_telp`, `pekerjaan`, `pendidikan`, `email`, `status`) VALUES
(1, '    Rendi Januarta  ', 15, '61de2a2192bc3.png', '  3821093812038123210', 'laki-laki', 'Mataram', '13-02-2001', 'Jl. Dirgantara No 1 Desa Bumigora', 'Islam', 'wni', '0819901290321', 'Pegawai Swasta', 'Strata 1', 'rendyjanuarta009@gmail.com', 'belum menikah'),
(3, '       Christopher michael lauw       ', 25, '61d99350e8e3c.jpg      ', '       321382103123213812038', 'laki-laki', 'Mataram', '25 agustus 1999', 'Jl. Bhintang No 10 Gerung', 'katolik', 'wni', '08320193021312', 'Mahasiswa', 'S3', 'darmawan@gmail.com', 'belum menikah'),
(13, 'Rini Panjaitan', 0, '61d94952274c4.png', '39021391203912039', 'perempuan', 'Medan', '25 Oktober 1998', 'jl.ketapang no 10 Gg blitar Desa Bumigora', 'kristen', 'wni', ' 0819891287823', 'pegawai swasta', 'strata 1', 'rini@gmail.com', 'belum menikah'),
(14, 'ardila gandhi ', 0, '61dd262f62d99.jpg ', '    1809200122221', 'laki-laki', 'Jepang', '25 Desember 2001', 'jl. ketapang Gg programming Desa bumigora', 'budha', 'wni', '0182039103921', 'Mahasiswa', 'Strata 1', 'mizuno@gmail.com', 'belum menikah'),
(15, '  Mizuno Gatari wijaya  ', 0, '61dd266110819.jpg', '  8081188899002192', 'laki-laki', 'Desa Bumigora', '12 Agustus 1997', 'jl.panca usaha no 1 Gg subak Desa bumigora', 'kristen', 'wni', '', 'pegawai negeri sipil', 'strata 2', 'gatarimizuno778@gmail.com', 'sudah menikah'),
(16, '  Dr hadi gunawan., Phd  ', 0, '61dd26199300d.jpg  ', '  3300201022012', 'laki-laki', 'jakarta', '13 Februari 2002', 'Jl. Bhintang No 10 Gerung Gg javascript No 9 Desa Bumigora', 'katolik', 'wni', '081209309213', 'Dosen', 'Strata 3', 'gunawansetiahadi@gamil.com', 'sudah menikah'),
(17, 'angelina arista bobo', 0, '61dd270e5cdb5.jpg', '49311782122002', 'perempuan', 'mataram', '25 juli 2000', 'jl. ketapang indah no 89 desa bumigora', 'katolik', 'wni', ' 081920392109', 'mahasiswa', 'SMA', 'aristaangelica@gmail.com', 'sudah menikah'),
(18, 'Rina agustiana', 22, '61dd8a607a07e.jpg', '8889990001223113', 'perempuan', 'Mataram', '17 maret 1998', 'Jl. Dirgantara No 1 Desa Bumigora', 'kristen', 'wni', ' 081290302931', 'pegawai swasta', 'strata 1', 'rinaagistiana887@gmail.com', 'sudah menikah'),
(19, 'hendra gunawan', 58, '61dd9b58dfb54.jpg', '20202211221321', 'laki-laki', 'Mataram', '13 oktober 1981', 'jl.ketapang no 10 Gg blitar Desa Bumigora', 'islam', 'wni', ' 08192039103921', 'pegawai negeri sipil', 'strata 2', 'hendragunawan@gmail.com', 'sudah menikah'),
(21, 'taki kimi gauno', 25, '61dd9d154e4ba.jpg', '88021200022988', 'laki-laki', 'Jepang', ' 22 april 2002', 'Jl. Dirgantara No 1 Desa Bumigora', 'budha', 'wni', ' 08129012390219321', 'Mahasiswa', 'SMA', 'takikeh2020@gmail.com', 'belum menikah'),
(22, ' syaidina ahmadal qososyi ', 22, '61de2543885ea.jpg', ' 88800011112223311', 'laki-laki', 'lombok timur', '25 agustus 2000', 'jl gunawan no 10 desa bumigora', 'islam', 'wni', '', 'mahasiswa', 'SMA', 'ozi@gmail.com', 'belum menikah'),
(23, 'naggraiini putri', 22, '61de2abb8b2bd.jpg', '20000100201321', 'perempuan', 'Mataram', '24 desember 1999', 'jl.ketapang no 10 Gg blitar Desa Bumigora', 'islam', 'wni', ' 08190902910911', 'Mahasiswa', 'SMA', 'putri@gmail.com', 'belum menikah'),
(24, 'naruto shipuden', 33, '61de2d29d7134.png', '08908211231312', 'laki-laki', 'konoha', '20 oktober 1933', 'jl subak no 10 desa bumigora', 'budha', 'wni', ' 081290392103910', 'pendekar hokage', 'strata 3', 'narto20010@gmail.com', 'sudah menikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_bayi`
--
ALTER TABLE `data_bayi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kartu_keluarga`
--
ALTER TABLE `data_kartu_keluarga`
  ADD PRIMARY KEY (`no`),
  ADD KEY `NIK` (`nik`);

--
-- Indexes for table `detail_akta`
--
ALTER TABLE `detail_akta`
  ADD PRIMARY KEY (`id_bayi`);

--
-- Indexes for table `ktp`
--
ALTER TABLE `ktp`
  ADD PRIMARY KEY (`NIK`);

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`NO_PELAYANAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_bayi`
--
ALTER TABLE `data_bayi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_kartu_keluarga`
--
ALTER TABLE `data_kartu_keluarga`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_akta`
--
ALTER TABLE `detail_akta`
  MODIFY `id_bayi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelayanan`
--
ALTER TABLE `pelayanan`
  MODIFY `NO_PELAYANAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kartu_keluarga`
--
ALTER TABLE `data_kartu_keluarga`
  ADD CONSTRAINT `data_kartu_keluarga_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `data_ktp` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
