-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12 Nov 2016 pada 00.51
-- Versi Server: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_elgoritmah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `isi_about` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `judul`, `isi_about`) VALUES
(1, 'About Elgoritma', 'Elgoritma Adalah websit Pembelajaran Online Matakuliah Dasar Algoritma dan Pemrograman dengan adanya website Elgoritma ini yaitu Untuk memudahkan Mahasiswa dalam belajar Dasar Algoritma dan pemrograman agar lebih mudah serta dapat diakses dimana saja dan kapan saja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `modul`
--

CREATE TABLE IF NOT EXISTS `modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `pdf` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `modul`
--

INSERT INTO `modul` (`id`, `judul`, `pdf`) VALUES
(1, 'Modul 1', 'file_1478363431.pdf'),
(2, 'Modul 2', 'file_1478363452.pdf'),
(3, 'Modul 3', 'file_1478363777.pdf'),
(4, 'Modul 4', 'file_1478363793.pdf'),
(5, 'Modul 5', 'file_1478533404.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_admin`
--

CREATE TABLE IF NOT EXISTS `user_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user_admin`
--

INSERT INTO `user_admin` (`id`, `username`, `password`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@email.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_student`
--

CREATE TABLE IF NOT EXISTS `user_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_depan` varchar(40) NOT NULL,
  `nama_belakang` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `user_student`
--

INSERT INTO `user_student` (`id`, `username`, `password`, `nama_depan`, `nama_belakang`, `email`) VALUES
(6, 'andrianto.teddy', '962b2d2b8e72dc6771bca613d49b46fb', 'Teddy', 'Andrianto', 'andrianto.teddy@gmail.com'),
(7, 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 'maha', 'siswa', 'mahasiswa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_teacher`
--

CREATE TABLE IF NOT EXISTS `user_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data untuk tabel `user_teacher`
--

INSERT INTO `user_teacher` (`id`, `username`, `password`, `nama`, `email`) VALUES
(10, 'guru', 'd41d8cd98f00b204e9800998ecf8427e', 'guru', 'guru@gmail.com'),
(11, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen', 'dosen@gmail.com'),
(12, 'teacher', '8d788385431273d11e8b43bb78f3aa41', 'teacher', 'teacher@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(40) NOT NULL,
  `video` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `video`
--

INSERT INTO `video` (`id`, `judul`, `video`) VALUES
(1, 'Perkenalan  Algoritma', 'video_1478397608.mp4');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
