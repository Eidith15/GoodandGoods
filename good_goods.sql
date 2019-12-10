-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 05:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `good&goods`
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
  `image_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `deskripsi_barang`, `harga_barang`, `stock_barang`, `image_barang`) VALUES
(1, 'Harry Potter and the Cursed Child', 'Harry Potter and the Cursed Child is a 2016 British two-part play written by Jack Thorne based on an original story by J. K. Rowling, John Tiffany, and Thorne. Previews of the play began at the Palace Theatre, London on 7 June 2016, and it premiered on 30 July 2016', 114000, 10, 'Harry Potter and the Cursed Child.jpg'),
(2, 'Sword Art Online', 'Sword Art Online is a Japanese light novel series written by Reki Kawahara and illustrated by abec. The series takes place in the near future and focuses on protagonist Kazuto \"Kirito\" Kirigaya and Asuna Yuuki as they play through various virtual reality MMORPG worlds', 100000, 20, 'Sword Art Online.jpg'),
(3, 'The Pragmatic Programmer', 'The Pragmatic Programmer: From Journeyman to Master is a book about software engineering by Andrew Hunt and David Thomas, published in October 1999, first in a series of books under the label The Pragmatic Bookshelf.', 150000, 5, 'The Pragmatic Programmer.jpg'),
(4, 'What Is Mathematics?', 'What Is Mathematics? is a mathematics book written by Richard Courant and Herbert Robbins, published in England by Oxford University Press. It is an introduction to mathematics, intended both for the mathematics student and for the general public.', 50000, 7, 'What Is Mathematics.jpg'),
(5, 'The Marvel Book: Expand Your Knowledge Of A Vast Comics Universe', 'One Marvel book to guide them all.The Marvel Book charts an exhilarating course through the fascinating, dynamic and awe-inspiring Marvel Comics universe.Packed with vivid comic book imagery, illuminating', 170000, 2, 'The Marvel Book.jpg'),
(6, 'The Lord of the Rings', 'The Lord of the Rings is an epic high-fantasy novel written by English author and scholar J. R. R. Tolkien. The story began as a sequel to Tolkien\'s 1937 fantasy novel The Hobbit, but eventually developed into a much larger work', 70000, 7, 'The Lord of the Rings.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
