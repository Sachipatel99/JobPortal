-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 09:42 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_job`
--

CREATE TABLE `add_job` (
  `jid` int(11) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_type` varchar(50) NOT NULL,
  `job_status` varchar(50) NOT NULL,
  `vacancy` int(11) NOT NULL,
  `number_of_hours` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `job_description` varchar(800) NOT NULL,
  `salary` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `cmp_name` varchar(50) NOT NULL,
  `cmp_logo_name` varchar(100) NOT NULL,
  `cmp_eid` varchar(50) NOT NULL,
  `cmp_category` varchar(50) NOT NULL,
  `cmp_address` varchar(50) NOT NULL,
  `posted_by` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_job`
--

INSERT INTO `add_job` (`jid`, `job_title`, `job_type`, `job_status`, `vacancy`, `number_of_hours`, `qualification`, `experience`, `job_description`, `salary`, `city`, `cmp_name`, `cmp_logo_name`, `cmp_eid`, `cmp_category`, `cmp_address`, `posted_by`, `created_date`) VALUES
(28, 'SDE', 'Full time', 'unavailable', 0, 9, 'B.E / B.tech (CS)', '3', 'We are looking for a passionate Software Engineer to design, develop and install software solutions.\r\n\r\nSoftware Engineer responsibilities include gathering user requirements, defining system functionality and writing code in various languages, like Java, Ruby on Rails or .NET programming languages (e.g. C++ or JScript.NET.) Our ideal candidates are familiar with the software development life cycle (SDLC) from preliminary system analysis to tests and deployment.', 50000, 'indore', 'infotech', 'images.png', 'infotech@gmail.com', 'IT', 'Bhawarkua, Indore', 'admin', '2023-03-02 12:33:21'),
(39, 'SDE', 'work from home', 'available', 6, 8, 'B.E / B.tech (CS)', '4', 'We are looking for a passionate Software Engineer to design, develop and install software solutions.\r\n\r\nSoftware Engineer responsibilities include gathering user requirements, defining system functionality and writing code in various languages, like Java, Ruby on Rails or .NET programming languages (e.g. C++ or JScript.NET.) Our ideal candidates are familiar with the software development life cycle (SDLC) from preliminary system analysis to tests and deployment.', 50000, 'mumbai', 'infotech', 'images.png', 'infotech@gmail.com', 'IT', 'Thane, Mumbai\r\n', '', '2023-04-01 11:17:30'),
(40, 'Teacher', 'work from home', 'available', 6, 5, 'Graduation', '2', 'We are looking for a committed Teacher to complement our qualified workforce of educators. You will be responsible for preparing and implementing a full educational teaching plan according to the school’s requirements. It will be fundamental to provide knowledge and instruction to students while also helping them develop their personalities and skills.\r\n\r\nThe ideal candidate will be passionate for the job with an ability to reach out to students and create a relationship of mutual trust. They will know how to organize a class and make learning an easy and meaningful process.', 40000, 'Indore', 'Knowledge Academy', 'download (3).png', 'knowlwdgeacademy@gmail.com', 'Education', 'Satyasai, Indore', '', '2023-04-01 11:20:25'),
(41, 'Data Analyst', 'work from home', 'available', 10, 8, 'B.E / B.tech (CS)', '5', 'A data analyst is responsible for organizing data related to sales numbers, market research, logistics, linguistics, or other behaviors. They utilize technical expertise to ensure data is accurate and high-quality. Data is then analyzed, designed, and presented in a way that assists individuals, businesses, and organizations make better decisions.', 50000, 'Indore', 'infotech', 'images.png', 'infotech@gmail.com', 'IT', 'Vijay Nagar, Indore', '', '2023-04-01 11:32:33'),
(42, 'Assistant manager', 'Full time', 'available', 1, 10, 'MBA', '2', 'We are looking for a responsible Assistant Manager to help organize and run our retail stores and fill in for the Store Manager when needed. Your job will be highly important in ensuring the sales team meets its goals of efficiency and customer satisfaction.\r\n\r\nAssistant Manager responsibilities include hiring and training sales associates, monitoring inventory and ordering merchandise based on demand. You will also research competitive products and analyze consumer behavior to ensure our store meets and exceeds client expectations.', 45000, 'Jaipur', 'Zucol', 'Logo_blue.png', 'zucol@gmail.com', 'IT', 'Indore', '', '2023-04-01 11:43:49'),
(43, 'Fashion Designer', 'Please Select', 'Please Select', 3, 6, 'Degree in Fashion Designing', '5', 'We are seeking a talented Fashion Designer to join our team and lead the research and production of innovative clothing lines that align with current market trends.\r\n\r\nAs a Fashion Designer, you will have the exciting opportunity to travel to fashion events, analyze market data, and identify emerging fashion trends.\r\n\r\nCollaborating with our team of skilled Designers and Marketers, you will translate these trends into captivating clothing products that resonate with our customers.\r\n\r\nYour creative vision and expertise will play a crucial role in shaping our seasonal collections.\r\n\r\nJoin us in this dynamic role where you can showcase your passion for fashion and contribute to the success of our brand.', 0, 'Mumbai', 'Biba', 'download (1).png', 'biba@gmail.com', 'Fashion', 'Mumbai', '', '2023-04-17 19:26:11'),
(44, 'Chef', 'Full time', 'available', 4, 8, 'Knowledge of cuisines', '4', 'vhghj', 50000, 'Indore', 'gh', '2021-02-14.webp', 'gh@gmail.com', 'df', '', '', '2023-04-17 20:19:31'),
(46, 'SDE', 'Full Time', 'Available', 5, 8, 'B Tech', '4', 'fghhb', 70000, 'Indore', 'infosys', 'infosys.png', 'h@gmail.com', 'j', 'g', '', '2023-04-28 10:09:35'),
(47, 'SDE', 'Full Time', 'Available', 10, 10, 'B Tech CS', '3', 'g', 50000, 'Indore', 'TCS', 'tcs.png', 'h@gmail.com', 'j', 'n', '', '2023-04-28 10:12:12'),
(48, 'SDE', 'Part Time', 'Unavailable', 0, 6, 'Degree related to CS and IT', '5', 'g', 60000, 'Indore', 'Wipro', 'wipro.png', 'h@gmail.com', 'j', 'n', '', '2023-04-28 10:13:59'),
(49, 'Faculty', 'Full Time', 'Available', 5, 8, 'B Tech', '5', 'jhh', 60000, 'Indore', 'Aakashi Institute', 'holkarlogo.png', 'aakashi@gmail.com', 'Educational', 'hjdfhdj', '', '2023-04-29 07:22:55'),
(50, 'Faculty', 'Full Time', 'Available', 2, 3, 'B Tech CS', '12', 'dnncksdck', 45, 'Indore', 'Aakashi Institute', 'holkarlogo.png', 'h@gmail.com', 'j', 'wet', '', '2023-04-29 07:51:35'),
(51, 'Peon', 'Part Time', 'Available', 5, 10, 'nil', '3', 'gh', 20000, 'Bhopal', 'Hj', 'infosys.png', 'h@gmail.com', 'Educational', 'asf', 'recruiter', '2023-04-29 07:57:51'),
(52, 'Music Teacher', 'Please Select', 'Please Select', 0, 6, 'degree in music', '2', 'We are looking for an experienced music teacher to be responsible for teaching music as part of the school curriculum. The music teacher will follow the guidelines as set out by the education department which includes the theory and practice of general music, singing and playing musical instruments. They should also prepare students for exams in music.', 11000, 'Bhopal', 'Raksha Music Academy', 'download (1).jpeg', 'rakshamusicacademy@gmail.com', 'Educational', 'Bhopal', 'admin', '2023-04-29 08:00:28'),
(53, 'Hotel Manager', 'Full Time', 'Available', 2, 9, 'MBA/Degree in hotel management', '0', 'We are seeking a professional and customer-focused hotel manager to oversee our hotel operations. In this position, you will direct the day-to-day operations and activities at your allocated hotel location. Your duties will include managing personnel, collecting payments, monitoring budgets, and evaluating hotel performance.', 25000, 'Indore', 'Hotel Sayaji', 'download (2).png', 'sayaji@gmail.com', 'nill', 'Indore', 'recruiter', '2023-05-01 08:35:33'),
(54, 'SDE', 'Full Time', 'Available', 2, 8, 'BE/B.tech', '1', 'Their role includes analyzing and modifying existing software as well as designing, constructing and testing end-user applications that meet user needs — all through software programming languages. The role also focuses on the complex and large software systems that make up the core systems for an organization.', 50000, 'Indore', 'TaskUs', 'download.png', 'TaskUs@gmail.com', 'BPO Services and Digital solution provider', 'Vijaynagar, Indore', 'admin', '2023-06-15 05:10:12'),
(55, 'SDE', 'Please Select', 'Available', 4, 10, 'BE/B.tech', '2', 'We are looking for a skilled software engineer who, along with our excellent software development team, will be responsible for working on projects that are currently being developed on by our company. Duties will include but are not limited to developing and directing software system validation and testing methods, as well as directing our software programming initiatives. You will also be working closely with clients and cross-functional departments to communicate project statuses and proposals.', 60000, 'Indore', 'Cognizant', 'download.jpeg', 'cognizant@gmail.com', 'IT', 'Indore', 'admin', '2023-06-15 05:14:50'),
(56, 'SDE', 'Full Time', 'Available', 1, 8, 'BE/B.tech', '3', 'At least a bachelor’s degree in computer engineering, computer science, or any related field is a must for the position. Some companies may also require certifications in programming languages or frameworks. Post onboarding, a software engineer typically needs to go through various training and professional events to sharpen their skills and keep up to date.', 65000, 'Indore', 'Hexaware', 'images.png', 'hexaware@gmail.com', 'IT Services ', 'Indore', 'admin', '2023-06-15 05:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `apply_form`
--

CREATE TABLE `apply_form` (
  `apply_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` varchar(11) NOT NULL,
  `state_of_resident` varchar(50) NOT NULL,
  `phone_no` varchar(11) NOT NULL,
  `alt_phone_no` varchar(11) NOT NULL,
  `pref_working_mode` varchar(50) NOT NULL,
  `worked_prev` varchar(50) NOT NULL,
  `upload_cv` varchar(50) NOT NULL,
  `applied_date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_form`
--

INSERT INTO `apply_form` (`apply_id`, `first_name`, `last_name`, `date_of_birth`, `email`, `address`, `city`, `pincode`, `state_of_resident`, `phone_no`, `alt_phone_no`, `pref_working_mode`, `worked_prev`, `upload_cv`, `applied_date`, `user_id`) VALUES
(10, 'Shreya', 'Patel', '9982-05-04', 'sh@gmail.com', 'ghg', 'Bhopal', '67', 'Odisha', '678', '546', 'Part Time', 'No', 'Shreya Dwivedi ADA ppt.pptx', '2023-04-25', 0),
(11, 'anukriti', 'thakur', '2023-05-02', 'anu@gmail.com', 'kabra colony', 'pipariya', '461775', 'Madhya Pradesh', '6264929260', '9425645414', 'Full Time', 'Yes', '', '2023-05-08', 3);

-- --------------------------------------------------------

--
-- Table structure for table `recruiter_signup`
--

CREATE TABLE `recruiter_signup` (
  `rid` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `official_email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recruiter_signup`
--

INSERT INTO `recruiter_signup` (`rid`, `first_name`, `last_name`, `company_name`, `official_email`, `password`, `contact_no`, `status`, `created_date`) VALUES
(1, 'Aditya', 'Kashyap', 'Kashyap Media', 'kashyap@gmail.com', 'media', 123456789, 0, '2023-04-19 10:51:06'),
(2, 'Vani', 'Sinha', 'Lakme', 'lakme@gmail.com', 'lakme', 124, 0, '2023-04-28 10:30:33'),
(3, 'Jyotsna', 'Arya', 'Aashi Tiffin Centre', 'aashi@gmail.com', 'aashi', 123456789, 1, '2023-04-28 11:28:27'),
(4, 'Anukriti ', 'Thakur', 'Stylebar', 'stylebar@gmail.com', 'stylebar', 987654321, 0, '2023-04-28 11:44:05'),
(5, 'Ananta', 'Pandey', 'paperink', 'paperink@gmail.com', 'ananta', 987654321, 0, '2023-04-29 09:31:45'),
(6, 'mukesh', 'ambani', 'jio', 'jio@gmail.com', 'jio', 2147483647, 0, '2023-05-06 21:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_signup`
--

