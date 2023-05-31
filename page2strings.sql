-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 04:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `page2strings`
--

CREATE TABLE `page2strings` (
  `what_part_of_page` text NOT NULL,
  `the_actual_string` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page2strings`
--

INSERT INTO `page2strings` (`what_part_of_page`, `the_actual_string`) VALUES
('align', 'As consumers become more aware of the impact their purchases have on the world around them, they are increasingly seeking out companies that prioritize social and environmental responsibility. According to recent studies, 66% of people are willing to pay more for products and services from such companies, with even higher numbers among Millennials. This trend reflects a growing shift towards conscious consumerism, where people are choosing to use their buying power to support causes and values that align with their own. By investing in sustainable practices, ethical sourcing, and community engagement, companies can not only attract more customers but also improve their reputation and foster long-term loyalty. Ultimately, the choice to prioritize social and environmental impact is not only good for the planet but also good for business. As consumers continue to demand more from companies, those that fail to adapt risk being left behind.'),
('kickstart', 'Ocean One provides a comprehensive solution for businesses looking to reduce their environmental footprint or become plastic neutral. With their turnkey approach, Ocean One makes it easy for businesses to take the first step towards sustainability by providing a range of services and products designed to help them achieve their goals. Whether it\'s through implementing sustainable practices, reducing waste, or offsetting their plastic usage, Ocean One can help businesses make a meaningful impact on the environment. By partnering with Ocean One, companies can not only improve their environmental performance but also enhance their reputation and demonstrate their commitment to creating a better world for future generations. With increasing pressure from consumers, investors, and regulators to prioritize sustainability, working with companies like Ocean One is becoming essential for businesses that want to stay competitive and thrive in the long term.'),
('amplify', 'As individuals, we all have a role to play in creating a more sustainable world. Whether it\'s through the products we buy, the choices we make, or the actions we take, we can all make a difference. One way to measure and track our impact is through tools like IMPACT. By using this tool, we can evaluate our own environmental performance and social impact, and identify areas where we can improve. From reducing our carbon footprint and conserving water, to supporting social equity and ethical practices, there are many ways in which we can make a positive impact on the world around us. With a growing awareness of the importance of sustainability, it\'s becoming increasingly important for individuals to take action and demonstrate their commitment to a more sustainable future. By using tools like IMPACT, we can not only track our progress but also inspire others to join us in creating a better world for future generations.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
