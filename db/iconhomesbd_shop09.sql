-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2023 at 04:17 PM
-- Server version: 8.0.34-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconhomesbd_shop09`
--

-- --------------------------------------------------------

--
-- Table structure for table `businesssettings`
--

CREATE TABLE `businesssettings` (
  `id` bigint UNSIGNED NOT NULL,
  `website_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `meta_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facbook_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `businesssettings`
--

INSERT INTO `businesssettings` (`id`, `website_name`, `business_tag`, `email`, `phone`, `address`, `logo`, `favicon`, `meta`, `meta_description`, `meta_image`, `facbook_links`, `instagram_links`, `linkedin_links`, `twitter_links`, `youtube_links`, `currency`, `created_at`, `updated_at`) VALUES
(1, 'Iconhomes', 'Find your property', 'info@iconhomesbd.com', '8801980340029', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, 1229 Sayem Sobhan Anvir Rd, Dhaka 1229', 'public/files/setting/65112a78ade72.png', 'public/files/setting/651be774d494b.png', 'Find your property', 'asdfdg', 'files/setting/65112d18bd04f.png', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://bd.linkedin.com/', 'https://twitter.com/?lang=en', 'https://www.youtube.com/', '৳', NULL, '2023-10-03 04:05:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(2, 'ফ্ল্যাট', NULL, NULL),
(3, 'জমি', NULL, NULL),
(4, 'বাণিজ্যিক ভবন', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_query`
--

