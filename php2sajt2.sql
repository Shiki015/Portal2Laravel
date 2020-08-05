-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2020 at 08:37 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php2sajt2`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id_category` int(100) NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category`) VALUES
(3, 'News'),
(4, 'Sport'),
(5, 'Health'),
(6, 'Tech'),
(7, 'Money'),
(8, 'Food'),
(9, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(100) NOT NULL,
  `commnet` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at_commnet` datetime NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_news` int(100) NOT NULL,
  `parent_id` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `commnet`, `created_at_commnet`, `id_user`, `id_news`, `parent_id`) VALUES
(31, 'We are all done!', '2020-02-02 20:39:02', 44, 11, NULL),
(32, 'Yes, we Are..', '2020-02-02 20:46:36', 46, 11, NULL),
(37, 'sdsad\nd\n', '2020-02-03 15:39:11', 44, 3, NULL),
(38, 'ddasd', '2020-02-03 15:39:13', 44, 3, 37),
(39, 'asdasdas', '2020-02-03 15:39:15', 44, 3, 37),
(40, 'dasdasd', '2020-02-03 15:39:17', 44, 3, NULL),
(41, 'dasdada', '2020-02-03 15:39:20', 44, 3, 40),
(42, 'dasd', '2020-02-03 15:39:23', 44, 3, NULL),
(45, 'asdaad', '2020-02-04 02:43:53', 44, 14, NULL),
(46, 'dasdafzxczczxzx', '2020-02-04 15:29:54', 44, 9, NULL),
(50, 'adsa', '2020-02-05 23:54:15', 44, 14, NULL),
(51, 'dada', '2020-02-05 23:55:23', 44, 14, 50),
(52, 'dadas', '2020-02-05 23:55:24', 44, 14, NULL),
(53, 'dads', '2020-02-05 23:56:23', 44, 14, 52),
(54, 'dasd', '2020-02-06 21:21:03', 44, 12, NULL),
(55, 'a', '2020-02-07 16:12:54', 57, 14, NULL),
(57, 'Nice..', '2020-02-08 05:43:22', 59, 11, NULL),
(58, ':(', '2020-02-09 19:22:58', 44, 24, NULL),
(60, 'Fff', '2020-02-13 06:25:25', 44, 11, NULL),
(61, 'Fdd', '2020-02-13 06:25:28', 44, 11, 60),
(62, 'Fd', '2020-02-13 06:25:30', 44, 11, NULL),
(63, 'Ovaj sajt zasluzuje 10p. ', '2020-02-15 17:28:05', 65, 23, NULL),
(64, 'Znaci ovaj prince andrew ni blizu kao nas Vucko. aco SRBINE !!! NE DAM OSVETINJE!!! SNS!!\n', '2020-02-22 11:49:31', 68, 3, NULL),
(65, 'test', '2020-03-14 18:23:45', 69, 5, NULL),
(66, 'test1', '2020-03-14 19:54:55', 44, 5, 65),
(67, 'proba', '2020-03-14 19:55:28', 70, 5, NULL),
(68, 'proba', '2020-03-15 16:37:46', 73, 3, NULL),
(78, 'proba23', '2020-03-16 12:04:44', 44, 3, 39),
(70, '0', '2020-03-15 17:28:58', 44, 3, 69),
(71, 'a', '2020-03-15 17:31:00', 44, 3, 70),
(72, 'a', '2020-03-15 17:31:08', 44, 3, 69),
(77, 'proba2', '2020-03-15 17:41:15', 44, 3, NULL),
(79, 'proba32', '2020-03-16 12:46:01', 44, 11, 61),
(80, 'komentar5', '2020-03-16 15:35:33', 44, 3, NULL),
(81, 'komentar6', '2020-03-16 15:35:47', 44, 3, 80);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(100) NOT NULL,
  `title_news` text COLLATE utf8_unicode_ci NOT NULL,
  `desc_news` text COLLATE utf8_unicode_ci NOT NULL,
  `desc_less_news` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at_news` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(100) NOT NULL,
  `big_photo` text COLLATE utf8_unicode_ci NOT NULL,
  `recent_photo` text COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title_news`, `desc_news`, `desc_less_news`, `created_at_news`, `id_user`, `big_photo`, `recent_photo`) VALUES
(3, 'Prince Andrew ‘called “victim” Virginia Roberts “a very sick girl” a day after she revealed Jeffrey Epstein sex abuse’', 'PRINCE Andrew described his alleged victim Virginia Roberts as “a very sick girl”, it has been reported.\r\nThe Duke made the comment in a message to a pal who asked how Andrew was coping with the Jeffrey Epstein scandal.\r\nMs Roberts had accused Epstein of appalling abuse before the Duke was hit by scrutiny for his links to the disgraced financier.\r\n\r\nHer shocking revelations were accompanied by the now-infamous photograph of the Prince with his arm around her waist.\r\n\r\nThe Duke made the comments on Ms Roberts’ health to his friend Jonathan Rowland in 2011, the Mail on Sunday reports.\r\n\r\nMr Rowland, the son of controversial property tycoon David Rowland, had contacted Andrew, saying: “Hope the press isn’t getting you down to [sic] much.”\r\n\r\nThe Duke replied: “Not at all!... She is a very sick girl apparently. The innuendo is the problem. But there is nothing that one can do for that! Shrug and move on.”\r\n<blockquote>\r\nNot at all!... She is a very sick girl apparently. The innuendo is the problem. But there is nothing that one can do for that! Shrug and move on.\r\n</blockquote>\r\nIn December, Roberts Giuffre claimed \"evil people\" wanted to keep her \"quiet\", chillingly adding: \"if something happens to me, don’t let it go\".', 'PRINCE Andrew described his alleged victim Virginia Roberts as “a very sick girl”, it has been reported. The Duke made the comment in a message to a pal who asked how Andrew was coping with the Jeffrey Epstein scandal.', '2020-02-02 11:51:33', 44, 'images/news/big_photo1580640693NINTCHDBPICT000555403567-3.png', 'images/news/recent_photo1580640693NINTCHDBPICT000555403567-3.png'),
(5, 'Apple could be forced to change iPhone chargers again as soon as JULY – as controversial EU vote passes', 'PLANS to force phone makers like Apple to adopt a \"common charger\" are now one step closer to reality.\r\n<br><br><br>\r\nThe EU proposals (which could affect handsets in every country) would likely force Apple to change the iPhone\'s charger yet again.\r\n<br><br><br>\r\nA vote by the EU Parliament on the proposals this week saw MEPs call \"urgent rules\" with a majority of 582-40.\r\n\r\n<br><br><br>\r\nPoliticians have tasked the EU Commission with tabling \"binding rules\" by July 2020.\r\nAt their most serious, the rules could force all future mobile phones have the exact same charging port.\r\n<br><br><br>\r\nThe proposals have been met by heavy criticism, including from Apple.\r\n\r\n<blockquote>\r\nThe EU\'s vote this week was very vague, and simply requires the EU Commission to create rules to regulate mobile phone chargers.\r\n</blockquote>', '<strong> IT was second time lucky for part-time blogger Emma Jackson when it came to buying her first home.   </strong> <br><br><br>     She saved up a sizeable £36,000 deposit in just five years by taking on jobs as a babysitter, lifeguard, personal trainer and cleaner while studying at university.', '2020-02-02 12:08:39', 44, 'images/news/big_photo15806417191.png', 'images/news/recent_photo15806417191.png'),
(6, 'WhatsApp will stop working on millions of iPhone and Android models TOMORROW', '<p>WhatsApp will stop supporting older Android and iOS devices from February 1 Smartphones running Android 2.3.7 Gingerbread or iOS 8 and older are affected Facebook-owned company said that features might stop functioning at any time<br />\r\n<br />\r\n<br />\r\nWhatsApp will stop working on millions of old iPhone and Android models tomorrow, as the chat app withdraws support for some older operating systems. br&gt;<br />\r\n<br />\r\nUsers on unsupported devices will no longer be able to create new accounts or reverify existing accounts from Saturday, February 1.<br />\r\n<br />\r\n<br />\r\nFacebook, which owns WhatsApp, said the cull was necessary to ensure the security of its users<br />\r\n<br />\r\n<br />\r\n&#39;Because we no longer actively develop for these operating systems, some features might stop functioning at any time,&#39; said WhatsApp in a blog post.<br />\r\n<br />\r\n<br />\r\n&#39;For the best experience, we recommend you use the latest version of iOS [or Android] available for your phone.&#39; br&gt;<br />\r\n<br />\r\nIt also removed support for older Windows-based phones at the beginning of 2018, at the same time as it stopped supporting all BlackBerry OS devices.</p>', '<p><strong>IT was second time lucky for part-time blogger Emma Jackson when it came to buying her first home. </strong><br />\r\n<br />\r\n<br />\r\nShe saved up a sizeable &pound;36,000 deposit in just five years by taking on jobs as a babysitter, lifeguard, personal trainer and cleaner while studying at university.</p>', '2020-02-02 12:24:31', 44, 'images/news/big_photo158064267121146820-0-image-a-1_1574067311218.png', 'images/news/recent_photo158064267121146820-0-image-a-1_1574067311218.png'),
(9, 'France 24 England 17: Late fightback not enough as Red Rose stunned in Paris as they crash to Six Nations defeat', '<p><strong>ABSOLUTE brutality was the promise - absolute disaster was the reality. </strong><br />\r\n<br />\r\n<br />\r\nHumiliated England boss Eddie Jones gave it the big ones before Le Crunch as if his World Cup runners-up were going to play a bunch of primary school bums in Paris.<br />\r\n<br />\r\n<br />\r\nBut the locker-room bully picked on the wrong set of kids and his side were absolutely schooled at the Stade de France by Romain Ntamack and co.<br />\r\n<br />\r\n<br />\r\nForget steak frites tonight, Jones will be shovelling humble pie down his gob after this one after his side only turned up for the last 23 minutes and had the brilliant Jonny May to thank for salvaging something with his double.<br />\r\n<br />\r\n<br />\r\nAnd Shaun Edwards, the new France defence coach and Great Britain rugby league legend, will happily feed him the first glorious slice.<br />\r\n<br />\r\n<br />\r\nEdwards has been overlooked by England for years despite being one of Warren Gatland&#39;s trusted generals at Wales. Yet again an English coach has stuck two fingers up to Twickenham after endless snubs.</p>\r\n\r\n<blockquote>England simply were not expecting this kind of French revolution.</blockquote>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><br />\r\nExactly two months to the day since their disastrous defeat to South Africa at Japan 2019, they were struggling again. Vincent Rattez struck after six minutes to get the party started thanks to some classy work by Teddy Thomas.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p><strong>IT was second time lucky for part-time blogger Emma Jackson when it came to buying her first home. </strong><br />\r\n<br />\r\n<br />\r\nShe saved up a sizeable &pound;36,000 deposit in just five&nbsp;years by taking on jobs as a babysitter, lifeguard, personal trainer and cleaner while studying at university.</p>', '2020-02-02 20:10:26', 44, 'images/news/big_photo1580670626NINTCHDBPICT000559504996.png', 'images/news/recent_photo1580670626NINTCHDBPICT000559504996.png'),
(10, 'How I bought an £80k flat on £10k a year salary after getting rejected for a mortgage', '<strong> IT was second time lucky for part-time blogger Emma Jackson when it came to buying her first home.   </strong>\r\n<br><br><br>    \r\nShe saved up a sizeable £36,000 deposit in just five years by taking on jobs as a babysitter, lifeguard, personal trainer and cleaner while studying at university.\r\n<br><br><br>    \r\nAfter graduating in 2017, Emma then got a part time job at Sheffield Hallam University as a campaigns and democracy leader, which she still does, earning £10,500 a year working 17.5 hours a week.\r\n<br><br><br>    \r\nIn her spare time, Emma blogged about how she makes extra cash on Bee Money Savvy, and now turns a profit running the site.\r\n\r\nThis meant she eventually had enough saved to put down a 45 per cent deposit she needed because of her low salary.\r\n<br><br><br>    \r\nBut despite a mortgage broker telling her that she was eligible, Emma\'s loan application was rejected due to the short lease on the flat.\r\n\r\nThe delay meant that she risked missing out on the property entirely but luckily the seller was willing to wait.\r\n<br><br><br>    \r\nShe then switched to a different broker who found her a deal that she was accepted for.\r\n\r\nEmma spoke to My First Home about the ups and downs of buying her one-bed property.', '<strong> IT was second time lucky for part-time blogger Emma Jackson when it came to buying her first home.   </strong> <br><br><br>     She saved up a sizeable £36,000 deposit in just five years by taking on jobs as a babysitter, lifeguard, personal trainer and cleaner while studying at university.', '2020-02-02 20:18:26', 44, 'images/news/big_photo1580671106NINTCHDBPICT000554440818.png', 'images/news/recent_photo1580671106NINTCHDBPICT000554440818.png'),
(11, 'Seventh American with coronavirus confirmed as the White House declares the global outbreak a public health emergency', 'A man in Santa Clara, California, has become the seventh American diagnosed with the deadly coronavirus sweeping the globe, local authorities announced Friday, nearly simultaneous with the White House\'s declaration that the outbreak that\'s sickened more than 11,000 and killed 258 people worldwide is a public health emergency in the US.<br><br><br>    \r\nWhile the outbreak is ongoing, President Trump has issued an order that will block all foreign nationals who have visited China in the prior two weeks - except for the immediate family citizens or permanent residents - from entering the US, beginning at 5pm ET on Sunday. \r\n<br><br><br>    \r\nAt seven, the American case count remains low, but the virus has quickly spread in China and around the globe the Department of Health and Human Services and President Donald Trump are stepping up measures to contain the deadly new disease. <br><br><br>    \r\nCitizens returning to the US who have visited Hubei province - where Wuhan, the epicenter of the outbreak, is located - within two weeks of of coming back to the US will be under a mandatory 14 day quarantine.  \r\n\r\nThose who have traveled elsewhere in mainland China will be subject to a 14-day self-imposed quarantine.<br><br><br>    \r\nTo facilitate these measures, all flights returning to the US from anywhere in China will be funneled through seven airports: John F Kennedy International Airport in New York, Chicago O\'Hare International Airport, Seattle, San Francisco, Hartsfield-Jackson Atlanta International Airport, Daniel K Inouye International Airport in Honolulu and Los Angeles International Airport (LAX). <br><br><br>    \r\nUS officials earlier Friday issued an \'unprecedented\' federal quarantine for all 195 passengers evacuated from Wuhan, and said that their test for the new coronavirus may come back negative if someone hasn\'t developed symptoms - but they could later become ill.', 'A man in Santa Clara, California, has become the seventh American diagnosed with the deadly coronavirus sweeping the globe, local authorities announced Friday, nearly simultaneous with the White House\'s declaration that the outbreak ....', '2020-02-02 20:22:40', 44, 'images/news/big_photo158067136024094634-7953313-There_are_now_a_total_of_seven_confirmed_cases_of_coronavirus_in-a-8_1580516489540.png', 'images/news/recent_photo158067136024094634-7953313-There_are_now_a_total_of_seven_confirmed_cases_of_coronavirus_in-a-8_1580516489540.png'),
(12, 'How to avoid doing the dishes', 'Let’s face it, one-pot meals are a life-saver during the week. Whether it’s stew, a traybake, pasta in its own sauce or risotto, a one-pot offers all the joy of eating without seemingly endless rummaging for pots and pans and then washing up. It’s a great way to make delicious food easily too: all the flavours come together during the cooking, while you put your feet up. Here are some of the best ways to cook in one pot.<br><br><br>    \r\n<strong>  1. Use one tray for pretty much everything </strong><br><br><br>    \r\nThe classic roast can use every pan and tray in the house if you’re not careful. We reckon the one-pan roast could be the next big thing – and this one-minute video shows you how to do it.<br><br><br>    \r\n<strong> 2. Cook pasta or rice in the sauce  </strong>\r\n\r\n<br><br><br>    \r\nPasta and rice are perfect for quick, simple family favourites. Making your own sauce is the key to deliciousness, but why use two or three pans when you could just use one? Cook your pasta or rice in the sauce you are serving it with and save the washing-up hassle!\r\n<br><br><br>    \r\n<strong> 3. From hob to oven  </strong><br><br><br>    \r\nInvesting in a single pot that can go on the hob, in the oven and under the grill can save you from using multiple pans for one meal. Try Miguel Barclay’s delicious one-pot gnocchi to see just how easy it is.', 'Let’s face it, one-pot meals are a life-saver during the week. Whether it’s stew, a traybake, pasta in its own sauce or risotto, a one-pot offers all the joy of eating without seemingly endless rummaging for pots and pans and then washing up.', '2020-02-02 20:30:11', 44, 'images/news/big_photo1580671811ratos-de-comida-png-food-11563001963setiutefpy.png', 'images/news/recent_photo1580671811ratos-de-comida-png-food-11563001963setiutefpy.png'),
(19, 'Fire crews called to fallen north-east power line', 'Emergency services are in attendance after a power line fell onto railway tracks near a north-east village.\r\n\r\n<br><br><br>    \r\nThe Scottish Fire and Rescue Service (SFRS) were called to the incident near Insch at 5.20pm this evening.\r\n\r\nCrews remain on scene while SSE engineers are on the way.\r\n\r\nA SFRS spokeswoman said: “The call came into us at 5.20pm. Crews are still on site.\r\n\r\n<blockquote> “A power line has fallen and landed on the railway tracks.\r\n\r\n“Trains have been stopped.  </blockquote>\r\n<br><br><br>    \r\nA statement from Network Rail said: “A high-voltage power line has fallen onto the railway near Insch.\r\n<br><br><br>    \r\n<blockquote>   “Our team are on their way now too.”</blockquote>\r\n<br><br><br>    \r\nMeanwhile, 32 postcodes in the AB52 area, which surrounds Insch, have been affected by a power cut.\r\n\r\nThe fault was reported at 5.40pm, with an engineer arriving on scene at 6.15pm.decor', 'Emergency services are in attendance after a power line fell onto railway tracks near a north-east village.  <br><br><br>     The Scottish Fire and Rescue Service (SFRS) were called to the incident near Insch at 5.20pm this evening.  Crews remain on scene while SSE engineers are on the way.', '2020-02-09 19:10:17', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1581293417P-1f17d594-c8a0-4497-90fc-b2d661ee5216.jpg'),
(17, 'North-east homes left without power', 'More than 500 homes in the north-east have been affected by power cuts.\r\n<br><br><br>    \r\nA total of 537 homes in the AB51, AB41, AB54, AB52, AB53 and AB15 areas have been affected, including Insch, Rothienorman, Turriff and around the Huntly area.\r\n\r\nThe power cuts are a result of adverse weather from Storm Ciara, with conditions resulting in incidents of trees being uprooted, and other wind-borne debris damaging overhead power lines.\r\n<br><br><br>    \r\nSome have more than 100 postcodes affected in each area, and homes have been without power for several hours. All power is expected to be restored this evening.\r\n\r\nA spokeswoman from Scottish and Southern Electricity Networks (SSEN), said: “We’d like to apologise to our customers for any inconvenience caused, and thank them for their patience as our engineers work to restore power as quickly as possible.”decor', 'More than 500 homes in the north-east have been affected by power cuts. <br><br><br>     A total of 537 homes in the AB51, AB41, AB54, AB52, AB53 and AB15 areas have been affected, including Insch, Rothienorman, Turriff and around the Huntly area.', '2020-02-09 18:33:50', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1581291230power-cuts.png'),
(20, 'North-east MP welcomes predictions of upturn in employment', 'A north-east MP has welcomed news that thousands of jobs could be created in the region over the next three years.\r\n\r\nIndustry body Subsea UK has said around 80% of firms expect an upturn, and predicts around 9,000 more people could be employed in the underwater engineering sector by 2022.\r\n<br><br><br>    \r\nMost of the new posts are expected to be based in the north-east.\r\n\r\nBanff and Buchan MP David Duguid said: “This is fantastic news for the north-east.\r\n<br><br><br>    \r\n<blockquote>“Subsea industry bosses believe the sector has weathered the storm of the recent downturn, with most companies ready to recruit more workers over the next three years.   </blockquote>\r\n<br><br><br>    \r\n“The focus will be on North Sea oil and gas in the short-term, but the growth in renewable energy has also created new opportunities for subsea companies. The expertise here in the north-east will be in demand all over the world.”', 'A north-east MP has welcomed news that thousands of jobs could be created in the region over the next three years.  Industry body Subsea UK has said around 80% of firms expect an upturn, and predicts around 9,000 more people could be employed in the underwater engineering sector by 2022. <br><br><br>     Most of the new posts are expected to be based in the north-east.', '2020-02-09 19:11:55', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1581293515subsea-7-506x399-472x372.png'),
(21, 'US warship ‘aggressively approached’ by Russian ship', 'An American warship was “aggressively approached” by a Russian navy ship in the North Arabian Sea, the US navy has said.\r\n\r\nNavy Cmdr Josh Frey, spokesman for the US 5th Fleet, said the USS Farragut was conducting routine operations on Thursday and sounded five short blasts to warn the Russian ship of a possible collision.<br><br><br>    \r\nHe said the USS Farragut, an Arleigh Burke-class destroyer, asked the Russian ship to change course and the ship initially refused but ultimately moved away.\r\n\r\nEven though the Russian ship moved away, Cmdr Frey said the delay in shifting course “increased the risk of collision”.decor', '“aggressively approached” by a Russian navy ship in the North Arabian Sea, the US navy has said.', '2020-02-09 19:13:16', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1580670626NINTCHDBPICT000559504996.png'),
(22, 'Police officer and bystanders among six dead in gun battle in US city', 'Six people, including a police officer and three bystanders, were killed in a furious gun battle that filled the streets of Jersey City with the sound of heavy gunfire for hours, US authorities said.\r\n\r\nThe dead included two suspects, Jersey City Police Chief Michael Kelly said.<br><br><br>    \r\nThe shooting took place at two scenes, starting at a cemetery, where the officer was gunned down, and continuing at a kosher supermarket, where five more bodies were found, Kelly said.\r\n\r\n“Our officers were under fire for hours,” the chief said.\r\n\r\nHe would not say exactly what set off the shooting but that he believes the officer who was killed was trying to stop some “bad guys.”<br><br><br>    \r\nCity Public Safety Director James Shea said that authorities believe the bloodshed was not an act of terrorism but that it was still under investigation.\r\n\r\nTwo other officers were wounded but were later released from the hospital, authorities said.', 'Six people, including a police officer and three bystanders, were killed in a furious gun battle that filled the streets of Jersey City with the sound of heavy gunfire for hours, US authorities said.', '2020-02-09 19:14:26', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1580671106NINTCHDBPICT000554440818.png'),
(23, 'US and China ‘close to trade deal’', 'The Trump administration and China are close to finalising a modest trade agreement which would suspend tariffs that are set to kick in on Sunday.\r\n\r\n“We’re close to a deal,” said Myron Brilliant, the US Chamber of Commerce’s head of international affairs.<br><br><br>    \r\nMr Brilliant said the administration has agreed to suspend Mr Trump’s plans to impose tariffs on 160 billion dollars in Chinese imports on Sunday and to reduce existing tariffs.\r\n\r\nIn return, Beijing would buy more US farm products, increase Americans companies’ access to the Chinese market and tighten protection for intellectual property rights.\r\n\r\nThe deal awaits final approval from President Donald Trump.\r\n<br><br><br>    \r\nEarlier on Thursday, a spokesman for China’s Ministry of Commerce, Gao Feng, told reporters that “the economic and trade teams of both sides have maintained close communication”.\r\n\r\nBeijing had threatened to retaliate if Mr Trump proceeded with plans to raise tariffs on Sunday.decor', 'The Trump administration and China are close to finalising a modest trade agreement which would suspend tariffs that are set to kick in on Sunday.', '2020-02-09 19:15:53', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo1580670626NINTCHDBPICT000559504996.png'),
(24, 'Stray cat with no ears get new crocheted set and finds new home', 'A cat who lost her ears because of infection has received a new crocheted woolly pair – and a new home.\r\n\r\nLady In A Fur Coat was taken in by Dane County Humane Society (DCHS) after being found as a stray near Madison, Wisconsin, in December, but continued to suffer from health problems.<br><br><br>    \r\nBecause her ear flaps were suffering from chronic infections and haematomas, blocking her ear canals, staff eventually had to take the decision to have them removed.\r\n\r\n“It made her a lot more comfortable but we did recognise that it did make her look a little bit odd,” DCHS spokesperson Marissa DeGroot told the PA news agency.\r\n<br><br><br>    \r\n<blockquote> “So to help bring a little more attention to her and help Lady find a home a little quicker, one of our staff members was able to crochet her a new little bonnet with some new ears.”  </blockquote>\r\n\r\n<br><br><br>    \r\nAsh Collins, a staff member at DCHS, produced the ear bonnet after a conversation with her colleagues about how to help Lady get adopted.\r\n\r\nShe said: “Routinely staff members and volunteers at Dane County Humane Society go above and beyond for the animals, not only in their care, making sure they’re healthy and happy, but we recognise that bringing them a little more attention is going to help them find that perfect home more quickly.<br><br><br>    \r\n<blockquote>  “We had been discussing, almost joking around about knitting her some ears and Ash went home that night, crocheted her a little ear bonnet and came in the next day with it.” </blockquote>\r\n<br><br><br>    \r\nAnd the post clearly had the desired effect as Lady was adopted within a day of the pictures being put on Facebook.\r\n\r\nThe shelter is not revealing any details about Lady’s new family, but did confirm they had come forward after seeing her on Facebook.<br><br><br>    \r\n<blockquote>  “We do know that she had seen the post and made the connection,” Ms DeGroot said. \r\n</blockquote>\r\n<br><br><br>    \r\n<blockquote>“We’re really excited that Lady not only got adopted but she can bring a lot of attention to very unique animals in need and we have over 9,000 animals coming into our shelter every year so she really is this perfect poster kitty for animals in need.”  </blockquote>decor', 'A cat who lost her ears because of infection has received a new crocheted woolly pair – and a new home.  Lady In A Fur Coat was taken in by Dane County Humane Society (DCHS) after being found as a stray near Madison, Wisconsin, in December, but continued to suffer from health problems.<br><br><br>     Because her ear flaps were suffering from chronic infections and haematomas, blocking her ear canals, staff eventually had to take the decision to have them removed.', '2020-02-09 19:17:46', 44, 'images/news/big_photo15806694085049459.png', 'images/news/recent_photo158064267121146820-0-image-a-1_1574067311218.png'),
(37, 'Proba11', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum ut ex ut imperdiet. Maecenas id vehicula ipsum. Proin in fermentum ipsum. Ut cursus venenatis lacus, in finibus turpis elementum vel. Nulla mollis hendrerit justo in placerat. Pellentesque vitae sem vitae orci tempus viverra ac ut odio. Nullam cursus sapien et iaculis suscipit. Aliquam consectetur magna sed porta fermentum.</p>\r\n\r\n<p>Nunc mauris diam, aliquet a lorem sed, hendrerit vulputate ipsum. Ut at efficitur turpis, eu fermentum eros. Aenean facilisis metus a turpis mollis, in fermentum neque tempus. Maecenas feugiat erat venenatis efficitur placerat. Aliquam erat volutpat. Vestibulum dignissim ultricies ultrices. Proin ut eros pharetra, maximus lorem eget, dignissim urna. Sed tincidunt feugiat efficitur. Sed sit amet hendrerit dolor, at faucibus enim. Nam finibus tincidunt massa vitae dapibus. Nam vehicula tristique turpis, ac mollis erat. Maecenas auctor porttitor odio vestibulum blandit. Etiam scelerisque turpis eget hendrerit hendrerit.</p>', '<p><em>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit</em></p>', '2020-03-23 22:35:42', 44, 'images/news/1585000668_filter_photo158064267121146820-0-image-a-1_1574067311218.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id_news_category` int(100) NOT NULL,
  `id_news` int(100) NOT NULL,
  `id_category` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id_news_category`, `id_news`, `id_category`) VALUES
(5, 5, 6),
(96, 6, 9),
(95, 6, 6),
(94, 9, 5),
(93, 9, 4),
(12, 10, 7),
(13, 11, 3),
(14, 11, 5),
(15, 12, 5),
(16, 12, 8),
(40, 3, 3),
(64, 20, 3),
(63, 19, 3),
(65, 20, 5),
(61, 17, 3),
(66, 21, 3),
(67, 21, 5),
(68, 22, 3),
(69, 23, 3),
(70, 23, 6),
(71, 24, 3),
(73, 27, 5),
(74, 28, 5),
(75, 29, 5),
(76, 30, 5),
(77, 30, 9),
(78, 31, 6),
(79, 32, 6),
(80, 33, 4),
(81, 33, 5),
(82, 34, 4),
(83, 34, 9),
(84, 35, 4),
(85, 35, 9),
(86, 36, 6),
(92, 37, 5),
(89, 38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `news_tags`
--

CREATE TABLE `news_tags` (
  `id_news_tag` int(100) NOT NULL,
  `id_news` int(100) NOT NULL,
  `id_tag` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_tags`
