-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 06:06 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_origin` varchar(20) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `alamat_admin` text NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `aktif_admin` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status_admin` enum('Admin','User') NOT NULL DEFAULT 'User',
  `pic_admin` varchar(100) NOT NULL,
  `kd_aktivasi_admin` varchar(15) NOT NULL,
  `aktivasi_admin` enum('Y','N') NOT NULL DEFAULT 'N',
  `dt_last_akses` date NOT NULL,
  `tm_last_akses` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `password_origin`, `nm_lengkap`, `alamat_admin`, `email_admin`, `aktif_admin`, `status_admin`, `pic_admin`, `kd_aktivasi_admin`, `aktivasi_admin`, `dt_last_akses`, `tm_last_akses`) VALUES
(2016050001, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'qwerty', 'Andriansyah Doni', 'Perum Duta Asri Palem 2, Pasar Kemis. Tangerang', 'doni@localhost', 'Y', 'Admin', '143250avatar-foto1.jpg', 'A5JOYDPGAy', 'Y', '2017-06-03', '04:32:57'),
(2016060001, '9c2a1a98271d85f6db947b2012f60188', '5801e0bfa1', 'Kutuonline', 'Tangerang', 'kutuonline@localhost', 'Y', 'User', '440796avatar-foto2.jpg', 'QInT3xBW6w', 'Y', '2016-10-15', '14:38:36'),
(2016100001, '646bf1d53f7185ed22d6657f05e01904', '5808693c82', 'Fadli', '', 'fei@localhost', 'Y', 'User', '', 'QDeYxTQL1J', 'Y', '2016-10-20', '13:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `cara_daftar`
--

CREATE TABLE `cara_daftar` (
  `id_caradft` int(5) NOT NULL,
  `deskripsi` text NOT NULL,
  `pic_caradft` varchar(100) NOT NULL,
  `aktif_caradft` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cara_daftar`
--

INSERT INTO `cara_daftar` (`id_caradft`, `deskripsi`, `pic_caradft`, `aktif_caradft`) VALUES
(1, 'Berikut tahapan pendaftaran siswa baru SMK XYZ berbasis online.<br><ul><li>Klik link Pendaftaran Siswa Baru.</li><li>Isi formulir blanko dengan data diri calon siswa.</li><li>Cek email calon siswa untuk memperoleh link aktivasi dan password. Klik link aktivasi yang terdapat di email untuk melakukan aktivasi akun calon siswa baru.</li><li>Login dengan nomor pendaftaranÂ dan password calon siswa.</li><li>Lengkapi data profil siswa, unggah kelengkapan dokumen (Kartu Keluarga, Ijazah/SKHU/SKL, foto),Â input mata pelajaran, input nilai raport dari sekolah sebelumnya.</li><li>Cetak data profil calon siswa dan kartu peserta ujian saringan masuk.</li><li>Ikuti ujian saringan masuk secara offline disekolah.</li></ul>', '930053cara_daftar.jpg', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `dok_foto`
--

CREATE TABLE `dok_foto` (
  `id_dok_foto` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_foto` date NOT NULL,
  `pic_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_foto`
--

INSERT INTO `dok_foto` (`id_dok_foto`, `no_reg`, `tgl_up_foto`, `pic_foto`) VALUES
(1, 'PSB16060001', '2016-06-13', '915466avatar-foto1.jpg'),
(2, 'PSB16090004', '2016-09-26', '750976entar.jpg'),
(3, 'PSB16100005', '2016-10-20', '900360avatar-foto2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dok_ijazah`
--

CREATE TABLE `dok_ijazah` (
  `id_dok_ijazah` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_ijazah` date NOT NULL,
  `pic_dok_ijazah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_ijazah`
--

INSERT INTO `dok_ijazah` (`id_dok_ijazah`, `no_reg`, `tgl_up_ijazah`, `pic_dok_ijazah`) VALUES
(1, 'PSB16060001', '2016-06-13', '631286Ijasah_11100314_Doni Andriansyah.JPG'),
(2, 'PSB16090004', '2016-09-26', '415863keep-calm-tugas-akhir-pasti-kelar-1.png'),
(3, 'PSB16100005', '2016-10-20', '267761ijazah2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dok_kk`
--

CREATE TABLE `dok_kk` (
  `id_dok_kk` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_up_kk` date NOT NULL,
  `pic_dok_kk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dok_kk`
--

INSERT INTO `dok_kk` (`id_dok_kk`, `no_reg`, `tgl_up_kk`, `pic_dok_kk`) VALUES
(1, 'PSB16060001', '2016-06-13', '193817kartu-keluarga2.jpg'),
(2, 'PSB16090004', '2016-09-26', '623352keep-calm-n-study-hard.jpg'),
(3, 'PSB16100005', '2016-10-20', '239777kartu-keluarga3.jpg'),
(4, 'PSB17060007', '2017-06-03', '595184Pemindaian_20161109.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_web`
--

CREATE TABLE `identitas_web` (
  `id_identitas` int(5) NOT NULL,
  `nm_website` varchar(70) NOT NULL,
  `nm_sekolah` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `url` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(30) NOT NULL,
  `instagram` varchar(30) NOT NULL,
  `profil` text NOT NULL,
  `meta_deskripsi` text NOT NULL,
  `meta_keyword` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_web`
--

INSERT INTO `identitas_web` (`id_identitas`, `nm_website`, `nm_sekolah`, `alamat`, `kode_pos`, `telp`, `email`, `url`, `facebook`, `twitter`, `instagram`, `profil`, `meta_deskripsi`, `meta_keyword`) VALUES
(1, 'PSB Online Sekolah', 'Sekolah Medan', 'Jl. Medan, Sumatera Utara', 20227, '06112341234', 'namasekolah@sekolah.sch.id', '-', '-', '-', '-', 'Selamat datang di portal Penerimaan SIswa Baru (PSB) SMK XYZ. Portal ini melayani pendaftaran siswa baru berbasis online guna meningkatkan pelayanan terhadap calon siswa yang ingin mendaftar sebagai siswa baru. Diharapkan portal ini dapat menyelesaikan permasalahan antrian yang terjadi ketika proses pendaftaran siswa berlangsung.', 'SMK XYZ, menerima pendaftaran siswa baru, penerimaan siswa baru, sistem informasi penerimaan siswa baru', 'SMK XYZ, penerimaan siswa baru, pendaftaran siswa baru, sistem informasi');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id_info` int(5) NOT NULL,
  `judul_info` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `pic_info` varchar(100) NOT NULL,
  `aktif_info` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_info`, `judul_info`, `deskripsi`, `pic_info`, `aktif_info`) VALUES
(1, 'Penerimaan Siswa Baru', 'Pendaftaran siswa baru SEKOLAH MEDAN akan segera dibuka. Terbagi kedalam 2 gelombang. Informasi lebih lanjut dapat menghubungi Panitia yang tertera di menu kontak atau datang ke sekolah.', '673096Logo-Tut-Wuri-Handayani.png', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi`
--

CREATE TABLE `kompetensi` (
  `id_kompetensi` int(3) NOT NULL,
  `bid_kompetensi` varchar(40) NOT NULL,
  `aktif` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetensi`
--

INSERT INTO `kompetensi` (`id_kompetensi`, `bid_kompetensi`, `aktif`) VALUES
(11, 'Akuntansi', 'Y'),
(12, 'Administrasi Perkantoran', 'Y'),
(13, 'Multimedia', 'Y'),
(14, 'Rekayasa Perangkat Lunak', 'Y'),
(15, 'Teknik Komputer dan Jaringan', 'Y'),
(16, 'Administrasi Perkantoran', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` varchar(9) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `aktif_mapel` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `aktif_mapel`) VALUES
('MPL160601', 'Matematika', 'Y'),
('MPL160602', 'Bahasa Inggris', 'Y'),
('MPL160603', 'Bahasa Indonesia', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_raport`
--

CREATE TABLE `nilai_raport` (
  `id_nilai` int(5) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `id_mapel` varchar(9) NOT NULL,
  `nil1` double NOT NULL,
  `nil2` double NOT NULL,
  `nil3` double NOT NULL,
  `nil4` double NOT NULL,
  `nil5` double NOT NULL,
  `nil_ratarata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_raport`
--

INSERT INTO `nilai_raport` (`id_nilai`, `no_reg`, `id_mapel`, `nil1`, `nil2`, `nil3`, `nil4`, `nil5`, `nil_ratarata`) VALUES
(1, 'PSB16060001', 'MPL160601', 80, 85, 82, 75, 78, 80),
(2, 'PSB16060001', 'MPL160602', 75, 73, 70, 85, 80, 76.6),
(3, 'PSB16060001', 'MPL160603', 75, 78, 75, 73, 80, 76.2),
(5, 'PSB16060003', 'MPL160601', 78, 79, 80, 75, 71, 76.6),
(6, 'PSB16060003', 'MPL160602', 0, 0, 0, 0, 0, 0),
(7, 'PSB16060003', 'MPL160603', 0, 0, 0, 0, 0, 0),
(8, 'PSB16090004', 'MPL160601', 75, 0, 0, 0, 0, 15),
(9, 'PSB16090004', 'MPL160602', 0, 0, 0, 0, 0, 0),
(12, 'PSB16100005', 'MPL160601', 78, 73, 80, 75, 85, 78.2),
(13, 'PSB16100005', 'MPL160602', 73, 75, 72, 80, 78, 75.6),
(14, 'PSB16100005', 'MPL160603', 80, 85, 78, 83, 82, 81.6),
(15, 'PSB17060007', 'MPL160603', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `psb`
--

CREATE TABLE `psb` (
  `no_reg` varchar(11) NOT NULL,
  `tgl_daftar` date NOT NULL,
  `jam_daftar` time NOT NULL,
  `password` varchar(100) NOT NULL,
  `kode_aktivasi` varchar(100) NOT NULL,
  `status_aktivasi` enum('Y','N') NOT NULL DEFAULT 'N',
  `status_verifikasi` enum('Belum','Sudah','Batal') NOT NULL DEFAULT 'Belum',
  `id_kompetensi` int(3) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nisn` bigint(10) NOT NULL,
  `nm_siswa` varchar(50) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` enum('L','P') NOT NULL,
  `agama` varchar(15) NOT NULL,
  `anak_ke` int(3) NOT NULL,
  `jml_saudara` int(3) NOT NULL,
  `status_anak` varchar(15) NOT NULL,
  `tinggi_badan` int(3) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `kota_kab` varchar(30) NOT NULL,
  `kode_pos` int(5) NOT NULL,
  `hp_siswa` varchar(15) NOT NULL,
  `tlp_siswa` varchar(12) NOT NULL,
  `email_siswa` varchar(50) NOT NULL,
  `status_rumah_siswa` varchar(30) NOT NULL,
  `kendaraan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(40) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `no_ijazah` varchar(25) NOT NULL,
  `tgl_ijazah` date NOT NULL,
  `thn_ijazah` year(4) NOT NULL,
  `nilai_un` double NOT NULL,
  `prestasi_akademik` varchar(100) NOT NULL,
  `prestasi_olahraga` varchar(100) NOT NULL,
  `prestasi_kesenian` varchar(100) NOT NULL,
  `nm_orangtua_ayah` varchar(50) NOT NULL,
  `nm_orangtua_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(30) NOT NULL,
  `pekerjaan_ibu` varchar(30) NOT NULL,
  `penghasilan_ayah` double NOT NULL,
  `penghasilan_ibu` double NOT NULL,
  `alamat_orgtua` text NOT NULL,
  `kota_kab_orgtua` varchar(30) NOT NULL,
  `kode_pos_orgtua` int(5) NOT NULL,
  `hp_orgtua` varchar(15) NOT NULL,
  `nm_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` double NOT NULL,
  `alamat_wali` text NOT NULL,
  `hp_wali` varchar(15) NOT NULL,
  `penanggung_biaya` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psb`
--

INSERT INTO `psb` (`no_reg`, `tgl_daftar`, `jam_daftar`, `password`, `kode_aktivasi`, `status_aktivasi`, `status_verifikasi`, `id_kompetensi`, `nis`, `nisn`, `nm_siswa`, `tmp_lahir`, `tgl_lahir`, `jns_kelamin`, `agama`, `anak_ke`, `jml_saudara`, `status_anak`, `tinggi_badan`, `berat_badan`, `gol_darah`, `alamat_siswa`, `kota_kab`, `kode_pos`, `hp_siswa`, `tlp_siswa`, `email_siswa`, `status_rumah_siswa`, `kendaraan`, `asal_sekolah`, `alamat_sekolah`, `no_ijazah`, `tgl_ijazah`, `thn_ijazah`, `nilai_un`, `prestasi_akademik`, `prestasi_olahraga`, `prestasi_kesenian`, `nm_orangtua_ayah`, `nm_orangtua_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `alamat_orgtua`, `kota_kab_orgtua`, `kode_pos_orgtua`, `hp_orgtua`, `nm_wali`, `pekerjaan_wali`, `penghasilan_wali`, `alamat_wali`, `hp_wali`, `penanggung_biaya`) VALUES
('PSB16060001', '2016-06-12', '09:14:03', '5a869a5ca2', 'iI9lSRI2b9', 'Y', 'Sudah', 11, '11160001', 12152345, 'Pavel', 'Tangerang', '2012-02-03', 'L', 'Islam', 1, 2, 'Kandung', 175, 67, '-', 'Pondok Arum, Blok A No. 4', 'Kota Tangerang', 15131, '085774993267', '0', 'lukman@localhost', 'rumah orang tua', 'motor', 'SMP N 37 Tangerang', 'Jl. Perintis Kemerdekaan I No 1', 'IZ-34567', '2016-05-23', 2016, 34.7, '-', '-', '-', 'Budi', 'Ani', 'Pegawai swasta', 'Ibu rumah tangga', 3800000, 0, 'Pondok Arum, Blok A No. 4', 'Kota Tangerang', 15131, '08988262556', '-', '-', 0, '-', '0', 'Orang tua'),
('PSB16060003', '2016-06-15', '11:37:37', '9b9b634577', 'rePsgWujf7', 'Y', 'Sudah', 11, '0', 12345980, 'Neng Alifa', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'kutuonline@localhost', '', '', 'SMP N 13 Tangerang', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', ''),
('PSB16090004', '2016-09-25', '22:41:01', '345dc7999f', 'wRJvGjpDE9', 'Y', 'Sudah', 11, '0', 12130987, 'Renata', 'Tangerang', '1998-02-04', 'P', 'Islam', 2, 2, 'Kandung', 165, 55, '-', 'Tangerang', 'Tangerang', 15560, '09876787655', '0', 'sulis@localhost', 'rumah orang tua', 'Motor', 'SMP N 12 tangerang', 'Tangerang', 'D3-1234', '1998-11-02', 1998, 34, '-', '-', '-', 'Tes', 'Tes', 'Tes', '-', 3000000, 0, 'Tangerang', 'Tangerang', 15560, '0', '-', '-', 0, '-', '0', 'orang tua'),
('PSB16100005', '2016-10-20', '08:53:01', '34a4e0a49e', '7BF9gqUAEC', 'Y', 'Sudah', 11, '11160002', 43566078, 'Andriana', 'Jakarta', '2000-02-03', 'P', 'Islam', 2, 3, 'Kandung', 165, 48, 'A', 'Graha Kencana Blok D No.4', 'Tangerang', 15560, '08988262556', '0', 'andriana@localhost', 'Rumah orang tua', 'Motor', 'SMP Bina Bangsa', 'Jl. Perintis Kemerdekaan I No. 1', 'DM-4322', '2011-06-12', 2011, 38.7, '-', '-', '-', 'Andriansyah Doni', 'Nurdiyah Sari', 'Staff Pengajar', 'Administrasi Keuangan', 4500000, 3875000, 'Graha Kencana Blok D No.4', 'Tangerang', 15560, '085774993266', '-', '-', 0, '-', '0', 'Orang tua'),
('PSB16100006', '2016-10-20', '14:00:38', '9d227b1959', 'ROqHvHzReA', 'Y', 'Belum', 11, '', 87654688, 'Mumun', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'mumun@localhost', '', '', 'SMP Bina Bangsa', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', ''),
('PSB17060007', '2017-06-03', '04:25:45', '201da82df0', 'VtEMTCqB74', 'Y', 'Belum', 12, '', 78123811, 'Agus Saputra', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'takehikoboyz@gmail.com', '', '', 'SMPN 1 Arjawinangun', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', ''),
('PSB19010001', '2019-04-14', '13:16:00', '201da82df0', 'VtEMTCqB75', 'N', 'Belum', 0, '', 9854234512, 'nurdin', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'nurdin@gmail.com', '', '', 'SMP Swasta Pahlawan Aja', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', ''),
('PSB19040002', '0000-00-00', '00:00:00', '0a11cad23c', 'N5gVroeT66', 'N', 'Belum', 12, '', 12345221233, 'nadiah sahputri', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'sada@mail.com', '', '', 'smp n 12 medan', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', ''),
('PSB19040003', '2019-04-16', '22:37:27', '761db2722e', 'mYLNVyMtfr', 'Y', 'Belum', 12, '', 76563423, 'nadiah siagian', '', '0000-00-00', 'L', '', 0, 0, '', 0, 0, '', '', '', 0, '', '', 'nadiah@gmail.com', '', '', 'SMPN 12 Medan', '', '', '0000-00-00', 0000, 0, '', '', '', '', '', '', '', 0, 0, '', '', 0, '', '', '', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ujian_masuk`
--

CREATE TABLE `ujian_masuk` (
  `no_ujian` varchar(11) NOT NULL,
  `no_reg` varchar(11) NOT NULL,
  `tgl_ujian` date NOT NULL,
  `jam_ujian` time NOT NULL,
  `ruang_ujian` varchar(10) NOT NULL,
  `hasil_ujian` double NOT NULL,
  `ket_ujian` enum('Belum','Lulus','Tidak') NOT NULL DEFAULT 'Belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ujian_masuk`
--

INSERT INTO `ujian_masuk` (`no_ujian`, `no_reg`, `tgl_ujian`, `jam_ujian`, `ruang_ujian`, `hasil_ujian`, `ket_ujian`) VALUES
('USM16060001', 'PSB16060001', '2016-06-15', '09:00:00', 'R101', 78, 'Lulus'),
('USM16060002', 'PSB16060002', '2016-06-15', '00:00:00', '', 40, 'Tidak'),
('USM16060003', 'PSB16060003', '2016-06-18', '10:00:00', 'R102', 45, 'Tidak'),
('USM16090004', 'PSB16090004', '2016-09-28', '00:00:00', '', 0, 'Belum'),
('USM16100005', 'PSB16100005', '2016-10-23', '08:00:00', 'R.202', 85, 'Lulus'),
('USM16100006', 'PSB16100006', '2016-10-23', '00:00:00', '', 0, 'Belum'),
('USM17060007', 'PSB17060007', '2017-06-06', '00:00:00', '', 0, 'Belum'),
('USM19040008', 'PSB19040002', '0000-00-00', '00:00:00', '', 0, 'Belum'),
('USM19040009', 'PSB19040003', '2019-04-23', '00:00:00', '', 0, 'Belum');

-- --------------------------------------------------------

--
-- Stand-in structure for view `views_ujian_masuk`
-- (See below for the actual view)
--
CREATE TABLE `views_ujian_masuk` (
`no_reg` varchar(11)
,`nm_siswa` varchar(50)
,`nisn` bigint(10)
,`asal_sekolah` varchar(40)
,`ket_ujian` enum('Belum','Lulus','Tidak')
);

-- --------------------------------------------------------

--
-- Structure for view `views_ujian_masuk`
--
DROP TABLE IF EXISTS `views_ujian_masuk`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `views_ujian_masuk`  AS  select `no_reg` AS `no_reg`,`nm_siswa` AS `nm_siswa`,`nisn` AS `nisn`,`asal_sekolah` AS `asal_sekolah`,`ujian_masuk`.`ket_ujian` AS `ket_ujian` from (`psb` join `ujian_masuk` on((`no_reg` = `ujian_masuk`.`no_reg`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cara_daftar`
--
ALTER TABLE `cara_daftar`
  ADD PRIMARY KEY (`id_caradft`);

--
-- Indexes for table `dok_foto`
--
ALTER TABLE `dok_foto`
  ADD PRIMARY KEY (`id_dok_foto`);

--
-- Indexes for table `dok_ijazah`
--
ALTER TABLE `dok_ijazah`
  ADD PRIMARY KEY (`id_dok_ijazah`);

--
-- Indexes for table `dok_kk`
--
ALTER TABLE `dok_kk`
  ADD PRIMARY KEY (`id_dok_kk`);

--
-- Indexes for table `identitas_web`
--
ALTER TABLE `identitas_web`
  ADD PRIMARY KEY (`id_identitas`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `kompetensi`
--
ALTER TABLE `kompetensi`
  ADD PRIMARY KEY (`id_kompetensi`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `psb`
--
ALTER TABLE `psb`
  ADD PRIMARY KEY (`no_reg`);

--
-- Indexes for table `ujian_masuk`
--
ALTER TABLE `ujian_masuk`
  ADD PRIMARY KEY (`no_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cara_daftar`
--
ALTER TABLE `cara_daftar`
  MODIFY `id_caradft` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dok_foto`
--
ALTER TABLE `dok_foto`
  MODIFY `id_dok_foto` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dok_ijazah`
--
ALTER TABLE `dok_ijazah`
  MODIFY `id_dok_ijazah` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dok_kk`
--
ALTER TABLE `dok_kk`
  MODIFY `id_dok_kk` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `identitas_web`
--
ALTER TABLE `identitas_web`
  MODIFY `id_identitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id_info` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kompetensi`
--
ALTER TABLE `kompetensi`
  MODIFY `id_kompetensi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai_raport`
--
ALTER TABLE `nilai_raport`
  MODIFY `id_nilai` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
