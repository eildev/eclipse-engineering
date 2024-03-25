-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2024 at 09:56 AM
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
-- Database: `eclipse_engineering`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_inroductions`
--

CREATE TABLE `about_inroductions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_settings`
--

CREATE TABLE `about_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_settings`
--

INSERT INTO `about_settings` (`id`, `title`, `sub_title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Eclipse Engineering LTD', 'Energy Accessible', '<p><font face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. (EEL) is an independent Trading, engineering &amp; consulting company operating across Bangladesh since 2017 with headquarters in Dhaka. We have maintained our independence by ensuring no financial ties with suppliers or installers. Our services are tailor-made to meet the requirements for every engineering, construction &amp; built-in project we take on. Our focus on quality, reliability, and innovation has helped us to ensure that our client base has grown steadily since we started and is the reason why our existing customers have continued to use our knowledge and services since the very first time they tried us.</span></font></p><p><font face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><br></span></font><span style=\"font-family: Poppins, sans-serif; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">To maintain our organization\'s high-quality standards and knowledge, investments are often made in advanced skill-based courses and health &amp; safety training for our employees. We also open up some of these sessions to our partners and trusted contractors to ensure our network remains highly skilled.</span></p><p><span style=\"font-family: Poppins, sans-serif; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><br></span></p><p><span style=\"font-family: Poppins, sans-serif; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">We keep a small team of core employees at EEL, however, we can expand in numbers and expertise at short notice to fit the needs of individual projects</span><br></p>', '1297488301.webp', '0', '2024-03-13 23:57:26', '2024-03-19 13:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Manager (Design & Optimization)', '<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">Area of\r\nresponsibility: <o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Deliver industry leading solar\r\n     energy design, system optimization and production calculations for\r\n     customers, working alongside customer’s technical engineering teams<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Responsible for leading electrical\r\n     and mechanical design solutions for renewable energy projects which\r\n     include Solar, and Energy storage technologies<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Responsible for the detailed\r\n     solution design of standard projects and support their clients on the\r\n     design of larger, more complex projects<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Responsible for the production of\r\n     design work and documentation necessary for the construction of Solar and\r\n     Energy storage projects on customer’s sites – layout drawings, Single Line\r\n     Diagrams, cable calculations, cable routes, equipment layouts, etc.<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Work alongside the relevant\r\n     technology specialists and engineers to produce comprehensive 2D and 3D\r\n     design solutions and relevant bill of materials<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Ensure all engineering and design\r\n     work complies with all regulatory requirements for projects worldwide<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Train the team/subordinates under\r\n     this position on the same line of work<o:p></o:p></span></li>\r\n</ul><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">The Required Skills\r\nand Background: <o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Preferred education in Electrical\r\n     / Power / Renewable Engineering<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Knowledge of specialized software\r\n     (AutoCAD, PVSyst, PVCase, PVSol, other)<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">English – minimum B2 level <o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Strong leadership skills &amp;\r\n     teamwork<o:p></o:p></span></li>\r\n</ul><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">The Company offers: <o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Work schedule: 9:00 – 18:00 <o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Friday and Saturday are weekend<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Competitive salary level based on\r\n     the results of the probationary period<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Active role within the rapidly\r\n     growing renewables sector<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Strong inter-team collaboration,\r\n     comfortable working in a fast-changing environment<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Ability to get involved in the\r\n     internal company growth and development processes<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l1 level1 lfo3;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Required IT equipment<o:p></o:p></span></li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">If you’re looking to\r\nwork with a company that has a genuine commitment to helping create clean\r\nrenewable energy and improving sustainability send your CV to\r\neclipseengineeringlimited@gmail.com with title <b>Manager (Design &amp; Optimization)<o:p></o:p></b></span></p>', '999011592.jpg', 1, '2024-03-24 03:00:26', '2024-03-24 03:41:12'),
(4, 'Deputy Manager (Customs & Compliance)', '<p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">Area of\r\nresponsibility: <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpFirst\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Manage and\r\ncontrol customs &amp; revenue activities related to company;<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Should have\r\nadequate knowledge on HS code, Customs Act, Bond formalities; Responsible for\r\nBond Licensing, <o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Capable Customs\r\nAudit and related issues with Customs Bond;<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Maintain\r\neffective communication with Customs, Bond &amp; VAT Officials; and other\r\norganizations;<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Maintain Excel\r\nsoft copy of Bond register Issue VAT Challan 6.1, 6.2, 6.3 and submit monthly\r\nVAT return (9.1);<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Must have\r\nability to manage any task through excellent coordination between government\r\nand private authorities and organizations in Bangladesh;<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Must have\r\nexperience in obtaining all types of Licenses renewal for the company<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">Maintaining\r\neffective liaison with NBR, Customs Bond, Customs, Excise and VAT, Customs SRO,\r\nHS Code, Customs Act, Import Export Policy, Manage regulatory communications\r\nduring crises and coordinate with internal management and staff<o:p></o:p></span></p><p class=\"MsoListParagraphCxSpLast\" style=\"text-indent:-.25in;mso-list:l1 level1 lfo3\"><!--[if !supportLists]--><span style=\"font-family:Symbol;mso-fareast-font-family:Symbol;mso-bidi-font-family:\r\nSymbol\">·<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-kerning: auto; font-optical-sizing: auto; font-feature-settings: normal; font-variation-settings: normal; font-variant-position: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span style=\"font-family:Roboto\">To work in\r\ncoordination with all applicable laws and regulations related to the import and\r\nexport process<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">The Required Skills\r\nand Background: <o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Good knowledge in Banking\r\n     activities, customs rules &amp; regulations related to import and export.<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Should have comprehensive\r\n     knowledge on Shipping documents related to import and export.<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l0 level1 lfo2;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Vast knowledge on import\r\n     procedure, Vat &amp; Tax, Supply Chain Management.<o:p></o:p></span></li>\r\n</ul><p class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\nline-height:normal\"><span style=\"font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;\">The Company offers: <o:p></o:p></span></p><ul type=\"disc\">\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Work schedule: 9:00 – 18:00 <o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Friday and Saturday are weekend<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Competitive salary level based on\r\n     the results of the probationary period<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Strong inter-team collaboration,\r\n     comfortable working in a fast-changing environment<o:p></o:p></span></li>\r\n <li class=\"MsoNormal\" style=\"mso-margin-top-alt:auto;mso-margin-bottom-alt:auto;\r\n     line-height:normal;mso-list:l2 level1 lfo1;tab-stops:list .5in\"><span style=\"font-family:Roboto;mso-fareast-font-family:&quot;Times New Roman&quot;;\r\n     mso-bidi-font-family:&quot;Times New Roman&quot;\">Ability to get involved in the\r\n     internal company growth and development processes<o:p></o:p></span></li>\r\n</ul><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n<span style=\"font-size:11.0pt;line-height:107%;font-family:Roboto;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;mso-bidi-font-family:&quot;Times New Roman&quot;;mso-ansi-language:\r\nEN-US;mso-fareast-language:EN-US;mso-bidi-language:AR-SA\">Required IT equipment</span><br></p>', '1310352028.jpg', 1, '2024-03-24 03:00:55', '2024-03-24 03:41:00');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `service_name`, `company_name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Diana Pollard', 'kenyhub@mailinator.com', '+1 (527) 793-3398', NULL, 'Bolton Willis Plc', 'Tenetur molestias ea', '2024-03-13 21:44:35', NULL),
(2, 'Jhon Wick', 'sobrokom.store@gmail.com', '01723343865', NULL, 'wurozuguwo@mailinator.com', 'wadadas', '2024-03-20 22:42:44', NULL),
(3, 'Kishor Mahmud', 'sobrokom.store@gmail.com', '1723343865', NULL, 'saadad', 'adasd', '2024-03-23 03:41:44', NULL),
(4, 'Lionel Messi', 'lota@pata.com', '1234567890893', NULL, 'saadad', 'ji', '2024-03-23 07:26:01', NULL),
(5, 'Jhon Wick', 'sobrokom.store@gmail.com', '01723343865', NULL, 'wurozuguwo@mailinator.com', 'sadfsadfasdfasfda', '2024-03-24 01:05:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `c_s_r_activities`
--

CREATE TABLE `c_s_r_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_s_r_activities`
--

INSERT INTO `c_s_r_activities` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Providing education to underprivileged children', '<p>Providing education to underprivileged children is an important and noble goal. Access to education can make a significant difference in the lives of children and their communities. Here are some steps that can be taken to provide education to underprivileged children:</p><p><br></p><p><b>Identify the target group:</b> The first step is to identify the children who are most in need of education. This can be done by reaching out to local communities, NGOs, and government organizations that work with underprivileged children.</p><p><b>Create a curriculum:</b> Once the target group has been identified, the next step is to create a curriculum that is tailored to their needs. The curriculum should be designed to provide a well-rounded education that includes reading, writing, math, science, social studies, and life skills.</p>', '1577507585.webp', 1, '2024-03-23 05:06:10', '2024-03-23 05:27:32'),
(3, 'Distribution of food to poor people', '<p>Distribution of food to poor people is an important initiative to help alleviate hunger and malnutrition in the community. Here are some steps that can be taken to distribute food to the poor:</p><p><br></p><p><b>Identify the target group:</b> The first step is to identify the people who are most in need of food assistance. This can be done by reaching out to local communities, NGOs, and government organizations that work with the poor and homeless.</p><p><br></p><p><b>Find food sources:</b> The next step is to find food sources. This can be done by reaching out to local grocery stores, restaurants, and food banks that are willing to donate food. You can also consider growing your own food if you have the resources.</p>', '797390239.webp', 1, '2024-03-23 05:13:25', '2024-03-23 05:13:30'),
(4, 'Iftar Sponsorship for Low-Income Families:', '<p>The company sponsors iftar meals for low-income families throughout the month of Ramadan. Working with local charities or mosques, the company arranges for nutritious meals to be provided to families in need at sunset. This initiative aims to ensure that everyone can enjoy a fulfilling iftar meal during the holy month, regardless of their financial situation, fostering a sense of community and solidarity.<br></p>', '1592829727.jpg', 1, '2024-03-23 05:17:31', '2024-03-23 05:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_settings`
--

