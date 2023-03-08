-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 08, 2023 at 09:07 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(2, 'pjones', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `forename`, `surname`, `password`) VALUES
(1, 'airjordanss1', 'Michael', 'Jordans', '$2y$10$C829l.YPeoS/Qt6iApcdk.pt9m52KpWmRq.fypGfB3khL/jnB6c/e'),
(2, 'wwchem09', 'Walter', 'White', '$2y$10$i03iOq2TXzM4ouVreq9Fd.3jaKe2QfzZAB4n2SN8jj2utRSjeVBre'),
(3, 'jellyfisher04', 'Patrick', 'Star', '$2y$10$6kzIJppMONTKN4lejf4KA.TzJzQxYkZ/Q.oWeChwWT7NgkxSqc6fy'),
(4, 'billybob23', 'Billy', 'Bob', '$2y$10$iD76dzHVsld72JED0.KtUe5kGJV5bnKnkrFo/5eDddV4tVHm0oFf2'),
(5, 'backtothefuture', 'Marty', 'McFly', '$2y$10$7raWu0gg34YkjmcmnFGN..xH6oIOBH9Foo66Rx/wGokeH9Y.iBs8q'),
(6, 'lwyrup', 'Jimmy', 'McGill', '$2y$10$yIa.obA11yvvBL90t2XrpejT13BaPHiFuBw4yPMTuiMcL1cQlN9v6'),
(7, 'lphermanos', 'Gus', 'Fring', '$2y$10$Lb/kQnH2f04fK3O9kIvkKeKJI2QBiiBpVusOW/H2vonXu.P6mSlMq'),
(8, 'jre999', 'Joe', 'Rogan', '$2y$10$VfqGMpzj9gyxwcufDLX1Y.9IwTqdxai.ir16h82UEBLr9yCBt2WsG'),
(9, 'tysonm24', 'Mike', 'Tyson', '$2y$10$YgqWZT3KyIUA3BFF1S3qfeZWTia3.Ll/UXGzJpisQqPO67D/jDRQW'),
(10, 'macintosh', 'Steve', 'Jobs', '$2y$10$u8MtTz960HylbEJUF8mk2.gbUeL/kAS6XLIbvoQwVqW9AITXhjbOC'),
(11, 'bsmith', 'Bill', 'Smith', '$2y$10$QP4FouRg/h0pc/MfEjdaZOTriUAqwgEshX9go7HT856ILPH00ILVi'),
(12, 'pjones', 'Pauline', 'Jones', '$2y$10$AR.dUlK7zhuEYU7Tf.y0vuhGK.vitFjnoxaMuA.xA5UD30wdOZy2m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
