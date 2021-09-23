-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 08:49 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appaswamy`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_img1` blob NOT NULL,
  `banner_img2` blob NOT NULL,
  `banner_img3` blob NOT NULL,
  `banner_img4` blob NOT NULL,
  `banner_img5` blob NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_img1`, `banner_img2`, `banner_img3`, `banner_img4`, `banner_img5`, `create_at`) VALUES
(3, 0x39346531383063316436393935613638386432326461323063326263643939372e6a7067, 0x35383331653230323838383631323535366333643263643233363831316636622e6a7067, 0x33376133366363323839396534613732393466333238366538643161373232342e6a7067, 0x66356237376666386436653463623036393261323536616661326364633531382e6a7067, '', '2021-09-16 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `author` varchar(100) NOT NULL,
  `banner_img` varchar(200) NOT NULL,
  `thumb_img` varchar(100) NOT NULL,
  `description` mediumtext NOT NULL,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`blog_id`, `title`, `author`, `banner_img`, `thumb_img`, `description`, `updated_date`, `create_at`) VALUES
(6, 'A Progress Update on Azure and Clover', 'admin user2', '564bf01672116d20deb10c406dae683f.jpg', 'cfebf76e85500e9cfa5b9cf2ac7ed878.jpg', '<p>Our ongoing projects are approaching the finish line and we can&rsquo;t wait to showcase them to our homeowners. Our teams at each Appaswamy property have made miracles happen by ensuring our projects stay on track despite the pandemic and ensuing restrictions. Here&rsquo;s a quick status update on two of our key <a href=\"https://appaswamy.com/\">properties in Chennai</a> that are almost ready for move-in day.</p>\r\n\r\n<p>Azure homeowners, you are the kings and queens of this world. Soon, you&rsquo;ll have the view to match. We&rsquo;re finishing up with the final touches at this prestigious property in Santhome overlooking the sandy bays of Marina. Construction work of the amenities, clubhouse and the Seashell Pavillion is nearly complete. Shipments of wood have arrived from Italy and are being shaped into front doors. Likewise, the custom-designed console table and Canti-Lever bench are here straight from the workshops of the Spanish manufacturer, Mobilfresno. We&rsquo;re excited to say that a number of apartments are nearly ready for handover! All that&rsquo;s left is for you to pick up your keys. Clover By The River For Clover By The River, we&rsquo;re in the final leg of the race against the clock. Our team has put down a strong foundation and erected the structure for all four towers within the property. The project is currently undergoing internal work such as electrical fitting, plumbing and other essential living fixtures. Amenities and common areas such as the badminton court, futsal court, private theatre, and banquet halls are under construction as well. Do you want in on this action? If you are looking for a tranquil home at the heart of the city, overlooking the winding river and surrounded by nature on all sides, then come check out our model apartments. To schedule an appointment, call: Azure The Oceanic: +91 73585 41160 Clover By The River: +91 80561 67373 To enquire about our other apartments for sale in Chennai, call Appaswamy Real Estate: +91 76673 30000</p>\r\n', '2021-09-13 18:30:00', '2021-09-15 18:30:00'),
(7, 'Top 4 Expensive Mistakes That First-Time Home Buyers Should Avoid - Appaswamy Real Estates', 'admin user2', '6828da52571594a60c61bb65d1c6c69d.jpg', '1f036e3e292b8bb9108c169894681b26.jpg', '<p>Buying the perfect home is the culmination of years of hard work and careful financial planning. Thus, it is imperative that you choose the right property. In this blog, we highlight the four key critical mistakes that first-time home buyers must avoid while considering buying a new home.</p>\r\n\r\n<p>Not have a clear budget</p>\r\n\r\n<p>Ever been house shopping and found a place just as you imagined your dream home, only to find that it was not within your budget? Residential dwellings range from affordable and mid-range, to ultra-luxe properties. Having a clear budget in mind and sharing this information with your realtor could save you heartache and shattered expectations. It could also stop you from overextending yourself and putting a strain on your finances.</p>\r\n\r\n<p>Ignoring critical factors</p>\r\n\r\n<p>A good home is only going to cost you once, but a bad one often comes with new and unexpected expenses. When buying a house that was previously owned or occupied by others, checking the wear and tear could save you thousands in maintenance costs. A few other factors to consider are lighting, ventilation, electrical wiring and plumbing, as well as waterproofing of the roof.</p>\r\n\r\n<p>Falling into the trap of discounts</p>\r\n\r\n<p>Everybody loves a good bargain, but that shouldn&rsquo;t come at the cost of a good home. Question the motive behind freebies and discounts. If the price sounds too good to be true, then it most likely is. Instead, opt for trustworthy <a href=\"https://appaswamy.com/about-us/\">builders in Chennai</a> who offer a better quality of life for you and your loved ones.</p>\r\n\r\n<p>Not preparing for the future Unlike single-use or short-term products, a home is an investment you will keep for decades. Therefore it is best to consider your future requirements. If this home is to become your primary place of residence, then ensure there is enough room for your family to expand. For a rental property, consider factors such as easily customizable interiors, luxury amenities, easy connectivity to the rest of the city, proximity to schools, colleges and hospitals. These could help you attract tenants on the lookout for rental <a href=\"https://appaswamy.com/new-projects-in-chennai-choose/\">apartments in Chennai</a>.</p>\r\n', '2021-09-07 18:30:00', '2021-09-15 18:30:00'),
(8, 'Upping the Ante On Luxury Through Our Apartment Amenities', 'admin user', '0ffef39d0a6b98e000b83f7eb46ce7dc.jpg', '34325714432838a51ac0ced0acf6c841.jpg', 'Luxury is all about convenience, choice, and control. This is the motto that our late founder, Mr. Appaswamy, weaved into the fabric of our business. He was one of the few builders in Chennai to include apartment amenities such as swimming pools – a game-changing feature – as early as 60 years ago.\r\n', '2021-09-15 13:10:54', '2021-09-14 18:30:00'),
(9, 'A peek at life in Clover', 'admin user', '2279c7163ab20f9000697f2992132acf.jpg', '49594dd5b70dff9728936dd36e267382.jpg', '<p>Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundant with natural and man-made luxury. Allow us to show you a sneak peek of your future days at these verdant <a href=\"https://appaswamy.com/check-the-new-flats-for-sale-in-chennai/\">flats in Chennai</a>. Starting the day in tranquil repose As the first rays of sunlight trickle into your apartment, you roll out from under the covers, ready to start the day. The marble floors feel cool beneath your bare feet as you make your way to the kitchen and brew yourself the first cup of coffee for the day. Today, your father beat you to it and has a mug ready for you.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/YJP_Clover-26-1024x683.jpg\" style=\"height:350px; width:525px\" /></p>\r\n\r\n<p>Both of you settle down on the patio. For a brief moment, the world is painted in gold as the morning sun makes its way up the horizon. Birdsong fills the air and the world slowly wakes up. As you savour each sip and soak in the picturesque views of the Adyar estuary below. Your father flips open the morning newspaper. Soon after, both of you head downstairs to kickstart your morning with some exercise.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/CVR_452-650x433.jpg\" style=\"height:433px; width:650px\" />You join your jogging buddies for a brisk walk around the track before heading to the fitness centre. Trees lined on either side of the jogging tracks provide ample shade during your lap around the property. But, you still can&rsquo;t help relishing the cool air-conditioned air at the gym.</p>\r\n\r\n<p>After you sweat it out at the gym, it&rsquo;s time to head back home. The sizzle of oil hitting the pan and the mouth-watering aroma of masala dosas invite you in. The rest of the family is up and the home is bustling in a rush to get the day started. But first, you need a shower. You step into the glass enclosure in your en-suite bathroom. The body jets and rain shower work like magic on your sore muscles.</p>\r\n<span style=\"font-weight: 400;\">Maintain work-life balance</span>\r\nOnce everyone wolfs down their breakfast and you clear the plates, it&#8217;s time to take the kids to school. Located at the heart of the city, your new Clover home is barely 15 mins away. As a bonus, you get to chat with the girls without the chaos of traffic. \r\n', '2021-09-15 07:48:24', '2021-09-14 18:30:00'),
(10, 'NEW OPPORTUNITY IN GUJARAT: WIND – SOLAR HYBRID POWER POLICY ANNOUNCED IN APRIL 2021', 'admin user', '5c0bcc9cbd64df345c207e256806c0bc.jpeg', 'a252a4c603c8a88663e7dba3fc313f20.jpg', '<p><a href=\"http://localhost/appaswamy/home/magazine_details/9#\">Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundant with natural and man-made luxury. Allow us to show you a sneak peek of your future days at these verdant&nbsp;</a><a href=\"https://appaswamy.com/check-the-new-flats-for-sale-in-chennai/\">flats in Chennai</a>. Starting the day in tranquil repose As the first rays of sunlight trickle into your apartment, you roll out from under the covers, ready to start the day. The marble floors feel cool beneath your bare feet as you make your way to the kitchen and brew yourself the first cup of coffee for the day. Today, your father beat you to it and has a mug ready for you.</p>\r\n', '2021-09-16 05:12:28', '2021-09-15 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `login_auth`
--

CREATE TABLE `login_auth` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(15) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login_auth`
--