CREATE TABLE `footer_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullAddress` text DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer_settings`
--

INSERT INTO `footer_settings` (`id`, `fullAddress`, `location`, `link`, `phone`, `email`, `website`, `status`, `created_at`, `updated_at`) VALUES
(1, 'House 41, 2nd Floor, Road 06, Block E, Banasree, Dhaka, Bangladesh', 'House 41, 2nd Floor, Road 06, Block E, Banasree, Dhaka, Bangladesh', 'http://127.0.0.1:8000/', '+88-01718319480', 'eclipseengineeringlimited@gmail.com', 'http://127.0.0.1:8000/', '0', '2024-03-19 08:50:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'What is Included in your Services?', '<p><span style=\"margin: 0px; padding: 0px; font-size: 18px; color: var(--tj-color-text-body); line-height: 2.1; font-family: Poppins, sans-serif; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 06:56:05', '2024-03-23 06:58:21'),
(4, 'What Warranties do I Have For Installation?', '<p><span style=\"margin: 0px; padding: 0px; font-size: 18px; color: var(--tj-color-text-body); line-height: 2.1; font-family: Poppins, sans-serif; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 06:57:17', '2024-03-23 06:58:24'),
(5, 'How fast I get my Order?', '<p><span style=\"margin: 0px; padding: 0px; font-size: 18px; color: var(--tj-color-text-body); line-height: 2.1; font-family: Poppins, sans-serif; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 06:57:47', '2024-03-23 06:58:35'),
(6, 'What are the advantages of solar energy?', '<p><span style=\"margin: 0px; padding: 0px; font-size: 18px; color: var(--tj-color-text-body); line-height: 2.1; font-family: Poppins, sans-serif; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 06:58:14', '2024-03-23 06:58:38'),
(7, 'How Much do Energy Panels Cost?', '<p><span style=\"margin: 0px; padding: 0px; font-size: 18px; color: var(--tj-color-text-body); line-height: 2.1; font-family: Poppins, sans-serif; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 07:22:51', '2024-03-24 02:51:32'),
(8, 'How Mech Energy Can a Solar Panel Generate?', '<p><span style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 07:24:03', '2024-03-24 02:51:35'),
(9, 'What are the advantages of solar energy?', '<p><span style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 07:24:58', '2024-03-24 02:51:37'),
(10, 'What is Included in your Services?', '<p><span style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; background-color: rgb(250, 250, 252);\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in.</span><br></p>', 1, '2024-03-23 07:25:21', '2024-03-24 02:51:40');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `gallery_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `gallery_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Solar Energy', '423167804.webp', '0', '2024-03-23 22:44:48', '2024-03-23 22:44:48'),
(5, 'Roof-Top Solar Products', '1047176303.webp', '0', '2024-03-23 22:45:59', '2024-03-23 22:45:59'),
(6, 'Genset Generator', '1316159413.webp', '0', '2024-03-23 22:48:59', '2024-03-23 22:48:59'),
(7, 'Elevator And Lift Supply', '1735085864.webp', '0', '2024-03-23 22:49:30', '2024-03-23 22:49:30'),
(8, 'Working Projects', '1067944407.webp', '0', '2024-03-23 22:50:06', '2024-03-23 22:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `home_settings`
--

CREATE TABLE `home_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `fav` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(250) DEFAULT NULL,
  `long_title` text DEFAULT NULL,
  `slider_links` varchar(255) DEFAULT NULL,
  `slider_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `short_title`, `sub_title`, `long_title`, `slider_links`, `slider_image`, `created_at`, `updated_at`) VALUES
(2, 'Empowering Tomorrow with', 'Eclipse Engineering', '<p>Our comprehensive service portfolio includes renewable energy solutions like solar and wind power, energy efficiency upgrades, operation &amp; maintenance services, logistics support, supply and trading, and expert engineering consulting.<br></p>', 'http://127.0.0.1:8000/', '1155553901.webp', '2024-03-18 23:44:13', NULL),
(3, 'Powering the Future', 'Sustainably', '<p>At Eclipse Engineering LTD, we\'re passionate about building a greener future. With over 7 years of experience, we provide comprehensive renewable energy, energy efficiency, and consulting services to help businesses and individuals transition to sustainable solutions.<br></p>', 'http://127.0.0.1:8000/', '32590330.webp', '2024-03-18 23:51:12', NULL),
(4, 'Experience You', 'Can Trust', '<p>With over 7 years in the industry, Eclipse Engineering LTD has a proven track record of success. We leverage our experience to deliver exceptional results and ensure your project runs smoothly, from start to finish.<br></p>', 'http://127.0.0.1:8000/', '1745086107.webp', '2024-03-18 23:59:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `managing_teams`
--

CREATE TABLE `managing_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `full_discription` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `managing_teams`
--

