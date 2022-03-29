-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 3 月 29 日 23:33
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `beers`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `beers`
--

CREATE TABLE `beers` (
  `id` int(11) NOT NULL COMMENT 'ビールID',
  `name` varchar(100) NOT NULL COMMENT '商品名',
  `about` varchar(300) NOT NULL COMMENT '概要',
  `chart_num` int(11) NOT NULL COMMENT 'チャート検索結果'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `beers`
--

INSERT INTO `beers` (`id`, `name`, `about`, `chart_num`) VALUES
(1, 'アラビアンライム・エール', '自社農園で育てたホップと世界中から厳選した素材を使った新しいスタイルのクラフトビール', 4),
(2, 'こぶし花ビール', '麦の酒らしさにこだわり麦芽100％で製造。ろ過や熱処理をしないタンクの中そのままの味わい。ビール本来のうま味を時間をかけて凝縮した古き良き時代のリバイバルビール。', 2),
(3, 'ペールエール華熊', 'ビール初心者にもオススメの定番「ペールエール華熊」のほか、季節限定品も多数あり、副原料に果物やスパイスなどが使用されているものもあるので、バリエーション豊かな味わいが楽しめる。', 4),
(4, '雑穀ヴァイツェン', '原料から100%自家栽培の“地ビール”づくりを目指すブルワリー「麦雑穀工房」の看板ビールは、ドイツ発祥の白ビール＝ヴァイツェンをベースに穀物の風味を豊かにアレンジ。', 4),
(5, 'コバトンビール', '毛呂山町の老舗酒蔵「麻原酒造」越生ブリュワリーが製造・販売。フローラルな香りとクリーンな苦みが特長のピルスナータイプで、すっきりとした喉ごしです。', 4),
(6, 'COEDO 瑠璃 -Ruri-', '日本人には一番なじみのあるスッキリとした味わいが特徴のピルスナースタイルのビール。深みある味わいとホップの香味苦味のバランスが良く、食事と一緒に楽しみたい１本です。', 4),
(7, 'COEDO 毬花 -Marihana-', '淡い黄金色と純白の泡にシトラスを想わせるアロマホップが華やかに香るセッション・IPA。ホップの魅力を存分にお楽しみいただけるように、香り高いホップを贅沢に投入しその香りを丁寧に引き出しました。香り高く洗練された苦味のあるしっかりとしたフレーバーと、低めのアルコール度数にクリアな飲み口のドリンカビリティを両立させた味わいです。', 2),
(8, 'COEDO 白 -Shiro-', '無濾過ビールならではの明るくなめらかな白濁色が特徴の小麦のビール。小麦麦芽とそのために特別に選んだ酵母が醸し出す甘い香りは果実を思わせ、さわやかながらもコクが感じられる滑らかな舌触りと喉越しをお楽しみいただけます。', 4),
(9, 'COEDO 伽羅 -Kyara-', '赤みがかった深い黄褐色、伽羅(きゃら)色のビール。白葡萄やスパイシーな柑橘を感じさせるアロマホップが香り、鮮やかで綺麗な苦味とともに口の中に広がります。6種の麦芽の配合とやや高めのアルコール分が、味の膨らみと丸みあるミディアムボディを織り成しています。低温発酵ラガー酵母による、飲み応えがありながらもきれていく心地よい後味です。', 2),
(10, 'COEDO 漆黒 -Shikkoku-', '艶やかな黒色と茶白色の細やかな泡立ちのコントラストが冴える長期熟成ビール。アロマホップは心地よい香りをあたえ、2種類のブラックモルトの他、6種の麦芽の配合が、重たすぎないまろやかさと軽やかさのバランスを生み出しました。', 1),
(11, 'COEDO 紅赤 -Beniaka-', '赤みがかった琥珀色と香ばしい甘味が特徴のプレミアムエール。上質の麦芽と薩摩芋（武州小江戸川越産金時薩摩芋紅赤/焼芋加工）から生まれた類い稀な仕上りです。薩摩芋の風味とその色にちなんで「紅赤 -Beniaka-」と名付けられました。本品は、ろ過せず瓶詰めをしています。「無ろ過・生」ならではの豊潤な味わい「日本川越オリジナルのエール」をお楽しみください。', 2),
(12, '所沢ビール Bitches Brew', 'ほのかに漂う柑橘系のアロマに、ビール本来の甘みとホップの苦味を絶妙なバランスで仕上げました。すっきりとした後味が特徴の毎日飲みたくなるペールエールです。', 4),
(13, '所沢ビール The Cannonball', 'オレンジを感じさせる爽やかで甘いアロマ。それから一転、意表を突かれるようにパワフルな苦味が口いっぱいにぐんぐんと広がります。', 4),
(14, '所沢ビール 3355', '爽やかな甘いフルーツのアロマに、パイナップルを連想するような酸味あるテイスト。そしてアルコール度数はなんと3.5%！低アルコールでもしっかりとした風味の誰にでも飲み易いビールです。さんさんと陽が降り注ぐ午後に楽しく飲んでもらいたい。そんな想いを込めて3355 (燦々午後)と名付けました。', 3),
(15, '所沢ビール Pharaoh', 'スモーク麦芽を使った日本では珍しいポーター。黒ビールの独特の甘さと香りにスモーク(ブナ)のアロマを織り交ぜました。ビール通から黒ビールはちょっと苦手という方まで楽しんでいただけるスモークポーターです。', 1),
(16, '所沢ビール Milestone ', '構想2年。”世界初”の『リンゴの木』のチップを使った自家燻製レッドエール。りんごのアロマとスモーキーな後味が絶妙です。', 4),
(17, '所沢ビール Smoked Lemon', '令和の新作登場。世界に類をみない、果実とスモークビールを融合させた、フルーツ・スモークビール。\r\n国産の有機レモンをたっぷりと使用。スモークビールと溶け合う独特な柑橘アロマとフレーバーが食欲を刺激します。', 3),
(18, 'Shikibeer CARMINE', '酵母が醸し出す香とモルト由来の香ばしさの中に、ホップの香が控えめに効いてます。\r\n高めのアルコール。ワインを思わせる赤い色。しっかりした飲みごたえです。', 4),
(19, 'Shikibeer YAMABUKI ', '酵母由来のフルーツ感ある香りと、ハイアルコール特有の飲みごたえ。', 3),
(20, 'Shikibeer JUNOS ', '酵母由来のフルーツ感ある香りに加えて、山椒のスパイシーな味わい、柚子の香りを微かに感じられます。', 3),
(21, 'Shikibeer MARIGOLD', 'ノーブルホップの控えめな香が、酵母が醸し出す香と渾然一体となった独特の味わいを作り出しています。自家製オレンジピールの使用でフルーツ感も強調されています。', 3),
(22, 'Shikibeer AMBER', 'モルト由来の味わいと、酵母が作り出す香に加えて、やや強めのホップが主張します。苦味もしっかり。', 2),
(23, 'Shikibeer PEARL ', '酵母由来が醸し出す香は、おとなしくもありつつ、フルーティでスパイシー。それなりにしっかり主張します。温度が上がってくると、しっかりとベルジャンらしさが際立ちます。', 4);

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE `comments` (
  `text` varchar(150) NOT NULL COMMENT 'コメント内容',
  `user_id` int(11) NOT NULL COMMENT 'コメントをしたユーザーID',
  `beer_id` int(11) NOT NULL,
  `update_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`text`, `user_id`, `beer_id`, `update_at`) VALUES
('hey', 1, 1, '2022-02-27 11:52:37'),
('great', 1, 2, '2022-02-27 11:55:44'),
('ちょあ', 1, 1, '2022-02-27 18:52:48'),
('yeah', 2, 19, '2022-02-27 23:41:46'),
('Complete!', 8, 10, '2022-02-28 00:10:17'),
('Perfect', 2, 4, '2022-02-28 08:14:05'),
('Nice:)', 2, 4, '2022-02-28 08:14:36'),
('Complete!', 9, 14, '2022-02-28 14:59:39'),
('yeah', 1, 21, '2022-03-02 11:54:46'),
('Nice:)', 1, 21, '2022-03-02 13:23:51'),
('Nice:)', 7, 14, '2022-03-29 14:38:40'),
('Nice:)', 8, 14, '2022-03-29 14:47:09'),
('Nice:)', 11, 14, '2022-03-29 15:18:43'),
('Nice:)', 6, 14, '2022-03-29 16:09:49');

-- --------------------------------------------------------

--
-- テーブルの構造 `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL COMMENT '画像ID',
  `image_pass` varchar(300) NOT NULL COMMENT '画像pass',
  `name` varchar(300) NOT NULL COMMENT '画像の名前',
  `type` varchar(25) NOT NULL COMMENT '画像タイプ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `images`
--

INSERT INTO `images` (`id`, `image_pass`, `name`, `type`) VALUES
(1, 'beerId_1.jpeg', 'beerId_1', 'jpeg'),
(2, 'beerId_2.jpeg', 'beerId_2', 'jpeg'),
(3, 'beerId_3.jpeg', 'beerId_3', 'jpeg'),
(4, 'beerId_4.jpeg', 'beerId_4', 'jpeg'),
(5, 'beerId_5.jpeg', 'beerId_5', 'jpeg'),
(6, 'beerId_6.png', 'beerId_6', 'png'),
(7, 'beerId_7.png', 'beerId_7', 'png'),
(8, 'beerId_8.png', 'beerId_8', 'png'),
(9, 'beerId_9.png', 'beerId_9', 'png'),
(10, 'beerId_10.png', 'beerId_10', 'png'),
(11, 'beerId_11.png', 'beerId_11', 'png'),
(12, 'beerId_12.jpeg', 'beerId_12', 'jpeg'),
(13, 'beerId_13.jpeg', 'beerId_13', 'jpeg'),
(14, 'beerId_14.jpeg', 'beerId_14', 'jpeg'),
(15, 'beerId_15.jpeg', 'beerId_15', 'jpeg'),
(16, 'beerId_16.jpeg', 'beerId_16', 'jpeg'),
(17, 'beerId_17.jpeg', 'beerId_17', 'jpeg'),
(18, 'beerId_18.jpeg', 'beerId_18', 'jpeg'),
(19, 'beerId_19.jpeg', 'beerId_19', 'jpeg'),
(20, 'beerId_20.jpeg', 'beerId_20', 'jpeg'),
(21, 'beerId_21.jpeg', 'beerId_21', 'jpeg'),
(22, 'beerId_22.jpeg', 'beerId_22', 'jpeg'),
(23, 'beerId_23.jpeg', 'beerId_23', 'jpeg');

-- --------------------------------------------------------

--
-- テーブルの構造 `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT '登録者',
  `beer_id` int(11) NOT NULL COMMENT 'ビールID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `beer_id`) VALUES
(1, 1, 1),
(3, 2, 4),
(4, 2, 5),
(5, 1, 15),
(6, 1, 11),
(8, 2, 19),
(9, 1, 18),
(14, 1, 21),
(16, 8, 14),
(17, 11, 14),
(18, 6, 14);

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT 'ID',
  `name` varchar(30) NOT NULL COMMENT '氏名',
  `email` varchar(100) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(300) NOT NULL COMMENT 'パスワード',
  `role` int(11) DEFAULT '1' COMMENT '権限'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'honoka(管理者)', 'test@test.com', '$2y$10$kRt802RhQlbHxtATQgl2L.h36DMoFkhyeC.OLnUr3RWch57s5LFMq', 0),
(2, 'fuka', 'test2@gmail.com', '$2y$10$sOCYSFZva2dNyyft8yaLNebQwcZ3qzNVNvZlIn8G0x/PrCvRpLBhy', 1),
(3, 'riku', 'test3@gmail.com', '$2y$10$O6pKf3Atg16YKIlF7kPsx.6UjRYjbYPZmzeLrqrUElflovD4e4/Im', 1),
(4, 'jun', 'test4@gmail.com', '$2y$10$ANXcbS4etkR2c/LFZcrq9.8cQib7.9Zb.HIUH4Wxj2PiSnKA.2Fq2', 1),
(5, 'kaori', 'test5@gmail.com', '$2y$10$0dGcWFc1Q9caG7TP4PGNX.x4oaaZ5XmM.l0hEe0D54ewpr/enPPxS', 1),
(6, '山田太郎', 'taro@test.com', '$2y$10$90ITm7sSlEJveojoJIPYBuAcjNsHD5qVfvni.tDyC0m7TEesa.SAa', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `beers`
--
ALTER TABLE `beers`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`update_at`);

--
-- テーブルのインデックス `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `beers`
--
ALTER TABLE `beers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ビールID', AUTO_INCREMENT=24;

--
-- テーブルの AUTO_INCREMENT `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '画像ID', AUTO_INCREMENT=24;

--
-- テーブルの AUTO_INCREMENT `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
