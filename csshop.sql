-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2017 at 07:32 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib_category`
--

CREATE TABLE `lib_category` (
  `code` int(4) NOT NULL,
  `name` varchar(100) COLLATE utf8_bin NOT NULL,
  `url` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `lib_category`
--

INSERT INTO `lib_category` (`code`, `name`, `url`) VALUES
(1, 'ACTION', 'action'),
(2, 'ADVENTURE', 'adventure'),
(3, 'STRATEGY', 'strategy'),
(4, 'ROLE PLAYING GAME/RPG', 'rpg'),
(5, 'SIMULATION', 'simulation'),
(6, 'SPORTS', 'sports'),
(7, 'RACING', 'racing');

-- --------------------------------------------------------

--
-- Table structure for table `mas`
--

CREATE TABLE `mas` (
  `mid` int(1) NOT NULL,
  `mname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mstid` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `mfb` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mig` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mas`
--

INSERT INTO `mas` (`mid`, `mname`, `mstid`, `mfb`, `mig`) VALUES
(1, 'Chananate Khamperngjai', '593020791-6', 'chananate.k', 'chanananananananate'),
(2, 'Pakawat Hadsombut', '593020801-9', 'tiger.had', ''),
(3, 'Sarancha Ponya', '593020808-5', 'hugo.ponya', 'Hugo_Ponya'),
(4, 'Kunyakorn Poonpunya', '593020407-3', 'kunyakorn.poonpunya', 'bingbing90'),
(5, 'Natchaya Fangmuengcook', '593020418-8', 'prim.natchaya.9', 'prim_xpc');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(6) UNSIGNED NOT NULL,
  `pname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `pdetail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `property` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `psince` varchar(10) NOT NULL,
  `pdevoloper` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `price` int(6) NOT NULL,
  `category` int(4) DEFAULT '1',
  `pvideo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `pdetail`, `property`, `psince`, `pdevoloper`, `price`, `category`, `pvideo`) VALUES
