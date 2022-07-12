-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-07-11 10:28:54
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `def_space`
--

-- --------------------------------------------------------

--
-- 資料表結構 `coffee_reserve`
--

CREATE TABLE `coffee_reserve` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reserveDate` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `employees` varchar(10) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `coffee_reserve`
--

INSERT INTO `coffee_reserve` (`id`, `email`, `reserveDate`, `startTime`, `employees`, `name`, `phoneNumber`) VALUES
(1, 'yichan@gmail.com', '2022-07-06', '10:30:00', '2', '陳依依', '0976485468'),
(2, 'yichan@gmail.com', '2022-08-16', '14:00:00', '5', '陳依依', '0976485468'),
(3, 'yichan@gmail.com', '2021-01-14', '13:30:00', '2', '陳依依', '0976485468'),
(4, 'yichan@gmail.com', '2022-03-20', '10:00:00', '1', '陳依依', '0976485468'),
(5, 'yichan@gmail.com', '2021-05-01', '10:30:00', '2', '陳依依', '0976485468'),
(6, 'yulin@gmail.com', '2022-07-06', '11:00:00', '2', '林冠宇', '0976485468');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `firstname` varchar(5) DEFAULT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNumber` char(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `country` char(11) DEFAULT NULL,
  `township` char(11) DEFAULT NULL,
  `address` char(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `firstname`, `lastname`, `email`, `phoneNumber`, `password`, `birthdate`, `country`, `township`, `address`) VALUES
(1, '王', '宇', 'yuwang@gmail.com', '0976453168', 'aaa123456', '1976-08-26', NULL, NULL, NULL),
(2, '王', '小明', 'mingwang@gmail.com', '0916416868', 'aaa123456', '1996-10-06', NULL, NULL, NULL),
(3, '宋', '國榮', 'kuorong@gmail.com', '0911648735', 'aaa123456', '1981-05-01', NULL, NULL, NULL),
(4, '林', '冠宇', 'yulin@gmail.com', '0944764853', 'aaa123456', '2000-07-21', NULL, NULL, NULL),
(5, '黃', '語軒', 'xuanhuang@gmail.com', '0976485765', 'aaa123456', '2000-02-24', NULL, NULL, NULL),
(6, '陳', '依依', 'yichan@gmail.com', '0911648576', 'dT3//zFW', '2002-02-17', '臺中市', '南屯區', '公益路二段51號'),
(7, '陳', '冠明', 'mingchen@gmail.com', '0911468576', 'aaa123456', '1996-04-14', NULL, NULL, NULL),
(12, '林', '駿逸', 'nicklinprocess@gmail.com', '0946857648', '4p7V8jcL', '2022-06-09', '0', '0', '公益路18號'),
(17, '黃', '雨萱', 'yuxuanhuang20000504@gmail.com', '0976854985', 'tNQ4CM11', '2000-05-04', '台中市', '西屯區', '文華路100號');

-- --------------------------------------------------------

--
-- 資料表結構 `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `orderNumber` int(11) DEFAULT NULL,
  `productImage` varchar(200) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderNumber`, `productImage`, `productName`, `quantity`, `price`) VALUES
(1, 1764857352, '../images/shop/product/38808884.jpeg', '上陸許可 Traveling & Hugging - 台日12位創作者作品集別冊', 1, 1500),
(2, 1648576485, '../images/shop/product/39815157.jpg', '【限量】上陸許可 Traveling & Hugging - 方序中設計師海報', 1, 980),
(3, 1764857352, '../images/shop/product/38971326.jpeg', '上陸許可 Traveling & Hugging - 主視覺T-shirt', 1, 680),
(4, 1664857612, '../images/shop/product/39307973.jpeg', '上陸許可 Traveling & Hugging - 台日交流限定掛耳包', 1, 360),
(5, 1764857352, '../images/shop/product/38971387.jpg', '上陸許可 Traveling & Hugging - 矢後直規設計師絲巾', 1, 980);

-- --------------------------------------------------------

--
-- 資料表結構 `order_history`
--

