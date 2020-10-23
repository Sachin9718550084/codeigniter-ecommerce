-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2019 at 07:10 AM
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
-- Database: `maccenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','inactive') NOT NULL,
  `name` varchar(191) DEFAULT 'Default',
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `created_at`, `status`, `name`, `email`, `mobile`, `password`, `remember_token`) VALUES
(1, '2019-08-26 09:08:47', '', 'Kumar Gaurav', 'gaurav@mailinator.com', '9045642302', '21232f297a57a5a743894a0e4a801fc3', '5d662d085e02c');

-- --------------------------------------------------------

--
-- Table structure for table `blog-categories`
--

CREATE TABLE `blog-categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT '0',
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT '0',
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featureImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `publish` tinyint(4) NOT NULL DEFAULT '1',
  `isParent` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `seo_url`, `image`, `description`, `publish`, `isParent`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'I am editable Category', 'dfdf', '4.jpg', '<p>dfdfdf</p>\r\n', 0, '', 'dfdf', 'dfdf', 'dfdfdf', '2019-03-28 04:44:20', '2019-03-28 05:12:03'),
(5, 'I an Add Category', 'i-am-add-category', '81.jpg', '<p>Hi</p>\r\n', 1, '1', 'Admin', 'Admin', 'Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortDescription` longtext COLLATE utf8mb4_unicode_ci,
  `mediumDescription` longtext COLLATE utf8mb4_unicode_ci,
  `longDescription` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `bannerImage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `name`, `seo_url`, `shortDescription`, `mediumDescription`, `longDescription`, `image`, `meta_title`, `meta_keywords`, `meta_description`, `bannerImage`, `publish`, `created_at`, `updated_at`) VALUES
(2, 'TERMS & CONDITIONS', 'terms-and-condition', '', '', '<p>All estimates given by Morgan Web Technology are based upon the understanding about the requirements of the client. Any changes or improvements requested by the client after the mutually agreed time frame will be chargeable and company will decide these charges. It is advised that the client should clear all his doubts regarding payments before the start of the project.</p>\r\n\r\n<p>By signing the quote or the estimate, client agrees to all the terms and conditions of the project. The company encourages clients to provide a synopsis of his requirements. In the absence of such a document, Morgan Web Technology proceeds according to its understanding of the requirements of the client. The company shall not be responsible for any discrepancy pointed out by the client because of unclear instructions.</p>\r\n\r\n<p>Every project is assigned a definite number of man hours and the client has to pay for any length time that is required for the completion of the project beyond this time frame. Morgan Web Technology takes care to complete the project within the given deadline.</p>\r\n\r\n<p>If any bugs are reported by the client during the project, they shall be attended to without any additional charges by the company. However, any rework requested by the client once the project has been completed will attract additional charges.</p>\r\n\r\n<p>Content related to website applications and other materials must be provided to the company within 2 weeks of the signing of the estimate. Morgan Web Technology will not be responsible for any delays in the completion of the project because of such delays.</p>\r\n\r\n<p>If the client stops a project midway for any length of time, he will be liable to pay administrative charges as decided by the company on a weekly basis.</p>\r\n\r\n<p>Morgan Web Technology undertakes no responsibility for the functionalities of open source codes and products like WordPress, Joomla etc. The company recommends its clients to obtain updates as and when they are available.</p>\r\n\r\n<p>Morgan Web Technology will not be responsible for any delays in the completion of the project because of adverse unforeseen circumstances. The client hereby agrees to understand the reasons behind such delays and promises not to raise any disputes.</p>\r\n\r\n<p>Renewal of domain registration is not included in the cost of the project. The client agrees to pay the charges when the need for renewal of domain arises.</p>\r\n\r\n<p>Morgan Web Technology dopes all communication with its clients through emails. It is the responsibility of the client to check and respond to our emails promptly.</p>\r\n\r\n<p>Morgan Web Technology reserves the right to change terms and conditions at any time it deems necessary. Clients are encouraged to take a look at these terms and conditions frequently to remain updated.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '11.jpg', 'Admin', 'Admin', 'Admin', NULL, 1, '2019-03-16 03:17:09', '2019-06-10 01:13:04'),
(4, 'Refund Policy', 'refund-policy', NULL, NULL, '<p>Morgan Web Technology has a large portfolio covering all its services to give clients a glimpse of the quality of service they can expect from us. It is advised that you take a view at the samples in each service section before giving us an order. You can make further queries in this regards to clear all your doubts before placing an order.</p>\r\n\r\n<p>Advance deposits for various services are charged by Morgan Web Technology and they are non refundable. Payments in instalments are charged for custom web design and other internet based services and they should be treated as a courtesy form the company towards the client. In some cases, full payment of the service shall be required by the company as the money is paid to the experts in advance for the completion of the project. In such cases, the money paid is non refundable if the client cancels the project at any stage of its completion.</p>\r\n\r\n<p>The estimates for the completion of a project of the client given by Morgan Web Technology are only roughly calculated and they can increase depending upon the time frame and the features of the services required by the client. The client shall be informed about cost escalation and the project shall be completed only with his prior approval in this regard.</p>\r\n\r\n<p>By accepting the quote given by the company, the client agrees to the terms and condition of the payment of the company. The client can give his acceptance in writing by email or by signing the quote.</p>\r\n\r\n<p>Refunds are possible only when no work has been initiated by the company after the singing of the quote. Partial refunds are possible in case some portion of the project has already been completed. Under these circumstances, the percentage of the advance deposit to be returned will be calculated by Morgan Web Technology on the basis of its efforts and expenses and its decision shall be binding on the client.</p>\r\n\r\n<p>Please note that no refunds are possible if the client is not satisfied with the quality of work done by the company and the services have already been provided. It is the responsibility of the client to bring to notice of the company about quality immediately. No negotiations for refund will be entertained by the company at a later date after the completion of the project.</p>', NULL, 'morgan web technology', 'morgan web technology', 'morgan web technology', NULL, 1, '2019-03-16 03:18:56', '2019-06-10 01:13:03'),
(5, 'About US', 'about-us', NULL, NULL, '<div class=\"about-wrapper mtb-100\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-4 col-sm- col-xs-4\"><img class=\"img-responsive\" src=\"http://morganwebtechnology.com/user/images/profileimages/about.jpg\" /></div>\r\n\r\n<div class=\"col-md-8 col-xs-8 col-sm-12\">\r\n<p>Morgan Web Technology was founded way back in 2009. The sole aim of the company was to cater to the requirements of businesses desirous of establishing a strong online presence. The company has helped hundreds of its clients in the fields of web development, internet marketing, and content creation so far. We have made it possible for our clients to be highly visible online. We have also allowed them to communicate effectively with their customers with the help of powerful content.</p>\r\n\r\n<p>We are masters in creating content that not just attracts large number of visitors but also forces them to stay longer on your website. Our content is designed to increase chances of conversion of your visitors which leads to higher sales and more profits for your business. We have a long list of satisfied customers who keep coming back to us for their new projects.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"lecturers-area ptb-110 gray-bg\">\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-12\">\r\n<div class=\"section-title text-center mb-60\">\r\n<h1 class=\"uppercase\">About Our Company</h1>\r\n\r\n<div class=\"separator my mtb-15\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-md-12\"><img alt=\"ankur goyal\" class=\"img-responsive\" src=\"http://morganwebtechnology.com/user/images/profileimages/team4.jpg\" style=\"float:left; margin:0 20px 0 0\" />\r\n<p>Welcome to Morgen Web Technology ,</p>\r\n\r\n<p>Our pricing will give a feel good factor to you We understand the budget constraints of our clients. This is the reason why we have kept our writing charges so affordable. Yes, you can accuse us of being so cheap but this is how we feel we can serve the interests of a large number of our clients.</p>\r\n\r\n<p>If you are trying to build a storing online presence, good quality content is what you cannot do without. We can help you in establishing strong brand value for your business. Contact us today to know how we can help you through our alluring and attention grabbing content. We will be more than happy to play a part in your success.</p>\r\n\r\n<p>Morgan Web Technology has expert designers who can create wonderful PHP websites for clients. This server side scripting language which is a general purpose programming language is beautifully used by us to create mesmerizing websites. We have designed top quality business websites using PHP for our clients. They simply love these websites because they are feature rich and also highly functional. PHP powered websites are growing in popularity these days because they are very user friendly.</p>\r\n</div>\r\n<!--  <div class=\"col-md-6\">\r\n <p style=\"text-align:left;\"><strong>Director<br>\r\n\r\nMr. Ankur Goyal</strong></p>\r\n </div>\r\n \r\n <div class=\"col-md-6\">\r\n <p style=\"text-align:right;\"><strong>Chairman<br>\r\nMr. Gaurav \r\n</strong></p> --></div>\r\n</div>\r\n</div>', NULL, 'morgan web technology', 'morgan web technology', 'morgan web technology', NULL, 1, '2019-03-16 03:19:32', '2019-06-10 01:13:02'),
(6, 'contact US', 'contact-us', NULL, NULL, NULL, NULL, 'Morgan Web Technology', 'Morgan Web Technology', 'Morgan Web Technology', NULL, 1, '2019-03-17 19:32:24', '2019-03-17 19:32:24'),
(9, 'Privacy POlicy', 'privacy-policy', '', '', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac consequat quam. Ut sit amet massa tortor. Proin sed mollis eros, sed ullamcorper dui. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec commodo orci sed lacinia congue. Sed lacinia, neque id eleifend porta, eros leo mollis nibh, vel scelerisque mauris lacus ut nibh. Praesent id placerat lacus. Aenean quam ante, condimentum ut sollicitudin vitae, sodales non velit. Phasellus vulputate, lorem hendrerit auctor accumsan, magna ex fermentum magna, nec hendrerit sem metus eu mi.</p>\r\n\r\n<p>Vestibulum blandit mattis aliquam. Ut sed mauris finibus, rutrum lorem semper, facilisis sapien. Proin sit amet nisl sodales, consequat libero ut, rutrum metus. Donec turpis purus, molestie sed erat ac, cursus lacinia mauris. Sed elementum turpis lorem, eu aliquam neque sagittis et. Proin sit amet nulla vehicula nibh mattis vestibulum id at lacus. Phasellus egestas porta eros, quis posuere felis dapibus non. Vivamus pellentesque viverra porttitor. Curabitur dapibus, lectus ut luctus imperdiet, lacus neque congue ex, vel pretium enim diam et mi. Nullam eu eleifend nulla, et efficitur turpis.</p>\r\n', '2.jpg', 'Admin', 'Admin', 'Admin', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq-categories`
--

CREATE TABLE `faq-categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `faq_category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `faq_category_id`, `created_at`, `updated_at`) VALUES
(3, ' Are you an Apple Official Business Partner? ', ' Yes! We are Apple Official Business Partner.', NULL, NULL, NULL),
(4, ' Do you have Apple Certified Technicians?', ' Yes we do! All apple product repair are handled by Apple Certified Macintosh Technicians which ensures your Apple electronics are handled with the utmost care and technical efficiency.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','inactive') NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `mobile` varchar(199) DEFAULT NULL,
  `email` varchar(199) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `created_at`, `status`, `name`, `mobile`, `email`, `message`) VALUES