(1, 'Grand Theft Auto V', 'เมื่อนักล่าถนนหนุ่มนักปล้นธนาคารที่เกษียณอายุและนักจิตวิทยาที่น่าสะพรึงกลัวพบว่าตัวเองพัวพันกับองค์ประกอบที่น่ากลัวและน่ากลัวที่สุดบางอย่างในโลกใต้อาชญากรรมรัฐบาลสหรัฐฯและวงการบันเทิงพวกเขาต้องดึงเอาชุดของ Heists ที่เป็นอันตรายเพื่อเอาตัวรอด ในเมืองที่ปราศจากความเมตตาที่พวกเขาสามารถไว้วางใจใครได้อย่างน้อยที่สุดของกันและกัน\r\nGrand Theft Auto V สำหรับเครื่องพีซีช่วยให้ผู้เล่นสามารถสำรวจโลกที่ได้รับรางวัลจากลอสซานโตสและแบลนเคาน์ตี้ได้ด้วยความละเอียดถึง 4k ขึ้นไปรวมถึงโอกาสที่จะได้สัมผัสกับเกมที่วิ่งได้ที่ 60 เฟรมต่อวินาที\r\n', '-', '2013', 'Rockstar Games', 750, 1, 'QkkoHAzjnUs'),
(2, 'RESIDENT EVIL 7 biohazard / BIOHAZARD 7 resident evil', 'Resident Evil 7 biohazard เป็นรายการที่สำคัญต่อไปในชุด Resident Evil ที่มีชื่อเสียงและกำหนดหลักสูตรใหม่สำหรับแฟรนไชส์เนื่องจากใช้ประโยชน์จากรากและเปิดประตูสู่ประสบการณ์สยองขวัญอันน่ากลัวอย่างแท้จริง การเปลี่ยนแปลงใหม่อย่างมากสำหรับซีรีส์ต่อหน้าคนแรกในรูปแบบ photorealistic ซึ่งขับเคลื่อนโดย RE Engine ใหม่ของ Capcom, Resident Evil 7 มอบระดับการแช่ที่ไม่เคยปรากฏมาก่อนซึ่งนำพาความสยดสยองที่น่าตื่นเต้นอย่างใกล้ชิดและเป็นส่วนตัว ตั้งอยู่ในยุคปัจจุบันในชนบทของอเมริกาและเกิดขึ้นหลังจากเหตุการณ์ที่น่าทึ่งของ Resident Evil® 6 ผู้เล่นรู้สึกหวาดกลัวโดยตรงจากมุมมองของบุคคลคนแรก Resident Evil 7 เผยโฉมองค์ประกอบของเกมเพลย์แบบลายเซ็นที่มีการสำรวจและเครียดซึ่งก่อนหน้านี้ได้ตั้งชื่อว่า \"survival horror\" บางส่วนเมื่อยี่สิบปีก่อน ขณะเดียวกันการรีเฟรชที่สมบูรณ์แบบของระบบการเล่นเกมพร้อม ๆ กันช่วยผลักดันประสบการณ์สยองขวัญของการอยู่รอดไปอีกขั้น', '-', '2017', 'CAPCOM', 600, 1, 'W1OUs3HwIuo'),
(3, 'Friday the 13th: The Game', 'เกมเป็นเกมสยองขวัญของบุคคลที่สามเกมการอยู่รอดที่ผู้เล่นรับบทเป็นที่ปรึกษาของวัยรุ่นหรือเป็นครั้งแรกที่ Jason Voorhees คุณและอีกหกดวงวิญญาณที่ไม่เต็มใจจะทำทุกวิถีทางเพื่อหนีรอดและฆ่าตัวตายได้ขณะที่นักฆ่าที่รู้จักกันดีที่สุดในโลกติดตามคุณและฆ่าคุณอย่างทารุณ วันศุกร์ที่ 13: เกมจะมุ่งมั่นที่จะให้ทุกเครื่องมือเดียวที่จะมีชีวิตรอดหลบหนีหรือแม้กระทั่งพยายามที่จะเอาคนที่ไม่สามารถฆ่าได้ เซสชั่นการเล่นเกมทุกๆครั้งจะช่วยให้คุณมีโอกาสใหม่ ๆ ในการพิสูจน์ว่าคุณมีสิ่งที่ต้องใช้ไม่เพียง แต่เพื่อความอยู่รอดเท่านั้น แต่ยังเป็นนักฆ่าที่มีชีวิตชีวาที่สุดในประวัติศาสตร์ภาพยนตร์ด้วยการฆ่ามากกว่าคู่แข่งของเขา!\r\nในขณะเดียวกันเจสันจะได้รับความสามารถมากมายในการติดตามไล่ล่าและฆ่าเหยื่อของเขา ลวงจากเงามืดทำให้เป้าหมายของคุณตกใจและฆ่าพวกเขาเมื่อถึงเวลาที่ถูกต้องตามแฟชั่นที่โหดร้ายเท่าที่คุณสามารถจินตนาการได้ ใช้การควบคุมของนักฆ่าตำนานที่เป็น Jason Voorhees และกลัวคนที่โชคร้ายพอที่จะข้ามเส้นทางของคุณ!\r\n', '-', '2017', 'Gun Media', 365, 1, 'amhP0FJiwhc'),
(4, 'PLAYERUNKNOWNs BATTLEGROUNDS', 'PLAYERUNKNOWNs BATTLEGROUNDS เป็นนักกีฬาคนสุดท้ายที่กำลังพัฒนาโดยมีข้อเสนอแนะจากชุมชน เริ่มต้นด้วยอะไรผู้เล่นต้องต่อสู้เพื่อค้นหาอาวุธและอุปกรณ์ในการต่อสู้เพื่อเป็นผู้รอดชีวิตคนเดียว เกมที่สมจริงและตึงเครียดสูงนี้ตั้งอยู่บนเกาะขนาด 8x8 กิโลเมตรขนาดใหญ่ที่มีรายละเอียดที่นำเสนอความสามารถของ Unreal Engine 4\r\nPLAYERUNKNOWN aka Brendan Greene เป็นผู้บุกเบิกแนว Battle Royale ในฐานะผู้สร้าง Battle Royale เกมโหมดที่พบในชุด ARMA และ H1Z1: King of the Kill, Greene เป็นผู้ร่วมพัฒนาเกมกับทีมทหารผ่านศึกที่ Bluehole เพื่อสร้างประสบการณ์รบ Royale ที่หลากหลายและมีประสิทธิภาพมากที่สุดถึงวันที่\r\n', '-', '2017', 'Bluehole', 560, 1, '1QrMKnhvnsk'),
(5, 'Dead by Daylight - A Nightmare on Elm Street', 'ปีศาจนั้นมีอยู่จริงๆ และพวกมันอาศัยอยู่ใต้เตียงคุณนี่เอง พวกมันอยู่ในห้องนอนคุณ อยู่ในหัวคุณ อยู่ในความฝันคุณ และบางทีความฝันก็กลายเป็นความจริงขึ้นมาได้ เฟรดดี้ ครูเกอร์ รู้จักความหมายที่แท้จริงของการหลอกหลอน ความหมายที่แท้จริงของการลากใครสักคนเข้ามาสู่ภาวะความฝัน ภาวะที่ไม่อาจแน่ใจได้เลยว่าตนหลับหรือตื่นอยู่ มีชีวิตอยู่หรือเจียนตายแล้ว คนส่วนใหญ่ก็คงจะฝืนไว้ไม่นอนหลับกัน เช่นเดียวกับเควนตินหนุ่มผู้ที่จำต้องกลับไปยังที่ๆ เฟรดดี้ได้เรียนรู้เกี่ยวกับการล้างแค้น กลับคืนสู่โรงเรียนอนุบาลแบดแฮม\r\n\r\nกลับคืนสู่โรงเรียน\r\nใครจะไปคิดว่าความฝันทำให้เราบาดเจ็บได้จริงๆ การบาดเจ็บของเนื้อหนังร่างกาย อันเกิดจากความเจ็บปวด ความหวาดกลัว', '-', '2017', 'Starbreeze Publishing AB', 140, 1, 'JGhIXLO3ul8'),
(6, 'Skylar & Plux: Adventure On Clover Island', 'คุณพร้อมที่จะผจญภัยเหมือนปี 2001 หรือไม่? Skylar & Plux: การผจญภัยบนเกาะ Clover Island เป็นการฟื้นฟูความหลงใหลในสไตล์ platformer 3D ในตำนานด้วยการเล่นเกมคลาสสิกแกดเจ็ตที่ขี้เล่นและเรื่องราวอันแสนอบอุ่นในโลกแห่งความงดงามที่เต็มไปด้วยสีสันที่ชวนให้นึกถึงการผจญภัยในวัยเด็กของเรา\r\nไปกับการผจญภัยที่เต็มไปด้วยแอ็คชันรวบรวมเครื่องมือที่ช่วยให้คุณสำรวจสวรรค์อันสวยงามและเก็บไว้จากการทำลาย ขึ้นอยู่กับ Skylar Lynxe นางเอกว่องไวและกล้าหาญของเราและ Plux Owlsley เพื่อนสนิทที่เชื่อถือได้เพื่อป้องกันไม่ให้ CRT ชั่วร้ายจากการพิชิตบ้านที่เพิ่งค้นพบของพวกเขาและเปลี่ยนเป็นพื้นที่รกร้าง\r\nสำรวจชายหาดเขตร้อนถ้ำภูเขาไฟภูเขาที่เต็มไปด้วยหิมะและทะเลทรายไร้ความปราณีของเกาะโคลเวอร์ ต่อสู้กับกองทัพของเหล่าสมุนของ CRT และค้นหาการอัพเกรดที่มีประสิทธิภาพช่วยเพิ่มความสามารถของคุณ สำรวจเกาะด้วย Jetpack ที่ให้อิสรภาพและค้นพบอดีตที่ลึกลับของมันด้วยนาฬิกา Time Orb ที่ทำให้งง บอร์เจ็ทของ CRT มีปัญหาหรือไม่? หยิบขีปนาวุธของพวกเขาและส่งพวกเขากลับหันไฟ gatling ของพวกเขากับพวกเขาและส่งลูกน้องของเขาบินด้วยถุงมือแม่เหล็กที่มีประ', '-', '2017', 'Grip Digital', 190, 2, 'QbqJjGSch10'),
(7, 'Super Fancy Pants Adventure', 'ชุดผจญภัยกางเกงแฟนซีเริ่มขึ้นเมื่อ 10 ปีก่อนโดย Brad Borne ซึ่งเป็นนักพัฒนาอินดี้ที่ต้องการกำหนดรูปแบบวิดีโอเกมใหม่โดยการควบคุมความเร็วและการควบคุมที่แน่นหนาเข้ากันได้ ในช่วงหลายปีที่ผ่านมาเขาได้ฝึกฝนฝีมือของเขาเปลี่ยนเกม Fancy Pants ให้กลายเป็นปรากฏการณ์ระดับโลกที่มีมากกว่า 100 ล้านเพลย์และกลายเป็นหนึ่งในเกมที่ยอดเยี่ยมที่สุดตลอดกาลของ Kongregate รุ่นใหม่ล่าสุดนี้คือ Super Fancy Pants Adventure ซึ่งเป็นสุดยอดและเป็นการทบทวนชุดใหม่ในชื่อเต็มเปี่ยม\r\nไม่ว่าจะเป็นครั้งแรกที่คุณเล่น Fancy Pants หรือการผจญภัยสุดล้ำเลิศของกางเกง Stealth คือการวิ่งป่า!\r\n', '-', '2017', 'Borne Games', 165, 2, 'Yz0M4gBM310'),
(8, 'Sonic Adventure DX', 'ความชั่วร้ายโบราณที่ซุ่มซ่อนอยู่ภายใน Master Emerald ได้รับการปลดปล่อยจากการนอนหลับโดยดร. Eggman คดเคี้ยวและจะหมิ่นกลายเป็นมอนสเตอร์ที่ดีที่สุดโดยใช้ 7 มรกต Chaos เฉพาะ Sonic และเพื่อนของเขาเป็นวีรบุรุษพอที่จะทำให้หยุดไปดร. Eggman และสมุนชั่วร้ายของเขา ตีพื้นวิ่งในการผจญภัยมหากาพย์คลาสสิกในการแข่งขันกับเวลาในการช่วยโลก!', '-', '2011', 'SEGA', 189, 2, 'Hikk1FLyLZQ'),
(9, 'Oozi: Earth Adventure', 'Earth Adventure เป็น platformer 2D คลาสสิกที่มีการเล่นเกมในโรงเรียนเก่า - ไม่มีปริศนาไม่มีการลงโทษเพียง 100% สนุก platforming คลาสสิกที่บริสุทธิ์! คุณลักษณะที่โดดเด่นที่สุดคือภาพ HD และศิลปะวาดด้วยมือที่สวยงาม แต่อย่างไรก็ตามรูปแบบภาพมันเหมาะสำหรับนักเล่นเกมทุกประเภท ความหลากหลายของระดับความยาก - จาก Kid to Hardcore - ช่วยให้ทุกคนสนุกกับเกมโดยไม่คำนึงถึงระดับทักษะของพวกเขา มันบอกเล่าเรื่องราวของ Oozi – นักบินอวกาศคนต่างด้าวที่พังลงบนพื้นโลกหายชุดอวกาศของเขาและต้องการหาทางกลับบ้าน', '-', '2013', 'Awesome Games Studio', 264, 2, 'uC3TqOrYou8'),
(10, 'A Monstrous Adventure', 'การผจญภัยมหัศจรรย์เป็นแอ็คชั่นแอ็กชันยอดเยี่ยมจากนักพัฒนาซอฟต์แวร์ชั้นนำของญี่ปุ่น Falcom (นักพัฒนาซอฟต์แวร์ \"Ys\" และ \"Zwei\" ท่ามกลางนักคลาสสิกแบบอื่น ๆ ) ที่มีการต่อสู้แบบเรียลไทม์กราฟิก 3D ที่น่าทึ่งนับเป็นตัวอักษรที่เปล่งออกมาได้อย่างสมบูรณ์และมินิเกม 90 รายการ + หลายตอนจบซาวด์โยกเวลาเล่น 35 ชั่วโมง + และอื่น ๆ\r\nMastiff ภูมิใจนำเสนอ Gurumin: A Monstrous Adventure สู่ Windows และนำเสนอผ่าน Steam ด้วยคุณสมบัติเฉพาะของไอน้ำรวมทั้งความสำเร็จ, การ์ดเทรด, รูปภาพขนาดใหญ่ และ Cloud Save\r\n', '-', '2015', 'Nihon Falcom Corporation , Mastiff', 108, 2, 'HsVu1x3j_MA'),
(11, 'WARHAMMER II', 'กลับมาพร้อมสานต่อความยิ่งใหญ่ กับ Warhammer  II  เปิดตัวแคมเปญอันน่าทึ่งของการสำรวจ การขยายดินแดน และชัยชนะในโลกใบใหม่', 'ขั้นต่ำ:\r\no	ระบบปฏิบัติการ: Windows 7 64Bit\r\no	หน่วยประมวลผล: Intel® Core™ 2 Duo 3.0Ghz\r\no	หน่วยความจำ: แรม 5 GB\r\no	กราฟิก: NVIDIA GTX 460 1GB | AMD Radeon HD 5770 1GB | Intel HD4000 @720p\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 60 GB\r\n\r\nแนะนำ:\r\no	ระบบปฏิบัติการ: Windows 7 / 8 (8.1)/ 10 64Bit\r\no	หน่วยประมวลผล: Intel® Core™ i5-4570 3.20GHz\r\no	หน่วยความจำ: แรม 8 GB\r\no	กราฟิก: NVIDIA GeForce GTX 770 4GB | AMD Radeon R9 290X 4GB @1080p\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 60 GB\r\n', '28.09.2017', ' Creative Assembly', 1129, 3, 'nr4rsTyq8Q4'),
(12, 'Transformice', 'Transformice เป็นการจำลอง MMO platformer ของหนูหลายสิบตัวที่ทำงานเพื่อวางแผนในการนำชีสกลับมา  พยายามหลีกเลี่ยงหลุมพราง เพราะมันจะนำไปสู่สถานการณ์ที่ไม่คาดคิด ', 'ขั้นต่ำ:\r\no	ระบบปฏิบัติการ: Windows XP\r\no	หน่วยประมวลผล: 1 GHz\r\no	หน่วยความจำ: แรม 512 MB\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 60 MB\r\n\r\nขั้นต่ำ:\r\nระบบปฏิบัติการ: Mac OS X 10.6\r\nหน่วยประมวลผล: 1 GHz\r\nหน่วยความจำ: แรม 512 MB\r\nหน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 60 MB\r\n', '30.01.2015', 'Atelier 801', 25, 3, 'rsUE3BgaJOk'),
(13, 'Alien Swarm: Reactive Drop', 'เกมนี้เป็นเกมแอคชั่นยิงกองทัพเอเลี่ยน ในเกมนี้เราจะได้รับบทเป็นทหารในกองทัพที่มีทั้งหมด 4 อาชีพให้เลือกเล่น ได้แก่ ทหาร หมอ หน่วยเทคโนโลยี และหน่วยอาวุธพิเศษ เราสามารถเล่น Co-Op กับเพื่อนมากสุด 8 คนเพื่อทำภารกิจให้สำเร็จ หรือเล่นคนเดียวกับ AI ก็ได้ ขณะเดียวกันยังมีโหมด PVP ที่เล่นได้', 'ขั้นต่ำ:\r\no	ระบบปฏิบัติการ: Windows® XP or above\r\no	หน่วยประมวลผล: Pentium 4 3.0GHz\r\no	หน่วยความจำ: แรม 2 GB\r\no	กราฟิก: DirectX 9 compatible video card with 128 MB, Shader model 2.0. ATI X800, NVidia 6600 or better\r\no	DirectX: เวอร์ชัน 9.0\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 4 GB\r\no	การ์ดเสียง: DirectX 9.0c compatible sound card\r\n\r\n\r\nแนะนำ:\r\no	ระบบปฏิบัติการ: Windows® XP or above\r\no	หน่วยประมวลผล: Intel core 2 duo 2.4GHz\r\no	หน่วยความจำ: แรม 4 GB\r\no	กราฟิก: DirectX 9 compatible video ', '21.01.2017', 'Reactive Drop Team', 25, 3, 'cq0t0IwJKw8'),
(14, 'Planet Coaster', 'Planet Coaster ก็เป็นเรื่องราวเกี่ยวกับการสร้างสวนสนุกโดยมีจุดประสงค์หลักก็คือให้นักท่องเที่ยวหรือผู้คนมีความสุขกับเครื่องเล่นต่าง ๆ ซึ่งหน้าที่หลักของผู้เล่นก็คือสร้างเครื่องเล่นหลากหลายชนิดเพื่อตอบสนองคนเหล่านั้นพร้อมกับเครื่องมืออำนวยความสะดวกที่มากขึ้นและยังเปิดให้ผู้เล่นสร้างสิ่งปลูกสร้างได้อย่างอิสระไม่รู้สึกว่าถูกจำกัดพื้นที่หรืออาณาเขตซึ่งก็มีกลิ่นอายของ Cities: Skylines อยู่ไม่น้อยเลย', 'ขั้นต่ำ:\r\no	ระบบปฏิบัติการ: Windows 7 (SP1+)/8.1/10 64bit\r\no	หน่วยประมวลผล: Intel i5-2300/AMD FX-4300\r\no	หน่วยความจำ: แรม 8 GB\r\no	กราฟิก: nVidia GTX 560 (2GB)/AMD Radeon 7850 (2GB)\r\no	DirectX: เวอร์ชัน 11\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 8 GB\r\nแนะนำ:\r\no	ระบบปฏิบัติการ: Windows 7 (SP1+)/8.1/10 64bit\r\no	หน่วยประมวลผล: Intel i7-4770/AMD FX-8350\r\no	หน่วยความจำ: แรม 12 GB\r\no	กราฟิก: nVidia GTX 980 (4GB)/AMD R9 380 (4GB)\r\no	DirectX: เวอร์ชัน 11\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใ', '17.11.2016', 'Frontier Developments', 783, 3, 'QDqlXGg394k\n'),
(15, 'Stellaris', 'เกมแนววางแผนการรบจากทาง Paradox Development Studios โดยตัวเกมนั้นจะพาเราออกไปสำรวจระบบสุริยะจักรวาลต่างๆ มากมายเพื่อที่จะหาแหล่งทรัพยากรต่างๆ หรือแม้กระทั่งการแผ่ขยายอาณานิคมของเผ่าพันธุ์เรา ซึ่งในการสำรวจนั้นเราจะได้พบกับมนุษย์ต่างดาวมากมายที่เป็นกระทั่งศัตรูหรือแม้แต่มิตรสหาย', 'ขั้นต่ำ:\r\no	ระบบปฏิบัติการ: Windows 7 x86 or newer\r\no	หน่วยประมวลผล: AMD Athlon II X4 640 @ 3.0 Ghz / or Intel Core 2 Quad 9400 @ 2.66 Ghz\r\no	หน่วยความจำ: แรม 2 GB\r\no	กราฟิก: AMD HD 5770 / or Nvidia GTX 460, with 1024MB VRAM. Latest available WHQL drivers from both manufacturers.\r\no	DirectX: เวอร์ชัน 9.0c\r\no	เครือข่าย: การเชื่อมต่ออินเทอร์เน็ตแบบบรอดแบนด์\r\no	หน่วยบันทึกข้อมูล: พื้นที่ว่างที่พร้อมใช้งาน 4 GB\r\no	การ์ดเสียง: Direct X 9.0c- compatible sound card\r\no	หมายเหตุเพิ่มเติม: Controller supp', '09.05.2016', 'Paradox Development Studio', 291, 3, 'KanCiSGxSKM'),
(16, 'Divinity Original Sin 2', 'เกมประเภท RPG ผสมผสานวางแผนแทคติกเล่นพร้อมกันกับเพื่อนได้ถึง 4 คนแบบ Co-op มาพร้อมกับเนื้อเรื่องใหม่ให้ผจญภัยโดยจะท้าวความเนื้อหาก่อนภาคแรกไป 100 ปี ตัวเกมมีเผ่าใหม่ให้เลือกอย่าง Undead หรือจะเป็น AI ที่ปรับปรุงให้โหดกว่าภาคแรกและเพิ่มการคอมโบสกิลใหม่ ๆ มากกว่าเดิมทำให้ Divinity Original Sin 2 เป็นเกมที่สดใหม่ยกระดับความมันส์มากขึ้นอีกเท่าตัว\r\n', 'Minimun Notebook Requirements (สเปคขั้นต่ำ)\r\nCPU INTELIntel :  Core i5-6267U (2.9 GHz, 4 MB L3 Cache, up to 3.30 GHz)\r\nCPU AMDAMD  : A10-7300 (1.90 GHz, 4 MB L2 Cache up to 3.20 Ghz)\r\nVGA NVIDIANVIDIA : GeForce GTX 560M (1.5 GB GDDR5)\r\nVGA AMDAMD : Radeon HD 6770M (1GB GDDR5)\r\nRAM : 4 GB DDR2\r\nHard Disk Space : 25 GB\r\n\r\nRecommended Notebook Requirements (สเปคที่เล่นเกมส์นี้ได้ดี)\r\nCPU INTEL : Intel Core i7-3630QM (2.40 GHz, 6 MB L3 Cache, up to 3.40 GHz)\r\nCPU AMDAMD : FX-8800P (2.10 GHz, 2 MB L2', '2017', 'Larian Studios', 899, 4, 'bTWTFX8qzPI'),
(17, 'Final Fantasy XIV: Stormblood', 'ดิ่งลงสู่เรื่องราวบทใหม่ในมหากาพย์ของ Final Fantasy XIV Online ด้วยภาคเสริมชุดถัดไป Stormblood!\r\nออกสำรวจดินแดนที่กว้างใหญ่ Ala Mhigo และความท้าทายจากภัยคุกคามแห่ง Primal ที่กระจายวงกว้างออกไปทั่วทั้ง Eorzea พร้อมกับที่คุณเริ่มดำเนินภารกิจนับร้อยในฐานะนักรบแห่งแสงสว่าง\r\nด้วยจำนวนนักผจญภัยมากกว่า 6 ล้านคนทั่วโลก ไม่มีเวลาใดที่เหมาะไปมากกว่านี้อีกแล้วในการเข้าร่วมกับกองทัพ!\r\nFeatures\r\n- เลเวลสูงสุดเพิ่มจาก 60 สู่ 70\r\n- อาชีพใหม่ รวมถึง red mage\r\n- ออกสำรวจพื้นที่ใหม่พร้อมการว่ายน้ำและดำน้ำ\r\n- Primal ใหม่ \"Lakshmi\"\r\n- Dungeon ใหม่\r\n- Raid ระดับสูงใหม่ \"The Bend of Time - Omega\"\r\n- Alliance raid ใหม่ \"Return to Ivalice\"\r\n- The Forbidden Land of Eureka\r\n- ชุดและสูตรคราฟท์ไอเท็มใหม่\r\n- ที่อยู่อาศัยแหล่งที่สี่\r\n- ขยายช่องเก็บของและปรับปรุงระบบการต่อสู้\r\n', 'Minimum:\r\n• OS: Windows? 7 32/64 bit, Windows? 8.1 32/64 bit, Windows? 10 32/64 bit\r\n• Processor: Intel? Core?i5 2.4GHz or higher\r\n• Memory: 4 GB RAM\r\n• Graphics: 1280 x 720: NVIDIA? Geforce? GTX750 or higher, AMD Radeon? R7 260X or higher\r\n• DirectX: Version 9.0c\r\n• Network: Broadband Internet connection\r\n• Storage: 60 GB available space\r\n• Sound Card: DirectSound? sound card (DirectX? 9.0c or higher)\r\n• Additional Notes: System Requirements may be subject to change. If you are using a router, ', '2017', 'Square-Enix', 1590, 4, 'Jt1h1MinlLI'),
(18, 'Kingdom Come: Deliverance', 'เป็นเกม RPG Open-world เน้นเควสเนื้อเรื่อง แต่ก็มีหลากหลายทางให้เลือกเล่น และผลลัพธ์ที่แตกต่างกันไปไม่เป็นเส้นตรงตายตัว และทุกการกระทำที่จะส่งผลต่อผู้คนรอบข้าง ไม่ว่าจะเป็นการขโมย ต่อสู้ ข่มขู่ เกลี้ยกล่อม หรือแม้กระทั่งการติดสินบน ผจญภัยในจักรวรรดิโรมันอันศักดิ์สิทธิ์ ตามล้างแค้นให้กับพ่อแม่ที่ถูกฆ่าตาย ต่อสู้ห้ำหั่นกับกองกำลังต่างๆ ด้วยระบบการหลอมและอัพเกรดอาวุธอาวุธ ระบบการต่อสู้ทั้งระยะไกล ลอบเร้น หรือจะคลุกวงในไปเลย\r\nฟีเจอร์สำคัญของเกม :\r\n•	Massive realistic open world: ไม่ว่าจะเป็นปราสาท, ทุ่งกว้าง ล้วนแสดงผลด้วยกราฟฟิคขั้นสูง\r\n•	Non-linear story: สามารถจัดการภารกิจได้หลากหลายวิธี ซึ่งแต่ละวิธีก็จะมีผลกับเนื้อเรื่องต่อๆไปแตกต่างกัน\r\n•	Challenging combat: สามารถเลือกอาวุธโจมตีระยะไกล, ลักลอบ หรือโจมตีระยะใกล้ ซึ่งแต่ละชนิดก็จะมีคอนโบไม่ซ้ำกันเป็นสิบๆท่าและจะเป็นอะไรที่น่าตื่นตาตื่นใจมาก\r\n•	Character development: พัฒนาทักษะต่างๆของคุณ อัพเกรดอาวุธและเครื่องป้องกัน\r\n•	Dynamic world: การกระทำของคุณมีอิทธิพลต่อปฏิกิริยาของผู้คนรอบๆตัวคุณ การต่อสู้ การขโมย เกลี้ยกล่อม ข่มขู่ ชักจูง หรื', 'ขั้นต่ำ :\r\n•	\r\no	OS: OS 64-bit Windows 7 or 64-bit Windows 8 (8.1)\r\no	Processor: Intel CPU Core i5-2500K 3.3GHz, AMD CPU Phenom II X4 940\r\no	Memory: 6 GB RAM\r\no	Graphics: Nvidia GPU GeForce GTX 660, AMD GPU Radeon HD 7870\r\no	DirectX: Version 11\r\no	Storage: 30 GB available space\r\no	Sound Card: Integrated\r\no	Additional Notes: These are preliminary system specs and can change!\r\nขั้นแนะนำ :\r\n•	\r\no	OS: OS 64-bit Windows 7 or 64-bit Windows 8 (8.1)\r\no	Processor: Intel CPU Core i7 3770 3,4 GHz, AMD CPU', '2017', 'Warhorse Studios', 1049, 4, 'rjeqxaGGMn4'),
(19, 'South Park: The Fractured But Whole\r\n', 'The Fractured But Whole จะพาผู้เล่นเข้าสู่โลกของซุปเปอร์ฮีโร่ปล่อยพลังทำภารกิจในเมืองผสมผสานกับมุกล้อเลียนสุดแสบที่สอดแทรกเข้ามาตลอดหรือภารกิจแปลก ๆ ก็จะมีให้ทำเช่นกันแม้เกมเพลย์จะไม่มีอะไรเปลี่ยนมากแต่ในภาคนี้ทางผู้พัฒนาได้เผยว่าความแสบความเกรียนของตัวละครจะเพิ่มมากขึ้นจากภาคก่อน ๆ และผู้เล่นสามารถปรับระดับความยาก-ง่ายของเกมตามระดับสีผิว (ผิวขาว-ง่าย ผิวเข้ม-ยาก) ได้อีกต่างหาก\r\n', 'Minimun Notebook Requirements (สเปคขั้นต่ำ)\r\nCPU INTELIntel :  Intel Core i5-2435M (2.40 GHz, 3 MB L3 Cache, up to 3.0 GHz)\r\nCPU AMDAMD  : AMD FX-7500 (2.10 GHz, 4 MB L2 Cache up to 3.30 Ghz)\r\nVGA NVIDIANVIDIA : NVIDIA GeForce GTX 660M (2 GB GDDR5)\r\nVGA AMDAMD : AMD Radeon HD 7870M (2GB GDDR5)\r\nRAM : 6 GB DDR2\r\nHard Disk Space : 32 GB\r\n\r\nRecommended Notebook Requirements (สเปคที่เล่นเกมส์นี้ได้ดี)\r\nCPU INTEL : Intel Core i5-4308U (2.80 GHz, 3 MB L3 Cache, up to 3.30)\r\nCPU AMDAMD : AMD FX-8800P (', '2017', 'Ubisoft', 1799, 4, 'fiayfb1rrs0'),
(20, 'The Legend of Zelda Breath of the Wild', 'เป็นเกม Open World ที่ถูกออกแบบมาอย่างดีเยี่ยม\r\nนี้คือครั้งแรกของ Zelda  ที่เลือกที่จะเปิดแบบ Open World และ Open World ของเกมนี้มอบอิสระให้ผู้เล่นได้สูงมาก\r\n	ใน DLC แรกของ The Legend of Zelda: Breath of the Wild  นั้นมีสองอย่าง คือ DLC และ Season Pass \r\n\r\nชุดเกาะใหม่ของ Link\r\nมีอยู่เกราะ 9 ชิ้น โดยแบ่งออกเป็นชุดอยู่ 5 ชุด ซึ่งถูกซ่อนอยู่ในหีบสมบัติในโลกของ Hyrule\r\n1. Tingle’s Outfit มี Tingle’s Hood, Tingle’s Shirt และ Tingle’s Tights\r\n2. Phantom Armor มี Phantom Helmet, Phantom Armor และ Phantom Greaves\r\n3. Majora’s Mask\r\n4. Midna’s Helmet\r\n5. Korok Mask – เมื่อสวมใส่หน้ากากนี้อยู่จะสั้นเมื่อ Link อยู่ใกล้ Korok ในระยะ 900 ช่อง', 'The Legend of Zelda: Breath of the Wild เปิดให้เล่นเฉพาะบนเครื่องอคนโซน Nintendo Switch และ Wii U โดย Season Pass จะอยู่ใน DLC Pack 1 & 2  ที่เป็นแบบดิจิทัล', '2017', 'Nintendo Entertainment', 1990, 4, 'zw47_q9wbBE'),
(21, 'Assassins creed origins', 'เรื่องราวจุดกำเนิด (origins) ของกลุ่มนักฆ่า Brotherhood ว่าเริ่มต้นอย่างไร เราจะได้รับบทเป็น Bayek of Siwa ผจญภัยในอียิปต์โบราณ ที่มีทั้งพีระมิด วิหาร หลุมศพ แม่น้ำไนล์ โอเอซิส และทะเลทราย (เกมภาคนี้เป็น open-world)\r\nรูปแบบการเล่นใหม่ๆ ของภาค Origins จะเพิ่มการดำน้ำเข้ามาให้ตัวเอกไปค้นหาสมบัติจากวิหารใต้น้ำ แนวทางของเกมจะเป็น action-RPG มากขึ้นกว่าเดิม ระบบการต่อสู้จะเน้นการเผชิญหน้ามากขึ้นกว่าเกมภาคก่อนๆ\r\n', '-', '2017', 'Ubisoft Montreal', 1799, 5, 'kGq7ZCth7QY'),
(22, 'Shadow of war', 'เกมเป็นเนื้อเรื่องระหว่างหนัง The Hobbit กับ The Lord of the Rings ว่าด้วยเรื่องราวของทาเลี่ยนและเคเลบริมบอร์ สองตัวเอกจากเกมภาคแรกที่พยายามทำแหวนอีกวงขึ้นมาเพื่อต่อสู้กับศัตรู โดยเฉพาะเซารอนกับนาซกูล\r\n\r\nเกมยังคงเป็นแนวแอ็คชั่นผจญภัยโลกเปิดที่ถูกขยับขยายให้ใหญ่ขึ้น ทั้งในแง่ของโลก เนื้อเรื่อง ระบบ RPG เกมเพลย์หลัก และระบบเนเมซิสจากเกมภาคแรกที่จะถูกนำไปใช้กับโลกทั้งโลกของเกม การกระทำและการตัดสินใจของผู้เล่นจะส่งผลต่อทั้งสภาพแวดล้อมและตัวละคร เพื่อสร้างโลกที่เป็นเอกลักษณ์ในทุกการเล่นของผู้เล่นแต่ละคน\r\n\r\nระบบเนเมซิสยังได้เพิ่มฟีเจอร์ใหม่ที่เรียกว่า “Followers” หรือผู้ติดตาม ซึ่งตัวละครเหล่านี้จะเพิ่มเรื่องราวของการความจงรักภักดี ทรยศ และแก้แค้น และเช่นเดียวกันเกมภาคแรก ระบบเนเมซิสจะทำให้ศัตรูจดจำทุกการเผชิญหน้าของผู้เล่นได้ และศัตรูแต่ละตัวยังมีบุคลิกที่แตกต่างกันอีกด้วย\r\n', '-', '2017', 'Monolith Productions', 1049, 5, 'xl4bkIGgiyc'),
(23, 'SWORD ART ONLINE : Hollow Realization', 'เรื่องราวในเกมนี้ต่อจากภาค Lost Song กล่าวถึงเกมการกลับมาเปิดให้บริการใหม่อีกครั้งของเกมออนไลน์อย่าง “Sword Art Online” ที่ครั้งหนึ่งเคยเกิดเหตุการณ์การกักขังผู้เล่นจำนวน 2000 กว่าคนในเกม  จากคายาบะ อากิฮิโกะผู้สร้างเกมนี้ \r\nทว่าหลังจากที่ “Aincrad” ล่มสลายลง  คายาบะ อากิฮิโกะได้หายตัวไป Sword Art Online จึงได้กลับมาเปิดใหม่อีกครั้งในชื่อใหม่ว่า “Sword Art Origin” (SA:O)\r\n', '-', '2017', 'AQURIA', 1390, 5, 'x-Jzb8HiVYo'),
(24, 'SOUTH PARK : The fractureo but whole', 'ในคลิปเบื้องหลังของเกมภาคต่อสุดเกรียน South Park: The Fractured But Whole ที่ได้เปลี่ยนจากล้อหนังแนวแฟนตาซีมาเป็นหนังซูเปอร์ฮีโร่แทน สองผู้สร้างอย่าง แมทต์ สโตน และเทรย์ พาร์คเกอร์ ได้เปิดเผยว่าเดิมทีเกมไม่ได้ใช้ชื่อภาคแบบนี้ตั้งแต่แรกครับ เพราะเกมเคยใช้ชื่อว่า “South Park: The Butthole of Time” หรือ “เซาท์พาร์ค รูตูดแห่งเวลา” มาก่อนนั่นเอง', '-', '2017', 'Ubisoft San Francisco', 1799, 5, 'p5iH-uKHmfo'),
(25, 'DIVINITY ORIGINAL SIN II', 'สัมผัสกับความเป็นอิสระของ RPG อย่างที่ไม่เคยมีมาก่อนกับ The Divinity: Original Sin 2 มีเนื้อเรื่องที่เข้มข้นกราฟฟิกสวยงามสบายตาย และมีเผ่าต่างๆให้เลือกถึง 4 เผ่าได้แก่ มนุษย์, เผ่าเอลฟ์, คนแคระ, Lizardman   มีวิธีผ่านเควสมากมายและมีอิสระมากมาย แทนที่จะผ่านเควสแบบปกติ เลือกฆ่าให้หมดทุกคนเลยยังได้ มีระบบ CO-OP และลานประลองฝีมือ Arena', '-', '2017', 'Larian Studios', 899, 5, 'bTWTFX8qzPI'),
(26, 'Pro evolution soccer 2018', 'Pro Evolution Soccer หรือวินนิ่ง ที่เรารู้จักกันมายาวนานแม้พักหลังความนิยมอาจสู้คู่แข่งอย่าง FIFA ไม่ได้ก็ตาม แต่ดูเหมือนทางต้นสังกัดยังไม่ยอมแพ้ เพราะล่าสุดทาง Konami ได้ประกาศเปิดตัวเกม Pro Evolution Soccer 2018 (วินนิ่ง) ภาคใหม่ ที่จะออกบน PS4 , XBoxone , PS3 , Xbox360 และ PC\r\nนอกจากนี้ยังมีการเปิดสิ่งใหม่ทั้งเกมเพลย์ที่จะสมจริงมากขึ้น ทั้งการควบคุมและป้องกัน อีกทั้งการควบคุมจะเรียบง่าย แต่จะทำให้เกิดการเคลื่อนไหวที่สมจริงแบบ Real Touch เพิ่มมิติใหม่ให้กับการควบคุมลูก ด้วยการใช้ตำแหน่งของร่างกายที่แตกต่างกันเพื่อการบังคับลูกบอล ทำให้มีลีลาการเล่นที่แบบใหม่ที่ไม่สามารถคาดเดาได้ และยังมีการปรับระบบเมนูใหม่ รวมถึงการแสดงภาพของผู้เล่นที่เมนูของ gameplan และ myClub นอกจากนี้ในโหมดเล่นออนไลน์มัลติเพลย์เยอร์แบบ Co-Op ที่เล่นได้ทั้งแบบ 2 ต่อ 2 และ 3 ต่อ 3 คน และยังสามารถเล่นออนไลน์แบบ 11 ต่อ 11 คนได้เรียกว่าเหมือนเราได้เล่นฟุตบอลกันจริงๆเลย\r\n', ' minimum\r\nOS: Window 10,8.1,8,7 SP1 (64bit)\r\n	Processor : Intel Core i5-3450(3.1GHz) /AMD FX\r\n	Memory : 8 GB RAM\r\n	Graphics : NVIDIA GTX 650/AMD Radeon HD 7750\r\n	DirectX : Version 11\r\n	Storage : 30 GB available space\r\nRecommend\r\nOS: Windows 10 , 8.1 , 8 , 7 SP1 (64bit)\r\nProcessor: Intel Core i7-3770?3.40GHz?/ AMD FX 4170?4.20GHz?\r\nMemory: 8 GB RAM\r\nGraphics: NVIDIA GTX 660/AMD Radeon HD 7950\r\nDirectX: Version 11\r\nStorage: 30 GB\r\n', '14.09.2017', 'Konami Digital Entertainment', 1700, 6, 'BiHfIM4gBbk'),
(27, 'NBK 2K18', '2K Sports คือสุดยอดค่ายเกมส์แนวกีฬาที่เน้นผลิตเกมส์แนวกีฬาของชาวอเมริกันเป็นหลัก เช่น บาสเก็ตบอล เบสบอล อเมริกันฟุตบอล มวยปล้ำ ที่แต่ละผลงานที่ผ่านมาก็ถือเป็นสุดยอดเกมส์กีฬาในชนิดนั้นแทบทุกเกมส์ ซึ่งในแต่ละปีก็จะทำการอัพเกรดระบบเกมส์จากปีก่อนให้ดีขึ้น จึงยากที่จะมีคู่แข่งอื่นมาสู้เกมส์กีฬาจาก 2K Sports ได้ และ NBA 2K16 ก็คือเกมส์บาสเก็ตบอลที่ดีที่สุดประจำปี 2016 อย่างไม่ต้องสงสัย', 'minimum\r\nOS: Windows 7 64-bit, Windows 8.1 64-bit or Windows 10 64-bit\r\nProcessor: Intel? Core? i3-530 @ 2.93 GHz / AMD Phenom? II X4 805 @ 2.50 GHz or better\r\nMemory: 4 GB RAM\r\nGraphics: NVIDIA? GeForce? GT 430 1GB / ATI? Radeon? HD 6450 1GB or better\r\nDirectX: Version 11\r\nStorage: 70 GB available space\r\nSound Card: DirectX 9.0x compatible\r\nRECOMMENDED:\r\nOS: Windows 7 64-bit, Windows 8.1 64-bit or Windows 10 64-bit\r\nProcessor: Intel Core i5 or better\r\nMemory: 4 GB RAM\r\nGraphics: DirectX 11 comp', '20.09.2016', 'Visual Concepts', 1600, 6, 'ZiuZ8DlkNrU'),
(28, 'Steep', 'เป็นเกมแนว Action Sport OpenWorld ที่ใช้เวลาพัฒนาร่วม 2ปีครั้ง ซึ่งตัวเกมรวมกีฬาเสี่ยงตายสุดอันตรายอย่าง สโนวบอร์ด, สกี, วิงสูท และพาราไกเดอร์ ในการพิชิตยอดเขาจากทั้งใน ฝรั่งเศษ, ออสเตรีย, อิตาลี่, สวิตเซอร์แลนด์ ที่ให้อิสระผู้เล่นในการเลือกอุปกรณ์และเส้นทางในการพิชิตและเก็บคะแนนให้ได้มากที่สุด ซึ่งตัวเกมก็มีระบบที่น่าสนใจต่างๆ มากมายเช่น ระบบ Challenge ที่ให้เราแข่งทำคะแนนจากการเล่นท่าผาดโผนหรือทำเวลา ระบบ Free Cam ที่จะทำผู้เล่นได้รับมุมมองเหมือนมองผ่านเลนส์ของกล้อง Go Pro ซึ่งเพิมเติมมาจากมุมมองแบบบุคคลที่1 และบุคคลที่3 และยังมีระบบแชร์และฟังค์ชั่นโซเชี่ยลต่างๆ ที่ทำให้ผู้เล่นสามารถติดต่อกับผู้เล่นคนอื่นที่กำลังเล่นบนยอดเขานั้นได้ด้วย ด้วยระบบเกมที่โดดเด่น อิสระที่ให้ผู้เล่นค้นหาและเลือกเส้นทางรวมไปถึงอุปกรณ์ กราฟฟิคที่ให้ผู้เล่นดื่มด่ำประสบการณ์สุดมันส์จากกีฬาผาดโผน', 'MINIMUM:\r\nOS: Windows 7 SP1 or Windows 8.1 or Windows 10(64 bit versions)\r\nProcessor: Intel Core i5 2400S at 2.5 Ghz or AMD FX-4100 at 3.6 Ghz\r\nMemory: 6 GB RAM\r\nGraphics: GeForce GTX 560TI or Radeon R7 260X\r\nDirectX: Version 11\r\nNetwork: Broadband Internet connection\r\nStorage: 25 GB available space\r\nSound Card: DirectX® compatible sound card with latest drivers\r\n\r\nRECOMMENDED:\r\nOS: Windows 7 SP1 or Windows 8.1 or Windows 10(64 bit versions)\r\nProcessor: Intel Core i7 3770K at 3.5 Ghz or AMD FX-8', '02.12.2016', 'Ubisoft Annecy , Ubisoft Montpellier ,Ubisoft Kiev', 1299, 6, 'wm1tF6htUPs'),
(29, 'FIFA 18', 'FIFA 18 เป็นเกมบอลที่มีครบทุกอรรถรสของฟุตบอล โดยเฉพาะโหมด The Journey ที่ทำให้เรามีส่วนร่วมกับชีวิตของนักฟุตบอลไปด้วย ความเหมือนจริงในเรื่องของกราฟฟิค รูปร่างหน้าตาผู้เล่น และลิขสิทธิ์สโมสรที่ EA ก็ยังครองลิขสิทธิ์ส่วนใหญ่อยู่ ทุกอย่างนี้ทำให้เราอินไปกับทุกแมทช์ที่เล่นได้เป็นอย่างดี แต่จุดที่ FIFA 18 ยังตกหล่นอยู่ น่าจะเป็นความมุ่งมั่นเพื่อสร้าง “Gameplay ที่สนุก” จึงทำให้เกมนี้ขาดเสน่ห์บางอย่างของเกมบอลที่ลึกซึ้งไป', 'MINIMUM \r\nOS: Windows 7/8.1/10 - 64-Bit\r\nCPU: Intel Core i3-2100 @ 3.1GHz or AMD Phenom II X4 965 @ 3.4 GHz\r\nRAM: 8GB\r\nHard Drive Space Required: 50.0 GB\r\nMinimum Supported Video Cards: NVIDIA GTX 460 or AMD Radeon R7 260\r\nDirectX: 11.0\r\nRECOMMENDED\r\nOS: Windows 7/8.1/10 - 64-Bit\r\nCPU: Intel i5-3550K @ 3.40GHz or AMD FX 8150 @ 3.6GHz\r\nRAM: 8GB\r\nHard Drive Space Required: 50.0 GB\r\nMinimum Supported Video Cards: NVIDIA GTX 660 or AMD Radeon R9 270\r\nDirectX: 11.0\r\n', '29.09.2017', 'EA canada', 2190, 6, 'z_7Gz_RFLnE'),
(30, 'Football Manager 2017', 'ว่ากันว่าฟุตบอลเป็นเกมแห่งความคิดเห็นและทุกคนย่อมมีความคิดเป็นของตัวเอง แต่คุณก็สามารถเลือกทางเดินของตนเองได้\r\nตัดสินใจตั้งแต่ต้นว่าคุณจะทำสัญญากับนักเตะคนไหนไปจนถึงการวางแผนงบประมาณ คุณจะกำหนดแผนการเล่นโดยใช้ความถนัดของนักเตะเป็นศูนย์กลางหรือจะฝึกฝนพวกเขาให้เข้ากับรูปแบบที่คุณจินตนาการไว้? จะให้ใครลงสนามและใครเป็นตัวสำรองทั้งหมดจะมีผลกับความเข้ากันของทีม และทั้งหมดนี้ขึ้นอยู่กับคุณและความสามารถในการบริหาร\r\nเลือกทางที่ถูกต้องและคุณจะกลายเป็นที่โด่งดัง ขึ้นเป็นพาดหัวข่าวบนหนังสือพิมพ์และเป็นที่พูดคุยบนโซเชียลมีเดีย ชื่อของคุณจะถูกจารึกไว้ดั่งเรื่องเล่า\r\n', 'Minimum PC\r\nOS: Windows Vista (SP2), 7 (SP1), 8/8.1, 10 (1703/Creators Update) - 64-bit or 32-bit\r\nProcessor: Intel Pentium 4, Intel Core or AMD Athlon – 2.2 GHz +\r\nMemory: 2 GB RAM\r\nGraphics: Intel GMA X4500, NVIDIA GeForce 9600M GT or AMD/ATI Mobility Radeon HD 3650 – 256MB VRAM\r\nDirectX: Version 9.0c\r\nStorage: 7 GB available space\r\nMINIMUM MAC\r\nOS: 10.8.5, 10.9.5, 10.10.5, 10.11.6, 10.12.5, 10.13 – 64-bit\r\nProcessor: Intel Core 2 – 1.8 GHz +\r\nMemory: 2 GB RAM\r\nGraphics: Intel GMA X4500, NVIDI', '10.11.2017', 'Sports Interactive', 1098, 6, 'bzL-zzjxqCQ'),
(31, 'Dirt Rally', '60 FPS(หรือ 60 เฟรมต่อวินาที) ของเกมนี้ ต้องบอกว่ามันมาทำให้การบังคับรถในเกมนี้ลื่นไหลมาก ๆ ทุกจังหวะดูนิ่มนวล เนียนตา\r\nและให้ความรู้สึกสนุก ผ่อนคลายไปตลอดจนจบการแข่งขันกว่าทุกเกมแข่งรถที่ผมเคยเล่นมา เพราะมันไม่มีการสะดุดหรือรู้สึกได้ถึงคำว่าเฟรมเรทตก ให้เห็นเลย ซึ่งเกมก่อนหน้านี้อย่าง WRC 5 พลาดตรงจุดนี้ เฟรมเรทบางช่วงที่ตกจนทำให้การแข่งของเรา มีขัด ๆ อารมณ์อยู่ไม่น้อย \r\nไม่แน่ใจว่าปัจจุบันนี้จะมี Patch ออกมาแก้ไขรึยังนะครับ เพราะตอนที่ผมได้มีโอกาสเล่นก็จะเป็นช่วงที่เกมออกใหม่ๆ เลย \r\nเป็นเกมแข่งรถที่โอเคใช้ได้เกมนึงครับ ที่ผมจำได้ว่าพยายามคิดบวก และให้เวลากับมันอยู่นานมากจริง ๆ\r\n', 'MINIMUM:\r\nOS: 64bit Versions of Windows 7, Windows 8, Windows 10\r\nProcessor: AMD FX Series or Intel Core i3 Series\r\nMemory: 4 GB RAM\r\nGraphics: AMD HD5450 or Nvidia GT430 or Intel HD4000 with 1GB of VRAM (DirectX 11 graphics card required)\r\nDirectX: Version 11\r\nStorage: 50 GB available space\r\nSound Card: DirectX Compatible soundcard\r\nRECOMMENDED:\r\nOS: 64bit Versions of Windows 7, Windows 8, Windows 10\r\nProcessor: AMD FX-8150 or Intel Core i5 4670K\r\nMemory: 8 GB RAM\r\nGraphics: AMD R9 290 or Nvidi', '07.12.2015', 'Codemasters Racing Studio , Feral Interactive (Linux)', 1049, 7, 'bVdgJKoY-6Y'),
(32, 'Shift 2', 'มาสนุกกันดีกว่ากับเกมส์รถแข่ง Need For Speed Shift 2 Unleashed แฟรนไชส์ SHIFT สะเทือนใจกลับไปติดตามกับ SHIFT 2 UNLEASHED ประสบการณ์การแข่งรถวิดีโอเกมที่สมจริงมากที่สุดวันที่จะนำประสบการณ์คนขับรถที่แท้จริงในการดำรงชีวิตกับความรุนแรงและความเบิกบานใจของการเป็นหลังล้อและการแข่งขันในการต่อสู้ขับ\r\nSHIFT 2 UNLEASHED มอบทุกความรุนแรงพลังงานและความตื่นเต้นของการแข่งขันวันในประสบการณ์การขับขี่ที่แหวกแนวของแท้\r\n', ': PC \r\nOS: Windows XP (SP3), Vista (SP2), Windows 7\r\nCPU: Intel Core® 2 Duo 2.0 GHz/AMD Athlon X2 64 2.4GHz\r\nRAM: 2GB or more\r\nHARD DRIVE: At least 7GB free space\r\nDVD-ROM: 8x Speed\r\nVIDEO CARD: DirectX® 9.0c Compatible 3D-accelerated 512 MB video card with Shader Model 3.0 or higher*\r\nSOUND CARD: DirectX compatible\r\nDIRECTX: 9.0c\r\nINPUT: Keyboard, Mouse, Dual Analogue Gamepad\r\n', '01.04.2011', 'Slightly Mad Studios', 640, 7, '21bg2moGRU8'),
(33, 'Project CARS 2', 'Project Cars 2 ในโหมด Career ก็ต้องบอกว่ามีการพัฒนาขึ้นมากทำให้ผู้เล่นรู้สึกถึงการแข่งขันที่ท้าทายมีเป้าหมายชัดเจนโดยเราจะเริ่มจากนักแข่งโนเนมต้องไต่อันดับขึ้นไปเรื่อย ๆ จากที่ใช้รถอินดี้ก็จะขยับไปเล่นรถรุ่นใหม่ ๆ ได้อย่าง Lamborghini หรือการแข่งขันเองเราก็จะได้แข่งในรายการ RallyCross ซึ่งเป็นการแข่งบนทางดินผสมทางเรียบได้ด้วย', 'MINIMUM:\r\nOS: Windows 10 (+ specific versions of 7)\r\nProcessor: 3.5 GHz Intel Core i5 3450, 4.0 GHz AMD FX-8350\r\nMemory: 8 GB RAM\r\nGraphics: GTX680 or equivalent\r\nDirectX: Version 11\r\nNetwork: Broadband Internet connection\r\nStorage: 50 GB available space\r\nSound Card: DirectX compatible sound card\r\nRECOMMENDED:\r\nOS: Windows 10\r\nProcessor: Intel i7 6700k\r\nMemory: 16 GB RAM\r\nGraphics: NVidia GTX 1080 or AMD Radeon RX480\r\nDirectX: Version 11\r\nNetwork: Broadband Internet connection\r\nStorage: 50 GB av', '22.09.2017', 'Slightly Mad Studios', 1090, 7, 'ccEB999j970'),
(34, 'TrackMania 2:Canyon', 'ถ้าเกมแข่งรถแบบสมจริงไม่ถูกจริตของคุณเกม TrackMania 2: Canyon ก็น่าจะเหมาะสมกว่าเพราะไม่เน้นความสมจริงแต่เน้นความมันส์เข้าว่ากับเกมแข่งรถผาดโผนที่มีจุดเด่นตรงที่สนามแข่งสุดเอ็กซ์ตรีมมีทั้งแท่นกระโดด , ลานตีลังกา , โค้งซิกแซ็ก และอื่น ๆ ที่จะทำให้รถของคุณเหินฟ้าได้ ตัวเกมรองรับออนไลน์เล่นกับเพื่อนได้มากกว่า 10 คนงานนี้มันส์เป็นหมู่คณะกันล่ะ', 'Minimum \r\nSystem: 2000 / XP / Vista / Windows 73 n( J( G* B. Q6 h) j1 {\r\nProcessor: minimum clock speed of 2.0GHz\r\nMemory: 1 Gb\r\nVideo Card: 256 MB VRAM (Shader Model 2.0)\r\nSound card: compatible with DirectX 9.\r\n', '14.09.2011', 'Nadeo', 699, 7, '77r-ghIOQso'),
(35, 'Forza Horizon 3', 'นี่ก็เป็นเกมแข่งรถที่ฉีกแนวไม่จำเป็นต้องซิ่งในสนามปิดอีกต่อไปเพราะผู้เล่นจะได้บังคับรถลุยได้ทุกที่ในออสเตรเลียไม่ว่าจะเป็นถนนธรรมดา , ทางดิน , ชายหาด หรือจะลุยป่าก็มี มาพร้อมกับรถซิ่งทุกประเภทจะเป็นรถสปอร์ตหรือรถลุยป่า 4WD ก็มีให้เลือกเล่นกันและจุดเด่นที่เป็นไฮไลท์คือเป็นเกม Open World เปิดกว้างให้ขับรถเล่นไปไหนก็ได้ตามใจชอบ', 'Minimum\r\nOS :Windows 10\r\nArchitecture : x64\r\nKeyboard : Integrated Keyboard\r\nMouse : Integrated Mouse\r\nDirectX : DirectX 12 API, Hardware Feature Level 11\r\nMemory : 8 GB\r\nVideo Memory : 2 GB\r\nProcessor : i3-4170 @ 3.7Ghz\r\nGraphics : NVIDIA GT 740 | AMD R7 250x\r\nRecommended\r\nOS :Windows 10\r\nArchitecture : x64\r\nKeyboard : Integrated Keyboard\r\nMouse : Integrated Mouse\r\nDirectX : DirectX 12 API, Hardware Feature Level 11\r\nMemory : 12 GB\r\nVideo Memory : 4 GB\r\nProcessor : i7 3820 3.6GHz\r\nGraphics : NV', '27.09.2016', 'Playground Games, Turn 10 Studios', 1759, 7, 'vD1ccSM9qiA');

