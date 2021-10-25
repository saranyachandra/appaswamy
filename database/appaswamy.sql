-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2021 at 02:48 PM
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
  `banner_img1` varchar(255) DEFAULT NULL,
  `banner_img2` varchar(255) DEFAULT NULL,
  `banner_img3` varchar(255) DEFAULT NULL,
  `banner_img4` varchar(255) DEFAULT NULL,
  `banner_img5` varchar(255) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_img1`, `banner_img2`, `banner_img3`, `banner_img4`, `banner_img5`, `create_at`) VALUES
(3, '88254bc306df5aa118e077526e14d2a5.jpg', '8c90bdd253166eb9469de818e2b529c8.jpg', '89c6aa16e22fb1b9f32930119ef7755e.jpg', 'f5b77ff8d6e4cb0692a256afa2cdc518.jpg', '', '2021-10-21 18:30:00');

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
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`blog_id`, `title`, `author`, `banner_img`, `thumb_img`, `description`, `updated_date`, `create_at`, `Active`) VALUES
(6, 'A Progress Update on Azure and Clover', 'admin user2', '564bf01672116d20deb10c406dae683f.jpg', 'cfebf76e85500e9cfa5b9cf2ac7ed878.jpg', '<p>Our ongoing projects are approaching the finish line and we can&rsquo;t wait to showcase them to our homeowners. Our teams at each Appaswamy property have made miracles happen by ensuring our projects stay on track despite the pandemic and ensuing restrictions. Here&rsquo;s a quick status update on two of our key <a href=\"https://appaswamy.com/\">properties in Chennai</a> that are almost ready for move-in day.</p>\r\n\r\n<p>Azure homeowners, you are the kings and queens of this world. Soon, you&rsquo;ll have the view to match. We&rsquo;re finishing up with the final touches at this prestigious property in Santhome overlooking the sandy bays of Marina. Construction work of the amenities, clubhouse and the Seashell Pavillion is nearly complete. Shipments of wood have arrived from Italy and are being shaped into front doors. Likewise, the custom-designed console table and Canti-Lever bench are here straight from the workshops of the Spanish manufacturer, Mobilfresno. We&rsquo;re excited to say that a number of apartments are nearly ready for handover! All that&rsquo;s left is for you to pick up your keys. Clover By The River For Clover By The River, we&rsquo;re in the final leg of the race against the clock. Our team has put down a strong foundation and erected the structure for all four towers within the property. The project is currently undergoing internal work such as electrical fitting, plumbing and other essential living fixtures. Amenities and common areas such as the badminton court, futsal court, private theatre, and banquet halls are under construction as well. Do you want in on this action? If you are looking for a tranquil home at the heart of the city, overlooking the winding river and surrounded by nature on all sides, then come check out our model apartments. To schedule an appointment, call: Azure The Oceanic: +91 73585 41160 Clover By The River: +91 80561 67373 To enquire about our other apartments for sale in Chennai, call Appaswamy Real Estate: +91 76673 30000</p>\r\n', '2021-10-18 05:46:41', '2021-10-18 05:46:41', 1),
(7, 'Top 4 Expensive Mistakes That First-Time Home Buyers Should Avoid - Appaswamy Real Estates', 'admin user55', '6828da52571594a60c61bb65d1c6c69d.jpg', '1f036e3e292b8bb9108c169894681b26.jpg', '<p>Buying the perfect home is the culmination of years of hard work and careful financial planning. Thus, it is imperative that you choose the right property. In this blog, we highlight the four key critical mistakes that first-time home buyers must avoid while considering buying a new home.</p>\r\n\r\n<p>Not have a clear budget</p>\r\n\r\n<p>Ever been house shopping and found a place just as you imagined your dream home, only to find that it was not within your budget? Residential dwellings range from affordable and mid-range, to ultra-luxe properties. Having a clear budget in mind and sharing this information with your realtor could save you heartache and shattered expectations. It could also stop you from overextending yourself and putting a strain on your finances.</p>\r\n\r\n<p>Ignoring critical factors</p>\r\n\r\n<p>A good home is only going to cost you once, but a bad one often comes with new and unexpected expenses. When buying a house that was previously owned or occupied by others, checking the wear and tear could save you thousands in maintenance costs. A few other factors to consider are lighting, ventilation, electrical wiring and plumbing, as well as waterproofing of the roof.</p>\r\n\r\n<p>Falling into the trap of discounts</p>\r\n\r\n<p>Everybody loves a good bargain, but that shouldn&rsquo;t come at the cost of a good home. Question the motive behind freebies and discounts. If the price sounds too good to be true, then it most likely is. Instead, opt for trustworthy <a href=\"https://appaswamy.com/about-us/\">builders in Chennai</a> who offer a better quality of life for you and your loved ones.</p>\r\n\r\n<p>Not preparing for the future Unlike single-use or short-term products, a home is an investment you will keep for decades. Therefore it is best to consider your future requirements. If this home is to become your primary place of residence, then ensure there is enough room for your family to expand. For a rental property, consider factors such as easily customizable interiors, luxury amenities, easy connectivity to the rest of the city, proximity to schools, colleges and hospitals. These could help you attract tenants on the lookout for rental <a href=\"https://appaswamy.com/new-projects-in-chennai-choose/\">apartments in Chennai</a>.</p>\r\n', '2021-10-11 04:46:52', '2021-10-11 04:46:52', 0),
(8, 'Upping the Ante On Luxury Through Our Apartment Amenities', 'admin user', '0ffef39d0a6b98e000b83f7eb46ce7dc.jpg', '34325714432838a51ac0ced0acf6c841.jpg', 'Luxury is all about convenience, choice, and control. This is the motto that our late founder, Mr. Appaswamy, weaved into the fabric of our business. He was one of the few builders in Chennai to include apartment amenities such as swimming pools – a game-changing feature – as early as 60 years ago.\r\n', '2021-10-11 05:41:30', '2021-10-11 05:41:30', 0),
(9, 'A peek at life in Clover', 'admin user', '2279c7163ab20f9000697f2992132acf.jpg', '85333066b4c03bdff828d0bef2a4fdb8.webp', '<p>Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundant with natural and man-made luxury. Allow us to show you a sneak peek of your future days at these verdant <a href=\"https://appaswamy.com/check-the-new-flats-for-sale-in-chennai/\">flats in Chennai</a>. Starting the day in tranquil repose As the first rays of sunlight trickle into your apartment, you roll out from under the covers, ready to start the day. The marble floors feel cool beneath your bare feet as you make your way to the kitchen and brew yourself the first cup of coffee for the day. Today, your father beat you to it and has a mug ready for you.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/YJP_Clover-26-1024x683.jpg\" style=\"height:350px; width:525px\" /></p>\r\n\r\n<p>Both of you settle down on the patio. For a brief moment, the world is painted in gold as the morning sun makes its way up the horizon. Birdsong fills the air and the world slowly wakes up. As you savour each sip and soak in the picturesque views of the Adyar estuary below. Your father flips open the morning newspaper. Soon after, both of you head downstairs to kickstart your morning with some exercise.</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/CVR_452-650x433.jpg\" style=\"height:433px; width:650px\" />You join your jogging buddies for a brisk walk around the track before heading to the fitness centre. Trees lined on either side of the jogging tracks provide ample shade during your lap around the property. But, you still can&rsquo;t help relishing the cool air-conditioned air at the gym.</p>\r\n\r\n<p>After you sweat it out at the gym, it&rsquo;s time to head back home. The sizzle of oil hitting the pan and the mouth-watering aroma of masala dosas invite you in. The rest of the family is up and the home is bustling in a rush to get the day started. But first, you need a shower. You step into the glass enclosure in your en-suite bathroom. The body jets and rain shower work like magic on your sore muscles.</p>\r\n\r\n<p>Maintain work-life balance Once everyone wolfs down their breakfast and you clear the plates, it&rsquo;s time to take the kids to school. Located at the heart of the city, your new Clover home is barely 15 mins away. As a bonus, you get to chat with the girls without the chaos of traffic.</p>\r\n', '2021-09-14 18:30:00', '2021-10-11 18:30:00', 1),
(10, 'NEW OPPORTUNITY IN GUJARAT: WIND – SOLAR HYBRID POWER POLICY ANNOUNCED IN APRIL 2021', 'admin user', '5c0bcc9cbd64df345c207e256806c0bc.jpeg', 'a252a4c603c8a88663e7dba3fc313f20.jpg', '<p><a href=\"http://localhost/appaswamy/home/magazine_details/9#\">Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundant with natural and man-made luxury. Allow us to show you a sneak peek of your future days at these verdant&nbsp;</a><a href=\"https://appaswamy.com/check-the-new-flats-for-sale-in-chennai/\">flats in Chennai</a>. Starting the day in tranquil repose As the first rays of sunlight trickle into your apartment, you roll out from under the covers, ready to start the day. The marble floors feel cool beneath your bare feet as you make your way to the kitchen and brew yourself the first cup of coffee for the day. Today, your father beat you to it and has a mug ready for you.</p>\r\n', '2021-09-16 05:12:28', '2021-09-15 18:30:00', 1),
(11, 'test23', 'admin user55', 'b05cc526a62ff73fc35f4685c1c54efc.jpg', '865e7610674fbf00c96a0b79a12cdf7a.jpg', '<p>Embracing luxury, Clover by the River is a lavish loft that is layered in an array of textures. Nestled along the tranquil banks of the Adyar River, it is designed for Appaswamy Real Estates in Chennai by Amrita Thomas Modi, principal designer of&nbsp;<a href=\"http://www.alarastudio.in/\" target=\"_blank\">ALARA</a>.</p>\r\n\r\n<p>This luxe four-bedroom residence boasts organic elements and meticulous artistry. A subtle palette comes alive with a blend of woodwork teamed with muted upholstery, framing scenic views of the verdant landscape.&nbsp;</p>\r\n\r\n<p>The 13th floor apartment is a potpourri of characteristics that balance one another. Featuring teak wood panelling across each corner, from the open living and dining rooms to the contemporary chevron panelled walls, it offers subtle visual contrast. In the open living and dining areas, a vertical slatted teak wood panel acts as an excellent backdrop to space&rsquo;s muted colour scheme.&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/CVR_452-650x433.jpg\" style=\"height:433px; width:650px\" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-10-10 18:30:00', '2021-10-10 18:30:00', 0),
(12, 'A peek at life in Clover', 'admin user', 'ff2dadd963a10370911166a9e76cb77d.jpg', 'cfa6001c6f9553ecfdec9468dca872bd.jpg', '<p><a href=\"http://localhost/appaswamy/home/magazine_details/9#\">Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundan...</a></p>\r\n', '2021-10-11 04:44:40', '2021-10-11 04:44:40', 0),
(13, 'NEW OPPORTUNITY IN GUJARAT: WIND – SOLAR HYBRID POWER POLICY ANNOUNCED IN APRIL 2021', 'admin user', 'fa7add5088ff2c0edfdaaa2d27ff6c08.jpg', '6f32226bd2a04ff78c8092a6337c87ce.jpg', '<p><a href=\"http://localhost/appaswamy/home/magazine_details/9#\">Clover By The River in Kotturpuram immerses you in an utterly quiescent world abundan...</a></p>\r\n', '2021-10-11 04:10:44', '2021-10-11 04:10:44', 0),
(14, 'test10', 'admin user', '960cbf7f386215b4453eed1af299e24f.jpg', 'dd3a1ee74195ea6ed300292f42f44f74.webp', '<p>testing blog</p>\r\n', '2021-10-10 18:30:00', '2021-10-10 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE `contact_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `enquiry_type` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `feature_name` varchar(200) DEFAULT NULL,
  `Active` int(2) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `feature_name`, `Active`, `created_at`) VALUES