(2, '2019-08-26 10:27:16', 'active', 'Kumar Gaurav', '9045642302', 'gaurav@mailinator.com', 'HI i am admin');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Editable', 'Editable', '8.jpg', '2019-03-27 05:15:00', '2019-03-27 05:15:00'),
(18, 'Demo CI', 'HI i am admin', '1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our-clients`
--

CREATE TABLE `our-clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our-clients`
--

INSERT INTO `our-clients` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(5, '1', 'partners_img1.png', NULL, NULL),
(6, '2', 'partners_img2.png', NULL, NULL),
(7, '3', 'partners_img3.png', NULL, NULL),
(8, '4', 'partners_img4.png', NULL, NULL),
(9, '5', 'partners_img5.png', NULL, NULL),
(10, '6', 'partners_img6.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `our-teams`
--

CREATE TABLE `our-teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experiance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our-teams`
--

INSERT INTO `our-teams` (`id`, `name`, `message`, `image`, `email`, `mobile`, `profile`, `country`, `state`, `city`, `experiance`, `created_at`, `updated_at`) VALUES
(1, 'Gaurav Jaiswal', 'Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat', 'team3.jpg', 'ducatgaurav@Gmail.com', 'dffd', 'live4web.com', 'fdfg', 'fdfd', 'fdfgd', NULL, '2019-03-16 01:32:19', '2019-06-23 05:49:42'),
(3, 'Kumar Gaurav', 'Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat', 'team1.jpg', 'ducatgaurav@Gmail.com', 'dffd', 'live4web.com', 'fdfg', 'fdfd', 'fdfgd', '', '2019-03-16 01:32:19', '2019-06-23 05:49:42'),
(6, 'Shraddha', 'Hi i am admin', 'team2.jpg', 'ducatgaurav@gmail.com', '9045642302', '', '', '', '', NULL, NULL, NULL),
(7, 'Hi Guarav', 'fgfggfh', 'team21.jpg', '', '', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `title`, `author`, `image`, `link`, `description`, `created_at`, `updated_at`) VALUES
(3, 'JPIET', 'intuitgroup', 'avatar-10.jpg', 'http://intuitgroup.in', '', '2019-06-23 06:45:32', '2019-07-04 04:51:12'),
(8, 'Heloo', 'gaurav', 'avatar-1.jpg', 'fb', '\r\nHi i admin', NULL, NULL),
(9, 'Arcade', 'intuitgroup', 'avatar-4.jpg', 'http://intuitgroup.in', 'Hi i am second Admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `created_at`, `status`, `name`, `value`, `updated_at`) VALUES
(8, '2019-06-10 01:34:53', 'active', 'facebook', 'https://facebook.com/', '2019-06-10 01:34:53'),
(9, '2019-06-10 01:35:17', 'active', 'copyright', '© 2019 MAC CENTER | Contact Us. All Rights Reserved.', '2019-06-10 01:35:17'),
(10, '2019-06-23 05:32:42', 'active', 'twitter', 'http://twitter.com', '2019-06-23 05:32:42'),
(11, '2019-06-23 05:33:32', 'active', 'email', 'info@adixsoft.in', '2019-06-23 05:33:32'),
(12, '2019-06-23 05:34:10', 'active', 'phone', '08095581906, 07064448877, 08076524638', '2019-06-26 11:44:54'),
(14, '2019-06-23 05:36:25', 'active', 'contact-info', 'Plot C, Block 12E, Admiralty Way, Adjacent Ascon<br> Filling Station, Lekki Phase 1. Adeniran Ogunsanya<br>Shopping Mall, Shop C 11, First Floor Opposite,<br>KFC Surulere, Lagos. ', '2019-06-26 11:46:29'),
(15, '2019-06-23 05:36:58', 'active', 'linkedin', 'http://linked.in', '2019-06-23 05:36:58'),
(16, '2019-06-23 05:37:17', 'active', 'youtube', 'http://youtube.com', '2019-06-23 05:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('active','inactive') NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `image` varchar(191) NOT NULL,
  `link` varchar(191) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `status`, `name`, `image`, `link`, `description`) VALUES
(2, '2019-08-28 12:47:59', 'active', 'Slider1', 'banner_bg1.jpg', '', ''),
(3, '2019-08-28 12:47:59', 'active', 'Slider1', 'banner_bg1.jpg', '', ''),
(4, '2019-08-28 12:47:59', 'active', 'Slider1', 'banner_bg1.jpg', '', ''),
(5, '2019-08-28 12:47:59', 'active', 'Slider1', 'banner_bg1.jpg', '', ''),
(6, '2019-08-28 12:47:59', 'active', 'Slider1', 'banner_bg1.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `message`, `image`, `email`, `mobile`, `profile`, `country`, `state`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Gaurav Jaiswal', 'Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat', 'team3.jpg', 'ducatgaurav@Gmail.com', 'dffd', 'live4web.com', 'fdfg', 'fdfd', 'fdfgd', '2019-03-16 01:32:19', '2019-06-23 05:49:42'),
(3, 'Shraddha Jaiswal', 'Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat.Suspendisse eu erat quam. Vivamus porttitor eros quis nisi lacinia sed interdum lorem vulputate. Aliquam a orci quis nisi sagittis sagittis. Etiam adipiscing, justo quis feugiat', 'avatar-3.jpg', 'ducatgaurav@Gmail.com', 'dffd', 'live4web.com', 'fdfg', 'fdfd', 'fdfgd', '2019-03-16 01:32:19', '2019-06-23 05:49:42'),
(7, 'Suraj', 'Hi i am Admin', 'avatar-5.jpg', 'abc@gmail.com', '8826613944', 'PHP', 'India', 'Bihar', 'Jhajha', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blog-categories`
--
ALTER TABLE `blog-categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_categories_seo_url_unique` (`seo_url`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_seo_url_unique` (`seo_url`),
  ADD KEY `blog_category_id` (`blog_category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_seo_url_unique` (`seo_url`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cms_seo_url_unique` (`seo_url`);

--
-- Indexes for table `faq-categories`
--
ALTER TABLE `faq-categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs` (`faq_category_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our-clients`
--
ALTER TABLE `our-clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our-teams`
--
ALTER TABLE `our-teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `blog-categories`
--
ALTER TABLE `blog-categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq-categories`
--
ALTER TABLE `faq-categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `our-clients`
--
ALTER TABLE `our-clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `our-teams`
--
ALTER TABLE `our-teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blog_category_id` FOREIGN KEY (`blog_category_id`) REFERENCES `blog-categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs` FOREIGN KEY (`faq_category_id`) REFERENCES `faq-categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