--

INSERT INTO `news_tags` (`id_news_tag`, `id_news`, `id_tag`) VALUES
(3, 3, 3),
(4, 3, 4),
(6, 5, 6),
(7, 5, 7),
(93, 6, 11),
(92, 6, 10),
(91, 6, 9),
(90, 6, 8),
(89, 9, 15),
(88, 9, 14),
(16, 10, 16),
(17, 11, 17),
(18, 11, 18),
(20, 12, 20),
(49, 19, 43),
(48, 19, 42),
(45, 17, 39),
(46, 17, 40),
(50, 20, 44),
(51, 21, 45),
(52, 22, 46),
(53, 23, 47),
(54, 24, 48),
(55, 24, 49),
(57, 27, 18),
(58, 27, 38),
(59, 27, 43),
(60, 28, 14),
(61, 28, 18),
(62, 28, 38),
(63, 29, 48),
(64, 30, 38),
(65, 30, 43),
(66, 30, 48),
(67, 31, 43),
(68, 31, 48),
(69, 32, 43),
(70, 32, 48),
(71, 33, 42),
(72, 33, 47),
(73, 33, 48),
(74, 34, 18),
(75, 34, 38),
(76, 35, 8),
(77, 35, 14),
(78, 36, 48),
(79, 36, 49),
(95, 6, 47),
(94, 6, 46),
(87, 37, 49),
(83, 38, 8),
(84, 38, 11);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id_role` int(100) NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subsribe`
--

