-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2024 at 12:02 PM
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
-- Database: `parikhandassociates`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_blog_tbl`
--

CREATE TABLE `about_blog_tbl` (
  `blog_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `description` varchar(355) NOT NULL,
  `blog_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_blog_tbl`
--

INSERT INTO `about_blog_tbl` (`blog_id`, `on_screen`, `blog_title`, `description`, `blog_img`) VALUES
(1, 'Y', 'Our Mission', 'To provide the highest quality of professional services with excellence and ensuring the integrity & standing of the\r\n profession.', 'mission2.jpg'),
(3, 'Y', 'Our Vision', 'To be a leading professional service provider with an aim of setting a benchmark of quality and expertise.', 'vision12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `about_company_tbl`
--

CREATE TABLE `about_company_tbl` (
  `about_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `description` text NOT NULL,
  `abou_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `about_company_tbl`
--

INSERT INTO `about_company_tbl` (`about_id`, `on_screen`, `description`, `abou_img`) VALUES
(1, 'Y', '<h2>Parikh &amp; Associates</h2>\r\n\r\n<p><strong>&ldquo;Where Excellence Meets Expertise!&quot;</strong></p>\r\n\r\n<p>At<strong>&nbsp;Parikh &amp; Associates (P&A)</strong>, we take pride in being a Chartered Accountancy Firm committed to delivering exceptional financial services and\r\nsolutions. With a dedicated team of seasoned professionals, we strive to provide our clients with tailored strategies and personalized guidance to\r\nachieve their financial goals.</p>\r\n\r\n<p>Our firm\'s foundation is built on integrity, trust, and a relentless pursuit of excellence. For years, we have been a trusted partner to businesses\r\nand individuals alike, offering a wide range of services, including tax planning, audit, accounting, and financial consulting.</p>\r\n\r\n<p>We understand the dynamic challenges of today\'s business landscape and are equipped to navigate complex financial matters with precision and\r\nforesight. Our client-centric approach ensures that we not only meet but exceed expectations, fostering long-lasting relationships built on mutual\r\ngrowth and success.</p>\r\n\r\n<p>At Parikh & Associates, we are driven by innovation and constantly adapt to the evolving industry landscape, staying ahead of the curve to\r\ndeliver progressive solutions that drive your financial success.</P>\r\n', 'aboutparikh1.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog_detail_tbl`
--

CREATE TABLE `blog_detail_tbl` (
  `blog_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `title` varchar(100) NOT NULL,
  `now_date` date NOT NULL,
  `description1` text NOT NULL,
  `description2` text NOT NULL,
  `blog_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_id` int(12) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about_comany` varchar(255) NOT NULL,
  `contact_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`contact_id`, `mobile`, `email_id`, `address`, `about_comany`, `contact_map`) VALUES
(1, '9313412477', 'info@parikhandassociates.in', '308, Akshar Stadia, Opp Symphony House, Sterling Cancer Hospital Road, Bodakdev, Ahmedabad-380054', 'PARIKH & ASSOCIATES is a Chartered Accountancy Firm in Ahmedabad offering a full suite of professional services under one roof.', '<p><iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7343.237718757442!2d72.50003632219396!3d23.037762539781244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b4420f7653f%3A0x2ffa9484e7788592!2sParikh%20%26%20Associates!5e0!3m2!1sen!2sin!4v1593421961778!5m2!1sen!2sin\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry_detail_tbl`
--

CREATE TABLE `inquiry_detail_tbl` (
  `inq_id` int(12) NOT NULL,
  `cust_name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `org_name` varchar(100) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `joinind_at_tbl`
--

CREATE TABLE `joinind_at_tbl` (
  `req_id` int(12) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `add` varchar(255) NOT NULL,
  `grouped` varchar(50) NOT NULL,
  `exp` varchar(30) NOT NULL,
  `msg` text NOT NULL,
  `file_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `login_id` int(12) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`login_id`, `user_name`, `email_id`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'suman');

-- --------------------------------------------------------

--
-- Table structure for table `main_header_menu_tbl`
--

CREATE TABLE `main_header_menu_tbl` (
  `main_header_id` int(12) NOT NULL,
  `on_screen` char(1) DEFAULT NULL,
  `main_header_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `main_header_menu_tbl`
--

INSERT INTO `main_header_menu_tbl` (`main_header_id`, `on_screen`, `main_header_name`) VALUES
(1, 'Y', 'Risk Advisory'),
(3, 'Y', 'Business Support Services'),
(6, 'Y', 'Taxation'),
(10, 'Y', 'Assurance and Advisory'),
(11, 'Y', 'Gift City');

-- --------------------------------------------------------

--
-- Table structure for table `our_key_point_tbl`
--

CREATE TABLE `our_key_point_tbl` (
  `key_id` int(12) NOT NULL,
  `key_point_title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `our_key_point_tbl`
--

INSERT INTO `our_key_point_tbl` (`key_id`, `key_point_title`, `description`) VALUES
(1, 'Specialized Team', 'Delivering Value Added services through our Qualified Professionals & Dynamic Team.'),
(2, 'Time & Money Saving', 'It’s a \"One Stop Shop\" for all your Accounting, Compliance & Business Consultation needs.'),
(3, 'Growth Strategy', 'Tailor made approach towards each assigment ensuring Growth & Resource Optimization for our Clients.');

-- --------------------------------------------------------

--
-- Table structure for table `our_team_tbl`
--

CREATE TABLE `our_team_tbl` (
  `profile_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `name_team` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `designetion` varchar(50) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `profile_img` text NOT NULL,
  `fac_url` text NOT NULL,
  `twitr_url` text NOT NULL,
  `insta_url` text NOT NULL,
  `linked_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `our_team_tbl`
--

INSERT INTO `our_team_tbl` (`profile_id`, `on_screen`, `name_team`, `mobile`, `email_id`, `designetion`, `short_description`, `description`, `profile_img`, `fac_url`, `twitr_url`, `insta_url`, `linked_url`) VALUES
(4, 'Y', 'CA Vedant K. Parikh', '9427261777', 'vedant@parikhandassociates.in', 'Partner', 'Vedant K. Parikh, Managing Partner of the firm has\r\nexperience of more than 8 years in the field of Bank Audit,\r\nRisk Based Internal Audit and Statutory Audit. His area of\r\nexpertise includes Due Diligence Reporting, System Audit,\r\nManagement Advisory...', '<p><strong>QUALIFICATIONS</strong></p>\r\n\r\n<p>(FCA, B.Com)</p>\r\n\r\n<p><strong>CERTIFICATIONS</strong></p>\r\n\r\n<p>Concurrent Bank Audit</p>\r\n\r\n<p>Forensic Accounting &amp;&nbsp;Fraud Detection</p>\r\n\r\n<p><strong>WORK EXPERIENCE</strong></p>\r\n\r\n<p>Vedant K. Parikh, Managing Partner of the firm has experience of more than 8 years. His area of expertise includes:</p>\r\n\r\n<ul>\r\n	<li><p>Bank Audit</p></li>\r\n	<li><p>Risk-Based Internal Audit</p></li>\r\n	<li><p>Due Diligence Reporting</p></li>\r\n	<li><p>System Audit</p></li>\r\n	<li><p>Statutory Audit</p></li>\r\n	<li><p>Management Advisory</p></li>\r\n</ul>\r\n\r\n<p>He has been duly appointed as Professional Director in Banking,\r\nManufacturing and IT Industry Companies.\r\n</p>\r\n\r\n<p>He is also pursuing Diploma in System Audit (DISA) from Institute of\r\nChartered Accountants of India (ICAI) and Valuation Course from\r\nInsolvency and Bankruptcy Board of India (IBBI).\r\n</p>\r\n\r\n<p>Vedant is an active member at Ahmedabad Branch of WIRC of ICAI and\r\nhas been part of various committees of the Branch.</p>\r\n\r\n<p>Vedant has also been empaneled speaker of WIRC of ICAI and has\r\ntaken webinars at various platforms including ICAI, Connect Easy, Maha\r\nSewa, PDEXCIL and various private platforms involving participation of\r\nmembers from PAN India on the topics including Bank Audit, TDS and\r\nMSME.</p>\r\n', 'team11.jpg', 'https://www.facebook.com/vedant.parikh777', 'https://twitter.com/VedantKParikh', 'https://www.instagram.com/vedantkparikh/', 'https://www.linkedin.com/in/vedant-parikh-16267a98/'),
(5, 'Y', 'CA Kamal Bhandari', '9876543210', 'info@parikhandassociates.in', 'Partner', 'Taxation Partner of the firm, Kamal Bhandari, has a rich experience of working\r\non various direct as well as indirect Tax assignments specializing into Tax\r\nAdvisory and Compliances. His area of expertise includes analysis of Discrete tax\r\nissues...', '<p><strong>QUALIFICATIONS</strong></p>\r\n\r\n<p>(ACA, B.Com)</p>\r\n\r\n<p><strong>WORK EXPERIENCE</strong></p>\r\n\r\n<p>Taxation Partner of the firm, Kamal Bhandari, has a rich experience of working\r\non various direct as well as indirect Tax assignments specializing into Tax\r\nAdvisory and Compliances. His area of expertise includes analysis of Discrete tax\r\nissues adhering to legal and regulatory framework.\r\n</p>\r\n\r\n<p>He was associated with a reputed Vadodara based CA Firm, JLN US & Co. in his\r\ninitial phase of career where apart from handling various taxation assignments,\r\nhe has gained expertise over varied other nature of assignments such as:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Due diligence of more than 150 customers,</p>\r\n	</li>\r\n	<li>\r\n	<p>Equity valuation of more than 100 delisted companies,</p>\r\n	</li>\r\n	<li>\r\n	<p>Third party vendor audits of over 80 Locations,</p>\r\n	</li>\r\n	<li>\r\n	<p>Transfer pricing,</p>\r\n	</li>\r\n	<li>\r\n	<p>Surveyor audit</p>\r\n	</li>\r\n</ul>\r\n', 'team21.jpg', 'https://www.facebook.com/kamal.bhandari.121', 'https://twitter.com/KamalBh77295983', 'http://www.instagram.com/kamalmbhandari', 'https://www.linkedin.com/in/kamal-bhandari-6b89bb112'),
(7, 'Y', 'CA Jainam P. Shah', '9429966332', 'jainam@parikhandassociates.in', 'Partner', 'Jainam Shah, Assurance and Advisory Partner of the firm has experience of\r\nmore than 9 years in the field of audit and assurance specializing in\r\nmanufacturing industry by handling multi-location statutory audits for\r\nmultinational listed entities...', '<p><strong>QUALIFICATIONS</strong></p>\r\n\r\n<p>(FCA, DISA, B.Com)</p>\r\n\r\n<p><strong>CERTIFICATIONS</strong></p>\r\n\r\n<p>GST Practitioner Course (MSME Certified)</p>\r\n\r\n<p>Concurrent Audit of Banks (ICAI Certified)</p>\r\n\r\n<p><strong>WORK EXPERIENCE</strong></p>\r\n\r\n<p>Jainam Shah, Assurance and Advisory Partner of the firm has experience of\r\nmore than 9 years in the field of audit and assurance specializing in\r\nmanufacturing industry by handling multi-location statutory audits for\r\nmultinational listed entities.</p>\r\n\r\n<p>He was associated with Deloitte Haskin & Sells as Deputy Manager in\r\nAssurance Division for more than 3 years. Apart from handling assurance\r\nassignments, he has gained expertise over varied other nature of\r\nassignments such as:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Limited Reviews</p>\r\n	</li>\r\n	<li>\r\n	<p>Ind AS Conversion Assignments</p>\r\n	</li>\r\n	<li>\r\n	<p>Designing of Risk Control Matrices</p>\r\n	</li>\r\n	<li>\r\n	<p>IND AS Conversion Assignment</p>\r\n	</li>\r\n<p>Designing of Standard Operating Procedures</p>\r\n	</li>\r\n	<li>\r\n	<p>Financial control Implementation and Reporting</p>\r\n	</li>\r\n	<li>\r\n	<p>US GAAP and IFRS Reporting Assignments</p>\r\n	</li>\r\n</ul>\r\n', 'team31.jpg', 'https://m.facebook.com/jainam.shah.9615/about?lst=100004016075901%3A100004016075901%3A1570900354&refid=17', 'https://twitter.com/', 'https://www.instagram.com/jainam_279', 'https://www.linkedin.com/in/jainam-shah-68b68a9a');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_file_tbl`
--

CREATE TABLE `pdf_file_tbl` (
  `pdf_id` int(15) NOT NULL,
  `tr_typ` int(15) NOT NULL,
  `tra_pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services_detail_tbl`
--

CREATE TABLE `services_detail_tbl` (
  `servise_id` int(12) NOT NULL,
  `on_screen` varchar(255) DEFAULT NULL,
  `header_manu_fk_id` int(12) NOT NULL,
  `header_sub_menu_fk_id` int(12) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `small_image` varchar(250) DEFAULT NULL,
  `long_image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `services_detail_tbl`
--

INSERT INTO `services_detail_tbl` (`servise_id`, `on_screen`, `header_manu_fk_id`, `header_sub_menu_fk_id`, `short_description`, `description`, `small_image`, `long_image`) VALUES
(13, 'Y', 1, 7, 'Internal Audit is an ideal tool to lessen gaps and loopholes between the varied business processes and execution..... ', '<p><strong>Internal Audit</strong> is an ideal tool to lessen gaps and loopholes between the varied business processes and execution strategies of an entity in different commonplace office functions such as HR, Finance, Risk and Statutory compliances', 's4.jpg', 'internal.jpg'),
(15, 'Y', 10, 9, 'i will go further ', '<p>gsdfgsdfgsdfgfsdgfsdgfgdf</p>\r\n\r\n<p>&#39;kjo;d;<br />\r\nds;ljsl sjo, ndfl lnl dflnl lk</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>nflkdkljk;jkdf</p>\r\n', 'Desert.jpg', 'Penguins.jpg'),
(16, 'Y', 1, 13, 'Forensic auditors or say forensic accountants own the special skills to document & detect fraud. ..', '<h3>What is Forensic Audit</h3>\r\n\r\n<p>Actually, the term <strong>forensic Audit</strong> is not defined anywhere.&nbsp;Though there is a minute difference in the two concepts, normally, forensic accounting is used as the synonym to the forensic audit', 's4.jpg', 'forensic_audit.jpg'),
(17, 'Y', 1, 14, 'The focus of Propriety Audit is on the efficiency, the authority structure, rules and regulations..', '<p>The focus of <strong>Propriety Audit </strong>is on the efficiency, the authority structure, rules and regulations and monetary discipline as well as the protection of public interest. Propriety audit is all about the making the actions and the de', 's22.jpg', 'managment_audit.jpg'),
(18, 'Y', 1, 15, 'Today, Information technology is a vital part of all the business operations. In order to operate....', '<p>Today, Information technology is a vital part of all the business operations. In order to operate, almost every part of the business relies on technology and networks. There are so many benefits of this exciting and rewarding field of <strong>info', 's23.jpg', 'information.jpg'),
(19, 'Y', 1, 16, 'At Parikh & Associates, we provide verification services by way of certification as it may be required.......', '<p>At Parikh &amp; Associates, we provide verification services by way of certification as it may be required under law for the time being in force, prerequisite of the management or others.</p>\r\n', 's213.jpg', 'certificate.jpg'),
(20, 'Y', 3, 3, 'IFRS stands for the International Financial Reporting Standards. It is the international accounting framework..', '<p><strong>IFRS</strong> stands for the <strong>International Financial Reporting Standards</strong>. It is the international accounting framework to organize correctly as well as to report the financial information. IFRS is resultant term of the sta', 's214.jpg', 'ifrs_gars.jpg'),
(21, 'Y', 3, 17, 'An elementary of accounting is based on Book keeping. Bookkeeping refers to the maintenance of daily business records..', '<p>An elementary of accounting is based on <strong>Book keeping.</strong> Book keeping refers to the maintenance of daily business records. It is the skill for recording financial transactions with the help of relevant documents and papers. Therefore', 's12.jpg', 'book_keeping.jpg'),
(22, 'Y', 3, 18, 'Regulatory compliances guarantee an entity\'s devotion to rules, regulations, laws and policies...', '<p><strong>Regulatory compliances</strong> guarantee an entity&#39;s devotion to rules, regulations, laws and policies. We know various laws administer an entity. We support an entity&#39;s aim to obey with relevant policies, laws, and regulations.</', 's215.jpg', 'compliances.jpg'),
(23, 'Y', 3, 19, 'An entity prepares its financial statements willingly or as consent by the laws under which the entity is covered.........', '<p>An entity prepares its financial statements willingly or as consent by the laws under which the entity is covered. Financial Statements shows the wellness of an entity.</p>\r\n\r\n<p>The team of the certified accountants produces all financial stateme', 's216.jpg', 'financial_stmt.jpg'),
(25, 'Y', 6, 5, 'Organizations, from lower market to the multinational firms are open to the elements to changing trends in tax regulations..', '<p>Organizations, from lower market to the multinational firms are open to the elements to changing trends in tax regulations. Approach to tax is changing. Tax decisions are under amendment like never before.</p>\r\n\r\n<p>In this scenario, specialist ad', 'taxation.jpg', 'application.jpg'),
(26, 'Y', 6, 22, 'Indian tax law needs the strategic approach and a spectrum of ploys so that you are well placed for tax savings,', '<p>Indian tax law needs the strategic approach and a spectrum of ploys so that you are well placed for tax savings.</p>\r\n\r\n<p><strong>You can have our services as follow:</strong></p>\r\n\r\n<ul>\r\n	<li>Replying to a range of Income Tax Notices</li>\r\n	<li', 's217.jpg', 'return.jpg'),
(27, 'Y', 6, 23, 'Parikh & Associates one of the leading tax advisory companies in Ahmedabad specializing in tax consultancy...', '<p>Parikh &amp; Associates one of the leading tax advisory companies in Ahmedabad specializing in tax consultancy. We provide stepwise guidance for the pre and post introduction of GST. We understand the rules of competition and set high standards fo', 's218.jpg', 'tax_advisory.jpg'),
(28, 'Y', 6, 24, 'We advise on planning of all the income tax related issues relating to Direct tax. We also provide services in relation..', '<p>We advise on planning of all the income tax related issues relating to Direct tax. We also provide services in relation to Auditing under Incometax Act and the regulatory framework and issung report in prescribed formats.</p>\r\n\r\n<p>These services ', 's219.jpg', 'auditing.jpg'),
(29, 'Y', 7, 2, 'RERDA’s Section 3 forbids Sale or Marketing of a Real Estate Project without registration with RERA. Without registering...', '<p>RERDA&rsquo;s Section 3 forbids Sale or Marketing of a Real Estate Project without registration with RERA. Without registering the real estate project with the Real Estate Regulatory Authority established under this Act any plot, apartment or buil', 'rera.jpg', 'regiration.jpg'),
(30, 'Y', 7, 6, 'The commencement of RERA is aimed to bring to an end the misconduct of the builders mollycoddle the facilities.', '<p>The commencement of <strong>RERA </strong>is aimed to bring to an end the misconduct of the builders mollycoddle the facilities. As per the Section 4(2) of the RERA, it is compulsory the amounts from the separate bank account (in which 70% of the ', 's24.jpg', 'rera2.jpg'),
(31, 'Y', 5, 4, 'The liability of partners is limited in case of an LLP whereas, partners are personally liable for debts of the business ,,,', '<h3>What is an LLP?</h3>\r\n\r\n<p><strong>Limited Liability Partnerships</strong> are normally called with their abbreviated form as <strong>LLP&rsquo;s</strong>. It is a fusion structure between a partnership firm &amp; a private limited company. In LL', 'corporate_service.jpg', 'llp.jpg'),
(32, 'Y', 5, 25, 'Due Diligence Review (DDR) is a process in which an individual or an organization need ample information about a business..', '<p><strong>Due Diligence</strong> is generally used as the <strong>pre-investment intelligence tool</strong> by investing partners / stakeholders to obtain the advanced and independent report relating to the investee&rsquo;s credentials.</p>\r\n\r\n<p><s', 'corporate_service.jpg', 'Dilligence.jpg'),
(33, 'Y', 5, 26, 'We always prefer to discuss with the client the span of DDR to provide the best consultation for the DUE DILIGENCE REVIEW.', '<p>We always prefer to discuss with the client the span of DDR to provide the best consultation for the DUE DILIGENCE REVIEW. It is not limited to monetary due diligence but extends to technical due diligence, systems due diligence, market due dilige', 's2112.jpg', 'range.jpg'),
(34, 'Y', 5, 27, 'The operations for DDR are depend upon the nature of the goal and span define by the client. ', '<h3>What is a Standard Operating Procedure (SOP)?</h3>\r\n\r\n<p>For an entity to be motivated with a regular purpose of business growth need efficient compliance of internal controls and procedures. Every entity runs with a distinct set of protocols. A ', 's2113.jpg', 'operation.jpg'),
(35, 'Y', 5, 28, 'An entity deploys the risk assessment matrix to gauge the extent of a risk and to conclude whether they have apt....', '<p>An entity deploys the risk assessment matrix to gauge the extent of a risk and to conclude whether they have apt controls or strategies to alleviate the risk. The span for a risk assessment matrix differs extensively. The exercise may recognize ri', 's15.jpg', 'risk_control.jpg'),
(36, 'Y', 5, 29, 'Management consulting is the practice of helping organizations to improve their performance. ', '<p><strong>Management consulting&nbsp;</strong>is the practice of helping organizations to improve their performance.&nbsp;The Management Consultancy services at the Parikh &amp; Associates covers following major areas.</p>\r\n\r\n<ul>\r\n	<li>Development ', 's16.jpg', 'mangement.jpg'),
(37, 'Y', 1, 31, 'The reason of execution of the statutory audit is to verify all the processes in which a company spends the funds and earns profits. ', '<p>The reason of execution of the <strong>statutory audit</strong> is to verify all the processes in which a company spends the funds and earns profits. The audit is also performed intending to observe the methods used for spending such money are in ', 's31.jpg', 'statutory_audit17.jpg'),
(38, 'Y', 5, 30, 'The viability of fund, it’s planning, the method of increasing the fund and its repayment are some of the critical points to be taken care by the enterprise.', '<p>The viability of fund, it&rsquo;s planning, the method of increasing the fund and its repayment are some of the critical points to be taken care by the enterprise. Fund is the basic require of any business. An enterprise needs fund at different bu', 's4.jpg', 'project_finacial.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE `slider_tbl` (
  `slider_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `slider_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `on_screen`, `slider_title`, `description`, `slider_img`) VALUES
(2, 'Y', 'Business Support Service', 'A range of business financial services, from auditing the expenses to Identifying compliance gaps to suggest Unbeaten Measures.', 'slider2.jpg'),
(4, 'Y', 'Taxation', 'Precise, Proficient and Approachable taxation services to the Business Community and all the Taxpayers on a Sustained Basis.', 'slider4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_child_menu_tbl`
--

CREATE TABLE `sub_child_menu_tbl` (
  `child_menu_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `main_menu_fk_id` int(12) NOT NULL,
  `sub_menu_fk_id` int(12) NOT NULL,
  `header_child_menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_header_menu_tbl`
--

CREATE TABLE `sub_header_menu_tbl` (
  `sub_menu_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `main_menu_id` int(12) NOT NULL,
  `sub_menu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sub_header_menu_tbl`
--

INSERT INTO `sub_header_menu_tbl` (`sub_menu_id`, `on_screen`, `main_menu_id`, `sub_menu_name`) VALUES
(3, 'Y', 3, 'IFRS, Ind AS, US GAAP Advisory, Implementation and Reporting'),
(5, 'Y', 6, 'Applications and Registrations'),
(7, 'Y', 1, ' Internal Audit'),
(13, 'Y', 1, 'Forensic Audit '),
(14, 'Y', 1, ' Management and Propriety Audit  '),
(15, 'Y', 1, '  Information System Audit'),
(16, 'Y', 1, 'Certification'),
(17, 'Y', 3, 'Book Keeping Domestic and International Transactions Accounting'),
(18, 'Y', 3, 'Regulatory Compliances'),
(19, 'Y', 3, 'Preparation of financial statements'),
(22, 'Y', 6, 'Compliances And Return Fillings'),
(23, 'Y', 6, ' Tax advisory'),
(24, 'Y', 6, 'Audits'),
(31, 'Y', 1, 'Statutory Audit');

-- --------------------------------------------------------

--
-- Table structure for table `tranding_tbl`
--

CREATE TABLE `tranding_tbl` (
  `trand_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tra_url` text NOT NULL,
  `tra_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_tbl`
--

CREATE TABLE `why_choose_us_tbl` (
  `choose_id` int(12) NOT NULL,
  `on_screen` char(1) NOT NULL,
  `description` text NOT NULL,
  `choose_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `why_choose_us_tbl`
--

INSERT INTO `why_choose_us_tbl` (`choose_id`, `on_screen`, `description`, `choose_img`) VALUES
(1, 'Y', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Few characteristics such as quick communication, easy accessibility, immediate solution and quality work helps us serve client in efficient and effective manner. Our approach is to put ourselves in the shoes of client and serve them the way they want to get served. We understand the value of time and consider the spending of client as an investment and not an expenditure.&nbsp;Our team structure allows you to get the right information from the right people as you scale. From small task to large projects, we are ready to deliver the best. We always work for mutual growth&nbsp;as we believe loyalty is not just a word,&nbsp;it&#39;s an identiry.</span></span></p>\r\n', 'whyparikh6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_blog_tbl`
--
ALTER TABLE `about_blog_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `about_company_tbl`
--
ALTER TABLE `about_company_tbl`
  ADD PRIMARY KEY (`about_id`);

--
-- Indexes for table `blog_detail_tbl`
--
ALTER TABLE `blog_detail_tbl`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `inquiry_detail_tbl`
--
ALTER TABLE `inquiry_detail_tbl`
  ADD PRIMARY KEY (`inq_id`);

--
-- Indexes for table `joinind_at_tbl`
--
ALTER TABLE `joinind_at_tbl`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `main_header_menu_tbl`
--
ALTER TABLE `main_header_menu_tbl`
  ADD PRIMARY KEY (`main_header_id`);

--
-- Indexes for table `our_key_point_tbl`
--
ALTER TABLE `our_key_point_tbl`
  ADD PRIMARY KEY (`key_id`);

--
-- Indexes for table `our_team_tbl`
--
ALTER TABLE `our_team_tbl`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `pdf_file_tbl`
--
ALTER TABLE `pdf_file_tbl`
  ADD PRIMARY KEY (`pdf_id`);

--
-- Indexes for table `services_detail_tbl`
--
ALTER TABLE `services_detail_tbl`
  ADD PRIMARY KEY (`servise_id`);

--
-- Indexes for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `sub_child_menu_tbl`
--
ALTER TABLE `sub_child_menu_tbl`
  ADD PRIMARY KEY (`child_menu_id`);

--
-- Indexes for table `sub_header_menu_tbl`
--
ALTER TABLE `sub_header_menu_tbl`
  ADD PRIMARY KEY (`sub_menu_id`);

--
-- Indexes for table `tranding_tbl`
--
ALTER TABLE `tranding_tbl`
  ADD PRIMARY KEY (`trand_id`);

--
-- Indexes for table `why_choose_us_tbl`
--
ALTER TABLE `why_choose_us_tbl`
  ADD PRIMARY KEY (`choose_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_blog_tbl`
--
ALTER TABLE `about_blog_tbl`
  MODIFY `blog_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `about_company_tbl`
--
ALTER TABLE `about_company_tbl`
  MODIFY `about_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_detail_tbl`
--
ALTER TABLE `blog_detail_tbl`
  MODIFY `blog_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_tbl`
--
ALTER TABLE `contact_tbl`
  MODIFY `contact_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry_detail_tbl`
--
ALTER TABLE `inquiry_detail_tbl`
  MODIFY `inq_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=384;

--
-- AUTO_INCREMENT for table `joinind_at_tbl`
--
ALTER TABLE `joinind_at_tbl`
  MODIFY `req_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `login_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_header_menu_tbl`
--
ALTER TABLE `main_header_menu_tbl`
  MODIFY `main_header_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `our_key_point_tbl`
--
ALTER TABLE `our_key_point_tbl`
  MODIFY `key_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_team_tbl`
--
ALTER TABLE `our_team_tbl`
  MODIFY `profile_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pdf_file_tbl`
--
ALTER TABLE `pdf_file_tbl`
  MODIFY `pdf_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `services_detail_tbl`
--
ALTER TABLE `services_detail_tbl`
  MODIFY `servise_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `slider_tbl`
--
ALTER TABLE `slider_tbl`
  MODIFY `slider_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_child_menu_tbl`
--
ALTER TABLE `sub_child_menu_tbl`
  MODIFY `child_menu_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_header_menu_tbl`
--
ALTER TABLE `sub_header_menu_tbl`
  MODIFY `sub_menu_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tranding_tbl`
--
ALTER TABLE `tranding_tbl`
  MODIFY `trand_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `why_choose_us_tbl`
--
ALTER TABLE `why_choose_us_tbl`
  MODIFY `choose_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
