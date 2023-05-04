-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2023 at 03:58 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myportfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(255) NOT NULL,
  `about_subtitle` text NOT NULL,
  `profile_pic` text NOT NULL,
  `about_desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_subtitle`, `profile_pic`, `about_desc`) VALUES
(1, '', 'About Me nnnn', '1672909242eyob.png', 'I\'m a creative Full Stack Web Developer, and I\'m very passionate and dedicated to my work. With few years experience as a professional Full Stack Developer, I have acquired the skills necessary to build great, appealing, and premium websites that meet the latest web standards.\r\n\r\nDetail-orientated Web Developer adept at interpreting blueprints, working with others, and meeting production deadlines. Skilled at quickly learning new processes, technologies, and machinery. Self-motivated with strong organizational and time management abilities. Most importantly, I\'m constantly trying to learn new skills to improve myself and my work.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `admin_profile` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `admin_profile`, `email`, `password`) VALUES
(1, 'admin', '167143121717159290_663558620513438_3720563233746762121_o.jpg', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `address`, `email`, `mobile`) VALUES
(1, 'Addis Ababa,Ethiopia', 'admin@gmail.com', '0900000000');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `showicons` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `subtitle`, `showicons`) VALUES
(1, 'Atakilt Yakob', ' Full stack web developer  , Electrical Engineer(BSC) Control Engineer(MSC)', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

DROP TABLE IF EXISTS `personal_info`;
CREATE TABLE IF NOT EXISTS `personal_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `label` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `label`, `value`) VALUES
(1, 'Website', 'www.doalongme.com'),
(3, 'Mobile', '9999999999');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_pic` text NOT NULL,
  `project_type` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_link` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `project_pic`, `project_type`, `project_name`, `project_link`) VALUES
(5, '1672886079netflix.png', 'WEBSITE', 'Netflix clone with react', 'https://netflix-clone-b098c.web.app/'),
(6, '1672886169appleB.jpeg', 'WEBSITE', 'Apple website clone with JavaScript', 'https://apple-bootstrap.pages.dev/'),
(7, '1672886231amazon.png', 'SOFTWARE', 'Amazon clone with react', 'https://front-react-b0ade.web.app/'),
(8, '1672886314appleR.jpeg', 'SOFTWARE', 'Apple website clone with React.js', 'https://apple-react-clone-9aad6.firebaseapp.com/'),
(9, '1672886455city.ico', 'SOFTWARE', 'citypromotionethiopia.com website with HTML,CSS, javaScript', 'https://citypromotionethiopia.com/'),
(10, '1672886568zoom.png', 'SOFTWARE', 'Zoom Clone with  node.js', 'https://secret-wildwood-35532.herokuapp.com/');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

DROP TABLE IF EXISTS `resume`;
CREATE TABLE IF NOT EXISTS `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `org` varchar(25) NOT NULL,
  `about_exp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`id`, `type`, `title`, `time`, `org`, `about_exp`) VALUES
(2, 'p', 'PHP Developer', '2018 - Present', 'Doalongme Pvt. Ltd.', 'awesome company i love it working there it was good company etc etc ect.');

-- --------------------------------------------------------

--
-- Table structure for table `section_control`
--

DROP TABLE IF EXISTS `section_control`;
CREATE TABLE IF NOT EXISTS `section_control` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_section` varchar(11) NOT NULL,
  `about_section` varchar(11) NOT NULL,
  `resume_section` varchar(11) NOT NULL,
  `portfolio_section` varchar(11) NOT NULL,
  `contact_section` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `section_control`
--

INSERT INTO `section_control` (`id`, `home_section`, `about_section`, `resume_section`, `portfolio_section`, `contact_section`) VALUES
(1, 'on', 'on', 'on', 'on', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

DROP TABLE IF EXISTS `seo`;
CREATE TABLE IF NOT EXISTS `seo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `siteicon` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `page_title`, `keywords`, `description`, `siteicon`) VALUES
(1, 'A@Y', 'web developer,php developer,flutter developer', 'new desc', '1608861726home.png');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_title` varchar(255) NOT NULL,
  `service_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `service_title`, `service_desc`) VALUES
(8, 'Web Development', 'Back-end web developers , Database development  ,Responsive website development , Front-end web developers,  API integration'),
(9, 'UI/UX Design', 'Cross-platform experiences design , UI and UX consulting  ,Web design services  and Design workshops'),
(10, 'Content System Management(CSM)', 'Website content creation  Images/photos preparation for web  Blog posts  Email management'),
(11, 'Website Maintenance', 'Regularly updating the website.  Running backups  Updating the content  Testing page speeds...'),
(12, 'Website Deployment', 'Preparation  Set Up DNS Records.  Set Up a Live Testing Site  Set Up Email Accounts  Backup and Go Live'),
(13, 'WebSite Design', 'Responsive web site design  User interactive  And User experience  Device responsive');

-- --------------------------------------------------------

--
-- Table structure for table `site_background`
--

DROP TABLE IF EXISTS `site_background`;
CREATE TABLE IF NOT EXISTS `site_background` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `background_img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `site_background`
--

INSERT INTO `site_background` (`id`, `background_img`) VALUES
(1, '1608860845london-at-night.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL,
  `skilldesc` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skill_name`, `skill_level`, `skilldesc`) VALUES
(7, 'CSS', 100, 'CSS stands for Cascading Style Sheets'),
(8, 'Bootstrap', 100, 'Bootstrap is a free, open source front-end development framework for the creation of websites and web apps. Designed to enable responsive development of mobile-first websites, Bootstrap provides a collection of syntax for template designs.'),
(9, 'Photoshop', 95, 'Photoshop is an image creation, graphic design and photo editing software'),
(10, 'HTML', 98, 'HTML is the standard markup language for creating Web pages.\r\n\r\n'),
(11, 'JavaScript', 97, 'JavaScript is a text-based programming language that allows you to create interactive elements on your web page. '),
(12, 'Jquery', 95, 'jQuery is an open-sourced JavaScript library that simplifies creation and navigation of web applications. Specifically, jQuery simplifies HTML Document Object Model (DOM) manipulation, Asynchronous JavaScript and XML (Ajax) and event handling.'),
(13, 'React.js', 96, 'React. js, more commonly known as React, is a free, open-source JavaScript library. It works best to build user interfaces by combining sections of code (components) into full websites.'),
(14, 'Node.js', 100, 'Node. js (Node) is an open source, cross-platform runtime environment for executing JavaScript code. Node is used extensively for server-side programming, '),
(15, 'PHP ', 97, 'PHP is an acronym for \"PHP: Hypertext Preprocessor\" PHP is a widely-used, open source scripting language. PHP scripts are executed on the server. PHP is free to download and use.'),
(16, 'MySql', 100, 'MySQL is an open-source relational database management system (RDBMS)'),
(17, 'Express.Js', 90, 'Express is a node js web application framework that provides broad features for building web and mobile applications. It is used to build a single page, multipage, and hybrid web application. '),
(18, 'Json, Jsx, ', 93, 'JavaScript Object Notation (JSON) is a standard text-based format for representing structured data based on JavaScript object syntax.'),
(19, 'WordPress', 93, 'WordPress is an open-source content management system (CMS). It\'s a popular tool for individuals without any coding experience who want to build websites and blogs. The software doesn\'t cost anything. Anyone can install, use, and modify it for free');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

DROP TABLE IF EXISTS `social_media`;
CREATE TABLE IF NOT EXISTS `social_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `skype` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `twitter`, `facebook`, `instagram`, `skype`, `linkedin`) VALUES
(1, '', 'new f', 'new i', 'new s', 'new l');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `suggestion` text NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `full_name`, `suggestion`, `img`) VALUES
(10, 'Abel Wube', 'It is a distinct pleasure for me to Atakilt Yakob Fullstack Web Developer to any and all interested parties. They have been professional, comprehensive and competent throughout the process of our working together. We feel that we have established a relationship with them for years to come. The reaction to our new web site has been overwhelmingly positive; as one commented the site is â€œFANTASTIC. The same can be said for our view of Thrives work for us.', '1673521404able.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
