-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mariadb
-- Généré le : mar. 24 oct. 2023 à 06:55
-- Version du serveur : 10.11.5-MariaDB-1:10.11.5+maria~ubu2204
-- Version de PHP : 8.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--
CREATE DATABASE IF NOT EXISTS `blog` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `blog`;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `titre` varchar(500) DEFAULT NULL,
  `contenu` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `contenu`, `created_at`, `user_id`) VALUES
(1, 'Haricots blancs à la Navarraise (pochas)', 'Quand je me suis rendue en Navarre il y a quelques jours, je me suis régalée avec des plats à base de pochas, les haricots blancs de Navarre. En rentrant, je me suis dit qu’il fallait absolument que j’essaie de réaliser l’une des recettes dégustées là-bas. Comme il est impossible de trouver ici la variété locale, je les ai remplacés par des cocos de Paimpol.\n\n    Oui, je sais, je vis dangereusement. \n\nLà bas, ils accompagnent ce plat de guindillas, des petits piments au vinaigre. J’avoue que le contraste entre la douceur des haricots et le peps apporté par le piment est vraiment intéressant. je trouve les guindillas très facilement ici, dans le sud ouest, mais je ne sais pas ce qu’il en est chez vous.  Je vous en ai trouvés en ligne au cas où cela vous intéresse.\n\nNous nous sommes régalés avec cette recette. C’est vraiment excellent. ', '2023-10-16 09:09:22', 0),
(2, 'Soupe de courgettes', 'La soupe de courgettes est un bon petit plat, savoureux et réconfortant que j’apprécie particulièrement lors des soirées froides d’automne et d’hiver. Cela me permet de profiter des courgettes récoltées à foison pendant l’été et mettre une touche estivale dans mes repas. je vous explique d’ailleurs comment la conserver en bocaux si vous ne souhaitez pas passer par la case congélation!\n\nFabriquée principalement à base de courgettes, d’oignons, d’ail et de bouillon, cette soupe peut être personnalisée avec d’autres légumes et herbes pour la mettre à votre goût. Comme toujours, vous retrouverez la fiche recette adaptable et imprimable en fin d’article.\n\nBien que traditionnellement consommée chaude, la soupe de courgettes peut aussi être servie froide en été. Ce plat convient également aux végétariens et aux vegan, si fait avec un bouillon sans produits animaux et du fromage frais végétal. De plus, grâce à sa faible teneur en calories et à ses nombreux bienfaits nutritionnels, c’est une option idéale pour ceux qui souhaitent manger sainement.', '2023-10-16 09:09:22', 0),
(3, 'Confiture de figues', 'La confiture de figues est une préparation délicieuse et savoureuse, très appréciée pour son goût unique et sa texture. Elle est obtenue à partir de figues fraîches, blanches ou violettes, qui sont cuites avec du sucre, parfois accompagnées d’autres ingrédients tels que des épices ou des zestes d’agrumes. La confiture de figues se déguste aussi bien au petit-déjeuner qu’en accompagnement de certains plats salés.\n\nLes figues, fruits emblématiques des pays méditerranéens, sont récoltées en fin d’été et au début de l’automne. Elles sont riches en fibres, en vitamines et en minéraux, et sont donc bénéfiques pour la santé. Les confitures à base de figues permettent d’apprécier ce fruit tout au long de l’année, en conservant ses qualités nutritionnelles.', '2023-10-16 09:09:22', 0),
(4, 'Gâteau aux prunes', ' Accueil	Desserts	Gâteau aux prunes\nDesserts\nGâteau aux prunes\nRecette Gateau Prunes 12	\nDifficulté : star onstar offstar off\nNombre de personnes : 6\nPréparation : 15 min\nCuisson : 40 min\n\nUne recette toute simple de gâteau aux fruits, comme on les aime. Ici réalisé avec des prunes mais vous pourriez très bien utiliser n’importe quel autre fruit de saison. Quant aux ingrédients… vous les avez forcément dans votre placard ! Un peu de beurre, du sucre, de la farine et des oeufs. Il n’en faut pas plus pour faire un bon gâteau. Vous pouvez bien sûr y ajouter toute saveur ou garniture de votre choix si vous avez : vanille, pépites de chocolat (selon les fruits utilisés), cannelle, noix etc. ', '2023-10-16 09:12:39', 0),
(5, 'Tacos Mexicains', '    A la po&ecirc;le, faire dorer l&#039;oignon &eacute;minc&eacute; dans un peu d&#039;huile d&#039;olive.\r\n    Rajouter la viande, assaisonner et laisser cuire 5 min.\r\n\r\n    Laver les feuilles de laitue.\r\n\r\n    Couper les tomates et le poivron en petits d&eacute;s.\r\n\r\n    Incorporer le tout &agrave; la po&ecirc;l&eacute;e avec le coulis de tomate, et poursuivre la cuisson pendant 5 min.\r\n\r\n    Egoutter les haricots rouges et les ajouter 2 min avant la fin de cuisson.\r\n\r\n    Hors du feu, ajuster l&#039;assaisonnement et saupoudrer g&eacute;n&eacute;reusement de cumin; on peut aussi rajouter quelques gouttes de Tabasco.\r\n    Garnir les tortillas de pr&eacute;paration et les refermer en les roulant comme des cr&ecirc;pes. Disposer 1 feuille de laitue sur chaque tacos avant de servir.', '2023-10-23 10:21:17', NULL),
(6, 'Tarte rustique au butternut, ch&egrave;vre, noix et miel', 'Versez la farine, le sel, le jaune d&rsquo;&oelig;uf et le beurre coup&eacute; en morceaux dans le bol de votre p&eacute;trin muni de la feuille. Faites marcher votre robot sur vitesse 2. Versez l&rsquo;eau en trois voire en quatre fois, en attendant quelques secondes entre chaque ajout&bull; Une boule de p&acirc;te va se former. Lorsqu&rsquo;elle est pr&ecirc;te, filmez la  et r&eacute;servez au frais au minimum une demi heure. &bull; &Eacute;pluchez votre moiti&eacute; de butternut et tranchez la en fines lamelles &agrave; l&rsquo;aide d&rsquo;une mandoline.\r\n2 Pr&eacute;paration. Pr&eacute;chauffez votre four &agrave; 210&deg; Sortez la p&acirc;te du r&eacute;frig&eacute;rateur. Abaissez votre p&acirc;te directement sur du papier sulfuris&eacute; sur une &eacute;paisseur d&rsquo;environ 3-4 mm en fa&ccedil;onnant un rond.. Transf&eacute;rez directement sur une plaque &agrave; p&acirc;tisserie. Piquez la p&acirc;te &agrave; la fourchette. \r\nR&eacute;partissez les tranches de butternut en rosace sur la p&acirc;te. Coupez le fromage de ch&egrave;vre en tranches, disposez le sur toute la surface de la tarte. Arrosez d&rsquo;une cuill&egrave;re de miel et parsemez de brisures de cerneaux de noix. Saupoudrez d&rsquo;origan. Rabattez la p&acirc;te sur les bords et enfournez pendant 30 &agrave; 35 min. ', '2023-10-23 10:30:21', NULL),
(7, 'Confit d&#039;oignons maison', '1) Eplucher les oignons et les &eacute;mincer finement. Les faire revenir &agrave; feu doux dans une po&ecirc;le avec l&#039;huile d&#039;olive jusqu&#039;&agrave;&#039; ce qu&#039;ils deviennent translucides.\r\n2) Saupoudrer avec le sucre et verser le vinaigre balsamique. M&eacute;langer et laisser cuire 10 minutes &agrave; feu vif jusqu&#039;&agrave; ce que le vinaigre s&#039;&eacute;vapore.\r\n3) Couvrir la po&ecirc;le et laisser cuire &agrave; tout petit feu pendant 1 heure. Remuer de temps en temps. Verser le confit d&#039;oignons bouillant dans un pot &agrave; confiture &eacute;bouillant&eacute;.\r\nPour finir\r\nServir le confit d&#039;oignon &agrave; No&euml;l avec du foie gras, par exemple, ou l&#039;utiliser dans des pr&eacute;parations culinaires. Il est possible de pr&eacute;parer le confit d&#039;oignon un mois &agrave; l&#039;avance, car il se conserve tr&egrave;s bien. Il est &agrave; la fois simple &agrave; r&eacute;aliser et &eacute;conomique. On peut utiliser des oignons rouges pour un peu plus plus d&#039;originalit&eacute;. On peut aussi adjoindre du vin rouge qui remplacera la moiti&eacute; du vinaigre balsamique par exemple. BONNE DEGUSTATION !', '2023-10-23 10:33:28', NULL),
(12, 'GDSxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2023-10-23 13:10:04', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`) VALUES
(1, 'jon doe', 'jojo@yahoo.com'),
(2, 'jane douaw', 'jadou@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
