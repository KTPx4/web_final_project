-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 06:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfilm`
--
CREATE DATABASE IF NOT EXISTS `webfilm` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `webfilm`;

-- --------------------------------------------------------

--
-- Table structure for table `table_actor`
--

CREATE TABLE `table_actor` (
  `actor_id` varchar(255) NOT NULL,
  `actor_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_actor`
--

INSERT INTO `table_actor` (`actor_id`, `actor_description`) VALUES
('ACT01', 'Aoyama Gosho, 21-06-1963'),
('ACT02', 'Satoshi Kon, 12-10-1963'),
('ACT03', 'Tsugumi Ohba'),
('ACT04', 'Seimaru Amagi, 23-09-1963'),
('ACT05', 'Yasutaka Tsutsui, 24-05-1934'),
('ACT06', 'Urobuchi Gen, 20-12-1972'),
('ACT07', 'Naoki Urasawa, 2-01-1960'),
('ACT08', 'AI, 20-03-1879'),
('ACT09', ' Manabu Kaminaga'),
('ACT10', 'Yonezawa Honobu'),
('ACT11', 'Hiroyuki Imaishi, 19-4-1971'),
('ACT12', 'Kafka Asagiri, 17-3-1985'),
('ACT13', 'Yuu Kamiya, 10-11-1984'),
('ACT14', 'Nisio Isin, 13-4-1981'),
('ACT15', 'Gen Urobuchi, 20-12-1972'),
('ACT16', 'Kentaro Miura, 01-08-1977'),
('ACT17', 'Hiromu Arakawa, 01-01-1971'),
('ACT18', 'Yasuhiro Nightow, 08-04-1967'),
('ACT19', 'Reki Kawahar, 17-08-1974'),
('ACT20', 'Kohei Horikoshi, 20-11-1986'),
('ACT21', 'Mari Okada, 11-03-1976'),
('ACT22', 'Makoto Shinkai, 04-10-1971'),
('ACT23', 'Naoko Yamada, 05-11-1973'),
('ACT24', 'Makoto Shinkai, 04-05-1976'),
('ACT25', 'Mamoru Hosoda, 21-11-1977'),
('ACT26', 'Yuki Midorikawa, 26-05-2011'),
('ACT27', 'Julliet, 27-08-1971'),
('ACT28', 'Mamoru Hosoda, 19-11-1967'),
('ACT29', 'Maria, 18-09-1978'),
('ACT30', 'Bullet, 19-04-1975'),
('ACT31', 'Murad, 27-04-1980'),
('ACT32', 'Nakbi, 18-09-1973'),
('ACT33', 'Waylet, 11-05-2008'),
('ACT34', 'WalletBi, 23-06-1980'),
('ACT35', 'Sky, 30-06-1999'),
('ACT36', 'BALET, 29-08-1958'),
('ACT37', 'Muwaasj, 12-07-1979'),
('ACT38', 'Kuahuh, 30-09-2005'),
('ACT39', 'Marinam, 25-05-1980'),
('ACT40', 'Hudhs, 31-07-2004');

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `category_id` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`category_id`, `category_name`) VALUES
('CAT01', 'Detective'),
('CAT02', 'Adventure'),
('CAT03', 'Action'),
('CAT04', 'Romantic Comedy'),
('CAT05', 'Science Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `table_comment`
--

CREATE TABLE `table_comment` (
  `comment_id` varchar(255) NOT NULL,
  `film_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `comment_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_comment`
--

