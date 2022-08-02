-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 05:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anup`
--

-- --------------------------------------------------------

--
-- Table structure for table `addictions`
--

CREATE TABLE `addictions` (
  `addictions_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `addictions` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addictions`
--

INSERT INTO `addictions` (`addictions_id`, `user_id`, `addictions`) VALUES
(21, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `birthhistory`
--

CREATE TABLE `birthhistory` (
  `birthhistory_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `birth_history` varchar(500) DEFAULT NULL,
  `birth_child` varchar(500) DEFAULT NULL,
  `birth_how` varchar(500) DEFAULT NULL,
  `birth_breech` varchar(500) DEFAULT NULL,
  `birth_cord` varchar(500) DEFAULT NULL,
  `birth_wt` varchar(500) DEFAULT NULL,
  `birth_complications` varchar(500) DEFAULT NULL,
  `birth_child_cry` varchar(500) DEFAULT NULL,
  `birth_child_cry_time` varchar(500) DEFAULT NULL,
  `birth_nursing` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthhistory`
--

INSERT INTO `birthhistory` (`birthhistory_id`, `user_id`, `birth_history`, `birth_child`, `birth_how`, `birth_breech`, `birth_cord`, `birth_wt`, `birth_complications`, `birth_child_cry`, `birth_child_cry_time`, `birth_nursing`) VALUES
(2, 2, 'Normal', 'Pre mature', 'Late', 'yes', 'yes', '12kg', 'Premature', 'no', '2', 'dfdf');

-- --------------------------------------------------------

--
-- Table structure for table `blockdates`
--

CREATE TABLE `blockdates` (
  `id` int(11) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blockdates`
--

