-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cooking_realm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(11) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_ID`, `Admin_Name`, `Email`, `Password`) VALUES
(1, 'Ramisa Rifa', 'ramisa.rifa09@gmail.com', 'abc123'),
(2, 'Farida Mim', 'farida.mim@gmail.com', 'abc123'),
(3, 'Abid', 'abid@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `Contest_ID` int(5) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Contest_Name` varchar(20) NOT NULL,
  `Contest_Type` varchar(20) NOT NULL,
  `Contest_Details` text NOT NULL,
  `Contest_Winner` varchar(30) NOT NULL,
  `Contest_Status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`Contest_ID`, `Image`, `Contest_Name`, `Contest_Type`, `Contest_Details`, `Contest_Winner`, `Contest_Status`) VALUES
(5, 'indian-food-cover.jpg', 'Cooking Star 2021', 'All item', 'The competition aim in the discipline of the menu preparation, in the testing and evaluation of the professional theorical knowledge and the professional skills of the students /participants in the field of gastronomy, considering the issue of carbon footprint.', 'Not Declared', 'Active'),
(6, 'indian-food-cover.jpg', 'Desert Realm 2021', 'Desert', 'The competition aim in the discipline of the menu preparation, in the testing and evaluation of the professional theorical knowledge and the professional skills of the students /participants in the field of gastronomy, considering the issue of carbon footprint.', 'Not Declared', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `contestant`
--

CREATE TABLE `contestant` (
  `Contestant_ID` int(20) NOT NULL,
  `Contest_ID` int(5) NOT NULL,
  `User_ID` bigint(20) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Dish_Name` varchar(45) NOT NULL,
  `Dish_Type` varchar(45) NOT NULL,
  `Dish_Details` varchar(500) NOT NULL,
  `Score` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contestant`
--

INSERT INTO `contestant` (`Contestant_ID`, `Contest_ID`, `User_ID`, `User_Name`, `Image`, `Dish_Name`, `Dish_Type`, `Dish_Details`, `Score`) VALUES
(66, 5, 1, 'Ramisa', 'hacks2.jpg', 'Salsa Salad', 'Indian Dish', '2 tbsp. extra-virgin olive oil, divided\r\n2 green peppers, thinly sliced\r\n2 red peppers, thinly sliced\r\n1 large yellow onion, sliced\r\nKosher salt\r\n1 1/2 lb. sirloin steak, thinly sliced\r\nFreshly ground black pepper\r\n8 slices provolone\r\n4 hoagie rolls\r\n\r\nDIRECTIONS\r\nIn a large skillet over medium heat, heat 1 tablespoon oil. Add peppers and onion and season with salt. Cook, stirring often, until caramelized, 12 to 15 minutes.\r\nRemove onions and peppers from skillet and set aside. Add remaining tab', 3),
(67, 5, 1, 'Mim', 'bbq-nachos.jpg', 'Naga Nachos ', 'Mexican', 'Ingredients\r\n1 (5 to 6 pound) boneless leg of lamb (should come tied up, if not, have the butcher tie it for roasting)\r\n2 lemons (juiced)\r\n6 cloves garlic (crushed)\r\n1/4 cup fresh rosemary (chopped)\r\n1 teaspoon dried thyme\r\n1 teaspoon fresh ground black pepper\r\n2 tablespoons olive oil\r\nKosher salt (as needed)\r\n\r\nSteps to Make It\r\n1.Combine all the ingredients, except for the olive oil and salt, in a large bowl.\r\n\r\n\r\n2.Rub the leg of lamb thoroughly with the marinade until coated. You may even pu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(5) NOT NULL,
  `User_ID` bigint(20) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Message` text NOT NULL,
  `Experience` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `User_ID`, `User_Name`, `Email`, `Message`, `Experience`) VALUES
(1, 1, 'Ramisa', 'ramisa.rifa09@gmail.com', 'ready', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `Recipe_ID` int(10) NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Dish_Type` varchar(30) NOT NULL,
  `Dish_Name` varchar(45) NOT NULL,
  `Dish_Ingredients` varchar(200) NOT NULL,
  `Dish_Details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`Recipe_ID`, `Image`, `Dish_Type`, `Dish_Name`, `Dish_Ingredients`, `Dish_Details`) VALUES