CREATE TABLE `subsribe` (
  `id_sub` int(100) NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subsribe`
--

INSERT INTO `subsribe` (`id_sub`, `email`) VALUES
(1, 'smijailovic015@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id_tag` int(100) NOT NULL,
  `tag` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id_tag`, `tag`) VALUES
(3, 'Jefrey Epstein'),
(4, 'Prince Andrew'),
(6, 'Apple'),
(7, 'Apple Rumours'),
(8, 'Apple'),
(9, 'Android'),
(10, 'WhatsApp'),
(11, 'iPhone'),
(14, 'England'),
(15, 'France'),
(16, 'Home'),
(17, 'Corona Virus'),
(18, 'U.S.'),
(20, 'Dishes'),
(33, 'Kica'),
(34, 'Pera'),
(38, 'add'),
(36, 'dasda'),
(39, 'SSEN'),
(40, 'power cut'),
(42, 'power line'),
(43, 'power cut'),
(44, 'U.S.'),
(45, 'U.S.'),
(46, 'U.S.'),
(47, 'U.S.'),
(48, 'U.S.'),
(49, 'cat'),
(50, 'U.S.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(100) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `id_role` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `password`, `firstName`, `lastName`, `token`, `active`, `created_at`, `id_role`) VALUES
(74, 'marko@gmail.com', '297361bce72f6d333fb1925239bf4237', 'Marko', 'Filipovic', NULL, NULL, '2020-03-18 14:16:55', 2),
(44, 'admin@gmail.com', 'e00cf25ad42683b3df678c61f42c6bda', 'Admin', 'Admin', 'cfdb936d9e3136d6de833644bd0f5a3378b3ba111580496522', 1, '2020-01-31 19:48:42', 1),
(46, 'peroo@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Peraa', 'Peric', '355be235a1723ea9b7c058a0092627324479aba81580672365', 1, '2020-02-02 20:39:25', 2),
(47, 'petar@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Pera', 'Markovic', '4293cede71aee6b58e3eacd6fa06bb6e42dc3ae71580845095', 1, '2020-02-04 20:38:15', 2),
(54, 'aaabaa@gmail.com', '1492e54c68c9de3921a2df89615da0de', 'Aaaa', 'Maaa', '89c35183afb1edc11d281719d2261bd6c07fc97c1581110742', 0, '2020-02-05 23:26:42', 2),
(62, 'filip.minic98@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Filip', 'Minic', 'a5b8acaf5cc2b2e7fa1b38d2e21ce85bf762db111581525344', 1, '2020-02-12 11:35:44', 2),
(73, 'smijailovic015@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Stefan', 'Mijailovic', NULL, NULL, '2020-03-15 15:11:27', 2),
(60, 'kris.markovic98@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Kristina', 'Markovic', '3767c661e7713484308ccd6cf6b1f65fcd6b8fd11581525306', 1, '2020-02-12 11:32:55', 2),
(75, 'uros@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Uros', 'Urosevic', NULL, NULL, '2020-03-18 14:45:53', 2),
(76, 'proba222@gmail.com', '34d4bb3964d7daef57bb61d074aee256', 'Filip', 'Petrovic', NULL, NULL, '2020-03-18 14:49:31', 2),
(68, 'sapicr23@gmail.com', 'ce635f9aa9631c7286cd13b5ed9cfc10', 'Petar', 'Petrovic', 'b0b4a74398d66c4663bd230d0068a1d6efc94e181582390104', 1, '2020-02-22 11:46:52', 2),
(69, 'proba@gmail.com', 'abd7911a7b95ee5a74b70c5dbf9cb0cb', 'Proba', 'Proba', NULL, NULL, '2020-03-14 18:10:56', 2),
(70, 'proba2@gmail.com', 'abd7911a7b95ee5a74b70c5dbf9cb0cb', 'Proba2', 'Proba2', NULL, NULL, '2020-03-14 19:21:52', 2),
(71, 'proba3@gmail.com', 'abd7911a7b95ee5a74b70c5dbf9cb0cb', 'Proba3', 'Proba3', NULL, NULL, '2020-03-15 12:08:36', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `comment_news` (`id_user`),
  ADD KEY `bbbabaab` (`id_news`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`),
  ADD KEY `news_user` (`id_user`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id_news_category`),
  ADD KEY `news_rr` (`id_news`),
  ADD KEY `category_rr` (`id_category`);

--
-- Indexes for table `news_tags`
--
ALTER TABLE `news_tags`
  ADD PRIMARY KEY (`id_news_tag`),
  ADD KEY `news_r` (`id_news`),
  ADD KEY `tags_r` (`id_tag`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `subsribe`
--
ALTER TABLE `subsribe`
  ADD PRIMARY KEY (`id_sub`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `user_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id_news_category` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `news_tags`
--
ALTER TABLE `news_tags`
  MODIFY `id_news_tag` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id_role` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subsribe`
--
ALTER TABLE `subsribe`
  MODIFY `id_sub` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id_tag` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
