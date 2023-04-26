-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 06:53 AM
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
-- Database: `lascomdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpage`
--

CREATE TABLE `blogpage` (
  `id` int(11) NOT NULL,
  `Paragraph` text NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email_Address` varchar(100) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`ID`, `Name`, `Email_Address`, `Subject`, `Message`, `Date`, `Action`) VALUES
(14, 'Kishore', 'xyz@gmail.com', 'ghfngh', 'ghjhgh', '2023-04-24 11:08:16', ''),
(15, 'after ID', 'xyz@gmail.com', 'fdssfvdfg', 'jkn', '2023-04-24 11:09:49', ''),
(16, 'after ID', 'xyz@gmail.com', 'Changed the location contactdb', 'fdhf', '2023-04-24 11:14:46', ''),
(17, 'after ID', 'xyz@gmail.com', 'Changed the location contactdb', 'z', '2023-04-24 11:15:39', ''),
(18, 'after ID', 'xyz@gmail.com', 'Changed the location contactdb', 'kthr', '2023-04-24 11:20:31', ''),
(19, 'after ID', 'xyz@gmail.com', 'Changed the location contactdb', 'hjsagdh', '2023-04-24 11:22:18', '');

-- --------------------------------------------------------

--
-- Table structure for table `featurespage`
--

CREATE TABLE `featurespage` (
  `id` int(11) NOT NULL,
  `Paragraph` text NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featurespage`
--

INSERT INTO `featurespage` (`id`, `Paragraph`, `Date_and_Time`) VALUES
(1, 'Lascom is a dynamic website, which offer a more engaging and user-friendly experience for its visitors, as well as provide better functionality and performance for its owners.', '2023-04-25 05:55:37'),
(2, 'Empowering enterprises to compete in the digital economy through agile methodologies, customer collaboration, engineering tools, hybrid teams, and global delivery, integrating hardware, software, and services.', '2023-04-25 05:57:45'),
(3, 'Our software platform offers \"Awesome Features\" like a customizable interface, advanced search, and real-time collaboration. Work more efficiently and effectively with our powerful tools.', '2023-04-25 05:58:13'),
(4, 'We understand that a website is the digital face of a business. It needs to represent the company\'s values, goals, and mission, while providing an exceptional user experience to our visitors. That\'s why we work closely with our clients to create a website that\'s not only visually appealing but also functional and effective.\r\n\r\nWhether you\'re looking to improve your website\'s functionality, update your branding, or add new features, we\'ve got you covered. In addition to web design, we also offer a range of related services, including content creation, search engine optimization (SEO), and website maintenance. Our goal is to help our clients succeed online, and we\'ll work tirelessly to ensure that your website stands out from the crowd and attracts and retains customers.', '2023-04-25 05:58:31'),
(5, 'Our team of experienced designers use the latest design tools and techniques to create custom graphics that reflect each client\'s unique style and brand identity. Whether you\'re looking for a logo, brochure, social media graphics, or other types of visual content, we\'ve got you covered.\r\n\r\nWe work closely with our clients to understand their needs and goals, and we strive to deliver designs that exceed their expectations. We understand the importance of creating designs that not only look great but also serve a purpose, whether it\'s to attract customers, educate audiences, or build brand awareness.\r\n\r\n', '2023-04-25 05:58:58'),
(6, 'Web development is a crucial aspect of creating a successful business website. It involves designing, coding, and publishing a website that is both visually appealing and functional. A well-designed website can help a business attract new customers, promote products and services, and build brand awareness.\r\n\r\nWhen building a business website, it is important to consider the user experience. The website should be easy to navigate, and the content should be presented in a way that is clear and concise. The website should also be optimized for search engines to increase visibility and drive traffic. Additionally, incorporating features such as contact forms, social media links, and customer reviews can help establish credibility and build trust with potential customers. By prioritizing web development, businesses can create a professional online presence that helps them stand out in a competitive market.', '2023-04-25 05:59:16'),
(7, 'Responsive design is a crucial aspect of modern website development, especially for businesses that want to engage with their customers and attract new ones. A responsive design ensures that a website can adapt to any screen size or device, whether it\'s a desktop computer, tablet, or smartphone. This means that the website will display correctly and function properly on any device, providing users with a seamless experience and making it easy for them to find the information they need. Responsive design is also essential for search engine optimization, as it ensures that the website is accessible and user-friendly across all devices, which can improve its search engine ranking.\r\n\r\nA well-designed responsive website can provide numerous benefits for businesses. It can improve the user experience, increase engagement, and ultimately drive more conversions and sales. A responsive design can also help businesses reach a broader audience by ensuring that their website is accessible to users on any device. In addition, a responsive design can reduce development and maintenance costs, as it eliminates the need for separate websites for different devices. By investing in responsive design, businesses can create a website that meets the needs of their customers and positions them for success in the digital age.', '2023-04-25 06:00:49'),
(8, 'A creative gallery is a must-have feature for any business website that wants to showcase its products, services, or ideas in a visually appealing way. A creative gallery can be used to display images, videos, animations, or any other type of multimedia content that can capture the attention of your website visitors and keep them engaged. By organizing your content into a gallery format, you can make it easier for your visitors to browse through your offerings and find what they\'re looking for quickly and easily.\r\n\r\nTo create a successful creative gallery for your business website, it\'s important to think about the overall user experience. Consider the layout, design, and functionality of your gallery, and make sure that it\'s easy to navigate and visually appealing. You may also want to consider incorporating interactive features, such as zoom or hover-over effects, to further engage your visitors. By taking the time to create a well-designed and user-friendly creative gallery, you can help to enhance your brand image and attract more customers to your business.', '2023-04-25 06:02:46'),
(9, 'If you have any questions, comments, or would like to learn more about Lascom\'s services, please don\'t hesitate to get in touch.\r\n\r\n', '2023-04-25 06:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `Paragraph` text NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `Paragraph`, `Date_and_Time`) VALUES
(2, 'Lascom is a dynamic website, which offer a more engaging and user-friendly experience for its visitors, as well as provide better functionality and performance for its owners.', '2023-04-25 05:21:44'),
(3, 'Empowering enterprises to compete in the digital economy through agile methodologies, customer collaboration, engineering tools, hybrid teams, and global delivery, integrating hardware, software, and services.', '2023-04-25 05:22:45'),
(4, 'Lascom is a software service company that specializes in solving complex problems. They are passionate about using innovative technology to help businesses improve their operations and achieve their goals. With their expertise and commitment to customer service, Lascom is a trusted partner for any company looking to stay ahead in today\'s digital world.', '2023-04-25 05:23:53'),
(6, 'What sets Lascom apart is their dedication to customer service. They understand that every client has different needs and goals, and they work closely with each one to develop a customized solution that meets their specific requirements. Whether it\'s providing ongoing support and maintenance or simply being available to answer questions and provide guidance, Lascom is committed to building long-term relationships with their clients based on trust, respect, and exceptional service.', '2023-04-25 05:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `paragraph`
--

CREATE TABLE `paragraph` (
  `ParagraphID` int(11) NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paragraph`
--

INSERT INTO `paragraph` (`ParagraphID`, `Content`, `Date_and_Time`) VALUES
(1, 'Lascom is a dynamic website, which offer a more engaging and user-friendly experience for its visitors, as well as provide better functionality and performance for its owners.', '2023-04-20 06:08:22'),
(2, 'Empowering enterprises to compete in the digital economy through agile methodologies, customer collaboration, engineering tools, hybrid teams, and global delivery, integrating hardware, software, and services.', '2023-04-22 11:08:26'),
(3, 'Lascom is a software service company that specializes in solving complex problems. They are passionate about using innovative technology to help businesses improve their operations and achieve their goals. With their expertise and commitment to customer service, Lascom is a trusted partner for any company looking to stay ahead in today\'s digital world.', '2023-04-22 11:53:59'),
(4, 'What sets Lascom apart is their dedication to customer service. They understand that every client has different needs and goals, and they work closely with each one to develop a customized solution that meets their specific requirements. Whether it\'s providing ongoing support and maintenance or simply being available to answer questions and provide guidance, Lascom is committed to building long-term relationships with their clients based on trust, respect, and exceptional service.', '2023-04-22 16:08:21'),
(5, 'We provide a range of software services to help businesses and organizations improve their operations, increase efficiency, and achieve their goals.', '2023-04-22 16:37:45'),
(6, 'We value our customers above all else. Our goal is to provide you with exceptional products, services, and support that exceed your expectations. Your satisfaction and loyalty are our highest priorities.', '2023-04-22 16:42:59'),
(7, 'UI design creates visually appealing, intuitive, and engaging digital products that provide a seamless user experience. Our designs are informed by research, best practices and aim to help businesses achieve their goals while meeting user needs.', '2023-04-22 16:46:40'),
(8, 'Our customer-centric marketing approach is all about creating value and building lasting relationships. We strive to understand your needs and deliver creative, effective campaigns that resonate with you. Our goal is to help your business grow and succeed, while providing you with a memorable brand experience.', '2023-04-22 17:04:33'),
(9, 'Our SEO services are designed to help your business to increase the online visibility and drive more traffic to your website. We utilize the latest techniques and best practices to improve your search engine rankings and attract more qualified leads. Our focus is on delivering measurable results and helping your business succeed in the competitive online marketplace. Let us help you achieve your SEO goals and grow your business.', '2023-04-22 17:08:33'),
(10, 'Our Android app is designed with you in mind. It\'s user-friendly, intuitive, and packed with features to enhance your mobile experience. We\'ve made sure to optimize the app for speed and reliability, so you can enjoy seamless performance no matter where you are. With our app, you can easily stay connected, manage your account, and access all the information you need, right at your fingertips. Download it today and see for yourself!', '2023-04-22 17:13:58'),
(11, 'Clean Code is all about writing code that is easy to read, maintain, and understand. It\'s about following best practices, avoiding unnecessary complexity, and striving for simplicity. Good coding practices can save time and money in the long run, and lead to more reliable and efficient code. Our focus on Clean Code helps us to create software that is not only functional but also elegant and easy to work with.', '2023-04-22 17:15:19'),
(12, 'Our software platform offers \"Awesome Features\" like a customizable interface, advanced search, and real-time collaboration. Work more efficiently and effectively with our powerful tools.', '2023-04-24 06:45:01'),
(13, 'If you have any questions, comments, or would like to learn more about Lascom\'s services, please don\'t hesitate to get in touch.\r\n\r\n', '2023-04-24 06:47:49'),
(14, 'No.1, Jawaharlal Nehru Road, (100 Feet Road, Near Vadapalani Signal), Vadapalani, Chennai, Tamil Nadu 600026', '2023-04-24 07:05:00'),
(15, 'We understand that a website is the digital face of a business. It needs to represent the company\'s values, goals, and mission, while providing an exceptional user experience to our visitors. That\'s why we work closely with our clients to create a website that\'s not only visually appealing but also functional and effective.', '2023-04-24 07:10:12'),
(16, 'Whether you\'re looking to improve your website\'s functionality, update your branding, or add new features, we\'ve got you covered. In addition to web design, we also offer a range of related services, including content creation, search engine optimization (SEO), and website maintenance. Our goal is to help our clients succeed online, and we\'ll work tirelessly to ensure that your website stands out from the crowd and attracts and retains customers.', '2023-04-24 07:11:40'),
(17, 'Our team of experienced designers use the latest design tools and techniques to create custom graphics that reflect each client\'s unique style and brand identity. Whether you\'re looking for a logo, brochure, social media graphics, or other types of visual content, we\'ve got you covered.', '2023-04-24 07:54:22'),
(18, 'We work closely with our clients to understand their needs and goals, and we strive to deliver designs that exceed their expectations. We understand the importance of creating designs that not only look great but also serve a purpose, whether it\'s to attract customers, educate audiences, or build brand awareness.', '2023-04-24 07:55:39');

-- --------------------------------------------------------

--
-- Table structure for table `portfoliopage`
--

CREATE TABLE `portfoliopage` (
  `id` int(11) NOT NULL,
  `Paragraph` text NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfoliopage`
--

INSERT INTO `portfoliopage` (`id`, `Paragraph`, `Date_and_Time`) VALUES
(1, 'Industry-specific content is important for businesses to attract and engage potential customers. It may include news, trends, insights, case studies, and thought leadership articles showcasing expertise and value proposition.', '2023-04-25 06:15:18'),
(2, 'Lascom is a dynamic website, which offer a more engaging and user-friendly experience for its visitors, as well as provide better functionality and performance for its owners.', '2023-04-25 06:15:26'),
(3, 'Empowering enterprises to compete in the digital economy through agile methodologies, customer collaboration, engineering tools, hybrid teams, and global delivery, integrating hardware, software, and services.', '2023-04-25 06:15:58');

-- --------------------------------------------------------

--
-- Table structure for table `servicepage`
--

CREATE TABLE `servicepage` (
  `id` int(11) NOT NULL,
  `Paragraph` text NOT NULL,
  `Date_and_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicepage`
--

INSERT INTO `servicepage` (`id`, `Paragraph`, `Date_and_Time`) VALUES
(1, 'Lascom is a dynamic website, which offer a more engaging and user-friendly experience for its visitors, as well as provide better functionality and performance for its owners.', '2023-04-25 05:31:53'),
(2, 'Empowering enterprises to compete in the digital economy through agile methodologies, customer collaboration, engineering tools, hybrid teams, and global delivery, integrating hardware, software, and services.', '2023-04-25 05:32:15'),
(3, 'We value our customers above all else. Our goal is to provide you with exceptional products, services, and support that exceed your expectations. Your satisfaction and loyalty are our highest priorities.', '2023-04-25 05:32:43'),
(4, 'UI design creates visually appealing, intuitive, and engaging digital products that provide a seamless user experience. Our designs are informed by research, best practices and aim to help businesses achieve their goals while meeting user needs.', '2023-04-25 05:32:49'),
(5, 'Our customer-centric marketing approach is all about creating value and building lasting relationships. We strive to understand your needs and deliver creative, effective campaigns that resonate with you. Our goal is to help your business grow and succeed, while providing you with a memorable brand experience.', '2023-04-25 05:33:02'),
(6, 'Our SEO services are designed to help your business to increase the online visibility and drive more traffic to your website. We utilize the latest techniques and best practices to improve your search engine rankings and attract more qualified leads. Our focus is on delivering measurable results and helping your business succeed in the competitive online marketplace. Let us help you achieve your SEO goals and grow your business.', '2023-04-25 05:33:24'),
(7, 'Our Android app is designed with you in mind. It\'s user-friendly, intuitive, and packed with features to enhance your mobile experience. We\'ve made sure to optimize the app for speed and reliability, so you can enjoy seamless performance no matter where you are. With our app, you can easily stay connected, manage your account, and access all the information you need, right at your fingertips. Download it today and see for yourself!', '2023-04-25 05:33:38'),
(8, 'Clean Code is all about writing code that is easy to read, maintain, and understand. It\'s about following best practices, avoiding unnecessary complexity, and striving for simplicity. Good coding practices can save time and money in the long run, and lead to more reliable and efficient code. Our focus on Clean Code helps us to create software that is not only functional but also elegant and easy to work with.', '2023-04-25 05:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `featurespage`
--
ALTER TABLE `featurespage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paragraph`
--
ALTER TABLE `paragraph`
  ADD PRIMARY KEY (`ParagraphID`);

--
-- Indexes for table `portfoliopage`
--
ALTER TABLE `portfoliopage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicepage`
--
ALTER TABLE `servicepage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `featurespage`
--
ALTER TABLE `featurespage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paragraph`
--
ALTER TABLE `paragraph`
  MODIFY `ParagraphID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfoliopage`
--
ALTER TABLE `portfoliopage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `servicepage`
--
ALTER TABLE `servicepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
