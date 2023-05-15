-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 15.Máj 2023, 13:37
-- Verzia serveru: 10.4.27-MariaDB
-- Verzia PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `snapx`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `contests` int(11) NOT NULL DEFAULT 0,
  `intro_img` varchar(300) NOT NULL,
  `icon` varchar(45) NOT NULL DEFAULT 'assets/images/icon-01.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `category`
--

INSERT INTO `category` (`id`, `title`, `contests`, `intro_img`, `icon`) VALUES
(1, 'Nature', 123, 'assets/images/popular-01.png', 'assets/images/icon-01.png'),
(2, 'Random', 321, 'assets/images/popular-02.png', 'assets/images/icon-02.png'),
(3, 'Portrait', 45, 'assets/images/popular-03.png', 'assets/images/icon-03.png'),
(4, 'Space', 62, 'assets/images/popular-04.png', 'assets/images/icon-04.png'),
(5, 'City', 0, 'https://images.unsplash.com/photo-1477959858617-67f85cf4f1df?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=944&q=80', 'assets/images/icon-01.png'),
(6, 'Movement', 0, 'https://images.unsplash.com/photo-1502519144081-acca18599776?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80', 'assets/images/icon-01.png');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contest`
--

CREATE TABLE `contest` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `author_name` varchar(45) NOT NULL,
  `author_surname` varchar(45) NOT NULL,
  `winner_name` varchar(45) NOT NULL,
  `winner_surname` varchar(45) NOT NULL,
  `award` int(11) NOT NULL,
  `object` varchar(45) NOT NULL,
  `pictures` int(11) NOT NULL,
  `participants` int(11) NOT NULL,
  `win_img` int(11) NOT NULL,
  `icon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `contest`
--

INSERT INTO `contest` (`id`, `title`, `author_name`, `author_surname`, `winner_name`, `winner_surname`, `award`, `object`, `pictures`, `participants`, `win_img`, `icon`) VALUES
(1, 'Walk In The Nature', 'Anthony', 'Soft', 'Vincent', 'Ružička', 1000, 'Camera Nikon', 342, 157, 1, NULL),
(2, 'Nature\'s Symphony', 'Anthony', 'Soft', 'Klára', 'Hviezdičková', 1500, 'Canon EOS R7', 987, 946, 2, NULL),
(3, 'Into the Wild', 'Anthony', 'Soft', 'Nicholas', 'Schneider', 4560, 'Canon EOS R6', 1547, 1235, 3, NULL),
(4, 'Wilderness Wonders', 'Anthony', 'Soft', 'Leonardo', 'Da Vinci', 1800, 'Canon EOS R1', 8452, 6532, 4, NULL),
(5, 'Majestic Mountains', 'Anthony', 'Soft', 'Babka', 'Blažková', 18000, 'Canon EOS R6', 8475, 5419, 1, NULL),
(6, 'The Serenity of Seas', 'Anthony', 'Soft', 'Lila', 'Nine', 3650, 'Canon EOS R6', 8475, 5419, 2, NULL),
(8, 'Nature\'s Palette', 'Anthony', 'Soft', 'Milan', 'T', 12350, 'Canon EOS R6', 965, 653, 4, NULL),
(9, 'Wilderness Wonders', 'Anthony', 'Soft', 'Zdena', 'Studenková', 4000, 'Canon EOS R6', 963, 844, 1, NULL),
(10, 'Pokus', 'Anthony', 'Soft', 'ja', 'ja', 1000, 'camera', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `contest_has_category`
--

CREATE TABLE `contest_has_category` (
  `id` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `contest_has_category`
--

INSERT INTO `contest_has_category` (`id`, `contest_id`, `category_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `passwd` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `login`
--

INSERT INTO `login` (`id`, `login`, `passwd`, `user_id`) VALUES
(1, 'user1', 'e10adc3949ba59abbe56e057f20f883e', 2),
(2, 'admin', '6c44e5cd17f0019c64b042e4a745412a', 1),
(3, 'user3', 'c8abb57976a989700d45b24a8f3dfddd', 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `nav`
--

CREATE TABLE `nav` (
  `id` int(11) NOT NULL,
  `sys_n` varchar(40) NOT NULL,
  `user_n` varchar(40) NOT NULL,
  `path` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `nav`
--

INSERT INTO `nav` (`id`, `sys_n`, `user_n`, `path`) VALUES
(1, 'home', 'Home', 'index.html.php'),
(2, 'contests', 'Contests', 'contests.php'),
(3, 'newcontest', 'Top Contest', 'contest-details.php'),
(4, 'categories', 'Categories', 'categories.php'),
(5, 'users', 'Users', 'users.php'),
(6, 'login', 'Login', 'login.php');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `adress` varchar(300) NOT NULL,
  `views` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `picture`
--

INSERT INTO `picture` (`id`, `adress`, `views`, `likes`, `contest_id`, `user_id`) VALUES
(1, 'assets/images/featured-01.jpg', 754632, 46563, 1, 1),
(2, 'assets/images/featured-02.jpg', 74651, 8965, 1, 1),
(3, 'assets/images/featured-03.jpg', 2154, 512, 1, 1),
(4, 'assets/images/featured-image-01.jpg', 9586, 3326, 1, 1),
(6, 'https://cdn.pixabay.com/photo/2023/04/28/07/07/cat-7956026_960_720.jpg', 0, 0, 9, 1),
(8, 'https://images.unsplash.com/photo-1613846043689-afad9cb6317d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1172&q=80', 0, 0, 3, 3);

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `surname` varchar(45) NOT NULL,
  `rank` varchar(45) NOT NULL,
  `rating` varchar(45) NOT NULL,
  `views` varchar(45) NOT NULL,
  `won` varchar(45) NOT NULL,
  `earned` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `rank`, `rating`, `views`, `won`, `earned`) VALUES
(1, 'Anthony', 'Soft', '#123', '3,5', '15873', '0', '0'),
(2, 'Milo', 'New', '#256', '3,2', '7543', '3', '8600');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `contest_has_category`
--
ALTER TABLE `contest_has_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `nav`
--
ALTER TABLE `nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `contest`
--
ALTER TABLE `contest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pre tabuľku `contest_has_category`
--
ALTER TABLE `contest_has_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pre tabuľku `nav`
--
ALTER TABLE `nav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pre tabuľku `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
