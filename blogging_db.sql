-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 05. Maret 2015 jam 19:45
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogging_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_author` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `web_site` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`id`, `nama_author`, `email`, `web_site`, `username`, `password`) VALUES
(1, 'Wuriyanto', 'wuriyanto48@yahoo.co.id', 'www.wuriyantoinformatika.blogspot.com', 'wury', '123456'),
(2, 'Nugroho', 'nugroho@gmail.com', 'nugroho.net', 'nugroho', '12345'),
(3, 'Joni Kamalama', 'joni@yahoo.com', 'joni.com', 'joni', '12345'),
(5, 'Mark', 'mark@gmail.com', 'markwood.net', 'mark', '123456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_posting` int(11) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `id_posting`, `pengirim`, `tanggal`, `isi`) VALUES
(3, 2, 'Ani', '2014-11-18 13:19:51', 'Tanya gan, bener ngga tuh...'),
(5, 6, 'Farid', '2014-11-19 01:29:41', 'Hahahahha keren....');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posting`
--

CREATE TABLE IF NOT EXISTS `posting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_author` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `judul_post` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `posting`
--

INSERT INTO `posting` (`id`, `id_author`, `tanggal`, `judul_post`, `isi`) VALUES
(2, 2, '2014-11-17 00:00:00', 'Pengembangan Aplikasi Android', 'Android sudah sangat populer dikalangan pengguna gadget diseluruh dunia. Indonesia adalah salah satu pengguna ponsel pintar yang menggunakan os berlogo robot ini.'),
(4, 1, '2014-11-18 07:45:33', 'Framework Codeigniter', 'Framework adalah sebuah kerangka kerja yang bertujuan untuk memudahkan bagi seorang programer dalam mengembangkan sebuah aplikasi. Salah satu website terkenal di Indonesia yang menggunakan Codeigniter adalah situs berita okezone.com.'),
(5, 5, '2014-11-18 08:58:28', 'Facebook sosial networking paling populer', 'wow wow wow wow wow wow '),
(6, 3, '2014-11-19 01:28:21', 'Java Bahasa Pemrograman Paling Populer', 'Java adalah salah satu bahasa pemrograman paling populer saat ini. Java sangat terkenal karena memiliki banyak fitur, yaitu OOP, generic, dll.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
