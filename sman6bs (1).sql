-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2016 at 06:53 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sman6bs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `nama`, `email`, `password`) VALUES
('amikom', 'Khairul annuar', 'de.clasmo15@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_guru` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `pangkat` varchar(225) NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6627 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `password`, `nama_guru`, `tanggal_lahir`, `tempat_lahir`, `alamat`, `pangkat`, `jabatan`) VALUES
(6579, '196510181994121002', '807674f237526e2531633e6b57f94046', 'Drs.Evendy Silaen', '1965-12-10', 'Tapanuli utara', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6578, '195811121985031014', 'f7ee61c9aade172e6ce82cf26ad7a8da', 'Drs.Lian', '1958-12-11', 'manna', 'Manna Bengkulu Selatan', 'pembina/IV/a', 'guru'),
(6580, '196304161986021002', 'b0bc42ed711807692f2463c1b2e8f41d', 'Winoto Santoso,s.pd', '1963-12-04', 'Jakarta', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6581, '196406101994121001', '0c16a452e5bde229af3d920e917badc3', 'Yarin, M.TPd', '1964-10-06', 'Tanjung Menang', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6582, '196808071995121003', 'c85fe06b7f6e1c28c57403b6773088f9', 'Juharman, M.Pd', '1968-08-08', 'Suakarami', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6583, '196503171997031002', '20f9d58b9f13680adeba1b0980aae15b', 'Drs.Amrizal', '1965-12-03', 'solok', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6584, '196912131997022003', 'be4dd67a65838382fcabea5cdcd680ef', 'Dra. Kasmaini', '1969-12-12', 'pinang', 'manna,bengkulu selatan', 'pembina/IV/a', 'guru'),
(6585, '197209191999032012', '9d0f94d6976f3f1181fc9a2380ba3902', 'SRI HARTATI, S.Pd', '1972-12-09', 'Tanjung Panyang', 'manna,bengkulu selatan', 'pembina/IV/a', 'guru'),
(6586, '197508162002121002', '9076db4895b417d4a668cb0b7168e4db', 'Johirman, M.PD', '1975-12-08', 'Kebun Jati', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6587, '197112182003121002', '807674f237526e2531633e6b57f94046', 'Sudi suanto, M.Pd', '1971-12-12', 'Manna', 'manna, bengkulu selatan', 'pembina/IV/a', 'guru'),
(6588, '197510122003122006', 'f6c78ae4bbb055d3761ad6213a147501', 'Endang ningsih, S.Pd', '1975-12-10', 'grobogan', 'manna,bengkulu selatan', 'Penata Tk.I/IV/a', 'guru'),
(6590, '197904202005022003', 'be4dd67a65838382fcabea5cdcd680ef', 'Jurah afriza, S.Pd', '1979-02-04', 'Padang Niur', 'manna,bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6591, '197203172002122002', '610f8155c562b6cdc2ba60235808532f', 'Yanti Yusipa, S.Pd', '1972-12-03', 'Tanjung Alam', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6592, '197801022003122010', '6064e6d3493f8079cfc90a3ba5536fdc', 'Fatonah,S.pd', '1978-02-01', 'Mataram', 'manna, bengkulu selatan', 'Penata Tk.I/IV/a', 'guru'),
(6593, '197906292005022003', 'be4dd67a65838382fcabea5cdcd680ef', 'Tri utami dewi, S.Pd', '1979-06-29', 'Manna', 'manna, bengkulu selatan', 'Penata Tk.I/IV/a', 'guru'),
(6594, '196901312006041002', 'f69927bb9b1c05d4719dcca8f7517454', 'Iskandar, M.Pd', '1969-01-31', 'Medan', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6595, '197405182006041005', '6b56a57f44602157c3bed603769962b4', 'Evi heriyanto, M.Pd', '1974-05-18', 'Manna', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6596, '197601192006042011', 'bb3ba81ed6d947091326f91111c4d84c', 'Renort sianipar, S.T', '1976-01-19', 'Aekbolon', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6597, '198205102006041011', '05b7e448827a6e964a2fc9b7d54a7d66', 'Dadi gustiawan, M.Pd', '1982-10-05', 'Padang Jawi', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6598, '198211102006042012', 'e9b782aee7643d7e7ee2a2c81028b808', 'Lili suryani,S.Pd', '1982-10-11', 'Manna', 'manna, bengkulu selatan', 'Penata Tk.I/IV/d', 'guru'),
(6599, '197008111994031012', '3735dc870eef1b760b8d6ffda8d6ac28', 'Tarman Hayadi,M.pd', '0000-00-00', 'Kota Agung', 'Manna, Bengkulu Selatan', 'Pembina Tk I/IV/b', 'Kepala Sekolah'),
(6601, '198103242008031001	', 'c7a180eeb3a5e20bc843d9f62408b124', 'MARDIANTO, S.Sos', '1981-03-24', 'Bandung Ayu', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6602, '198211162008032001', '11bf680ec8c54068fd340b1ad26f9902', 'GITA ARYANCE, S.Pd', '1982-11-16', 'Bengkulu', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6603, '198111302008031002', '20f9d58b9f13680adeba1b0980aae15b', 'DINDRI, M.TPd', '1981-11-13', 'Tanjung Aur 1', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6604, '198503072008032001', '11bf680ec8c54068fd340b1ad26f9902', 'LELY MARNIDAH, S.Pd', '1985-03-07', 'Bintuhan', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6605, '198208152009012002', '7411a5570af1275f348b20bee2915f6d', 'YUSMARNI SOREDAH, S.Pd', '1982-05-15', 'Manna', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6606, '198307282009012004', '37456f5415930b0dbd8547e3f1b92044', 'YULIZA FITRIANI, S.Pd	', '1983-07-28', 'Manna', 'Manna, Bengkulu selatan', 'Penata/III/c', 'Guru'),
(6607, '198406282009012006', '15094e741b9eccb2fdb6fd616a89a2d7', 'KARTINI, S.Pd', '0000-00-00', 'Jakarta', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6608, '198503112009011005', '893ea4ee5c8867816d83ba3a6f55afb4', 'MARJOKO SUSILO, M.PdI', '1985-03-11', 'Tanjung Besar', 'Manna, Bengkulu Selatan', 'Penata/III/c', 'Guru'),
(6609, '198312162009032009', 'c1947eab0ac1b9a549d0a0bd1cbe6aa5', 'ERNIDA, M.PD	', '1983-12-16', 'Curup', 'Manna, Bengkulu Selatan', 'Penata Muda TK. I/III/b', 'Guru'),
(6610, '196511012010011001', 'be23f0d1174be962cee7960dbef362ac', 'Drs. ARSIN', '1965-11-01', 'Tebing Tinggi', 'Manna, Bengkulu Selatan', 'Penata . I/III/c', 'Guru'),
(6611, '197801182010011005	', '893ea4ee5c8867816d83ba3a6f55afb4', 'UTTMAN JUNAIDI, S.Pd', '1978-01-18', 'Lubuk Sirih', 'Manna, Bengkulu Selatan', 'Penata Muda TK. I/III/b', 'Guru'),
(6612, '197811112010012004', '37456f5415930b0dbd8547e3f1b92044', 'EPI PUSPITA, S.Pd.I', '1978-11-11', 'Durian Sebatang', 'Manna, Bengkulu Selatan', 'Penata /III/c', 'Guru'),
(6613, '198401082010012006', '15094e741b9eccb2fdb6fd616a89a2d7', 'YESI VALINDA SUTRI, S.PD', '1984-01-08', 'Manna', 'Manna, Bengkulu Selatan', 'Penata /III/c', 'Guru'),
(6614, '198408292010011004', '68a10c11a89ba76de6e8e0ff24ee24e5', 'ISUADI,S.Pd', '1984-08-29', 'Gunung Mesir', 'Manna, Bengkulu Selatan', 'Penata /III/c', 'Guru'),
(6615, '198502082010012044', '59887770a1c63e10c47bc7acfa4ab1cc', 'FERA HASTUTI, S.Pd', '1985-02-08', 'Manna', 'Manna, Bengkulu Selatan ', 'Penata /III/c', 'Guru'),
(6616, '198510122010011008', '2128c016dec6c9d9f13dac907a540255', 'NOP OKTA DAPUTRA, S.Pd', '1985-10-12', 'Durian Besar', 'Manna, Bengkulu Selatan', 'Penata /III/c', 'Guru'),
(6617, '198708312011012016', '4666e66fe94fa4c02eef0e3849836ed8', 'GUSTIANA MASPITASARI, S.Pd', '1987-08-31', 'Bengkulu', 'Manna, Bengkulu selatan', 'Penata Muda Tk.I /III/b', 'Guru'),
(6618, '198711262011012006', '15094e741b9eccb2fdb6fd616a89a2d7', 'TRIANA NOVIYARNI, S.Pd', '1987-11-26', 'Manna', 'Manna, Bengkulu Selatan', 'Penata Muda TK. I/III/b', 'Guru'),
(6619, '198401082011011008', '2128c016dec6c9d9f13dac907a540255', 'NETO KUSBOYO, S.PD', '1984-01-08', 'Tanjung Raman', 'Manna, Bengkulu Selatan', 'Penata Muda TK. I/III/b', 'Guru'),
(6620, '196807252014071001', '9131a94c91f691579a253c38ccdd7216', 'YULIAN DARMAWAN. SE', '1968-07-25', 'Solo', 'Manna, Bengkulu Selatan', 'Penata Muda/III/a', 'Guru'),
(6621, '198711112015032006', '1ef1c6f23448cadf4c9e2dadbf55ae94', 'LINA SUKMAWATI, S.Pd', '1987-11-11', 'Subang', 'Manna, Bengkulu Selatan', 'Penata Muda/III/a', 'Guru'),
(6622, '196204301999032001', '11bf680ec8c54068fd340b1ad26f9902', 'ARIA GUSNI,S.Sos', '1962-04-03', 'Air Periukan', 'Manna, Bengkulu Selatan', 'Penata III/c', 'Guru'),
(6623, '197301121998012001', 'c8d5bcf1e5fbcd3fe6434645b3da8492', 'SUHARYANTI,SE', '1973-01-12', 'Wonosobo', 'Manna, Bengkulu Selatan', 'Penata Muda TK.I/III/b', 'Guru'),
(6624, '19606111981021003', 'ad2ea36c1b12a3883fdc9e5b9d5cf6da', 'ZAHARUDDIN', '1961-06-11', 'Manna', 'Manna, Bengkulu Selatan', 'Penata Muda TK.I/III/b', 'Guru'),
(6625, '197911112007012024', '165dd2c0a5ddf12817b2b3cee70e85df', 'NOVI HARNI. SE', '1979-11-11', 'Manna', 'Manna, Bengkulu Selatan', 'Penata Muda/III/a', 'Guru'),
(6626, '197405052014072002', '412c50b58a171e1de541ac426effa305', 'WISNENTI', '1974-05-05', 'Sijangek', 'Manna, Bengkulu Selatan', 'Pengatur Muda /IIa', 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_informasi` varchar(255) NOT NULL,
  `tanggal_informasi` date NOT NULL,
  `informasi` text NOT NULL,
  PRIMARY KEY (`id_informasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id_informasi`, `judul_informasi`, `tanggal_informasi`, `informasi`) VALUES
(2, 'Jalan Santai HUT kabupatan BS', '2016-11-06', 'JALAN SANTAI : Pada puncak  peringatan HUT Kabupaten Bengkulu Selatan yang ke- 63 SMAN 6 BS beserta jajaran instansi yang berada di Kec. Manna melaksanakan jalan santai, yang diiukuti oleh warga SMAN 6 BS beserta instansi di jajaran Kec. Manna'),
(3, 'Sukse HUT Sman 6 Bengkulu Selatan', '2016-11-06', 'SMA Negeri 6 Bengkulu Selatan telah melaksanakan peryaan Hari Ulang Tahun yang ke XIII tahun 2015,'),
(4, 'Jalan Santai HUT kabupatan BS', '2016-11-06', 'JALAN SANTAI : Pada puncak  peringatan HUT Kabupaten Bengkulu Selatan yang ke- 63 SMAN 6 BS beserta jajaran instansi yang berada di Kec. Manna melaksanakan jalan santai, yang diiukuti oleh warga SMAN 6 BS beserta instansi di jajaran Kec. Manna');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `judul_jadwal` varchar(225) NOT NULL,
  `file_jadwal` varchar(225) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `judul_jadwal`, `file_jadwal`) VALUES
(1, 'PkN', 'Surat-Keterangan-Mahasiswa.docx');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(225) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, 'X 1'),
(2, 'X 2'),
(3, 'X 3'),
(4, 'X 4'),
(5, 'X 5'),
(7, 'X 6'),
(8, 'X 7'),
(9, 'XI IPA 1'),
(10, 'XI IPA 2'),
(11, 'XI IPA 3'),
(12, 'XI IPA 4'),
(13, 'XII IPA 1'),
(14, 'XII IPA 2'),
(15, 'XII IPA 3'),
(16, 'XII IPA 4'),
(17, 'XI IPS 1'),
(18, 'XI IPS 2'),
(19, 'XI IPS 3'),
(20, 'XI IPS 4'),
(21, 'XII IPS 1'),
(22, 'XII IPS 2'),
(23, 'XII IPS 3'),
(24, 'XII IPS 4');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE IF NOT EXISTS `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_materi` varchar(225) NOT NULL,
  `tanggal_upload` date NOT NULL,
  `file_materi` varchar(225) NOT NULL,
  `id_matpel` int(11) NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id_materi`, `judul_materi`, `tanggal_upload`, `file_materi`, `id_matpel`) VALUES
(3, 'Kecerdasan buatan  ', '2016-11-06', '20121213_MODULSBD.doc', 13),
(4, 'Lingkungan Bisnis', '2016-11-06', 'Lingkungan Bisnis apri.docx', 8);

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE IF NOT EXISTS `matpel` (
  `id_matpel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_matpel` varchar(225) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_matpel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`id_matpel`, `nama_matpel`, `id_guru`) VALUES
(1, 'Kimia', 0),
(2, 'Bahasa Indonesia', 0),
(3, 'Matematika', 0),
(4, 'Agama', 0),
(5, 'Fisika', 0),
(6, 'Sosiolgi', 0),
(7, 'Geografi', 0),
(8, 'Ekonomi', 0),
(9, 'Penjas', 0),
(10, 'Biologi', 0),
(11, 'Bahasa inggris', 0),
(12, 'Bahasa Arab', 0),
(13, 'Teknologi Komputer Dan Informasi', 0),
(14, 'Kesenian', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE IF NOT EXISTS `mengajar` (
  `id_mengajar` int(11) NOT NULL AUTO_INCREMENT,
  `id_matpel` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_mengajar`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `id_matpel`, `id_guru`) VALUES
(7, 1, 6598),
(8, 2, 6582),
(6, 1, 6588),
(10, 2, 6586),
(11, 3, 6580),
(12, 3, 6604),
(13, 3, 6615),
(14, 3, 6617),
(15, 4, 6608),
(16, 5, 6593),
(17, 5, 6605),
(18, 6, 6601),
(19, 6, 6610),
(20, 7, 6607),
(21, 7, 6624),
(22, 9, 6596);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `nilai_tugas` varchar(225) NOT NULL,
  `nilai_mid` varchar(225) NOT NULL,
  `nilai_ujian` varchar(225) NOT NULL,
  `semester` enum('ganjil','genap') NOT NULL,
  `id_matpel` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai_tugas`, `nilai_mid`, `nilai_ujian`, `semester`, `id_matpel`, `id_siswa`, `id_tahun`) VALUES
(2, '76', '76', '67', 'ganjil', 3, 3, 3),
(3, '76', '76', '67', 'ganjil', 3, 3, 3),
(4, '$nilait', '$nilaim', '$nilaiuas', '', 0, 0, 0),
(5, '7', '6', '76', 'ganjil', 2, 0, 0),
(6, '', '', '', '', 2, 0, 0),
(7, '', '', '', '', 2, 0, 0),
(8, '7', '9', '9', 'genap', 2, 0, 0),
(9, '', '', '', '', 2, 0, 0),
(10, '8', '9', '09', 'ganjil', 2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_siswa` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `telpon` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_ayah` varchar(225) NOT NULL,
  `pekerjaaan_ayah` varchar(255) NOT NULL,
  `status` enum('siswa','alumni') NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `foto_siswa` varchar(255) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=693 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `password`, `nama_siswa`, `tanggal_lahir`, `tempat_lahir`, `kelamin`, `alamat`, `telpon`, `email`, `nama_ayah`, `pekerjaaan_ayah`, `status`, `id_tahun`, `id_kelas`, `foto_siswa`) VALUES
(683, '994172233552  ', 'e393d023e480061cffc74a3f07adeceb  ', 'Muhamad Julio', '1999-05-13', 'Seginim  ', 'perempuan', 'Desa Seginim, Kec Air Nipis  ', 1234567890, 'MuhamadJulio@yahoo.com', 'Ali  ', 'Petani  ', 'siswa', 2, 1, ''),
(689, '994172233554', '1da7dda34fc20e822d790c15b8513324', 'anwar sofwana', '2000-10-24', 'Manna', '', 'Kayu Kunyit, Manna', 123456789, 'anwarsofwana@yahoo.com', 'Romi', 'Guru', 'siswa', 2, 1, 'DSCN1378.JPG'),
(691, '123456789 ', 'e10adc3949ba59abbe56e057f20f883e ', 'Budi ', '0000-00-00', 'yogyakarta ', 'perempuan', 'sleman ', 0, '', ' ', ' ', 'alumni', 1, 1, ''),
(692, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', '', '', '', 0, '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tahun` varchar(225) NOT NULL,
  PRIMARY KEY (`id_tahun`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun`, `nama_tahun`) VALUES
(1, '2015/2016'),
(2, '2016/2017');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
