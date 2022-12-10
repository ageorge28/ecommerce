-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 03:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brands` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `products` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupons` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `returns` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orders` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reports` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `users` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminuserrole` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` int(25) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `brands`, `categories`, `products`, `slider`, `coupons`, `shipping`, `blog`, `settings`, `returns`, `reviews`, `orders`, `stock`, `reports`, `users`, `adminuserrole`, `type`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@gmail.com', '2021-11-25 11:56:44', '$2y$10$FxmjZcr.ZZgSMF4nFLsnFOmnmQdp/c2HnIienxobucN1MS1IhRmoC', '12345678', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 'yg3oCIVwQYnBVy5uag2R5cZeYDDbHUdzmR0A5Xy4slirHBvqeK5z22QVPk61', NULL, '202112021035AnandWhatsApp.png', '2021-11-25 11:56:44', '2022-03-03 21:25:30'),
(2, 'Test', 'test@gmail.com', NULL, '$2y$10$kjBWMtcHn2pN4a94t8.yeuZLVtyyNC0uw2EaNYGfFhiii94jD4NKu', '12345678', NULL, '1', NULL, '1', NULL, NULL, '1', NULL, '1', NULL, NULL, '1', NULL, '1', '1', 2, NULL, NULL, '1720297107743015.png', '2021-12-27 06:51:16', '2021-12-27 08:28:26'),
(4, 'Hello', 'hello@gmail.com', NULL, '$2y$10$ZT6Dy/qKouhhcai6TDqzh.knWx2nvbOaA8DBWWcPDCtmNRRIYu/BC', '12345678', NULL, NULL, NULL, '1', NULL, '1', NULL, NULL, '1', NULL, NULL, '1', NULL, '1', NULL, 2, NULL, NULL, '1720299607083928.jpg', '2021-12-27 08:45:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blogcategory_id` int(10) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory_id`, `title_en`, `title_hin`, `slug_en`, `slug_hin`, `image`, `description_en`, `description_hin`, `created_at`, `updated_at`) VALUES
(2, 5, 'These CBD Gummies Are Full Spectrum And Flavorful', 'ये सीबीडी गमियां पूर्ण स्पेक्ट्रम और स्वादिष्ट हैं', 'these-cbd-gummies-are-full-spectrum-and-flavorful', 'ये-सीबीडी-गमियां-पूर्ण-स्पेक्ट्रम-और-स्वादिष्ट-हैं', '1719862734784772.png', '<p>Here at CBD For The People, we don&#39;t release a product until certain that it can be the best option on the market. For years, our customers have been asking us why we&#39;ve yet to introduce gummies to our product lineup, despite gummies being one of the most popular types of hemp products since cannabidiol first hit the scene years ago. &nbsp;</p>\r\n\r\n<p>Noids<br />\r\nWell, our answer is simple. Our company has been spending years hard at work figuring out how to ensure that our gummies outshine the competition by being the most effective, delicious and high-quality options on the market. &nbsp;</p>\r\n\r\n<p>And, at long last, we can finally introduce to you our Gummy NOIDS, which we can confidently say are unlike any other CBD gummies that you will find today. These gummies result from amazing dedication to ensuring that the formula itself meets our incredibly high standards.</p>\r\n\r\n<p>What makes CBD FTP Gummy NOIDS the real deal?</p>\r\n\r\n<p>CBD FTP Gummy NOIDS is the perfect way to consume hemp each day in edible form, and they have what it takes to give you the hemp experience you&#39;re looking for.</p>\r\n\r\n<p><br />\r\nFull spectrum hemp: FTP Gummy NOIDS are made with full-spectrum hemp extract, which shouldn&#39;t surprise anyone who has been a customer of ours for a while. We only use full-spectrum hemp extract because research has shown that it is simply the best way to consume the hemp plant. Full-spectrum hemp naturally contains every naturally occurring chemical compound in the hemp plant&#39;s buds; each compound is incredibly useful in its way, playing an important role in delivering desirable properties to the body.</p>\r\n\r\n<p>Full-spectrum hemp extract also offers the entourage effect, which has to do with the synergistic advantage of taking all of the compounds together at once. Full-spectrum hemp is generally more effective, as each compound boosts the bioavailability of the others through this natural synergistic process.</p>\r\n\r\n<p>Dark and unrefined: CBD For The People believes that hemp should be unrefined and uncut, which is why we do not engage in all of the purification processes used by other companies. Purification sounds good in theory, but its real aim is to weaken hemp&#39;s natural taste and give it an attractive color to appeal to the masses more. These processes ultimately dilute the plant&#39;s chemical compounds and take away from the entourage effect. &nbsp;</p>\r\n\r\n<p>Like our other products, these gummies are dark and unrefined, giving you a stronger hemp experience that is more likely to provide the results you&#39;re looking for. Overall, the processing is minimal so that you are experiencing hemp in a way that nature intended.</p>\r\n\r\n<p><br />\r\nVegan formula: The vast majority of hemp gummies on the market are non-vegan as they contain gelatin. We know that many of our customers are vegan, and we didn&#39;t want to exclude them from the ability to enjoy this product. Therefore, FTP is proud to introduce a fully vegan gummy formula that does not contain any animal-derived ingredients whatsoever.</p>\r\n\r\n<p>Delicious flavors: A lot of our hard work went into developing the flavor of our CBD gummies. Because we use dark, unrefined hemp extract, our CBD is known for having a stronger, &lsquo;planty&rsquo; taste. Many customers love our products for this reason, as it makes them feel like they&#39;re getting more out of each dose. But, if one product is supposed to be appealing to the taste buds, it would be gummies.</p>\r\n\r\n<p>We couldn&#39;t be prouder of the fact that our gummies are mouthwatering. We offer three flavors: watermelon, strawberry, and mango. Each one tastes exactly like biting into the real fruit, with the perfect level of sweetness and juiciness. You will be positively dazzled by the taste of these gummies, as they are the fruits (ha!) of painstakingly taste-testing recipes until we were satisfied with the result.</p>\r\n\r\n<p>Multiple quantities: FTP Gummy NOIDS come in three distinct quantities according to bottle size so that you can select how many gummies to purchase at one time based on the unique nature of your hemp routine.</p>\r\n\r\n<p><br />\r\nAll-natural ingredients: Gummy NOIDS boasts an all-natural, plant-based formula because we believe that natural is always better. We do not use artificial flavoring or synthetically derived sweeteners that can make you think twice about taking these gummies daily. Mother nature provides us with the best ingredients, and we are happy to deliver some of the cleanest gummies on the market, period.</p>\r\n\r\n<p>Lab-tested: Like all of the products offered by CBD For The People, NOIDS Gummies contain hemp extract that has been thoroughly tested by a licensed third-party laboratory, who works hard to carefully analyze each sample of our hemp to ensure that it has the perfect purity level, chemical composition, and general quality that our customers deserve. These lab reports are fully accessible on our website.</p>\r\n\r\n<p>25mg per piece: Each gummy contains 25 milligrams of hemp per piece, which is the perfect incremental amount for someone who wants to experience hemp&#39;s effects throughout the day.</p>\r\n\r\n<p>How to Take Our Gummy NOIDS</p>\r\n\r\n<p>Gummies are a very user-friendly</p>', '<p>यहां सीबीडी फॉर द पीपल में, हम किसी उत्पाद को तब तक जारी नहीं करते जब तक कि यह सुनिश्चित न हो जाए कि यह बाजार पर सबसे अच्छा विकल्प हो सकता है। वर्षों से, हमारे ग्राहक हमसे पूछ रहे हैं कि हमने अभी तक अपने उत्पाद लाइनअप में गमियों को क्यों नहीं पेश किया है, जबकि गमीज़ सबसे लोकप्रिय प्रकार के भांग उत्पादों में से एक है क्योंकि कैनबिडिओल पहली बार दृश्य में आया था।</p>\r\n\r\n<p>नोइड्स<br />\r\nखैर, हमारा जवाब आसान है। हमारी कंपनी वर्षों से कड़ी मेहनत कर रही है यह पता लगाने में कि कैसे यह सुनिश्चित किया जाए कि हमारे गमीज़ बाज़ार में सबसे प्रभावी, स्वादिष्ट और उच्च गुणवत्ता वाले विकल्प बनकर प्रतिस्पर्धा को मात दें।</p>\r\n\r\n<p>और, अंत में, हम अंत में आपको हमारे गमी नोइड्स से परिचित करा सकते हैं, जिसे हम विश्वास के साथ कह सकते हैं कि यह किसी भी अन्य सीबीडी गमियों के विपरीत है जो आपको आज मिलेंगे। ये गमियां यह सुनिश्चित करने के लिए अद्भुत समर्पण का परिणाम हैं कि यह फॉर्मूला हमारे अविश्वसनीय रूप से उच्च मानकों को पूरा करता है।</p>\r\n\r\n<p>सीबीडी एफ़टीपी गमी नोइड्स असली सौदा क्या है?</p>\r\n\r\n<p>सीबीडी एफ़टीपी गमी नोइड्स खाने योग्य रूप में हर दिन भांग का सेवन करने का एक सही तरीका है, और आपके पास वह सब कुछ है जो आपको भांग का अनुभव देने के लिए आवश्यक है।</p>\r\n\r\n<p><br />\r\nपूर्ण स्पेक्ट्रम भांग: एफ़टीपी गमी NOIDS पूर्ण-स्पेक्ट्रम भांग के अर्क के साथ बनाए जाते हैं, जो किसी को भी आश्चर्यचकित नहीं करना चाहिए जो कुछ समय के लिए हमारा ग्राहक रहा है। हम केवल पूर्ण-स्पेक्ट्रम भांग के अर्क का उपयोग करते हैं क्योंकि शोध से पता चला है कि यह भांग के पौधे का उपभोग करने का सबसे अच्छा तरीका है। पूर्ण-स्पेक्ट्रम भांग में स्वाभाविक रूप से भांग के पौधे की कलियों में स्वाभाविक रूप से होने वाला हर रासायनिक यौगिक होता है; प्रत्येक यौगिक अपने तरीके से अविश्वसनीय रूप से उपयोगी है, जो शरीर को वांछनीय गुण प्रदान करने में महत्वपूर्ण भूमिका निभाता है।</p>\r\n\r\n<p>पूर्ण-स्पेक्ट्रम भांग का अर्क भी प्रतिवेश प्रभाव प्रदान करता है, जिसका एक ही बार में सभी यौगिकों को एक साथ लेने के सहक्रियात्मक लाभ के साथ करना है। फुल-स्पेक्ट्रम गांजा आम तौर पर अधिक प्रभावी होता है, क्योंकि प्रत्येक यौगिक इस प्राकृतिक सहक्रियात्मक प्रक्रिया के माध्यम से दूसरों की जैव उपलब्धता को बढ़ाता है।</p>\r\n\r\n<p>डार्क और अपरिष्कृत: सीबीडी फॉर द पीपल का मानना ​​है कि गांजा अपरिष्कृत और बिना काटा होना चाहिए, यही कारण है कि हम अन्य कंपनियों द्वारा उपयोग की जाने वाली सभी शुद्धिकरण प्रक्रियाओं में शामिल नहीं होते हैं। शुद्धिकरण सिद्धांत में अच्छा लगता है, लेकिन इसका वास्तविक उद्देश्य भांग के प्राकृतिक स्वाद को कमजोर करना और इसे एक आकर्षक रंग देना है ताकि जनता को अधिक आकर्षित किया जा सके। ये प्रक्रियाएं अंततः पौधे के रासायनिक यौगिकों को पतला करती हैं और प्रतिवेश प्रभाव से दूर ले जाती हैं।</p>\r\n\r\n<p>हमारे अन्य उत्पादों की तरह, ये गमियां गहरे रंग की और अपरिष्कृत हैं, जो आपको एक मजबूत भांग का अनुभव प्रदान करती हैं जो आपके द्वारा खोजे जा रहे परिणाम प्रदान करने की अधिक संभावना है। कुल मिलाकर, प्रसंस्करण न्यूनतम है ताकि आप प्रकृति के इरादे से भांग का अनुभव कर सकें।</p>\r\n\r\n<p><br />\r\nवीगन फॉर्मूला: बाजार में मौजूद गांजा की अधिकांश गमियां नॉन-वेज होती हैं, क्योंकि इनमें जिलेटिन होता है। हम जानते हैं कि हमारे कई ग्राहक शाकाहारी हैं, और हम उन्हें इस उत्पाद का आनंद लेने की क्षमता से बाहर नहीं करना चाहते थे। इसलिए, एफ़टीपी को पूरी तरह से शाकाहारी चिपचिपा फार्मूला पेश करते हुए गर्व हो रहा है जिसमें किसी भी पशु-व्युत्पन्न सामग्री शामिल नहीं है।</p>\r\n\r\n<p>स्वादिष्ट स्वाद: हमारी सीबीडी गमियों के स्वाद को विकसित करने में हमारी बहुत मेहनत लगी। चूंकि हम गहरे, अपरिष्कृत भांग के अर्क का उपयोग करते हैं, इसलिए हमारे सीबीडी को एक मजबूत, &#39;पौधे&#39; स्वाद के लिए जाना जाता है। कई ग्राहक इस कारण से हमारे उत्पादों को पसंद करते हैं, क्योंकि इससे उन्हें ऐसा लगता है कि वे प्रत्येक खुराक से अधिक प्राप्त कर रहे हैं। लेकिन, अगर एक उत्पाद को स्वाद कलियों के लिए आकर्षक माना जाता है, तो वह गमी होगा।</p>\r\n\r\n<p>हम इस तथ्य पर गर्व नहीं कर सकते कि हमारे गमियां मुंह में पानी ला रही हैं। हम तीन स्वाद प्रदान करते हैं: तरबूज, स्ट्रॉबेरी और आम। मिठास और रस के सही स्तर के साथ, हर एक का स्वाद बिल्कुल असली फल को काटने जैसा होता है। आप इन गमी के स्वाद से सकारात्मक रूप से चकाचौंध हो जाएंगे, क्योंकि वे परिणाम से संतुष्ट होने तक श्रमसाध्य स्वाद-परीक्षण व्यंजनों के फल (हे!) हैं।</p>\r\n\r\n<p>कई मात्राएँ: FTP Gummy NOIDS बोतल के आकार के अनुसार तीन अलग-अलग मात्रा में आता है ताकि आप अपने भांग की दिनचर्या की अनूठी प्रकृति के आधार पर एक बार में कितनी गमियां खरीद सकें, यह चुन सकते हैं।</p>\r\n\r\n<p><br />\r\nपूरी तरह से प्राकृतिक सामग्री: गमी NOIDS में पूरी तरह से प्राकृतिक, पौधों पर आधारित फ़ॉर्मूला है क्योंकि हमारा मानना ​​है कि प्राकृतिक हमेशा बेहतर होता है। हम कृत्रिम स्वाद या कृत्रिम रूप से व्युत्पन्न मिठास का उपयोग नहीं करते हैं जो आपको इन गमियों को प्रतिदिन लेने के बारे में दो बार सोचने पर मजबूर कर सकते हैं। प्रकृति माँ हमें सर्वोत्तम सामग्री प्रदान करती है, और हम बाजार में कुछ सबसे साफ गमियों को वितरित करके खुश हैं।</p>\r\n\r\n<p>लैब-परीक्षण: सीबीडी फॉर द पीपल द्वारा पेश किए गए सभी उत्पादों की तरह, NOIDS गमीज़ में भांग का अर्क होता है जिसे लाइसेंस प्राप्त तृतीय-पक्ष प्रयोगशाला द्वारा पूरी तरह से परीक्षण किया गया है, जो यह सुनिश्चित करने के लिए हमारे भांग के प्रत्येक नमूने का सावधानीपूर्वक विश्लेषण करने के लिए कड़ी मेहनत करता है। सही शुद्धता स्तर, रासायनिक संरचना, और सामान्य गुणवत्ता जो हमारे ग्राहकों के लायक है। ये लैब रिपोर्ट हमारी वेबसाइट पर पूरी तरह से उपलब्ध हैं।</p>\r\n\r\n<p>25mg प्रति पीस: प्रत्येक गमी में प्रति पीस 25 मिलीग्राम भांग होता है, जो किसी ऐसे व्यक्ति के लिए एकदम सही वृद्धिशील राशि है जो पूरे दिन भांग के प्रभाव का अनुभव करना चाहता है।</p>\r\n\r\n<p>हमारा चिपचिपा नोइड्स कैसे लें</p>\r\n\r\n<p>गमियां बहुत उपयोगकर्ता के अनुकूल होती हैं</p>', '2021-12-22 13:01:58', NULL),
(3, 5, 'The Definitive Guide to Affiliate Marketing', 'संबद्ध विपणन के लिए निश्चित मार्गदर्शिका', 'the-definitive-guide-to-affiliate-marketing', 'संबद्ध-विपणन-के-लिए-निश्चित-मार्गदर्शिका', '1719863053379059.jpg', '<p>Whether you&rsquo;re an entrepreneur, aspiring blogger, or global enterprise CEO, content marketing is an excellent way to put your brand on the map in every corner of the internet.</p>\r\n\r\n<p>But affiliate marketing takes your earning potential to the next level.</p>\r\n\r\n<p>In fact, affiliate marketing is now responsible for driving 16% of online sales in a world where 81% of consumers research products before buying.</p>\r\n\r\n<p>The question is:</p>\r\n\r\n<p>How will your business take advantage of an affiliate income stream?</p>\r\n\r\n<p>Well, this is our definitive guide to affiliate marketing &mdash; starting from square one!</p>\r\n\r\n<p><br />\r\nWhat Is Affiliate Marketing?<br />\r\nAffiliate marketing is passive income at its finest. It&rsquo;s a commission-based model where a website owner (known as an &ldquo;affiliate&rdquo; or &ldquo;publisher&rdquo;) promotes another retailer&rsquo;s products or services in exchange for a cut.</p>\r\n\r\n<p>Here&rsquo;s how it works:</p>\r\n\r\n<p>A publisher promotes a product on their blog, Instagram &mdash; really anywhere their followers interact with them.<br />\r\nThey include an &ldquo;affiliate link&rdquo; to a page where readers can purchase the product.<br />\r\nWhen a user clicks the link, it saves a tracking cookie on their device, set to expire on a certain date (sometimes up to 30 days).<br />\r\nThe affiliate program or network attributes any purchases linked to that tracking cookie.<br />\r\nAnd, when they do &hellip;</p>\r\n\r\n<p>The affiliate earns a commission or a percentage of the sale on any products they help sell. After all, if it weren&rsquo;t for your savvy marketing efforts, that sale wouldn&rsquo;t have happened!</p>\r\n\r\n<p>Types of Affiliate Marketing<br />\r\n35% of affiliate marketers pull in $20,000+ per year.</p>\r\n\r\n<p>(Hence, the travel bloggers who brag about sipping Mojitos on the beach in the Caribbean while the rest of us slave away at 9-to-5 desk jobs.)</p>\r\n\r\n<p>via GIPHY</p>\r\n\r\n<p>What nobody tells you is that affiliate commissions come in a few shapes and sizes, each with its own advantages.</p>\r\n\r\n<p>The three most common structures include:</p>\r\n\r\n<p>Per Sale<br />\r\nIn the per-sale structure, you earn a percentage of the sales price for every sale your affiliate links generate. This is the most popular type of affiliate marketing and carries the most earning potential.</p>\r\n\r\n<p>&hellip;as long as you promote high-ticket items.</p>\r\n\r\n<p>A 5% flat rate is chump change if you&rsquo;re promoting products with $5 price tags. That&rsquo;ll afford you a single gumball (yipee). But a 5% commission on a $2,000 flat-screen TV bumps your earnings up to a much sweeter $100.</p>\r\n\r\n<p>Per Click<br />\r\nThe pay-per-click (PPC) method is equivalent to &ldquo;renting&rdquo; out ad space on your website. When a visitor clicks the ad and redirects to a retailer&rsquo;s site, the network pays you for the traffic, often at a per-1000-visitor rate.</p>\r\n\r\n<p>PPC ads are a goldmine for websites drawing monthly traffic in the seven figures. Even if you partner with a network that pays a measly $15 for every 1,000 clicks, a 10% conversion rate will yield $1,500/month!</p>\r\n\r\n<p>Per Lead<br />\r\nThe per-lead strategy is popular in the service industry, meaning commission doesn&rsquo;t rely on driving sales to a company&rsquo;s products. A &ldquo;lead&rdquo; could be a user signing up for a free trial, scheduling a call, or creating an account.</p>\r\n\r\n<p>Per-lead affiliate programs tend to be stingier with their rates. But with a lower bar to hurdle and the word &ldquo;FREE&rdquo; attached to offers, visitors are more willing to bite.</p>\r\n\r\n<p>Commission rates could be a few cents, but if you recruit a new customer, that rate could skyrocket beyond $100 per lead!</p>\r\n\r\n<p>How Much Can You Earn With Affiliate Marketing?<br />\r\nThe top 3% of affiliates pocket upwards of $150,000/year in purely passive income. But for the average affiliate, a salary of $20,000/year &mdash; or about $1,667/month &mdash; is more realistic.</p>\r\n\r\n<p>We&rsquo;ll touch on how to maximize your earning potential later on!</p>\r\n\r\n<p>How to Start Affiliate Marketing<br />\r\nWhether you&rsquo;re the brains behind a new startup or planning to monetize your company&rsquo;s current website, all paths lead to affiliate marketing.</p>\r\n\r\n<p>In fact, 84% of your fellow publishers and 81% of all advertisers are already members of the affiliate marketing scene.</p>\r\n\r\n<p>(Hey, we&rsquo;re not one to encourage following the crowd, especially after the whole Tide Pod fiasco of 2017. But the facts speak for themselves!)</p>\r\n\r\n<p>So how do you turn your website into a passive-income machine? Or your Instagram business profile? Or even email marketing campaigns?</p>\r\n\r\n<p>Below, we&rsquo;ll reveal our step-by-step beginner&rsquo;s guide to affiliate marketing, from choosing a blog niche to boosting your website conversions.</p>\r\n\r\n<p>1. Find a Blog Niche<br />\r\nThere&rsquo;s no definitive rule in content marketing that says you need a blog niche. But without one, you&rsquo;re shouting into the Google void, and your message is being drowned out in the sea of its 130 trillion pages (literally).</p>\r\n\r\n<p>We talk more about how to narrow down blog niches in our &ldquo;What to Blog About&rdquo; article. But let&rsquo;s put an affiliate marketing spin on the process.</p>\r\n\r\n<p>When choosing a niche, find one that:</p>\r\n\r\n<p>Doesn&rsquo;t Have Insane Competition<br />\r\nThe search volume shouldn&rsquo;t be so low that monthly traffic never exceeds triple digits. Nor should it be so competitive that you&rsquo;re stranded in Google Wasteland somewhere beyond page 20.</p>', '<p>चाहे आप एक उद्यमी हों, आकांक्षी ब्लॉगर हों, या वैश्विक उद्यम सीईओ हों, सामग्री विपणन आपके ब्रांड को इंटरनेट के हर कोने में मानचित्र पर रखने का एक शानदार तरीका है।</p>\r\n\r\n<p>लेकिन एफिलिएट मार्केटिंग आपकी कमाई की क्षमता को अगले स्तर तक ले जाती है।</p>\r\n\r\n<p>वास्तव में, सहबद्ध विपणन अब दुनिया में 16% ऑनलाइन बिक्री को चलाने के लिए जिम्मेदार है जहां 81% उपभोक्ता उत्पादों को खरीदने से पहले शोध करते हैं।</p>\r\n\r\n<p>सवाल यह है की:</p>\r\n\r\n<p>आपका व्यवसाय संबद्ध आय स्ट्रीम का लाभ कैसे उठाएगा?</p>\r\n\r\n<p>खैर, यह सहबद्ध विपणन के लिए हमारी निश्चित मार्गदर्शिका है - वर्ग एक से शुरू!</p>\r\n\r\n<p><br />\r\nएफिलिएट मार्केटिंग क्या है?<br />\r\nएफिलिएट मार्केटिंग अपने चरम पर निष्क्रिय आय है। यह एक कमीशन-आधारित मॉडल है जहां एक वेबसाइट स्वामी (&quot;सहबद्ध&quot; या &quot;प्रकाशक&quot; के रूप में जाना जाता है) कटौती के बदले में किसी अन्य खुदरा विक्रेता के उत्पादों या सेवाओं को बढ़ावा देता है।</p>\r\n\r\n<p>यह ऐसे काम करता है:</p>\r\n\r\n<p>एक प्रकाशक अपने ब्लॉग, इंस्टाग्राम पर एक उत्पाद का प्रचार करता है - वास्तव में कहीं भी उनके अनुयायी उनके साथ बातचीत करते हैं।<br />\r\nवे एक पृष्ठ पर &quot;सहबद्ध लिंक&quot; शामिल करते हैं जहां पाठक उत्पाद खरीद सकते हैं।<br />\r\nजब कोई उपयोगकर्ता लिंक पर क्लिक करता है, तो यह उनके डिवाइस पर एक ट्रैकिंग कुकी सहेजता है, जिसे एक निश्चित तिथि (कभी-कभी 30 दिनों तक) पर समाप्त होने के लिए सेट किया जाता है।<br />\r\nसंबद्ध प्रोग्राम या नेटवर्क उस ट्रैकिंग कुकी से जुड़ी किसी भी खरीदारी का श्रेय देता है।<br />\r\nऔर, जब वे करते हैं ...</p>\r\n\r\n<p>सहयोगी किसी भी उत्पाद को बेचने में मदद करने के लिए कमीशन या बिक्री का प्रतिशत कमाता है। आखिरकार, अगर यह आपके समझदार मार्केटिंग प्रयासों के लिए नहीं होता, तो वह बिक्री नहीं होती!</p>\r\n\r\n<p>संबद्ध विपणन के प्रकार<br />\r\n35% सहबद्ध विपणक प्रति वर्ष $20,000+ में खींचते हैं।</p>\r\n\r\n<p>(इसलिए, यात्रा ब्लॉगर जो कैरिबियन में समुद्र तट पर मोजिटोस की चुस्की लेने के बारे में डींग मारते हैं, जबकि हममें से बाकी लोग 9-से-5 डेस्क की नौकरियों से दूर हो जाते हैं।)</p>\r\n\r\n<p>GIPHY . के माध्यम से</p>\r\n\r\n<p>कोई भी आपको यह नहीं बताता है कि संबद्ध कमीशन कुछ आकार और आकार में आते हैं, प्रत्येक के अपने फायदे हैं।</p>\r\n\r\n<p>तीन सबसे आम संरचनाओं में शामिल हैं:</p>\r\n\r\n<p>प्रति बिक्री<br />\r\nप्रति-बिक्री संरचना में, आप अपने संबद्ध लिंक द्वारा उत्पन्न प्रत्येक बिक्री के लिए बिक्री मूल्य का एक प्रतिशत कमाते हैं। यह सहबद्ध विपणन का सबसे लोकप्रिय प्रकार है और सबसे अधिक कमाई की क्षमता रखता है।</p>\r\n\r\n<p>...जब तक आप उच्च-टिकट वाली वस्तुओं का प्रचार करते हैं।</p>\r\n\r\n<p>यदि आप $5 मूल्य टैग वाले उत्पादों का प्रचार कर रहे हैं, तो 5% फ्लैट दर एक बड़ा बदलाव है। वह आपको एक भी गमबेल (yipee) देगा। लेकिन $2,000 फ्लैट स्क्रीन टीवी पर 5% कमीशन आपकी कमाई को 100 डॉलर तक बढ़ा देता है।</p>\r\n\r\n<p>प्रति क्लिक<br />\r\nभुगतान-प्रति-क्लिक (पीपीसी) पद्धति आपकी वेबसाइट पर विज्ञापन स्थान को &quot;किराए पर लेने&quot; के बराबर है। जब कोई विज़िटर विज्ञापन पर क्लिक करता है और किसी रिटेलर की साइट पर रीडायरेक्ट करता है, तो नेटवर्क आपको ट्रैफ़िक के लिए भुगतान करता है, अक्सर प्रति-1000-विज़िटर दर पर।</p>\r\n\r\n<p>पीपीसी विज्ञापन सात अंकों में मासिक ट्रैफ़िक खींचने वाली वेबसाइटों के लिए एक सोने की खान हैं। यहां तक ​​कि अगर आप किसी ऐसे नेटवर्क के साथ साझेदारी करते हैं जो प्रत्येक 1,000 क्लिक के लिए मात्र $15 का भुगतान करता है, तो 10% रूपांतरण दर से $1,500/माह मिलेगा!</p>\r\n\r\n<p>प्रति लीड<br />\r\nप्रति-लीड रणनीति सेवा उद्योग में लोकप्रिय है, जिसका अर्थ है कि कमीशन किसी कंपनी के उत्पादों की बिक्री बढ़ाने पर निर्भर नहीं करता है। एक &quot;लीड&quot; एक नि: शुल्क परीक्षण के लिए साइन अप करने वाला, कॉल शेड्यूल करने वाला या खाता बनाने वाला उपयोगकर्ता हो सकता है।</p>\r\n\r\n<p>प्रति-लीड सहबद्ध कार्यक्रम अपनी दरों के साथ कंजूस होते हैं। लेकिन बाधाओं को कम करने और ऑफ़र से जुड़े &quot;मुफ़्त&quot; शब्द के साथ, आगंतुक काटने के लिए अधिक इच्छुक हैं।</p>\r\n\r\n<p>कमीशन की दरें कुछ सेंट हो सकती हैं, लेकिन यदि आप एक नए ग्राहक की भर्ती करते हैं, तो वह दर $100 प्रति लीड से अधिक हो सकती है!</p>\r\n\r\n<p>Affiliate Marketing से आप कितना कमा सकते हैं?<br />\r\nशीर्ष 3% सहयोगी विशुद्ध रूप से निष्क्रिय आय में $ 150,000 / वर्ष से ऊपर की ओर जेब करते हैं। लेकिन औसत सहयोगी के लिए, $20,000/वर्ष का वेतन - या लगभग $1,667/माह - अधिक यथार्थवादी है।</p>\r\n\r\n<p>हम बाद में आपकी कमाई की क्षमता को अधिकतम करने के तरीके के बारे में बात करेंगे!</p>\r\n\r\n<p>Affiliate Marketing कैसे शुरू करें<br />\r\nचाहे आप एक नए स्टार्टअप के पीछे दिमाग हों या अपनी कंपनी की वर्तमान वेबसाइट का मुद्रीकरण करने की योजना बना रहे हों, सभी रास्ते संबद्ध विपणन की ओर ले जाते हैं।</p>\r\n\r\n<p>वास्तव में, आपके 84% साथी प्रकाशक और 81% विज्ञापनदाता पहले से ही संबद्ध विपणन परिदृश्य के सदस्य हैं।</p>\r\n\r\n<p>(अरे, हम भीड़ का अनुसरण करने के लिए प्रोत्साहित करने वाले नहीं हैं, खासकर 2017 के पूरे टाइड पॉड के बाद। लेकिन तथ्य अपने लिए बोलते हैं!)</p>\r\n\r\n<p>तो आप अपनी वेबसाइट को एक निष्क्रिय-आय मशीन में कैसे बदलते हैं? या आपका इंस्टाग्राम बिजनेस प्रोफाइल? या ईमेल मार्केटिंग अभियान भी?</p>\r\n\r\n<p>नीचे, हम आपके वेबसाइट रूपांतरणों को बढ़ावा देने के लिए ब्लॉग आला चुनने से संबद्ध विपणन के लिए हमारे चरण-दर-चरण शुरुआती मार्गदर्शिका को प्रकट करेंगे।</p>\r\n\r\n<p>1. एक ब्लॉग खोजें Niche<br />\r\nसामग्री विपणन में कोई निश्चित नियम नहीं है जो कहता है कि आपको ब्लॉग आला की आवश्यकता है। लेकिन एक के बिना, आप Google शून्य में चिल्ला रहे हैं, और आपका संदेश 130 ट्रिलियन पृष्ठों (शाब्दिक) के समुद्र में डूब रहा है।</p>\r\n\r\n<p>हम अपने &quot;ब्लॉग के बारे में क्या करें&quot; लेख में ब्लॉग निचे को कम करने के तरीके के बारे में अधिक बात करते हैं। लेकिन चलिए इस प्रक्रिया में एक संबद्ध विपणन स्पिन डालते हैं।</p>\r\n\r\n<p>एक आला चुनते समय, वह खोजें:</p>\r\n\r\n<p>पागल प्रतिस्पर्धा नहीं है<br />\r\nखोज मात्रा इतनी कम नहीं होनी चाहिए कि मासिक ट्रैफ़िक कभी भी तीन अंकों से अधिक न हो। न ही यह इतना प्रतिस्पर्धी होना चाहिए कि आप पृष्ठ 20 से परे कहीं न कहीं Google बंजर भूमि में फंसे हों।</p>', '2021-12-22 13:07:01', NULL),
(4, 4, 'Entrepreneur Middle East and Fintech Saudi Release A Special Report On The Fintech Industry In Saudi Arabia', 'उद्यमी मध्य पूर्व और फिनटेक सऊदी ने सऊदी अरब में फिनटेक उद्योग पर एक विशेष रिपोर्ट जारी की', 'entrepreneur-middle-east-and-fintech-saudi-release-a-special-report-on-the-fintech-industry-in-saudi-arabia', 'उद्यमी-मध्य-पूर्व-और-फिनटेक-सऊदी-ने-सऊदी-अरब-में-फिनटेक-उद्योग-पर-एक-विशेष-रिपोर्ट-जारी-की', '1719863206232544.jpg', '<p>Entrepreneur Middle East has released a special report on the state of fintech industry in Saudi Arabia to help entrepreneurs and innovators to define and refine their fintech growth strategies.&nbsp;</p>\r\n\r\n<p>Shutterstock<br />\r\nPowered by Fintech Saudi, an entity launched in 2018 by the Saudi Central Bank and the Capital Market Authority, the special report, An Ultimate Guide To Fintech In The Kingdom Of Saudi Arabia, can be downloaded here.&nbsp;</p>\r\n\r\n<p>As an emerging fintech ecosystem, Saudi Arabia is slowly becoming the ultimate sweet spot for entrepreneurs, investors, and major opportunity seekers, with the report stating that the industry is young enough to allow first-mover advantages and reaping significant rewards.&nbsp;</p>\r\n\r\n<p>Although there have been a number of fintech success stories in Saudi Arabia, including digital payments solution developer STC becoming the region&#39;s first unicorn in November 2020, the report states that &quot;Saudi Arabia requires a special touch, a deep understanding of local context and macroeconomic influences.&quot;</p>\r\n\r\n<p><br />\r\nHowever, Saudi Arabia has developed a supportive infrastructure and has recently started creating a more friendly environment for foreign investment and outside-in entrepreneurship. Another benefit of starting up a fintech business in the kingdom is in potentially having better access to capital when compared to other parts of the world- the report states that the funding raised for fintech companies in Saudi Arabia between 2020 and H1 2021 was over US$500 million, constituting 55% of the total funds raised since fintech fundraising has been monitored in the past decade.&nbsp;</p>\r\n\r\n<p>These are some of the reasons why seizing fintech opportunities in Saudi Arabia should be on your radar. For more exclusive insights and data, download the special report, An Ultimate Guide To Fintech In The Kingdom Of Saudi Arabia, here.&nbsp;</p>', '<p>उद्यमी मध्य पूर्व ने सऊदी अरब में फिनटेक उद्योग की स्थिति पर एक विशेष रिपोर्ट जारी की है ताकि उद्यमियों और नवप्रवर्तकों को उनकी फिनटेक विकास रणनीतियों को परिभाषित और परिष्कृत करने में मदद मिल सके।</p>\r\n\r\n<p>Shutterstock<br />\r\nसऊदी सेंट्रल बैंक और कैपिटल मार्केट अथॉरिटी द्वारा 2018 में लॉन्च की गई एक इकाई फिनटेक सऊदी द्वारा संचालित, विशेष रिपोर्ट, सऊदी अरब के साम्राज्य में फिनटेक के लिए एक अंतिम गाइड, यहां डाउनलोड की जा सकती है।</p>\r\n\r\n<p>एक उभरती हुई फिनटेक पारिस्थितिकी तंत्र के रूप में, सऊदी अरब धीरे-धीरे उद्यमियों, निवेशकों और प्रमुख अवसर चाहने वालों के लिए अंतिम मीठा स्थान बन रहा है, रिपोर्ट में कहा गया है कि उद्योग पहले-प्रस्तावक लाभों की अनुमति देने और महत्वपूर्ण पुरस्कार प्राप्त करने के लिए पर्याप्त युवा है।</p>\r\n\r\n<p>हालांकि सऊदी अरब में कई फिनटेक सफलता की कहानियां हैं, जिनमें डिजिटल भुगतान समाधान डेवलपर एसटीसी नवंबर 2020 में क्षेत्र का पहला गेंडा बनना शामिल है, रिपोर्ट में कहा गया है कि &quot;सऊदी अरब को एक विशेष स्पर्श, स्थानीय संदर्भ और व्यापक आर्थिक प्रभावों की गहरी समझ की आवश्यकता है। ।&quot;</p>\r\n\r\n<p><br />\r\nहालाँकि, सऊदी अरब ने एक सहायक बुनियादी ढाँचा विकसित किया है और हाल ही में विदेशी निवेश और बाहरी उद्यमिता के लिए अधिक अनुकूल वातावरण बनाना शुरू किया है। राज्य में एक फिनटेक व्यवसाय शुरू करने का एक अन्य लाभ संभावित रूप से दुनिया के अन्य हिस्सों की तुलना में पूंजी तक बेहतर पहुंच है- रिपोर्ट में कहा गया है कि सऊदी अरब में 2020 और एच1 2021 के बीच फिनटेक कंपनियों के लिए उठाया गया धन यूएस $ 500 से अधिक था। मिलियन, पिछले एक दशक में फिनटेक धन उगाहने के बाद से जुटाई गई कुल धनराशि का 55% है।</p>\r\n\r\n<p>ये कुछ कारण हैं जिनकी वजह से सऊदी अरब में फिनटेक के अवसरों को जब्त करना आपके रडार पर होना चाहिए। अधिक विशिष्ट अंतर्दृष्टि और डेटा के लिए, यहां विशेष रिपोर्ट, एन अल्टीमेट गाइड टू फिनटेक इन द किंगडम ऑफ सऊदी अरब डाउनलोड करें।</p>', '2021-12-22 13:09:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `created_at`, `updated_at`) VALUES
(2, 'Technology', 'प्रौद्योगिकी', 'technology', 'प्रौद्योगिकी', NULL, NULL),
(4, 'Wealth', 'संपदा', 'wealth', 'संपदा', '2021-12-22 11:14:17', NULL),
(5, 'Marketing', 'विपणन', 'marketing', 'विपणन', '2021-12-22 11:15:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 'सैमसंग', 'samsung', 'सैमसंग', '1718231229890079.jpg', NULL, NULL),
(4, 'Apple', 'एप्प्ल', 'apple', 'एप्प्ल', '1718233797433045.png', NULL, '2021-12-04 13:30:42'),
(5, 'Oppo', 'विपक्ष', 'oppo', 'विपक्ष', '1718231892656464.jpg', NULL, NULL),
(6, 'Vivo', 'विवो', 'vivo', 'विवो', '1718231915232782.jpg', NULL, NULL),
(7, 'Xiaomi', 'शाओमी', 'xiaomi', 'शाओमी', '1718231950509572.png', NULL, '2021-12-05 05:35:04'),
(8, 'Huawei', 'हुवाई', 'huawei', 'हुवाई', '1718231971783477.jpg', NULL, NULL),
(10, 'Naturopathy', 'प्राकृतिक चिकित्सा', 'naturopathy', 'प्राकृतिक-चिकित्सा', '1720566682088724.jpg', NULL, NULL),
(11, 'LG', 'एलजी', 'lg', 'एलजी', '1724180081057317.png', NULL, NULL),
(12, 'Whirlpool', 'व्हर्लपूल', 'whirlpool', 'व्हर्लपूल', '1724184660524125.png', NULL, NULL),
(13, 'Onida', 'ओनिडा', 'onida', 'ओनिडा', '1724185251648752.png', NULL, NULL),
(14, 'MamyPoko', 'मैमीपोको', 'mamypoko', 'मैमीपोको', '1724198301107353.png', NULL, NULL),
(15, 'Nestle', 'नेस्ले', 'nestle', 'नेस्ले', '1724198636192754.png', NULL, NULL),
(16, 'Flipkart', 'फ्लिप कार्तो', 'flipkart', 'फ्लिप-कार्तो', '1724198707943841.png', NULL, NULL),
(17, 'Himalaya', 'हिमालय', 'himalaya', 'हिमालय', '1724199056058697.jpeg', NULL, NULL),
(18, 'Lakme', 'लक्मे', 'lakme', 'लक्मे', '1724199323667985.png', NULL, NULL),
(19, 'Loreal', 'लॉरियल', 'loreal', 'लॉरियल', '1724199620558466.png', NULL, NULL),
(20, 'Whats Up Wellness', 'व्हाट्स अप वेलनेस', 'whats-up-wellness', 'व्हाट्स-अप-वेलनेस', '1724199956527431.jpg', NULL, NULL),
(21, 'Pepsi', 'पेप्सी', 'pepsi', 'पेप्सी', '1724200565267438.png', NULL, NULL),
(22, 'Cadbury', 'कैडबरी', 'cadbury', 'कैडबरी', '1724201000890304.png', NULL, NULL),
(23, 'Farmley', 'फार्मली', 'farmley', 'फार्मली', '1724201275187084.jpg', NULL, NULL),
(24, 'HP', 'एचपी', 'hp', 'एचपी', '1724202522642136.png', NULL, NULL),
(25, 'Boss', 'बॉस', 'boss', 'बॉस', '1724203006857668.png', NULL, NULL),
(26, 'Smuly', 'स्मुली', 'smuly', 'स्मुली', '1724203697118971.png', NULL, NULL),
(27, 'Karwan', 'करवान', 'karwan', 'करवान', '1724206279403512.png', NULL, NULL),
(28, 'WebKreature', 'वेबप्राणी', 'webkreature', 'वेबप्राणी', '1724206308780736.jpg', NULL, NULL),
(30, 'Desirtech', 'देसीरटेक', 'desirtech', 'देसीरटेक', '1724206925272695.png', NULL, NULL),
(31, 'Flying Machine', 'उड़न खटोला', 'flying-machine', 'उड़न-खटोला', '1726579031542774.jpg', NULL, NULL),
(32, 'Bata', 'बता', 'bata', 'बता', '1726631466746919.png', NULL, NULL),
(33, 'Peter England', 'पीटर इंग्लैंड', 'peter-england', 'पीटर-इंग्लैंड', '1726632044365000.png', NULL, NULL),
(34, 'Ajanta', 'अजंता', 'ajanta', 'अजंता', '1726633143706699.jpg', NULL, NULL),
(35, 'Wipro', 'विप्रो', 'wipro', 'विप्रो', '1726633478253036.webp', NULL, NULL),
(36, 'Pario', 'पारियो', 'pario', 'पारियो', '1726633986780088.png', NULL, NULL),
(37, 'Bombay Dyeing', 'बॉम्बे डाइंग', 'bombay-dyeing', 'बॉम्बे-डाइंग', '1726634217240999.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `icon`, `created_at`, `updated_at`) VALUES
(9, 'Fashion', 'फैशन', 'fashion', 'फैशन', 'fas fa-tshirt', NULL, NULL),
(10, 'Electronics', 'इलेक्ट्रानिक्स', 'electronics', 'इलेक्ट्रानिक्स', 'fas fa-laptop', NULL, NULL),
(11, 'Sweet Home', 'प्यारा घर', 'sweet-home', 'प्यारा-घर', 'fas fa-home', NULL, NULL),
(12, 'Appliances', 'उपकरण', 'appliances', 'उपकरण', 'fas fa-blender-phone', NULL, '2021-12-08 06:16:55'),
(13, 'Beauty', 'सुंदरता', 'beauty', 'सुंदरता', 'fas fa-heartbeat', NULL, '2021-12-08 06:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `blog_id`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 'Comment 1', 1, '2021-12-28 12:34:24', '2021-12-28 12:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int(11) NOT NULL,
  `validity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `name`, `discount`, `validity`, `status`, `created_at`, `updated_at`) VALUES
(3, 'NEW YEAR', 20, '2022-01-31', 1, '2021-12-18 07:48:09', '2021-12-18 08:01:12'),
(5, 'HAPPY LEARNING', 30, '2022-03-30', 1, '2021-12-18 08:10:55', NULL),
(6, 'TEST', 5, '2021-12-10', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_11_25_130742_create_sessions_table', 1),
(7, '2021_11_25_144729_create_admins_table', 2),
(8, '2021_12_04_124732_create_brands_table', 3),
(9, '2021_12_05_075235_create_categories_table', 4),
(10, '2021_12_05_085247_create_sub_categories_table', 5),
(11, '2021_12_05_114925_create_sub_sub_categories_table', 6),
(12, '2021_12_06_070913_create_products_table', 7),
(13, '2021_12_06_072236_create_multi_images_table', 7),
(14, '2021_12_07_125409_create_sliders_table', 8),
(15, '2021_12_15_113245_create_wishlists_table', 9),
(16, '2021_12_18_102313_create_coupons_table', 10),
(17, '2021_12_18_133801_create_shipping_divisions_table', 11),
(18, '2021_12_18_143329_create_shipping_cities_table', 12),
(19, '2021_12_18_144509_create_shipping_districts_table', 13),
(20, '2021_12_18_152955_create_shipping_states_table', 14),
(21, '2021_12_19_133745_create_shippings_table', 15),
(22, '2021_12_20_083859_create_orders_table', 16),
(23, '2021_12_20_083956_create_order_items_table', 16),
(26, '2021_12_22_134204_create_blog_categories_table', 17),
(27, '2021_12_22_134253_create_blogs_table', 17),
(28, '2021_12_23_101127_create_settings_table', 18),
(29, '2021_12_23_111451_create_seos_table', 19),
(30, '2021_12_26_095057_create_reviews_table', 20),
(31, '2021_12_28_145342_create_comments_table', 21);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `product_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, '1718413146578461.jpeg', '2021-12-06 13:01:23', NULL),
(2, 3, '1718413146793430.jpeg', '2021-12-06 13:01:23', NULL),
(3, 3, '1718413146949022.jpeg', '2021-12-06 13:01:23', NULL),
(4, 3, '1718413147099492.jpeg', '2021-12-06 13:01:23', NULL),
(5, 4, '1718413804944033.jpeg', '2021-12-06 13:11:51', NULL),
(6, 4, '1718413805418088.jpeg', '2021-12-06 13:11:51', NULL),
(7, 4, '1718413805754647.jpeg', '2021-12-06 13:11:51', NULL),
(8, 5, '1718476334418421.jpeg', '2021-12-07 02:36:41', '2021-12-07 05:45:43'),
(9, 5, '1718476334597976.jpeg', '2021-12-07 02:36:41', '2021-12-07 05:45:43'),
(10, 5, '1718476334761298.jpeg', '2021-12-07 02:36:41', '2021-12-07 05:45:44'),
(21, 9, '1718581994544269.jpeg', '2021-12-08 09:45:09', NULL),
(22, 9, '1718581994732642.jpeg', '2021-12-08 09:45:09', NULL),
(23, 9, '1718581994896801.jpeg', '2021-12-08 09:45:09', NULL),
(24, 9, '1718581995038446.jpeg', '2021-12-08 09:45:09', NULL),
(25, 10, '1720566840086423.jpg', '2021-12-30 07:33:25', NULL),
(26, 11, '1720575621157119.jpeg', '2021-12-30 09:52:59', NULL),
(27, 11, '1720575621371539.jpeg', '2021-12-30 09:52:59', NULL),
(28, 11, '1720575621552667.jpeg', '2021-12-30 09:52:59', NULL),
(29, 11, '1720575621712553.jpeg', '2021-12-30 09:53:00', NULL),
(30, 12, '1720576039246217.jpeg', '2021-12-30 09:59:38', NULL),
(31, 12, '1720576039502116.jpeg', '2021-12-30 09:59:38', NULL),
(32, 13, '1720576193651821.jpeg', '2021-12-30 10:02:05', NULL),
(33, 14, '1720576306224610.jpeg', '2021-12-30 10:03:52', NULL),
(34, 14, '1720576306507982.jpeg', '2021-12-30 10:03:53', NULL),
(35, 16, '1724176233089831.jpeg', '2022-02-08 13:43:10', NULL),
(36, 16, '1724176233160910.jpeg', '2022-02-08 13:43:10', NULL),
(37, 16, '1724176233232687.jpeg', '2022-02-08 13:43:10', NULL),
(38, 16, '1724176233306271.jpeg', '2022-02-08 13:43:10', NULL),
(39, 17, '1724179678988150.jpeg', '2022-02-08 14:37:56', NULL),
(40, 17, '1724179679063069.jpeg', '2022-02-08 14:37:56', NULL),
(41, 17, '1724179679133756.jpeg', '2022-02-08 14:37:56', NULL),
(42, 17, '1724179679198878.jpeg', '2022-02-08 14:37:57', NULL),
(43, 18, '1724180528458305.jpeg', '2022-02-08 14:51:26', NULL),
(44, 18, '1724180528525711.jpeg', '2022-02-08 14:51:27', NULL),
(45, 18, '1724180528644093.jpeg', '2022-02-08 14:51:27', NULL),
(46, 18, '1724180528712168.jpeg', '2022-02-08 14:51:27', NULL),
(47, 19, '1724184136837932.jpeg', '2022-02-08 15:48:48', NULL),
(48, 19, '1724184136906066.jpeg', '2022-02-08 15:48:48', NULL),
(49, 19, '1724184136977755.jpeg', '2022-02-08 15:48:48', NULL),
(50, 19, '1724184137042108.jpeg', '2022-02-08 15:48:48', NULL),
(51, 20, '1724184459873852.jpeg', '2022-02-08 15:53:56', NULL),
(52, 20, '1724184459945187.jpeg', '2022-02-08 15:53:56', NULL),
(53, 20, '1724184460015859.jpeg', '2022-02-08 15:53:56', NULL),
(54, 21, '1724184875417657.jpeg', '2022-02-08 16:00:32', NULL),
(55, 21, '1724184875487890.jpeg', '2022-02-08 16:00:32', NULL),
(56, 21, '1724184875555583.jpeg', '2022-02-08 16:00:32', NULL),
(57, 22, '1724185141918840.jpeg', '2022-02-08 16:04:46', NULL),
(58, 22, '1724185141990060.jpeg', '2022-02-08 16:04:46', NULL),
(59, 22, '1724185142061971.jpeg', '2022-02-08 16:04:46', NULL),
(60, 22, '1724185142137743.jpeg', '2022-02-08 16:04:46', NULL),
(61, 23, '1724185436357198.jpeg', '2022-02-08 16:09:27', NULL),
(62, 23, '1724185436425660.jpeg', '2022-02-08 16:09:27', NULL),
(63, 23, '1724185436492688.jpeg', '2022-02-08 16:09:27', NULL),
(64, 23, '1724185436562908.jpeg', '2022-02-08 16:09:27', NULL),
(65, 24, '1724198515057574.jpeg', '2022-02-08 19:37:20', NULL),
(66, 24, '1724198515139013.jpeg', '2022-02-08 19:37:20', NULL),
(67, 24, '1724198515216262.jpeg', '2022-02-08 19:37:20', NULL),
(68, 24, '1724198515286816.jpeg', '2022-02-08 19:37:20', NULL),
(69, 25, '1724198947704223.jpeg', '2022-02-08 19:44:12', NULL),
(70, 25, '1724198947775198.jpeg', '2022-02-08 19:44:12', NULL),
(71, 25, '1724198947843800.jpeg', '2022-02-08 19:44:13', NULL),
(72, 25, '1724198947961140.jpeg', '2022-02-08 19:44:13', NULL),
(73, 26, '1724199200983163.jpeg', '2022-02-08 19:48:14', NULL),
(74, 26, '1724199201057465.jpeg', '2022-02-08 19:48:14', NULL),
(75, 27, '1724199493981841.jpeg', '2022-02-08 19:52:53', NULL),
(76, 27, '1724199494054344.jpeg', '2022-02-08 19:52:53', NULL),
(77, 27, '1724199494116366.jpeg', '2022-02-08 19:52:54', NULL),
(78, 28, '1724199773672301.jpeg', '2022-02-08 19:57:20', NULL),
(79, 28, '1724199773743336.jpeg', '2022-02-08 19:57:20', NULL),
(80, 28, '1724199773811501.jpeg', '2022-02-08 19:57:20', NULL),
(81, 29, '1724200138938865.jpeg', '2022-02-08 20:03:08', NULL),
(82, 29, '1724200139011039.jpeg', '2022-02-08 20:03:09', NULL),
(83, 29, '1724200139132710.jpeg', '2022-02-08 20:03:09', NULL),
(84, 29, '1724200139202348.jpeg', '2022-02-08 20:03:09', NULL),
(85, 30, '1724200349999046.jpeg', '2022-02-08 20:06:30', NULL),
(86, 30, '1724200350072580.jpeg', '2022-02-08 20:06:30', NULL),
(87, 30, '1724200350143943.jpeg', '2022-02-08 20:06:30', NULL),
(88, 31, '1724200714009284.jpeg', '2022-02-08 20:12:17', NULL),
(89, 31, '1724200714070888.jpeg', '2022-02-08 20:12:17', NULL),
(90, 31, '1724200714141432.jpeg', '2022-02-08 20:12:17', NULL),
(91, 32, '1724201172768514.jpeg', '2022-02-08 20:19:34', NULL),
(92, 32, '1724201172840553.jpeg', '2022-02-08 20:19:34', NULL),
(93, 32, '1724201172913800.jpeg', '2022-02-08 20:19:35', NULL),
(94, 33, '1724201555246605.jpeg', '2022-02-08 20:25:39', NULL),
(95, 33, '1724201555322129.jpeg', '2022-02-08 20:25:39', NULL),
(96, 33, '1724201555395256.jpeg', '2022-02-08 20:25:39', NULL),
(97, 33, '1724201555468002.jpeg', '2022-02-08 20:25:39', NULL),
(98, 34, '1724202395799814.jpeg', '2022-02-08 20:39:01', NULL),
(99, 34, '1724202395889162.jpeg', '2022-02-08 20:39:01', NULL),
(100, 34, '1724202395966736.jpeg', '2022-02-08 20:39:01', NULL),
(101, 35, '1724202712580957.jpeg', '2022-02-08 20:44:03', NULL),
(102, 35, '1724202712648499.jpeg', '2022-02-08 20:44:03', NULL),
(103, 35, '1724202712718319.jpeg', '2022-02-08 20:44:03', NULL),
(104, 35, '1724202712792731.jpeg', '2022-02-08 20:44:03', NULL),
(105, 35, '1724202712868596.jpeg', '2022-02-08 20:44:03', NULL),
(110, 37, '1724203218264208.jpg', '2022-02-08 20:52:05', NULL),
(111, 37, '1724203218336717.jpg', '2022-02-08 20:52:05', NULL),
(112, 38, '1724203465371594.jpg', '2022-02-08 20:56:01', NULL),
(113, 38, '1724203465444282.jpg', '2022-02-08 20:56:01', NULL),
(114, 38, '1724203465511380.jpg', '2022-02-08 20:56:01', NULL),
(115, 38, '1724203465594933.jpg', '2022-02-08 20:56:01', NULL),
(116, 39, '1724203886182417.jpg', '2022-02-08 21:02:42', NULL),
(117, 39, '1724203886256213.jpg', '2022-02-08 21:02:42', NULL),
(118, 39, '1724203886326574.jpg', '2022-02-08 21:02:42', NULL),
(119, 40, '1724206508256377.jpg', '2022-02-08 21:44:23', NULL),
(120, 40, '1724206508326623.jpg', '2022-02-08 21:44:23', NULL),
(121, 40, '1724206508406812.jpg', '2022-02-08 21:44:23', NULL),
(122, 40, '1724206508477231.jpg', '2022-02-08 21:44:23', NULL),
(123, 41, '1724206719295494.jpg', '2022-02-08 21:47:44', NULL),
(124, 41, '1724206719371907.jpg', '2022-02-08 21:47:44', NULL),
(125, 41, '1724206719444601.jpg', '2022-02-08 21:47:44', NULL),
(126, 42, '1724207063271968.jpg', '2022-02-08 21:53:12', NULL),
(127, 43, '1726579251630828.jpg', '2022-03-07 02:18:07', NULL),
(128, 43, '1726579251750288.jpg', '2022-03-07 02:18:07', NULL),
(129, 43, '1726579251863921.jpg', '2022-03-07 02:18:07', NULL),
(130, 43, '1726579251977277.jpg', '2022-03-07 02:18:08', NULL),
(131, 44, '1726579614329660.jpg', '2022-03-07 02:23:53', NULL),
(132, 44, '1726579614445804.jpg', '2022-03-07 02:23:53', NULL),
(133, 44, '1726579614567411.jpg', '2022-03-07 02:23:53', NULL),
(134, 44, '1726579614682606.jpg', '2022-03-07 02:23:53', NULL),
(135, 45, '1726579934863838.jpg', '2022-03-07 02:28:59', NULL),
(136, 45, '1726579934978120.jpg', '2022-03-07 02:28:59', NULL),
(137, 45, '1726579935089730.jpg', '2022-03-07 02:28:59', NULL),
(138, 45, '1726579935199630.jpg', '2022-03-07 02:28:59', NULL),
(139, 46, '1726631340041219.jpg', '2022-03-07 16:06:03', NULL),
(140, 46, '1726631340173239.jpg', '2022-03-07 16:06:03', NULL),
(141, 46, '1726631340294476.jpg', '2022-03-07 16:06:03', NULL),
(142, 46, '1726631340390697.jpg', '2022-03-07 16:06:03', NULL),
(143, 46, '1726631340480601.jpg', '2022-03-07 16:06:03', NULL),
(144, 47, '1726631681011261.jpg', '2022-03-07 16:11:28', NULL),
(145, 47, '1726631681102701.jpg', '2022-03-07 16:11:28', NULL),
(146, 47, '1726631681187485.jpg', '2022-03-07 16:11:28', NULL),
(147, 47, '1726631681282051.jpg', '2022-03-07 16:11:28', NULL),
(148, 48, '1726631942199392.jpg', '2022-03-07 16:15:37', NULL),
(149, 48, '1726631942285175.jpg', '2022-03-07 16:15:37', NULL),
(150, 48, '1726631942381425.jpg', '2022-03-07 16:15:37', NULL),
(151, 48, '1726631942468702.jpg', '2022-03-07 16:15:37', NULL),
(152, 48, '1726631942562651.jpg', '2022-03-07 16:15:37', NULL),
(153, 48, '1726631942658986.jpg', '2022-03-07 16:15:37', NULL),
(154, 49, '1726632218110506.jpg', '2022-03-07 16:20:00', NULL),
(155, 49, '1726632218219044.jpg', '2022-03-07 16:20:00', NULL),
(156, 49, '1726632218326533.jpg', '2022-03-07 16:20:00', NULL),
(163, 52, '1726632502060515.webp', '2022-03-07 16:24:31', NULL),
(164, 52, '1726632502286198.webp', '2022-03-07 16:24:31', NULL),
(165, 52, '1726632502515948.webp', '2022-03-07 16:24:31', NULL),
(166, 53, '1726632712511535.webp', '2022-03-07 16:27:52', NULL),
(167, 53, '1726632712803738.webp', '2022-03-07 16:27:52', NULL),
(168, 53, '1726632713021484.webp', '2022-03-07 16:27:52', NULL),
(169, 54, '1726632885507166.webp', '2022-03-07 16:30:37', NULL),
(170, 54, '1726632885793552.webp', '2022-03-07 16:30:37', NULL),
(171, 54, '1726632885984500.webp', '2022-03-07 16:30:37', NULL),
(172, 54, '1726632886219153.webp', '2022-03-07 16:30:37', NULL),
(173, 54, '1726632886404659.webp', '2022-03-07 16:30:37', NULL),
(174, 55, '1726633014844724.webp', '2022-03-07 16:32:40', NULL),
(175, 55, '1726633015061741.webp', '2022-03-07 16:32:40', NULL),
(176, 55, '1726633015312806.webp', '2022-03-07 16:32:40', NULL),
(177, 56, '1726633358739164.webp', '2022-03-07 16:38:08', NULL),
(178, 56, '1726633358918660.webp', '2022-03-07 16:38:08', NULL),
(179, 56, '1726633359100536.webp', '2022-03-07 16:38:08', NULL),
(180, 56, '1726633359282687.webp', '2022-03-07 16:38:08', NULL),
(181, 56, '1726633359460518.webp', '2022-03-07 16:38:08', NULL),
(182, 57, '1726633623214392.webp', '2022-03-07 16:42:20', NULL),
(183, 57, '1726633623385782.webp', '2022-03-07 16:42:20', NULL),
(184, 57, '1726633623547890.webp', '2022-03-07 16:42:20', NULL),
(185, 57, '1726633623731603.webp', '2022-03-07 16:42:21', NULL),
(186, 58, '1726633852017948.webp', '2022-03-07 16:45:58', NULL),
(187, 58, '1726633852203805.webp', '2022-03-07 16:45:58', NULL),
(188, 58, '1726633852380148.webp', '2022-03-07 16:45:59', NULL),
(189, 58, '1726633852602530.webp', '2022-03-07 16:45:59', NULL),
(190, 59, '1726634123896719.webp', '2022-03-07 16:50:18', NULL),
(191, 59, '1726634124141826.webp', '2022-03-07 16:50:18', NULL),
(192, 59, '1726634124332303.webp', '2022-03-07 16:50:18', NULL),
(193, 60, '1726634316141752.webp', '2022-03-07 16:53:21', NULL),
(194, 60, '1726634316361963.webp', '2022-03-07 16:53:21', NULL),
(195, 61, '1726634481055084.webp', '2022-03-07 16:55:58', NULL),
(196, 61, '1726634481244238.webp', '2022-03-07 16:55:58', NULL),
(197, 61, '1726634481429364.webp', '2022-03-07 16:55:58', NULL),
(198, 61, '1726634481612155.webp', '2022-03-07 16:55:59', NULL),
(199, 62, '1726634676902659.webp', '2022-03-07 16:59:05', NULL),
(200, 62, '1726634677079549.webp', '2022-03-07 16:59:05', NULL),
(201, 62, '1726634677251726.webp', '2022-03-07 16:59:05', NULL),
(202, 62, '1726634677424995.webp', '2022-03-07 16:59:05', NULL),
(203, 63, '1726634869134039.webp', '2022-03-07 17:02:08', NULL),
(204, 63, '1726634869313396.webp', '2022-03-07 17:02:08', NULL),
(205, 63, '1726634869479734.webp', '2022-03-07 17:02:09', NULL),
(206, 63, '1726634869692749.webp', '2022-03-07 17:02:09', NULL),
(207, 63, '1726634869846483.webp', '2022-03-07 17:02:09', NULL),
(208, 63, '1726634870044300.webp', '2022-03-07 17:02:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `state_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` int(10) UNSIGNED DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(8,2) NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `processing_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picked_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipped_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `return_order` int(11) DEFAULT 0,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `city_id`, `district_id`, `state_id`, `name`, `email`, `phone`, `postcode`, `notes`, `payment_type`, `payment_method`, `transaction_id`, `currency`, `amount`, `order_number`, `invoice_number`, `order_date`, `order_month`, `order_year`, `confirmed_date`, `processing_date`, `picked_date`, `shipped_date`, `delivered_date`, `cancel_date`, `return_date`, `return_reason`, `return_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 3, 3, 'User', 'user@gmail.com', '12345678', 13071, 'Test', 'Stripe', 'card_1K8jE9B9fyylxjaCGACjFv0A', 'txn_1K8jEBB9fyylxjaC2W1HlV4o', 'inr', 800.00, '61c05ca6af8ef', 'EOS81345102', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Picked', '2021-12-20 07:36:24', '2021-12-21 09:40:43'),
(2, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 682021, NULL, 'Stripe', 'card_1K8jMjB9fyylxjaC5XsmLBRe', 'txn_1K8jMmB9fyylxjaCYebftHs4', 'inr', 18499.00, '61c05ebb526cf', 'EOS36707131', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2021-12-20 07:45:17', NULL),
(3, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, 'Test', 'Stripe', 'card_1K8kZ2B9fyylxjaCmpSXzmBD', 'txn_1K8kZ5B9fyylxjaCLjplPtoz', 'inr', 2000.00, '61c070ba1038a', 'EOS83521670', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Confirmed', '2021-12-20 09:02:05', '2021-12-21 09:31:17'),
(4, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1K8kgLB9fyylxjaCcIs7qHWf', 'txn_1K8kgOB9fyylxjaCpKzWVMmy', 'inr', 15199.00, '61c0727fd4954', 'EOS54085846', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Shipped', '2021-12-20 09:09:37', '2021-12-21 09:36:17'),
(5, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', NULL, NULL, 'USD', 18999.00, NULL, 'EOS81751348', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Cancelled', '2021-12-20 13:03:57', '2021-12-21 10:05:02'),
(6, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 18999.00, NULL, 'EOS61638534', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Processing', '2021-12-20 13:04:43', '2021-12-26 04:52:09'),
(7, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '67756822', 13071, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 800.00, NULL, 'EOS75027716', '20 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-23 19:00:00', 'Broken Order', 2, 'Delivered', '2021-12-20 13:08:58', '2021-12-26 05:32:24'),
(8, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 18999.00, NULL, 'EOS73714948', '26 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, '2021-12-26 11:55:07', 'Wrong Product', 1, 'Delivered', '2021-12-26 04:50:48', '2021-12-26 04:55:07'),
(9, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1KAxELB9fyylxjaCU7K8kuqu', 'txn_1KAxEOB9fyylxjaCY67D1fuG', 'inr', 35998.00, '61c874deab9ec', 'EOS56147312', '26 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Delivered', '2021-12-26 10:57:53', '2021-12-26 11:01:23'),
(10, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 18499.00, NULL, 'EOS70902119', '27 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Delivered', '2021-12-27 11:56:30', '2021-12-27 12:02:42'),
(11, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, 'Digital Product', 'Cash On Delivery', NULL, NULL, 'USD', 1500.00, NULL, 'EOS89139043', '30 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Confirmed', '2021-12-30 08:06:54', '2021-12-30 08:29:10'),
(12, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, 'Digital Product', 'Cash On Delivery', NULL, NULL, 'USD', 1500.00, NULL, 'EOS83398650', '30 December 2021', 'December', '2021', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Confirmed', '2021-12-30 08:07:28', '2021-12-30 08:33:55'),
(13, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 2000.00, NULL, 'EOS65347621', '04 January 2022', 'January', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-01-04 07:17:26', NULL),
(14, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1KEE1DB9fyylxjaCmkQxn45K', 'txn_1KEE1FB9fyylxjaCzoOplSJE', 'inr', 21199.00, '61d459d8b0930', 'EOS36744859', '04 January 2022', 'January', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-01-04 21:29:46', NULL),
(15, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1KEE58B9fyylxjaCEFDhMYgI', 'txn_1KEE5AB9fyylxjaC5XFSWkp9', 'inr', 21199.00, '61d45acb74239', 'EOS61438612', '04 January 2022', 'January', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-01-04 21:33:48', NULL),
(16, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1KEE7ZB9fyylxjaCJk3HxDW1', 'txn_1KEE7bB9fyylxjaCHgiorTa7', 'inr', 21199.00, '61d45b623427d', 'EOS65278774', '04 January 2022', 'January', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-01-04 21:36:19', NULL),
(17, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, NULL, 'Stripe', 'card_1KEEA0B9fyylxjaCOiBItckJ', 'txn_1KEEA2B9fyylxjaCKAz0Kig6', 'inr', 21199.00, '61d45bf9685d1', 'EOS39952169', '04 January 2022', 'January', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Confirmed', '2022-01-04 21:38:50', '2022-01-04 21:41:02'),
(18, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 12345, 'Test', 'Stripe', 'card_1KsooQB9fyylxjaCeQ7d7TCp', 'txn_1KsooTB9fyylxjaCEPjPHqMv', 'inr', 19399.00, '6267f9144f684', 'EOS18622547', '26 April 2022', 'April', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-04-26 20:52:21', NULL),
(19, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 13071, 'Test', 'Stripe', 'card_1Kw5G5B9fyylxjaCoP7g1JM1', 'txn_1Kw5G8B9fyylxjaCStCQOtys', 'inr', 17499.00, '6273d8eebc0f4', 'EOS85420180', '05 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-05-05 21:02:24', NULL),
(20, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 134567, 'Test', 'Stripe', 'card_1Ky9G8B9fyylxjaC7vFcbwGm', 'txn_1Ky9GAB9fyylxjaC8hHhZUgR', 'inr', 26316.00, '627b5af12df5f', 'EOS23372870', '11 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-05-11 06:42:59', NULL),
(21, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 11233, 'Test', 'Cash On Delivery', NULL, NULL, 'USD', 17499.00, NULL, 'EOS51820236', '11 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-05-11 06:45:46', NULL),
(22, 3, 2, 3, 3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 232323, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 101430.00, NULL, 'EOS35268521', '11 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-05-11 06:48:51', NULL),
(23, 3, 3, 4, 2, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', 223444, NULL, 'Cash On Delivery', NULL, NULL, 'USD', 11799.00, NULL, 'EOS38610399', '11 May 2022', 'May', '2022', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 'Pending', '2022-05-11 06:51:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `color`, `size`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Black', NULL, 1, 1000.00, '2021-12-20 07:36:24', NULL),
(2, 2, 9, 'Black', 'Large', 1, 17999.00, '2021-12-20 07:45:17', NULL),
(3, 2, 4, 'Red', 'Small', 1, 500.00, '2021-12-20 07:45:17', NULL),
(4, 3, 5, 'Black', NULL, 1, 1000.00, '2021-12-20 09:02:09', NULL),
(5, 3, 4, 'Red', 'Small', 2, 500.00, '2021-12-20 09:02:09', NULL),
(6, 4, 9, 'Black', 'Large', 1, 17999.00, '2021-12-20 09:09:41', NULL),
(7, 4, 5, 'Black', NULL, 1, 1000.00, '2021-12-20 09:09:42', NULL),
(8, 6, 9, 'Black', 'Large', 1, 17999.00, '2021-12-20 13:05:14', NULL),
(9, 6, 5, 'Black', NULL, 1, 1000.00, '2021-12-20 13:05:14', NULL),
(10, 7, 4, 'Red', 'Small', 2, 500.00, '2021-12-20 13:09:05', NULL),
(11, 8, 9, 'Black', 'Large', 1, 17999.00, '2021-12-26 04:50:53', NULL),
(12, 8, 5, 'Black', NULL, 1, 1000.00, '2021-12-26 04:50:53', NULL),
(13, 9, 9, 'Black', 'Large', 2, 17999.00, '2021-12-26 10:57:57', NULL),
(14, 10, 9, 'Black', 'Large', 1, 17999.00, '2021-12-27 11:56:35', NULL),
(15, 10, 4, 'Red', 'Small', 1, 500.00, '2021-12-27 11:56:35', NULL),
(16, 12, 10, NULL, NULL, 1, 1500.00, '2021-12-30 08:07:32', NULL),
(17, 13, 13, 'Red', 'Small', 2, 700.00, '2022-01-04 07:17:32', NULL),
(18, 13, 12, 'Green', 'Small', 1, 600.00, '2022-01-04 07:17:32', NULL),
(19, 17, 11, 'Black', 'Medium', 1, 500.00, '2022-01-04 21:38:50', NULL),
(20, 17, 12, '--Select color--', '--Select size--', 1, 600.00, '2022-01-04 21:38:50', NULL),
(21, 17, 11, 'Black', 'Small', 1, 500.00, '2022-01-04 21:38:50', NULL),
(22, 17, 14, 'Red', 'Small', 2, 800.00, '2022-01-04 21:38:50', NULL),
(23, 17, 9, 'Black', 'Large', 1, 17999.00, '2022-01-04 21:38:50', NULL),
(24, 18, 35, 'Black', 'Medium', 1, 19399.00, '2022-04-26 20:52:22', NULL),
(25, 19, 63, 'Teak', 'Large', 1, 17499.00, '2022-05-05 21:02:24', NULL),
(26, 20, 43, 'Brown', 'Small', 1, 1326.00, '2022-05-11 06:42:59', NULL),
(27, 20, 16, 'Grey', 'Large', 1, 24990.00, '2022-05-11 06:42:59', NULL),
(28, 21, 63, 'Teak', 'Large', 1, 17499.00, '2022-05-11 06:45:46', NULL),
(29, 22, 19, 'Black', 'Large', 1, 101430.00, '2022-05-11 06:48:51', NULL),
(30, 23, 34, 'Black', 'Medium', 1, 11799.00, '2022-05-11 06:51:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('test1@gmail.com', '$2y$10$Q5MHEP2qtmwVVGQ.Q.Db8uJTWa7JqvkpyYbrE1PJWmwVyLGAYVKDy', '2022-01-04 08:18:17'),
('ageorge28@hotmail.com', '$2y$10$lLwuIghWMa50nHpOSw6RHuVvmM9A0Sqia313zdQwI5aq63vsNhyRS', '2022-01-04 08:22:05'),
('ageorge28@gmail.com', '$2y$10$.8YRdsDedVx4ynU8oJZtY.n.MDmH6Td2egY4SYn6JVAJfccTJERUi', '2022-05-04 18:26:22');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `subsubcategory_id` int(11) NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `tags_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_hin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selling_price` decimal(8,2) UNSIGNED NOT NULL,
  `discount_price` decimal(8,2) UNSIGNED DEFAULT NULL,
  `short_description_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description_hin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hot_deals` tinyint(4) DEFAULT NULL,
  `featured` tinyint(4) DEFAULT NULL,
  `special_offer` tinyint(4) DEFAULT NULL,
  `special_deals` tinyint(4) DEFAULT NULL,
  `digital_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `product_code`, `quantity`, `tags_en`, `tags_hin`, `size_en`, `size_hin`, `color_en`, `color_hin`, `selling_price`, `discount_price`, `short_description_en`, `short_description_hin`, `long_description_en`, `long_description_hin`, `thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `digital_file`, `status`, `created_at`, `updated_at`) VALUES
(3, 5, 9, 8, 11, 'Printed Men Round Neck White T-Shirt', 'प्रिंटेड मेन राउंड नेक व्हाइट टी-शर्ट', 'printed-men-round-neck-white-t-shirt', 'प्रिंटेड-मेन-राउंड-नेक-व्हाइट-टी-शर्ट', '123456', 200, 'Printed,Shirt,Round Neck', 'Printed,Shirt,Round Neck', 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Black,White', 'Red,Black,White', '500.00', '400.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एस्से सिल्लम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1718413146415514.jpeg', 1, NULL, NULL, NULL, NULL, 1, '2021-12-13 06:16:10', '2021-12-13 06:16:10'),
(4, 2, 9, 8, 11, 'Striped Men Hooded Neck Red, Black T-Shirt', 'स्ट्राइप्ड मेन हुडेड नेक रेड, ब्लैक टी-शर्ट', 'striped-men-hooded-neck-red-black-t-shirt', 'स्ट्राइप्ड-मेन-हुडेड-नेक-रेड,-ब्लैक-टी-शर्ट', '234567', 199, 'Hooded Neck,Shirt', 'Hooded Neck,Shirt', 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Black', 'Red,Black', '590.00', '500.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एस्से सिल्लम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1718413804523250.jpeg', NULL, 1, NULL, NULL, NULL, 1, '2021-12-13 06:16:03', '2021-12-27 12:02:42'),
(5, 2, 10, 14, 30, 'AMKETTE EvoFox Fireblade LED Backlit Wired USB Gaming Keyboard', 'AMKETTE EvoFox Fireblade LED बैकलिट वायर्ड USB गेमिंग कीबोर्ड', 'amkette-evofox-fireblade-led-backlit-wired-usb-gaming-keyboard', 'AMKETTE-EvoFox-Fireblade-LED-बैकलिट-वायर्ड-USB-गेमिंग-कीबोर्ड', '345678', 199, 'Keyboard,LED', 'LED,Keyboard', NULL, NULL, 'Black', 'Black', '1200.00', '1000.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एस्से सिल्लम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1718477793816786.jpeg', 1, 1, 1, 1, NULL, 1, '2021-12-15 06:38:20', '2021-12-15 06:38:20'),
(9, 2, 12, 18, 41, 'SAMSUNG 80 cm (32 inch) HD Ready LED Smart TV', 'सैमसंग 80 सेमी (32 इंच) एचडी रेडी एलईडी स्मार्ट टीवी', 'samsung-80-cm-32-inch-hd-ready-led-smart-tv', 'सैमसंग-80-सेमी-(32-इंच)-एचडी-रेडी-एलईडी-स्मार्ट-टीवी', '123456', 5, 'TV,Smart', 'TV,Smart', 'Large', 'Large', 'Black', 'Black', '19900.00', '17999.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कॉन्सेक्टेटूर एडिपिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1718581994390513.jpeg', NULL, 1, NULL, NULL, NULL, 1, '2021-12-26 10:56:08', '2021-12-27 12:02:42'),
(10, 10, 10, 14, 29, 'Digital Product', 'डिजिटल उत्पाद', 'digital-product', 'डिजिटल-उत्पाद', '123456', 10, 'Gaming,Digital', 'Gaming,Digital', NULL, NULL, NULL, NULL, '2000.00', '1500.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini.m veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनी.एम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्यूई ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम</p>', '1720566839584265.png', NULL, 1, 1, NULL, '20211230103324.pdf', 1, '2022-02-08 20:13:43', '2022-02-08 20:13:43'),
(11, 5, 9, 8, 11, 'Color Block Men Round Neck Black T-Shirt', 'कलर ब्लॉक मेन राउंड नेक ब्लैक टी-शर्ट', 'color-block-men-round-neck-black-t-shirt', 'कलर-ब्लॉक-मेन-राउंड-नेक-ब्लैक-टी-शर्ट', '123456', 100, 'Round,Neck,Black', 'Round,Neck,Black', 'Small,Medium,Large', 'Small,Medium,Large', 'Black,Green,Brown', 'Black,Green,Brown', '590.00', '500.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1720575620960083.jpeg', 1, NULL, NULL, 1, NULL, 1, '2021-12-30 09:52:59', NULL),
(12, 7, 9, 8, 11, 'Striped Men Polo Neck Dark Blue T-Shirt', 'स्ट्राइप्ड मेन पोलो नेक डार्क ब्लू टी-शर्ट', 'striped-men-polo-neck-dark-blue-t-shirt', 'स्ट्राइप्ड-मेन-पोलो-नेक-डार्क-ब्लू-टी-शर्ट', '123456', 100, 'Polo,Neck', 'Polo,Neck', 'Small,Medium,Large', 'Small,Medium,Large', 'Green,Blue', 'Green,Blue', '690.00', '600.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1720576038978277.jpeg', 1, NULL, 1, NULL, NULL, 1, '2021-12-30 09:59:38', NULL),
(13, 7, 9, 8, 11, 'Color Block Men Round Neck Grey T-Shirt', 'कलर ब्लॉक मेन राउंड नेक ग्रे टी-शर्ट', 'color-block-men-round-neck-grey-t-shirt', 'कलर-ब्लॉक-मेन-राउंड-नेक-ग्रे-टी-शर्ट', '123456', 100, 'Round,Neck', 'Round,Neck', 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Black', 'Red,Black', '790.00', '700.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1720576193399050.jpeg', NULL, 1, 1, NULL, NULL, 1, '2021-12-30 10:02:05', NULL),
(14, 8, 9, 8, 11, 'Striped Men Round Neck Blue T-Shirt', 'स्ट्राइप्ड मेन राउंड नेक ब्लू टी-शर्ट', 'striped-men-round-neck-blue-t-shirt', 'स्ट्राइप्ड-मेन-राउंड-नेक-ब्लू-टी-शर्ट', '123456', 100, 'Lorem,Ipsum,Amet', 'Lorem,Ipsum,Amet', 'Small,Medium,Large', 'Small,Medium,Large', 'Red,Black', 'Red,Black', '890.00', '800.00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका।', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p>लोरेम इप्सम डोलर सिट एमेट, कंसेक्टेटूर एडिपिसिसिंग एलीट, सेड डू ईउसमॉड टेम्पर इनसिडिडंट यूट लेबर एट डोलोरे मैग्ना एलिका। यूट एनिम एड मिनिम वेनिअम, क्विस नोस्ट्रुड एक्सर्सिटेशन उलमको लेबरिस निसि यूट एलिक्विप एक्स ईए कमोडो कॉन्सेक्वेट। ड्यूस ऑउट इर्योर डोलर इन रिप्रेहेन्डरिट इन वॉलुप्टेट वेलिट एसएसई सिलम डोलोरे ईयू फुगियाट नाला परियातुर। एक्सेप्युर सिंट ओसीकैट कपिडैटैट नॉन प्रोडेंट, सन्ट इन कल्पा क्वी ऑफिसिया डेसेरुंट मोलिट एनिम आईडी इस्ट लेबरम।</p>', '1720576305991748.jpeg', NULL, 1, 1, NULL, NULL, 1, '2021-12-30 10:03:52', NULL),
(16, 2, 12, 20, 47, 'SAMSUNG 253 L Frost Free Double Door 3 Star Refrigerator', 'सैमसंग 253 L फ्रॉस्ट फ़ेरे डबल दूर 3 स्टार फ्रिज', 'samsung-253-l-frost-free-double-door-3-star-refrigerator', 'सैमसंग-253-L-फ्रॉस्ट-फ़ेरे-डबल-दूर-3-स्टार-फ्रिज', 'RT28A3453S8/HL', 50, 'Refrigerator,Double Door', 'Refrigerator,Double Door', 'Large', 'Large', 'Grey', 'Grey', '28990.00', '24990.00', 'You can keep your perishables fresh and ready for consumption inside the Samsung 253 L refrigerator (RT28A3021S8/HL) which provides efficient cooling while saving energy and keeping the operational noise level to a minimum.', 'आप सैमसंग 253 एल रेफ्रिजरेटर (आरटी28ए3021एस8/एचएल) के अंदर अपने खराब होने वाले सामानों को ताजा और खपत के लिए तैयार रख सकते हैं जो ऊर्जा की बचत करते हुए कुशल शीतलन प्रदान करता है और परिचालन शोर स्तर को न्यूनतम रखता है।', '<p>You can keep your perishables fresh and ready for consumption inside the Samsung 253 L refrigerator (RT28A3021S8/HL) which provides efficient cooling while saving energy and keeping the operational noise level to a minimum. This refrigerator will continue to cool your food items even when there&rsquo;s a power cut with the help of its Smart Connect Inverter. Lastly, say goodbye to foul smells with the inbuilt deodorizer, which gets rid of nasty smells by continuously circulating the air through activated carbon filters.</p>', '<p>आप सैमसंग 253 एल रेफ्रिजरेटर (आरटी28ए3021एस8/एचएल) के अंदर अपने खराब होने वाले सामानों को ताजा और खपत के लिए तैयार रख सकते हैं जो ऊर्जा की बचत करते हुए कुशल शीतलन प्रदान करता है और परिचालन शोर स्तर को न्यूनतम रखता है। अपने स्मार्ट कनेक्ट इन्वर्टर की मदद से बिजली कटौती होने पर भी यह रेफ्रिजरेटर आपके खाद्य पदार्थों को ठंडा करता रहेगा। अंत में, इनबिल्ट डियोडोराइज़र के साथ दुर्गंध को अलविदा कहें, जो सक्रिय कार्बन फिल्टर के माध्यम से हवा को लगातार प्रसारित करके दुर्गंध से छुटकारा दिलाता है।</p>', '1724176233023743.jpeg', NULL, 1, 1, NULL, NULL, 1, '2022-02-08 13:43:10', NULL),
(17, 2, 12, 20, 46, 'SAMSUNG 192 L Direct Cool Single Door 2 Star Refrigerator', 'सैमसंग 192 L डायरेक्ट कूल सिंगल दूर 2 स्टार रेफ्रिजरेटर', 'samsung-192-l-direct-cool-single-door-2-star-refrigerator', 'सैमसंग-192-L-डायरेक्ट-कूल-सिंगल-दूर-2-स्टार-रेफ्रिजरेटर', 'RR19A241BGS/NL', 100, 'Refrigerator,Single Door', 'Refrigerator,Single Door', 'Large', 'Large', 'Silver', 'Silver', '14990.00', '12990.00', 'An elegant design and a chic Island handle make the Samsung 192 L direct cool refrigerator a beauty to behold.', 'एक सुंदर डिजाइन और एक ठाठ द्वीप संभाल सैमसंग 192 एल डायरेक्ट कूल रेफ्रिजरेटर को देखने के लिए एक सुंदरता बनाते हैं।', '<p>An elegant design and a chic Island handle make the Samsung 192 L direct cool refrigerator a beauty to behold. Furnished with an Anti-bacterial Gasket, this refrigerator prevents the build-up of bacteria and mould inside the fridge, so there are no compromises on hygiene. Plus, its impressive features, such as the Vege box, and Deep Door Guard, are designed to complement your food and beverage storage requirements.</p>', '<p>एक सुंदर डिजाइन और एक ठाठ द्वीप संभाल सैमसंग 192 एल डायरेक्ट कूल रेफ्रिजरेटर को देखने के लिए एक सुंदरता बनाते हैं। एंटी-बैक्टीरियल गैसकेट से सुसज्जित, यह रेफ्रिजरेटर फ्रिज के अंदर बैक्टीरिया और मोल्ड के निर्माण को रोकता है, इसलिए स्वच्छता से कोई समझौता नहीं होता है। साथ ही, इसकी प्रभावशाली विशेषताएं, जैसे कि वेज बॉक्स, और डीप डोर गार्ड, को आपकी खाद्य और पेय भंडारण आवश्यकताओं को पूरा करने के लिए डिज़ाइन किया गया है।</p>', '1724179678905039.jpeg', NULL, 1, NULL, 1, NULL, 1, '2022-02-08 14:37:56', NULL),
(18, 11, 12, 20, 48, 'LG 45 L Direct Cool Single Door 1 Star Refrigerator', 'एलजी 45 L डायरेक्ट कूल सिंगल दूर 1 स्टार फ्रिज', 'lg-45-l-direct-cool-single-door-1-star-refrigerator', 'एलजी-45-L-डायरेक्ट-कूल-सिंगल-दूर-1-स्टार-फ्रिज', 'GL-B051RSWB', 100, 'Refrigerator,Mini Refrigerator', 'Refrigerator,Mini Refrigerator', 'Small', 'Small', 'White', 'White', '10190.00', '7800.00', 'If you are looking for a compact mini-refrigerator, you should have a look at the LG Direct Cool single-door refrigerator.', 'यदि आप एक कॉम्पैक्ट मिनी-रेफ्रिजरेटर की तलाश में हैं, तो आपको एलजी डायरेक्ट कूल सिंगल-डोर रेफ्रिजरेटर पर एक नजर डालनी चाहिए।', '<p>If you are looking for a compact mini-refrigerator, you should have a look at the LG Direct Cool single-door refrigerator. This fridge comes with a separate freezer compartment with its own temperature regulator. You can store food items that need preservation in the refrigerator&rsquo;s freezer. The durable heavy-load bearing shelves of this fridge let you store heavy large items with ease. The refrigerator also comes with a fixed gasket that forms an air-tight seal, keeping the temperature within the fridge cool and uniform so that your food items and beverages remain fresh.</p>', '<p>यदि आप एक कॉम्पैक्ट मिनी-रेफ्रिजरेटर की तलाश में हैं, तो आपको एलजी डायरेक्ट कूल सिंगल-डोर रेफ्रिजरेटर पर एक नजर डालनी चाहिए। यह फ्रिज अपने तापमान नियामक के साथ एक अलग फ्रीजर डिब्बे के साथ आता है। आप उन खाद्य पदार्थों को स्टोर कर सकते हैं जिन्हें रेफ्रिजरेटर के फ्रीजर में संरक्षित करने की आवश्यकता है। इस फ्रिज की टिकाऊ भारी भार वाली अलमारियां आपको भारी बड़ी वस्तुओं को आसानी से स्टोर करने देती हैं। रेफ्रिजरेटर भी एक निश्चित गैसकेट के साथ आता है जो एक एयर-टाइट सील बनाता है, फ्रिज के भीतर के तापमान को ठंडा और एक समान रखता है ताकि आपके खाद्य पदार्थ और पेय पदार्थ ताजा रहें।</p>', '1724180528386521.jpeg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 14:51:26', NULL),
(19, 11, 12, 18, 40, 'LG 177.8 cm (70 inch) Ultra HD (4K) LED Smart TV', 'एलजी 177.8 सेमी (70 इंच) अल्ट्रा एचडी (4K) एलईडी स्मार्ट टीवी', 'lg-1778-cm-70-inch-ultra-hd-4k-led-smart-tv', 'एलजी-177.8-सेमी-(70-इंच)-अल्ट्रा-एचडी-(4K)-एलईडी-स्मार्ट-टीवी', '70UP7500PTZ', 50, 'TV,Big Screen', 'TV,Big Screen', 'Large', 'Large', 'Black', 'Black', '149990.00', '101430.00', 'Bring the cinema home.', 'सिनेमा घर ले आओ।', '<p>Bring the cinema home. FILMMAKER MODE&trade;, Dolby Vision IQ &amp; Dolby Atmos, and HDR bring you a more immersive viewing experience. Connect with your favourite streaming platforms to access the content you love.</p>', '<p>सिनेमा घर ले आओ। फिल्ममेकर मोड&trade;, डॉल्बी विजन आईक्यू और डॉल्बी एटमॉस, और एचडीआर आपको देखने का एक अधिक प्रभावशाली अनुभव प्रदान करते हैं। अपनी पसंदीदा सामग्री तक पहुंचने के लिए अपने पसंदीदा स्ट्रीमिंग प्लेटफॉर्म से जुड़ें।</p>', '1724184136707518.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 15:48:48', NULL),
(20, 11, 12, 18, 42, 'LG 139 cm (55 inch) OLED Ultra HD (4K) Smart TV', 'एलजी 139 सेमी (55 इंच) OLED अल्ट्रा एचडी (4K) स्मार्ट टीवी', 'lg-139-cm-55-inch-oled-ultra-hd-4k-smart-tv', 'एलजी-139-सेमी-(55-इंच)-OLED-अल्ट्रा-एचडी-(4K)-स्मार्ट-टीवी', 'OLED55BXPTA', 45, 'TV,OLED', 'TV,OLED', 'Large', 'Large', 'Black', 'Black', '219990.00', '99999.00', 'Get excited while watching sports, emotional while watching drama, or curious while watching crime shows on this LG OLED Ultra HD (4K) Smart TV.', 'इस LG OLED Ultra HD (4K) स्मार्ट टीवी पर खेल देखते हुए उत्साहित हों, ड्रामा देखते हुए भावुक हों या क्राइम शो देखते समय उत्सुक हों।', '<p>&nbsp;</p>\r\n\r\n<p>Get excited while watching sports, emotional while watching drama, or curious while watching crime shows on this LG OLED Ultra HD (4K) Smart TV. This TV features a Self-lit LG OLED technology to offer detailed and lively visuals, an &alpha;7 GEN3 AI Processor 4K for smooth entertainment, and Dolby Vision IQ and Atmos for immersive aural experience to complement the visuals.</p>', '<p>इस LG OLED Ultra HD (4K) स्मार्ट टीवी पर खेल देखते हुए उत्साहित हों, ड्रामा देखते हुए भावुक हों या क्राइम शो देखते समय उत्सुक हों। इस टीवी में विस्तृत और जीवंत दृश्य प्रदान करने के लिए एक स्व-प्रकाशित एलजी OLED तकनीक, सहज मनोरंजन के लिए एक &alpha;7 GEN3 AI प्रोसेसर 4K, और दृश्यों के पूरक के लिए इमर्सिव कर्ण अनुभव के लिए डॉल्बी विजन आईक्यू और एटमॉस की सुविधा है।</p>', '1724184459796840.jpeg', 1, 1, NULL, NULL, NULL, 1, '2022-02-08 15:53:56', NULL),
(21, 12, 12, 19, 45, 'Whirlpool 7.5 kg 5 Star, Hard Water wash Fully Automatic Top Load Grey', 'व्हर्लपूल 7.5 किग्रा 5 स्टार, हार्ड वाटर वॉश फुल्ली ऑटोमेटिक टॉप लोड ग्रे', 'whirlpool-75-kg-5-star-hard-water-wash-fully-automatic-top-load-grey', 'व्हर्लपूल-7.5-किग्रा-5-स्टार,-हार्ड-वाटर-वॉश-फुल्ली-ऑटोमेटिक-टॉप-लोड-ग्रे', '5YMW)', 25, 'Washing Machine,Energy Efficient', 'Washing Machine,Energy Efficient', 'Medium', 'Medium', 'Grey', 'Grey', '21350.00', '17090.00', 'This Whirlpool washing machine is here to make sure that you get to have fun while doing your laundry, thanks to its innovative features.', 'यह व्हर्लपूल वॉशिंग मशीन यहां यह सुनिश्चित करने के लिए है कि आप अपनी लॉन्ड्री करते समय मज़े करें, इसकी नवीन विशेषताओं के लिए धन्यवाद।', '<p>This Whirlpool washing machine is here to make sure that you get to have fun while doing your laundry, thanks to its innovative features. Equipped with up to 12 wash programs, you can wash clothes of different fabrics with ease. Thanks to the express wash feature, you can reduce the cycle time (as compared to a regular wash cycle) so that you can save up on time.</p>', '<p>यह व्हर्लपूल वॉशिंग मशीन यहां यह सुनिश्चित करने के लिए है कि आप अपनी लॉन्ड्री करते समय मज़े करें, इसकी नवीन विशेषताओं के लिए धन्यवाद। 12 वॉश प्रोग्राम से लैस, आप अलग-अलग फैब्रिक के कपड़े आसानी से धो सकते हैं। एक्सप्रेस वॉश फीचर के लिए धन्यवाद, आप साइकिल के समय को कम कर सकते हैं (नियमित वॉश साइकल की तुलना में) ताकि आप समय पर बचत कर सकें।</p>', '1724184875348456.jpeg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 16:00:32', NULL),
(22, 11, 12, 19, 43, 'LG 10.5/7 kg Inverter Wi-Fi with Turbo Wash 360 degree Washer with Dryer with In-built Heater', 'एलजी 10.5/7 किलो इन्वर्टर वाई-फाई के साथ टर्बो वॉश 360 डिग्री वॉशर ड्रायर के साथ इन-बिल्ट हीटर', 'lg-1057-kg-inverter-wi-fi-with-turbo-wash-360-degree-washer-with-dryer-with-in-built-heater', 'एलजी-10.5/7-किलो-इन्वर्टर-वाई-फाई-के-साथ-टर्बो-वॉश-360-डिग्री-वॉशर-ड्रायर-के-साथ-इन-बिल्ट-हीटर', 'FHD1057SWS', 75, 'Washing Machine,Dryer', 'Washing Machine,Dryer', 'Large', 'Large', 'Silver', 'Silver', '74990.00', '69490.00', 'If you are looking for an elegantly designed and efficient front-door washing machine, then this LG washing machine is ideal for you', 'यदि आप एक सुरुचिपूर्ण ढंग से डिज़ाइन की गई और कुशल फ्रंट-डोर वाशिंग मशीन की तलाश में हैं, तो यह एलजी वॉशिंग मशीन आपके लिए आदर्श है।', '<p>&nbsp;</p>\r\n\r\n<p>If you are looking for an elegantly designed and efficient front-door washing machine, then this LG washing machine is ideal for you. Its Direct Drive motor operates with minimal vibration and noise. Moreover, the LG Steam technology removes dust mites and keeps your clothes hygienic. Furthermore, the LG ThinQ Wi-Fi feature allows you to remotely control this machine with an app.</p>', '<p>यदि आप एक सुरुचिपूर्ण ढंग से डिज़ाइन की गई और कुशल फ्रंट-डोर वाशिंग मशीन की तलाश में हैं, तो यह एलजी वॉशिंग मशीन आपके लिए आदर्श है। इसकी डायरेक्ट ड्राइव मोटर न्यूनतम कंपन और शोर के साथ चलती है। इसके अलावा, एलजी स्टीम तकनीक धूल के कणों को हटाती है और आपके कपड़ों को स्वच्छ रखती है। इसके अलावा, एलजी थिनक्यू वाई-फाई सुविधा आपको इस मशीन को एक ऐप के साथ दूर से नियंत्रित करने की अनुमति देती है।</p>', '1724185141835444.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 16:04:46', NULL),
(23, 13, 12, 19, 44, 'ONIDA 6.5 kg Washer only', 'ओनिडा 6.5 किलो वॉशर केवल', 'onida-65-kg-washer-only', 'ओनिडा-6.5-किलो-वॉशर-केवल', 'Liliput', 100, 'Washing Machine,Washer', 'Washing Machine,Washer', 'Medium', 'Medium', 'Red', 'Red', '5800.00', '5400.00', 'Looking for a washing machine that’s easy on the pocket? The Onida semi-automatic washing machine is an ideal pick.', 'ऐसी वॉशिंग मशीन की तलाश है जो जेब पर आसान हो? ओनिडा सेमी-ऑटोमैटिक वाशिंग मशीन एक आदर्श पिक है।', '<p>&nbsp;</p>\r\n\r\n<p>Looking for a washing machine that&rsquo;s easy on the pocket? The Onida semi-automatic washing machine is an ideal pick. Featuring pulsator technology, this washing machine ensures you have fresh-smelling and thoroughly cleaned clothes every time. It has a maximum wash load capacity of 6.5kg, making it easy for you to manage your daily and weekly laundry needs.</p>', '<p>ऐसी वॉशिंग मशीन की तलाश है जो जेब पर आसान हो? ओनिडा सेमी-ऑटोमैटिक वाशिंग मशीन एक आदर्श पिक है। पल्सेटर तकनीक की विशेषता के साथ, यह वॉशिंग मशीन सुनिश्चित करती है कि आपके पास हर बार ताज़ा महक वाले और अच्छी तरह से साफ किए गए कपड़े हों। इसकी अधिकतम धुलाई भार क्षमता 6.5 किग्रा है, जिससे आपके लिए अपनी दैनिक और साप्ताहिक लॉन्ड्री आवश्यकताओं का प्रबंधन करना आसान हो जाता है।</p>', '1724185436288917.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 16:09:27', NULL),
(24, 14, 13, 23, 55, 'MamyPoko Pants Standard Diapers', 'मैमीपोको पैंट्स स्टैंडर्ड डायपर', 'mamypoko-pants-standard-diapers', 'मैमीपोको-पैंट्स-स्टैंडर्ड-डायपर', '123456', 100, 'Baby Care,Diapers', 'Baby Care,Diapers', 'Small', 'Small', 'White', 'White', '399.00', '339.00', 'This new and improved Mamy Poko Pants diapers are way more efficient and useful than the cloth nappies.', 'यह नया और बेहतर मैमी पोको पैंट डायपर क्लॉथ नैपी की तुलना में कहीं अधिक कुशल और उपयोगी है।', '<p>This new and improved Mamy Poko Pants diapers are way more efficient and useful than the cloth nappies. In this Standard diaper pack, you will 46 pant-style diapers which are highly absorbent and are comfortable to wear as well.</p>\r\n\r\n<p><strong>Small Size</strong></p>\r\n\r\n<p>The diapers in this set are small in size and are ideal for babies aged between one to six months.</p>\r\n\r\n<p><strong>Elastic Closure</strong></p>\r\n\r\n<p>The diapers have a soft elastic waistband without any tapes, so it doesn&rsquo;t form any lines or hurt your baby&#39;s skin.</p>', '<p>यह नया और बेहतर मैमी पोको पैंट डायपर क्लॉथ नैपी की तुलना में कहीं अधिक कुशल और उपयोगी है। इस स्टैंडर्ड डायपर पैक में, आपको 46 पैंट-स्टाइल डायपर मिलेंगे जो अत्यधिक शोषक हैं और पहनने में भी आरामदायक हैं।</p>\r\n\r\n<p>छोटा आकार</p>\r\n\r\n<p>इस सेट के डायपर आकार में छोटे होते हैं और एक से छह महीने की उम्र के बच्चों के लिए आदर्श होते हैं।</p>\r\n\r\n<p>लोचदार बंद</p>\r\n\r\n<p>डायपर में बिना किसी टेप के एक नरम लोचदार कमरबंद होता है, इसलिए यह कोई रेखा नहीं बनाता है या आपके बच्चे की त्वचा को चोट नहीं पहुंचाता है।</p>', '1724198514979838.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 19:37:20', NULL),
(25, 15, 13, 23, 57, 'Nestle Lactogen Infant Formula (Stage 1)', 'नेस्ले लैक्टोजेन शिशु फार्मूला (चरण 1)', 'nestle-lactogen-infant-formula-stage-1', 'नेस्ले-लैक्टोजेन-शिशु-फार्मूला-(चरण-1)', '123', 100, 'Lactogen,Baby Food', 'Lactogen,Baby Food', 'Small', 'Small', NULL, NULL, '360.00', '350.00', 'The Nestle Lactogen Infant Formula (Stage 1) helps provide essential nourishment to infants from birth who are not breastfed.', 'नेस्ले लैक्टोजेन इन्फेंट फॉर्मूला (चरण 1) जन्म से ही उन शिशुओं को आवश्यक पोषण प्रदान करने में मदद करता है जो स्तनपान नहीं कर रहे हैं।', '<p>The Nestle Lactogen Infant Formula (Stage 1) helps provide essential nourishment to infants from birth who are not breastfed. This spray-dried formula is rich in probiotics and whey protein, which makes it nourishing and easy to digest. It comes in a Bag-in-Box packaging that ensures the formula inside remains hygienic and safe for consumption. Importantly, this formula should only be given to your infant after consulting a medical practitioner.</p>', '<p>नेस्ले लैक्टोजेन इन्फेंट फॉर्मूला (चरण 1) जन्म से ही उन शिशुओं को आवश्यक पोषण प्रदान करने में मदद करता है जो स्तनपान नहीं कर रहे हैं। यह स्प्रे-ड्राय फॉर्मूला प्रोबायोटिक्स और व्हे प्रोटीन से भरपूर होता है, जो इसे पौष्टिक और पचाने में आसान बनाता है। यह बैग-इन-बॉक्स पैकेजिंग में आता है जो सुनिश्चित करता है कि अंदर का फॉर्मूला स्वच्छ और उपभोग के लिए सुरक्षित रहे। महत्वपूर्ण बात यह है कि यह फार्मूला आपके शिशु को किसी चिकित्सक से परामर्श करने के बाद ही दिया जाना चाहिए।</p>', '1724198947631539.jpeg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 19:44:12', NULL),
(26, 17, 13, 23, 56, 'HIMALAYA Gentle Baby Wipes', 'हिमालय कोमल बेबी वाइप्स', 'himalaya-gentle-baby-wipes', 'हिमालय-कोमल-बेबी-वाइप्स', '123', 100, 'Baby,Wipes', 'Baby,Wipes', 'Small', 'Small', NULL, NULL, '200.00', '168.00', 'A baby’s skin is very delicate, constant wiping with ordinary cloth can rob your baby’s skin of its natural layer of protective oils. Himalaya’s Gentle Baby Wipes let you cleanse your baby’s delicate skin without robbing it of its natural moisture.', 'एक बच्चे की त्वचा बहुत नाजुक होती है, साधारण कपड़े से लगातार पोंछने से आपके बच्चे की त्वचा के सुरक्षात्मक तेलों की प्राकृतिक परत खत्म हो सकती है। हिमालय के जेंटल बेबी वाइप्स से आप अपने बच्चे की नाजुक त्वचा की प्राकृतिक नमी को खोए बिना उसे साफ कर सकते हैं।', '<p>A baby&rsquo;s skin is very delicate, constant wiping with ordinary cloth can rob your baby&rsquo;s skin of its natural layer of protective oils. Himalaya&rsquo;s Gentle Baby Wipes let you cleanse your baby&rsquo;s delicate skin without robbing it of its natural moisture.</p>\r\n\r\n<p><strong>Enriched with Skin-friendly Ingredients</strong></p>\r\n\r\n<p>Infused with skin-friendly properties of aloe vera and Indian lotus extracts, these pleasantly scented baby wipes effectively cleanse your baby&rsquo;s skin, and leave it moisturized and nourished. Replete with a hypoallergenic formula, these baby wipes are also mild and gentle on the baby&rsquo;s sensitive skin and do not cause rashes and irritation. These mild baby wipes effectively kill germs to keep the skin soft and germ-free and are ideal for use during diaper changes.</p>\r\n\r\n<p><strong>Mild and Gentle</strong></p>\r\n\r\n<p>Too much alcohol content in baby care items may leave your little one&rsquo;s skin dry in the long run. These rayon baby wipes are 99% water based, and contain moisturizing agents that keeps your baby&rsquo;s skin velvety soft.</p>', '<p>एक बच्चे की त्वचा बहुत नाजुक होती है, साधारण कपड़े से लगातार पोंछने से आपके बच्चे की त्वचा के सुरक्षात्मक तेलों की प्राकृतिक परत खत्म हो सकती है। हिमालय के जेंटल बेबी वाइप्स से आप अपने बच्चे की नाजुक त्वचा की प्राकृतिक नमी को खोए बिना उसे साफ कर सकते हैं।</p>\r\n\r\n<p>त्वचा के अनुकूल सामग्री से समृद्ध</p>\r\n\r\n<p>एलोवेरा और भारतीय कमल के अर्क के त्वचा के अनुकूल गुणों से प्रभावित, ये सुखद सुगंधित बेबी वाइप्स आपके बच्चे की त्वचा को प्रभावी ढंग से साफ करते हैं, और इसे नमीयुक्त और पोषित करते हैं। हाइपोएलर्जेनिक फॉर्मूला से भरपूर, ये बेबी वाइप्स बच्चे की संवेदनशील त्वचा पर हल्के और कोमल भी होते हैं और इससे रैशेज और जलन नहीं होती है। ये माइल्ड बेबी वाइप्स त्वचा को मुलायम और रोगाणु मुक्त रखने के लिए कीटाणुओं को प्रभावी ढंग से मारते हैं और डायपर बदलने के दौरान उपयोग के लिए आदर्श होते हैं।</p>\r\n\r\n<p>सौम्य और कोमल</p>\r\n\r\n<p>शिशु देखभाल की वस्तुओं में बहुत अधिक अल्कोहल की मात्रा लंबे समय में आपके बच्चे की त्वचा को शुष्क बना सकती है। ये रेयान बेबी वाइप्स 99% पानी आधारित हैं, और इनमें मॉइस्चराइजिंग एजेंट होते हैं जो आपके बच्चे की त्वचा को मखमली मुलायम रखते हैं।</p>', '1724199200910561.jpeg', NULL, 1, NULL, 1, NULL, 1, '2022-02-08 19:48:14', NULL),
(27, 18, 13, 21, 49, 'Lakmé Eyeconic Kajal Pencil', 'लैक्मे आईकोनिक काजल पेंसिल', 'lakme-eyeconic-kajal-pencil', 'लैक्मे-आईकोनिक-काजल-पेंसिल', '12345', 100, 'Eye,Pencil', 'Eye,Pencil', 'Small', 'Small', 'Black', 'Black', '185.00', '145.00', 'Accentuate the beauty of your eyes with the Lakme Eyeconic Kajal. This dermatologically tested kajal is just what you need for completing your eye makeup or carrying a simple, only-kajal look.', 'लैक्मे आईकोनिक काजल से अपनी आंखों की सुंदरता को निखारें। यह डर्मेटोलॉजिकली टेस्टेड काजल सिर्फ वही है जो आपको अपना आई मेकअप पूरा करने या सिंपल, ओनली-काजल लुक कैरी करने के लिए चाहिए।', '<p>&nbsp;</p>\r\n\r\n<p>Accentuate the beauty of your eyes with the Lakme Eyeconic Kajal. This dermatologically tested kajal is just what you need for completing your eye makeup or carrying a simple, only-kajal look. It&#39;s a smudge proof, water proof kajal and can add the dramatic and glamorous look to your eyes. It has intense matte texture for Eyeconic eyes. You can Experiment with a thin line or a bold wing, this kajal is great for day and night looks. Its long-lasting- up to 22 hours without smudging and is completely water proof. It is designed with an easy to use and convenient twist-up format. Just one stroke of the Lakme Eyeconic Kajal enhances your simple look to a more stylish avatar. Its beat all your timelines, be it meetings, travelling or just a day out and lasts fr 22 hrs. You are incomplete without kajal and this is a perfect everyday product! Get the Lakme Eyeconic Kajal in black, now. The balck Eyeconic goes best with your Eyeconic mascara. To enhance your eyes further. You can also use from our 4 eye quartet pallets to enhance your eye to wedding a wedding, party and work look. Draw a neat stroke on the upper lid, starting from the inner corner of the eyes, extending outwards. Repeat on the lower lid.</p>', '<p>लैक्मे आईकोनिक काजल से अपनी आंखों की सुंदरता को निखारें। यह डर्मेटोलॉजिकली टेस्टेड काजल सिर्फ वही है जो आपको अपना आई मेकअप पूरा करने या सिंपल, ओनली-काजल लुक कैरी करने के लिए चाहिए। यह एक स्मज प्रूफ, वाटर प्रूफ काजल है और आपकी आंखों में नाटकीय और ग्लैमरस लुक जोड़ सकती है। इसमें आईकोनिक आंखों के लिए तीव्र मैट बनावट है। आप पतली रेखा या बोल्ड विंग के साथ प्रयोग कर सकते हैं, यह काजल दिन और रात के लुक के लिए बहुत अच्छा है। इसका लंबे समय तक चलने वाला- 22 घंटे तक बिना धुंध के और पूरी तरह से पानी के सबूत है। इसे उपयोग में आसान और सुविधाजनक ट्विस्ट-अप प्रारूप के साथ डिज़ाइन किया गया है। लैक्मे आईकोनिक काजल का सिर्फ एक स्ट्रोक आपके सिंपल लुक को और भी स्टाइलिश अवतार में बदल देता है। यह आपकी सभी टाइमलाइन को मात देता है, चाहे वह मीटिंग हो, यात्रा हो या सिर्फ एक दिन बाहर हो और 22 घंटे तक चले। आप काजल के बिना अधूरे हैं और यह एक संपूर्ण दैनिक उत्पाद है! लैक्मे आईकोनिक काजल को अभी काले रंग में प्राप्त करें। balck Eyeconic आपके Eyeconic मस्करा के साथ सबसे अच्छा लगता है। अपनी आंखों को और बढ़ाने के लिए। शादी, पार्टी और वर्क लुक के लिए अपनी आंखों को बढ़ाने के लिए आप हमारे 4 आई क्वार्टेट पैलेट से भी उपयोग कर सकते हैं। आंखों के अंदरूनी कोने से शुरू होकर, बाहर की ओर बढ़ते हुए, ऊपरी ढक्कन पर एक साफ स्ट्रोक बनाएं। निचले ढक्कन पर दोहराएं।</p>', '1724199493903780.jpeg', 1, 1, NULL, NULL, NULL, 1, '2022-02-08 19:52:53', NULL),
(28, 19, 13, 21, 51, 'L\'Oréal Professionnel Serie Expert Absolut Repair Combo - Shampoo (300 ml) + Masque (250 ml)  (1 Items in the set)', 'लोरियल प्रोफेशनल सेरी एक्सपर्ट एब्सोल्यूट रिपेयर कॉम्बो - शैम्पू (300 मिली) + मस्के (250 मिली) (सेट में 1 आइटम)', 'loreal-professionnel-serie-expert-absolut-repair-combo-shampoo-300-ml-masque-250-ml-1-items-in-the-set', 'लोरियल-प्रोफेशनल-सेरी-एक्सपर्ट-एब्सोल्यूट-रिपेयर-कॉम्बो---शैम्पू-(300-मिली)-+-मस्के-(250-मिली)-(सेट-में-1-आइटम)', '12345', 100, 'Hair,Shampoo,Masque', 'Hair,Shampoo,Masque', 'Small', 'Small', 'Gold', 'Gold', '1485.00', '1336.00', 'Powered by Gold Quinoa and Wheat Protein, the L\'Oreal Professionnel Serie Expert Absolut Repair nourishing hair shampoo and masque combo helps repair damaged hair.', 'गोल्ड क्विनोआ और व्हीट प्रोटीन द्वारा संचालित, लोरियल प्रोफेशनल सीरी एक्सपर्ट एब्सोल्यूट रिपेयर पौष्टिक हेयर शैम्पू और मस्क कॉम्बो क्षतिग्रस्त बालों की मरम्मत में मदद करता है।', '<p>Powered by Gold Quinoa and Wheat Protein, the L&#39;Oreal Professionnel Serie Expert Absolut Repair nourishing hair shampoo and masque combo helps repair damaged hair. It nourishes and strengthens the hair fiber leaving hair feeling soft and hydrated.</p>', '<p>गोल्ड क्विनोआ और व्हीट प्रोटीन द्वारा संचालित, लोरियल प्रोफेशनल सीरी एक्सपर्ट एब्सोल्यूट रिपेयर पौष्टिक हेयर शैम्पू और मस्क कॉम्बो क्षतिग्रस्त बालों की मरम्मत में मदद करता है। यह बालों के फाइबर को पोषण और मजबूत करता है जिससे बाल मुलायम और हाइड्रेटेड महसूस होते हैं।</p>', '1724199773602259.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 19:57:20', NULL),
(29, 20, 13, 21, 58, 'What\'s Up Wellness Beauty Gummies For Healthy Hair, Skin & Nails', 'क्या चल रहा है स्वस्थ बालों, त्वचा और नाखूनों के लिए वेलनेस ब्यूटी गमीज़', 'whats-up-wellness-beauty-gummies-for-healthy-hair-skin-nails', 'क्या-चल-रहा-है-स्वस्थ-बालों,-त्वचा-और-नाखूनों-के-लिए-वेलनेस-ब्यूटी-गमीज़', '12345', 30, 'Wellness,Beauty,Gummies', 'Wellness,Beauty,Gummies', 'Small', 'Small', NULL, NULL, '899.00', '699.00', 'A delicious blend of essential vitamins and superfoods in the form of a cute & friendly gummy that will improve the quality of your hair, skin & nails.', 'आवश्यक विटामिन और सुपरफूड का एक स्वादिष्ट मिश्रण एक प्यारा और मैत्रीपूर्ण गमी के रूप में जो आपके बालों, त्वचा और नाखूनों की गुणवत्ता में सुधार करेगा। हमारी गमियां विशेषज्ञों द्वारा तैयार की गई हैं और इनमें इष्टतम पोषक तत्व अवशोषण के लिए सही खुराक है।', '<p>A delicious blend of essential vitamins and superfoods in the form of a cute &amp; friendly gummy that will improve the quality of your hair, skin &amp; nails. Our gummies have been formulated by experts and contain the perfect dose for optimum nutrient absorption. The natural flavor has been derived from strawberries and is advised to take once daily for at least 3 weeks to see visible results and continue it for seeing the full impact. Each gummy is separately packed keeping it travel-friendly and the outer packaging is handmade in a facility that rehabilitates ex-convicts. In our endeavor to give back &amp; be eco-friendly, you might see some marginal differences in finish &amp; color since each box is unique.</p>', '<p>आवश्यक विटामिन और सुपरफूड का एक स्वादिष्ट मिश्रण एक प्यारा और मैत्रीपूर्ण गमी के रूप में जो आपके बालों, त्वचा और नाखूनों की गुणवत्ता में सुधार करेगा। हमारी गमियां विशेषज्ञों द्वारा तैयार की गई हैं और इनमें इष्टतम पोषक तत्व अवशोषण के लिए सही खुराक है। प्राकृतिक स्वाद स्ट्रॉबेरी से प्राप्त किया गया है और सलाह दी जाती है कि दृश्यमान परिणाम देखने और पूर्ण प्रभाव देखने के लिए इसे जारी रखने के लिए कम से कम 3 सप्ताह तक रोजाना एक बार लें। प्रत्येक गमी को यात्रा के अनुकूल रखते हुए अलग से पैक किया जाता है और बाहरी पैकेजिंग को एक ऐसी सुविधा में हस्तनिर्मित किया जाता है जो पूर्व दोषियों का पुनर्वास करती है। वापस देने और पर्यावरण के अनुकूल होने के हमारे प्रयास में, आप फिनिश और रंग में कुछ मामूली अंतर देख सकते हैं क्योंकि प्रत्येक बॉक्स अद्वितीय है।</p>', '1724200138861419.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 20:03:08', NULL),
(30, 18, 13, 21, 50, 'Lakmé Cushion Matte Lipstick', 'लैक्मे कुशन मैट लिपस्टिक', 'lakme-cushion-matte-lipstick', 'लैक्मे-कुशन-मैट-लिपस्टिक', '12345', 100, 'Lipstick,Beauty', 'Lipstick,Beauty', 'Small', 'Small', 'Pink', 'Pink', '284.00', '212.00', 'Presenting the new Lakm Cushion Matte Lipstick. An exclusive new matte lipstick with a revolutionary soft matte formula that makes matte lips feel soft and comfortable.', 'पेश है नई लैक्‍म कुशन मैट लिपस्टिक। क्रांतिकारी सॉफ्ट मैट फ़ॉर्मूला के साथ एक विशेष नई मैट लिपस्टिक जो मैट होंठों को नरम और आरामदायक महसूस कराती है।', '<p>Presenting the new Lakm Cushion Matte Lipstick. An exclusive new matte lipstick with a revolutionary soft matte formula that makes matte lips feel soft and comfortable. This soft matte lip colour has an intense colour payoff that gives lips a matte yet soft focus effect. The soft matte formula is enriched with rose oil extracts from France which give your matte lips a moisturized, comfortable feel. Its non-drying formula doesnt dry your lips and leaves them feeling soft and looking intensely matte. The new Lakm Cushion Matte Lipstick cushions your lips in a single stroke with its smooth and creamy application. To get an even and uniform matte finish on your lips, start by defining your cupids bow, then smoothly glide the lipstick to the other edge of both your upper and lower lips. Lakm Cushion Matte is a water resistant soft matte lipstick that gives you a long lasting intense matte color and cushion soft lips all day. Choose from 20 vibrant matte shades and wear cushiony soft lips for a variety of occasions. To complete your soft matte look, pair your cushion matte lips with Lakm Eyeconic Lash Curling Mascara, and Lakm Impact Eyeliner. Try it now !</p>', '<p>पेश है नई लैक्&zwj;म कुशन मैट लिपस्टिक। क्रांतिकारी सॉफ्ट मैट फ़ॉर्मूला के साथ एक विशेष नई मैट लिपस्टिक जो मैट होंठों को नरम और आरामदायक महसूस कराती है। इस मुलायम मैट होंठ के रंग में एक गहन रंग का भुगतान होता है जो होंठों को एक मैट लेकिन मुलायम फोकस प्रभाव देता है। नरम मैट फॉर्मूला फ्रांस से गुलाब के तेल के अर्क से समृद्ध है जो आपके मैट होंठों को नमीयुक्त, आरामदायक एहसास देता है। इसका गैर-सुखाने वाला फॉर्मूला आपके होंठों को सूखा नहीं करता है और उन्हें नरम महसूस करता है और तीव्रता से मैट दिखता है। नई लैक्&zwj;म कुशन मैट लिपस्टिक अपने स्मूद और क्रीमी एप्लिकेशन से आपके होंठों को एक ही झटके में आराम पहुंचाती है। अपने होठों पर एक समान और समान मैट फ़िनिश पाने के लिए, अपने कामदेव धनुष को परिभाषित करके शुरू करें, फिर लिपस्टिक को अपने ऊपरी और निचले दोनों होंठों के दूसरे किनारे पर आसानी से ग्लाइड करें। लैक्म कुशन मैट एक पानी प्रतिरोधी मुलायम मैट लिपस्टिक है जो आपको पूरे दिन लंबे समय तक चलने वाला तीव्र मैट रंग और कुशन मुलायम होंठ देता है। 20 जीवंत मैट रंगों में से चुनें और विभिन्न अवसरों के लिए कुशन वाले मुलायम होंठ पहनें। अपने सॉफ्ट मैट लुक को पूरा करने के लिए, अपने कुशन मैट लिप्स को लैक्म आईकोनिक लैश कर्लिंग मस्कारा और लैक्म इम्पैक्ट आईलाइनर के साथ पेयर करें। अब इसे आजमाओ !</p>', '1724200349927199.jpeg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 20:06:30', NULL),
(31, 21, 13, 22, 52, 'Pepsi Black Can  (250 ml)', 'पेप्सी ब्लैक कैन (250 मिली)', 'pepsi-black-can-250-ml', 'पेप्सी-ब्लैक-कैन-(250-मिली)', '12345', 100, 'Pepsi,Drinks', 'Pepsi,Drinks', 'Small', 'Small', 'Black', 'Black', '30.00', '24.00', 'A can of Pepsi Black is a good option for those who want to drink a refreshing and tasty beverage alongside their food', 'पेप्सी ब्लैक की कैन उन लोगों के लिए एक अच्छा विकल्प है जो अपने भोजन के साथ एक ताज़ा और स्वादिष्ट पेय पीना चाहते हैं।', '<p>A can of Pepsi Black is a good option for those who want to drink a refreshing and tasty beverage alongside their food. It has zero calories so you can enjoy each sip without feeling guilty.</p>', '<p>पेप्सी ब्लैक की कैन उन लोगों के लिए एक अच्छा विकल्प है जो अपने भोजन के साथ एक ताज़ा और स्वादिष्ट पेय पीना चाहते हैं। इसमें शून्य कैलोरी होती है इसलिए आप दोषी महसूस किए बिना प्रत्येक घूंट का आनंद ले सकते हैं।</p>', '1724200713937948.jpeg', 1, 1, NULL, NULL, NULL, 1, '2022-02-08 20:12:17', NULL),
(32, 22, 13, 22, 53, 'Cadbury Dairy Milk Fruit and Nut Chocolate Bar, 36 gm Pack of 12 Bar', 'कैडबरी डेयरी मिल्क फ्रूट एंड नट चॉकलेट बार, 36 ग्राम 12 बार का पैक', 'cadbury-dairy-milk-fruit-and-nut-chocolate-bar-36-gm-pack-of-12-bar', 'कैडबरी-डेयरी-मिल्क-फ्रूट-एंड-नट-चॉकलेट-बार,-36-ग्राम-12-बार-का-पैक', '12345', 12, 'Chocolate,Cadbury', 'Chocolate,Cadbury', 'Medium', 'Medium', 'Brown', 'Brown', '550.00', '500.00', 'The classic taste of Cadbury chocolates enriched with the real goodness of cashews, raisins and apricots, offers you the reason to celebrate every small and big occasion of happiness', 'काजू, किशमिश और खुबानी की असली अच्छाई से समृद्ध कैडबरी चॉकलेट का क्लासिक स्वाद, आपको खुशी के हर छोटे और बड़े अवसर का जश्न मनाने का कारण प्रदान करता है।', '<p>The classic taste of Cadbury chocolates enriched with the real goodness of cashews, raisins and apricots, offers you the reason to celebrate every small and big occasion of happiness. In short, Indulge in a rich, smooth and creamy celebration.</p>', '<p>काजू, किशमिश और खुबानी की असली अच्छाई से समृद्ध कैडबरी चॉकलेट का क्लासिक स्वाद, आपको खुशी के हर छोटे और बड़े अवसर का जश्न मनाने का कारण प्रदान करता है। संक्षेप में, एक समृद्ध, सहज और मलाईदार उत्सव का आनंद लें।</p>', '1724201172694053.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 20:19:34', NULL),
(33, 23, 13, 22, 54, 'Farmley Roasted & Flavoured Makhana- 4 Flavour Combo Pack', 'फार्मली रोस्टेड और फ्लेवर्ड मखाना- 4 फ्लेवर कॉम्बो पैक', 'farmley-roasted-flavoured-makhana-4-flavour-combo-pack', 'फार्मली-रोस्टेड-और-फ्लेवर्ड-मखाना--4-फ्लेवर-कॉम्बो-पैक', '12345', 10, 'Farmley,Makhana', 'Farmley,Makhana', 'Small', 'Small', NULL, NULL, '716.00', '449.00', 'Farmley Phool Makhana or fox nuts are hygienically packed in a HACCP certified unit.\r\nHigh Protein; Help in Weight Loss ; Slows down the aging process. Flavonoids present in the fox nuts are also anti-oxidants.', 'फार्मली फूल मखाना या फॉक्स नट्स को एचएसीसीपी प्रमाणित इकाई में स्वास्थ्यकर पैक किया जाता है।\r\nउच्च प्रोटीन; वजन घटाने में मदद; उम्र बढ़ने की प्रक्रिया को धीमा कर देता है। फॉक्स नट्स में मौजूद फ्लेवोनोइड्स भी एंटी-ऑक्सीडेंट होते हैं।', '<p>Farmley Phool Makhana or fox nuts are hygienically packed in a HACCP certified unit.<br />\r\nHigh Protein; Help in Weight Loss ; Slows down the aging process. Flavonoids present in the fox nuts are also anti-oxidants.<br />\r\nPerfect anytime snacking options for all ages: be it kids or adults<br />\r\nNo artificial flavors, no preservatives.<br />\r\nPhool Makhana also finds significance in religious ceremonies in India and is a popular &#39;fasting&#39; dish prepared during Navratri and other occasions.</p>', '<p>फार्मली फूल मखाना या फॉक्स नट्स को एचएसीसीपी प्रमाणित इकाई में स्वास्थ्यकर पैक किया जाता है।<br />\r\nउच्च प्रोटीन; वजन घटाने में मदद; उम्र बढ़ने की प्रक्रिया को धीमा कर देता है। फॉक्स नट्स में मौजूद फ्लेवोनोइड्स भी एंटी-ऑक्सीडेंट होते हैं।<br />\r\nसभी उम्र के लिए किसी भी समय स्नैकिंग विकल्प बिल्कुल सही: चाहे वह बच्चे हों या वयस्क<br />\r\nकोई कृत्रिम स्वाद नहीं, कोई संरक्षक नहीं।<br />\r\nफूल मखाना भारत में धार्मिक समारोहों में भी महत्व रखता है और नवरात्रि और अन्य अवसरों के दौरान तैयार किया जाने वाला एक लोकप्रिय &#39;उपवास&#39; व्यंजन है।</p>', '1724201555147019.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 20:25:39', NULL),
(34, 11, 10, 12, 24, 'LG 21.5 inch Full HD IPS Panel Ultra Thin Monitor', 'एलजी 21.5 इंच फुल एचडी आईपीएस पैनल अल्ट्रा थिन मॉनिटर', 'lg-215-inch-full-hd-ips-panel-ultra-thin-monitor', 'एलजी-21.5-इंच-फुल-एचडी-आईपीएस-पैनल-अल्ट्रा-थिन-मॉनिटर', '22MK600M', 100, 'Monitor', 'Monitor', 'Medium', 'Medium', 'Black', 'Black', '13000.00', '11799.00', 'Bring home this amazing LG monitor and enjoy a never-before visual experience on its Full HD IPS display.', 'इस अद्भुत एलजी मॉनिटर को घर ले आएं और इसके फुल एचडी आईपीएस डिस्प्ले पर पहले कभी न देखने वाले अनुभव का आनंद लें।', '<p>Bring home this amazing LG monitor and enjoy a never-before visual experience on its Full HD IPS display. You can enjoy seamless motion, with minimal screen tearing and stuttering, while playing fast and graphic-rich games, thanks to the Radeon FreeSync technology. This monitor comes with thin bezels on three of its sides so you can enjoy an immersive viewing experience. The Dynamic Action Sync mode of this LG monitor helps reduce input lag so you won&rsquo;t miss out on any action.</p>', '<p>इस अद्भुत एलजी मॉनिटर को घर ले आएं और इसके फुल एचडी आईपीएस डिस्प्ले पर पहले कभी न देखने वाले अनुभव का आनंद लें। Radeon FreeSync तकनीक की बदौलत तेज और ग्राफिक-समृद्ध गेम खेलते हुए, आप न्यूनतम स्क्रीन फाड़ और हकलाने के साथ सहज गति का आनंद ले सकते हैं। यह मॉनिटर इसके तीन किनारों पर पतले बेज़ेल्स के साथ आता है ताकि आप देखने के एक शानदार अनुभव का आनंद ले सकें। इस एलजी मॉनिटर का डायनामिक एक्शन सिंक मोड इनपुट लैग को कम करने में मदद करता है ताकि आप किसी भी कार्रवाई से न चूकें।</p>', '1724202395718736.jpeg', NULL, NULL, 1, 1, NULL, 1, '2022-02-08 20:39:01', NULL);
INSERT INTO `products` (`id`, `brand_id`, `category_id`, `subcategory_id`, `subsubcategory_id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `product_code`, `quantity`, `tags_en`, `tags_hin`, `size_en`, `size_hin`, `color_en`, `color_hin`, `selling_price`, `discount_price`, `short_description_en`, `short_description_hin`, `long_description_en`, `long_description_hin`, `thumbnail`, `hot_deals`, `featured`, `special_offer`, `special_deals`, `digital_file`, `status`, `created_at`, `updated_at`) VALUES
(35, 24, 10, 12, 23, 'HP LaserJet Pro MFP M126nw Multi-function Monochrome Laser Printer', 'एचपी लेज़रजेट प्रो एमएफपी एम126एनडब्लू मल्टी-फ़ंक्शन मोनोक्रोम लेज़र प्रिंटर', 'hp-laserjet-pro-mfp-m126nw-multi-function-monochrome-laser-printer', 'एचपी-लेज़रजेट-प्रो-एमएफपी-एम126एनडब्लू-मल्टी-फ़ंक्शन-मोनोक्रोम-लेज़र-प्रिंटर', '12345', 100, 'HP,Printer', 'HP,Printer', 'Medium', 'Medium', 'Black', 'Black', '21329.00', '19399.00', 'Bring home the HP LaserJet Pro MFP M126nw Multifunction Printer and print, scan, or copy documents and reports with ease.', 'HP LaserJet Pro MFP M126nw मल्टीफ़ंक्शन प्रिंटर घर लाएं और आसानी से दस्तावेज़ों और रिपोर्ट को प्रिंट, स्कैन या कॉपी करें।', '<p>Bring home the HP LaserJet Pro MFP M126nw Multifunction Printer and print, scan, or copy documents and reports with ease. The display panel features icons for these functions, so you can get your work done without any hassles. Moreover, you can also use your smartphones and other compatible devices to take printouts without accessing a network.</p>', '<p>HP LaserJet Pro MFP M126nw मल्टीफ़ंक्शन प्रिंटर घर लाएं और आसानी से दस्तावेज़ों और रिपोर्ट को प्रिंट, स्कैन या कॉपी करें। डिस्प्ले पैनल में इन कार्यों के लिए आइकन हैं, जिससे आप बिना किसी परेशानी के अपना काम कर सकते हैं। इसके अलावा, आप अपने स्मार्टफोन और अन्य संगत उपकरणों का उपयोग नेटवर्क तक पहुंच के बिना प्रिंटआउट लेने के लिए भी कर सकते हैं।</p>', '1724202712508885.jpeg', 1, 1, NULL, NULL, NULL, 1, '2022-02-08 20:44:03', NULL),
(37, 25, 10, 12, 25, 'BOSS S13A Latest FHD 3D Android Smart Wi-Fi Bluetooth Projector', 'बॉस S13A नवीनतम FHD 3D Android स्मार्ट वाई-फाई ब्लूटूथ प्रोजेक्टर', 'boss-s13a-latest-fhd-3d-android-smart-wi-fi-bluetooth-projector', 'बॉस-S13A-नवीनतम-FHD-3D-Android-स्मार्ट-वाई-फाई-ब्लूटूथ-प्रोजेक्टर', '1920X1080P', 100, 'Boss,Projector', 'Boss,Projector', 'Small', 'Small', 'White', 'White', '125000.00', '16396.00', 'Boss Latest Model BOSS S13A FHD 3D Android Smart Wi-Fi Bluetooth Projector Has Powerful 4000 Lumens With 1920X1080p Resolution.', 'बॉस नवीनतम मॉडल बॉस S13A FHD 3D एंड्रॉइड स्मार्ट वाई-फाई ब्लूटूथ प्रोजेक्टर में 1920X1080p रिज़ॉल्यूशन के साथ शक्तिशाली 4000 लुमेन हैं।', '<p>Boss Latest Model BOSS S13A FHD 3D Android Smart Wi-Fi Bluetooth Projector Has Powerful 4000 Lumens With 1920X1080p Resolution. Smart Android Projector, the latest TV version android system. Built-in Google play store, download and install more than 5000+ apps directly from Google Play Store Pre-installed Netflix, Youtube, Chrome etc. Directly install apps such as Prime video, Hotstar etc In Boss S13A. Dual channel Wifi (2.4Ghz and 5Ghz) and Bluetooth 5.0 for interruption free Audio video streaming. These all features comes with a unique Keystone &amp; Zoom In &amp; Zoom Out Feature. Bigger - 250&quot; Large Display Watch your favourite movie on a theater like large screen at the leisure of your home. FULL HD 1920X1080P Native Display Immersive Dolby Digital Plus Sound with large integrated sound chamber and 2x10 Watt speakers. 40-250 inch projection area Contrast Ratio : 4000 : 01 More than 60000 hours of Lamp life OS: Official Google Android 9.0 Memory: RAM 1 GB, ROM 8GB All the content that you love, exactly how you want it. Welcome to a smarter way to watch. Whatever you&#39;re into&mdash;from Hotstar, Netflix, SonyLiv to YouTube to tons of games&mdash;there&#39;s an app you&#39;re sure to love. No Ultra Violet rays from Boss Projector. Support 3D: Available red-blue 3D Glasses to watch Red-blue Film source 3D Movies. 1 Year Brand Warranty And 60,000 Hours Life, Pickup And Drop Facility Also Available.</p>', '<p>बॉस नवीनतम मॉडल बॉस S13A FHD 3D एंड्रॉइड स्मार्ट वाई-फाई ब्लूटूथ प्रोजेक्टर में 1920X1080p रिज़ॉल्यूशन के साथ शक्तिशाली 4000 लुमेन हैं। स्मार्ट एंड्रॉइड प्रोजेक्टर, नवीनतम टीवी संस्करण एंड्रॉइड सिस्टम। बिल्ट-इन Google play store, सीधे Google Play Store से 5000+ से अधिक ऐप्स डाउनलोड और इंस्टॉल करें नेटफ्लिक्स, यूट्यूब, क्रोम इत्यादि प्री-इंस्टॉल करें। सीधे बॉस एस 13 ए में प्राइम वीडियो, हॉटस्टार इत्यादि जैसे ऐप्स इंस्टॉल करें। डुअल चैनल वाईफाई (2.4Ghz और 5Ghz) और ब्लूटूथ 5.0 बिना रुकावट ऑडियो वीडियो स्ट्रीमिंग के लिए। ये सभी सुविधाएँ एक अद्वितीय कीस्टोन और ज़ूम इन और ज़ूम आउट फ़ीचर के साथ आती हैं। बड़ा - 250&quot; बड़ा डिस्प्ले अपने घर के आराम में बड़ी स्क्रीन की तरह थिएटर पर अपनी पसंदीदा फिल्म देखें। फुल एचडी 1920X1080P नेटिव डिस्प्ले इमर्सिव डॉल्बी डिजिटल प्लस साउंड जिसमें बड़े इंटीग्रेटेड साउंड चेंबर और 2x10 वाट के स्पीकर हैं। 40-250 इंच प्रोजेक्शन एरिया कंट्रास्ट अनुपात : 4000 : 01 लैंप लाइफ के 60000 घंटे से अधिक ओएस: आधिकारिक Google एंड्रॉइड 9.0 मेमोरी: रैम 1 जीबी, रॉम 8 जीबी सभी सामग्री जो आपको पसंद है, ठीक उसी तरह जैसे आप चाहते हैं। देखने के लिए एक बेहतर तरीके से आपका स्वागत है। जो कुछ भी आप &#39; हॉटस्टार, नेटफ्लिक्स, सोनीलिव से लेकर YouTube से लेकर ढेर सारे गेम तक&mdash;एक ऐसा ऐप है जिसे आप निश्चित रूप से पसंद करेंगे। बॉस प्रोजेक्टर से कोई अल्ट्रा वायलेट किरणें नहीं हैं। समर्थन 3डी: रेड-ब्लू फिल्म देखने के लिए उपलब्ध लाल-नीला 3डी चश्मा स्रोत 3डी मूवीज 1 साल की ब्रांड वारंटी और 60,000 घंटे का जीवन, पिकअप और ड्रॉप की सुविधा भी उपलब्ध है।</p>', '1724203218190472.jpg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 20:52:05', NULL),
(38, 24, 10, 14, 29, 'HP M270 Wired Optical Gaming Mouse', 'एचपी एम270 वायर्ड ऑप्टिकल गेमिंग माउस', 'hp-m270-wired-optical-gaming-mouse', 'एचपी-एम270-वायर्ड-ऑप्टिकल-गेमिंग-माउस', 'M270', 50, 'Gaming,Mouse', 'Gaming,Mouse', 'Small', 'Small', 'Black', 'Black', '699.00', '649.00', 'Work on your Powerpoint presentations with ease with this mouse from HP.', 'HP के इस माउस से अपने पावरपॉइंट प्रस्तुतियों पर आसानी से काम करें।', '<p>Work on your Powerpoint presentations with ease with this mouse from HP. This ergonomically designed mouse lets you seamlessly navigate through different tabs with precision and speed. With a sleek and lightweight body, you can carry this mouse wherever you go. This mouse comes with a metal scroll wheel with a backlight for ease of use. Moreover, the visual effects, LED lights and 7 keys aid your intensive gaming sessions and adds a touch of style while you play your video games.&nbsp;&nbsp;</p>', '<p>HP के इस माउस से अपने पावरपॉइंट प्रस्तुतियों पर आसानी से काम करें। एर्गोनॉमिक रूप से डिज़ाइन किया गया यह माउस आपको सटीक और गति के साथ विभिन्न टैब के माध्यम से सहजता से नेविगेट करने देता है। चिकने और हल्के शरीर के साथ, आप इस माउस को कहीं भी ले जा सकते हैं। यह माउस उपयोग में आसानी के लिए बैकलाइट के साथ मेटल स्क्रॉल व्हील के साथ आता है। इसके अलावा, दृश्य प्रभाव, एलईडी रोशनी और 7 कुंजियाँ आपके गहन गेमिंग सत्रों में सहायता करती हैं और जब आप अपने वीडियो गेम खेलते हैं तो शैली का एक स्पर्श जोड़ते हैं।</p>', '1724203465300363.jpg', NULL, 1, NULL, 1, NULL, 1, '2022-02-08 20:56:01', NULL),
(39, 26, 10, 14, 31, 'SMULY THE MIGHTY HULK Mousepad', 'स्मूली द माइटी हल्क माउसपैड', 'smuly-the-mighty-hulk-mousepad', 'स्मूली-द-माइटी-हल्क-माउसपैड', '12345', 100, 'Mousepad', 'Mousepad', 'Small', 'Small', 'Black', 'Black', '399.00', '87.00', 'Speed-type surface mousepad is designed for gamers and daily as well as offical use by gamers', 'स्पीड-टाइप सरफेस माउसपैड गेमर्स के लिए डिज़ाइन किया गया है और गेमर्स द्वारा दैनिक और साथ ही ऑफ़िकल उपयोग के लिए', '<p>Speed-type surface mousepad is designed for gamers and daily as well as offical use by gamers Mouse Pad Size: 240mm x 200mm x 3.5 mm Fit for all gaming mouse regardless of types Quick response for consistent in control Smooth and fast movement of mouse Mouse moves quickly across the entire surface with zero hindrance Suits who need to hit targets faster and more efficiently with unbeatable quality.</p>', '<p>स्पीड-टाइप सरफेस माउसपैड गेमर्स के लिए डिज़ाइन किया गया है और गेमर्स द्वारा दैनिक और साथ ही ऑफ़िकल उपयोग के लिए माउस पैड का आकार: 240 मिमी x 200 मिमी x 3.5 मिमी सभी गेमिंग माउस के लिए फ़िट प्रकार की परवाह किए बिना नियंत्रण में संगत के लिए त्वरित प्रतिक्रिया माउस माउस की चिकनी और तेज़ गति चलती है शून्य बाधा के साथ पूरी सतह पर जल्दी से सूट जो अपराजेय गुणवत्ता के साथ लक्ष्यों को तेजी से और अधिक कुशलता से हिट करने की आवश्यकता है।</p>', '1724203886101805.jpg', 1, NULL, 1, NULL, NULL, 1, '2022-02-08 21:02:42', NULL),
(40, 28, 10, 13, 27, 'WEBKREATURE Back Cover for Infinix Hot 10 Play', 'Infinix Hot 10 Play के लिए वेबकेचर बैक कवर', 'webkreature-back-cover-for-infinix-hot-10-play', 'Infinix-Hot-10-Play-के-लिए-वेबकेचर-बैक-कवर', '123456', 100, 'Designer,Case', 'Designer,Case', 'Small', 'Small', 'Brown', 'Brown', '999.00', '155.00', 'Invest in your brand new device\'s protection today through this fit to use executive leather stand wallet case flip cover and save yourself from the heartbreak and agony of watching the scratches and damages on your device multiply periodically.', 'कार्यकारी लेदर स्टैंड वॉलेट केस फ्लिप कवर का उपयोग करने के लिए इस फिट के माध्यम से आज ही अपने ब्रांड के नए डिवाइस की सुरक्षा में निवेश करें और अपने डिवाइस पर खरोंच और क्षति को समय-समय पर गुणा करते हुए देखने की पीड़ा और पीड़ा से खुद को बचाएं।', '<p>Invest in your brand new device&#39;s protection today through this fit to use executive leather stand wallet case flip cover and save yourself from the heartbreak and agony of watching the scratches and damages on your device multiply periodically. This sleek executive flip cover case is designed to a perfect fit on your mobile and glossy leather surface further adds to its polished looks. This pouch comes with inner TPU back cover that does not break easily and aids in shock absorption during impacts. This wallet case comes with card slots to store receipts, cards or emergency cash. You can now video chat or watch movies hands free in landscape mode with the wallet stand. Perfect and precise cutouts allow easy access to all ports.</p>', '<p>कार्यकारी लेदर स्टैंड वॉलेट केस फ्लिप कवर का उपयोग करने के लिए इस फिट के माध्यम से आज ही अपने ब्रांड के नए डिवाइस की सुरक्षा में निवेश करें और अपने डिवाइस पर खरोंच और क्षति को समय-समय पर गुणा करते हुए देखने की पीड़ा और पीड़ा से खुद को बचाएं। यह चिकना कार्यकारी फ्लिप कवर केस आपके मोबाइल पर एकदम फिट होने के लिए डिज़ाइन किया गया है और चमकदार चमड़े की सतह इसके पॉलिश लुक में और इजाफा करती है। यह पाउच आंतरिक टीपीयू बैक कवर के साथ आता है जो आसानी से नहीं टूटता है और प्रभावों के दौरान सदमे अवशोषण में सहायता करता है। यह वॉलेट केस रसीदों, कार्डों या आपातकालीन नकदी को स्टोर करने के लिए कार्ड स्लॉट के साथ आता है। अब आप वीडियो चैट कर सकते हैं या वॉलेट स्टैंड के साथ लैंडस्केप मोड में हाथों से मुक्त फिल्में देख सकते हैं। सही और सटीक कटआउट सभी बंदरगाहों तक आसान पहुंच की अनुमति देते हैं।</p>', '1724206508179600.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-02-08 21:44:23', NULL),
(41, 27, 10, 13, 26, 'KARWAN Back Cover for OPPO Reno6 5G', 'OPPO Reno6 5G के लिए कारवां बैक कवर', 'karwan-back-cover-for-oppo-reno6-5g', 'OPPO-Reno6-5G-के-लिए-कारवां-बैक-कवर', '12345', 100, 'Mobile,Case', 'Mobile,Case', 'Small', 'Small', 'Blue', 'Blue', '999.00', '499.00', 'You can have both all round protection and convenience. It\'s protected from drops and scratches from all sides.', 'आपके पास सर्वांगीण सुरक्षा और सुविधा दोनों हो सकती हैं। यह सभी तरफ से बूंदों और खरोंचों से सुरक्षित है।', '<p>You can have both all round protection and convenience. It&#39;s protected from drops and scratches from all sides. Ultra durable due to the high density material used. Matte finish with scratch proof coating every minimalists dream. Beautiful and tough. A treat for eyes, Comes in a matte finish and with a scratch proof coating for lasting durability. Upper lip build design to help protect the screen when face down on a flat surface, It is a case that Is super protective since it has raised edges to protect screen from scratches. Slim and form fitted design the case easily covers your phone completely providing superior impact resistance in an extremely slim profile. Feather Light its sleek design provides ease and comfort in handling, without the additional weight and bulk of other traditional cases. Its unique air cushion technology and shock proof corners make your phone impact resistant from all angles on a drop. Some people could even say that KARWAN MOBILE ACCESSORIES makes their device even more elegant!</p>', '<p>आपके पास सर्वांगीण सुरक्षा और सुविधा दोनों हो सकती हैं। यह सभी तरफ से बूंदों और खरोंचों से सुरक्षित है। उपयोग की जाने वाली उच्च घनत्व सामग्री के कारण अल्ट्रा टिकाऊ। स्क्रैच प्रूफ कोटिंग के साथ मैट फिनिश हर मिनिमलिस्ट का सपना होता है। सुंदर और सख्त। आंखों के लिए एक उपचार, मैट फ़िनिश में आता है और स्थायी स्थायित्व के लिए एक स्क्रैच प्रूफ कोटिंग के साथ आता है। एक सपाट सतह पर नीचे की ओर होने पर स्क्रीन की सुरक्षा में मदद करने के लिए अपर लिप बिल्ड डिज़ाइन, यह एक ऐसा मामला है जो सुपर प्रोटेक्टिव है क्योंकि इसने स्क्रीन को खरोंच से बचाने के लिए किनारों को उठाया है। स्लिम और फॉर्म फिटेड डिज़ाइन केस आसानी से आपके फोन को पूरी तरह से कवर करता है और बेहद स्लिम प्रोफाइल में बेहतर प्रभाव प्रतिरोध प्रदान करता है। फेदर लाइट इसका चिकना डिजाइन अतिरिक्त वजन और अन्य पारंपरिक मामलों के थोक के बिना संभालने में आसानी और आराम प्रदान करता है। इसकी अनूठी एयर कुशन तकनीक और शॉक प्रूफ कॉर्नर आपके फोन को एक बूंद पर सभी कोणों से प्रतिरोधी बनाते हैं। कुछ लोग तो यहां तक ​​कह सकते हैं कि कारवां मोबाइल एक्सेसरीज उनके डिवाइस को और भी खूबसूरत बना देती हैं!</p>', '1724206719216839.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-02-08 21:47:44', NULL),
(42, 30, 10, 13, 28, 'Desirtech Edge To Edge Tempered Glass for Infinix Hot 10 Play', 'Infinix Hot 10 Play के लिए डेसिरटेक एज टू एज टेम्पर्ड ग्लास', 'desirtech-edge-to-edge-tempered-glass-for-infinix-hot-10-play', 'Infinix-Hot-10-Play-के-लिए-डेसिरटेक-एज-टू-एज-टेम्पर्ड-ग्लास', '12345', 10, 'Screen,Guard', 'Screen,Guard', 'Small', 'Small', NULL, NULL, '499.00', '119.00', 'Tempered Glass Straight Edge Screen Protector Guard For Your Device, Brand New And Good Quality.', 'आपके डिवाइस के लिए टेम्पर्ड ग्लास स्ट्रेट एज स्क्रीन प्रोटेक्टर गार्ड, बिल्कुल नया और अच्छी गुणवत्ता।', '<p>Tempered Glass Straight Edge Screen Protector Guard For Your Device, Brand New And Good Quality. Excellent Defensive Performance And Super High Transparency. Special Tempered Glass, Up To 9h Hardness, Super Strong And Durable, Against Burst, Impacts And Bumps. Nanometer Thin Oil Coating Surface, More Effectively To Protect From Fingerprints, Oil And Dirt, And To Filter Ultraviolet Ray. With Anti-Glare Coating, Makes It Possible To Use Your Phone In Sunlight Or In Brightly Lit Conditions. Adopts The Global Advanced Screen Protector Process Technology, It Has Only 0.25mm Thickness.</p>', '<p>आपके डिवाइस के लिए टेम्पर्ड ग्लास स्ट्रेट एज स्क्रीन प्रोटेक्टर गार्ड, बिल्कुल नया और अच्छी गुणवत्ता। उत्कृष्ट रक्षात्मक प्रदर्शन और सुपर उच्च पारदर्शिता। विशेष टेम्पर्ड ग्लास, 9h तक की कठोरता, सुपर मजबूत और टिकाऊ, फटने, प्रभाव और धक्कों के खिलाफ। नैनोमीटर पतली तेल कोटिंग सतह, उंगलियों के निशान, तेल और गंदगी से बचाने के लिए और पराबैंगनी किरण को फ़िल्टर करने के लिए अधिक प्रभावी ढंग से। एंटी-ग्लेयर कोटिंग के साथ, अपने फोन को धूप में या तेज रोशनी में इस्तेमाल करना संभव बनाता है। ग्लोबल एडवांस्ड स्क्रीन प्रोटेक्टर प्रोसेस टेक्नोलॉजी को अपनाता है, इसमें केवल 0.25 मिमी मोटाई होती है।</p>', '1724207063161754.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-02-08 21:53:12', NULL),
(43, 31, 9, 9, 16, 'Men Cargos', 'पुरुष कार्गो', 'men-cargos', 'पुरुष-कार्गो', '1001', 10, 'Cargos', 'Cargos', 'Small,Medium,Large', 'Small,Medium,Large', 'Brown', 'Brown', '2699.00', '1326.00', 'Men Cargos', 'पुरुष कार्गो', '<p>Men Cargos</p>', '<p>पुरुष कार्गो</p>', '1726579251508469.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 02:18:07', NULL),
(44, 31, 9, 9, 14, 'Skinny Men Dark Blue Jeans', 'स्कीनी मेन डार्क ब्लू जींस', 'skinny-men-dark-blue-jeans', 'स्कीनी-मेन-डार्क-ब्लू-जींस', '1210', 10, 'Jeans', 'Jeans', 'Small,Medium,Large', 'Small,Medium,Large', 'Blue', 'Blue', '1899.00', '804.00', 'Men\'s Cotton Stretch Skinny Jackson Blue Jeans', 'पुरुषों की कपास खिंचाव स्कीनी जैक्सन ब्लू जीन्स', '<p>Men&#39;s Cotton Stretch Skinny Jackson Blue Jeans</p>', '<p>पुरुषों की कपास खिंचाव स्कीनी जैक्सन ब्लू जीन्स</p>', '1726579614206729.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 02:23:53', NULL),
(45, 31, 9, 9, 15, 'Slim Fit Men Grey Cotton Blend Trousers', 'स्लिम फिट मेन ग्रे कॉटन ब्लेंड ट्राउजर', 'slim-fit-men-grey-cotton-blend-trousers', 'स्लिम-फिट-मेन-ग्रे-कॉटन-ब्लेंड-ट्राउजर', '1005', 10, 'Trousers', 'Trousers', 'Small,Medium,Large', 'Small,Medium,Large', 'Grey', 'Grey', '2229.00', '1145.00', 'Mens olive Cotton Spandex Super Slim Solid Trousers', 'मेन्स ऑलिव कॉटन स्पैन्डेक्स सुपर स्लिम सॉलिड ट्राउजर', '<p>Mens olive Cotton Spandex Super Slim Solid Trousers</p>', '<p>मेन्स ऑलिव कॉटन स्पैन्डेक्स सुपर स्लिम सॉलिड ट्राउजर</p>', '1726579934693878.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 02:28:59', NULL),
(46, 31, 9, 10, 18, 'MARWICK Sneakers For Men', 'पुरुषों के लिए मारविक स्नीकर्स', 'marwick-sneakers-for-men', 'पुरुषों-के-लिए-मारविक-स्नीकर्स', '1225', 10, 'Sneakers', 'Sneakers', 'Small,Medium,Large', 'Small,Medium,Large', 'Off White', 'Off White', '2499.00', '1374.00', 'Men Casual Textile Sneakers Lace-Ups', 'मेन कैजुअल टेक्सटाइल स्नीकर्स लेस-अप्स', '<p>Men Casual Textile Sneakers Lace-Ups</p>', '<p>मेन कैजुअल टेक्सटाइल स्नीकर्स लेस-अप्स</p>', '1726631339916040.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:06:02', NULL),
(47, 32, 9, 10, 19, 'Office Formal Shoes Slip On For Men', 'पुरुषों के लिए कार्यालय औपचारिक जूते पर्ची', 'office-formal-shoes-slip-on-for-men', 'पुरुषों-के-लिए-कार्यालय-औपचारिक-जूते-पर्ची', '1003', 10, 'Slip On', 'Slip On', 'Small,Medium,Large', 'Small,Medium,Large', 'Black', 'Black', '899.00', '789.00', 'Bata presents to you elegant and quality footwear for men just like an art.', 'बाटा आपके लिए एक कला की तरह पुरुषों के लिए सुरुचिपूर्ण और गुणवत्तापूर्ण जूते प्रस्तुत करता है।', '<p>Bata presents to you elegant and quality footwear for men just like an art. It&#39;s made for comfortable to wear. It provides you with a variety of designs and styles with unique designs and soles. These stylish shoes are the perfect inspiration for a fashionable look.</p>', '<p>बाटा आपके लिए एक कला की तरह पुरुषों के लिए सुरुचिपूर्ण और गुणवत्तापूर्ण जूते प्रस्तुत करता है। इसे पहनने में आरामदेह बनाया गया है। यह आपको अद्वितीय डिज़ाइन और तलवों के साथ विभिन्न प्रकार के डिज़ाइन और शैलियाँ प्रदान करता है। फैशनेबल लुक के लिए ये स्टाइलिश शूज़ परफेक्ट इंस्पिरेशन हैं।</p>', '1726631680860277.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:11:28', NULL),
(48, 32, 9, 10, 17, 'Sports Walking Shoes Walking Shoes For Men', 'पुरुषों के लिए स्पोर्ट्स वॉकिंग शूज़ वॉकिंग शूज़', 'sports-walking-shoes-walking-shoes-for-men', 'पुरुषों-के-लिए-स्पोर्ट्स-वॉकिंग-शूज़-वॉकिंग-शूज़', '1335', 10, 'Sports Shoes', 'Sports Shoes', 'Small,Medium,Large', 'Small,Medium,Large', 'Black', 'Black', '995.00', '993.00', 'Bata sport shoes, Good sports footwear for walking and jogging, morning walk and daily workout.', 'बाटा स्पोर्ट्स शूज, वॉकिंग और जॉगिंग के लिए अच्छे स्पोर्ट्स फुटवियर, मॉर्निंग वॉक और डेली वर्कआउट।', '<p>Bata sport shoes, Good sports footwear for walking and jogging, morning walk and daily workout.</p>', '<p>बाटा स्पोर्ट्स शूज, वॉकिंग और जॉगिंग के लिए अच्छे स्पोर्ट्स फुटवियर, मॉर्निंग वॉक और डेली वर्कआउट।</p>', '1726631942092012.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:15:37', NULL),
(49, 33, 9, 8, 12, 'Men Slim Fit Striped Casual Shirt', 'पुरुष स्लिम फ़िट धारीदार आरामदायक शर्ट', 'men-slim-fit-striped-casual-shirt', 'पुरुष-स्लिम-फ़िट-धारीदार-आरामदायक-शर्ट', '1450', 50, 'Casuals', 'Casuals', 'Small,Medium,Large', 'Small,Medium,Large', 'Black', 'Black', '1299.00', '779.00', 'Men Slim Fit Striped Casual Shirt', 'पुरुष स्लिम फ़िट धारीदार आरामदायक शर्ट', '<p>Men Slim Fit Striped Casual Shirt</p>', '<p>पुरुष स्लिम फ़िट धारीदार आरामदायक शर्ट</p>', '1726632217982909.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:20:00', NULL),
(52, 33, 9, 8, 13, 'Men Printed Cotton Blend Straight Kurta', 'मेन प्रिंटेड कॉटन ब्लेंड स्ट्रेट कुर्ता', 'men-printed-cotton-blend-straight-kurta', 'मेन-प्रिंटेड-कॉटन-ब्लेंड-स्ट्रेट-कुर्ता', '1362', 15, 'Kurta', 'Kurta', 'Small,Medium,Large', 'Small,Medium,Large', 'White', 'White', '1199.00', '959.00', 'Men Printed Cotton Blend Straight Kurta', 'मेन प्रिंटेड कॉटन ब्लेंड स्ट्रेट कुर्ता', '<p>Men Printed Cotton Blend Straight Kurta</p>', '<p>मेन प्रिंटेड कॉटन ब्लेंड स्ट्रेट कुर्ता</p>', '1726632501773608.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:24:31', NULL),
(53, 32, 9, 11, 22, 'Jennifer Sneakers For Women', 'महिलाओं के लिए जेनिफर स्नीकर्स', 'jennifer-sneakers-for-women', 'महिलाओं-के-लिए-जेनिफर-स्नीकर्स', '859', 24, 'Sneakers', 'Sneakers', 'Small,Medium,Large', 'Small,Medium,Large', 'White', 'White', '532.00', '432.00', 'Jennifer Sneakers For Women', 'महिलाओं के लिए जेनिफर स्नीकर्स', '<p>Jennifer Sneakers For Women</p>', '<p>महिलाओं के लिए जेनिफर स्नीकर्स</p>', '1726632712284061.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:27:51', NULL),
(54, 32, 9, 11, 20, 'Women KYLA Tan Flats Sandal', 'महिला KYLA टैन फ्लैट सैंडल', 'women-kyla-tan-flats-sandal', 'महिला-KYLA-टैन-फ्लैट-सैंडल', '1342', 16, 'Flats', 'Flats', 'Small,Medium,Large', 'Small,Medium,Large', 'Brown', 'Brown', '699.00', '431.00', 'Women KYLA Tan Flats Sandal', 'महिला KYLA टैन फ्लैट सैंडल', '<p>Women KYLA Tan Flats Sandal</p>', '<p>महिला KYLA टैन फ्लैट सैंडल</p>', '1726632885294861.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:30:36', NULL),
(55, 32, 9, 11, 21, 'Women LISA Grey Heels Sandal', 'महिला लिसा ग्रे हील्स सैंडल', 'women-lisa-grey-heels-sandal', 'महिला-लिसा-ग्रे-हील्स-सैंडल', '1452', 56, 'Heels', 'Heels', 'Small,Medium,Large', 'Small,Medium,Large', 'Grey', 'Grey', '899.00', '592.00', 'Women LISA Grey Heels Sandal', 'महिला लिसा ग्रे हील्स सैंडल', '<p>Women LISA Grey Heels Sandal</p>', '<p>महिला लिसा ग्रे हील्स सैंडल</p>', '1726633014550608.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:32:40', NULL),
(56, 34, 11, 17, 38, 'AJANTA Analog 26.5 cm X 26.5 cm Wall Clock  (Gold, With Glass)', 'अजंता एनालॉग 26.5 सेमी X 26.5 सेमी दीवार घड़ी (गोल्ड, ग्लास के साथ)', 'ajanta-analog-265-cm-x-265-cm-wall-clock-gold-with-glass', 'अजंता-एनालॉग-26.5-सेमी-X-26.5-सेमी-दीवार-घड़ी-(गोल्ड,-ग्लास-के-साथ)', '8654', 20, 'Clocks', 'Clocks', 'Medium', 'Medium', 'Gold', 'Gold', '270.00', '264.00', 'AJANTA Analog 26.5 cm X 26.5 cm Wall Clock  (Gold, With Glass).  \r\nClocks make a ticking noise as their mechanism counts out the seconds. The sound is feeble enough not to create a disturbance for the users', 'अजंता एनालॉग 26.5 सेमी X 26.5 सेमी दीवार घड़ी (गोल्ड, ग्लास के साथ) | घड़ियाँ एक गुदगुदी शोर करती हैं क्योंकि उनका तंत्र सेकंडों को गिनता है। उपयोगकर्ताओं के लिए परेशानी पैदा न करने के लिए ध्वनि काफी कमजोर है', '<p>AJANTA Analog 26.5 cm X 26.5 cm Wall Clock &nbsp;(Gold, With Glass).&nbsp;</p>\r\n\r\n<p>Clocks make a ticking noise as their mechanism counts out the seconds. The sound is feeble enough not to create a disturbance for the users</p>', '<p>अजंता एनालॉग 26.5 सेमी X 26.5 सेमी दीवार घड़ी (गोल्ड, ग्लास के साथ) |&nbsp;घड़ियाँ एक गुदगुदी शोर करती हैं क्योंकि उनका तंत्र सेकंडों को गिनता है। उपयोगकर्ताओं के लिए परेशानी पैदा न करने के लिए ध्वनि काफी कमजोर है</p>', '1726633358507218.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:38:08', NULL),
(57, 35, 11, 17, 37, 'WIPRO NE9001 Bulb Emergency Light', 'विप्रो NE9001 बल्ब इमरजेंसी लाइट', 'wipro-ne9001-bulb-emergency-light', 'विप्रो-NE9001-बल्ब-इमरजेंसी-लाइट', '162', 50, 'Bulb', 'Bulb', 'Small', 'Small', 'White', 'White', '790.00', '439.00', 'Built in Rechargeable Battery ; Battery backup upto 4 hrs ;100-264 VAC provides safety against voltage fluctuations in AC Mode', 'रिचार्जेबल बैटरी में निर्मित; 4 घंटे तक का बैटरी बैकअप; 100-264 वीएसी एसी मोड में वोल्टेज के उतार-चढ़ाव के खिलाफ सुरक्षा प्रदान करता है', '<p>Built in Rechargeable Battery ; Battery backup upto 4 hrs ;100-264 VAC provides safety against voltage fluctuations in AC Mode</p>', '<p>रिचार्जेबल बैटरी में निर्मित; 4 घंटे तक का बैटरी बैकअप; 100-264 वीएसी एसी मोड में वोल्टेज के उतार-चढ़ाव के खिलाफ सुरक्षा प्रदान करता है</p>', '1726633623028158.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:42:20', NULL),
(58, 16, 11, 17, 39, 'Flipkart SmartBuy Dual-1111 Wifi Stand (WB) Wooden Wall Shelf', 'फ्लिपकार्ट स्मार्टबाय डुअल-1111 वाईफाई स्टैंड (डब्ल्यूबी) वुडन वॉल शेल्फ', 'flipkart-smartbuy-dual-1111-wifi-stand-wb-wooden-wall-shelf', 'फ्लिपकार्ट-स्मार्टबाय-डुअल-1111-वाईफाई-स्टैंड-(डब्ल्यूबी)-वुडन-वॉल-शेल्फ', '1562', 25, 'Shelf', 'Shelf', 'Medium', 'Medium', 'Brown', 'Brown', '1999.00', '434.00', 'Keep your Wifi or Set box firmly on this super stylish stand.', 'इस सुपर स्टाइलिश स्टैंड पर अपने वाईफाई या सेट बॉक्स को मजबूती से रखें।', '<p>&nbsp;</p>\r\n\r\n<p>Keep your Wifi or Set box firmly on this super stylish stand. The wall mount has been designed keeping in mind utility and aesthetics both.</p>', '<p>इस सुपर स्टाइलिश स्टैंड पर अपने वाईफाई या सेट बॉक्स को मजबूती से रखें। वॉल माउंट को उपयोगिता और सौंदर्य दोनों को ध्यान में रखते हुए डिजाइन किया गया है।</p>', '1726633851838404.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:45:58', NULL),
(59, 36, 11, 15, 32, 'pario AIRA BABY BED WHITE INNER LINER BLUE Convertible Butterfly type tie cloth', 'pario AIRA बेबी बेड व्हाइट इनर लाइनर ब्लू कन्वर्टिबल बटरफ्लाई टाइप टाई क्लॉथ', 'pario-aira-baby-bed-white-inner-liner-blue-convertible-butterfly-type-tie-cloth', 'pario-AIRA-बेबी-बेड-व्हाइट-इनर-लाइनर-ब्लू-कन्वर्टिबल-बटरफ्लाई-टाइप-टाई-क्लॉथ', '1629', 12, 'Bed Liner', 'Bed Liner', 'Medium', 'Medium', 'Blue,White', 'Blue,White', '2000.00', '1600.00', 'High Quality Cotton with Inner Filling of Polyfill Recron makes it more comfortable to your baby.', 'पॉलीफिल रेक्रोन की आंतरिक फिलिंग के साथ उच्च गुणवत्ता वाला कपास आपके बच्चे के लिए इसे और अधिक आरामदायक बनाता है।', '<p>&nbsp;</p>\r\n\r\n<p>High Quality Cotton with Inner Filling of Polyfill Recron makes it more comfortable to your baby. This bed keeps your kid active, playful, and relaxed when they are not asleep.</p>', '<p>पॉलीफिल रेक्रोन की आंतरिक फिलिंग के साथ उच्च गुणवत्ता वाला कपास आपके बच्चे के लिए इसे और अधिक आरामदायक बनाता है। यह बिस्तर आपके बच्चे को सक्रिय, चंचल और आराम से रखता है जब वह सो नहीं रहा होता है।</p>', '1726634123696259.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:50:17', NULL),
(60, 37, 11, 15, 33, 'Bombay Dyeing 160 TC Microfiber Double Floral Bedsheet', 'बॉम्बे डाइंग 160 टीसी माइक्रोफाइबर डबल फ्लोरल बेडशीट', 'bombay-dyeing-160-tc-microfiber-double-floral-bedsheet', 'बॉम्बे-डाइंग-160-टीसी-माइक्रोफाइबर-डबल-फ्लोरल-बेडशीट', '1436', 50, 'Bedsheet', 'Bedsheet', 'Large', 'Large', 'Blue', 'Blue', '999.00', '549.00', 'Bombay Dyeing 160 TC Microfiber Double Floral Bedsheet', 'बॉम्बे डाइंग 160 टीसी माइक्रोफाइबर डबल फ्लोरल बेडशीट', '<p>Bombay Dyeing 160 TC Microfiber Double Floral Bedsheet&nbsp;</p>', '<p>बॉम्बे डाइंग 160 टीसी माइक्रोफाइबर डबल फ्लोरल बेडशीट</p>', '1726634315879890.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:53:21', NULL),
(61, 37, 11, 15, 34, 'Bombay Dyeing Floral Double Mink Blanket', 'बॉम्बे डाइंग फ्लोरल डबल मिंक कंबल', 'bombay-dyeing-floral-double-mink-blanket', 'बॉम्बे-डाइंग-फ्लोरल-डबल-मिंक-कंबल', '5632', 125, 'Blanket', 'Blanket', 'Large', 'Large', 'Beige', 'Beige', '6397.00', '5727.00', 'Bombay Dyeing ORION Soft & Cozy Double Size (220x240Cm) Blanket', 'बॉम्बे डाइंग ओरियन सॉफ्ट और आरामदायक डबल साइज (220x240 सेमी) कंबल', '<p>Bombay Dyeing ORION Soft &amp; Cozy Double Size (220x240Cm) Blanket</p>', '<p>बॉम्बे डाइंग ओरियन सॉफ्ट और आरामदायक डबल साइज (220x240 सेमी) कंबल</p>', '1726634480866219.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:55:58', NULL),
(62, 16, 11, 16, 35, 'Flipkart Perfect Homes Sirena Engineered Wood TV Entertainment Unit', 'फ्लिपकार्ट परफेक्ट होम्स सिरेना इंजीनियर वुड टीवी एंटरटेनमेंट यूनिट', 'flipkart-perfect-homes-sirena-engineered-wood-tv-entertainment-unit', 'फ्लिपकार्ट-परफेक्ट-होम्स-सिरेना-इंजीनियर-वुड-टीवी-एंटरटेनमेंट-यूनिट', '4587', 56, 'TV Unit', 'TV Unit', 'Large', 'Large', 'Walnut', 'Walnut', '9999.00', '6934.00', 'Flipkart Perfect Homes Sirena Engineered Wood TV Entertainment Unit  (Finish Color - Latin Walnut, Knock Down)', 'फ्लिपकार्ट परफेक्ट होम्स सिरेना इंजीनियर वुड टीवी एंटरटेनमेंट यूनिट (फिनिश कलर - लैटिन वॉलनट, नॉक डाउन)', '<p>Flipkart Perfect Homes Sirena Engineered Wood TV Entertainment Unit&nbsp;&nbsp;(Finish Color - Latin Walnut, Knock Down)</p>', '<p>फ्लिपकार्ट परफेक्ट होम्स सिरेना इंजीनियर वुड टीवी एंटरटेनमेंट यूनिट (फिनिश कलर - लैटिन वॉलनट, नॉक डाउन)</p>', '1726634676665726.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 16:59:05', NULL),
(63, 16, 11, 16, 36, 'Flipkart Perfect Homes Solid Wood 4 Seater Dining Set', 'फ्लिपकार्ट परफेक्ट होम्स सॉलिड वुड 4 सीटर डाइनिंग सेट', 'flipkart-perfect-homes-solid-wood-4-seater-dining-set', 'फ्लिपकार्ट-परफेक्ट-होम्स-सॉलिड-वुड-4-सीटर-डाइनिंग-सेट', '695', 15, 'Dining Table', 'Dining Table', 'Large', 'Large', 'Teak', 'Teak', '32000.00', '17499.00', 'Each of the Flipkart Perfect Homes solid wood furniture is handcrafted by the finest artisans from Jodhpur/Jaipur', 'फ्लिपकार्ट परफेक्ट होम्स में से प्रत्येक ठोस लकड़ी का फर्नीचर जोधपुर/जयपुर के बेहतरीन कारीगरों द्वारा दस्तकारी किया गया है।', '<p>Each of the Flipkart Perfect Homes solid wood furniture is handcrafted by the finest artisans from Jodhpur/Jaipur. Woodgrain, color variance, texture changes and knots are all part of the charm of the product.</p>', '<p>फ्लिपकार्ट परफेक्ट होम्स में से प्रत्येक ठोस लकड़ी का फर्नीचर जोधपुर/जयपुर के बेहतरीन कारीगरों द्वारा दस्तकारी किया गया है। वुडग्रेन, रंग भिन्नता, बनावट में बदलाव और गांठें सभी उत्पाद के आकर्षण का हिस्सा हैं।</p>', '1726634868950352.webp', NULL, NULL, NULL, NULL, NULL, 1, '2022-03-07 17:02:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(4) DEFAULT NULL,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `summary`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 3, NULL, 'Nice Product', 'It is a really nice product.', 0, '2021-12-26 07:19:33', NULL),
(3, 5, 3, 3, 'Good Product', 'This is a good product.', 1, '2021-12-26 07:20:54', '2021-12-26 08:27:20'),
(5, 5, 3, 4, 'Nice Product', 'This is a really nice product', 1, '2021-12-29 10:00:34', '2021-12-29 10:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `meta_title`, `meta_author`, `meta_keywords`, `meta_description`, `google_analytics`, `created_at`, `updated_at`) VALUES
(1, 'Easy Online Shop', 'Easy Shop', 'Best Online Shop, Best Ecommerce Products', 'This is the best online shop on the internet', 'if(typeof ga != \'function\') {\r\n    (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){\r\n    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),\r\n    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)\r\n    })(window,document,\'script\',\'//www.google-analytics.com/analytics.js\',\'ga\');\r\n  }\r\n  ga(\'create\', \'UA-44397410-1\', \'auto\', {\'name\': \'fedoraTracker\', \'allowLinker\': true});\r\n  ga(\'fedoraTracker.set\', \'anonymizeIp\', false);\r\n  ga(\'fedoraTracker.require\', \'linker\');\r\n  ga(\'fedoraTracker.linker:autoLink\', [\'easylearningbd.com\',  \'sso.teachable.com\'], false, true );\r\n  ga(\'fedoraTracker.require\', \'ecommerce\');\r\n  ga(\'fedoraTracker.require\', \'ec\');\r\n  ga(\'fedoraTracker.send\', \'pageview\');\r\n  ga(\'create\', \'UA-44397410-4\', \'auto\', {\'name\': \'teachableTracker\', \'allowLinker\': true});\r\n  ga(\'teachableTracker.set\', \'anonymizeIp\', false);\r\n  ga(\'teachableTracker.require\', \'linker\');\r\n  ga(\'teachableTracker.linker:autoLink\', [\'easylearningbd.com\', \'sso.teachable.com\'], false, true );\r\n  ga(\'teachableTracker.require\', \'ecommerce\');\r\n  ga(\'teachableTracker.require\', \'ec\');\r\n  ga(\'teachableTracker.send\', \'pageview\');', NULL, '2021-12-23 08:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('X7zeiSK7vuLbRsJY5FBon9sryxIQddlHLrQSNJBO', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiS2puZ3JPZXBKOUlJSGNoN3phMnZ6ekZBZUdMWkdxMnJSaHBSTDNxYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODA4MC9lY29tbWVyY2UvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJEpKc1RsMWpkL0N0UUJCQ2Z1NVRjanVPMmRONXN4bERMaDFScWJTSWJVUFZYRHhhUTZPbkIuIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRKSnNUbDFqZC9DdFFCQkNmdTVUY2p1TzJkTjVzeGxETGgxUnFiU0liVVBWWER4YVE2T25CLiI7fQ==', 1670682262);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone1`, `phone2`, `email`, `name`, `address`, `facebook`, `twitter`, `linkedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '1719933469664441.png', '+(888) 123-4567', '+(888) 456-7890', 'support@easyonlineshop.com', 'Easy Online Shop', '789 Main Road, Anytown, CA 12345 USA', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.linkedin.com', 'https://www.youtube.com', NULL, '2021-12-23 07:46:16');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_cities`
--

CREATE TABLE `shipping_cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_cities`
--

INSERT INTO `shipping_cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Dhaka', '2021-12-18 11:43:16', NULL),
(3, 'Chittagong', '2021-12-18 11:43:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_districts`
--

CREATE TABLE `shipping_districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_districts`
--

INSERT INTO `shipping_districts` (`id`, `city_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 2, 'Faridpur', NULL, NULL),
(3, 2, 'Gazipur', NULL, NULL),
(4, 3, 'Rangamati', NULL, NULL),
(5, 3, 'Feni', NULL, NULL),
(6, 2, 'Rajbari', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_divisions`
--

CREATE TABLE `shipping_divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_divisions`
--

INSERT INTO `shipping_divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Dhaka', '2021-12-18 11:16:48', NULL),
(3, 'Chittagong', '2021-12-18 11:17:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_states`
--

CREATE TABLE `shipping_states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping_states`
--

INSERT INTO `shipping_states` (`id`, `city_id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
(2, 3, 4, 'Bhanga', NULL, NULL),
(3, 2, 3, 'Mohanpur', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, '1718575662111418.jpg', 'New Collection', 'New Collection', 1, NULL, '2022-01-04 07:10:52'),
(3, '1718498437757048.jpg', 'Women\'s Clothing', 'Women\'s Clothing', 1, NULL, '2022-01-04 07:11:13'),
(5, '1718575619431705.jpg', 'Get This!', 'Get This!', 1, NULL, '2022-01-04 07:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `created_at`, `updated_at`) VALUES
(8, 9, 'Men\'s Top Wear', 'पुरुषों के शीर्ष पहनें', 'mens-top-wear', 'पुरुषों-के-शीर्ष-पहनें', NULL, NULL),
(9, 9, 'Men\'s Bottom Wear', 'पुरुषों का निचला पहनावा', 'mens-bottom-wear', 'पुरुषों-का-निचला-पहनावा', NULL, NULL),
(10, 9, 'Men\'s Footwear', 'पुरुषों के जूते', 'mens-footwear', 'पुरुषों-के-जूते', NULL, NULL),
(11, 9, 'Women\'s Footwear', 'महिलाओं के जूते', 'womens-footwear', 'महिलाओं-के-जूते', NULL, NULL),
(12, 10, 'Computer Peripherals', 'कंप्यूटर पेरिफेरल्स', 'computer-peripherals', 'कंप्यूटर-पेरिफेरल्स', NULL, NULL),
(13, 10, 'Mobile Accessories', 'मोबाइल एक्सेसरीज', 'mobile-accessories', 'मोबाइल-एक्सेसरीज', NULL, '2021-12-06 09:02:53'),
(14, 10, 'Gaming', 'गेमिंग', 'gaming', 'गेमिंग', NULL, NULL),
(15, 11, 'Home Furnishings', 'घर का सामान', 'home-furnishings', 'घर-का-सामान', NULL, NULL),
(16, 11, 'Living Room', 'लिविंग रूम', 'living-room', 'लिविंग-रूम', NULL, NULL),
(17, 11, 'Home Décor', 'गृह सज्जा', 'home-decor', 'गृह-सज्जा', NULL, '2021-12-06 09:10:44'),
(18, 12, 'Televisions', 'टेलीविजन', 'televisions', 'टेलीविजन', NULL, NULL),
(19, 12, 'Washing Machines', 'वाशिंग मशीन', 'washing-machines', 'वाशिंग-मशीन', NULL, NULL),
(20, 12, 'Refrigerators', 'रेफ्रिजरेटर', 'refrigerators', 'रेफ्रिजरेटर', NULL, NULL),
(21, 13, 'Beauty and Personal Care', 'सौंदर्य और व्यक्तिगत देखभाल', 'beauty-and-personal-care', 'सौंदर्य-और-व्यक्तिगत-देखभाल', NULL, NULL),
(22, 13, 'Food and Drinks', 'खाद्य और पेय', 'food-and-drinks', 'खाद्य-और-पेय', NULL, NULL),
(23, 13, 'Baby Care', 'बेबी केयर', 'baby-care', 'बेबी-केयर', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_hin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `subcategory_id`, `name_en`, `name_hin`, `slug_en`, `slug_hin`, `created_at`, `updated_at`) VALUES
(11, 9, 8, 'Men\'s Tshirt', 'पुरुषों की टीशर्ट', 'mens-tshirt', 'पुरुषों-की-टीशर्ट', NULL, NULL),
(12, 9, 8, 'Men\'s Casual Shirts', 'पुरुषों की आकस्मिक शर्ट्स', 'mens-casual-shirts', 'पुरुषों-की-आकस्मिक-शर्ट्स', NULL, NULL),
(13, 9, 8, 'Men\'s Kurtas', 'पुरुषों की कुर्ता', 'mens-kurtas', 'पुरुषों-की-कुर्ता', NULL, NULL),
(14, 9, 9, 'Men\'s Jeans', 'पुरुषों की जींस', 'mens-jeans', 'पुरुषों-की-जींस', NULL, NULL),
(15, 9, 9, 'Men\'s Trousers', 'पुरुषों की पतलून', 'mens-trousers', 'पुरुषों-की-पतलून', NULL, NULL),
(16, 9, 9, 'Men\'s Cargos', 'पुरुषों का कार्गो', 'mens-cargos', 'पुरुषों-का-कार्गो', NULL, NULL),
(17, 9, 10, 'Men\'s Sports Shoes', 'पुरुषों के खेल के जूते', 'mens-sports-shoes', 'पुरुषों-के-खेल-के-जूते', NULL, NULL),
(18, 9, 10, 'Men\'s Casual Shoes', 'पुरुषों के आरामदायक जूते', 'mens-casual-shoes', 'पुरुषों-के-आरामदायक-जूते', NULL, NULL),
(19, 9, 10, 'Men\'s Formal Shoes', 'पुरुषों के औपचारिक जूते', 'mens-formal-shoes', 'पुरुषों-के-औपचारिक-जूते', NULL, NULL),
(20, 9, 11, 'Women\'s Flats', 'महिलाओं के फ्लैट', 'womens-flats', 'महिलाओं-के-फ्लैट', NULL, NULL),
(21, 9, 11, 'Women\'s Heels', 'महिलाओं की हील्स', 'womens-heels', 'महिलाओं-की-हील्स', NULL, NULL),
(22, 9, 11, 'Woman\'s Sneakers', 'महिला स्नीकर्स', 'womans-sneakers', 'महिला-स्नीकर्स', NULL, NULL),
(23, 10, 12, 'Printers', 'प्रिंटर', 'printers', 'प्रिंटर', NULL, NULL),
(24, 10, 12, 'Monitors', 'मॉनिटर्स', 'monitors', 'मॉनिटर्स', NULL, NULL),
(25, 10, 12, 'Projectors', 'प्रोजेक्टर', 'projectors', 'प्रोजेक्टर', NULL, NULL),
(26, 10, 13, 'Plain Cases', 'सादा मामले', 'plain-cases', 'सादा-मामले', NULL, NULL),
(27, 10, 13, 'Designer Cases', 'डिजाइनर मामले', 'designer-cases', 'डिजाइनर-मामले', NULL, NULL),
(28, 10, 13, 'Screen Guards', 'स्क्रीन गार्ड', 'screen-guards', 'स्क्रीन-गार्ड', NULL, NULL),
(29, 10, 14, 'Gaming Mouse', 'गेमिंग माउस', 'gaming-mouse', 'गेमिंग-माउस', NULL, NULL),
(30, 10, 14, 'Gaming Keyboards', 'गेमिंग कीबोर्ड', 'gaming-keyboards', 'गेमिंग-कीबोर्ड', NULL, NULL),
(31, 10, 14, 'Gaming Mousepads', 'गेमिंग माउसपैड', 'gaming-mousepads', 'गेमिंग-माउसपैड', NULL, NULL),
(32, 11, 15, 'Bed Liners', 'बेड लाइनर्स', 'bed-liners', 'बेड-लाइनर्स', NULL, NULL),
(33, 11, 15, 'Bedsheets', 'बेडशीट', 'bedsheets', 'बेडशीट', NULL, NULL),
(34, 11, 15, 'Blankets', 'कंबल', 'blankets', 'कंबल', NULL, NULL),
(35, 11, 16, 'Tv Units', 'टीवी इकाइयाँ', 'tv-units', 'टीवी-इकाइयाँ', NULL, NULL),
(36, 11, 16, 'Dining Sets', 'डाइनिंग सेट', 'dining-sets', 'डाइनिंग-सेट', NULL, NULL),
(37, 11, 17, 'Lightings', 'लाइटिंग्स', 'lightings', 'लाइटिंग्स', NULL, NULL),
(38, 11, 17, 'Clocks', 'घड़ियां', 'clocks', 'घड़ियां', NULL, NULL),
(39, 11, 17, 'Wall Décor', 'दीवार की सजावट', 'wall-decor', 'दीवार-की-सजावट', NULL, NULL),
(40, 12, 18, 'Big Screen TVs', 'बिग स्क्रीन टीवी', 'big-screen-tvs', 'बिग-स्क्रीन-टीवी', NULL, NULL),
(41, 12, 18, 'Smart TVs', 'स्मार्ट टीवी', 'smart-tvs', 'स्मार्ट-टीवी', NULL, NULL),
(42, 12, 18, 'OLED TVs', 'OLED टीवी', 'oled-tvs', 'OLED-टीवी', NULL, NULL),
(43, 12, 19, 'Washer Dryers', 'वॉशर ड्रायर', 'washer-dryers', 'वॉशर-ड्रायर', NULL, NULL),
(44, 12, 19, 'Washer Only', 'केवल वॉशर', 'washer-only', 'केवल-वॉशर', NULL, NULL),
(45, 12, 19, 'Energy Efficient', 'ऊर्जा कुशल', 'energy-efficient', 'ऊर्जा-कुशल', NULL, NULL),
(46, 12, 20, 'Single Door', 'सिंगल डोर', 'single-door', 'सिंगल-डोर', NULL, NULL),
(47, 12, 20, 'Double Door', 'डबल डोर', 'double-door', 'डबल-डोर', NULL, NULL),
(48, 12, 20, 'Mini Rerigerators', 'मिनी रेफ्रिजरेटर', 'mini-rerigerators', 'मिनी-रेफ्रिजरेटर', NULL, NULL),
(49, 13, 21, 'Eyes Makeup', 'आंखों का मेकअप', 'eyes-makeup', 'आंखों-का-मेकअप', NULL, NULL),
(50, 13, 21, 'Lips Makeup', 'होंठ मेकअप', 'lips-makeup', 'होंठ-मेकअप', NULL, NULL),
(51, 13, 21, 'Hair Care', 'बालों की देखभाल', 'hair-care', 'बालों-की-देखभाल', NULL, NULL),
(52, 13, 22, 'Beverages', 'पेय पदार्थ', 'beverages', 'पेय-पदार्थ', NULL, NULL),
(53, 13, 22, 'Chocolates', 'चॉकलेट', 'chocolates', 'चॉकलेट', NULL, NULL),
(54, 13, 22, 'Snacks', 'स्नैक्स', 'snacks', 'स्नैक्स', NULL, NULL),
(55, 13, 23, 'Baby Diapers', 'बेबी डायपर', 'baby-diapers', 'बेबी-डायपर', NULL, NULL),
(56, 13, 23, 'Baby Wipes', 'बेबी वाइप्स', 'baby-wipes', 'बेबी-वाइप्स', NULL, NULL),
(57, 13, 23, 'Baby Food', 'बेबी फ़ूड', 'baby-food', 'बेबी-फ़ूड', NULL, NULL),
(58, 13, 21, 'Health and Beauty', 'आरोग्य और सुंदरता', 'health-and-beauty', 'आरोग्य-और-सुंदरता', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `last_seen`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@gmail.com', '12345678', '2021-12-28 15:43:06', NULL, '$2y$10$dfG/YofUXsLqOpP.Erl0a.jyhKspG57sDopqAsIvnTkxwTcIU3CG6', NULL, NULL, '9syOnLzkZe1zhLUMhUVA4uLUhXU7UXvupGlz3JlQwc7KbWkuyDgZzLO4gQdt', NULL, '202112041057AnandLogo.png', '2021-11-25 10:20:11', '2021-12-28 12:43:06'),
(3, 'Anand George Oommen', 'ageorge28@gmail.com', '9544314316', '2022-12-10 14:24:15', NULL, '$2y$10$JJsTl1jd/CtQBBCfu5TcjuO2dN5sxlDLh1RqbSIbUPVXDxaQ6OnB.', NULL, NULL, NULL, NULL, '202112221132Anand.jpg', '2021-12-20 07:37:33', '2022-12-10 11:24:15'),
(18, 'Anand Oommen', 'ageorge28@hotmail.com', '09544314316', '2022-01-05 11:35:11', NULL, '$2y$10$0knkBt.oyGKcb1cgkf6idOeJRMotxMwxey6WEALOZDK4YDp43AGDS', NULL, NULL, NULL, NULL, '202201041117Default.jpg', '2022-01-04 08:14:22', '2022-01-05 18:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(5, 1, 9, '2021-12-15 11:16:27', NULL),
(6, 1, 5, '2021-12-15 11:17:35', NULL),
(7, 1, 4, '2021-12-15 11:17:46', NULL),
(8, 3, 63, '2022-05-11 06:45:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_cities`
--
ALTER TABLE `shipping_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_districts`
--
ALTER TABLE `shipping_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_divisions`
--
ALTER TABLE `shipping_divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_states`
--
ALTER TABLE `shipping_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipping_cities`
--
ALTER TABLE `shipping_cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_districts`
--
ALTER TABLE `shipping_districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shipping_divisions`
--
ALTER TABLE `shipping_divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_states`
--
ALTER TABLE `shipping_states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
