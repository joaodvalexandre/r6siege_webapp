-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2024 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r6siege_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `side` int(11) NOT NULL,
  `health` int(11) NOT NULL,
  `speed` int(11) NOT NULL,
  `difficulty` int(11) NOT NULL,
  `ability` int(11) NOT NULL,
  `biography` longtext NOT NULL,
  `real_name` varchar(128) NOT NULL,
  `birthday` date NOT NULL,
  `place_birth` varchar(128) NOT NULL,
  `psychological_report` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`id`, `name`, `side`, `health`, `speed`, `difficulty`, `ability`, `biography`, `real_name`, `birthday`, `place_birth`, `psychological_report`) VALUES
(0, 'Deimos', 0, 2, 2, 2, 0, '“I was there when Rainbow began. I’ll be there when it ends.”\r\n\r\nGerald Morris was born in Birmingham, Alabama. He was close to his godfather, a military veteran, who would sneak Morris off to Western matinees and gun ranges. Discovering sheriff Bass Reeves in a history book was a watershed moment for the young Morris, giving him an idol for years to come.\r\n\r\nMorris spent significant periods with the Special Forces and the ATF. A standout, he eschewed promotions to hone his practical skills and complete an MS in Inorganic Chemistry. His role in dismantling the [REDACTED] criminal organization made him a priority recruit for Rainbow’s first iteration.\r\n\r\nAs the team’s demolitions expert and a cornerstone operator, Morris was key to its early successes. He was demoted from team lead when he became outspoken about the operational limitations that come with government oversight. He and fellow operator Daniel Bogart were thought killed in Operation [REDACTED].\r\n\r\nThe circumstances of that event have been called into question since Morris’ capture at Emerald Plains.', 'Gerald Morris', '1973-12-24', 'Birmingham, Alabama', 'Morris’ arrival has had a toxic effect on Specialist morale. Tensions are high.\r\nI believe that his capture offers us a unique opportunity. On a personal level, to define who we are, who Rainbow is. And, more pressingly, access to intel that will identify those who supported him. Nothing can be more important than that. The clock is ticking.\r\n\r\nI am concerned about Jordan. He has burdened himself with the responsibility for Rainbow’s failures. Speaking frankly as his friend, it is not his cross to bear. As operators in the field, there is little we could have done differently given the circumstances we faced.\r\n\r\nThis is the Deimos effect. Our trust in each other is being tested. Adding to the turmoil is an unspoken acknowledgement between Operators that the man in that cell is one of the best soldiers the Rainbow program ever produced. His skill is apparent in how he moves, how he speaks, and how he thinks. Before we became aware of his terrible actions, Morris was an aspirational figure, a legend. It is difficult to come to terms with.\r\nI cannot shake what he said at Emerald Plains, “Rainbow is already dead.”\r\nI’ve seen enough this past year to know it isn’t an empty threat. We have little to act on as he spends most of our interrogations in silence and this deadlock has led some to suggest what I consider a reckless gambit: involve Deimos in the mission against his backers. Who in their right mind would green light that initiative? And yet, suggesting this to him has produced our first instance of actionable intel.\r\n\r\nCould what we need be obtained with him in the field? An impossible choice that has split Rainbow down the middle. Now, more than ever, we need the leadership of a Six.\r\nWe may not have a clear path forward, but I remain hopeful. Because the strength of Rainbow, the strength that has always defined us, comes from our shared purpose: to do whatever it takes to protect those who need protecting.\r\n\r\n-- Captain Yumiko “Hibana” Imagawa, Viperstrike Squad Leader'),
(1, 'Tubarao', 1, 2, 2, 2, 0, '“Acceptable casualties? Nah.”\r\n\r\nA tumultuous childhood in the Açores archipelago where earthquakes and underwater eruptions often shook communities taught Nunes the value of mutual aid. He applied this lesson in all things, even as an amateur athlete in biking and kayaking where he often backtracked, at the cost of his own performance, to help his peers facing difficulties or injuries.\r\n\r\nOn boating trips with his father, Nunes found a connection to the ocean that would set a course for his career. He insisted on helping with the ship’s navigation and repairs, and discovered his sense of freedom through wakeboarding; a desire to be unmoored that could only be satisfied by leaving his home. His path forward was clear, and he went to the mainland to pursue a career in the marines.\r\n\r\nWhile Nunes excelled at learning new skills and easily matched his peers in physical testing, he was highly regarded for his natural leadership and his insistence on civilian safety. After he transitioned and amassed enough experience, he entered selection training to join the DAE.\r\n\r\nHis humanitarian outlook was an asset as he often worked within civilian areas, sometimes returning to his archipelago home. The frost grenade Nunes created to halt the detonation of explosives caused a lot of buzz, leading Specialist Gustave “Doc” Kateb to recruit him into Rainbow.', 'Isaac Nunes Oliveira', '1989-11-24', 'Ponta Delgada, Portugal', 'Volatile elements (explosives, disease, radicals…) are one of the biggest risk factors of our line of work. I know what it’s like to lose a friend to something I couldn’t control. You can’t wish for a different outcome. No prayer will stop the march of death. It’s people like Specialist Isaac “Tubarão” Nunes Oliveira who make the difference, by finding new ways to take control and make sure everyone gets to go home.\r\n\r\nReading performance reports on his time in the DAE, I was fascinated by his repeated insistence that resources always be put aside to contain hostile activity and ensure residential areas and civilians, VIP or not, were duly considered in the overall cost of a mission.\r\n\r\nIn one operation, a group of smugglers Nunes was chasing retaliated by seizing a small town marina and threatening to blow it up. The situation was at a stalemate until he deployed his invention, which caused the bomb to malfunction and gave his team the opening they needed to neutralize the hostiles. Nunes knows when to be patient and when to act. Risk measurement is crucial, and a lesser specialist would not have been able to resolve this crisis with no casualties and minimal property damage.\r\n\r\nNunes shares a lot of experience and interests with Specialist Craig “Blackbeard” Jenson, who he trained with years ago in one of their units’ many joint exercises. I’ve never heard two grown men laugh so much. I guess you could say similar people are led to similar careers. When I asked Jenson for his opinion on Nunes’ recruitment, his answer surprised me: “Every man’s different. Tubs is trans, so he had to fight twice as hard for his spot. You can’t break him. You just have to let him do his thing.”\r\n\r\nNunes’ resilience is essential, but what I find most important is that no matter the situation, he has as much faith in his empathy as in the skills that make him a high-performing specialist. That’s what makes him Wolfguard.\r\n\r\n-- Captain Gustave “Doc” Kateb, Wolfguard Squad Leader');

