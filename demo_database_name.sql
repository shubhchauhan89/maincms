-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 02:40 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo_database_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_booking`
--

CREATE TABLE `appointment_booking` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` varchar(50) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `query` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_arrange_contents`
--

CREATE TABLE `seo_arrange_contents` (
  `id` int(11) NOT NULL,
  `section_title` varchar(100) DEFAULT NULL,
  `section_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `menu_link` varchar(50) DEFAULT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `sorting_order` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_arrange_custom_section`
--

CREATE TABLE `seo_arrange_custom_section` (
  `id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `soroting_order` int(11) NOT NULL,
  `url_val` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_arrange_section`
--

CREATE TABLE `seo_arrange_section` (
  `id` int(11) NOT NULL,
  `section_title` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `submenu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `soroting_order` int(11) NOT NULL,
  `url_val` varchar(255) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_arrange_section`
--

INSERT INTO `seo_arrange_section` (`id`, `section_title`, `section_id`, `menu_id`, `submenu_id`, `title`, `soroting_order`, `url_val`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(48, 'Our Updates', 10, 1, 0, 'Test post section', 1, 'posts', 1, 1, 1, '2022-12-26 00:36:38', '2023-07-06 07:00:21'),
(49, 'Business Query', 7, 1, 0, 'Conscious Online Sessions', 2, 'message', 1, 1, 1, '2023-07-06 01:28:48', '2023-07-06 07:00:21'),
(50, 'Our Products', 14, 1, 0, 'Product Heading Product Heading', 3, 'products', 1, 1, 1, '2023-07-06 01:30:13', '2023-07-06 07:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `seo_banner`
--

CREATE TABLE `seo_banner` (
  `id` int(11) NOT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `page_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`page_id`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_business`
--

CREATE TABLE `seo_business` (
  `id` int(11) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_cart_history`
--