CREATE TABLE `customer_query` (
  `id` bigint UNSIGNED NOT NULL,
  `property_id` bigint DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_query`
--

INSERT INTO `customer_query` (`id`, `property_id`, `title`, `location`, `price`, `name`, `phone`, `email`, `address`, `description`, `comment`, `created_at`, `updated_at`) VALUES
(3, NULL, 'Test Title', 'test location', '1200', 'admin', '01789456120', 'admin@sarkarit.com', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, Dhaka 1229', NULL, 'undone1', NULL, NULL),
(4, NULL, 'ওয়েস্ট টাউন আবাসিক প্রকল্প', 'আফতাব নগর ঢাকা', '40000', 'preorder', '01789456120', 'admin@sarkarit.com', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, 1229 Sayem Sobhan Anvir Rd, Dhaka 1229', 'dfhfgj', 'a', NULL, NULL),
(5, NULL, 'ওয়েস্ট টাউন আবাসিক প্রকল্প', 'আফতাব নগর ঢাকা', '40000', 'lalsobuz', '01789456120', 'admin@sarkarit.com', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, 1229 Sayem Sobhan Anvir Rd, Dhaka 1229', 'dfdg', NULL, NULL, NULL),
(6, 5, 'ওয়েস্ট টাউন আবাসিক প্রকল্প', 'আফতাব নগর ঢাকা', '40000', 'preorder', '01789456120', 'admin@sarkarit.com', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, 1229 Sayem Sobhan Anvir Rd, Dhaka 1229', 'sddd', NULL, NULL, NULL),
(7, 10, 'Its Amazing Plot', 'মিরপুর, ঢাকা', '1200', 'admin', '01789456120', 'admin@sarkarit.com', 'Rupayan Shopping Square, Floor # E11 Plot No # 02, 1229 Sayem Sobhan Anvir Rd, Dhaka 1229', 'dfdfg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `location_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location_name`, `created_at`, `updated_at`) VALUES
(1, 'হেমায়েতপুর ,সাভার, ঢাকা', NULL, NULL),
(3, 'মিরপুর, ঢাকা', NULL, NULL),
(4, 'কল্যানপুর, ঢাকা', NULL, NULL),
(5, 'উত্তরা, ঢাকা', NULL, NULL),
(6, 'বারিধারা, ঢাকা', NULL, NULL),
(7, 'বসুন্ধরা আবাসিক, ঢাকা', NULL, NULL),
(8, 'গুলশান, ঢাকা', NULL, NULL),
(9, 'আফতাব নগর ঢাকা', NULL, NULL),
(10, 'ধানমন্ডি , ঢাকা', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location_types`
--

CREATE TABLE `location_types` (
  `id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_types`
--

INSERT INTO `location_types` (`id`, `type`, `location_id`, `created_at`, `updated_at`) VALUES
(1, 'A-Block Bashundhara R/A', 7, NULL, NULL),
(2, 'A-Block Bashundhara R/A02', 7, NULL, NULL),
(3, 'Apartment Land Share', 7, NULL, NULL),
(4, 'B-Block Bashundhara R/A', 7, NULL, NULL),
(5, 'C-Block Bashundhara R/A', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_09_20_065314_create_businesssettings_table', 2),
(7, '2023_09_21_105954_create_categories_table', 3),
(8, '2023_09_23_045755_create_locations_table', 4),
(9, '2023_09_23_053425_create_sizes_table', 5),
(11, '2023_09_23_094150_create_properties_table', 6),
(14, '2023_10_02_043737_create_location_type_table', 7),
(15, '2023_10_02_045010_rename_location_type_table_to_location_types_table', 7),
(16, '2023_10_04_065028_create_customer_query_table', 7),
(18, '2023_10_12_120756_create_post_ads_table', 8),
(20, '2023_10_22_061312_create_plot_visits_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plot_visits`
--

CREATE TABLE `plot_visits` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_ads`
--

CREATE TABLE `post_ads` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_ads`
--

INSERT INTO `post_ads` (`id`, `title`, `name`, `phone`, `email`, `address`, `photo`, `start_date`, `end_date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Test Title', 'admin', '01789456120', 'admin@sarkarit.com', 'mohammodpur', '[\"1779725663683752.jpg\"]', '2023-10-14 16:17:00', '2023-10-16 16:17:00', 'sdfdsghfdh', 'success-01', NULL, NULL),
(4, 'Aloha    wrote about your the prices', 'RobertWouMp', '88497254312', 'zelatcol@gmail.com', NULL, NULL, NULL, NULL, 'Dia duit, theastaigh uaim do phraghas a fháil.', NULL, NULL, NULL),
(5, 'Hi, i writing about your   price', 'RobertWouMp', '81494475896', 'alfredegov@gmail.com', NULL, NULL, NULL, NULL, 'Sveiki, aš norėjau sužinoti jūsų kainą.', NULL, NULL, NULL),
(6, 'Improve local visibility for iconhomesbd.com', 'Mike Brown', '81237621899', 'mikeFeasiscabe@gmail.com', 'https://no-site.com', NULL, NULL, NULL, 'If you are looking to rank your local business on Google Maps in a specific area, this service is for you. \r\n \r\nGoogle Map Stacking is a highly effective technique for ranking your GMB within a specific mile radius. \r\n \r\nMore info: \r\nhttps://www.speed-seo.net/product/google-maps-pointers/ \r\n \r\nThanks and Regards \r\nMike Brown\r\n \r\n \r\nPS: Want a comprehensive local plan that covers everything? \r\nhttps://www.speed-seo.net/product/local-seo-bundle/', NULL, NULL, NULL),
(7, 'Dr. Prof.', 'Carin Bernardino', '604-276-3980', 'bernardino.carin82@hotmail.com', 'want to get an alert when your website is down? then use our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HmMMe?iconhomesbd.com   for more info', NULL, NULL, NULL, 'want to get an alert when your website is down? then use our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HmMMe?iconhomesbd.com   for more info', NULL, NULL, NULL),
(8, 'Madem', 'Georgina Wolfgang', '21-99-96-82', 'wolfgang.georgina@gmail.com', 'want to get an alert when your website is down? then signup to our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HM1Fg?iconhomesbd.com   for more info', NULL, NULL, NULL, 'want to get an alert when your website is down? then signup to our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HM1Fg?iconhomesbd.com   for more info', NULL, NULL, NULL),
(9, 'Mfheidjwhfuh HUJUHGUJH djwidjwfhuefejjifeh NUHUUUhufhedjefheuhufheudhuwfhu', 'RichardTattE', '84155441573', 'yasen.krasen.13+87489@mail.ru', NULL, NULL, NULL, NULL, 'Nguheidjiwfefhei ijiwdwjurFEJDKWIJFEIF аоушвцшургаруш ШОРГПГОШРГРПГОГРГ iryuieoieifegjejj bvncehfedjiehfu iconhomesbd.com', NULL, NULL, NULL),
(10, 'Domain Authority of your iconhomesbd.com', 'Mike Eddington', '85527439176', 'mikeInhepeCed@gmail.com', 'https://iconhomesbd.com', NULL, NULL, NULL, 'Hi there, \r\n \r\nI have reviewed your domain in MOZ and have observed that you may benefit from an increase in authority. \r\n \r\nOur solution guarantees you a high-quality domain authority score within a period of three months. This will increase your organic visibility and strengthen your website authority, thus making it stronger against Google updates. \r\n \r\nCheck out our deals for more details. \r\nhttps://www.monkeydigital.co/domain-authority-plan/ \r\n \r\nNEW: Ahrefs Domain Rating \r\nhttps://www.monkeydigital.co/ahrefs-seo/ \r\n \r\nThanks and regards \r\nMike Eddington', NULL, NULL, NULL),
(11, 'Collaboration request', 'Mike Archibald', '89659362689', 'mikeroseWabs@gmail.com', 'https://iconhomesbd.com', NULL, NULL, NULL, 'Hi there, \r\n \r\nMy name is Mike from Monkey Digital, \r\n \r\nAllow me to present to you a lifetime revenue opportunity of 35% \r\nThat\'s right, you can earn 35% of every order made by your affiliate for life. \r\n \r\nSimply register with us, generate your affiliate links, and incorporate them on your website, and you are done. It takes only 5 minutes to set up everything, and the payouts are sent each month. \r\n \r\nClick here to enroll with us today: \r\nhttps://www.monkeydigital.org/affiliate-dashboard/ \r\n \r\nThink about it, \r\nEvery website owner requires the use of search engine optimization (SEO) for their website. This endeavor holds significant potential for both parties involved. \r\n \r\nThanks and regards \r\nMike Archibald\r\n \r\nMonkey Digital', NULL, NULL, NULL),
(12, 'FREE fast ranks for iconhomesbd.com', 'Mike Pearcy', '82574433744', 'mikeInhepeCed@gmail.com', 'https://google.com', NULL, NULL, NULL, 'Hi there \r\n \r\nJust checked your iconhomesbd.com baclink profile, I noticed a moderate percentage of toxic links pointing to your website \r\n \r\nWe will investigate each link for its toxicity and perform a professional clean up for you free of charge. \r\n \r\nStart recovering your ranks today: \r\nhttps://www.hilkom-digital.de/professional-linksprofile-clean-up-service/ \r\n \r\n \r\nRegards \r\nMike Pearcy\r\nHilkom Digital SEO Experts \r\nhttps://www.hilkom-digital.de/', NULL, NULL, NULL),
(13, 'The Ultimate Guide to Earning $30,000 per Month in Email Marketing', 'GeorgeObela', '83484973815', 'vevianavani5@gmail.com', NULL, NULL, NULL, NULL, 'The Key to Success - Earning $30,000 per Month in Email Marketing http://marketing-21226278.propertyybecho.com/shop?38680', NULL, NULL, NULL),
(14, 'Amazing deal to start generating new leads for your business', 'Daniel', '88786911386', 'support@newlightdigital.com.hubspot-inbox.com', 'https://no-site.com', NULL, NULL, NULL, 'Hello, \r\n \r\nWe are offering a discount on all our digital marketing services. If you were ever thinking about doing stuff like this, now is the time. This is an amazing deal. Just pick one or more packages below. \r\n \r\n1. Write, optimize, and format 3 blog posts per month (1200 words) \r\n(Value: $1,350) - Now $800/month \r\n \r\n2. 20 hours of SEO per month \r\n(Value: $1,500) - Now $1,000/month \r\n \r\n3. Email marketing -- two emails per month to your list of prospects \r\n(Value $750) - Now $350/month \r\n \r\n4. Social media posting -- 12 posts per month on your social channels (FB + TW + LN) \r\n(Value $900) - Now $450/month \r\n \r\n5. All of the above -- for $2,340 \r\n \r\nThanks! \r\n \r\n \r\n \r\nDaniel \r\nPhone: +1 (586) 372-8384 \r\nWhatsapp: +3 (736) 009-2931 \r\nSkype: live:.cid.5f5cb3da17814a59 \r\nTelegram: awesomeagency', NULL, NULL, NULL),
(15, 'Whitehat SEO for iconhomesbd.com', 'Mike Paterson', '86654185731', 'petergagette@gmail.com', 'https://no-site.com', NULL, NULL, NULL, 'Howdy \r\n \r\nI have just verified your SEO on  iconhomesbd.com for its SEO metrics and saw that your website could use a boost. \r\n \r\nWe will improve your ranks organically and safely, using only state of the art AI and whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nMore info: \r\nhttps://www.digital-x-press.com/unbeatable-seo/ \r\n \r\n \r\nRegards \r\nMike Paterson\r\nDigital X SEO Experts', NULL, NULL, NULL),
(16, 'Capital Business Funding', 'Tigran Ayrapetyan', '85311799735', 'ujn2esbgakah@opayq.com', 'https://iconhomesbd.com', NULL, NULL, NULL, 'Hello, \r\n \r\nWe provide funding through our venture capital company to both start-up and existing companies either looking for funding for expansion or to accelerate growth in their company. \r\nWe have a structured joint venture investment plan in which we are interested in an annual return on investment not more than 10% ROI. We are also currently structuring a convertible debt and loan financing of 3% interest repayable annually with no early repayment penalties. \r\n \r\nWe would like to review your business plan or executive summary to understand a much better idea of your business and what you are looking to do, this will assist in determining the best possible investment structure we can pursue and discuss more extensively. \r\n \r\n \r\nI hope to hear back from you soon. \r\n \r\nSincerely, \r\n \r\nTigran Ayrapetyan \r\nInvestment Director \r\nDevcorp International W.L.L. \r\nP.O Box 10236 Shop No. 305 \r\nFlr 3 Manama Centre, Bahrain \r\nEmail: tigran.a@devcorpinternational.com', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `location_id` bigint UNSIGNED DEFAULT NULL,
  `size_id` bigint UNSIGNED DEFAULT NULL,
  `location_type_id` bigint UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bath` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drawing` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kitchen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facilities` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vedio_links` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `category_id`, `location_id`, `size_id`, `location_type_id`, `title`, `description`, `size`, `bed`, `bath`, `drawing`, `dining`, `kitchen`, `facilities`, `price`, `vedio_links`, `thumb_image`, `property_banner`, `image`, `created_at`, `updated_at`) VALUES
(4, 3, 5, 5, 1, 'প্ল্যানেট এস আর', '<p>ল্যান্ডটুস হোল্ডিংস লিমিটেড এর একটি আকর্ষণীয় প্রকল্পের নাম প্ল্যানেট এস আর। প্ল্যানেট এস আর কুমিল্লায় নির্মিত বাংলাদেশের ৩য় বৃহত্তম এবং কুমিল্লার সর্ববৃহত শপিং কমপ্লেক্স। ১০০ থেকে ২৫০০ বর্গফুটের আকর্ষণীয় দোকান</p>', '1000 sqft', '3', '3', '1', '1', '1', '<ul><li>সিকিউরিটি সুবিধা</li><li>সিসি ক্যামেরা সিস্টেম</li><li>কার পার্কিং</li><li>জেনারেটার সুবিধা</li><li>শিশুদের খেলার জায়গা</li><li>লিফট</li></ul>', '30000', NULL, 'public/files/property/1778715250067796.png', 'public/files/property/653a2fe5d082f.jpg', '[\"1778727729026945.png\",\"1778727894686814.jpeg\"]', NULL, NULL),
(5, 2, 9, 11, 3, 'ওয়েস্ট টাউন আবাসিক প্রকল্প', '<p>গাবতলী বাসস্ট্যান্ড থেকে মাত্র ১৫ মিনিট দূরত্বে হেমায়েতপুর ধল্লায় সিংগাইর ব্রিজ সংলগ্ন ওয়েস্ট টাউন আবাসিক প্রকল্প। প্রকল্পটি শতভাগ রেডি ও নিষ্কণ্টক।</p>', '1200 sqft', '3', '3', '1', '1', '1', '<ul><li>গাবতলী-পাটুরিয়া-গাবতলী বাইপাস সড়কের পাশে।</li><li>প্রকল্পের মধ্যে রয়েছে বিদ্যুত সংযোগ।</li><li>প্রকল্পের সন্নিকটে স্কুল, কলেজ, মাদ্রাসা ও হাসপাতাল রয়েছে।</li><li>প্রকল্পের ভেতর মসজিদ, মাদ্রাসা ও কবরস্থান রয়েছে।</li><li>প্রকল্প সংলগ্ন সরকারি-বেসরকারি অফিস ও শিল্প কারখানা।</li><li>প্রকল্পটি শতভাগ রেডি।</li><li>ইতোমধ্যে বহুতল ভবন নির্মাণ হয়েছে। এমনকি অসংখ্য পরিবার বসবার করছে।</li><li>এখনই বাড়ি করে ভাড়া দেয়া যাবে। কারণ প্রকল্পের পাশে অসংখ্য বাণিজ্যিক অফিস থাকায় বাসা ভাড়ার চাহিদা রয়েছে।</li><li>ওয়েস্ট টাউন প্রকল্পে অভ্যন্তরীণ যোগাযোগের জন্য থাকছে ৬০ ফুট, ৫০ ফুট, ৪০ ফুট, ৩০ ফুট এবং সর্বনিম্ন ২৫ ফুট প্রশস্থ সড়ক। রয়েছে দৃষ্টিনন্দন ফুটপাত।</li></ul><p><strong>অনুমোদনসমূহ</strong></p><ul><li>পরিবেশ ছাড়পত্র</li><li>ওয়াসা ছাড়পত্র</li><li>ফায়ার সার্ভিস ছাড়পত্র</li><li>গৃহায়ন ও গণপূর্ত সনদ</li><li>স্থানীয় সরকার ছাড়পত্র</li></ul>', '40000', NULL, 'public/files/property/6510000dcd94f.png', 'public/files/property/653a2fe5d082f.jpg', '[\"1777910316842514.png\",\"1777910317242673.jpg\",\"1778727641533925.png\"]', NULL, NULL),
(6, 2, 5, 11, 3, 'IDS Washing Hub', '<p>Address :53-54,Zamgora, Ashulia, Dhaka-1349. Jamgura, Ashulia.</p>', '1500 sqft', '3', '3', '1', '1', '1', '<p>04 storied green washing building</p>', '200000', NULL, 'public/files/property/6510029d80559.png', 'public/files/property/653a2fe5d082f.jpg', '[]', NULL, NULL),
(7, 2, 8, 11, 3, 'ইস্ট টাউন আবাসিক প্রকল্প', '<p>কাঁচপুর/মদনপুর বাসস্ট্যান্ড সংলগ্ন ইস্ট টাউন আবাসিক প্রকল্প। হানিফ ফ্লাইওভার থেকে মাত্র ১০ থেকে ১৫ মিনিট দূরত্ব।</p>', '1400 sqft', '3', '3', '1', '1', '1', '<ul><li>এশিয়ান হাইওয়ে এবং চট্টগ্রাম হাইওয়ে সংলগ্ন।</li><li>প্রকল্পের মধ্যে রয়েছে আবাসিক গ্যাস সংযোগ, পানি এবং বিদ্যুত সংযোগ।</li><li>প্রকল্পের অভ্যন্তরে রয়েছে কাঁচপুর জোন-৩ এর পুলিশ স্টেশন।</li><li>প্রকল্প সংলগ্ন নাজিম উদ্দিন ভূঞা ডিগ্রী কলেজ।</li><li>প্রকল্পের ভেতর মসজিদ, মাদ্রাসা ও কবরস্থান রয়েছে।</li><li>রয়েছে ছোট-বড় শপিংমল।</li><li>প্রকল্প সংলগ্ন সরকারি এবং সিটি কর্পোরেশন মার্কেট।</li><li>রয়েছে ব্যাংক-বীমা অফিস</li><li>প্রকল্পটি শতভাগ রেডি।</li><li>ইতোমধ্যে অসংখ্য বহুতল ভবন নির্মাণ হয়েছে। এমনকি অসংখ্য পরিবার বসবার করছে।</li><li>এখনই বাড়ি করে ভাড়া দেয়া যাবে। কারণ প্রকল্পের পাশে অসংখ্য বাণিজ্যিক অফিস থাকায় বাসা ভাড়ার চাহিদা রয়েছে।</li><li>প্রকল্পের অভ্যন্তরে রয়েছে ডায়াগন্সটিক ও হাসপাতাল।</li><li>ইস্ট টাউন প্রকল্পে অভ্যন্তরীণ যোগাযোগের জন্য থাকছে ৬০ ফুট, ৫০ ফুট, ৪০ ফুট, ৩০ ফুট এবং সর্বনিম্ন ২৫ ফুট প্রশস্থ সড়ক। রয়েছে দৃষ্টিনন্দন ফুটপাত।</li></ul><p><strong>অনুমোদনসমূহ</strong></p><ul><li>পরিবেশ ছাড়পত্র</li><li>ওয়াসা ছাড়পত্র</li><li>ফায়ার সার্ভিস ছাড়পত্র</li><li>রাজউকের ড্যাপের গ্যাজেটে আরবান এরিয়া</li><li>রাষ্ট্রপতি স্বাক্ষরিত গ্যাজেট</li><li>গৃহায়ন ও গণপূর্ত সনদ</li><li>স্থানীয় সরকার ছাড়পত্র</li></ul>', '60000', NULL, 'public/files/property/651002f912c84.png', 'public/files/property/653a2fe5d082f.jpg', '[\"1777911100338526.jpg\",\"1777911100569071.jpg\",\"1777911100618149.png\",\"1778727940218440.jpg\"]', NULL, NULL),
(9, 2, 7, 11, 5, 'ইস্ট টাউন আবাসিক প্রকল্প', '<p>Demo Text</p>', '1200 sqft', '3', '3', '1', '1', '1', '<p>Demo Text</p>', '60000', NULL, 'public/files/property/651c103cade26.jpg', 'public/files/property/653a2fe5d082f.jpg', '[\"1778739294464187.jpg\",\"1778739294511154.jpg\",\"1778739294699785.png\"]', NULL, NULL),
(10, 2, 3, 11, 1, 'Its Amazing Plot', '<p>demo text</p>', '1200 sqft', NULL, NULL, NULL, NULL, NULL, '<p>demo text</p>', '1200', NULL, 'public/files/property/651d2c0892aee.jpg', 'public/files/property/653a2fe5d082f.jpg', '[\"1778815475686319.jpg\",\"1778815475729009.png\",\"1778815476008774.png\"]', NULL, NULL),
(11, 3, 7, 6, 4, 'Plot', '<ul><li>এশিয়ান হাইওয়ে এবং চট্টগ্রাম হাইওয়ে সংলগ্ন।</li><li>প্রকল্পের মধ্যে রয়েছে আবাসিক গ্যাস সংযোগ, পানি এবং বিদ্যুত সংযোগ।</li><li>প্রকল্পের অভ্যন্তরে রয়েছে কাঁচপুর জোন-৩ এর পুলিশ স্টেশন।</li><li>প্রকল্প সংলগ্ন নাজিম উদ্দিন ভূঞা ডিগ্রী কলেজ।</li><li>প্রকল্পের ভেতর মসজিদ, মাদ্রাসা ও কবরস্থান রয়েছে।</li><li>রয়েছে ছোট-বড় শপিংমল।</li><li>প্রকল্প সংলগ্ন সরকারি এবং সিটি কর্পোরেশন মার্কেট।</li><li>রয়েছে ব্যাংক-বীমা অফিস</li><li>প্রকল্পটি শতভাগ রেডি।</li></ul>', '5 Katha', NULL, NULL, NULL, NULL, NULL, '<p>এশিয়ান হাইওয়ে এবং চট্টগ্রাম হাইওয়ে সংলগ্ন।</p><ul><li>প্রকল্পের মধ্যে রয়েছে আবাসিক গ্যাস সংযোগ, পানি এবং বিদ্যুত সংযোগ।</li><li>প্রকল্পের অভ্যন্তরে রয়েছে কাঁচপুর জোন-৩ এর পুলিশ স্টেশন।</li><li>প্রকল্প সংলগ্ন নাজিম উদ্দিন ভূঞা ডিগ্রী কলেজ।</li><li>প্রকল্পের ভেতর মসজিদ, মাদ্রাসা ও কবরস্থান রয়েছে।</li><li>রয়েছে ছোট-বড় শপিংমল।</li><li>প্রকল্প সংলগ্ন সরকারি এবং সিটি কর্পোরেশন মার্কেট।</li><li>রয়েছে ব্যাংক-বীমা অফিস</li><li>প্রকল্পটি শতভাগ রেডি। Text Here...</li></ul>', '1200000', NULL, 'public/files/property/65256fac1db5d.png', 'public/files/property/653a2fe5d082f.jpg', '[\"1779383388156571.png\",\"1779383388356645.jpg\"]', NULL, NULL),
(12, 2, 3, 12, 1, 'Property', '<p>Please Text Here...</p>', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Please Text Here...</p>', NULL, NULL, 'public/files/property/6538e75c2189e.jpg', 'public/files/property/653a2fe5d082f.jpg', '[\"1780721186464222.jpg\",\"1780721186500655.jpg\",\"1780721186568568.jpg\"]', NULL, NULL),
(13, 2, 1, NULL, 1, NULL, '<p>Please Text Here...</p>', NULL, NULL, NULL, NULL, NULL, NULL, '<p>Please Text Here...</p>', NULL, NULL, 'public/files/property/653a2fe5b743f.jpg', 'public/files/property/653a2fe5d082f.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `category_id`, `size`, `created_at`, `updated_at`) VALUES
(5, 3, '৫ কাঠার নিচে', NULL, NULL),
(6, 3, '৫ কাঠা - ১০ কাঠা', NULL, NULL),
(7, 3, '১০ কাঠার ওপরে', NULL, NULL),
(8, 4, '১২০০ বর্গফুটের নিচে', NULL, NULL),
(9, 4, '১২০০-২০০০ বর্গফুট', NULL, NULL),
(10, 4, '২০০০ বর্গফুটের ওপরে', NULL, NULL),
(11, 2, '১২০০ বর্গফুটের নিচে', NULL, NULL),
(12, 2, '১২০০-২০০০ বর্গফুট', NULL, NULL),
(13, 2, '২০০০ বর্গফুটের ওপরে', NULL, NULL),
(14, 3, '৫ কাঠার নিচে', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@sarkarit.com', NULL, '$2y$10$R3a0rmPVgTt5eZNmP6rokOws7eccUQETVNmT6tnWAFA8Z0fSHK3qe', NULL, '1', NULL, '2023-09-17 00:31:40', '2023-09-17 00:31:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `businesssettings`
--
ALTER TABLE `businesssettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_query`
--
ALTER TABLE `customer_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_types`
--
ALTER TABLE `location_types`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_types_location_id_foreign` (`location_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `plot_visits`
--
ALTER TABLE `plot_visits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_ads`
--
ALTER TABLE `post_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_category_id_foreign` (`category_id`),
  ADD KEY `properties_location_id_foreign` (`location_id`),
  ADD KEY `properties_size_id_foreign` (`size_id`),
  ADD KEY `properties_location_type_id_foreign` (`location_type_id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sizes_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `businesssettings`
--
ALTER TABLE `businesssettings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer_query`
--
ALTER TABLE `customer_query`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `location_types`
--
ALTER TABLE `location_types`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plot_visits`
--
ALTER TABLE `plot_visits`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_ads`
--
ALTER TABLE `post_ads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `location_types`
--
ALTER TABLE `location_types`
  ADD CONSTRAINT `location_types_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_location_type_id_foreign` FOREIGN KEY (`location_type_id`) REFERENCES `location_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sizes`
--
ALTER TABLE `sizes`
  ADD CONSTRAINT `sizes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
