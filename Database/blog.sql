-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2024 at 02:03 PM
-- Server version: 5.7.34
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(1, 1, 8, 'Blueberry Cream', '1710419148_91549312.jpg', '&lt;p&gt;Craving for a quick dessert? Then try this effortless sweet made with low-fat cream and fresh blueberries. This dish can make for a healthy dessert, which can be served at parties and brunch. Just follow us through this simple recipe and enjoy.&lt;/p&gt;&lt;h2&gt;&lt;a href=&quot;javascript://&quot;&gt;&lt;strong&gt;Ingredients of Blueberry Cream&lt;/strong&gt;&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;This ingredient is for serving 2 guests.&lt;/p&gt;&lt;ul&gt;&lt;li&gt;1 1/2 cup blueberry&lt;/li&gt;&lt;li&gt;3 tablespoon honey&lt;/li&gt;&lt;li&gt;1 tablespoon icing sugar&lt;/li&gt;&lt;li&gt;3 cup low-fat cream&lt;/li&gt;&lt;li&gt;1 teaspoon vanilla essence&lt;/li&gt;&lt;li&gt;1 handfuls blueberry&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;&lt;strong&gt;How to make Blueberry Cream&lt;/strong&gt;&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;&lt;h4&gt;Step 1 Blend blueberries&lt;/h4&gt;&lt;p&gt;To begin with this easy recipe, wash and remove the seeds and blend the blueberries.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Step 2 Whisk cream&lt;/p&gt;&lt;p&gt;Next, take a large bowl and add low-fat cream along with honey and vanilla essence. Whisk it using a hand blender till it turn foamy. Save some for garnishing.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Step 3 Serve chilled&lt;/p&gt;&lt;p&gt;Blend the blueberry puree along with the cream mixture thrice till it attains a thick foamy texture. Using a piping cone put the cream on a plate, add white vanilla cream, and garnish with blueberries and some icing sugar. Refrigerate and enjoy!&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;', 1, '2024-03-14 13:25:48'),
(2, 1, 9, 'Chicken Meatball Recipe', '1710419976_59723053.jpg', '&lt;p&gt;Looking for something delicious for your house party or your kitty party, then these easy Chicken meatballs are perfect for you! Chicken Meatball is a classic continental recipe, which is a hit with people of all age groups. This simple recipe will be a real treat for any occasion. This non-vegetarian snack can also be served as a great appetizer. This is one of the yummiest recipes that you can make using shredded chicken and other simple ingredients that are easily available. This scrumptious recipe can be relished with dips or mint chutney or tomato ketchup or any other dip of your choice. So, without any further ado, let\'s get started!&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;&lt;a href=&quot;javascript://&quot;&gt;&lt;strong&gt;Ingredients of Chicken Meatball&lt;/strong&gt;&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;This ingredient is for Serving2&amp;nbsp;&lt;/p&gt;&lt;ul&gt;&lt;li&gt;250 gm chicken&lt;/li&gt;&lt;li&gt;4 egg whites&lt;/li&gt;&lt;li&gt;2 pinches Italian seasoning&lt;/li&gt;&lt;li&gt;salt as required&lt;/li&gt;&lt;li&gt;1 cup chopped onion&lt;/li&gt;&lt;li&gt;1 cup chopped red bell pepper&lt;/li&gt;&lt;li&gt;1 cup oats&lt;/li&gt;&lt;li&gt;1 cup parsley&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;&lt;strong&gt;How to make Chicken Meatball&lt;/strong&gt;&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;&lt;h4&gt;Step 1 Wash the chicken&lt;/h4&gt;&lt;p&gt;Wash the chicken properly, then parboil the meat and drain the excess water. Begin with chopping the parsley, onions, and red bell pepper separately. Keep them aside until needed further. Next with clean hands carefully shred the chicken into fine pieces and keep it aside.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Step 2 Mix all the ingredients&lt;/p&gt;&lt;p&gt;Now in a mixing bowl add some oats followed by parsley, red bell pepper, and onions. To this mixture add the shredded chicken and egg whites. Add salt as per your taste. Mix them well.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Step 3 Make small balls and refrigerate&lt;/p&gt;&lt;p&gt;Then, make small balls out of the mixture that you just prepared. Once done keep them aside.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;p&gt;Step 4 Bake the meatballs and relish&lt;/p&gt;&lt;p&gt;Transfer these balls to a well-greased baking tray and bake for 20 minutes at 200 degrees Celsius. Serve hot!&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;', 1, '2024-03-14 13:39:36'),
(3, 1, 9, 'Tandoori Chicken Recipe', '1710421122_53240689.jpg', '&lt;p&gt;This easy tandoori chicken recipe is for those who love the taste of this chicken but do not have too much time to prepare it. Well, you will be glad to know that this tandoori chicken recipe will be ready in just an hour and with very little effort. If you have guests coming in later but you do not want to prepare something elaborate, this easy tandoori chicken recipe is the perfect one to go for.&amp;nbsp;&lt;/p&gt;&lt;h2&gt;&lt;a href=&quot;javascript://&quot;&gt;&lt;strong&gt;Ingredients of Tandoori Chicken&lt;/strong&gt;&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;This ingredient is for serving 6&lt;/p&gt;&lt;ul&gt;&lt;li&gt;1 kilograms chicken&lt;/li&gt;&lt;li&gt;1 tablespoon garlic paste&lt;/li&gt;&lt;li&gt;salt as required&lt;/li&gt;&lt;li&gt;1 teaspoon cumin powder&lt;/li&gt;&lt;li&gt;1 teaspoon black pepper&lt;/li&gt;&lt;li&gt;1 tablespoon garam masala powder&lt;/li&gt;&lt;li&gt;2 tablespoon mustard oil&lt;/li&gt;&lt;li&gt;1 tablespoon corn flour&lt;/li&gt;&lt;li&gt;1 tablespoon ginger paste&lt;/li&gt;&lt;li&gt;2 teaspoon red chilli powder&lt;/li&gt;&lt;li&gt;1 teaspoon turmeric&lt;/li&gt;&lt;li&gt;2 teaspoons coriander powder&lt;/li&gt;&lt;li&gt;2 tablespoons lime juice&lt;/li&gt;&lt;li&gt;1 cup yoghurt (curd)&lt;/li&gt;&lt;li&gt;1 tablespoon kasoori methi powder&lt;/li&gt;&lt;/ul&gt;&lt;h3&gt;&lt;strong&gt;How to make Tandoori Chicken&lt;/strong&gt;&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img style=&quot;aspect-ratio:630/420;&quot; src=&quot;https://static.toiimg.com/thumb/63681495.cms?width=630&amp;amp;height=420&quot; alt=&quot;chicken&quot; width=&quot;630&quot; height=&quot;420&quot;&gt;&lt;/figure&gt;&lt;h4&gt;Step 1 Prepare the marinade for Tandoori Chicken&lt;/h4&gt;&lt;p&gt;To make your very own tandoori chicken recipe, take the chicken, wash it nicely, and pat dry. Cut the chicken into pieces. To prepare the marinade, take a large bowl and mix together yogurt, lemon juice, ginger-garlic paste, red chili powder, turmeric, cumin powder, black pepper powder, coriander powder, garam masala, kasoori methi powder, mustard oil, and salt to taste. Coat the chicken very well in this marinade and place it in the refrigerator. Let the chicken marinate for 8-10 hours. Once marinated, let it sit in the room temperature for an hour before continuing with the further steps. Meanwhile, preheat the oven at 200 degrees Celsius.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img style=&quot;aspect-ratio:630/420;&quot; src=&quot;https://static.toiimg.com/thumb/63681568.cms?width=630&amp;amp;height=420&quot; alt=&quot;66&quot; width=&quot;630&quot; height=&quot;420&quot;&gt;&lt;/figure&gt;&lt;p&gt;Step 2 Bake the marinated chicken for 45-50 minutes&lt;/p&gt;&lt;p&gt;Next, take a baking tray and put aluminium foil on it, then keep a drip tray on top of this baking tray. Put the marinated chicken on this tray and sprinkle a little cornflour on top of these marinated chicken pieces. Place the tray in the oven and bake for 45-50 minutes. Make sure to turn the chicken pieces in between.&lt;/p&gt;&lt;/li&gt;&lt;li&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img style=&quot;aspect-ratio:630/420;&quot; src=&quot;https://static.toiimg.com/thumb/63681569.cms?width=630&amp;amp;height=420&quot; alt=&quot;image (15)&quot; width=&quot;630&quot; height=&quot;420&quot;&gt;&lt;/figure&gt;&lt;/li&gt;&lt;/ul&gt;', 1, '2024-03-14 13:58:42');

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
(8, 'No-Cook Desserts', '<p>How to make <a href=\"https://recipes.timesofindia.com/recipes/no-cook-desserts/67380552\"><strong>No-Cook Desserts</strong></a></p>'),
(9, 'Baked Chicken Recipes', '<p>How to make <a href=\"https://recipes.timesofindia.com/recipes/baked-chicken-recipes/68684563\"><strong>Baked Chicken</strong></a></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `create_at`) VALUES
(1, 1, 'admin', 'admin@admin.com', '$2y$10$OpSQ4F7kDV0rOVMhNHvMhuqLsNBfft.BU/F5q5yA4iKX.oateDXnC', '2024-03-14 11:48:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE,
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
