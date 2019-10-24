-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2019 at 09:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elevator`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `aboutId` int(10) UNSIGNED NOT NULL,
  `visionTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visionDescription` text COLLATE utf8mb4_unicode_ci,
  `visionImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutDescription` text COLLATE utf8mb4_unicode_ci,
  `aboutImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`aboutId`, `visionTitle`, `visionDescription`, `visionImage`, `aboutTitle`, `aboutDescription`, `aboutImage`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR MISSION', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><span style=\"color: rgb(102, 102, 102); font-family: Raleway, sans-serif; font-size: 16px; text-align: justify;\">Koch Elevator is a local family-owned elevator company that specializes in installation, repair and modernization of mobility equipment. We offer all levels of mobility solutions including: commercial elevators, residential elevators, wheelchair lifts, stair lifts, auto lifts, material lifts and ADA lifts and ramps.</span><br></p></body></html>\n', '1571732155.jpg', 'A LITTLE BIT ABOUT US', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><span style=\"color: rgb(102, 102, 102); font-family: Raleway, sans-serif; font-size: 16px; text-align: justify;\">Koch Elevator is a local family-owned elevator company that specializes in installation, repair and modernization of mobility equipment. We offer all levels of mobility solutions including: commercial elevators, residential elevators, wheelchair lifts, stair lifts, auto lifts, material lifts and ADA lifts and ramps.</span><br></p></body></html>\n', '1571732155about-info.jpg', '2019-10-22 02:02:18', '2019-10-22 02:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `created_at`, `updated_at`) VALUES
