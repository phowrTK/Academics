-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 03:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doanchuyennghanh4`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcategory` bigint(20) UNSIGNED NOT NULL,
  `namecategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcategory`, `namecategory`, `created_at`, `updated_at`) VALUES
(1, 'VOCABULARY', '2021-01-09 21:46:39', '2021-01-09 21:46:39'),
(2, 'GRAMMAR', '2021-01-09 21:47:00', '2021-01-09 21:47:00'),
(3, 'LISTENING', '2021-01-09 21:47:36', '2021-01-09 21:47:36'),
(4, 'SPEAKING', '2021-01-09 21:51:16', '2021-01-09 21:51:16'),
(5, 'WRITING', '2021-01-09 21:53:18', '2021-01-09 21:53:18');

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `idch` bigint(20) UNSIGNED NOT NULL,
  `noidung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idtn` bigint(20) UNSIGNED NOT NULL,
  `idda` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`idch`, `noidung`, `image`, `media`, `a`, `b`, `c`, `d`, `idtn`, `idda`, `created_at`, `updated_at`) VALUES
(25, 'How many animals are called inside the passage?', '', NULL, '4', '6', '8', '10', 10, 2, '2021-01-10 06:23:15', '2021-01-10 06:23:48'),
(26, 'Which animal is named in the above paragraph?', '', NULL, 'Dog', 'Cat', 'Frog', 'Duck', 10, 1, '2021-01-10 06:25:08', '2021-01-10 06:25:08'),
(27, 'What is the name of the dog on the passage?', '', NULL, 'poodle', 'alise', 'smile', 'got', 10, 1, '2021-01-10 06:26:36', '2021-01-10 06:26:36'),
(28, 'Does the boy like to raise snakes or not?', '', NULL, 'like', 'dislike', 'hate', 'not mentioned', 10, 4, '2021-01-10 06:28:05', '2021-01-10 06:28:05'),
(29, 'The ____ Hound is a large dog', '', NULL, 'poodle', 'Cocker Spaniel', 'Labador', 'alice', 10, 3, '2021-01-10 06:29:23', '2021-01-10 06:29:23'),
(30, 'What color eyes do Thai cats have?', '', NULL, 'green Blue', 'red', 'yellow', 'black', 10, 1, '2021-01-10 06:30:32', '2021-01-10 06:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `idcomment` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkh` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`idcomment`, `content`, `idkh`, `id`, `created_at`, `updated_at`) VALUES
(20, 'hay!!!', 16, 1, '2021-01-10 05:48:25', '2021-01-10 05:48:25'),
(21, 'quá hay!!!', 16, 1, '2021-01-10 05:49:06', '2021-01-10 05:49:06'),
(22, 'hay!!!', 15, 1, '2021-01-10 07:11:01', '2021-01-10 07:11:01'),
(23, 'tôt!!!', 15, 1, '2021-01-10 07:11:10', '2021-01-10 07:11:10'),
(25, 'hay', 15, 1, '2021-01-14 00:23:45', '2021-01-14 00:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `idkh` bigint(20) UNSIGNED NOT NULL,
  `namekh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `idlevel` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `linkyoutube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idcategory` bigint(20) UNSIGNED DEFAULT NULL,
  `id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`idkh`, `namekh`, `tomtac`, `noidung`, `hinh`, `soluotxem`, `idlevel`, `created_at`, `updated_at`, `linkyoutube`, `media`, `idcategory`, `id`) VALUES
(11, 'WEATHER', '<p>b&agrave;i học li&ecirc;n quan đến thời tiết</p>', '<p>1. Transcript: Weather</p>\r\n\r\n<p>You can watch the weatherman on TV, to find out what the weather will be like.<br />\r\nIt might be a nice clear day with no clouds in the sky.<br />\r\nThe sun might be shining.<br />\r\nIt could be a cloudy day.<br />\r\nSometimes, cloudy days are just dull.<br />\r\nOn some cloudy days, it begins to rain or snow.<br />\r\nSome days are rainy.<br />\r\nYou need a raincoat, umbrella and boots on a rainy day.<br />\r\nRain makes the flowers and grass grow.<br />\r\nThe weather forecast might say that it will be windy.<br />\r\nYou could have a gentle breeze.<br />\r\nIt might be very gusty so that the wind pushes you.<br />\r\nIt is dangerous if the wind is very strong.<br />\r\nA hurricane or tornado is very dangerous.Once in a while, the weatherman says there will be hail.<br />\r\nHail stones are hard cold pellets of ice that fall from the sky.<br />\r\nSometimes, the weatherman will say that there will be snow flurries.<br />\r\nSometimes, there is just a light dusting of snow.<br />\r\nSometimes, there is a blizzard or a snowstorm.<br />\r\nIt can be dangerous driving through a blizzard.<br />\r\nIf there is a lot of snow, the streets have to be plowed.<br />\r\nYou need a hat, coat, mittens and boots on a very cold day.<br />\r\nSometimes, the weather forecast is wrong.<br />\r\nThe weatherman might say that it will be a sunny day, but then the clouds come<br />\r\nin and it rains.<br />\r\nThat is not good if you are planning a picnic.<br />\r\nI prefer sunny days that are warm but not too hot.<br />\r\nI like to feel a gentle breeze to cool me down.</p>\r\n\r\n<p>2. B&agrave;i dịch: Thời tiết<br />\r\nBạn c&oacute; thể xem người dự b&aacute;o thời tiết tr&ecirc;n ti vi để t&igrave;m hiểu xem thời tiết sẽ như<br />\r\nthế n&agrave;o.<br />\r\nĐ&oacute; c&oacute; thể l&agrave; một ng&agrave;y đẹp trời kh&ocirc;ng c&oacute; m&acirc;y tr&ecirc;n bầu trời.<br />\r\nMặt trời c&oacute; thể tỏa nắng<br />\r\nĐ&oacute; c&oacute; thể l&agrave; một ng&agrave;y mưa.Thỉnh thoảng những ng&agrave;y nhiều m&acirc;y th&igrave; thật ảm đạm<br />\r\nV&agrave;o một số ng&agrave;y nhiều m&acirc;y, trời bắt đầu mưa hoặc c&oacute; tuyết<br />\r\nV&agrave;i ng&agrave;y th&igrave; c&oacute; mưa<br />\r\nBạn cần một chiếc &aacute;o mưa, &ocirc; hoặc ủng v&agrave;o một ng&agrave;y mưa.<br />\r\nMưa l&agrave;m những b&ocirc;ng hoa v&agrave; cỏ lớn l&ecirc;n.<br />\r\nBản tin dự b&aacute;o thời tiết c&oacute; thể th&ocirc;ng b&aacute;o rằng trời sẽ c&oacute; gi&oacute;<br />\r\nBạn c&oacute; thể bắt gặp một cơn gi&oacute; nhẹ nh&agrave;ng<br />\r\nTrời c&oacute; thể c&oacute; gi&ocirc;ng b&atilde;o n&ecirc;n gi&oacute; c&oacute; thể đẩy bạn đi.<br />\r\nThật nguy hiểm nếu gi&oacute; qu&aacute; mạnh.<br />\r\nMột cơn b&atilde;o hay lốc xo&aacute;y rất nguy hiểm.<br />\r\nĐ&ocirc;i khi, người dự b&aacute;o thời tiết th&ocirc;ng b&aacute;o rằng sẽ c&oacute; mưa đ&aacute;<br />\r\nNhững vi&ecirc;n đ&aacute; mưa l&agrave; những vi&ecirc;n băng cứng lạnh rơi từ tr&ecirc;n trời xuống.<br />\r\nThỉnh thoảng, người dự b&aacute;o thời tiết sẽ th&ocirc;ng b&aacute;o rằng sẽ c&oacute; gi&oacute; tuyết bất chợt<br />\r\nThỉnh thoảng, n&oacute; chỉ l&agrave; một trận tuyết rơi nhẹ<br />\r\nThỉnh thoảng, c&oacute; b&atilde;o tuyết với gi&oacute; mạnh v&agrave; tuyết rơi d&agrave;y hoặc b&atilde;o tuyết với nhiệt<br />\r\nđộ thấp v&agrave; đ&oacute;ng băng.<br />\r\nC&oacute; thể sẽ nguy hiểm nếu l&aacute;i xe qua một trận b&atilde;o tuyết<br />\r\nNếu c&oacute; nhiều tuyết, những con đường cần phải được c&agrave;o tuyết<br />\r\nBạn cần một chiếc mũ, &aacute;o kho&aacute;c, găng tay v&agrave; ủng v&agrave;o một ng&agrave;y rất lạnh</p>', 'Uhg9_mưa.jpg', 21, 7, '2021-01-10 04:58:46', '2021-01-14 21:43:05', 'https://www.youtube.com/watch?v=bLdQ7jUUFV0', '6VUt_1024.mp3', 3, 1),
(12, 'Color', '<p>B&agrave;i học li&ecirc;n quan đến chủ đề m&agrave;u sắc</p>', '<p>1. Transcript: Colors<br />\r\nRed is a vibrant color.<br />\r\nRoses are sometimes red.<br />\r\nBlood is red.<br />\r\nWhite is the color of snow.<br />\r\nClouds are very often white.<br />\r\nBlue is the color of the sky and the ocean.<br />\r\nBlack isn&amp;#39;t really a color at all.<br />\r\nTar is black.<br />\r\nA crow is black.<br />\r\nGreen is the color of grass.<br />\r\nIt is also the color of leaves on the trees in the summer.<br />\r\nBrown is the color of dirt.<br />\r\nMany people have brown hair.<br />\r\nYellow is a bright color.<br />\r\nMost people use yellow when they draw a picture of the sun.<br />\r\nOrange is an easy color to remember, that is because an orange is orange.<br />\r\nPink is the color that we dress baby girls in.<br />\r\nWe dress baby boys in blue.<br />\r\nPurple is the color of some violets.</p>', 'PEOu_color.jpg', 7, 7, '2021-01-10 05:18:11', '2021-01-14 19:42:47', 'https://www.youtube.com/watch?v=_a_87Apm2KA', 'eKFB_1041.mp3', 3, 1),
(13, 'MONTHS', '<p>B&agrave;i học li&ecirc;n quan đến c&aacute;c th&aacute;ng trong năm.</p>', '<p>1. Transcript: Months<br />\r\nThere are twelve months in the year.<br />\r\nJanuary is the first month of the year.<br />\r\nIt is usually cold in January.<br />\r\nFebruary is the second month of the year.<br />\r\nIt is still winter when February comes.<br />\r\nThey say that March comes in like a lion and goes out like a lamb.<br />\r\nThat means that it is still usually cold, and sometimes stormy when March begins.<br />\r\nBy the time that March ends, the weather is starting to get a little better.<br />\r\nApril is the rainy month.<br />\r\nApril showers bring May flowers.<br />\r\nMany of the spring flowers bloom in May.<br />\r\nThe weather can be quite mild in May.<br />\r\nJune is usually a nice warm month.<br />\r\nMany people get married in June.<br />\r\nJuly can be hot.<br />\r\nPeople have vacations in July.<br />\r\nIt is a month to do summer things.<br />\r\nIt is still summer in August, but the summer is winding down.<br />\r\nAugust is the time to have last minute vacations.<br />\r\nIn September, we go back to school. The autumn winds begin to blow.</p>\r\n\r\n<p>October really feels like autumn.<br />\r\nOctober is Halloween time.<br />\r\nNovember is when we really start to feel the chill.<br />\r\nDecember is the Christmas month.<br />\r\nMost people do a lot of Christmas shopping in December.<br />\r\nThey spend quite a bit of time getting ready for Christmas.<br />\r\nAll of the months are different. Which month were you born in?</p>\r\n\r\n<p>2. B&agrave;i dịch: C&aacute;c th&aacute;ng<br />\r\nC&oacute; 12 th&aacute;ng trong năm<br />\r\nTh&aacute;ng Một l&agrave; th&aacute;ng đầu ti&ecirc;n của năm<br />\r\nThời tiết thường lạnh v&agrave;o th&aacute;ng Một<br />\r\nTh&aacute;ng Hai l&agrave; th&aacute;ng thứ 2 của năm<br />\r\nVẫn l&agrave; m&ugrave;a đ&ocirc;ng khi th&aacute;ng Hai đến<br />\r\nHọ n&oacute;i rằng th&aacute;ng Ba đến như một con sư tử v&agrave; rời đi như một ch&uacute; cừu<br />\r\nĐiều đ&oacute; nghĩa l&agrave; trời vẫn lạnh v&agrave; thỉnh thoảng c&oacute; b&atilde;o khi th&aacute;ng Ba bắt đầu<br />\r\nV&agrave;o l&uacute;c th&aacute;ng Ba kết th&uacute;c, thời tiết bắt đầu trở n&ecirc;n tốt hơn<br />\r\nTh&aacute;ng Tư l&agrave; th&aacute;ng c&oacute; mưa<br />\r\nNhững trận mưa r&agrave;o th&aacute;ng Tư đem lại những b&ocirc;ng hoa th&aacute;ng Năm<br />\r\nNhiều những b&ocirc;ng hoa m&ugrave;a xu&acirc;n nở rộ v&agrave;o th&aacute;ng Năm<br />\r\nThời tiết c&oacute; thể kh&aacute; &ocirc;n h&ograve;a v&agrave;o th&aacute;ng Năm<br />\r\nTh&aacute;ng S&aacute;u thường l&agrave; một th&aacute;ng ấm &aacute;p v&agrave; dễ chịu<br />\r\nNhiều người kết h&ocirc;n v&agrave;o th&aacute;ng S&aacute;u<br />\r\nTh&aacute;ng Bảy c&oacute; thể n&oacute;ngMọi người c&oacute; kỳ nghỉ lễ v&agrave;o th&aacute;ng Bảy<br />\r\nN&oacute; l&agrave; một th&aacute;ng để thực hiện những việc của m&ugrave;a h&egrave;<br />\r\nTh&aacute;ng T&aacute;m vẫn l&agrave; m&ugrave;a h&egrave;, nhưng m&ugrave;a h&egrave; sắp kết th&uacute;c<br />\r\nTh&aacute;ng T&aacute;m l&agrave; thời gian để c&oacute; những kỳ nghỉ cuối c&ugrave;ng<br />\r\nV&agrave;o th&aacute;ng Ch&iacute;n, ch&uacute;ng t&ocirc;i trở lại trường. Những cơn gi&oacute; m&ugrave;a thu bắt đầu thổi.<br />\r\nTh&aacute;ng Mười thực sự như m&ugrave;a thu<br />\r\nTh&agrave;ng Mười l&agrave; m&ugrave;a Halloween<br />\r\nTh&aacute;ng Mười một l&agrave; khi ch&uacute;ng ta thực sự cảm thấy lạnh lẽo<br />\r\nTh&aacute;ng Mười hai l&agrave; th&aacute;ng Gi&aacute;ng sinh<br />\r\nHầu hết mọi người mua sắm Gi&aacute;ng sinh rất nhiều v&agrave;o th&aacute;ng Mười hai<br />\r\nHọ d&agrave;nh một ch&uacute;t thời gian chuẩn bị cho Gi&aacute;ng sinh<br />\r\nTất cả c&aacute;c th&aacute;ng đều kh&aacute;c nhau. Bạn sinh v&agrave;o th&aacute;ng mấy?</p>', 'mMEu_tháng.jpg', 2, 7, '2021-01-10 05:32:56', '2021-01-10 05:45:54', 'https://www.youtube.com/watch?v=Pxinf7QSEjM', 'D7Fx_1043.mp3', 3, 1),
(14, 'MY BODY', '<p>B&agrave;i học li&ecirc;n quan đến chủ đề cơ thể con người</p>', '<p>1. Transcript: My Body<br />\r\nOn the top of my head, I have hair.<br />\r\nBelow my hair is my face.<br />\r\nI have two eyes.<br />\r\nI have eyebrows and eyelashes.<br />\r\nBelow my eyes, I have a nose.<br />\r\nMy mouth is below my nose.<br />\r\nI have lips.<br />\r\nIf I open my lips, you will see my teeth and my tongue.<br />\r\nBelow my mouth is my chin.<br />\r\nOn the sides of my head, I have two ears.<br />\r\nMy cheeks are on either side of my nose.<br />\r\nMy neck holds up my head.<br />\r\nMy neck attaches my head to my chest.<br />\r\nOn either side of my chest are my shoulders.<br />\r\nMy arms hang down from my shoulders.<br />\r\nI have wrists on my arms.<br />\r\nMy hands are attached to my wrists.<br />\r\nMy fingers are part of my hands.<br />\r\nI have ten fingers and ten fingernails.</p>\r\n\r\n<p>My back is at the back of me.<br />\r\nFurther down, there is my waist.<br />\r\nIf I wear a belt, I put it on my waist.<br />\r\nMy hips are below my waist.<br />\r\nMy legs come down from my hips.<br />\r\nMy legs are made up of my thighs, my knees and my calves.<br />\r\nMy knees can bend.<br />\r\nMy ankles are below my legs.<br />\r\nMy feet are attached to my ankles.<br />\r\nMy toes are part of my feet.<br />\r\nI have ten toes and ten toenails.<br />\r\nI am me from the top of my head to the tip of my toes.</p>\r\n\r\n<p>2. B&agrave;i dịch: Cơ thể của t&ocirc;i<br />\r\nT&ocirc;i c&oacute; t&oacute;c ở tr&ecirc;n đỉnh đầu<br />\r\nDưới m&aacute;i t&oacute;c l&agrave; khu&ocirc;n mặt của t&ocirc;i<br />\r\nT&ocirc;i c&oacute; hai mắt<br />\r\nT&ocirc;i c&oacute; l&ocirc;ng m&agrave;y v&agrave; l&ocirc;ng mi<br />\r\nDưới mắt t&ocirc;i l&agrave; mũi<br />\r\nMiệng t&ocirc;i ở dưới mũi<br />\r\nT&ocirc;i c&oacute; đ&ocirc;i m&ocirc;i<br />\r\nNếu t&ocirc;i mở m&ocirc;i, bạn sẽ nh&igrave;n thấy răng v&agrave; lưỡi của t&ocirc;i<br />\r\nDưới miệng t&ocirc;i l&agrave; cằm<br />\r\nỞ hai b&ecirc;n đầu l&agrave; hai tai của t&ocirc;i<br />\r\nM&aacute; t&ocirc;i ở hai b&ecirc;n mũiCổ t&ocirc;i giữ đầu của t&ocirc;i<br />\r\nCổ nối đầu của t&ocirc;i với ngực<br />\r\nPh&iacute;a kia của ngực l&agrave; vai<br />\r\nHai tay t&ocirc;i bu&ocirc;ng th&otilde;ng xuống từ vai<br />\r\nT&ocirc;i c&oacute; cổ tay tr&ecirc;n c&aacute;nh tay<br />\r\nTay t&ocirc;i được nối với b&agrave;n tay<br />\r\nNg&oacute;n tay l&agrave; c&aacute;c bộ phận của b&agrave;n tay<br />\r\nT&ocirc;i c&oacute; 10 b&agrave;n tay v&agrave; 10 m&oacute;ng tay<br />\r\nLưng t&ocirc;i ở đằng sau<br />\r\nXuống dưới nữa l&agrave; eo của t&ocirc;i<br />\r\nNếu t&ocirc;i đeo thắt lưng, t&ocirc;i đeo n&oacute; ở eo<br />\r\nH&ocirc;ng của t&ocirc;i ở dưới eo t&ocirc;i<br />\r\nCẳng ch&acirc;n của t&ocirc;i ở dưới h&ocirc;ng<br />\r\nCẳng ch&acirc;n t&ocirc;i gồm c&oacute; đ&ugrave;i, đầu gối v&agrave; bắp ch&acirc;n<br />\r\nĐầu gối của t&ocirc;i c&oacute; thể gập lại<br />\r\nMắt c&aacute; ch&acirc;n ở dưới cẳng ch&acirc;n của t&ocirc;i<br />\r\nB&agrave;n ch&acirc;n của t&ocirc;i được nối với mắt c&aacute; nh&acirc;n<br />\r\nNg&oacute;n ch&acirc;n của t&ocirc;i l&agrave; c&aacute;c bộ phận của b&agrave;n ch&acirc;n<br />\r\nT&ocirc;i c&oacute; 10 ng&oacute;n ch&acirc;n v&agrave; 10 m&oacute;ng ch&acirc;n<br />\r\nT&ocirc;i l&agrave; t&ocirc;i từ đỉnh đầu cho đến tận ng&oacute;n ch&acirc;n</p>', 'pwGp_người.jpg', 1, 7, '2021-01-10 05:39:57', '2021-01-21 08:55:33', 'https://www.youtube.com/watch?v=3X_XkOQnkSg', 'iKSc_1039.mp3', 3, 1),
(15, 'PETS', '<p>B&agrave;i học li&ecirc;n quan chủ đề th&uacute; cưng</p>', '<p>1. Transcript: Pets<br />\r\nThere are many different animals that you can have for pets.<br />\r\nThe most common pets are cats and dogs.<br />\r\nI think the second most common pets are birds and fish.<br />\r\nYou can hug a cat or a dog.<br />\r\nYou can play with a cat or a dog, but it is difficult to play with a bird or a fish.<br />\r\nSome birds are very smart, and they can be taught to do things.<br />\r\nParrots are very clever.<br />\r\nSome of them even talk.<br />\r\nBirds usually stay in birdcages.<br />\r\nFish have to stay in the water in a tank or a fishbowl.<br />\r\nSome people have gerbils or guinea pigs as pets.<br />\r\nThere are even people who have ferrets as pets.<br />\r\nI have a friend who has a lizard for a pet.<br />\r\nShe has to buy live crickets for her lizard to eat.<br />\r\nAnother friend of mine has a pet snake.<br />\r\nI don&amp;#39;t think I would like to have a pet snake.<br />\r\nThere are different types of dogs.<br />\r\nSome dogs are very big, and some are small.<br />\r\nA Labrador retriever is a big dog.<br />\r\nA poodle is usually a small dog, although there are some large poodles.<br />\r\nSome dogs are noisy, and they bark a lot.Other dogs are quiet and obedient.<br />\r\nI once had a dog.<br />\r\nIt was a cocker spaniel.<br />\r\nI used to take it for walks.<br />\r\nThere are different types of cats too.<br />\r\nMy favorite type of cat is a Siamese cat.<br />\r\nSiamese cats have blue eyes.<br />\r\nMy mother had a Persian cat.<br />\r\nIt was very furry.<br />\r\nMy mother said that it used to shed fur all over the house.<br />\r\nPets are a lot of fun, but they are a lot of work too.<br />\r\nTo be a good pet owner, you have to be very responsible.<br />\r\n2. B&agrave;i dịch: Th&uacute; cưng<br />\r\nC&oacute; nhiều loại động vật kh&aacute;c nhau m&agrave; bạn c&oacute; thể nu&ocirc;i l&agrave;m th&uacute; cưng<br />\r\nLoại th&uacute; cưng th&ocirc;ng thường nhất l&agrave; ch&oacute; v&agrave; m&egrave;o<br />\r\nT&ocirc;i nghĩ rằng loại th&ocirc;ng thường thứ hai l&agrave; chim v&agrave; c&aacute;<br />\r\nT&ocirc;i c&oacute; thể &ocirc;m một ch&uacute; m&egrave;o hoặc một ch&uacute; ch&oacute;<br />\r\nT&ocirc;i c&oacute; thể chơi với m&egrave;o hoặc ch&oacute;, nhưng kh&oacute; c&oacute; thể chơi với chim hoặc c&aacute;<br />\r\nMột số lo&agrave;i chim th&igrave; rất th&ocirc;ng minh, v&agrave; c&oacute; thể dạy ch&uacute;ng nhiều thứ<br />\r\nLũ vẹt rất lanh lợi<br />\r\nV&agrave;i con thậm ch&iacute; c&oacute; thể n&oacute;i<br />\r\nChim thường ở trong lồng chim<br />\r\nC&aacute;c phải sống dưới nước ở trong bể hoặc b&igrave;nh nu&ocirc;i c&aacute;<br />\r\nC&oacute; người nu&ocirc;i chuột nhảy hoặc chuột lang<br />\r\nThậm ch&iacute; c&oacute; cả người nu&ocirc;i chồn nữaT&ocirc;i c&oacute; một người bạn nu&ocirc;i một ch&uacute; thằn lằn<br />\r\nC&ocirc; ấy phải mua dế sống cho con thằn lằn ăn<br />\r\nMột người bạn kh&aacute;c của t&ocirc;i th&igrave; nu&ocirc;i rắn<br />\r\nT&ocirc;i kh&ocirc;ng nghĩ l&agrave; m&igrave;nh sẽ th&iacute;ch nu&ocirc;i rắn<br />\r\nC&oacute; nhiều loại ch&oacute; kh&aacute;c nhau<br />\r\nC&oacute; những loại cho th&igrave; rất to v&agrave; một số th&igrave; nhỏ<br />\r\nCh&oacute; săn Labador l&agrave; một ch&uacute; ch&oacute; lớn<br />\r\nCh&oacute; poodle th&igrave; nhỏ, mặc d&ugrave; cũng c&oacute; những loại ch&oacute; poodle to<br />\r\nMột v&agrave;i ch&uacute; ch&oacute; th&igrave; rất ồn &agrave;o v&agrave; ch&uacute;ng sủa nhiều<br />\r\nNhững giống ch&oacute; kh&aacute;c th&igrave; rất y&ecirc;n lặng v&agrave; nghe lời<br />\r\nT&ocirc;i từng c&oacute; một ch&uacute; ch&oacute;<br />\r\nN&oacute; l&agrave; giống ch&oacute; săn Cocker Spaniel<br />\r\nT&ocirc;i thường đưa n&oacute; đi dạo<br />\r\nCũng c&oacute; nhiều loại m&egrave;o kh&aacute;c nhau<br />\r\nGiống m&egrave;o ưa th&iacute;ch của t&ocirc;i l&agrave; m&egrave;o Th&aacute;i Lan<br />\r\nM&egrave;o Th&aacute;i Lan c&oacute; đ&ocirc;i mắt m&agrave;u xanh<br />\r\nMẹ t&ocirc;i c&oacute; một con m&egrave;o Ba Tư<br />\r\nN&oacute; c&oacute; rất nhiều l&ocirc;ng<br />\r\nMẹ t&ocirc;i bảo rằng n&oacute; thường để rụng l&ocirc;ng khắp nh&agrave;<br />\r\nNu&ocirc;i th&uacute; cưng th&igrave; vui nhưng cũng c&oacute; nhiều việc phải l&agrave;m<br />\r\nĐể trở th&agrave;nh một người chủ tốt, bạn phải rất c&oacute; tr&aacute;ch nhiệm</p>', 'ganc_pet.png', 148, 7, '2021-01-10 05:42:24', '2021-03-29 22:59:35', 'https://www.youtube.com/watch?v=FpzosqXVLeQ', '074W_1050.mp3', 3, 1),
(16, 'FRUIT', '<p>B&agrave;i học li&ecirc;n quan đến chủ đề tr&aacute;i c&acirc;y</p>', '<p>1. Transcript: Fruit<br />\r\nSome fruit grows on trees.<br />\r\nApples grow on trees.<br />\r\nYou can get red, yellow or green apples.<br />\r\nSome apples are green until they ripen; then they turn red.<br />\r\nPeaches grow on trees.<br />\r\nPeaches have a fuzzy skin.<br />\r\nCherries grow on trees.<br />\r\nYou can climb a ladder and pick cherries from the tree.<br />\r\nCherries and peaches have pits inside them.<br />\r\nThe pits are not edible.<br />\r\nPears also grow on trees.<br />\r\nLemons grow on trees.<br />\r\nThey are very sour.<br />\r\nHave you ever picked strawberries?<br />\r\nStrawberries do not grow on trees.<br />\r\nYou have to bend down to pick strawberries.<br />\r\nHave you ever tried strawberry shortcake? It is very good.<br />\r\nGrapes grow on vines.<br />\r\nPeople use grapes to make wine.<br />\r\nThere are many types of berries.<br />\r\nThere are blackberries, blueberries, raspberries and cranberries, just to name a<br />\r\nfew.<br />\r\nSome fruits are more exotic.</p>\r\n\r\n<p>There are mangos and papayas. They don&amp;#39;t grow in Canada.<br />\r\nBananas and oranges don&amp;#39;t grow in a Canadian climate either, but we are able to<br />\r\nbuy them here.<br />\r\nSome fruits have to be peeled, and some can be eaten as they are.<br />\r\nIt is always a good idea to wash fruit before you eat it.<br />\r\nThe farmers spray the crops with pesticides to kill bugs, so it is good to wash that<br />\r\noff.<br />\r\n2. B&agrave;i dịch: Hoa quả</p>\r\n\r\n<p>Một số loại quả mọc tr&ecirc;n c&acirc;y<br />\r\nT&aacute;o mọc tr&ecirc;n c&acirc;y<br />\r\nBạn c&oacute; thể lấy t&aacute;o đỏ, v&agrave;ng hoặc xanh<br />\r\nMột số loại t&aacute;o xanh cho đến khi ch&iacute;n, rồi ch&uacute;ng chuyển sang m&agrave;u đỏ<br />\r\nĐ&agrave;o mọc tr&ecirc;n c&acirc;y<br />\r\nĐ&agrave;o c&oacute; vỏ x&ugrave;<br />\r\nQuả anh đ&agrave;o mọc tr&ecirc;n c&acirc;y<br />\r\nBạn c&oacute; thể tr&egrave;o l&ecirc;n thang v&agrave; h&aacute;i quả anh đ&agrave;o từ tr&ecirc;n c&acirc;y<br />\r\nQuả anh đ&agrave;o v&agrave; đ&agrave;o c&oacute; hạt ở trong<br />\r\nHạt th&igrave; kh&ocirc;ng ăn được<br />\r\nL&ecirc; cũng mọc ở tr&ecirc;n c&acirc;y<br />\r\nChanh mọc ở tr&ecirc;n c&acirc;y<br />\r\nCh&uacute;ng rất chua<br />\r\nBạn đ&atilde; từng h&aacute;i d&acirc;u chưa?<br />\r\nQuả d&acirc;y t&acirc;y kh&ocirc;ng mọc ở tr&ecirc;n c&acirc;y<br />\r\nBạn phải c&uacute;i xuống để h&aacute;i d&acirc;u t&acirc;y<br />\r\nBạn đ&atilde; từng thử b&aacute;nh bơ d&acirc;u t&acirc;y chưa? N&oacute; ngon lắmNho mọc tr&ecirc;n gi&agrave;n nho<br />\r\nNgười ta d&ugrave;ng nho để l&agrave;m rượu<br />\r\nC&oacute; rất nhiều loại quả mọng<br />\r\nChỉ kể t&ecirc;n một v&agrave;i loại quả mọng như quả d&acirc;u đen, quả việt quất, quả m&acirc;m x&ocirc;i,<br />\r\nquả nam việt quất<br />\r\nMột số loại hoa quả l&agrave; c&acirc;y ngoại lai<br />\r\nĐ&oacute; l&agrave; những loại quả như xo&agrave;i v&agrave; đu đủ. Ch&uacute;ng kh&ocirc;ng sinh trưởng được ở Canada<br />\r\nChuối v&agrave; cam cũng kh&ocirc;ng ph&aacute;t triển được dưới kh&iacute; hậu của Canada, nhưng ch&uacute;ng<br />\r\nta c&oacute; thể mua ch&uacute;ng ở đ&acirc;y<br />\r\nMột số loại quả phải được b&oacute;c vỏ, v&agrave; c&oacute; một số loại c&oacute; thể ăn lu&ocirc;n<br />\r\nRửa hoa quả trước khi ăn lu&ocirc;n l&agrave; một suy nghĩ đ&uacute;ng đắn<br />\r\nNhững người n&ocirc;ng d&acirc;n phun thuốc s&acirc;u cho c&acirc;y trồng để diệt bọ v&igrave; vậy tốt hơn hết<br />\r\nl&agrave; n&ecirc;n rửa n&oacute; đi.</p>', 'h2Dk_traicay.jpg', 5, 7, '2021-01-10 05:45:51', '2021-01-10 20:47:16', 'https://www.youtube.com/watch?v=yvH8lNlQkwA', '6LXI_1046.mp3', 3, 1),
(17, 'MUSIC', '<p>B&agrave;i học li&ecirc;n quan chủ đề &acirc;m nhạc</p>', '<p>1. Transcript: Music(1)<br />\r\nIf you were in an orchestra, what would you play?<br />\r\nWould you play a tuba, a trumpet or a saxophone?<br />\r\nPerhaps you would prefer a stringed instrument like a violin or a cello.<br />\r\nMaybe you would enjoy percussion more.<br />\r\nYou could play the kettle drum.<br />\r\nThere are instruments that have keyboards.<br />\r\nA piano and an organ have keyboards.<br />\r\nThere are instruments that have strings on them.<br />\r\nA guitar, banjo and mandolin have strings on them.<br />\r\nThere are instruments that you blow into.<br />\r\nA flute, a French horn and a harmonica are all instruments that you blow into.<br />\r\nThere are instruments that you hit with a stick.<br />\r\nA drum and a cymbal are two things that you would hit with a stick.<br />\r\nIf you are in an orchestra, you have to watch the conductor.<br />\r\nHe will lead you through the piece of music.<br />\r\nYou might just want to be in a band for fun.</p>\r\n\r\n<p>You could join a rock band or a dance band.<br />\r\nSome people learn to read music.<br />\r\nMusic notes are written on a staff.<br />\r\nEach note represents a sound.<br />\r\nThere are whole notes, half notes, quarter notes and eighth notes.<br />\r\nEach one of these is held for a different number of beats.<br />\r\nIt is good to learn about music.<br />\r\nYou have to learn your scales, and learn about sharps and flats.<br />\r\nIf you want to learn how to play an instrument, it is best to take music lessons.</p>\r\n\r\n<p>2. B&agrave;i dịch: &Acirc;m nhạc(1)<br />\r\nNếu bạn ở trong d&agrave;n nhạc, bạn sẽ chơi nhạc cụ n&agrave;o?<br />\r\nBạn sẽ chơi k&egrave;n tuba, k&egrave;n trumpet hay k&egrave;n saxophone?<br />\r\nC&oacute; lẽ bạn th&iacute;ch chơi nhạc cụ d&acirc;y hơn như đ&agrave;n violon hay đ&agrave;n cello<br />\r\nC&oacute; thể bạn sẽ th&iacute;ch chơi bộ trống hơn<br />\r\nBạn c&oacute; thể chơi trống đồng<br />\r\nC&oacute; những nhạc cụ c&oacute; ph&iacute;m bấm<br />\r\nĐ&agrave;n piano v&agrave; đ&agrave;n organ c&oacute; ph&iacute;m bấm<br />\r\nC&oacute; những nhạc cụ c&oacute; d&acirc;y<br />\r\nĐ&agrave;n ghita, đ&agrave;n banjo, đ&agrave;n mandolin l&agrave; những đ&agrave;n c&oacute; d&acirc;yC&oacute; những nhạc cụ m&agrave; bạn chơi bằng c&aacute;ch thổi v&agrave;o n&oacute;<br />\r\nMột c&acirc;y s&aacute;o, một chiếc k&egrave;n Ph&aacute;p v&agrave; một chiếc k&egrave;n harmonica đều l&agrave; những nhạc<br />\r\ncụ m&agrave; bạn c&oacute; thể thổi<br />\r\nC&oacute; những nhạc cụ m&agrave; bạn chơi bằng c&aacute;ch d&ugrave;ng những chiếc gậy để g&otilde;<br />\r\nNếu bạn ở trong một d&agrave;n nhạc, bạn phải quan s&aacute;t nhạc trưởng<br />\r\n&Ocirc;ng ấy sẽ điều khiển bạn chơi th&ocirc;ng qua bản nhạc<br />\r\nC&oacute; thể bạn chỉ muốn ở trong một bạn nhạc cho vui th&ocirc;i<br />\r\nBạn c&oacute; thể tham gia v&agrave;o một ban nhạc rock hoặc ban nhạc dance<br />\r\nMột số người học đọc nhạc<br />\r\nNhững nốt nhạc được viết tr&ecirc;n khu&ocirc;ng nhạc<br />\r\nMỗi nốt nhạc tượng trưng cho một &acirc;m thanh<br />\r\nC&oacute; nốt tr&ograve;n, nốt trắng, nốt đen, v&agrave; nốt m&oacute;c đơn<br />\r\nMỗi nốt n&agrave;y lại giữ một số nhịp kh&aacute;c nhau<br />\r\nThật tốt khi học về &acirc;m nhạc<br />\r\nBạn phải học về thang &acirc;m, v&agrave; học về dấu thăng v&agrave; dấu gi&aacute;ng<br />\r\nNếu bạn muốn học c&aacute;ch chơi một nhạc cụ, tốt nhất l&agrave; n&ecirc;n học những b&agrave;i học về<br />\r\n&acirc;m nhạc</p>', '4toX_nhac.jpg', 0, 7, '2021-01-10 06:05:52', '2021-01-10 06:05:52', 'https://www.youtube.com/watch?v=yqsdO7s_tzY', '9QwM_1056.mp3', 3, 1),
(18, 'MY FAMILY', '<p>B&agrave;i học li&ecirc;n quan chủ đề gia đ&igrave;nh</p>', '<p>1. Transcript: My family<br />\r\nMy grandparents are coming to visit us from Calgary, Alberta.<br />\r\nMy father is very happy because they are his parents, and he is glad that he will see<br />\r\nthem.<br />\r\nWe don&amp;#39;t see them very often because Calgary is a long way from Toronto.<br />\r\nMy grandparents have two sons: my father and my Uncle Bill.<br />\r\nUncle Bill is married to my Aunt Susan.<br />\r\nThey have a daughter who is my cousin.<br />\r\nMy cousin is a lot older than I, so we do not have a lot in common.<br />\r\nThey also have a son who is the same age as me.<br />\r\nHe is my favorite cousin because we both like the same television shows and the same<br />\r\ngames.<br />\r\nI have two brothers and one sister.<br />\r\nMy brothers are both younger than I.<br />\r\nThey are twins, so they have the same birthday.<br />\r\nMy sister is one year older than I.<br />\r\nPeople say that my sister and I look alike.<br />\r\nWe both have blonde hair and blue eyes.<br />\r\nMy mother&amp;#39;s parents live near us.They are the grandmother and grandfather who visit us often.<br />\r\nMy mother does not have any brothers or sisters.<br />\r\nShe is an only child.<br />\r\nI like it when all my family is together.<br />\r\nI don&amp;#39;t have a lot of cousins like some people do, but I have fun with my relatives.<br />\r\nMy uncle will often take my cousin and me to the movies.<br />\r\nI like to take my grandparents for walks so that they can see my school, and they can<br />\r\nmeet my friends.<br />\r\nMy parents talk to my brothers, my sister and I a lot.<br />\r\nWe are a very close-knit family.<br />\r\nPeople who have close families are very lucky.<br />\r\n2. B&agrave;i dịch: Gia đ&igrave;nh của t&ocirc;i<br />\r\n&Ocirc;ng b&agrave; (nội) t&ocirc;i tới thăm ch&uacute;ng t&ocirc;i từ Calgary, Alberta.<br />\r\nBố t&ocirc;i rất vui v&igrave; họ l&agrave; bố mẹ của &ocirc;ng, v&agrave; &ocirc;ng cũng mừng v&igrave; &ocirc;ng sẽ sớm thấy họ.<br />\r\nCh&uacute;ng t&ocirc;i kh&ocirc;ng hay gặp &ocirc;ng b&agrave; thường xuy&ecirc;n v&igrave; Calgary rất xa Toronto.<br />\r\n&Ocirc;ng b&agrave; t&ocirc;i c&oacute; hai con trai: bố t&ocirc;i v&agrave; b&aacute;c Bill của t&ocirc;i.<br />\r\nB&aacute;c Bill cưới b&aacute;c Susan của t&ocirc;i.<br />\r\nHọ c&oacute; một đứa con g&aacute;i l&agrave; chị họ của t&ocirc;i.<br />\r\nChị họ của t&ocirc;i lớn hơn t&ocirc;i rất nhiều, v&igrave; thế ch&uacute;ng t&ocirc;i kh&ocirc;ng c&oacute; nhiều điểm chung<br />\r\nvới nhau.<br />\r\nHọ cũng c&oacute; một cậu con trai c&ugrave;ng tuổi với t&ocirc;i.<br />\r\nAnh ấy l&agrave; anh họ t&ocirc;i y&ecirc;u th&iacute;ch v&igrave; ch&uacute;ng t&ocirc;i đều th&iacute;ch những chương tr&igrave;nh truyền<br />\r\nh&igrave;nh giống nhau v&agrave; những tr&ograve; chơi giống nhau.<br />\r\nT&ocirc;i c&oacute; hai em trai v&agrave; một chị g&aacute;i.Hai em trai t&ocirc;i đều b&eacute; hơn t&ocirc;i.<br />\r\nHai đứa l&agrave; sinh đ&ocirc;i, v&igrave; thế ch&uacute;ng c&oacute; c&ugrave;ng ng&agrave;y sinh nhật.<br />\r\nChị g&aacute;i t&ocirc;i hơn t&ocirc;i một tuổi.<br />\r\nMọi người n&oacute;i chị t&ocirc;i v&agrave; t&ocirc;i tr&ocirc;ng giống nhau.<br />\r\nCh&uacute;ng t&ocirc;i đều c&oacute; t&oacute;c v&agrave;ng v&agrave; mắt xanh (da trời).<br />\r\n&Ocirc;ng b&agrave; ngoại t&ocirc;i sống gần ch&uacute;ng t&ocirc;i.<br />\r\n&Ocirc;ng v&agrave; b&agrave; thường xuy&ecirc;n đến thăm ch&uacute;ng t&ocirc;i.<br />\r\nMẹ t&ocirc;i kh&ocirc;ng c&oacute; anh em trai hay g&aacute;i n&agrave;o.<br />\r\nB&agrave; l&agrave; con một.<br />\r\nT&ocirc;i rất th&iacute;ch khi cả gia đ&igrave;nh ch&uacute;ng t&ocirc;i ở c&ugrave;ng với nhau.<br />\r\nT&ocirc;i kh&ocirc;ng c&oacute; nhiều anh chị em họ như những người kh&aacute;c, nhưng t&ocirc;i chơi rất vui<br />\r\nvới anh em họ h&agrave;ng.<br />\r\nB&aacute;c của t&ocirc;i thường đưa c&aacute;c anh chị họ v&agrave; t&ocirc;i đi xem phim.<br />\r\nT&ocirc;i th&iacute;ch đưa &ocirc;ng b&agrave; đi dạo nhờ đ&oacute; họ c&oacute; thể thấy trường học của t&ocirc;i, v&agrave; gặp gỡ<br />\r\nbạn b&egrave; t&ocirc;i.<br />\r\nBố mẹ t&ocirc;i n&oacute;i chuyện với c&aacute;c em trai, chị g&aacute;i v&agrave; t&ocirc;i rất nhiều.<br />\r\nCh&uacute;ng t&ocirc;i l&agrave; một gia đ&igrave;nh rất khăng kh&iacute;t với nhau.<br />\r\nNhững người c&oacute; gia đ&igrave;nh th&acirc;n thiết với nhau đều rất may mắn.</p>', 'ZkfS_gia đình.jpg', 1, 7, '2021-01-10 06:07:45', '2021-01-21 08:55:55', 'https://www.youtube.com/watch?v=6GMY_uChs0A', 'Y6X1_Bản sao của Bản sao của 1071.mp3', 3, 1),
(19, 'Luyện nghe qua Phim (1)', '<p>B&agrave;i học luyện nghe qua video phim tiếng Anh</p>', '<h3 style=\"color:#aaaaaa; font-style:italic\">&nbsp;</h3>\r\n\r\n<h3 style=\"color:#aaaaaa; font-style:italic\">&nbsp;</h3>\r\n\r\n<h2 style=\"font-style:italic\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:13.0pt\">Để kỹ năng nghe kh&ocirc;ng c&ograve;n l&agrave; nỗi &aacute;m ảnh sau khi tham gia <strong>Kh&oacute;a học luyện nghe Cao Cấp</strong></span></span></span></h2>\r\n\r\n<h2 style=\"font-style:italic\"><span style=\"font-size:12pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\"><span style=\"font-size:13.0pt\">Sau khi đ&atilde; trải qua&nbsp;<strong>Kh&oacute;a học luyện nghe cơ bản</strong>, chắc hẳn bạn đ&atilde; kh&ocirc;ng c&ograve;n bỡ ngỡ với m&ocirc;n ngoại ngữ th&uacute; vị n&agrave;y. Thế nhưng con đường để đạt được mục ti&ecirc;u l&agrave; nghe su&ocirc;n sẻ những g&igrave; người bản ngữ n&oacute;i vẫn c&ograve;n rất xa v&agrave; đ&ograve;i hỏi nỗ lực kh&ocirc;ng ngừng nghỉ. V&igrave; vậy đừng ngại ngần tham gia&nbsp;kh&oacute;a học luyện nghe trung cấp&nbsp;của ch&uacute;ng t&ocirc;i để tiến gần th&ecirc;m một bước tới th&agrave;nh c&ocirc;ng.</span></span></span></h2>\r\n\r\n<h2 style=\"font-style:italic\"><span style=\"font-size:13.0pt\"><span style=\"font-family:&quot;Times New Roman&quot;,serif\">Luyện nghe qua phim hoạt h&igrave;nh/ điện ảnh, gồm 4 lần: lần 1 kh&ocirc;ng subtitle, lần 2 c&oacute; sub, lần 3 liệt k&ecirc; từ keyword.</span></span></h2>\r\n\r\n<p>&nbsp;</p>', 'EYiI_siêu nhân.jpg', 2, 7, '2021-01-10 06:12:47', '2021-01-21 07:07:55', 'https://www.youtube.com/watch?v=Rnwwo9Zol6w', '', 3, 1),
(20, 'Luyện nghe qua Phim (2)', '<p>B&agrave;i học luyện nghe qua video phim tiếng Anh</p>', '<h2>Để kỹ năng nghe kh&ocirc;ng c&ograve;n l&agrave; nỗi &aacute;m ảnh sau khi tham gia <strong>Kh&oacute;a học luyện nghe Cao Cấp</strong></h2>\r\n\r\n<h2>Sau khi đ&atilde; trải qua&nbsp;<strong>Kh&oacute;a học luyện nghe cơ bản</strong>, chắc hẳn bạn đ&atilde; kh&ocirc;ng c&ograve;n bỡ ngỡ với m&ocirc;n ngoại ngữ th&uacute; vị n&agrave;y. Thế nhưng con đường để đạt được mục ti&ecirc;u l&agrave; nghe su&ocirc;n sẻ những g&igrave; người bản ngữ n&oacute;i vẫn c&ograve;n rất xa v&agrave; đ&ograve;i hỏi nỗ lực kh&ocirc;ng ngừng nghỉ. V&igrave; vậy đừng ngại ngần tham gia&nbsp;kh&oacute;a học luyện nghe trung cấp&nbsp;của ch&uacute;ng t&ocirc;i để tiến gần th&ecirc;m một bước tới th&agrave;nh c&ocirc;ng.</h2>\r\n\r\n<h2>Luyện nghe qua phim hoạt h&igrave;nh/ điện ảnh, gồm 4 lần: lần 1 kh&ocirc;ng subtitle, lần 2 c&oacute; sub, lần 3 liệt k&ecirc; từ keyword.</h2>', 'v0OX_phim2.jpg', 2, 8, '2021-01-10 06:18:35', '2021-01-10 06:19:48', 'https://www.youtube.com/watch?v=pt2atk-5_yQ', '', 3, 1),
(21, 'Vocaburaly Have/had/had', '<p>B&agrave;i học vocabulary về have/had/had</p>', '<p>Have/had/had<br />\r\nW hat can you have?<br />\r\nYou can ...<br />\r\n1 have lunch<br />\r\n2 have a party<br />\r\n3 have a lesson<br />\r\n4 have a cup of tea/coffee<br />\r\n5 have a shower<br />\r\nOther things you can have<br />\r\nexample other things<br />\r\n1 lunch dinner breakfast a meal something to eat<br />\r\n2 a party a meeting a competition a game (of football/chess/cards)<br />\r\n3 a lesson an exam homework an appointment (with the dentist)<br />\r\n4 .tea/coffee a drink a sandwich an ice-cream some cheese<br />\r\n5 a shower a bath a swim a sauna</p>\r\n\r\n<p>Expressions with have<br />\r\nIs that your camera? Can I have a look?<br />\r\n(= look at it)<br />\r\nIs that your bicycle? Can I have a go? (= ride it)<br />\r\nGoodbye! Have a good journey! (= somebody is going away)<br />\r\nDo you have a moment? (= have some time) Can I have a word with you? (= speak to you)<br />\r\nWe always have a good time in our English lessons (= fun; we enjoy them)<br />\r\nI&rsquo;m going to have my hair cut. See you later. Can you meet me at the hairdresser&rsquo;s?<br />\r\nI want to learn to ski but I don&rsquo;t have the time.<br />\r\nHave + got (speaking/informal) = have (writing/formal)<br />\r\nI&rsquo;ve got three sisters. Have you got any brothers and sisters?<br />\r\nMy house is big. It&rsquo;s got five bedrooms and three bathrooms.<br />\r\nWe&rsquo;ve got ten minutes before the train goes.<br />\r\nHave you got a pen?<br />\r\n(In a shop) A: Do you sell postcards? B: Yes, but we haven&rsquo;t got any at the moment.<br />\r\nI&rsquo;ve got a problem. Can I have a word with you?<br />\r\nI&rsquo;ve got a cold / a headache.<br />\r\nHave to<br />\r\nWe use have to when the situation means you must do something.<br />\r\nThe museum&rsquo;s not free. You have to pay $10 to go in.<br />\r\nAll students have to do the exam.<br />\r\nI haven&rsquo;t got a car, so I have to walk to school every day.</p>', '2rpc_have.jpg', 4, 1, '2021-01-10 06:45:57', '2021-01-21 08:55:25', NULL, '', 1, 1),
(22, 'Grammar (1)', '<p>b&agrave;i học li&ecirc;n quan đến th&igrave; hiện tại đơn</p>', '<h3>Định nghĩa</h3>\r\n\r\n<p><strong>Hiện tại đơn</strong>&nbsp;<em>(Present simple)&nbsp;</em>l&agrave; một trong bốn cấu tr&uacute;c sử dụng th&igrave; hiện tại của động từ để n&oacute;i về hiện tại. Cấu tr&uacute;c n&agrave;y&nbsp;được d&ugrave;ng để n&oacute;i về một h&agrave;nh động thường xuy&ecirc;n, đ&ocirc;i khi hoặc kh&ocirc;ng bao giờ xảy ra ở hiện tại.</p>\r\n\r\n<p>B&ecirc;n cạnh đ&oacute;, hiện tại đơn&nbsp;c&ograve;n được d&ugrave;ng để n&oacute;i về những việc được l&ecirc;n kế hoạch sẵn hoặc&nbsp;n&oacute;i về sự thật.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>I ride my bike to school every day.</p>\r\n\r\n<p>Ng&agrave;y n&agrave;o t&ocirc;i cũng đạp xe đến trường.</p>\r\n\r\n<p>The sun rises in the East.</p>\r\n\r\n<p>Mặt trời mọc ở đằng Đ&ocirc;ng.</p>', 'd3ej_edfef87ae338645c8d3a3d99f682aaab_thi-hien-tai-don.jpg', 33, 4, '2021-01-10 06:52:59', '2021-01-21 07:44:46', NULL, '', 2, 1),
(23, 'Speaking (1)', '<p>b&agrave;i học cải thiện kỹ năng qua b&agrave;i h&aacute;t</p>', '<h3>Where there&#39;s a will, there&#39;s a way, kinda beautiful<br />\r\nAnd every night has its day, so magical<br />\r\nAnd if there&#39;s love in this life, there&#39;s no obstacle<br />\r\nThat can&#39;t be defeated<br />\r\n<br />\r\n[Pre-Chorus: Simon Aldred]<br />\r\nFor every tyrant a tear for the vulnerable<br />\r\nIn every lost soul the bones of a miracle<br />\r\nFor every dreamer a dream we&#39;re unstoppable<br />\r\nWith something to believe in<br />\r\n<br />\r\n[Chorus: Simon Aldred]<br />\r\nMonday left me broken<br />\r\nTuesday I was through with hoping<br />\r\nWednesday my empty arms were open<br />\r\nThursday waiting for love, waiting for love<br />\r\nThank the stars it&#39;s Friday<br />\r\nI&#39;m burning like a fire gone wild on Saturday<br />\r\nGuess I won&#39;t be coming to church on Sunday<br />\r\nI&#39;ll be waiting for love, waiting for love<br />\r\nTo come around<br />\r\n<br />\r\n[Verse 2: Simon Aldred]<br />\r\nWe are one of a kind irreplaceable<br />\r\nHow did I get so blind and so cynical<br />\r\nIf theres love in this life we&#39;re unstoppable<br />\r\nNo we can&#39;t be defeated<br />\r\n<br />\r\n[Chorus: Simon Aldred]<br />\r\nMonday left me broken<br />\r\nTuesday I was through with hoping<br />\r\nWednesday my empty arms were open<br />\r\nThursday waiting for love, waiting for love<br />\r\nThank the stars it&#39;s Friday<br />\r\nI&#39;m burning like a fire gone wild on Saturday<br />\r\nGuess I won&#39;t be coming to church on Sunday<br />\r\nI&#39;ll be waiting for love, waiting for love<br />\r\nTo come around</h3>', '7Xho_waiting for love.jpg', 2, 9, '2021-01-10 06:58:36', '2021-01-14 21:27:45', 'https://www.youtube.com/watch?v=cHHLHGNpCSA', '', 4, 1),
(24, 'Writing(1)', '<p>b&agrave;i học n&acirc;ng cao kỹ năng viết</p>', '<h1>B&agrave;i luận trần thuật 1</h1>\r\n\r\n<h3><strong>Định nghĩa</strong></h3>\r\n\r\n<p><strong>B&agrave;i văn trần thuật</strong>&nbsp;<em>(Narrative essay)&nbsp;</em>&ndash; hay c&ograve;n gọi l&agrave; b&agrave;i văn kể chuyện &ndash; l&agrave; thể loại văn bản tr&igrave;nh b&agrave;y diễn biến hoặc qu&aacute; tr&igrave;nh ph&aacute;t triển của một sự việc, sự kiện hoặc hiện tượng từ g&oacute;c nh&igrave;n của người viết. Mục ti&ecirc;u của b&agrave;i văn trần thuật l&agrave; tạo ra một c&acirc;u chuyện cuốn h&uacute;t v&agrave; truyền tải một th&ocirc;ng điệp g&igrave; đ&oacute; đến với người đọc.&nbsp;</p>\r\n\r\n<p><em>V&iacute; dụ:</em></p>\r\n\r\n<p>An occasion when you experienced rejection.&nbsp;<em>(Kể về một lần bạn trải nghiệm cảm gi&aacute;c bị từ chối.)</em></p>\r\n\r\n<p>Write about a time you got hurt on the playground. What happened?&nbsp;<em>(Viết về một lần bạn bị thương khi đang chơi đ&ugrave;a. Chuyện g&igrave; đ&atilde; diễn ra?)</em></p>\r\n\r\n<p>Talk about your most exhausting exam.&nbsp;<em>(Kể về kỳ thi vất vả nhất của bạn.)</em></p>\r\n\r\n<p>The funniest way you met a friend.&nbsp;<em>(Kể về lần gặp gỡ th&uacute; vị nhất của bạn với một người bạn.)</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Thể loại</strong></p>\r\n\r\n<p>Dựa v&agrave;o mục đ&iacute;ch v&agrave; đặc điểm, b&agrave;i văn trần thuật c&oacute; thể được chia ra l&agrave;m hai loại:</p>\r\n\r\n<p><strong>Thể loại 1:&nbsp;B&agrave;i văn trần thuật sự thật</strong>&nbsp;<em>(non-fiction):</em>&nbsp;Được sử dụng để mi&ecirc;u tả, trần thuật lại qu&aacute; tr&igrave;nh, diễn biến của một sự kiện c&oacute; thật.</p>\r\n\r\n<p><em>V&iacute; dụ:</em></p>\r\n\r\n<p>An example of a rebellious act from your life.</p>\r\n\r\n<p>Talk about the first time you took part in a big school event.</p>\r\n\r\n<p><strong>Thể loại 2: B&agrave;i văn kể chuyện s&aacute;ng tạo</strong><em>&nbsp;(fiction):</em>&nbsp;Được sử dụng để kể một c&acirc;u chuyện hư cấu hoặc giả tưởng.</p>\r\n\r\n<p><em>V&iacute; dụ:</em></p>\r\n\r\n<p>If you were a director, what movie would you want to shoot?</p>\r\n\r\n<p>If you were a TV character, how would your day be?</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>Ph&acirc;n biệt thể loại:&nbsp;</strong><strong>B&agrave;i văn trần thuật v&agrave; b&agrave;i văn mi&ecirc;u tả</strong></h3>\r\n\r\n<p>Đ&ocirc;i khi ta sẽ dễ cảm thấy bối rối khi phải x&aacute;c định v&agrave; ph&acirc;n biệt giữa hai thể loại văn bản n&agrave;y. Đơn cử như với đề b&agrave;i&nbsp;<em>&ldquo;Talk about the first day you moved into a dorm,&rdquo;</em>&nbsp;ta c&oacute; thể sử dụng cả thể loại văn trần thuật lẫn b&agrave;i văn mi&ecirc;u tả. Tuy nhi&ecirc;n, điểm mấu chốt để ph&acirc;n biệt hai thể loại văn bản n&agrave;y ch&iacute;nh l&agrave; mục đ&iacute;ch của người viết.</p>\r\n\r\n<p>Văn bản trần thuật&nbsp;d&ugrave;ng để kể lại một c&acirc;u chuyện, một chuỗi sự kiện với cốt truyện, nh&acirc;n vật, t&igrave;nh tiết r&otilde; r&agrave;ng. Mi&ecirc;u tả chỉ l&agrave; yếu tố phụ đ&oacute;ng vai tr&ograve; bổ sung chi tiết cho b&agrave;i văn.</p>\r\n\r\n<p>Văn bản mi&ecirc;u tả&nbsp;d&ugrave;ng để thể hiện, diễn tả lại đặc điểm của một sự kiện, hiện tượng n&agrave;o đ&oacute; gi&uacute;p người đọc h&igrave;nh dung được đối tượng đang được n&oacute;i đến. Trần thuật chỉ l&agrave; yếu tố phụ đ&oacute;ng vai tr&ograve; gi&uacute;p người đọc di chuyển điểm nh&igrave;n hoặc nhận biết sự biến đổi của đối tượng mi&ecirc;u tả theo thời gian.</p>\r\n\r\n<p>Như vậy, với đề b&agrave;i c&oacute; những từ như<em><strong>&nbsp;&ldquo;narrate, retell,&hellip;&rdquo;</strong></em>&nbsp;ta n&ecirc;n sử dụng thể loại&nbsp;văn trần thuật&nbsp;v&agrave; ngược lại, đề b&agrave;i c&oacute; đề cập đến những từ như&nbsp;<em><strong>&ldquo;describe, give description,&hellip;&rdquo;</strong></em>&nbsp;sẽ y&ecirc;u cầu bạn sử dụng thể loại&nbsp;văn mi&ecirc;u tả. Trong trường hợp đề b&agrave;i kh&ocirc;ng ghi r&otilde; y&ecirc;u cầu, bạn c&oacute; thể xem x&eacute;t v&agrave; lựa chọn một trong hai thể loại n&oacute;i tr&ecirc;n để ứng dụng v&agrave;o b&agrave;i viết của m&igrave;nh.</p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<h4><strong>Ph&acirc;n biệt thể loại:&nbsp;B&agrave;i văn trần thuật v&agrave; c&acirc;u chuyện/t&aacute;c phẩm văn học</strong></h4>\r\n\r\n<p>Tuy b&agrave;i văn trần thuật c&oacute; bản chất l&agrave; một c&acirc;u chuyện nhưng giữa thể loại văn bản học thuật n&agrave;y với một t&aacute;c phẩm văn học vẫn c&oacute; những điểm kh&aacute;c biệt r&otilde; r&agrave;ng:</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&nbsp;</th>\r\n			<th>B&agrave;i văn trần thuật</th>\r\n			<th>T&aacute;c phẩm văn học</th>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Cấu tr&uacute;c</strong></td>\r\n			<td>Phải đảm bảo cấu tr&uacute;c cơ bản của một b&agrave;i viết học thuật với ba phần (c&oacute; thể khuyết phần kết b&agrave;i).</td>\r\n			<td>Kh&ocirc;ng c&oacute; cấu tr&uacute;c nhất định, t&ugrave;y thuộc v&agrave;o t&aacute;c giả.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>C&acirc;u chủ đề</strong></td>\r\n			<td>C&oacute; c&acirc;u chủ đề ở phần mở b&agrave;i nhằm giới thiệu chủ đề trước khi đến với nội dung ch&iacute;nh.</td>\r\n			<td>Kh&ocirc;ng c&oacute; c&acirc;u chủ đề, thường x&acirc;y dựng theo chủ đề ch&iacute;nh (theme) v&agrave; buộc người xem phải nhận ra trong qu&aacute; tr&igrave;nh đọc.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ r&otilde; r&agrave;ng</strong></td>\r\n			<td>B&agrave;i viết phải c&oacute; quan điểm r&otilde; r&agrave;ng, gi&uacute;p người học nắm sơ lược về c&acirc;u chuyện trước khi đi v&agrave;o chi tiết. Đồng thời phải c&oacute; kết th&uacute;c r&otilde; r&agrave;ng nhằm chứng minh chủ đề được n&ecirc;u ở phần đầu.</td>\r\n			<td>Phong c&aacute;ch viết t&ugrave;y thuộc v&agrave;o t&aacute;c giả, c&oacute; thể sử dụng kết th&uacute;c mở để người đọc tự nhận định b&agrave;i học đằng sau t&aacute;c phẩm.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Ng&ocirc;i kể</strong></td>\r\n			<td>Được kể bằng ng&ocirc;i thứ nhất theo trải nghiệm của người viết.</td>\r\n			<td>C&oacute; thể viết ở ng&ocirc;i thứ nhất hoặc ng&ocirc;i thứ ba do hư cấu.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Mạch &yacute;</strong></td>\r\n			<td>Được ph&aacute;t triển theo thứ tự thời gian, kh&ocirc;ng đảo lộn thứ tự.</td>\r\n			<td>T&igrave;nh tiết ph&aacute;t triển t&ugrave;y thuộc v&agrave;o phong c&aacute;ch của người viết, c&oacute; thể theo kiểu chương hồi hoặc đan xen.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Quy tr&igrave;nh viết</strong></h3>\r\n\r\n<h4><strong>Bước 1:</strong>&nbsp;X&aacute;c định cốt truyện</h4>\r\n\r\n<p>Cốt truyện &ndash; hay những diễn biến, sự việc trong b&agrave;i viết &ndash; n&ecirc;n được l&agrave;m r&otilde;. Bạn n&ecirc;n liệt k&ecirc; ra tất cả c&aacute;c sự kiện trong chuỗi diễn biến v&agrave; tiến h&agrave;nh chọn lọc những sự kiện sẽ được chọn để đề cập đến trong b&agrave;i văn.</p>\r\n\r\n<h4><strong>Bước 2:&nbsp;</strong>Lập d&agrave;n &yacute;</h4>\r\n\r\n<p>Việc lập d&agrave;n &yacute; sẽ gi&uacute;p bạn đảm bảo b&agrave;i viết được đầy đủ c&aacute;c &yacute; v&agrave; ch&iacute;nh x&aacute;c nội dung &ndash; một trong những yếu tố quan trọng nhất của thể loại b&agrave;i văn trần thuật. H&atilde;y nhớ rằng những sự kiện trong b&agrave;i viết n&ecirc;n được sắp xếp theo tr&igrave;nh tự thời gian.</p>\r\n\r\n<h4><strong>Bước 3:&nbsp;</strong>Tiến h&agrave;nh viết</h4>\r\n\r\n<p>Đ&acirc;y l&agrave; giai đoạn ch&iacute;nh trong quy tr&igrave;nh viết. Dựa v&agrave;o d&agrave;n &yacute; đ&atilde; lập ở bước 2, h&atilde;y viết v&agrave; khai triển nội dung th&agrave;nh một b&agrave;i văn ho&agrave;n chỉnh với ba phần cơ bản. Với thể loại b&agrave;i văn trần thuật, người viết cần đảm bảo đầy đủ c&aacute;c yếu tố sau trong b&agrave;i văn:</p>\r\n\r\n<p>1. Sử dụng ng&ocirc;i kể thứ nhất.</p>\r\n\r\n<p>2. C&aacute;c sự kiện v&agrave; tr&igrave;nh tự diễn biến phải được tr&igrave;nh b&agrave;y r&otilde; r&agrave;ng.</p>\r\n\r\n<p>3. C&aacute;c sự kiện trong phần th&acirc;n b&agrave;i được tr&igrave;nh b&agrave;y theo tr&igrave;nh tự thời gian.</p>\r\n\r\n<p>4. C&aacute;c &yacute; trong phần th&acirc;n b&agrave;i được li&ecirc;n kết bằng những từ nối chỉ tr&igrave;nh tự thời gian. &nbsp;</p>\r\n\r\n<h4><strong>Bước 4:&nbsp;</strong>Đọc lại v&agrave; chỉnh sửa</h4>\r\n\r\n<p>Sau khi ho&agrave;n tất, bạn cần đối chiếu một lần nữa với d&agrave;n &yacute; ban đầu để đảm bảo b&agrave;i viết đ&atilde; đầy đủ tất cả c&aacute;c &yacute; v&agrave; nội dung ph&ugrave; hợp với c&aacute;c ti&ecirc;u ch&iacute; được đề ra ban đầu. Ngo&agrave;i ra, bạn c&oacute; thể nhờ sự trợ gi&uacute;p v&agrave; kiểm tra của người kh&aacute;c để b&agrave;i viết c&oacute; t&iacute;nh kh&aacute;ch quan v&agrave; ho&agrave;n thiện hơn.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3><strong>C&acirc;u chủ đề</strong></h3>\r\n\r\n<p>Trong b&agrave;i văn trần thuật, c&acirc;u chủ đề phải n&ecirc;n được chủ đề ch&iacute;nh v&agrave; mục đ&iacute;ch, nội dung người viết muốn truyền tải th&ocirc;ng qua c&acirc;u chuyện sắp tới. Đ&acirc;y l&agrave; yếu tố cần thiết để ph&acirc;n r&otilde; giữa b&agrave;i văn trần thuật v&agrave; một c&acirc;u chuyện hoặc t&aacute;c phẩm văn học.</p>\r\n\r\n<p><em>V&iacute; dụ:</em></p>\r\n\r\n<p>In elementary school, I had many experiences that garnered memories.&nbsp;</p>\r\n\r\n<p>I dreamt of seeing London, Paris, Venice, etc., but my first real chance came as a surprise.</p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Lập d&agrave;n &yacute;</strong></h3>\r\n\r\n<p>D&agrave;n &yacute; cơ bản của b&agrave;i văn trần thuật c&oacute; định dạng như sau:</p>\r\n\r\n<p><strong>TITLE</strong><br />\r\n<br />\r\n<strong>I.&nbsp;Introduction</strong><br />\r\nThesis Statement<br />\r\n<br />\r\n<strong>II.&nbsp;Body</strong><br />\r\nAct 1<br />\r\nAct 2<br />\r\nAct 3<br />\r\n&hellip;<br />\r\n<br />\r\n<strong>III. Conclusion</strong><br />\r\nConcluding sentence(s)</p>', 'df8T_pv-5-01.png', 4, 11, '2021-01-10 07:01:43', '2021-01-14 21:38:37', NULL, '', 5, 1);
INSERT INTO `course` (`idkh`, `namekh`, `tomtac`, `noidung`, `hinh`, `soluotxem`, `idlevel`, `created_at`, `updated_at`, `linkyoutube`, `media`, `idcategory`, `id`) VALUES
(34, 'Danh Từ', '<p>B&agrave;i học cơ bản về danh từ</p>', '<p><strong>Danh từ</strong>&nbsp;<em>(Nouns - viết tắt l&agrave; n.)&nbsp;</em>l&agrave; một trong bốn loại từ ch&iacute;nh b&ecirc;n cạnh động từ, t&iacute;nh từ v&agrave; trạng từ. Danh từ được d&ugrave;ng để n&oacute;i về người, nơi chốn, sự vật, sự việc, kh&aacute;i niệm&nbsp;hoặc &yacute; nghĩ.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Apple, pen, love, English, book.</strong></p>\r\n\r\n<h3>Thể loại: X&eacute;t về mục đ&iacute;ch sử dụng</h3>\r\n\r\n<p>X&eacute;t về mục đ&iacute;ch sử dụng, danh từ c&oacute; thể được chia l&agrave;m hai loại:&nbsp;<strong>Danh từ chung</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ ri&ecirc;ng</strong>.</p>\r\n\r\n<p><strong>Danh từ chung</strong><em>&nbsp;(Common nouns):&nbsp;</em>L&agrave; danh từ gọi chung của loại sự vật, sự việc hoặc hiện tượng.</p>\r\n\r\n<p><strong>Danh từ ri&ecirc;ng&nbsp;</strong><em>(Proper nouns):&nbsp;</em>L&agrave; t&ecirc;n gọi ri&ecirc;ng gi&uacute;p x&aacute;c định một người, sự vật, sự việc&nbsp;hoặc hiện tượng cụ thể. Trong văn viết, danh từ ri&ecirc;ng được viết hoa chữ c&aacute;i đầu ti&ecirc;n.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Common nouns:</strong>&nbsp;Book, town, child</p>\r\n\r\n<p><strong>Danh từ chung:</strong>&nbsp;S&aacute;ch, thị trấn, trẻ con</p>\r\n\r\n<p><strong>Proper nouns:</strong>&nbsp;Eiffel Tower, Susan, Hummingbird Avenue</p>\r\n\r\n<p><strong>Danh từ ri&ecirc;ng:</strong>&nbsp;Th&aacute;p Eiffel, Susan, Đại lộ Hummingbird</p>\r\n\r\n<h3>Thể loại: X&eacute;t về &yacute; nghĩa</h3>\r\n\r\n<p>X&eacute;t về &yacute; nghĩa, danh từ c&oacute; thể được chia l&agrave;m hai loại:&nbsp;<strong>Danh từ cụ thể</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ trừu tượng</strong>.</p>\r\n\r\n<p><strong>Danh từ cụ thể&nbsp;</strong><em>(Concrete nouns)</em>: L&agrave; danh từ n&oacute;i về sự vật hữu h&igrave;nh&nbsp;m&agrave; ta c&oacute; thể nh&igrave;n, chạm, ngửi, nghe thấy hoặc nếm được.</p>\r\n\r\n<p><strong>Danh từ trừu tượng&nbsp;</strong><em>(Abstract nouns)</em>: Danh từ n&oacute;i về &yacute; tưởng, chất lượng, điều kiện cũng như&nbsp;những thứ v&ocirc; h&igrave;nh,&nbsp;kh&ocirc;ng thể nh&igrave;n thấy hay chạm v&agrave;o.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Concrete nouns:</strong>&nbsp;Chair, table, car</p>\r\n\r\n<p><strong>Danh từ cụ thể:&nbsp;</strong>Ghế, b&agrave;n, xe &ocirc; t&ocirc;</p>\r\n\r\n<p><strong>Abstract nouns:&nbsp;</strong>Love, happiness, excitement</p>\r\n\r\n<p><strong>Danh từ trừu tượng:</strong>&nbsp;T&igrave;nh y&ecirc;u, hạnh ph&uacute;c, sự vui sướng</p>\r\n\r\n<h3>Thể loại: X&eacute;t về khả năng đếm</h3>\r\n\r\n<p>X&eacute;t về khả năng đếm, danh từ c&oacute; thể được chia l&agrave;m hai loại:&nbsp;<strong>Danh từ đếm được</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ kh&ocirc;ng đếm được</strong>.</p>\r\n\r\n<p><strong>Danh từ đếm được&nbsp;</strong><em>(Countable nouns)</em>: L&agrave; danh từ bạn c&oacute; thể d&ugrave;ng số để đếm. Danh từ đếm được c&oacute; cả dạng số &iacute;t v&agrave; số nhiều. Đa số c&aacute;c danh từ tiếng Anh l&agrave; danh từ đếm được.</p>\r\n\r\n<p><strong>Danh từ kh&ocirc;ng đếm được&nbsp;</strong><em>(Uncountable nouns)</em>: L&agrave; danh từ kh&ocirc;ng đi với c&aacute;c con số - ta kh&ocirc;ng thể d&ugrave;ng số để đếm. Những từ n&agrave;y thường được d&ugrave;ng nhiều ở dạng số &iacute;t.&nbsp;</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Countable nouns:&nbsp;</strong>Dog, neighborhood, class</p>\r\n\r\n<p><strong>Danh từ đếm được:</strong>&nbsp;Con ch&oacute;, khu phố, lớp học</p>\r\n\r\n<p><strong>Uncountable nouns:</strong>&nbsp;Furniture, bread, milk</p>\r\n\r\n<p><strong>Danh từ kh&ocirc;ng đếm được:&nbsp;</strong>Nội thất, b&aacute;nh m&igrave;, sữa</p>', 'Pr8l_noun-1510656126.jpg', 4, 4, '2021-01-21 08:31:08', '2021-01-21 09:42:30', 'https://www.youtube.com/watch?v=9uE7dWl-Gk8', '', 2, 1),
(35, 'Danh từ (2)', '<p>B&agrave;i học cơ bản về danh từ tập 2</p>', '<h3>Thể loại: X&eacute;t về số lượng</h3>\r\n\r\n<p>X&eacute;t về số lượng, danh từ c&oacute; thể được chia l&agrave;m hai loại ch&iacute;nh -&nbsp;<strong>Danh từ số &iacute;t</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ số nhiều&nbsp;</strong>- v&agrave; nh&oacute;m đặc biệt&nbsp;<strong>danh từ tập hợp</strong>.</p>\r\n\r\n<p><strong>Danh từ số &iacute;t</strong><em>&nbsp;(Singular nouns):</em>&nbsp;L&agrave; danh từ đếm được d&ugrave;ng chỉ&nbsp;một đơn vị người/vật duy nhất. Danh từ số &iacute;t thường d&ugrave;ng với mạo từ&nbsp;<em>a/an, the&nbsp;</em>hoặc lượng từ như&nbsp;<em>one</em>.</p>\r\n\r\n<p><strong>Danh từ số nhiều&nbsp;</strong><em>(Plural nouns):</em>&nbsp;L&agrave; danh từ đếm được d&ugrave;ng chỉ nhiều hơn một đơn vị người/vật. Danh từ số nhiều thường được th&ecirc;m hậu tố&nbsp;<em><strong>-s/-es</strong></em>&nbsp;chỉ số nhiều.&nbsp;</p>\r\n\r\n<p><strong>Danh từ tập hợp&nbsp;</strong><em>(Collective&nbsp;nouns)</em>: L&agrave; một loại danh từ đặc biệt d&ugrave;ng để n&oacute;i về nh&oacute;m người hoặc vật.&nbsp;Danh từ tập hợn c&oacute; thể c&oacute; dạng số &iacute;t v&agrave; số nhiều. Tuy nhi&ecirc;n khi ở dạng số &iacute;t, danh từ tập hợp vẫn c&oacute; thể được xem l&agrave; số nhiều (V&igrave; bản th&acirc;n n&oacute; đại diện cho một nh&oacute;m nhiều người/vật).</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Singular noun:</strong>&nbsp;Knife, foot, child</p>\r\n\r\n<p><strong>Danh từ số &iacute;t:</strong>&nbsp;Con dao, b&agrave;n ch&acirc;n, con n&iacute;t</p>\r\n\r\n<p><strong>Plural nouns:</strong>&nbsp;Keys, scissors, clothes</p>\r\n\r\n<p><strong>Danh từ số nhiều:&nbsp;</strong>Ch&igrave;a kh&oacute;a, k&eacute;o, quần &aacute;o</p>\r\n\r\n<p><strong>Collective nouns:&nbsp;</strong>Family, group, pack</p>\r\n\r\n<p><strong>Danh từ tập hợp:</strong>&nbsp;Gia đ&igrave;nh, nh&oacute;m, cụm</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 1</h3>\r\n\r\n<p>Ch&uacute;ng ta d&ugrave;ng danh từ để trả lời cho c&acirc;u hỏi&nbsp;<em><strong>What is it?&nbsp;</strong></em>v&agrave;<strong><em>&nbsp;Who is it?</em></strong></p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>She is my&nbsp;<strong>girlfriend</strong>.</p>\r\n\r\n<p>C&ocirc; ấy l&agrave; bạn g&aacute;i của t&ocirc;i.</p>\r\n\r\n<p>It is a good&nbsp;<strong>idea</strong>.</p>\r\n\r\n<p>Đ&oacute; l&agrave; một &yacute; tưởng hay.</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 2</h3>\r\n\r\n<p>Danh từ thường được d&ugrave;ng&nbsp;l&agrave;m chủ ngữ trong c&acirc;u.</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p><strong>Chủ ngữ</strong>&nbsp;<em>(Subject)&nbsp;</em>l&agrave; đối tượng ch&iacute;nh trong c&acirc;u v&agrave; l&agrave; người/vật thực hiện h&agrave;nh động hoặc được mi&ecirc;u tả th&ocirc;ng qua động từ ch&iacute;nh.</p>\r\n\r\n<p><strong>Chủ ngữ</strong>&nbsp;thường đứng ở đầu c&acirc;u hoặc mệnh đề.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>Mary&nbsp;</strong>is my friend.</p>\r\n\r\n<p>Mary l&agrave; bạn của t&ocirc;i.</p>\r\n\r\n<p><strong>Milk&nbsp;</strong>is good for your health.</p>\r\n\r\n<p>Sữa rất tốt cho sức khỏe của bạn.</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 3</h3>\r\n\r\n<p>Danh từ c&oacute; thể được d&ugrave;ng l&agrave;m&nbsp;<strong>danh từ vị ngữ</strong>&nbsp;- đứng sau động từ để giải th&iacute;ch cho&nbsp;chủ ngữ.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>Arthur is my&nbsp;<strong>student</strong>.</p>\r\n\r\n<p>Arthur l&agrave; sinh vi&ecirc;n của t&ocirc;i.</p>\r\n\r\n<p>Tom is my&nbsp;<strong>cousin</strong>.</p>\r\n\r\n<p>Tom l&agrave; em họ của t&ocirc;i.</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 4</h3>\r\n\r\n<p>Danh từ c&oacute; thể được d&ugrave;ng l&agrave;m t&acirc;n ngữ.</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p><strong>T&acirc;n ngữ</strong><em>&nbsp;(Object)</em>&nbsp;l&agrave; đối tượng bị ảnh hưởng bởi h&agrave;nh động của chủ ngữ trong c&acirc;u.</p>\r\n\r\n<p><strong>T&acirc;n ngữ</strong>&nbsp;thường đứng sau chủ ngữ v&agrave; động từ ch&iacute;nh.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>My sister really loves that&nbsp;<strong>song</strong>.</p>\r\n\r\n<p>Chị g&aacute;i t&ocirc;i rất th&iacute;ch b&agrave;i h&aacute;t đ&oacute;.</p>\r\n\r\n<p>He sends Jane a&nbsp;<strong>book</strong>.</p>\r\n\r\n<p>Anh ấy gửi cho Jane một cuốn s&aacute;ch.</p>', '0aZg_noun-1510656126.jpg', 0, 4, '2021-01-21 08:33:44', '2021-01-21 08:33:44', 'https://www.youtube.com/watch?v=9uE7dWl-Gk8', '', 2, 1),
(36, 'Danh từ (3)', '<p>B&agrave;i học li&ecirc;n quan đến danh từ tập 3</p>', '<h3>C&aacute;ch d&ugrave;ng 5</h3>\r\n\r\n<p>Danh từ c&oacute; thể được d&ugrave;ng l&agrave;m đồng vị ngữ.</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p><strong>Đồng vị ngữ</strong>&nbsp;<em>(Appositions)&nbsp;</em>l&agrave; th&agrave;nh phần d&ugrave;ng để giải th&iacute;ch hoặc biểu thị c&ugrave;ng một &yacute; nghĩa với một từ hoặc cụm từ kh&aacute;c.</p>\r\n\r\n<p><strong>Đồng vị ngữ</strong>&nbsp;thường được đặt giữa hai dấu phẩy để mi&ecirc;u tả cho một danh từ kh&aacute;c đứng trước</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>My sister,&nbsp;<strong>Ann</strong>, is in town.</p>\r\n\r\n<p>Em g&aacute;i t&ocirc;i, Ann, đang ở thị trấn.</p>\r\n\r\n<p>My hometown,&nbsp;<strong>Manchester</strong>, is wonderful.</p>\r\n\r\n<p>Qu&ecirc; hương t&ocirc;i, Manchester, rất tuyệt vời.</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 6</h3>\r\n\r\n<p>Một số danh từ về thời gian c&oacute; thể đ&oacute;ng&nbsp;vai tr&ograve; như một trạng từ.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>I have a piano lesson&nbsp;<strong>today</strong>.</p>\r\n\r\n<p>T&ocirc;i c&oacute; một buổi học piano v&agrave;o ng&agrave;y h&ocirc;m nay.</p>\r\n\r\n<p>What did you do&nbsp;<strong>yesterday</strong>?</p>\r\n\r\n<p>Bạn đ&atilde; l&agrave;m g&igrave; v&agrave;o ng&agrave;y h&ocirc;m qua?</p>\r\n\r\n<h3>C&aacute;ch d&ugrave;ng 7</h3>\r\n\r\n<p>Danh từ c&ograve;n c&oacute; thể đ&oacute;ng&nbsp;vai tr&ograve; bổ ngữ khi đứng trước&nbsp;một danh từ kh&aacute;c.</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p><strong>Bổ ngữ</strong>&nbsp;<em>(Modifiers)</em>&nbsp;l&agrave; những th&agrave;nh phần bổ nghĩa cho một từ hoặc cụm từ trong c&acirc;u; kh&ocirc;ng c&oacute; th&agrave;nh phần tr&ecirc;n, &yacute; nghĩa căn bản của c&acirc;u văn vẫn kh&ocirc;ng thay đổi.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>What is your&nbsp;<strong>school</strong>&#39;s name?</p>\r\n\r\n<p>T&ecirc;n của trường cậu l&agrave; g&igrave;?</p>\r\n\r\n<p>The&nbsp;<strong>water&nbsp;</strong>pump is broken.</p>\r\n\r\n<p>Ống nước bị vỡ.</p>\r\n\r\n<h3>Mẹo 1</h3>\r\n\r\n<p>Một số hậu tố thường gặp sau c&oacute; thể gi&uacute;p bạn x&aacute;c định danh từ:</p>\r\n\r\n<p><strong>-age:&nbsp;</strong>post<u>age</u>, langu<u>age</u>, saus<u>age</u></p>\r\n\r\n<p><strong>-ance/-ence:&nbsp;</strong>insur<u>ance</u>, import<u>ance</u>, differ<u>ence</u></p>\r\n\r\n<p><strong>-er/-or:</strong>&nbsp;teach<u>er</u>, driv<u>er</u>, act<u>or</u></p>\r\n\r\n<p><strong>-hood:</strong>&nbsp;child<u>hood</u>, mother<u>hood</u>, father<u>hood</u></p>\r\n\r\n<p><strong>-ism:</strong>&nbsp;social<u>ism</u>, capital<u>ism</u>, national<u>ism</u></p>\r\n\r\n<p><strong>-ist:</strong>&nbsp;art<u>ist</u>, optim<u>ist</u>, pian<u>ist</u></p>\r\n\r\n<p><strong>-itude:</strong>&nbsp;att<u>itude</u>, mult<u>itude</u>, sol<u>itude</u></p>\r\n\r\n<p><strong>-ity/-ty:</strong>&nbsp;ident<u>ity</u>, quant<u>ity</u>, cruel<u>ty</u></p>\r\n\r\n<p><strong>-ment:&nbsp;</strong>excite<u>ment</u>, argu<u>ment</u>, govern<u>ment</u></p>\r\n\r\n<p><strong>-ness:</strong>&nbsp;happ<u>iness</u>, busi<u>ness</u>, dark<u>ness</u></p>\r\n\r\n<p><strong>-ship:</strong>&nbsp;friend<u>ship</u>, champion<u>ship</u>, relation<u>ship</u></p>\r\n\r\n<p><strong>-tion/-sion:&nbsp;</strong>sta<u>tion</u>, na<u>tion</u>, exten<u>sion</u></p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>Friend<strong>ship</strong>, teach<strong>er</strong>, import<strong>ance</strong>, mother<strong>hood</strong></p>\r\n\r\n<p>T&igrave;nh bạn, gi&aacute;o vi&ecirc;n, sự quan trọng, t&igrave;nh mẫu tử</p>\r\n\r\n<h3>Mẹo 2</h3>\r\n\r\n<p>Bạn c&oacute; thể th&ecirc;m&nbsp;<em><strong>dấu nh&aacute;y đơn</strong></em>&nbsp;(&#39;) hoặc k&yacute; tự&nbsp;<em><strong>&#39;s</strong></em>&nbsp;v&agrave;o sau một danh từ để thể hiện sự sở hữu.</p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p>What is the&nbsp;<u>school</u><strong>&#39;s</strong>&nbsp;name?</p>\r\n\r\n<p>T&ecirc;n của ng&ocirc;i trường l&agrave; g&igrave;?</p>', 'yJ8U_noun-1510656126.jpg', 2, 4, '2021-01-21 08:35:07', '2021-01-21 08:37:55', 'https://www.youtube.com/watch?v=9uE7dWl-Gk8', '', 2, 1),
(37, 'Danh từ (4)', '<p>B&agrave;i học cơ bản li&ecirc;n quan đến danh từ tập 4</p>', '<h3>Lưu &yacute;!</h3>\r\n\r\n<p>Đại từ kh&ocirc;ng phải l&agrave; danh từ!</p>\r\n\r\n<p>Lưu &yacute;:</p>\r\n\r\n<p><strong>Đại từ</strong>&nbsp;<em>(Pronouns)&nbsp;</em>l&agrave;&nbsp;loại từ d&ugrave;ng để thay thế một danh từ hoặc cụm danh từ đ&atilde; được đề cập trước đ&oacute;.</p>\r\n\r\n<p>Trong tiếng Anh, c&aacute;c&nbsp;<strong>đại từ chủ ngữ</strong>&nbsp;bao gồm<em>&nbsp;I, we, you, he, she, it, they.</em></p>\r\n\r\n<p>V&iacute; dụ:</p>\r\n\r\n<p><strong>I</strong>&nbsp;[pron] am a&nbsp;<strong>student</strong>&nbsp;[n].</p>\r\n\r\n<p>T&ocirc;i l&agrave; một học sinh.</p>\r\n\r\n<h3>T&oacute;m tắt</h3>\r\n\r\n<p><strong>I. Định nghĩa</strong></p>\r\n\r\n<p><strong>Danh từ&nbsp;</strong><em>(Nouns)&nbsp;</em>được d&ugrave;ng để n&oacute;i về người, nơi chốn, sự vật, sự việc, kh&aacute;i niệm hoặc &yacute; nghĩ.</p>\r\n\r\n<p><strong>II. Thể loại</strong></p>\r\n\r\n<p>X&eacute;t về mục đ&iacute;ch sử dụng, ta c&oacute;&nbsp;<strong>Danh từ chung</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ ri&ecirc;ng</strong>.</p>\r\n\r\n<p>X&eacute;t về &yacute; nghĩa, ta c&oacute;&nbsp;<strong>Danh từ cụ thể</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ trừu tượng</strong>.</p>\r\n\r\n<p>X&eacute;t về khả năng đếm, ta c&oacute;&nbsp;<strong>Danh từ đếm được</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ kh&ocirc;ng đếm được</strong>.</p>\r\n\r\n<p>X&eacute;t về số lượng, ta c&oacute;&nbsp;<strong>Danh từ số &iacute;t</strong>&nbsp;v&agrave;&nbsp;<strong>Danh từ số nhiều</strong>.</p>\r\n\r\n<p><strong>III. C&aacute;ch d&ugrave;ng</strong></p>\r\n\r\n<p>D&ugrave;ng để trả lời cho c&acirc;u hỏi&nbsp;<em>What is it?&nbsp;</em>v&agrave;&nbsp;<em>Who is it?</em></p>\r\n\r\n<p>Về ngữ ph&aacute;p, danh từ đ&oacute;ng vai tr&ograve; (1)&nbsp;<strong>Chủ ngữ</strong>&nbsp;(2)&nbsp;<strong>T&acirc;n ngữ</strong>&nbsp;(3)&nbsp;<strong>Danh từ vị ngữ&nbsp;</strong>(4)&nbsp;<strong>Đồng vị ngữ</strong>&nbsp;(5)&nbsp;<strong>Bổ ngữ</strong>&nbsp;v&agrave; (7)&nbsp;<strong>Trạng từ</strong>.</p>\r\n\r\n<p><strong>IV. Lưu &yacute;</strong></p>\r\n\r\n<p>Một số hậu tố thường gặp c&oacute; thể gi&uacute;p x&aacute;c định danh từ!</p>\r\n\r\n<p>Đại từ kh&ocirc;ng phải l&agrave; danh từ!</p>\r\n\r\n<p>C&oacute; thể th&ecirc;m dấu nh&aacute;y đơn (&#39;) hoặc k&yacute; tự &#39;s v&agrave;o sau một danh từ để thể hiện sự sở hữu!</p>', '91G4_noun-1510656126.jpg', 1, 4, '2021-01-21 08:37:41', '2021-01-21 08:38:03', 'https://www.youtube.com/watch?v=9uE7dWl-Gk8', '', 2, 1),
(38, 'Mệnh đề', '<p>B&agrave;i học chủ đề mệnh đề</p>', '<h3><strong>Định nghĩa</strong></h3>\r\n\r\n<p>Mệnh đề&nbsp;<em>(Clause)&nbsp;</em>l&agrave; th&agrave;nh phần cấu tạo n&ecirc;n một c&acirc;u ho&agrave;n chỉnh. Mỗi mệnh đề&nbsp;phải đảm bảo tối thiểu gồm hai th&agrave;nh phần: một&nbsp;<em>chủ ngữ</em>&nbsp;<em>(Subject)&nbsp;</em>v&agrave; một&nbsp;<em>động từ&nbsp;vị ngữ (Verb)</em>.</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>Mệnh đề</th>\r\n			<th>Kh&ocirc;ng phải mệnh đề</th>\r\n		</tr>\r\n		<tr>\r\n			<td>ecology is a science</td>\r\n			<td>after working all day</td>\r\n		</tr>\r\n		<tr>\r\n			<td>because pollution causes cancer</td>\r\n			<td>to protect the environment</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3><strong>Thể loại&nbsp;</strong></h3>\r\n\r\n<p>Trong tiếng Anh, mệnh đề được chia th&agrave;nh hai loại cơ bản bao gồm:</p>\r\n\r\n<p>- Loại 1:&nbsp;<strong>Mệnh đề độc lập</strong><br />\r\n- Loại 2:&nbsp;<strong>Mệnh đề phụ thuộc</strong></p>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Mệnh đề độc lập</strong></h3>\r\n\r\n<p>Mệnh đề độc lập l&agrave; mệnh đề được cấu tạo bởi một chủ ngữ v&agrave; một vị ngữ để diễn tả một &yacute; trọn vẹn. Mệnh đề độc lập c&oacute; thể đ&oacute;ng vai tr&ograve; như một c&acirc;u ho&agrave;n chỉnh.</p>\r\n\r\n<p>Ngo&agrave;i hai th&agrave;nh phần ch&iacute;nh l&agrave; chủ v&agrave; vị ngữ, mệnh đề độc lập c&ograve;n c&oacute; thể bao gồm cả bổ ngữ&nbsp;<em>(complement)</em>.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&nbsp;</th>\r\n			<th>Chủ ngữ</th>\r\n			<th>Động từ</th>\r\n			<th>(Bổ ngữ)</th>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 1</strong></td>\r\n			<td>Water</td>\r\n			<td>evaporates</td>\r\n			<td>rapidly in warm climate zones.</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 2</strong></td>\r\n			<td>The sun</td>\r\n			<td>rose.</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<h3><strong>Mệnh đề phụ thuộc</strong></h3>\r\n\r\n<p>Mệnh đề phụ thuộc l&agrave; mệnh đề bắt đầu bằng một li&ecirc;n từ phụ thuộc như&nbsp;<em>when, while, if, that hoặc who,&hellip;&nbsp;</em>Mệnh đề phụ thuộc kh&ocirc;ng diễn tả một &yacute; trọn vẹn; do đ&oacute;, n&oacute; kh&ocirc;ng thể đ&oacute;ng vai tr&ograve; l&agrave; một c&acirc;u văn ho&agrave;n chỉnh.</p>\r\n\r\n<p>Mệnh đề phụ thuộc thường được h&igrave;nh th&agrave;nh với li&ecirc;n từ phụ thuộc&nbsp;<em>(subordinator)</em>, chủ ngữ, vị ngữ v&agrave; bổ ngữ&nbsp;<em>(nếu c&oacute;)</em>.<br />\r\n&nbsp;</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&nbsp;</th>\r\n			<th>Li&ecirc;n từ</th>\r\n			<th>Chủ ngữ</th>\r\n			<th>Động từ</th>\r\n			<th>(Bổ ngữ)</th>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 1</strong></td>\r\n			<td>because</td>\r\n			<td>water</td>\r\n			<td>evaporates</td>\r\n			<td>rapidly in warm climate zones</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 2</strong></td>\r\n			<td>when</td>\r\n			<td>the sun</td>\r\n			<td>rose</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 3</strong></td>\r\n			<td>whom</td>\r\n			<td>the voter</td>\r\n			<td>selected</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>V&iacute; dụ 4</strong></td>\r\n			<td>if</td>\r\n			<td>the drought</td>\r\n			<td>continues</td>\r\n			<td>for another year</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>Một số li&ecirc;n từ phụ thuộc phổ biến</h3>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<th>&nbsp;</th>\r\n			<th>&nbsp;</th>\r\n			<th>&nbsp;</th>\r\n			<th>&nbsp;</th>\r\n			<th>&nbsp;</th>\r\n		</tr>\r\n		<tr>\r\n			<td>after</td>\r\n			<td>before</td>\r\n			<td>that</td>\r\n			<td>when</td>\r\n			<td>which</td>\r\n		</tr>\r\n		<tr>\r\n			<td>although</td>\r\n			<td>even though</td>\r\n			<td>though</td>\r\n			<td>whenever</td>\r\n			<td>while</td>\r\n		</tr>\r\n		<tr>\r\n			<td>as, just as</td>\r\n			<td>how</td>\r\n			<td>unless</td>\r\n			<td>where</td>\r\n			<td>who</td>\r\n		</tr>\r\n		<tr>\r\n			<td>as if</td>\r\n			<td>if</td>\r\n			<td>until</td>\r\n			<td>wherever</td>\r\n			<td>whom</td>\r\n		</tr>\r\n		<tr>\r\n			<td>as soon as</td>\r\n			<td>since</td>\r\n			<td>what</td>\r\n			<td>whether</td>\r\n			<td>whose</td>\r\n		</tr>\r\n		<tr>\r\n			<td>because</td>\r\n			<td>so that</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'nq9p_clause-menh-de-1510710423.jpg', 2, 11, '2021-01-21 08:49:02', '2021-01-21 09:46:46', 'https://www.youtube.com/watch?v=o4f58Bt1_FE', '', 5, 1),
(42, 'Phong', '<p>Phong c&aacute;ch viết học thuật</p>', '<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Phong c&aacute;ch học thuật (Academic writing style) l&agrave; một trong những phong c&aacute;ch ch&iacute;nh v&agrave; được sử dụng phổ biến nhất trong kỹ thuật viết. Phong c&aacute;ch học thuật thường được ứng dụng v&agrave;o những văn bản y&ecirc;u cầu t&iacute;nh trang trọng, học thuật với ti&ecirc;u chuẩn cao như c&aacute;c văn bản ch&iacute;nh thống, b&agrave;i viết trong c&aacute;c kỳ thi kiểm tra năng lực IELTS, TOEFL,...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Kh&aacute;c với phong c&aacute;ch viết tự do, phong c&aacute;ch học thuật y&ecirc;u cầu người viết phải tu&acirc;n thủ nhiều quy định v&agrave; ti&ecirc;u chuẩn về kỹ thuật viết để đảm bảo c&aacute;c nguy&ecirc;n tắc sau:</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Nguy&ecirc;n tắc 1: T&iacute;nh trang trọng (Formality)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Nguy&ecirc;n tắc 2: T&iacute;nh kh&aacute;ch quan (Objectivity)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Nguy&ecirc;n tắc 3: T&iacute;nh ch&iacute;nh x&aacute;c (Precision)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Nguy&ecirc;n tắc 4: T&iacute;nh r&otilde; r&agrave;ng (Explicitness)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Nguy&ecirc;n tắc 5: T&iacute;nh phức tạp (Complexity)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">T&iacute;nh trang trọng (Formality)</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Quy tắc 1: Sử dụng từ ngữ mang t&iacute;nh trang trọng (tham khảo danh s&aacute;ch AWL). Tr&aacute;nh sử dụng ng&ocirc;n từ mang t&iacute;nh th&ocirc;ng tục như ng&ocirc;n ngữ giao tiếp.</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">V&iacute; dụ 1:</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Many dads these days...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&rarr; Many fathers nowadays...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">V&iacute; dụ 2:</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">Major urban centres, like London and Beijing...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&rarr; Major urban centres, such as London and Beijing...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">V&iacute; dụ 3:</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">There are lots of people who believe...</span></span></p>\r\n\r\n<p><span style=\"font-size:11pt\"><span style=\"font-family:Calibri,sans-serif\">&rarr; There are a significant number of people who believe...</span></span></p>', '9Uov_hoc-tieng-anh-hoc-thuat-nhu-the-nao-766x400.png', 2, 12, '2021-01-21 09:45:27', '2021-01-21 09:46:27', NULL, '', 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `dapan`
--

CREATE TABLE `dapan` (
  `idda` bigint(20) UNSIGNED NOT NULL,
  `dapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dapan`
--

INSERT INTO `dapan` (`idda`, `dapan`, `created_at`, `updated_at`) VALUES
(1, 'A', NULL, NULL),
(2, 'B', NULL, NULL),
(3, 'C', NULL, NULL),
(4, 'D', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `idlevel` bigint(20) UNSIGNED NOT NULL,
  `namelevel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idcategory` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`idlevel`, `namelevel`, `idcategory`, `created_at`, `updated_at`) VALUES
(1, 'EASY', 1, '2021-01-09 21:53:54', '2021-01-09 21:53:54'),
(2, 'NORMAL', 1, '2021-01-09 21:54:17', '2021-01-09 21:54:17'),
(3, 'HARD', 1, '2021-01-09 21:54:42', '2021-01-09 21:54:42'),
(4, 'EASY', 2, '2021-01-09 21:56:45', '2021-01-09 21:56:45'),
(5, 'NORMAL', 2, '2021-01-09 21:56:52', '2021-01-09 21:56:52'),
(6, 'HARD', 2, '2021-01-09 21:56:57', '2021-01-09 21:56:57'),
(7, 'EASY', 3, '2021-01-09 21:57:01', '2021-01-09 21:57:01'),
(8, 'HARD', 3, '2021-01-09 21:57:06', '2021-01-09 21:57:06'),
(9, 'EASY', 4, '2021-01-10 04:49:34', '2021-01-10 04:49:34'),
(10, 'NORMAL', 4, '2021-01-10 04:49:39', '2021-01-10 04:49:39'),
(11, 'EASY', 5, '2021-01-10 04:49:43', '2021-01-10 04:49:43'),
(12, 'NORMAL', 5, '2021-01-10 04:49:47', '2021-01-10 04:49:47'),
(13, 'HARD', 4, '2021-01-10 04:49:52', '2021-01-10 04:49:52'),
(14, 'HARD', 5, '2021-01-10 04:49:56', '2021-01-10 04:49:56');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `type`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1619835507, 'user', 25, 8, 'thầy c&oacute; dạy k&egrave;m học sinh kh&ocirc;ng ạ', NULL, 1, '2021-01-21 09:49:36', '2021-01-21 09:50:54'),
(1637540601, 'user', 24, 8, '', '2fbd487b-4f97-4a13-8c03-dd4794fd2be4.jpg,clause-menh-de-1510710423.jpg', 1, '2021-01-21 09:48:07', '2021-01-21 09:50:52'),
(1678844010, 'user', 8, 1, 'bạn ơi', NULL, 1, '2021-01-21 09:51:06', '2021-01-21 09:51:38'),
(1797527223, 'user', 24, 8, 'c&oacute; thể giải th&iacute;ch gi&uacute;p e mệnh đề kh&ocirc;ng ạ', NULL, 1, '2021-01-21 09:47:55', '2021-01-21 09:50:52'),
(1808603136, 'user', 1, 8, 'm&igrave;nh c&oacute; thể gi&uacute;p g&igrave; cho bạn', NULL, 1, '2021-01-21 09:51:47', '2021-01-21 09:51:57'),
(1848089516, 'user', 1, 8, 'bạn c&oacute; thể gi&uacute;p t&ocirc;i c&aacute;i n&agrave;y hay k', NULL, 1, '2021-01-17 09:07:08', '2021-01-17 09:07:08'),
(2046695167, 'user', 8, 1, '', '87c6e700-17d8-4832-ac0d-62efe24a38f3.png,android_class (1).png', 1, '2021-01-17 09:08:05', '2021-01-17 09:08:18'),
(2092757474, 'user', 8, 1, 'ch&agrave;o bạn', NULL, 1, '2021-01-17 09:06:51', '2021-01-17 09:06:55'),
(2255112747, 'user', 24, 8, 'Thầy ơi', NULL, 1, '2021-01-21 09:47:36', '2021-01-21 09:50:52'),
(2284929959, 'user', 8, 1, 'help me', NULL, 1, '2021-01-19 06:16:30', '2021-01-21 07:47:13'),
(2326664214, 'user', 1, 8, 'alo', NULL, 1, '2021-01-17 09:06:07', '2021-01-17 09:06:46'),
(2512068634, 'user', 25, 8, 'e đang cần thầy dạy k&egrave;m lấy lại ki&ecirc;n thức', NULL, 1, '2021-01-21 09:49:48', '2021-01-21 09:50:54'),
(2561085290, 'user', 8, 1, 'alo', NULL, 1, '2021-01-19 06:16:27', '2021-01-21 07:47:13'),
(2587703631, 'user', 8, 22, 'say hi', NULL, 0, '2021-01-18 01:58:31', '2021-01-18 01:58:31');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_05_121924_create_category_table', 1),
(5, '2021_01_05_121939_create_level_table', 1),
(6, '2021_01_05_122012_create_course_table', 1),
(7, '2021_01_05_122030_create_comment_table', 1),
(8, '2021_01_05_122106_create_tracnghiem_table', 1),
(9, '2021_01_05_122117_create_cauhoi_table', 1),
(10, '2021_01_05_122130_create_dapan_table', 1),
(12, '2021_01_10_120859_update1_course_table', 2),
(14, '2021_01_15_023525_update_course_table', 3),
(15, '2019_09_22_192348_create_messages_table', 4),
(16, '2019_10_16_211433_create_favorites_table', 4),
(17, '2019_10_18_223259_add_avatar_to_users', 4),
(18, '2019_10_20_211056_add_messenger_color_to_users', 4),
(19, '2019_10_22_000539_add_dark_mode_to_users', 4),
(20, '2019_10_25_214038_add_active_status_to_users', 4),
(21, '2021_01_19_132523_create_userright_table', 5),
(22, '2021_01_19_142538_update_userright_table', 6),
(23, '2021_01_21_141758_update2_course_table', 7);

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
-- Table structure for table `tracnghiem`
--

CREATE TABLE `tracnghiem` (
  `idtn` bigint(20) UNSIGNED NOT NULL,
  `nametn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idkh` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracnghiem`
--

INSERT INTO `tracnghiem` (`idtn`, `nametn`, `idkh`, `created_at`, `updated_at`) VALUES
(10, 'Bài Test trắc nghiệm nhanh chủ đề PETS', 15, '2021-01-10 06:21:06', '2021-01-10 06:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `userright`
--

CREATE TABLE `userright` (
  `idur` bigint(20) UNSIGNED NOT NULL,
  `nghenghiep` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tinhtrang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userright`
--

INSERT INTO `userright` (`idur`, `nghenghiep`, `trinhdo`, `hinh`, `id`, `created_at`, `updated_at`, `tinhtrang`) VALUES
(15, 'Giảng viên đại học', 'Thạc sĩ - Bằng IELTS 6.5', 'C8BE_TA1.png-480x280.png', 8, '2021-01-21 09:23:50', '2021-04-01 20:08:57', '0'),
(16, 'Giảng viên trung tâm tiếng anh', 'Bằng IELTS 8.', 'LVhB_TA1.png-480x280.png', 24, '2021-01-21 09:24:39', '2021-01-21 09:24:39', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `active_status`, `dark_mode`, `messenger_color`, `avatar`, `email_verified_at`, `password`, `address`, `image`, `phone`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 0, 1, '#ff2522', 'd7dda7b8-c71f-409d-a773-8a6e941767c1.jpg', NULL, '$2y$10$tX8bBV832eOC3piRf8she.kO3ZOACmG8TJrXDUbpO1WKLtB5ste6G', 'Bình Dương', NULL, '0976503054', '1', NULL, '2021-01-05 06:19:06', '2021-01-21 09:53:27'),
(8, 'Mr.Tien', 'tien@gmail.com', 1, 0, '#ff2522', 'c0adf634-ecfc-4b69-9220-f8dbd4d7a4f2.jpg', NULL, '$2y$10$8LnxYY0q6uE910TfcoEpHOXfitzDFLwouWSIm6tgPENvbsmMijfoa', 'Bình Dương', '123', '0976503054', '2', NULL, '2021-01-10 07:29:21', '2021-03-07 17:58:55'),
(24, 'Duy', 'duy@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, '$2y$10$QKjIJDYo8V/TmYuaG6EgKOi8epidNZX20j5OsuCHddPNloHyOlJU.', 'TP.HCM', NULL, '01223845131', '0', NULL, '2021-01-21 07:48:38', '2021-01-21 07:48:38'),
(25, 'Huy', 'huy@gmail.com', 0, 0, '#2180f3', 'fe87e2da-a6e5-4475-9b6a-ee2263d088f3.jpg', NULL, '$2y$10$EWLqwJgs.4KTHTIjRnQgz.t1zfNKOvtK8YLRG8Wh1HKEdDtaQCcja', 'TP.HCM', NULL, '01645141028', '0', NULL, '2021-01-21 07:50:31', '2021-01-21 09:49:06'),
(27, 'Trung Kiên', '17dtha2tk@gmail.com', 0, 0, '#2180f3', 'avatar.png', NULL, NULL, NULL, 'https://graph.facebook.com/v3.3/2893102127678827/picture?type=normal', NULL, '0', NULL, '2021-03-04 23:14:18', '2021-03-04 23:14:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`idch`),
  ADD KEY `idtn` (`idtn`),
  ADD KEY `idda` (`idda`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcomment`),
  ADD KEY `idkh` (`idkh`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`idkh`),
  ADD KEY `idlevel` (`idlevel`),
  ADD KEY `idcategory` (`idcategory`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`idda`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`idlevel`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tracnghiem`
--
ALTER TABLE `tracnghiem`
  ADD PRIMARY KEY (`idtn`),
  ADD KEY `idkh` (`idkh`);

--
-- Indexes for table `userright`
--
ALTER TABLE `userright`
  ADD PRIMARY KEY (`idur`),
  ADD KEY `id` (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `idch` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `idcomment` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `idkh` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `dapan`
--
ALTER TABLE `dapan`
  MODIFY `idda` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `idlevel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tracnghiem`
--
ALTER TABLE `tracnghiem`
  MODIFY `idtn` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `userright`
--
ALTER TABLE `userright`
  MODIFY `idur` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`idtn`) REFERENCES `tracnghiem` (`idtn`),
  ADD CONSTRAINT `cauhoi_ibfk_2` FOREIGN KEY (`idda`) REFERENCES `dapan` (`idda`);

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `course` (`idkh`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`idlevel`) REFERENCES `level` (`idlevel`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`),
  ADD CONSTRAINT `course_ibfk_3` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `level`
--
ALTER TABLE `level`
  ADD CONSTRAINT `level_ibfk_1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`);

--
-- Constraints for table `tracnghiem`
--
ALTER TABLE `tracnghiem`
  ADD CONSTRAINT `tracnghiem_ibfk_1` FOREIGN KEY (`idkh`) REFERENCES `course` (`idkh`);

--
-- Constraints for table `userright`
--
ALTER TABLE `userright`
  ADD CONSTRAINT `userright_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
