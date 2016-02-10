-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 2 朁E09 日 03:25
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `holidays_system`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(16) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `create_time`, `update_time`, `delete_time`) VALUES
(1, 'aaa', 'test@example.com', '1231', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `holidays`
--

CREATE TABLE IF NOT EXISTS `holidays` (
`id` int(11) NOT NULL,
  `student_name` varchar(64) NOT NULL,
  `student_number` varchar(12) NOT NULL,
  `school_year` int(1) NOT NULL,
  `specialized_id` int(11) NOT NULL,
  `tuition_id` int(11) NOT NULL,
  `public_holidays` date NOT NULL,
  `reason` varchar(256) NOT NULL,
  `checked` tinyint(1) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `holidays`
--

INSERT INTO `holidays` (`id`, `student_name`, `student_number`, `school_year`, `specialized_id`, `tuition_id`, `public_holidays`, `reason`, `checked`, `create_time`, `update_time`, `delete_time`) VALUES
(16, '石垣慶和', '111', 1, 18, 6, '2017-04-04', 'インターンシップの為、お休みさせていただきます。', 1, NULL, NULL, NULL),
(17, '山田太郎', '112', 3, 9, 5, '2016-06-15', '忌引きです', 0, NULL, NULL, NULL),
(18, '三浦桂輔', '113', 1, 17, 4, '2017-04-07', 'インターンシップの予定があるため。', 0, NULL, NULL, NULL),
(19, '石垣こはる', '114', 0, 8, 6, '2016-09-28', '忌引き', 1, NULL, NULL, NULL),
(20, '高橋純', '119', 2, 15, 2, '2016-01-15', 'インターンシップのため休みます', 0, NULL, NULL, NULL),
(21, '佐藤湊', '156', 3, 3, 1, '2016-09-14', '就職面接のため休みます', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `specializeds`
--

CREATE TABLE IF NOT EXISTS `specializeds` (
`id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `specializeds`
--

INSERT INTO `specializeds` (`id`, `name`, `create_time`, `update_time`, `delete_time`) VALUES
(1, 'スーパーゲームクリエイター', NULL, NULL, NULL),
(2, 'ゲーム企画･シナリオ', NULL, NULL, NULL),
(3, 'ゲームプログラマー', NULL, NULL, NULL),
(4, 'ゲームキャラクター･グラフィック', NULL, NULL, NULL),
(5, 'アプリゲーム', NULL, NULL, NULL),
(6, 'ゲームCGデザイン', NULL, NULL, NULL),
(7, 'クリエイティブデザイン', NULL, NULL, NULL),
(8, '3DCG', NULL, NULL, NULL),
(9, '総合アニメーション', NULL, NULL, NULL),
(10, 'マンガデザイナー', NULL, NULL, NULL),
(11, 'コミックイラスト', NULL, NULL, NULL),
(12, 'メディアクリエイター', NULL, NULL, NULL),
(13, 'コミュニケーションロボットAI', NULL, NULL, NULL),
(14, 'メカトロニクスエンジニア', NULL, NULL, NULL),
(15, '次世代プロダクトデザイン', NULL, NULL, NULL),
(16, 'ライト&イルミネーションデザイン', NULL, NULL, NULL),
(17, 'スーパーITエンジニア', NULL, NULL, NULL),
(18, 'プログラマー', NULL, NULL, NULL),
(19, 'ゲーム･IT', NULL, NULL, NULL),
(20, 'Web･アプリクリエイター', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `tuitions`
--

CREATE TABLE IF NOT EXISTS `tuitions` (
`id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `tuition_time` varchar(8) NOT NULL,
  `teacher_name` varchar(32) NOT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `tuitions`
--

INSERT INTO `tuitions` (`id`, `name`, `tuition_time`, `teacher_name`, `create_time`, `update_time`, `delete_time`) VALUES
(1, '3,4限 デザイン授業', '1', '石井先生', NULL, NULL, NULL),
(2, '2限 ホームルーム', '2', '各担任', NULL, NULL, NULL),
(3, '5,6限 プログラマー', '5', '田中先生', NULL, NULL, NULL),
(4, '4限 プログラム授業', '3', '齋藤先生', NULL, NULL, NULL),
(5, '3限デザイン授業', '4', '佐藤先生', NULL, NULL, NULL),
(6, '1,2限 web授業', '6', '高橋先生', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specializeds`
--
ALTER TABLE `specializeds`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuitions`
--
ALTER TABLE `tuitions`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `specializeds`
--
ALTER TABLE `specializeds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
