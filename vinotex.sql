-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 02:53 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinotex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'kinthu', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'navalo', 'snavalogithan@gmai.com', 'ere', 'dfffdssf');

-- --------------------------------------------------------

--
-- Table structure for table `corder`
--

CREATE TABLE `corder` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phoneno` varchar(20) NOT NULL,
  `Accno` varchar(50) NOT NULL,
  `city` varchar(30) NOT NULL,
  `orderno` varchar(10) NOT NULL,
  `P_Image` varchar(150) NOT NULL,
  `Pname` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corder`
--

INSERT INTO `corder` (`id`, `cname`, `address`, `phoneno`, `Accno`, `city`, `orderno`, `P_Image`, `Pname`, `qty`, `price`, `total`) VALUES
(14, 'Navalo', 'fdfdfdfdf', '0123456789', '0554544818185', 'Batticaloa', '3969483', './product_image/6811174701-500x500.jpg', 'Linen Short Sleeve Shirt', 1, 1550, 1550),
(15, 'kmk', 'kmkm', 'kmk', '--p-', 'mkkmk', '4251301', './product_image/5573935701-190x190 (4).jpg', 'gfg', 2, 333, 666);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(5) NOT NULL,
  `Qty` int(5) NOT NULL,
  `P_Image` varchar(500) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `subcategory` varchar(50) NOT NULL,
  `Description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Name`, `Price`, `Qty`, `P_Image`, `Category`, `subcategory`, `Description`) VALUES
(35, 'Linen Short Sleeve Shirt', 1550, 3, './product_image/6811174701-500x500.jpg', 'Mens Cloths', 'Casual Shirt', 'Casual menswear, with an unmatched style and attitude that sets the individual apart. Spot that subtle, but dominant hint of elegance at every step, as you slip into an EKKO creation.'),
(36, 'Enticing Print Work Printed Saree', 4500, 6, './product_image/79933105enticing-print-work-printed-saree-51465-800x1100.jpg', 'Womens Cloths', 'Saree', 'Fashion and pattern will be on the peak of your splendor the moment you attire this hot pink georgette printed saree. The ethnic print work within the attire adds a sign of elegance statement for the look. Comes with matching blouse. (Slight variation in color, fabric & work is possible. Model images are only representative.'),
(38, 'Cotton Dobby Short Sleeves Shirt', 1500, 6, './product_image/1647377801-500x500 (2).jpg', 'Mens Cloths', 'Casual Shirt', 'casual menswear, with an unmatched style and attitude that sets the individual apart. Spot that subtle but dominant hint of elegance at every step, as you slip into an EKKO creation. '),
(39, 'D-Blaq Jogger Pants', 2050, 5, './product_image/2658655901-190x190 (5).jpg', 'Mens Cloths', 'Trouser', 'fdgfgfgfgeetgrgrfbf'),
(40, 'D-Blaq Cargo Pants', 2000, 4, './product_image/8862194901-190x190 (4).jpg', 'Mens Cloths', 'Trouser', 'fghghghgfhfhfgh'),
(41, 'Energetic Embroidered Work Magenta', 9100, 5, './product_image/43439462energetic-embroidered-work-magenta-designer-floor-length-suit-51350-800x1100.jpg', 'Womens Cloths', 'Salwar', 'Looking astounding with attachment of magenta georgette designer floor length suit. The desirable embroidered and resham work a significant characteristic of this dress. Comes with matching bottom and dupatta. (Slight variation in color, fabric & work is possible. Model images are only representative.'),
(42, 'gfg', 333, 3, './product_image/5573935701-190x190 (4).jpg', 'Womens Cloths', 'Jeans', 'fggd'),
(43, 'Kiddies T-shirt ', 890, 5, './product_image/5480796501-190x190.jpg', 'Kids Cloths', 'Shirt', 'dfgfhgfhhfh'),
(44, 'Relaxed', 3200, 6, './product_image/23489181Denim-PC_03._V280697370_.jpg', 'Mens Cloths', 'Jeans', 'ddgdgdfvdfvdfvffgfggdfgd'),
(45, 'Slim', 3200, 6, './product_image/93547867Denim-PC_05._V280697571_.jpg', 'Mens Cloths', 'Jeans', 'fdggdgdggd'),
(47, 'T-Shirt', 3500, 10, './product_image/32785322ts4.jpg', 'Mens Cloths', 'T-Shirt', 'dfdgdfg'),
(48, 'grey-georgette', 3500, 10, './product_image/48878161grey-georgette-designer-floor-length-suit-51353-800x1100.jpg', 'Womens Cloths', 'Salwar', 'sdsfdgdfgfdgfdg'),
(49, 'groovy-green', 7000, 5, './product_image/31779432groovy-green-patch-border-work-classic-saree-51503-800x1100.jpg', 'Womens Cloths', 'Saree', 'fdfddfgdfdgdfg'),
(50, 'exceeding-print-work-blue', 6500, 6, './product_image/99344030exceeding-print-work-blue-crepe-jacquard-printed-saree-51461-800x1100.jpg', 'Womens Cloths', 'Saree', 'dsfdfdfddfs'),
(51, 'Cute Orange Salwar', 3500, 7, './product_image/357699511.jpg', 'Womens Cloths', 'Salwar', 'Cute Orange Salwar'),
(52, 'unstitched-salwar', 4500, 7, './product_image/19151434womens-unstitched-salwar-suit-by-salwar-studio-fawn-red-300X420-5X7-1a7937a2d4a345779455ea9d38b381a3.jpg', 'Womens Cloths', 'Salwar', 'dssfdsfdsffdsfsfsfdsfsfdsffdsfdsfdsf'),
(53, 'Pink Salwar', 3550, 7, './product_image/94865848images (5).jpg', 'Womens Cloths', 'Salwar', 'dgdfgdfgfdgfdgfdgdggfd');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Navalo', 'snavalogithan@gmail.com', 'navalo', 'kinthu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `corder`
--
ALTER TABLE `corder`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `corder`
--
ALTER TABLE `corder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
