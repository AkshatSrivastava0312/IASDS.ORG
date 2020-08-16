-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:45 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iasds`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultancy`
--

CREATE TABLE `consultancy` (
  `id` int(11) NOT NULL,
  `c_area` text NOT NULL,
  `c_client` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `consultancy`
--

INSERT INTO `consultancy` (`id`, `c_area`, `c_client`) VALUES
(2, 'Finalization of methodology for all India reports on land reforms', 'Lal Bahadur Shastri National Academy of Administration, Mussoorie'),
(3, 'Preparation of State Plan of Action for the project Education for All', 'UNICEF and Department of Basic Education'),
(4, 'Sampling design, preparation of schedules, training to field staff and pretesting of schedules for impact study under UNICEF assistance', 'SEWA, Lucknow'),
(5, 'Pooled Response Surface analysis over years on designed field experiments', 'National Botanical Research Institute, Lucknow'),
(6, 'Analysis of soil parameters for cropped as well as forestry lands', 'National Botanical Research Institute, Lucknow'),
(7, 'Sampling design, project formulation, analysis and interpretation', 'CREATE, Lucknow'),
(8, 'Sampling design, project formulation, analysis and interpretation', 'Vatsalya, Lucknow'),
(9, 'Sampling design, project formulation, analysis and interpretation', 'AMS, Lucknow'),
(10, 'On project formulation, analysis and interpretation', 'ORG, Lucknow'),
(11, 'AED-USAID on sampling design, analysis and interpretation for their projects on micro-nutrients', 'A2Z India'),
(12, 'Evidence reviews and project formulation/ finalization for Vistaar project', 'Intra Health International'),
(13, 'Women farmer empowerment project (Himachal Pradesh)', 'Chinmaya organization for rural development (CORD)'),
(14, 'Socio-cultural implications of railway  project in Naxal-dominated area of Odisha', 'Vidyant College, Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `contactpage`
--

CREATE TABLE `contactpage` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `contact_html` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactpage`
--

INSERT INTO `contactpage` (`id`, `title`, `contact_html`) VALUES
(2, 'Contact Us', '<ul>\r\n	<li>Consultant &amp; Advisor: Prof. A.K. Nigam</li>\r\n	<li>&nbsp;Mobile No. +91 9620211960</li>\r\n	<li>Director: Dr. S.P. Singh</li>\r\n	<li>&nbsp;Mobile No. +91 8987073322, 6200889645</li>\r\n	<li>Joint Director: Dr. P.P. Tiwari</li>\r\n	<li>&nbsp;Mobile No. +91 9450151459, 9795334032</li>\r\n	<li>\r\n	<hr />\r\n	<p>&nbsp;</p>\r\n	</li>\r\n	<li>1/172 Virat Khand, Gomtinagar, Lucknow, 226010</li>\r\n	<li>&nbsp;<a href=\"mailto:iasds_lko@hotmail.com\">iasds_lko@hotmail.com</a></li>\r\n	<li><a href=\"mailto:director.iasds@gmail.com\">director.iasds@gmail.com</a></li>\r\n	<li>&nbsp;+91-522-2304849</li>\r\n	<li>&nbsp;<a href=\"http://iasds.org/www.iasds.org\">http://www.iasds.org</a></li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `exp_team`
--

CREATE TABLE `exp_team` (
  `id` int(11) NOT NULL,
  `exp_name` varchar(50) NOT NULL,
  `exp_special` varchar(50) NOT NULL,
  `exp_experience` varchar(25) NOT NULL,
  `iasds_status` varchar(50) NOT NULL,
  `exp_present` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exp_team`
--

INSERT INTO `exp_team` (`id`, `exp_name`, `exp_special`, `exp_experience`, `iasds_status`, `exp_present`) VALUES
(2, 'Dr. V.K. Gupta', 'Statistics', '45', ' President Governing Body', 'Professor(Statistics), ICAR-IASRI, New Delhi(Retired)'),
(4, 'Prof. Aloke Dey', 'Statistics', '>50', 'Vice- President Governing Body', ' Professor, ISI, Delhi (Retired)'),
(5, 'Dr. Padam Singh', 'Survey Research', '>50', 'Ex President of Governing Body, Consultant', 'Additional DG ICMR, New Delhi(Retired)'),
(6, 'Prof. A. K. Nigam', 'Statistics, Health & Nutrition', '>55', 'Consultant Advisor', 'IASDS, 1987'),
(7, 'Dr. Ravindra Srivastava', 'Statistics', '>50', 'Consultant', ' IASDS, 2008'),
(8, 'Dr. S. P. Singh', 'Agri. Statistics', '40', 'Director, Secretary (Governing Body)', 'Former Dean RPCAU, PUSA'),
(9, 'Dr. V. K. Srivastava', 'Medical Health', '45', 'Consultant, Medical Health', 'Ex. Professor of Social & Preventive Medicine, KGMU, Lucknow'),
(10, 'Dr. Shruti Shukla', 'Food & Nutrition', '11', 'Consultant Ex. Assistant Director (Nutrition) IASD', 'Biotechnology Industry Research Assistance Council (BIRAC), New Delhi'),
(11, 'Dr. P. P. Tiwari', ' Rural Development', '28', 'Joint Director', 'IASDS'),
(12, 'Ms. Reeta Saxena', 'Sociology', '21', 'Assistant Director (Social Sciences)', 'IASDS');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `photo`) VALUES
(2, 'Photo 1', 'uploads/gallery/5ea87949eb2c71.41876009.jpg'),
(3, 'Photo 2', 'uploads/gallery/5ea879523940d5.41303153.jpg'),
(4, 'Photo 3', 'uploads/gallery/5ea879789cb610.91302596.jpg'),
(5, 'Photo 5', 'uploads/gallery/5ea879de9ccf08.39208248.jpg'),
(6, 'Photo 6', 'uploads/gallery/5ea879ea7f4d31.91848072.jpg'),
(7, 'Photo 7', 'uploads/gallery/5ea879f6adf746.65335286.jpg'),
(8, 'Photo 8', 'uploads/gallery/5ea87a02355b47.74394691.jpg'),
(9, 'Photo 9', 'uploads/gallery/5ea87bf2db8db4.43381848.jpg'),
(10, 'Photo 10', 'uploads/gallery/5ea87c04316e56.32513420.jpg'),
(11, 'Photo 11', 'uploads/gallery/5ea87c8708d4f0.97573584.jpg'),
(12, 'Photo 12', 'uploads/gallery/5ea87c94f16927.47784477.jpg'),
(13, 'Photo 13', 'uploads/gallery/5ea87ca1d16cf8.97487310.jpg'),
(14, 'Photo 14', 'uploads/gallery/5ea87cb0b82594.41147455.jpg'),
(15, 'Photo 15', 'uploads/gallery/5ea87cc9a48906.19162899.jpg'),
(16, 'Photo 16', 'uploads/gallery/5ea87cd76b14f5.77838792.jpg'),
(17, 'Photo 17', 'uploads/gallery/5ea87ce9bd4f79.36956683.jpg'),
(18, 'Photo 18', 'uploads/gallery/5ea87cf669de14.14719422.jpg'),
(19, 'Photo 19', 'uploads/gallery/5ea87d2cef8224.34281382.jpg'),
(20, 'Photo 20', 'uploads/gallery/5ea87d38e0a387.39424379.jpg'),
(21, 'Photo 21', 'uploads/gallery/5ea87d423a1f02.46200585.jpg'),
(22, 'Photo 22', 'uploads/gallery/5ea87d49d641d7.92436438.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `g_body`
--

CREATE TABLE `g_body` (
  `id` int(11) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `g_post` varchar(25) NOT NULL,
  `g_address` text NOT NULL,
  `g_occup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `g_body`
--

INSERT INTO `g_body` (`id`, `g_name`, `g_post`, `g_address`, `g_occup`) VALUES
(2, 'Dr. V.K. Gupta', 'President', 'Former ICAR National Professor\r\n\r\n108, Jaipuria Building Kohlapur Road\r\n\r\nKamla Nagar, Delhi 110007\r\n\r\nvkgupta_1751@yahoo.co.in\r\n\r\nMobile:-  9899105601, 25843508', 'Retired'),
(3, 'Prof. V.K. Srivastava', 'Vice President', 'Principal,  Prasad Institute of Medical Sciences,  Lucknow.  Former Prof. & Head, Department of Social and Preventive Medicines, KGMU, Lucknow  vinods51@hotmail.com  Mobile:-9415101095', 'Service'),
(4, 'Dr. Padam Singh', 'Member', 'Former Additional Director General, ICMR and Former Member, National Statistical Commission, New Delhi  dr.padamsingh2013@gmail.com    Mobile:- 9868110538', 'Retired'),
(5, 'Prof. V.K. Srivastava', 'Member', 'Principal,  Prasad Institute of Medical Sciences,  Lucknow.  Former Prof. & Head, Department of Social and Preventive Medicines, KGMU, Lucknow  vinods51@hotmail.com  Mobile:-9415101095', 'Service'),
(6, 'Dr. Neelam Singh', 'Member', 'Chief Functionary, VATSALYA, C-377, Church Road, Indiranagar,  Lucknow - 226 016  vatsalyaresource@yahoo.co.in  Mobile:-9451543418', 'Chief Functionary, of VATSALYA,'),
(7, 'Dr. A.C. Kulshreshtha', 'Member', 'Former ADG, CSO and Faculty UN SIAPFlat No. 802, Plot No. 15, New Rashtriya, Dwarka, New Delhi-1110078  Mob: +91 9560155946 ackulshreshtha@yahoo.com', 'Retired'),
(8, 'Dr. Rajender Prasad', 'Member', 'Principal Scientist, ICAR- I.A.S.R.I., Library Avenue, Pusa,  New Delhi â€“ 110012  rajender1066@yahoo.co.in  Mobile:- 9811647837', 'Service'),
(9, 'Dr. P.K. Malhotra', 'Member', 'Former Principal Scientist, ICAR  C-606, Supertech Rameshwar Orchid, Kaushambi, Ghaziabad-201010  Mobile: 9911921222  pkm1952@hotmail.com', 'Retired'),
(10, 'Dr. A.K. Srivastava', 'Member', 'Former Joint Director (IASRI)  B-25/G-1, Dilshad Garden,  Delhi - 110 095  arunsrivast@gmail.com  Mobile: 9654933412.', 'Retired'),
(11, 'Dr. V.K. Bhatia', 'Member', 'Ex-Director, ICAR-IASRI, NEW DELHI  B â€“ 279, DERAWAL NAGAR, DELHI 110009  Vkb7251@gmail.com, 9868141062', 'Retired'),
(12, 'Dr.Surinder Kumar', 'Member', '	 Head, Department of Applied Statistics,  School of Physical Sciences,  Babasaheb Bhimrao Ambedkar University  Vidya Vihar, Raebareli Road,  Lucknow 226025  Mobile no.9410334706    surinderntls@gmail.com', 'Service'),
(13, 'Dr. V.K. Singh', 'Member', 'Director, Agriculture Statistics & Crops Insurance, U.P., Krishi Bhawan, Lucknow  Res.64, Rajvir Nagar, Indira Nagar, Lucknow.  agristatup@gmail.com  Mobile no.09415093148, 09235629305, 0522-2701354', 'Service'),
(14, 'Dr. Vishwajit Kumar', 'Member', 'Director, Community Empowerment  Lab  11, 26/11, Wazir Hasan Road, Block I, Gokhale Vihar, Butler Colony, Lucknow, Uttar Pradesh 226001  Mobile no. 084009 67609  vishwajeet.kumar@community.org.in', 'Director,  Community Empowerment Lab'),
(15, 'Dr. C. M. Pandey', 'Member', 'Former Head, Department of Biostatistics and Health Informatics, Sanjay Gandhi Postgraduate Institute of Medical Sciences, Raebareli Road, Lucknow, U.P., 226014  Mobile no. 8004904476 cmpandey@sgpgi.ac.in', 'Retired'),
(16, 'Dr. Rajiv Tandon', 'Member', 'Dr. Rajiv Tandon, Director Health,  RTI International India, 6th Floor, Commercial Tower of Novotel-Pullman Hotel, Asset No. 2,  Aerocity Hospitality District, IGI Airport, New Delhi-110037 Mobile:-: +91 9811103305. Residence Address: C-55, Anand  Niketan, New Delhi,  Skype address â€“ dr.rajivtandon', 'Service'),
(17, 'Dr. S.N. Dwivedi', 'Member', 'Prof., Department of Biostatistics, All India Institute of Medical Sciences, Ansari Nagar, New Delhi -110029  dwivedi7@hotmail.com', 'Service'),
(18, 'Prof. Ram Karan Singh', 'Member', '	 V-75, Vatayan, Nehru Enclave, Gomti Nagar, Lucknow. ramkarans@hotmail.com   Mobile no.9335259636', 'Retired'),
(19, 'Dr. Pradeep Mishra', 'Member', 'Addl. Director, Population Research Centre, University of Lucknow. prcluck@gmail.com  Mobile No.9198711722, 9335231282', 'Service'),
(20, 'Dr. Uday Mohan', 'Member', 'Former Prof. & Head, Department of Community Medicine, KGMU, Lucknow.  Tower-5, 1303 Omega Green Park,   Faizabad Road, Lucknow- 226028,UP  Email : drduaymohan@yahoo.co.in  Mobile No.9415408926, 0522-2237571', 'Service'),
(21, 'Dr. Ravindra Srivastava', 'Member', 'H.No.2410 Mapple Tower, Paramount Symphony Crossing, Republic NH-24, Gaziabad.  srivastava_ravindra@yahoo.co.in  Mobile No:- 9910447575', 'Retd. Principal Scientist of IASRI'),
(22, 'Dr. R.J.Yadav', 'Member', 'Ex Scientist \"G\"/Director Grade Scientist   National Institute of Medical Statistics  Indian Council of Medical Research  DHR, MoHFW, GoI,  New Delhi   Mobile No:- 9868637736', 'Retired'),
(23, 'Dr. B.V.S. Sisodia', 'Member', 'Ex. Prof. & Head, Department of Agricultural Statistics, NDUAT, Faizabad  Email: bvssisodia@gmail.com  Mobile: 9450877840', 'Retired'),
(24, 'Dr. Hukum Chandra', 'Member', 'National Fellow & Principal Scientist  ICAR-Indian Agricultural Statistics Research Institute (IASRI), Library Avenue, PUSA, New Delhi-110012  Mobile No:- 9999450020', 'Service'),
(25, 'Director IASRI â€“Ex-Officio', 'Member', 'Director, IASRI-ICAR, New Delhi', 'Service'),
(26, 'Dr. S.P. Singh', 'Director/ Member  Secreta', '2/101, Old Malhar, Sahara Estate, Janakipuram, Lucknow-226 021  Email: sp_rau@yahoo.co.in  Mobile: 6200889645, 8987073322', 'Former Dean, RPCAU, PUSA, Bihar');

-- --------------------------------------------------------

--
-- Table structure for table `implinks`
--

CREATE TABLE `implinks` (
  `id` int(3) NOT NULL,
  `linkname` varchar(200) NOT NULL,
  `brandurl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `implinks`
--

INSERT INTO `implinks` (`id`, `linkname`, `brandurl`) VALUES
(2, 'https://www.google.co.in/', 'uploads/links/5ea872193bcef7.77858691.png'),
(3, 'https://www.google.co.in/', 'uploads/links/5ea872757eed03.54760194.png'),
(4, 'https://www.google.co.in/', 'uploads/links/5ea8728351b591.67106992.png'),
(5, 'https://www.google.co.in/', 'uploads/links/5ea8728ce272e0.15948063.png'),
(6, 'https://www.google.co.in/', 'uploads/links/5ea87297e42b39.39764186.png'),
(7, 'https://www.google.co.in/', 'uploads/links/5ea872a36ac927.44175602.png'),
(8, 'https://www.google.co.in/', 'uploads/links/5ea872ad9b0dc2.89150485.png'),
(9, 'https://www.google.co.in/', 'uploads/links/5ea872b6dc6847.32952641.png'),
(10, 'https://www.google.co.in/', 'uploads/links/5ea872bee7d595.40680148.png'),
(11, 'https://www.google.co.in/', 'uploads/links/5ea872c6f327f1.55145166.png'),
(12, 'https://www.google.co.in/', 'uploads/links/5ea872cf584a31.76777470.png'),
(13, 'https://www.google.co.in/', 'uploads/links/5ea872d8bc22e8.07472922.png'),
(14, 'https://www.google.co.in/', 'uploads/links/5ea872e028b8c5.17588007.jpg'),
(15, 'https://www.google.co.in/', 'uploads/links/5ea872e69bf027.65657833.jpg'),
(16, 'https://www.google.co.in/', 'uploads/links/5ea872efb553e9.39490833.jpg'),
(17, 'https://www.google.co.in/', 'uploads/links/5ea872f80cd931.59684587.jpg'),
(18, 'https://www.google.co.in/', 'uploads/links/5ea873009aa094.30869490.jpg'),
(19, 'https://www.google.co.in/', 'uploads/links/5ea87309af3df0.06969962.jpg'),
(20, 'https://www.google.co.in/', 'uploads/links/5ea873184378d2.91712032.jpg'),
(21, 'https://www.google.co.in/', 'uploads/links/5ea87321c5cd52.65744283.jpg'),
(22, 'https://www.google.co.in/', 'uploads/links/5ea8732c37d689.31344357.jpg'),
(23, 'https://www.google.co.in/', 'uploads/links/5ea87335c5e195.15660261.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `incumbancy`
--

CREATE TABLE `incumbancy` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `descrip` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `incumbancy`
--

INSERT INTO `incumbancy` (`id`, `name`, `desig`, `duration`, `descrip`, `image`) VALUES
(4, 'Late P.N. Haksar', ' Founder President', 'October 1985 to November 1998', '                			  Parmeshwar Narayan Haksar (4 September 1913 â€“ 25 November 1998) was an Indian bureaucrat and diplomat, best known for his two-year stint as Prime Minister Indira Gandhi\'s principal secretary (1971â€“73). In that role, Haksar was the chief strategist and policy adviser behind his inexperienced prime minister\'s rise to near-absolute power in the mid-1970s. After this he was appointed deputy chairman of the Planning Commission and then the first-ever chancellor of New Delhi\'s Jawaharlal Nehru University. An advocate of centralization and socialism, he was a Kashmiri Pandit who became Gandhi\'s closest confidante in her inner coterie of bureaucrats, the so-called \"Kashmiri mafia\". Prior to this, Haksar was a diplomat of the Indian Foreign Service, who served as India\'s ambassador to Austria and Nigeria.  ', 'uploads/incumbancy/5ea6ffaf6972f7.02480292.png'),
(5, 'Late Prof. A.R. Roy', ' Founder Director/ Member Secretary', 'October 1985 to May 01, 1990', '                			 Professor Anadi Ranjan Roy (1920-1990) took M.Sc. Degree in Pure Mathematics in 1942 and in Statistics in 1944, both from Calcutta University. After completing his postgraduate, he joined the Indian Council of Agricultural Research and rose to the position of Professor of Statistics there. During his stay at Calcutta, he had the privilege of being taught by Professor P.C. Mahalanobis, Professor R.C. Bose, and Professor P.K. Bose among others. Subsequently, he proceeded to USA for doctoral degree from Stanford University on a Fulbright Grant where he worked with several stalwarts including Professor Charles Stein, Herman Chernoff, and Meyer Girshick. His teachers and research associates/supervisors were highly impressed by his research work and potentials. In 1959, he joined the Department of Statistics, Lucknow University as Professor and Head and continued to hold the position till his retirement in 1980. He went on diplomatic assignment as Statistical Training Advisor to the South Pacific Commission by Commonwealth Secretariat, London, which again in April 1979 posted him at Colombo, Sri Lanka. He retired from Lucknow University in 1980. Ever since he came to Lucknow in 1959, his love for the city was intense and deep which led to establishment of IASDS at Lucknow in 1985 despite family and other pressers. Sri P.N. Haksar, the renowned diplomat and administrator agreed to be founder President of the Governing Body. In order to give direction and groom the institute through its formative years, Professor Roy chose to be its Honorary Director/ Secretary, a position he held till his untimely demise on May 1, 1990. During his brief stewardship, the institute organized several training programs on Sample Surveys and related issues, for senior government officers of India and Nepal, undertook several projects sponsored by Planning Commission, Central and State Governments as also North Eastern Council, Shillong. Despite his failing health, he worked hard to organize a workshop sponsored by State Land Use Board, U.P. on Perspective Plan for Land Use for Agricultural and Non- Agricultural Purposes but his death left the work unfinished.  ', 'uploads/incumbancy/5ea7016d2ea094.74415011.png'),
(6, 'Shri R.K. Srivastava', ' Officiating Director', 'May 1990 to Sept. 1990', '                			 Mr. R.K. Srivastava was the Joint Director of IASDS. He was assigned the charges of Officiating Director on sad & sudden demise of Prof. A.R. Roy. ', 'uploads/incumbancy/5ea701e3c908a2.56690911.png'),
(7, 'Prof. A.K. Nigam', ' Director/ Member Secretary', 'Sept.1990 to Oct.2008', '                			Prof. Arun K. Nigam has over 50 years of wide ranging experience and has contributed significantly in the subject of development statistics, especially in the field of public health, food and agriculture and nutrition. Dr. Nigam completed his masters in Mathematical Statistics from Lucknow University and PhD from Banaras Hindu University. Dr. Nigam was the Professor and Head, Training & Basic Research at the Indian Agricultural Statistics Research Institute of Indian Council of Agricultural Research (ICAR) and in this capacity provided leadership in conducting research in the fields of design of experiments and sample surveys. Dr. Nigamâ€™s interest in the subject of public health nutrition has been evident since mid-90s when he, as the Director of the Institute of Applied Statistics and Development Studies (IASDS), he worked on the workshop sponsored by State Land Use Board, U.P. on Perspective Plan for Land Use for Agricultural and Non- Agricultural Purposes which was left unfinished by the death of Dr. A.R. Roy. He also conducted the state-based women and child nutrition survey for the Department of Women and Child, State Government of Uttar Pradesh (UP). Under Dr. Nigamâ€™s leadership, the findings of 1998 for the first time in India, presented the regional malnutrition scenario in the state of UP and through the regression analysis of raw data highlighted the 			significance of early age of child, womenâ€™s health-nutrition status and access to sanitation as the  risk factor associated with under-nutrition in children. ', 'uploads/incumbancy/5ea7023d41aeb3.76066267.png'),
(8, 'Prof. S.K. Mitra', ' Officiating President', 'Nov. 1998 to June, 1999', '                			 Prof. S.K. Mitra was the eminent Statistician and retired from Indian Statistical Institute, New Delhi. He was the Vice President of IASDS Governing Body. He officiated as the President on sad & sudden demise of Sri P.N. Haksar. ', 'uploads/incumbancy/5ea7028c9b71e2.33556647.png'),
(9, 'Dr. Padam Singh', ' President', 'June, 1999	March 2013', '                			Dr. Padam Singh has held many important positions in Government of India. He has been a Member of National Statistical Commission, GOI during 2006-09. He has served as Additional DG ICMR during 1997-2004, and Director National Institute of Medical Statistics during 1987-97. Dr. Padam Singh has started his career as Senior Professor in IASRI in 1977 and worked till 1981 after that in 1981 he joined as Joint Advisor in Planning Commission.  He was also associated with EPOS Health (India) as Head - Research & Evaluation.   			  ', 'uploads/incumbancy/5ea702d9b7cd35.18771007.png'),
(10, 'Prof. S.K. Pandey', ' Director/ Member Secretary', 'Oct., 2008 to Oct., 2010', '                			 Prof. Sunil Kumar Pandey was the faculty member of the Department of Statistics, University of Lucknow from February 1978 to June 2018. He also served as Director, (Professorâ€™s grade and pay) Swami Satyanand Institute of Management & Development Research, Lucknow from September 15, 1997 till June 30, 2003 & Professor of Statistics at Lucknow University since September 15, 2001 to 30.06.2018. ', 'uploads/incumbancy/5ea7031b97dce7.01630611.png'),
(11, 'Dr. Ravindra Srivastava', ' Director/ Member Secretary', 'Oct., 2010 to August, 2018', '                			Dr. Ravindra Srivastava has started his career as Scientist S in IISR, ICAR New Delhi in 1972 worked till 1977 and then after he served as Scientist S & S1 in ICAR from 1977 to 1985 and lastly he worked in IASRI from 1985 and have retired as Principal Scientist in 2008. He has had highly expertise in handling of Data, Analysis and good command in report writing. ', 'uploads/incumbancy/5ea70358cf2264.68593417.png'),
(12, 'Prof. V.K. Gupta', ' President	', 'March 2013 to Continuing', '                			  Prof. V.K. Gupta Former ICAR National Professor. Educated at Delhi United Christian School, Delhi 1967; B.Sc. Ramjas College, University of Delhi, 1970; M.Sc. Indian Agricultural Research Institute, 1972; PG Diploma, Indian Agricultural Statistics Research Institute (IASRI), 1974; Ph.D. IARI, 1983. Scientist S-1, 1976-82, Senior Scientist, 1982-88, National Fellow, 1995-2000, Head, Division of Design of Experiments, 2000-03, and Joint Director, 2003-06, IASRI, New Delhi; FAO Consultant, 1994; ICAR National Professor, IASRI, New Delhi, 2006-16. Awards/Honours: IARI Best Teacher Award, 1999; First Dr. D.N. Lal Memorial Lecture Award, 2000; Professor P.V. Sukhatme Gold Medal Award, 2005; ISAS Sankhyiki Bhushan, 2010; Sessional President, 61st Annual Conference, Indian Society of Agricultural Statistics, 2007; Chair Editor, Journal of the Indian Society of Agricultural Statistics; Associate Editor, Journal of Statistical Planning and Inference, Journal of Statistical Theory and Practice and Agricultural Research. President, Society of Statistics, Computer and Applications; Vice-President, Indian Society of Agricultural Statistics; President, Governing Body, Institute of Applied Statistics and Development Studies, Lucknow. Fellow: Elected Member of the International Statistical Institute; Indian Society of Agricultural Statistics. Research Areas: Design of Experiments, Sampling Theory, Applied Statistics  			  ', 'uploads/incumbancy/5ea7039bd59643.45850565.png'),
(13, 'Dr. S.P. Singh', ' Director/ Member Secretary	', 'August, 2018 to	Continuing', '                		Dr. S.P. Singh started his career as Assistant Professor in 1978 at RAU, PUSA,  Bihar and elevated to the post of Assoc. Professor in 1991 and  Professor & Head in 1999. He also worked on lien as Associate Professor at IIM, Lucknow from 1999 to 2004, and handled many World Bank funded projects and also made significant contribution in starting Post Graduate Diploma in Agribusiness Management at IIM, Lucknow. Dr. S.P. Singh established MBA Agribusiness Programme at RAU, Pusa since 2006 as coordinator and also helped BAU Kanke, Ranchi to establish MBA Agribusiness Programme also served in various capacity and retired as the Dean, Faculty of Basic Sciences & Humanities from RPCAU, Pusa, in July 2018. Presently, he is associated with the Faculty of Agricultural Sciences & Allied Industries, Rama  University, Kanpur.   			  ', 'uploads/incumbancy/5ea703e56fa366.70085748.png');

-- --------------------------------------------------------

--
-- Table structure for table `mainslider`
--

CREATE TABLE `mainslider` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `url` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainslider`
--

INSERT INTO `mainslider` (`id`, `name`, `url`) VALUES
(2, 'main2', 'uploads/slider/5ea7e58f49a679.25238484.jpg'),
(3, 'main3', 'uploads/slider/5ea7e5a5c572f9.58698770.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mstr_project`
--

CREATE TABLE `mstr_project` (
  `id` int(11) NOT NULL,
  `p_name` text NOT NULL,
  `p_start_year` varchar(25) NOT NULL,
  `p_location` varchar(100) NOT NULL,
  `p_funding` varchar(100) NOT NULL,
  `p_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_project`
--

INSERT INTO `mstr_project` (`id`, `p_name`, `p_start_year`, `p_location`, `p_funding`, `p_status`) VALUES
(2, 'Prospects for improvement in production and productivity of pulses in India with particular reference to U.P.', '1986', 'U.P.', 'Planning Commision, GOI', 1),
(3, 'Feed seed and wastage rates of food grains in 8 selected districts of Western U.P.', '1987', 'U.P.', 'Centre for Agricultural and Rural Development Studies', 1),
(4, 'Post evaluation study of cattle breeding and pig breeding programme', '1987', 'Shillong', 'North Eastern Council, Shillong', 1),
(5, 'Preparation of 25 years plan for land use for agricultural and non-agricultural purposes', '1988', 'U.P.', 'Land use Board, Department of Planning, U.P.', 1),
(6, 'Concurrent evaluation of IRDP beneficiaries', '1989', 'U.P.', 'Ministry of Agri., Dept of Rural Development, GOI', 1),
(7, 'Status of agricultural experiments in U.P. and needs for promotion of agricultural experimentation during the next decades', '1989', 'U.P.', 'ICAR', 1),
(8, 'Concurrent evaluation of Jawahar Rozgar Yojna - Ist Round', '1992', 'U.P.', 'Ministry of Rural Development, GOI', 1),
(9, 'Concurrent evaluation of Jawahar Rozgar  Yojna 2nd Round', '1993', 'U.P.', 'Ministry of Rural Development, GOI', 1),
(10, 'Concurrent evaluation of IRDP-4th Round & CDS', '1993', 'U.P.', 'Ministry of Rural Development, GOI', 1),
(11, 'Survey of rural family welfare centres in all PHCs in Uttar Pradesh', '1994', 'U.P.', 'IRMS(ICMR )', 1),
(12, 'Nutrition profile of the state disaggregated data by regions, rural/urban, caste and gender', '1995', 'U.P.', 'UNICEF', 1),
(13, 'Baseline survey of patch work and Zari Zardozi worker in Rampur and Bareilly', '1995', 'U.P.', 'UPEC', 1),
(14, 'Targeted intervention among truck operations in Lucknow District to increase the level of STD/HIV/AIDS information and awareness and distribution of condoms', '1996', 'U.P.', 'State AIDS Control', 1),
(15, 'Estimation of block and town area wise children population', '1997', 'U.P.', 'UP Education for All', 1),
(16, 'Secondary analysis of U.P. nutrition survey data', '1997', 'U.P.', 'UNICEF', 1),
(17, 'Redrafting of the report in book form of Nutritional Status of Women and Children', '1997', 'U.P.', 'UNICEF', 1),
(18, 'Status of Chikan beneficiaries under Chikan project', '1998', 'U.P.', 'UPEC', 1),
(19, 'Capability study of two District Institute of Education and Training(DIET) in Uttar Pradesh', '1998', 'U.P.', 'Joint GOI-UN System Education Programme U.P.', 1),
(20, 'Statistical analysis of data of sodic land reclamation project for annual soil monitoring', '1998', 'U.P.', 'RSAC, U.P.', 1),
(21, 'Baseline Studies of two districts in Uttar Pradesh in Agra & Mathura', '1998', 'U.P.', 'Joint GOI-UN System Education Programme, U.P.', 1),
(22, 'District level nutritional profiles of community: Uttar Pradesh and Uttarakhand', '1999', 'U.P.', 'National Institute of Nutrition (NIN), Hyderabad (ICMR)', 1),
(23, 'Tabulation, analysis and reporting of data pertaining to beneficiary validation from anganwadi centres', '1999', 'U.P.', 'CARE, U.P.', 1),
(24, 'Operations research on joint training of AWW and ANM in Uttar Pradesh (Baseline Survey of Hardoi District)', '1999', 'U.P.', 'Health Department, Hardoi', 1),
(25, 'POSHANA- Participatory operation in sanitation, health and nutrition activities', '1999', 'U.P.', 'UNICEF', 1),
(26, 'Infant and maternal care- Knowledge, Attitude and Practices', '2000', 'Uttaranchal', 'UNICEF/ Mamta Samajik Sansthan, Dehradun', 1),
(27, 'Baseline survey of UMANG Project', '2001', 'U.P.', 'Nari Vikas Seva Samiti, Kushinagar', 1),
(28, 'Evaluation of the Project-Social mobilization for child care and nutrition Vikas Nagar block, Dehradun (Uttarakhand)', '2001', 'Uttaranchal', 'UNICEF', 1),
(29, 'Gender inequality intra household consumption expenditure development of methodology', '2001', 'U.P.', 'Central Statistical Organization (CSO), GOI', 1),
(30, 'Design and analysis of on-station and on-farm agricultural research experiments. A revisit', '2001', 'U.P.', 'Indian Council of Agricultural Research (ICAR)', 1),
(31, 'Situational Analysis: Anemia and Vitamin A deficiency in rural population of Uttar Pradesh', '2002', 'U.P.', 'MOST-USAID', 1),
(32, 'Survey for ICDS Food Fortication in the District Kanpur Dehat', '2002', 'U.P.', 'IRMS', 1),
(33, 'Evaluation study of community nutrition and food security', '2002', 'U.P.', 'UNICEF/ Manav Seva Sansthan, Gorakhpur', 1),
(34, 'Data analysis and reporting of Sajha Sakshmata', '2002', 'U.P.', 'Vatsalya', 1),
(35, 'Baseline Study of UMANG Project', '2002', 'U.P.', 'Vatsalya', 1),
(36, 'Rapid assessments of impact of MCHN for Allahabad and Varanasi', '2003', 'U.P.', 'UNICEF, BHU, MLN Medical College, Allahabad', 1),
(37, 'Survey for ICDS Food Fortification in the District Kanpur Dehat', '2003', 'U.P.', 'IRMS', 1),
(38, 'Survey for ICDS Food Fortification in the District Dehradun', '2003', 'U.P.', 'IRMS', 1),
(39, 'Social mobilization for child care & nutrition', '2003', 'Uttaranchal', 'Mamta Samajik Sansthan, Dehradun', 1),
(40, 'ISM&H beneficiaries covered under CGHS', '2003', 'U.P.', 'IRMS', 1),
(41, 'Baseline study of anemia and vitamin A deficiency in rural population of Uttar Pradesh: Revisit', '2003', 'U.P.', 'MOST-USAID', 1),
(42, 'Micronutrient profile of women and children in Uttar Pradesh, India. MOST-USAID Publication', '2003', 'U.P.', 'MOST-USAID in collaboration with KGMU, Lucknow', 1),
(43, 'Statistical Investigation to assess gender bias and deficiency in the state of UP and Uttaranchal', '2003', 'U.P., Uttaranchal', 'CSO, GOI', 1),
(44, 'Impact assessment of ICDS Food Fortification in the District Nainital', '2004', 'Uttaranchal', 'IRMS', 1),
(45, 'Baseline Survey of Impact Assessment of ICDS Food Fortification in Nahan District of Himachal Pradesh', '2004', 'Himachal Pradesh', 'IRMS', 1),
(46, 'Semiannual quantitative survey of maternal and infant survival project', '2004', 'Madhya Pradesh', 'CARE INDIA', 1),
(47, 'Impact assessment of nutrition interventions through food for education in Madhya Pradesh, Uttaranchal & Chhattisgarh', '2004', 'Madhya Pradesh, Uttaranchal', 'World Food Programme', 1),
(48, 'Final quantitative survey of maternal and infant survival project', '2005', 'Madhya Pradesh', 'CARE INDIA', 1),
(49, 'Report on rapid assessment of impact of MCHN for Allahabad & Varanasi', '2005', 'U.P.', 'BHU & MLN Medical college, Alld.', 1),
(50, 'Data Analysis of PACS programme', '2005', 'U.P.', 'Vatsalya', 1),
(51, 'Impact Assessment  of ICDS Food fortification in Madhya Pradesh, Uttar Pradesh, Uttaranchal', '2005', 'U.P., M.P., Uttaranchal  ', 'IRMS', 1),
(52, 'Monitoring of ICDS food fortification in UP and Uttaranchal', '2005', 'U.P., Uttaranchal', 'IRMS', 1),
(53, '	 (i) Impact assessment of nutrition interventions through Food for Education  (ii) Status of Mid-Day Meal in Madhya Pradesh', '2005', 'Madhya Pradesh', 'World Food Programme', 1),
(54, 'Gender bias in Intra household food consumption: Dietary intake', '2006', 'Kanpur Dehat& Mathura', 'Indian Council of Medical Research (ICMR), MOHFW', 1),
(55, 'Adolescent Reproductive and Sexual Health: Mid Term Assessment in Bihar & Jharkhand', '2006', 'Bihar & Jharkhand', 'National Foundation for India (NFI), New Delhi', 1),
(56, 'Baseline assessment of NIRMAAN (YARSH) in Bihar & Jharkhand', '2007', 'Bihar & Jharkhand', 'National Foundation for India (NFI), New Delhi', 1),
(57, 'Endline Evaluation of Sajha Sakshmta Community Based (PACS Programme)', '2007', 'Central U.P.', 'Vatsalya Lucknow', 1),
(58, 'Evaluation of Kishori Shakti Yojna', '2007', 'U.P., M.P.,H.P., Bihar, Jharkhand, Chattisgarh, Uttrakhand, Hariyana, Rajasthan', 'National Institute of Medical Statistics (ICMR), New Delhi', 1),
(59, 'Evaluation Survey for the Study of the PHC Facility Survey in Demographically Weak Districts of India', '2007', 'U.P., M.P., Bihar, Jharkhand, Rajasthan', 'National Institute of Medical Statistics (ICMR), New Delhi', 1),
(60, 'Revival of Agricultural Crescent in Bihar (District Agricultural Action Plans)', '2008', 'Bihar', 'National Academy of Agriculture Sciences (NAAS), New Delhi', 1),
(61, 'Capacity Building for NCRPB- ADB TA 7055 Baseline and Socio Economic Survey in Hapur, Ghaziabad & Panipat', '2008', 'U.P.,  Haryana', 'Wilbur Smith Associates (WSA), Bangalore for ADB', 1),
(62, 'Tourist Market Demand Survey ADB TA 7014 (IND) Preparing the Inclusive Tourism Infrastructure Development Project', '2009', 'Chandigarh, H. P., Punjab and Uttarakhand', 'Asian Development Bank (ADB)', 1),
(63, 'Socio Economic Survey ADB TA 7014 (IND) Preparing the Inclusive Tourism Infrastructure Development Project', '2009', 'Chandigarh, H.P. , Uttarakhand & Punjab', 'Asian Development Bank(ADB)', 1),
(64, 'Ex-ante Assessment of Socio Economic Benefits of Bt-Brinjal', '2009', 'U.P., Bihar  Karnataka  West Bengal  Gujarat', 'Ministry of Environment and forest, Sub-contract from NCAP', 1),
(65, 'Data analysis of â€œNutritional Status of Children in Karnataka-A studyâ€', '2010', 'Study in Karnataka Analysis in Lucknow', 'National Institute of Public Cooperation and Child Development (NIPCCD)', 1),
(66, 'A study on food insecurity atlas for rural U.P. using small area estimates', '2010', 'U.P.', 'Ministry of Statistics & Programme Implementation, CSO', 1),
(67, 'â€œMicro level Hunger Mapping (Gram Panchayats in Banda District, U.P.)â€', '2011', 'U.P.', 'Indian Council of Medical Research (ICMR), MOHFW', 1),
(68, 'Data Analysis and report Writing BaselineStudy: Let Girl Be Born', '2011', 'U.P.', 'Vatsalya for PLAN India', 1),
(69, 'Data Analysis and report Writing of â€œSituational Analysis of Girl Childâ€', '2011', 'U.P.', 'Vatsalya for PLAN India', 1),
(70, 'Household Survey for the Assessment of Nutrition and Education Status in Raygada District- Odisha', '2011', 'Odisha', 'Living Farms, Odisha', 1),
(71, 'State Level Study on Status Assessment of Child Sexual Abuse', '2011', 'U.P.', 'Vatsalya for PLAN India', 1),
(72, 'Baseline studies on Food, Nutrition and Education status for the Fight Hunger First Initiative.', '2012', 'West Bengal  M.P.  Jharkhand  Karnataka  Nepal', 'Welt hunger hilfe', 1),
(73, 'Extent of Integration of Indian System of Medicine and Homoeopathy in NRHM in the state of Uttar Pradesh.', '2012-13', 'Uttar Pradesh', 'National Institute of Medical Statistics', 1),
(74, 'Advanced Project Preparedness for Poverty Reduction â€“ Rajasthan Urban Development Program (TA No. 8043-IND)- Socio Economic Baseline Survey', '2013', 'Rajasthan', 'CDM Smith Inc for ADB', 1),
(75, 'Assessment of anemia amongst women and children in intervention area of Lucknow district', '2014', 'U.P.', 'Vatsalya for PLAN India', 1),
(76, 'Situational analysis of school education in intervention area of Lucknow district', '2014', 'U.P.', 'Vatsalya for PLAN India', 1),
(77, '	 Preparing Delhi Water Supply Improvement Investment Program  (ADB TA No. 8415-IND)  Baseline Socio-Economic and Infrastructure Survey', '2014', 'Delhi', 'CDM Smith Inc for ADB', 1),
(78, 'Data Validation and Coverage Evaluation Survey for Vitamin A  Coverage for BSPM round in twourban cities Agra and Meerut in Uttar Pradesh', '2014-15', 'U.P.', 'Micronutrient Initiative (MI) and Gorakhpur Environmental Action Group (GEAG)', 1),
(79, 'Knowledge, attitude and practices of mothers vis-Ã -vis education of their adolescent girls- Baseline study for project â€˜EK SAAL AURâ€™ PLAN India', '2014-15', 'U.P.', 'Samvad Samajik Sansthan for PLAN India ', 1),
(80, 'Baseline Assessment for Guwahati and Dibrugarh Subprojects Under Assam Urban Infrastructure Investment Program (AUIIP) (ADB Loan No: 2806-IND)', '2015', 'Assam  (Guwahati  Dibrugarh)', 'TetraTech For ADB', 1),
(81, 'Data Validation of December 2014 BSPM round in GEAG/ MI intervention areas (27 districts and 3 urban cities) of Uttar Pradesh', '2015', 'U.P.', 'Gorakhpur Environmental Action Group (GEAG) and Micronutrient Initiative (MI)', 1),
(82, 'Data Validation of June 2015 BSPM round in GEAG/ MI intervention areas (27 districts and 3 urban cities) of Uttar Pradesh', '2015', 'U.P.', 'Gorakhpur Environmental Action Group (GEAG) and Micronutrient Initiative (MI)', 1),
(83, 'Ex-Post Evaluation Study for (i) Bangalore Water Supply and Sewage Project; (ii) Yamuna Action Plan Project II; and (iii) Bisalpur Jaipur Water Supply Project (Transfer System) which are implemented by Tetra Tech ES India Private Limited.', '2015', '	 Jaipur,  Bangaluru  Agra+Delhi', 'Tetra Tech ES India Private Limited For JICA', 1),
(84, 'Knowledge, Attitude and Practice About Water, Sewerage, And Sanitation in Indore City Of Madhya Pradesh under Country Assistance Program Evaluation (CAPE) for India', '2016', 'Indore', 'Asian Development Bank (ADB)', 1),
(85, 'WASH conditions of Public Health facilities in 4 districts of Uttar Pradesh', '2016', 'U.P.', 'Vatsalya for Water Aid', 1),
(86, 'Data Validation of December 2015 BSPM round in GEAG/ MI intervention areas (27 districts and 3 urban cities) of Uttar Pradesh', '2016', 'U.P.', 'Gorakhpur Environmental Action Group (GEAG) and Micronutrient Initiative (MI)', 1),
(87, 'Socio-Economic Baseline Survey in Dimapur Town of Nagaland', '2016', 'Dimpur,  Nagaland', 'CDM Smith Inc', 1),
(88, 'Promotion of Water, Sanitation and Hygiene (WASH) and Menstrual Hygiene Management (MHM) in Middle and Intermediate schools in Lucknow, Uttar Pradesh', '2016', '	 Lucknow  (U.P.)', 'Vatsalya', 1),
(89, 'Data Validation of first semester Baal Suraksha Maah (BSM) in Madhya Pradesh ', '2016', 'M.P.', 'Micronutrient Initiative (MI) India', 1),
(90, 'Ex-Post Evaluation Study of Ajanta Ellora Conservation & Tourism Development Project (Phase II) FY 2016 Package III-4 in India', '2016', 'Maharashtra', 'Tetra Tech ES India Private Limited For JICA', 1),
(91, 'Ex-Post Evaluation Survey of FY 2016 Package III-4 in India  Integrated Natural Resource Management and Poverty Reduction Project in Haryana  (L/A No. ID-P158)', '2016', 'Haryana', 'Tetra Tech ES India Private Limited For JICA', 1),
(92, 'Mid-term evaluation of Promotion of Water, Sanitation and Hygiene (WASH) and Menstrual Hygiene Management (MHM) in Middle and Intermediate schools in Lucknow, Uttar Pradesh', '2017', 'Lucknow  (U.P.)', 'Vatsalya', 1),
(93, 'Baseline of Prevention and Control of Dengue Project in Gorakhpur', '2018', 'Gorakhpur, U.P.', 'LEHS|WISH Foundation', 1),
(94, 'Baseline study on Knowledge, attitude, practices and behavior adolescent girls and boys on anemia', '2018', 'U.P.', 'Vatsalya for World Vision', 1),
(95, 'WASH conditions of Public Health facilities in PHCs and CHCs of U.P.', '2018', 'U.P.', 'Jal Seva Charitable Foundation (JSCF)/ Water Aid India', 1),
(96, 'Baseline study of â€˜Aao baatein kareinâ€', '2018', 'U.P.', 'Vatsalya', 1),
(97, 'Study to understand the scope of youth self employment in Mall block of Lucknow district', '2019', 'U.P.', 'Vatsalya for PLAN India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mstr_training`
--

CREATE TABLE `mstr_training` (
  `id` int(11) NOT NULL,
  `t_name` text NOT NULL,
  `t_year` varchar(40) NOT NULL,
  `t_sponsor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_training`
--

INSERT INTO `mstr_training` (`id`, `t_name`, `t_year`, `t_sponsor`) VALUES
(3, 'Training Programme of Agricultural Officers of HM\'s Government of Nepal in Agronomy & Sample Survey Methods\r\n\r\n', '1986', 'FAO'),
(5, 'Training Programme of Agricultural Officers of HM\'s Government of Nepal in Agronomy & Sample Survey Methods', '1986', 'FAO'),
(6, 'Feed seed and wastage rates of food grains in 8 selected districts of western UP', '1987', 'Centre for Agricultural and Rural Development Studies'),
(7, 'Training Course for senior officers of ISS on Non-Sampling Errors in Surveys', '1987', 'CSO, GOI'),
(8, 'Workshop on Perspective Planning for Land Use for Agricultural and Non-Agricultural Purposes', '1991', 'State Land Use Board, U.P.'),
(9, 'In service Training course on Growth Studies in Development Research', '1994', 'ICMR, Delhi'),
(10, 'Training Camp for Mahila Chikan Workers', '1997', 'UPEC'),
(11, 'Training for RSAC Scientists in Statistical Methods', '1999', 'RSAC, UP, Lucknow'),
(12, 'Design and analysis of On-Station and On-Farm Agricultural Research Experiments. A Revisit', '2003', 'ICAR AP-CESS fund'),
(13, 'Training Program on Research Methodology for Quantitative Assessment', '2007', 'Training organized for the staff of NGOs'),
(14, 'Workshop on Research Methodology', '2008', 'IPEM, Gaziabad'),
(15, 'Training programme on â€œSurvey Research Methodologyâ€ for researchers and faculty', '2018', 'NIMS, ICMR,  New Delhi'),
(16, 'Training programme on â€œSurvey Research Methodologyâ€', '2018', 'SGPGI, LKO');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(3) NOT NULL,
  `noticedesc` text NOT NULL,
  `attachment_url` varchar(200) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `noticedesc`, `attachment_url`, `isactive`, `timestamp`) VALUES
(1, 'First Notice', 'uploads/notice/5e77b5a47c81c9.47282760.pdf', 1, '2020-03-22 18:59:48'),
(2, 'Examination will start from the date 11 august', 'uploads/notice/5ea6c24034f7f1.71200864.pdf', 1, '2020-04-27 11:30:08');

-- --------------------------------------------------------

--
-- Table structure for table `peoples`
--

CREATE TABLE `peoples` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `id` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peoples`
--

INSERT INTO `peoples` (`firstname`, `lastname`, `email`, `password`, `id`) VALUES
('Akshat', 'Srivastava', 'akshat.srivastava0312@gmail.com', '1234', 0),
('admin', 'admin', 'a@a', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `id` int(11) NOT NULL,
  `author` varchar(25) NOT NULL,
  `title` varchar(25) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` int(3) NOT NULL,
  `fblink` varchar(200) NOT NULL,
  `twitlink` varchar(200) NOT NULL,
  `gpluslink` varchar(200) NOT NULL,
  `linkedinlink` varchar(200) NOT NULL,
  `youtubelink` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `fblink`, `twitlink`, `gpluslink`, `linkedinlink`, `youtubelink`) VALUES
(1, 'http://facebook.com/akshat', 'http://twitter.com/akshat', 'http://plus.google.com/akshat', 'http://www.linkedin.com/akshat', 'http://www.youtube.com/akshat');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `testimonial` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `website_details`
--

CREATE TABLE `website_details` (
  `id` int(3) NOT NULL,
  `title` varchar(100) NOT NULL,
  `metakey` varchar(200) NOT NULL,
  `metades` varchar(200) NOT NULL,
  `logourl` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `website_details`
--

INSERT INTO `website_details` (`id`, `title`, `metakey`, `metades`, `logourl`) VALUES
(1, 'IASDS', 'iasds', 'http://iasds.org/index.php', 'uploads/logo/5ea8741fd65af1.39220459.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultancy`
--
ALTER TABLE `consultancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpage`
--
ALTER TABLE `contactpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exp_team`
--
ALTER TABLE `exp_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `g_body`
--
ALTER TABLE `g_body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `implinks`
--
ALTER TABLE `implinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `incumbancy`
--
ALTER TABLE `incumbancy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mainslider`
--
ALTER TABLE `mainslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_project`
--
ALTER TABLE `mstr_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mstr_training`
--
ALTER TABLE `mstr_training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_details`
--
ALTER TABLE `website_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultancy`
--
ALTER TABLE `consultancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contactpage`
--
ALTER TABLE `contactpage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exp_team`
--
ALTER TABLE `exp_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `g_body`
--
ALTER TABLE `g_body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `implinks`
--
ALTER TABLE `implinks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `incumbancy`
--
ALTER TABLE `incumbancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mainslider`
--
ALTER TABLE `mainslider`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mstr_project`
--
ALTER TABLE `mstr_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `mstr_training`
--
ALTER TABLE `mstr_training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_details`
--
ALTER TABLE `website_details`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
