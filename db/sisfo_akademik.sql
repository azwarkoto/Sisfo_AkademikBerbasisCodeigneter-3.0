-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Okt 2019 pada 08.42
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisfo_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nidn`, `nama_dosen`, `alamat`, `jenis_kelamin`, `email`, `telp`, `photo`) VALUES
(1, '1234567899', 'Budii Utoyo', 'Bandung', 'Perempuan', 'budi@gmail.com', '02157389503', 'b2.jpg'),
(2, '12345678915', 'Doni Waluyoni', 'JL.BEKASI', 'Laki-Laki', 'doniwaluyoni@gmail.com', '021568934839', '20171008_145701.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hubungi`
--

INSERT INTO `hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(3, 'AZWAR ANAS GUSTI', 'AZWARANA1508@BSI.AC.ID', 'MOHON INFORMASI PENDAFTARAN MAHASISWA BARU');

-- --------------------------------------------------------

--
-- Struktur dari tabel `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama_website` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama_website`, `alamat`, `email`, `telp`) VALUES
(1, 'UNIVERSITAS FRAMEWORK INDONESIA', 'jl.BEKASI NO .63', 'frameworkindonesia@gmail.com', '0812345678');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id_informasi` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `judul_informasi` varchar(50) NOT NULL,
  `isi_informasi` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `icon`, `judul_informasi`, `isi_informasi`) VALUES
(2, 'fas fa-university', 'Penerimaan mahasiswa baru', 'Penerima Mahasiswa Baru Gelombang IV  dibuka mulai tanggal 31 juni sampai 30 agustus 20199'),
(3, 'fas fa-wallet', 'Pembayaran Uang Kuliah', 'Pembayaran Uan Kuliah Mulai Tanggal 01 Juli 01 Agustus 2019'),
(4, 'fas fa-user-graduate', 'Jadwal Wisuda', 'Jadwal Pelaksanaan Wisuda Gelombag 1 tanggal 31 Agustus 2019'),
(5, 'fas fa-file-invoice', 'Bimbingan  Skripsi', 'Jadwal Bimbingan Skripsi/Tugas Akhir Mulai di laksanakan pada tanggal 21 juni 2019');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(3) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(6, 'AK', 'AKUTANSI'),
(7, 'SI', 'SISTEM INFORMASI'),
(8, 'Tk', 'Teknik Komputer'),
(10, 'TI', 'Teknik Informatika'),
(11, 'KB', 'Komunikasi Dan Bahasa'),
(12, 'IL', 'ILMU HUKUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `krs`
--

CREATE TABLE `krs` (
  `id_krs` int(11) NOT NULL,
  `id_thn_akad` int(10) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `kode_matakuliah` varchar(10) NOT NULL,
  `nilai` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `krs`
--

INSERT INTO `krs` (`id_krs`, `id_thn_akad`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, 6, '12153577', 'MKK01', ''),
(2, 6, '12153577', 'MKU01', ''),
(3, 6, '12153577', 'MKK05', ''),
(5, 6, '12153577', 'MKK01', ''),
(6, 6, '12153577', 'MKU01', ''),
(7, 6, '12153577', 'MKK05', ''),
(8, 6, '12153577', 'MKU01', ''),
(9, 6, '12153577', 'MKK01', ''),
(10, 6, '12153599', 'MKK01', ''),
(11, 6, '12153599', 'MKU01', ''),
(12, 6, '12153599', 'MKK05', ''),
(13, 6, '12153599', 'MKK01', ''),
(14, 6, '12153590', 'MKK01', ''),
(15, 6, '12153590', 'MKU01', ''),
(16, 6, '12153590', 'MKK05', ''),
(17, 6, '12153590', 'MKK06', ''),
(18, 7, '12153577', 'MKK01', ''),
(19, 7, '12153577', 'MKU01', ''),
(20, 7, '12153577', 'MKK05', ''),
(22, 7, '12153577', 'MKK06', ''),
(23, 8, '12153577', 'MKK01', ''),
(24, 8, '12153577', 'MKU01', ''),
(25, 8, '12153577', 'MKK05', ''),
(26, 8, '12153577', 'MKK06', ''),
(27, 8, '12153590', 'MKK01', ''),
(28, 8, '12153590', 'MKU01', ''),
(29, 8, '12153590', 'MKK05', ''),
(30, 8, '12153590', 'MKK06', ''),
(31, 8, '12153577', 'ILHK01', ''),
(32, 8, '12153590', 'ILHK01', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `nama_lengkap` varchar(120) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `tempat_lahir` varchar(120) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(120) NOT NULL,
  `nama_prodi` varchar(120) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_lengkap`, `alamat`, `email`, `telepon`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `nama_prodi`, `photo`) VALUES
