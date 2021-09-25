-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2021 at 07:00 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komuni39_katalog_mobil`
--

-- --------------------------------------------------------

--
-- Table structure for table `ktm_daftar_harga`
--

CREATE TABLE `ktm_daftar_harga` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `harga` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_daftar_harga`
--

INSERT INTO `ktm_daftar_harga` (`id`, `id_produk`, `title`, `harga`, `status`, `created_at`, `updated_at`) VALUES
(14, 5, 'GLX MT', '232.200.000', 1, '2021-09-25 20:44:11', NULL),
(15, 5, 'GLS MT', '248.700.000', 1, '2021-09-25 20:45:11', NULL),
(16, 5, 'GLS AT', '259.700.000', 1, '2021-09-25 20:45:22', NULL),
(17, 5, 'EXCEED MT', '255.400.000', 1, '2021-09-25 20:45:32', NULL),
(18, 5, 'EXCEED AT', '265.600.000', 1, '2021-09-25 20:46:14', NULL),
(19, 5, 'SPORT MT', '270.600.000', 1, '2021-09-25 20:46:39', NULL),
(20, 5, 'SPORT AT', '280.600.000', 1, '2021-09-25 20:46:50', NULL),
(21, 5, 'ULTIMATE AT', '284.500.000', 1, '2021-09-25 20:47:04', NULL),
(22, 5, 'BLACK LIMITED MT', '268.700.000', 1, '2021-09-25 20:47:16', NULL),
(23, 5, 'BLACK LIMITED AT', '278.900.000', 1, '2021-09-25 20:47:26', NULL),
(26, 10, 'Testing 123', '123', 1, '2021-09-25 23:38:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktm_eksterior`
--

CREATE TABLE `ktm_eksterior` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_eksterior`
--

INSERT INTO `ktm_eksterior` (`id`, `id_produk`, `title`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(10, 5, 'Depan', '0826979102a4d36d0f3070291a7e21b0.jpg', 1, '2021-09-25 20:51:13', '2021-09-25 17:00:38'),
(11, 5, 'Samping Depan', '5d9fd26c4736ec236f356cea2cc148e2.jpg', 1, '2021-09-25 20:51:26', '2021-09-25 17:00:57'),
(12, 5, 'Samping', 'f9cfc4d75605e27a02be7dc3d4ea0ed1.jpg', 1, '2021-09-25 20:51:36', '2021-09-25 17:00:42'),
(13, 5, 'Samping Belakang', '4b7b8d324da2db2273d7ee09aa06bba7.jpg', 1, '2021-09-25 20:51:49', '2021-09-25 17:00:48'),
(14, 5, 'Samping Belakang 1', '2c0bfdcc3c43c1d23ac12920666a0709.jpg', 1, '2021-09-25 20:52:02', '2021-09-25 17:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `ktm_galeri`
--

CREATE TABLE `ktm_galeri` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_galeri`
--

INSERT INTO `ktm_galeri` (`id`, `id_produk`, `title`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(4, 5, '1', '73a22777e1ac0a5e7bf63c6b9b50d385.jpg', 1, '2021-09-25 21:23:24', '2021-09-25 17:01:40'),
(5, 5, '2', '52046783fe6fe029ac8bf64741d7f2ef.jpg', 1, '2021-09-25 21:23:31', '2021-09-25 17:01:45'),
(6, 5, '3', '50da32adfd29e2c94f76f8a2337177cd.jpg', 1, '2021-09-25 21:23:37', '2021-09-25 17:01:50'),
(7, 5, '4', '35869793d73465fe93983ee36f6708e4.jpg', 1, '2021-09-25 21:23:44', '2021-09-25 17:01:55'),
(8, 5, '5', 'd25bbf3934c505d6cd3961ab9db5bff8.jpg', 1, '2021-09-25 21:23:51', '2021-09-25 17:02:00'),
(9, 5, '6', 'b7f373be5fb6364fa2a9cc39ac14b5e9.jpg', 1, '2021-09-25 21:23:58', '2021-09-25 17:02:06');

-- --------------------------------------------------------

--
-- Table structure for table `ktm_interior`
--

CREATE TABLE `ktm_interior` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktm_jumbotron`
--

CREATE TABLE `ktm_jumbotron` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktm_kategori`
--

CREATE TABLE `ktm_kategori` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `detail` text NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktm_navigation`
--

CREATE TABLE `ktm_navigation` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `sort` int(11) NOT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ktm_produk`
--

CREATE TABLE `ktm_produk` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `jumbotron_foto` varchar(50) DEFAULT NULL,
  `jumbotron_title` varchar(50) DEFAULT NULL,
  `jumbotron_detail` text DEFAULT NULL,
  `promo_title` varchar(50) DEFAULT NULL,
  `promo_harga_mulai` varchar(50) DEFAULT NULL,
  `promo_paket_kredit` varchar(50) DEFAULT NULL,
  `promo_tenor_kerdit` varchar(50) DEFAULT NULL,
  `promo_detail` text DEFAULT NULL,
  `informasi_spesifikasi` text DEFAULT NULL,
  `informasi_spesifikasi_status` int(1) DEFAULT 1,
  `keterangan_pembelian` text DEFAULT NULL,
  `keterangan_pembelian_status` int(1) NOT NULL DEFAULT 1,
  `status` int(1) NOT NULL DEFAULT 2 COMMENT '0 Tidak Aktif | 1 Aktif | 2 Dibuat | 3 Diedit',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_produk`
--

INSERT INTO `ktm_produk` (`id`, `title`, `jumbotron_foto`, `jumbotron_title`, `jumbotron_detail`, `promo_title`, `promo_harga_mulai`, `promo_paket_kredit`, `promo_tenor_kerdit`, `promo_detail`, `informasi_spesifikasi`, `informasi_spesifikasi_status`, `keterangan_pembelian`, `keterangan_pembelian_status`, `status`, `created_at`, `updated_at`) VALUES
(5, 'New Xpander', '4b705e90db90aec609011ffecc15ce56.jpg', 'New Xpander Malang', '<p>Informasi Pembelian, Test Drive, Simulasi Kredit Mobil Baru Mitsubishi New Xpander di Malang Jawa Timur</p>', 'PROMO SEPTEMBER 2021', '232.200.000', '30 Jutaan', '5 Tahun', '<p>Bonus Pembelian Kaca Film, Paket SMART SILVER, Oli MMGO, Perawatan Chemical Item, Biaya Jasa Servis hingga 50.000 km atau 4 tahun**.</p>', '<p>Mitsubishi Xpander merupakan kategori mobil keluarga multi guna (MPV) yang menggabungkan kenyamanan dan fleksibilitas yang lebih baik dari sebuah MPV dengan performa, kekuatan dan ketangguhan berkarakter khas mobil SUV Mitsubishi.</p><p>Memiliki berbagai kelebihan dari mulai fitur baru, fitur terlengkap, desain ATTRACTIVE AND DYNAMIC DESIGN membuat Mitsubishi Xpander terkesan kokoh, kuat dan berkelas.</p><p>Sebelum peluncuran Mitsubishi Xpander juga disebut-sebut dengan nama Ekspander, XM Concept, Next Generation MPV dan Mitsubishi expander.</p><p>Tipe yang tersedia GLX, GLS, Exceed, Sport, dan Ultimate dilengkapi 2 pilhan tranmisi yaitu Manual (M/T) dengan 5 percepatan (speed) untuk tipe GLX, GLS, Exceed. Serta bertranmisi otomatis (A/T) dengan 4 speed untuk tipe Exceed, Sport, dan Ultimate.</p><p>Berikut informasi spesifikasi serta perbedaan fitur Mitsubishi Xpander setiap tipenya</p><ul><li>Ukuran dimensi body dengan panjang 4.475mm, lebar 1.750mm, dan tinggi 1.700mm</li><li>Ground clereance dengan tinggi 205 mm, mudah melewati genangan air, banjir, jalan berlubang serta polisi tidur</li><li>Mesin 1.5L MIVEC, DOHC 16-VALVE</li><li>Mesin bertenaga maximal 77 KW/6.000 RPM, dengan torsi 141NM pada 4.000 RPM</li><li>Lampu kabut (Fog lamp), kecuali tipe GLX</li><li>Velg berukuran 16 inci two-tone alloy wheel, kecuali tipe GLX dan GLS berukuran 15 inci</li><li>Interior dengan 2 pilihan warna yaitu beige-black dilengkapi wooden trim, serta warna full black dilengkapi trim carbon fiber artifisial</li><li>Tilt and telescopic steering, stir kemudi bisa dinaik-turunkan dan maju-mundurkan</li><li>Audio remote control steering switch, kecuali tipe GLX dan GLS</li><li>Hands free function with steering switch menggunakan bluetooth, tersedia di tipe Ultimate</li><li>Power window</li><li>Central door lock</li><li>Electric door mirror, spion elektrik</li><li>Penyejuk interior kabin dengan AC Double Blower, kecuali tipe GLX menggunakan Front air conditioner (single blower)</li><li>Keyless Operation Display, mempermudah membuka-menutup pintu tanpa menggunakan kunci, tersedia pada tipe Ultimate dan Sport</li><li>Engine start/stop button, menghidupkan mesin mobil dengan tombol tanpa menggunakan kunci, tersedia pada tipe Ultimate dan Sport</li><li>Sistem Audio:<ul><li>Tipe GLX dilengkapi Audio less dengan 2 speaker</li><li>Tipe GLS dan Exceed dilengkapi Unique wide 2DIN audio, CD/MP3 player, USB port dengan 4 speaker</li><li>Tipe Sport dilengkapi Unique wide 2DIN audio dengan 6 speaker</li><li>Tipe Ultimate dilengkapi Unique wide 2DIN touchscreen audio (Sony tipe Mega Bass), DVD player, USB port dengan 6 speaker</li></ul></li><li>Power Outlet 12 Volt salah satu fungsinya untuk charger handphone, tersedia disetiap baris tempat duduk, kecuali tipe GLX dan GLS hanya didepan</li><li>Rear view camera, kamera parkir-mundur, tersedia di tipe Ultimate</li><li>Sabuk pengaman (Seat belt) disemua tempat duduk</li><li>Sistem keselamatan menggunakan Reinforced Impact Safety Evolution (RISE), Dual airbags, ABS + EBD, ISOFIX child restraint seat, Emergency Stop Signal (ESS), Immobilizer. Khusus tipe Ultimate dan Sport ada tambahan:<ul><li>Hill Start Assist (HSA)</li><li>Active Stability Control (ASC) with Traction Control Logic (TCL)</li></ul></li></ul><p>Untuk biaya perawatan Gratis jasa servis selama 4 tahun atau sudah mencapai 10 ribu KM.</p><p>Tersedia warna standar Diamond Black Mica dan Quartz White Pearl. Selain tipe GLX ditambah warna Sterling Silver Metallic. Sedangkan tipe Ultimate dan Sport ada tambahan warna Titanium Grey Metallic dan Red Metallic.</p>', 1, '<h2>Keterangan Pembelian</h2><p>Harap diperhatikan dibawah ini sebelum membeli New Xpander</p><ul><li>Promo, Harga dan Paket Kredit hanya berlaku pada bulan ini September 2021</li><li>Bonus pembelian berlaku selama persediaan masih ada, tidak bisa diganti dengan uang atau paket lain</li><li>Pembayaran Sebaiknya Dilakukan Bank Transfer</li><li>Daftar Harga Sudah OTR ( On The Road )</li><li>Untuk area wilayah Malang, Batu, Pasuruan, Probolinggo Jawa Timur</li><li>Uang tanda jadi pemesanan minimal Rp 5 Juta</li><li>Melampirkan Foto Copy Tanda Pngenal Diri</li><li>Persyaratan Kredit Mudah melampirkan Foto Copy KTP, Kartu Keluarga, Slip Gaji, Buku Rekening Tabungan</li><li>Proses Kredit cepat mulai 1 hari kerja</li><li>Informasi ini tidak mengikat dan dapat berubah sewaktu-waktu tanpa ada pemberitahuan sebelumnya</li><li>New Xpander yang dijual disini merupakan mobil baru dalam kondisi belum terpakai, diproduksi secara resmi oleh Mitsubishi Indonesia, di distribusikan oleh Sun Star Motor Malang dan mempunyai sertifikat bergaransi hingga 3 Tahun atau 100.000km</li></ul>', 1, 1, '2021-09-25 11:58:43', '2021-09-25 17:02:21'),
(9, 'NEW PAJERO SPORT', 'cd7312785dda01dd5e1aa07bc6506bd6.jpg', 'NEW PAJERO SPORT Malang', '<p>Informasi Pembelian, Test Drive, Simulasi Kredit Mobil Baru Mitsubishi New Pajero Sport di Malang Jawa Timur</p>', 'PROMO SEPTEMBER 2021', '525.000.000', '89 Jutaan', '5 Tahun', '<p>Bonus Pembelian Kaca Film V-Kool, Paket SMART SILVER, Oli MMGO, Perawatan Chemical Item, Biaya Jasa Servis hingga 50.000 km atau 4 tahun**.</p>', '<p>Mitsubishi Pajero Sport merupakan kendaraan mobil jenis SUV (Sport Utility Vehicle) Ladder Frame yang diproduksi oleh Mitsubishi Motors.</p><p>New Pajero Sport Facelift yang terbaru lebih tangguh, dilengkapi dengan fitur-fitur terbaru lebih canggih serta modern sehingga membuat lebih nyaman digunakan setiap hari untuk Anda dan keluarga disegala kondisi jalan offroad maupun perkotaan.</p><p>Berikut sekilas spesifikasi New Pajero Sport Facelift Terbaru:</p><h3>Dimensi</h3><ul><li>Tinggi 1835 mm</li><li>Panjang 4825 mm</li><li>Lebar 1815 mm</li><li>Ground Clearance 218 mm</li><li>Kapasitas 7 penumpang</li><li>Kapasitas Tangki 68 liter</li></ul><h3>Performa</h3><ul><li>2422cc 2.4L 4N15 MIVEC Turbocharged</li><li>Tenaga 181 ps atau 180 tk</li><li>Torsi 43,8 Kgm atau 429 Nm</li><li>Transmisi<ol><li>Tipe Dakar Otomatis 8 Speed</li><li>Tipe Exceed Otomatis 5 Speed</li><li>Tipe GLX Manual 5 Speed</li></ol></li><li>Paddle Shift (Dakar)</li><li>Adaptive Cruise Control (Dakar)</li><li>Super Select 4WD-II (Dakar)</li><li>Suspendi<ol><li>Double wishbone with coil spring</li><li>3 link type rigid axle with coil spring</li></ol></li></ul><h3>Eksterior</h3><ul><li>Headlamp Lampu Depan, Foglamp, Cornering Lamp, DRL (Daytime Running Light)<ol><li>Tipe Dakar LED</li><li>Tipe Exceed &amp; GLX Halogen</li></ol></li><li>Auto Lighting Control (Dakar)</li><li>Welcome Light and Coming Home Light System (Dakar)</li><li>Rear Combination Lamp LED</li><li>Headlamp Washer (Dakar)</li><li>LED Tail Lights with LED Stop Lamps</li><li>High-Mount Stop Lamp</li><li>Rear Spoiler (Dakar, Exceed)</li><li>Silver Roof Rails (Dakar)</li><li>Shark Fin Antenna</li><li>Power Back Door with Kick Sensors (Dakar)</li><li>Ukuran Ban<ol><li>Tipe Dakar &amp; Exceed 265/60 R18</li><li>Tipe GLX 265/70 R16</li></ol></li><li>Velg Wheel<ol><li>Tipe Dakar 18 inch Two-tone Alloy Wheel</li><li>Tipe Exceed 18 inch Single-tone Alloy Wheel</li><li>Tipe 17 inch Single-tone Alloy Wheel</li></ol></li></ul><h3>Interior</h3><ul><li>Head Unit Audio Video<ol><li>Tipe Dakar 8 inch Touch Screen Display Full Colour, Radio, Bluetooth, USB Player, Smartphone Connectivity, 6 speakers</li><li>Tipe Exceed 7 inch Touch Screen Display Full Colour, Radio, Bluetooth, USB Player, Smartphone Connectivity, 4 speakers</li><li>Tipe GLX Wide 2DIN Audio Not Supported Video, USB Player, CD, MP3, 4 speakers</li></ol></li><li>High Console</li><li>Leather-wrapped (Dakar, Exceed)</li><li>Mitsubishi Remote System from Smartphone (Dakar)<ol><li>Tailgate Operation</li><li>Vehicle Reminder</li><li>Operation Assit</li><li>Vehicle Information</li><li>Car Finder</li></ol></li><li>Keyless Operation System with One Touch Start System with Navigation System (Dakar)</li><li>Tilt-Telescopic Adjustable Steering</li><li>Steering Wheel Control Switch (Dakar, Exeed)</li><li>Power Window Switch with Illlumination (Dakar)</li><li>Auto Dimming Rear View Mirror (Dakar)</li><li>Speedometer Full LCD meter (Dakar)</li><li>Gear Shift Knob with Leather-wrapped (Dakar, Exeed)</li><li>AC Power Outlet 220V 150W (Dakar, Exeed)</li><li>Double USB Charger, USB Connectivity (Dakar, Exeed)</li><li>Dual Zone Automatic Air Conditioning AC (Dakar, Exeed)</li><li>Wide Screen 12 inch Roof Monitor with Remote Control for Rear Passenger support HDMI &amp; USB Connection (Dakar Ultimate 4x2)</li><li>Rear View Camera with Multi Around View Monitor (Dakar, Exeed)</li></ul><h3>Safety</h3><ul><li>SRS Airbags 7 point (Dakar)<ol><li>Side Airbags</li><li>Driver\'S Knee Airbag</li><li>Curtain Airbags</li></ol></li><li>ABS + EBD</li><li>Lane Change Assist (LCA) (Dakar)</li><li>Trailer Stability Assist (TSA) (Dakar)</li><li>Seatbelt Front Row, 2nd Row, 3rd Row</li><li>Active Stability &amp; Traction Control (ASC + TCL) (Dakar, Exeed)</li><li>ISO-FIX Child Seat Anchor x 2 for 2nd Row Seat</li><li>Immobilizer</li><li>Hill Start Assist (HSA) (Dakar)</li><li>Hill Descent Control (HDC) (Dakar)</li><li>Forward Collision Mitigation System (FCM) (Dakar Ultimate)</li><li>Brake Assist (BA) (Dakar)</li><li>Blind Spot Warning (BSW)(Dakar Ultimate)</li><li>Ultrasonic Mis-acceleration Mitigation System (UMS) (Dakar)</li><li>Child Protection Rear Doors Lock (Dakar)</li><li>Cabin Illumination on Unlock (Dakar)</li><li>Auto Door Lock by Speed Sensing (Dakar)</li><li>Rain Sensor (Dakar)</li><li>Parking Sensor Front &amp; Rear</li><li>Rear Defroster with Timer (Dakar)</li><li>Rise Body</li></ul><h3>Aksesoris</h3><p>Tersedia juga paket aksesoris resmi New Pajero Sport dijual terpisah dan terbatas jumlahnya.</p><ul><li>Front Airdam</li><li>Rear Airdam</li><li>Hood Emblem</li><li>Side Window Deflector</li><li>Side Step Garnish</li><li>Exhaust Finisher</li></ul><p>Disclaimer : Warna yang ditampilkan mungkin sedikit berbeda dengan warna aslinya, karena perbedaan resolusipada setiap layar. Semua kelengkapan fitur dan penjelasan lengkap tidak ditampilkan disini. Informasi dapat berubah-ubah sewaktu-waktu tanpa pemberitahuan. Hubungi Sales Marketing Disini untuk Request Test Drive secara Gratis.</p>', 1, '<p>Harap diperhatikan dibawah ini sebelum membeli New Pajero Sport</p><ul><li>Promo, Harga dan Paket Kredit hanya berlaku pada bulan ini September 2021</li><li>Bonus pembelian berlaku selama persediaan masih ada, tidak bisa diganti dengan uang atau paket lain</li><li>Pembayaran Sebaiknya Dilakukan Bank Transfer</li><li>Daftar Harga Sudah OTR ( On The Road )</li><li>Untuk area wilayah Malang, Batu, Pasuruan, Probolinggo Jawa Timur</li><li>Uang tanda jadi pemesanan minimal Rp 5 Juta</li><li>Melampirkan Foto Copy Tanda Pngenal Diri</li><li>Persyaratan Kredit Mudah melampirkan Foto Copy KTP, Kartu Keluarga, Slip Gaji, Buku Rekening Tabungan</li><li>Proses Kredit cepat mulai 1 hari kerja</li><li>Informasi ini tidak mengikat dan dapat berubah sewaktu-waktu tanpa ada pemberitahuan sebelumnya</li><li>New Pajero Sport yang dijual disini merupakan mobil baru dalam kondisi belum terpakai, diproduksi secara resmi oleh Mitsubishi Indonesia, di distribusikan oleh Sun Star Motor Malang dan mempunyai sertifikat bergaransi hingga 3 Tahun atau 100.000km</li></ul><p><br>&nbsp;</p>', 1, 1, '2021-09-25 22:05:21', '2021-09-25 18:20:08'),
(10, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 1, 2, '2021-09-25 23:20:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktm_slider`
--

CREATE TABLE `ktm_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 active | 0 nonactive',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_slider`
--

INSERT INTO `ktm_slider` (`id`, `title`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(8, 'Xpander Cross', 'b8e25e7c01f21f8a44014ec334a12b09.jpg', 1, '2021-09-25 17:39:41', NULL),
(9, 'Xpander Cross 2', '27f1511823be0da672472f16a8b8b29f.jpg', 1, '2021-09-25 17:40:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktm_video`
--

CREATE TABLE `ktm_video` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_video`
--

INSERT INTO `ktm_video` (`id`, `id_produk`, `title`, `url`, `status`, `created_at`, `updated_at`) VALUES
(5, 5, 'video 1', 'https://youtu.be/9k-BjDxYEjQ', 1, '2021-09-25 20:55:16', NULL),
(6, 5, 'video 2', 'https://youtu.be/MxiqLi_roG8', 1, '2021-09-25 20:55:44', NULL),
(7, 5, 'video 3', 'https://youtu.be/bRg3x8_JIvs', 1, '2021-09-25 20:56:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ktm_warna`
--

CREATE TABLE `ktm_warna` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `status` int(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ktm_warna`
--

INSERT INTO `ktm_warna` (`id`, `id_produk`, `title`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 'Coklat', 'cff6ad4d19264dfa4a589854d40aa3a8.jpg', 1, '2021-09-25 21:22:05', '2021-09-25 17:01:12'),
(4, 5, 'Putih', 'fe86d3522ac3c5acafcdedb88bab1f24.jpg', 1, '2021-09-25 21:22:17', '2021-09-25 17:01:23'),
(5, 5, 'Merah', '3df5bdb83d2765df899ca40f50e82a08.jpg', 1, '2021-09-25 21:22:27', '2021-09-25 17:01:18'),
(6, 5, 'Putih abu', '183f5b954816c489aad673b757363183.jpg', 1, '2021-09-25 21:23:15', '2021-09-25 17:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_create`) VALUES
(8, 'Administrator', 'administrator@gmail.com', 'me_face.jpg', '$2y$10$nPFxTwUG13DH0ylEDfPyi.yY77qDmQSj/SwyebDkpJeclGqCyiIkS', 1, 1, 1589434654);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(13, 2, 4),
(25, 1, 4),
(26, 1, 3),
(27, 1, 2),
(28, 1, 20),
(29, 2, 20),
(30, 2, 2),
(33, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'administrator', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(9, 11, 'haha', 'aaa', 'aaa', 1),
(13, 1, 'Wkwkkwk', 'menu', 'fas fa-fw fa-folder-open', 0),
(16, 4, 'adfads', 'fsads', 'fa fa-sw fa-folder-open', 1),
(17, 3, 'User Management', 'menu/usermanagement', 'fas fa-fw fa-user-edit', 1),
(18, 1, 'Role', 'administrator/role', 'fas fa-fw fa-user-tie', 1),
(19, 2, 'Change password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ktm_daftar_harga`
--
ALTER TABLE `ktm_daftar_harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_eksterior`
--
ALTER TABLE `ktm_eksterior`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_galeri`
--
ALTER TABLE `ktm_galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_interior`
--
ALTER TABLE `ktm_interior`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_jumbotron`
--
ALTER TABLE `ktm_jumbotron`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm_kategori`
--
ALTER TABLE `ktm_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm_navigation`
--
ALTER TABLE `ktm_navigation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_produk`
--
ALTER TABLE `ktm_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm_slider`
--
ALTER TABLE `ktm_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ktm_video`
--
ALTER TABLE `ktm_video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `ktm_warna`
--
ALTER TABLE `ktm_warna`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email` (`email`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ktm_daftar_harga`
--
ALTER TABLE `ktm_daftar_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ktm_eksterior`
--
ALTER TABLE `ktm_eksterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ktm_galeri`
--
ALTER TABLE `ktm_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ktm_interior`
--
ALTER TABLE `ktm_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ktm_jumbotron`
--
ALTER TABLE `ktm_jumbotron`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_kategori`
--
ALTER TABLE `ktm_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_navigation`
--
ALTER TABLE `ktm_navigation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_produk`
--
ALTER TABLE `ktm_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ktm_slider`
--
ALTER TABLE `ktm_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ktm_video`
--
ALTER TABLE `ktm_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ktm_warna`
--
ALTER TABLE `ktm_warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ktm_daftar_harga`
--
ALTER TABLE `ktm_daftar_harga`
  ADD CONSTRAINT `ktm_daftar_harga_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_eksterior`
--
ALTER TABLE `ktm_eksterior`
  ADD CONSTRAINT `ktm_eksterior_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_galeri`
--
ALTER TABLE `ktm_galeri`
  ADD CONSTRAINT `ktm_galeri_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_interior`
--
ALTER TABLE `ktm_interior`
  ADD CONSTRAINT `ktm_interior_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_navigation`
--
ALTER TABLE `ktm_navigation`
  ADD CONSTRAINT `ktm_navigation_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_video`
--
ALTER TABLE `ktm_video`
  ADD CONSTRAINT `ktm_video_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ktm_warna`
--
ALTER TABLE `ktm_warna`
  ADD CONSTRAINT `ktm_warna_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `ktm_produk` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
