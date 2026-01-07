-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2026 at 07:41 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `islamic_tafsir_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `surahs`
--

CREATE TABLE `surahs` (
  `surah_id` int(11) NOT NULL,
  `arabic_name` varchar(100) NOT NULL,
  `english_name` varchar(100) NOT NULL,
  `revelation_place` enum('Meccan','Medinan') NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surahs`
--

INSERT INTO `surahs` (`surah_id`, `arabic_name`, `english_name`, `revelation_place`, `audio_path`) VALUES
(1, 'الفاتحة', 'Al-Fatihah', 'Meccan', '/assets/audio/001.mp3'),
(2, 'البقرة', 'Al-Baqarah', 'Medinan', '/assets/audio/002.mp3'),
(3, 'آل عمران', 'Al-Imran', 'Medinan', '/assets/audio/003.mp3'),
(4, 'النساء', 'An-Nisa', 'Medinan', '/assets/audio/004.mp3'),
(5, 'المائدة', 'Al-Maidah', 'Medinan', '/assets/audio/005.mp3'),
(6, 'الأنعام', 'Al-Anam', 'Meccan', '/assets/audio/006.mp3'),
(7, 'الأعراف', 'Al-Araf', 'Meccan', '/assets/audio/007.mp3'),
(8, 'الأنفال', 'Al-Anfal', 'Medinan', '/assets/audio/008.mp3'),
(9, 'التوبة', 'At-Tawbah', 'Medinan', '/assets/audio/009.mp3'),
(10, 'يونس', 'Yunus', 'Meccan', '/assets/audio/010.mp3'),
(11, 'هود', 'Hud', 'Meccan', '/assets/audio/011.mp3'),
(12, 'يوسف', 'Yusuf', 'Meccan', '/assets/audio/012.mp3'),
(13, 'الرعد', 'Ar-Rad', 'Medinan', '/assets/audio/013.mp3'),
(14, 'إبراهيم', 'Ibrahim', 'Meccan', '/assets/audio/014.mp3'),
(15, 'الحجر', 'Al-Hijr', 'Meccan', '/assets/audio/015.mp3'),
(16, 'النحل', 'An-Nahl', 'Meccan', '/assets/audio/016.mp3'),
(17, 'الإسراء', 'Al-Isra', 'Meccan', '/assets/audio/017.mp3'),
(18, 'الكهف', 'Al-Kahf', 'Meccan', '/assets/audio/018.mp3'),
(19, 'مريم', 'Maryam', 'Meccan', '/assets/audio/019.mp3'),
(20, 'طه', 'Ta-Ha', 'Meccan', '/assets/audio/020.mp3'),
(21, 'الأنبياء', 'Al-Anbiya', 'Meccan', '/assets/audio/021.mp3'),
(22, 'الحج', 'Al-Hajj', 'Medinan', '/assets/audio/022.mp3'),
(23, 'المؤمنون', 'Al-Muminun', 'Meccan', '/assets/audio/023.mp3'),
(24, 'النور', 'An-Nur', 'Medinan', '/assets/audio/024.mp3'),
(25, 'الفرقان', 'Al-Furqan', 'Meccan', '/assets/audio/025.mp3'),
(26, 'الشعراء', 'Ash-Shuara', 'Meccan', '/assets/audio/026.mp3'),
(27, 'النمل', 'An-Naml', 'Meccan', '/assets/audio/027.mp3'),
(28, 'القصص', 'Al-Qasas', 'Meccan', '/assets/audio/028.mp3'),
(29, 'العنكبوت', 'Al-Ankabut', 'Meccan', '/assets/audio/029.mp3'),
(30, 'الروم', 'Ar-Rum', 'Meccan', '/assets/audio/030.mp3'),
(31, 'لقمان', 'Luqman', 'Meccan', '/assets/audio/031.mp3'),
(32, 'السجدة', 'As-Sajdah', 'Meccan', '/assets/audio/032.mp3'),
(33, 'الأحزاب', 'Al-Ahzab', 'Medinan', '/assets/audio/033.mp3'),
(34, 'سبأ', 'Saba', 'Meccan', '/assets/audio/034.mp3'),
(35, 'فاطر', 'Fatir', 'Meccan', '/assets/audio/035.mp3'),
(36, 'يس', 'Ya-Sin', 'Meccan', '/assets/audio/036.mp3'),
(37, 'الصافات', 'As-Saffat', 'Meccan', '/assets/audio/037.mp3'),
(38, 'ص', 'Sad', 'Meccan', '/assets/audio/038.mp3'),
(39, 'الزمر', 'Az-Zumar', 'Meccan', '/assets/audio/039.mp3'),
(40, 'غافر', 'Ghafir', 'Meccan', '/assets/audio/040.mp3'),
(41, 'فصلت', 'Fussilat', 'Meccan', '/assets/audio/041.mp3'),
(42, 'الشورى', 'Ash-Shura', 'Meccan', '/assets/audio/042.mp3'),
(43, 'الزخرف', 'Az-Zukhruf', 'Meccan', '/assets/audio/043.mp3'),
(44, 'الدخان', 'Ad-Dukhan', 'Meccan', '/assets/audio/044.mp3'),
(45, 'الجاثية', 'Al-Jathiyah', 'Meccan', '/assets/audio/045.mp3'),
(46, 'الأحقاف', 'Al-Ahqaf', 'Meccan', '/assets/audio/046.mp3'),
(47, 'محمد', 'Muhammad', 'Medinan', '/assets/audio/047.mp3'),
(48, 'الفتح', 'Al-Fath', 'Medinan', '/assets/audio/048.mp3'),
(49, 'الحجرات', 'Al-Hujurat', 'Medinan', '/assets/audio/049.mp3'),
(50, 'ق', 'Qaf', 'Meccan', '/assets/audio/050.mp3'),
(51, 'الذاريات', 'Adh-Dhariyat', 'Meccan', '/assets/audio/051.mp3'),
(52, 'الطور', 'At-Tur', 'Meccan', '/assets/audio/052.mp3'),
(53, 'النجم', 'An-Najm', 'Meccan', '/assets/audio/053.mp3'),
(54, 'القمر', 'Al-Qamar', 'Meccan', '/assets/audio/054.mp3'),
(55, 'الرحمن', 'Ar-Rahman', 'Medinan', '/assets/audio/055.mp3'),
(56, 'الواقعة', 'Al-Waqi‘ah', 'Meccan', '/assets/audio/056.mp3'),
(57, 'الحديد', 'Al-Hadid', 'Medinan', '/assets/audio/057.mp3'),
(58, 'المجادلة', 'Al-Mujadila', 'Medinan', '/assets/audio/058.mp3'),
(59, 'الحشر', 'Al-Hashr', 'Medinan', '/assets/audio/059.mp3'),
(60, 'الممتحنة', 'Al-Mumtahanah', 'Medinan', '/assets/audio/060.mp3'),
(61, 'الصف', 'As-Saff', 'Medinan', '/assets/audio/061.mp3'),
(62, 'الجمعة', 'Al-Jumu‘ah', 'Medinan', '/assets/audio/062.mp3'),
(63, 'المنافقون', 'Al-Munafiqun', 'Medinan', '/assets/audio/063.mp3'),
(64, 'التغابن', 'At-Taghabun', 'Medinan', '/assets/audio/064.mp3'),
(65, 'الطلاق', 'At-Talaq', 'Medinan', '/assets/audio/065.mp3'),
(66, 'التحريم', 'At-Tahrim', 'Medinan', '/assets/audio/066.mp3'),
(67, 'الملك', 'Al-Mulk', 'Meccan', '/assets/audio/067.mp3'),
(68, 'القلم', 'Al-Qalam', 'Meccan', '/assets/audio/068.mp3'),
(69, 'الحاقة', 'Al-Haqqah', 'Meccan', '/assets/audio/069.mp3'),
(70, 'المعارج', 'Al-Ma‘arij', 'Meccan', '/assets/audio/070.mp3'),
(71, 'نوح', 'Nuh', 'Meccan', '/assets/audio/071.mpeg'),
(72, 'الجن', 'Al-Jinn', 'Meccan', '/assets/audio/072.mpeg'),
(73, 'المزمل', 'Al-Muzzammil', 'Meccan', '/assets/audio/073.mpeg'),
(74, 'المدثر', 'Al-Muddaththir', 'Meccan', '/assets/audio/074.mpeg'),
(75, 'القيامة', 'Al-Qiyamah', 'Meccan', '/assets/audio/075.mpeg'),
(76, 'الإنسان', 'Al-Insan', 'Medinan', '/assets/audio/076.mpeg'),
(77, 'المرسلات', 'Al-Mursalat', 'Meccan', '/assets/audio/077.mpeg'),
(78, 'النبأ', 'An-Naba', 'Meccan', '/assets/audio/078.mpeg'),
(79, 'النازعات', 'An-Nazi‘at', 'Meccan', '/assets/audio/079.mpeg'),
(80, 'عبس', 'Abasa', 'Meccan', '/assets/audio/080.mpeg'),
(81, 'التكوير', 'At-Takwir', 'Meccan', '/assets/audio/081.mpeg'),
(82, 'الانفطار', 'Al-Infitar', 'Meccan', '/assets/audio/082.mpeg'),
(83, 'المطففين', 'Al-Mutaffifin', 'Meccan', '/assets/audio/083.mpeg'),
(84, 'الانشقاق', 'Al-Inshiqaq', 'Meccan', '/assets/audio/084.mpeg'),
(85, 'البروج', 'Al-Buruj', 'Meccan', '/assets/audio/085.mpeg'),
(86, 'الطارق', 'At-Tariq', 'Meccan', '/assets/audio/086.mpeg'),
(87, 'الأعلى', 'Al-A‘la', 'Meccan', '/assets/audio/087.mpeg'),
(88, 'الغاشية', 'Al-Ghashiyah', 'Meccan', '/assets/audio/088.mpeg'),
(89, 'الفجر', 'Al-Fajr', 'Meccan', '/assets/audio/089.mpeg'),
(90, 'البلد', 'Al-Balad', 'Meccan', '/assets/audio/090.mpeg'),
(91, 'الشمس', 'Ash-Shams', 'Meccan', '/assets/audio/091.mpeg'),
(92, 'الليل', 'Al-Layl', 'Meccan', '/assets/audio/092.mpeg'),
(93, 'الضحى', 'Ad-Duha', 'Meccan', '/assets/audio/093.mpeg'),
(94, 'الشرح', 'Ash-Sharh', 'Meccan', '/assets/audio/094.mpeg'),
(95, 'التين', 'At-Tin', 'Meccan', '/assets/audio/095.mpeg'),
(96, 'العلق', 'Al-‘Alaq', 'Meccan', '/assets/audio/096.mpeg'),
(97, 'القدر', 'Al-Qadr', 'Meccan', '/assets/audio/097.mpeg'),
(98, 'البينة', 'Al-Bayyinah', 'Medinan', '/assets/audio/098.mpeg'),
(99, 'الزلزلة', 'Az-Zalzalah', 'Medinan', '/assets/audio/099.mpeg'),
(100, 'العاديات', 'Al-‘Adiyat', 'Meccan', '/assets/audio/100.mpeg'),
(101, 'القارعة', 'Al-Qari‘ah', 'Meccan', '/assets/audio/101.mpeg'),
(102, 'التكاثر', 'At-Takathur', 'Meccan', '/assets/audio/102.mpeg'),
(103, 'العصر', 'Al-‘Asr', 'Meccan', '/assets/audio/103.mpeg'),
(104, 'الهمزة', 'Al-Humazah', 'Meccan', '/assets/audio/104.mpeg'),
(105, 'الفيل', 'Al-Fil', 'Meccan', '/assets/audio/105.mpeg'),
(106, 'قريش', 'Quraysh', 'Meccan', '/assets/audio/106.mpeg'),
(107, 'الماعون', 'Al-Ma‘un', 'Meccan', '/assets/audio/107.mpeg'),
(108, 'الكوثر', 'Al-Kawthar', 'Meccan', '/assets/audio/108.mpeg'),
(109, 'الكافرون', 'Al-Kafirun', 'Meccan', '/assets/audio/109.mpeg'),
(110, 'النصر', 'An-Nasr', 'Medinan', '/assets/audio/110.mpeg'),
(111, 'المسد', 'Al-Lahab', 'Meccan', '/assets/audio/111.mpeg'),
(112, 'الإخلاص', 'Al-Ikhlas', 'Meccan', '/assets/audio/112.mpeg'),
(113, 'الفلق', 'Al-Falaq', 'Meccan', '/assets/audio/113.mpeg'),
(114, 'الناس', 'An-Nas', 'Meccan', '/assets/audio/114.mpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tafsir_content`
--

CREATE TABLE `tafsir_content` (
  `tafsir_id` int(11) NOT NULL,
  `surah_id` int(11) NOT NULL,
  `tafsir_text` text NOT NULL,
  `source_scholar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tafsir_content`
--

INSERT INTO `tafsir_content` (`tafsir_id`, `surah_id`, `tafsir_text`, `source_scholar`) VALUES
(1, 1, 'Suuratul-Faatiha waa furaha Qur’aanka Kariimka, waxay baraysaa tawxiidka, ducada, iyo hanuunka toosan.', 'Tafsiirka Cusub - Af-Somali'),
(2, 2, 'Suuratul-Baqarah waxay soo degtay Madiina, waxay dejisaa xeerarka Islaamka iyo akhlaaqda bulshada. Waxay ka hadashaa iimaanka, sharciga, iyo hoggaanka Eebe.', 'Tafsiirka Cusub - Af-Somali'),
(3, 1, 'Suuratul-Faatiha waa furaha Qur’aanka Kariimka, waxay baraysaa tawxiidka, ducada, iyo hanuunka toosan.', 'Tafsiirka Cusub - Af-Somali'),
(4, 2, 'Suuratul-Baqarah waxay soo degtay Madiina, waxay dejisaa xeerarka Islaamka iyo akhlaaqda bulshada. Waxay ka hadashaa iimaanka, sharciga, iyo hoggaanka Eebe.', 'Tafsiirka Cusub - Af-Somali'),
(5, 1, 'Suuratul-Faatiha waa furaha Qur’aanka Kariimka, waxay baraysaa tawxiidka, ducada, iyo hanuunka toosan.', 'Tafsiirka Cusub - Af-Somali'),
(6, 2, 'Suuratul-Baqarah waxay soo degtay Madiina, waxay dejisaa xeerarka Islaamka iyo akhlaaqda bulshada. Waxay ka hadashaa iimaanka, sharciga, iyo hoggaanka Eebe.', 'Tafsiirka Cusub - Af-Somali'),
(7, 3, 'Suuratu Aali-Cimraan waxay soo degtay Madiina, waxay xoogga saartaa runta Nabi Ciise iyo xaqnimada Islaamka. Waxay baraysaa midnimada Muslimiinta, samirka, iyo kalsoonida Eebe marka la wajahayo dhibaatooyinka.', 'Tafsiirka Cusub - Af-Somali'),
(8, 4, 'Suuratun-Nisaa waxay xoojisaa caddaaladda, xuquuqda haweenka, iyo daryeelka agoomaha. Waxay soo degtay Madiina si ay u hago bulshada Muslimiinta ee dhisaysa nidaam cadaalad ku dhisan. Waxay baraysaa sinnaan, masuuliyad, iyo ilaalinta axdiyada.', 'Tafsiirka Cusub - Af-Somali'),
(9, 5, 'Suuratul-Maa’idah waa suurad soo degtay Madiina, waxay xoojisaa ilaalinta axdiyada, caddaaladda, iyo cuntada xalaasha ah. Waxay muujisaa dhammaystirka diinta Islaamka iyo muhiimadda ballamaha la fuliyo.', 'Tafsiirka Cusub - Af-Somali'),
(10, 6, 'Al-An’aam waxay soo degtay Makka, waxay caddaynaysaa hal Ilaah iyo in keliya isaga la caabudo. Waxay diiday shirkiga iyo khuraafaadka.', 'Tafsiir Kooban - Af-Somali'),
(11, 7, 'Al-A’raaf waxay soo degtay Makka, waxay sheegaysaa qisada Nebiyada iyo cawaaqibka diidmada. Waxay baraysaa dulqaadka iyo hanuunka.', 'Tafsiir Kooban - Af-Somali'),
(12, 8, 'Al-Anfaal waxay soo degtay Madiina kadib dagaalkii Badr. Waxay muujisaa muhiimadda xukunka dagaal iyo caddaaladda guusha.', 'Tafsiir Kooban - Af-Somali'),
(13, 9, 'At-Tawbah waxay soo degtay Madiina, waa suurad aan ku bilaaban Bismillah. Waxay kala saartaa munaafiqiinta iyo mu’miniinta, waxayna amartaa tawbada.', 'Tafsiir Kooban - Af-Somali'),
(14, 10, 'Yuunus waxay soo degtay Makka, waxay xustaa qisada Nabi Yuunus iyo rumaynta Ilaahay marka la imtixaamo.', 'Tafsiir Kooban - Af-Somali'),
(15, 11, 'Huud waxay soo degtay Makka, waxay ka sheekaynaysaa nebiyo hore iyo cawaaqibka diidmada. Waxay dhiirrigelisaa samir iyo tawakkul.', 'Tafsiir Kooban - Af-Somali'),
(16, 12, 'Yuusuf waxay soo degtay Makka, waxay xustaa qisada Nabi Yuusuf iyo samirka imtixaanka. Waa cashar dulqaad iyo kalsooni Eebe.', 'Tafsiir Kooban - Af-Somali'),
(17, 13, 'Ar-Racd waxay muujinaysaa awoodda Eebe ee abuurka iyo caddaaladda. Waxay soo degtay Madiina, waxayna ku boorinaysaa sabir iyo xusuusta Eebe.', 'Tafsiir Kooban - Af-Somali'),
(18, 14, 'Ibraahiim waxay soo degtay Makka, waxay xustaa ducooyinka Nabi Ibraahiim iyo mahadnaqidda nimcada. Waxay baraysaa tawxiidka.', 'Tafsiir Kooban - Af-Somali'),
(19, 15, 'Al-Xijr waxay soo degtay Makka, waxay ka hadlaysaa ilaalinta Qur’aanka iyo ciqaabta kuwii hore. Waxay xoojisaa kalsoonida Nabiga.', 'Tafsiir Kooban - Af-Somali'),
(20, 16, 'An-Naxl waxay soo degtay Makka, waxay xustaa nimcooyinka Eebe iyo muhiimadda caddaaladda. Waxay ku boorinaysaa sabir iyo xamdi.', 'Tafsiir Kooban - Af-Somali'),
(21, 17, 'Al-Israa waxay soo degtay Makka, waxay ka hadlaysaa socdaalkii Israa wal-Micraaj. Waxay baraysaa akhlaaqda iyo cibaadada waalidka.', 'Tafsiir Kooban - Af-Somali'),
(22, 18, 'Al-Kahf waxay soo degtay Makka, waxay xustaa dhalinyaradii godka galay. Waxay muujisaa rumaynta iyo ilaalinta diinta.', 'Tafsiir Kooban - Af-Somali'),
(23, 19, 'Maryam waxay soo degtay Makka, waxay ka sheekaynaysaa Nabi Ciise iyo Maryan. Waxay caddaynaysaa mucjisada abuurka Eebe.', 'Tafsiir Kooban - Af-Somali'),
(24, 20, 'Taa-Haa waxay soo degtay Makka, waxay ka hadlaysaa Nabi Muuse iyo fariintiisii. Waxay baraysaa tawxiidka iyo dulqaadka.', 'Tafsiir Kooban - Af-Somali'),
(25, 21, 'Al-Anbiyaa waxay soo degtay Makka, waxay xustaa nebiyada iyo ujeeddada halgan. Waxay muujisaa rumaynta iyo adkaysiga.', 'Tafsiir Kooban - Af-Somali'),
(26, 22, 'Al-Xajj waxay soo degtay Madiina, waxay ka hadlaysaa xajka iyo isu imaatinka dadka. Waxay xoojisaa toobadda iyo cabsida Eebe.', 'Tafsiir Kooban - Af-Somali'),
(27, 23, 'Al-Mu’minuun waxay soo degtay Makka, waxay tilmaamaysaa sifooyinka mu’miniinta guuleystay. Waxay baraysaa nadaafad iyo akhlaaq.', 'Tafsiir Kooban - Af-Somali'),
(28, 24, 'An-Nuur waxay soo degtay Madiina, waxay dejisaa xeerarka akhlaaqda iyo nadaafadda bulshada. Waxay ka hortagtaa xanta iyo faafinta ceebta.', 'Tafsiir Kooban - Af-Somali'),
(29, 25, 'Al-Furqaan waxay soo degtay Makka, waxay kala saaraysaa xaqa iyo baadilka. Waxay tilmaamaysaa sifooyinka addoomada Eebe.', 'Tafsiir Kooban - Af-Somali'),
(30, 26, 'Ash-Shucaraa waxay soo degtay Makka, waxay xustaa nebiyada iyo doodihii qoomamadood. Waxay dhiirrigelisaa daacadnimo iyo dulqaad.', 'Tafsiir Kooban - Af-Somali'),
(31, 27, 'An-Naml waxay soo degtay Makka, waxay sheekaynaysaa Nabi Sulaymaan iyo boqoraddii Saba’. Waxay muujisaa xikmad iyo shukri.', 'Tafsiir Kooban - Af-Somali'),
(32, 28, 'Al-Qasas waxay soo degtay Makka, waxay ka hadlaysaa qisooyinka Muuse iyo Fircoon. Waxay baraysaa in caddaaladdu guulaysato.', 'Tafsiir Kooban - Af-Somali'),
(33, 29, 'Al-Cankabuut waxay soo degtay Makka, waxay xustaa imtixaanka dadka rumeeyey. Waxay baraysaa dulqaad iyo rumayn dhab ah.', 'Tafsiir Kooban - Af-Somali'),
(34, 30, 'Ar-Ruum waxay soo degtay Makka, waxay ka hadlaysaa guusha Roomaanka iyo awoodda Eebe. Waxay muujisaa in guushu Eebe ka timaado.', 'Tafsiir Kooban - Af-Somali'),
(35, 31, 'Luqmaan waxay soo degtay Makka, waxay xustaa xikmadda Luqmaan iyo dardaarankiisa wiilkiisa. Waxay baraysaa tawxiid iyo edeb.', 'Tafsiir Kooban - Af-Somali'),
(36, 32, 'As-Sajdah waxay soo degtay Makka, waxay ka hadlaysaa abuurka, nolosha iyo aakhiro. Waxay dhiirrigelisaa sujuud iyo tukan joogto ah.', 'Tafsiir Kooban - Af-Somali'),
(37, 33, 'Al-Axzaab waxay soo degtay Madiina, waxay xustaa dagaalkii Axzaab iyo akhlaaqda Nabi Muxammad. Waxay baraysaa tawakkul iyo xishood.', 'Tafsiir Kooban - Af-Somali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `surahs`
--
ALTER TABLE `surahs`
  ADD PRIMARY KEY (`surah_id`);

--
-- Indexes for table `tafsir_content`
--
ALTER TABLE `tafsir_content`
  ADD PRIMARY KEY (`tafsir_id`),
  ADD KEY `surah_id` (`surah_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tafsir_content`
--
ALTER TABLE `tafsir_content`
  MODIFY `tafsir_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tafsir_content`
--
ALTER TABLE `tafsir_content`
  ADD CONSTRAINT `tafsir_content_ibfk_1` FOREIGN KEY (`surah_id`) REFERENCES `surahs` (`surah_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
