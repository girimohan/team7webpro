-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 12:32 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(13, 1737, 2, 'Best Home Workout Programs in 2021', 'blog9.jpg', '&lt;p&gt;This is a sample post&lt;/p&gt;', 1, '2022-02-18 15:56:19'),
(18, 1737, 2, 'The Perfect Push Up | Do it right!', 'blog2.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim. Velit laoreet id donec ultrices tincidunt. Fermentum odio eu feugiat pretium. Nunc aliquet bibendum enim facilisis. Massa tincidunt nunc pulvinar sapien et. Tristique senectus et netus et malesuada fames. Arcu non odio euismod lacinia. Tortor at auctor urna nunc id cursus. Scelerisque fermentum dui faucibus in. Arcu odio ut sem nulla pharetra diam. Sagittis orci a scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris a diam maecenas.&lt;/p&gt;&lt;p&gt;Vitae tortor condimentum lacinia quis vel. Senectus et netus et malesuada fames. Ullamcorper velit sed ullamcorper morbi. Dolor sed viverra ipsum nunc aliquet bibendum enim. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel pretium. Quisque egestas diam in arcu cursus euismod quis viverra. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris in aliquam sem fringilla ut morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Massa enim nec dui nunc mattis enim ut. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Pharetra magna ac placerat vestibulum lectus. Odio facilisis mauris sit amet massa. Quis blandit turpis cursus in hac habitasse platea dictumst quisque.&lt;/p&gt;&lt;p&gt;Rutrum tellus pellentesque eu tincidunt tortor. Varius morbi enim nunc faucibus a pellentesque sit. Sit amet porttitor eget dolor morbi non arcu risus quis. Tincidunt ornare massa eget egestas purus viverra accumsan in. Et tortor consequat id porta nibh venenatis cras sed. Sem et tortor consequat id porta. Ac tortor dignissim convallis aenean et. Velit euismod in pellentesque massa placerat duis ultricies. Laoreet suspendisse interdum consectetur libero id faucibus. Quis varius quam quisque id diam vel. Lobortis mattis aliquam faucibus purus. Mattis aliquam faucibus purus in massa. Ut ornare lectus sit amet. Id leo in vitae turpis massa sed elementum tempus. Pharetra sit amet aliquam id diam maecenas ultricies mi eget. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. Massa enim nec dui nunc mattis enim ut tellus.&lt;/p&gt;&lt;p&gt;Duis at tellus at urna condimentum mattis pellentesque. Id donec ultrices tincidunt arcu non sodales neque sodales. Pharetra sit amet aliquam id diam maecenas ultricies. Lobortis mattis aliquam faucibus purus in massa tempor nec feugiat. Nam aliquam sem et tortor. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. Venenatis a condimentum vitae sapien pellentesque. In hendrerit gravida rutrum quisque non tellus orci ac auctor. Ipsum nunc aliquet bibendum enim. Placerat vestibulum lectus mauris ultrices eros in cur&lt;/p&gt;', 1, '2022-02-20 21:55:22'),
(20, 1737, 2, 'Yoga For Complete Beginners', 'blog4.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim. Velit laoreet id donec ultrices tincidunt. Fermentum odio eu feugiat pretium. Nunc aliquet bibendum enim facilisis. Massa tincidunt nunc pulvinar sapien et. Tristique senectus et netus et malesuada fames. Arcu non odio euismod lacinia. Tortor at auctor urna nunc id cursus. Scelerisque fermentum dui faucibus in. Arcu odio ut sem nulla pharetra diam. Sagittis orci a scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris a diam maecenas.&lt;/p&gt;&lt;p&gt;Vitae tortor condimentum lacinia quis vel. Senectus et netus et malesuada fames. Ullamcorper velit sed ullamcorper morbi. Dolor sed viverra ipsum nunc aliquet bibendum enim. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel pretium. Quisque egestas diam in arcu cursus euismod quis viverra. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris in aliquam sem fringilla ut morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Massa enim nec dui nunc mattis enim ut. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Pharetra magna ac placerat vestibulum lectus. Odio facilisis mauris sit amet massa. Quis blandit turpis cursus in hac habitasse platea dictumst quisque.&lt;/p&gt;&lt;p&gt;Rutrum tellus pellentesque eu tincidunt tortor. Varius morbi enim nunc faucibus a pellentesque sit. Sit amet porttitor eget dolor morbi non arcu risus quis. Tincidunt ornare massa eget egestas purus viverra accumsan in. Et tortor consequat id porta nibh venenatis cras sed. Sem et tortor consequat id porta. Ac tortor dignissim convallis aenean et. Velit euismod in pellentesque massa placerat duis ultricies. Laoreet suspendisse interdum consectetur libero id faucibus. Quis varius quam quisque id diam vel. Lobortis mattis aliquam faucibus purus. Mattis aliquam faucibus purus in massa. Ut ornare lectus sit amet. Id leo in vitae turpis massa sed elementum tempus. Pharetra sit amet aliquam id diam maecenas ultricies mi eget. Scelerisque eleifend donec pretium vulputate sapien nec sagittis aliquam. Massa enim nec dui nunc mattis enim ut tellus.&lt;/p&gt;&lt;p&gt;Duis at tellus at urna condimentum mattis pellentesque. Id donec ultrices tincidunt arcu non sodales neque sodales. Pharetra sit amet aliquam id diam maecenas ultricies. Lobortis mattis aliquam faucibus purus in massa tempor nec feugiat. Nam aliquam sem et tortor. Mauris pellentesque pulvinar pellentesque habitant morbi tristique. Venenatis a condimentum vitae sapien pellentesque. In hendrerit gravida rutrum quisque non tellus orci ac auctor. Ipsum nunc aliquet bibendum enim. Placerat vestibulum lectus mauris ultrices eros in cursus turpis. Eu mi bibendum neque egestas congue quisque.&lt;/p&gt;', 1, '2022-02-20 21:58:32'),
(21, 1737, 3, 'Eat More To Lose Weight?', 'blog5.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim. Velit laoreet id donec ultrices tincidunt. Fermentum odio eu feugiat pretium. Nunc aliquet bibendum enim facilisis. Massa tincidunt nunc pulvinar sapien et. Tristique senectus et netus et malesuada fames. Arcu non odio euismod lacinia. Tortor at auctor urna nunc id cursus. Scelerisque fermentum dui faucibus in. Arcu odio ut sem nulla pharetra diam. Sagittis orci a scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris a diam maecenas.&lt;/p&gt;&lt;p&gt;Vitae tortor condimentum lacinia quis vel. Senectus et netus et malesuada fames. Ullamcorper velit sed ullamcorper morbi. Dolor sed viverra ipsum nunc aliquet bibendum enim. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel pretium. Quisque egestas diam in arcu cursus euismod quis viverra. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris in aliquam sem fringilla ut morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Massa enim nec dui nunc mattis enim ut. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Pharetra magna ac placerat vestibulum lectus. Odio facilisis mauris sit amet massa. Quis blandit turpis cursus in hac habitasse platea dictumst quisque.&lt;/p&gt;', 1, '2022-02-20 21:59:39'),
(22, 1737, 3, 'Calories and Weight Loss', 'blog1.jpg', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim. Velit laoreet id donec ultrices tincidunt. Fermentum odio eu feugiat pretium. Nunc aliquet bibendum enim facilisis. Massa tincidunt nunc pulvinar sapien et. Tristique senectus et netus et malesuada fames. Arcu non odio euismod lacinia. Tortor at auctor urna nunc id cursus. Scelerisque fermentum dui faucibus in. Arcu odio ut sem nulla pharetra diam. Sagittis orci a scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris a diam maecenas.&lt;/p&gt;&lt;p&gt;Vitae tortor condimentum lacinia quis vel. Senectus et netus et malesuada fames. Ullamcorper velit sed ullamcorper morbi. Dolor sed viverra ipsum nunc aliquet bibendum enim. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel pretium. Quisque egestas diam in arcu cursus euismod quis viverra. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris in aliquam sem fringilla ut morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Massa enim nec dui nunc mattis enim ut. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Pharetra magna ac placerat vestibulum lectus. Odio facilisis mauris sit amet massa. Quis blandit turpis cursus in hac habitasse platea dictumst quisque.&lt;/p&gt;', 1, '2022-02-20 22:00:06'),
(23, 1737, 4, 'Exercise Heart Rate Zones Explained', 'blog7.png', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Risus commodo viverra maecenas accumsan. Risus ultricies tristique nulla aliquet enim. Velit laoreet id donec ultrices tincidunt. Fermentum odio eu feugiat pretium. Nunc aliquet bibendum enim facilisis. Massa tincidunt nunc pulvinar sapien et. Tristique senectus et netus et malesuada fames. Arcu non odio euismod lacinia. Tortor at auctor urna nunc id cursus. Scelerisque fermentum dui faucibus in. Arcu odio ut sem nulla pharetra diam. Sagittis orci a scelerisque purus semper eget duis at. Nisi vitae suscipit tellus mauris a diam maecenas.&lt;/p&gt;&lt;p&gt;Vitae tortor condimentum lacinia quis vel. Senectus et netus et malesuada fames. Ullamcorper velit sed ullamcorper morbi. Dolor sed viverra ipsum nunc aliquet bibendum enim. Non enim praesent elementum facilisis leo vel fringilla est ullamcorper. Feugiat pretium nibh ipsum consequat nisl vel pretium. Quisque egestas diam in arcu cursus euismod quis viverra. Ut diam quam nulla porttitor massa id neque aliquam vestibulum. Mauris in aliquam sem fringilla ut morbi. Netus et malesuada fames ac turpis egestas integer eget aliquet. Massa enim nec dui nunc mattis enim ut. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Pharetra magna ac placerat vestibulum lectus. Odio facilisis mauris sit amet massa. Quis blandit turpis cursus in hac habitasse platea dictumst quisque.&lt;/p&gt;&lt;p&gt;Rutrum tellus pellentesque eu tincidunt tortor. Varius morbi enim nunc faucibus a pellentesque sit. Sit amet porttitor eget dolor morbi non arcu risus quis. Tincidunt ornare massa eget egestas purus viverra accumsan in. Et tortor consequat id porta nibh venenatis cras sed. Sem et tortor consequat id porta. Ac tortor dignissim convallis aenean et.&lt;/p&gt;', 0, '2022-02-20 22:04:12');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Exercises', '<p>test change</p>'),
(3, 'Food', ''),
(4, 'Health', ''),
(5, 'Test', '<p>test</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `email`, `address`) VALUES
(817, 'mefisso4', 'Dinoaezakmi123-', 'Edgar Luks', 'ed.luks98@gmail.com', 'Oismae tee 37'),
(1737, 'mefisso4', 'Dinoaezakmi123-', 'Edgar Luks', 'mefisso4@gmail.com', '7 Froghall Avenue'),
(10165, 'barsha', 'qwert', 'barsha giri', 'barsha@hotmail.com', 'vantaa'),
(82072, 'mefisso4656', 'aezakmi123', 'Edgar Luks', 'ed.luks38@gmail.com', 'Oismae tee 37'),
(93814, 'sagar', 'sagar', 'sagar sagar', 'sagar@gmail.com', 'sagar '),
(672925, 'sohan', '12345', 'sohan sohan', 'sohan@gmail.com', 'helsinkii'),
(1960991, 'mefisso4', 'Dinoaezakmi123-', 'Edgar Luks', 'ed.luks98@gmail.coms', 'Oismae tee 37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1960992;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
