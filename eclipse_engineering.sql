-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 10:44 AM
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
(1, 'Eclipse Engineering LTD', 'Energy Accessible', '<p><font face=\"Poppins, sans-serif\"><span style=\"font-size: 18px;\"><font color=\"#ff0000\">Eclipse Engineering Ltd. </font><font color=\"#717171\">(EEL) is an independent Trading, engineering & consulting company operating across Bangladesh since 2017 with headquarters in Dhaka. We have maintained our independence by ensuring no financial ties with suppliers or installers. Our services are tailor-made to meet the requirements for every engineering, construction & built-in project we take on. Our focus on quality, reliability, and innovation has helped us to ensure that our client base has grown steadily since we started and is the reason why our existing customers have continued to use our knowledge and services since the very first time they tried us.</font></span></font></p><p><span style=\"font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">To maintain our organization\'s high-quality standards and knowledge, investments are often made in advanced skill-based courses and health & safety training for our employees. We also open up some of these sessions to our partners and trusted contractors to ensure our network remains highly skilled.</span><br></p><p><span style=\"font-size: 18px; color: rgb(113, 113, 113); font-family: Poppins, sans-serif; font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">We keep a small team of core employees at EEL, however, we can expand in numbers and expertise at short notice to fit the needs of individual projects</span><br></p>', '1297488301.webp', '0', '2024-03-13 23:57:26', '2024-03-19 01:41:29');

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
(1, 'Cole Acevedo', 'Laboriosam facilis', '1710820338.jpg', 'https://www.ryvygomom.info', 'https://www.rysoxuditabi.tv', 'https://www.vilebi.mobi', 'https://www.goqyqu.us', NULL, NULL, NULL);

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
(31, '2024_02_22_044314_create_galleries_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, 'Years Of Experience', 7, NULL, 'experience', 1, '2024-03-19 00:37:41', '2024-03-19 00:46:17'),
(3, 'Completed Projects', 70, NULL, 'completed-task', 1, '2024-03-19 00:42:25', '2024-03-19 00:42:30'),
(4, 'Employees', 50, NULL, 'leadership', 0, '2024-03-19 00:48:16', '2024-03-19 00:48:16');

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
(1, 2, 'Renewable Energy', '<div>At Eclipse Engineering, we\'re passionate about helping you transition to a clean and sustainable future. We offer a comprehensive suite of renewable energy services designed to meet your unique needs. Whether you\'re a homeowner looking to install solar panels on your roof, a business seeking to reduce your carbon footprint, or a developer planning a large-scale renewable energy project, we have the expertise to guide you every step of the way.</div><div><br></div><div>Our Renewable Energy Services Include:</div><div><br></div><div>Solar Power Solutions: From initial feasibility studies and system design to installation, maintenance, and monitoring, we can help you harness the power of the sun for your home or business.</div><div>Wind Energy Development: Explore the potential of wind power with our expert wind resource assessment and project development services.</div><div>Battery Storage and Microgrids: Maximize the use of your renewable energy with battery storage solutions and explore the benefits of creating a self-sufficient microgrid.</div><div>Renewable Energy Consulting: Our team of experienced engineers can provide comprehensive consulting services to help you navigate the complexities of renewable energy projects.</div><div>Benefits of Choosing Eclipse Engineering:</div><div><br></div><div>Turnkey Solutions: We handle everything from project inception to completion, ensuring a smooth and efficient process.</div><div>Experienced Team: Our team of qualified professionals has a proven track record of success in the renewable energy industry.</div><div>Cutting-Edge Technology: We utilize the latest advancements in renewable energy technology to deliver optimal solutions.</div><div>Commitment to Sustainability: We are dedicated to helping you achieve your sustainability goals and creating a greener future for all.</div><div>Contact us today to discuss your renewable energy needs and learn how Eclipse Engineering can help you power a sustainable future.</div>', '2064298427.webp', 'renewable-energy', NULL, '0', '2024-03-19 02:16:01', '2024-03-19 02:16:01'),
(2, 2, 'Energy Efficiency', '<div>Imagine a world where your energy bills shrink like a shadow on a sunny day, and your environmental impact is lighter than a feather. At Eclipse Engineering, we turn that vision into reality with our cutting-edge energy efficiency services.</div><div><br></div><div>We go beyond the typical audit and upgrade approach. We become energy detectives, uncovering hidden energy wasters lurking in your systems.</div><div><br></div><div>Our Secret Weapon?&nbsp; Data-Driven Optimization.</div><div><br></div><div>We don\'t just guess - we leverage advanced analytics to pinpoint inefficiencies and craft a personalized strategy to unleash your building\'s true energy potential.&nbsp; Think of it as a Jedi mind trick for your electricity!</div><div><br></div><div>The Benefits of Energy Enlightenment:</div><div><br></div><div>Slash Your Energy Bills: Prepare to be amazed at the dramatic reduction in your monthly costs.</div><div>Embrace the Green Force: Reduce your carbon footprint and become a champion for sustainability.</div><div>Supercharge Your Comfort: Enjoy a more temperature-controlled environment, perfect for peak productivity.</div><div>Unlock Hidden Value: Increase the long-term value of your property with energy-efficient upgrades.</div><div>Ready to unleash the power of energy efficiency? Contact Eclipse Engineering today and let\'s unlock your hidden energy savings!</div>', NULL, 'energy', NULL, '0', '2024-03-19 02:27:42', '2024-03-19 02:27:42'),
(3, 2, 'Operation & Maintenance', '<div>Transitioning to renewable energy is a wise decision, but the journey doesn\'t stop there. Eclipse Engineering\'s Operation &amp; Maintenance (O&amp;M) services ensure your clean energy systems operate at peak performance for years to come.</div><div><br></div><div>Think of us as your renewable energy pit crew. We proactively manage your solar panels, wind turbines, or other green systems, preventing downtime and maximizing your return on investment.</div><div><br></div><div>Our O&amp;M Services are More Than Just Wrench Work:</div><div><br></div><div>Predictive Maintenance: We utilize advanced monitoring and diagnostics to identify potential issues before they become problems, minimizing downtime and costly repairs.</div><div>Performance Optimization: Our team ensures your system is operating at its optimal efficiency, delivering the maximum energy output.</div><div>Expert Troubleshooting: In the event of an issue, our experienced technicians are on standby to diagnose and resolve problems quickly and efficiently.</div><div>24/7 Support: We provide you with peace of mind with 24/7 access to our dedicated O&amp;M team.</div><div>The Benefits of a Well-Maintained Green Machine:</div><div><br></div><div>Maximize Energy Production: Ensure your renewable energy system is capturing the most sunshine, wind, or other resources possible.</div><div>Extend System Lifespan: Proper maintenance keeps your system running smoothly for years to come, reducing the need for costly replacements.</div><div>Reduce Unexpected Costs: Preventative maintenance is far more cost-effective than reactive repairs.</div><div>Peace of Mind: Relax and enjoy the benefits of clean energy knowing your system is in expert hands.</div><div>Let Eclipse Engineering be your trusted partner for O&amp;M. Contact us today and keep your green machine running smoothly!</div>', NULL, 'customize', NULL, '0', '2024-03-19 02:31:58', '2024-03-19 02:31:58'),
(4, 2, 'Logistics Services', '<div>At Eclipse Engineering, we understand that a sustainable future requires a seamless present.&nbsp; That\'s why we offer comprehensive logistics services designed to minimize environmental impact while maximizing efficiency for your renewable energy projects.</div><div><br></div><div>Think of us as your eco-conscious supply chain orchestrators.</div><div><br></div><div>Green Route Optimization: We meticulously plan transport routes to minimize fuel consumption and emissions, ensuring your equipment arrives efficiently and responsibly.</div><div>Sustainable Packaging Solutions: We prioritize eco-friendly packaging materials and responsible waste disposal practices to minimize your environmental footprint.</div><div>Real-Time Tracking and Visibility: Maintain complete transparency throughout the logistics process, allowing you to track your equipment in real-time and ensure a smooth delivery.</div><div>Global Reach, Local Expertise: Our network of partners allows us to navigate customs regulations and logistics complexities worldwide, ensuring smooth delivery across borders.</div><div>The Benefits of Our Eco-Logistics Expertise:</div><div><br></div><div>Reduced Carbon Footprint: Minimize the environmental impact of your supply chain.</div><div>Cost Optimization: We streamline logistics for maximum efficiency, saving you time and money.</div><div>Project Acceleration: Faster delivery means faster project completion and a quicker return on investment for your renewable energy initiatives.</div><div>Peace of Mind: Experience stress-free logistics with our expert guidance and real-time tracking.</div><div>Let Eclipse Engineering orchestrate your sustainable supply chain. Contact us today and experience the green difference in logistics!</div>', NULL, 'reliability', NULL, '0', '2024-03-19 02:36:31', '2024-03-19 02:36:31');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- AUTO_INCREMENT for table `why_choose_us`
--
ALTER TABLE `why_choose_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `why_choose_us_details`
--
ALTER TABLE `why_choose_us_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
