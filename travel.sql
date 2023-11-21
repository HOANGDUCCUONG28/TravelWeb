-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2023 at 02:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelec`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `taxkbn` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `souryou` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cate3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `haisou` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiiki` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nissu` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `syuppin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgfile1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgfile2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgfile3` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `taxkbn`, `souryou`, `details`, `cate1`, `cate2`, `cate3`, `size`, `status`, `haisou`, `tiiki`, `nissu`, `syuppin`, `imgfile1`, `imgfile2`, `imgfile3`, `created_at`, `updated_at`) VALUES
(1, '世界遺産ハロン湾のご紹介', 35000, '1', '1', '翡翠色の大海原に無数の奇岩が連なる景勝地\r\n\r\nベトナム北部のハノイから車で4時間。世界の旅行者を魅了し続けるベトナム屈指の絶景ハロン湾。\r\n水墨画のように幻想的な風景が広がるハロン湾には、水平線から大小2.000の奇岩の突き出し、壮大な地球の神秘を感じる事が出来ます。\r\nハノイに旅行する人の9割が訪れる定番の観光地の世界遺産ハロン湾には、日帰りツアーで訪れる事も出来ますが、せっかくであれば豪華クルーズ船に一泊する事もおすすめ。時間と共に千変万化するハロン湾の様々な表情は、時間の流れを忘れさせてくれます。\r\n神秘的な伝説に彩られたハロン湾の魅力をご紹介いたします。', '2 days', '3 days', '4 days', 'XS(SS)', '未使用に近い', '送料込み(出品者負担)', '北部', NULL, NULL, '1-001.png', NULL, NULL, '2022-11-02 01:19:14', '2022-11-02 01:19:14'),
(2, 'サンシー　SUNSEA フリマパンツ', 6400, '1', '1', 'SUNSEAのフリマパンツになります。 履き心地、カラーリング良く機能的でスタイリッシュなアイテムになります。 気に入って着用していましたが、まだまだご使用いただけると思います。 写真7枚目のようにかすかなシミなどありますが、ほぼ目立たないと思います。その分お安く設定いたしますので ご理解の上ご購入お願い致します。 (サイズ)2 (平置きウエスト)37-43cm (総丈)102cm まだまだご使用いただけると思いますがあくまでも中古品になりますので、ご理解の上ご購入お願い致します。', 'メンズ', 'パンツ', 'ワークパンツ/カーゴパンツ', 'L', 'やや傷や汚れあり', '送料込み(出品者負担)', '神奈川県', NULL, NULL, '2-001.png', NULL, NULL, '2022-11-02 01:21:17', '2022-11-02 01:21:17'),
(3, 'SUNSEA 13AW ナイスマテリアル パンツ サンシー イージー フリマ', 9600, '1', '1', '【ブランド】SUNSEA / サンシー 【アイテム名】 13AW ナイスマテリアル パンツ 【カラー】black 【素材】wool 【サイズ】2 実寸 ウエスト98 レングス61.5 股上34.5(ウエストベルト含) 総丈92.5(ウエストベルト含) 【製造国】日本製 【状態】中古 ポケット部分にお直しあり(同色の糸で縫われているので違和感はありません) 【SUNSEA】 サンシーの13AW、ナイスマテリアルパンツです。 素材にはトロピカルウールのような薄手の肌触りのいいウール生地が使用されています。 サマーウールのように薄手なので真冬以外は大活躍するナイスな素材感のパンツだと思います。\r\n\r\n', 'メンズ', 'パンツ', 'スラックス', 'M', '傷や汚れあり', '送料込み(出品者負担)', '福岡県', NULL, NULL, '3-001.png', NULL, NULL, '2022-11-02 01:22:59', '2022-11-02 01:22:59'),
(4, 'プレステ５本体', 85500, '1', '1', 'ドン・キホーテの購入予約抽選に当選して購入してきました。 開封済シールが貼られていますが、その上からドン・キホーテの赤テープを貼ってますので、このまま新品未開封の状態で発送致します。 同条件で早くご連絡頂いた方に決めさせて頂きますので、良ければ早目のご検討ご連絡をお待ちしております。', '本・音楽・ゲーム', 'テレビゲーム', NULL, NULL, '新品、未使用', '着払い(購入者負担)', '愛知県', NULL, NULL, '4-001.png', NULL, NULL, '2022-11-02 01:24:45', '2022-11-02 01:24:45'),
(5, 'ギブソン　レスポール', 273000, '1', '1', 'ギブソン　レスポール\r\nスタンダード\r\n\r\n32万ぐらいで新品購入\r\n仕事の関係で出張も多く、\r\nほとんど弾いていない状態です。\r\n他の人に弾いていただいた方がいいので\r\n出品に致しました。\r\nよろしくお願いします。', 'おもちゃ・ホビー・グッズ', '楽器/器材', 'エレキギター', NULL, ' 目立った傷や汚れなし', '着払い(購入者負担)', '佐賀県', NULL, NULL, '7-001.png', NULL, NULL, '2022-11-02 01:26:21', '2022-11-02 01:26:21'),
(6, 'regdfgdfg', 1111, NULL, '2', '33', '44', '55', '66', '77', '88', '99', '00', '111', '222', '333', '444', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
