SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";




/** Structure de la table 'createurs'*/

CREATE TABLE IF NOT EXISTS `createurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomCreateur` varchar(64) COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `createurs` (`id`, `nomCreateur`) VALUES
(1, 'Patrick'),
(2, 'Pierre'),
(3, 'Paul'),
(4, 'Jacques'),
(5, 'Lucie'),
(6, 'Jean'),
(7, 'John');




/**Structure de la table 'liste'*/

CREATE TABLE IF NOT EXISTS `liste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `date_limite` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `createurs_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id`),
  KEY `fact` (`createurs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `invites` (`id`, `titre`, `description`, `dateLimite`, `createurs_id` ) VALUES
(1, 'Anniversaire', 'Anniversaire de Patrick', '25/07/2020', 1),
(2, 'Mariage', 'Mariage de Pierre', '20/07/2020', 2),
(3, 'Mariage', 'Mariage de Paul', '10/07/2020', 3),
(4, 'Retraite', 'Retraite de Jacques', '14/06/2020', 4),
(5, 'Anniversaire', 'Anniversaire de Lucie', '04/09/2020', 5),
(6, 'Retraite','Retraite de Jean', '15/08/2020', 6),
(7, 'Mariage', 'Mariage de John', '07/08/2020', 7);



/** Structure de la table 'invites'*/

CREATE TABLE IF NOT EXISTS `invites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomInv` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `createurs_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `inv` (`createurs_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `invites` (`id`, `nomInv`, `createurs_id`) VALUES
(1, 'Ritchie', 1),
(2, 'Pascal', 1),
(3, 'Babbage', 2),
(4, 'Fleming', 2),
(5, 'Turing', 3),
(6, 'Boole', 3),
(7, 'Von Neuman', 4);
(8, 'Richard', 4),
(9, 'Turn', 5),
(10, 'Karl', 5),
(11, 'Pecci', 6),
(12, 'De Niro', 6),
(13, 'Kalypso', 7),
(14, 'Jenks', 7);



/** Structure de la table 'items'*/

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cadeaux` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `liste_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,

  PRIMARY KEY (`id`),
  KEY `list` (`liste_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `invites` (`id`, `nominv`) VALUES
(1, 'Jeu de société'),
(2, 'Montre'),
(3, 'Bague'),
(4, 'Jeux vidéo'),
(5, 'Console de jeu'),
(6, 'Argent'),
(7, 'Paire de chaussures');
(8, 'Guitare'),
(9, 'Batterie'),
(10, 'Smartphone'),
(11, 'DVD'),
(12, 'Livre'),
(13, 'Album'),
(14, 'Sucreries');
 