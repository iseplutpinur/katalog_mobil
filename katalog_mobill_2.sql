-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2021 at 06:10 PM
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
-- Database: `katalog_mobill_2`
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
  `status` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'Tes 12111', 'c9c4c9f5b679bbe405bcfe5679c1bf3c.png', 1, '2021-09-24 21:06:40', NULL),
(2, 'Tes 12111', '90f68f25a75f8ee07d40370b85ed7ebb.png', 1, '2021-09-24 21:30:29', NULL),
(3, 'Tes 12111', '9ab5a5228890620619d036a289e4547b.png', 1, '2021-09-24 21:31:05', NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_eksterior`
--
ALTER TABLE `ktm_eksterior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ktm_galeri`
--
ALTER TABLE `ktm_galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_interior`
--
ALTER TABLE `ktm_interior`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_slider`
--
ALTER TABLE `ktm_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ktm_video`
--
ALTER TABLE `ktm_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ktm_warna`
--
ALTER TABLE `ktm_warna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
