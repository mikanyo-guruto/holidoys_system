-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E12 日 07:41
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `holidays`
--

INSERT INTO `holidays` (`id`, `student_name`, `student_number`, `school_year`, `specialized_id`, `tuition_id`, `public_holidays`, `reason`, `checked`, `create_time`, `update_time`, `delete_time`) VALUES
(1, '佐藤太郎', '1111', 2, 1, 1, '2013-01-01', 'インターンシップの為', 1, NULL, NULL, NULL),
(2, '田中太郎', '13d319280', 3, 1, 1, '2015-12-09', '企業面接の為', 0, NULL, NULL, NULL),
(3, '鈴木太郎', '23213123', 2, 1, 1, '2015-12-23', 'ｄｄｄｄｄｄｄｄｄｄｄｄｄｄ', 1, NULL, NULL, NULL),
(4, '下山太郎', '22222222222', 4, 2, 2, '2015-12-02', 'あああああああああ', 0, NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `tuitions`
--

INSERT INTO `tuitions` (`id`, `name`, `tuition_time`, `teacher_name`, `create_time`, `update_time`, `delete_time`) VALUES
(1, '3,4限 デザイン授業', '1', 'たかし先生', NULL, NULL, NULL),
(2, '2限 ホームルーム', '2', '各担任', NULL, NULL, NULL),
(3, '5,6限 プログラマー', '5', 'たろう先生', NULL, NULL, NULL);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `specializeds`
--
ALTER TABLE `specializeds`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `tuitions`
--
ALTER TABLE `tuitions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
