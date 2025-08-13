-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: webpagesdb.it.auth.gr:3306
-- Χρόνος δημιουργίας: 06 Σεπ 2024 στις 18:28:39
-- Έκδοση διακομιστή: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- Έκδοση PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `student_project`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neaforma`
--

CREATE TABLE `neaforma` (
  `The_ID` int(50) NOT NULL,
  `The_Number` varchar(100) NOT NULL,
  `The_Date` varchar(100) NOT NULL,
  `The_Theme` varchar(100) NOT NULL,
  `The_Text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `neaforma`
--

INSERT INTO `neaforma` (`The_ID`, `The_Number`, `The_Date`, `The_Theme`, `The_Text`) VALUES
(1, '1', '12/12/2008', ' Έναρξη μαθημάτων', 'Τα μαθήματα αρχίζουν την Δευτέρα 17/12/2008 '),
(2, '2', '15/12/2008', 'Ανάρτηση εργασίας', 'Η 1η εργασία έχει ανακοινωθεί στην ιστοσελίδα «Εργασίες» Τα μαθήματα αρχίζουν την Δευτέρα 17/12/2008');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neaformaeg`
--

CREATE TABLE `neaformaeg` (
  `Th_ID` int(50) NOT NULL,
  `The_Number` varchar(100) NOT NULL,
  `The_Title` varchar(100) NOT NULL,
  `The_Preview` varchar(100) NOT NULL,
  `The_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `neaformaerga`
--

CREATE TABLE `neaformaerga` (
  `The_ID` int(50) NOT NULL,
  `The_Number` varchar(100) NOT NULL,
  `The_Point` varchar(100) NOT NULL,
  `The_Name` varchar(100) NOT NULL,
  `The_Given` varchar(100) NOT NULL,
  `The_Date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`, `usertype`) VALUES
(1, 'teacher', 'xrhstos', 'teacher1@csd.auth.gr', 'teacherpass', 1),
(2, 'student', 'petros', 'student1@csd.auth.gr', 'studentpass1', 2),
(3, 'student', 'giwrgos', 'student2@csd.auth.gr', 'studentpass2', 2);

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `usertypes`
--

CREATE TABLE `usertypes` (
  `id` int(11) NOT NULL,
  `usertypes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `usertypes`
--

INSERT INTO `usertypes` (`id`, `usertypes`) VALUES
(1, 'Teacher'),
(2, 'Student');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `neaforma`
--
ALTER TABLE `neaforma`
  ADD PRIMARY KEY (`The_ID`);

--
-- Ευρετήρια για πίνακα `neaformaeg`
--
ALTER TABLE `neaformaeg`
  ADD PRIMARY KEY (`Th_ID`);

--
-- Ευρετήρια για πίνακα `neaformaerga`
--
ALTER TABLE `neaformaerga`
  ADD PRIMARY KEY (`The_ID`);

--
-- Ευρετήρια για πίνακα `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `usertypes`
--
ALTER TABLE `usertypes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `neaforma`
--
ALTER TABLE `neaforma`
  MODIFY `The_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT για πίνακα `neaformaeg`
--
ALTER TABLE `neaformaeg`
  MODIFY `Th_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `neaformaerga`
--
ALTER TABLE `neaformaerga`
  MODIFY `The_ID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT για πίνακα `usertypes`
--
ALTER TABLE `usertypes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
