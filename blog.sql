-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 10:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `contact_description` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `about_des` text DEFAULT NULL,
  `faccebook` varchar(100) DEFAULT NULL,
  `linkend` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `google` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `image_pro` varchar(110) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `contact_description`, `address`, `phone`, `email`, `about_des`, `faccebook`, `linkend`, `instagram`, `google`, `image`, `short_description`, `image_pro`, `name`) VALUES
(1, 'i am a web designer and laravel developer.Talented web designer and Laravel developer with 2+ years of experience in creating visually appealing ', 'Mohamadpur,Bosila,Dhaka', 1750092641, 'mdlabluislam641@gmail.com', 'i am a web designer and laravel developer.Talented web designer and Laravel developer with 2+ years of experience in creating visually appealing and user-friendly websites. Proficient in front-end technologies such as HTML, CSS, and JavaScript. Skilled in utilizing Laravel framework forefficientback enddevelopment.Strongeyefordetailandability totranslateclient requirements intoengagingwebdesigns.Excellent collaborationandproblem-solvingskills.', 'https://www.facebook.com/profile.php?id=100011864700609', 'https://www.linkedin.com/in/lablu/', 'https://www.instagram.com/md.lablu.islam/', 'google.com', '1750092641-25-37-10-29-09-2023.jpg', 'Web Designer and PHP Laravel Developer', 'ttttt-49-38-05-02-10-2023.jpg', 'Lablu Islam');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `status`) VALUES
(1, 'Dove', 'Dove-06-27-09-30-09-2023.jpeg', 'active'),
(3, 'Cocacola', 'Cocacola-29-27-09-30-09-2023.jpeg', 'active'),
(4, 'Nike', 'Nike-47-27-09-30-09-2023.jpeg', 'active'),
(5, 'Pepsi', 'Pepsi-08-28-09-30-09-2023.jpeg', 'active'),
(6, 'Portify', 'Portify-25-28-09-30-09-2023.jpeg', 'active'),
(7, 'brad', 'brad-13-29-09-30-09-2023.png', 'active'),
(8, '5Box', '5Box-46-29-09-30-09-2023.png', 'active'),
(9, 'reativeggggg', 'reativeggggg-25-02-06-30-09-2023.png', 'active'),
(11, 'gfgfdg', 'gfgfdg-17-18-10-02-10-2023.jpeg', 'deactive'),
(12, 'fddsfsd', 'fddsfsd-38-18-10-02-10-2023.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `title`, `year`, `count`) VALUES
(1, 'Laravel Development', '2023', 89),
(2, 'Graphics Design', '2002', 50),
(3, 'Web Design', '2022', 60),
(4, 'Apps Developer', '2001', 80);

-- --------------------------------------------------------

--
-- Table structure for table `pratfios`
--

CREATE TABLE `pratfios` (
  `id` int(11) NOT NULL,
  `profio_name` varchar(110) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pratfios`
--

INSERT INTO `pratfios` (`id`, `profio_name`, `title`, `description`, `image`, `status`) VALUES
(5, 'Blog webste featured', 'web desiner', 'Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His \r\n\r\nAbdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His \r\n\r\n\r\n\r\nAbdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His Abdus Sattar Bhuiyan became the party candidate of BNP from Brahmanbaria-2 (Sarail-Ashuganj) seat in 2018 eleventh national parliament election and won by getting 83 thousand 997 votes. His ', 'web desiner-12-54-07-30-09-2023.jpeg', 'active'),
(6, 'Flatter Developer', 'website  deveper app degener', 'Qui perferendis totaPerhaps the best-known web developer is Tim Berners-Lee, who created HTML and launched the World Wide Web. Other famous developers include Lea Verou, co-editor of several CSS specifications, and Håkon Wium Lie, who created CSS.', 'title b vcv-49-40-06-30-09-2023.jpg', 'active'),
(9, 'Apps Developer', 'web site app degener ', 'Perhaps the best-known web developer is Tim Berners-Lee, who created HTML and launched the World Wide Web. Other famous developers include Lea Verou, co-editor of several CSS specifications, and Håkon Wium Lie, who created CSS.', 'web site app degener -29-00-08-30-09-2023.jpeg', 'active'),
(10, 'E-commarce Food  apps', 'Apps Development', 'ddddPerhaps the best-known web developer is Tim Berners-Lee, who created HTML and launched the World Wide Web. Other famous developers include Lea Verou, co-editor of several CSS specifications, and Håkon Wium Lie, who created CSS.', 'Apps Development-23-05-08-30-09-2023.jpeg', 'active'),
(11, 'Laravel developer', 'web developer devloper and desinger', 'sssPerhaps the best-known web developer is Tim Berners-Lee, who created HTML and launched the World Wide Web. Other famous developers include Lea Verou, co-editor of several CSS specifications, and Håkon Wium Lie, who created CSS.', 'web developer devloper and desinger-17-03-08-30-09-2023.jpeg', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `project_counts`
--

CREATE TABLE `project_counts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `total_count` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_counts`
--

INSERT INTO `project_counts` (`id`, `title`, `icon`, `total_count`, `status`) VALUES
(2, 'Apps Development', 'fa fa-address-book', 100, 'active'),
(4, 'Graphics Design', 'fa fa-ambulance', 500, 'active'),
(5, 'web desiner', 'fa fa-car', 410, 'active'),
(6, 'PHP Developer', 'fa fa-coffee', 700, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `icon`, `status`) VALUES
(7, 'web designer', 'Web design refers to the design of websites that are displayed on the internet. It usually refers to the user experience aspects of website development rather than software development. Web design used to be focused on designing websites for desktop browsers; however, since the mid-2010s, design for mobile and tablet browsers has become ever-increasingly important.wwweee', 'fa fa-fax', 'active'),
(13, 'Apps Developer', 'Your business is made smarter with our emerging technology development services. Whatever the latest technology, our software development agenceis here to provide dedicated services in that domain.', 'fa fa-address-card', 'active'),
(15, 'Github Expert', 'Your business is made smarter with our emerging technology development services. Whatever the latest technology, our software development agenceis here to provide dedicated services in that domain.', 'fa fa-database', 'active'),
(17, 'Web Development', 'For larger organizations and businesses, Web development teams can consist of hundreds of people (Web developers) and follow standard methods like Agile methodologies while developing Web sites.[1] Smaller organizations may only require a single permanent or contracting developer, or secondary assignment to related job positions such as a graphic designer or information systems technician. Web development may be a collaborative effort between departments rather than the domain of a designated department. There are three kinds of Web developer specialization: front-end developer', 'fa fa-bell', 'active'),
(20, 'Flatter Developer', '<p>How to show how summernote editor has data database How to show how summernote editor has data database How to show how summernote editor has data databaseHow to show how summernote editor has data database How to show how summernote editor has data database How to show how summernote editor has data database How to show how summernote editor has data database<br></p>', 'fa fa-plane', 'active'),
(21, 'Apps Development', '<p>Apps devloper is good asd lfgl df dfd fg fdg</p>', 'fa fa-fax', 'active'),
(24, 'laravel developer', '<p>sdfsdfs sdfsd</p>', 'fa fa-behance', 'deactive');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'deactive',
  `title` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `description`, `image`, `status`, `title`) VALUES
(1, 'ttooooooo', 'Doloremque amet eum', 'okokok-51-22-06-30-09-2023.jpg', 'active', 'okokok'),
(3, 'eeekekekke', 'In numquam sit Namkdjkdj sjkdksj<br>', 'udhhdd-19-20-06-30-09-2023.jpg', 'active', 'udhhdd'),
(4, 'hsaiasysk', '<p>dhkdj djkhf sdiud do iufd dl siddi d diid</p><p>jdkdjd<br></p>', 'shksjdksd-33-19-06-30-09-2023.png', 'active', 'shksjdksd'),
(5, 'mailinator.com', 'Tempore odio perspi', 'pelubud-26-24-06-30-09-2023.jpeg', 'active', 'pelubud'),
(6, 'website', 'jhkhkllkjkljl zkjk jkj k', 'hjkkkkkkkkkkk-39-42-06-30-09-2023.jpg', 'active', 'hjkkkkkkkkkkk'),
(9, 'fdgdfg', 'dsfsdf sdfsdf ', 'fftwe-11-19-10-02-10-2023.jpeg', 'deactive', 'fftwe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `password`) VALUES
(1, 'fubyju', 'riregy@mailinator.com', 'default.png', 'bbb8aae57c104cda40c93843ad5e6db8'),
(2, 'yyyy', 'vugi@mailinator.com', 'default.png', 'bbb8aae57c104cda40c93843ad5e6db8'),
(3, 'oooo', 'jijawow@mailinator.com', 'default.png', 'bbb8aae57c104cda40c93843ad5e6db8'),
(4, 'jamal', 'nayansen169@gmail.com', '4-jamal-02-10-2023.jpeg', '4d6d955ca289f82e3a6e1f52f40108f3'),
(5, 'lablu khan', 'mdlabluislam641@gmail.com', '5-lablu khan-02-10-2023.jpeg', '77c9749b451ab8c713c48037ddfbb2c4'),
(6, 'zyxumarosa', 'nayansen169@gmail.com', '6-zyxumarosa-02-10-2023.jpeg', '0d777e9e30b918e9034ab610712c90cf'),
(7, 'admin', 'labluislam435@gmail.com', 'default.png', 'e807f1fcf82d132f9bb018ca6738a19f'),
(8, 'admin', 'admin@gmail.com', 'default.png', 'e807f1fcf82d132f9bb018ca6738a19f'),
(9, 'zusomitoke', 'lewosereze@mailinator.com', 'default.png', 'bbb8aae57c104cda40c93843ad5e6db8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pratfios`
--
ALTER TABLE `pratfios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_counts`
--
ALTER TABLE `project_counts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pratfios`
--
ALTER TABLE `pratfios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `project_counts`
--
ALTER TABLE `project_counts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
