-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2025 at 03:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wmsu_administrationdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_deans`
--

CREATE TABLE `academic_deans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `position_type` enum('Academic Dean','Associate Dean','External Studies Unit') NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_deans`
--

INSERT INTO `academic_deans` (`id`, `name`, `title`, `position_type`, `created_at`, `updated_at`) VALUES
(1, 'Asso. Prof. Abdel-Azeem A. Moammad Siddique', 'Dean, College of Asian & Islamic Studies', 'Academic Dean', '2025-03-25 03:55:10', '2025-03-25 03:55:10'),
(2, 'Dr. Mohammad Khasim I. Abdulmajid', 'Dean, College of Medicine', 'Academic Dean', '2025-03-25 03:55:38', '2025-03-25 03:55:38'),
(3, 'Asso. Prof. Hashim N. Alawi', 'OIC – Dean, College of Nursing', 'Academic Dean', '2025-03-25 03:56:01', '2025-03-25 03:56:01'),
(4, 'Engr. Ulmen Riff L. Circulado', 'Dean, College of Engineering', 'Academic Dean', '2025-03-25 03:56:20', '2025-03-25 03:56:20'),
(5, 'Engr. Mark L. Flores', 'Dean, College of Computing Studies', 'Academic Dean', '2025-03-25 03:56:54', '2025-03-25 03:56:54'),
(6, 'Dr. Byron B. Go Silk', 'Dean, External Studies Unit', 'Academic Dean', '2025-03-25 03:57:53', '2025-03-25 03:57:53'),
(7, 'Dr. Mario Ritchie O. Hibionada', 'Dean, College of Criminology', 'Academic Dean', '2025-03-25 03:58:20', '2025-03-25 03:58:20'),
(8, 'Dr. Almudi G. Lukman', 'Dean, College of Forestry & Environmental Studies', 'Academic Dean', '2025-03-25 03:58:36', '2025-03-25 03:58:36'),
(9, 'Atty. Irma Mari Madelle-Rivero', 'Dean, College of Law', 'Academic Dean', '2025-03-25 03:59:01', '2025-03-25 03:59:01'),
(10, 'Dr. Mohammad Nur S. Paspasan', 'Acting Dean, College of Science and Mathematics', 'Academic Dean', '2025-03-25 03:59:24', '2025-03-25 03:59:24'),
(11, 'Asso. Prof. Roel F. Marcial', 'Dean, College of Liberal Arts', 'Academic Dean', '2025-03-25 03:59:42', '2025-03-25 03:59:42'),
(12, 'Dr. Ricardo A. Somblingo', 'Dean, College of Teacher Education', 'Academic Dean', '2025-03-25 04:00:12', '2025-03-25 04:00:12'),
(13, 'Dr. Elderico P. Tabal', 'Dean, College of Agriculture', 'Academic Dean', '2025-03-25 04:00:31', '2025-03-25 04:00:31'),
(14, 'Dr. Jocelyn T. Gaas', 'Dean, College of Social Work & Community Development', 'Academic Dean', '2025-03-25 04:00:54', '2025-03-25 04:00:54'),
(15, 'Dr. Ma. Blancaflor R. Jimeno', 'Dean, CSSPE', 'Academic Dean', '2025-03-25 04:01:44', '2025-03-25 04:01:44'),
(16, 'Dr. Maria Socorro Yvonne H. Ramos', 'Coordinating Dean, Graduate School', 'Academic Dean', '2025-03-25 04:02:11', '2025-03-25 04:02:11'),
(17, 'Arch. Ruby Alita A. Sahi', 'OIC – Dean, College of Architecture', 'Academic Dean', '2025-03-25 04:02:40', '2025-03-25 04:02:40'),
(18, 'Dr. Lucia M. Santos', 'Dean, College of Home Economics', 'Academic Dean', '2025-03-25 04:03:09', '2025-03-25 04:03:09'),
(19, 'Dr. Sarah S. Taupan', 'OIC- Dean, CPADS on concurrent Director, Quality Assurance Center Office / Chair of the ISA', 'Academic Dean', '2025-03-25 04:03:32', '2025-03-25 04:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `assistant_directors`
--

CREATE TABLE `assistant_directors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assistant_directors`
--

INSERT INTO `assistant_directors` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Richard C. Dagalea', 'Asst. Director, Public Affairs Office', '2025-03-25 03:06:18', '2025-03-25 03:06:18'),
(2, 'Engr. Swidin S. Husin', 'Associate Director of the Research Development and Evaluation Center', '2025-03-25 03:06:36', '2025-03-25 03:06:36'),
(3, 'Asso. Prof. Joel C. Macasinag', 'Asst. Manager, University PRESS(UPRESS)', '2025-03-25 03:06:56', '2025-03-25 03:06:56'),
(4, 'Asso. Prof. Reynaldo R. Macaso', 'Asst. Director of the scholarship Office', '2025-03-25 03:07:14', '2025-03-25 03:07:14'),
(5, 'Mr. Keynard L. Ponce', 'Asst. to the Director of Center for Continuing Education (CCE)', '2025-03-25 03:07:45', '2025-03-25 03:07:45'),
(6, 'Asso. Prof. Vinchall A. Siason', 'Asst. Director of the Quality Assurance Office', '2025-03-25 03:08:13', '2025-03-25 03:08:13'),
(7, 'Mr. Salimar B. Tahil', 'Asst. Director of the Management Information System and Technology Office', '2025-03-25 03:08:44', '2025-03-25 03:08:44'),
(8, 'Dr. Rochard T. Tarroza', 'Asst. Director, Student Affairs Office', '2025-03-25 03:09:45', '2025-03-25 03:09:45'),
(9, 'Asst. Prof. Sophia L. Bensali', 'Asst. to the Director of Center for Science Teaching and Training', '2025-03-25 03:10:12', '2025-03-25 03:10:12'),
(10, 'Ms. Melodina V. Francisco', 'Asst. Director, Alumi Relations Office', '2025-03-25 03:10:29', '2025-03-25 03:10:29'),
(11, 'Dr. Mely Jane D. Jacinto', 'Asst. Director, Quality Management Systems Office', '2025-03-25 03:10:58', '2025-03-25 03:10:58'),
(12, 'Dr. Dulce Amor P. Matondo', 'Assistant to the VPRESEL', '2025-03-25 03:11:15', '2025-03-25 03:11:15'),
(13, 'Atty. Aenn Bernielee C. Limbaga', 'Asst. Director, Special Program and Projects Office (SPPO)', '2025-03-25 03:11:32', '2025-03-25 03:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `associate_deans`
--

CREATE TABLE `associate_deans` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `associate_deans`
--

INSERT INTO `associate_deans` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Asso. Prof. Roel P. Borja', 'College of Liberal Arts', '2025-03-25 04:06:36', '2025-03-25 04:06:36'),
(3, 'Asst. Prof. Darwin V. Mendoza', 'College of Home Economics', '2025-03-25 04:06:57', '2025-03-25 04:06:57'),
(4, 'Asso. Prof. Ricardo Danilo E. Corteza', 'College of Sports Science and Physical Education', '2025-03-25 04:07:11', '2025-03-25 04:07:11'),
(5, 'Asso. Prof. Kent Adnil C. Lao', 'College of Teacher Education', '2025-03-25 04:07:35', '2025-03-25 04:07:35'),
(6, 'Asso. Prof. Nurmia L. Ticao', 'College of Asian and Islamic Studies', '2025-03-25 04:07:49', '2025-03-25 04:07:49'),
(7, 'Engr. Czarina Adelene J. Aquino', 'College of Engineering', '2025-03-25 04:08:06', '2025-03-25 04:08:06'),
(8, 'Asso. Prof. Edwin I. Arip', 'College of Computing Studies', '2025-03-25 04:08:30', '2025-03-25 04:08:30'),
(9, 'Asso. Prof. Bernard Q. Suriaga', 'College of Public Administration and Development Studies', '2025-03-25 04:09:00', '2025-03-25 04:09:00'),
(10, 'Asst. Prof. Sophia L. Bensali', 'College of Science and Mathematics concurrent OIC-Director RSTC', '2025-03-25 04:10:05', '2025-03-25 04:10:05'),
(11, 'Dr. Grace N. Floriano', 'College of Nursing', '2025-03-25 04:11:07', '2025-03-25 04:11:07'),
(13, 'Asso Prof. Jannet R. Francisco', 'College of Social Work and Community Development', '2025-03-25 04:14:35', '2025-03-25 04:14:35'),
(14, 'Asso. Prof. Gladess A. Pagal', 'College of Agriculture', '2025-03-25 04:14:52', '2025-03-25 04:14:52'),
(15, 'Asst. Prof. Ruzzel L. Nazario', 'WMSU External Studies Unit (ESU)', '2025-03-25 04:15:08', '2025-03-25 04:15:08'),
(16, 'Asso. Prof. Maryam-Lizbeth L. Sahijuan', 'College of Medicine', '2025-03-25 04:15:24', '2025-03-25 04:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `board_of_regents`
--

CREATE TABLE `board_of_regents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `board_of_regents`
--