CREATE TABLE `order_history` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `orderNumber` int(11) DEFAULT NULL,
  `orderDate` date DEFAULT NULL,
  `totalPrice` int(11) DEFAULT NULL,
  `deliveryStatus` varchar(10) DEFAULT NULL,
  `productImage` varchar(200) DEFAULT NULL,
  `productName` varchar(50) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `order_history`
--

INSERT INTO `order_history` (`id`, `email`, `orderNumber`, `orderDate`, `totalPrice`, `deliveryStatus`, `productImage`, `productName`, `quantity`, `price`) VALUES
(1, 'yichan@gmail.com', 1648576485, '2022-07-05', 980, '配送中', '', '', 0, 0),
(2, 'mingwang@gmail.com', 1485764852, '2021-05-12', 6500, '已送達', '[value-7]', '[value-8]', 0, 0),
(3, 'yichan@gmail.com', 1764857352, '2021-10-21', 3160, '已送達', '[value-7]', '[value-8]', 0, 0),
(4, 'yichan@gmail.com', 1664857612, '2022-01-01', 360, '已送達', '[value-7]', '[value-8]', 0, 0);

-- --------------------------------------------------------

--
-- 資料表結構 `rent_site`
--

CREATE TABLE `rent_site` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reserveDate` date DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `site` varchar(10) DEFAULT NULL,
  `name` varchar(10) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  `duration` varchar(10) DEFAULT NULL,
  `addDevice` varchar(10) DEFAULT NULL,
  `purpose` varchar(200) DEFAULT NULL,
  `remark` varchar(200) DEFAULT NULL,
  `introduce` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `rent_site`
--

INSERT INTO `rent_site` (`id`, `email`, `reserveDate`, `startTime`, `site`, `name`, `phoneNumber`, `duration`, `addDevice`, `purpose`, `remark`, `introduce`) VALUES
(1, 'yichan@gmail.com', '2022-07-02', '10:00:00', 'A', '陳依依', '0976485468', '5天', '否', '文創小物展覽', '需要多組燈具', '一樓・靜亮的綠\r\n騎樓｜午後陽光灑在磨石子地面，留白攤車與市集聚集，人群熙攘，穿梭在光影間欣賞創作。\r\n\r\n外帶區｜精品義式咖啡、氮氣茶冷泡茶、blank sweet 甜點販售，當外帶成為文明習慣，回頭講究品質與意義，從儀式感建立與自己的關係，焦躁的日程中，讓渡出一片陰影給自己，重新調整步伐與呼吸。\r\n\r\n室內｜留白茶想・茶藝體驗空間：茶思，想的是技藝之深，泡一碗好茶，和所愛之人分享，喝的是茶香，品的是相聚。\r\n\r\n天井區｜保留陽光原始的能量，大片光從頂處落下，植物充盈於此，為旅人留下停駐的理由。\r\n\r\n一樓作為「留白茶想」茶藝品牌的場域，利用老風化木桌、早期戲院木椅及斑駁不規則的灰牆傳遞歲月痕跡，毛玻璃透出的燈光替空間注入了質樸內斂的靈魂，創造一個與自我對話的飲茶環境，圓角型吧台設計將高度降至一般桌高，同時融入茶席擺設，讓飲茶者可以舒適地使用桌面外，也能輕鬆地與茶師互動、交流。\r\n\r\n一樓側邊「Blank To Go」，延續騎樓的水泥牆面，並加入共通室內的圓拱型長虹玻璃門設計，天花由白胚布幔交疊而成，透出隱約可見的古老鋼構，是粗獷與溫柔的交融體。'),
(2, 'yichan@gmail.com', '2022-05-11', '10:00:00', 'B', '陳依依', '0976485468', '3天', '是', '攝影展覽', '需要多張桌椅', '二樓・日夜浮影\r\n白日・中島｜留白啡語・手沖咖啡體驗區・咖啡師手沖，生活要慢磨，讓疲倦的靈魂在此得到心靈的小憩。\r\n\r\n夜晚 ・中島｜留白酒喃・自品體驗・派對 ⋄ 單點 ，匯集各地調酒師調製主題套酒，以情境體驗引導品酒的台式派對，喝的同時感受文化的律動。\r\n\r\n演繹空間｜天井由下而上來到二樓，大片陽光踏成路徑，進入視野寬敞的室內空間。為創作與活動留下可能性的展地，每季留白自選展覽，為創作留下發生與共鳴的大面面積，窗外是樹景，風吹的時候，感覺自己也能在樹影下得到喘息。\r\n\r\n二樓以時間為軸交會出日夜的流轉，白天「留白啡語」與夜晚的「留白酒喃」，運用燈光變化對應場景的轉換，屏除掉不必要的裝飾，適度騰出流動的空間。五米長的手沖咖啡中島貫穿左半邊的風景，與座落於中間的吧台形成感官上的流動，透過空間內簡約而乾淨的線條堆疊、構築成人與人之間互動的縮影。'),
(3, 'kuorong@gmail.com', '2022-03-09', '10:00:00', 'B', '宋國榮', '0911648735', '3天', '否', '酒展', '需要多組桌椅', '二樓・日夜浮影\r\n白日・中島｜留白啡語・手沖咖啡體驗區・咖啡師手沖，生活要慢磨，讓疲倦的靈魂在此得到心靈的小憩。\r\n\r\n夜晚 ・中島｜留白酒喃・自品體驗・派對 ⋄ 單點 ，匯集各地調酒師調製主題套酒，以情境體驗引導品酒的台式派對，喝的同時感受文化的律動。\r\n\r\n演繹空間｜天井由下而上來到二樓，大片陽光踏成路徑，進入視野寬敞的室內空間。為創作與活動留下可能性的展地，每季留白自選展覽，為創作留下發生與共鳴的大面面積，窗外是樹景，風吹的時候，感覺自己也能在樹影下得到喘息。\r\n\r\n二樓以時間為軸交會出日夜的流轉，白天「留白啡語」與夜晚的「留白酒喃」，運用燈光變化對應場景的轉換，屏除掉不必要的裝飾，適度騰出流動的空間。五米長的手沖咖啡中島貫穿左半邊的風景，與座落於中間的吧台形成感官上的流動，透過空間內簡約而乾淨的線條堆疊、構築成人與人之間互動的縮影。'),
(4, 'yichan@gmail.com', '2021-02-10', '11:00:00', 'C', '陳依依', '0976485468', '2天', '否', '畫作展覽', '需要掛勾', '三樓・藍色月落\r\n留白選品｜留白計畫開發、揀選風格獨具的藝術家、設計師推出選物良品，生活好伴，集結深刻設計、細緻工法的伴手禮與精緻品牌，讓好物串連起生活的形狀。\r\n\r\nBlue Beach｜藍灘的核心價值是 Sustainable by Quality——單寧牛仔布料自然的色落、堅韌、耐用、並隨著時代的演進歷久不衰，橫跨流行、復古、時尚、設計。伴隨人們經過時間更迭的特殊材質，也是環保和永續品牌的基本體質。藍攤精選歐美日職人和工匠的技藝，讓每條牛仔褲都是個人性格、特色的展示。\r\n\r\n演繹空間｜擁有獨立精神的展區與有機實驗基地，複合展覽空間特質，亦可發展為品牌課程或技藝展示區。\r\n\r\n三樓左側的 Blue Beach 藍灘丹寧概念店，依循材質表現原則，使用由大量老木片製成的櫃檯，每一木片都承載著不同歷史痕跡，一如留白專注於感受技藝，發掘台灣細工慢活的職人。將裁縫用剪刀製成牆壁掛鉤，完整地將其品牌理念運用在空間細節裡。右側的展覽、教學空間，一樣保持開放式格局，因應每次展覽生長出不同樣貌。');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `coffee_reserve`
--
ALTER TABLE `coffee_reserve`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `rent_site`
--
ALTER TABLE `rent_site`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `coffee_reserve`
--
ALTER TABLE `coffee_reserve`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `order_history`
--
ALTER TABLE `order_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `rent_site`
--
ALTER TABLE `rent_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
