-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 18-12-17 00:34
-- 서버 버전: 5.7.24
-- PHP 버전: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `zigzag`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('3ev6meb7eg6vabp27v1pbo5lpbg4n9av', '::1', 1544232405, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343233323430353b),
('3r5f88oou4fb48tfbah4htsul2vcqber', '172.16.22.96', 1544948003, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343934383030333b),
('3t6bd9lpp7mmb9so74gk65ue4m5eencs', '::1', 1544513483, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531333438333b757365725f69647c733a313a2230223b757365725f6e616d657c733a313a2231223b69736d616e616765727c733a313a2231223b69735f6c6f67696e7c623a313b),
('40ceq3ik87mg7622ptmo70d6655v7ban', '::1', 1544514197, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343139373b757365725f69647c733a313a2230223b757365725f6e616d657c733a313a2231223b69736d616e616765727c733a313a2231223b69735f6c6f67696e7c623a313b),
('54si0sr652d71109djkrurksnitgl8o1', '::1', 1544515019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531353031393b757365725f69647c733a313a2230223b757365725f6e616d657c733a393a22ec9db4ec9881eab5ac223b69736d616e616765727c733a313a2231223b69735f6c6f67696e7c623a313b),
('7eh1b24c3mjuh19urs9rempt10sp9g50', '172.16.212.90', 1544682124, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343638323132343b),
('7i8hiokadgo5nqa27se4baos9u1ouuh1', '::1', 1544231875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343233313837353b6d6573736167657c733a39383a22eba19ceab7b8ec9db8ec979020ec8ba4ed8ca820ed9688ec8ab5eb8b88eb8ba42e5c6eec9584ec9db4eb9494ec998020ebb984ebb080ebb288ed98b8eba5bc20eb8ba4ec8b9c20ed959c20ebb28820ed9995ec9db8ed95b4eca3bcec84b8ec9a942e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7ie6a8h3cdi60ujpbgokh4o3cd03ihqr', '::1', 1544522188, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343532323138383b),
('9jkp3rf2r1pc1ide2f0v0ph0li5q2g51', '::1', 1544514631, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343633313b),
('ba2brce97pd99rd9kel805e5c6up6ln4', '172.16.212.90', 1544682123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343638323132333b),
('c6itcrq64rcbfrs8i0o9640nntq2mtjt', '::1', 1544513115, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531333131353b757365725f69647c733a313a2230223b757365725f6e616d657c733a313a2231223b69736d616e616765727c733a313a2231223b69735f6c6f67696e7c623a313b),
('dp4k2q1cqtasug8da41e467p0ltf9ej6', '::1', 1544634199, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343633343139393b),
('ei4p6couvnm3pv25tpj5vea0larm1kpn', '::1', 1544233321, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343233333331303b6d6573736167657c733a39383a22eba19ceab7b8ec9db8ec979020ec8ba4ed8ca820ed9688ec8ab5eb8b88eb8ba42e5c6eec9584ec9db4eb9494ec998020ebb984ebb080ebb288ed98b8eba5bc20eb8ba4ec8b9c20ed959c20ebb28820ed9995ec9db8ed95b4eca3bcec84b8ec9a942e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('ffm24ajt1dnijkpik6cme6v0to1sudfh', '::1', 1544522974, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343532323937343b),
('ghis4ettjal7cp2nforj1n3h6eqovomj', '172.16.212.90', 1544595203, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343539353230333b),
('glvt4caqrgt4cee1solhq51g3uekfqkg', '172.16.22.162', 1544858248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343835383234373b),
('gsvba9u9ne7a1jisfl3a720sm537m5su', '::1', 1544242149, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343234313836393b),
('gu0m9a8jur5hkuu9i1duoh2q45v6c72s', '::1', 1544534875, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343533343837353b),
('jpafvcdoqplc1tk8mcnea3j86v0oarmj', '172.16.212.90', 1544595204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343539353230343b),
('kd1jksm8go2iib75one4fbjh4tpe9n3l', '172.16.212.178', 1545035480, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353033353438303b),
('l8h3jcfgerr90tagnmn1kaotbov4vm8j', '::1', 1544514707, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343637363b),
('lkp3sufbgnh1o3nobg9cf20o8kki5t2k', '::1', 1544513859, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531333835393b757365725f69647c733a313a2230223b757365725f6e616d657c733a313a2231223b69736d616e616765727c733a313a2231223b69735f6c6f67696e7c623a313b),
('m4pglvi3ts8tjsj3l1anh72otuhcjlob', '::1', 1544232794, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343233323739343b6d6573736167657c733a39383a22eba19ceab7b8ec9db8ec979020ec8ba4ed8ca820ed9688ec8ab5eb8b88eb8ba42e5c6eec9584ec9db4eb9494ec998020ebb984ebb080ebb288ed98b8eba5bc20eb8ba4ec8b9c20ed959c20ebb28820ed9995ec9db8ed95b4eca3bcec84b8ec9a942e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('mc5ms0l30u22dbjp4i27d5tq80h6v3ua', '172.16.22.162', 1544858248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343835383234373b),
('mpqogl3nenfmrtru647nu1u4aa4m2l99', '::1', 1544233310, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343233333331303b6d6573736167657c733a36303a222432792431302449383246666f52583754426a6442444355427051324f574f67422f4262586673396b555173676a6c354e346b4147682e6d6d4d494b223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('q0m2f2nmoaej1l3vou2899ougnqtuqic', '172.16.22.96', 1544948004, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343934383030343b),
('sk73bfr2bf7jf3tp2gml9f39pe0qo48e', '::1', 1544514676, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534343531343637363b),
('vtbn7kr13afghseag6nvpqfu2nr203bk', '172.16.212.178', 1545035478, 0x5f5f63695f6c6173745f726567656e65726174657c693a313534353033353437383b);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_favitems`
--

CREATE TABLE `t_favitems` (
  `FI_Index` int(4) NOT NULL,
  `U_Index` int(4) NOT NULL,
  `I_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_favitems`
--

INSERT INTO `t_favitems` (`FI_Index`, `U_Index`, `I_ID`) VALUES
(5, 1, 40),
(11, 0, 3);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_favshoppingmalls`
--

CREATE TABLE `t_favshoppingmalls` (
  `FS_Index` int(4) NOT NULL,
  `U_Index` int(4) NOT NULL,
  `S_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_favshoppingmalls`
--

INSERT INTO `t_favshoppingmalls` (`FS_Index`, `U_Index`, `S_ID`) VALUES
(12, 0, 16);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_items`
--

CREATE TABLE `t_items` (
  `I_ID` int(4) NOT NULL,
  `I_Name` varchar(100) NOT NULL,
  `I_IMG` varchar(300) NOT NULL,
  `S_ID` int(4) NOT NULL,
  `I_Details` varchar(400) NOT NULL,
  `I_Price` int(4) NOT NULL,
  `I_URL` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_items`
--

INSERT INTO `t_items` (`I_ID`, `I_Name`, `I_IMG`, `S_ID`, `I_Details`, `I_Price`, `I_URL`) VALUES
(1, '3구스다운 패딩조끼(ver.3)', 'http://imvely.com/web/product/big/201809/7d5f0dbdf131a0eb1a02f25409d62b53.jpg', 1, '칼바람부는 날씨에도 끄떡없는 임블리 3구스다운 패딩조끼! 다양한 컬러와 사이즈로 한 층 더 업그레이드! 지금 바로 경험해보세요♥', 49800, 'http://imvely.com/product/detail.html?product_no=15646&cate_no=71&display_group=1'),
(2, '블리시그니처 쓰리웨이패딩야상', 'http://imvely.com/web/product/big/201810/820c0db0c1bf98112cf02445ecc9e04c.jpg', 1, '2년만에 돌아온 임블리 쓰리웨이 패딩 야상! 어느 해보다 길고 강력한 한파를 스타일리쉬하게 이겨낼 수 있는 단 하나의 방법! 지금 놓치시면 기회는 다시 없어요! 지금 바로 클릭♥', 318000, 'http://imvely.com/product/detail.html?product_no=15799&cate_no=71&display_group=1'),
(3, '알펜글로우 4단혁명 구스롱패딩(transformable)/제트블랙', 'http://imvely.com/web/product/big/201810/6956702222ced33bd1b928665551e583.jpg', 1, '★컴백, 알펜글로우 정식오픈★ 롱패딩/숏패딩/어깨숄/무릎담요로 400%의 활용도를 자랑하는 알펜글로우의 4단혁명 구스롱패딩', 259000, 'http://imvely.com/product/detail.html?product_no=15354&cate_no=71&display_group=1'),
(4, '씨크블랙 오버니부츠', 'http://imvely.com/web/product/big/201810/c67905b8400acf75940417883e6768a0.jpg', 1, '', 50000, 'http://imvely.com/product/detail.html?product_no=15741&cate_no=71&display_group=1'),
(5, '개미허리 덕다운패딩', 'http://imvely.com/web/product/big/201811/c39c414510ec2122f93a997b561f4d43.jpg', 1, '입자마자 완성되는 마네킹 몸매! 따뜻한 덕다운과 뜨끈함을 전해주는 발열안감으로 기능과 스타일을 한 번에 잡은 임블리 개미허리 덕다운패딩', 138000, 'http://imvely.com/product/detail.html?product_no=15878&cate_no=71&display_group=1'),
(6, '[VELYSOME]쉰네번째, 리얼송치 레오파드 카드지갑', 'http://imvely.com/web/product/big/201811/ff8f8110279cc0089ed8ba525bdf972f.jpg', 1, '리얼 가죽소재에 덧댄 트렌디한 어흥이 패턴, 한 손에 들어오는 사이즈, 활용도까지 다~갖춘 레오파드 카드지갑!!!', 29800, 'http://imvely.com/product/detail.html?product_no=15976&cate_no=71&display_group=1'),
(7, '블랙스완 로프원피스', 'http://imvely.com/web/product/big/201811/ce3a8d020ff6365c61e283dfd70cdb49.jpg', 1, '시크하면서 유니크한 디자인으로 입는순간 멋블리! 포인트 확실히 살려주는 임블리메이드 로프원피스', 82000, 'http://imvely.com/product/detail.html?product_no=16014&cate_no=71&display_group=1'),
(8, '3구스다운 경량패딩(ver.2)', 'http://imvely.com/web/product/big/201810/e16d6b730d4babbbfe6847fd64dfd850.jpg', 1, '더욱 높은 활용도를 위해 이번엔 브이넥으로 돌아왔다! 감쪽같은 브이넥으로 어떤 아우터와도 잘 어울리는 임블리만의 3구스다운 경량패딩♥', 59800, 'http://imvely.com/product/detail.html?product_no=15665&cate_no=71&display_group=1'),
(9, '[임블리X온유네일] 푸딩젤 네일스티커', 'http://imvely.com/web/product/big/201811/4f3e3003eff7489f5a7bfe63a390833a.jpg', 1, '매트탑젤을 얹은 듯한 느낌으로 겨울코디와 더 잘 어울도록 준비한 어흥이 푸딩젤 네일스티커♥', 15000, 'http://imvely.com/product/detail.html?product_no=16002&cate_no=71&display_group=1'),
(10, '보들보들 아기새반팔니트', 'http://imvely.com/web/product/big/201811/97510adafcd026615b1f5ac7556dc853.jpg', 1, '보들보들 부드러운 촉감, 톡톡튀는 컬러감! 임블리의 전매특허♥ 언제나 사랑받는 보들보들 아기새니트 반팔ver!', 32000, 'http://imvely.com/product/detail.html?product_no=16036&cate_no=71&display_group=1'),
(11, '우아민트 프릴롱원피스', 'http://imvely.com/web/product/big/201811/b5802e89525fd83db04624d8fc1c1dd9.jpg', 1, '은은한 민트 컬러로 우아함이 돋보이는 임블리 메이드 프릴 롱 원피스', 73800, 'http://imvely.com/product/detail.html?product_no=16062&cate_no=71&display_group=1'),
(12, '뽀송뽀송 앙고라60브이넥니트', 'http://imvely.com/web/product/big/201811/751e9166ee9e3599ec9324d2b777ef54.jpg', 1, '라운드에 이어 이번엔 브이넥! 보송보송한 앙고라 소재로 포근함이 느껴지는 색감대박 임블리 메이드 니트', 45000, 'http://imvely.com/product/detail.html?product_no=16046&cate_no=71&display_group=1'),
(13, '러브미모어 레터링 크롭맨투맨(기모버전)', 'http://imvely.com/web/product/big/201811/12fb7170b01737e0a844b85b6419db82.jpg', 1, '포근포근~♥ 임블리 F/W 시그니처 아이템 러브미모어 기모 시리즈! 이번에도 어김없이 사랑스러운 소장각 러브미모어 컬렉션!♥', 36000, 'http://imvely.com/product/detail.html?product_no=15965&cate_no=71&display_group=1'),
(14, '러브미모어 레터링 맨투맨원피스(기모버전)', 'http://imvely.com/web/product/big/201811/aed85c04c50e6a87ca25bc9f589da9fb.jpg', 1, '포근포근~♥ 임블리 F/W 시그니처 아이템 러브미모어 기모 시리즈! 이번에도 어김없이 사랑스러운 소장각 러브미모어 컬렉션!♥', 45000, 'http://imvely.com/product/detail.html?product_no=15997&cate_no=71&display_group=1'),
(15, '블리 텐션슬랙스', 'http://imvely.com/web/product/big/201811/0bfec4a138b1124b50feb8aa07036d54.jpg', 1, '시크한 슬랙스에 편안함을 더하다. 당신의 가장 큰 편안함이 되어드릴 블리 텐션슬랙스', 35000, 'http://imvely.com/product/detail.html?product_no=15996&cate_no=71&display_group=1'),
(16, '프리미엄 맘블리레깅스', 'http://imvely.com/web/product/big/201806/15012_shop1_15292818629061.jpg', 1, '맘블리들의 편안함을 위해 탄생한 프리미엄 맘블리레깅스♥', 17000, 'http://imvely.com/product/detail.html?product_no=15012&cate_no=71&display_group=1'),
(17, '[V,Collect]골드 트리플 반지', 'http://imvely.com/web/product/big/201810/dfb99938e2e238beb52e865af59a4b61.jpg', 1, '', 39000, 'http://imvely.com/product/detail.html?product_no=15820&cate_no=71&display_group=1'),
(18, '뽀송뽀송 앙고라60퍼프니트', 'http://imvely.com/web/product/big/201812/c632edb96aa8270a1adb35d20a84f17b.jpg', 1, '[NEW 5%DC] 우아한 퍼프 소매로 포인트! 뽀송 뽀송한 터치감의 앙고라 소재로 포근함이 느껴지는 임블리 메이드 니트', 44700, 'http://imvely.com/product/detail.html?product_no=16069&cate_no=72&display_group=1'),
(19, '다리만2미터 데님팬츠', 'http://imvely.com/web/product/big/201812/2853677ff1197edb438aeecae1b55ff8.jpg', 1, '[NEW 5%DC] VELYX2!! 다리가 길어보이는 것은 물론 밑단 트임, 뒷판 절개로 포인트가 마구 업업 되는 데님팬츠', 44700, 'http://imvely.com/product/detail.html?product_no=16070&cate_no=72&display_group=1'),
(20, '어흥덕후 미니원피스', 'http://imvely.com/web/product/big/201812/3e172a204206159c6f9e58326e9e287f.jpg', 1, '[NEW 5%DC] 사랑스러운 레오파드패턴과 높은허리라인으로 다리라인을 길고 슬림하게 연출해드리는 미니원피스', 51300, 'http://imvely.com/product/detail.html?product_no=16067&cate_no=72&display_group=1'),
(21, '뷰티인사이드 롱원피스', 'http://imvely.com/web/product/big/201812/e987a1574008df830e2b347c497e372d.jpg', 1, '[NEW 5%DC] 유니크한 나염 패턴과 살랑한 실루엣으로 단아한 무드의 롱원피스', 55100, 'http://imvely.com/product/detail.html?product_no=16071&cate_no=72&display_group=1'),
(22, '내다리가아닌것같은핏 기모팬츠', 'http://imvely.com/web/product/big/201812/562adb756a9a4243bc9043db8e7377dd.jpg', 1, '[NEW 5%DC] 마치 내다리가 아닌듯! 슬림한 핏을 자랑하는 속기모로 보온성까지 뛰어난 블랙 코튼 팬츠', 34200, 'http://imvely.com/product/detail.html?product_no=16073&cate_no=72&display_group=1'),
(23, '스퀘어슬래쉬 미니백', 'http://imvely.com/web/product/big/201812/e3182ac4878d13a0aa0549da1e157738.jpg', 1, '[NEW 5%DC]', 17100, 'http://imvely.com/product/detail.html?product_no=16068&cate_no=72&display_group=1'),
(24, '고품격 브로치세트', 'http://imvely.com/web/product/big/201811/fa453faa933d74e6ae9abbf22278bd38.jpg', 1, '[NEW 5%DC]', 15200, 'http://imvely.com/product/detail.html?product_no=16072&cate_no=72&display_group=1'),
(25, '발끝까지어흥이 스니커즈', 'http://imvely.com/web/product/big/201812/75152290ec02be9feffbefc00ab37a48.jpg', 1, '[NEW 5%DC]', 28400, 'http://imvely.com/product/detail.html?product_no=16066&cate_no=72&display_group=1'),
(26, '여리한쇄골어필 미디원피스', 'http://imvely.com/web/product/big/201811/f362f5cee4266cc6f74c0ec48c48529b.jpg', 1, '특별한 날, 블리님을 더욱더 특별하게 빛내줄 고급미 뿜뿜! 원피스 하나로 특별함을 강조해 드릴 쇄골 미디원피스♥', 79000, 'http://imvely.com/product/detail.html?product_no=15986&cate_no=71&display_group=1'),
(27, '러브미모어 볼륨핏맨투맨(양기모)', 'http://imvely.com/web/product/big/201811/a395ae169a3e32acf39a9890ba525aad.jpg', 1, '포근포근~♥ 임블리 F/W 시그니처 아이템 러브미모어 기모 시리즈! 이번에도 어김없이 사랑스러운 소장각 러브미모어 컬렉션!♥', 38000, 'http://imvely.com/product/detail.html?product_no=15978&cate_no=71&display_group=1'),
(28, '[THX,V] NO.900 MY BOYFRIEND DENIM', 'http://imvely.com/web/product/big/201809/0a81387372477aa5236e8906257aa9b5.jpg', 1, '따뜻한 느낌의 워싱과 편안한 스타일링을 하기 좋은 보이핏 데님팬츠', 42000, 'http://imvely.com/product/detail.html?product_no=15579&cate_no=71&display_group=1'),
(29, '프리미엄 맘블리속바지', 'http://imvely.com/web/product/big/201808/a659f387f2c4996396c26f5c136b1830.jpg', 1, '맘블리들의 편안함을 위해 탄생한 프리미엄 맘블리속바지♥', 12800, 'http://imvely.com/product/detail.html?product_no=14916&cate_no=71&display_group=1'),
(30, '[디즈니정품] 디즈니파티! 파자마팬츠', 'http://imvely.com/web/product/big/201806/15113_shop1_15295425025527.jpg', 1, '오직 임블리에서만!! 세계적인 브랜드 디즈니와 임블리의 콜라보! 원단,봉제,나염,디자인 모두 하이퀄리티로 편안하고 오래입을 수 있는 임블리 메이드 파자마, 디즈니 콜라보 버전♥', 19800, 'http://imvely.com/product/detail.html?product_no=15113&cate_no=71&display_group=1'),
(31, '셀모 리버시블베스트', 'https://cdn-naning9.bizhost.kr/files/goods/52287/1543479602_2.jpg', 2, '[NEW 5%DC] #리버시블 #무스탕 #롱무스탕 #베스트 #겨울 #퍼', 75800, 'https://www.naning9.com/shop/view.php?index_no=52287&cate=0O'),
(32, '벨로 뉴 코듀로이귀도리캡', 'https://cdn-naning9.bizhost.kr/files/goods/52315/1543810001_2.jpg', 2, '[NEW 5%DC] #귀도리모자 #귀도리캡 #귀달이모자 #골덴귀도리 #코듀로이 #골덴 #양털귀도리 #코디아이템', 20900, 'https://www.naning9.com/shop/view.php?index_no=52315&cate=0O'),
(33, '로랑즈 레오파드니트', 'https://cdn-naning9.bizhost.kr/files/goods/52274/1543451025_2.jpg', 2, '[NEW 5%DC] #레오파드니트 #니트 #라운드니트 #호피니트 #레오파드 #호피 #캐쥬얼', 47300, 'https://www.naning9.com/shop/view.php?index_no=52274&cate=0O'),
(34, '바이틴 기모데님팬츠', 'https://cdn-naning9.bizhost.kr/files/goods/52285/1543473574_2.jpg', 2, '[NEW 5%DC] #데님 #기모데님 #청바지 #일자핏 #데일리 #겨울팬츠', 27600, 'https://www.naning9.com/shop/view.php?index_no=52285&cate=0O'),
(35, '루터 겉기모나염티', 'https://cdn-naning9.bizhost.kr/files/goods/52245/1543365347_2.jpg', 2, '[NEW 5%DC] #박스티 #데일리룩 #나염티 #레터링 #심플 #기본티 #겉기모', 18800, 'https://www.naning9.com/shop/view.php?index_no=52245&cate=0O'),
(36, '아폰즈 양털후드티(백화점상품)', 'https://cdn-naning9.bizhost.kr/files/goods/52155/1543799072_2.jpg', 2, '[NEW 5%DC] #후드티 #양털후드티 #오버핏 #겨울후드티 #캐주얼 #긴팔후드', 37800, 'https://www.naning9.com/shop/view.php?index_no=52155&cate=0O'),
(37, '듀린셀 무스탕조끼', 'https://cdn-naning9.bizhost.kr/files/goods/52275/1543451582_2.jpg', 2, '[NEW 5%DC] #무스탕조끼 #양털조끼 #조끼 #베스트 #무스탕베스트 #레이어드 #캐쥬얼 #심플', 55100, 'https://www.naning9.com/shop/view.php?index_no=52275&cate=0O'),
(38, '위글링 귀걸이', 'https://cdn-naning9.bizhost.kr/files/goods/52306/1543552943_2.jpg', 2, '[NEW 5%DC] #포인트아이템 #악세사리 #데일리 #캐주얼 #심플', 9500, 'https://www.naning9.com/shop/view.php?index_no=52306&cate=0O'),
(39, '글로잇 퍼스마트터치장갑', 'https://cdn-naning9.bizhost.kr/files/goods/52314/1543799712_2.jpg', 2, '[NEW 5%DC] #퍼장갑 #장갑 #스마트폰장갑 #터치장갑 #스마트터치장갑', 30400, 'https://www.naning9.com/shop/view.php?index_no=52314&cate=0O'),
(40, '메일즈 퍼슬리퍼', 'https://cdn-naning9.bizhost.kr/files/goods/52313/1543796243_2.jpg', 2, '[NEW 5%DC] #슬리퍼 #퍼슬리파 #데일리 #베이지 #포근', 17100, 'https://www.naning9.com/shop/view.php?index_no=52313&cate=0O'),
(41, '게르곤 소가죽시계', 'https://cdn-naning9.bizhost.kr/files/goods/52310/1543561164_2.jpg', 2, '[NEW 5%DC] #손목시계 #가죽시계 #시계 #손목가죽시계 #코디아이템', 32300, 'https://www.naning9.com/shop/view.php?index_no=52310&cate=0O'),
(42, '멜뷰 오리털 롱야상점퍼', 'https://cdn-naning9.bizhost.kr/files/goods/52073/1543565275_2.jpg', 2, '[NEW 5%DC] #데일리 #야상 #롱야상점퍼 #점퍼 #카키 #라쿤 #누빔 #오리털', 188100, 'https://www.naning9.com/shop/view.php?index_no=52073&cate=0O'),
(43, '레이즌 반지세트', 'https://cdn-naning9.bizhost.kr/files/goods/52309/1543560298_2.jpg', 2, '[NEW 5%DC] #반지 #악세사리 #실버 #마디링 #볼드링', 11400, 'https://www.naning9.com/shop/view.php?index_no=52309&cate=0O'),
(44, '코비안 울라쿤비니', 'https://cdn-naning9.bizhost.kr/files/goods/52295/1543543279_2.jpg', 2, '[NEW 5%DC] #비니 #모자 #털모자 #방울모자 #라쿤퍼 #울비니 #데일리 #캐주얼', 24600, 'https://www.naning9.com/shop/view.php?index_no=52295&cate=0O'),
(45, '블론드 퍼블로퍼', 'https://cdn-naning9.bizhost.kr/files/goods/52296/1543538838_2.jpg', 2, '[NEW 5%DC] #퍼블로퍼 #블로퍼 #플랫슈즈 #플랫 #로퍼 #슈즈 #신발 #코디아이템', 55100, 'https://www.naning9.com/shop/view.php?index_no=52296&cate=0O'),
(46, '라파레 뽀송폴라니트', 'https://cdn-naning9.bizhost.kr/files/goods/51335/1540775011_2.jpg', 2, '[NEW 5%DC] #폴라니트 #니트 #골지니트 #폴라 #베이직니트 #기본니트 #데일리', 19800, 'https://www.naning9.com/shop/view.php?index_no=51335&cate='),
(47, '테이논 골지양말', 'https://cdn-naning9.bizhost.kr/files/goods/50976/1535352386_2.jpg', 2, '#골지양말 #양말 #삭스 #골지 #베이직 #심플 #코디아이템', 2000, 'https://www.naning9.com/shop/view.php?index_no=50976&cate='),
(48, '톰슨 폴라니트 ★6가지컬러!', 'https://cdn-naning9.bizhost.kr/files/goods/44967/1512450518_2.jpg', 2, '#니트 #폴라 #겨울신상 #베이직 #소프트 #데일리', 19000, 'https://www.naning9.com/shop/view.php?index_no=44967&cate='),
(49, '롤라시 밍크퍼스판레깅스(백화점상품)★7가지컬러', 'https://cdn-naning9.bizhost.kr/files/goods/51900/1541984299_2.jpg', 2, '#레깅스 #스판레깅스 #기모레깅스 #밍크레깅스 #밍크퍼 #인생레깅스 #쫄바지', 15000, 'https://www.naning9.com/shop/view.php?index_no=51900&cate='),
(50, '바이밋 완벽스판윈터슬랙스(백화점상품)', 'https://cdn-naning9.bizhost.kr/files/goods/52036/1542696804_2.jpg', 2, '#팬츠 #부츠컷팬츠 #슬랙스 #부츠컷슬랙스 #긴바지 #롱팬츠 #데일리', 29800, 'https://www.naning9.com/shop/view.php?index_no=52036&cate='),
(51, '보렌스 골지롱양말 ★6가지컬러 ', 'https://cdn-naning9.bizhost.kr/files/goods/51019/1535507546_2.jpg', 2, '#양말 #알록달록 #데일리 #골지양말 #롱양말', 2000, 'https://www.naning9.com/shop/view.php?index_no=51019&cate='),
(52, '코보 기모쿠 션덧신 ★3가지색상', 'https://cdn-naning9.bizhost.kr/files/goods/39824/1480473811_2.jpg', 2, '#양말 #덧신 #반양말 #기모 #쿠션 #도톰양말', 2000, 'https://www.naning9.com/shop/view.php?index_no=39824&cate='),
(53, '벨리온 기모히든밴딩팬츠 ★S,M,L,XL', 'https://cdn-naning9.bizhost.kr/files/goods/52197/1542864130_2.jpg', 2, '#밴딩팬츠 #기모팬츠 #긴바지 #컷팅팬츠 #코튼팬츠 #겨울 #데일리', 29800, 'https://www.naning9.com/shop/view.php?index_no=52197&cate='),
(54, '프룻오브 골지폴라니트', 'https://cdn-naning9.bizhost.kr/files/goods/51559/1539829830_2.jpg', 2, '#폴라 #폴라니트 #터틀넥니트 #데일리 #베이직 #모던 #박소현니트', 19800, 'https://www.naning9.com/shop/view.php?index_no=51559&cate='),
(55, '베이 폴라니트★6가지컬러', 'https://cdn-naning9.bizhost.kr/files/goods/44750/1512007543_2.jpg', 2, '#폴라 #폴라니트 #겨울신상 #겨울이너 #포근 #따뜻', 19800, 'https://www.naning9.com/shop/view.php?index_no=44750&cate='),
(56, '로빌리 보아롱후드집업', 'https://cdn-naning9.bizhost.kr/files/goods/52159/1543363270_2.jpg', 2, '#보아후드집업 #후드집업 #롱후드집업 #후드 #후드원피스', 39800, 'https://www.naning9.com/shop/view.php?index_no=52159&cate='),
(57, '말리든 밴딩울슬랙스 ★3가지컬러 ', 'https://cdn-naning9.bizhost.kr/files/goods/51877/1541062508_2.jpg', 2, '#슬랙스 #울슬랙스 #밴딩슬랙스 #정장바지 #겨울정장바지 #심플 #클래식', 39800, 'https://www.naning9.com/shop/view.php?index_no=51877&cate='),
(58, '박소현의 러브패딩★경량패딩', 'https://cdn-naning9.bizhost.kr/files/goods/51466/1539306155_2.jpg', 2, '★구스100% #패딩 #롱패딩 #구스패딩 #겨울아우터 #아우터 #겨울신상 #포근 #따뜻 #경량패딩', 127000, 'https://www.naning9.com/shop/view.php?index_no=51466&cate='),
(59, '카롱 앙고라폴라티(자체제작)', 'https://cdn-naning9.bizhost.kr/files/goods/39574/1478248817_2.jpg', 2, '#폴라티 #티셔츠 #티 #아이보리 #베이지 #블루 #그레이 #블랙', 15000, 'https://www.naning9.com/shop/view.php?index_no=39574&cate='),
(60, '글리아 골지롱스커트', 'https://cdn-naning9.bizhost.kr/files/goods/44886/1512347365_2.jpg', 2, '#치마 #스커트 #롱스커트 #골지 #니트스커트 #데일리 #홈웨어 #페미닌', 19800, 'https://www.naning9.com/shop/view.php?index_no=44886&cate=');

-- --------------------------------------------------------

--
-- 테이블 구조 `t_item_cateogories_relation`
--

CREATE TABLE `t_item_cateogories_relation` (
  `IC_Index` int(4) NOT NULL,
  `I_ID` int(4) NOT NULL,
  `I_CartID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_item_cateogories_relation`
--

INSERT INTO `t_item_cateogories_relation` (`IC_Index`, `I_ID`, `I_CartID`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 6),
(5, 5, 1),
(6, 6, 7),
(7, 7, 3),
(8, 8, 1),
(9, 9, 9),
(10, 10, 2),
(11, 11, 3),
(12, 12, 2),
(13, 13, 2),
(14, 14, 3),
(15, 15, 5),
(16, 16, 11),
(17, 17, 8),
(18, 18, 2),
(19, 19, 5),
(20, 20, 3),
(21, 21, 3),
(22, 22, 5),
(23, 23, 7),
(24, 24, 9),
(25, 25, 6),
(26, 26, 3),
(27, 27, 3),
(28, 28, 5),
(29, 29, 10),
(30, 30, 10),
(31, 31, 1),
(32, 32, 9),
(33, 33, 9),
(34, 34, 5),
(35, 35, 2),
(36, 36, 2),
(37, 37, 1),
(38, 38, 8),
(39, 39, 9),
(40, 40, 6),
(41, 41, 8),
(42, 42, 1),
(43, 43, 8),
(44, 44, 9),
(45, 45, 6),
(46, 46, 2),
(47, 47, 9),
(48, 48, 2),
(49, 49, 11),
(50, 50, 5),
(51, 51, 9),
(52, 52, 9),
(53, 53, 5),
(54, 54, 2),
(55, 55, 2),
(56, 56, 2),
(57, 57, 5),
(58, 58, 1),
(59, 59, 2),
(60, 60, 4);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_i_categories`
--

CREATE TABLE `t_i_categories` (
  `I_CartID` int(11) NOT NULL,
  `I_CartName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_i_categories`
--

INSERT INTO `t_i_categories` (`I_CartID`, `I_CartName`) VALUES
(1, '아우터'),
(2, '상의'),
(3, '원피스'),
(4, '스커트'),
(5, '바지'),
(6, '슈즈'),
(7, '가방'),
(8, '악세사리'),
(9, '패션소품'),
(10, '란제리&파자마'),
(11, '피트니스'),
(12, '비치웨어');

-- --------------------------------------------------------

--
-- 테이블 구조 `t_managers`
--

CREATE TABLE `t_managers` (
  `M_Index` int(4) NOT NULL,
  `M_ID` varchar(30) NOT NULL,
  `S_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_managers`
--

INSERT INTO `t_managers` (`M_Index`, `M_ID`, `S_ID`) VALUES
(1, '1', 0),
(3, '209', 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_shoppingmalls`
--

CREATE TABLE `t_shoppingmalls` (
  `S_ID` int(4) NOT NULL,
  `S_Name` varchar(30) NOT NULL,
  `S_IMG` varchar(300) NOT NULL,
  `S_Detail` varchar(400) NOT NULL,
  `S_URL` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_shoppingmalls`
--

INSERT INTO `t_shoppingmalls` (`S_ID`, `S_Name`, `S_IMG`, `S_Detail`, `S_URL`) VALUES
(1, '임블리', 'http://imvely.com/SkinImg/logo/logo.jpg', '', 'http://imvely.com/index.html'),
(2, '난닝구', 'https://cdn-naning9.bizhost.kr/img2/logo.png', '대한민국 NO.1 패셔니스타!', 'https://www.naning9.com/'),
(3, '육육걸즈', 'http://66girls.co.kr/web/upload/category/editor/2017/01/07/cd06e9d7036f37093bb98c5fb46a4965.png', '자신감을 입자', 'http://66girls.co.kr/'),
(4, '스타일난다', 'http://image.edaily.co.kr/images/photo/files/NP/S/2018/06/PS18062100504.jpg', '', 'https://www.stylenanda.com/'),
(5, '리틀블랙', 'http://littleblack.co.kr/dmoon/imgs/logo_on.png', '아름다운 리틀블랙', 'http://littleblack.co.kr/'),
(6, '앙투', 'http://gi.esmplus.com/dbk8520/top_logo2.png', '루즈핏을 입히다', 'https://angtoo.com/'),
(7, '핫핑', 'http://hotping.co.kr/web/upload/category/editor/2015/12/26/860189cd2d43f95f24f42a08ae335062.jpg', '러블리 핫핑', 'http://hotping.co.kr/'),
(8, '사뿐', 'http://cdn1-aka.makeshop.co.kr/design/sappun/web2016/logo_sappun_110.jpg', '여성신발', 'http://www.sappun.co.kr/'),
(9, '스토리나인', 'http://app-storage-005.cafe24.com/bannermanage2/nine09/2017/06/25/f1904cc26c01d8a4ec2be49066d66ea2.png', '', 'http://www.storynine.co.kr/'),
(10, '안나키즈', 'http://cdn2-aka.makeshop.co.kr/design/varksy/onedesign/images/logoHeader.png', '', 'http://annakids.co.kr/'),
(11, '후즈백', 'http://www.whosbag.com/design/whosbag/smartpc/defalut_img/logo_over.gif', 'http://www.whosbag.com/', 'http://www.whosbag.com/design/whosbag/smartpc/defalut_img/logo_over.gif'),
(12, '하늘하늘', 'http://skysky9301.diskn.com/common_info/logo/JK1_Co_anamist.png', '국내1위 여성 속옷 쇼핑몰', 'http://www.hn-hn.co.kr/'),
(13, '윙블링', 'http://wingbling.co.kr/web/upload/category/logo/c20c0848277caedac4cd19ee36a01372_54_top.jpg', '아름다운 날개를 달다', 'http://wingbling.co.kr/'),
(14, '발리비키', 'http://balibiki.net/something/201705logo1_1.png', '', 'http://balibiki.net/'),
(15, '제이스타일', 'http://cdn1-aka.makeshop.co.kr/design/jstyle07/wib/img_pc/logo/main_logo.png', '따듯함을 입다', 'http://www.jstyleshop.net/'),
(16, 'THE XXYY', 'http://app-storage-004.cafe24.com/bannermanage2/a1stn985/2018/02/12/62753bba4fd13097a0516c94fc4877d4.png', '뻔한 커플룩이 지루하고 감각적인 커플룩!', 'http://thexxxy.co.kr/'),
(17, '안다르', 'http://andar.co.kr/morenvyimg/top_logo.png', '', 'http://andar.co.kr/'),
(18, '소임', 'http://www.soim.co.kr/design/ebbda12/smartpc/img/logo.jpg', '대한민국 NO.1 임부복', 'http://www.soim.co.kr'),
(19, '핑크에이지', 'http://www.pinkage.co.kr/design/pinkagewig/renewal/img/logo.jpg', '패션가발 1위!', 'http://www.pinkage.co.kr/'),
(20, '립합', 'http://cdnok.makeshop.co.kr/design/liphop2588/cafcon/main/pc_logo_black.png', '', 'http://www.liphop.co.kr/'),
(21, '메리어라운드', 'http://merryaround.co.kr/web/upload/category/logo/16158b081dd4de27821a51a89f03ed0f_29_top.jpg', '캠퍼스룩 지그재그1위', 'http://merryaround.co.kr/'),
(22, '바온', 'http://ba-on.com/web/product/big/201812/3f30113a0d7abeed08d0eb08f552886e.jpg', '빈티즈 지그재그1위', 'http://ba-on.com/'),
(23, '키키코', 'http://kikiko.co.kr/something/logo.png', '스클룩 NO.1', 'http://kikiko.co.kr/'),
(24, '로미스토리', 'http://romistory.com/web/upload/goodymall/layout/new_logo.png', '로맨틱♡', 'http://romistory.com/'),
(25, '아뜨랑스', 'https://attrangs.co.kr/images/common/header/logo.gif', '오피스룩1위!!', 'https://attrangs.co.kr/'),
(26, '베니토', 'http://benito.co.kr/web/upload/jungwon/img/jw_logo.jpg', '오피스룩 NO.1 :)', 'http://benito.co.kr/');

-- --------------------------------------------------------

--
-- 테이블 구조 `t_shoppingmall_categories_relation`
--

CREATE TABLE `t_shoppingmall_categories_relation` (
  `SC_Index` int(4) NOT NULL,
  `S_ID` int(4) NOT NULL,
  `S_CartID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_shoppingmall_categories_relation`
--

INSERT INTO `t_shoppingmall_categories_relation` (`SC_Index`, `S_ID`, `S_CartID`) VALUES
(1, 1, 4),
(2, 1, 1),
(3, 1, 27),
(4, 1, 28),
(5, 2, 2),
(6, 2, 3),
(7, 2, 27),
(8, 2, 28),
(9, 3, 26),
(10, 3, 27),
(11, 3, 3),
(12, 3, 4),
(13, 4, 27),
(14, 4, 5),
(15, 4, 2),
(16, 5, 27),
(17, 5, 28),
(18, 5, 13),
(19, 5, 2),
(20, 6, 27),
(21, 6, 28),
(22, 6, 3),
(23, 6, 4),
(24, 7, 26),
(25, 7, 27),
(26, 7, 3),
(27, 7, 4),
(28, 8, 16),
(29, 9, 27),
(30, 9, 28),
(31, 9, 3),
(32, 9, 6),
(33, 10, 27),
(34, 10, 28),
(35, 10, 6),
(36, 10, 2),
(37, 11, 15),
(38, 12, 17),
(39, 13, 18),
(40, 14, 19),
(41, 15, 20),
(42, 15, 4),
(43, 16, 2),
(44, 16, 21),
(45, 17, 22),
(46, 18, 23),
(47, 19, 24),
(48, 20, 27),
(49, 20, 9),
(50, 20, 14),
(51, 1, 25),
(52, 2, 25),
(53, 3, 25),
(54, 4, 25),
(55, 5, 25),
(56, 6, 25),
(57, 7, 25),
(58, 9, 25),
(59, 10, 25),
(60, 21, 7),
(61, 22, 8),
(62, 23, 10),
(63, 24, 11),
(64, 25, 12),
(65, 26, 12),
(66, 21, 25),
(67, 22, 25),
(68, 23, 25),
(69, 24, 25),
(70, 25, 25),
(71, 26, 25);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_shoppingmall_ranking`
--

CREATE TABLE `t_shoppingmall_ranking` (
  `S_ID` int(4) NOT NULL,
  `FavNum` int(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_shoppingmall_ranking`
--

INSERT INTO `t_shoppingmall_ranking` (`S_ID`, `FavNum`) VALUES
(1, 0),
(2, 0),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(8, 0),
(9, 0),
(10, 0),
(11, 0),
(12, 0),
(13, 0),
(14, 0),
(15, 0),
(16, 1),
(17, 0),
(18, 0),
(19, 0),
(20, 0),
(21, 0),
(22, 0),
(23, 0),
(24, 0),
(25, 0),
(26, 0),
(33, 0),
(34, 0),
(35, 0),
(36, 0),
(37, 0);

-- --------------------------------------------------------

--
-- 테이블 구조 `t_s_categories`
--

CREATE TABLE `t_s_categories` (
  `S_CartID` int(4) NOT NULL,
  `S_CartName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_s_categories`
--

INSERT INTO `t_s_categories` (`S_CartID`, `S_CartName`) VALUES
(1, '페미닌'),
(2, '모던시크'),
(3, '심플베이직'),
(4, '러블리'),
(5, '유니크'),
(6, '미시스타일'),
(7, '캠퍼스룩'),
(8, '빈티지'),
(9, '섹시글램'),
(10, '스쿨룩'),
(11, '로맨틱'),
(12, '오피스룩'),
(13, '럭셔리'),
(14, '헐리웃스타일'),
(15, '가방'),
(16, '슈즈'),
(17, '란제리&파자마'),
(18, '엑세서리'),
(19, '비치웨어'),
(20, '빅사이즈'),
(21, '커플룩'),
(22, '피트니스'),
(23, '임부복'),
(24, '패션소품'),
(25, '의류'),
(26, '10'),
(27, '20'),
(28, '30');

-- --------------------------------------------------------

--
-- 테이블 구조 `t_users`
--

CREATE TABLE `t_users` (
  `U_Index` int(4) NOT NULL,
  `U_ID` varchar(30) NOT NULL,
  `U_PW` varchar(60) NOT NULL,
  `U_Name` varchar(30) NOT NULL,
  `U_Phone` int(10) NOT NULL,
  `U_Ismanager` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `t_users`
--

INSERT INTO `t_users` (`U_Index`, `U_ID`, `U_PW`, `U_Name`, `U_Phone`, `U_Ismanager`) VALUES
(0, '209', '$2y$10$9FVRnYYxY0abJsqhDdK.B.3Xa5JLerTZTKy.e.mKjG65bH03e53xW', '이영구', 1000000000, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- 테이블의 인덱스 `t_favitems`
--
ALTER TABLE `t_favitems`
  ADD PRIMARY KEY (`FI_Index`),
  ADD KEY `FK_U_Index` (`U_Index`),
  ADD KEY `FK_I_ID` (`I_ID`);

--
-- 테이블의 인덱스 `t_favshoppingmalls`
--
ALTER TABLE `t_favshoppingmalls`
  ADD PRIMARY KEY (`FS_Index`),
  ADD KEY `FK_Favsm_U_Index` (`U_Index`),
  ADD KEY `FK_Favsm_S_ID` (`S_ID`);

--
-- 테이블의 인덱스 `t_items`
--
ALTER TABLE `t_items`
  ADD PRIMARY KEY (`I_ID`),
  ADD KEY `FK_I_S_ID` (`S_ID`);

--
-- 테이블의 인덱스 `t_item_cateogories_relation`
--
ALTER TABLE `t_item_cateogories_relation`
  ADD PRIMARY KEY (`IC_Index`);

--
-- 테이블의 인덱스 `t_i_categories`
--
ALTER TABLE `t_i_categories`
  ADD PRIMARY KEY (`I_CartID`);

--
-- 테이블의 인덱스 `t_managers`
--
ALTER TABLE `t_managers`
  ADD PRIMARY KEY (`M_Index`),
  ADD KEY `FK_M_UID` (`M_ID`);

--
-- 테이블의 인덱스 `t_shoppingmalls`
--
ALTER TABLE `t_shoppingmalls`
  ADD PRIMARY KEY (`S_ID`) USING BTREE;

--
-- 테이블의 인덱스 `t_shoppingmall_categories_relation`
--
ALTER TABLE `t_shoppingmall_categories_relation`
  ADD PRIMARY KEY (`SC_Index`),
  ADD KEY `FK_S_relation_S_ID` (`S_ID`),
  ADD KEY `FK_S_relaton_S_CartID` (`S_CartID`);

--
-- 테이블의 인덱스 `t_shoppingmall_ranking`
--
ALTER TABLE `t_shoppingmall_ranking`
  ADD KEY `FK_Ranking_S_ID` (`S_ID`);

--
-- 테이블의 인덱스 `t_s_categories`
--
ALTER TABLE `t_s_categories`
  ADD PRIMARY KEY (`S_CartID`);

--
-- 테이블의 인덱스 `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`U_Index`),
  ADD UNIQUE KEY `U_ID` (`U_ID`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `t_favitems`
--
ALTER TABLE `t_favitems`
  MODIFY `FI_Index` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 테이블의 AUTO_INCREMENT `t_favshoppingmalls`
--
ALTER TABLE `t_favshoppingmalls`
  MODIFY `FS_Index` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 테이블의 AUTO_INCREMENT `t_items`
--
ALTER TABLE `t_items`
  MODIFY `I_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- 테이블의 AUTO_INCREMENT `t_item_cateogories_relation`
--
ALTER TABLE `t_item_cateogories_relation`
  MODIFY `IC_Index` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- 테이블의 AUTO_INCREMENT `t_i_categories`
--
ALTER TABLE `t_i_categories`
  MODIFY `I_CartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- 테이블의 AUTO_INCREMENT `t_managers`
--
ALTER TABLE `t_managers`
  MODIFY `M_Index` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 테이블의 AUTO_INCREMENT `t_shoppingmalls`
--
ALTER TABLE `t_shoppingmalls`
  MODIFY `S_ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- 테이블의 AUTO_INCREMENT `t_shoppingmall_categories_relation`
--
ALTER TABLE `t_shoppingmall_categories_relation`
  MODIFY `SC_Index` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
