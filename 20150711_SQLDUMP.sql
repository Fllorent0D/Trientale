-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost:3306
-- Généré le :  Mer 12 Août 2015 à 19:51
-- Version du serveur :  5.5.42
-- Version de PHP :  5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `trientalis`
--

-- --------------------------------------------------------

--
-- Structure de la table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `place` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `text`, `place`) VALUES
(8, 'Historique', 'Officiellement, la Trientale a vu le jour le 17 octobre 1984. Elle est devenue une section des Cercles des Naturalistes de Belgique (CNB) le 29 novembre 1984.<br />\r\n<br />\r\nPetit retour en arrière. En 1984, dans la jolie vallée de la Lienne, il y a belle lurette que les oiseaux du bocage étaient accoutumés aux allées et venues d’un personnage aux jumelles habituellement rivées aux yeux. Et depuis des mois, de nombreux lecteurs suivaient assidûment dans le journal publicitaire local le feuilleton ornithologique dont cet original était l’auteur. Vous avez reconnu Marc Deroanne.<br />\r\n<br />\r\nMarc ne tarde pas à faire des adeptes. Pour quelques jeunes de la région, pies-grièches, tarins, grives litornes n’ont bientôt plus de secrets pendant que d’autres parcourent le Plateau des Tailles, la vallée du Glain ou le Thier des carrières à la recherche des richesses naturelles de ces milieux insolites. Et c’est ainsi que le 17 octobre 1984, ils sont 7 à se retrouver chez Marc et Marielle, son épouse, pour partager leur passion commune : le monde de la nature. Marc DEROANNE, l’homme aux jumelles, Bernard CLESSE et Philippe COLLAS, deux jeunes ornithologues, Luc LEJEUNE, Robert CLOTUCHE, Thérèse DEMUNCK et Joseph CLESSE décident de fonder un groupe régional d’étude et de sensibilisation à la nature. La zone d’activités sera le territoire parcouru par la Lienne, le Glain et l’Amblève.<br />\r\n<br />\r\nD’autres jeunes viennent gonfler le groupe : Fabien PEKUS, Marc DEVIGNON, Christophe HEMROULLE, Dominique LENOIR… Les activités peuvent commencer. La première excursion nature organisée le 10 novembre 1984 attire 6 participants à la « Découverte du Plateau des Tailles ».<br />\r\n<br />\r\nNos objectifs et ceux des CNB étaient particulièrement concordants. C’est donc tout naturellement que nous avons souhaité rejoindre cette association qui existait déjà depuis 30 ans sous la conduite de Léon WOUE, pionnier dans le domaine de la sensibilisation et l’éducation à la nature.<br />\r\n<br />\r\nIl fallait une structure. Bernard CLESSE, guide nature et déjà actif auprès des CNB fut notre premier président, Marc DEROANNE, secrétaire et Robert CLOTUCHE, trésorier. La trientale (Trientalis europaea), petite fleur des tourbières boréales, que l’on peut encore découvrir dans les tourbières du Haut plateau ardennais, celui des Tailles entre autres, fut choisie comme emblème et nom de la section.<br />\r\n<br />\r\nLa jeune section a vite grandi. Aux membres fondateurs, qui ont poursuivi leur chemin pour la plupart dans l’éducation à la connaissance et à la protection de la nature, sont venus rapidement s’ajouter des nouveaux qui au fil des ans ont assuré l’animation de la section en se partageant les responsabilités dans la bonne humeur et le respect de tous. Nous ne les citerons pas, il serait trop risqué d’en oublier.<br />\r\n<br />\r\nEn 25 ans, plus de 1200 activités sont répertoriées officiellement : activités d’éveil et d’étude de la flore, des oiseaux, des insectes, de la géologie régionale… dans le plateau des Tailles mais aussi plus loin et même dans les pays voisins, week-ends à Vierves, conférences, expositions…<br />\r\n<br />\r\nLa Trientale se porte bien ; elle compte aujourd’hui plus de 300 membres et deux « filiales » : les Curieûs Bokèts et les Rangers-Trientale. Elle est une section dynamique grâce à l’harmonie au sein de l’équipe d’animation et entre tous ses membres, dans l’esprit de ce qui pourrait être notre devise : « Du sérieux, mais dans la bonne humeur».', 0),
(9, 'Devenir membre', 'Vous pouvez nous rejoindre en devenant membre des Cercles des Naturalistes de Belgique (CNB), ASBL, rue des Ecoles, 21, 5670 Vierves-sur-Viroin.<br />\r\n<br />\r\nCotisation annuelle : au compte 001 – 3004862 – 72 en mentionnant « section la Trientale »<br />\r\n<ul><br />\r\n<li>Etudiant : 6 €</li><br />\r\n<li>Adulte : 9 €</li><br />\r\n<li>Famille : 14 €</li><br />\r\n</ul><br />\r\nVous recevrez alors la revue des CNB « L’Erable » (4 numéros par an) et vous bénéficierez de l’assurance qui couvre les membres lors de la participation aux activités.<br />\r\n<br />\r\nLe Carnet, revue trimestrielle de la Trientale, est distribué lors des participations aux activités.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `color` varchar(100) NOT NULL DEFAULT 'primary'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `calendars`
--

INSERT INTO `calendars` (`id`, `category`, `date`, `section`, `guide`, `description`, `place`, `color`) VALUES
(1, 'Visite Thématique', '2015-02-12', 'Trientale 1j', 'Florent Cardoen', 'Visite thématique en Basse Lesse, au sein et autour du parc de Furfooz (Ardenne et Gaume) à la découverte de sites de grand intérêt biologique (parc de Furfooz, Aiguilles de Chaleux, Fonds de Chaleux).<br />\r\nBiotopes variés (pelouses calcaires, fourrés thermophiles, érablières de ravin, aulnaies alluviales…) riches en patrimoines archéologiques et géologiques : fortifications, grottes occupées à la préhistoire, karsts, monticules waulsortiens. Prévoir pique-nique, bonnes chaussures de marche, loupe, flore.', 'Rendez-vous à 10 h 00 sur le parking près du chalet du parc, rue du Camp romain à 5500 Dinant (Furfooz). GPS (Google Earth) : 50°12’57.91’’ N, 4°57’23.22’’ E. Paf : 2,00 € comme droit d’accès au parc', 'primary'),
(2, 'Visite Thématique', '2015-03-12', 'Trientale 1j', 'FloFlo', 'La description de la mort qui tue', 'Rendez-vous dans la ru en dessous de chez moi', 'primary'),
(3, 'Visite Thématique', '2015-03-12', 'Trientale 1j', 'FloFlo', 'La description de la mort qui tue', 'Rendez-vous dans la ru en dessous de chez moi', 'primary'),
(4, 'Test', '2015-07-03', 'Trientale', 'Florent', 'jvdfknsvjsndfjkvhn', 'kjsdhbskjdhfbvs', 'primary'),
(5, 'Visite thématique', '2015-07-12', 'Trientale 1j', 'Florent Cardoen', 'Florent', 'ldkfnbksdjfbnsjfn<br />\r\n', 'primary'),
(6, 'Test deux boutons', '2015-07-12', 'Trientale 1j', 'Florent', 'Coucou', 'odjbdjfvpsuf', 'default'),
(7, 'Test trois boutons', '2015-07-12', 'Trientale 1j', 'Florent', 'Coucou', 'odjbdjfvpsuf', 'default'),
(8, 'Texte affiché', '2015-07-20', 'Trientale 1j', 'Florent Cardoen', 'La description de fou malade', 'Rendez-vous sur la page d''accueil du site!', 'success'),
(9, 'Test quatre boutons', '2015-07-12', 'Trientale 1j', 'Florent Cardoen', 'La description de fou malade', 'Rendez-vous sur la page d''accueil du site!', 'danger'),
(10, 'Test', '2015-07-03', 'dskjfds', 'jijiu', 'ibioubh', 'uhoiuh', 'warning'),
(11, 'Test', '2015-07-12', 'dskjfds', 'jijiu', 'ibioubh', 'uhoiuh', 'primary'),
(12, 'Visite Th&eacute;matique', '2015-08-10', 'Trientale 1j', 'Florent Cardoen', 'Ma superbe description pour l&#039;&eacute;v&eacute;nement qui va se produire!', 'Rendez-vous quelque part ou on se retrouve', 'info');

-- --------------------------------------------------------

--
-- Structure de la table `carnets`
--

CREATE TABLE `carnets` (
  `id` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `carnets`
--

INSERT INTO `carnets` (`id`, `annee`, `numero`, `file`) VALUES
(0, 2015, 1, '2015_1.pdf'),
(0, 2015, 2, '2015_2.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `category`, `thumbnail`, `slug`) VALUES
(1, 'Veto', 'Chien chat', '', 'veto'),
(3, 'Mes photos', 'Florent', '', 'mes-photos'),
(4, 'Mes Photooooos', 'Florent Car', '', 'mes-photooooos');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=276 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `photos`
--

INSERT INTO `photos` (`id`, `file`, `gallery_id`, `comment`) VALUES
(1, '1.jpg', 1, ''),
(2, '2.jpg', 1, ''),
(3, '3.jpg', 1, ''),
(4, '4.jpg', 1, ''),
(5, '5.jpg', 1, ''),
(6, '6.jpg', 1, ''),
(7, '7.jpg', 1, ''),
(8, '8.jpg', 1, ''),
(9, '9.jpg', 1, ''),
(10, '10.jpg', 1, ''),
(11, '11.jpg', 1, ''),
(12, '12.jpg', 1, ''),
(13, '13.jpg', 1, ''),
(14, '14.jpg', 1, ''),
(15, '15.jpg', 1, ''),
(16, '16.jpg', 1, ''),
(17, '17.JPG', 1, ''),
(18, '18.JPG', 1, ''),
(19, '19.JPG', 1, ''),
(20, '20.jpg', 1, ''),
(21, '21.jpg', 1, ''),
(22, '22.png', 1, ''),
(23, '23.JPG', 1, ''),
(24, '24.png', 1, ''),
(25, '25.jpg', 1, ''),
(26, '26.jpg', 1, ''),
(27, '27.jpg', 1, ''),
(28, '28.JPG', 1, ''),
(29, '29.JPG', 1, ''),
(30, '30.jpg', 1, ''),
(31, '31.jpg', 1, ''),
(32, '32.jpg', 1, ''),
(33, '33.JPG', 1, ''),
(34, '34.jpg', 1, ''),
(35, '35.jpg', 1, ''),
(36, '36.JPG', 1, ''),
(37, '37.jpg', 1, ''),
(38, '38.jpg', 1, ''),
(39, '39.jpg', 1, ''),
(40, '40.jpg', 1, ''),
(41, '41.JPG', 1, ''),
(42, '42.JPG', 1, ''),
(43, '43.JPG', 1, ''),
(44, '44.JPG', 1, ''),
(45, '45.jpg', 1, ''),
(46, '46.jpeg', 1, ''),
(47, '47.jpg', 1, ''),
(48, '48.jpg', 1, ''),
(49, '49.JPG', 1, ''),
(50, '50.jpg', 1, ''),
(51, '51.JPG', 1, ''),
(52, '52.jpg', 1, ''),
(53, '53.jpg', 1, ''),
(54, '54.JPG', 1, ''),
(55, '55.JPG', 1, ''),
(56, '56.jpg', 1, ''),
(57, '57.jpg', 1, ''),
(58, '58.jpg', 1, ''),
(59, '59.jpg', 1, ''),
(60, '60.jpg', 1, ''),
(61, '61.jpg', 1, ''),
(62, '62.jpg', 1, ''),
(63, '63.jpg', 1, ''),
(64, '64.jpg', 1, ''),
(65, '65.jpg', 1, ''),
(66, '66.jpg', 1, ''),
(67, '67.JPG', 1, ''),
(68, '68.jpg', 1, ''),
(69, '69.JPG', 1, ''),
(70, '70.jpg', 1, ''),
(71, '71.JPG', 1, ''),
(72, '72.jpg', 1, ''),
(73, '73.jpg', 1, ''),
(74, '74.JPG', 1, ''),
(75, '75.jpg', 1, ''),
(76, '76.JPG', 1, ''),
(77, '77.jpg', 1, ''),
(78, '78.jpg', 1, ''),
(79, '79.jpg', 1, ''),
(80, '80.jpg', 1, ''),
(81, '81.jpg', 1, ''),
(82, '82.JPG', 1, ''),
(83, '83.JPG', 1, ''),
(84, '84.JPG', 1, ''),
(85, '85.jpg', 1, ''),
(86, '86.jpg', 1, ''),
(87, '87.jpg', 1, ''),
(88, '88.JPG', 1, ''),
(89, '89.jpg', 1, ''),
(90, '90.jpg', 1, ''),
(91, '91.jpg', 1, ''),
(92, '92.jpg', 1, ''),
(93, '93.jpg', 1, ''),
(94, '94.jpg', 1, ''),
(95, '95.jpg', 1, ''),
(96, '96.jpg', 1, ''),
(97, '97.jpg', 1, ''),
(98, '98.jpg', 1, ''),
(99, '99.jpg', 1, ''),
(100, '100.jpg', 1, ''),
(101, '101.jpg', 1, ''),
(102, '102.jpg', 1, ''),
(103, '103.jpg', 1, ''),
(104, '104.jpg', 1, ''),
(105, '105.jpg', 1, ''),
(106, '106.jpg', 1, ''),
(107, '107.jpg', 1, ''),
(108, '108.jpg', 1, ''),
(109, '109.jpg', 1, ''),
(110, '110.jpg', 1, ''),
(111, '111.jpg', 1, ''),
(112, '112.jpg', 1, ''),
(113, '113.jpg', 1, ''),
(114, '114.jpg', 1, ''),
(115, '115.jpg', 1, ''),
(116, '116.JPG', 1, ''),
(117, '117.JPG', 1, ''),
(118, '118.jpg', 1, ''),
(119, '119.jpg', 1, ''),
(120, '120.jpeg', 1, ''),
(121, '121.jpg', 1, ''),
(122, '122.jpg', 1, ''),
(123, '123.jpg', 1, ''),
(124, '124.jpg', 1, ''),
(125, '125.jpg', 1, ''),
(126, '126.jpg', 1, ''),
(127, '127.jpg', 1, ''),
(128, '128.jpg', 1, ''),
(129, '129.jpg', 1, ''),
(130, '130.jpg', 1, ''),
(131, '131.jpg', 1, ''),
(132, '132.JPG', 1, ''),
(133, '133.jpg', 1, ''),
(134, '134.jpg', 1, ''),
(135, '135.JPG', 1, ''),
(136, '136.JPG', 1, ''),
(137, '137.jpg', 1, ''),
(138, '138.jpg', 1, ''),
(139, '139.jpg', 1, ''),
(140, '140.JPG', 1, ''),
(141, '141.JPG', 1, ''),
(142, '142.JPG', 1, ''),
(143, '143.JPG', 1, ''),
(144, '144.JPG', 1, ''),
(145, '145.JPG', 1, ''),
(146, '146.JPG', 1, ''),
(147, '147.JPG', 1, ''),
(148, '148.JPG', 1, ''),
(149, '149.jpg', 1, ''),
(150, '150.jpg', 1, ''),
(151, '151.jpg', 1, ''),
(152, '152.jpg', 1, ''),
(153, '153.jpg', 1, ''),
(154, '154.jpg', 1, ''),
(155, '155.jpg', 1, ''),
(156, '156.jpg', 1, ''),
(157, '157.jpg', 1, ''),
(158, '158.jpg', 1, ''),
(159, '159.jpg', 1, ''),
(160, '160.jpg', 1, ''),
(161, '161.jpg', 1, ''),
(162, '162.jpg', 1, ''),
(163, '163.jpg', 1, ''),
(164, '164.JPG', 1, ''),
(165, '165.JPG', 1, ''),
(166, '166.jpg', 1, ''),
(167, '167.JPG', 1, ''),
(168, '168.JPG', 1, ''),
(169, '169.JPG', 1, ''),
(170, '170.JPG', 1, ''),
(171, '171.JPG', 1, ''),
(172, '172.JPG', 1, ''),
(173, '173.JPG', 1, ''),
(174, '174.jpg', 1, ''),
(175, '175.jpg', 1, ''),
(176, '176.JPG', 1, ''),
(177, '177.jpg', 1, ''),
(178, '178.jpg', 1, ''),
(179, '179.jpg', 1, ''),
(180, '180.jpg', 1, ''),
(181, '181.jpg', 1, ''),
(182, '182.jpg', 1, ''),
(183, '183.jpg', 1, ''),
(184, '184.jpg', 1, ''),
(185, '185.jpg', 1, ''),
(186, '186.JPG', 1, ''),
(187, '187.jpg', 1, ''),
(188, '188.jpg', 1, ''),
(189, '189.jpg', 1, ''),
(190, '190.JPG', 1, ''),
(191, '191.JPG', 1, ''),
(192, '192.jpeg', 1, ''),
(193, '193.jpeg', 1, ''),
(194, '194.jpg', 1, ''),
(195, '195.jpg', 1, ''),
(196, '196.jpg', 1, ''),
(197, '1.jpg', 3, ''),
(198, '2.jpg', 3, ''),
(199, '3.jpg', 3, ''),
(200, '4.jpg', 3, ''),
(201, '5.jpg', 3, ''),
(202, '1.jpg', 4, ''),
(203, '2.jpg', 4, ''),
(204, '3.jpg', 4, ''),
(205, '4.jpg', 4, ''),
(206, '5.jpg', 4, ''),
(207, '6.jpg', 4, ''),
(208, '7.jpg', 4, ''),
(209, '8.jpg', 4, ''),
(210, '9.jpg', 4, ''),
(211, '10.jpg', 4, ''),
(212, '11.jpg', 4, ''),
(213, '12.jpg', 4, ''),
(214, '13.jpg', 4, ''),
(215, '14.jpg', 4, ''),
(216, '15.jpg', 4, ''),
(217, '16.jpg', 4, ''),
(218, '17.jpg', 4, ''),
(219, '18.jpg', 4, ''),
(220, '19.jpg', 4, ''),
(221, '20.jpg', 4, ''),
(222, '21.jpg', 4, ''),
(223, '22.jpg', 4, ''),
(224, '23.jpg', 4, ''),
(225, '24.jpg', 4, ''),
(226, '25.jpg', 4, ''),
(227, '26.jpg', 4, ''),
(228, '27.jpg', 4, ''),
(229, '28.jpg', 4, ''),
(230, '29.jpg', 4, ''),
(231, '30.jpg', 4, ''),
(232, '31.jpg', 4, ''),
(233, '32.jpg', 4, ''),
(234, '33.jpg', 4, ''),
(235, '34.jpg', 4, ''),
(236, '35.jpg', 4, ''),
(237, '36.jpg', 4, ''),
(238, '37.jpg', 4, ''),
(239, '38.png', 4, ''),
(240, '39.jpg', 4, ''),
(241, '40.jpg', 4, ''),
(242, '41.jpg', 4, ''),
(243, '42.jpg', 4, ''),
(244, '43.jpg', 4, ''),
(245, '44.jpg', 4, ''),
(246, '45.jpg', 4, ''),
(247, '46.jpg', 4, ''),
(248, '47.jpg', 4, ''),
(249, '48.jpg', 4, ''),
(250, '49.jpg', 4, ''),
(251, '50.jpg', 4, ''),
(252, '51.jpg', 4, ''),
(253, '52.jpg', 4, ''),
(254, '53.jpg', 4, ''),
(255, '54.jpg', 4, ''),
(256, '55.jpg', 4, ''),
(257, '56.jpg', 4, ''),
(258, '57.jpg', 4, ''),
(259, '58.jpg', 4, ''),
(260, '59.jpg', 4, ''),
(261, '60.jpg', 4, ''),
(262, '61.jpg', 4, ''),
(263, '62.jpg', 4, ''),
(264, '63.jpg', 4, ''),
(265, '64.jpg', 4, ''),
(266, '65.png', 4, ''),
(267, '66.jpg', 4, ''),
(268, '67.jpg', 4, ''),
(269, '68.jpg', 4, ''),
(270, '69.jpg', 4, ''),
(271, '70.jpg', 4, ''),
(272, '71.jpg', 4, ''),
(273, '72.jpg', 4, ''),
(274, '73.jpg', 4, ''),
(275, '74.jpg', 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `nom`, `email`, `role`) VALUES
(1, 'florent', 'd6f679c9ef630397d858ba2328616158991fd96f', 'Florent Cardoen', 'f.cardoen@me.com', 'administrateur'),
(6, 'admin', '840ae1f2808cc9f503d23db60b909dc62225c0b1', 'Admin Test', 'admin@test.com', 'Administrateur'),
(7, 'abdon', '7d875d3cb74e8ad58d1539ab2ab7819bde980ea3', 'Cardoen Alain', 'acardoen@gmail.com', 'Correcteur');

-- --------------------------------------------------------

--
-- Structure de la table `visites`
--

CREATE TABLE `visites` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `guide` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `visites`
--

INSERT INTO `visites` (`id`, `title`, `text`, `date`, `guide`, `file`) VALUES
(6, 'Torgny : patrimoine et nature en RN  ', 'Comme chaque année, la Trientale retrouve la Gaume sous la conduite de Francine qui nous a concocté un <br />\nprogramme particulièrement riche et varié. Nature e t patrimoine seront bien au rendez-vous.  <br />\n  <br />\nD''abord, une touche historique : au bas de Torgny,  la Chiers tient lieu de frontière entre la France et la <br />\nBelgique ; la gare était d''ailleurs commune à Velos nes et Torgny. Le site est particulièrement intéressant <br />\npour les observations ornithologiques, tant à l''oei l nu qu''avec jumelles ou longue vue. Bondrée, milan s noir <br />\net royal, grive litorne, fauvette à tête noire, pic  épeichette, une famille de rougequeues noirs, berg eronnette <br />\ndes ruisseaux, hirondelle de rivage, chardonneret,  accenteur mouchet, pouillot fitis, linotte mélodieuse, <br />\ntroglodyte curieusement perché tout en haut d''un po teau électrique, et le chant furtif du rossignol.   <br />\n <br />\nAprès un exercice d''identification du géranium des  Pyrénées avec la flore bleue, on gagne le site de la <br />\nchapelle Notre-Dame des Affligés pour la visite de  l''ancienne carrière devenue la RN Raymond Mayné. C'' est <br />\nla saison d''explosion florale en pelouse calcaire ;  et nous ne serons pas déçus. Il y a de quoi s''émer veiller : <br />\norchis militaire, orchis homme-pendu, orchis pyrami dal, succise des pré, sainfoin, mélampyre des champ s, <br />\nancolie, aspérule odorante, sanicle d''Europe, plata nthère des montagnes, céphalanthère à grandes fleur s, <br />\nlistère à feuilles ovales, néottie, petite pyrole,  petite pimprenelle, et  j''en passe. Des oiseaux enc ore : pie-<br />\ngrièche écorcheur, pipit des arbres, bruant jaune.   <br />\n <br />\nUn clin d''oeil à la jolie fleur du plantain moyen e t aux feuilles de colchique et c''est l''heure du piq ue-nique.  <br />\n <br />\nAprès-midi, nous gagnons Charency, haut lieu de la  guerre 14-18 avec son cimetière allemand. Nous <br />\nvisitons maintenant la RN de la côte d''Urbul. Autre  pelouse calcaire en pente raide dominant la vallée  de la <br />\nChiers et gérée manuellement.   <br />\nUn massif de fusain ponctué de viornes manciennes,  le bord du chemin bien garni de résédas jaunes et l''on <br />\nse replonge dans l''explosion florale typique de la  pelouse calcaire. Aux observations du matin s''ajout ent <br />\nl''orchis pourpre, l''ophrys bourdon, l''oprhys abeill e, le lin purgatif, le serpolet, la vesce cultivée, l''arabette <br />\nhérissée, la renoncule bulbeuse, l’anémone pulsatil le, le polygala du calcaire, l''arabette hérissée… Nous <br />\nsommes admiratifs devant la quantité des différente s espèces.  <br />\n  <br />\nDe l''entomologie aussi : une volée de petits hannet ons (Phyllopertha horticola),  le demi-diable (Centrotus <br />\ncornutus ), une cigale sortie de son exuvie, un frelon, des  papillons : hespérie de la mauve, moiré franconien,  <br />\nphalènes divers ; la chenille du petit paon de nuit  et du bombyx du chêne.  <br />\n  <br />\nNous finissons la journée par la visite du Buré d''O rval : ancien complexe métallurgique du 12<br />\ne siècle avec,  <br />\nen contrebas du château, les vestiges de la halle à  charbon de bois et à minerai et le haut-fourneau à fonte. <br />\nFrancine nous explique comment fonctionnait le syst ème : gueuses martelées en lingots et transport vers la <br />\nplatinerie. Elle nous signale un arbuste de parc cu rieux, un staphylier (Staphylea pinnata) et une belle station <br />\nd''ail des ours ponctuée de parisettes. Le site cess a son activité à la fin du 17<br />\ne siècle mais, pour assurer <br />\nl''approvisionnement en canons de son armée, Louis X IV ordonna la construction du haut-fourneau du Dorlon <br />\noù nous allons jeter un dernier coup d''oeil. Pour r epérer encore au bord du chemin l''asperge, l''orme d e <br />\nmontagne et un coléoptère nécrophore ( Nicrophorus investigator).  <br />\n <br />\n17 heures : il est temps de retrouver la place du v illage, son ancien lavoir et la terrasse accueillante bien <br />\napprovisionnée dans la spécialité locale que vous s avez. Et qu''il nous reste à déguster pour clore la <br />\njournée : bilan des observations, derniers commenta ires et le merci à notre guide Francine qui nous a offert <br />\ncette journée remarquable.      <br />\nGabriel Ney', '2015-05-31', 'Francine Van den Abbeele    ', '2015-05-31_torgny---patrimoine-et-nature-en-rn--.pdf'),
(7, 'Salmchâteau : de la Ronce à Chifontaine  ', 'Groupe imposant et météo qui nous  gratifie de conditions estivales, voilà la garantie du plein succès de <br />\nl''activité que nous a préparée notre guide dans la  région berceau de la Trientale.   <br />\n  <br />\nAu départ de la centrale électrique de Cierreux ave c son ancien fronton Esmalux, Michel nous explique  les <br />\ncaractéristiques techniques de cette centrale qui f onctionne par retenue d''eau. Puis nous gagnons le p lateau <br />\nqui domine un panorama sur la vallée du Glain et l'' ancien château à Salmchâteau. Le guide nous signale   <br />\nque cette forteresse fut érigée par les comtes de S alm au 14<br />\ne siècle comme place forte plus sécurisée que <br />\nleur demeure du moyen âge à Vielsalm. La légende di t même qu''un tunnel reliait les deux sites.  <br />\n <br />\nMichel nous détaille ensuite la géologie du paysage  qui s''offre à nous : nous sommes sur le massif de <br />\nStavelot, les plus anciennes roches de Belgique du  Cambrien (500 M d''années) où salmien et gedinnien s e <br />\ntutoient. Le relief est encaissé. La région est ric he en variétés minérales : coticule connu dans le m onde <br />\nentier, phyllade, schiste métamorphisé exploité com me ardoises, arkose pour la construction et toutes une <br />\nsérie de minéraux exceptionnels qui engendrèrent un e véritable ruée des spécialistes puis des… <br />\ncollectionneurs.   <br />\nNous arrivons à l''arrière de Provedoux avant de des cendre vers le gué de la Ronce dont les eaux acides  <br />\nsont issues de la fagne de Bihain. Le site est part iculièrement pittoresque sous la lumière généreuse  du <br />\nsoleil estival.      <br />\nUn chemin forestier nous amène aux confins du villa ge de Courtil à la réserve naturelle de Chifontaine. Il est <br />\ndéjà l''heure du pique-nique, scandée par les deux n otes presque obsédantes du coucou ; au bord du chem in <br />\nbaigné de soleil, ce qui incite certains à la siest e.  <br />\n <br />\nMichel nous emmène ensuite en file indienne pour la  découverte des plantes caractéristiques de ce milieu <br />\nde haute fagne : canneberge, airelle, bruyère quate rnée, linaigrettes vaginée et à feuilles étroites, narthécie, <br />\norchis tacheté… Des chamignons, téphrocybe et mitru le des marais ; l''impressionnante araignée dolomède.  <br />\n <br />\nLe chemin de retour nous offre encore un autre pano rama sur la vallée du Glain ; on traverse le hameau de <br />\nHonvelez et, en sous-bois, un chemin dégringole ver s le ruisseau de la Ronce qui nous ramène au parkin g.  <br />\n  <br />\nBords de chemin secs, anciennes prairies de fauche,  sentiers plus humides en sous-bois nous ont gratifiés <br />\nd''une belle palette colorée : véronique officinale,  renouée bistorte, potentille tormentille, géranium  des bois, <br />\nrenoncule à feuilles de platane,  renouée bistorte,  muguet encore en fleurs, pédiculaire des bois, lis tère à <br />\nfeuilles ovales, fenouil des Alpes, lysimaque des b ois, polygala à feuilles de serpolet, populage, raiponce <br />\nnoire ; des  carex : nigra, demissa, palescens, echinata, ovalis, rostra ta…  <br />\n <br />\nDes oiseaux : milan royal,  buse, héron, hirondelle, martinet, fauvette grisett e, tarin des aulnes, moineau <br />\nfriquet, grive litorne, pouillots fitis et siffleur , pipit des arbres, roitelet huppé, becs croisés de s sapins, <br />\nrousserolle verderolle…   <br />\n  <br />\nEt encore, le gazé  (joli papillon), la veuve, autr e petit lépidoptère (Atolmis rubricollis) en grande quantité, le <br />\nbombyx de la ronce  (Macrothylacia rubi) vraiment peu impressionné, le clytre du saule ( Clytra laeviuscula) à <br />\nproximité d’une fourmilière monumentale ; la grenou ille rousse et un minuscule crapaud commun.  <br />\n  <br />\nJournée bien remplie donc, qui se termine dans la b onne humeur habituelle. Merci à notre guide Michel  pour <br />\nses explications, pour la préparation de cet itinér aire varié, pour la gestion du groupe avec le tact  qu''on lui <br />\nconnaît. Et merci à tous ceux qui ont mis leurs com pétences au service des participants.      <br />\n  <br />\n  <br />\nGabriel Ney', '2015-06-13', 'Michel Frisschen    ', '2015-06-13_salmchateau---de-la-ronce-a-chifontaine--.pdf'),
(8, 'Furfooz : Nature et histoire au parc naturel  ', 'Au programme, la visite du parc naturel de Furfooz, propriété de la ville de Dinant mais géré par Ardenne et <br />\nGaume. Ce sera la journée la plus chaude de la péri ode caniculaire, a dit la météo. De fait, mais le couvert <br />\nvégétal, la fraîcheur des trous dans les rochers où  l''on apprécie les commentaires prolongés, le parco urs <br />\nquelque peu adapté, l''arrêt pique-nique à la buvett e en bord de Lesse… voilà bien de quoi narguer la <br />\ncanicule et profiter pleinement des ressources du s ite.  <br />\n  <br />\nOn sait les compétences de nos deux guides dans les  divers domaines des sciences de la nature, la minutie <br />\navec laquelle ils préparent leur sujet et rassemble nt documentation et schémas expressifs ; ce sera do nc <br />\nune thématique variée, enrichie de commentaires et  de détails spécifiques.    <br />\n <br />\nIl y eut les observations « nature ». Epiaire des A lpes, aconit tue-loup, bois-joli, silène enflé, genêt des <br />\nteinturiers, bugrane rampante, campanule à feuilles  de pêcher, molène lychnide, érythrée petite centaurée, <br />\ncétérach, astragale à feuille de réglisse, campanul e gantelée, lunaire vivace, dentaire à bulbilles… Les <br />\npapillons demi-deuil, petit sylvain et un accouplem ent de tristans, l’araignée trogloxène Meta menardi et <br />\nCtenopius sulphureus,  coléoptère jaune sur ombellifère. Un spectaculaire  polypore géant tout frais éclos <br />\n( Meripilus giganteus )…  Et pour les spécialistes les lichens  Dermatocarpon miniatum et Peltigera <br />\nhorizontalis.    <br />\n  <br />\nIl y eut la géologie et les phénomènes karstiques :  nos guides nous ont emmenés dans le dédale des <br />\ndifférentes formations géologiques qui se rencontre nt dans la région : formations de Waulsort, de Bayard, de <br />\nLeffe, de Landelies, de la Molignée... Trou qui fum e qui communique avec le Trou du chantoir des Nuton s et <br />\nqui a révélé tout un systèmes de salles ; trou du f rontal, trou de la mâchoire où furent repérées des  traces du <br />\nmagdalénien (-12000). On devine les mystères de la  Lesse souterraine. Nos guides nous expliquent encor e <br />\nles 4 stades des monticules waulsortiens qui furent  déterminés par l''analyse des sédiments, avant de n ous <br />\nfaire toucher au cm près la zone de contact entre l a formation d''Hastière et la formation de Pont d''Arcole.  <br />\n <br />\nIl y eut l''histoire du site et son passé plus ou mo ins lointain. Des thermes romains reconstitués avec  <br />\nchauffage par hypocauste ; des vestiges de murs d''e nceinte et de murs de barrage, preuves d''une <br />\noccupation à différentes périodes de notre histoire  (de - 850 jusqu''au moyen âge). Des fouilles ont pe rmis d''y <br />\nretrouver de la céramique sigillée, des pointes d''a rmement, différents objets en os et en bronze.    <br />\n   <br />\nIl y eut les paysages émaillés de points de vue spe ctaculaires sur la vallée de la Lesse, la rivière tortueuse <br />\nceinturée de pans rocheux, le tilleul de Furfooz dé jà mentionné sur la carte Ferraris, les champs de c éréales <br />\nbrûlés par le soleil.    <br />\nNos guides nous ont épargné la montée finale vers l ''aiguille et le trou de Chaleux : les explications de ce <br />\nsite, au parking à l''ombre du feuillage protecteur,  suffirent à notre bonheur.  <br />\n <br />\nEt l''on peut dire que cette fois, le rafraîchisseme nt et un bon moment de récupération au hameau voisi n <br />\ns''imposaient. Merci à nos deux guides qui ont adapt é le programme du jour aux circonstances, sans <br />\ntoutefois ménager leurs explications.       <br />\nGabriel Ney', '2015-07-04', 'Eric et Gene Lebrun-Moréas   ', '2015-07-04_furfooz---nature-et-histoire-au-parc-naturel--.pdf'),
(9, 'Hotton : Découvertes en Calestienne  ', 'La météo pessimiste est battue  en brèche : nous allons passer une magnifique journée de mai, entre Ard enne et <br />\nFamenne, en Calestienne, toujours riche de découver tes pour les naturalistes.  <br />\n  <br />\nLe  guide  nous  accueille  devant  le  SI  de  Hotton,  nou s  présente  la  localité,  son  histoire,  ses  curiosités  les  plus <br />\nremarquables  et  nous  décrit  le  parcours  qui  nous  at tend :  une  petite  dizaine  de  km  qui  nous  permettron t <br />\nd''apprécier la vallée de l''Ourthe à partir des haut eurs des deux versants.  <br />\n <br />\nNous  sommes  au  bord  de  l''Ourthe,  Jean-Claude  ne  pou vait  donc  manquer  de  nous  parler  de  la faune aquatique <br />\nsauvage et ses caractéristiques : ombre, barbeau, h otu, ablette… sans oublier la truite fario.   <br />\n  <br />\nSuivez-nous  au  fil  de  l''itinéraire.  Première  étape  :  le  moulin  Faber.  Jolie  bâtisse  témoignage  d''une  é poque <br />\nrévolue, aujourd''hui musée. La passerelle sur le bi ef donne accès à l''île d''Oneux.   <br />\n  <br />\nLe  sentier  nous  amène  au  pied  des  rochers  de  Reniss art  dont  le  club  d''alpinisme  doit  assurer  l''entretien  en <br />\ndébroussaillant  le  site.  Pans  de  rochers  majestueux   qui  trahissent  la  géologie  tourmentée  de  la  région.  Il  faut <br />\nmaintenant  gagner  le  sommet  de  la  colline  par  un  se ntier  escarpé.  Vue  sublime  sur  la  vallée  avant  de  plonger <br />\ndans  le  passé  de  Ti  Château :  ancien  camp  romain  do nt  on  peut  encore  deviner  les  levées  de  terre  érigées  en <br />\nfossé. Nous sommes sur un promontoire en triangle d ont un seul accès devait être barré. Le guide précise que le <br />\nsite  aurait  servi  de  refuge  déjà  au  néolithique.  Il   situe  encore  les  anciennes  voies  romaines  de  la  ré gion :  la  voie <br />\nTongres-Arlon et la voie de la Famenne ?    <br />\nLa région est riche en phénomènes karstiques. Le ch emin forestier nous amène à la grotte de la Porte Aïve. Cette <br />\ngrotte fut utilisée dès le néolithique ; on y mit à  jour une sépulture collective et, plus près de nou s, les Allemands y <br />\ninstallèrent un poste de commandement lors de l''off ensive 44. Et comme c''est l''heure du pique-nique…  <br />\n <br />\nPetit retour sur nos pas pour descendre  par  la  Voie  des morts, un sentier moins escarpé qui mène à l''I sbelle. Le <br />\nguide  nous  explique  que  ce  ruisseau,  affluent  de  l'' Ourthe,  présente  les  3    types  de  résurgences :  perm anente, <br />\nsaisonnière et fossile. Trou béant dans la roche fr acturée ;  le lit  est à sec  en cette saison, ce qui rend  le joli petit <br />\npont superflu ; mais quelques dizaines de m plus lo in, la résurgence permanente est bien alimentée.  <br />\n <br />\nIl  faut  gagner  la  rive  gauche  de  l''Ourthe  dont  on  a pprécie  le  cours  paisible  et…  l''absence  du  cincle  p longeur <br />\npourtant  hôte  du  lieu.  Un  regard  pour  un  séquoia  gé ant  et  on  grimpe  sur  l''autre  versant.  On  s''arrête  d''abord  en <br />\nbordure  de  l''ancienne  carrière,  les  jumelles  balaie nt  les  parois  verticales  à  la  recherche  du  grand  du c  mais  ce <br />\nn''est pas son heure.   <br />\nSolide  grimpette  jusqu''au  site  des  grottes  des  1001   Nuits  où  le  panneau  explicatif  et  les  commentaires  du  guide <br />\nsuffiront  à  notre  bonheur.  Dernière  montée  du  jour  vers  la  réserve  domaniale  de  la  Carrière  de  l''Alouette,  site <br />\nremis en lumière par le projet LIFE Hélianthème à l ’initiative de la commune de Hotton.  <br />\n  <br />\nLe  cimetière  anglais  des  victimes  de  la  dernière  gu erre,  la  plongée  vers  Hotton  avec  vue  sur  la  Famenn e  et  le <br />\nCondroz au loin, le sous-bois et son arboretum ; et  on retrouve l''Ourthe et l''île d''Oneux. <br />\n  <br />\nLe  parcours  nous  a  offert  une  belle  palette  d''obser vations :  richesse  des  bouts  de  pelouses  calcaires  sur  les <br />\nsommets  rocheux,  sous-bois  aux  espèces  variées,  fos sés  humides  et  bords  de  chemins  plus  secs.  Sceaux  d e <br />\nSalomon  odorant  et  multiflore,  silène  penché,  dompt e-venin,  ellébore  fétide,  orchis  mâle,  lamiers  blanc  et  jaune, <br />\ncompagnon  rouge,  parisette  à  quatre  feuilles,  renon cule  à  tête  d''or,  violette  de  Rivin,  listère  à  feuille  ovale, <br />\neuphorbe petit-cyprès, ancolie,  bugle rampante,  pot entille faux-fraisier, primevères élevée  et  officinale,  véronique <br />\npetit-chêne,  colchique,  ail  des  ours …  Un  tapis  mul ticolore  ponctué  par  le  genet  déjà  fleurissant.  En lisière, <br />\nquelques  beaux  spécimens  d''ormes  champêtres. Tout c ela  sous  un  ciel  bleu  valorisé  par  quelques  cumulus bien <br />\npaisibles !     <br />\nLe sous-bois doit receler quelques morilles, mais ç a, c''est une autre histoire. Nous nous contenterons  d''une belle <br />\ntouffe  de  mousserons.  Un  mignon  longicorne :  P ogonocherus  hispidulus. Des  oiseaux :  verdier,  roitelet  huppé, <br />\nmilan  royal,  grive  draine,  bouvreuil,  fauvettes  à  t ête  noire  et  grisette,  grimpereau  des  jardins,  poui llot  fitis, <br />\nbernache du canada…    <br />\nEt tout ce que j''oublie : le guide du jour ne m''en  tiendra pas rigueur ! Merci à lui de nous avoir rév élé les richesses <br />\nde son terroir avec enthousiasme et compétence dans  les diverses sciences de la nature.  <br />\n  <br />\nGabriel Ney', '2015-05-09', 'Jean-Claude Joris     ', '2015-05-09_hotton---decouvertes-en-calestienne--.pdf'),
(10, 'Palogne et Sy : Géologie   ', 'Ciel parfaitement bleu (il le restera toute la journée) quand le guide nous accueille au domaine de <br />\nPalogne pour une thématique géologique en vallée de  l’Ourthe. Après un rappel des caractéristiques <br />\ngéologiques de la W allonie, avec force cartes et sc hémas plus expressifs les uns que les autres, nous <br />\nnous situons dans le temps et dans l’espace : une b oucle de l’Ourthe en contrebas du château de <br />\nLogne sur Dévonien moyen.     <br />\nHenri nous emmène dans les âges du Dévonien, nous d étaille les effets du plissement hercynien, <br />\nnous explique l’importance de la faille eifelienne  avec une série de failles transversales. Le Couvini en <br />\net le Givetien constituent le soubassement de la Ca lestienne. Et les points d’observation ne manquent <br />\npas : on admire les bancs de roche mais on est moin s fier quand il s’agit de définir faille inverse ou <br />\nfaille normale, ligne de schistosité, modification  de faciès, rupture de sédimentation, pendage, <br />\nchevauchement sur plis faillés… Sachant qu’il ne fa ut pas se laisser piéger par l’érosion qui a donné <br />\nle relief actuel.   <br />\nOn tutoie les vestiges du château de Logne et la va llée de la Lembrée, on s’apitoie sur la chouette <br />\neffraie en cage de fauconnerie et on retrouve le pa rking pour le pique-nique au bord de l’Ourthe où les <br />\nplus attentifs repèrent le martin-pêcheur.     <br />\nAprès-midi, nous gagnons Sy pour d’autres curiosité s géologiques. Nous sommes dans la plaine <br />\nalluviale sur schiste. Henri nous emmène dans la fo rmation de Fromelenne, de l’assise du Givetien au <br />\nFrasnien et au Famennien. La rive droite de l’Ourth e que nous remontons nous amène au pied du site <br />\nspectaculaire des rochers de Sy dont le  guide nous  détaille les curiosités : bancs inversés, faille <br />\ntransverse au plissement, diaclase…, cercles en cre ux et bosses trahissant la présence d’organismes <br />\nfossilisés. Les passionnés prospectent et signale d es échantillons d’animaux et de végétaux <br />\nfossilisés : spirifères, stromatopores, crinoïdes,  thamnopora.   <br />\n <br />\nSi la géologie a captivé les moins initiés comme le s plus érudits, la nature nous a offert une belle <br />\npalette d’observations en cette saison d’explosion  printanière. Les férus de botanique ont pu signaler : <br />\nail des ours, anémone fausse-renoncule, petite perv enche, renoncule tête d’or, gouet tacheté, violette <br />\ndes bois, corydale solide, parisette, raiponce, pot entille faux-fraisier, lierre terrestre, ellébore fétide, <br />\nlinaire cymbalaire, barbarée commune, moscatelline,  stellaire des bois, véronique à feuille de lierre, <br />\npolystic à aiguillons, soclopendre, seslérie bleue,  Carex digitata…   <br />\n <br />\nLes ornithologues ont repéré : verdier, pouillot si ffleur, bernache du Canada au nid, mésange nonette,  <br />\nchardonneret, bergeronnette des ruisseaux, épervier …   <br />\n <br />\nDes papillons encore : Robert-le-diable, citron, au rore de la cardamine.  <br />\n <br />\nEt pour finir, le clin d’œil paresseux du lézard de s murailles se chauffant en plein soleil, nullement  <br />\nimpressionné par les appareils photos.     <br />\nNous quittons Sy et le brouhaha des préparatifs de  la course de côte du lendemain pour retrouver le <br />\ndomaine de Palogne et sa terrasse où nous avons tôt  fait de mettre de l’ambiance par nos <br />\ncommentaires enthousiastes sur les découvertes de l a journée.  <br />\n <br />\nMerci à notre guide pour cette journée enrichissant e ; et à tous ceux qui ont partagé leur savoir au <br />\nprofit du groupe.     <br />\nGabriel Ney', '2015-04-18', 'Henri Wégria   ', '2015-04-18_palogne-et-sy---geologie---.pdf');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `calendars`
--
ALTER TABLE `calendars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `visites`
--
ALTER TABLE `visites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `calendars`
--
ALTER TABLE `calendars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `visites`
--
ALTER TABLE `visites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;