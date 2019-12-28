-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 02:44 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `good_goods`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `deskripsi_barang` varchar(1000) NOT NULL,
  `harga_barang` int(100) NOT NULL,
  `stock_barang` int(100) NOT NULL,
  `image_barang` varchar(100) NOT NULL,
  `kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `stock_barang`, `image_barang`, `kategori`) VALUES
(1, 'Harry Potter and the Cursed Child', 'Harry Potter and the Cursed Child is a 2016 British two-part play written by Jack Thorne based on an original story by J. K. Rowling, John Tiffany, and Thorne. Previews of the play began at the Palace Theatre, London on 7 June 2016, and it premiered on 30 July 2016', 114000, 10, 'Harry Potter and the Cursed Child.jpg', 1),
(2, 'Sword Art Online', 'Sword Art Online is a Japanese light novel series written by Reki Kawahara and illustrated by abec. The series takes place in the near future and focuses on protagonist Kazuto \"Kirito\" Kirigaya and Asuna Yuuki as they play through various virtual reality MMORPG worlds', 100000, 20, 'Sword Art Online.jpg', 4),
(3, 'The Pragmatic Programmer', 'The Pragmatic Programmer: From Journeyman to Master is a book about software engineering by Andrew Hunt and David Thomas, published in October 1999, first in a series of books under the label The Pragmatic Bookshelf.', 150000, 5, 'The Pragmatic Programmer.jpg', 3),
(4, 'What Is Mathematics?', 'What Is Mathematics? is a mathematics book written by Richard Courant and Herbert Robbins, published in England by Oxford University Press. It is an introduction to mathematics, intended both for the mathematics student and for the general public.', 50000, 7, 'What Is Mathematics.jpg', 4),
(5, 'The Marvel Book: Expand Your Knowledge Of A Vast Comics Universe', 'One Marvel book to guide them all.The Marvel Book charts an exhilarating course through the fascinating, dynamic and awe-inspiring Marvel Comics universe.Packed with vivid comic book imagery, illuminating', 170000, 2, 'The Marvel Book.jpg', 2),
(6, 'The Lord of the Rings', 'The Lord of the Rings is an epic high-fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work', 70000, 7, 'The Lord of the Rings.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(10) NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `produk` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id`, `order_id`, `produk`, `qty`, `harga`) VALUES
(1, 1, 2, 3, 200000),
(2, 1, 1, 1, 250000),
(3, 2, 1, 3, 250000),
(4, 2, 2, 2, 200000),
(5, 3, 6, 1, 70000);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama_kategori` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`) VALUES
(1, 'Fantasy'),
(2, 'Sci-Fi'),
(3, 'Logic'),
(4, 'Anime');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(10) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `email`, `alamat`, `telp`) VALUES
(1, 'nuy', '@mailsd', 'sdsad', '778787798'),
(2, 'nay', '@nay', 'jdhsjhfj', '898908908'),
(3, '', '', '', ''),
(4, 'haru', 'nrlfzh12@gmail.com', 'sgfdh', '658678679798'),
(5, '', '', '', ''),
(6, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pelanggan` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `tanggal`, `pelanggan`) VALUES
(1, '2019-11-29', 3),
(2, '2019-11-29', 4),
(3, '2019-12-28', 5),
(4, '2019-12-28', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'muhamad azhar hamdani', 'admin@gmail.com', '33.JPG', '$2y$10$J/zskOK4zJzKCKJzgdFDCuDC9P2IgGoibsxYpuuk2KxRlzvp5HzgS', 1, 1, 1577099490),
(8, 'muhamad azhar', 'rina@gmail.com', 'Sword_Art_Online.jpg', '$2y$10$SHUQnaFMQ1YcB9AyZ7zeBuS.tVB.KeeO8MS4lmROxJTUBbi.3H68W', 2, 1, 1577424957),
(9, 'admin', 'admin11@gmail.com', '2.JPG', '$2y$10$onGAQQHitNjPdee/KvVR2.B9NJRNbPm1g42gQKKpUKJhxingypZtu', 1, 1, 1577428662),
(10, 'muhamad azhar hamdani', 'muhamadazhar08@gmail.com', '9.JPG', '$2y$10$rAia9KWXrjwCAXTe.w2ogO9fnrUDAN2b8rIQolM/aV5rpmviastUC', 2, 1, 1577471512),
(11, 'muhamad azhar hamdani', 'azhar@gmail.com', 'shop.jpg', '$2y$10$sgwPCVr.irSjrTBAsMwvHOTG4rhEG6DoW1a9jIc6TOYbb4pIxjkSO', 2, 1, 1577473100),
(12, 'muhamad azhar hamdani', 'muhamadazhar088@gmail.com', 'default.jpg', '$2y$10$cziJ7g8DBhyVWM6ZWkYZGekTbDK07Ea8ArVZX/s.p.fQLdOQfksKC', 1, 1, 1577494773),
(13, 'admin 123', 'admin33@gmail.com', 'default.jpg', '$2y$10$oO7WulV5ORsmZCx955Ambegi7xnJKLfmNnUcsySQsl1Zm39gHmajq', 1, 1, 1577504699);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'test'),
(5, 'tesw');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Managment', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Menagement', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Tambah  Barang', 'shopping/tambah', 'fab fa-fw fa-youtube', 1),
(8, 2, 'Ganti password', 'user/changepassword', 'fas fa-fw fa-key\"', 1),
(9, 1, 'coba', 'coba/coba', 'fab fa-fw fa-youtube', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