CREATE TABLE `user_signup` (
  `uid` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_signup`
--

INSERT INTO `user_signup` (`uid`, `first_name`, `last_name`, `email`, `password`, `created_date`) VALUES
(1, 'Akku', 'Thakur', 'akku@gmail.com', 'akku', '2023-04-17 20:46:47'),
(2, '', '', 'anu@gmail.com', '', '2023-04-19 09:18:29'),
(3, 'Sachi', 'Patel', 'sachi@gmail.com', 'sachi', '2023-04-19 09:22:19'),
(4, 'Lavanya', 'Suryavanshi', 'lavsur@gmail.com', 'surya', '2023-04-19 09:53:36'),
(5, 'Chetna ', 'Thakur', 'chetna@gmail.com', 'chetna', '2023-04-19 10:23:25'),
(6, 'arti', 'thakur', 'arti@gmail.com', 'arti', '2023-05-06 21:33:58'),
(7, 'mansi', 'patel', 'mansi@gmail.com', 'akku1306', '2023-05-07 14:58:19'),
(8, 'Sachi', 'Patel', 'admin@gmail.com', 'info', '2023-06-15 05:05:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_job`
--
ALTER TABLE `add_job`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apply_form`
--
ALTER TABLE `apply_form`
  ADD PRIMARY KEY (`apply_id`);

--
-- Indexes for table `recruiter_signup`
--
ALTER TABLE `recruiter_signup`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_signup`
--
ALTER TABLE `user_signup`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_job`
--
ALTER TABLE `add_job`
  MODIFY `jid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apply_form`
--
ALTER TABLE `apply_form`
  MODIFY `apply_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `recruiter_signup`
--
ALTER TABLE `recruiter_signup`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_signup`
--
ALTER TABLE `user_signup`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
