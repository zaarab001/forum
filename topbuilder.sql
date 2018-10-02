-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2018 at 09:00 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `topbuilder`
--
CREATE DATABASE IF NOT EXISTS `topbuilder` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `topbuilder`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `fullname`, `email`, `password`, `phone`) VALUES
(1, 'Manzuma Memunat', 'memunatmanzuma2505@outlook.com', 'm', '08160730725');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(250) NOT NULL,
  `post_id` int(11) NOT NULL,
  `time_commented` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`comment_id`),
  UNIQUE KEY `post_id` (`post_id`),
  KEY `post_id_2` (`post_id`),
  KEY `post_id_3` (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment`, `post_id`, `time_commented`) VALUES
(1, 'mIMUNA OOO', 6, '2018-09-15 16:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `post_article`
--

CREATE TABLE IF NOT EXISTS `post_article` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(250) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `story` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `posted_by` varchar(100) NOT NULL,
  `date_posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post_article`
--

INSERT INTO `post_article` (`post_id`, `categories`, `title`, `description`, `story`, `image`, `posted_by`, `date_posted`) VALUES
(1, 'Lifestyle', 'This is the title', 'This is good', 'full story', '1200px-Google_Assistant_logo.svg.png', 'Memunat Manzuma', '2018-09-11 04:12:41'),
(2, 'Women_in_tech', 'jhdglut8ulu', 'kjgdo86', 'ukfd8o6f', 'main-custom-t-1290-600x315-bxxiaqidzjpnnnvtjwpgkwakwstzfbxz.jpeg', 'Memunat Manzuma', '2018-09-11 04:12:53'),
(3, 'Women_in_tech', '.kjgip6fr8pr08', 'liry8o6erygjyh', 'klhfio7r86er7', '1200px-React-icon.svg.png', 'Memunat Manzuma', '2018-09-11 04:13:05'),
(4, 'Women_in_tech', 'jkfr8o6er76od', 'kufo86d', 'klhfo86re8', '09-05-2017-why-coding-infographic-blog.png', 'Memunat Manzuma', '2018-09-11 04:13:19'),
(5, 'Women_in_tech', 'jkfid8o', ';otulip9cxw46u  uv57oewxi7 5iec', 'l;iyas[0ddv apr9evb6ewr', '1_oOBXowI2IO9eCTcxP1BT-Q.jpeg', 'Memunat Manzuma', '2018-09-11 04:12:26'),
(6, 'Women_in_tech', 'lkutg;o8tpvv', 'kyvfp8t79on', 'jytgboi76ypn8 pr7v9pt7 p7rvpt9 r8o', '20170301155447.jpg', 'Memunat Manzuma', '2018-09-11 04:12:10'),
(7, 'Lifestyle', 'This is the title', 'k.jsad;o sdgfisaudf', 'ksdft; si;fd97as isfdla lsdffis lsagfas ilasutf adhgliya fgiylds gfildsu', 'coding-job.jpg', 'Manzuma Memunat', '2018-09-11 04:01:27'),
(9, 'Technology', 'kjdfhsaoyfo', 'dsajfkkkkkkkkkkkkkkihl', 'lhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoi lhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoi lhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoi lhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoi lhgfpisdf8iufhgoilhgfpisdf8iufhgoilhgfpisdf8iufhgoi', 'images_(18).jpeg', 'Manzuma Memunat', '2018-09-14 20:13:09'),
(10, 'Technology', 'This is the title', 'l''hg''odigsaf[98o uadpgf79er', 'sadfklja9[ fupdf97wgisadfklja9[ fupdf97wgi sadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgi sadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgi sadfklja9[ fupdf97wgi sadfklja9[ fupdf97wgi sadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgisadfklja9[ fupdf97wgi', 'download.png', 'Manzuma Memunat', '2018-09-14 20:13:52'),
(11, 'Technology', 'This is title', 'kjfdsawertyuiiurewrtyuio  kfdsartyuiouytrdtfgyhjkljhgfdrtyuio kjhgfd', 'bndytfiu awertyuiopiutryuiopiut5e4w3567890876543wqertyuion uytrdsafghjklkjhgfcxdzfghjoiuytre \\zdfghjkl;kjhgfdsadopoiuytredfg  bndytfiu awertyuiopiutryuiopiut5e4w3567890876543wqertyuion uytrdsafghjklkjhgfcxdzfghjoiuytre \\zdfghjkl;kjhgfdsadopoiuytredfg  bndytfiu awertyuiopiutryuiopiut5e4w3567890876543wqertyuion uytrdsafghjklkjhgfcxdzfghjoiuytre \\zdfghjkl;kjhgfdsadopoiuytredfg', 'FB_IMG_1515791192477.jpg', 'Manzuma Memunat', '2018-09-14 20:15:32'),
(12, 'Technology', 'jhgfd0987fgcvbnyut76re56789iohgfdgyuiokj', 'hgde7r8tiui7yrewq56789iojkhgfdxsrtyu8opijh', 'bnxzsdawert678987654ewrsdfcghjkoip78654ewq7890opjklfdxzsfhiop098743w4e567890-[]poiuyfdsafghjkl;''iouytrdsa gdsert89opi754ewqasdcv ', 'FB_IMG_1519026580391.jpg', 'Manzuma Memunat', '2018-09-14 20:33:41'),
(13, 'Technology', 'Github is here for you', 'dfyitiiytupto8iu tyd6ydtgiup jdtrsdiyugpi ukgfiouyfhvuy yfd7tygfuiklut8yu', 'jhfougouy9oiugjhgd6urfio9uiojlkhjfdrtgfx jhfougouy9oiugjhgd6urfio9uiojlkhjfdrtgfx jhfougouy9oiugjhgd6urfio9uiojlkhjfdrtgfxjh', 'GitHub-Mark.png', 'Manzuma Memunat', '2018-09-15 02:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `reply_id` int(11) NOT NULL AUTO_INCREMENT,
  `reply` varchar(250) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `date_replied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`reply_id`),
  UNIQUE KEY `comment_id` (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `signup_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_signup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`signup_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`signup_id`, `fullname`, `username`, `email`, `password`, `date_signup`) VALUES