INSERT INTO `login_auth` (`admin_id`, `admin_name`, `email`, `password`, `create_at`) VALUES
(1, 'admin', 'admin@123', '123', '2021-09-03 11:54:17');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `possession` datetime NOT NULL,
  `location` varchar(80) NOT NULL,
  `location_address` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `walkthrough_video` varchar(255) NOT NULL,
  `E-Brochure` varchar(255) NOT NULL,
  `apartment_type` varchar(10) NOT NULL,
  `price` float NOT NULL,
  `property_status` varchar(50) NOT NULL,
  `feature` varchar(10000) NOT NULL,
  `google_map` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `type`, `name`, `title`, `possession`, `location`, `location_address`, `description`, `walkthrough_video`, `E-Brochure`, `apartment_type`, `price`, `property_status`, `feature`, `google_map`, `created_at`, `status`) VALUES
(12, 'Residential', 'Navasuja', 'Meet the fine home in the city', '2021-05-10 00:00:00', 'Chennai', 'NSK salai, arcod road, vadapalani', 'Water Treatment Plant  Solar powered LED lights in common area 100 % Power back-up for Common areas & apartments', '2a42ebaa637189c1a03227c6ed4e0abc.MP4', '97364532c09e611db0808e9f1e224f91.pdf', '2, 3, 4', 1.81, 'Ongoing', 'Water-Treatment- Plant,100%-Power-Back-up-for-common-areas-&- apartments,Reticulated-Gas,Rain-water-Harvesting,Mini-Theatre,Swimming-Pool,Fire-Alarm-&-Wet- riser system,Landscaped-garden-with-Water-bodies,Association-Room,Color-video-Door- Phone,Garbage-collection- room,Motion-Sensor- Lighting-system-in-club-house,CCTV-Surveillance,Solar-Powered-LED- Lights-in-coomon-area,Clubhouse,Security-Chain,Fitness-Centre,Party-Hall,Access-Controlled- Barrier-for-Car-Park-Entry,Lifts-with-V3F-&-ARD,Water-meters-for-all-apartments-(Digital),Toilets-for-drivers- &-domestic-help,Fire-fighting- sprinkler-system,Hydro-Pnuematic- System,Gymnasium,Sewage-Treatment- Plant,Security-Cabin,Video-Security-Phone-and-Intercom,DTH-Provision', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.138523826522!2d80.25855991527011!3d13.026849417187172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267f2283ac65f%3A0x11512ad8a2568d9e!2sNavasuja%20-%20Appaswamy%20Real%20Estates%20Limited!5e0!3m2!1sen!2sin!4v1632373713142!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-09-23 05:08:54', '1'),
(13, 'Residential', 'Azure', 'Meet the fine home in the city', '2021-04-01 00:00:00', 'Chennai', 'South canel bank road, RA Puram, chennai', 'Roof top Swimming Pool Gymnasium 100 % Power back-up for Common areas & apartments Clubhouse Party Hall Access controlled barrier for car park entry Fire Alarm & Wet Riser system', '3a5219c450851cc1de91cf29ae93f94e.MP4', 'a9101ac6ed3e35067439820ac91c0170.pdf', '2, 3', 1.3, 'Completed', 'Security-Chain,Associate-Office-Room,Drivers-Waiting-room- with-fittings,Elevators-in-each-block,Minor-Sensor- Lighting-system-in-Club-House,Access-Controlled- doors-with-CCTV-cameras-coverage-@-vantage- point,Water-Softening-plant,500-watt-standby- power-supply-for-EWS-Block,Wifi-Connectivity-in-club-house,Provision-for-AC Outdoor-Unit-Placement,Servant-Quarters,Intercom,Boundary-Line- Landscaping-&-Sprawling-Lawn,Wifi-and- Multiplesystem-Service-provider-Television- Enablement,Private-Clothes- Drying-areas-for-each-apartment,Kids-Play-area(Children-Under-8)', '', '2021-09-23 01:17:56', '1'),
(14, 'Residential', 'Altezza', 'Meet the fine home in the city', '2021-08-11 00:00:00', 'Chennai', '282/5, Rajiv Gandhi Salai, Kottivakkam, Chennai. (Just 1.3 Km from L.B Road, Adyar)', 'Roof top Swimming Pool Gymnasium  Solar powered LED lights in common areas 1000 watts  power back up for each unit 100 % Power back-up for Common areas & apartments Reticulated gas', '1ed1e67f02079683834927e0f189735e.MP4', '5fd68d3c6ec37191debd1e39b2d31ae0.pdf', '2, 3, 4', 1.5, 'Ready-to-Move', 'Water-Treatment- Plant,100%-Power-Back-up-for-common-areas-&- apartments,Reticulated-Gas,Rain-water-Harvesting,Mini-Theatre,Swimming-Pool,Fire-Alarm-&-Wet- riser system,Landscaped-garden-with-Water-bodies,Association-Room,Color-video-Door- Phone,Garbage-collection- room,Motion-Sensor- Lighting-system-in-club-house,CCTV-Surveillance,Solar-Powered-LED- Lights-in-coomon-area,Clubhouse,Security-Chain,Fitness-Centre,Party-Hall,Access-Controlled- Barrier-for-Car-Park-Entry,Lifts-with-V3F-&-ARD,Water-meters-for-all-apartments-(Digital),Toilets-for-drivers- &-domestic-help,Fire-fighting- sprinkler-system,Hydro-Pnuematic- System,Access-Controlled- Doors,Gymnasium,Sewage-Treatment- Plant,Security-Cabin,Indoor-Games,Video-Security-Phone-and-Intercom,DTH-Provision,1000-Watts-Power- Back-up-for -each-unit,Children\'s-Play-Area,Guest-Rooms,Comprehensive-Waste- management-system,Super-Market-(Groceries & Vegetables),Associate-Office-Room,Drivers-Waiting-room- with-fittings,Elevators-in-each-block,Minor-Sensor- Lighting-system-in-Club-House,Access-Controlled- doors-with-CCTV-cameras-coverage-@-vantage- point,Water-Softening-plant,500-watt-standby- power-supply-for-EWS-Block,Wifi-Connectivity-in-club-house,Provision-for-AC Outdoor-Unit-Placement,Servant-Quarters,Intercom,Boundary-Line- Landscaping-&-Sprawling-Lawn,Wifi-and- Multiplesystem-Service-provider-Television- Enablement,Placement-Provision- for-Air-Conditioning-Outdoor-Units,Private-Clothes- Drying-areas-for-each-apartment,Kids-Play-area(Children-Under-8)', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0268996128593!2d80.24746511526988!3d12.970130518418781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525df0d5285d4f%3A0xe9f3aa287b8a56bb!2sAltezza%20-%20Appaswamy%20Real%20Estates%20Ltd!5e0!3m2!1sen!2sin!4v1632374296612!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-09-23 01:49:17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `property_banner`
--

CREATE TABLE `property_banner` (
  `banner_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `banner_img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_banner`
--

INSERT INTO `property_banner` (`banner_id`, `property_id`, `banner_img`) VALUES
(18, 12, 0x32363536393362323939643836393461383231613031356336336363643037312e6a7067),
(19, 12, 0x33646231326430663936306261303964616365356238656437306265666262612e6a7067),
(20, 13, 0x35393033353339383233613334626331653734656139643030303031653261352e6a7067),
(21, 13, 0x62363730326539363935356565376264636637666330663165663566343439352e6a7067),
(22, 13, 0x30393133663835373661626337653339316338353965383334646564333263322e6a7067),
(23, 13, 0x63356262656134396130333130346365616165396234353864303531623566662e6a7067),
(24, 13, 0x64396664306130636662633335353136653466323662363235333332613465332e6a7067),
(25, 14, 0x35336435343839363063656234336330636133613031376162626131663638352e6a7067),
(26, 14, 0x37343063666532626236303762616563383339346132633462653237356265342e6a7067),
(27, 14, 0x39626634623762386562316439373533353139386164303065356631366465342e6a7067),
(28, 14, 0x35653261373837353561363065373162373036396333653737633337393238652e6a7067),
(29, 14, 0x37633135613331323135303563386130396238373232363730613735616637382e6a7067),
(30, 14, 0x66383839656462643261363239343632386633363131343032373265653664632e6a7067),
(31, 14, 0x34323332643839646436303835353261326266383538343936643635616530322e6a7067),
(32, 14, 0x38616430373265343838303437306638313964616536623738623332336636612e6a7067),
(33, 14, 0x65346539356363613631613461303534303164646663386230343632376334312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `property_faq`
--

CREATE TABLE `property_faq` (
  `faq_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `faq_question` varchar(200) NOT NULL,
  `faq_answer` varchar(10000) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_faq`
--

INSERT INTO `property_faq` (`faq_id`, `property_id`, `faq_question`, `faq_answer`, `create_at`) VALUES
(13, 12, 'Where is Navasuja coming up?', 'Located at RA Puram, a posh residential neighbourhood, Navasuja offers easy access to good schools, colleges, places of worship and Shopping centres. Mylapore, the art and cultural hub of Chennai, is close by. Your daily dose of filter coffee and the seasonal kutcheries have been taken care of.', '2021-09-23 00:33:28'),
(14, 12, 'Has the project been approved by the Real Estate Regulatory Authority (RERA)?', 'Yes. RERA No:  TN/29/Building/0212/2021 dt. 12.08.2021', '2021-09-23 00:33:28'),
(15, 12, 'How many apartments and are planned in this community?', '59 apartments. 3BHK &#8211; 45 Nos and 4BHK – 14 Nos.', '2021-09-23 00:33:28'),
(16, 12, 'What are the configurations?', 'The apartments will shape up in stylish configurations 3 BHKs and 4 BHKs.3 BHKs  :  2020 Sq.ft – 2096 Sq.ft :  2615 Sq.ft', '2021-09-23 00:33:28'),
(17, 12, 'Do floor rise charges applicable?', 'No Floor rises charges in this project.', '2021-09-23 00:33:28'),
(18, 12, 'What is the total land extent? ', '15 Grounds', '2021-09-23 00:33:28'),
(19, 12, 'What are the facilities in the Clubhouse?', 'Clubhouse with swimming pool, Fitness centre, Mini theatre, Indoor games, Banquet hall and Kids Play area.', '2021-09-23 00:33:28'),
(20, 13, 'Where is Altezza coming up?', 'Altezza is located on Old Mahabalipuram Road (OMR) at just 1.3 KM from L.B Road Adyar.This location is surrounded by pan-national Tech Parks, a host of academic institutions, top-notch healthcare facilities and a huge residential community.', '2021-09-23 01:17:56'),
(21, 13, 'Has the project been approved by the Real Estate Regulatory Authority (RERA)?', 'Yes. RERA No: TN/01/Building/0137/2021 ', '2021-09-23 01:17:56'),
(22, 13, 'How many flats are planned in this project?', 'The project will have three towers, namely,<strong><em> STRATOS, PARCO &amp; GIARDINO', '2021-09-23 01:17:56'),
(23, 13, 'What are the configurations?', 'The apartments will shape up in stylish configurations of 2 BHKs, 3 BHKs, and 4 BHKs.   Common area will account for 23.82% while plinth area will be 76.18%.', '2021-09-23 01:17:56'),
(24, 14, 'Where is Navasuja coming up?', 'tryrytryrty', '2021-09-23 01:49:17'),
(25, 14, 'Where is Altezza coming up?', 'rtytrytryrtyrtyrt', '2021-09-23 01:49:17');

-- --------------------------------------------------------

--
-- Table structure for table `property_floorplan`
--

CREATE TABLE `property_floorplan` (
  `floor_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `floor_name1` varchar(50) NOT NULL,
  `floor_title1` varchar(200) NOT NULL,
  `floor_img1` blob NOT NULL,
  `floor_name2` varchar(100) NOT NULL,
  `floor_title2` varchar(200) NOT NULL,
  `floor_img2` blob NOT NULL,
  `floor_name3` varchar(100) NOT NULL,
  `floor_title3` varchar(200) NOT NULL,
  `floor_img3` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_floorplan`
--

INSERT INTO `property_floorplan` (`floor_id`, `property_id`, `floor_name1`, `floor_title1`, `floor_img1`, `floor_name2`, `floor_title2`, `floor_img2`, `floor_name3`, `floor_title3`, `floor_img3`) VALUES
(42, 12, 'Tower A', 'first floor', 0x5b7b22696d67223a2236616634333166336464633733356633303161626130373664623134386534362e6a7067227d2c7b22696d67223a2266386135366631666237303766383561366436353466363732646365323864642e6a7067227d2c7b22696d67223a2264313964366463316433393131613239326131346230626133306233346433652e6a7067227d5d, 'Tower B', 'second fllor plan', 0x5b7b22696d67223a2233623330643630303435323338383932663662346639383637343866666130322e6a7067227d2c7b22696d67223a2261613533323131393832313631613964366264636430643962646636303231362e6a7067227d2c7b22696d67223a2261383236316139303139323431303538313030656435356434303966373335382e6a7067227d5d, '', '', ''),
(43, 13, 'Tower A', 'first floor', 0x5b7b22696d67223a2238313461643634633663653336363661363431313537653032346137393362612e6a7067227d2c7b22696d67223a2237636161386238316239366435656465373639376135303033383862616162312e6a7067227d5d, 'Tower B', 'second fllor plan', 0x5b7b22696d67223a2238626539336264396664363463376135373233303230653763623661336236342e6a7067227d2c7b22696d67223a2262613934303238353633613338366235616337353938343437636462636662662e6a7067227d5d, '', '', ''),
(44, 14, '', '', 0x5b7b22696d67223a22227d5d, '', '', 0x5b7b22696d67223a22227d5d, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `login_auth`
--
ALTER TABLE `login_auth`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_banner`
--
ALTER TABLE `property_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `property_faq`
--
ALTER TABLE `property_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `property_floorplan`
--
ALTER TABLE `property_floorplan`
  ADD PRIMARY KEY (`floor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login_auth`
--
ALTER TABLE `login_auth`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `property_banner`
--
ALTER TABLE `property_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `property_faq`
--
ALTER TABLE `property_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `property_floorplan`
--
ALTER TABLE `property_floorplan`
  MODIFY `floor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
