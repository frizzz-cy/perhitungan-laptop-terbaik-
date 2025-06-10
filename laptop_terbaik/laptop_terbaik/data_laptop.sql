-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2025 at 04:51 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_laptop`
--

CREATE TABLE `data_laptop` (
  `COL 1` varchar(30) DEFAULT NULL,
  `COL 2` varchar(26) DEFAULT NULL,
  `COL 3` varchar(11) DEFAULT NULL,
  `COL 4` varchar(24) DEFAULT NULL,
  `COL 5` varchar(51) DEFAULT NULL,
  `COL 6` varchar(14) DEFAULT NULL,
  `COL 7` varchar(13) DEFAULT NULL,
  `COL 8` varchar(10) DEFAULT NULL,
  `COL 9` varchar(10) DEFAULT NULL,
  `COL 10` varchar(12) DEFAULT NULL,
  `COL 11` varchar(17) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `data_laptop`
--

INSERT INTO `data_laptop` (`COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5`, `COL 6`, `COL 7`, `COL 8`, `COL 9`, `COL 10`, `COL 11`) VALUES
('Nama ', 'Program Studi', 'Semester', '  Frekuensi Penggunaan  ', '  Keperluan Penggunaan  ', 'Merk Laptop', 'Harga', 'RAM Laptop', 'SSD Laptop', 'Berat Laptop', 'Baterai Laptop'),
('Gigih Susanto', 'Sistem Informasi', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Lenovo', '6.500.000', '8', '256', '1,75 kg', '3200 mAh'),
('Nadhifatun N.M.', 'Sistem informasi ', '4', 'Lebih dari 6 jam', 'Pemrograman', '  Lenovo', '5.000.000', '8', '120', '1,75 KG', '2000 mAh'),
('Wariful imam syaf', 'Manajemen', '4', '3–6 jam', 'Mengetik tugas / laporan', 'Hp', '12.000.000', '8', '512', '1,98 KG', '4400 mAh'),
('Achmad Fauzi Ali', 'Ekonomi syariah', '4', '1–3 jam', 'Mengikuti kelas online / Zoom', 'Asus', '8.000.000', '8', '256', '1,75 KG', '3200 mAh'),
('puspita yoga', 'Sistem Informasi', '4', '1–3 jam', 'Pemrograman', 'Asus', '4.000.000', '8', '512', '1.75 KG', '3200 mAh'),
('yusril', 'sistem informasi', '4', '3–6 jam', 'belajar, tugas, program app', 'Acer', '3.000.000', '16', '256', '1,8 KG', '3200 mAh'),
('Aditya Muzakky', 'Sistem Informasi', '4', '1–3 jam', 'Pemrograman', 'HP', '12.000.000', '8', '512', '1,98 KG', '4400 mAh'),
('Dani', 'Sistem  Informasi', '4', '3–6 jam', 'Pemrograman', 'Dell', '10.950.000', '32', '512', '1,62 KG', '5600 mAh'),
('ALMA NUR KURNIAWAN ', 'Sistem informasi ', '4', 'Lebih dari 6 jam', 'Pemrograman', 'Lenovo', '7.000.000', '16', '1TB', '1,12 KG', '5135 mAh'),
('Tirta', 'Seni Rupa ', '4', '3–6 jam', 'Desain grafis', 'lenovo', '12.000.000', '12', '512', '+/- 1 kg', 'tidak tau'),
('Arif', 'Sistem informasi', '4', '1–3 jam', 'Gaming', 'Axio', '75.000.000', '25', '3T', '4Kg', '100%'),
('Mochamad Nasirudin', 'PAI', '4', '3–6 jam', 'Gaming', 'asus', '12.000.000', '12', '1 T', '1.5 kg', '100%'),
('A\'af Fatihul Ihsan ', 'Sistem Informasi ', '4', '3–6 jam', 'Kerjaan (Campur)', 'Dell', '3.300.000', '32', '512', '1.3 Kg', '24500 MAh'),
('m.farihin', 'pai', '4', 'Kurang dari 1 jam', 'Mengetik tugas / laporan', 'lenovo', '2.000.000', '16', '256', 'tidak tahu', 'tidak tahu'),
('Sasa', 'Informatika', '4', '3–6 jam', 'Pemrograman', 'Dell', '2.000.000', '16', '512', '2,5 kg', 'Kurang tau'),
('Habib Asgaf', 'PAI', '4', '1–3 jam', 'Mengikuti kelas online / Zoom', 'Lenovo', '12.000.000', '34', '111', '34', '100%'),
('Noval', 'Sistem informasi ', '4', '3–6 jam', 'Pemrograman', 'Huawei ', '7.000.000', '8', '512', '1,30kg', '3665mAh'),
('Laila Nur Aulia', 'Sistem Informasi', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Asus', '8.170.000', '8', '512', '1.40kg', '42WHrs'),
('Nizar Zulmi', 'Ekonomi Syariah', '4', 'Kurang dari 1 jam', 'Mengetik tugas / laporan', 'Hp', '6,000,000', '16', '512', '1.5', '4400'),
('Yogi Bachtiar', 'Sistem Informasi', '4', 'Lebih dari 6 jam', 'Editing, live, dang programing', 'Asus', '12.000.000.00', '16', '1 T', '1.9 Kg', '4000 MAH'),
('Nur Aida', 'Sistem informasi ', '4', '3–6 jam', 'Pemrograman', 'Dell ', '3.800.000', '16', '256', '', ''),
('Damar Yusril maulanalhadi', 'Si B', '4', '3–6 jam', 'Cocok untuk mobilitas tinggi', 'Lenovo', '4.500.000', '8', '512', '1.3 kg', '42Wh'),
('Chelsea cantik', 'Sistem Informasi', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Acer', '7.700.000', '12', '256', '1g', '100%'),
('jar', 'SI', '4', 'Lebih dari 6 jam', 'Editing video / audio', 'Lenovo', '11.000.000', '32', '1 T', '2kg', ' 4 jam'),
('Jay', 'Pendidikan Bahasa Inggris', '4', 'Lebih dari 6 jam', 'Gaming', 'Lenovo', '33.000.000', '32', '2 T', '256', '5210 mAh'),
('Chalimatuz Zahro ', 'Pendidikan bahasa Inggris ', '2 UPJB 2024', '1–3 jam', 'Mengetik tugas / laporan', 'Hp', '2.500.000,00', '32', '512', 'Kurang tau', 'Kurang tau'),
('Asri', 'Sistem Informasi', '8', 'Lebih dari 6 jam', 'semua yang ada di pilihan', 'Vivobook', '5.000.000', '12', '512', '', ''),
('Mohammad Arif Zainuddin Rofiqi', 'Manajemen Pendidikan Islam', '2', '3–6 jam', 'Desain grafis', 'Advan', '7.000.000', '16', '512', '1,5 kg', '5050 mAh'),
('Aulia', 'IAT', 'Selesai', '1–3 jam', 'Mengetik tugas / laporan', 'Hp', '4500000', '15', '1 T', '1,47', ''),
('Eep Saepullah Yusup', 'Informatika ', '6', '3–6 jam', 'Mengetik tugas / laporan', 'ASUS', '5.900.000', '8', '256', '5000 g', '37 WH'),
('Arini Lailan Najah ', 'PAI', '4', '1–3 jam', 'Mengetik tugas / laporan', 'ASUS Vivobook ', '5.000.000', '4', '117', '1 kg ', '100%'),
('Vifi Rahmatul umah ', 'Informatika ', '2', '3–6 jam', 'Pemrograman', 'MSI ', '6.250.000', '8', '256', '1,4', '86%'),
('Dzuriya', 'Pendidikan Bahasa Arab', '6', '3–6 jam', 'Semua jawaban benar, kecuali pemrograman dan gaming', 'Hp 240 G8', '6..000.000', '8', '256', '1.47 kg', '37 Wh'),
('Firda Anggun Choirunnisya\' ', 'Pai', '2', '1–3 jam', 'Mengetik tugas / laporan', 'Hp', '5.000.000', '8', '256', '1,5', 'Tidak tau'),
('Yulia Nurrahma Sari ', 'Pendidikan agama Islam ', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Axio', '3.000.000', '4', '256', '1,5', '100'),
('Habib Asgaf', 'PAI', '4', 'Lebih dari 6 jam', 'Editing video / audio', 'Lenovo', '3.000.000', '8', '256', '1', '100%'),
('Fany', 'Manajemen', '4', 'Lebih dari 6 jam', 'Mengetik tugas / laporan', 'Hp', '9.000.000', '8', '256', '1,5', 'besar'),
('anoymous', 'SIstem informasi', '4', 'Lebih dari 6 jam', 'Gaming', 'MSI', '10.000.000', '16', '1 T', '1,5', ''),
('Dani puji', 'si', '19', '1–3 jam', 'Gaming', 'hp ', '7.000.000', '8', '1 T', '1,5', '1'),
('Alpi lara Santi ', 'Pendidikan agama islam', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Lenovo', '4.500.000', '8', '256', '2kg', '5000 MAH'),
('Inayatul mufidaaaaaa', 'Pai', '4', '3–6 jam', 'Mengetik tugas / laporan', 'Lenovo', '6.000.000', '8', '256', '1,5', 'Aman'),
('serlina magfiroh', 'PAI ', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Samsung', '7.500.000', '12', '512', '1,5 KG', ''),
('Irgiansyah', 'Sistem informasi', '8', '3–6 jam', 'Mengetik tugas / laporan', 'Asus', '4.000.000', '4', '256', '50 gram', '3000'),
('Ahmad irgiansyah', 'Informatika', '8', 'Lebih dari 6 jam', 'Pemrograman', 'Acer ', '24.000.000', '32', '2 T', '2,1', '97wh'),
('Anisa', 'Pai', '4', '1–3 jam', 'Mengetik tugas / laporan', 'Hp', '7.000.000', '8', '256', '0.8', '5000'),
('Krisdiana Nur Laily Sa\'adah', 'Manajemen', '4', '1–3 jam', 'Mengetik tugas / laporan', 'HP', '6.000.000', '8', '256', '1,5 KG', '60 watt-jam (Wh) '),
('Rhomadoni', 'Teknik Informatika', '2', '1–3 jam', 'Pemrograman', 'Vivobook', '6.700.000', '8', '512', '1,5 KG', '42Wh'),
('Abdul Fattah Hasan Tholabi', 'Informatika ', '2', '1–3 jam', 'Pemrograman', 'Vivobook', '8.000.000', '8', '512', '1,5 KG', '42Wh'),
('Januar Mathory', 'Sistem informasi', '2', 'Kurang dari 1 jam', 'Pemrograman', 'Vivobook', '6.500.000', '8', '256', '1,5 kg', '42Wh'),
('Prayitno ', 'Informatika ', '2', '1–3 jam', 'Pemrograman', 'Vivobook', '6.500.000', '8', '256', '1.5 kg', '42WH'),
('Imam Fauzi', 'Pertanian', '2', 'Kurang dari 1 jam', 'Mengetik tugas / laporan', 'Vivobook', '6.650.000', '8', '512', '1,5 KG', '42Wh'),
('Rafiq Alifil Huda ', 'Informatika ', '2', '3–6 jam', 'Pemrograman', 'Acer', '10.700.000', '8', '512', '3kg', '57 Wj'),
('Zaki Umar Wira hadi kusuma ', 'Sistem informasi ', '2', '3–6 jam', 'Pemrograman', 'Lenovo', '4.000.000.00', '16', '256', '1,32', '72 Wh'),
('DONI RAHMADHON ', 'Manajemen ', '2', '1–3 jam', 'Mengetik tugas / laporan', 'Acer', '6.300.00', '8', '512', '1,5KG', '3-cel Lithum'),
('Purwatiningsih', 'Manajemen', '6', '3–6 jam', 'Mengetik tugas / laporan', 'Asus', '4.500.000', '4', '264 gb', '1,3kg', '42Wh'),
('Sapira', 'Sistem Informasi', '6', 'Lebih dari 6 jam', 'Mengetik tugas / laporan', 'Lenovo', '5.000.000', '8', '512GB', '1,37 kg', 'Integrated 38Wh'),
('Tasykiylah Nuril Maulidiyah ', 'manajemen ', '6', '3–6 jam', 'Mengetik tugas / laporan', 'lenovo ', '6.000.000', '8', '512 GB', '1,6 kg', '2 CELL'),
('Aris Zuhriatul Kurnia', 'Ilmu Al Quran dan Tafsir', '6', '1–3 jam', 'Mengetik tugas / laporan', 'VSAP', '3.000.000', '8', '256', '500 g', '5800 mAh');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