(1, 'Elevator', '2019-10-20 01:36:14', '2019-10-20 01:36:14'),
(2, 'Curran Vance', '2019-10-21 02:03:37', '2019-10-21 02:03:37');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `featureId` int(10) UNSIGNED NOT NULL,
  `productId` int(10) UNSIGNED NOT NULL,
  `featureTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureDescription` text COLLATE utf8mb4_unicode_ci,
  `featureImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureTitle2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureDescription2` text COLLATE utf8mb4_unicode_ci,
  `featureImage2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureFile2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureTitle3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureDescription3` text COLLATE utf8mb4_unicode_ci,
  `featureImage3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureFile3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`featureId`, `productId`, `featureTitle`, `featureDescription`, `featureImage`, `featureFile`, `featureTitle2`, `featureDescription2`, `featureImage2`, `featureFile2`, `featureTitle3`, `featureDescription3`, `featureImage3`, `featureFile3`, `created_at`, `updated_at`) VALUES
(1, 1, 'Elevette® Cable Drum', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><li>The quietest cable drum home elevator in the industry</li><li>Patented, space-saving monorail guiding system</li><li>Proprietary Control System: serial logic, self diagnostic, all-time safety monitoring</li><li>Drive system housed in machine room</li><li>Can be used for in-shaft and no-shaft elevators</li><li>For use with all Inclinator cab styles</li><li>1,000-lb. (453 kg) capacity with up to 18 sq. ft. (1.67 sq. meters) cab size - where allowed by code</li><li>500-lb. (226 kg) capacity with up to 15 sq. ft. (1.39 sq. meters) cab size - where allowed by code</li><li>Up to 40 ft. (12.19 meters) per minute travel speed</li><li>Travel up to 50 ft. (15.24 meters)</li><li>Can accommodate up to 6 landings</li><li>Emergency battery lowering</li><li>Pre-wire package</li><li>Cab gate &amp; door safety devices</li><li>Two Type A safety devices</li><li>Overrun switch</li><li>Slack cable disconnect</li></ul></body></html>\n', '1571729702.jpg', '1571729702feature2.png', 'Elevette® Hydraulic', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><li>Patented HydraRide system delivers a smooth ride and quiet operation</li><li>Patented, space-saving monorail guiding system</li><li>Proprietary Control System: serial logic, self diagnostic, all-time safety monitoring</li><li>Drive system housed in machine room</li><li>For in-shaft elevators only</li><li>For use with all Inclinator cab styles</li><li>950-lb. (430 kg) capacity with up to 18 sq. ft. (1.67 sq. meters) cab size - where allowed by code</li><li>Up to 40 ft. (12.19 meters) per minute travel speed</li><li>Travel up to 50 ft. (15.24 meters)</li><li>Can accommodate up to 6 landings</li><li>Emergency battery lowering</li><li>Pre-wire package</li><li>Aluminum corrosion-resistant lightweight tank</li><li>Power unit requires much less hydraulic fluid than other brands</li><li>Cab gate &amp; door safety devices</li><li>Two Type A safety devices</li><li>Overrun switch</li></ul></body></html>\n', '1571729702feature3.jpg', '1571729702feature4.png', 'Elevette® MRL Geared', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><li>Patented HydraRide system delivers a smooth ride and quiet operation</li><li>Patented, space-saving monorail guiding system</li><li>Proprietary Control System: serial logic, self diagnostic, all-time safety monitoring</li><li>Drive system housed in machine room</li><li>For in-shaft elevators only</li><li>For use with all Inclinator cab styles</li><li>950-lb. (430 kg) capacity with up to 18 sq. ft. (1.67 sq. meters) cab size - where allowed by code</li><li>Up to 40 ft. (12.19 meters) per minute travel speed</li><li>Travel up to 50 ft. (15.24 meters)</li><li>Can accommodate up to 6 landings</li><li>Emergency battery lowering</li><li>Pre-wire package</li><li>Aluminum corrosion-resistant lightweight tank</li><li>Power unit requires much less hydraulic fluid than other brands</li><li>Cab gate &amp; door safety devices</li><li>Two Type A safety devices</li><li>Overrun switch</li></ul></body></html>\n', '1571729702feature5.jpg', '1571729702feature6.png', '2019-10-22 00:49:35', '2019-10-22 01:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_16_055644_create_summernotes_table', 1),
(4, '2019_10_17_072256_create_categories_table', 1),
(5, '2019_10_17_072906_create_products_table', 1),
(6, '2019_10_17_075028_create_services_table', 1),
(7, '2019_10_17_075154_create_about_us_table', 1),
(8, '2019_10_17_075213_create_companies_table', 1),
(9, '2019_10_17_083509_create_features_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(10) UNSIGNED NOT NULL,
  `categoryId` int(10) UNSIGNED NOT NULL,
  `productTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productTitle2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productDescription2` text COLLATE utf8mb4_unicode_ci,
  `productImage2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `productFile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `categoryId`, `productTitle`, `productDescription`, `productImage`, `productTitle2`, `productDescription2`, `productImage2`, `productFile`, `created_at`, `updated_at`) VALUES
(1, 1, 'HOME ELEVATORS', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif; background-color: rgb(247, 247, 247); text-align: justify;\">Home elevators are smaller than commercial elevators. Typically, a home elevator can accommodate three or four adults or two people with one in a wheelchair. Floor size can be up to 18 sq. ft. (1.67 sq. meters) &ndash; where allowable by code. 500-lb. (226 kg), 950-lb. (430kg) and 1,000-lb (453 kg) weight capacities are available. They are usually designed to complement or replicate the home&rsquo;s interior or a homeowner&rsquo;s custom elements.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif; background-color: rgb(247, 247, 247); text-align: justify;\">Architects love the near endless design possibilities. Every product is skillfully hand-made and finished one-at-a-time, making customization possible. We have built a strong reputation in the Reno/ Lake Tahoe area by providing exceptional customer service and delivering a clean reliable product.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif; background-color: rgb(247, 247, 247); text-align: justify;\">Contact Nick Koch by email at&nbsp;<a href=\"mailto:nick@kochelevator.com\" target=\"_blank\" style=\"color: rgb(0, 158, 255); transition: all 0.4s ease-in-out 0s; font-weight: 600;\">nick@kochelevator.com</a>&nbsp;or by phone at 775-247-8820 for more information.</p></body></html>\n', '1571721891.jpg', NULL, '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><div id=\"sppb-addon-1551382523274\" class=\"clearfix\" style=\"box-shadow: rgb(255, 255, 255) 0px 0px 0px 0px; margin: 0px 0px 30px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><div class=\"sppb-addon sppb-addon-text-block  \"><div class=\"sppb-addon-content\"><div style=\"text-align: justify;\">Choose a standard model or a one-of-a-kind elevator. Inclinator&rsquo;s Elevette&reg; is available in five standard cab styles, three drive system types, many door configurations and the most custom features and accessory options. Elevette can be placed in an interior or exterior elevator shaft or in no shaft &hellip; running up the center of open winding stairs, next to stairways and where no stairs exist.</div></div></div></div><div id=\"sppb-addon-1551382523283\" class=\"clearfix\" style=\"box-shadow: rgb(255, 255, 255) 0px 0px 0px 0px; margin: 0px 0px 30px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><div class=\"sppb-addon sppb-addon-text-block  \"><div class=\"sppb-addon-content\"><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square;\"><li>Custom cab sizes up to 18 sq. ft. (1.67 sq. meters) where allowed by code</li><li>Gate or door openings on 1, 2 or 3 sides</li><li>Nearly all wood species available</li><li>Stained or painted in factory or on site</li><li>Commercial-grade laminate flooring with simulated wood grain finish</li><li>Unfinished oak veneer flooring available to accommodate on-site flooring</li><li>Collapsible or accordion fold gate(s)</li><li>Automatic gate and door operators available</li><li>Two LED ceiling lights standard</li><li>Flat wood handrail standard (round metal available)</li><li>Cab Operating Panel in elevator, Hall Station at each landing</li><li>Custom accessories and finishing available</li></ul></div></div></div></body></html>\n', '1571721891image2.jpg', '1571724233image3.png', '2019-10-21 23:24:51', '2019-10-22 00:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serviceId` int(10) UNSIGNED NOT NULL,
  `serviceTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `serviceImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenanceTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maintenanceDescription` text COLLATE utf8mb4_unicode_ci,
  `maintenanceImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultantTitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `consultantDescription` text COLLATE utf8mb4_unicode_ci,
  `consultantImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serviceId`, `serviceTitle`, `serviceDescription`, `serviceImage`, `maintenanceTitle`, `maintenanceDescription`, `maintenanceImage`, `consultantTitle`, `consultantDescription`, `consultantImage`, `created_at`, `updated_at`) VALUES