INSERT INTO `table_comment` (`comment_id`, `film_id`, `user_id`, `comment_content`) VALUES
('CMT01', 'DTE01', 'U01', 'This movie is truly amazing! The plot is captivating, the performances are excellent, and the visuals are stunning. I was genuinely hooked from start to finish.'),
('CMT02', 'DTE02', 'U02', 'The actors in the film did a fantastic job in their roles. Their expressions and portrayal of the characters were truly convincing. In particular, the lead actor delivered an outstanding performance.'),
('CMT03', 'DTE03', 'U03', 'I really like how this movie builds up the story and creates a sense of tension. Each situation had me on the edge of my seat, curious about what would happen next. It kept me glued to the screen.'),
('CMT04', 'DTE04', 'U04', 'The film carries a deep message about love and sacrifice. The story clearly depicts the multifaceted aspects of emotions and the difficult decisions the characters have to face. It left me contemplating after watching.'),
('CMT05', 'DTE05', 'U05', 'This movie provided me with an excellent entertainment experience. The thrilling action scenes combined with visually stunning effects truly made me excited and satisfied. I thoroughly enjoyed every moment of this film.'),
('CMT06', 'DTE06', 'U06', '\"Psycho-Pass is a thought-provoking anime that delves into the complexities of human psychology and ethics. The futuristic setting and the Sibyl System add a unique twist to the crime-solving narrative.\"'),
('CMT07', 'DTE07', 'U07', '\"Monster is a masterpiece of storytelling, with its gripping plot and well-developed characters. The moral dilemmas faced by Dr. Tenma make it a truly captivating and thought-provoking anime.\"'),
('CMT08', 'DTE08', 'U08', '\"Ghost in the Shell: Stand Alone Complex is a visually stunning anime with a compelling storyline. The exploration of advanced technology and its impact on society adds depth to the already intriguing detective narrative.\"'),
('CMT09', 'DTE09', 'U09', '\"Psychic Detective Yakumo combines elements of mystery and the supernatural in a fascinating way. The protagonist\'s ability to see ghosts adds an intriguing twist to the traditional detective genre.\"'),
('CMT10', 'DTE10', 'U10', '\"Hyouka is a delightful and charming anime that beautifully captures the curiosity and wonder of high school students. The subtle mysteries and the relatable characters make it a joy to watch.\"');

-- --------------------------------------------------------

--
-- Table structure for table `table_film`
--