CREATE TABLE `seo_cart_history` (
  `id` int(5) UNSIGNED NOT NULL,
  `customer_id` int(5) NOT NULL,
  `status` enum('Active','Deactive') NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `cart_status` enum('Pending','Paid','Cancel') NOT NULL DEFAULT 'Pending',
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_customers`
--

CREATE TABLE `seo_customers` (
  `id` int(5) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `address2` text DEFAULT NULL,
  `address3` text DEFAULT NULL,
  `user_type` enum('Customer','Admin') NOT NULL DEFAULT 'Customer',
  `image` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `reset_token` int(11) DEFAULT NULL,
  `reset_time` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_customers_address`
--

CREATE TABLE `seo_customers_address` (
  `id` int(5) UNSIGNED NOT NULL,
  `address` text DEFAULT NULL,
  `customer_id` int(5) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_insert`
--

CREATE TABLE `seo_custom_insert` (
  `id` int(11) NOT NULL,
  `head` varchar(255) NOT NULL,
  `foot` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_pages_data`
--

CREATE TABLE `seo_custom_pages_data` (
  `id` int(11) NOT NULL,
  `custom_sub_menu_id` int(11) NOT NULL,
  `menu_link` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `heading` varchar(256) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_custom_pages_data`
--

INSERT INTO `seo_custom_pages_data` (`id`, `custom_sub_menu_id`, `menu_link`, `created_by`, `heading`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 'custom_service', 1, 'Where can I get some?', '1659348109_6e6d9594d68da5503d5c.webp', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '2022-07-31 23:31:49', '2022-08-01 05:01:49'),
(2, 2, 'abcd_clild', 1, 'Abcd', '1659348168_33f8fdcbe8b2a1fb8420.jpg', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariaturSed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>\r\n', '2022-07-31 23:32:48', '2022-08-01 05:02:48'),
(3, 3, 'abcd_child_2', 1, 'Abcd 2', '1659348191_e717ae3fb2d13abaffb7.jpg', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellatAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellatAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellatAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</p>\r\n', '2022-07-31 23:33:11', '2022-08-01 05:03:11'),
(11, 100022, 'new-videos', 1, 'This is video', '1669103898_cba72f31b420d455256f.png', '<p>This is content</p>\r\n', '2022-11-21 20:28:18', '2022-11-22 01:58:18');

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_section`
--

CREATE TABLE `seo_custom_section` (
  `id` int(11) NOT NULL,
  `page_id` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `image_option` VARCHAR(255) NULL DEFAULT 'yes',
  `upload_image` varchar(255) DEFAULT NULL,
  `position` varchar(50) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_custom_sub_menu`
--

CREATE TABLE `seo_custom_sub_menu` (
  `id` int(11) NOT NULL,
  `sub_menu` varchar(100) DEFAULT NULL,
  `sub_menu_link` varchar(100) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_custom_sub_menu`
--

INSERT INTO `seo_custom_sub_menu` (`id`, `sub_menu`, `sub_menu_link`, `menu_id`, `created_by`, `created_at`, `updated_at`) VALUES
(100022, 'New-videos', 'new-videos', 21, '1', '2022-11-21 20:25:41', '2022-11-21 20:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `seo_employees`
--

CREATE TABLE `seo_employees` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `emp_first_name` varchar(255) NOT NULL,
  `emp_last_name` varchar(255) NOT NULL,
  `emp_phone` varchar(15) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_date_of_hire` date NOT NULL,
  `emp_date_of_joining` date NOT NULL,
  `emp_date_of_birth` date NOT NULL,
  `emp_gender` varchar(1) NOT NULL,
  `emp_experience` float NOT NULL,
  `emp_designation` int(11) NOT NULL,
  `emp_department` int(11) NOT NULL,
  `emp_status` tinyint(1) NOT NULL DEFAULT 1,
  `emp_created_at` datetime NOT NULL,
  `emp_update_at` datetime DEFAULT NULL,
  `emp_update_by` int(11) DEFAULT NULL,
  `emp_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_enquiry`
--

CREATE TABLE `seo_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `source` varchar(50) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_faqs`
--

CREATE TABLE `seo_faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_faqs_section`
--

CREATE TABLE `seo_faqs_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `faqs_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`faqs_ids`)),
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_id`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_header_footer`
--

CREATE TABLE `seo_header_footer` (
  `id` int(11) NOT NULL,
  `header_background` varchar(20) NOT NULL,
  `header_text` varchar(20) NOT NULL,
  `navbar_background` varchar(20) NOT NULL,
  `navbar_text` varchar(20) NOT NULL,
  `searchbar_color` varchar(20) NOT NULL,
  `searchbar_button_color` varchar(20) NOT NULL,
  `inquiry_button_color` varchar(20) NOT NULL,
  `footer_background` varchar(20) NOT NULL,
  `footer_text_color` varchar(20) NOT NULL,
  `footer_text` varchar(255) NOT NULL,
  `copyright_background` varchar(20) NOT NULL,
  `copyright_text` varchar(20) NOT NULL,
  `copyright_text_color` varchar(20) NOT NULL,
  `sitemap` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_header_footer`
--

INSERT INTO `seo_header_footer` (`id`, `header_background`, `header_text`, `navbar_background`, `navbar_text`, `searchbar_color`, `footer_background`, `footer_text_color`, `footer_text`, `copyright_background`, `copyright_text`, `copyright_text_color`, `sitemap`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, '#edc4b6', '#080808', '#ffffff', '#000000', '#ffffff', '#edc4b6', '#050505', 'this is footer text', '#050505', 'Advertising India', '#ffffff', 'http://gmail.com', 1, 1, 1, '2022-07-30 08:15:25', '2022-12-26 00:07:30');

-- --------------------------------------------------------

--
-- Table structure for table `seo_images_gallery`
--

CREATE TABLE `seo_images_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_images_section`
--

CREATE TABLE `seo_images_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_inventery`
--

CREATE TABLE `seo_inventery` (
  `id` int(11) NOT NULL,
  `purchase_inventry` int(11) NOT NULL,
  `per_inventry_price` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `purchase_date` datetime NOT NULL DEFAULT current_timestamp(),
  `payment_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_mcl`
--

CREATE TABLE `seo_mcl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `mcl` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`mcl`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_menus`
--

CREATE TABLE `seo_menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_link` varchar(100) DEFAULT NULL,
  `default_menu` tinyint(1) DEFAULT 0,
  `custom_default_menu` tinyint(4) NOT NULL DEFAULT 0,
  `sub_menu` int(11) DEFAULT 0,
  `footer_menu` tinyint(1) DEFAULT 0,
  `sorting_order` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `is_active_os` tinyint(1) NOT NULL DEFAULT 1,
  `status` int(11) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_menus`
--

INSERT INTO `seo_menus` (`id`, `menu_name`, `menu_link`, `default_menu`, `custom_default_menu`, `sub_menu`, `footer_menu`, `sorting_order`, `created_by`, `update_by`, `is_active_os`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, 1, 0, 0, 0, 1, 1, NULL, 1, 1, '2022-03-31 01:23:18', NULL),
(2, 'About Us', 'about', 1, 0, 0, 0, 2, 1, NULL, 1, 1, '2022-03-31 01:23:43', NULL),
(5, 'Updates', 'updates', 0, 0, 0, 0, 4, 1, 1, 1, 1, '2022-05-13 01:27:46', '2022-11-23 00:15:46'),
(22, 'About Us', NULL, 0, 0, 0, 1, NULL, 1, NULL, 1, 1, '2022-10-14 12:06:30', NULL),
(23, 'Services', 'contact', 0, 0, 0, 0, 3, 1, 1, 1, 1, '2022-11-21 12:45:28', '2022-11-23 00:15:38'),
(24, 'Products', 'contact', 0, 0, 0, 0, 5, 1, 1, 1, 1, '2022-11-22 15:01:56', '2022-12-03 05:47:05'),
(25, 'Contact', 'contact', 1, 0, 0, 0, 6, 1, NULL, 1, 1, '2022-12-03 11:47:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_meta_data`
--

CREATE TABLE `seo_meta_data` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `pages` varchar(122) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `page_url` varchar(256) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_meta_data`
--

INSERT INTO `seo_meta_data` (`id`, `keyword`, `pages`, `page_url`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'test test', '', 'http://localhost/website/', 1, NULL, 1, '2023-08-11 01:32:00', '2023-08-11 07:02:00'),
(2, 'test-1', '', 'http://localhost/website/', 1, NULL, 1, '2023-08-11 01:32:09', '2023-08-11 07:02:09'),
(3, 'test-2', '', 'http://localhost/website/', 1, NULL, 1, '2023-08-11 01:32:17', '2023-08-11 07:02:17'),
(4, 'about us', 'about', 'http://localhost/website/about', 1, NULL, 1, '2023-08-11 01:33:09', '2023-08-11 07:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `seo_mlc_section`
--

CREATE TABLE `seo_mlc_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) DEFAULT NULL,
  `mlc_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_order`
--

CREATE TABLE `seo_order` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_mobile` int(20) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `payment_status` varchar(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `order_date` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_order_address`
--

CREATE TABLE `seo_order_address` (
  `id` int(11) NOT NULL,
  `billing_name` varchar(100) NOT NULL,
  `billing_email` varchar(256) NOT NULL,
  `billing_phone` varchar(50) DEFAULT NULL,
  `billing_alternate_phone` varchar(50) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `land_mark` varchar(256) DEFAULT NULL,
  `country` int(11) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `payment_id` varchar(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_pages`
--

CREATE TABLE `seo_pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_payments`
--

CREATE TABLE `seo_payments` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `payment_id` varchar(100) NOT NULL,
  `order_id` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `final_amount` int(11) NOT NULL,
  `products_quantity` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_posts`
--

CREATE TABLE `seo_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `slug` varchar(500) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `featured` varchar(20) NOT NULL,
  `schedule_time` datetime DEFAULT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_posts`
--

INSERT INTO `seo_posts` (`id`, `title`, `slug`, `image`, `status`, `featured`, `description`, `created_by`, `update_by`, `created_at`, `updated_at`) VALUES
(19, 'Test Post', 'testpost', '1672037540_53e2304029162e3904d3.jpg', 'published', 'yes', '<p>Test post content</p>\r\n', 1, 1, '2022-12-26 01:22:20', '2022-12-26 06:04:24');

-- --------------------------------------------------------

--
-- Table structure for table `seo_post_section`
--

CREATE TABLE `seo_post_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `post_id` text DEFAULT NULL,
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_id`)),
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_post_section`
--

INSERT INTO `seo_post_section` (`id`, `heading`, `post_id`, `pages_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(10, 'Test post section', '[\"19\",\"20\",\"21\"]', '[{\"menu\":\"1\",\"sub_menu\":\"0\",\"sub_menu_title\":\"Home\"}]', 1, 1, 1, '2022-12-26 01:22:52', '2022-12-26 06:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `seo_products`
--

CREATE TABLE `seo_products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `menu_link` text NOT NULL,
  `menu_id` int(11) NOT NULL,
  `total_inventry` int(11) NOT NULL,
  `mrp` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `extra_charge` int(11) NOT NULL DEFAULT 0,
  `main_image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `related_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`related_product`)),
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `specification` text NOT NULL,
  `nav_view` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_products`
--

INSERT INTO `seo_products` (`id`, `product_name`, `menu_link`, `menu_id`, `total_inventry`, `mrp`, `discount`, `extra_charge`, `main_image`, `banner`, `related_product`, `short_description`, `long_description`, `specification`, `nav_view`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(13, 'test product 1', 'test-product-1', 24, 10, 250, 10, 0, '1688644798_f4d7ff4435c7e7dfbfb7.jpg', NULL, 'null', 'sdsdasd', '<p>sdasdasdasd</p>\r\n', '<p>sdasdasas</p>\r\n', 0, 1, NULL, 1, '2023-07-06 11:59:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_products_section`
--

CREATE TABLE `seo_products_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `products` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`products`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_products_section`
--

INSERT INTO `seo_products_section` (`id`, `heading`, `products`, `pages`, `created_by`, `update_by`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Product Heading Product Heading', '[\"13\"]', '[{\"menu\":\"1\",\"sub_menu\":\"0\",\"sub_menu_title\":\"Home\"}]', 1, NULL, 1, '2023-07-06 12:00:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_product_images`
--

CREATE TABLE `seo_product_images` (
  `id` int(11) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_product_images`
--

INSERT INTO `seo_product_images` (`id`, `product_image`, `product_id`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(29, '1688644798_f4d7ff4435c7e7dfbfb7.jpg', 13, 1, NULL, '2023-07-06 06:59:58', '2023-07-06 06:59:58');

-- --------------------------------------------------------

--
-- Table structure for table `seo_product_orders`
--

CREATE TABLE `seo_product_orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` enum('Paid','Ordered','Shipped','Out For Delivery','Delivered','Cancelled') NOT NULL DEFAULT 'Paid',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_query_section`
--

CREATE TABLE `seo_query_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `pages_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_query_section`
--

INSERT INTO `seo_query_section` (`id`, `heading`, `pages_id`, `created_by`, `updated_by`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Conscious Online Sessions', '[{\"menu\":\"1\",\"sub_menu\":\"0\",\"sub_menu_title\":\"Home\"}]', 1, NULL, 1, '2023-07-06 11:58:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_roles`
--

CREATE TABLE `seo_roles` (
  `role_id` int(11) NOT NULL,
  `role_title` varchar(255) NOT NULL,
  `role_permission` text NOT NULL,
  `role_status` tinyint(1) NOT NULL DEFAULT 1,
  `role_created_at` datetime NOT NULL,
  `role_update_at` datetime DEFAULT NULL,
  `role_update_by` int(11) DEFAULT NULL,
  `role_created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `seo_service`
--

CREATE TABLE `seo_service` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `menu_link` varchar(256) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `related_services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `content` text DEFAULT NULL,
  `nav_view` int(11) NOT NULL DEFAULT 0,
  `short_description` varchar(250) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_services_section`
--

CREATE TABLE `seo_services_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`services`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `discription` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

CREATE TABLE `seo_settings` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(100) NOT NULL,
  `setting_value` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'app',
  `deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_settings`
--

INSERT INTO `seo_settings` (`id`, `setting_name`, `setting_value`, `type`, `deleted`) VALUES
(10, 'email_sent_from_name', '', 'app', 0),
(11, 'accepted_file_formats', 'jpg,jpeg,png,doc,xlsx,txt,pdf,zip', 'app', 0),
(12, 'allow_partial_invoice_payment_from_clients', '1', 'app', 0),
(13, 'allowed_ip_addresses', '', 'app', 0),
(14, 'app_title', 'demo', 'app', 0),
(15, 'client_can_pay_invoice_without_login', '1', 'app', 0),
(16, 'company_address', 'B-37 3rd Floor, Sector 2,\r\nNoida, U.P - 201301, India', 'app', 0),
(17, 'company_email', 'info@kk.com', 'app', 0),
(18, 'company_name', 'Kishore Kumar', 'app', 0),
(19, 'company_phone', '+91 123 123 1234', 'app', 0),
(20, 'company_vat_number', '', 'app', 0),
(21, 'company_website', 'www.example.com', 'app', 0),
(22, 'conversion_rate', '', 'app', 0),
(23, 'currency_position', 'left', 'app', 0),
(24, 'currency_symbol', '₹', 'app', 0),
(25, 'date_format', 'd-m-Y', 'app', 0),
(26, 'decimal_separator', '.', 'app', 0),
(27, 'default_currency', 'INR', 'app', 0),
(28, 'default_due_date_after_billing_date', '', 'app', 0),
(29, 'default_left_menu', '', 'app', 0),
(30, 'default_template', '1', 'app', 0),
(31, 'default_theme_color', '557bbb', 'app', 0),
(32, 'email_protocol', 'smtp', 'app', 0),
(33, 'email_sent_from_address', 'demo@demo.com', 'app', 0),
(34, 'email_sent_from_name', 'demo', 'app', 0),
(36, 'email_smtp_pass', 'Sartia@@2022', 'app', 0),
(37, 'email_smtp_port', '465', 'app', 0),
(38, 'email_smtp_security_type', 'none', 'app', 0),
(39, 'email_smtp_user', 'nilesh.sartia@gmail.com', 'app', 0),
(40, 'enable_footer', '1', 'app', 0),
(41, 'enable_rich_text_editor', '1', 'app', 0),
(42, 'favicon', 'a:1:{s:9:\"file_name\";s:30:\"_file619f601002f42-favicon.png\";}', 'app', 0),
(43, 'first_day_of_week', '0', 'app', 0),
(44, 'footer_copyright_text', 'Kishore kumar @2022', 'app', 0),
(45, 'footer_menus', '', 'app', 0),
(46, 'initial_number_of_the_invoice', '1', 'app', 0),
(47, 'invoice_color', '', 'app', 0),
(48, 'invoice_footer', '<p><br></p>', 'app', 0),
(49, 'invoice_logo', '', 'app', 0),
(50, 'invoice_prefix', '', 'app', 0),
(51, 'invoice_style', 'style_1', 'app', 0),
(52, 'item_purchase_code', '321321a', 'app', 0),
(53, 'language', 'english', 'app', 0),
(54, 'module_announcement', '1', 'app', 0),
(55, 'module_attendance', '1', 'app', 0),
(56, 'module_chat', '1', 'app', 0),
(57, 'module_estimate', '1', 'app', 0),
(58, 'module_estimate_request', '1', 'app', 0),
(59, 'module_event', '1', 'app', 0),
(60, 'module_expense', '1', 'app', 0),
(61, 'module_gantt', '1', 'app', 0),
(62, 'module_help', '1', 'app', 0),
(63, 'module_invoice', '1', 'app', 0),
(64, 'module_knowledge_base', '1', 'app', 0),
(65, 'module_lead', '1', 'app', 0),
(66, 'module_leave', '1', 'app', 0),
(67, 'module_message', '1', 'app', 0),
(68, 'module_note', '1', 'app', 0),
(69, 'module_order', '1', 'app', 0),
(70, 'module_project_timesheet', '1', 'app', 0),
(71, 'module_proposal', '1', 'app', 0),
(72, 'module_ticket', '1', 'app', 0),
(73, 'module_timeline', '1', 'app', 0),
(74, 'module_todo', '1', 'app', 0),
(75, 'no_of_decimals', '2', 'app', 0),
(76, 'rows_per_page', '10', 'app', 0),
(77, 'rtl', '0', 'app', 0),
(78, 'scrollbar', 'jquery', 'app', 0),
(79, 'send_bcc_to', '', 'app', 0),
(80, 'send_invoice_due_after_reminder', '', 'app', 0),
(81, 'send_invoice_due_pre_reminder', '', 'app', 0),
(82, 'send_recurring_invoice_reminder_before_creation', '', 'app', 0),
(83, 'show_background_image_in_signin_page', 'yes', 'app', 0),
(84, 'show_logo_in_signin_page', 'yes', 'app', 0),
(85, 'show_theme_color_changer', 'yes', 'app', 0),
(86, 'signin_page_background', 'a:4:{s:9:\"file_name\";s:82:\"system_file619f5dd0e9fee-tumblr_a61aadb6fe435f084ce331662effeb6d_70a42eb8_1280.jpg\";s:9:\"file_size\";s:6:\"146675\";s:7:\"file_id\";N;s:12:\"service_type\";N;}', 'app', 0),
(87, 'site_logo', 'a:1:{s:9:\"file_name\";s:32:\"_file619f5e00e79a7-site-logo.png\";}', 'app', 0),
(88, 'task_point_range', '5', 'app', 0),
(89, 'time_format', 'small', 'app', 0),
(90, 'timezone', 'Asia/Kolkata', 'app', 0),
(91, 'users_can_input_only_total_hours_instead_of_period', '', 'app', 0),
(92, 'users_can_start_multiple_timers_at_a_time', '', 'app', 0),
(93, 'weekends', '0,6', 'app', 0),
(94, 'email_smtp_host', 'ssl://smtp.gmail.com', 'app', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seo_slider`
--

CREATE TABLE `seo_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `slider_image` varchar(255) DEFAULT NULL,
  `heading_color` varchar(50) DEFAULT '#000000',
  `text_color` varchar(100) NOT NULL,
  `title_font_family` varchar(50) DEFAULT 'inherit',
  `desc_font_family` varchar(50) DEFAULT 'cursive',
  `content_position` varchar(255) NOT NULL DEFAULT 'left',
  `blur_on_description` varchar(255) NOT NULL DEFAULT 'yes',
  `title_font_size` int(11) NOT NULL DEFAULT 11,
  `description_font_size` int(11) NOT NULL DEFAULT 11,
  `image_blur` varchar(255) NOT NULL DEFAULT 'yes',
  `created_by` int(11) NOT NULL,
  `update_by` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `seo_logo_slider` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_slider_section`
--

CREATE TABLE `seo_slider_section` (
  `id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL,
  `page_id` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`page_id`)),
  `menu_id` int(11) DEFAULT 0,
  `service_id` int(11) NOT NULL DEFAULT 0,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`slider`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `seo_logo_slider_section`;
CREATE TABLE `seo_logo_slider_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `logo_slider` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pages_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_ids`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `seo_testimonial`
--

CREATE TABLE `seo_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_testimonials_section`
--

CREATE TABLE `seo_testimonials_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `testimonials` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`testimonials`)),
  `pages_ids` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages_ids`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_url_visit`
--

CREATE TABLE `seo_url_visit` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_users`
--

CREATE TABLE `seo_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_roleid` int(11) NOT NULL,
  `user_status` tinyint(1) NOT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `company_profile` varchar(250) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `company_phone_no` varchar(50) DEFAULT NULL,
  `company_map` text NOT NULL,
  `website_URL` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL,
  `linkedIn` varchar(255) DEFAULT NULL,
  `default_theme` varchar(50) DEFAULT NULL,
  `current_theme` varchar(50) DEFAULT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `domain_url` varchar(255) DEFAULT NULL,
  `font_size` varchar(255) DEFAULT NULL,
  `business_description` text DEFAULT NULL,
  `business_logo` varchar(255) DEFAULT NULL,
  `business_icon` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `alternate_address` varchar(255) DEFAULT NULL,
  `email_id` varchar(255) DEFAULT NULL,
  `alternate_email_id` varchar(255) DEFAULT NULL,
  `alternate_mobile` varchar(20) DEFAULT NULL,
  `opening_hours` varchar(255) DEFAULT NULL,
  `facebook_page` varchar(255) DEFAULT NULL,
  `youtube_page` varchar(255) DEFAULT NULL,
  `linkedin_page` varchar(255) DEFAULT NULL,
  `twitter_page` varchar(255) DEFAULT NULL,
  `instagram_page` varchar(255) DEFAULT NULL,
  `currency` int(11) NOT NULL DEFAULT 1,
  `theme_name` varchar(50) DEFAULT 'theme1',
  `theme_color` varchar(50) DEFAULT NULL,
  `custom_color` varchar(50) DEFAULT NULL,
  `rbg_custom_color` varchar(256) DEFAULT NULL,
  `custom_text_color` varchar(50) DEFAULT NULL,
  `update_page_image` varchar(255) DEFAULT NULL,
  `topbar` enum('Show','Hide') DEFAULT 'Show',
  `key` varchar(255) DEFAULT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `appointment_booking` enum('Show','Hide') NOT NULL DEFAULT 'Show',
  `mail_email` varchar(100) DEFAULT NULL,
  `mail_password` varchar(100) DEFAULT NULL,
  `mail_host` varchar(100) DEFAULT NULL,
  `mail_port` int(11) DEFAULT NULL,
  `user_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_users`
--

INSERT INTO `seo_users` (`id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_roleid`, `user_status`, `company_name`, `company_profile`, `company_logo`, `company_phone_no`, `company_map`, `website_URL`, `facebook_link`, `twitter_link`, `google_plus`, `linkedIn`, `default_theme`, `current_theme`, `business_name`, `domain_url`, `font_size`, `business_description`, `business_logo`, `business_icon`, `business_address`, `alternate_address`, `email_id`, `alternate_email_id`, `alternate_mobile`, `opening_hours`, `facebook_page`, `youtube_page`, `linkedin_page`, `twitter_page`, `instagram_page`, `currency`, `theme_name`, `theme_color`, `custom_color`, `rbg_custom_color`, `custom_text_color`, `update_page_image`, `topbar`, `key`, `secret`, `appointment_booking`, `mail_email`, `mail_password`, `mail_host`, `mail_port`, `user_created_at`, `user_updated_at`) VALUES
(1, 'Demo', 'info@autoseoplugin.com', '9879879879', 'MTIzNDU2', 1, 1, 'Demo Company Name', NULL, '1653135367_33f0a6f34a3df9e13db2.jpg', '+91 85271 04123', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13999.556795186832!2d77.3327055!3d28.6929609!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf9d224bfa7f1b92c!2sADVERTISING%20INDIA!5e0!3m2!1sen!2sin!4v1673260230457!5m2!1sen!2sin\" width=\"400\" height=\"300\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'demo.com', '', '', '', '', 'primary', 'green', 'Demo', 'demo.com', '10', 'test ', '1673259897_8a5d4fc22c47912a6876.png', '1673259897_dda764d773c97499402d.png', 'B-1/110, Second Floor, DLF Ext -2 Bhopura, Sahibabad, Ghaziabad, Uttar Pradesh 201005', 'B-1/110, Second Floor, DLF Ext -2 Bhopura, Sahibabad, Ghaziabad, Uttar Pradesh 201005', 'demo@gmail.com', 'alt_demo@gmail.com', '+91 85271 04123', 'Mon to Sat 11:30 A.M to 6:30 P.M', 'https://www.facebook.com/TataConsultancyServices/', 'https://www.youtube.com/channel/UCaHyiyvJp4hhPNhIU7r9uqg', 'https://in.linkedin.com/company/tata-consultancy-services', 'https://twitter.com/TCS?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor', 'https://www.instagram.com/tcsglobal/?hl=en', 1, 'theme1', 'custom', '#edc4b6', '237,196,182', '#050505', '1688641461_10b0139d67001a3a7692.jpg', 'Show', 'rzp_test_GUyA7dZHqqRXN3', 'hQ7g55qqqTq79Ap1bAfrQq9s', 'Hide', 'info@advertisingindia.co.in', '123456', 'dummy', 1234, '2022-03-15 07:56:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seo_validate_user`
--

CREATE TABLE `seo_validate_user` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seo_validate_user`
--

INSERT INTO `seo_validate_user` (`id`, `email`, `password`) VALUES
(1, 'validate@gmail.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `seo_verification`
--

CREATE TABLE `seo_verification` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `otp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `params` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_videos_gallery`
--

CREATE TABLE `seo_videos_gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `thumbnail_images` varchar(256) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seo_video_section`
--

CREATE TABLE `seo_video_section` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `videos` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`videos`)),
  `pages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`pages`)),
  `created_by` int(11) NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_booking`
--
ALTER TABLE `appointment_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_arrange_contents`
--
ALTER TABLE `seo_arrange_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_arrange_custom_section`
--
ALTER TABLE `seo_arrange_custom_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_arrange_section`
--
ALTER TABLE `seo_arrange_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_banner`
--
ALTER TABLE `seo_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_business`
--
ALTER TABLE `seo_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_cart_history`
--
ALTER TABLE `seo_cart_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_customers`
--
ALTER TABLE `seo_customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `seo_customers_address`
--
ALTER TABLE `seo_customers_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_custom_insert`
--
ALTER TABLE `seo_custom_insert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_custom_pages_data`
--
ALTER TABLE `seo_custom_pages_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_sub_menu_id` (`custom_sub_menu_id`);

--
-- Indexes for table `seo_custom_section`
--
ALTER TABLE `seo_custom_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_custom_sub_menu`
--
ALTER TABLE `seo_custom_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_employees`
--
ALTER TABLE `seo_employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kk_employees_emp_department_foreign` (`emp_department`),
  ADD KEY `kk_employees_emp_designation_foreign` (`emp_designation`);

--
-- Indexes for table `seo_enquiry`
--
ALTER TABLE `seo_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_faqs`
--
ALTER TABLE `seo_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_faqs_section`
--
ALTER TABLE `seo_faqs_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_header_footer`
--
ALTER TABLE `seo_header_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_images_gallery`
--
ALTER TABLE `seo_images_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_images_section`
--
ALTER TABLE `seo_images_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_inventery`
--
ALTER TABLE `seo_inventery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_mcl`
--
ALTER TABLE `seo_mcl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_menus`
--
ALTER TABLE `seo_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_meta_data`
--
ALTER TABLE `seo_meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_mlc_section`
--
ALTER TABLE `seo_mlc_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_order`
--
ALTER TABLE `seo_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_order_address`
--
ALTER TABLE `seo_order_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_pages`
--
ALTER TABLE `seo_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_payments`
--
ALTER TABLE `seo_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_posts`
--
ALTER TABLE `seo_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_post_section`
--
ALTER TABLE `seo_post_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_products`
--
ALTER TABLE `seo_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_products_ibfk_1` (`menu_id`);

--
-- Indexes for table `seo_products_section`
--
ALTER TABLE `seo_products_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_product_images`
--
ALTER TABLE `seo_product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_product_orders`
--
ALTER TABLE `seo_product_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_query_section`
--
ALTER TABLE `seo_query_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_roles`
--
ALTER TABLE `seo_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `seo_service`
--
ALTER TABLE `seo_service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `seo_services_section`
--
ALTER TABLE `seo_services_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_settings`
--
ALTER TABLE `seo_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_slider`
--
ALTER TABLE `seo_slider`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `seo_logo_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_slider_section`
--
ALTER TABLE `seo_slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_testimonial`
--
ALTER TABLE `seo_testimonial`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `seo_logo_slider_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_testimonials_section`
--
ALTER TABLE `seo_testimonials_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_url_visit`
--
ALTER TABLE `seo_url_visit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_users`
--
ALTER TABLE `seo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_validate_user`
--
ALTER TABLE `seo_validate_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_verification`
--
ALTER TABLE `seo_verification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_videos_gallery`
--
ALTER TABLE `seo_videos_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_video_section`
--
ALTER TABLE `seo_video_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_booking`
--
ALTER TABLE `appointment_booking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_arrange_contents`
--
ALTER TABLE `seo_arrange_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_arrange_custom_section`
--
ALTER TABLE `seo_arrange_custom_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seo_arrange_section`
--
ALTER TABLE `seo_arrange_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `seo_banner`
--
ALTER TABLE `seo_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_business`
--
ALTER TABLE `seo_business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_cart_history`
--
ALTER TABLE `seo_cart_history`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_customers`
--
ALTER TABLE `seo_customers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_customers_address`
--
ALTER TABLE `seo_customers_address`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_custom_insert`
--
ALTER TABLE `seo_custom_insert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_custom_pages_data`
--
ALTER TABLE `seo_custom_pages_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seo_custom_section`
--
ALTER TABLE `seo_custom_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `seo_custom_sub_menu`
--
ALTER TABLE `seo_custom_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100023;

--
-- AUTO_INCREMENT for table `seo_employees`
--
ALTER TABLE `seo_employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_enquiry`
--
ALTER TABLE `seo_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_faqs`
--
ALTER TABLE `seo_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seo_faqs_section`
--
ALTER TABLE `seo_faqs_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_header_footer`
--
ALTER TABLE `seo_header_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_images_gallery`
--
ALTER TABLE `seo_images_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seo_images_section`
--
ALTER TABLE `seo_images_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seo_inventery`
--
ALTER TABLE `seo_inventery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_mcl`
--
ALTER TABLE `seo_mcl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_menus`
--
ALTER TABLE `seo_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `seo_meta_data`
--
ALTER TABLE `seo_meta_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_mlc_section`
--
ALTER TABLE `seo_mlc_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_order`
--
ALTER TABLE `seo_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_order_address`
--
ALTER TABLE `seo_order_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_pages`
--
ALTER TABLE `seo_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_payments`
--
ALTER TABLE `seo_payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_posts`
--
ALTER TABLE `seo_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `seo_post_section`
--
ALTER TABLE `seo_post_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `seo_products`
--
ALTER TABLE `seo_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `seo_products_section`
--
ALTER TABLE `seo_products_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `seo_product_images`
--
ALTER TABLE `seo_product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `seo_product_orders`
--
ALTER TABLE `seo_product_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_query_section`
--
ALTER TABLE `seo_query_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `seo_roles`
--
ALTER TABLE `seo_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `seo_logo_slider`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `seo_logo_slider_section`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_service`
--
ALTER TABLE `seo_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `seo_services_section`
--
ALTER TABLE `seo_services_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seo_settings`
--
ALTER TABLE `seo_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `seo_slider`
--
ALTER TABLE `seo_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_slider_section`
--
ALTER TABLE `seo_slider_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_testimonial`
--
ALTER TABLE `seo_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_testimonials_section`
--
ALTER TABLE `seo_testimonials_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seo_url_visit`
--
ALTER TABLE `seo_url_visit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `seo_users`
--
ALTER TABLE `seo_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_validate_user`
--
ALTER TABLE `seo_validate_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seo_verification`
--
ALTER TABLE `seo_verification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_videos_gallery`
--
ALTER TABLE `seo_videos_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seo_video_section`
--
ALTER TABLE `seo_video_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `seo_products`
--
ALTER TABLE `seo_products`
  ADD CONSTRAINT `seo_products_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `seo_menus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
