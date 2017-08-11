-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table test.courses
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table test.courses: ~2 rows (approximately)
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
INSERT INTO `courses` (`id`, `title`, `course`) VALUES
	(2, 'BSIT', 'Bachelor in Science in Information Technology'),
	(3, 'BSECE', 'Bachelor of Science in Electronics Engineering');
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;

-- Dumping structure for table test.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stud_no` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table test.students: ~1 rows (approximately)
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` (`id`, `stud_no`, `fname`, `lname`, `course_id`) VALUES
	(11, '1', 'Dave', 'Del Rosario', 2);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

-- Dumping structure for table test.subjects
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table test.subjects: ~2 rows (approximately)
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` (`id`, `code`, `title`, `year`) VALUES
	(1, '102', 'Algebra', '2nd Year'),
	(2, '102', 'Trigo', '1st Year');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;

-- Dumping structure for table test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table test.users: ~12 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`, `usertype`) VALUES
	(2, 'Dave Del Rosario', 'registrar', 'registrar1231', 'Registrar'),
	(4, 'Dave Del Rosario', 'Dave', '111', 'Registrar'),
	(5, 'Test', 'admin1', '$2y$10$koQKnZmbHO7a7YiMjw3QLOxPJQZYJUWMT4gaCV8iEG4UGuHFq5Hca', 'Admin'),
	(6, 'Dummy', 'dummy', '$2y$10$ImQd4XTvXrLc0wdSAvRHXevEVSilDUmmZUYctsu1Kf5TgIB4UqCSK', 'Registrar'),
	(7, 'test', 'test', '$2y$10$Ad6YGOCXK1jvbXp8pWa/qeg2bJuimoX/jJsnCAa0GFOsysZjlcSGC', 'Registrar'),
	(8, 'Test', 'test1', '$2y$10$GnTilnys00tPGcz01HRgh.X46SiT6rG6PW5B.7zwewxq9GM7flxyu', 'Admin'),
	(10, 'Dummy', 'dummy', '$2y$10$F/druplACxyjUWuyJnBiV.OZu9bZSfmmojQzO9cBYSMlQujsLaNOG', 'Faculty'),
	(11, 'Test', 'test1', '$2y$10$sgZSwD46T69ASfGWtdBgputO.JyjsJYIyBC/YQtjPWRG9AeV4f7Lu', 'Admin'),
	(12, 'Test', 'test', '$2y$10$weyj3.GjWfk3nTLuqn4zQOul68iKrOZdqzHUzTzS5R9Q6Kp9kdSYe', 'Admin'),
	(14, 'Test', 'test', '$2y$10$g9NovhGyGhz3zmOmmJHVzON8FrCYQPV8n3vP1LLpKQ74PmS15XKhC', 'Admin'),
	(15, 'test', 'test', '$2y$10$HRIVz9Fh6XpL68kOIs.HKeKsluVa2xmQ32T8/3yte3QlqY2xw4pwG', 'Admin'),
	(16, 'Dummy', 'admin', '$2y$10$easa7jWPBBfFQVDWNfUEEOfjNTGQt3W6um/i6NZYZCkXH7Wt1b0ki', 'Registrar');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