-- --------------------------------------------------------

--
-- Table structure for table `weapons`
--

CREATE TABLE `weapons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL,
  `firemode` int(11) NOT NULL,
  `damage` int(11) NOT NULL,
  `rate_of_fire` int(11) NOT NULL,
  `mobility` int(11) NOT NULL,
  `mag_size` int(11) NOT NULL,
  `reload_time_emp` decimal(10,1) NOT NULL,
  `reload_time_tac` decimal(10,1) NOT NULL,
  `ads_time` int(11) NOT NULL,
  `ammo_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weapons`
--

INSERT INTO `weapons` (`id`, `name`, `type`, `firemode`, `damage`, `rate_of_fire`, `mobility`, `mag_size`, `reload_time_emp`, `reload_time_tac`, `ads_time`, `ammo_type`) VALUES
(0, 'AK-74M', 0, 0, 44, 650, 50, 40, 3.4, 2.6, 400, '5.45×39mm');

-- --------------------------------------------------------

--
-- Table structure for table `weapons_operators`
--

CREATE TABLE `weapons_operators` (
  `id` int(11) NOT NULL,
  `operator_id` int(11) NOT NULL,
  `weapon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `weapons_operators`
--

INSERT INTO `weapons_operators` (`id`, `operator_id`, `weapon_id`) VALUES
(1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weapons_operators`
--
ALTER TABLE `weapons_operators`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operators`
--
ALTER TABLE `operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weapons`
--
ALTER TABLE `weapons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `weapons_operators`
--
ALTER TABLE `weapons_operators`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