(11, 'Water Treatment Plant', 1, '2021-10-20 18:30:00'),
(12, '100% Power Back up for common areas & apartments', 1, '2021-10-20 18:30:00'),
(13, 'Rain water Harvesting', 1, '2021-10-20 18:30:00'),
(14, 'Mini Theatre', 1, '2021-10-20 18:30:00'),
(15, 'Swimming Pool', 1, '2021-10-20 18:30:00'),
(16, 'Fire Alarm & Wet riser system', 1, '2021-10-20 18:30:00'),
(17, 'Landscaped garden with Water bodies', 1, '2021-10-20 18:30:00'),
(18, 'Clubhouse', 1, '2021-10-20 18:30:00'),
(19, 'Fitness Center', 1, '2021-10-20 18:30:00'),
(20, 'Party Hall', 1, '2021-10-20 18:30:00'),
(21, 'Toilets for drivers & domestic help', 1, '2021-10-20 18:30:00'),
(22, 'Access Controlled Doors', 1, '2021-10-20 18:30:00'),
(23, 'Sewage Treatment Plant', 1, '2021-10-20 18:30:00'),
(24, 'Video Security Phone and Intercom', 1, '2021-10-20 18:30:00'),
(25, '500 watt standby power supply for EWS Block', 1, '2021-10-20 18:30:00'),
(26, 'Intercom', 1, '2021-10-20 18:30:00');

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
-- Table structure for table `main_banner`
--

