-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 04:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_article`
--

CREATE TABLE `blog_article` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article_date` date NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_article`
--

INSERT INTO `blog_article` (`article_id`, `title`, `article_date`, `content`, `image_name`) VALUES
(24, 'Typescript', '2020-07-15', 'TypeScript adalah superset JavaScript yang dikembangkan oleh Microsoft. Ini memiliki semua fitur Javascript. Menggunakan kompiler TypeScript untuk mengkonversi file TypeScript (ts) ke file JavaScript (js). TypeScript lebih mudah diintegrasikan ke dalam proyek JavaScript. TypeScript juga menyediakan pemeriksaan tipe statis. Ini memungkinkan programmer untuk memeriksa dan menetapkan variabel dan tipe fungsi. Fitur ini membuat kode lebih mudah dibaca dan mencegah bug. TypeScript memiliki tipe data seperti String, Number, Boolean, Null, Array, Enum, Tuple, dan Generics.\r\n\r\nKeuntungan utama dari TypeScript adalah memungkinkannya membuat objek berbasis kelas. Programmer dari C ++, latar belakang Java lebih akrab dengan konsep-konsep seperti kelas, objek, warisan. Ketika mereka mencoba memprogram menggunakan JavaScript, mungkin sulit untuk menerapkan konsep-konsep itu dalam skenario JavaScript. Untuk membuat kelas dalam JavaScript, seorang programmer harus membuat suatu fungsi. Untuk warisan, mereka harus menggunakan prototipe. Namun, TypeScript berbasis kelas sehingga mampu mendukung pewarisan, enkapsulasi, dan pengubah sebagai bahasa pemrograman berorientasi objek.', 'typescript.png'),
(25, 'Laravel', '2020-07-15', 'Laravel adalah sebuah framework PHP yang dirilis dibawah lisensi MIT, dibangun dengan konsep MVC (model view controller). Laravel adalah pengembangan website berbasis MVP yang ditulis dalam PHP yang dirancang untuk meningkatkan kualitas perangkat lunak dengan mengurangi biaya pengembangan awal dan biaya pemeliharaan, dan untuk meningkatkan pengalaman bekerja dengan aplikasi dengan menyediakan sintaks yang ekspresif, jelas dan menghemat waktu.', 'laravel.jpg'),
(26, 'Node js', '2020-07-15', 'Node.js adalah perangkat lunak yang didesain untuk mengembangkan aplikasi berbasis web dan ditulis dalam sintaks bahasa pemrograman JavaScript. Bila selama ini kita mengenal JavaScript sebagai bahasa pemrograman yang berjalan di sisi client / browser saja, maka Node.js ada untuk melengkapi peran JavaScript sehingga bisa juga berlaku sebagai bahasa pemrograman yang berjalan di sisi server, seperti halnya PHP, Ruby, Perl, dan sebagainya. Node.js dapat berjalan di sistem operasi Windows, Mac OS X dan Linux tanpa perlu ada perubahan kode program. Node.js memiliki pustaka server HTTP sendiri sehingga memungkinkan untuk menjalankan server web tanpa menggunakan program server web seperti Apache atau Nginx.\r\nUntuk mengeksekusi Javascript sebagai bahasa server diperlukan engine yang cepat dan mempunyai performansi yang bagus. Engine Javascript dari Google bernama V8-lah yang dipakai oleh Node.js yang juga merupakan engine yang dipakai oleh browser Google Chrome.\r\n\r\nBagaimana Node.js Bekerja?\r\nBerbeda dengan bahasa pemrograman sisi server pada umumnya yang bersifat blocking, Node.js bersifat non-blocking, sebagaimana halnya JavaScript bekerja. Node.js berjalan dengan basis event (event-driven). Maksud dari Blocking secara sederhana adalah, bahwa suatu kode program akan dijalankan hingga selesai, baru kemudian beralih ke kode program selanjutnya.', 'node.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

CREATE TABLE `blog_comment` (
  `comment_id` int(5) NOT NULL,
  `article_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_gallery`
--

CREATE TABLE `blog_gallery` (
  `gallery_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_gallery`
--

INSERT INTO `blog_gallery` (`gallery_id`, `title`, `date`, `image`) VALUES
(5, 'Typescript', '2020-07-15', 'typescript.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_menu`
--

CREATE TABLE `blog_menu` (
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `thread` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_menu`
--

INSERT INTO `blog_menu` (`menu_id`, `title`, `link`, `thread`) VALUES
(1, 'Home', 'index.php', 1),
(9, 'Gallery', '?preview=gallery', 2),
(10, 'Contact us', '?preview=contact', 4),
(11, 'Profile', '?preview=profile', 3);

-- --------------------------------------------------------

--
-- Table structure for table `blog_message`
--

CREATE TABLE `blog_message` (
  `mess_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog_page`
--

CREATE TABLE `blog_page` (
  `page_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_page`
--

INSERT INTO `blog_page` (`page_id`, `title`, `content`) VALUES
(6, 'Visi and Misi', 'Mastering the ability to be software engineer');

-- --------------------------------------------------------

--
-- Table structure for table `blog_submenu`
--

CREATE TABLE `blog_submenu` (
  `submenu_id` int(5) NOT NULL,
  `menu_id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `link` varchar(50) NOT NULL,
  `thread` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_submenu`
--

INSERT INTO `blog_submenu` (`submenu_id`, `menu_id`, `title`, `link`, `thread`) VALUES
(4, 11, 'Vision in Future', '?preview=page&id=6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_users`
--

CREATE TABLE `blog_users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_users`
--

INSERT INTO `blog_users` (`user_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$kxt/66zo/fze3vDkxbGx/O3/09HLynNON8g768cUhnAd8Hz4m7PZC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_article`
--
ALTER TABLE `blog_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `blog_comment`
--
ALTER TABLE `blog_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `blog_gallery`
--
ALTER TABLE `blog_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `blog_menu`
--
ALTER TABLE `blog_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `blog_message`
--
ALTER TABLE `blog_message`
  ADD PRIMARY KEY (`mess_id`);

--
-- Indexes for table `blog_page`
--
ALTER TABLE `blog_page`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `blog_submenu`
--
ALTER TABLE `blog_submenu`
  ADD PRIMARY KEY (`submenu_id`);

--
-- Indexes for table `blog_users`
--
ALTER TABLE `blog_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_article`
--
ALTER TABLE `blog_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `blog_comment`
--
ALTER TABLE `blog_comment`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_gallery`
--
ALTER TABLE `blog_gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_menu`
--
ALTER TABLE `blog_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blog_message`
--
ALTER TABLE `blog_message`
  MODIFY `mess_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_page`
--
ALTER TABLE `blog_page`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_submenu`
--
ALTER TABLE `blog_submenu`
  MODIFY `submenu_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blog_users`
--
ALTER TABLE `blog_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
