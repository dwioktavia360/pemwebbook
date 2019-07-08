-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 10:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `idbuku` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `idkategori` int(11) DEFAULT NULL,
  `imgfile` varchar(100) DEFAULT NULL,
  `sinopsis` text,
  `thnterbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`idbuku`, `judul`, `pengarang`, `penerbit`, `idkategori`, `imgfile`, `sinopsis`, `thnterbit`) VALUES
(14, 'Harry Potter dan Batu Bertuah (Harry Potter and The Sorcerer Stone)', 'J.K. Rowling', 'Gramedia', 16, 'h3.jpg', ' Harry berhasil selamat dari pembunuhan yang akan dilakukan musuh orang tuanya, Lord Voldemort. Padahal umurnya baru 1 tahun. Lalu ia tinggal di rumah paman dan bibinya di Privet Drive no. 13 selama 11 tahun. selama ia tinggal ia belum pernah diperlakukan layak oleh paman dan bibinya. Paman dan bibinya punya anak bernama Dudley, dia pun sama seperti kedua orang tuanya jahat terhadap Harry. Hingga suatu hari, ada kejadian aneh pada diri Harry . Seorang manusia setengah raksasa tiba-tiba mendatanginya dan mengatakan bahwa Harry seorang penyihir. Langsung saja paman dan bibinya kaget bukan main. Bagaimana mungkin rahasia yang mereka jaga selama 11 tahun terungkap begitu saja kalau Harry Potter adalah seorang penyihir. Harry langsung dibawa dan diperkenalkan dengan sebuah sekolah sihir bernama Hogwarts dan segala komunitas sihir yang selama ini bersembunyi. Petualangan Harry Potter dimulai dari sini dia pun di bawa pegi oleh para penyihir. Di tahun pertamanya di Hogwarts, Harry telah banyak dikenal. Ia sudah berbakat sihir mungkin karna keturunan orang tuanya yang juga seorang penyihir, dia pun juga bakat mengendarai sapu terbang sehingga ia dipilih menjadi seorang seeker di sebuah olahraga bernama Quidditch. Di Hogwarts Harry punya 2 orang sahabat, Ronald Weasley dan Hermione Granger. Ron seorang yg konyol dan lucu. Sedangkan Hermione memiliki kecerdasan yang luar biasa. Mereka berdua lah yang membantu Harry Potter dalam petualangannya. Harry di akhir tahun ajaran pertama, berhasil tahu bahwa ada seseorang yang ingin mencuri “SORCERER STONE”, batu bertuah, yang disembunyikan di Hogwarts. Air yang dihasilkan batu itu bisa membuat peminumnya berumur panjang. Itulah yang diincar Voldemort, musuh yang telah membunuh kedua orang tua Harry. Tapi Harry, Ron dan Hermione bisa menggagal rencananya. Harry nyaris saja kehilangan jiwanya ketika tiba-tiba bekas lukanya begitu sakit saat berhadapan dengan Voldemort yang merasuki tubuh Quirrel. Harry nyaris tak tertolong jika saja Dumbledore, kepala sekolahnya, tidak datang disaat yang tepat.', 2000),
(15, 'Sebuah Seni Untuk Bersikap Bodo Amat', 'Mark Manson', 'PT. Gramedia Widiasarana Indonesia', 17, 'h1.jpg', 'Buku self improvement ini diperuntukkan untuk kalangan dewasa (17+) karena ciri khas gaya bahasa Manson yang memang terkesan kurang sopan dan tidak sepatutnya dibaca anak-anak. Selain itu, bahasannya juga cukup berat, mengenai permasalahan orang dewasa yang cukup kompleks. Ia menggunakan sudut pandang yang tidak biasa, sehingga jika tidak benar-benar memahami maksud sebenarnya, Anda akan mengalami sesat pikir. Namun, Anda jangan khawatir, Manson membungkus tulisannya yang mendalam dan “berat” dengan cerita humor yang cadas dan menghibur. Ia juga membagikan pengalaman dirinya sendiri dan tokoh-tokoh. Hal itu semata-mata agar dapat membantu para pembacanya memahami tulisannya. Pada intinya, ‘Sebuah Seni Untuk Bersikap Bodo Amat’ merupakan sebuah buku tentang menemukan apa yang benar-benar penting bagi Anda dan melepaskan segala hal lainnya. Saat ini masyarakat menjadikan media sosial sebagai ajang pamer. Kemudian dari hal tersebut lahirlah generasi manusia yang percaya bahwa memiliki pengalaman negatif (rasa cemas, takut, bersalah) adalah sesuatu yang sangat tidak baik. Ketika melihat feed Facebook, Anda akan menjumpai bahwa setiap orang di sana menjalani saat yang menyenangkan, sehingga Anda akan dibombardir dengan 350 gambar orang-orang yang benar-benar gembira, seperti menikah, berlibur, dan sebagainya. Sementara itu, Anda terjebak di rumah. Anda mau tidak mau berpikir bahwa hidup Anda sepuluh kali lebih menyebalkan dari yang semua Anda kira. Pada akhirnya kita merasa bersalah atas rasa salah itu sendiri. Kita jadi marah gara-gara amarah yang menyulut. Lalu apa yang salah dengan diri kita? “Inilah mengapa, bersikap masa bodoh, adalah kuncinya. Inilah alasan mengapa itu menyelamatkan dunia. Dan kuncinya adalah jika kita bisa menerima bahwa dunia ini benar-benar keparat dan itu tidak apa-apa, karena memang seperti itu, dan akan seperti itu adanya. Dengan tidak ambil pusing ketika Anda merasa buruk, berarti Anda memutus Lingkaran Setan', 2018),
(16, 'Bumi Manusia', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 16, 'bm.jpg', ' Walaupun buku ini memuat kisah cinta, tetapi buku ini tidak mengajarkan kita untuk menjadi cengeng karena sesuatu yang bernama “Cinta”. Buku ini membuat seolah-olah berada pada masa itu, menyaksikan langsung berbagai peristiwa yang terjadi, membuka pikiran kita tentang kehidupan dalam masa pemerintahan Hindia Belanda. Buku ini sesungguhnya memuat semua hal yang sering terjadi pada akhir abad 19 dan menjelang abad 20. Pemikiran-pemikiran untuk keadilan para pribumi, sikap masyarakat yang ada pada saat itu, strata sosial yang ada pada saat itu, semuanya terbalut dengan indah dalam kisah cinta yang terjalin antara Minke dan Annelis. Walaupun pada akhir kisah buku ini agak menyedihkan.\r\nBuku ini cocok untuk dibaca semua kalangan remaja, mahasiswa, tapi sangat tidak cocok dibaca bagi anak-anak, karena di dalam buku ini bahasa yang digunakan lumayan tinggi dan butuh cukup berfikir saat membaca tiap paragrafnya. Itulah kekurangan dari buku ini. Tapi isinya sangat bagus sekali.', 1980),
(17, 'Pulang', 'Leila S. Chudori', 'Gramedia', 16, 'pu.jpg', 'Ketika revolusi mahasiswa berkecamuk di Paris, Dimas Suryo seorang eksil politik Indonesia bertemu Vivienne Deveraux, seorang mahasiswa Prancis yang ikut demonstrasi melawan pemerintah Prancis. Pada saat yang sama, Dimas menerima kabar dari Jakarta: Hananto Prawiro, sahabatnya, ditangkap tentara dan dinyatakan tewas. Dimas merasa cemas dan gamang. Bersama puluhan wartawan dan seniman lain, dia tak bisa kembali ke Jakarta karena paspornya dicabut oleh pemerintah Indonesia. Sejak itu mereka mengelana tanpa status yang jelas dari Santiago ke Havana, ke Peking dan akhirnya mendarat di tanah Eropa untuk mendapatkan suaka dan menetap di sana.\r\n\r\nDi tengah kesibukan mengelola Restoran Tanah Air di Paris bersama tiga kawannya: Nug, Tjai, dan Risjaf—mereka berempat disebut Empat Pilar Tanah Air—Dimas, terus-menerus dikejar rasa bersalah karena kawan-kawannya di Indonesia satu persatu tumbang, dikejar, ditembak, atau menghilang begitu saja dalam perburuan Peristiwa 30 September. Apalagi dia tak bisa melupakan Surti Anandari—isteri Hananto—yang bersama ketiga anaknya berbulan-bulan diinterogasi tentara. ', 2012),
(18, 'Test', 'test', 'test', 1, '', 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `no` int(100) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `no`, `kategori`) VALUES
(1, 1, 'Buku Teks'),
(2, 2, 'Majalah'),
(3, 3, 'Skripsi'),
(14, 4, 'Tesis'),
(15, 5, 'Disertasi'),
(16, 6, 'Novel'),
(18, 7, 'Self-Improvement');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `idrole` int(2) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `role`) VALUES
(1, 'admin'),
(2, 'operator');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `idrole` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `fullname`, `idrole`) VALUES
('admin', '123456', 'Administrator', 1),
('rosihanari', '123456', 'Rosihan Ari Yuana', 2),
('via', '12345', 'dwi oktavia', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `idbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