CREATE TABLE `table_film` (
  `film_id` varchar(255) NOT NULL,
  `film_name` varchar(255) NOT NULL,
  `film_name_img` varchar(255) NOT NULL,
  `film_name_trailer` varchar(255) NOT NULL,
  `film_link_video` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `actor_id` varchar(255) NOT NULL,
  `film_view` int(11) NOT NULL,
  `film_year` int(11) NOT NULL,
  `film_rating` int(11) NOT NULL,
  `film_day_update` date NOT NULL,
  `film_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_film`
--

INSERT INTO `table_film` (`film_id`, `film_name`, `film_name_img`, `film_name_trailer`, `film_link_video`, `category_id`, `actor_id`, `film_view`, `film_year`, `film_rating`, `film_day_update`, `film_description`) VALUES
('ACTION11', 'Promare', 'promare.jpg', 'Promare.mp4', 'null', 'CAT03', 'ACT11', 526352, 2019, 4, '2019-04-16', 'Promare is a Japanese action anime movie set in a futuristic world where some humans have gained the ability to manipulate fire and are called the Burnish. The story follows a team of firefighters called Burning Rescue, who must stop a terrorist group of Burnish from destroying the city with their fire powers. The movie features stunning animation, intense action sequences, and a bold, colorful art style that reflects the film\'s high-energy and over-the-top tone. With a blend of sci-fi, action, and humor, Promare delivers an exciting and visually stunning experience that has earned critical acclaim and a dedicated fanbase.\r\n'),
('ACTION12', 'Bungo Stray Dogs Dead Apple', 'Bungo_Stray.jpg', 'Bungou _Stray.mp4', 'null', 'CAT03', 'ACT12', 675672, 2018, 3, '2018-03-17', 'Bungo Stray Dogs: Dead Apple is a Japanese action anime movie based on the manga series of the same name by Kafka Asagiri and Sango Harukawa. The story follows the Armed Detective Agency, a group of superpowered detectives who must investigate a mysterious phenomenon that is causing people to fall into a deep sleep and never wake up. Along the way, they are confronted by a dangerous foe who has the ability to control people\'s dreams and turn them into weapons. The movie features exciting action sequences, a complex plot, and a diverse cast of characters with unique superpowers. Bungo Stray Dogs: Dead Apple has been praised for its stunning animation, engaging storyline, and memorable characters.'),
('ACTION13', 'No Game No Life Zero', 'No_Game.jpg', 'No _Game.mp4', 'null', 'CAT03', 'ACT13', 112900, 2017, 5, '2017-03-04', 'No Game No Life: Zero is a Japanese action anime movie based on the light novel series of the same name by Yuu Kamiya. The movie serves as a prequel to the events of the main series and takes place in a world where all conflicts are resolved through games. The story follows two characters, Riku and Schwi, who come from opposing factions and are forced to work together to save their world from destruction. As they navigate the dangers of their world, they uncover secrets that challenge their beliefs and bring them closer together.\r\n'),
('ACTION14', 'Kizumonogatari Tekketsu', 'Kizumonogatari.jpg', 'Kizumonogatari.mp4', 'null', 'CAT03', 'ACT14', 960000, 2016, 1, '2016-02-27', 'Kizumonogatari Part 1: Tekketsu is a Japanese action anime movie based on the light novel series of the same name by Nisio Isin. The story follows Koyomi Araragi, a high school student who becomes entangled in the supernatural world after a chance encounter with a vampire named Kiss-shot Acerola-orion Heart-under-blade. The movie takes place before the events of the Bakemonogatari series and explores the origins of Koyomi\'s involvement with the supernatural. Kizumonogatari Part 1: Tekketsu features stunning animation, intense action sequences, and a unique visual style that combines traditional animation with elements of live-action filmmaking. The movie has been praised for its engaging story, memorable characters, and creative visuals. It was followed by two more movies, completing the Kizumonogatari trilogy.'),
('ACTION15', 'Psycho Pass The Movie', 'Psycho_Pass.jpg', 'Psycho_Pass.mp4', 'null', 'CAT03', 'ACT15', 3400000, 2017, 4, '2017-11-19', 'The Movie is a Japanese action anime movie based on the Psycho-Pass anime series created by Gen Urobuchi. The story takes place in a dystopian future where a computer system called the Sibyl System is used to monitor and control the population\'s mental states and behavior. The movie follows the members of the Public Safety Bureau\'s Criminal Investigation Division as they travel to the Southeast Asian Union to track down a terrorist group that threatens to disrupt the Sibyl System.'),
('ACTION16', 'Berserk: The Golden Age Arc I', 'Berserk_The.jpg', 'Berserk_Golden.mp4', 'null', 'CAT03', 'ACT16', 13800, 2012, 4, '2012-02-04', 'The Golden Age Arc I - The Egg of the King is a Japanese dark fantasy anime movie based on the manga series of the same name by Kentaro Miura. The movie follows the story of Guts, a skilled mercenary, as he joins the Band of the Hawk led by the charismatic Griffith. Together, they fight in battles and conquer territories in a medieval-inspired world filled with demons, magic, and political intrigue. However, as their success grows, so does Griffith\'s ambition, and he becomes consumed with the desire for power and control.'),
('ACTION17', 'Fullmetal Alchemist: The Sacred Star of Milos', 'Fullmetal_Alchemist.jpg', 'Fullmetal.mp4', 'null', 'CAT03', 'ACT17', 1230000, 2011, 3, '2011-07-02', 'The Sacred Star of Milos is a Japanese anime movie based on the popular manga and anime series Fullmetal Alchemist, written by Hiromu Arakawa. The movie takes place during the events of the series\' second anime adaptation, Fullmetal Alchemist: Brotherhood, and follows Edward and Alphonse Elric as they travel to the border between Amestris and Creta in search of a fugitive alchemist.'),
('ACTION18', 'Badlands Rumble', 'Badlands.jpg', 'Badlands.mp4', 'null', 'CAT03', 'ACT18', 800, 2010, 1, '2010-04-24', 'Badlands Rumble is a Japanese anime movie based on the popular manga and anime series Trigun, written and illustrated by Yasuhiro Nightow. The movie takes place between episodes 9 and 12 of the original anime series and follows the series\' main protagonist, Vash the Stampede, as he becomes embroiled in a new adventure in the lawless wasteland known as \"Badlands.\"'),
('ACTION19', 'Sword Art Online: Ordinal Scale', 'Sword_Art.jpg', 'Sword_Art.mp4', 'null', 'CAT03', 'ACT19', 1120000, 2008, 5, '0200-05-05', 'Sword Art Online: Ordinal Scale is a Japanese anime movie based on the popular light novel series Sword Art Online, written by Reki Kawahara. The movie takes place after the events of the second season of the anime series and follows the series\' main protagonist, Kirito, as he and his friends participate in a new augmented reality game called \"Ordinal Scale.\"'),
('ACTION20', 'My Hero Academia: Two Heroes', 'My_hero.jpg', 'My_Hero.mp4', 'null', 'CAT03', 'ACT20', 890072, 1993, 5, '1993-04-05', 'My Hero Academia: Two Heroes is a Japanese anime movie based on the popular manga series My Hero Academia, written and illustrated by K?hei Horikoshi. The movie is set between the events of the second and third seasons of the anime series and follows the series\' main protagonist, Izuku Midoriya, as he and his mentor, All Might, travel to a man-made island known as \"I-Island\" for a scientific conference. However, their trip takes a dangerous turn when the island is attacked by a group of villains who are after a powerful piece of technology.\r\n'),
('AD31', 'Ponyo', 'Ponyo.jpg', 'Ponyo.mp4', 'null', 'CAT02', 'ACT31', 37000, 2001, 5, '2001-05-12', 'Ponyo is a visually stunning anime film that tells the story of a young goldfish named Ponyo who befriends a human boy named Sosuke. Ponyo\'s father, a powerful sea wizard, tries to keep his daughter away from humans and restore the balance of nature. However, Ponyo longs to be human and runs away from home, causing a storm that puts the entire town in danger. '),
('AD32', 'Evangelion: 2.0 You Can (Not) Advance', 'Evangelion_2_0.jpg', 'EVANGELION_2_22.mp4', 'null', 'CAT02', 'ACT32', 12000000, 2022, 5, '2022-05-17', 'The movie continues the story of the original \"Neon Genesis Evangelion\" anime, but diverges from the original plot. It follows the pilots of giant bio-mechanical machines called \"Evas\" as they battle monstrous beings known as \"Angels\" in a post-apocalyptic world. The film features intense action sequences and explores complex themes of identity, self-worth, and the nature of humanity.'),
('AD33', 'Redline', 'Redline.jpg', 'Redline.mp4', 'null', 'CAT02', 'ACT33', 320800, 1997, 4, '1996-12-23', 'Redline is a racing adventure anime movie directed by Takeshi Koike and produced by Madhouse studio. The story is set in the future and follows the journey of JP, a daredevil racer, who is determined to win the infamous and deadly Redline race, which takes place every five years. Along the way, JP meets various interesting characters, including his love interest and fellow racer, Sonoshee, as he navigates through intense and dangerous races.'),
('AD34', 'Fate/Zero', 'Fate_zero.jpg', 'Fate_Zero.mp4', 'null', 'CAT02', 'ACT34', 200030, 1998, 3, '1998-10-27', 'Fate/Zero is a prequel to the Fate/stay night anime series, set 10 years before the events of the original series. The story follows several participants in the \"Fourth Holy Grail War,\" a battle royale in which magicians and their summoned heroic spirits fight to obtain the Holy Grail, which can grant any wish.\r\n'),
('AD35', 'Hunter x Hunter: The Last Mission', 'Hunter_hunter.jpg', 'Hunter_Hunter.mp4', 'null', 'CAT02', 'ACT35', 1030000, 2007, 5, '2009-05-27', '\"Hunter x Hunter: The Last Mission\" is based on the manga series of the same name by Yoshihiro Togashi. It follows the story of Gon and his friends as they discover a conspiracy that threatens the balance of the world and their own lives. The group faces off against a powerful group of Nen users, who have their own secret agenda'),
('DTE01', 'Detective Conan: The Halloween Bride', 'conan_halloween.jpg', 'conan_halloween.mp4', 'null', 'CAT01', 'ACT01', 9000, 2022, 3, '2022-02-25', 'During the wedding of Takagi and Sato, an assailant breaks and tries to attack Sato. But Takagi protects her while getting injured. The attacker escapes, but the situation is settled, although Sato is rightfully rattled by it all.'),
('DTE02', 'Perfect Blue', 'perfect_blue.jpg', 'perfect_blue.mp4', 'null', 'CAT01', 'ACT02', 7500, 1997, 2, '1997-03-14', 'Perfect Blue is a gripping psychological thriller film that delves into the disturbing journey of a former pop idol, Mima Kirigoe, as she struggles with her identity and sanity amidst the pursuit of an acting career and the relentless stalking of a dangerous fan. The film explores themes of fame, obsession, and the blurred lines between reality and illusion, keeping viewers on the edge of their seats with its suspenseful storytelling and thought-provoking narrative.\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
('DTE03', 'Death Note', 'death_note.jpg', 'death_note.mp4', 'null', 'CAT01', 'ACT03', 112900, 2006, 3, '2006-03-29', 'Death Note is a captivating anime that revolves around a high school student named Light Yagami who stumbles upon a mysterious notebook known as the Death Note. With the power to kill anyone whose name is written in it, Light becomes consumed by a god-like complex as he sets out to rid the world of criminals and create his vision of a utopian society.'),
('DTE04', 'Kindaichi Shounen', 'kindaichi_shounen.jpg', 'kindaichi_shounen.mp4', 'null', 'CAT01', 'ACT04', 200030, 2007, 4, '2007-06-23', 'Kindaichi Shounen is an anime series that revolves around the adventures of Hajime Kindaichi, a mischievous high school student with a keen intellect inherited from his genius detective grandfather. Together with his childhood friend Miyuki, they find themselves entangled in various perplexing and gruesome murder cases.'),
('DTE05', 'Paprika', 'paprika.jpg', 'paprika.mp4', 'null', 'CAT01', 'ACT05', 1030000, 2006, 5, '2006-05-27', 'With multiple characters and events, Paprika unfolds layers upon layers of meaning for viewers, while the interpretation of the film continues to stimulate the audience\'s appreciation.'),
('DTE06', 'Psycho-Pass', 'psycho_pass.jpg', 'psycho_pass.mp4', 'null', 'CAT01', 'ACT06', 390000, 2019, 4, '2019-05-23', 'Psycho-Pass is an anime series set in the future where humans have invented the Sibyl System - a system capable of measuring the psychological state of individuals. Based on this, a crime coefficient is formed, which is unique to each person.'),
('DTE07', 'Monster', 'monster.jpg', 'monster.mp4', 'null', 'CAT01', 'ACT07', 3435473, 2003, 5, '2003-09-08', 'Monster is an anime series with a captivating detective theme worth watching. It revolves around the character Kenzo Tenma, a talented doctor working at Eisler Hospital in Düsseldorf, Germany. In a unique circumstance, he is faced with a choice between performing surgery on the mayor of Düsseldorf or a disadvantaged boy named Johan. He chooses to operate on the boy'),
('DTE08', 'Ghost in the shell: Stand on complex', 'ghost_complex.jpg', 'ghost_complex.mp4', 'null', 'CAT01', 'ACT08', 3647348, 2014, 2, '2014-06-28', 'Ghost in the Shell: Stand Alone Complex is an excellent anime with beautiful graphics, great music, and a highly engaging storyline. It revolves around the members of Section 9 as they investigate and solve various cases. The series becomes particularly captivating when they encounter a dangerous individual known as \"The Laughing Man,\" a skilled hacker with cunning tactics.'),
('DTE09', 'Psychic Detective Yakumo', 'yakumo.jpg', 'yakumo.mp4', 'null', 'CAT01', 'ACT09', 12346745, 1998, 4, '1998-12-03', 'Psychic Detective Yakumo is a very unique anime series that is closely tied to the world of the supernatural. The story revolves around Saitou Yakumo, a brilliant detective with a special ability - his eyes have two colors, and he can see ghosts and lingering spirits. It is thanks to this special ability and his brilliant mind that he solves numerous mysterious and challenging cases.'),
('DTE10', 'Hyouka', 'hyouka.jpg', 'hyouka.mp4', 'null', 'CAT01', 'ACT10', 980000, 2007, 3, '2007-05-12', 'Hyouka is a gentle and relatable detective story that revolves around the ordinary aspects of student life. This anime series focuses on the simple yet intriguing discoveries made by curious high school students. It explores their clever and interesting investigations into various matters.'),
('RO21', 'The Anthem of the Heart', 'The_Anthem.jpg', 'Anthem.mp4', 'null', 'CAT04', 'ACT21', 12800, 2015, 4, '2015-05-11', 'The Anthem of the Heart is a Japanese romantic comedy anime movie directed by Tatsuyuki Nagai and written by Mari Okada. The story follows a high school girl named Jun Naruse who is cursed by a magical egg that prevents her from speaking her mind. After inadvertently causing the breakup of her parents\' marriage, Jun becomes withdrawn and isolated until she is forced to join her school\'s cultural committee. There, she meets three other students with their own emotional baggage and together they work on a musical play that becomes a way for them to express their true feelings.'),
('RO22', 'Your Name', 'your_name.jpg', 'Your_name.mp4', 'null', 'CAT04', 'ACT22', 7900, 2016, 5, '2016-04-05', 'Your Name is a Japanese romantic comedy anime movie written and directed by Makoto Shinkai. The story follows two high school students, a boy named Taki and a girl named Mitsuha, who mysteriously switch bodies and begin to experience each other\'s lives. As they try to unravel the mystery of their connection and find a way to meet in person, they grow closer and discover their feelings for each other.'),
('RO23', 'Tamako Love Story', 'Tamako_Love.jpg', 'Tamako.mp4', 'null', 'CAT04', 'ACT23', 670000, 2008, 3, '2008-05-02', 'Tamako Love Story is a Japanese romantic comedy anime movie directed by Naoko Yamada and produced by Kyoto Animation. It is a sequel to the 2013 anime series Tamako Market and focuses on the developing romantic relationship between the main characters, Tamako Kitashirakawa and Mochizou Ooji. The story follows Tamako and Mochizou as they navigate their final year of high school and deal with their feelings for each other. The movie explores themes of love, friendship, and coming of age.'),
('RO24', 'The Garden of Words', 'The_Garden.jpg', 'The_Garden.mp4', 'null', 'CAT04', 'ACT24', 3429238, 1995, 5, '1995-04-06', 'The Garden of Words is a Japanese romantic drama anime movie written, directed, and edited by Makoto Shinkai. The story follows the relationship between a high school student named Takao and a woman named Yukino, who he meets one rainy day in a park while he is skipping school to sketch shoe designs. Over the course of many rainy mornings, they continue to meet in the park and develop a connection.'),
('RO25', 'Wolf Children', 'Wolf.jpg', 'Wolf.mp4', 'null', 'CAT04', 'ACT25', 273000, 2018, 3, '2018-08-09', 'Wolf Children is a Japanese romantic drama anime movie written and directed by Mamoru Hosoda. The story follows Hana, a college student who falls in love with a man who can transform into a wolf. They have two children together, Yuki and Ame, who inherit their father\'s ability to transform into wolves. After their father dies, Hana decides to move to the countryside to raise her children away from the city and to keep their abilities a secret.'),
('RO26', 'Hotarubi no Mori e', 'Hotarubi.jpg', 'Hotarubi.mp4', 'null', 'CAT04', 'ACT26', 390000, 2022, 3, '2022-02-25', 'The movie follows a six-year-old girl named Hotaru who gets lost in a forest while visiting her uncle. She meets a young spirit named Gin who wears a mask that covers his face and is forbidden from touching humans. Despite this, the two form a deep bond and continue to meet every summer in the forest. As Hotaru grows older, their relationship becomes more complex as they struggle with their feelings for each other while trying to find a way to stay together.'),
('RO27', 'The Disappearance of Haruhi Suzumiya', 'The_disapper.jpg', 'The_Disappearance.mp4', 'null', 'CAT04', 'ACT27', 7500, 1997, 2, '2003-09-08', 'The movie is based on the light novel series \"Haruhi Suzumiya\" written by Nagaru Tanigawa. The story follows high school student Kyon who wakes up one day to find that his classmate Haruhi Suzumiya has disappeared and nobody remembers her existence except him. Kyon sets out to find her, but in doing so, he discovers that the entire world has changed. This movie is a continuation of the anime series and concludes the story arc of the disappearance of Haruhi Suzumiya.\r\n\r\nfilm_id:rome08'),
('RO28', 'Summer Wars', 'Summer.jpg', 'Summer.mp4', 'null', 'CAT04', 'ACT28', 3647348, 2006, 3, '2006-03-29', 'The movie revolves around a high school student named Kenji Koiso, who is invited by his crush, Natsuki Shinohara, to her family\'s estate for a summer job. While there, Kenji is unwittingly drawn into a virtual world where he must battle a rogue AI program that threatens to destroy the world\'s infrastructure.'),
('RO29', 'The Sky Crawlers', 'The_sky.jpg', 'Sky_Crawlers.mp4', 'null', 'CAT04', 'ACT29', 200030, 1998, 4, '2007-06-23', 'The Sky Crawlers takes place in a world where a group of fighter pilots known as the Kildren engage in aerial battles in a never-ending war. The story follows a new pilot named Yuichi Kannami, who is sent to join the squadron of experienced ace pilot Suito Kusanagi'),
('RO30', 'The Girl Who Leapt Through Time', 'The_girl.jpg', 'The_Girl.mp4', 'null', 'CAT04', 'ACT30', 1030000, 2007, 5, '2006-05-27', 'The movie follows the story of Makoto Konno, a high school student who discovers that she has the ability to time travel. She uses her power to make small changes in her life, but soon realizes that her actions have consequences and must find a way to make things right. Along the way, she discovers the value of friendship and the importance of living in the present moment.\r\n'),
('SF36', 'Final Fantasy VII: Advent Children', 'Final_Fantasy.jpg', 'Final_Fantasy_VII.mp4', 'null', 'CAT05', 'ACT36', 350000, 2019, 4, '2019-05-20', 'The film follows protagonist Cloud Strife as he battles a mysterious illness called \"Geostigma\" that is affecting the inhabitants of the city of Edge. Along with his companions Tifa Lockhart, Barret Wallace, and others, Cloud must face a new threat in the form of a trio of powerful villains known as the \"Remnants,\" who are seeking to resurrect the villain Sephiroth.'),
('SF37', 'Paprika Muha', 'Paprika.jpg', 'Paprika.mp4', 'null', 'CAT05', 'ACT37', 230000, 1990, 5, '1992-06-15', 'The film follows protagonist Cloud Strife as he battles a mysterious illness called \"Geostigma\" that is affecting the inhabitants of the city of Edge. Along with his companions Tifa Lockhart, Barret Wallace, and others, Cloud must face a new threat in the form of a trio of powerful villains known as the \"Remnants,\" who are seeking to resurrect the villain Sephiroth.'),
('SF38', 'Evangelion: 1.0 You Are (Not) Alone', 'Evangelion_1_0.jpg', 'Evangelion_1_0.mp4', 'null', 'CAT05', 'ACT38', 1000000, 2014, 3, '2016-05-07', 'The movie takes place in the year 2015, 15 years after a global cataclysm called the Second Impact. The story follows Shinji, a teenage boy who is recruited by his father to pilot a giant bio-machine called an \"Evangelion\" to fight against monstrous beings known as \"Angels\" that threaten to destroy the world.'),
('SF39', 'Vexille', 'Vexille.jpg', 'Vexille.mp4', 'null', 'CAT05', 'ACT39', 200030, 2007, 4, '2021-06-23', 'Vexille\" is set in the year 2067, where Japan has cut itself off from the rest of the world and banned all forms of technology. The story follows a group of American special forces soldiers who are sent to infiltrate Japan to investigate its recent activities. They soon discover that Japan has developed advanced robotics and technology, which they plan to use to achieve their own agenda. '),
('SF40', 'Expelled from Paradise', 'Expelled.jpg', 'Expelled.mp4', 'null', 'CAT05', 'ACT40', 110045, 2020, 5, '2023-05-08', 'The movie takes place in a future world where humanity has evacuated the Earth and now live in a virtual reality paradise called \"DEVA\". One of the DEVA security agents, Angela Balzac, is sent to Earth to track down a hacker who is interfering with DEVA\'s systems. On Earth, she meets a young man named Dingo who helps her on her mission.');

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `user_id` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `active_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`user_id`, `user_name`, `user_password`, `active_token`) VALUES
('U01', 'Thanh Phat', 'password123', 'null'),
('U02', 'Dang Khoa', 'calen0809', 'null'),
('U03', 'Tri Thuc', 'abc1234', 'null'),
('U04', 'Tien Dat', 'pass2345', 'null'),
('U05', 'KTP Team', 'ktp123', 'null'),
('U06', 'Thanh Dat', 'p8902', 'null'),
('U07', 'CalendarIT', 'khoasubnet', 'null'),
('U08', 'Hacker', 'hackcom', 'null'),
('U09', 'MyCodehere', 'codewasww', 'null'),
('U10', 'listcode', 'jhdjed', 'null');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_actor`
--
ALTER TABLE `table_actor`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD UNIQUE KEY `film_id` (`film_id`),
  ADD KEY `user_id_fk` (`user_id`);

--
-- Indexes for table `table_film`
--
ALTER TABLE `table_film`
  ADD PRIMARY KEY (`film_id`),
  ADD KEY `category_id_fk` (`category_id`),
  ADD KEY `actor_id_fk` (`actor_id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_comment`
--
ALTER TABLE `table_comment`
  ADD CONSTRAINT `film_id_fk` FOREIGN KEY (`film_id`) REFERENCES `table_film` (`film_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `table_user` (`user_id`);

--
-- Constraints for table `table_film`
--
ALTER TABLE `table_film`
  ADD CONSTRAINT `actor_id_fk` FOREIGN KEY (`actor_id`) REFERENCES `table_actor` (`actor_id`),
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `table_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;