-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 02:08 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlnv`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `maNV` int(11) NOT NULL,
  `hovaten` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chucvu` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phongban` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luong` int(11) DEFAULT NULL,
  `ngayvaolam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`maNV`, `hovaten`, `chucvu`, `phongban`, `luong`, `ngayvaolam`) VALUES
(1, 'Spenser Groger', 'Senior Quality Engin', 'Vipe', 4855, '0000-00-00'),
(2, 'Bonnibelle Erington', 'Teacher', 'Wordpedia', 6505, '0000-00-00'),
(3, 'Dotti Learmouth', 'Operator', 'Youbridge', 12984, '0000-00-00'),
(4, 'Phillie Reck', 'Senior Cost Accounta', 'Skippad', 9792, '0000-00-00'),
(5, 'Jedediah Leteurtre', 'Electrical Engineer', 'Bubblebox', 5451, '0000-00-00'),
(6, 'Carmon Seaward', 'Social Worker', 'Oyoba', 9792, '0000-00-00'),
(7, 'Kathlin Mosey', 'Occupational Therapi', 'Photobean', 11029, '0000-00-00'),
(8, 'Cleo Durbin', 'Actuary', 'Katz', 13961, '0000-00-00'),
(9, 'Agnesse Minkin', 'Web Designer III', 'Realmix', 5494, '0000-00-00'),
(10, 'Martina Ordish', 'Compensation Analyst', 'Mydo', 5117, '0000-00-00'),
(11, 'Bertrando Ebbage', 'Assistant Media Plan', 'Divape', 10179, '0000-00-00'),
(12, 'Daveta Bassam', 'Automation Specialis', 'Yamia', 14899, '0000-00-00'),
(13, 'Wilma Spratt', 'Geologist I', 'Bubblemix', 5889, '0000-00-00'),
(14, 'Kissee Corre', 'Nuclear Power Engine', 'Devbug', 8610, '0000-00-00'),
(15, 'Suzanne Dulany', 'Safety Technician II', 'Miboo', 10648, '0000-00-00'),
(16, 'Paton Sweating', 'Dental Hygienist', 'Fivechat', 12026, '0000-00-00'),
(17, 'Harmonie Blake', 'Financial Analyst', 'Leexo', 8141, '0000-00-00'),
(18, 'Albina Biesterfeld', 'Computer Systems Ana', 'Ozu', 6792, '0000-00-00'),
(19, 'Carter Scothorn', 'Help Desk Technician', 'Twitterbeat', 10767, '0000-00-00'),
(20, 'Martita Hamner', 'Office Assistant IV', 'Latz', 3923, '0000-00-00'),
(21, 'Barny Lamasna', 'Senior Sales Associa', 'Kaymbo', 14267, '0000-00-00'),
(22, 'Sherry Motten', 'Accounting Assistant', 'Voomm', 14800, '0000-00-00'),
(23, 'Caz McGrayle', 'Marketing Manager', 'Meevee', 3730, '0000-00-00'),
(24, 'Gabbie Crellim', 'Senior Cost Accounta', 'Avavee', 4577, '0000-00-00'),
(25, 'Susanetta Finnan', 'Community Outreach S', 'Mydeo', 5244, '0000-00-00'),
(26, 'Sherwynd Tuny', 'Recruiter', 'Twimm', 11255, '0000-00-00'),
(27, 'Duky Duffan', 'Product Engineer', 'Twitterbridge', 11459, '0000-00-00'),
(28, 'Ruby Dukelow', 'Electrical Engineer', 'Centimia', 5996, '0000-00-00'),
(29, 'Alasdair Balkwill', 'Editor', 'Skimia', 3596, '0000-00-00'),
(30, 'Zahara Peacocke', 'Project Manager', 'Wikivu', 10901, '0000-00-00'),
(31, 'Zorah Arend', 'Senior Sales Associa', 'Edgeclub', 8063, '0000-00-00'),
(32, 'Alanson Dirand', 'VP Sales', 'Topicstorm', 9918, '0000-00-00'),
(33, 'Harbert Boatman', 'Senior Financial Ana', 'Buzzbean', 4030, '0000-00-00'),
(34, 'Sophey Leathers', 'Research Nurse', 'Divape', 10744, '0000-00-00'),
(35, 'Cathrin Pratley', 'Research Associate', 'Youbridge', 7654, '0000-00-00'),
(36, 'Loise Cardenosa', 'VP Accounting', 'Skiptube', 8679, '0000-00-00'),
(37, 'Julianna Redish', 'Computer Systems Ana', 'Pixope', 2940, '0000-00-00'),
(38, 'Wright Demogeot', 'Speech Pathologist', 'Flashdog', 13645, '0000-00-00'),
(39, 'Myranda Marke', 'Civil Engineer', 'Yodel', 4203, '0000-00-00'),
(40, 'Ambrosius Upwood', 'Design Engineer', 'Yacero', 11787, '0000-00-00'),
(41, 'Pincas Limpricht', 'Geological Engineer', 'Topicware', 6002, '0000-00-00'),
(42, 'Xylia Botcherby', 'Software Consultant', 'Riffpedia', 5609, '0000-00-00'),
(43, 'Cindie Lemanu', 'Environmental Specia', 'Ntag', 2219, '0000-00-00'),
(44, 'Trumann Grimble', 'Staff Scientist', 'Kazio', 11484, '0000-00-00'),
(45, 'Bartholomew Crackett', 'Clinical Specialist', 'Shufflebeat', 10026, '0000-00-00'),
(46, 'Nancy Varnes', 'Legal Assistant', 'Pixoboo', 8496, '0000-00-00'),
(47, 'Merwin Lapslie', 'Statistician IV', 'Rooxo', 10772, '0000-00-00'),
(48, 'Emerson Lowthian', 'Registered Nurse', 'Eayo', 4619, '0000-00-00'),
(49, 'Rawley Rapier', 'Operator', 'Quinu', 3998, '0000-00-00'),
(50, 'Chucho Wherton', 'Community Outreach S', 'Mudo', 7427, '0000-00-00'),
(51, 'Melisande Domico', 'Social Worker', 'Twinder', 7178, '0000-00-00'),
(52, 'Ginnie Ciccotti', 'Senior Sales Associa', 'Wikibox', 4761, '0000-00-00'),
(53, 'Orran Durston', 'Statistician II', 'Realmix', 11494, '0000-00-00'),
(54, 'Gabby Brabben', 'VP Sales', 'Bubblemix', 6452, '0000-00-00'),
(55, 'Earlie Bartens', 'Account Executive', 'Divavu', 14797, '0000-00-00'),
(56, 'Jae Frankish', 'Research Nurse', 'Twitterwire', 7790, '0000-00-00'),
(57, 'Wernher Fattori', 'Nuclear Power Engine', 'Geba', 7336, '0000-00-00'),
(58, 'Rosalynd Fellows', 'Safety Technician II', 'Yakidoo', 10675, '0000-00-00'),
(59, 'Jacinta Kitman', 'Clinical Specialist', 'Mycat', 14139, '0000-00-00'),
(60, 'Kennith Etock', 'Media Manager III', 'Edgepulse', 4853, '0000-00-00'),
(61, 'Noak Matkovic', 'Actuary', 'Innotype', 5557, '0000-00-00'),
(62, 'Tildi Upex', 'Physical Therapy Ass', 'Tagpad', 11846, '0000-00-00'),
(63, 'Faun Moores', 'Legal Assistant', 'Gevee', 8928, '0000-00-00'),
(64, 'Randy Mordue', 'Biostatistician IV', 'Centizu', 6421, '0000-00-00'),
(65, 'Katherine Domel', 'Help Desk Technician', 'Meeveo', 6367, '0000-00-00'),
(66, 'Halette Shambroke', 'Physical Therapy Ass', 'Devify', 11646, '0000-00-00'),
(67, 'Frasquito Macveigh', 'Office Assistant I', 'Meevee', 12778, '0000-00-00'),
(68, 'Eartha Dayer', 'Structural Analysis ', 'Brightdog', 14551, '0000-00-00'),
(69, 'Lorette Gatfield', 'Systems Administrato', 'Wikizz', 3864, '0000-00-00'),
(70, 'Chaddy Friday', 'Human Resources Mana', 'Brightbean', 12152, '0000-00-00'),
(71, 'Rina Wildin', 'Physical Therapy Ass', 'Babbleopia', 11538, '0000-00-00'),
(72, 'Anneliese Greenhead', 'Programmer Analyst I', 'Tekfly', 6207, '0000-00-00'),
(73, 'Lavinie Callan', 'Assistant Media Plan', 'Bluezoom', 12885, '0000-00-00'),
(74, 'Petrina Trahar', 'Marketing Assistant', 'Edgeblab', 14745, '0000-00-00'),
(75, 'Else Biddy', 'Design Engineer', 'Roomm', 2469, '0000-00-00'),
(76, 'Torry Tungate', 'Web Designer I', 'Babbleopia', 13811, '0000-00-00'),
(77, 'Darelle Rentilll', 'Operator', 'Podcat', 14128, '0000-00-00'),
(78, 'Vilma Criag', 'Structural Engineer', 'Pixoboo', 5343, '0000-00-00'),
(79, 'Karissa Kensy', 'Chief Design Enginee', 'Einti', 10099, '0000-00-00'),
(80, 'Herb Manderson', 'Structural Analysis ', 'Dabtype', 4143, '0000-00-00'),
(81, 'Grazia Willshere', 'Marketing Assistant', 'Jatri', 3292, '0000-00-00'),
(82, 'Julita Wigin', 'Civil Engineer', 'Feedspan', 11806, '0000-00-00'),
(83, 'Lanni Fortescue', 'Financial Analyst', 'Bubblebox', 4802, '0000-00-00'),
(84, 'Steffie Lewsie', 'Research Associate', 'Talane', 12096, '0000-00-00'),
(85, 'Eadmund Baert', 'Senior Developer', 'Jaxworks', 10449, '0000-00-00'),
(86, 'Aron Sherebrook', 'Editor', 'Fanoodle', 3729, '0000-00-00'),
(87, 'Donnamarie Siebert', 'Geologist III', 'Feedspan', 5533, '0000-00-00'),
(88, 'Crysta Speir', 'Programmer Analyst I', 'Jazzy', 6386, '0000-00-00'),
(89, 'Brittne McAughtrie', 'Administrative Assis', 'Skyba', 8000, '0000-00-00'),
(90, 'Kalvin Babbage', 'Project Manager', 'Voonyx', 10792, '0000-00-00'),
(91, 'Bendite Gulland', 'Safety Technician I', 'Abata', 2178, '0000-00-00'),
(92, 'Lotty Brecknall', 'VP Accounting', 'Devify', 6266, '0000-00-00'),
(93, 'Blondell Bowe', 'Senior Cost Accounta', 'Rhybox', 8888, '0000-00-00'),
(94, 'Halley Dunsford', 'Professor', 'Topiclounge', 5316, '0000-00-00'),
(95, 'Wilek Reach', 'Biostatistician IV', 'Photobean', 2544, '0000-00-00'),
(96, 'Bondon Ghilardi', 'Accounting Assistant', 'Pixope', 2711, '0000-00-00'),
(97, 'Chrysa MacCaughey', 'Sales Associate', 'Zoonoodle', 7321, '0000-00-00'),
(98, 'Fifine Batten', 'Design Engineer', 'Flipstorm', 7714, '0000-00-00'),
(99, 'Rhett Scales', 'Paralegal', 'Eayo', 9483, '0000-00-00'),
(100, 'Tammi Warcop', 'Assistant Professor', 'Wordtune', 12129, '0000-00-00');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`maNV`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
