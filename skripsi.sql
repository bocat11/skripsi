-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 10. Januari 2017 jam 21:41
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cohort_pdpt`
--

CREATE TABLE IF NOT EXISTS `cohort_pdpt` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  `semester` int(2) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `ips` float NOT NULL,
  `tot_sks` int(10) NOT NULL,
  `ipk` float NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tahun lulus` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3090 ;

--
-- Dumping data untuk tabel `cohort_pdpt`
--

INSERT INTO `cohort_pdpt` (`id`, `tahun`, `semester`, `nim`, `nama`, `ips`, `tot_sks`, `ipk`, `email`, `alamat`, `tahun lulus`) VALUES
(118, 2015, 2, 2011110008, 'DICKY FADLY MAULANA', 0, 152, 2.71, '', '', 0),
(119, 2015, 2, 2011110010, 'PUTRI AYU PARASATI', 1.11, 132, 2.03, '', '', 0),
(120, 2015, 2, 2011110014, 'MUTHI KUSUMA S.', 0, 159, 2.34, '', '', 0),
(121, 2015, 2, 2011110017, 'YUANDINI LESTARI', 0.2, 156, 2.54, '', '', 0),
(122, 2015, 2, 2011110019, 'ANASTASIA MUSTIKANDRINA', 1.56, 142, 2.23, '', '', 0),
(123, 2015, 2, 2011110027, 'AHMAD RIZKI FADHILLAH', 0.8, 158, 2.63, '', '', 0),
(124, 2015, 2, 2011110030, 'M. WIRA PRASETYA  YUSTISIA', 0.75, 170, 2.98, '', '', 0),
(125, 2015, 2, 2011110035, 'FIKA DAMAYANTI', 2.67, 141, 2.45, '', '', 0),
(126, 2015, 2, 2011110036, 'DILOMONA', 1.4, 164, 2.68, '', '', 0),
(127, 2015, 2, 2011110038, 'MILATI DEFITA RETNO', 1.6, 145, 2.65, '', '', 0),
(128, 2015, 2, 2011110044, 'RUSTAM EFENDI SANAKY', 2.5, 137, 2.29, '', '', 0),
(129, 2015, 2, 2011110045, 'ROMANNA SIMBOLON', 2.92, 113, 2.42, '', '', 0),
(130, 2015, 2, 2011110046, 'WIBI RINZANI NURSAHFENI', 1.67, 147, 2.74, '', '', 0),
(131, 2015, 2, 2011110057, 'DANU YUDHA WINATA', 0.6, 166, 2.53, '', '', 0),
(132, 2015, 2, 2011110062, 'IHSAN NOOR FIKRI', 1, 165, 2.36, '', '', 0),
(133, 2015, 2, 2011110071, 'RETNAWATI', 2, 146, 2.97, '', '', 0),
(134, 2015, 2, 2011110081, 'RATNA AMALIA', 0.75, 146, 2.75, '', '', 0),
(135, 2015, 2, 2011110095, 'RENATTA YULI NUDYA', 0.75, 148, 3.74, '', '', 0),
(136, 2015, 2, 2011110096, 'TEMMY STEVANUS', 0, 164, 3.09, '', '', 0),
(137, 2015, 2, 2011110100, 'RAMADHAN BENNY HENARDI', 0, 152, 2.72, '', '', 0),
(138, 2015, 2, 2011110108, 'FAWWAZIL BAHIR', 0.75, 148, 2.7, '', '', 0),
(139, 2015, 2, 2011110109, 'Y.D.D. GIOVANNI A.', 0, 148, 2.64, '', '', 0),
(140, 2015, 2, 2011110112, 'BENNY EDWARD PASARIBU', 0.5, 110, 0.67, '', '', 0),
(141, 2015, 2, 2011110118, 'MARTINUS ', 4, 148, 3.68, '', '', 0),
(142, 2015, 2, 2011110124, 'ILU PRAYOGI', 1.17, 100, 1.82, '', '', 0),
(143, 2015, 2, 2011110133, 'ANSI NOVALIA TRESNA .S', 1.67, 148, 2.81, '', '', 0),
(144, 2015, 2, 2011110135, 'ACMAD MAULANA', 1.67, 103, 0.64, '', '', 0),
(145, 2015, 2, 2011110136, 'ABDUL RACHMAN SALEH', 2, 146, 2.59, '', '', 0),
(146, 2015, 2, 2011119005, 'TANIA INDRIASTUTI', 0, 148, 3.01, '', '', 0),
(147, 2015, 2, 2011120005, 'RENALDI ARDIYANTO', 0, 147, 2.82, '', '', 0),
(148, 2015, 2, 2011120012, 'KELVIN', 0, 153, 2.74, '', '', 0),
(149, 2015, 2, 2011130001, 'BELINDA MARETHA TIANI', 1.08, 115, 1.81, '', '', 0),
(150, 2015, 2, 2011130002, 'OLLA AROFAH SILICA', 0, 156, 2.62, '', '', 0),
(151, 2015, 2, 2011130023, 'WIDIA', 0.71, 157, 2.03, '', '', 0),
(152, 2015, 2, 2011130035, 'ABDULLAH SUKANDAR', 0, 148, 3.02, '', '', 0),
(153, 2015, 2, 2011130050, 'JOKO MALIS', 1.8, 154, 2.6, '', '', 0),
(154, 2015, 2, 2011140010, 'MIKO BELLA TASIA', 1.43, 120, 2.15, '', '', 0),
(155, 2015, 2, 2011149001, 'FENDY FEBRIANDA', 0, 82, 1.49, '', '', 0),
(156, 2015, 2, 2011210002, 'ERICK CAPIROSSI', 1.73, 124, 2.04, '', '', 0),
(157, 2015, 2, 2011210006, 'AMIR ARIFIN', 0, 147, 2.82, '', '', 0),
(158, 2015, 2, 2011220002, 'HERI SUSANTO', 0, 147, 2.88, '', '', 0),
(159, 2015, 2, 2011220004, 'RIVAN WAHYU KURNIAWAN', 2.27, 140, 2.36, '', '', 0),
(160, 2015, 2, 2011220006, 'ARGA RIESDIAN F', 0, 150, 2.61, '', '', 0),
(161, 2015, 2, 2011220009, 'AHMAD NURDIN', 0, 145, 2.76, '', '', 0),
(162, 2015, 2, 2011220010, 'MUHAMMAD SYAIFUL RAHMAN', 0, 147, 2.53, '', '', 0),
(163, 2015, 2, 2011220011, 'GIOVANI DE PAULUS SILLY', 0, 147, 2.9, '', '', 0),
(164, 2015, 2, 2011220014, 'ARDICO H.', 0, 147, 3.06, '', '', 0),
(165, 2015, 2, 2011220017, 'ACHMAD EFENDI', 1.4, 147, 2.59, '', '', 0),
(166, 2015, 2, 2011220018, 'MUHAMMAD YUNUS', 0, 150, 2.93, '', '', 0),
(167, 2015, 2, 2011229002, 'EDY SUGATAK', 0, 6, 0, '', '', 0),
(168, 2015, 2, 2011229003, 'JAMAL LULAIL SAPUTRA', 0.43, 193, 1.76, '', '', 0),
(169, 2015, 2, 2011230002, 'DESNAL', 0, 149, 3.15, '', '', 0),
(170, 2015, 2, 2011230007, 'ANDRIANA', 2.22, 139, 2.2, '', '', 0),
(171, 2015, 2, 2011230008, 'MOHAMAD RIZKY ADZANO', 0, 146, 2.34, '', '', 0),
(172, 2015, 2, 2011230010, 'YULIANDRI TANJUNG', 1.2, 140, 2.59, '', '', 0),
(173, 2015, 2, 2011230012, 'RIDHO MASEFTIAN', 2.33, 127, 2.39, '', '', 0),
(174, 2015, 2, 2011230013, 'FEBRIANTO DWICAHYO', 1.2, 148, 2.83, '', '', 0),
(175, 2015, 2, 2011230014, 'SHAFRIZAL', 0, 148, 2.99, '', '', 0),
(176, 2015, 2, 2011230015, 'TRIWIBOWO', 1.5, 139, 2.47, '', '', 0),
(177, 2015, 2, 2011230016, 'MOHAMMAD UMRI NOVIANTO', 0.82, 147, 3.5, '', '', 0),
(178, 2015, 2, 2011230020, 'SUSILO WIDIKSONO', 0, 146, 2.92, '', '', 0),
(179, 2015, 2, 2011230021, 'HUSNUR RAHIEM', 0.55, 145, 2.59, '', '', 0),
(180, 2015, 2, 2011230022, 'SYARIFUDIN LUTFIA RAHMAN', 1, 145, 2.66, '', '', 0),
(181, 2015, 2, 2011230023, 'HENDA SEPTIAN', 1.69, 134, 2.31, '', '', 0),
(182, 2015, 2, 2011230024, 'MUHAMMAD IRSYADUL IBAD', 1.69, 135, 1.9, '', '', 0),
(183, 2015, 2, 2011230029, 'SYAIFUL ANDRI SETIAWAN', 0, 145, 2.72, '', '', 0),
(184, 2015, 2, 2011230030, 'MUHAMMAD RANDI', 1.71, 138, 2.25, '', '', 0),
(185, 2015, 2, 2011230034, 'MOHAMMAD IQBAL DWISETIADANI', 1.55, 147, 3.12, '', '', 0),
(186, 2015, 2, 2011230035, 'CHANDRA HADIYANTO', 1.13, 147, 2.44, '', '', 0),
(187, 2015, 2, 2011230038, 'BAGUS APRYANTO', 1.4, 136, 2.46, '', '', 0),
(188, 2015, 2, 2011230039, 'SHALAHUDIN AL-AYUBI', 1.5, 140, 2.71, '', '', 0),
(189, 2015, 2, 2011230040, 'RIZKY MULYO RAHARJO', 1.94, 142, 2.21, '', '', 0),
(190, 2015, 2, 2011230044, 'FAISAL MAHDI', 0.67, 145, 2.93, '', '', 0),
(191, 2015, 2, 2011230047, 'DODDY ARVIAN', 1.89, 124, 1.81, '', '', 0),
(192, 2015, 2, 2011230050, 'BRAMANTIYOKO SETIAWAN', 2.92, 129, 2.07, '', '', 0),
(193, 2015, 2, 2011240001, 'AHMAD YANI', 0.67, 147, 2.91, '', '', 0),
(194, 2015, 2, 2011240002, 'R GILANG YUDHA SATRIA', 2, 143, 2.57, '', '', 0),
(195, 2015, 2, 2011240003, 'JULIANSYAH PUTRA', 0.67, 148, 2.66, '', '', 0),
(196, 2015, 2, 2011240004, 'MUHAMMAD ILMAN AHDIKA', 2.08, 143, 1.97, '', '', 0),
(197, 2015, 2, 2011240005, 'OKTAVIANA DHEWI', 1, 146, 3.38, '', '', 0),
(198, 2015, 2, 2011240007, 'RIAN ALFARIZA', 1.47, 96, 2.41, '', '', 0),
(199, 2015, 2, 2011240012, 'ARIEF AKBAR SUHARTO', 1.75, 147, 2.8, '', '', 0),
(200, 2015, 2, 2011240016, 'MICHELLE CASSANDRA', 1, 147, 3.45, '', '', 0),
(201, 2015, 2, 2011240019, 'RIKI FRENDY SUSANTY', 0, 147, 3.23, '', '', 0),
(202, 2015, 2, 2011240023, 'AGUS SUMANTO', 0, 146, 2.99, '', '', 0),
(203, 2015, 2, 2011240026, 'REGIE GINANJAR', 1.33, 145, 3.66, '', '', 0),
(204, 2015, 2, 2011240901, 'NOVI NIRWANTO', 0, 144, 2.94, '', '', 0),
(205, 2015, 2, 2011250002, 'KHAMDAN NGILMAN YUSUF', 0, 140, 2.74, '', '', 0),
(206, 2015, 2, 2011250004, 'BATER DIAN RUSDIANTO', 0, 146, 3.17, '', '', 0),
(207, 2015, 2, 2011250007, 'MUCHLIS DWI KURNIAWAN', 0, 144, 3.06, '', '', 0),
(208, 2015, 2, 2011250009, 'SHAFHAN RAMADHAN', 1.6, 145, 2.59, '', '', 0),
(209, 2015, 2, 2011250013, 'SAMUEL SOARES', 1.78, 149, 2.51, '', '', 0),
(210, 2015, 2, 2011250014, 'ORLANDO', 2.16, 149, 2.45, '', '', 0),
(211, 2015, 2, 2011250018, 'YOGI HERDIANSYAH', 1.58, 143, 2.59, '', '', 0),
(212, 2015, 2, 2011250019, 'ARIF FAHRUDIN', 0, 146, 3.06, '', '', 0),
(213, 2015, 2, 2011310004, 'MARTINUS FEBRI CHRISTANTO', 1.43, 152, 2.43, '', '', 0),
(214, 2015, 2, 2011310005, 'AKHMAD FAIZAL', 0, 149, 2.34, '', '', 0),
(215, 2015, 2, 2011310007, 'RAMOT SIBURIAN', 2, 142, 2.62, '', '', 0),
(216, 2015, 2, 2011310008, 'SUDINARWULAN', 0, 147, 2.8, '', '', 0),
(217, 2015, 2, 2011310901, 'DIKO SATRIA PUTRO', 0, 153, 2.62, '', '', 0),
(218, 2015, 2, 2011320006, 'BOGI ANDIKA TAMAMI', 1.79, 136, 2.32, '', '', 0),
(219, 2015, 2, 2011320007, 'SONYA RILIN', 0.5, 142, 3.11, '', '', 0),
(220, 2015, 2, 2011410006, 'VERA LYDIANA GUNAWAN', 0, 144, 3.2, '', '', 0),
(221, 2015, 2, 2011410013, 'IING JUSTRIT', 0, 148, 3.2, '', '', 0),
(222, 2015, 2, 2011410014, 'SUNDARI PRATIWI SITORUS', 0, 148, 3.09, '', '', 0),
(223, 2015, 2, 2011410015, 'FINA ARYTON', 0, 141, 2.72, '', '', 0),
(224, 2015, 2, 2011410022, 'MUHAMMAD FALAH', 2.1, 151, 2.5, '', '', 0),
(225, 2015, 2, 2011410025, 'YANUARISTA MURTYANINGTYAS MUHTAR', 0, 147, 3.35, '', '', 0),
(226, 2015, 2, 2011410026, 'BAHTIAR', 0, 145, 3.08, '', '', 0),
(227, 2015, 2, 2011410029, 'ANGGRAENI VALENTINE', 0, 144, 3.28, '', '', 0),
(228, 2015, 2, 2011410030, 'RIFQI NASHIHI', 0, 144, 2.97, '', '', 0),
(229, 2015, 2, 2011410031, 'MIFTAH ALAWIYAH KHAIRIYAH', 0, 145, 2.81, '', '', 0),
(230, 2015, 2, 2011410036, 'MUHAROM YUDHA WICAKSONO', 1, 153, 2.56, '', '', 0),
(231, 2015, 2, 2011410041, 'MEMET SLAMET', 0, 144, 3.08, '', '', 0),
(232, 2015, 2, 2011410044, 'YUSUF MAULANA MAHRIBI', 0, 144, 2.97, '', '', 0),
(233, 2015, 2, 2011410047, 'INTAN DEWI SUSANTI', 1, 145, 2.96, '', '', 0),
(234, 2015, 2, 2011419007, 'RESHA AL-AMIEN', 2, 145, 2.22, '', '', 0),
(235, 2015, 2, 2011419010, 'TOMMY ALDI RAMAWANSYAH', 0.5, 148, 2.75, '', '', 0),
(236, 2015, 2, 2011420001, 'GITA DESIYANI', 0, 149, 3.32, '', '', 0),
(237, 2015, 2, 2011420003, 'FITRIA FEBRIYANTI', 0, 152, 3.05, '', '', 0),
(238, 2015, 2, 2011420005, 'JORDY DENOVAN LIN', 1.8, 148, 2.79, '', '', 0),
(239, 2015, 2, 2011420010, 'ANIS KURNIYAWATI', 1.33, 149, 3.39, '', '', 0),
(240, 2015, 2, 2011420026, 'TITIN SYAHADATAINI', 0, 144, 3.16, '', '', 0),
(241, 2015, 2, 2011420037, 'ANDI DENNY DONDI', 0, 144, 3.05, '', '', 0),
(242, 2015, 2, 2011420042, 'BOBBY RYAN SANDAMYANUS P.', 1.69, 151, 2.76, '', '', 0),
(243, 2015, 2, 2011420905, 'CUT MARISA IKA SAVITRI', 0, 154, 3.08, '', '', 0),
(244, 2015, 2, 2011420909, 'IGNATIUS DANI PRANOWO', 0, 151, 2.93, '', '', 0),
(245, 2015, 2, 2011910006, 'Suhendro Saputra', 0, 42, 2.12, '', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_kuesioner`
--

CREATE TABLE IF NOT EXISTS `hasil_kuesioner` (
  `id_jawaban` int(255) NOT NULL AUTO_INCREMENT,
  `id_kuesioner` int(255) NOT NULL,
  `jawaban` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_jawaban`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `hasil_kuesioner`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `jawab_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `jawab_pertanyaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `jawab_pertanyaan`
--

INSERT INTO `jawab_pertanyaan` (`id`, `nim`, `id_pertanyaan`, `jawaban`) VALUES
(1, 2011230035, 1, 'PT.A'),
(2, 2011230045, 1, 'PT.B'),
(3, 2011230025, 1, 'PT.C'),
(4, 2011230035, 2, 'Karyawan'),
(5, 2011230045, 2, 'Kontrak 1 Tahun');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuesioner`
--

CREATE TABLE IF NOT EXISTS `kuesioner` (
  `id_kuesioner` int(255) NOT NULL AUTO_INCREMENT,
  `nim` varchar(255) NOT NULL,
  `q1` varchar(200) NOT NULL,
  `a1` varchar(200) NOT NULL,
  `q2` varchar(200) NOT NULL,
  `a2` varchar(200) NOT NULL,
  `q3` varchar(200) NOT NULL,
  `a3` varchar(200) NOT NULL,
  `q4` varchar(200) NOT NULL,
  `a4` varchar(200) NOT NULL,
  `q5` varchar(200) NOT NULL,
  `a5` varchar(200) NOT NULL,
  `q6` varchar(200) NOT NULL,
  `a6` varchar(200) NOT NULL,
  `q7` varchar(200) NOT NULL,
  `a7` varchar(200) NOT NULL,
  `q8` varchar(200) NOT NULL,
  `a8` varchar(200) NOT NULL,
  `q9` varchar(200) NOT NULL,
  `a9` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kuesioner`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kuesioner`
--

INSERT INTO `kuesioner` (`id_kuesioner`, `nim`, `q1`, `a1`, `q2`, `a2`, `q3`, `a3`, `q4`, `a4`, `q5`, `a5`, `q6`, `a6`, `q7`, `a7`, `q8`, `a8`, `q9`, `a9`) VALUES
(1, '', 'nama perusahaan', 'cv.hatmoko', 'status pekerjaan', 'pegawai', 'bidang pekerjaan', 'home industri', 'sub bidang', 'daur ulang', 'Apakah materi perkuliahan dapat diimplementasikan di tempat kerja?', 'ya', 'Apakah anda bekerja sesuai bidang perkuliahan?', 'tidak', 'Apakah pengalaman organisasi bermanfaat di dunia kerja?', 'ya', 'Apakah nilai IPK dan mata kuliah berpengaruh dalam mencari pekerjaan?', 'biasa saja', 'Apakah atituted berpengaruh di dunia kerja?', 'ya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_pertanyaan`
--

CREATE TABLE IF NOT EXISTS `list_pertanyaan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` text NOT NULL,
  `type_input` varchar(20) NOT NULL,
  `sugestion` text NOT NULL,
  `jawaban` text NOT NULL,
  `waktu_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `list_pertanyaan`
--

INSERT INTO `list_pertanyaan` (`id`, `pertanyaan`, `type_input`, `sugestion`, `jawaban`, `waktu_buat`) VALUES
(1, 'Dimana Perusahaan Anda??', 'text', '', '', '2017-01-10 20:18:07'),
(2, 'Status Anda Sekarang Dimana?', 'radio_button', 'karyawan,kontrak', '', '2017-01-10 20:18:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `loker`
--

CREATE TABLE IF NOT EXISTS `loker` (
  `id_loker` int(255) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(200) NOT NULL,
  `posisi` varchar(200) NOT NULL,
  `batas_waktu` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id_loker`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `loker`
--

INSERT INTO `loker` (`id_loker`, `nama_perusahaan`, `posisi`, `batas_waktu`, `alamat`, `no_telp`, `email`) VALUES
(1, 'pt ykk', 'manager', '21 desember 2017', 'jl raya cibitung', 2147483647, 'ykk@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran`
--

CREATE TABLE IF NOT EXISTS `saran` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `saran` text NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `saran`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