(1, 'Manzuma Memunat', 'zaarab', 'zaarab0001@gmail.com', '6f8f57715090da2632453988d9a1501b', '2018-09-10 19:24:42'),
(2, 'Manzuma Memunat', 'zaarab', 'zaarab00001@gmail.co', '6f8f57715090da2632453988d9a1501b', '2018-09-10 19:27:07'),
(3, 'Manzuma Memunat', 'zaarab', 'zaarab001@gmail.com', '6f8f57715090da2632453988d9a1501b', '2018-09-10 19:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE IF NOT EXISTS `story` (
  `story_id` int(11) NOT NULL AUTO_INCREMENT,
  `categories` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`story_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`story_id`, `categories`, `description`, `image`, `date`) VALUES
(1, 'jflu', 'ghuofy8pi', '1200px-Google_Assistant_logo.svg.png', '0000-00-00 00:00:00'),
(2, 'Technology', 'jahgewr9p7qwt9p', '1200px-Google_Assistant_logo.svg.png', '2018-09-10 19:03:49'),
(3, 'techno', 'This is Technology', '1200px-Google_Assistant_logo.svg.png', '2018-09-11 00:24:27'),
(4, 'Women_in_tech', 'This is women for tech', '20170301155447.jpg', '2018-09-11 00:26:58'),
(5, 'Technology', 'Thooos.nsdagi isldf;iasgi ', 'HTML.jpg', '2018-09-14 19:24:05'),
(6, 'Technology', 'igIDGGlThooos.nsdagi isldf;iasgi igIDGGlTh', 'CSharp.jpg', '2018-09-14 19:24:37'),
(7, 'Technology', 'jhgailsdgy;ahb[0 ildasgias', 'CPlusPlus.jpg', '2018-09-14 19:38:55'),
(8, 'Technology', 'lgjdsf;uefej;sad', 'Python.jpg', '2018-09-14 17:53:22'),
(9, 'Technology', 'This is for Technology', 'SQL.jpg', '2018-09-14 17:56:01'),
(10, 'Women_in_tech', 'THis is for woment', 'IMG_20180607_124742.jpg', '2018-09-14 18:01:40'),
(11, 'Women_in_tech', 'Goood to be here', 'zaacoder6.jpg', '2018-09-14 18:02:43'),
(12, 'Lifestyle', 'kljsd[oau osaudf9[ash sidafopa', 'FB_IMG_1518817920008.jpg', '2018-09-14 19:11:58'),
(13, 'Lifestyle', ',.xpoaUETP9A AYEWTR9WAREUu', 'FB_IMG_1519994271717.jpg', '2018-09-14 19:12:28'),
(14, 'Lifestyle', 'oyiaerisdklf isd9a79pfi', 'FB_IMG_1519026580391.jpg', '2018-09-14 19:13:03'),
(15, 'Code_Base', 'lydaspr8y ap98yr9ey9pf7itp', 'partner55-400x300.png', '2018-09-14 19:14:44'),
(16, 'Code_Base', ';kjtidr8i6riughsyrsxfxy', 'images_(18).jpeg', '2018-09-14 19:15:04'),
(17, 'Code_Base', 'lkjflktuxutrdicvupibyv98p', 'unnamed_(1).png', '2018-09-14 19:15:43'),
(18, 'Jobs', 'kjlgifhstrdy yei7tyg', 'GBWA-20180228202451.jpg', '2018-09-14 19:16:37'),
(19, 'Jobs', 'hfuyrstrw5 trs67i6sxi675e7', 'GBWA-20180310154020.jpg', '2018-09-14 19:17:38'),
(20, 'Jobs', 'gjfszjydtfougpio;giouyfutistr', 'GBWA-20180222165658.jpg', '2018-09-14 19:18:46'),
(21, 'Technology', 'Tech Know Kids workshop', 'blog2.jpg', '2018-09-14 20:48:55'),
(22, 'Technology', 'Cross Section Creative Thinking #TKK', 'blog3.jpg', '2018-09-14 20:49:51');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_article` (`post_id`);

--
-- Constraints for table `reply`
--
ALTER TABLE `reply`
  ADD CONSTRAINT `reply_ibfk_1` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
