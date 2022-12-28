-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2022 at 06:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `auditlog`
--

CREATE TABLE `auditlog` (
  `user` varchar(50) NOT NULL,
  `activityType` varchar(50) NOT NULL,
  `changedItem` varchar(50) NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auditlog`
--

INSERT INTO `auditlog` (`user`, `activityType`, `changedItem`, `datetime`) VALUES
('Memo', 'Change', '48 Laws of poweer', '2022-04-05'),
('Memo', 'Change', '48 Laws of poweer', '2022-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `pdesc` varchar(999) NOT NULL,
  `price` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `aname`, `pdesc`, `price`, `category`) VALUES
('92', 'Think And Grow Rich', 'Napoleon Hill', 'Representing the distilled wisdom of distinguished men of great wealth and achievement.', '13€', 'Best Seller'),
('53', 'The Art Of War', 'Sun Tzu', 'Ancient Chinese military treatise dating from the Late Spring and Autumn Period. Containing a detailed explanation and analysis of the 5th-century Chinese military, from weapons and strategy to rank and discipline.', '15€', 'Best Seller'),
('29', 'No Longer Human', 'Osamu Dazai', 'The poignant and fascinating story of a young man who is caught between the breakup of the traditions of a northern Japanese aristocratic family and the impact of Western ideas.', '22€', 'Best Seller'),
('40', 'Atomic Habits', 'James Clear', 'The most comprehensive and practical guide on how to create good habits, break bad ones, and get 1 percent better every day.', '20€', 'Best Seller'),
('83', 'Ikigai', 'Francesc Miralles and Hector Garcia', 'Ikigai reveals the secrets to their longevity and happiness: how they eat, how they move, how they work,how they foster collaboration.', '14€', 'Best Seller'),
('98', 'Criminal Mischief', 'Stuart Woods', 'After a dangerous adventure has him traveling up and down the coast, Stone Barrington is looking forward to some down time at his Manhattan abode. But when an acquaintance alerts him to a hinky plot being hatched across the city, he finds himself eager to pursue justice.', '1', 'Coming Soon'),
('8', 'Griffin Rogue Asset', 'Andrews & Wilson', 'The secretary of state has been kidnapped by Islamic extremists and his only hope for survival is a reconstituted Presidential Agent team in this revival of W. E. B. Griffin\'s New York Times bestselling series.', '1', 'Coming Soon'),
('65', 'Game On', 'Janet Evanovich', 'Stephanie Plum returns to hunt down a new kind of criminal operating.', '1', 'Coming Soon'),
('31', 'Call Us What We Carry', 'Amanda Gorman', 'Formerly titled The Hill We Climb and Other Poems.It captures a shipwrecked moment in time and transforms it into a lyric of hope and healing.', '1', 'Coming Soon'),
('95', '48 Laws of Power', 'Robert Greene', 'A self-help book offering advice on how to gain and maintain power,                                 using lessons drawn from parables and the experiences of historical figures. ', '23€', 'Best Seller'),
('4', 'asdsad', 'asdasd', 'asdasd', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `role`) VALUES
('1', 'Selmin Lekovic', 'Memo', 'slekovic@gmail.com', 'memo1234', 'admin'),
('687', 'Ereza Loshi', ' Lynx', 'eloshi@gmail.com', 'lynx1234', 'admin'),
('178', 'test', '  test', 'test@g.com', 'test', 'customer'),
('455', 'asdasdasd', 'asdsad', 'sdasd@g.com', 'asdasda', 'customer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