(1, 'hacks2.jpg', 'Indian dish', 'Philly Cheesesteaks', '2 tbsp. extra-virgin olive oil, divided\r\n2 green peppers, thinly sliced\r\n2 red peppers, thinly sliced\r\n1 large yellow onion, sliced\r\nKosher salt\r\n1 1/2 lb. sirloin steak, thinly sliced\r\nFreshly ground', 'In a large skillet over medium heat, heat 1 tablespoon oil. Add peppers and onion and season with salt. Cook, stirring often, until caramelized, 12 to 15 minutes.\r\nRemove onions and peppers from skillet and set aside. Add remaining tablespoon oil and cook steak until it has almost reached your preferred doneness, about 5 minutes. Season with salt and pepper.\r\nReturn veggies to skillet and toss to combine with steak. Blanket mixture with provolone and cook, covered, until the cheese is melted, about 3 minutes more. \r\nDivide mixture among hoagie rolls and serve.'),
(3, 'Focaccia-Bread-Recipe-1200.jpg', 'Italian dish', 'Focaccia', '500g strong bread flour , plus extra for dusting\r\n7g dried fast action yeast\r\n2 tsp fine sea salt\r\n5 tbsp olive oil , plus extra for the tin and to serve\r\n1 tsp flaky sea salt\r\n¼ small bunch of rosema', 'STEP 1\r\nTip the flour into a large mixing bowl. Mix the yeast into one side of the flour, and the fine salt into the other side. \r\nThen mix everything together, this initial seperation prevents the salt from killing the yeast.\r\n\r\nSTEP 2\r\nMake a well in the middle of the flour and add 2 tbsp oil and 350-400ml lukewarm water, adding it gradually until you have a slightly sticky dough \r\n(you may not need all the water). Sprinkle the work surface with flour and tip the dough onto it, scraping around the sides of the bowl. \r\nKnead for 5-10 mins until your dough is soft and less sticky. Put the dough into a clean bowl, cover with a tea towel and leave to prove for 1 hr until doubled in size.\r\n\r\nSTEP 3\r\nOil a rectangle, shallow tin (25 x 35cm). Tip the dough onto the work surface, then stretch it to fill the tin. \r\nCover with a tea towel and leave to prove for another 35-45 mins.\r\n\r\nSTEP 4\r\nHeat the oven to 220C/200C fan/gas 7. Press your fingers into the dough to make dimples. \r\nMix together 1½ tbsp olive oil, 1 tbsp water and the flaky salt and drizzle over the bread. Push sprigs of rosemary into the dimples in the dough.\r\n\r\nSTEP 5\r\nBake for 20 mins until golden. Whilst the bread is still hot, drizzle over 1-2 tbsp olive oil. Cut into squares and serve warm or cold with extra olive oil, \r\nif you like.'),
(4, 'download.jpg', 'Arabic Dish', 'Roast Leg of Lamb', '1 (5 to 6 pound) boneless leg of lamb (should come tied up, if not, have the butcher tie it for roasting)\r\n2 lemons (juiced)\r\n6 cloves garlic (crushed)\r\n1/4 cup fresh rosemary (chopped)\r\n1 teaspoon dr', '1.Combine all the ingredients, except for the olive oil and salt, in a large bowl.\r\n\r\n\r\n2.Rub the leg of lamb thoroughly with the marinade until coated. You may even push some herbs and garlic into any cracks and crevices.\r\n\r\n\r\n3.Place the lamb in a plastic bag, and marinade in the refrigerator overnight, or for at least 6 hours.\r\n\r\n\r\n4.Remove the lamb from the fridge, and let sit out for 45 minutes to come up to room temperature.\r\n\r\n5.Remove the lamb from the marinade and place on a rack in a large roasting pan. Rub with the olive oil, and season very generously with the salt. Keep the side with the most fat facing up.\r\n\r\n6.Preheat oven to 450 F.\r\n\r\n7.Roast for 15 minutes in the hot oven to begin browning the surface.\r\n\r\n8.Then reduce the oven to 315 F. and roast for approximately 10 minutes per pound (for a 5 to 6 pound leg this will be about an hour).\r\n\r\n9.The best method for checking the doneness is using a digital meat thermometer and removing the lamb when the internal temp reaches 135 F. \r\nThis will give you a nice pink and juicy roast. Let the lamb rest for at least 20 minutes before slicing. \r\nIt\'s best sliced thin, against the grain of the meat.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` bigint(20) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(45) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Country` varchar(20) NOT NULL,
  `Contact_Number` varchar(30) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Premium_ID` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `User_Name`, `First_Name`, `Last_Name`, `Date_of_birth`, `Country`, `Contact_Number`, `Email`, `Password`, `Premium_ID`) VALUES
(1, 'Ramisa', 'Ramisa', 'Rifa', '2000-01-29', 'Bangladesh', '018796484', 'ramisa.rifa09@gmail.com', '123', NULL),
(2, 'Mim', 'Farida', 'Mim', '2000-02-02', 'Kuwait', '002020202', 'mramim@gmail.com', 'Mim', NULL),
(3, 'Abid', 'Abid', 'Hossain', '2021-01-28', 'America', '03939393993', 'abid@gmail.com', 'hossab', NULL);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_delete` AFTER DELETE ON `user` FOR EACH ROW begin
       DELETE FROM contestant
       WHERE User_Name=old.User_Name;
       end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update` AFTER UPDATE ON `user` FOR EACH ROW begin
       if old.User_Name <> new.User_Name then
       UPDATE contestant
       SET User_Name=new.User_Name
       WHERE User_Name=old.User_Name;
       end if;
       end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_user` AFTER UPDATE ON `user` FOR EACH ROW begin
       if old.User_Name <> new.User_Name then
       UPDATE feedback
       SET User_Name=new.User_Name
       WHERE User_Name=old.User_Name;
       end if;
       end
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`Contest_ID`);

--
-- Indexes for table `contestant`
--
ALTER TABLE `contestant`
  ADD PRIMARY KEY (`Contestant_ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`Recipe_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `User_Name` (`User_Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `Contest_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contestant`
--
ALTER TABLE `contestant`
  MODIFY `Contestant_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `Feedback_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `Recipe_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
