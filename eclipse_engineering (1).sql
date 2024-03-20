-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2024 at 06:36 PM
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
(1, 'Diana Pollard', 'kenyhub@mailinator.com', '+1 (527) 793-3398', NULL, 'Bolton Willis Plc', 'Tenetur molestias ea', '2024-03-13 21:44:35', NULL);

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
(2, 'Sadi Al Hossain', 'Director', '1710846137.webp', 'https://www.facebook.com/sadi.sonal', 'https://www.instagram.com/', 'https://www.linkedin.com/in/sadi-al-hossain-34897b256', 'https://twitter.com/', '<p>asdasd</p>', NULL, NULL),
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
(33, '2024_03_20_155703_create_sister_concerns_table', 6);

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
(1, 'EEL Signs Contract With NNIL For 119.9KW Rooftop Solar Power Plant', '<p>Neel Nagar Industries Ltd.(NNIL), a prominent leading Polyester Staple Fiber (PSF) manufacturing companies in Bangladesh, has signed a contract with Eclipse Engineering Limited (EEL) to establish a 119.9KW rooftop solar power plant at its factory located at Mirzapur, Tegoria, South Keranigonj, Dhaka-1310, Bangladesh.</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">The solar power plant will be ingeniously situated a top Neel Nagar Industries Ltd.’s factory premises located in . This initiative marks a significant stride towards curbing the company’s carbon footprint. By offsetting approximately 2,000 tons of CO2 emissions each year, the factory is poised to make a lasting impact on its sustainability journey.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Sadi Al Hossain, Director of EEL, reciprocated the enthusiasm. This venture not only signifies EEL’s foray into a pioneering project but also stands as the finest rooftop solar power plant endeavor in their portfolio. Sadi reaffirmed EEL’s dedication to furnishing NNIL’s with an impeccable solar solution that meets their energy requisites while substantiating their sustainability goals.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Aminul Haque, CEO of NNIL underscored the strategic significance of renewable energy, particularly in the context of Bangladesh’s energy landscape. The rooftop solar power plant initiative is positioned as a steadfast response to the prevailing energy vulnerabilities. Haque exuded confidence that this undertaking would bolster NNIL’ standing as an industry leader committed to responsible practices.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Kazi Rumiz Hossain, General Manager-Supply Chain at Neel Nagar Industries Ltd. (NNIL), alongside esteemed officials from Eclipse Engineering Limited (EEL) graced the signing ceremony with their presence. This collaborative stride towards a sustainable future resonates as a milestone not only for NNIL and EEL but also as a beacon illuminating the path towards a greener and more responsible industry landscape.</span><br></p>', '768375418.webp', 1, '2024-03-19 07:00:36', '2024-03-19 08:35:46'),
(2, 'Why invest in renewable energy?', '<p>To answer your question, it is because renewable energy-based projects are green, clean, sustainable and natural. Today, renewable energy generates 26% of the world’s electricity. By 2024, it is expected to create 30%. This upper-lining trend is one that businesses should pay more attention to if they hope to remain competitive and successful, especially when it comes to investing in renewable energy-based supply chains. Now more than ever, it’s vital that countries put renewable energy and other low-carbon technologies at the fore to build back better after COVID-19, creating new jobs and rebooting their economies. The fossil fuel industry is among the hardest hit by the coronavirus crisis, with leading oil, gas and petrochemical companies losing an average of 45% of their total market value. Since the start of the year, we have seen the sharpest drop in oil demand in a quarter of a century. Green energy stocks were also less volatile across the board than traditional fossil fuels, with such portfolios holding up well during the turmoil caused by the pandemic, while oil and gas collapsed.&nbsp;</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">The global movement of divestment from fossil fuels is gathering pace in Europe, with significant support from high-profile individuals, governments and businesses.&nbsp; It creates a positive environment for sustainable investment to thrive.&nbsp; Investing in renewable energy infrastructure has clear benefits: it can generate attractive returns for investors, whilst having a positive effect in the ongoing battle against the climate crisis. We want to see both sustainable energy production and secure energy supply at the heart of our communities, the energy sector and Government policy. Much more needs to be done by the international community, especially to drive investment in lower-income economies, where the private sector has been reluctant to venture.</span><br></p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Renewables are the force to a climate-safe world. Far from having to select between mitigating the foreseen climate crisis and economic upscale, it is visible than ever that a scope lives to ramp up investment in low-carbon technologies and shift the global development paradigm from one of scarcity, inequality and competition to one of shared prosperity – in our lifetimes. If we take clearer decisions now, a sustainable energy future is within our foremost reach.</span><br></p>', '817923553.webp', 1, '2024-03-19 08:35:37', '2024-03-19 08:35:49'),
(3, 'Why does Bangladesh need wind power plants?', '<p>Bangladesh is encountering difficulties in supplying energy to maintain its economic growth. The Government of Bangladesh is looking for renewable energy sources to meet up the total power demand in this country. After the severe Covid-19 pandemic and due to ongoing war in Europe, the country is suffering from the unavailability of fossil fuels such as oil, LNG and coal to run the already commissioned traditional power plants.</p><p><span style=\"font-size: var(--bs-body-font-size); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Bangladesh must involve itself in the massive development of wind power stations in coastal areas such as Patuakhali, Khulna, Barishal, Bhola, Cox’s Bazar, Chittagong, Swandip, Saint Martin Island, and other areas nearby the sea. NREL has conducted a study and found that for wind speeds of 5.75-7.75 m/s, there are more than 20,000 square kilometers of land with a gross wind potential of more than 30,000MW and published the report entitled “Assessing the Wind Energy Potential in Bangladesh”. Wind will relax the dependency on fossil fuel overseas, it will create more jobs for the local people, wind turbines are not expensive these days and wind projects will be economically viable for the country. As Bangladesh Government and international investment companies are concentrating more on renewable energy-based projects in Bangladesh, sincere support must be addressed from the higher-ups to push the wind investment projects to be developed on fast track basis all over the country by following the policies of unsolicited IPP basis. The development of wind power will not only enrich our economy but also help to keep this planet clean and protect our future generations from pollution.</span><br></p>', '1124030296.webp', 0, '2024-03-19 08:45:12', '2024-03-19 08:45:12');

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
(7, 2, 'Engineering Consulting Services', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. offers a wide range of engineering consulting services to support your projects from conception to completion.&nbsp; Our team of experienced engineers provides expertise in various disciplines, including:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Civil Engineering:</b> We provide design and engineering services for infrastructure projects like roads, bridges, and buildings.</span></div><div><span style=\"font-size: 14.4px;\"><b>Mechanical Engineering:</b> Our team helps design and implement mechanical systems for buildings, industrial facilities, and power plants.</span></div><div><span style=\"font-size: 14.4px;\"><b>Electrical Engineering:</b> We offer expertise in electrical system design, power distribution, and control systems.</span></div><div><span style=\"font-size: 14.4px;\"><b>Project Management:</b> We manage your engineering projects efficiently, ensuring they are completed on time, within budget, and to your specifications.</span></div><div><span style=\"font-size: 14.4px;\">We hope this detailed explanation of our services helps you understand how Eclipse Engineering Ltd. can be a valuable partner for your next project.</span></div>', NULL, 'continuous-improvement', '980866457.webp', '0', '2024-03-19 11:35:32', '2024-03-19 11:35:32'),
(8, 2, 'Supply/Trading', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. is your one-stop shop for procuring the equipment and materials needed for your engineering projects.&nbsp; We leverage our extensive network of suppliers to source high-quality products at competitive prices.&nbsp; Our services include:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Sourcing and Procurement:</b> We identify and source the specific equipment and materials required for your project, ensuring timely delivery.</span></div><div><span style=\"font-size: 14.4px;\"><b>Quality Control:</b> We maintain strict quality control procedures to guarantee the reliability and performance of the products you receive.</span></div><div><span style=\"font-size: 14.4px;\"><b>Inventory Management:</b> We manage your project inventory efficiently, ensuring you have the right materials on hand when needed.</span></div><div><span style=\"font-size: 14.4px;\"><b>Supply Chain Management:</b> We optimize your supply chain to minimize costs and ensure smooth project execution.</span></div>', NULL, 'targeting', '1085984157.webp', '0', '2024-03-19 11:43:19', '2024-03-19 11:43:19'),
(9, 2, 'Logistics Services', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. offers comprehensive logistics solutions to support your engineering projects.&nbsp; We handle the critical task of moving equipment, materials, and supplies efficiently and securely.&nbsp; Our services include:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Transportation Management:</b> We plan and execute the transportation of your project cargo, utilizing various modes like sea freight, airfreight, and overland trucking.</span></div><div><span style=\"font-size: 14.4px;\"><b>Customs Clearance:</b> Our team facilitates seamless customs clearance for your imported and exported goods, ensuring timely project delivery.</span></div><div><span style=\"font-size: 14.4px;\"><b>Warehousing and Inventory Management:</b> We provide secure warehousing solutions and manage your inventory efficiently, ensuring materials are readily available at project sites.</span></div><div><span style=\"font-size: 14.4px;\"><b>Project Cargo Handling:</b> We have the expertise to handle oversized, overweight, or specialized cargo, ensuring safe and secure transportation.</span></div>', NULL, 'mission', '1051136299.webp', '0', '2024-03-19 11:48:27', '2024-03-19 11:48:27'),
(10, 2, 'Energy Efficiency', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. is committed to helping clients achieve their sustainability goals.&nbsp; Our energy efficiency services identify and implement solutions to reduce energy consumption and operating costs.&nbsp; We provide:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Energy Audits: </b>Our comprehensive energy audits analyze your energy usage patterns and identify areas for improvement.</span></div><div><span style=\"font-size: 14.4px;\"><b>Energy-Saving Upgrades:</b> We recommend and implement cost-effective upgrades like LED lighting, efficient HVAC systems, and building envelope improvements.</span></div><div><span style=\"font-size: 14.4px;\"><b>Renewable Energy Integration:</b> We help integrate renewable energy sources like solar panels or wind turbines into your existing infrastructure.</span></div><div><span style=\"font-size: 14.4px;\"><b>Energy Management Strategies:</b> We develop customized strategies to optimize your energy consumption and reduce your carbon footprint.</span></div>', NULL, 'energy', '1120074312.webp', '0', '2024-03-19 11:54:28', '2024-03-19 11:54:28'),
(11, 2, 'Operation & Maintenance (O&M)', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. understands the importance of keeping your facilities and equipment running smoothly.&nbsp; Our O&amp;M services ensure optimal performance and extend the lifespan of your assets.&nbsp; We offer:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Planned Maintenance:</b> We develop and execute preventive maintenance schedules to identify and address potential issues before they cause downtime.</span></div><div><span style=\"font-size: 14.4px;\"><b>Emergency Repairs:</b> Our team is available 24/7 to respond to unexpected equipment failures and get your operations back online quickly.</span></div><div><span style=\"font-size: 14.4px;\"><b>Performance Monitoring:</b> We utilize advanced monitoring systems to track equipment health and identify areas for improvement.</span></div><div><span style=\"font-size: 14.4px;\"><b>Operator Training:</b> We provide training programs to equip your personnel with the knowledge and skills to operate and maintain your facilities effectively.</span></div>', NULL, 'technician', '874546459.webp', '0', '2024-03-19 12:00:05', '2024-03-19 12:00:05'),
(12, 2, 'Renewable Energy:', '<div><span style=\"font-size: 14.4px;\">Eclipse Engineering Ltd. is a leader in providing renewable energy solutions.&nbsp; We help clients harness clean, sustainable energy sources to power their operations and reduce their reliance on fossil fuels.&nbsp; Our services include:</span></div><div><span style=\"font-size: 14.4px;\"><br></span></div><div><span style=\"font-size: 14.4px;\"><b>Feasibility Studies:</b> We conduct comprehensive feasibility studies to assess the viability of renewable energy projects for your specific needs.</span></div><div><span style=\"font-size: 14.4px;\"><b>System Design and Engineering:</b> Our team designs and engineers efficient renewable energy systems like solar farms or wind turbines.</span></div><div><span style=\"font-size: 14.4px;\"><b>Project Management:</b> We manage all aspects of your renewable energy project, from procurement and permitting to construction and commissioning.</span></div><div><span style=\"font-size: 14.4px;\"><b>Operations and Maintenance:</b> We provide ongoing operation and maintenance services to ensure your renewable energy system operates at peak performance.</span></div>', NULL, 'renewable-energy', '1292110695.webp', '0', '2024-03-19 12:05:04', '2024-03-19 12:05:04');

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
(2, 'Eclipse Intellitech LTD', '<div class=\"desc\" style=\"margin: 0px 0px 20px; padding: 0px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 14px;\"><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; line-height: 1.9;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p></div><div class=\"check-list\" style=\"margin: 0px 0px 30px; padding: 0px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-size: 14px;\"><ul class=\"dot-style\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; list-style: none;\"><li style=\"margin: 0px 0px 5px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: flex; -webkit-box-align: center; align-items: center; gap: 15px; font-weight: var(--tj-fw-medium);\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: inline-flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; width: 16px; height: 16px; line-height: 1; font-size: 10px; color: var(--tj-color-common-white); background: var(--tj-color-theme-primary); border-radius: 50%;\"><span class=\"fa-light fa-check\" style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: var(--fa-display,inline-block); font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; font-family: &quot;Font Awesome 6 Pro&quot;;\"></span></span>New Solar Installation</li><li style=\"margin: 0px 0px 5px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: flex; -webkit-box-align: center; align-items: center; gap: 15px; font-weight: var(--tj-fw-medium);\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: inline-flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; width: 16px; height: 16px; line-height: 1; font-size: 10px; color: var(--tj-color-common-white); background: var(--tj-color-theme-primary); border-radius: 50%;\"><span class=\"fa-light fa-check\" style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: var(--fa-display,inline-block); font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; font-family: &quot;Font Awesome 6 Pro&quot;;\"></span></span>Battery &amp; Pannels</li><li style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: flex; -webkit-box-align: center; align-items: center; gap: 15px; font-weight: var(--tj-fw-medium);\"><span style=\"margin: 0px; padding: 0px; transition: all 0.3s ease-in-out 0s; display: inline-flex; -webkit-box-align: center; align-items: center; -webkit-box-pack: center; justify-content: center; width: 16px; height: 16px; line-height: 1; font-size: 10px; color: var(--tj-color-common-white); background: var(--tj-color-theme-primary); border-radius: 50%;\"><span class=\"fa-light fa-check\" style=\"margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; display: var(--fa-display,inline-block); font-variant-numeric: normal; font-variant-east-asian: normal; font-variant-alternates: normal; font-variant-position: normal; line-height: 1; text-rendering: auto; font-family: &quot;Font Awesome 6 Pro&quot;;\"></span></span>Wind Customize</li></ul></div>', '415790857.png', 0, '2024-03-20 11:33:56', '2024-03-20 11:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `social_icons`
--

CREATE TABLE `social_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'admin', 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, '$2y$12$24sBZud2Bg3hmCVZlNBNNOjmrL5GH8hsFEt7vxPscVVABcd1KR5Re', 'admin', 'active', 'bgjeOAPUrs4lVXgJxz5G8LjOtfFzfuOBFDAR62yMBN7gyo09mFFwAKiOdwHM', NULL, NULL),
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
(1, 1, 'Expertise', '<p><span style=\"font-size: 14.4px;\">With a team of highly skilled engineers and consultants, we bring decades of collective experience to the table. Our expertise spans a wide range of industries and disciplines, ensuring that we have the knowledge and capability to tackle even the most complex challenges.</span><br></p>', 'experience-1', NULL, 1, '2024-03-19 12:44:19', '2024-03-19 12:44:25'),
(2, 1, 'Innovation', '<p><span style=\"font-size: 14.4px;\">We pride ourselves on our commitment to innovation. Constantly seeking out the latest technologies and methodologies, we strive to push the boundaries of what\'s possible, delivering cutting-edge solutions that drive efficiency, sustainability, and success.</span><br></p>', 'product-lauch', NULL, 1, '2024-03-19 12:47:43', '2024-03-19 12:47:51'),
(3, 1, 'Sustainability', '<p><span style=\"font-size: 14.4px;\">Environmental responsibility is at the core of everything we do. From promoting energy efficiency to championing renewable energy initiatives, we are dedicated to minimizing our ecological footprint and creating a greener, more sustainable future for generations to come.</span><br></p>', 'solar-cell', NULL, 1, '2024-03-19 12:49:37', '2024-03-19 12:51:32'),
(4, 1, 'Client-Centric Approach', '<p><span style=\"font-size: 14.4px;\">At Eclipse Engineering Ltd., our clients always come first. We believe in the power of collaboration and open communication, working closely with you every step of the way to ensure that our solutions are tailored to meet your unique needs and objectives.</span><br></p>', 'green-power', NULL, 1, '2024-03-19 12:51:20', '2024-03-19 12:51:29');

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
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_icons`
--
ALTER TABLE `social_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