INSERT INTO `blockdates` (`id`, `from`, `to`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2022-05-03', '2022-05-11', 1, '2022-05-29 06:04:03', '2022-05-29 02:04:20', '2022-05-29 02:04:20'),
(2, '2022-05-21', '2022-05-28', 27, '2022-05-29 01:41:57', '2022-05-29 01:41:57', NULL),
(3, '2022-05-03', '2022-05-11', 27, '2022-05-29 01:52:19', '2022-05-29 02:04:17', '2022-05-29 02:04:17'),
(4, '2022-05-03', '2022-05-11', 27, '2022-05-29 01:52:35', '2022-05-29 01:52:35', NULL),
(5, '2022-05-03', '2022-05-11', 27, '2022-05-29 01:53:12', '2022-05-29 01:53:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `case_analysis`
--

CREATE TABLE `case_analysis` (
  `case_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `misam` varchar(500) DEFAULT NULL,
  `af` varchar(500) DEFAULT NULL,
  `disposition` varchar(500) DEFAULT NULL,
  `will` varchar(500) DEFAULT NULL,
  `intellect` varchar(500) DEFAULT NULL,
  `moral` varchar(500) DEFAULT NULL,
  `memory` varchar(500) DEFAULT NULL,
  `emotional_reaction` varchar(500) DEFAULT NULL,
  `sessitiv` varchar(500) DEFAULT NULL,
  `speed` varchar(500) DEFAULT NULL,
  `gthermal` varchar(500) DEFAULT NULL,
  `gthirst` varchar(500) DEFAULT NULL,
  `gside` varchar(500) DEFAULT NULL,
  `sun` varchar(500) DEFAULT NULL,
  `noise` varchar(500) DEFAULT NULL,
  `strong_odour` varchar(500) DEFAULT NULL,
  `touch` varchar(500) DEFAULT NULL,
  `smell` varchar(500) DEFAULT NULL,
  `hearing` varchar(500) DEFAULT NULL,
  `taste` varchar(500) DEFAULT NULL,
  `vision` varchar(500) DEFAULT NULL,
  `anypqr` varchar(500) DEFAULT NULL,
  `drug_history` varchar(500) DEFAULT NULL,
  `investigation` varchar(500) DEFAULT NULL,
  `rubric_taken` varchar(500) DEFAULT NULL,
  `remedies` varchar(500) DEFAULT NULL,
  `remedies_reason` varchar(500) DEFAULT NULL,
  `patDate` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `case_analysis`
--

INSERT INTO `case_analysis` (`case_id`, `user_id`, `misam`, `af`, `disposition`, `will`, `intellect`, `moral`, `memory`, `emotional_reaction`, `sessitiv`, `speed`, `gthermal`, `gthirst`, `gside`, `sun`, `noise`, `strong_odour`, `touch`, `smell`, `hearing`, `taste`, `vision`, `anypqr`, `drug_history`, `investigation`, `rubric_taken`, `remedies`, `remedies_reason`, `patDate`) VALUES
(22, 2, 'gjgjk', 'hjkhjkh', 'gg', 'jghjg', 'jhg', 'hj', 'ghj', 'ghj', 'ghj', 'ghj', 'Chilly', 'Thirsty', 'Left', 'g', 'hjg', 'hjg', 'hjg', 'hj', 'ghjghj', 'ghj', 'ghj', 'g', 'hjg', 'jhgjh', 'ghj', 'ghj', 'ghj', '10-3-2015');

-- --------------------------------------------------------

--
-- Table structure for table `case_journey`
--

CREATE TABLE `case_journey` (
  `journey_id` int(11) NOT NULL,
  `journey_layer` varchar(100) NOT NULL,
  `journey_dieases` varchar(100) NOT NULL,
  `journey_miasm` varchar(100) NOT NULL,
  `case_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `complain` varchar(500) DEFAULT NULL,
  `complaint_since` varchar(500) DEFAULT NULL,
  `complaint_onset` varchar(500) DEFAULT NULL,
  `complaint_detail` varchar(500) DEFAULT NULL,
  `complaint_side_body` varchar(500) DEFAULT NULL,
  `complaint_investigation` varchar(500) DEFAULT NULL,
  `complaint_diagnosed` varchar(500) DEFAULT NULL,
  `complaint_autism` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `user_id`, `complain`, `complaint_since`, `complaint_onset`, `complaint_detail`, `complaint_side_body`, `complaint_investigation`, `complaint_diagnosed`, `complaint_autism`) VALUES
(110, 2, 'test4444', 'test', 'Sudden', 'test', 'Right', 'test', 'nnn', 'on'),
(111, 2, 'test', 'test', 'Sudden', 'test', 'Right', 'test', 'nnn', 'on'),
(112, 2, 'test', 'test', 'Sudden', 'test', 'Right', 'test', 'nnn', 'on'),
(113, 2, 'test', 'test', 'Sudden', 'test', 'Right', 'test', 'nnn', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `complaint_attachment`
--

CREATE TABLE `complaint_attachment` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `file_name` varchar(25) NOT NULL,
  `file_type` varchar(10) NOT NULL,
  `category` varchar(10) NOT NULL,
  `date_of_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_delete` bit(1) NOT NULL,
  `org_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `consultation_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `doctor_reply` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`consultation_id`, `user_id`, `date`, `subject`, `description`, `doctor_reply`) VALUES
(16, 2, '2014-12-10', NULL, 'prescription description', ''),
(40, 2, '2014-12-13', NULL, 'test pres', '');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE `disease` (
  `disease_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `disease_operation` varchar(500) DEFAULT NULL,
  `disease_trauma` varchar(500) DEFAULT NULL,
  `disease_hereditary` varchar(500) DEFAULT NULL,
  `disease_medication` varchar(500) DEFAULT NULL,
  `disease_operate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `disease`
--

INSERT INTO `disease` (`disease_id`, `user_id`, `disease_operation`, `disease_trauma`, `disease_hereditary`, `disease_medication`, `disease_operate`) VALUES
(129, 2, NULL, 'www', 'nnn', 'nnn', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `doctor_reply` varchar(500) DEFAULT NULL,
  `is_reply` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `user_id`, `date`, `subject`, `description`, `doctor_reply`, `is_reply`) VALUES
(14, 2, '2014-12-11', 'testnew4', 'description2', 'test', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `mental`
--

CREATE TABLE `mental` (
  `mental_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nature_angry` varchar(500) DEFAULT NULL,
  `nature_alone` varchar(500) DEFAULT NULL,
  `nature_mix` varchar(500) DEFAULT NULL,
  `nature_friendsn` varchar(500) DEFAULT NULL,
  `nature_optimisticn` varchar(500) DEFAULT NULL,
  `nature_bold` varchar(500) DEFAULT NULL,
  `nature_decision` varchar(500) DEFAULT NULL,
  `nature_anexities` varchar(500) DEFAULT NULL,
  `nature_feelingn` varchar(500) DEFAULT NULL,
  `nature_travelling` varchar(500) DEFAULT NULL,
  `nature_social_position` varchar(500) DEFAULT NULL,
  `nature_ambitious` varchar(500) DEFAULT NULL,
  `nature_organisedn` varchar(500) DEFAULT NULL,
  `nature_holidays` varchar(500) DEFAULT NULL,
  `nature_punctual` varchar(500) DEFAULT NULL,
  `nature_perticularn` varchar(500) DEFAULT NULL,
  `nature_luxuries` varchar(500) DEFAULT NULL,
  `nature_brand` varchar(500) DEFAULT NULL,
  `nature_restlessn` varchar(500) DEFAULT NULL,
  `nature_cleanliness` varchar(500) DEFAULT NULL,
  `nature_risks` varchar(500) DEFAULT NULL,
  `nature_adventure` varchar(500) DEFAULT NULL,
  `nature_reponsibilitiesn` varchar(500) DEFAULT NULL,
  `nature_add_nature` varchar(500) DEFAULT NULL,
  `nature_lies` varchar(500) DEFAULT NULL,
  `nature_jealous` varchar(500) DEFAULT NULL,
  `nature_domination` varchar(500) DEFAULT NULL,
  `nature_abuse` varchar(500) DEFAULT NULL,
  `nature_comparison` varchar(500) DEFAULT NULL,
  `nature_neglected` varchar(500) DEFAULT NULL,
  `nature_impression` varchar(500) DEFAULT NULL,
  `childhood_history` varchar(500) DEFAULT NULL,
  `childhood_abuse` varchar(500) DEFAULT NULL,
  `childhood_rivalry` varchar(500) DEFAULT NULL,
  `childhood_feelings` varchar(500) DEFAULT NULL,
  `childhood_impression` varchar(500) DEFAULT NULL,
  `school_status` varchar(500) DEFAULT NULL,
  `school_study` varchar(500) DEFAULT NULL,
  `school_success` varchar(500) DEFAULT NULL,
  `school_sports` varchar(500) DEFAULT NULL,
  `school_love` varchar(500) DEFAULT NULL,
  `school_specific` varchar(500) DEFAULT NULL,
  `college_details` varchar(500) DEFAULT NULL,
  `college_ambition` varchar(500) DEFAULT NULL,
  `college_love` varchar(500) DEFAULT NULL,
  `college_participation` varchar(500) DEFAULT NULL,
  `college_specific` varchar(500) DEFAULT NULL,
  `work_home` varchar(500) DEFAULT NULL,
  `work_stay` varchar(500) DEFAULT NULL,
  `work_residence` varchar(500) DEFAULT NULL,
  `work_atmosphere` varchar(500) DEFAULT NULL,
  `work_work` varchar(500) DEFAULT NULL,
  `work_watmosphere` varchar(500) DEFAULT NULL,
  `work_job` varchar(500) DEFAULT NULL,
  `work_changejob` varchar(500) DEFAULT NULL,
  `work_contributions` varchar(500) DEFAULT NULL,
  `traumatic_fraud` varchar(500) DEFAULT NULL,
  `tarumatic_disturbed` varchar(500) DEFAULT NULL,
  `relation_family` varchar(500) DEFAULT NULL,
  `relation_longterm` varchar(500) DEFAULT NULL,
  `relation_intense` varchar(500) DEFAULT NULL,
  `relation_love` varchar(500) DEFAULT NULL,
  `realtion_disappointments` varchar(500) DEFAULT NULL,
  `sexual_relations` varchar(500) DEFAULT NULL,
  `sexual_desire` varchar(500) DEFAULT NULL,
  `sexual_orientation` varchar(500) DEFAULT NULL,
  `sexual_preversions` varchar(500) DEFAULT NULL,
  `sexual_mastrubation` varchar(500) DEFAULT NULL,
  `sexual_organs` varchar(500) DEFAULT NULL,
  `sexual_exposures` varchar(500) DEFAULT NULL,
  `sexual_oral` varchar(500) DEFAULT NULL,
  `sexual_partners` varchar(500) DEFAULT NULL,
  `sexual_csw` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mental`
--

INSERT INTO `mental` (`mental_id`, `user_id`, `nature_angry`, `nature_alone`, `nature_mix`, `nature_friendsn`, `nature_optimisticn`, `nature_bold`, `nature_decision`, `nature_anexities`, `nature_feelingn`, `nature_travelling`, `nature_social_position`, `nature_ambitious`, `nature_organisedn`, `nature_holidays`, `nature_punctual`, `nature_perticularn`, `nature_luxuries`, `nature_brand`, `nature_restlessn`, `nature_cleanliness`, `nature_risks`, `nature_adventure`, `nature_reponsibilitiesn`, `nature_add_nature`, `nature_lies`, `nature_jealous`, `nature_domination`, `nature_abuse`, `nature_comparison`, `nature_neglected`, `nature_impression`, `childhood_history`, `childhood_abuse`, `childhood_rivalry`, `childhood_feelings`, `childhood_impression`, `school_status`, `school_study`, `school_success`, `school_sports`, `school_love`, `school_specific`, `college_details`, `college_ambition`, `college_love`, `college_participation`, `college_specific`, `work_home`, `work_stay`, `work_residence`, `work_atmosphere`, `work_work`, `work_watmosphere`, `work_job`, `work_changejob`, `work_contributions`, `traumatic_fraud`, `tarumatic_disturbed`, `relation_family`, `relation_longterm`, `relation_intense`, `relation_love`, `realtion_disappointments`, `sexual_relations`, `sexual_desire`, `sexual_orientation`, `sexual_preversions`, `sexual_mastrubation`, `sexual_organs`, `sexual_exposures`, `sexual_oral`, `sexual_partners`, `sexual_csw`) VALUES
(85, 2, 'www', 'sss', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'nnnnn');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_08_09_065345_create_admins_table', 1),
(4, '2020_08_19_043703_create_settings_table', 1),
(5, '2020_08_20_054720_create_categories_table', 1),
(6, '2020_08_23_045907_create_attributes_table', 1),
(7, '2020_08_23_054953_create_attribute_values_table', 1),
(8, '2020_08_31_080658_create_brands_table', 1),
(9, '2020_09_01_063940_create_products_table', 1),
(10, '2020_09_01_073044_create_product_images_table', 1),
(11, '2020_09_01_081000_create_product_attributes_table', 1),
(12, '2020_09_01_084710_product_categories', 1),
(13, '2020_09_17_042632_create_orders_table', 1),
(14, '2020_09_17_044028_create_order_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `milestone_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `milestone_delay` varchar(500) DEFAULT NULL,
  `milestone_teething` varchar(500) DEFAULT NULL,
  `milestone_neck_holding` varchar(500) DEFAULT NULL,
  `milestone_difficulty` varchar(500) DEFAULT NULL,
  `milestone_eating` varchar(500) DEFAULT NULL,
  `milestone_urine` varchar(500) DEFAULT NULL,
  `milestone_stool` varchar(500) DEFAULT NULL,
  `milestone_growth` varchar(500) DEFAULT NULL,
  `milestone_speaking` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestone`
--

INSERT INTO `milestone` (`milestone_id`, `user_id`, `milestone_delay`, `milestone_teething`, `milestone_neck_holding`, `milestone_difficulty`, `milestone_eating`, `milestone_urine`, `milestone_stool`, `milestone_growth`, `milestone_speaking`) VALUES
(47, 2, 'yes', 'yes', 'pppppppppppppppppp', 'pppppppppppppp', 'pppppppppppppppppp', 'pppppppppppppppp', 'ppppppppppppppppp', 'ppppppppppppppppp', 'pppppppppppppppp');

-- --------------------------------------------------------

--
-- Table structure for table `order_medicine`
--

CREATE TABLE `order_medicine` (
  `oid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date_of_order` date DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `medi_description` varchar(500) DEFAULT NULL,
  `disaptchstatus` tinyint(1) NOT NULL,
  `paidstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_medicine`
--

INSERT INTO `order_medicine` (`oid`, `user_id`, `date_of_order`, `email_id`, `medi_description`, `disaptchstatus`, `paidstatus`) VALUES
(10, 2, '2014-12-10', '', 'medicine description', 1, 1);

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
-- Table structure for table `perspiration`
--

CREATE TABLE `perspiration` (
  `perspiration_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `perspiration_sweat_how` varchar(500) DEFAULT NULL,
  `perspiration_sweat_palms` varchar(500) DEFAULT NULL,
  `perspiration_character` varchar(500) DEFAULT NULL,
  `perspiration_odour` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perspiration`
--

INSERT INTO `perspiration` (`perspiration_id`, `user_id`, `perspiration_sweat_how`, `perspiration_sweat_palms`, `perspiration_character`, `perspiration_odour`) VALUES
(31, 2, 'Profuse,', 'Palms,', 'Wet,', 'Offensive,');

-- --------------------------------------------------------

--
-- Table structure for table `physical`
--

CREATE TABLE `physical` (
  `physical_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `physical_built` varchar(500) DEFAULT NULL,
  `physical_complexion` varchar(500) DEFAULT NULL,
  `physical_discoloration` varchar(500) DEFAULT NULL,
  `appetite` varchar(100) DEFAULT NULL,
  `appetite_hunger` varchar(100) DEFAULT NULL,
  `bowels_problem_stools` varchar(100) DEFAULT NULL,
  `bowels_stools` varchar(100) DEFAULT NULL,
  `bowels_habbits` varchar(100) DEFAULT NULL,
  `bowels_character` varchar(100) DEFAULT NULL,
  `bowels_trouble` varchar(100) DEFAULT NULL,
  `thirst_feel` varchar(100) DEFAULT NULL,
  `thirst_water_drink` varchar(100) DEFAULT NULL,
  `thirst_throat` varchar(100) DEFAULT NULL,
  `food_want` varchar(100) DEFAULT NULL,
  `food_reheat` varchar(100) DEFAULT NULL,
  `food_dislike` varchar(100) DEFAULT NULL,
  `food_like` varchar(100) DEFAULT NULL,
  `urine_problem` varchar(100) DEFAULT NULL,
  `urine_how` varchar(100) DEFAULT NULL,
  `urine_character` varchar(100) DEFAULT NULL,
  `urine_trouble` varchar(100) DEFAULT NULL,
  `birthmark` varchar(500) DEFAULT NULL,
  `side` varchar(500) DEFAULT NULL,
  `speed` varchar(500) DEFAULT NULL,
  `thermo_weather` varchar(500) DEFAULT NULL,
  `thermo_tolerance` varchar(500) DEFAULT NULL,
  `addictions` varchar(500) DEFAULT NULL,
  `perspiration_sweat_how` varchar(500) DEFAULT NULL,
  `perspiration_sweat_palms` varchar(500) DEFAULT NULL,
  `perspiration_character` varchar(500) DEFAULT NULL,
  `perspiration_odour` varchar(500) DEFAULT NULL,
  `sleep_quality` varchar(500) DEFAULT NULL,
  `sleep_activity` varchar(500) DEFAULT NULL,
  `sleep_activity_anyother` varchar(500) DEFAULT NULL,
  `sleep_space` varchar(500) DEFAULT NULL,
  `sleep_position` varchar(500) DEFAULT NULL,
  `sleep_dreams` varchar(500) DEFAULT NULL,
  `sleep_rdreams` varchar(500) DEFAULT NULL,
  `sensitivity_sound_des` varchar(500) DEFAULT NULL,
  `sensitivity_sound` tinyint(1) DEFAULT NULL,
  `sensitivity_noise_des` varchar(500) DEFAULT NULL,
  `sensitivity_noise` tinyint(1) DEFAULT NULL,
  `sensitivity_touch_des` varchar(500) DEFAULT NULL,
  `sensitivity_touch` tinyint(1) DEFAULT NULL,
  `sensitivity_light_des` varchar(500) DEFAULT NULL,
  `sensitivity_light` tinyint(1) DEFAULT NULL,
  `sensitivity_sun_des` varchar(500) DEFAULT NULL,
  `sensitivity_sun` tinyint(1) DEFAULT NULL,
  `sensitivity_thunderstrom_des` varchar(500) DEFAULT NULL,
  `sensitivity_thunderstrom` tinyint(1) DEFAULT NULL,
  `sensitivity_perfumes_des` varchar(500) DEFAULT NULL,
  `sensitivity_perfumes` tinyint(1) DEFAULT NULL,
  `sensitivity_reactions_des` varchar(500) DEFAULT NULL,
  `sensitivity_reactions` tinyint(1) DEFAULT NULL,
  `sensitivity_travelling_des` varchar(500) DEFAULT NULL,
  `sensitivity_travelling` tinyint(1) DEFAULT NULL,
  `sensitivity_motion_des` varchar(500) DEFAULT NULL,
  `sensitivity_motion` tinyint(1) DEFAULT NULL,
  `sensitivity_tight_des` varchar(500) DEFAULT NULL,
  `sensitivity_tight` tinyint(1) DEFAULT NULL,
  `sensitivity_cloth_type` varchar(500) DEFAULT NULL,
  `sensitivity_tight_tolerate` varchar(500) DEFAULT NULL,
  `sensitivity_supernatural` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical`
--

INSERT INTO `physical` (`physical_id`, `user_id`, `physical_built`, `physical_complexion`, `physical_discoloration`, `appetite`, `appetite_hunger`, `bowels_problem_stools`, `bowels_stools`, `bowels_habbits`, `bowels_character`, `bowels_trouble`, `thirst_feel`, `thirst_water_drink`, `thirst_throat`, `food_want`, `food_reheat`, `food_dislike`, `food_like`, `urine_problem`, `urine_how`, `urine_character`, `urine_trouble`, `birthmark`, `side`, `speed`, `thermo_weather`, `thermo_tolerance`, `addictions`, `perspiration_sweat_how`, `perspiration_sweat_palms`, `perspiration_character`, `perspiration_odour`, `sleep_quality`, `sleep_activity`, `sleep_activity_anyother`, `sleep_space`, `sleep_position`, `sleep_dreams`, `sleep_rdreams`, `sensitivity_sound_des`, `sensitivity_sound`, `sensitivity_noise_des`, `sensitivity_noise`, `sensitivity_touch_des`, `sensitivity_touch`, `sensitivity_light_des`, `sensitivity_light`, `sensitivity_sun_des`, `sensitivity_sun`, `sensitivity_thunderstrom_des`, `sensitivity_thunderstrom`, `sensitivity_perfumes_des`, `sensitivity_perfumes`, `sensitivity_reactions_des`, `sensitivity_reactions`, `sensitivity_travelling_des`, `sensitivity_travelling`, `sensitivity_motion_des`, `sensitivity_motion`, `sensitivity_tight_des`, `sensitivity_tight`, `sensitivity_cloth_type`, `sensitivity_tight_tolerate`, `sensitivity_supernatural`) VALUES
(1, 2, 'eee', 'eeee', 'eee', 'eeeeee', 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `preganacy`
--

CREATE TABLE `preganacy` (
  `preganacy_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `preganacy_problem` varchar(500) DEFAULT NULL,
  `preganacy_month` varchar(500) DEFAULT NULL,
  `preganacy_treatment` varchar(500) DEFAULT NULL,
  `preganacy_mental` varchar(500) DEFAULT NULL,
  `preganacy_recurrent` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preganacy`
--

INSERT INTO `preganacy` (`preganacy_id`, `user_id`, `preganacy_problem`, `preganacy_month`, `preganacy_treatment`, `preganacy_mental`, `preganacy_recurrent`) VALUES
(61, 2, 'ppppppppppppppppppp', 'ppppppppppppppppppppppp', 'pppppppppppppppppppppppp', 'aaa', 'ppppppppppppppppppppppppp');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `prescription_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prescription` varchar(500) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`prescription_id`, `user_id`, `prescription`, `description`) VALUES
(114, 2, 'test', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(291) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hk` varchar(291) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_cn` varchar(291) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_card_info_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_card_info_hk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `display_price` int(11) DEFAULT NULL,
  `is_discount` tinyint(1) DEFAULT NULL,
  `discount_price` int(11) DEFAULT NULL,
  `product_info_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_info_hk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_hk` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_on_frontend` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `pricing_method` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pricing_method_id` int(10) UNSIGNED DEFAULT NULL,
  `have_route` int(10) NOT NULL DEFAULT 0,
  `have_addon` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `slug`, `name_en`, `name_hk`, `name_cn`, `product_code`, `product_card_info_en`, `product_card_info_hk`, `rating`, `display_price`, `is_discount`, `discount_price`, `product_info_en`, `product_info_hk`, `terms_en`, `terms_hk`, `display_on_frontend`, `created_at`, `updated_at`, `deleted_at`, `pricing_method`, `pricing_method_id`, `have_route`, `have_addon`) VALUES
(27, 'pp', 'Product 1', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-29 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(28, 'pp', 'Product 21', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-29 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(29, 'pp', 'Product 3\r\n', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-29 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(30, 'pp', 'Product 4\r\n', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-29 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(31, 'pp', 'Product 5\r\n', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-28 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(32, 'pp', 'Product 6\r\n', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-28 06:07:11', NULL, NULL, NULL, NULL, 0, 0),
(33, 'pp', 'Product 5\r\n', 'Product 1', 'Product 1', '001', 'Product 1', 'Product 1', 4, 100, NULL, NULL, 'Product 1', 'Product 1', NULL, NULL, NULL, '2022-05-28 06:07:11', NULL, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(500) DEFAULT NULL,
  `mname` varchar(500) DEFAULT NULL,
  `lname` varchar(500) DEFAULT NULL,
  `religion` varchar(500) DEFAULT NULL,
  `sex` varchar(500) DEFAULT NULL,
  `age` varchar(500) DEFAULT NULL,
  `ffname` varchar(500) DEFAULT NULL,
  `mfname` varchar(500) DEFAULT NULL,
  `mstatus` varchar(500) DEFAULT NULL,
  `mnotimes` varchar(500) DEFAULT NULL,
  `blgrp` varchar(500) DEFAULT NULL,
  `wt` varchar(500) DEFAULT NULL,
  `ht` varchar(500) DEFAULT NULL,
  `lnumber` varchar(500) DEFAULT NULL,
  `mno` varchar(500) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `pincode` varchar(500) DEFAULT NULL,
  `city` varchar(500) DEFAULT NULL,
  `state` varchar(500) DEFAULT NULL,
  `country` varchar(500) DEFAULT NULL,
  `reffered_by` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`profile_id`, `user_id`, `fname`, `mname`, `lname`, `religion`, `sex`, `age`, `ffname`, `mfname`, `mstatus`, `mnotimes`, `blgrp`, `wt`, `ht`, `lnumber`, `mno`, `photo`, `email`, `address`, `pincode`, `city`, `state`, `country`, `reffered_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr.Anupama Clinic', 'anupama', 'anupama', 'hindu', 'male', '2', 'raj', 'rajni', 'married', '1', 'B+', '56', '6', '6769798', '6789787676', '1_1.41812385763E+12.jpg', 'bhagyashree.kasbe@gmail.com', 'Pune', '676787', 'pune', 'maharashtra', 'DZ', 'hkjhjk', '2021-12-02 06:39:05', NULL),
(2, 2, 'devyani', 'satish', 'chimote', 'hindu', 'female', '28', 'YGHG', 'JHGJHGJH', 'married', '1', 'B+', '52', '5', '13456789085', '9923288621', '4_1.4219033627E+12.jpg', 'devyani.chimote@aceventura.in', 'magarpatta hadapsar28', '411028', 'pune', 'maha', 'Afganistan', 'sdfsdf', '2021-12-02 06:39:05', '2021-12-02 01:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `sleep`
--

CREATE TABLE `sleep` (
  `sleep_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sleep_quality` varchar(500) DEFAULT NULL,
  `sleep_activity` varchar(500) DEFAULT NULL,
  `sleep_activity_anyother` varchar(500) DEFAULT NULL,
  `sleep_space` varchar(500) DEFAULT NULL,
  `sleep_position` varchar(500) DEFAULT NULL,
  `sleep_dreams` varchar(500) DEFAULT NULL,
  `sleep_rdreams` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sleep`
--

INSERT INTO `sleep` (`sleep_id`, `user_id`, `sleep_quality`, `sleep_activity`, `sleep_activity_anyother`, `sleep_space`, `sleep_position`, `sleep_dreams`, `sleep_rdreams`) VALUES
(43, 2, 'Sound,', 'Salivation during sleep,', NULL, 'physicals', 'Back,', 'physicals', 'physicals');

-- --------------------------------------------------------

--
-- Table structure for table `specific_mental`
--

CREATE TABLE `specific_mental` (
  `smm_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `smm_rigid` varchar(500) DEFAULT NULL,
  `smm_phobia` varchar(500) DEFAULT NULL,
  `smm_affection` varchar(500) DEFAULT NULL,
  `smm_god` varchar(500) DEFAULT NULL,
  `smm_customs` varchar(500) DEFAULT NULL,
  `smm_places` varchar(500) DEFAULT NULL,
  `smm_decisions` varchar(500) DEFAULT NULL,
  `smm_decisions_behind` varchar(500) DEFAULT NULL,
  `smm_immediately` varchar(500) DEFAULT NULL,
  `smm_tired` varchar(500) DEFAULT NULL,
  `smm_consolation` varchar(500) DEFAULT NULL,
  `smm_visiting` varchar(500) DEFAULT NULL,
  `smm_around` varchar(500) DEFAULT NULL,
  `smm_intellect` varchar(500) DEFAULT NULL,
  `smm_memory` varchar(500) DEFAULT NULL,
  `smm_talents` varchar(500) DEFAULT NULL,
  `smm_character` varchar(500) DEFAULT NULL,
  `smm_knowledge` varchar(500) DEFAULT NULL,
  `smm_inquisitive` varchar(500) DEFAULT NULL,
  `smm_expertise` varchar(500) DEFAULT NULL,
  `smm_reading` varchar(500) DEFAULT NULL,
  `smm_interest` varchar(500) DEFAULT NULL,
  `smm_changes` varchar(500) DEFAULT NULL,
  `smm_positive` varchar(500) DEFAULT NULL,
  `smm_samereaction` varchar(500) DEFAULT NULL,
  `sensitive` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specific_mental`
--

INSERT INTO `specific_mental` (`smm_id`, `user_id`, `smm_rigid`, `smm_phobia`, `smm_affection`, `smm_god`, `smm_customs`, `smm_places`, `smm_decisions`, `smm_decisions_behind`, `smm_immediately`, `smm_tired`, `smm_consolation`, `smm_visiting`, `smm_around`, `smm_intellect`, `smm_memory`, `smm_talents`, `smm_character`, `smm_knowledge`, `smm_inquisitive`, `smm_expertise`, `smm_reading`, `smm_interest`, `smm_changes`, `smm_positive`, `smm_samereaction`, `sensitive`) VALUES
(13, 2, 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGGGGGGG', 'GGGGGGGGGGGGGGGGGGG', 'Contradiction,Scoldings,Insults,Thunderstorm & lightening');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `tid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_description` varchar(500) DEFAULT NULL,
  `dateofpost` date DEFAULT NULL,
  `approved` tinyint(1) DEFAULT 0,
  `delete_status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`tid`, `user_id`, `test_description`, `dateofpost`, `approved`, `delete_status`) VALUES
(30, 2, 'Add test', '2014-12-12', 1, 0),
(36, 2, 'testimonials', '2015-01-23', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thermo`
--

CREATE TABLE `thermo` (
  `thermo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thermo_weather` varchar(500) DEFAULT NULL,
  `thermo_tolerance` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thermo`
--

INSERT INTO `thermo` (`thermo_id`, `user_id`, `thermo_weather`, `thermo_tolerance`) VALUES
(39, 2, 'Cool,', 'physicals'),
(40, 2, '', 'KJGKJHJ'),
(41, 21, NULL, NULL),
(42, 22, NULL, NULL),
(43, 24, NULL, NULL),
(44, 25, NULL, NULL),
(45, 26, NULL, NULL),
(46, 27, NULL, NULL),
(47, 28, NULL, NULL),
(48, 29, NULL, NULL),
(49, 30, NULL, NULL),
(50, 31, NULL, NULL),
(51, 32, 'Cool,Hot,', 'kjjkjk'),
(52, 33, NULL, NULL),
(53, 34, NULL, NULL),
(54, 35, NULL, NULL),
(55, 36, NULL, NULL),
(56, 37, NULL, NULL),
(57, 38, 'Cool,', 'dsf'),
(58, 39, NULL, NULL),
(59, 40, NULL, NULL),
(60, 41, NULL, NULL),
(61, 42, NULL, NULL),
(62, 43, NULL, NULL),
(63, 44, NULL, NULL),
(64, 45, NULL, NULL),
(65, 46, NULL, NULL),
(66, 47, NULL, NULL),
(67, 48, NULL, NULL),
(68, 49, NULL, NULL),
(69, 50, NULL, NULL),
(70, 51, NULL, NULL),
(71, 52, NULL, NULL),
(72, 53, NULL, NULL),
(73, 54, NULL, NULL),
(74, 55, NULL, NULL),
(75, 52, NULL, NULL),
(76, 53, NULL, NULL),
(77, 54, NULL, NULL),
(78, 55, NULL, NULL),
(79, 56, NULL, NULL),
(80, 57, NULL, NULL),
(81, 58, NULL, NULL),
(82, 59, NULL, NULL),
(83, 60, NULL, NULL),
(84, 61, NULL, NULL),
(85, 62, NULL, NULL),
(86, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thirst`
--

CREATE TABLE `thirst` (
  `thirst_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `thirst_feel` varchar(500) DEFAULT NULL,
  `thirst_water_drink` varchar(500) DEFAULT NULL,
  `thirst_throat` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thirst`
--

INSERT INTO `thirst` (`thirst_id`, `user_id`, `thirst_feel`, `thirst_water_drink`, `thirst_throat`) VALUES
(40, 19, 'physicals', 'physicals', 'physicals'),
(41, 2, 'G', 'DFDGVD', 'GHGJ'),
(42, 21, NULL, NULL, NULL),
(43, 22, NULL, NULL, NULL),
(44, 24, NULL, NULL, NULL),
(45, 25, NULL, NULL, NULL),
(46, 26, NULL, NULL, NULL),
(47, 27, NULL, NULL, NULL),
(48, 28, NULL, NULL, NULL),
(49, 29, NULL, NULL, NULL),
(50, 30, NULL, NULL, NULL),
(51, 31, NULL, NULL, NULL),
(52, 32, 'gjgkjgkj', 'kjhkj', 'hkjhkj'),
(53, 33, NULL, NULL, NULL),
(54, 34, NULL, NULL, NULL),
(55, 35, NULL, NULL, NULL),
(56, 36, NULL, NULL, NULL),
(57, 37, NULL, NULL, NULL),
(58, 38, 'erewrewr', 'ewrewr', 'erwerewr'),
(59, 39, NULL, NULL, NULL),
(60, 40, NULL, NULL, NULL),
(61, 41, NULL, NULL, NULL),
(62, 42, NULL, NULL, NULL),
(63, 43, NULL, NULL, NULL),
(64, 44, NULL, NULL, NULL),
(65, 45, NULL, NULL, NULL),
(66, 46, NULL, NULL, NULL),
(67, 47, NULL, NULL, NULL),
(68, 48, NULL, NULL, NULL),
(69, 49, NULL, NULL, NULL),
(70, 50, NULL, NULL, NULL),
(71, 51, NULL, NULL, NULL),
(72, 52, NULL, NULL, NULL),
(73, 53, NULL, NULL, NULL),
(74, 54, NULL, NULL, NULL),
(75, 55, NULL, NULL, NULL),
(76, 52, NULL, NULL, NULL),
(77, 53, NULL, NULL, NULL),
(78, 54, NULL, NULL, NULL),
(79, 55, NULL, NULL, NULL),
(80, 56, NULL, NULL, NULL),
(81, 57, NULL, NULL, NULL),
(82, 58, NULL, NULL, NULL),
(83, 59, NULL, NULL, NULL),
(84, 60, NULL, NULL, NULL),
(85, 61, NULL, NULL, NULL),
(86, 62, NULL, NULL, NULL),
(87, 4, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 2,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`, `phone`) VALUES
(1, 'Dr.Anupama Clinic', 'admin', 'admin@admin.com', '0000-00-00 00:00:00', '$2y$10$F4G/CqUMdvaykIHLsrBwJ.s.EiK5NIDShaAwMtVXIgQmMODYhPjte', NULL, NULL, '2021-11-30 23:06:58', 1, NULL),
(2, 'devyani', 'chimote', 'patient@admin.com', '0000-00-00 00:00:00', '$2y$10$F4G/CqUMdvaykIHLsrBwJ.s.EiK5NIDShaAwMtVXIgQmMODYhPjte', NULL, NULL, NULL, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vaccination`
--

CREATE TABLE `vaccination` (
  `vaccination_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `vaccination` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vaccination`
--

INSERT INTO `vaccination` (`vaccination_id`, `user_id`, `vaccination`) VALUES
(13, 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `women_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `women_menstrual` varchar(500) DEFAULT NULL,
  `women_firstmenstrual` varchar(500) DEFAULT NULL,
  `women_lastmenstrual` varchar(500) DEFAULT NULL,
  `women_menses` varchar(500) DEFAULT NULL,
  `women_duration` varchar(500) DEFAULT NULL,
  `women_flow` varchar(500) DEFAULT NULL,
  `women_colour` varchar(500) DEFAULT NULL,
  `women_odour` varchar(500) DEFAULT NULL,
  `women_staining` varchar(500) DEFAULT NULL,
  `women_discharge` varchar(500) DEFAULT NULL,
  `women_obstetric` varchar(500) DEFAULT NULL,
  `women_concieved` varchar(500) DEFAULT NULL,
  `women_abortion` varchar(500) DEFAULT NULL,
  `women_children` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`women_id`, `user_id`, `women_menstrual`, `women_firstmenstrual`, `women_lastmenstrual`, `women_menses`, `women_duration`, `women_flow`, `women_colour`, `women_odour`, `women_staining`, `women_discharge`, `women_obstetric`, `women_concieved`, `women_abortion`, `women_children`) VALUES
(3, 2, 'ppppppppppppp', 'ppppppppppppppp', 'ppppppppppppppp', 'pppppppppppp', 'ppppppppppppppp', 'ppppppppppppppppppp', 'pppppppppppppp', 'pppppppppppppppppppppp', 'pppppppppppppppp', 'ppppppppppppppp', 'pppppppppppppppp', 'pppppppppppppppp', 'ppppppppppppppp', 'pppppppppppppppppp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addictions`
--
ALTER TABLE `addictions`
  ADD PRIMARY KEY (`addictions_id`);

--
-- Indexes for table `birthhistory`
--
ALTER TABLE `birthhistory`
  ADD PRIMARY KEY (`birthhistory_id`);

--
-- Indexes for table `blockdates`
--
ALTER TABLE `blockdates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `case_analysis`
--
ALTER TABLE `case_analysis`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `case_journey`
--
ALTER TABLE `case_journey`
  ADD PRIMARY KEY (`journey_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `complaint_attachment`
--
ALTER TABLE `complaint_attachment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`consultation_id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`disease_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `mental`
--
ALTER TABLE `mental`
  ADD PRIMARY KEY (`mental_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`milestone_id`);

--
-- Indexes for table `order_medicine`
--
ALTER TABLE `order_medicine`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `perspiration`
--
ALTER TABLE `perspiration`
  ADD PRIMARY KEY (`perspiration_id`);

--
-- Indexes for table `physical`
--
ALTER TABLE `physical`
  ADD PRIMARY KEY (`physical_id`);

--
-- Indexes for table `preganacy`
--
ALTER TABLE `preganacy`
  ADD PRIMARY KEY (`preganacy_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescription_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `sleep`
--
ALTER TABLE `sleep`
  ADD PRIMARY KEY (`sleep_id`);

--
-- Indexes for table `specific_mental`
--
ALTER TABLE `specific_mental`
  ADD PRIMARY KEY (`smm_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `thermo`
--
ALTER TABLE `thermo`
  ADD PRIMARY KEY (`thermo_id`);

--
-- Indexes for table `thirst`
--
ALTER TABLE `thirst`
  ADD PRIMARY KEY (`thirst_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `vaccination`
--
ALTER TABLE `vaccination`
  ADD PRIMARY KEY (`vaccination_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`women_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addictions`
--
ALTER TABLE `addictions`
  MODIFY `addictions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `birthhistory`
--
ALTER TABLE `birthhistory`
  MODIFY `birthhistory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `blockdates`
--
ALTER TABLE `blockdates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `case_analysis`
--
ALTER TABLE `case_analysis`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `case_journey`
--
ALTER TABLE `case_journey`
  MODIFY `journey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `complaint_attachment`
--
ALTER TABLE `complaint_attachment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `consultation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `disease`
--
ALTER TABLE `disease`
  MODIFY `disease_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `mental`
--
ALTER TABLE `mental`
  MODIFY `mental_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `milestone`
--
ALTER TABLE `milestone`
  MODIFY `milestone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `order_medicine`
--
ALTER TABLE `order_medicine`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `perspiration`
--
ALTER TABLE `perspiration`
  MODIFY `perspiration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `physical`
--
ALTER TABLE `physical`
  MODIFY `physical_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `preganacy`
--
ALTER TABLE `preganacy`
  MODIFY `preganacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `prescription_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `sleep`
--
ALTER TABLE `sleep`
  MODIFY `sleep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `specific_mental`
--
ALTER TABLE `specific_mental`
  MODIFY `smm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `thermo`
--
ALTER TABLE `thermo`
  MODIFY `thermo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `thirst`
--
ALTER TABLE `thirst`
  MODIFY `thirst_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccination`
--
ALTER TABLE `vaccination`
  MODIFY `vaccination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `women_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
