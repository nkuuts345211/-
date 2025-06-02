-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2025-06-03 01:47:44
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
  `option` varchar(20) NOT NULL,
  `img` text NOT NULL,
  `add_time` datetime NOT NULL,
  `text` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `food`
--

INSERT INTO `food` (`id`, `c_num`, `c_name`, `c_money`, `option`, `img`, `add_time`, `text`) VALUES
(1, 'A001', 'menu1', 1000, '主餐', 'menu1.jpg', '2025-06-02 16:25:59', '香嫩多汁大雞排'),
(2, 'A002', 'menu2', 1000, '主餐', 'menu2.jpg', '2025-06-02 16:27:17', '超級美式熱狗堡'),
(3, 'A003', 'menu3', 2000, '主餐', 'menu3.jpg', '2025-06-02 16:27:45', '大烤雞全餐'),
(4, 'A004', 'menu4', 2000, '主餐', 'menu4.jpg', '2025-06-02 16:27:59', '色香味俱全的烤雞腿'),
(5, 'A005', 'menu5', 1000, '主餐', 'menu5.jpg', '2025-06-02 16:28:14', '美味的焗烤麵'),
(6, 'A006', 'menu6', 1000, '炸物', 'menu6.jpg', '2025-06-02 16:28:31', '金黃酥脆的炸薯條'),
(8, 'A007', 'menu7', 70, '點心', 'ice.png', '2025-06-02 16:28:45', '香草冰淇淋'),
(9, 'A008', 'menu8', 120, '點心', 'cake.jpg', '2025-06-02 16:29:14', '草莓蛋糕'),
(10, 'A009', 'menu9', 150, '點心', 'Chocolat.jpg', '2025-06-02 16:29:25', '巧克力'),
(11, 'A010', 'menu10', 50, '點心', '蛋塔.jpg', '2025-06-02 16:29:37', '蛋塔'),
(12, 'A011', 'menu11', 120, '點心', '草莓大福.jpg', '2025-06-02 16:29:57', '草莓大福'),
(13, 'A012', 'menu12', 200, '點心', '可麗露.jpg', '2025-06-02 16:30:09', '可麗露'),
(14, 'A013', 'menu13', 250, '主餐', '烤鴨.jpg', '2025-06-02 16:30:38', '烤鴨'),
(15, 'A014', 'menu14', 200, '炸物', '炸雞.jpg', '2025-06-02 16:31:29', '炸雞'),
(16, 'A015', 'menu15', 120, '主餐', '炒飯.jpg', '2025-06-02 16:31:41', '炒飯'),
(17, 'A016', 'menu16', 150, '主餐', 'beef.jpg', '2025-06-02 16:32:04', '牛排'),
(18, 'A017', 'menu17', 130, '湯品', '牛肉湯.jpg', '2025-06-02 20:40:08', '牛肉湯'),
(21, 'A018', 'menu18', 30, '飲品', '可樂.jpg', '2025-06-02 20:41:08', '可樂'),
(22, 'A019', 'menu19', 35, '湯品', '味噌湯.jpg', '2025-06-02 20:42:06', '味噌湯'),
(23, 'A020', 'menu20', 35, '飲品', '芬達.jpg', '2025-06-03 07:29:11', '芬達'),
(24, 'A021', 'menu21', 50, '湯品', '玉米濃湯.jpg', '2025-06-03 07:30:05', '玉米濃湯'),
(25, 'A022', 'menu22', 40, '點心', '巧克力鬆餅.jpg', '2025-06-03 07:31:56', '巧克力鬆餅'),
(26, 'A023', 'menu23', 50, '湯品', '香菇雞湯.jpg', '2025-06-03 07:39:34', '香菇雞湯'),
(27, 'A024', 'menu24', 60, '點心', '提拉米蘇.jpg', '2025-06-03 07:40:34', '提拉米蘇'),
(28, 'A025', 'menu25', 60, '點心', '貓掌印布丁.jpg', '2025-06-03 07:41:43', '貓掌印布丁'),
(29, 'A026', 'menu26', 55, '湯品', '絲瓜蛤蜊湯.jpg', '2025-06-03 07:44:01', '絲瓜蛤蜊湯');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

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