-- --------------------------------------------------------

--
-- Table structure for table `sorting`
--

CREATE TABLE `sorting` (
  `pid` int(50) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sorting`
--

INSERT INTO `sorting` (`pid`, `category`) VALUES
(1, 'Action'),
(2, 'Action'),
(3, 'Action'),
(4, 'Action'),
(5, 'Action'),
(6, 'Adventure'),
(7, 'Adventure'),
(8, 'Adventure'),
(9, 'Adventure'),
(10, 'Adventure'),
(11, 'Strategy'),
(12, 'Strategy'),
(13, 'Strategy'),
(14, 'Strategy'),
(15, 'Strategy'),
(16, 'Role Playing/RPG'),
(17, 'Role Playing/RPG'),
(18, 'Role Playing/RPG'),
(19, 'Role Playing/RPG'),
(20, 'Role Playing/RPG'),
(21, 'Simulation'),
(22, 'Simulation'),
(23, 'Simulation'),
(24, 'Simulation'),
(25, 'Simulation'),
(26, 'Sports'),
(27, 'Sports'),
(28, 'Sports'),
(29, 'Sports'),
(30, 'Sports'),
(31, 'Racing'),
(32, 'Racing'),
(33, 'Racing'),
(34, 'Racing'),
(35, 'Racing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib_category`
--
ALTER TABLE `lib_category`
  ADD PRIMARY KEY (`code`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `sorting`
--
ALTER TABLE `sorting`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
