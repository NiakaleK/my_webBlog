-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Janvier 2017 à 18:28
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `my_weblog`
--

-- --------------------------------------------------------

--
-- Structure de la table `account`
--

CREATE TABLE `account` (
  `id_user` int(11) NOT NULL,
  `id_type` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `account`
--

INSERT INTO `account` (`id_user`, `id_type`, `login`, `pwd`) VALUES
(1, 1, 'root', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785'),
(2, 1, 'panda', 'f46b1b2b22212b5915c418a17ff0ba12b8c54675'),
(3, 1, 'Niakniaky', '3f820b2621201dfa4f31a4dbf71cc4daa988ea34'),
(4, 1, 'Majda', 'bdb75be09a3b0b193552a97c24b4dc659d118194'),
(5, 2, 'lilas', '90f53ad7c101c61546ecc08228eb75c0439fcbaa'),
(6, 2, 'vincent', '0e686d8fe96c189648c8acf9c783a850db346756'),
(7, 2, 'adam', 'bd234ba4276433f0e5fc7a8fa2d18274fa711567'),
(8, 3, 'pauline', 'e1e7609b065465cc41738e07cf7f79dbd5107b10'),
(9, 3, 'keo', '2836ccbed1d3c5aa8918a926292d120b5d70bed6'),
(10, 3, 'sarah', 'f2062564421be4a02f87e21dda638e76194a7ea8'),
(11, 3, 'anthony', 'c40c2cfcfce2d95eba2f29587904d77c23f37de9'),
(12, 3, 'sabrina', '39cf428f9775ab3e180d18808d79ee3ac7019b5a'),
(13, 3, 'oumi', '6a60767919892c58663c45d386be2cf25605ea1d'),
(14, 3, 'yoan', '17fe7245c90dbd9771d6b5151a874c8d09d09873');

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id_billet` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `liens` varchar(255) NOT NULL,
  `liens_type` varchar(24) NOT NULL,
  `tags` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` date NOT NULL,
  `updated` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id_billet`, `id_genre`, `id_user`, `login`, `title`, `content`, `liens`, `liens_type`, `tags`, `created`, `updated`) VALUES
(1, 1, 2, 'panda', 'This restaurant let\'s you dip fried foods in melted', 'Samdoongi Tonkatsu in Incheon, South Korea serves Japanese-French fusion.\r\n', 'https://youtu.be/2_qNC-_YWEU?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'fried melted', '2017-01-08', NULL),
(2, 1, 3, 'Niakniaky', 'This is the triple cheeseburger of your dreams', 'You can find this creation at Pig Beach in Brooklyn.', 'https://youtu.be/VLhvNz3JGws?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'cheeseburger', '2017-01-08', NULL),
(3, 4, 3, 'Niakniaky', 'Easy BBQ Chicken Ring', 'Serves 4-6\r\nINGREDIENTS\r\n2 ½ cups cooked chicken, shredded\r\n1 cup red onion, diced\r\n1 cup BBQ sauce\r\n1 cup mozzarella cheese\r\n16 pieces crescent dough (2 cans)\r\nRanch dressing\r\nPREPARATION\r\n1. Preheat oven to 375˚F/170˚C.\r\n2. In a large bowl, combine shredded chicken, red onion, and BBQ sauce.\r\n3. Place a small bowl, filled with mozzarella cheese, in the middle of a greased baking pan and arrange crescent dough triangles around the bowl with the smallest angle on the outside. \r\n4. Sprinkle ½ of the cheese along the inside of the ring and spoon BBQ chicken mixture on top of the cheese, also in a circular shape. Top with the rest of the mozzarella.\r\n5. Lay the top of the triangle over the filling and repeat until the all of the triangles have been wrapped around the filling.\r\n6. Bake for 25 minutes or until golden brown.\r\n7. Cut into pieces and serve with choice dressing in a bowl in the middle.\r\n8. Enjoy!', 'https://youtu.be/NmgU-QMpZnY', 'video', 'bbq chicken', '2017-01-08', NULL),
(4, 3, 2, 'panda', 'Dosa - Street foods in Mumbai (Angheri)', '', 'https://youtu.be/BZgA3tPdAQ0', 'video', 'dosa', '2017-01-08', NULL),
(5, 2, 4, 'Majda', 'Definitive proof that cotton candy goes with everything', 'Cotton candy is the best!', 'https://youtu.be/Ih5BNB5H-g8?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'candy', '2017-01-08', NULL),
(6, 2, 2, 'panda', 'This rubber duck is actually a dessert', 'Singapore\'s Non Entrée Desserts makes crazy treats.', 'https://youtu.be/NXejObbxNqQ?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'duck', '2017-01-08', NULL),
(7, 1, 2, 'panda', 'This restaurant defies gravity with its flying noodles', 'Singapore\'s Hana Restaurant serves noodles on floating chopsticks.', 'https://youtu.be/7MjZNsUBXi0?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'gravity noodles', '2017-01-10', NULL),
(8, 4, 4, 'Majda', 'How to make rainbow pasta', '', 'https://youtu.be/XjZa9e-V3sI', 'video', 'rainbow pasta', '2017-01-10', NULL),
(9, 2, 4, 'Majda', 'This dessert is lit', 'This is a chocolate ball of fire from Morimoto in Waikiki in Honolulu.', 'https://youtu.be/tEtS_brsZKw?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'dessert lit', '2017-01-10', NULL),
(10, 1, 3, 'Niakniaky', 'Taiwan Street food - Ice cream burrito', '', 'https://youtu.be/u5zWAsN2zAY', 'video', 'taiwan ice cream', '2017-01-10', NULL),
(11, 1, 3, 'Niakniaky', 'Best bread browl ever ?', 'O:duo Kitchen in Seoul, South Korea serves up this masterpiece. This dish is called "Cream Cheese Panne Chicken."', 'https://youtu.be/ZJiOfDyin-c?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'bread', '2017-01-12', NULL),
(12, 2, 2, 'panda', 'Harvest Dessert', 'If you think this is a potted plant, you\'re wrong.', 'https://youtu.be/IkUKpzN7Ec4?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'harvest', '2017-01-12', NULL),
(13, 5, 3, 'Niakniaky', 'Mario question block surprise cake', 'THE THINGS YOU WILL NEED: \r\n* (1-1/2) Cups Cake Flour: http://amzn.to/2ivFw34\r\n* (1) Cup All Purpose Flour: http://amzn.to/2ivvdfn\r\n* (1-1/2) Sticks Butter\r\n* (4) Eggs\r\n* (1-1/4) Cup Milk\r\n* (1-1/2) Cup Sugar: http://amzn.to/2j0IObM\r\n* (2) Tablespoons Vegetable Oil: http://amzn.to/2hMhahr\r\n* (1/2) Teaspoon Kosher Salt: http://amzn.to/2ivATWQ\r\n* (2-1/2) Teaspoon Baking Powder: http://amzn.to/2izz7lj\r\n* (1) Teaspoon Lemon ExtractL http://amzn.to/2izAGjt\r\n* (2) Lemons Zested\r\n* (1) Box White Fondant: http://amzn.to/2iExPrO\r\n', 'https://youtu.be/AxrZVsiSxjI', 'video', 'mario', '2017-01-12', NULL),
(14, 2, 4, 'Majda', 'A river of chocolate overflows from this Brazilian cake', 'This is called "vulcão de brigadeiro".', 'https://youtu.be/fhwWwZ9Sic4?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'chocolate', '2017-01-12', NULL),
(15, 5, 3, 'Niakniaky', 'Summer Watermelon dessert', '', 'https://youtu.be/KsLTDchDQMo', 'video', 'watermelon', '2017-01-14', NULL),
(16, 1, 2, 'panda', 'Chicago’s Best Pizza: Chicago Pizza and Oven Grinders Company', 'Brittney Payton and Elliott Bambrough join forces to tackle a uniquely Chicago pizza innovation in Lincoln Park.', 'https://youtu.be/Dnl0HEBU8jM?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'pizza', '2017-01-14', NULL),
(17, 3, 4, 'Majda', 'Street-food Japan - A taste of deleicious japanese cuisine Compilation', 'Hashimaki (okonomiyaki on a stick), takoyaki (octopus ball), yakisoba, okonomiyaki', 'https://youtu.be/sWisuBtbypE', 'video', 'japan', '2017-01-14', NULL),
(18, 2, 2, 'panda', 'This cafe serves espresso in an ice cream cone', 'Espresso, waffle cones, and chocolate, oh my! The Grind Coffee Company in South Africa wanted to create an option for people to eat, drink, and enjoy. The best part--there\'s no waste, what a sustainable treat!', 'https://youtu.be/8fUeumFJbyo?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'cafe ice cream', '2017-01-15', NULL),
(19, 5, 4, 'Majda', 'Homemade Chocolate-Covered Strawberries 4 Ways', 'INGREDIENTS\r\n1 pound fresh strawberries\r\n1 cup white chocolate\r\n1 cup milk or dark chocolate\r\n2 tablespoons coconut oil\r\nCrushed peanuts\r\nChocolate cookie crumbs', 'https://youtu.be/iglGcPmfSoQ', 'video', 'chocolate strawberries', '2017-01-15', NULL),
(20, 1, 2, 'panda', 'These Japanese omelettes are sliced in an amazing way', 'This Japanese dish is called omurice. They make it at The Yoshokuya Eat, Eat in Kyoto, Japan.', 'https://youtu.be/Y2Dbr01AX5c?list=PLXVpiWuAG3f_2SOchu0GZ6H4SaEcsUIp-', 'video', 'japan omelettes', '2017-01-15', NULL),
(21, 4, 4, 'Majda', 'Sleeping Rice Bear with an Egg Blanket', 'INGREDIENTS\r\n1 tablespoon sesame oil\r\n3 cloves garlic, minced\r\n3 tablespoons soy sauce\r\n3 cups cooked short-grain rice\r\n2 eggs\r\n½ teaspoon salt\r\n1 slice cheese\r\n1 sheet roasted seaweed\r\n', 'https://youtu.be/-V0BPNGEleo', 'video', 'rice bear egg', '2017-01-15', NULL),
(22, 3, 3, 'Niakniaky', 'This Turkish street food is like a warm, cheesy burrito', 'You can find them at the Bryant Park Winter Village.', 'https://youtu.be/UGeAKribqaU', 'video', 'turkish burrito cheese', '2017-01-15', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `billets_attente`
--

CREATE TABLE `billets_attente` (
  `id_billet` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `login` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `liens` varchar(255) NOT NULL,
  `liens_type` varchar(24) NOT NULL,
  `tags` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `created` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `billets_attente`
--

INSERT INTO `billets_attente` (`id_billet`, `id_genre`, `id_user`, `login`, `title`, `content`, `liens`, `liens_type`, `tags`, `created`) VALUES
(1, 3, 5, 'lilas', 'Cotton Candy Art: Keroppi Frog, Bear, Seal, Canary Bird, Dog', 'An incredible compilation of cotton candy art made from sugar. Featuring characters like Keroppi from Sanrio, Pink Bear, Baby Seal, Yellow Canary Bird, and Mr. Doggie.', 'https://youtu.be/AI41Ruj3Gzw', 'video', 'cotton candy', '2017-01-13'),
(2, 2, 6, 'vincent', 'His 2D/3D Latte Art Skills Are Over 9000!', 'Kohei Matsuno’s 2D & 3D latte art skills are over 9000! He takes an ordinary cup of coffee and makes it infinitely more awesome with nerdy, iconic unique works of art that are almost a shame to drink', 'https://youtu.be/6Tv62XmnxuY', 'video', 'cafe latte', '2017-01-13'),
(3, 4, 6, 'vincent', 'Southwestern-Style Turkey Burgers', '', 'https://youtu.be/dkc0wfx6qCg', 'video', 'burger turkey', '2017-01-14'),
(4, 4, 7, 'adam', 'Chili Dog Bread Ring', '', 'https://youtu.be/TQAWros-kJc', 'video', 'bread', '2017-01-15'),
(5, 2, 5, 'lilas', 'A young baker gets festive with her holiday-inspired macarons', 'Meghan Rosko from nutmeg and honeybee is a baker and maker of holiday confections.', 'https://youtu.be/RR76exGkQ5E?list=PLKfWL8IXgKBuV8U6YYItPGs3KK5ruPQqz', 'video', 'macarons', '2017-01-15'),
(6, 2, 5, 'lilas', 'A young baker gets festive with her holiday-inspired macarons', 'Meghan Rosko from nutmeg and honeybee is a baker and maker of holiday confections.', 'https://youtu.be/RR76exGkQ5E?list=PLKfWL8IXgKBuV8U6YYItPGs3KK5ruPQqz', 'video', 'macarons', '2017-01-15');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_comm` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `commentaire` varchar(255) NOT NULL,
  `posted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche_perso`
--

CREATE TABLE `fiche_perso` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(24) NOT NULL,
  `prenom` varchar(24) NOT NULL,
  `date_naissance` date DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `cp` int(5) DEFAULT NULL,
  `ville` varchar(32) DEFAULT NULL,
  `date_inscription` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fiche_perso`
--

INSERT INTO `fiche_perso` (`id_user`, `nom`, `prenom`, `date_naissance`, `adresse`, `cp`, `ville`, `date_inscription`) VALUES
(1, 'root', 'root', NULL, NULL, 75003, NULL, '2017-01-02'),
(2, 'Theng', 'Elisa', NULL, NULL, NULL, NULL, '2017-01-05'),
(3, 'keita', 'Niakale', NULL, NULL, NULL, NULL, '2017-01-05'),
(4, 'Tlili', 'Majda', NULL, NULL, NULL, NULL, '2017-01-05'),
(5, 'Merbouche', 'Lilas', NULL, NULL, NULL, NULL, '2017-01-07'),
(6, 'Lermanou', 'Vincent', NULL, NULL, NULL, NULL, '2017-01-07'),
(7, 'Emmanuel', 'Adam', NULL, NULL, NULL, NULL, '2017-01-07'),
(8, 'Gaultier', 'Pauline', NULL, NULL, NULL, NULL, '2017-01-10'),
(9, 'Tao', 'Keomoniroath', NULL, NULL, NULL, NULL, '2017-01-10'),
(10, 'Amairi', 'Sarah', NULL, NULL, NULL, NULL, '2017-01-11'),
(11, 'Reboul', 'Anthony', NULL, NULL, NULL, NULL, '2017-01-14'),
(12, 'Trinh', 'Sabrina', NULL, NULL, NULL, NULL, '2017-01-15'),
(13, 'Diedhiou', 'Oumi', NULL, NULL, NULL, NULL, '2017-01-15'),
(14, 'Delmaire', 'Yoan', NULL, NULL, NULL, NULL, '2017-01-15');

-- --------------------------------------------------------

--
-- Structure de la table `genre_billet`
--

CREATE TABLE `genre_billet` (
  `id_genre` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Contenu de la table `genre_billet`
--

INSERT INTO `genre_billet` (`id_genre`, `nom`) VALUES
(1, 'découverte plat'),
(2, 'découverte dessert'),
(3, 'découverte street-food'),
(4, 'recette plat'),
(5, 'recette dessert');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id_type` int(11) NOT NULL,
  `nom` varchar(24) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id_type`, `nom`, `description`) VALUES
(1, 'admin', 'Un administrateur peut tout gerer, sauf supprimer ou modifier le root'),
(2, 'blogger', 'Un blogger peut ajouter des commentaires, gerer ses propres commentaires et publier ou non un article'),
(3, 'member', 'Un membre peut ajouter des commentaires et gerer ses propres commentaires');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id_billet`);

--
-- Index pour la table `billets_attente`
--
ALTER TABLE `billets_attente`
  ADD PRIMARY KEY (`id_billet`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_comm`);

--
-- Index pour la table `fiche_perso`
--
ALTER TABLE `fiche_perso`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `genre_billet`
--
ALTER TABLE `genre_billet`
  ADD PRIMARY KEY (`id_genre`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `account`
--
ALTER TABLE `account`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `billets_attente`
--
ALTER TABLE `billets_attente`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_comm` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `fiche_perso`
--
ALTER TABLE `fiche_perso`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT pour la table `genre_billet`
--
ALTER TABLE `genre_billet`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