INSERT INTO `managing_teams` (`id`, `name`, `designation`, `image`, `facebook`, `instagram`, `linkedin`, `twitter`, `full_discription`, `created_at`, `updated_at`) VALUES
(3, 'Sami Al Hossain', 'Managing Director', '1710848751.webp', 'https://www.facebook.com/dreamian', 'https://www.instagram.com/', 'https://www.linkedin.com/in/sami-al-hossain-a1263b61/', 'https://twitter.com/', NULL, NULL, NULL),
(4, 'Md. Shahadat Hossain', 'Chairman', '1710848899.webp', 'https://www.facebook.com/md.tulin.hossain', 'https://www.instagram.com/', 'https://www.linkedin.com', 'https://twitter.com/', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_20_053208_create_home_settings_table', 1),
(6, '2024_02_20_055145_create_footer_settings_table', 1),
(7, '2024_02_20_085518_create_about_settings_table', 1),
(8, '2024_02_20_092549_create_social_icons_table', 1),
(9, '2024_02_20_104321_create_overviews_table', 1),
(11, '2024_02_22_033350_create_news_table', 1),
(12, '2024_02_22_042148_create_testimonials_table', 1),
(14, '2024_02_22_050921_create_why_choose_us_table', 1),
(15, '2024_02_22_060558_create_our_services_table', 1),
(16, '2024_02_22_061352_create_why_choose_us_details_table', 1),
(18, '2024_02_22_091332_create_our_partners_table', 1),
(19, '2024_02_22_091722_create_our_partner_details_table', 1),
(20, '2024_02_22_105145_create_managing_teams_table', 1),
(21, '2024_02_28_034419_create_subscribes_table', 1),
(22, '2024_03_05_055637_create_about_inroductions_table', 1),
(23, '2024_03_05_070624_create_home_sliders_table', 1),
(26, '2024_03_06_150718_create_contacts_table', 1),
(27, '2024_02_22_071947_create_services_details_table', 2),
(29, '2024_03_05_093542_create_projects_table', 3),
(30, '2024_03_05_103757_create_project_details_table', 3),
(31, '2024_02_22_044314_create_galleries_table', 4),
(32, '2024_03_19_195053_create_values_table', 5),
(33, '2024_03_20_155703_create_sister_concerns_table', 6),
(35, '2024_03_23_094355_create_c_s_r_activities_table', 7),
(36, '2024_03_23_114721_create_f_a_q_s_table', 8),
(37, '2024_03_24_070932_create_carriers_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Why invest in renewable energy?', '<p>To answer your question, it is because renewable energy-based projects are green, clean, sustainable and natural. Today, renewable energy generates 26% of the world’s electricity. By 2024, it is expected to create 30%. This upper-lining trend is one that businesses should pay more attention to if they hope to remain competitive and successful, especially when it comes to investing in renewable energy-based supply chains. Now more than ever, it’s vital that countries put renewable energy and other low-carbon technologies at the fore to build back better after COVID-19, creating new jobs and rebooting their economies. The fossil fuel industry is among the hardest hit by the coronavirus crisis, with leading oil, gas and petrochemical companies losing an average of 45% of their total market value. Since the start of the year, we have seen the sharpest drop in oil demand in a quarter of a century. Green energy stocks were also less volatile across the board than traditional fossil fuels, with such portfolios holding up well during the turmoil caused by the pandemic, while oil and gas collapsed.&nbsp;</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">The global movement of divestment from fossil fuels is gathering pace in Europe, with significant support from high-profile individuals, governments and businesses.&nbsp; It creates a positive environment for sustainable investment to thrive.&nbsp; Investing in renewable energy infrastructure has clear benefits: it can generate attractive returns for investors, whilst having a positive effect in the ongoing battle against the climate crisis. We want to see both sustainable energy production and secure energy supply at the heart of our communities, the energy sector and Government policy. Much more needs to be done by the international community, especially to drive investment in lower-income economies, where the private sector has been reluctant to venture.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Renewables are the force to a climate-safe world. Far from having to select between mitigating the foreseen climate crisis and economic upscale, it is visible than ever that a scope lives to ramp up investment in low-carbon technologies and shift the global development paradigm from one of scarcity, inequality and competition to one of shared prosperity – in our lifetimes. If we take clearer decisions now, a sustainable energy future is within our foremost reach.</span><br></p>', '817923553.webp', 1, '2024-03-19 08:35:37', '2024-03-19 08:35:49'),
(3, 'Why does Bangladesh need wind power plants?', '<p>Bangladesh is encountering difficulties in supplying energy to maintain its economic growth. The Government of Bangladesh is looking for renewable energy sources to meet up the total power demand in this country. After the severe Covid-19 pandemic and due to ongoing war in Europe, the country is suffering from the unavailability of fossil fuels such as oil, LNG and coal to run the already commissioned traditional power plants.</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Bangladesh must involve itself in the massive development of wind power stations in coastal areas such as Patuakhali, Khulna, Barishal, Bhola, Cox’s Bazar, Chittagong, Swandip, Saint Martin Island, and other areas nearby the sea. NREL has conducted a study and found that for wind speeds of 5.75-7.75 m/s, there are more than 20,000 square kilometers of land with a gross wind potential of more than 30,000MW and published the report entitled “Assessing the Wind Energy Potential in Bangladesh”. Wind will relax the dependency on fossil fuel overseas, it will create more jobs for the local people, wind turbines are not expensive these days and wind projects will be economically viable for the country. As Bangladesh Government and international investment companies are concentrating more on renewable energy-based projects in Bangladesh, sincere support must be addressed from the higher-ups to push the wind investment projects to be developed on fast track basis all over the country by following the policies of unsolicited IPP basis. The development of wind power will not only enrich our economy but also help to keep this planet clean and protect our future generations from pollution.</span><br></p>', '1124030296.webp', 1, '2024-03-19 08:45:12', '2024-03-23 09:28:22');

-- --------------------------------------------------------

--
-- Table structure for table `our_partners`
--

CREATE TABLE `our_partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_partner_details`
--

CREATE TABLE `our_partner_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `partner_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_title` varchar(255) DEFAULT NULL,
  `services_sub_title` varchar(255) DEFAULT NULL,
  `service_description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`id`, `services_title`, `services_sub_title`, `service_description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Building a Brighter Future', 'With Solar', '<p>Similar Structure - Different Focus:</p><p><br></p><p>Empowering Sustainable Energy (Maintains \"Greener World\" theme, shifts focus to empowerment)</p><p>Building a Brighter Future with Solar (More positive and solution-oriented)</p><p>Harnessing the Sun, Powering Progress (Highlights solar power\'s role in advancement)</p><p>Different Structure - Similar Message:</p><p><br></p><p>Solar Solutions for a Sustainable Future (More formal and direct)</p><p>Green Energy Starts with Solar (Simple and action-oriented)</p><p>Sun Power: Your Path to Sustainability (Highlights solar as the path)</p><p>Unique Titles:</p><p><br></p><p>Solarize Your Future (Catchy and action-oriented)</p><p>The Future Shines Bright with Solar (Positive and optimistic)</p><p>Unlocking Green Potential with Solar (Highlights untapped potential)</p>', '0', '2024-03-19 01:50:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `overviews`
--

CREATE TABLE `overviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `icon_name` varchar(250) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `overviews`
--

INSERT INTO `overviews` (`id`, `title`, `experience`, `icon`, `icon_name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Years Experience', 7, NULL, 'experience', 1, '2024-03-19 00:37:41', '2024-03-19 13:04:49'),
(3, 'Completed Projects', 70, NULL, 'completed-task', 1, '2024-03-19 00:42:25', '2024-03-19 00:42:30'),
(4, 'Happy Clients', 50, NULL, 'customer-service', 1, '2024-03-19 00:48:16', '2024-03-19 13:06:19'),
(5, 'Active Projects', 15, NULL, 'save-energy', 0, '2024-03-19 13:08:32', '2024-03-19 13:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `sub_title`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Powering Progress', 'Project Highlights', '811537068.webp', '<p>Showcasing Sustainable Impact (Highlights both the project focus and the company\'s mission)</p><p>From Vision to Green Reality (Emphasizes the transformation journey of projects)</p><p>Engineering a Brighter Future (Connects project work to positive future outcomes)</p><p>Client Success Stories in Green (Focuses on client wins and sustainability focus)</p><p>Powering Progress: Project Highlights (Combines project focus and the impact of the work)</p>', '0', '2024-03-18 00:40:25', '2024-03-19 02:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `projects_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `icon_name` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`id`, `projects_id`, `title`, `description`, `image`, `icon_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 'Solar Roof Revolution for Eco-School (1.2 MW)', '<p>This project involved designing and installing a 1.2-megawatt solar power system on the rooftops of a large high school campus. The system will generate enough clean energy to offset a significant portion of the school\'s electricity needs, reducing their carbon footprint and utility costs. Additionally, Eclipse Engineering will provide educational workshops for students and staff about solar energy and sustainability.<br></p>', '1920868439.webp', 'solar-panel-1', '0', '2024-03-19 03:21:10', '2024-03-19 03:21:10'),
(5, 1, 'Green Tech Office Building', '<p>Eclipse Engineering conducted a comprehensive energy audit for a new office building in Seattle. Based on the findings, the team recommended and implemented a range of energy-saving measures, including high-efficiency lighting upgrades, building envelope improvements, and smart building technology integration. Additionally, Eclipse Engineering provides ongoing O&amp;M services to ensure the building continues to operate at peak efficiency and maximize energy savings in the long term.<br></p>', '1365984369.webp', 'energy', '0', '2024-03-19 03:30:44', '2024-03-19 03:30:44'),
(6, 1, 'Rooftop Solar Power Plant Contract Sign With NNIL For 119.9KW', '<p>Neel Nagar Industries Ltd.(NNIL), a prominent leading Polyester Staple Fiber (PSF) manufacturing companies in Bangladesh, has signed a contract with Eclipse Engineering Limited (EEL) to establish a 119.9KW rooftop solar power plant at its factory located at Mirzapur, Tegoria, South Keranigonj, Dhaka-1310, Bangladesh.</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">The solar power plant will be ingeniously situated a top Neel Nagar Industries Ltd.’s factory premises located in . This initiative marks a significant stride towards curbing the company’s carbon footprint. By offsetting approximately 2,000 tons of CO2 emissions each year, the factory is poised to make a lasting impact on its sustainability journey.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Sadi Al Hossain, Director of EEL, reciprocated the enthusiasm. This venture not only signifies EEL’s foray into a pioneering project but also stands as the finest rooftop solar power plant endeavor in their portfolio. Sadi reaffirmed EEL’s dedication to furnishing NNIL’s with an impeccable solar solution that meets their energy requisites while substantiating their sustainability goals.</span><br></p>', '1205532726.webp', 'wind-turbine', '0', '2024-03-19 03:34:43', '2024-03-19 03:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `services_details`
--

CREATE TABLE `services_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `services_id` bigint(20) UNSIGNED NOT NULL,
  `services_details_title` varchar(255) DEFAULT NULL,
  `services_details_description` text DEFAULT NULL,
  `services_details_icon` varchar(255) DEFAULT NULL,
  `services_details_icon_name` varchar(255) DEFAULT NULL,
  `services_details_image` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services_details`
--

INSERT INTO `services_details` (`id`, `services_id`, `services_details_title`, `services_details_description`, `services_details_icon`, `services_details_icon_name`, `services_details_image`, `status`, `created_at`, `updated_at`) VALUES
(7, 2, 'Engineering Consulting Services', '<p><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. offers a wide range of engineering consulting services to support your projects from conception to completion.&nbsp; Our team of experienced engineers provides expertise in various disciplines, including:<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Soil Survey:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. conducts thorough soil surveys to assess soil composition, characteristics, and suitability for construction projects. Our expert team utilizes advanced techniques and equipment to analyze soil properties, including texture, moisture content, and bearing capacity. By providing detailed soil survey reports, we help clients make informed decisions regarding site selection, foundation design, and construction planning, ensuring optimal project outcomes and mitigating risks associated with soil instability.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Design of TL/SS (Transmission Line/Substation Design):&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">For efficient and reliable electrical infrastructure, Eclipse Engineering Ltd. offers comprehensive design services for transmission lines and substations. Our experienced engineers develop customized designs tailored to meet project requirements and regulatory standards. From route selection and structural design to equipment specification and layout planning, we ensure the seamless integration of transmission lines and substations into the existing grid network. With a focus on safety, reliability, and cost-effectiveness, we deliver innovative solutions that meet the evolving needs of the power sector.</span></font></p><p><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Feasibility Study:&nbsp;</b>Eclipse Engineering Ltd. conducts comprehensive feasibility studies to assess the viability and potential risks of engineering projects. Our multidisciplinary team evaluates technical, economic, and environmental factors to determine project feasibility and identify potential challenges. Through rigorous analysis and scenario modeling, we provide clients with valuable insights to support decision-making and project planning. Whether it\'s evaluating new infrastructure projects or assessing the feasibility of renewable energy initiatives, we deliver reliable feasibility studies that lay the foundation for successful project execution.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Soil Investigation:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">With expertise in geotechnical engineering, Eclipse Engineering Ltd. conducts thorough soil investigations to assess soil properties and conditions for construction projects. Using advanced sampling and testing techniques, we analyze soil composition, stability, and bearing capacity to inform foundation design and construction methods. Our detailed soil investigation reports provide valuable data to mitigate risks associated with soil-related issues, ensuring the safety and durability of structures in various soil conditions.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Wind Assessment:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. specializes in wind assessment studies to evaluate wind resources and potential for wind energy projects. Our team utilizes advanced meteorological data analysis and wind modeling techniques to assess wind patterns and speeds at project sites. By providing accurate wind resource assessments, we enable clients to make informed decisions regarding the development and optimization of wind energy projects, maximizing energy production and return on investment.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Financial Modeling:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. develops comprehensive financial models to evaluate the financial viability and risks of engineering projects. Our financial experts utilize advanced modeling techniques and market analysis to forecast project revenues, costs, and returns over the project lifecycle. By incorporating sensitivity analysis and scenario modeling, we assess the impact of various factors on project economics and identify opportunities to enhance financial performance. Whether it\'s securing project financing or optimizing investment strategies, our financial modeling services provide clients with valuable insights to support decision-making and project planning.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Social Impact Study:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. conducts social impact studies to assess the potential social implications of engineering projects on local communities and stakeholders. Our team evaluates factors such as demographics, socio-economic conditions, and cultural heritage to identify potential risks and opportunities for social development. Through stakeholder engagement and community consultation, we facilitate dialogue and collaboration to address social concerns and maximize positive impacts. By integrating social impact considerations into project planning and implementation, we help clients foster sustainable development and enhance social well-being.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Solar Radiance Measurement:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. specializes in solar radiance measurement studies to assess solar energy potential and optimize the design of solar energy systems. Using advanced solar monitoring equipment and modeling software, we measure solar irradiance and analyze solar resource data to determine optimal locations for solar installations. By providing accurate solar radiance measurements, we enable clients to maximize energy production and optimize the performance of solar photovoltaic systems, reducing reliance on conventional energy sources and mitigating environmental impact.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Initial Environment Examination:&nbsp;</b>Eclipse Engineering Ltd. conducts initial environmental examinations to assess potential environmental impacts and risks associated with engineering projects. Our team evaluates project activities and proposed interventions to identify potential environmental sensitivities and regulatory requirements. Through site assessments and environmental screenings, we help clients understand the environmental implications of their projects and develop mitigation measures to minimize adverse impacts. By integrating environmental considerations into project planning and decision-making, we support sustainable development and compliance with environmental regulations.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Environmental Impact Assessment:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. conducts comprehensive environmental impact assessments to evaluate the potential environmental consequences of engineering projects. Our multidisciplinary team assesses the potential impacts on air quality, water resources, biodiversity, and ecosystems, using advanced modeling tools and data analysis techniques. Through stakeholder engagement and public consultation, we identify potential concerns and develop mitigation measures to minimize adverse impacts and enhance environmental sustainability. By providing accurate and transparent environmental impact assessments, we help clients navigate regulatory requirements and achieve project objectives while minimizing environmental harm.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Owner\'s Engineer/Project Management Consultant:&nbsp;</b></span><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. provides owner\'s engineer and project management consulting services to support clients in overseeing engineering projects from inception to completion. Our experienced team serves as trusted advisors, representing the owner\'s interests and ensuring project objectives are met on time and within budget. From project planning and feasibility studies to design, construction, and commissioning, we provide comprehensive project management support, coordinating activities, managing resources, and mitigating risks. With a focus on quality, efficiency, and stakeholder satisfaction, we help clients achieve successful project outcomes and maximize return on investment.<br></span><br><span style=\"font-size: 18px;\"><b>Vertical Diagonal Flow Pump, Submersible Pump, Condensate Pump, Circulating Pump:&nbsp;</b></span><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. offers a wide range of pump solutions for various applications, including vertical diagonal flow pumps, submersible pumps, condensate pumps, and circulating pumps. Our expert engineers assess project requirements and recommend suitable pump solutions tailored to meet specific needs and performance criteria. Whether it\'s water supply, drainage, or HVAC systems, we provide reliable and efficient pump solutions that deliver optimal performance and reliability. With a focus on quality, durability, and energy efficiency, we ensure that our pump solutions meet the highest standards of reliability and performance.</span></font><br></p>', NULL, 'continuous-improvement', '980866457.webp', '0', '2024-03-19 11:35:32', '2024-03-24 23:29:29'),
(8, 2, 'Supply/Trading', '<font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. is your one-stop shop for procuring the equipment and materials needed for your engineering projects.&nbsp; We leverage our extensive network of suppliers to source high-quality products at competitive prices.&nbsp; Our services include:</span></font><br><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Flare:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. offers a comprehensive range of flare solutions, including design, installation, and maintenance services. Our expertise ensures efficient and safe flare systems tailored to the specific requirements of your project, adhering to the highest industry standards.</span></font><br><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Valves:&nbsp;</b></span><span style=\"font-size: 18px;\">Our valve solutions cover a wide spectrum, from selection to installation and maintenance. We provide a diverse range of valves including control valves, safety valves, and isolation valves, ensuring optimal performance and reliability for your industrial applications.<br></span><br><span style=\"font-size: 18px;\"><b>CT &amp; PT:&nbsp;</b></span><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. specializes in current transformers (CT) and potential transformers (PT) for accurate measurement and monitoring of electrical systems. Our solutions are designed to meet precise specifications, offering superior accuracy and reliability in diverse operational environments.<br></span><br><span style=\"font-size: 18px;\"><b>GTG &amp; STG:&nbsp;</b></span><span style=\"font-size: 18px;\">With extensive experience in gas turbine generators (GTG) and steam turbine generators (STG), we deliver turnkey solutions for power generation projects. From equipment procurement to commissioning, our services ensure efficient and dependable power generation systems.<br></span><br><span style=\"font-size: 18px;\"><b>Gas Burner:&nbsp;</b></span><span style=\"font-size: 18px;\">Our gas burner solutions are engineered for optimal performance and energy efficiency. Whether for industrial heating or combustion processes, we provide reliable burner systems along with installation and maintenance support to meet your operational needs.<br></span><br><span style=\"font-size: 18px;\"><b>Steam Turbine:&nbsp;</b></span><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. offers steam turbine solutions for various industrial applications, including power generation and mechanical drive systems. Our expertise covers the entire lifecycle of steam turbines, from design and installation to maintenance and optimization.<br></span><br><span style=\"font-size: 18px;\"><b>Flame Detector:&nbsp;</b></span><span style=\"font-size: 18px;\">We provide advanced flame detection systems for enhanced safety and protection in industrial environments. Our solutions incorporate state-of-the-art technology to accurately detect and respond to potential fire hazards, ensuring the safety of personnel and assets.<br></span><br><span style=\"font-size: 18px;\"><b>Seamless Tubes:&nbsp;</b></span><span style=\"font-size: 18px;\">Our seamless tube solutions offer superior performance and reliability in demanding applications such as oil and gas, petrochemical, and power generation. We supply high-quality seamless tubes in various materials and specifications to meet your project requirements.<br></span><br><span style=\"font-size: 18px;\"><b>Gas Booster Compressor:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. offers gas booster compressor solutions designed for efficient gas compression in a wide range of industrial processes. Our comprehensive services include equipment selection, installation, and ongoing support to ensure optimal performance and reliability.</span></font><br><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Distribution and Power Transformer:&nbsp;</b></span></font><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">We provide distribution and power transformers tailored to the specific requirements of your electrical infrastructure projects. Our solutions include transformer selection, installation, and maintenance services to ensure reliable and efficient power distribution.</span></font><br>', NULL, 'targeting', '1085984157.webp', '0', '2024-03-19 11:43:19', '2024-03-24 23:17:21'),
(9, 2, 'Logistics Services', '<div style=\"margin: 0px; padding: 0px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eclipse Engineering Ltd. offers comprehensive logistics solutions to support your engineering projects.&nbsp; We handle the critical task of moving equipment, materials, and supplies efficiently and securely.&nbsp; Our services include:<br><br></span></div><div style=\"margin: 0px; padding: 0px;\"><span style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\"><b style=\"text-align: var(--bs-body-text-align);\">C&amp;F Services (Clearing and Forwarding):&nbsp;</b></span><span style=\"text-align: var(--bs-body-text-align);\"><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px; font-weight: var(--bs-body-font-weight);\">Eclipse Engineering Ltd. offers comprehensive C&amp;F services tailored to facilitate the smooth import and export of goods for our clients. Our experienced team handles all aspects of customs clearance and documentation, ensuring compliance with regulations and timely delivery of shipments. From customs declaration to cargo inspection, we manage the entire clearance process efficiently, minimizing delays and optimizing supply chain operations. With our expertise in navigating customs procedures and regulations, clients can trust us to streamline their logistics processes and expedite the movement of goods.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Inland Transportation/Car Rental:&nbsp;</b></span></font></span><span style=\"text-align: var(--bs-body-text-align);\"><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px; font-weight: var(--bs-body-font-weight);\">For reliable and efficient transportation solutions, Eclipse Engineering Ltd. provides inland transportation and car rental services customized to meet the diverse needs of our clients. Whether it\'s transporting goods between locations or providing rental vehicles for business travel, we offer a fleet of well-maintained vehicles and experienced drivers to ensure safe and timely delivery. Our flexible rental options and competitive rates make us the preferred choice for transportation solutions, enabling clients to focus on their core operations while we handle their logistics needs.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><b>Work Permit, VISA Permit, Permits of IPP Projects:&nbsp;</b></span></font></span><span style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eclipse Engineering Ltd. specializes in facilitating work permit, visa permit, and permits for Independent Power Producer (IPP) projects, streamlining the administrative processes for our clients. Our dedicated team assists in obtaining necessary permits and approvals from relevant authorities, ensuring compliance with regulatory requirements. Whether it\'s securing work visas for foreign employees or obtaining permits for IPP projects, we handle all documentation and coordination with government agencies efficiently. With our expertise in navigating bureaucratic procedures, clients can trust us to expedite the permit acquisition process and facilitate smooth project execution.</span></div>', NULL, 'mission', '1051136299.webp', '0', '2024-03-19 11:48:27', '2024-03-24 23:02:15'),
(10, 2, 'Energy Efficiency', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. is committed to helping clients achieve their sustainability goals.&nbsp; Our energy efficiency services identify and implement solutions to reduce energy consumption and operating costs.&nbsp; We provide:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Energy Audits: </b>Our comprehensive energy audits analyze your energy usage patterns and identify areas for improvement.</span></div><div><span style=\"font-size: 14.4px;\"><b>Energy-Saving Upgrades:</b> We recommend and implement cost-effective upgrades like LED lighting, efficient HVAC systems, and building envelope improvements.</span></div><div><span style=\"font-size: 14.4px;\"><b>Renewable Energy Integration:</b> We help integrate renewable energy sources like solar panels or wind turbines into your existing infrastructure.</span></div><div><span style=\"font-size: 14.4px;\"><b>Energy Management Strategies:</b> We develop customized strategies to optimize your energy consumption and reduce your carbon footprint.</span></div>', NULL, 'energy', '1120074312.webp', '0', '2024-03-19 11:54:28', '2024-03-19 11:54:28'),
(11, 2, 'Operation & Maintenance (O&M)', '<div><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Engineering Ltd. is dedicated to optimizing industrial processes through digital asset management solutions. Our services ensure seamless integration of cutting-edge technologies into your operations, facilitating:<br></span></font><br></div><div><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1; font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif;\"><b>Digital Asset Management:&nbsp;</b>Eclipse Engineering Ltd. offers advanced Digital Asset Management solutions aimed at optimizing energy efficiency and reducing operating costs for our clients. Through comprehensive data analysis and real-time monitoring, we track energy consumption patterns and asset performance, identifying areas for improvement. Our tailored digital platforms enable proactive maintenance and asset optimization strategies, ensuring maximum uptime and energy savings. With our expertise in digital asset management, clients can achieve significant cost reductions and enhance sustainability. </p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1; font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif;\"><b>Digital Plant Monitoring and O&amp;M:&nbsp;</b><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">At Eclipse Engineering Ltd., we specialize in Digital Plant Monitoring and Operations &amp; Maintenance (O&amp;M) services to enhance energy efficiency and operational reliability. Utilizing state-of-the-art monitoring technologies, we continuously monitor plant performance and energy consumption metrics in real time. Our proactive maintenance approach allows us to identify potential issues early on, minimizing downtime and optimizing energy usage. Through data-driven insights and predictive analytics, we help clients streamline operations, reduce energy waste, and improve overall plant efficiency.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1; font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif;\"><b>Turnkey Solutions for Carbon Capture:&nbsp;</b>Eclipse Engineering Ltd. provides comprehensive Turnkey Solutions for Carbon Capture, supporting clients in their efforts to reduce carbon emissions and combat climate change. From initial feasibility studies to implementation and ongoing support, we offer end-to-end solutions tailored to meet specific needs. Our expertise in carbon capture technologies enables us to design and implement cost-effective solutions that integrate seamlessly with existing infrastructure. By capturing and storing carbon emissions, clients can achieve regulatory compliance, mitigate environmental impact, and enhance energy efficiency. <br><b>Digital Solutions for Power and Energy:&nbsp;</b><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Transforming the power and energy landscape, Eclipse Engineering Ltd. delivers innovative Digital Solutions designed to optimize energy efficiency and drive sustainability. Our digital platforms offer smart grid solutions, energy management systems, and renewable energy integration strategies to maximize operational efficiency and reduce environmental footprint. Through advanced analytics and automation, we empower clients to optimize energy consumption, minimize costs, and achieve their sustainability goals. With a focus on continuous improvement and technological innovation, we pave the way towards a cleaner and more efficient energy future.</span></p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1; font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif;\">These detailed service descriptions highlight Eclipse Engineering Ltd.\'s commitment to helping clients achieve their sustainability goals through tailored energy efficiency solutions and innovative technologies.</p></div>', NULL, 'technician', '874546459.webp', '0', '2024-03-19 12:00:05', '2024-03-24 22:52:49'),
(12, 2, 'Renewable Energy:', '<div style=\"margin: 0px; padding: 0px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 14px;\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; font-size: 18px; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eclipse Engineering Ltd. is a leader in providing renewable energy solutions.&nbsp; We help clients harness clean, sustainable energy sources to power their operations and reduce their reliance on fossil fuels.&nbsp; Our services include<br></span><br style=\"margin: 0px; padding: 0px;\"></div><div style=\"margin: 0px; padding: 0px;\"><p style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1;\"><b>Design and Construction of Rooftop Solar:&nbsp;</b><span style=\"font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Eclipse Engineering Ltd. offers comprehensive services for the design and construction of rooftop solar installations. Our expert team meticulously plans each project to maximize energy production while seamlessly integrating with your existing infrastructure. From initial site assessment to final installation, we ensure the highest quality standards and optimal performance for your rooftop solar system.</span></p><p style=\"color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 18px; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 2.1;\"><b>Design and Construction of Wind Power Plant:&nbsp;</b>Harness the power of the wind with Eclipse Engineering Ltd.\'s expertise in designing and constructing wind power plants. Our team employs advanced technologies and industry best practices to create efficient and reliable wind energy solutions. From site selection and turbine installation to grid connection, we provide end-to-end services to bring your wind power plant to life.<br><b>Design and Construction of Ground-Mounted Solar:&nbsp;</b>Eclipse Engineering Ltd. specializes in the design and construction of ground-mounted solar projects tailored to your specific needs. With extensive experience in solar energy systems, our team delivers cost-effective solutions that maximize energy generation and minimize environmental impact. From initial concept to final commissioning, we manage every aspect of your ground-mounted solar project with precision and expertise.<br><b>Design and Construction of Waste-to-Energy Power Plant:&nbsp;</b>Transform waste into renewable energy with Eclipse Engineering Ltd.\'s innovative solutions for waste-to-energy power plants. Our comprehensive services cover the entire project lifecycle, from feasibility studies and technology selection to construction and operation. With a focus on sustainability and efficiency, we help clients generate clean energy while reducing waste and environmental footprint.<br><span style=\"font-weight: bolder;\">Supervision and Project Management of Renewable Energy Projects:&nbsp;</span>Eclipse Engineering Ltd. provides expert supervision and project management services for renewable energy projects of all scales. Our experienced team ensures seamless execution from start to finish, overseeing construction activities, coordinating contractors, and ensuring adherence to timelines and quality standards. With our proactive approach and attention to detail, we guarantee successful outcomes for your renewable energy initiatives.</p></div>', NULL, 'renewable-energy', '1292110695.webp', '0', '2024-03-19 12:05:04', '2024-03-24 22:53:43');

-- --------------------------------------------------------

--
-- Table structure for table `sister_concerns`
--

CREATE TABLE `sister_concerns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sister_concerns`
--

INSERT INTO `sister_concerns` (`id`, `name`, `description`, `logo`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Eclipse Blend & Blossom', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p><p><br></p><p>New Solar Installation</p><p>Battery &amp; Pannels</p><p>Wind Customize</p>', '1905891595.png', 0, '2024-03-20 22:37:43', '2024-03-20 22:37:43'),
(4, 'Eclipse Consulting LTD', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p><p><br></p><p>New Solar Installation</p><p>Battery &amp; Pannels</p><p>Wind Customize</p>', '323215406.png', 0, '2024-03-20 22:38:14', '2024-03-20 22:38:14'),
(5, 'Eclipse Intellitech Ltd.', '<p><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">Eclipse Intellitech Limited is a leading full-service digital agency based in Bangladesh. We make mobile apps, websites &amp; brands, that people appreciate all around the world.<br></span></font><br><font color=\"#717171\" face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\">With more than ten years of expertise in web development, mobile app development, ui/ux design, digital marketing, and other areas, Eclipse Intellitech Limited has created a cutting-edge platform. Our technology is guided by the guiding principles of flexibility, user friendliness, configurability, and integrability. A fully customizable enterprise solution that offers configurable packages and modules, risk-adjusted business intelligence, parameterized risk alerts in real time, advanced analytics, reporting, and integrability with virtually every ERP and e-procurement tool on the market brings these principles to life.</span></font><br></p>', '1009158096.png', 0, '2024-03-20 22:40:03', '2024-03-25 00:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icons`
--

INSERT INTO `social_icons` (`id`, `name`, `link`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', 'https://www.facebook.com/eclipseengineeringltdofficial?mibextid=ZbWKwL', 'fa-facebook-f', 1, '2024-03-23 21:47:20', '2024-03-23 21:52:29'),
(2, 'Linkedin', 'https://www.linkedin.com/company/eclipseengineeringlimited/', 'fa-linkedin-in', 1, '2024-03-23 21:48:29', '2024-03-23 21:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asf@dfsd.com', 0, '2024-03-13 03:55:37', '2024-03-13 03:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `photo`, `address`, `email_verified_at`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$24sBZud2Bg3hmCVZlNBNNOjmrL5GH8hsFEt7vxPscVVABcd1KR5Re', 'admin', 'active', '2vzO58WeZd4ZIQN9SMdPjEyms0oFRFIDT93G4uyIPQ5H7ObbJEpgkwEZOxyy', NULL, NULL),
(2, 'user', 'user', 'user@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$U5wD1Uo1AiWBEAXuNgJRQOWUfjW1Aci8bDGf21DbwjPppR1k/6DaG', 'user', 'active', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id`, `title`, `description`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Our Vision', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.', 'targeting', 0, '2024-03-19 14:18:18', '2024-03-19 14:30:30'),
(2, 'Our Mission', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.', 'leadership', 0, '2024-03-19 14:31:45', '2024-03-19 14:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us`
--

CREATE TABLE `why_choose_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us`
--

INSERT INTO `why_choose_us` (`id`, `title`, `sub_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Productivity Boosts from', 'Efficiency', 'Choose us for expertise, innovation, sustainability, client focus, and proven results. Your success is our priority.', 1, '2024-03-19 12:27:19', '2024-03-19 12:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `why_choose_us_details`
--

CREATE TABLE `why_choose_us_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `why_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `icon` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `why_choose_us_details`
--

INSERT INTO `why_choose_us_details` (`id`, `why_id`, `title`, `description`, `icon`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Strong ties with top manufacturers & consultants in respective sectors', '<p>We have strong ties with top quality manufacturers &amp; consultants in each of our service sectors.<br></p>', 'experience-1', NULL, 1, '2024-03-19 12:44:19', '2024-03-24 23:36:40'),
(2, 1, 'Fast response to technical issues & concerns', '<p>Our dedicated technical &amp; customer support team is always&nbsp;<span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">ready to consult with you to solve your issues &amp; concerns.</span></p>', 'product-lauch', NULL, 1, '2024-03-19 12:47:43', '2024-03-24 23:37:27'),
(3, 1, 'Professional technicians/engineers of equipment and spare parts', '<p>We have professional engineers and technicians for every equipments and spare parts in each of our service sectors.<br></p>', 'solar-cell', NULL, 1, '2024-03-19 12:49:37', '2024-03-24 23:38:03'),
(4, 1, 'Guarantees quality and authenticity, with optional inspection services', '<p>We are dedicated to provide quality &amp; authenticity with optional inspection services for our customers satisfaction<br></p>', 'green-power', NULL, 1, '2024-03-19 12:51:20', '2024-03-24 23:39:06'),
(5, 1, 'Dedicated to quality & authenticity, optional inspections ensure customer satisfaction', '<p>We are experienced in various projects like transportation, water, power &amp; energy as a solution provider over 7 years.<br></p>', 'experience', NULL, 1, '2024-03-24 23:41:57', '2024-03-24 23:42:02'),
(6, 1, 'Professional door to door logistics management', '<p>We provide door-to-door delivery services for clients who wish to streamline logistics administration, cut expenses, and decrease the risk of product loss or damage while concentrating on their main business.<br></p>', 'jumping-man', NULL, 0, '2024-03-24 23:43:04', '2024-03-24 23:43:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_inroductions`
--
ALTER TABLE `about_inroductions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_settings`
--
ALTER TABLE `about_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_s_r_activities`
--
ALTER TABLE `c_s_r_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer_settings`
--
ALTER TABLE `footer_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_settings`
--
ALTER TABLE `home_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managing_teams`
--
ALTER TABLE `managing_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_partners`
--
ALTER TABLE `our_partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_partner_details`
--
ALTER TABLE `our_partner_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_partner_details_partner_id_foreign` (`partner_id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `overviews`
--
ALTER TABLE `overviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_details_projects_id_foreign` (`projects_id`);

--
-- Indexes for table `services_details`
--
ALTER TABLE `services_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_details_services_id_foreign` (`services_id`);

--
-- Indexes for table `sister_concerns`
--
ALTER TABLE `sister_concerns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icons`
--
ALTER TABLE `social_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `why_choose_us_details`
--
ALTER TABLE `why_choose_us_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `why_choose_us_details_why_id_foreign` (`why_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_inroductions`
--
ALTER TABLE `about_inroductions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_settings`
--
ALTER TABLE `about_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `c_s_r_activities`
--
ALTER TABLE `c_s_r_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_settings`
--
ALTER TABLE `footer_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home_settings`
--
ALTER TABLE `home_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `managing_teams`
--
ALTER TABLE `managing_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_partners`
--
ALTER TABLE `our_partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_partner_details`
--
ALTER TABLE `our_partner_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `overviews`
--
ALTER TABLE `overviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services_details`
--
ALTER TABLE `services_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sister_concerns`
--
ALTER TABLE `sister_concerns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `why_choose_us_details`
--
ALTER TABLE `why_choose_us_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `our_partner_details`
--
ALTER TABLE `our_partner_details`
  ADD CONSTRAINT `our_partner_details_partner_id_foreign` FOREIGN KEY (`partner_id`) REFERENCES `our_partners` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_details`
--
ALTER TABLE `project_details`
  ADD CONSTRAINT `project_details_projects_id_foreign` FOREIGN KEY (`projects_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services_details`
--
ALTER TABLE `services_details`
  ADD CONSTRAINT `services_details_services_id_foreign` FOREIGN KEY (`services_id`) REFERENCES `our_services` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `why_choose_us_details`
--
ALTER TABLE `why_choose_us_details`
  ADD CONSTRAINT `why_choose_us_details_why_id_foreign` FOREIGN KEY (`why_id`) REFERENCES `why_choose_us` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
