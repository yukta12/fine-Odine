-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 09:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finedine`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hid` int(11) NOT NULL,
  `hotel_name` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `costfor2` int(11) NOT NULL,
  `cuisine` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hid`, `hotel_name`, `city`, `location`, `costfor2`, `cuisine`, `address`) VALUES
(1, 'Barbeque Nation', 'Mumbai', 'Virar, Western Suburbs', 1286, 'Multicuisine', '3rd Floor Yashwant Square,Survey No.2 Hissa No.1 And 2, New Bypass Road, Dongre Village, Virar (w), Mumbai<br>7861004444'),
(2, 'Brighton', 'Mumbai', 'Fort, South Mumbai', 1200, 'Chinese,Italian', '37, Mutual Annex Building, Rustom Sidhwa Marg, Opposite D. N. Road, Fort, Mumbai<br>7861004444'),
(3, 'SR Restaurant and Lounge', 'Mumbai', 'Charni Road, South Mumbai', 800, 'Multicuisine', 'Shop 434, Shree Ram Mansion, SVP Road, Charni Road, Mumbai<br>7861004444'),
(4, 'The Bombay Canteen', 'Mumbai', 'Lower Parel, South Mumbai', 1500, 'Casual Eclectic', 'Kamala Mills, S.B. Road, Lower Parel, Mumbai<br>7861004444'),
(5, 'Emperor\'s Court', 'Mumbai', 'Renaissance Mumbai Convention Centre & Hotel, Mumbai', 2500, 'Chinese,Seafood', 'Renaissance Hotel & Convention Centre, 2 & 3B, Near Chinmayanand Ashram, Powai, Mumbai<br>7861004444'),
(6, 'The Benedict Bistro & Bar', 'Mumbai', 'Bandra West, Western Suburbs', 1000, 'America ', 'No. B/647, Chapel Road, Behind Lilavati Hospital, Bandra West, Mumbai<br>7861004444'),
(7, 'Coffee Break', 'Mumbai', 'Girgaum, South Mumbai', 500, 'Cafe', 'Shop No.12, Govardhan Building R.R Roy Marg, Girgaon, Mumbai<br>7861004444'),
(8, 'Umraan', 'Mumbai', 'Vasant Vihar, Thane Region', 500, 'Modern Indian', '40 Swami Vivekanandan Sankul, Near Mahada Entrance, Vasant Vihar, Thane West, Mumbai<br>022 61054612'),
(9, 'BusaGo', 'Mumbai', 'Oshiwara, Western Suburbs', 800, 'Pan Asian', '19, Link Plaza, Mhada Shopping complex, Oshiwara link road,, Jogeshwari (W), Mumbai<br>022 6742 8099'),
(10, 'Indigo Delicatessen', 'Mumbai', 'Kurla, Central Mumbai', 1700, 'European', 'Phoenix Market city Kurla, Level 1, LBS Marg, Kurla, Mumbai<br>022 33951687'),
(11, 'Tamasha', 'Mumbai', 'Lower Parel, South Mumbai', 1200, 'Finger Food', 'Victoria House, E.B Marg, Lower Parel, Mumbai<br>022 33951579'),
(12, 'Play - The Lounge ', 'Mumbai', 'Lower Parel', 1700, 'American,Continental', 'First Floor, Unit 2, Trade View Building, Oasis Complex, Kamala Mills Compound, E.B.Marg, Lower Parel, Mumbai<br>022 62232200\n'),
(13, ' Ph Se Food ', 'Mumbai', 'Mulund West', 1200, 'North Indian,Continental', '18-21, R Galleria, Runwal Greens , Mulund goregaon Link Road, Next to Fortis Hospital, Mulund West, Mumbai<br>+91 7045704589'),
(14, 'Queen\'s Kitchen & Mocktails ', 'Mumbai', 'Mulund West   ', 1000, 'North Indian,Continental', 'Queens Kitchen & Moktails, O2 Commercial Towers, A Wing, 5th Floor, MINERVA estate, OPP ASHA NAGAR, Mulund West.<br>022 65076661'),
(15, 'Belstone ', 'Mumbai', 'Mulund West   ', 1100, 'Italian,Mexican', 'Shop 8-11, 1st Floor, Runwall Green Building, R Galleria, Mulund West, Mumbai<br>\n022 30151774'),
(16, 'Soi Kitchen', 'Mumbai', 'Chembur', 750, 'Chinese,Thai', 'The Destination Building, MG Road, Near Shopper\'s Stop, Chembur, Mumbai<br>022 33126951'),
(17, 'Tea Villa cafe', 'Mumbai', 'Chembur', 1000, 'Cafe,beverages,Continental,Desserts', 'Shop 2, Skyrise Appartments, A Wing, Central Avenue Road, Chembur East, Mumbai, Chembur, Mumbai<br>022 61344960'),
(18, 'Seven Kitchens', 'Mumbai', 'The St. Regis, Mumbai', 4500, 'All Day Dining', 'The St. Regis, 462, Senapati Bapat Marg, Lower Parel, Mumbai<br>7861004444'),
(19, ' Pa Pa Ya', 'Mumbai', 'Colaba', 2000, 'Sushi,Asian,Thai', 'Hotel Diplomat, Whitehouse Building, 24 - 26, B.K Boman Behram Marg, Apollo Bunder, Colaba, Mumbai<br>022 22044441'),
(20, 'Grandmama\'s Cafe', 'Mumbai', 'Lower Parel, South Mumbai', 1000, 'Cafe', 'Next to Gate 4, Kamala Mills Compound, Senapati Bapat Marg, Lower Parel, Mumbai<br>+91 7400092993<br>+91 7400092992'),
(21, 'The Runway Project by Pizza Express', 'Mumbai', 'Lower Parel, South Mumbai', 2000, 'Italian,Pizza', 'S-1, Second floor, Skyzone, Phoenix Mill Compound, S.B. Marg, Lower Parel, Mumbai<br>022 33126246'),
(22, 'The Good Wife', 'Mumbai', 'Bandra Kurla Complex (BKC), Western Suburbs', 2000, 'European', 'Ground Floor, The Capital, G Block, Behind ICICI Bank Building, Bandra Kurla Complex, Mumbai<br>022 30151338'),
(23, 'Oozo ', 'Mumbai', 'Sakinaka,Cantral Mumbai', 1200, 'Multicuisine', 'Jalaram Commercial Centre, Near Ansa Industrial Estate, Saki Vihar Road, Sakinaka, Mumbai<br>022 33956149'),
(24, 'The Bar Stock Exchange', 'Mumbai', ' Sakinaka,Central Mumbai', 1300, 'Continental,Chinese,Pub', '89, Shivani Industrial Estate, Opposite Times Square, Sakinaka, Mumbai<br>022 30151964'),
(25, 'Hotel Mayur ', 'Mumbai', 'Ulhasnagar,Mumbai', 850, 'North Indian,Chinese', 'Hotel Mayur, Central Hospital Road, Near Navjeevan Bank, Ulhasnagar, Mumbai<br>+91 9922092000\n<br>0251 2732352'),
(26, 'My Delicia', 'Mumbai', 'Ulhasnagar,Mumbai', 800, 'Italian,Burger', 'Opposite Talwalkar\'s Gym, Camp 5, Ulhasnagar, Mumbai<br>0251 2526699<br>+91 8600562700'),
(27, 'Malvan Tadka ', 'Mumbai', 'Dombivali East ,Mumbai', 1000, 'Mughlai,Seafood,', 'Monarch Boutique Hotel, Kalyan Shil Road, Nilje, Dombivali East, Mumbai<br>022 33126259'),
(28, 'Antares', 'Goa', 'Vagator, North Goa', 200, 'Australian', 'Vagator, Goa'),
(29, 'WOO BAR ', 'Goa', 'W Goa Vagator, Lounge', 2000, 'FingerFood,Continental', 'Vagator Beach, Bardez, Vagator, Goa<br>0832 6718888'),
(30, 'The Kitchen Table', 'Goa', 'North Goa', 2500, 'European', 'W Goa, Vagator, Bardez, North Goa'),
(31, 'Crab & Co', 'Goa', 'Mapusa, North Goa', 1600, 'Seafood', 'Assagao, Goa<br>7861004444'),
(32, 'Purple Martini', 'Goa', 'Anjuna, North Goa', 1200, 'Multicuisine', 'St. Anthony Praise Vaddo, Anjuna-Bardez, Goa'),
(33, 'Watermark-The Floating Bar', 'Goa', 'Arambol, North Goa', 1200, 'European', 'Morjim, Safira Jetty'),
(34, 'Bottlejack Bistro', 'Goa', 'Porvorim, North Goa', 2200, 'Multicuisine', 'Plot 8, Service Road, Alto- Porvorim, Goa'),
(35, 'Zeebop', 'Goa', 'Mandrem, Goa, North Goa', 1000, 'European', 'Junas Vaddo, Mandrem, North Goa'),
(36, 'Global Shore', 'Goa', 'Penha de Franca, North Goa', 500, 'Seafood', 'Hotel Picnic Plaza, Chogm Road, Sangolda, Bardez, Penha de Franca, Goa'),
(37, 'The Fisherman\'s Wharf', 'Goa', 'Salcette, South Goa', 1100, 'Multicuisine', 'At The Riverside, Mobor, Cavelossim, Salcette, Goa'),
(38, 'Sagres', 'Goa', 'Radisson Blu Resort, Goa', 3000, 'Finger Food', 'Cavelossim Beach, Mobor, Salcette, Goa'),
(39, 'Planet Dailies', 'Goa', 'Planet Hollywood Beach Resort,Goa', 1500, 'Multicuisine', 'A8, Asconwado, Uttorda Beach, Salcette, Goa'),
(40, 'Fame', 'Goa', 'Planet Hollywood Beach Resort,Goa', 2500, 'Multicuisine', 'Planet Hollywood Beach Resort, Asconwado, Uttorda Beach, Salcette, Goa'),
(41, 'Wok & Roll', 'Goa', 'Candolim, North Goa', 1000, 'Pan Asian', 'Sinquerim, Candolim, Goa'),
(42, 'SinQ Nightclub', 'Goa', 'SinQ Beach Resort, Goa', 1800, 'Multicuisine', 'SinQ Beach Resort, Opposite Taj Holiday Village, Candolim, Goa'),
(43, 'Earthern Oven', 'Goa', 'Hotel Fortune Acron Regina, Goan', 1200, 'North Indian', 'Hotel Fortune, Fort Aquada Road, Candolim, Goa'),
(44, 'Plancha', 'Pune', 'Camp Area,Pune', 900, 'American,European', '2407 East Street, Camp Area, Pune'),
(45, 'British Barrel Club', 'Pune', 'Dhole Patil Road, Pune', 950, 'Multicuisine', '01-102, City Point, Street 17, Boat Club Road, Sangamwadi, Dhole Patil Road, Pune'),
(46, 'Zanzibar', 'Pune', 'The Central Park Hotel', 1100, 'Chinese,indian', 'The Central Park Hotel, Bund Garden Road, Pune'),
(47, 'Ironbar \'n\' Grill', 'Pune', 'Yerawada, Pune', 1500, 'Multicuisine', 'Unit 8, Pubtown, Ishanya Mall, Yerawada, Pune'),
(48, 'Coladas- Tiki Bar & Kitchen', 'Pune', 'Kharadi, Pune', 1200, 'Multicuisine', 'F and B - 3, City Hub, World Trade Center, Kharadi, Pune'),
(49, 'Indigo Delicatessen', 'Pune', 'Koregaon Park, Pune', 1700, 'European', '26/3A/2 Power Point UG 3, Lane Number 6, Koregaon Park, Pune'),
(50, 'Seasonal Tastes', 'Pune', 'The Westin Pune Koregaon Park, Pune', 2000, 'All Day Dining', 'The Westin, 36/3B, Mundhwa Road, Koregaon Park Annexe, Pune<br>9284574773'),
(51, 'Prego', 'Pune', 'The Westin Pune Koregaon Park, Pune', 3500, 'Italian', 'The Westin, 36/3B, Mundhwa Road, Koregaon Park Annexe, Pune<br>+912067210064'),
(52, 'Kangan', 'Pune', 'The Westin Pune Koregaon Park, Pune', 3500, 'Mughlai,North Indian', 'The Westin, 36/3B, Mundhwa Road, Koregaon Park Annexe, Pune<br>8983302362'),
(53, 'Nando\'s', 'Delhi NCR', 'Epicuria Mall, Nehru Place', 1200, 'African,Portuguese', 'Epicuria Food Mall, Nehru Place, New Delhi'),
(54, ' Smoke on Water', 'Delhi NCR', 'Connaught Place (CP), Central Delhi', 1000, 'American', 'D-26, Connaught Place, New Delhi'),
(55, 'Hookkapani Baithak', 'Delhi NCR', 'Safdarjung, South Delhi', 1000, 'Multicuisine', 'A/B Block, Near Kamal Cinema, Safdarjung, New Delhi'),
(56, 'The Cubano Cafe', 'Delhi NCR', 'Model Town 2, North Delhi', 800, 'Multicuisine', 'F-14/13, Model Town 2, New Delhi'),
(57, 'The Great Kabab Factory', 'Delhi NCR', 'MGF Metropolitan Mall, Saket', 1599, 'North Indian', 'MGF Metropolitan Mall, Saket, New Delhi'),
(58, 'Upstairs at Indian Accent', 'Delhi NCR', 'The Lodhi, New Delhi', 4999, 'European', 'The Lodhi, Lodhi Road, New Delhi'),
(60, 'Wok In The Clouds', 'Delhi NCR', 'Rajouri Garden, West Delhi ', 1600, 'Multicuisine', 'J-2/13, Rajouri Garden, New Delhi(W)'),
(61, 'Garam Dharam', 'Delhi NCR', 'Rajouri Garden, West Delhi!', 1200, 'North Indian', 'J-2/12, BK Dutt Market, Rajouri Garden, New Delhi'),
(62, 'Lights Camera Action - Air Bar', 'Delhi NCR', 'Rajouri Garden, West Delhi', 1200, 'North Indian', 'J2/6 B, BK Dutta Market, Rajouri Garden, New Delhi'),
(63, 'SodaBottleOpenerWala', 'Delhi NCR', 'Khan Market, Central Delhi', 1500, 'Parsi', '73,  Khan Market, New Delhi<br>7861004444'),
(64, 'Parallel', 'Delhi NCR', 'Khan Market, Central Delhi', 1999, 'European', '12, Khan Market, New Delhi'),
(65, 'Smokey\'s BBQ and Grill', 'Delhi NCR', 'Khan Market, Central Delhi', 1500, 'American', '51, Khan Market, New Delhi'),
(66, 'Latitude 28', 'Delhi NCR', 'Khan Market, Central Delhi', 900, 'Casual Eclectic', '9, Khan Market, New Delhi'),
(67, 'Insomnia', 'Delhi NCR', 'Vivanta by Taj Ambassador, New Delhi', 2999, 'Cocktail Menu,Multicuisine', 'Vivanta by Taj - Ambassador, Sujan Singh Park, New Delhi'),
(68, 'Farzi Cafe', 'Delhi NCR', 'Connaught Place (CP), Central Delhi', 1500, 'Modern Indian', 'Level 1, Block E, 38/39, Inner Circle, Connaught Place, New Delhi<br>011 30806460'),
(69, 'The G.T. Road', 'Delhi NCR', 'Connaught Place (CP), Central Delhi', 1500, 'Indian', 'M 39, Outer Circle, Connaught Place, New Delhi<br>011 33105443'),
(70, 'Local ', 'Delhi NCR', 'Connaught Place (CP), Central Delhi', 1200, 'Multicuisine', 'Ground Floor,, Atmaram Mansion Scindia House, Connaught Circus, Connaught Place, New Delhi<br>011 33105073'),
(71, 'Peshawri', 'Jaipur', 'ITC Rajputana Hotel, Jaipur', 3000, 'Indian,Mughlai', 'ITC Rajputana Hotel, Palace Road, Gopalbari, Jaipur<br>0141 5100100'),
(72, 'Zaika', 'jaipur', 'Bani Park, Jaipur ', 900, 'Multicuisine', 'Traditional Heritage Haveli, Bani Park, Jaipur<br>0141 4003300<br>+91 8852008666'),
(73, '#BC', 'Jaipur', 'Bani Park, Jaipur', 800, 'Multicuisine', 'Traditional Haveli, AC-4C, Gayatri Marg, Bani Park, Jaipur<br>+91 7300060055<br>+91 8852008666'),
(74, 'Rajput Room', 'Jaipur', 'Taj Rambagh Palace, Jaipur', 7000, 'Multicuisine', 'Rambagh Palace Hotel, Bhawani Singh Road, Jaipur'),
(75, 'Suvarna Mahal', 'Jaipur', 'Taj Rambagh Palace, Jaipur', 9000, 'North Indian', 'Taj Rambagh Palace, Bhawani Singh Road, C Scheme, Jaipur'),
(76, 'Idiot Box', 'Jaipur', 'Vaishali Nagar, Jaipur', 800, 'Multicuisine', '3rd Floor, Plot No.1, Girnar Colony, Vaishali Nagar, Jaipur'),
(77, 'Kloud', 'Jaipur', 'Hotel Royal Orchid, Jaipur', 1499, 'Multicuisine', 'Royal Orchid Central, Bani Park, Jaipur'),
(78, 'Krystal Bar', 'Jaipur', 'Hilton Jaipur, Jaipur', 2000, 'Multicuisine', 'Plot No,42, Near Geejgarh House, Hawa Sadak, Bais Godam, Jaipur'),
(79, 'The Cafe Express - The Lalit', 'Jaipur', 'Jawahar Nagar', 800, 'South Indian', '2B & 2C, The Lalit, Jagatpura Road, Near Jawahar Circle, Jawahar Nagar, Jaipur'),
(80, 'Giardino', 'Jaipur', 'Taj Jai Mahal Palace, Jaipur', 3000, 'Italian', 'Taj Jai Mahal Palace, Jacob Road, Civil Lines, Jaipur'),
(81, 'Sands', 'Jaipur', 'Vaishali Nagar, Jaipur', 1000, 'Multicuisine', '314, Jharkhand Mahadev Mandir, Queens Road, Vaishali Nagar<br>0141 6652420'),
(82, 'WTF', 'Jaipur', 'C Scheme, Jaipur', 800, 'Continental, Italian, North Indian, Lebanese, Thai, Kebab', '301, Man Upasna Mall, Chomu House, C Scheme, Jaipur<br>0141 3319485'),
(83, 'Cafe Bae', 'Jaipur', 'Hotel Las Vegas, Jaipur ', 1000, 'Multicuisine', 'A1, Sehkar Marg, Tonk Road, Jaipur'),
(84, 'Jaipur Baking Company', 'Jaipur', 'Jaipur Marriott Hotel, Jaipur', 1500, 'Bakery', 'Jaipur Marriott Hotel, Ashram Marg, Near Jawahar Circle, Jaipur'),
(85, 'Lounge 18', 'Jaipur', 'Jaipur Marriott Hotel, Jaipur', 2500, 'Finger Food', 'Jaipur Marriott Hotel, Ashram Marg, Near Jawahar Circle, Jaipur'),
(86, 'Saffron', 'Jaipur', 'Jaipur Marriott Hotel, Jaipur', 2000, 'North Indian', 'Jaipur Marriott Hotel, Ashram Marg, Near Jawahar Circle, Jaipur<br>0141 4567777'),
(87, 'Okra', 'Jaipur', 'Jaipur Marriott Hotel, Jaipur', 2000, 'North Indian, Continental, Italian, Asian, Sushi', 'Jaipur Marriott Hotel, Ashram Marg, Near Jawahar Circle, Tonk Road, Jaipur<br>0141 4567777'),
(88, 'Peacock Roof Top Restaurant', 'Jaipur', 'Gopalbari, Jaipur', 800, 'Multicuisine', '51 Hathroi Fort, Hari Kishan Somani Marg, Jaipur\n'),
(89, 'Chillout Rooftop', 'Jaipur', 'Gopalbari, Jaipur', 600, 'North Indian', 'Hotel Hathroi Palace, 64, Harikishan Somani Marg, Hathroi Fort, Ajmer Road, Jaipur<br>+911414049705'),
(90, 'Cafe LazyMojo', 'Jaipur', 'Malviya Nagar, Jaipur', 800, 'Multicuisine', 'H 1, Lal Bahadur Nagar, S.L Marg, Malviya Nagar, Jaipur<br>+91 9828950999<br>+91 9784621786'),
(91, 'The Vegetarian Grill', 'Jaipur', 'Malviya Nagar, Jaipur', 700, 'Chinese,North Indian', 'E 29, Siddharth Nagar, Sector 9, Malviya Nagar, Jaipur'),
(92, 'My Ship', 'Bengaluru', 'Koramangala, South Bengaluru', 1200, 'Multicuisine', '23, 1st Floor, Gowri Annex, 80FT Road, ST Bed, Koramangala 4th Block, Bengaluru'),
(93, 'Rara Avis Restaurant', 'Bengaluru', 'Sahakara Nagar, North Bengaluru', 1000, 'Kerala,North Indian', '7-G Block, 20th Main Road, Park View Layout, Sahakara Nagar, Bangalore'),
(94, 'Chinmayee\'s', 'Bengaluru', 'Electronic City, South Bengaluru', 500, 'Multicuisine', '42/ 4C, Ananda Reddy Layout, Electronic City, Phase 2, Bengaluru'),
(95, 'Z Bar', 'Bengaluru', 'Zone By The Park, Bengaluru', 1499, 'Finger Food', 'Zone By The Park, 26/A, Phase 1, Electronic City, Bangalore'),
(96, 'Bazaar', 'Bengaluru', 'Zone By The Park, Bengaluru', 1200, 'Multicuisine', 'Zone By The Park, 26/A, Phase 1, Electronic City, Bangalore'),
(97, 'Ciclo Cafe', 'Bengaluru', 'Indiranagar, East Bengaluru', 1000, 'Multicuisine', '948, 12th Main Road, Indiranagar, Bangalore'),
(98, '28 Shades', 'Bengaluru', 'Hebbal, North Bengaluru', 1000, 'Chinese,Italian,North Indian', 'Site No. 2,3,4, Hebbal Kempapura, Outer Ring Road, Bengaluru'),
(100, 'Stories', 'Bengaluru', 'Electronic City, South Bengaluru', 800, 'Multicuisine', '42/ 4C, Ananda Reddy Layout Phase 2, Electronic City, Bangalore'),
(101, 'Tangerine', 'Bengaluru', 'Davanam Sarovar Portico Suites, Bengaluru', 1400, 'Multicuisine', 'Davanam Sarovar Portico Suites, Davanam Plaza, Hosur Main Road, BTM, Bengaluru'),
(102, '3G\'s - Gulp & Groove', 'Bengaluru', 'Malleshwaram, West Bengaluru', 1000, 'Chinese,Italian,North Indian', '343, 8th A Main Road, Milk Colony, Subramanyanagar, 17th Cross, Malleshwaram, Bangalore'),
(103, 'The Sugar Factory', 'Bengaluru', 'Le Meridien, Bengaluru', 2000, 'Finger Food', 'Le Meridien, 28, Sankey Road, Bengaluru'),
(104, 'Bieregarten', 'Bengaluru', 'Whitefield, East Bengaluru', 1500, 'Continental, European, BBQ, Chinese, Asian ', '2, Doddanekkundi, Whitefield Road, Mahadevpura, Whitefield, Bangalore<br>080 49652555'),
(105, 'Barbeque Nation', 'Bengaluru', 'Ascendas Park Square, Whitefield', 1800, 'BBQ,Multicuisine', 'Ascendas Park Square Mall, Whitefield, Bengaluru'),
(106, 'Herbs & Spices', 'Bengaluru', 'Whitefield, East Bengaluru', 1000, 'Multicuisine', '154, Main Road, Whitefield, Bengaluru'),
(107, 'Chianti Italian Restaurant', 'Bengaluru', 'Whitefield, East Bengaluru', 1500, 'Italian', 'G-01, Park Square Mall, ITPB, Whitefield Road, Bengaluru'),
(108, 'M Cafe', 'Bengaluru', 'Bengaluru Marriott Hotel Whitefield', 2500, 'All Day Dining', 'Bengaluru Marriott Hotel, 75, EPIP Area, Whitefield, Bengaluru'),
(109, 'Oliver\'s Pub & Diner', 'Bengaluru', 'Whitefield, East Bengaluru', 1000, 'Cafe,Multicuisine', '2, Seetharampalya, ITPL Main Road, Whitefield, Bengaluru'),
(110, 'Coyla', 'Bengaluru', 'Four Points by Sheraton, Bengaluru', 1700, 'North Indian', 'Four Points by Sheraton Bengaluru, 43/3, Whitefield Main Road, Whitefield, Bengaluru'),
(111, 'The Eatery', 'Bengaluru', 'Four Points by Sheraton, Bengaluru', 1400, 'All Day Dining', 'Ground Floor, Forum Mall, Hosur Road, Koramangala 7th Block, Bangalore<br>+91 9845570868\n'),
(112, '612 East', 'Bengaluru', 'Indiranagar, East Bengaluru', 1200, 'Multicuisine', '612, 12th Main, Above Entertainment Store, HAL 2nd Stage, Indiranagar, Bangalore<br>080 49652779\n'),
(113, 'Kake Da Punjabi Dhabba', 'Chennai', 'Perungudi, Chennai', 600, 'Punjabi,North Indian', '16, MGR Salai, Kandanchavadi, Perungudi, Chennai'),
(114, 'Drizzle By The Beach', 'Chennai', 'Palavakkam, Chennai ', 1000, 'Multicuisine', '69, 2nd Main Rd, VGP Layout Part 3, Palavakkam, Chennai'),
(115, 'Latitude By The Park', 'Chennai', 'Nungambakkam, Chennai', 1499, 'European', 'Rutland Gate, 4th Street, Nungambakkam, Chennai<br>044 28330989'),
(116, 'Chennai 24', 'Chennai', 'Hotel Pratap Plaza, Chennai', 600, 'North Indian', 'Hotel Pratap Plaza, 168/96, Kodambakkam High Road, Mahalingapuram, Kodambakkam, Chennai<br>7861004444'),
(117, 'Robustaa Kitchen', 'Chennai', 'Nungambakkam, Chennai', 700, 'Multicuisine', '16/1, Le Elestral Building, 2nd Floor, Wallace Garden 2nd Street, Nungambakkam, Chennai'),
(118, 'Mainland China', 'Chennai', 'Teynampet, Chennai', 1000, 'Chinese', 'Srinivas Towers, NBR 5, Cenotaph Road, Teynampet, Chennai<br>7861004443'),
(119, 'The Coffee Place', 'Chennai', 'Ramada Plaza Chennai', 1000, 'All Day Dining,Cafe', 'Ramada Plaza Chennai, 36 Sardar Patel Road, Guindy, Chennai<br>044 45653333'),
(120, 'Spiizee Madras', 'Chennai', 'Adyar, Chennai', 600, 'Multicuisine', '28/1, 2nd Avenue, Indira Nagar, Adyar, Chennai\n'),
(121, 'Sitcom-The Drama Diner', 'Chennai', 'Neelankarai, Chennai', 999, 'Cafe,Fast Food', '145, East Coast Road, Neelankarai, Chennai'),
(122, 'Bike & Barrel', 'Chennai', 'The Residency Towers, Chennai', 2300, 'Finger Food', '115, Pondy Bazaar, Sir Thyagaraya Road, T. Nagar, Chennai'),
(123, 'Flower Drum', 'Chennai', 'Adyar, Chennai', 800, 'Chinese', '2/1, 4th Floor, Near Adyar signal Junction, Adyar, Chennai.'),
(124, 'Boats', 'Chennai', 'Besant Nagar, Chennai', 2000, 'Finger Food', '17, 5th avenue, Besant Nagar, Chennai'),
(125, ' Brickhouse Bistro', 'Chennai', 'Besant Nagar, Chennai', 600, 'American', '17/15 Orur Kuppam Road, 5th Avenue, Besant Nagar, Chennai'),
(126, 'Hola Restaurante', 'Chennai', 'Besant Nagar, Chennai ', 1200, 'Multicuisine', '6/1, 2nd Floor, 4th Main Road, Besant Nagar, Chennai'),
(127, 'Royal Indianaa', 'Chennai', 'The Accord Metropolitan, Chennai', 1500, 'North Indian', 'The Accord Metropolitan Hotel, 35, T. Nagar, Chennai'),
(128, 'Cafe HQ', 'Kolkata', 'Tollygunge, Kolkata', 600, 'Multicuisine', '26, New bikramgarh, deepsikh appartments, Kolkata'),
(129, 'Over Dose', 'Kolkata', 'Desapriya Park, Kolkata', 600, 'Chinese', '23, Lake Terrace, Desapriya Park, Kolkata'),
(130, 'The Food Storey', 'Kolkata', 'Southern Avenue, Kolkata', 1000, 'Cafe', 'P241, Lake Road, Near Lake Road CCD, Southern Avenue, Kolkata'),
(131, 'Hit Wicket', 'Kolkata', 'Ballygunge, Kolkata', 800, 'Fast Food,Multicuisine', '45, Jhowtalla Road, Ballygunge, Kolkata'),
(132, 'Scarlet shakeshack & patisserie', 'Kolkata', 'Aauris, Kolkata', 500, 'Multicuisine', 'Aauris Hotel, 4, Robinson Street, Theatre Road, Kolkata'),
(133, 'Texan Barbacon', 'Kolkata', 'Hindustan Park, Kolkata', 1000, 'Multicuisine', '37/1, Purna Das Rd, Triangular Park, Hindustan Park, Kolkata'),
(134, 'Hola', 'Kolkata', 'Southern Avenue, Kolkata', 1000, 'Chinese,Italian,North Indian,Multicuisine', '40A, Dr. Sarat Banerjee Road, Southern Avenue, Kolkata'),
(135, 'Mae Kong', 'Kolkata', 'Kenilworth Hotel, Kolkata', 1200, 'oriental', '1&2 Little Russel Street, Kolkata<br>7861004444'),
(136, 'First Innings', 'Kolkata', 'The Stadel, Kolkata', 1200, 'Indian,Pan Asian', 'The Stadel, Vivekananda Yuba Bharati Krirangan, Salt Lake Stadium, Gate No.3, Salt Lake, Sector 3, Kolkata'),
(137, 'Kouzina Mining Co.', 'Kolkata', 'Sector 1, Salt Lake', 1200, 'North Indian,oriental', 'AD - 79, Sector 1, Salt Lake City, Kolkata'),
(138, 'Mirage', 'Kolkata', 'The Stadel, Kolkata', 2500, 'Multicuisine', 'The Stadel, Vivekananda Yuba Bharati Krirangan, Salt Lake Stadium, Gate No.3, Salt Lake, Sector 3, Kolkata<br>+91 8777200328<br>+91 8436069792'),
(139, 'Cafe Swiss', 'Kolkata', 'Swissotel Kolkata Neotia Vista', 2900, 'Multicuisine', 'Swissotel Kolkata Neotia Vista, City Centre New Town, Action Area 2D, Plot No.11/5, New Town, Rajarhat, Kolkata<br>033 30990108'),
(140, 'Bhoomi', 'Kolkata', 'Vedic Village Spa Resort, Kolkata', 1499, 'Vedic Village Spa Resort, Kolkata', 'Vedic Village Spa Resort, Shikharpur, Bagu, Rajarhat, Kolkata'),
(141, 'Mill & Co. - Renaissance hotel ', 'Ahmedabad', 'Sola, West Ahmedabad', 1200, 'cafe', 'Renaissance Hotel, Behind Ganesh Meridian, SG Highway, Sola, Ahmedabad'),
(142, 'Social Knights', 'Ahmedabad', 'Navrangpura, West Ahmedabad', 800, 'Beverages,Cafe', 'Dynamic House, besides HDFC bank, Navrangpura, Ahmedabad'),
(143, 'R Kitchen - Renaissance hotel', 'Ahmedabad', 'Sola, West Ahmedabad', 1800, 'European,North Indian', 'Renaissance Hotel, SG Highway, Sola, Ahmedabad'),
(144, 'Sugar\'n\'Spice', 'Ahmedabad', 'Gurukul, West Ahmedabad', 900, 'Multicuisine', '3, Shivalik III, Near Mile Stone Complex, Gurukul, Ahmedabad'),
(145, 'Madro\'s Pizza', 'Ahmedabad', 'Navrangpura, West Ahmedabad', 400, 'Multicuisine', 'Aeon Complex, Opposite Navkar Insitute, Vijay Cross Road, Navrangpura, Ahmedabad'),
(146, 'Sadguru Restaurant', 'Ahmedabad', 'Vastrapur, West Ahmedabad', 900, 'Multicuisine', '111-113, A-Wing, First Floor, 1st Floor, Amrapali Lake View, Vastrapur, Ahmedabad'),
(147, 'SKYZ Restaurant & Banquet', 'Ahmedabad', 'Prahlad Nagar, West Ahmedabad', 1200, 'Multicuisine', '3rd Floor, Shivalik Arcade, Prahladnagar, Prahlad Nagar, Ahmedabad'),
(148, 'The Square', 'Ahmedabad', 'Novotel, Ahmedabad', 1500, 'Multicuisine', 'Novotel, Iscon Cross Road, S.G. Highway, Satellite, Ahmedabad'),
(149, 'Pimiento', 'Ahmedabad', 'Gota, North Ahmedabad', 600, 'Multicuisine', 'Opposite Nirma University, Near Modi Shikshan, Behind Balaji Temple, Off S.G. Highway, Ahmedabad'),
(150, 'Bayleaf ', 'Ahmedabad', 'Courtyard By Marriott, Ahmedabad', 2200, 'North Indian', 'Courtyard By Marriott, Ramdevnagar Cross Road, Satellite, Ahmedabad'),
(151, 'MoMo Cafe', 'Ahmedabad', 'Courtyard By Marriott, Ahmedabad', 1300, 'Multicuisine', 'Courtyard By Marriott, Ramdevnagar Cross Road, Satellite, Ahmedabad'),
(152, 'Havmor Restaurant - Prahladnagar', 'Ahmedabad', 'Prahlad Nagar, West Ahmedabad', 800, 'Multicuisine', 'G.F. 13, Shivalik Arcade, Near 100 Ft Ring Road, Prahlad Nagar, Ahmedabad'),
(153, 'Kailash Parbat', 'Ahmedabad', 'Prahlad Nagar, West Ahmedabad', 700, 'North Indian', '5, Dev Aurum, Prahlad Nagar, Ahmedabad'),
(154, 'Sphere Lounge', 'Ahmedabad', 'Prahlad Nagar, West Ahmedabad', 1100, 'Cafe,Multicuisine', 'Hotel Ramada, Opposite Prahlad Nagar Garden, Prahlad Nagar, Ahmedabad'),
(155, 'Publiq', 'Pune', 'Wakad, Pune', 800, 'Chinese,European,Indian,Seafood', '901, White Square, Hinjewadi Wakad Road, Wakad, Pune'),
(156, 'Thikana ', 'Pune', 'Wakad, Pune', 700, 'Multicuisine', '401 - 403, White Square Building, Hinjawadi Wakad Road, Wakad, Pune'),
(157, 'Malaka Spice', 'Pune', 'Koregaon Park, Pune', 1999, 'Pan Asian', 'Lane 5, North Main Road, Koregaon Park, Pune'),
(158, 'Hard Rock Cafe', 'Pune', 'Koregaon Park, Pune', 2000, 'Cocktail Menu', '81/82, Pyramid Complex, Mundhwa Road, Koregaon Park Annexe, Pune'),
(159, 'SodaBottleOpenerWala', 'Mumbai', 'High Street Pheonix, Lower Parel', 1300, 'Parsi', '2nd Floor, North Skyzone, High Street Phoenix, Senapati Bapat Marg, Lower Parel, Mumbai'),
(160, 'Pondichery Cafe', 'Mumbai', 'Sofitel Mumbai, Mumbai', 2500, 'Multicuisine', 'Sofitel Hotel, C 57, Bandra Kurla Complex, Bandra East, Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_registration`
--

CREATE TABLE `hotel_registration` (
  `id` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `guest` int(11) NOT NULL,
  `timing` time NOT NULL,
  `dor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_registration`
--

INSERT INTO `hotel_registration` (`id`, `hid`, `user_id`, `guest`, `timing`, `dor`) VALUES
(1, 125, '3', 1, '05:30:00', '2018-03-30'),
(2, 126, '3', 3, '06:30:00', '2018-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`) VALUES
(1, 'abc', 'ab@gmail.com', 8976637811, 'abc'),
(2, 'akash', 'akash@gmail.com', 8689925324, 'password'),
(3, 'yukta', 'yukta@gmail.com', 9284574773, 'password'),
(4, 'gaurav', 'gaurav@gmail.com', 8828262618, 'password'),
(5, 'Harsh', 'harshkukreja99@gmail.com', 9920659378, 'kk'),
(6, 'Gaurav Punjabi', 'gaurav.punjabi6@icloud.com', 8828262618, 'password'),
(7, 'abc', 'abc12@gmail.com', 989830002, 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hotel_registration`
--
ALTER TABLE `hotel_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=161;

--
-- AUTO_INCREMENT for table `hotel_registration`
--
ALTER TABLE `hotel_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