INSERT INTO `board_of_regents` (`id`, `name`, `title`, `image`, `rank`, `created_at`, `updated_at`) VALUES
(3, 'HON. MA. CARLA A. OCHOTORENA', 'PRESIDENT, WMSU VICE-CHAIRPERSON, WMSU-BOR', 'carla-ochotorena.jpg', 1, '2025-03-24 18:24:19', '2025-04-05 12:48:13'),
(1, 'HON. RONALD L. ADAMAT', 'COMMISSIONER, CHED CHAIR-DESIGNATE, WMSU-BOR', 'ronald-adamat.jpg', 2, '2025-03-16 19:42:36', '2025-04-05 12:48:13'),
(4, 'HON. ALAN PETER S. CAYETANO', 'CHAIRMAN, SENATE COMMITTEE ON HIGHER TECHNICAL AND VOCATIONAL EDUCATIONS, MEMBER – WMSU-BOR', 'cayetano.jpg', 3, '2025-03-24 18:24:46', '2025-03-24 18:24:46'),
(5, 'Represented by:', 'HON. ROLANDO L. MACASAET', 'macasaet-1.jpg', 4, '2025-03-24 18:26:40', '2025-03-24 18:26:40'),
(6, 'HON. MARK O. GO', 'CHAIRMAN, HOUSE COMMITTEE ON HIGHER AND TECHNICAL EDUCATION, MEMBER – WMSU-BOR', 'mark-ogo.jpg', 5, '2025-03-24 18:27:16', '2025-03-24 18:27:16'),
(7, 'Represented by:', 'HON. EMMYLOU B. YANGA', 'yanga.jpg', 6, '2025-03-24 18:27:49', '2025-03-24 18:27:49'),
(8, 'HON. MARIA FELICIDAD R. GUERRERO', 'OFFICER-IN-CHARGE REGIONAL DIRECTOR NEDA IX WMSU BOARD OF REGENTS', 'guerrero.jpg', 7, '2025-03-24 18:29:20', '2025-03-24 18:29:20'),
(9, 'HON. MARTIN A. WEE', 'REGIONAL DIRECTOR, DOST IX MEMBER, WMSU-BOR', 'martin-wee.jpg', 8, '2025-03-24 18:29:49', '2025-03-24 18:29:49'),
(10, 'HON. INOCENTE P. LOCSON', 'PRIVATE SECTOR REPRESENTATIVE MEMBER, WMSU-BOR', 'LOCSON.jpg', 9, '2025-03-24 18:30:07', '2025-03-24 18:30:07'),
(11, 'HON. JOSE L. LOBREGAT', 'PRIVATE SECTOR REPRESENTATIVE MEMBER, WMSU-BOR', 'lobregat.jpg', 10, '2025-03-24 18:30:36', '2025-03-24 18:30:36'),
(12, 'HON. FLORENCIO M. LIONG, JR', 'PRESIDENT, WMSU UNITED GENERAL ALUMNI ASSOCIATION, INC. MEMBER, WMSU-BOR', 'mundoc_blank.jpg', 11, '2025-03-24 18:31:18', '2025-03-24 18:31:18'),
(13, 'HON. ADRIAN P. SEMORLAN', 'PRESIDENT, WMSU FACULTY UNION ASSOCIATION, INC MEMBER, WMSU-BOR', 'semorlan.jpg', 12, '2025-03-24 18:32:00', '2025-03-24 18:32:00'),
(14, 'HON. AHMAD G. MUNDOC', 'PRESIDENT, UNIVERSITY STUDENT COUNCIL MEMBER, WMSU-BOR', 'florencioblank.jpg', 13, '2025-03-24 18:32:23', '2025-03-24 18:32:23'),
(15, 'PROF. AL-GHANI D. MOHAMMAD', 'UNIVERSITY AND BOARD SECRETARY', 'MOHAMMAD.jpg', 14, '2025-03-24 18:32:46', '2025-03-24 18:32:46');