(1, '12153577', 'Azwar Anas GUSTII', 'jakarta', 'azwar.one10@gmail.com', '08211104791', 'Jakarta', '2019-08-26', 'Laki-Laki', 'AKUTANSI', 'SAM_2698.JPG'),
(3, '12153590', 'budi', 'JL.TARUNA GANG KAMPUNG BARU ', 'AZWARANA1508@BSI.AC.ID', '0831233626182', 'Jakarta', '2019-10-07', 'Laki-Laki', 'AKUTANSI', 'p05bcxt5.jpg'),
(4, '12153599', 'ARIF HIDAYAT', 'JL.BEKASI', 'arifhidayat@gmail.com', '0831233626182', 'Jakarta', '2019-10-10', 'Laki-Laki', 'ILMU HUKUM', 'D3_6BCQXoAIv_ok.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(10) NOT NULL,
  `nama_matakuliah` varchar(100) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(10) NOT NULL,
  `nama_prodi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama_matakuliah`, `sks`, `semester`, `nama_prodi`) VALUES
('MKK01', 'Alogoritma Dan Pemrograman Dasar', 3, 1, 'Sistem Informasi'),
('MKU01', 'PENDIDIKAN PANCASILA', 6, 4, 'AKUTANSI'),
('MKK05', 'SISTEM BASIS DATA', 6, 8, 'SISTEM INFORMASI'),
('MKK06', 'web progreming 1', 4, 6, 'TEKNIK KOMPUTER'),
('ILHK01', 'LOGIKA HUKUM', 4, 7, 'ILMU HUKUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE `prodi` (
  `id_prodi` int(11) NOT NULL,
  `kode_prodi` varchar(20) NOT NULL,
  `nama_prodi` varchar(25) NOT NULL,
  `nama_jurusan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `kode_prodi`, `nama_prodi`, `nama_jurusan`) VALUES
(3, 'AK', 'AKUTANSI', 'AKUTANSI'),
(4, 'SI', 'Sastra Inggris', 'Komunikasi Dan Bahasa'),
(5, 'TI', 'TEKNIK KOMPUTER', 'SISTEM INFORMASI'),
(6, 'SI', 'SISTEM INFORMASI', 'SISTEM INFORMASI'),
(7, 'IL', 'ILMU HUKUM', 'ILMU HUKUM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_thn_akad` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_thn_akad`, `tahun_akademik`, `semester`, `status`) VALUES
(7, '2018/2019', 'Ganjil', 'Tidak Aktif'),
(8, '2018/2019', 'Genap', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kampus`
--

CREATE TABLE `tentang_kampus` (
  `id` int(11) NOT NULL,
  `sejarah` varchar(1000) NOT NULL,
  `visi` varchar(1000) NOT NULL,
  `misi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tentang_kampus`
--

INSERT INTO `tentang_kampus` (`id`, `sejarah`, `visi`, `misi`) VALUES
(1, 'Program Studi Pendidikan Sejarah menjadi program studi yang unggul dalam menghasilkan calon pendidik sejarah yang berkarakter, cerdas, humanis, bermartabat, dan murah hati', '” MEWUJUDKAN SISWA – SISWI YANG BERPRESTASI, BERIMAN DAN BERTAQWA KEPADA  TUHAN YANG MAHA ESA SERTA CINTA TERHADAP LINGKUNGAN. ”', 'Mewujudkan/menciptakan siswa yang taat beribadahMembentuk sikap dan prilaku yang baik, santun, sopan dan berkarakter.Mewujudkan siswa/i yang disiplinMenciptakan suasana Pembelajaran yang aktif, inovatif, kreatif, efektif,  menyenangkan, gembira dan berbobotMewujudkan siswa yang berprestasiMewujudkan suasana kekeluargaan antar warga sekolahMewujudkan sekolah hijau ( Gereen School ).');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transkrip_nilai`
--

CREATE TABLE `transkrip_nilai` (
  `id_transkip` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `kode_matakuliah` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transkrip_nilai`
--

INSERT INTO `transkrip_nilai` (`id_transkip`, `nim`, `kode_matakuliah`, `nilai`) VALUES
(1, '12153577', 'MKK01', ''),
(2, '12153577', 'MKU01', ''),
(3, '12153577', 'MKK05', ''),
(4, '12153577', 'MKK06', ''),
(5, '12153577', 'ILHK01', ''),
(6, '12153590', 'MKK01', ''),
(7, '12153590', 'MKU01', ''),
(8, '12153590', 'MKK05', ''),
(9, '12153590', 'MKK06', ''),
(10, '12153590', 'ILHK01', ''),
(11, '12153599', 'MKK01', ''),
(12, '12153599', 'MKU01', ''),
(13, '12153599', 'MKK05', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 'admin', 'N', ''),
(2, 'user', 'deed5d07ef6ae25a363995925d917203', 'azwar.one10@gmail.com', 'admin', 'Y', ''),
(4, 'darmawan', '4d96c294635019ba56b729675881202a', 'darmawan@gmail.com', 'admin', 'Y', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`id_krs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_thn_akad`);

--
-- Indexes for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  ADD PRIMARY KEY (`id_transkip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `krs`
--
ALTER TABLE `krs`
  MODIFY `id_krs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
  MODIFY `id_prodi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_thn_akad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tentang_kampus`
--
ALTER TABLE `tentang_kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transkrip_nilai`
--
ALTER TABLE `transkrip_nilai`
  MODIFY `id_transkip` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
