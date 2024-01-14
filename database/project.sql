-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2022 at 01:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', 1),
(3, 'aniket', 'pal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories`, `status`) VALUES
(1, 'Rice', 1),
(2, 'Flours', 1),
(3, 'Pulses', 1),
(4, 'Masala', 1),
(5, 'Oil', 1),
(6, 'Ghee', 1),
(7, 'Salt', 0),
(8, 'Sugar', 0),
(9, 'Coffee', 1),
(10, 'Tea', 1),
(11, 'Dairy', 0),
(12, 'Chocolates', 0),
(13, 'Noodles', 0),
(14, 'Pickels', 0),
(15, 'Wafers', 0),
(16, 'Cleaning & Hygiene', 0),
(17, 'Detergents', 0),
(18, 'Bathing Soap', 0),
(19, 'Detergent Cakes', 0),
(20, 'Dry Fruits', 1),
(21, 'Baby Care', 1),
(22, 'Skin Care', 1),
(23, 'Beauty Products', 1),
(24, 'Pooja Needs', 1),
(25, 'Shoe Care', 1),
(26, 'Sauces', 0),
(27, 'Jams', 0),
(28, 'Namkeens', 0),
(29, 'Papad', 0),
(30, 'Pasta', 0),
(31, 'Soft Drinks', 0),
(32, 'Frozen Foods', 0),
(33, 'Sanitary Pads', 1),
(34, 'Stationary', 0),
(35, 'Biscuits', 1),
(36, 'Toothpaste', 1),
(37, 'Tooth Brush', 1),
(38, 'Shampoo', 1),
(39, 'Powder', 1),
(40, 'Hair oil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `comment`, `date`) VALUES
(4, 'Deepak Dubey', 'liltwin2142@yahoo.com', '9729213354', 'test', '2022-03-12 13:51:00'),
(6, 'krishna', 'palkrishna@123gmail.com', '8793604124', 'i want to purchase in bulk ', '2022-03-26 07:18:34'),
(7, 'VANETTA THOMPSON', 'liltwin2142@yahoo.com', '9729213354', 'krnefdsjw wjefl  jlewn f', '2022-03-31 21:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `manage_order`
--

CREATE TABLE `manage_order` (
  `order_id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `address` varchar(256) NOT NULL,
  `pay_mode` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_order`
--

INSERT INTO `manage_order` (`order_id`, `name`, `phone_no`, `address`, `pay_mode`) VALUES
(1, 'Deepak Dubey', 1997568729, '93 SUN TOWNS STREET', 'COD'),
(2, 'VANETTA THOMPSON', 9729213354, '2205 LINCOLN DR', 'COD'),
(3, 'VANETTA THOMPSON', 9729213354, '2205 LINCOLN DR', 'COD'),
(4, 'VANETTA THOMPSON', 9729213354, '2205 LINCOLN DR', 'COD'),
(5, 'VANETTA THOMPSON', 9729213354, '2205 LINCOLN DR', 'COD'),
(6, 'Deepak Dubey', 1234569871, '004 c wing Sajog Smruti CHS nr. Telephone Exchange Office', 'COD'),
(7, 'VANETTA THOMPSON', 9729213354, '2205 LINCOLN DR', 'COD'),
(8, 'MARCUS HILL', 4237074916, '615 BINGHAM ST', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `qty` int(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `mrp` int(11) NOT NULL,
  `price` double NOT NULL,
  `description` text NOT NULL,
  `short_desc` text NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `product_name`, `image`, `qty`, `weight`, `mrp`, `price`, `description`, `short_desc`, `status`) VALUES
(1, 1, 'India Gate Premium Basmati Rice', '89845025_india_gate_basmati_1kg-850x850.jpg', 100, '1kg,', 95, 95, 'India Gate Premium Basmati rice leaves a lasting impression because of its flavour and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'India Gate', 1),
(2, 1, 'Fortune Rice', '25001986_51YfvpIGg8L.jpg', 100, '1kg,', 50, 50, 'Fortune  rice leaves a lasting impression because of its flavour and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Fortune', 1),
(3, 1, 'Daawat Rozana Super Basmati', '88791688_81ra4bn7YJL._SL1500_.jpg', 100, '1kg,', 87, 85, 'Daawat Rozana Super Basmati leaves a lasting impression because of its flavour and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Daawat', 1),
(4, 1, 'Daawat Rozana Gold Basmati', '94913679_8121boPMmFL._SX522_.jpg', 100, '1kg,', 99, 80, 'Daawat Rozana Gold Basmati leaves a lasting impression because of its flavour and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Daawat', 1),
(5, 1, 'Daawat Super Basmati', '18741700_88791688_81ra4bn7YJL._SL1500_.jpg', 100, '1kg,', 164, 155, 'Daawat Rozana Super Basmati leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Daawat Rozana', 1),
(6, 1, 'Daawat Basmati Biryani Rice', '98011795_255850_6-daawat-basmati-rice-biryani.jpg', 100, '1kg,', 219, 200, 'Daawat Basmati Biryani Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Dawat Rozana', 1),
(7, 1, 'Kohinoor Charminar Everyday Rice', '58813885_1-white-charminar-select-pouch-basmati-rice-kohinoor-original-imafuz3sfmx9k9bb.jpeg', 100, '1kg,', 84, 79, 'Kohinoor Charminar Everyday Basmati leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Kohinoor', 1),
(8, 1, 'Kohinoor Charminar Selected Basmati Rice', '97087983_1-white-charminar-select-pouch-basmati-rice-kohinoor-original-imafuz3sfmx9k9bb.jpeg', 100, '1kg,', 114, 99, 'Kohinoor Charminar Select Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Kohinoor', 1),
(9, 1, 'Kohinoor Dubar Authentic Basmati Rice', '65712794_61faC9kRsIL._SX522_.jpg', 0, '1kg,', 124, 115, 'Kohinoor Dubar Authentic Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Kohinoor', 1),
(10, 1, 'Kohinoor Royale Authentic Basmati Rice', '30585783_7FH0sX2yq3_Kohinoor Royale Authentic Biryani Basmati Rice (1).jpg', 0, '1kg,', 185, 170, 'Kohinoor Royale Authentic Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Kohinoor', 1),
(11, 1, 'Fortune Humesha Basmati Rice', '16193967_51YfvpIGg8L.jpg', 100, '1kg,', 79, 75, 'Fortune Humesha Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Fortune', 1),
(12, 1, 'Fortune Rozana Basmati Rice', '82025158_614FVJNeAOL._SX522_.jpg', 100, '1kg,', 104, 95, 'Fortune Rozana Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Fortune', 1),
(13, 1, 'Fortune Special Biryani Rice', '28523003_51BLnkqsiXL.jpg', 96, '1kg,', 175, 170, 'Fortune Special Biryani Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Fortune', 1),
(14, 1, 'Tata Sampann Basmati Rice', '60446606_81iFWAwPzRL._SX679_.jpg', 100, '1kg,', 99, 95, 'Tata Sampann Basmati Rice leaves a lasting impression because of its flavor and fluffy texture. 1401 and 1121 varieties ensure great quality and taste. Sourced from the Basmati-rice-bowl states of Punjab, Haryana, and Uttarakhand, this rice is processed in GMP plants using Swiss technology to ensure superior quality and high nutritional value. With its great aroma and size, this rice is best suitable for all varieties of dishes ranging from Dal Chawal, Jeera rice to Pulao and Biryani.', 'Tata', 1),
(15, 2, 'Aashirvaad Atta', '96958441_126903_8-aashirvaad-atta-whole-wheat.jpg', 0, '5kg.', 175, 170, 'Aashirvaad whole wheat atta is made of zero percent maida and 100% atta, which makes it extremely nutritious since it\'s packed with health benefits. This also means more fluffy and soft rotis at home.', 'Aashirvaad', 1),
(16, 2, 'Fortune Chakki Fresh Atta', '14858443_51QBn3IcwmL.jpg', 0, '5kg.', 165, 160, 'Fortune Chakki Fresh Atta is made of zero percent maida and 100% atta, which makes it extremely nutritious since it\'s packed with health benefits. This also means more fluffy and soft rotis at home.', 'Fortune', 1),
(17, 2, 'Annapurna Farm Fresh Atta', '59888204_61CcaCrLFRL._SL1000_.jpg', 100, '5kg.', 160, 150, 'Annapurna Farm Chakki atta is made of zero percent maida and 100% atta, which makes it extremely nutritious since it\'s packed with health benefits. This also means more fluffy and soft rotis at home.', 'Annapurna', 1),
(18, 2, 'Nature Fresh Sampoorna Atta by Cargil India', '60147189_71Ke1T0gzlL._SL1251_.jpg', 96, '5kg.', 170, 165, 'Sampoorna Atta is made of zero percent maida and 100% atta, which makes it extremely nutritious since it\'s packed with health benefits. This also means more fluffy and soft rotis at home.', 'Sampoorna', 1),
(19, 2, 'Patanjali Atta', '87880237_patanjali-traditional-chakki-whole-wheat-with-bran-atta-10-kg-0-20210305.jpg', 100, '5kg.', 190, 180, 'Patanjali whole wheat atta is made of zero percent maida and 100% atta, which makes it extremely nutritious since it\'s packed with health benefits. This also means more fluffy and soft rotis at home.', 'Patanjali', 1),
(21, 35, 'Dark Fantasy Choco fills', '54149171_sunfeast-dark-fantasy-original-choco-filled-cookie-12-5-g-pack-of-24-0-20220214.jpg', 100, '100', 100, 80, 'Sunfeast Dark Fantasy Choco Fills is the newest & the finest offering from the portfolio of Sunfeast. It is a delicate blend of succulent chocolate', 'Sunfeast', 1),
(22, 35, 'Dark Fantasy Bourbon', '79414706_sunfeast-dark-fantasy-bourbon-biscuits-150-g-0-20220214.jpg', 100, '100', 30, 26, 'Sunfeast Dark Fantasy Bourbon Bliss is a combination of rich dark biscuits with a delicious chocolate crème sandwiched between them. ', 'Sunfeast', 1),
(23, 35, 'Nutricrunch Digestive Biscuits', '83486856_parle-platina-nutricrunch-digestive-cookies-1-kg-0-20210423.jpg', 100, '200 ml.', 100, 70, 'Parle Nutricrunch Classic Digestive Cookies is rich in fibre, minerals and vitamins. It is a healthy snack option made of whole wheat flour and good quality ingredients.', 'Parle Platina', 1),
(24, 35, 'Hide & Seek', '26239168_parle-hide-seek-chocolate-chip-cookies-100-g-0-20210416.jpg', 100, '100.', 30, 26, 'Parle hide and seek chocolate chip is Made with world\'s finest chocolate Play a game of hide and seek with your taste buds Indulge in the mouth watering delight of India\'s best moulded chocolate chip biscuits', 'Parle Platina', 1),
(25, 35, 'Happy Happy', '59865459_parle-happy-happy-choco-chip-cookies-400-g-0-20210423.jpg', 100, '100.', 40, 30, 'Happy Happy Choco Chip Cookies are crispy with delicious chocolate chips. These chocolate chip cookies are made from the finest ingredients and hygienic packaging ensures they stay fresh over a period of time.\n', 'Parle Platina', 1),
(26, 35, 'Parle-G', '48497708_parle-g-original-glucose-biscuits-800-g-0-20210115.jpg', 100, '200 ml.', 180, 140, ' Filled with glucose,Parle G Gluco Gold biscuits are made from the best quality wheat flour.A treat for one and all. An instant filler for all age groups.', 'Parle', 1),
(27, 35, 'Parle-G Gold', '82645534_parle-g-gold-biscuits-1-kg-0-20201118.jpg', 100, '200 ml.', 100, 80, 'Filled with glucose,Parle G Gluco Gold biscuits are made from the best quality wheat flour.A treat for one and all. An instant filler for all age groups.The Sweet flavour and the Crunchiness of the biscuits is a hit with all age groups.\nFilled with glucose,Parle G Gluco Gold biscuits are made from the best quality wheat flour.A treat for one and all. An instant filler for all age groups.The Sweet flavour and the Crunchiness of the biscuits is a hit with all age groups.\nFilled with glucose,Parle G Gluco Gold biscuits are made from the best quality wheat flour.A treat for one and all. An instant filler for all age groups.The Sweet flavour and the Crunchiness of the biscuits is a hit with all age groups.', 'Parle', 1),
(28, 12, 'Parle 20-20 Gold', '581557173_parle-20-20-gold-cashew-almond-cookies-1-kg-0-20210813.jpg', 100, '100.', 100, 90, 'Parle 20-20 Gold Cashew Almond Cookies are filled with the richness of cashew, almonds and the goodness of butter.', 'Parle', 1),
(29, 12, 'oreo', '439124831_71924247_cadbury-oreo-original-vanilla-creme-biscuits-300-g-0-20210726.jpg', 100, '200 ml.', 120, 80, 'Cadbury Oreo Original Vanilla Creme Biscuits 300 g Cadbury Oreo Original Vanilla Creme Biscuits bring together the rich and smooth flavours of creme filling with the bold taste of crunchy chocolate biscuits.', 'Cadbury', 1),
(30, 12, 'Nutri Choice Digestive Hi-Fibre', '31193250_britannia-nutrichoice-hi-fibre-digestive-biscuits-1-kg-0-20210416.jpg', 100, '100.', 120, 100, 'NutriChoice Hi-fibre Digestive Britannia NutriChoice Digestive biscuits are high fibre biscuits packed with the richness of wheat flour and bran.', 'Britania', 1),
(31, 12, 'Good Day', '85245744_britannia-good-day-cashew-biscuits-1-kg-0-20210421.jpg', 100, '200 ml.', 100, 80, 'Britannia Good Day Biscuits are crunchy delicious biscuits made with the goodness of cashew. Good day biscuit is one of the famous britannia biscuits with the tagline ‘har cookie mein kayi smile’.', 'Britania', 1),
(32, 6, 'Ghee', '56666614_02c29bc0b40b21dfab436eb6c72982193b0fbca951d57dcaeebc378da7f5c167.0.JPG', 50, '520', 500, 620, 'It contains real 100% ghee of cow.', 'Gowardhan', 1),
(33, 6, 'Amul Pure Ghee', '34991228_0df6aa4ca783d0cebf6e0bd0209424d077d710a88694c1e2afac0f65ff05e964.0.JPG', 100, '1 Kg', 200, 180, 'Ghee is good source of energy and provides vitality to human body. Amul Ghee is made from fresh cream and it has typical rich aroma and granular texture.', 'Amul', 1),
(34, 6, 'Gowardhan', '91357880_0bc1a6d9d3f9fe91d7d194aa316430bb21411b952dc566e5c76dafc1d33a11f1.0.JPG', 100, '2 Ltr', 500, 480, 'Ghee is a class of clarified butter that originated in ancient India. It is commonly used in Indian cooking. Gowardhan Cow Ghee can be swapped for vegetable oil or coconut oil in baked goods.', 'Gowardhan', 1),
(35, 6, 'Mother Dairy Ghee', '22932488_5efccfdd3c6ace98745ed4ee7ca34c601967995f4c91021f5dde16203e2ca638.0.JPG', 100, '100', 150, 145, 'Mother Dairy Ghee is produced using a time-testing traditional recipe to capture the full flavour and aroma of ghee. It is rich source of energy, goodness of Vitamin A and great in taste.', 'Mother Dairy', 1),
(36, 6, 'Amul Cow Ghee', '24100494_0869add1a6ebd9e53b262dad3593fa68ea486dc095c0ff4fbc79c1214f8a8f48.0.JPG', 100, '1 kg', 500, 475, ' Amul ghee is made from fresh cream. It has a typical rich aroma and granular texture. Ghee is an ethnic product made by dairies with decades of experience and is a rich source.', 'Amul', 1),
(37, 4, 'Haldi Powder', '81464623_0ibmjap11ncxn7ohyko6.jpg', 100, '100 ml.', 40, 30, 'Turmeric powder is a bright yellow spice powder made from dried turmeric rhizomes. ', 'Rajesh Masale', 1),
(38, 4, 'Turmeric Powder', '48679452_1-26.jpg', 100, '100 ml.', 40, 35, 'Turmeric or Haldi is an essential ingredient in Indian cuisine. Badshah Turmeric Powder is not only used for its flavour and aroma but also for its health benefits.', 'Badshah', 1),
(39, 4, 'Bhaji Pav Masala', '62853649_2-1.jpg', 100, '200 ml.', 50, 45, ' Badshah pav bhaji masala has authentic taste, flavour and aroma. Pav bhaji masala is a perfect blend of all spices and enhances the taste of your dish.', 'Badshah', 1),
(40, 4, 'Garam Masala', '25643400_16.jpg', 100, '100 ml.', 20, 18, ' Garam Masala is commonly used in every hot and spicy dish. To make garam masala from the mix of various spices is a very time-consuming process.', 'Rajesh', 1),
(41, 4, 'Special Garam Powder', '98515503_71DClxYMHXS._SL1500_.jpg', 100, '50 ml.', 20, 15, 'Garam Masala which literally means hot (Garam) spice (Masala) is not a spice in itself. It is a spice blend used throughout India and the rest of the Indian Subcontinent. ', 'Golden', 1),
(42, 4, 'Kitchen King', '43019714_71fALxEswNL._SX466_.jpg', 100, '100 ml.', 60, 55, 'Goldiee Kitchen King Masala is made from a fresh and select variety of whole spices that are ground to perfection. Add a teaspoon of this masala to dal, vegetable dishes, meat and chicken.', 'Goldie', 1),
(43, 4, 'Sabji Masala', '22527259_1544607744SABZIMasala-100g400-500.png', 100, '100 ml.', 80, 75, 'Patanjali Sabji Masala Powder is obtained by mixing of several grinded spices. It has a subtle blend of spices specially combined to enhance the taste', 'Patanjali', 1),
(44, 4, 'mix masala', '93784836_Frame-39.png', 100, '100 ml.', 70, 65, 'Experience a vibrant colour and tasteful flavour in your meat with Everest Meat Masala! We maintain the same standards of purity, freshness and authenticity in every pack.', 'Everest', 1),
(45, 21, 'Johnson Baby Top-To-Toe Bath', '11152733_.trashed-1648666917-500-baby-top-to-toe-bath-johnson-s-original-imafgb3agqfgfbfj.jpeg', 100, '500 g.', 200, 160, 'Johnson\'s Baby Top To Toe Bath is an ultra-mild cleanser that has been specifically designed for your baby’s delicate skin and sensitive eyes.', 'Johnson n Johnson', 1),
(46, 21, 'Johnson Milk Plus Rice Cream', '14773467_50-milk-plus-rice-cream-johnson-s-cream-original-imafrcpuxhw8w7ej.jpeg', 100, '50g.', 100, 70, 'Johnson\'s Baby Milk Cream is enriched with natural milk extracts and Vitamin E to help replenish moisture to leave skin feeling baby soft. Its fast absorbing formula contains rich emollients that.', 'Johnson N Johnson', 1),
(47, 21, 'Johnson Active Kids Clean & Fresh Shampoo', '24393365_100-active-kids-clean-fresh-shampoo-johnson-s-original-imafxsyvsuz72fzv.jpeg', 100, '100 ml.', 120, 90, 'Johnsons Active Kids Shampoo has been created after passing a five-level safety assurance process. Keeping your child’s safety and growing years in mind, this age-appropriate product has been formulated to tackle sweat, smell, and dirt in children above two years. ', 'Johnson N Johnson', 1),
(48, 21, 'Moisturizing Baby Wash', '36076628_100-extra-moisturizing-baby-wash-100-ml-himalaya-original-imafa749ympdfehg-1.jpeg', 100, '100 ml.', 200, 180, 'Himalaya extra moisturizing baby wash is designed to effectively cleanse baby’s skin and bring softness.\nIndian aloe, almond oil and olive oil work together to nourish and maintain the moisture balance of baby’s skin milk softens and improves the skin’s texture.', 'Himalaya', 1),
(49, 21, 'Gentle Baby Shampoo', '93624493_400-gentle-baby-shampoo-pack-himalaya-original-imafzzebzanwzwvw.jpeg', 100, '200 ml.', 200, 180, 'Himalaya Gentle Baby Soap is specially made to cleanse the baby’s delicate skin with the goodness of nature and also provide nourishment. It contains Almond Oil and Olive Oil that helps keep your baby’s skin hydrated and soft after every use. ', 'Himalaya', 1),
(50, 21, 'Johnson Baby Lotion', '69140394_johnsons-baby-lotion-500ml-2-1641398956.webp', 100, '200 ml.', 200, 170, 'When a baby is born, her skin is most delicate. That\'s why we perfected our formulas over 125 years so they are now more gentle to give her the best care. Johnson\'s baby lotion has been improved to slow down moisture loss by hydrating skin, locking in moisture and creating a protective barrier to keep moisture in and dryness out. This clinically proven long lasting formula continuously protects baby’s skin for up to 24 hours, keeping it feeling healthy and baby soft.\n\nWhen a baby is born, her skin is most delicate. That\'s why we perfected our formulas over 125 years so they are now more gentle to give her the best care. Johnson\'s baby lotion has been improved to slow down moisture loss by hydrating skin, locking in moisture and creating a protective barrier to keep moisture in and dryness out. This clinically proven long lasting formula continuously protects baby’s skin for up to 24 hours, keeping it feeling healthy and baby soft.\n\n', 'Johnson N Johnson', 1),
(51, 10, 'Premium Leaf Tea', '18674181_Wagh Bakri Premium Leaf Tea 250g.jpg', 100, '250g.', 120, 100, 'Wagh Bakri Tea Powder 250g pack is a well-crushed powder for premium tea lovers. Wagh bakri premium leaf tea has a robust flavour, vibrant colour, and energizing aroma.', 'Wagh Bakri', 1),
(52, 10, 'Tata Tea Premium', '72316152_Tata Tea Premium Anoka Swad Chai 1Kg.jpg', 100, '1kg.', 100, 70, 'Tata Tea Premium, India Ke Liye Anokha Swad. Desh ki Chai: Tata Tea Premium has a unique taste that chai lovers across India will enjoy.', 'Tata', 1),
(53, 10, 'Tata Tea Gold', '56565696_Tata Gold Leaf Tea 500g.jpg', 100, '500g', 80, 60, 'Tata Gold Leaf Tea 500 g Tata Gold Leaf Tea 500 g is your best bet to start your mornings peacefully. Even during work hours or at night, a cup of this tea is just the kick your brain needs.', 'Tata', 1),
(54, 10, 'Tata Tea Agni', '45480915_Tata Agni Tea 1Kg.jpg', 100, '100g.', 120, 90, ' Tata Agni Tea 1 kg is your best bet to start your mornings peacefully. Even during work hours or at night, a cup of this tea is just the kick your brain needs.', 'Tata', 1),
(55, 10, 'Taj Mahal Tea', '86884929_Taj Mahal Tea 500g.jpg', 100, '500g.', 150, 120, 'Taj Mahal tea is loose black tea granules. Its rich and unique taste is carefully chosen from a thousand teas to give you an exquisite aroma and taste. Enjoy with fresh boiling milk or water.', 'Brooke bond', 1),
(56, 10, 'Society Tea', '59434492_Society Tea 1Kg.jpg', 100, '1kg.', 130, 100, 'Society Tea comes in both ‘leaves’ as well as ‘dust’ form. Though dust is more economical and hence used in commercial establishments, leaves are a better bargain for home consumption.', 'Society', 1),
(57, 10, 'Red Label Natural Care Tea 500 g (Carton)\n', '32518017_Red Label Leaf Tea 1Kg.jpg', 100, '1kg.', 180, 165, 'Red Label Natural Care is from the house of Brooke bond and the brand Red Label. Red Label Natural Care Tea contains the goodness of *5 Natural Ingredients - Cardamom, Ginger, Tulsi, Mulethi and Ashwagandha that enhance immunity, improving your body\';s natural defence and helping you fall ill less often. These 5 ingredients give a unique flavour resulting in a tasty, rich cup of tea. Based on health benefits as per Ayurvedic texts, Ashwagandha helps cope with stress, Mulethi (Licorice) helps soothe the throat.', 'Brooke Bond', 1),
(58, 9, 'Nescafe Sunrise', '19103108_nescafe-sunrise-premium-instant-coffee-powder-50-g-0-20210428.jpg', 100, '50g.', 80, 65, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Nescafe', 1),
(59, 9, 'Nescafe Gold Blend', '55510805_nescafe-gold-blend-instant-coffee-200-g-0-20210118.jpg', 100, '150g.', 150, 130, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Nescafe', 1),
(60, 9, 'Nescafe Classic', '27683612_nescafe-classic-instant-coffee-100-g-jar-0-20210831.jpg', 100, '100g.', 100, 80, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Nescafe', 1),
(61, 9, 'Kaffe Instant Coffee', '16474538_kaffe-pure-instant-coffee-50-g-buy-1-get-1-0-20210827.jpg', 100, '50g.', 80, 60, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Kaffe', 1),
(62, 9, 'Kaffe Instant Blend', '634114179_kaffe-blended-instant-coffee-50-g-buy-1-get-1-0-20210827.jpg', 100, '50g.', 80, 55, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Kaffe', 1),
(63, 9, 'Bru Instant', '87163590_bru-instant-coffee-powder-100-g-0-20210511.jpg', 100, '100g.', 120, 110, 'Let the intense taste of coffee awaken your mind and body to new opportunities as the rich aroma of this distinctive blend unfolds. This is made of quality Robusta beans and it is roasted to medium-dark colour to deliver deliciousness and a pleasurable and exclusive experience! So go ahead and order this product online today!', 'Bru', 1),
(64, 38, 'Tresemme HD Hair Fall Defense', '44677758_31NSmM3tJbL.jpg', 100, '150g.', 200, 175, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'Tresemme', 1),
(65, 38, 'Sunsilk Co-Creations (Thick & long)', '15215359_51kdYZAFcLL._SL1000_.jpg', 100, '180g.', 200, 180, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'Sunsilk', 1),
(66, 38, 'Head & Shoulders', '34737363_61ip30RufGL.jpg', 100, '200 ml.', 320, 280, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'Head & Shoulders', 1),
(67, 38, 'L\'OREAL Total Repair 5', '61455281_8901526101511_1_.jpg', 100, '200 ml.', 350, 320, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'L\'OREAL', 1),
(68, 38, 'Dove Intense Repair Shampoo', '40436660_bc3e6218901030622564_new_1.jpg', 100, '180g.', 200, 170, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'Dove', 1),
(69, 38, 'Dove Dryness Care Conditioner', '77967427_-original-imag8srhyseznaye.jpeg', 100, '200g.', 150, 120, 'Thick & Long shampoo\'s exclusive formula, is enriched with Keratin Yoghurt & nutrients, makes your hair look fuller^, with more body and more bounce^. So you have your hair always on your side. So when your hair is visibly thick, take your own hairstyle pick. Buy Now! After washing your hair thoroughly take 2 to 3 drops of the shampoo, equal to size of a coin, on your palm. Then apply the shampoo gently massaging it all over your hair from the roots to the tips. Leave the shampoo on your hair for a couple of minutes & then rinse it off completely.', 'Dove', 1),
(70, 39, 'Pond\'s Dreamflower Fragrant Talc', '69054906_51MRY3uekiL._SL1000_.jpg', 100, '100g', 100, 90, 'It is infused with the mesmerising fragrance of Pink Lily that leaves you feeling fresh for longer. It is specifically designed for your skin - with soft and smooth micro talc particles that are easy to apply. Perfect for the summers, it is suitable for both men and women, it helps you to stay refreshed and makes you smell and feel beautiful. Use generously on your face, neck and underarms to absorb sweat and fight body odour. Powder your face for smoother and brighter skin.', 'Magic', 1),
(71, 39, 'Magic Freshness Talc', '34463037_51Usd7c9n+L._SL1000_.jpg', 100, '100g.', 120, 100, 'It is infused with the mesmerising fragrance of Pink Lily that leaves you feeling fresh for longer. It is specifically designed for your skin - with soft and smooth micro talc particles that are easy to apply. Perfect for the summers, it is suitable for both men and women, it helps you to stay refreshed and makes you smell and feel beautiful. Use generously on your face, neck and underarms to absorb sweat and fight body odour. Powder your face for smoother and brighter skin.', 'Pond\'s', 1),
(72, 33, 'Whisper Bindazz Night', '49117357_-original-imag989mhgnd6e5u.jpeg', 100, '50g.', 80, 55, 'It is infused with the mesmerising fragrance of Pink Lily that leaves you feeling fresh for longer. It is specifically designed for your skin - with soft and smooth micro talc particles that are easy to apply. Perfect for the summers, it is suitable for both men and women, it helps you to stay refreshed and makes you smell and feel beautiful. Use generously on your face, neck and underarms to absorb sweat and fight body odour. Powder your face for smoother and brighter skin.', 'Whisper', 1),
(73, 33, 'Sofi Anti Bacteria', '53750888_71Am99zPDsL._SL1500_.jpg', 100, '100g.', 150, 120, 'Sanitary pads that come with the best of: - Protection from any harms, rashes, bacterial attacks on your skin, taken care by the Anion Chip on the pad surface - Multiple cotton layers imbibed by the WOWgel Technology to lock the flow without letting even a speck of blood leak out - Thin and a flexible pad texture that doesn’t make you uncomfortable while you are on-the-go - Firmness with full grip on the surface without moving even a bit, supported by side leak protection that prevent side leaks  - Controls blood smell from skipping out and leaving the surface dry.', 'Sofi', 1),
(74, 33, 'Whisper Ultra Soft Air Fresh', '66977850_71x9ReAfJ4L._SL1500_.jpg', 100, '100g.', 150, 130, 'Sanitary pads that come with the best of: - Protection from any harms, rashes, bacterial attacks on your skin, taken care by the Anion Chip on the pad surface - Multiple cotton layers imbibed by the WOWgel Technology to lock the flow without letting even a speck of blood leak out - Thin and a flexible pad texture that doesn’t make you uncomfortable while you are on-the-go - Firmness with full grip on the surface without moving even a bit, supported by side leak protection that prevent side leaks  - Controls blood smell from skipping out and leaving the surface dry.', 'Whisper', 1),
(75, 33, 'Stayfree', '55800396_81ltNQBe2LL._SL1500_.jpg', 100, '50g.', 100, 80, 'Sanitary pads that come with the best of: - Protection from any harms, rashes, bacterial attacks on your skin, taken care by the Anion Chip on the pad surface - Multiple cotton layers imbibed by the WOWgel Technology to lock the flow without letting even a speck of blood leak out - Thin and a flexible pad texture that doesn’t make you uncomfortable while you are on-the-go - Firmness with full grip on the surface without moving even a bit, supported by side leak protection that prevent side leaks  - Controls blood smell from skipping out and leaving the surface dry.', 'Stayfree', 1),
(76, 33, 'Step-out Sanitary Pads', '21939683_409548a.jpg', 100, '80g.', 60, 40, 'Sanitary pads that come with the best of: - Protection from any harms, rashes, bacterial attacks on your skin, taken care by the Anion Chip on the pad surface - Multiple cotton layers imbibed by the WOWgel Technology to lock the flow without letting even a speck of blood leak out - Thin and a flexible pad texture that doesn’t make you uncomfortable while you are on-the-go - Firmness with full grip on the surface without moving even a bit, supported by side leak protection that prevent side leaks  - Controls blood smell from skipping out and leaving the surface dry.', 'Step-out', 1),
(77, 22, 'Vaseline Multi Vitamin UV Lotion', '31985131_51K4GsMRQcS._SL1000_.jpg', 100, '200g.', 200, 170, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Vaseline', 1),
(78, 22, 'Pond\'s Triple Vitamin  Silky Smooth Skin', '526848894_51tZ1XtmXlL._SL1100_.jpg', 100, '200g.', 200, 170, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Pond\'s', 1),
(79, 22, 'Parachute Advanced Deep Nourish Body Lotion', '775383421_61u8res2o0L._SL1500_.jpg', 95, '250g.', 250, 220, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Parachute', 1),
(80, 22, 'Nivea Creame', '814683877_61ZtSzfxX3L._SL1500_.jpg', 100, '100g.', 120, 95, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Nivea', 1),
(81, 22, 'Vaseline Pure Skin Jelly', '516194308_12188_s1-8901030308987.jpg', 97, '30g.', 30, 20, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Vaseline', 1),
(82, 23, 'Urban Botanics Advanced Skin Radiance Face Cream', '22736083_71GrQ1ItrmL._SL1500_.jpg', 100, '100g.', 200, 180, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Urban', 1),
(83, 23, 'Wow Skin Science Vitamin C Face Cream', '36403806_81JRyFdM57L._SL1500_.jpg', 100, '100g.', 150, 130, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Wow', 1),
(84, 23, 'Fair & lovely Advanced Multi Vitamin', '94162006_266663-2_5-glow-lovely-advanced-multivitamin-face-cream.jpg', 100, '100g.', 180, 150, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Fair & Lovely', 1),
(85, 23, 'Nivea Soft Light Moisturising Cream', '65892320_niv0028.jpg', 100, '150g.', 180, 155, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Nivea', 1),
(86, 23, 'Nivea Pure Talc Gentle Care', '69530204_nivea-gentle-care-pure-talc-400-g-3-20201201.jpg', 100, '200g.', 300, 270, 'Your daily sunscreen lotion which is light enough to be used all year round. It contains cucumber, lemongrass, Vitamin B3 and has been tested by dermatologists. Suitable for all skin types - this lightweight lotion provides broad spectrum UV protection. SPF 24 blocks upto 97% harmful rays of UVB which causes sunburns & PA++ shields from UVA rays which cause dark spots, premature ageing and skin darkening. What are you waiting for - grab the best protection under the sun and say goodbye to sun damage!', 'Nivea', 1),
(87, 23, 'Vaseline Intensive Care Deep Moisture Lotion 200 ml', '61138766_vaseline-total-moisture-lotion-200-ml-1-20210818.jpg', 100, '200 ml.', 200, 160, 'Every day, your skin is exposed to damaging environmental factors like extreme temperatures, low humidity, harsh cleansers, and hot water, all that can make your skin feel dry. That\'s why many put their trust, especially during winters, in India\'s No.1 Best-Selling Body Lotion - Vaseline Deep Moisture. It penetrates 5 layers deep into your skin to give you long lasting moisturisation, even during harsh winters. Vaseline Intensive Care Deep Moisture Lotion is made up of a unique double-action formula containing Glycerin which helps to replenish your skin\'s lost moisture, and Vaseline Jelly which is known to lock the moisture in your skin', 'Vaseline', 1),
(88, 36, 'Colgate Max Fresh Red Gel', '13788879_colgate-max-fresh-spicy-fresh-red-gel-toothpaste-20-g-0-20201219.jpg', 100, '150g.', 180, 140, 'Enjoy cleaner teeth and fresh breath all day long with Colgate Max Fresh Spicy Fresh Red Gel Anticavity Toothpaste 150 g. It is a complete care for your family\'s oral health. Brush your teeth twice a day with this toothpaste for better results. So what are you waiting for? Buy the product online at the best rate, right here!', 'Colgate', 1),
(89, 36, 'Colgate Strong Teeth Dental Cream Toothpaste 200 g Saver Pack', '73804700_col0050_1.jpg', 100, '200g.', 180, 160, 'Enjoy cleaner teeth and fresh breath all day long with Colgate Strong Teeth Dental Cream Toothpaste 500 g Saver Pack. It is a complete care for your family\'s oral health. Brush your teeth twice a day with this toothpaste for better results. So what are you waiting for? Buy the product online at the best rate, right here!', 'Colgate', 1),
(90, 36, 'Colgate Max Fresh Blue Gel', '97468125_150-toothpaste-maxfresh-peppermint-ice-150-g-blue-gel-colgate-original-imafgrrezdtdzdth.jpeg', 100, '100g.', 120, 100, 'Enjoy cleaner teeth and fresh breath all day long with Colgate Max Fresh Spicy Fresh Red Gel Anticavity Toothpaste 150 g. It is a complete care for your family\'s oral health. Brush your teeth twice a day with this toothpaste for better results. So what are you waiting for? Buy the product online at the best rate, right here!Enjoy cleaner teeth and fresh breath all day long with Colgate Max Fresh Spicy Fresh Anticavity Toothpaste. It is a complete care for your family\'s oral health. Brush your teeth twice a day with this toothpaste for better results. So what are you waiting for? Buy the product online at the best rate, right here', 'Colgate', 1),
(91, 5, 'Arya Organic Mustard Oil', '87267338_arya organic mustard.jpg', 100, '1L.', 200, 180, 'To be an inspiring, trustworthy and innovative global leader in providing genuine organic products and solutions for Healthy Conscious Living. To be a vehicle of consciousness in the global market by creating a holistic, sustainable business model that inspires, promotes and supports true wellness.', 'Arya', 1),
(92, 5, 'EL World Organic Mustard Oil', '86567760_elward organic mustard.jpg', 100, '1L.', 250, 220, 'To be an inspiring, trustworthy and innovative global leader in providing genuine organic products and solutions for Healthy Conscious Living. To be a vehicle of consciousness in the global market by creating a holistic, sustainable business model that inspires, promotes and supports true wellness.', 'EL World', 1),
(93, 5, 'Emami Healthy & Tasty', '93453050_emami mustard oil.jpg', 100, '1kg.', 300, 270, 'Rice bran oil is extracted from the brown husk, the outer layer of the rice grain is called bran.\nIt has a mild flavour and is neutral in taste.\nIt is notable for its high smoke point and its mild flavor, making it suitable for high-temperature cooking methods such as stir frying and deep frying.\nStore in a cool and dry place, away from direct sunlight', 'Emami', 1),
(94, 5, 'Fortune Kachi Ghani', '52312514_Fortune Kachi Ghani.jpg', 100, '1kg.', 200, 170, 'Fortune Premium Kachi Ghani Pure Mustard Oil, traditionally extracted from the first press of mustard seeds, comes with a high pungency level and strong aroma.\nBeing pure, our cooking oil retains its natural properties and mustard oil benefits.\nIts strong aroma and pungency will spice up your cooking.', 'Fortune', 1),
(95, 5, 'Nutri Organic Mustard Oil', '42860502_nutriorg mustard oil.jpg', 100, '500 g.', 150, 130, 'To be an inspiring, trustworthy and innovative global leader in providing genuine organic products and solutions for Healthy Conscious Living. To be a vehicle of consciousness in the global market by creating a holistic, sustainable business model that inspires, promotes and supports true wellness.', 'Nutriorg', 1),
(96, 40, 'Parachute Pure Coconut Oil', '72208005_200-pure-coconut-parachute-original-imafsczf9z7m2njk.jpeg', 100, '200g.', 180, 155, 'Parachute Coconut oil is India’s No.1 coconut oil that contains the goodness of 100% pure coconut oil. It is made from naturally sun-dried coconuts sourced from the finest farms of our country. The oil is extracted from the nuts through a meticulous hands free process. It goes through a 5 stage purification process and as many as 27 quality tests are performed on the oil so that each bottle that reaches you is 100% pure- EVERY SINGLE TIME.', 'Parachute', 1),
(97, 40, 'Navratna Ayurvedic Oil', '51283021_1000-cool-hair-oil-pack-of-2-500-ml-navratna-original-imafzsuhe64be4gg.jpeg', 100, '500 g.', 100, 70, 'Thanda Thanda Cool Cool\' brand Navratna has been the most trusted and preferred brand in the therapeutic cooling oil segment for a very long time. It has been meticulously prepared from a combination of nine unique ayurvedic herbs. Its everyday massage gives enjoyable cooling which provides relief from daily mental and physical stress- and its related symptoms like headache, fatigue, tension, insomnia etc. It not only solves specific hair and body related ailments but delivers superlatively on all desired benefits, like beauty & nourishment, traditionally sought from hair oils', 'Navratna', 1),
(98, 40, 'Dabur Lal Oil', '94600529_281040_12-dabur-ayurvedic-medicine-lal-tail.jpg', 100, '150g.', 150, 130, 'Dabur Lal Tail is a specially crafted Ayurvedic baby massage oil made with time tested ingredients that have many proven benefits for babies. It is clinically tested proven to give 2x faster physical growth*. It contains Ratyanjot which helps protect the baby’s skin, camphor which helps with blood circulation, Shankhpushpi which is good for skin health and in weakness, and Urad nourishes muscles and bones. Regular massage with Dabur Lal Tail also helps relieve colic and other digestive problems, improves sleep patterns of your little one, and stimulates blood circulation.', 'Dabur', 1),
(99, 3, 'Toor Dal', '98198852_71Qk_eexnmL._SL1500_1024x1024.jpg', 100, '25kg.', 1500, 1400, 'For most Indians, comfort food is always linked to easy-to-cook homemade meals and what can be the most convenient and quick to prepare dal. A staple in the Indian diet, Toor dal is rich in protein and can be enjoyed well with Rotis or rice. It can be used to prepare sambar, dal tadka, the Maharashtrian varan, and more.', 'Indian', 1),
(100, 3, 'Super Saver Chana Dal', '49321035_40159886_2-super-saver-chana-dal.jpg', 100, '25kg.', 2500, 2300, 'For most Indians, comfort food is always linked to easy-to-cook homemade meals and what can be the most convenient and quick to prepare dal. A staple in the Indian diet, Toor dal is rich in protein and can be enjoyed well with Rotis or rice. It can be used to prepare sambar, dal tadka, the Maharashtrian varan, and more.', 'Rajesh', 1),
(101, 3, 'Moong Dal', '38904972_BE-Moong-Dal_600x600.jpg', 100, '15kg.', 1500, 1350, 'For most Indians, comfort food is always linked to easy-to-cook homemade meals and what can be the most convenient and quick to prepare dal. A staple in the Indian diet, Toor dal is rich in protein and can be enjoyed well with Rotis or rice. It can be used to prepare sambar, dal tadka, the Maharashtrian varan, and more.', 'Ramesh', 1),
(102, 3, 'Matki Dal', '38059891_Untitleddesign_85_1080x.png', 99, '20kg.', 100, 85, 'For most Indians, comfort food is always linked to easy-to-cook homemade meals and what can be the most convenient and quick to prepare dal. A staple in the Indian diet, Toor dal is rich in protein and can be enjoyed well with Rotis or rice. It can be used to prepare sambar, dal tadka, the Maharashtrian varan, and more.', 'Mahesh', 1),
(103, 3, 'Urad Dal', '22593214_urad-dal-whole-urad-dal-un-branded-original-imafyu4dhkhdxdm3.jpeg', 99, '30kg.', 2500, 2300, 'For most Indians, comfort food is always linked to easy-to-cook homemade meals and what can be the most convenient and quick to prepare dal. A staple in the Indian diet, Toor dal is rich in protein and can be enjoyed well with Rotis or rice. It can be used to prepare sambar, dal tadka, the Maharashtrian varan, and more.', 'Society', 1);
INSERT INTO `products` (`id`, `categories_id`, `product_name`, `image`, `qty`, `weight`, `mrp`, `price`, `description`, `short_desc`, `status`) VALUES
(104, 24, 'Mangaldeep Breezy Lavender', '36379105_pro_406282.jpg', 100, '20g.', 40, 25, 'For the first time in India, Mangaldeep Agarbattis has launched a revolutionary product powered with a special \"Lo Smoke Technology\" that releases 80% lesser smoke while burning as compared to normal agarbattis. Mangaldeep Lo smoke incense sticks deliver superior fragrance while reducing the amount of smoke released while burning. Immerse yourself in the soothing fragrance of Lavender with this Breezy Lavender variant.', 'Mangaldeep', 1),
(105, 24, 'Cycle Pure Agarbati', '33696129_Cycle-Three-in-One-Agarbatti-600x600.webp', 100, '30g.', 35, 20, 'Cycle Serene Yunganta Jagrane gives aroma of our agarbattis is unique and not too overpowering. It gives smoothing effect.', 'Cycle', 1),
(106, 24, 'Cow Dung Cakes', '94080822_40110398_3-om-bhakti-cow-dung-cakes.jpg', 100, '50g.', 50, 30, 'Cow dung cakes have been used in traditional Indian households for yagnas, ceremonies, rituals, etc. This cow dung cake is prepared from pure desi cow dung (Gobar). can be used for havan, Religious ceremonies or as a fertilizer.', 'Bhakti', 1),
(107, 24, 'Cotton Long Bhakti For Aarti', '87652114_40000307_3-om-bhakti-lamp-wicks-cotton-long-batti.jpg', 100, '10g.', 15, 8, 'Om Bhakti Cotton Long Batti for Aarati are made from high fibrous cotton for longer Diya lighting. The daily worship starts with the lighting of the lamp. All auspicious functions, religious as well as social, start with the lighting of the lamp.', 'Bhakti', 1),
(108, 24, 'Pancha Deep Oil', '39844074_40088579_5-om-bhakti-pancha-deepa-oil.jpg', 100, '100g.', 60, 45, 'Oneness Pancha Deepam Oil is a perfect blend of 5 different holy oils that come together to bring health, wealth and happiness to the family. Each of these oils has their unique benefits and significance and brings power and divine aura to your home and work place. Oneness Pancha Deepam Puja Oil is a divine mix of Cows Ghee, Gingelly/ Sesame Oil, Coconut Oil, Castor Oil, Mahua Oil and Added Special Sandal Oil. This will eliminate doshas, repels evil spirits. This Puja oil will make one live a happy life, will improve their financial condition, will bring one fame, prosperity and spiritual development.', 'Bhakti', 1),
(109, 37, 'Colgate Gentle Gumcare', '63421269_gumcare-colgate-ultra-soft-original-imag5qkkwgydtfxj.jpeg', 100, '10g.', 60, 40, 'Colgate Slim Soft Toothbrush, with 17x slimmer tip bristles vs ordinary end rounded bristles, provides deep yet gentle mouth clean. The slimmer bristle tips help clean in-between teeth and along the gumline. It sweeps away food and plague, giving you a cleaner mouthfeel with every brush. The toothbrush also comes with a slim rubber grip handle to offer comfortable brushing. Try Colgate SlimSoft toothbrush and experience deep cleaning along the gum line and narrow gaps between teeth, so you wear a confident smile every day!', 'Colgate', 1),
(110, 20, 'Raw Cashew Nut', '62680169_Raw-Cashew-Nuts.jpg', 100, '1kg.', 800, 750, 'Cashews are low fibre nuts packed with vitamins, minerals and antioxidants. These are free of cholesterol and are a good source of minerals like copper, phosphorous, zinc, iron, magnesium and selenium which are all important for maintaining good bodily function. In addition, cashews are a rich source of vitamins like E, K and B6.', 'Bikaner', 1),
(111, 20, 'Almonds', '82770850_almonds-regular.jpg', 100, '1kg.', 850, 820, 'BB Royal Organic Almonds are of Indian Origin almonds and are sourced from certified organic farms.\nStraight from our farmer’s fields and into your pantry, almonds are a rich source of Omega-3, antioxidants, vitamins, calcium, iron and magnesium.\nOne of the few nuts having the highest level of \"good fat\" that can lower cholesterol levels, almonds should be eaten every day.', 'Bikaner', 1),
(112, 20, 'BB Royal Organic - Raisins/Manuka, 100 g', '66388853_kishmish.jpeg', 100, '100 g.', 500, 400, 'Raisins or kismis are a wholesome addition to your diet. The organic kismis are a preserved and dried version of grapes.\nThey are known to be extremely healthy for consumption on a daily basis. These dry fruits can give relief from constipation, anemia, acidosis and fever. BB Royal’s Organic Raisins/Kismis is premium dry fruit, packed with the goodness of nutrition.', 'Bikaner', 1),
(113, 25, 'Cherry Blossom Black Press', '70999591_pro_19556.jpg', 100, '40g.', 80, 65, 'Unique formula to give your shoes a fresh, clean and shiny coat. The product is suitable for all leather shoes. It keeps shoes looking new for longer while providing protection from dirt and dust. A go-to formula to restore and revive the new look you have been looking for. The polish itself helps moisturize and waterproof the leather, lengthening the lifespan of your shoes.This is the bare minimum if you’re really looking to prolong the lifespan of your shoes. A necessity to keep your shoes going by restoring the fresh look every time you use the polish.', 'Cherry', 1),
(114, 25, 'Cherry Blossom Neutral Handy Shine', '51024822_pro_140956.jpg', 100, '100g.', 120, 90, 'Unique formula to give your shoes a fresh, clean and shiny coat. The product is suitable for all leather shoes. It keeps shoes looking new for longer while providing protection from dirt and dust. A go-to formula to restore and revive the new look you have been looking for. The polish itself helps moisturize and waterproof the leather, lengthening the lifespan of your shoes.This is the bare minimum if you’re really looking to prolong the lifespan of your shoes. A necessity to keep your shoes going by restoring the fresh look every time you use the polish.', 'Cherry', 1),
(115, 25, 'Cherry Handy Black Shine', '45688184_40139604_3-cherry-blossom-shoe-shiner-sponge-black-handy-shine.jpg', 100, '100g.', 150, 130, 'Unique formula to give your shoes a fresh, clean and shiny coat. The product is suitable for all leather shoes. It keeps shoes looking new for longer while providing protection from dirt and dust. A go-to formula to restore and revive the new look you have been looking for. The polish itself helps moisturize and waterproof the leather, lengthening the lifespan of your shoes.This is the bare minimum if you’re really looking to prolong the lifespan of your shoes. A necessity to keep your shoes going by restoring the fresh look every time you use the polish.', 'Cherry', 1),
(116, 5, 'Dhara Oil - Mustard (Kachi Ghani), 1 L Bottle', '69374671_212470_4-dhara-oil-mustard-kachi-ghani.jpg', 100, '1 li.', 220, 208, 'Dhara filtered groundnut oil has low absorb technology, Naturally balanced SFA, MUFA & PUFA. Fortified with vitamin A & Vitamin D2.Groundnut oil, Vitamin A & Vitamin D2, Antifoaming agent (Dimethyl polysiloxane)', 'Dhara', 1),
(117, 22, 'Joy Skin Fruits Moisturizing ', '98900067_40157237_2-joy-skin-fruits-fruit-moisturising-skin-cream.jpg', 92, '100 ml.', 270, 250, 'Joy Skin Fruits Moisturising Skin Cream is a light skin cream for moisture retention and smooth skin. Almond oil helps to protect dry skin and apple extracts help in skin-smoothening. Active Fruit Boosters present in the Joy moisturising cream revitalize skin for youthful beauty, resulting in softer, silky, younger-looking skin. It makes skin glow with health and vitality. Its lightweight formula absorbs easily into the skin and makes it ideal for all-year-round use.', 'Joy', 1),
(118, 22, 'Garnier Skin Naturals - Nourishing', '98948098_40147924-2_1-garnier-skin-naturals-nourishing-cold-cream.jpg', 87, '18 g.', 65, 60, 'Garnier Nourishing Cold Cream protects against harsh winter conditions and external aggressions like wind and pollution, which dry out skin and make it more fragile. Garnier Nourishing Cold Cream is much more than a basic moisturizer, it works for 24 hours to nourish and protect skin against dryness. It has a rich formula that intensively moisturizes to make the skin soft and soothes any feeling of discomfort or tightness. Its unique formula contains natural active ingredients such as 100% pure acacia honey, known for its hydro-fixating properties, to help maintain the skin\'s moisture level.', 'Garnier', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(300) DEFAULT NULL,
  `date` datetime NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `date`, `status`) VALUES
(1, 'Deepak', 'Dubey', 'dubeyd2001@gmail.com', 'admin', '2022-03-22 16:41:47', 1),
(2, 'aniket', 'pal', 'aniket123@gmail.com', '12345', '2022-03-26 06:58:24', 1),
(3, 'VANETTA', 'THOMPSON', 'mkaur123@gmail.com', 'admin', '2022-03-31 16:51:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_order`
--

CREATE TABLE `users_order` (
  `order_id` int(255) NOT NULL,
  `product_id` int(150) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_order`
--

INSERT INTO `users_order` (`order_id`, `product_id`, `product_name`, `price`, `quantity`) VALUES
(1, 79, 'Parachute Advanced Deep Nourish Body Lotion', 220, 5),
(2, 118, 'Garnier Skin Naturals - Nourishing', 65, 8),
(2, 13, 'Fortune Special Biryani Rice', 170, 4),
(2, 117, 'Joy Skin Fruits Moisturizing ', 250, 1),
(3, 117, 'Joy Skin Fruits Moisturizing ', 250, 5),
(3, 118, 'Garnier Skin Naturals - Nourishing', 60, 5),
(4, 117, 'Joy Skin Fruits Moisturizing ', 250, 1),
(5, 81, 'Vaseline Pure Skin Jelly', 20, 3),
(5, 117, 'Joy Skin Fruits Moisturizing ', 250, 1),
(6, 103, 'Urad Dal', 2300, 1),
(7, 18, 'Nature Fresh Sampoorna Atta by Cargil India', 165, 4),
(8, 102, 'Matki Dal', 85, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_order`
--
ALTER TABLE `manage_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productid_2` (`id`),
  ADD KEY `productid` (`id`),
  ADD KEY `productid_3` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manage_order`
--
ALTER TABLE `manage_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