-- --------------------------------------------------------

--
-- Table structure for table `campus_administrators`
--

CREATE TABLE `campus_administrators` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `campus_administrators`
--

INSERT INTO `campus_administrators` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Mary Jocelyn V. Battung', 'Campus Administrator, Pagadian', '2025-03-25 03:00:32', '2025-03-25 03:00:32'),
(2, 'Ms. Maria Celeste B. Dela Cruz', 'Campus Administrator, Malangas', '2025-03-25 03:00:50', '2025-03-25 03:00:50'),
(3, 'Asst. Prof. Felwin Lovely R. Natividad', 'Campus Administrator, Ipil', '2025-03-25 03:01:08', '2025-03-25 03:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `chairpersons`
--

CREATE TABLE `chairpersons` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chairpersons`
--

INSERT INTO `chairpersons` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Engr. Ferdinand S. Guardo', 'Chief Information Officer (CIO) of the University RE DICT', '2025-03-25 03:21:00', '2025-03-25 03:21:00'),
(3, 'Dr. Fredelino M. San Juan', 'Chair Bids and Award Committee', '2025-03-25 03:21:28', '2025-03-25 03:21:28'),
(4, 'Engr. Ricardo B. Gonzales', 'Chair of the Tech. Inspection Committee', '2025-03-25 03:21:55', '2025-03-25 03:21:55'),
(5, 'Dr. Ruperto D. Mendoza, Jr.', 'Chair, University Review and Evaluation Committee', '2025-03-25 03:22:18', '2025-03-25 03:22:18'),
(6, 'Dr. Analyn D. Saavedra', 'Chair, Research Ethics Oversight Committee (REOC)', '2025-03-25 03:22:39', '2025-03-25 03:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `coordinators`
--

CREATE TABLE `coordinators` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coordinators`
--

INSERT INTO `coordinators` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Asst. Prof. Julito B. Bande', 'Campus Coordinator, Alicia', '2025-03-25 03:32:21', '2025-03-25 03:32:21'),
(2, 'Mr. Noel A. Comeros', 'Campus Coordinator, Curuan', '2025-03-25 03:32:49', '2025-03-25 03:32:49'),
(3, 'Engr. Hernan N. Rosaldo II', 'Coordinator, Library and Archive', '2025-03-25 03:33:19', '2025-03-25 03:33:19'),
(4, 'Asst. Prof. Ariel M. Macailing', 'Campus Coordinator, Imelda', '2025-03-25 03:33:38', '2025-03-25 03:33:38'),
(5, 'Asst. Prof. Pacamalan, Leo Myco', 'Campus Coordinator, Siay', '2025-03-25 03:33:58', '2025-03-25 03:33:58'),
(6, 'Mr. Eryle Edvin E. Protacio', 'Coordinator, Local Studies', '2025-03-25 03:36:42', '2025-03-25 03:36:42'),
(7, 'Mr. Noel V. Pugosa', 'Campus Coordinator, Molave', '2025-03-25 03:38:34', '2025-03-25 03:38:34'),
(8, 'Engr. Hernan N. Rosaldo II', 'Coordinator, BIDANI', '2025-03-25 03:39:01', '2025-03-25 03:39:01'),
(9, 'Dr. Jiellzon Jaime T. Villarama', 'Coordinator, University Museum', '2025-03-25 03:39:21', '2025-03-25 03:39:21'),
(10, 'Dr. Carmela J. Go Silk', 'OIC – Campus Coordinator Diplahan', '2025-03-25 03:39:43', '2025-03-25 03:39:43'),
(11, 'Asst. Prof. Lolita R. Lacao-Lacao', 'OIC – Campus Coordinator Olutanga', '2025-03-25 03:39:59', '2025-03-25 03:39:59'),
(12, 'Asso. Prof. Divine Grace M. Marumas', 'Coordinator Instructional Support & Materials Production (ISMP)', '2025-03-25 03:40:20', '2025-03-25 03:40:20'),
(13, 'Asst. Prof. Michelle S. Paderan', 'OIC – Campus Coordinator of Mabuhay', '2025-03-25 03:40:37', '2025-03-25 03:40:37'),
(14, 'Asst. Prof. Arlyn O. Rebuza', 'Campus Coordinator College of Agriculture', '2025-03-25 03:40:56', '2025-03-25 03:40:56'),
(15, 'Asst. Prof. Nosca Bonna Ar D. Taasin', 'OIC – Campus Coordinator of Tungawan', '2025-03-25 03:41:13', '2025-03-25 03:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

CREATE TABLE `directors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(2, 'Dr. Leonilo B. Abella', 'Director, WESMAARRDEC Consortium', '2025-03-25 02:44:54', '2025-03-25 02:44:54'),
(3, 'Dr. Reynante E. Autida', 'Director, Research Development & Eval. Center', '2025-03-25 02:45:20', '2025-03-25 02:45:20'),
(4, 'Asso. Prof. Joselito R. Custodio', 'OIC – Director, Office of the Center for Continuing Education', '2025-03-25 02:45:43', '2025-03-25 02:45:43'),
(5, 'Engr. Mark L. Flores', 'Director, Data Protection and IT Security Officer', '2025-03-25 02:46:09', '2025-03-25 02:46:09'),
(6, 'Engr. Ferdinand S. Guardo', 'Director, Management Information Systems & Technology Office', '2025-03-25 02:46:38', '2025-03-25 02:46:38'),
(7, 'Asst. Prof. Al-Rashid T. Jama', 'Director, University Disaster Risk Reduction Management Office', '2025-03-25 02:47:02', '2025-03-25 02:47:02'),
(8, 'Asst. Prof. Norman Lloyd B. Manginsay', 'OIC – Director of University Sports Development Office', '2025-03-25 02:47:27', '2025-03-25 02:47:27'),
(9, 'Engr. Evelyn N. Angeles', 'Director, Office of the Student Affairs', '2025-03-25 02:47:49', '2025-03-25 02:47:49'),
(10, 'Dr. Mario R. Obra, Jr.', 'Director, Quality Management Office, International Relations Office & External Linkages', '2025-03-25 02:48:19', '2025-03-25 02:48:19'),
(11, 'Engr. Hernan N. Rosaldo II', 'OIC-Director, Department of Extension Services and Community Development', '2025-03-25 02:51:24', '2025-03-25 02:51:24'),
(12, 'Arch. Joseph Andrew L. Sahial', 'Director, Physical Plant concurrent capacity as the University Architect', '2025-03-25 02:51:50', '2025-03-25 02:51:50'),
(13, 'Dr. Roberto M. Sala', 'Director of WMSU – Affiliated Renewable Energy Center (AREC)', '2025-03-25 02:52:15', '2025-03-25 02:52:15'),
(14, 'Asso. Prof. Bernard Q. Suriaga', 'Director, University Center for Local Governance', '2025-03-25 02:52:45', '2025-03-25 02:52:45'),
(15, 'Ms. Rosalie T. Arcillas', 'Director, Finance', '2025-03-25 02:53:00', '2025-03-25 02:53:00'),
(16, 'Dr. Fuvie R. Bayot', 'Director, Distance Education', '2025-03-25 02:53:15', '2025-03-25 02:53:15'),
(17, 'Dr. Fini Joy P. Buenafe', 'Director, Guidance & Counseling Center', '2025-03-25 02:53:33', '2025-03-25 02:53:33'),
(18, 'Asst. Prof. Mary Grace M. Buñol', 'OIC – Director for Testing and Evaluation Center (TEC)', '2025-03-25 02:53:52', '2025-03-25 02:53:52'),
(19, 'Asso. Prof. Nerlyne C. Concepcion', 'Director, WMSU Career and Job Placement Center', '2025-03-25 02:54:28', '2025-03-25 02:54:28'),
(20, 'Asst. Prof. Ludivina B. Dekit', 'Director, Peace & Human Security Institute', '2025-03-25 02:54:47', '2025-03-25 02:54:47'),
(21, 'Dr. Marilou C. Elago', 'Director, Office of the Univ. Biosafety and Biosecurity Committee', '2025-03-25 02:55:03', '2025-03-25 02:55:03'),
(22, 'Dr. Vicenta T. Escobar', 'Director for Admissions Office', '2025-03-25 02:55:30', '2025-03-25 02:55:30'),
(23, 'Dr. Mariam Z. Julkarnain', 'Director, Gender Research & Resource Center', '2025-03-25 02:55:59', '2025-03-25 02:55:59'),
(24, 'Dr. Ma. Nora D. Lai', 'Director, Alumni Relations Office', '2025-03-25 02:56:20', '2025-03-25 02:56:20'),
(25, 'Dr. Melanie F. Lear', 'Director, Centro de Estudio Mindanao, concurrent capacity as Community Outreach and Development Advo', '2025-03-25 02:56:39', '2025-03-25 02:56:39'),
(26, 'Asso. Prof. Glory Jean G. Leonin', 'Director, Scholarship Office', '2025-03-25 02:57:47', '2025-03-25 02:57:47'),
(27, 'Asso. Prof. Maria Dolores J. Macrohon', 'Director, Office of Auxiliary Services', '2025-03-25 02:58:15', '2025-03-25 02:58:15'),
(28, 'Dr. Almira E. Nochefranca', 'Director, Office of the Culture and the Arts', '2025-03-25 02:58:36', '2025-03-25 02:58:36'),
(29, 'Dr. Aubrey F. Reyes', 'Director, Sentro ng Wika at Kultura', '2025-03-25 02:58:58', '2025-03-25 02:58:58'),
(30, 'Mrs. Ma. Teresita J. Rodriguez', 'Director for Administration', '2025-03-25 02:59:16', '2025-03-25 02:59:16'),
(31, 'Ms. Girlie C. Tangalin', 'Director National Service Training Program Office', '2025-03-25 02:59:37', '2025-03-25 02:59:37'),
(32, 'Dr. Lea E. Usman', 'Director, Public Affairs Office in concurrent capacity as Director of the Language Development Resou', '2025-03-25 03:00:04', '2025-03-25 03:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `external_studies_unit`
--

CREATE TABLE `external_studies_unit` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `external_studies_unit`
--

INSERT INTO `external_studies_unit` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Prof. Nicasio F. Gonzales', 'OIC- Campus Administrator, WMSU Curuan Campus', '2025-03-25 04:15:49', '2025-03-25 04:15:49'),
(2, 'Dr. Ariel Macailing', 'OIC-Campus Coordinator, WMSU Imelda', '2025-03-25 04:16:10', '2025-03-25 04:16:10'),
(3, 'Mr. Myco Leo B. Pacamalan', 'OIC-Campus Coordinator, WMSU Siay', '2025-03-25 04:16:39', '2025-03-25 04:16:39'),
(4, 'Mr. Reymond G. Paragas', 'OIC-Campus Coordinator, WMSU Naga', '2025-03-25 04:17:00', '2025-03-25 04:17:00'),
(5, 'Mr. Noel V. Pugosa', 'OIC-Campus Coordinator, WMSU Molave', '2025-03-25 04:17:21', '2025-03-25 04:17:21'),
(6, 'Mr. Nerio P. Sacro', 'OIC-Campus Coordinator, WMSU Aurora', '2025-03-25 04:17:35', '2025-03-25 04:17:35'),
(7, 'Dr. Carmela Go Silk', 'OIC-Campus Coordinator, WMSU Diplahan', '2025-03-25 04:17:48', '2025-03-25 04:17:48'),
(8, 'Ms. Lolita R. Lacao-Lacao', 'OIC-Campus Coordinator, WMSU Olutanga', '2025-03-25 04:18:02', '2025-03-25 04:18:02'),
(9, 'Asst. Prof. Erjorie Laguna', 'OIC-Campus Coordinator, WMSU Malangas', '2025-03-25 04:18:16', '2025-03-25 04:18:16'),
(10, 'Ms. Felwyn Lovely R. Natividad', 'OIC-Campus Coordinator, WMSU Ipil', '2025-03-25 04:18:31', '2025-03-25 04:18:31'),
(11, 'Ms. Michelle S. Paderan', 'OIC-Campus Coordinator, WMSU Mabuhay', '2025-03-25 04:18:43', '2025-03-25 04:18:43'),
(12, 'Ms. Criselda D. Ricohermoso', 'OIC-Campus Coordinator, WMSU Pagadian', '2025-03-25 04:18:58', '2025-03-25 04:18:58'),
(13, 'Ms. Nosca Bonna Ar D. Taasin', 'OIC-Campus Coordinator, WMSU Tungawan', '2025-03-25 04:19:14', '2025-03-25 04:19:14'),
(14, 'Ms. Abigail Villamor', 'OIC-Campus Coordinator, WMSU Alicia', '2025-03-25 04:19:29', '2025-03-25 04:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `graduate_school_head`
--

CREATE TABLE `graduate_school_head` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `graduate_school_head`
--

INSERT INTO `graduate_school_head` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Asst. Prof. Leo A. Hermosilla', 'CSSPE', '2025-03-25 03:25:33', '2025-03-25 03:25:33'),
(3, 'Dr. Arnel R. Madrazo', 'Chair, Graduate School, College of Teacher Education on concurrent Coordinator of the Research for Utilization, Publication and Information', '2025-03-25 03:26:53', '2025-03-25 03:26:53'),
(4, 'Dr. Rochelleo E. Mariano', 'College of Science & Mathematics', '2025-03-25 03:29:10', '2025-03-25 03:29:10'),
(5, 'Engr. Nurwin Adam O. Muhammad', 'College of Engineering', '2025-03-25 03:29:36', '2025-03-25 03:29:36'),
(6, 'Dr. Johana J. Abdula', ' College of Criminal Justice Education', '2025-03-25 03:29:56', '2025-03-25 03:29:56'),
(7, 'Dr. Rubelle Marshah H. Alavar', 'College of Nursing', '2025-03-25 03:30:25', '2025-03-25 03:30:25'),
(8, 'Asso. Prof. Marites A. Barrios', 'College of Home Economics', '2025-03-25 03:30:49', '2025-03-25 03:30:49'),
(9, 'Asso. Prof. Wylen L. Lipanglipang', 'CSWCD', '2025-03-25 03:31:07', '2025-03-25 03:31:07'),
(10, 'Dr. Fadzralyn A. Karanain', 'Chair of the Graduate School, College of Liberal Arts', '2025-03-25 03:31:25', '2025-03-25 03:31:25'),
(11, 'Asst. Prof. Emerissa Jane L. Tendero', 'Chair of Graduate, College of Public Administration and Development Studies', '2025-03-25 03:31:47', '2025-03-25 03:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `ils_principals`
--

CREATE TABLE `ils_principals` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ils_principals`
--

INSERT INTO `ils_principals` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Riah Barcelona', 'Principal. ILS -High School', '2025-03-25 03:01:36', '2025-03-25 03:01:36'),
(2, 'Dr. Anna Louisa R. Perez', 'Principal, ILS- Elementary', '2025-03-25 03:01:59', '2025-03-25 03:01:59');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Dr. Russel J. Ingkoh', 'Marketing Service Manager', '2025-03-25 03:23:01', '2025-03-25 03:23:01'),
(2, 'Engr. Antonio Angelo J. Limbaga', 'MITHI', '2025-03-25 03:23:20', '2025-03-25 03:23:20'),
(3, 'Asso. Prof. Joel C. Macasinag', 'Manager University PRESS', '2025-03-25 03:24:12', '2025-03-25 03:24:12'),
(4, 'Mr. Angelito B. Noynay', 'Manager of the Garment Shop', '2025-03-25 03:24:34', '2025-03-25 03:24:34'),
(5, 'Atty. Maria Luisa Pilar C. Elago', 'Manager of the Innovation and Technology Support Office (ITSO)', '2025-03-25 03:24:53', '2025-03-25 03:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `opstaff`
--

CREATE TABLE `opstaff` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opstaff`
--

INSERT INTO `opstaff` (`id`, `name`, `title`, `page_link`, `created_at`, `updated_at`) VALUES
(3, 'Dr. Berhana I. Flores', 'Chief of Staff, Office of the President', 'chief-of-staff', '2025-03-25 02:41:54', '2025-03-25 02:41:54'),
(4, 'Asso. Prof. Darlyn P. Flores', 'Special Assistant to the President', 'special-assistant-to-president', '2025-03-25 02:42:32', '2025-03-25 02:42:32'),
(5, 'Asst. Prof. Aldrin S. Valerio', 'Executive Assistant to the Office of the President', 'executive-assistant-to-president', '2025-03-25 02:43:12', '2025-03-25 02:43:12'),
(6, 'Dr. Shamir R. Kassim', 'University Curriculum Chair/Executive Assistant for Special Academic Affairs Concerns', 'university-curriculum-chair', '2025-03-25 02:44:00', '2025-03-25 02:44:00');

-- --------------------------------------------------------

--
-- Table structure for table `other_services`
--

CREATE TABLE `other_services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `other_services`
--

INSERT INTO `other_services` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Asso. Prof. Eric Roland R. Natividad', 'Moderator, University Theatre Guild', '2025-03-25 03:53:14', '2025-03-25 03:53:14'),
(2, 'Mr. Anthony B. Barandino', 'Moderator, Visual Arts', '2025-03-25 03:53:35', '2025-03-25 03:53:35'),
(3, 'Mr. Nathaniel G. Saavedra', 'Moderator, Jambangan Dance Troupe', '2025-03-25 03:53:52', '2025-03-25 03:53:52'),
(4, 'Arch. Joseph Andrew L. Sahial', 'University Project Management Officer', '2025-03-25 03:54:07', '2025-03-25 03:54:07'),
(5, 'Dr. Jeremiah D. Calisang', 'Moderator, WMSU Grand Chorale', '2025-03-25 03:54:23', '2025-03-25 03:54:23'),
(6, 'Asst. Prof. Ruzzel L. Nazario', 'Moderator, Literary Arts', '2025-03-25 03:54:44', '2025-03-25 03:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `president`
--

CREATE TABLE `president` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `president`
--

INSERT INTO `president` (`id`, `name`, `title`, `page_link`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Dr. Ma. Carla A. Ochotorena', 'University President', 'office-of-president', 'none pa', '2025-03-24 19:05:15', '2025-03-24 19:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `section_chiefs`
--

CREATE TABLE `section_chiefs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section_chiefs`
--

INSERT INTO `section_chiefs` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Eric H. Alfaro', 'University Registrar', '2025-03-25 03:44:21', '2025-03-25 03:44:21'),
(2, 'Mr. John Paul S. Alvarez', 'Supervising Administrative Officer (Finance)', '2025-03-25 03:44:36', '2025-03-25 03:44:36'),
(3, 'Dr. Benhur A. Asid', 'University Librarian', '2025-03-25 03:44:53', '2025-03-25 03:44:53'),
(4, 'Mr. Erlando G. Coros', 'Chief Security Services', '2025-03-25 03:45:08', '2025-03-25 03:45:08'),
(5, 'Engr. Edgar A. Demayo', 'Engineer III', '2025-03-25 03:45:27', '2025-03-25 03:45:27'),
(6, 'Engr. Ricardo B. Gonzales', 'University Electrical Engineer on concurrent Chairman of the Inspection Committee', '2025-03-25 03:45:48', '2025-03-25 03:45:48'),
(7, 'Mr. Alen M. Marcelino', 'Head, Motorpool', '2025-03-25 03:46:41', '2025-03-25 03:46:41'),
(8, 'Mr. Alfredo D. Montero', 'Supply Officer III', '2025-03-25 03:47:04', '2025-03-25 03:47:04'),
(9, 'Mr. Ariel R. Perez', 'Labor General Foreman', '2025-03-25 03:47:22', '2025-03-25 03:47:22'),
(10, 'Mr. Joerland- Jansen R. Reyes', 'Property Management Office', '2025-03-25 03:47:53', '2025-03-25 03:47:53'),
(11, 'Atty. Roberto Rivero III', 'Attorney IV', '2025-03-25 03:48:07', '2025-03-25 03:48:07'),
(12, 'Dr. Oscar S. Sicat', 'Supervising Administrative Officer', '2025-03-25 03:48:24', '2025-03-25 03:48:24'),
(13, 'Ms. Suzette G. Ducanes', 'Budget Officer', '2025-03-25 03:48:45', '2025-03-25 03:48:45'),
(14, 'Dr. Felicitas Asuncion C. Elago', 'Medical Officer III', '2025-03-25 03:49:04', '2025-03-25 03:49:04'),
(15, 'Ms. Ma. Teresita J. Rodriguez', 'OIC-Human Resource Management Officer III on concurrent capacity Director for Administration', '2025-03-25 03:49:24', '2025-03-25 03:49:24'),
(16, 'Mrs. Erlinda C. Macaso', 'Records Officer III', '2025-03-25 03:49:49', '2025-03-25 03:49:49'),
(17, 'Ms. Venus Lyn C. Martin', 'Internal Auditor III', '2025-03-25 03:50:05', '2025-03-25 03:50:05'),
(18, 'Ms. Lallaine Anne. L. Mariano', 'Cashier III', '2025-03-25 03:50:51', '2025-03-25 03:50:51'),
(19, 'Ms. Abigail Irene B. Marquez', 'Information Officer III', '2025-03-25 03:51:13', '2025-03-25 03:51:13'),
(20, 'Ms. Cristianne Dawn R. Sicat', 'OIC – Accountant II', '2025-03-25 03:51:32', '2025-03-25 03:51:32'),
(21, 'Ms. Darea Jonnah B. Soliterio', 'APA, President', '2025-03-25 03:51:50', '2025-03-25 03:51:50'),
(22, 'Mrs. Carolina E. Tejero', 'General Services', '2025-03-25 03:52:05', '2025-03-25 03:52:05'),
(23, 'Ms. Debra Ann M. Ponce', 'University Planning Officer III', '2025-03-25 03:52:42', '2025-03-25 03:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `technical_assistants`
--

CREATE TABLE `technical_assistants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technical_assistants`
--

INSERT INTO `technical_assistants` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Edwin I. Arip', 'Tech. Associate (BS Com Sci)', '2025-03-25 03:12:18', '2025-03-25 03:12:18'),
(2, 'Engr. Ahmedzam S. Nasaluddin', 'Tech. Associate Under the Office of the President, for the infrastructure Project concurrent capacit', '2025-03-25 03:12:46', '2025-03-25 03:12:46'),
(3, 'Mr. Victor Ryan H. Tangalin', 'Technical Associate, Center for Hands of Goodwill', '2025-03-25 03:13:05', '2025-03-25 03:13:05'),
(4, 'Asso. Prof. Ryan B. Cabangcala', 'Technical Associate to the Vice President for Research Extension Services and External Linkages', '2025-03-25 03:13:27', '2025-03-25 03:13:27'),
(5, 'Dr. Shamir R. Kassim', 'Executive Assistant for Special Academic concerns at the Office of the President', '2025-03-25 03:14:09', '2025-03-25 03:14:09'),
(8, 'Engr. Marlon C. Grande', 'Technical Associate for the Community Outreach and Development Advocacy Program (CODAP) in concurrent capacity as the Extension Coordinator of the College of Engineering', '2025-03-25 03:18:15', '2025-03-25 03:18:15'),
(9, 'Dr. Johana J. Abdula', 'Tech. Asso. for the External Studies Unit – BS Crim. Program', '2025-03-25 03:19:20', '2025-03-25 03:19:20'),
(10, 'Asso. Prof. Abigail F. Antonio', 'Technical Associate to the Vice President for Academic Affairs', '2025-03-25 03:19:36', '2025-03-25 03:19:36'),
(11, 'Asst. Prof. Mercendes A. Bejerano', 'Tech. Asst. to the Vice-President for Academic Affairs', '2025-03-25 03:19:54', '2025-03-25 03:19:54'),
(12, 'Ms. Bernadeth A. Encarnacion', 'Tech. Asso. for the External Studies Unit – BS Crim. Program', '2025-03-25 03:20:12', '2025-03-25 03:20:12'),
(13, 'Dr. Melanie A. Turco', 'Technical Associate to the Vice President for Administration and Finance', '2025-03-25 03:20:29', '2025-03-25 03:20:29');

-- --------------------------------------------------------

--
-- Table structure for table `university_board_secretary`
--

CREATE TABLE `university_board_secretary` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `university_board_secretary`
--

INSERT INTO `university_board_secretary` (`id`, `name`, `title`, `created_at`, `updated_at`) VALUES
(5, 'Asso. Prof. Al-Ghani D. Mohammad', 'Univ. and Board Secretary', '2025-03-25 02:44:36', '2025-03-25 02:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `vice_presidents`
--

CREATE TABLE `vice_presidents` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `page_link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vice_presidents`
--

INSERT INTO `vice_presidents` (`id`, `name`, `title`, `page_link`, `created_at`, `updated_at`) VALUES
(3, 'Dr. Nursia M. Barjose', 'Vice President for Academic Affairs', 'ovp-for-academic-affair', '2025-03-25 02:37:03', '2025-03-25 02:37:03'),
(4, 'Dr. Joel G. Fernando', 'Vice President for Research Extension Services & External Linkages', 'ovp-for-research-and-extension', '2025-03-25 02:38:20', '2025-03-25 02:38:20'),
(5, 'Dr. Joselito D. Madroñal', 'Vice President for Administration and Finance', 'ovp-for-administrative-and-finance', '2025-03-25 02:39:07', '2025-03-25 02:39:07'),
(6, 'Dr. Teresita A. Narvaez', 'Vice President for Resource Generation in concurrent capacity as Agribusiness Department Chair', 'ovp-for-resource-generation', '2025-03-25 02:39:58', '2025-03-25 02:39:58'),
(7, 'Dr. Fredelino M. San Juan', 'Vice President for Student Affairs and Services in concurrent capacity as Director of Special Progra', 'ovp-for-student-affairs-and-services', '2025-03-25 02:40:52', '2025-03-25 02:40:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_deans`
--
ALTER TABLE `academic_deans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assistant_directors`
--
ALTER TABLE `assistant_directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `associate_deans`
--
ALTER TABLE `associate_deans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_of_regents`
--
ALTER TABLE `board_of_regents`
  ADD UNIQUE KEY `rank` (`rank`);

--
-- Indexes for table `campus_administrators`
--
ALTER TABLE `campus_administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chairpersons`
--
ALTER TABLE `chairpersons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coordinators`
--
ALTER TABLE `coordinators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `external_studies_unit`
--
ALTER TABLE `external_studies_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduate_school_head`
--
ALTER TABLE `graduate_school_head`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ils_principals`
--
ALTER TABLE `ils_principals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opstaff`
--
ALTER TABLE `opstaff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_services`
--
ALTER TABLE `other_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `president`
--
ALTER TABLE `president`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_chiefs`
--
ALTER TABLE `section_chiefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_assistants`
--
ALTER TABLE `technical_assistants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_board_secretary`
--
ALTER TABLE `university_board_secretary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_deans`
--
ALTER TABLE `academic_deans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `assistant_directors`
--
ALTER TABLE `assistant_directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `associate_deans`
--
ALTER TABLE `associate_deans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `campus_administrators`
--
ALTER TABLE `campus_administrators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chairpersons`
--
ALTER TABLE `chairpersons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `coordinators`
--
ALTER TABLE `coordinators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `directors`
--
ALTER TABLE `directors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `external_studies_unit`
--
ALTER TABLE `external_studies_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `graduate_school_head`
--
ALTER TABLE `graduate_school_head`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ils_principals`
--
ALTER TABLE `ils_principals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `opstaff`
--
ALTER TABLE `opstaff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other_services`
--
ALTER TABLE `other_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `president`
--
ALTER TABLE `president`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `section_chiefs`
--
ALTER TABLE `section_chiefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `technical_assistants`
--
ALTER TABLE `technical_assistants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `university_board_secretary`
--
ALTER TABLE `university_board_secretary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vice_presidents`
--
ALTER TABLE `vice_presidents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