CREATE TABLE `main_banner` (
  `banner_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desk_banner` varchar(1000) DEFAULT NULL,
  `property_name` varchar(100) DEFAULT NULL,
  `location` varchar(500) DEFAULT NULL,
  `mobile_banner` varchar(1000) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_banner`
--

INSERT INTO `main_banner` (`banner_id`, `title`, `desk_banner`, `property_name`, `location`, `mobile_banner`, `updated_at`, `create_at`) VALUES
(31, 'by  river', '3f63b73f60ded9caaeff85b9a460c45e.jpg', 'Altezza', 'chennai', 'd5ead3055b0e70108c4944559510be79.jpg', '2021-10-25 12:40:43', '2021-10-25 07:47:47'),
(33, 'actual site images clover by the river', '68e14c959111c9b2456a5741228c1f99.jpg', 'test', 'coiambature', '69fe9e0761735df3df15f1941a32cd97.jpeg', '2021-10-25 12:40:43', '2021-10-25 13:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `press_id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `news_url` varchar(500) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `thumb_img` varchar(255) DEFAULT NULL,
  `pdf_file` varchar(255) DEFAULT NULL,
  `press_date` datetime NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Active` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `press`
--

INSERT INTO `press` (`press_id`, `title`, `news_url`, `description`, `thumb_img`, `pdf_file`, `press_date`, `create_at`, `Active`) VALUES
(23, 'test', 'https://elledecor.in/article/alara-crafts-a-stunning-abode-through-an-interplay-of-textures/', '', 'beaa2b29ec085a5b84f0b8ac5eebd038.webp', '', '2021-08-30 00:00:00', '2021-10-18 05:47:11', 1),
(24, 'A classic vertical slatted teak wood panel imparts a wonderful backdrop to the understated colour scheme in the open living and dining spaces; Photographs by Yash R Jain  A classic vertical slatted te', '', '', '5cfdb9b10de2e82d37080190806e700c.jpg', '706e2fb25adc3bd26df779bc2c870c3b.pdf', '2021-09-17 00:00:00', '2021-09-28 18:30:00', 1),
(25, 'a wonderful backdrop to the understated colour scheme in the open living and dining spaces; Photographs by Yash R Jain  A classic vertical slatted teak wood panel imparts a wonderful backdrop to the u', 'https://appaswamy.com/press-real-estate/', '', '8974909f58db8157fdfbe01a3419a9ba.webp', '', '2021-10-18 00:00:00', '2021-10-18 18:30:00', 1),
(26, 'test3', 'https://appaswamy.com/press-real-estate/', '', '2723bf1ae0d2d76555e899b4afdb4925.jpg', '', '2021-10-19 00:00:00', '2021-10-18 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `possession` datetime DEFAULT NULL,
  `location` varchar(80) DEFAULT NULL,
  `location_address` varchar(200) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `thumb_img` varchar(200) DEFAULT NULL,
  `walkthrough_video` varchar(255) DEFAULT NULL,
  `E-Brochure` varchar(255) DEFAULT NULL,
  `apartment_type` varchar(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `property_status` varchar(50) DEFAULT NULL,
  `feature` varchar(10000) DEFAULT NULL,
  `specification` text DEFAULT NULL,
  `google_map` varchar(5000) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`property_id`, `type`, `name`, `title`, `possession`, `location`, `location_address`, `description`, `thumb_img`, `walkthrough_video`, `E-Brochure`, `apartment_type`, `price`, `property_status`, `feature`, `specification`, `google_map`, `created_at`, `status`) VALUES
(12, 'Commercial', 'Navasuja', 'Meet the fine home in the city', '2021-05-10 00:00:00', 'Chennai', 'NSK salai, arcod road, vadapalani', 'Water Treatment Plant  Solar powered LED lights in common area 100 % Power back-up for Common areas & apartments', NULL, '2a42ebaa637189c1a03227c6ed4e0abc.MP4', '97364532c09e611db0808e9f1e224f91.pdf', '2, 3, 4', 1.81, 'Completed', 'Water-Treatment,Rain-water-Harvesting,Mini-Theatre,Swimming-Pool,Fire-Alarm,Landscaped-garden,Association-Room,Garbage,club-house,CCTV,Clubhouse,party-hall,intercom', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.138523826522!2d80.25855991527011!3d13.026849417187172!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267f2283ac65f%3A0x11512ad8a2568d9e!2sNavasuja%20-%20Appaswamy%20Real%20Estates%20Limited!5e0!3m2!1sen!2sin!4v1632373713142!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-10-18 05:41:51', '0'),
(13, 'Residential', 'Azure', 'Meet the fine home in the city', '2021-04-01 00:00:00', 'Chennai', 'South canel bank road, RA Puram, chennai', 'Roof top Swimming Pool Gymnasium 100 % Power back-up for Common areas & apartments Clubhouse Party Hall Access controlled barrier for car park entry Fire Alarm & Wet Riser system', NULL, '3a5219c450851cc1de91cf29ae93f94e.MP4', 'a9101ac6ed3e35067439820ac91c0170.pdf', '2, 3', 1.3, 'Completed', 'Water-Treatment,club-house,CCTV,500-watt', '', '', '2021-10-18 04:46:58', '1'),
(14, 'Residential', 'Altezza', 'Meet the fine home in the city', '2021-08-11 00:00:00', 'Chennai', '282/5, Rajiv Gandhi Salai, Kottivakkam, Chennai. (Just 1.3 Km from L.B Road, Adyar)', 'Roof top Swimming Pool Gymnasium  Solar powered LED lights in common areas 1000 watts  power back up for each unit 100 % Power back-up for Common areas & apartments Reticulated gas', NULL, '1ed1e67f02079683834927e0f189735e.MP4', '5fd68d3c6ec37191debd1e39b2d31ae0.pdf', '2, 3, 4', 1.5, 'Ready-to-Move', 'Water-Treatment- Plant,100%-Power-Back-up-for-common-areas-&- apartments,Reticulated-Gas,Rain-water-Harvesting,Mini-Theatre,Swimming-Pool,Fire-Alarm-&-Wet- riser system,Landscaped-garden-with-Water-bodies,Association-Room,Color-video-Door- Phone,Garbage-collection- room,Motion-Sensor- Lighting-system-in-club-house,CCTV-Surveillance,Solar-Powered-LED- Lights-in-coomon-area,Clubhouse,Security-Chain,Fitness-Centre,Party-Hall,Access-Controlled- Barrier-for-Car-Park-Entry,Lifts-with-V3F-&-ARD,Water-meters-for-all-apartments-(Digital),Toilets-for-drivers- &-domestic-help,Fire-fighting- sprinkler-system,Hydro-Pnuematic- System,Access-Controlled- Doors,Gymnasium,Sewage-Treatment- Plant,Security-Cabin,Indoor-Games,Video-Security-Phone-and-Intercom,DTH-Provision,1000-Watts-Power- Back-up-for -each-unit,Children\'s-Play-Area,Guest-Rooms,Comprehensive-Waste- management-system,Super-Market-(Groceries & Vegetables),Associate-Office-Room,Drivers-Waiting-room- with-fittings,Elevators-in-each-block,Minor-Sensor- Lighting-system-in-Club-House,Access-Controlled- doors-with-CCTV-cameras-coverage-@-vantage- point,Water-Softening-plant,500-watt-standby- power-supply-for-EWS-Block,Wifi-Connectivity-in-club-house,Provision-for-AC Outdoor-Unit-Placement,Servant-Quarters,Intercom,Boundary-Line- Landscaping-&-Sprawling-Lawn,Wifi-and- Multiplesystem-Service-provider-Television- Enablement,Placement-Provision- for-Air-Conditioning-Outdoor-Units,Private-Clothes- Drying-areas-for-each-apartment,Kids-Play-area(Children-Under-8)', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.0268996128593!2d80.24746511526988!3d12.970130518418781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a525df0d5285d4f%3A0xe9f3aa287b8a56bb!2sAltezza%20-%20Appaswamy%20Real%20Estates%20Ltd!5e0!3m2!1sen!2sin!4v1632374296612!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-09-23 01:49:17', '1'),
(15, 'Residential', 'Delmar', 'Meet the fine home within the city', '2021-09-05 00:00:00', 'Chennai', 'NSK salai, arcod road, vadapalani', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sapien eget mi proin sed libero enim sed faucibus. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Tortor condimentum lacinia quis vel eros donec ac odio. Eu volutpat odio facilisis mauris sit amet massa. Aliquet risus feugiat in ante metus dictum at tempor. Magna etiam tempor', 'cacf445a7978a874fc0f85816812b000.jpg', '88defb3fa1265d57b531507880f726d7.mp4', 'd7f0a5ce53e0d804b02f0d5a4ca01b54.pdf', '2, 3, 4', 1.5, 'Completed', 'Water-Treatment,Association-Room,club-house,CCTV,fitness-center,party-hall,sewage-treatment,power-backup,drivers-waiting-room', '[{\"spec0\":\"&lt;p&gt;test&amp;nbsp;&lt;\\/p&gt;\\r\\n\"},{\"spec1\":\"&lt;p&gt;test2&lt;\\/p&gt;\\r\\n\"}]', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.812700042952!2d76.94585681526131!3d11.052665157055152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8592c970f1ce9%3A0x56d4ec53f473c9ad!2sDelmar%20-%20Appaswamy%20Real%20Estates%20Ltd!5e0!3m2!1sen!2sin!4v1632722143368!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-10-20 12:12:33', '1'),
(16, 'Residential', 'Cerus', 'Meet the fine home in the city', '2021-08-05 00:00:00', 'Chennai', 'South canel bank road, RA Puram, chennai', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sapien eget mi proin sed libero enim sed faucibus. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Tortor condimentum lacinia quis vel eros donec ac odio. Eu volutpat odio facilisis mauris sit amet massa. Aliquet risus feugiat in ante metus dictum at tempor. Magna etiam tempor orci eu. Sapien et ligula ullamcorper malesuada. Nulla facilisi morbi tempus iac', NULL, '9924cfaf0d16ba777eff45dfa15cecc7.mp4', 'ce5581b1cb403443c1da72c7ebeaf22c.pdf', '1, 2, 3', 1.3, 'Ongoing', 'Mini-Theatre,Association-Room,CCTV-Surveillance', '<p>Type of Flats 1BHK, 1.5 BHK, 2BHK, 2.5 BHK, 3BHK &amp; 4BHK (Only 3 BHK Available) Apartment Range 1 BHK - 515 - 523 sq.ft. 1.5 BHK - 611 sq.ft. 2 BHK - 663 sq.ft - 1080 sq.ft. 2.5 BHK - 1345 sq.ft. - 1487 sq.ft. 3 BHK - 1495 - 1925 sq.ft. 4 BHK - 2350 sq.ft. Car Parking Blocks 1 &amp; 2 Basement, Lobby, First Floor &amp; Second Floor Blocks 3, 4 &amp; 5 Stilt</p>\n,Lift Lobbies & Corridors\nVitrified / Granite / Natural Stone\n\nSanitary Ware\nBranded sanitary ware wall mounted closet parkyware/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.\n\nElectricals\n3-Phase electricity with individual electronic meters\n2 way switch for light and fan in master bedroom\nHi-end switches\nSiemens/Equivalent ELCB in all units\n,<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/CVR_452-650x433.jpg\" style=\"height:433px; width:650px\" /></p>\n,', '<iframe aria-hidden=\"true\" frameborder=\"0\" tabindex=\"-1\" style=\"z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;\"></iframe>', '2021-09-27 07:23:16', '1'),
(23, 'Residential', 'platina', 'Meet the fine home in the city', '2021-08-29 00:00:00', 'Coimbatore', 'NSK salai, arcod road, rapuram', 'Roof top Swimming Pool Gymnasium Solar powered LED lights in common areas 1000 watts power back up for each unit 100 % Power back-up for Common areas & apartments Reticulated gas', NULL, NULL, ' ', '1, 2, 3', 1.81, 'Ready-to-Move', 'Mini-Theatre,Swimming-Pool', '[\"<h3>Type of Flats<\\/h3>\\r\\n\\r\\n<p>1BHK, 1.5 BHK, 2BHK, 2.5 BHK, 3BHK &amp; 4BHK (Only 3 BHK Available)<\\/p>\\r\\n\\r\\n<h3>Apartment Range<\\/h3>\\r\\n\\r\\n<p>1 BHK - 515 - 523 sq.ft.<br \\/>\\r\\n1.5 BHK - 611 sq.ft.<br \\/>\\r\\n2 BHK - 663 sq.ft - 1080 sq.ft.<br \\/>\\r\\n2.5 BHK - 1345 sq.ft. - 1487 sq.ft.<br \\/>\\r\\n3 BHK - 1495 - 1925 sq.ft.<br \\/>\\r\\n4 BHK - 2350 sq.ft.<\\/p>\\r\\n\\r\\n<h3>Car Parking<\\/h3>\\r\\n\\r\\n<p><strong>Blocks 1 &amp; 2 <\\/strong><br \\/>\\r\\nBasement, Lobby, First Floor &amp; Second Floor<\\/p>\\r\\n\\r\\n<p><strong>Blocks 3, 4 &amp; 5 <\\/strong><br \\/>\\r\\nStilt<\\/p>\\r\\n\",\"<h3>Lift Lobbies &amp; Corridors<\\/h3>\\r\\n\\r\\n<p>Vitrified \\/ Granite \\/ Natural Stone<\\/p>\\r\\n\\r\\n<h3>Sanitary Ware<\\/h3>\\r\\n\\r\\n<p>Branded sanitary ware wall mounted closet parkyware\\/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.<\\/p>\\r\\n\\r\\n<h3>Electricals<\\/h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>3-Phase electricity with individual electronic meters<\\/li>\\r\\n\\t<li>2 way switch for light and fan in master bedroom<\\/li>\\r\\n\\t<li>Hi-end switches<\\/li>\\r\\n\\t<li>Siemens\\/Equivalent ELCB in all units<\\/li>\\r\\n<\\/ul>\\r\\n\",\"\\r\\n<h3>Lift Lobbies &amp; Corridors<\\/h3>\\r\\n<p>Vitrified \\/ Granite \\/ Natural Stone<\\/p>\\r\\n<h3>Sanitary Ware<\\/h3>\\r\\n<p>Branded sanitary ware wall mounted closet parkyware\\/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.<\\/p>\\r\\n<h3>Electricals<\\/h3>\\r\\n<ul>\\r\\n<li>3-Phase electricity with individual electronic meters<\\/li>\\r\\n<li>2 way switch for light and fan in master bedroom<\\/li>\\r\\n<li>Hi-end switches<\\/li>\\r\\n<li>Siemens\\/Equivalent ELCB in all units<\\/li>\\r\\n<\\/ul>\\r\\n\\r\\n\",\"\"]', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.053784290154!2d80.16270671517204!3d13.032246990816077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5260e0014ee149%3A0x2993c0852235f943!2sPlatina%20-%20Appaswamy%20Real%20Estates%20Ltd!5e0!3m2!1sen!2sin!4v1632798639419!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-09-27 23:45:05', '1'),
(24, 'Commercial', 'jaya commercial', 'Meet the fine home in the city', '2021-09-02 00:00:00', 'Coimbatore', 'NSK salai, arcod road, rapuram', 'We have attempted to provide answers to the queries in the sequence of order normally asked by the customers.\r\nHowever, if you have any other queries, please visit our office.', 'e18c8523548241020474f7df8e77095b.jpg', NULL, ' ', '3, 4', 1.5, 'Completed', 'Gymnasium,Video-Security-Phone-and-Intercom', '[\"<h3>Type of Flats<\\/h3>\\r\\n\\r\\n<p>1BHK, 1.5 BHK, 2BHK, 2.5 BHK, 3BHK &amp; 4BHK (Only 3 BHK Available)<\\/p>\\r\\n\\r\\n<h3>Apartment Range<\\/h3>\\r\\n\\r\\n<p>1 BHK - 515 - 523 sq.ft.<br \\/>\\r\\n1.5 BHK - 611 sq.ft.<br \\/>\\r\\n2 BHK - 663 sq.ft - 1080 sq.ft.<br \\/>\\r\\n2.5 BHK - 1345 sq.ft. - 1487 sq.ft.<br \\/>\\r\\n3 BHK - 1495 - 1925 sq.ft.<br \\/>\\r\\n4 BHK - 2350 sq.ft.<\\/p>\\r\\n\\r\\n<h3>Car Parking<\\/h3>\\r\\n\\r\\n<p><strong>Blocks 1 &amp; 2 <\\/strong><br \\/>\\r\\nBasement, Lobby, First Floor &amp; Second Floor<\\/p>\\r\\n\\r\\n<p><strong>Blocks 3, 4 &amp; 5 <\\/strong><br \\/>\\r\\nStilt<\\/p>\\r\\n\",\"<h3>Lift Lobbies &amp; Corridors<\\/h3>\\r\\n\\r\\n<p>Vitrified \\/ Granite \\/ Natural Stone<\\/p>\\r\\n\\r\\n<h3>Sanitary Ware<\\/h3>\\r\\n\\r\\n<p>Branded sanitary ware wall mounted closet parkyware\\/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.<\\/p>\\r\\n\\r\\n<h3>Electricals<\\/h3>\\r\\n\\r\\n<ul>\\r\\n\\t<li>3-Phase electricity with individual electronic meters<\\/li>\\r\\n\\t<li>2 way switch for light and fan in master bedroom<\\/li>\\r\\n\\t<li>Hi-end switches<\\/li>\\r\\n\\t<li>Siemens\\/Equivalent ELCB in all units<\\/li>\\r\\n<\\/ul>\\r\\n\",\"<p><img alt=\\\"\\\" src=\\\"http:\\/\\/localhost\\/appaswamy\\/assets\\/admin\\/ckfinder\\/userfiles\\/files\\/CVR_452-650x433.jpg\\\" style=\\\"height:433px; width:650px\\\" \\/><\\/p>\\r\\n\",\"\"]', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.570779339675!2d77.00219301526113!3d10.995734958112951!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859c13893cc61%3A0x602073cac96b1370!2sAppaswamy%20Garden%20crest!5e0!3m2!1sen!2sin!4v1632799909937!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-10-21 10:41:01', '1'),
(26, 'Commercial', 'Navasuja', 'Meet the fine home in the city', '2021-09-24 00:00:00', '--Select Location--', 'NSK salai, arcod road, vadapalani', 'sfsdfsd', NULL, NULL, NULL, NULL, 0, 'Ready-to-Move', NULL, '\r\n<h3>Type of Flats</h3>\r\n<p>1BHK, 1.5 BHK, 2BHK, 2.5 BHK,  3BHK &amp; 4BHK (Only 3 BHK Available)</p>\r\n<h3>Apartment Range</h3>\r\n<p>1 BHK - 515 - 523 sq.ft.<br>\r\n1.5 BHK - 611 sq.ft.<br>\r\n2 BHK - 663 sq.ft - 1080 sq.ft.<br>\r\n2.5 BHK - 1345 sq.ft. - 1487 sq.ft.<br>\r\n3 BHK - 1495 - 1925 sq.ft.<br>\r\n4 BHK  - 2350 sq.ft.</p>\r\n<h3>Car Parking</h3>\r\n<p><strong>Blocks 1 &amp; 2 </strong><br>\r\nBasement, Lobby, First Floor &amp; Second Floor \r\n</p>\r\n<p><strong>Blocks 3, 4 &amp; 5 </strong><br>\r\nStilt\r\n</p>\r\n,\r\n<h3>Lift Lobbies &amp; Corridors</h3>\r\n<p>Vitrified / Granite / Natural Stone</p>\r\n<h3>Sanitary Ware</h3>\r\n<p>Branded sanitary ware wall mounted closet parkyware/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.</p>\r\n<h3>Electricals</h3>\r\n<ul>\r\n<li>3-Phase electricity with individual electronic meters</li>\r\n<li>2 way switch for light and fan in master bedroom</li>\r\n<li>Hi-end switches</li>\r\n<li>Siemens/Equivalent ELCB in all units</li>\r\n</ul>\r\n\r\n,<p><img alt=\"\" src=\"http://localhost/appaswamy/assets/admin/ckfinder/userfiles/files/CVR_452-650x433.jpg\" style=\"height:433px; width:650px\" /></p>\r\n,', '', '2021-09-28 04:05:28', '1'),
(27, 'Residential', 'Altezza', 'treddf', '2021-09-23 00:00:00', 'Coimbatore', 'NSK salai, arcod road, vadapalani', 'fdgfg', '7267eeeab3c9faf4194e1d2cad80c6e6.jpg', NULL, ' ', '1, 2', 1170, 'Ready-to-Move', 'Association-Room,CCTV-Surveillance', '[{\"spec0\":\"\\r\\n&lt;p&gt;1BHK, 1.5 BHK, 2BHK, 2.5 BHK,  3BHK &amp;amp; 4BHK (Only 3 BHK Available)&lt;\\/p&gt;\\r\\n&lt;h3&gt;Apartment Range&lt;\\/h3&gt;\\r\\n&lt;p&gt;1 BHK - 515 - 523 sq.ft.&lt;br&gt;\\r\\n1.5 BHK - 611 sq.ft.&lt;br&gt;\\r\\n2 BHK - 663 sq.ft - 1080 sq.ft.&lt;br&gt;\\r\\n2.5 BHK - 1345 sq.ft. - 1487 sq.ft.&lt;br&gt;\\r\\n3 BHK - 1495 - 1925 sq.ft.&lt;br&gt;\\r\\n4 BHK  - 2350 sq.ft.&lt;\\/p&gt;\\r\\n&lt;h3&gt;Car Parking&lt;\\/h3&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Blocks 1 &amp;amp; 2 &lt;\\/strong&gt;&lt;br&gt;\\r\\nBasement, Lobby, First Floor &amp;amp; Second Floor \\r\\n&lt;\\/p&gt;\\r\\n&lt;p&gt;&lt;strong&gt;Blocks 3, 4 &amp;amp; 5 &lt;\\/strong&gt;&lt;br&gt;\\r\\nStilt\\r\\n&lt;\\/p&gt;\\r\\n\"},{\"spec1\":\"\\r\\n&lt;h3&gt;Lift Lobbies &amp;amp; Corridors&lt;\\/h3&gt;\\r\\n&lt;p&gt;Vitrified \\/ Granite \\/ Natural Stone&lt;\\/p&gt;\\r\\n&lt;h3&gt;Sanitary Ware&lt;\\/h3&gt;\\r\\n&lt;p&gt;Branded sanitary ware wall mounted closet parkyware\\/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.&lt;\\/p&gt;\\r\\n&lt;h3&gt;Electricals&lt;\\/h3&gt;\\r\\n&lt;ul&gt;\\r\\n&lt;li&gt;3-Phase electricity with individual electronic meters&lt;\\/li&gt;\\r\\n&lt;li&gt;2 way switch for light and fan in master bedroom&lt;\\/li&gt;\\r\\n&lt;li&gt;Hi-end switches&lt;\\/li&gt;\\r\\n&lt;li&gt;Siemens\\/Equivalent ELCB in all units&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n\\r\\n\"},{\"spec2\":\"&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http:\\/\\/localhost\\/appaswamy\\/assets\\/admin\\/ckfinder\\/userfiles\\/files\\/CVR_452-650x433.jpg&quot; style=&quot;height:433px; width:650px&quot; \\/&gt;&lt;\\/p&gt;\\r\\n\"}]', 'dsfdsfsdfsd', '2021-10-20 06:39:25', '1'),
(28, 'Residential', 'Trellis', 'Meet the fine home in the city', '2021-09-29 00:00:00', 'Coimbatore', 'NSK salai, arcod road, rapuram', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sapien eget mi proin sed libero enim sed faucibus. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Tortor condimentum lacinia quis vel eros donec ac odio. Eu volutpat odio facilisis mauris sit amet massa. Aliquet risus feugiat in ante metus dictum at tempor. Magna etiam tempor orci eu. Sapien et ligula ullamcorper malesuada. Nulla facilisi morbi tempus iac', 'ad6ee5f19c872da62d8f5e992db73855.jpg', 'cdeff486b226f357d5cb632a5d188929.mp4', ' ', '1, 2, 3', 1680, 'Ready-to-Move', 'Color-video-Door- Phone,Garbage-collection- room,Clubhouse,Party-Hall,Toilets-for-drivers- &-domestic-help,Gymnasium', '[{\"spec0\":\"&lt;h3&gt;Type of Flats&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;1BHK, 1.5 BHK, 2BHK, 2.5 BHK, 3BHK &amp;amp; 4BHK (Only 3 BHK Available)&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Apartment Range&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;1 BHK - 515 - 523 sq.ft.&lt;br \\/&gt;\\r\\n1.5 BHK - 611 sq.ft.&lt;br \\/&gt;\\r\\n2 BHK - 663 sq.ft - 1080 sq.ft.&lt;br \\/&gt;\\r\\n2.5 BHK - 1345 sq.ft. - 1487 sq.ft.&lt;br \\/&gt;\\r\\n3 BHK - 1495 - 1925 sq.ft.&lt;br \\/&gt;\\r\\n4 BHK - 2350 sq.ft.&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Car Parking&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Blocks 1 &amp;amp; 2 &lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nBasement, Lobby, First Floor &amp;amp; Second Floor&lt;\\/p&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Blocks 3, 4 &amp;amp; 5 &lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nStilt&lt;\\/p&gt;\\r\\n\"},{\"spec1\":\"&lt;h3&gt;Lift Lobbies &amp;amp; Corridors&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;Vitrified \\/ Granite \\/ Natural Stone&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Sanitary Ware&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;Branded sanitary ware wall mounted closet parkyware\\/johnson or equivalent shower partition in master bed bathroom ledge in all bathrooms.&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Electricals&lt;\\/h3&gt;\\r\\n\\r\\n&lt;ul&gt;\\r\\n\\t&lt;li&gt;3-Phase electricity with individual electronic meters&lt;\\/li&gt;\\r\\n\\t&lt;li&gt;2 way switch for light and fan in master bedroom&lt;\\/li&gt;\\r\\n\\t&lt;li&gt;Hi-end switches&lt;\\/li&gt;\\r\\n\\t&lt;li&gt;Siemens\\/Equivalent ELCB in all units&lt;\\/li&gt;\\r\\n&lt;\\/ul&gt;\\r\\n\"},{\"spec2\":\"&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http:\\/\\/localhost\\/appaswamy\\/assets\\/admin\\/ckfinder\\/userfiles\\/files\\/CVR_452-650x433.jpg&quot; style=&quot;height:433px; width:650px&quot; \\/&gt;&lt;\\/p&gt;\\r\\n\"},{\"spec3\":\"&lt;p&gt;&lt;img alt=&quot;&quot; src=&quot;http:\\/\\/localhost\\/appaswamy\\/assets\\/admin\\/ckfinder\\/userfiles\\/files\\/YJP_Clover-26-1024x683.jpg&quot; style=&quot;height:683px; width:1024px&quot; \\/&gt;&lt;\\/p&gt;\\r\\n\"},{\"spec4\":\"&lt;h3&gt;Tiles&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Hi-end vitrified Tiles&lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nEntrance Foyer + Living + Ding&lt;\\/p&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Balcony, Bathroom&lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nBalcony, Bathroom&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Doors&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Main Door&lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nClassy Main Door&lt;\\/p&gt;\\r\\n\\r\\n&lt;p&gt;&lt;strong&gt;Internal Doors&lt;\\/strong&gt;&lt;br \\/&gt;\\r\\nFlush Doors&lt;\\/p&gt;\\r\\n\"},{\"spec5\":\"&lt;h3&gt;Kitchen&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;Granite Platform with S.S.Sink&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Bathroom&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;Up to false-ceiling height&lt;\\/p&gt;\\r\\n\\r\\n&lt;h3&gt;Locks&lt;\\/h3&gt;\\r\\n\\r\\n&lt;p&gt;Dorma or equivalent pin lock for main door&lt;\\/p&gt;\\r\\n&lt;p&gt;test spe&lt;\\/p&gt;\\r\\n\"}]', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7773.536570659141!2d80.21062100000002!3d13.050416!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3ede238ec78a88d3!2sTrellis%20-%20Appaswamy%20Real%20Estates%20Ltd.!5e0!3m2!1sen!2sin!4v1632976425217!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2021-10-20 06:38:13', '1'),
(29, 'Residential', 'navastra new', 'ffdgfdgfd', '2021-09-09 00:00:00', 'Chennai', 'fdgdfg', 'fdgfdgfd', 'ab12b95e02254a3f18e07c65609eeab6.jpg', NULL, ' ', '2, 3', 1680, 'Ready-to-Move', 'Water-Treatment,100-Power-Back-up,Regulator-Gas,Rain-water-Harvesting,Mini-Theatre,Swimming-Pool,Fire-Alarm,Landscaped-garden,Association-Room,Color-video-Door-Phone,Garbage,club-house,CCTV,solar-lights,Clubhouse,security-cabin,fitness-center,party-hall,parking-barrier,lifts-V3F,water-meter,toilet-driver,fire-flight,hydro-pnuematic,access-controlled,sewage-treatment,indoor-games,video-intercom,DTH,power-backup,childerns-play,guest-rooms,waste-management,drivers-waiting-room,elevators,access-doors,water-softening-plant,500-watt,Wifi-connectivity,ac-outdoor,servant-quarters,intercom,boundary-line,wifi-multiplesystem,air-conditioning,private-clothes,kids-play', '[{\"spec0\":\"&lt;p&gt;gjgfjhfghgf&lt;\\/p&gt;\\r\\n\"}]', 'bnbvnbv', '2021-10-18 05:05:13', '1'),
(30, 'Commercial', 'test10', 'Meet the fine home in the city', '2021-09-26 00:00:00', 'Coimbatore', 'NSK salai, arcod road, vadapalani', 'tesrr', 'f9560bb552b96a7cb6cd89486347608f.jpg', NULL, ' ', NULL, 0, 'Ready-to-Move', 'Water Treatment Plant,100% Power Back up for common areas & apartments,Rain water Harvesting,Mini Theatre,Swimming Pool,Fire Alarm & Wet riser system,Landscaped garden with Water bodies,Clubhouse,Fitness Center,Party Hall,Toilets for drivers & domestic help,Access Controlled Doors,Sewage Treatment Plant,Video Security Phone and Intercom,500 watt standby power supply for EWS Block,Intercom', '[{\"spec0\":\"&lt;p&gt;test&lt;\\/p&gt;\\r\\n\"}]', '', '2021-10-21 06:41:45', '1');

-- --------------------------------------------------------

--
-- Table structure for table `property_banner`
--

CREATE TABLE `property_banner` (
  `banner_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `banner_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_banner`
--

INSERT INTO `property_banner` (`banner_id`, `property_id`, `banner_img`) VALUES
(18, 12, '265693b299d8694a821a015c63ccd071.jpg'),
(19, 12, '3db12d0f960ba09dace5b8ed70befbba.jpg'),
(20, 13, '5903539823a34bc1e74ea9d00001e2a5.jpg'),
(21, 13, 'b6702e96955ee7bdcf7fc0f1ef5f4495.jpg'),
(22, 13, '0913f8576abc7e391c859e834ded32c2.jpg'),
(23, 13, 'c5bbea49a03104ceaae9b458d051b5ff.jpg'),
(28, 14, ''),
(35, 15, '8887ed083191041e72f1cc7c742dfb68.jpg'),
(36, 15, '9e130f855afa7144a7f9c4b5f0c010cb.jpg'),
(37, 16, '06ea863d5e0b14d739178febaecbc7b1.jpg'),
(38, 16, '53c076df07caf9cb0424a2eab4b8f2b9.jpg'),
(44, 23, '3b12afa3332d94c27f41c2d981d7c10d.jpg'),
(45, 23, 'ead4b5522b11f10385f4d956215b399c.jpg'),
(46, 24, 'b272cb87ae5ea2aeb60132029912fe68.jpg'),
(47, 24, '1f7b6cbd1b606757b39e11a65fc2f70e.jpg'),
(48, 27, 'df64f3cee607338a85124e18564713e3.jpg'),
(49, 28, '7b98d30bf82cca0c4da4e287be1d2aa2.jpg'),
(52, 29, 'ce37f8d01310a641ce7fe3b6d7cf285e.jpg'),
(59, 15, '179f37817a95dabb140ecb2c314b27f6.jpg'),
(60, 15, '630e9a7b94d741a891f32f2cb480b43a.jpg'),
(61, 15, '0d5ec63ddd5fb5e52805ba06a61d253b.jpg'),
(62, 30, '20e34cbffa3a8262b22b1e41c12afbc5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property_faq`
--

CREATE TABLE `property_faq` (
  `faq_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `faq_question` varchar(200) DEFAULT NULL,
  `faq_answer` varchar(10000) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_faq`
--

INSERT INTO `property_faq` (`faq_id`, `property_id`, `faq_question`, `faq_answer`, `create_at`) VALUES
(13, 12, 'Where is Navasuja coming up?', 'Located at RA Puram, a posh residential neighbourhood, Navasuja offers easy access to good schools, colleges, places of worship and Shopping centres. Mylapore, the art and cultural hub of Chennai, is close by. Your daily dose of filter coffee and the seasonal kutcheries have been taken care of.', '2021-09-23 00:33:28'),
(14, 12, 'Has the project been approved by the Real Estate ', 'Yes. RERA No:  TN/29/Building/0212/2021 dt. 12.08.2021', '2021-09-24 06:40:10'),
(15, 12, 'How many apartments and are planned in this community?', '59 apartments. 3BHK – 45 Nos and 4BHK – 14 Nos.', '2021-10-18 03:17:06'),
(16, 12, 'What are the configurations?', 'The apartments will shape up in stylish configurations 3 BHKs and 4 BHKs.3 BHKs  :  2020 Sq.ft – 2096 Sq.ft :  2615 Sq.ft', '2021-09-23 00:33:28'),
(17, 12, 'Do floor rise charges applicable?', 'No Floor rises charges in this project.', '2021-09-23 00:33:28'),
(18, 12, 'What is the total land extent? ', '15 Grounds', '2021-09-23 00:33:28'),
(20, 13, 'Where is Altezza coming up?', 'Altezza is located on Old Mahabalipuram Road (OMR) at just 1.3 KM from L.B Road Adyar.This location is surrounded by pan-national Tech Parks, a host of academic institutions, top-notch healthcare facilities and a huge residential community.', '2021-09-23 01:17:56'),
(21, 13, 'Has the project been approved by the Real Estate ', 'Yes. RERA No: TN/01/Building/0137/2021 ', '2021-09-24 06:39:27'),
(22, 13, 'How many flats are planned in this project?', 'The project will have three towers, namely,<strong><em> STRATOS, PARCO &amp; GIARDINO', '2021-09-23 01:17:56'),
(23, 13, 'What are the configurations?', 'The apartments will shape up in stylish configurations of 2 BHKs, 3 BHKs, and 4 BHKs.   Common area will account for 23.82% while plinth area will be 76.18%.', '2021-09-23 01:17:56'),
(24, 14, 'Where is Navasuja coming up?', 'tryrytryrty', '2021-09-23 01:49:17'),
(26, 15, 'Where is Navasuja coming up?', 'Located at RA Puram, a posh residential neighbourhood, Navasuja offers easy access to good schools, colleges, places of worship and Shopping centres. Mylapore, the art and cultural hub of Chennai, is close by. Your daily dose of filter coffee and the seasonal kutcheries have been taken care of.', '2021-09-27 02:27:59'),
(27, 15, 'Where is Altezza coming up?', '59 apartments. 3BHK – 45 Nos and 4BHK – 14 Nos.', '2021-09-27 02:27:59'),
(28, 16, 'this is quesrtg', 'The apartments will shape up in stylish configurations 3 BHKs and 4 BHKs.3 BHKs : 2020 Sq.ft – 2096 Sq.ft : 2615 Sq.ft', '2021-09-27 03:52:55'),
(29, 16, 'Where is Navasuja coming up?', 'No Floor rises charges in this project.', '2021-09-27 03:52:55'),
(35, 23, 'Where is Navasuja coming up?', 'Trellis is located right on the Arcot Road, Vadapalani and next to the Vadapalani Metro Station. The site has unbelievably close proximity to all reputed healthcare facilities, academic institutions, Koyambedu Mofussil Bus Terminus and much more. The salient feature is that Forum Vijaya Mall and Satyam Cinemas are next door.', '2021-09-27 23:45:05'),
(36, 23, 'Where is Altezza coming up?', 'Trellis will come up on an expansive spread of 5.08 acres (2,21,567 sq ft) – A land area of 21,789 sq.ft. is earmarked for open space reservation and 3,944 sq ft. for road widening. The total built-up area will be 1,95,834 sq.ft.\r\n\r\nThis development will have 384 apartments in five blocks with configurations of 1 BHKs, 1.5 BHKs, 2 BHKs, 2.5 BHKs, 3 BHKs & 4 BHKs.\r\n\r\nThe areas start from 515 sq.ft. to 2350 sq.ft. with classy amenities.\r\n\r\nSpace efficient 1 BHKs, 1.5 BHKs & 2 BHKs is a special feature of Trellis.', '2021-09-27 23:45:05'),
(37, 24, 'this is quesrtg', 'tesdrs', '2021-09-28 00:04:41'),
(38, 27, 'this is quesrtg', 'zcxcxzcz', '2021-09-30 00:37:51'),
(39, 28, 'Where is Navasuja coming up?', 'fgfdgfdgfd', '2021-09-30 01:08:07'),
(40, 28, 'Where is Altezza coming up?', 'dfgfdgdfgfdgdf', '2021-09-30 01:08:07'),
(41, 29, 'this is quesrtg', 'gfhfghgfh', '2021-09-30 07:04:06'),
(42, 12, 'this is quesrtg', 'test', '2021-10-18 03:17:06'),
(43, 30, 'Where is Navasuja coming up?', 'adsdsadsa', '2021-10-21 02:01:36'),
(44, 30, 'this is quesrtg', 'sadsadsadsa', '2021-10-21 02:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `property_floorplan`
--

CREATE TABLE `property_floorplan` (
  `floor_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `floor_name` varchar(50) DEFAULT NULL,
  `floor_title` varchar(200) DEFAULT NULL,
  `floor_img` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `property_floorplan`
--

INSERT INTO `property_floorplan` (`floor_id`, `property_id`, `floor_name`, `floor_title`, `floor_img`) VALUES
(42, 12, 'Tower A', 'first floor', '[{\"img\":\"6af431f3ddc735f301aba076db148e46.jpg\"},{\"img\":\"f8a56f1fb707f85a6d654f672dce28dd.jpg\"},{\"img\":\"d19d6dc1d3911a292a14b0ba30b34d3e.jpg\"}]'),
(43, 13, 'Tower A', 'first floor', '[{\"img\":\"814ad64c6ce3666a641157e024a793ba.jpg\"},{\"img\":\"7caa8b81b96d5ede7697a500388baab1.jpg\"}]'),
(45, 15, 'tower A test', 'floor plan A', '[{\"img\":\"f41c919cc7f9e83b75a787badc3f3b94.webp\"},{\"img\":\"304a292659e60deab9d22322ff97e051.webp\"}]'),
(47, 15, 'towert C', 'flloor c test c', '[{\"img\":\"3f46085e2ea675468288fc8c867ea3a0.jpg\"},{\"img\":\"e7ac5e21ef0c6d07040ae7abef9dfe1f.jpg\"}]'),
(48, 16, 'tower A', 'floor plan A', '[{\"img\":\"e1db0b7eb5fccbbf8d27a0b6c31848a7.jpg\"},{\"img\":\"dc8eb9394524c43a4923c33ea77944fd.jpg\"},{\"img\":\"9d03baf6b09e25ecc000edfa4b09d627.jpg\"}]'),
(54, 23, 'tower A', 'floor plan A', '[{\"img\":\"611b77459210b9ff5e8c963171494e89.jpg\"}]'),
(55, 23, 'tower B', 'floor B', '[{\"img\":\"370ea28aa541ee19f3f91cd784e91a49.jpg\"}]'),
(56, 24, 'tower A', 'floor plan A', '[{\"img\":\"8ea683611adac646028d81d6c1fac454.jpg\"}]'),
(57, 27, 'tower A', 'floor plan A', '[{\"img\":\"80e9b82867c6272189926cb03ed1e17c.jpg\"}]'),
(58, 28, 'tower A', 'floor plan A', '[{\"img\":\"tower-a-1.webp\"}]'),
(59, 29, 'gfhgf', 'gfhgfh', '[{\"img\":\"tower-a-1.webp\"}]'),
(60, 30, 'tower A', 'floor plan A', '[{\"img\":\"7de959c786ebdc0a485f5ec52bda6415.jpeg\"}]');

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
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_auth`
--
ALTER TABLE `login_auth`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `main_banner`
--
ALTER TABLE `main_banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`press_id`);

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
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `login_auth`
--
ALTER TABLE `login_auth`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `main_banner`
--
ALTER TABLE `main_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `press_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `property_banner`
--
ALTER TABLE `property_banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `property_faq`
--
ALTER TABLE `property_faq`
  MODIFY `faq_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `property_floorplan`
--
ALTER TABLE `property_floorplan`
  MODIFY `floor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
