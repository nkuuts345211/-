-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-06-02 01:16:24
-- 伺服器版本： 10.4.32-MariaDB
-- PHP 版本： 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `0303`
--

-- --------------------------------------------------------

--
-- 資料表結構 `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `c_num` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_money` int(11) NOT NULL,
  `option` text NOT NULL,
  `img` text NOT NULL,
  `add_time` datetime NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food`
--

INSERT INTO `food` (`id`, `c_num`, `c_name`, `c_money`, `option`, `img`, `add_time`, `text`) VALUES
(1, 'A001', 'menu1', 1000, '0', 'menu1.jpg', '2025-04-21 10:34:21', '香嫩多汁大雞排'),
(2, 'A002', 'menu2', 1000, '0', 'menu2.jpg', '2025-04-16 15:07:40', '超級美式熱狗堡'),
(3, 'A003', 'menu3', 2000, '0', 'menu3.jpg', '2025-04-17 11:31:58', '大烤雞全餐'),
(4, 'A004', 'menu4', 2000, '0', 'menu4.jpg', '2025-04-17 12:56:11', '色香味俱全的烤雞腿'),
(5, 'A005', 'menu5', 1000, '0', 'menu5.jpg', '2025-04-17 12:58:13', '美味的焗烤麵'),
(6, 'A006', 'menu6', 1000, '0', 'menu6.jpg', '2025-04-17 12:58:49', '金黃酥脆的炸薯條'),
(8, 'A007', 'menu7', 70, '0', 'ice.png', '2025-06-01 21:14:14', '香草冰淇淋'),
(9, 'A008', 'menu8', 120, '0', 'cake.jpg', '2025-06-01 21:21:24', '草莓蛋糕'),
(10, 'A009', 'menu9', 150, '0', 'Chocolat.jpg', '2025-06-01 21:24:02', '巧克力'),
(11, 'A010', 'menu10', 50, '0', '蛋塔.jpg', '2025-06-01 21:25:39', '蛋塔'),
(12, 'A011', 'menu11', 120, '0', '草莓大福.jpg', '2025-06-01 21:27:28', '草莓大福'),
(13, 'A012', 'menu12', 200, '0', '可麗露.jpg', '2025-06-01 21:29:12', '可麗露'),
(14, 'A013', 'menu13', 250, '0', '烤鴨.jpg', '2025-06-01 21:30:16', '烤鴨'),
(15, 'A014', 'menu14', 200, '0', '炸雞.jpg', '2025-06-01 21:31:43', '炸雞'),
(16, 'A015', 'menu15', 120, '0', '炒飯.jpg', '2025-06-01 21:36:37', '炒飯'),
(17, 'A016', 'menu16', 150, '', 'beef.jpg', '2025-06-02 06:58:54', '牛排');

-- --------------------------------------------------------

--
-- 資料表結構 `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `title` varchar(20) NOT NULL,
  `text` text NOT NULL,
  `img` text NOT NULL,
  `add_time` datetime NOT NULL,
  `up_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `msg`
--

INSERT INTO `msg` (`id`, `account`, `title`, `text`, `img`, `add_time`, `up_time`) VALUES
(1, '1212', '123', '123', '202506011517082449.png', '2025-05-27 11:01:06', '2025-06-01');

-- --------------------------------------------------------

--
-- 資料表結構 `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `c_num` varchar(20) NOT NULL,
  `c_name` varchar(20) NOT NULL,
  `c_money` int(11) NOT NULL,
  `amount` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `order`
--

INSERT INTO `order` (`id`, `account`, `c_num`, `c_name`, `c_money`, `amount`) VALUES
(1, '1212', 'A001', 'menu1', 1000, 1),
(2, '1212', 'A002', 'menu2', 900, 1),
(3, '1212', 'A016', 'menu16', 135, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `reply`
--

CREATE TABLE `reply` (
  `id` int(11) NOT NULL,
  `msg_id` int(11) DEFAULT NULL,
  `account` varchar(20) DEFAULT NULL,
  `reply_text` text DEFAULT NULL,
  `add_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `reply`
--

INSERT INTO `reply` (`id`, `msg_id`, `account`, `reply_text`, `add_time`) VALUES
(3, 1, '1212', '123', '2025-05-27 06:09:42');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `account` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `account`, `password`, `name`, `type`) VALUES
(1, '1212', '1212', '管理者(黃老貓)', 'a'),
(2, '1111', '1111', '使用者1(楊凱恩)', 'u'),
(3, '1234', '1234', '賣方(鄧E汯)', 'o'),
(4, '456', '456', '使用者2(黃ㄚ杰)', 'u');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `reply`
--
ALTER TABLE `reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