(1, 'SERVICES', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><div id=\"sppb-addon-1551305689675\" class=\"clearfix\" style=\"box-shadow: rgb(255, 255, 255) 0px 0px 0px 0px; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><div class=\"sppb-addon sppb-addon-text-block  \"><div class=\"sppb-addon-content\"><div style=\"text-align: justify;\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\">Koch Elevator is committed to providing you with exceptional service through the entire project. Big or small we are detail oriented and strive to deliver a quality end product.</p></div></div></div></div><div id=\"sppb-addon-1551305689684\" class=\"clearfix\" style=\"box-shadow: rgb(255, 255, 255) 0px 0px 0px 0px; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><div class=\"sppb-addon sppb-addon-text-block  \"><div class=\"sppb-addon-content\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\"><span style=\"font-size: 12pt;\">Commercial Services</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square;\"><li>New Installation</li><li>Monthly Maintenance</li><li>Repair</li><li>Modernization</li><li>Testing</li><li>Consulting</li></ul></div></div></div><div id=\"sppb-addon-1551305689774\" class=\"clearfix\" style=\"box-shadow: rgb(255, 255, 255) 0px 0px 0px 0px; margin: 0px 0px 30px; color: rgb(102, 102, 102); font-family: Raleway, sans-serif;\"><div class=\"sppb-addon sppb-addon-text-block  \"><div class=\"sppb-addon-content\"><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\"><span style=\"font-size: 12pt;\">Residential Services</span></p><ul style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px 0px 0px 40px; list-style-type: square;\"><li>Residential Elevator</li><li>Stairlifts</li><li>Wheelchair Lifts</li><li>Dumbwaiters</li><li>Funicular Lifts</li></ul></div></div></div></body></html>\n', '1571735111.jpg', 'RESIDENTIAL & COMMERCIAL MAINTENANCE', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p><span style=\"color: rgb(102, 102, 102); font-family: Raleway, sans-serif; text-align: center;\">Koch Elevator provides over 200 years of combined skilled elevator professionals that deliver quality maintenance on all elevators. If you want a professional company with a local feel contact us today.</span><br></p></body></html>\n', '1571735111feature2.jpg', 'CONSULTING', '<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.0 Transitional//EN\" \"http://www.w3.org/TR/REC-html40/loose.dtd\">\n<html><body><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(37, 41, 46); font-family: Raleway, sans-serif; background-color: rgb(247, 247, 247); text-align: justify;\">Owner Mike Koch has more than 30 years in the elevator industry and brings a non biased professional perspective to consulting on elevator projects. He also brings along the knowledge of his team that carries over 200 years of combined elevator industry experience. If you are looking for a company who has their hands on elevators everyday and understands what works give us a call.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(37, 41, 46); font-family: Raleway, sans-serif; background-color: rgb(247, 247, 247); text-align: justify;\">Contact Mike Koch by email at&nbsp;<a href=\"mailto:mike@kochelevator.com\" target=\"_blank\" style=\"color: rgb(0, 158, 255); transition: all 0.4s ease-in-out 0s; font-weight: 600;\">mike@kochelevator.com</a>&nbsp;or by phone at 775-690-8160.</p></body></html>\n', '1571735111feature3.jpg', '2019-10-22 03:05:11', '2019-10-22 03:16:32');

-- --------------------------------------------------------

--
-- Table structure for table `summernotes`
--

CREATE TABLE `summernotes` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `biography`, `dob`, `phone`, `email`, `password`, `user_type`, `facebook`, `twitter`, `linkedin`, `image_url`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Hello I am Admin', '02.01.1990', '012365478954', 'admin@gmail.com', '$2y$10$1aLMg8gNlaOlWc/HZeI6gustbaG19lqsM9s5RflGpzVLvP90JbHRa', '1', NULL, NULL, NULL, NULL, 'bajOlEQ8y4VWunzsR6nMAGBZhEo3qih867u7pBxztVUjgDPT4SEVoQeiM3br', '2019-10-20 01:35:19', '2019-10-20 01:35:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`aboutId`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`featureId`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `summernotes`
--
ALTER TABLE `summernotes`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `aboutId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `featureId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serviceId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `summernotes`
--
ALTER TABLE `summernotes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
