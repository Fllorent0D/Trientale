-- PHP MySQL Dump
--
-- Generated: Tue, 18 Aug 2015 12:40:13 +0200
-- PHP Version: 5.6.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


-- ------------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `place` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `text`, `place`) VALUES
('8', 'Historique', 'Officiellement, la Trientale a vu le jour le 17 octobre 1984. Elle est devenue une section des Cercles des Naturalistes de Belgique (CNB) le 29 novembre 1984.<br />\r\n<br />\r\nPetit retour en arrière. En 1984, dans la jolie vallée de la Lienne, il y a belle lurette que les oiseaux du bocage étaient accoutumés aux allées et venues d’un personnage aux jumelles habituellement rivées aux yeux. Et depuis des mois, de nombreux lecteurs suivaient assidûment dans le journal publicitaire local le feuilleton ornithologique dont cet original était l’auteur. Vous avez reconnu Marc Deroanne.<br />\r\n<br />\r\nMarc ne tarde pas à faire des adeptes. Pour quelques jeunes de la région, pies-grièches, tarins, grives litornes n’ont bientôt plus de secrets pendant que d’autres parcourent le Plateau des Tailles, la vallée du Glain ou le Thier des carrières à la recherche des richesses naturelles de ces milieux insolites. Et c’est ainsi que le 17 octobre 1984, ils sont 7 à se retrouver chez Marc et Marielle, son épouse, pour partager leur passion commune : le monde de la nature. Marc DEROANNE, l’homme aux jumelles, Bernard CLESSE et Philippe COLLAS, deux jeunes ornithologues, Luc LEJEUNE, Robert CLOTUCHE, Thérèse DEMUNCK et Joseph CLESSE décident de fonder un groupe régional d’étude et de sensibilisation à la nature. La zone d’activités sera le territoire parcouru par la Lienne, le Glain et l’Amblève.<br />\r\n<br />\r\nD’autres jeunes viennent gonfler le groupe : Fabien PEKUS, Marc DEVIGNON, Christophe HEMROULLE, Dominique LENOIR… Les activités peuvent commencer. La première excursion nature organisée le 10 novembre 1984 attire 6 participants à la « Découverte du Plateau des Tailles ».<br />\r\n<br />\r\nNos objectifs et ceux des CNB étaient particulièrement concordants. C’est donc tout naturellement que nous avons souhaité rejoindre cette association qui existait déjà depuis 30 ans sous la conduite de Léon WOUE, pionnier dans le domaine de la sensibilisation et l’éducation à la nature.<br />\r\n<br />\r\nIl fallait une structure. Bernard CLESSE, guide nature et déjà actif auprès des CNB fut notre premier président, Marc DEROANNE, secrétaire et Robert CLOTUCHE, trésorier. La trientale (Trientalis europaea), petite fleur des tourbières boréales, que l’on peut encore découvrir dans les tourbières du Haut plateau ardennais, celui des Tailles entre autres, fut choisie comme emblème et nom de la section.<br />\r\n<br />\r\nLa jeune section a vite grandi. Aux membres fondateurs, qui ont poursuivi leur chemin pour la plupart dans l’éducation à la connaissance et à la protection de la nature, sont venus rapidement s’ajouter des nouveaux qui au fil des ans ont assuré l’animation de la section en se partageant les responsabilités dans la bonne humeur et le respect de tous. Nous ne les citerons pas, il serait trop risqué d’en oublier.<br />\r\n<br />\r\nEn 25 ans, plus de 1200 activités sont répertoriées officiellement : activités d’éveil et d’étude de la flore, des oiseaux, des insectes, de la géologie régionale… dans le plateau des Tailles mais aussi plus loin et même dans les pays voisins, week-ends à Vierves, conférences, expositions…<br />\r\n<br />\r\nLa Trientale se porte bien ; elle compte aujourd’hui plus de 300 membres et deux « filiales » : les Curieûs Bokèts et les Rangers-Trientale. Elle est une section dynamique grâce à l’harmonie au sein de l’équipe d’animation et entre tous ses membres, dans l’esprit de ce qui pourrait être notre devise : « Du sérieux, mais dans la bonne humeur».', '0'),
('9', 'Devenir membre', 'Vous pouvez nous rejoindre en devenant membre des Cercles des Naturalistes de Belgique (CNB), ASBL, rue des Ecoles, 21, 5670 Vierves-sur-Viroin.<br />\r\n<br />\r\nCotisation annuelle : au compte 001 – 3004862 – 72 en mentionnant « section la Trientale »<br />\r\n<ul><br />\r\n<li>Etudiant : 6 €</li><br />\r\n<li>Adulte : 9 €</li><br />\r\n<li>Famille : 14 €</li><br />\r\n</ul><br />\r\nVous recevrez alors la revue des CNB « L’Erable » (4 numéros par an) et vous bénéficierez de l’assurance qui couvre les membres lors de la participation aux activités.<br />\r\n<br />\r\nLe Carnet, revue trimestrielle de la Trientale, est distribué lors des participations aux activités.', '1');

-- ------------------------------------------------------------

--
-- Table structure for table `backups`
--

CREATE TABLE `backups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backups`
--

INSERT INTO `backups` (`id`, `date`, `file`) VALUES
('1', '2015-08-16 13:53:58', 'backup_2015.08.16_13.53.58.zip'),
('2', '2015-08-16 13:58:28', 'backup_2015.08.16_13.58.28.zip'),
('3', '2015-08-16 14:03:12', 'backup_2015.08.16_14.03.12.zip'),
('4', '2015-08-16 14:05:08', 'backup_2015.08.16_14.05.08.zip'),
('5', '2015-08-16 14:06:56', 'backup_2015.08.16_14.06.56.zip'),
('6', '2015-08-16 14:08:10', 'backup_2015.08.16_14.08.10.zip'),
('7', '2015-08-16 14:10:26', 'backup_2015.08.16_14.10.26.zip'),
('8', '2015-08-16 14:11:31', 'backup_2015.08.16_14.11.31.zip'),
('9', '2015-08-16 14:12:39', 'backup_2015.08.16_14.12.39.zip'),
('10', '2015-08-16 14:14:02', 'backup_2015.08.16_14.14.02.zip'),
('11', '2015-08-16 14:15:08', 'backup_2015.08.16_14.15.08.zip'),
('12', '2015-08-16 14:16:26', 'backup_2015.08.16_14.16.26.zip'),
('13', '2015-08-16 14:20:54', 'backup_2015.08.16_14.20.54.zip'),
('14', '2015-08-16 14:22:00', 'backup_2015.08.16_14.22.00.zip'),
('15', '2015-08-16 14:23:06', 'backup_2015.08.16_14.23.06.zip'),
('16', '2015-08-16 14:24:22', 'backup_2015.08.16_14.24.22.zip'),
('17', '2015-08-16 14:25:30', 'backup_2015.08.16_14.25.30.zip'),
('18', '2015-08-16 14:26:36', 'backup_2015.08.16_14.26.36.zip'),
('19', '2015-08-16 14:27:45', 'backup_2015.08.16_14.27.45.zip'),
('20', '2015-08-16 14:30:42', 'backup_2015.08.16_14.30.42.zip'),
('21', '2015-08-16 14:31:52', 'backup_2015.08.16_14.31.52.zip'),
('22', '2015-08-16 14:33:08', 'backup_2015.08.16_14.33.08.zip'),
('23', '2015-08-16 14:34:14', 'backup_2015.08.16_14.34.14.zip'),
('24', '2015-08-16 14:35:20', 'backup_2015.08.16_14.35.20.zip'),
('25', '2015-08-17 09:40:53', 'backup_2015.08.17_09.40.53.zip'),
('26', '2015-08-17 09:42:19', 'backup_2015.08.17_09.42.19.zip'),
('27', '2015-08-17 09:43:32', 'backup_2015.08.17_09.43.32.zip'),
('28', '2015-08-17 09:45:15', 'backup_2015.08.17_09.45.15.zip'),
('29', '2015-08-17 09:46:26', 'backup_2015.08.17_09.46.26.zip'),
('30', '2015-08-17 10:03:11', 'backup_2015.08.17_10.03.11.zip');

-- ------------------------------------------------------------

--
-- Table structure for table `calendars`
--

CREATE TABLE `calendars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `guide` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `place` text NOT NULL,
  `color` varchar(100) NOT NULL DEFAULT 'primary',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendars`
--

INSERT INTO `calendars` (`id`, `category`, `date`, `section`, `guide`, `description`, `place`, `color`) VALUES
('1', 'Visite Thématique', '2015-02-12', 'Trientale 1j', 'Florent Cardoen', 'Visite thématique en Basse Lesse, au sein et autour du parc de Furfooz (Ardenne et Gaume) à la découverte de sites de grand intérêt biologique (parc de Furfooz, Aiguilles de Chaleux, Fonds de Chaleux).<br />\r\nBiotopes variés (pelouses calcaires, fourrés thermophiles, érablières de ravin, aulnaies alluviales…) riches en patrimoines archéologiques et géologiques : fortifications, grottes occupées à la préhistoire, karsts, monticules waulsortiens. Prévoir pique-nique, bonnes chaussures de marche, loupe, flore.', 'Rendez-vous à 10 h 00 sur le parking près du chalet du parc, rue du Camp romain à 5500 Dinant (Furfooz). GPS (Google Earth) : 50°12’57.91’’ N, 4°57’23.22’’ E. Paf : 2,00 € comme droit d’accès au parc', 'primary'),
('2', 'Visite Thématique', '2015-03-12', 'Trientale 1j', 'FloFlo', 'La description de la mort qui tue', 'Rendez-vous dans la ru en dessous de chez moi', 'primary'),
('3', 'Visite Thématique', '2015-03-12', 'Trientale 1j', 'FloFlo', 'La description de la mort qui tue', 'Rendez-vous dans la ru en dessous de chez moi', 'primary'),
('4', 'Test', '2015-07-03', 'Trientale', 'Florent', 'jvdfknsvjsndfjkvhn', 'kjsdhbskjdhfbvs', 'primary'),
('5', 'Visite thématique', '2015-07-12', 'Trientale 1j', 'Florent Cardoen', 'Florent', 'ldkfnbksdjfbnsjfn<br />\r\n', 'primary'),
('6', 'Test deux boutons', '2015-07-12', 'Trientale 1j', 'Florent', 'Coucou', 'odjbdjfvpsuf', 'default'),
('7', 'Test trois boutons', '2015-07-12', 'Trientale 1j', 'Florent', 'Coucou', 'odjbdjfvpsuf', 'default'),
('8', 'Texte affiché', '2015-07-20', 'Trientale 1j', 'Florent Cardoen', 'La description de fou malade', 'Rendez-vous sur la page d''accueil du site!', 'success'),
('9', 'Test quatre boutons', '2015-07-12', 'Trientale 1j', 'Florent Cardoen', 'La description de fou malade', 'Rendez-vous sur la page d''accueil du site!', 'danger'),
('10', 'Test', '2015-07-03', 'dskjfds', 'jijiu', 'ibioubh', 'uhoiuh', 'warning'),
('11', 'Test', '2015-07-12', 'dskjfds', 'jijiu', 'ibioubh', 'uhoiuh', 'primary'),
('12', 'Visite Th&eacute;matique', '2015-08-10', 'Trientale 1j', 'Florent Cardoen', 'Ma superbe description pour l&#039;&eacute;v&eacute;nement qui va se produire!', 'Rendez-vous quelque part ou on se retrouve', 'info'),
('13', 'Visite', '2015-08-13', 'Trientale 1j', 'Florent Cardoen', 'Une belle description', 'Devant l&#039;&eacute;glise', 'danger'),
('14', 'Mon cul', '2015-08-18', 'Trientale 1J', 'Florent Cardoe', 'ldlfgkjfgndjk', 'lkjdfnkjn', 'primary'),
('15', 'Mon cul', '2015-07-31', 'Trientale 1J', 'Florent Cardoe', 'ldlfgkjfgndjk', 'lkjdfnkjn', 'primary'),
('16', 'CAT&eacute;', '2015-07-07', 'DFLJKGN', 'KJNLKJN', 'KJNKLJN', 'LJKNLKJNJ', 'warning');

-- ------------------------------------------------------------

--
-- Table structure for table `carnets`
--

CREATE TABLE `carnets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `annee` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carnets`
--

INSERT INTO `carnets` (`id`, `annee`, `numero`, `file`) VALUES
('4', '2015', '2', '2015_2.pdf'),
('5', '2015', '3', '2015_3.pdf'),
('6', '2018', '1', '2018_1.pdf');

-- ------------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(11) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `category`, `thumbnail`, `slug`) VALUES
('1', 'Veto', 'Chien chat', '', 'veto'),
('3', 'Mes photos', 'Florent', '', 'mes-photos'),
('4', 'Mes Photooooos', 'Florent Car', '', 'mes-photooooos'),
('5', 'Nouvelle galerie', 'Plantes', '', 'nouvelle-galerie');

-- ------------------------------------------------------------

--
-- Table structure for table `glossaires`
--

CREATE TABLE `glossaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) NOT NULL,
  `definition` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glossaires`
--

INSERT INTO `glossaires` (`id`, `word`, `definition`) VALUES
('1', 'Florent', 'La d&eacute;finition de florent Cardoen'),
('2', 'un autre mot', 'la d&eacute;finition d&#039;un autre mot');

-- ------------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `new` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `new`) VALUES
('1', 'Florent Cardoen', 'f.cardoen@me.com', 'Bonjour mon nom est florent', '0'),
('2', 'Juliane ', 'juju@hotmail.com', 'Mon message est trop beau', '0'),
('3', 'Cardoen', 'f.cardoen@me.com', 'Mon message est toujours la meme apr&amp;egrave;s la validation', '0'),
('4', 'Cardoen', 'f.cardoen@me.com', 'Florent !!!!', '0'),
('5', 'Cardoen', 'f.cardoen@me.com', 'Coucou', '0'),
('6', 'Florent Cardoen', 'f.cardoen@me.com', 'Florent Cardoen\r\n', '0'),
('17', 'Cardoen Florent', 'f.cardoen@me.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et urna nisl. Nulla facilisi. Nam suscipit ex at malesuada malesuada. Vestibulum volutpat sapien eu augue pulvinar laoreet. Quisque at sapien tellus. Etiam ac semper nibh. Nunc ac velit dignissim, ultricies enim vel, finibus ante. Fusce id sapien non massa tempor commodo. Donec at massa eu massa porttitor congue eget sit amet quam. Suspendisse potenti. Integer arcu leo, sollicitudin in posuere vel, consequat a est. Mauris vehicula ac tortor at viverra. Donec et dapibus libero, nec sagittis augue. Duis faucibus ex sit amet magna condimentum, ut pretium purus ornare.\n\nPellentesque nec iaculis dolor. Vestibulum viverra tortor magna, sit amet commodo quam iaculis id. Etiam eget est vitae orci interdum semper eget non diam. Proin pretium fermentum dui condimentum eleifend. Quisque et sem cursus, feugiat sapien sit amet, finibus diam. Nunc id diam sed est fermentum tempus ac at nisl. Sed auctor, est sed pulvinar lacinia, ex augue suscipit velit, in egestas ante mauris hendrerit diam. Aliquam sit amet placerat odio. In ultricies non magna vitae feugiat. Phasellus bibendum nunc vitae vulputate ornare. Nullam sodales odio eu lorem ultrices pulvinar.\n\nNulla facilisi. Aenean non justo purus. Suspendisse ac elit odio. Mauris varius diam id nulla vestibulum, at vehicula neque varius. Vestibulum dignissim porta suscipit. Nulla tincidunt velit eu est tempus lacinia. Vivamus et auctor nulla, in pellentesque augue. Phasellus nec lectus ut erat efficitur lacinia at a urna. Integer cursus mi orci, nec fringilla dolor hendrerit a. Praesent semper laoreet tristique. Fusce et lacus sollicitudin, gravida sapien ut, accumsan metus. Donec sagittis tortor diam, id molestie risus viverra quis. Donec auctor mattis efficitur. Vestibulum ut ultrices ligula, sed rhoncus mi.\n\nDuis condimentum molestie nulla a rutrum. Nam lacinia nisi est, a feugiat nisl pellentesque consequat. Phasellus at est massa. Aenean vestibulum lacus leo, ut gravida justo scelerisque sit amet. Donec pulvinar metus vulputate dolor dictum molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque euismod feugiat turpis et faucibus. In et facilisis eros. Aliquam tempor, est quis mollis posuere, nisi magna ornare est, et varius neque urna sed nisl. Sed iaculis pellentesque cursus. Nulla placerat vestibulum metus id pellentesque. Mauris aliquam commodo felis non eleifend.\n\nNam nec ipsum turpis. Curabitur vulputate erat eu risus luctus lobortis. Mauris eget quam quis lectus scelerisque dignissim. Aliquam ac congue tellus. Curabitur ut porttitor arcu. Morbi ac lorem quam. Morbi vulputate eu lacus id lacinia. Duis tincidunt sem massa, vitae porttitor odio suscipit et. Nam nec est sodales, congue enim sed, volutpat ipsum. Integer vehicula tortor et leo sagittis, non pharetra purus cursus.', '0'),
('18', 'Florent', 'f.cardoen@me.com', 'Bonjour comment allez-vous?&amp;amp;lt;br /&amp;amp;gt;\r\n&amp;amp;lt;br /&amp;amp;gt;\r\nFlorent &amp;amp;lt;h1&amp;amp;gt;Cardoen&amp;amp;lt;/h1&amp;amp;gt;', '0'),
('19', 'Cardoen Florent', 'f.cardoen@me.com', 'florent c\r\n\r\n\r\ncardoen\r\n\r\n\r\nest beau', '0'),
('20', 'Cardoen &amp;amp;lt;script&amp;amp;gt;alert(', 'flroent@me.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et urna nisl. Nulla facilisi. Nam suscipit ex at malesuada malesuada. Vestibulum volutpat sapien eu augue pulvinar laoreet. Quisque at sapien tellus. Etiam ac semper nibh. Nunc ac velit dignissim, ultricies enim vel, finibus ante. Fusce id sapien non massa tempor commodo. Donec at massa eu massa porttitor congue eget sit amet quam. Suspendisse potenti. Integer arcu leo, sollicitudin in posuere vel, consequat a est. Mauris vehicula ac tortor at viverra. Donec et dapibus libero, nec sagittis augue. Duis faucibus ex sit amet magna condimentum, ut pretium purus ornare.\r\n\r\nPellentesque nec iaculis dolor. Vestibulum viverra tortor magna, sit amet commodo quam iaculis id. Etiam eget est vitae orci interdum semper eget non diam. Proin pretium fermentum dui condimentum eleifend. Quisque et sem cursus, feugiat sapien sit amet, finibus diam. Nunc id diam sed est fermentum tempus ac at nisl. Sed auctor, est sed pulvinar lacinia, ex augue suscipit velit, in egestas ante mauris hendrerit diam. Aliquam sit amet placerat odio. In ultricies non magna vitae feugiat. Phasellus bibendum nunc vitae vulputate ornare. Nullam sodales odio eu lorem ultrices pulvinar.\r\n\r\nNulla facilisi. Aenean non justo purus. Suspendisse ac elit odio. Mauris varius diam id nulla vestibulum, at vehicula neque varius. Vestibulum dignissim porta suscipit. Nulla tincidunt velit eu est tempus lacinia. Vivamus et auctor nulla, in pellentesque augue. Phasellus nec lectus ut erat efficitur lacinia at a urna. Integer cursus mi orci, nec fringilla dolor hendrerit a. Praesent semper laoreet tristique. Fusce et lacus sollicitudin, gravida sapien ut, accumsan metus. Donec sagittis tortor diam, id molestie risus viverra quis. Donec auctor mattis efficitur. Vestibulum ut ultrices ligula, sed rhoncus mi.\r\n\r\nDuis condimentum molestie nulla a rutrum. Nam lacinia nisi est, a feugiat nisl pellentesque consequat. Phasellus at est massa. Aenean vestibulum lacus leo, ut gravida justo scelerisque sit amet. Donec pulvinar metus vulputate dolor dictum molestie. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque euismod feugiat turpis et faucibus. In et facilisis eros. Aliquam tempor, est quis mollis posuere, nisi magna ornare est, et varius neque urna sed nisl. Sed iaculis pellentesque cursus. Nulla placerat vestibulum metus id pellentesque. Mauris aliquam commodo felis non eleifend.\r\n\r\nNam nec ipsum turpis. Curabitur vulputate erat eu risus luctus lobortis. Mauris eget quam quis lectus scelerisque dignissim. Aliquam ac congue tellus. Curabitur ut porttitor arcu. Morbi ac lorem quam. Morbi vulputate eu lacus id lacinia. Duis tincidunt sem massa, vitae porttitor odio suscipit et. Nam nec est sodales, congue enim sed, volutpat ipsum. Integer vehicula tortor et leo sagittis, non pharetra purus cursus.', '0'),
('21', 'cardoen', 'f.cardoen@me.com', '&amp;amp;lt;h1&amp;amp;gt;Florent Cardoen&amp;amp;lt;/h1&amp;amp;gt;', '0'),
('22', 'Cardoen', 'f.cardoen@me.com', '&amp;amp;lt;script&amp;amp;gt;alert(&amp;#039;XSS&amp;#039;);&amp;amp;lt;/script&amp;amp;gt;\r\n\r\nFlorent Cardoen &amp;agrave; s&amp;eacute;curis&amp;eacute; le tout ! :D', '0'),
('23', 'Cardoen', 'f.cardoen@me.com', '    &amp;amp;lt;div class=&amp;amp;quot;col-md-3&amp;amp;quot;&amp;amp;gt;\r\n        &amp;amp;lt;div class=&amp;amp;quot;panel&amp;amp;quot;&amp;amp;gt;\r\n            &amp;amp;lt;div class=&amp;amp;quot;panel-heading&amp;amp;quot;&amp;amp;gt;\r\n                &amp;amp;lt;h3 class=&amp;amp;quot;text-center&amp;amp;quot;&amp;amp;gt;Boite de r&amp;eacute;ception&amp;amp;lt;/h3&amp;amp;gt;\r\n            &amp;amp;lt;/div&amp;amp;gt;\r\n\r\n            &amp;amp;lt;div class=&amp;amp;quot;panel-body&amp;amp;quot;&amp;amp;gt;\r\n                &amp;amp;lt;div class=&amp;amp;quot;list-group&amp;amp;quot;&amp;amp;gt;\r\n                    &amp;amp;lt;?php foreach($messages as $message) : ?&amp;amp;gt;\r\n                    &amp;amp;lt;a href=&amp;amp;quot;&amp;amp;lt;?= ROOT ?&amp;amp;gt;admin/messages/index/&amp;amp;lt;?= $message-&amp;amp;gt;id ?&amp;amp;gt;&amp;amp;quot; class=&amp;amp;quot;list-group-item &amp;amp;lt;?= (isset($content) AND $message-&amp;amp;gt;id == $content-&amp;amp;gt;id)? &amp;amp;quot;active&amp;amp;quot; :&amp;amp;quot;&amp;amp;quot;; ?&amp;amp;gt;&amp;amp;quot;&amp;amp;gt;\r\n                        &amp;amp;lt;?= ($message-&amp;amp;gt;new)?&amp;amp;quot;&amp;amp;lt;span class=\\&amp;amp;quot;badge badge-info\\&amp;amp;quot;&amp;amp;gt;Nouveau&amp;amp;lt;/span&amp;amp;gt;&amp;amp;quot; : &amp;amp;quot;&amp;amp;quot; ; ?&amp;amp;gt;\r\n                        &amp;amp;lt;h4 class=&amp;amp;quot;list-group-item-heading&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;?= htmlspecialchars_decode(html_entity_decode($message-&amp;amp;gt;name)); ?&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;\r\n                        &amp;amp;lt;p class=&amp;amp;quot;list-group-item-text&amp;amp;quot;&amp;amp;gt;&amp;amp;lt;?= htmlspecialchars_decode(html_entity_decode(\\Core\\Helpers\\Text::cut($message-&amp;amp;gt;message, 75))); ?&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;\r\n                    &amp;amp;lt;/a&amp;amp;gt;\r\n                    &amp;amp;lt;?php endforeach; ?&amp;amp;gt;\r\n                &amp;amp;lt;/div&amp;amp;gt;\r\n            &amp;amp;lt;/div&amp;amp;gt;\r\n        &amp;amp;lt;/div&amp;amp;gt;\r\n    &amp;amp;lt;/div&amp;amp;gt;\r\n    &amp;amp;lt;div class=&amp;amp;quot;col-md-9&amp;amp;quot;&amp;amp;gt;\r\n        &amp;amp;lt;div class=&amp;amp;quot;panel&amp;amp;quot;&amp;amp;gt;\r\n            &amp;amp;lt;div class=&amp;amp;quot;panel-body&amp;amp;quot;&amp;amp;gt;\r\n                &amp;amp;lt;?php if(isset($content)): ?&amp;amp;gt;\r\n                    &amp;amp;lt;h3&amp;amp;gt;&amp;amp;lt;?= htmlspecialchars_decode(html_entity_decode($content-&amp;amp;gt;name)); ?&amp;amp;gt;&amp;amp;lt;/h3&amp;amp;gt;\r\n                    &amp;amp;lt;h4&amp;amp;gt;&amp;amp;lt;?= $content-&amp;amp;gt;email; ?&amp;amp;gt;&amp;amp;lt;/h4&amp;amp;gt;\r\n                    &amp;amp;lt;p&amp;amp;gt;&amp;amp;lt;?= htmlspecialchars_decode(html_entity_decode(nl2br($content-&amp;amp;gt;message))); ?&amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;\r\n                &amp;amp;lt;?php else: ?&amp;amp;gt;\r\n                    &amp;amp;lt;h2&amp;amp;gt;Vous n&amp;#039;avez s&amp;eacute;lectionn&amp;eacute; aucun message :(&amp;amp;lt;/h2&amp;amp;gt;\r\n                &amp;amp;lt;?php endif; ?&amp;amp;gt;\r\n            &amp;amp;lt;/div&amp;amp;gt;\r\n        &amp;amp;lt;/div&amp;amp;gt;\r\n\r\n    &amp;amp;lt;/div&amp;amp;gt;', '0'),
('24', 'Cardoen', 'f.cardoen@me.com', 'that works also with &amp;amp;amp;auml; and &amp;amp;amp;quot; and so on.\r\nget_html_translation_table(HTML_ENTITIES) =&amp;amp;gt; offers more characters than HTML_SPECIALCHARS\r\n\r\nfunction htmlspecialchars_decode_PHP4($uSTR)\r\n{\r\nreturn strtr($uSTR, array_flip(get_html_translation_table(HTML_ENTITIES, ENT_QUOTES)));\r\n}', '0');

-- ------------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(255) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `file`, `gallery_id`, `comment`) VALUES
('1', '1.jpg', '1', ''),
('2', '2.jpg', '1', ''),
('3', '3.jpg', '1', ''),
('4', '4.jpg', '1', ''),
('5', '5.jpg', '1', ''),
('6', '6.jpg', '1', ''),
('7', '7.jpg', '1', ''),
('8', '8.jpg', '1', ''),
('9', '9.jpg', '1', ''),
('10', '10.jpg', '1', ''),
('11', '11.jpg', '1', ''),
('12', '12.jpg', '1', ''),
('13', '13.jpg', '1', ''),
('14', '14.jpg', '1', ''),
('15', '15.jpg', '1', ''),
('16', '16.jpg', '1', ''),
('17', '17.JPG', '1', ''),
('18', '18.JPG', '1', ''),
('19', '19.JPG', '1', ''),
('20', '20.jpg', '1', ''),
('21', '21.jpg', '1', ''),
('22', '22.png', '1', ''),
('23', '23.JPG', '1', ''),
('24', '24.png', '1', ''),
('25', '25.jpg', '1', ''),
('26', '26.jpg', '1', ''),
('27', '27.jpg', '1', ''),
('28', '28.JPG', '1', ''),
('29', '29.JPG', '1', ''),
('30', '30.jpg', '1', ''),
('31', '31.jpg', '1', ''),
('32', '32.jpg', '1', ''),
('33', '33.JPG', '1', ''),
('34', '34.jpg', '1', ''),
('35', '35.jpg', '1', ''),
('36', '36.JPG', '1', ''),
('37', '37.jpg', '1', ''),
('38', '38.jpg', '1', ''),
('39', '39.jpg', '1', ''),
('40', '40.jpg', '1', ''),
('41', '41.JPG', '1', ''),
('42', '42.JPG', '1', ''),
('43', '43.JPG', '1', ''),
('44', '44.JPG', '1', ''),
('45', '45.jpg', '1', ''),
('46', '46.jpeg', '1', ''),
('47', '47.jpg', '1', ''),
('48', '48.jpg', '1', ''),
('49', '49.JPG', '1', ''),
('50', '50.jpg', '1', ''),
('51', '51.JPG', '1', ''),
('52', '52.jpg', '1', ''),
('53', '53.jpg', '1', ''),
('54', '54.JPG', '1', ''),
('55', '55.JPG', '1', ''),
('56', '56.jpg', '1', ''),
('57', '57.jpg', '1', ''),
('58', '58.jpg', '1', ''),
('59', '59.jpg', '1', ''),
('60', '60.jpg', '1', ''),
('61', '61.jpg', '1', ''),
('62', '62.jpg', '1', ''),
('63', '63.jpg', '1', ''),
('64', '64.jpg', '1', ''),
('65', '65.jpg', '1', ''),
('66', '66.jpg', '1', ''),
('67', '67.JPG', '1', ''),
('68', '68.jpg', '1', ''),
('69', '69.JPG', '1', ''),
('70', '70.jpg', '1', ''),
('71', '71.JPG', '1', ''),
('72', '72.jpg', '1', ''),
('73', '73.jpg', '1', ''),
('74', '74.JPG', '1', ''),
('75', '75.jpg', '1', ''),
('76', '76.JPG', '1', ''),
('77', '77.jpg', '1', ''),
('78', '78.jpg', '1', ''),
('79', '79.jpg', '1', ''),
('80', '80.jpg', '1', ''),
('81', '81.jpg', '1', ''),
('82', '82.JPG', '1', ''),
('83', '83.JPG', '1', ''),
('84', '84.JPG', '1', ''),
('85', '85.jpg', '1', ''),
('86', '86.jpg', '1', ''),
('87', '87.jpg', '1', ''),
('88', '88.JPG', '1', ''),
('89', '89.jpg', '1', ''),
('90', '90.jpg', '1', ''),
('91', '91.jpg', '1', ''),
('92', '92.jpg', '1', ''),
('93', '93.jpg', '1', ''),
('94', '94.jpg', '1', ''),
('95', '95.jpg', '1', ''),
('96', '96.jpg', '1', ''),
('97', '97.jpg', '1', ''),
('98', '98.jpg', '1', ''),
('99', '99.jpg', '1', ''),
('100', '100.jpg', '1', ''),
('101', '101.jpg', '1', ''),
('102', '102.jpg', '1', ''),
('103', '103.jpg', '1', ''),
('104', '104.jpg', '1', ''),
('105', '105.jpg', '1', ''),
('106', '106.jpg', '1', ''),
('107', '107.jpg', '1', ''),
('108', '108.jpg', '1', ''),
('109', '109.jpg', '1', ''),
('110', '110.jpg', '1', ''),
('111', '111.jpg', '1', ''),
('112', '112.jpg', '1', ''),
('113', '113.jpg', '1', ''),
('114', '114.jpg', '1', ''),
('115', '115.jpg', '1', ''),
('116', '116.JPG', '1', ''),
('117', '117.JPG', '1', ''),
('118', '118.jpg', '1', ''),
('119', '119.jpg', '1', ''),
('120', '120.jpeg', '1', ''),
('121', '121.jpg', '1', ''),
('122', '122.jpg', '1', ''),
('123', '123.jpg', '1', ''),
('124', '124.jpg', '1', ''),
('125', '125.jpg', '1', ''),
('126', '126.jpg', '1', ''),
('127', '127.jpg', '1', ''),
('128', '128.jpg', '1', ''),
('129', '129.jpg', '1', ''),
('130', '130.jpg', '1', ''),
('131', '131.jpg', '1', ''),
('132', '132.JPG', '1', ''),
('133', '133.jpg', '1', ''),
('134', '134.jpg', '1', ''),
('135', '135.JPG', '1', ''),
('136', '136.JPG', '1', ''),
('137', '137.jpg', '1', ''),
('138', '138.jpg', '1', ''),
('139', '139.jpg', '1', ''),
('140', '140.JPG', '1', ''),
('141', '141.JPG', '1', ''),
('142', '142.JPG', '1', ''),
('143', '143.JPG', '1', ''),
('144', '144.JPG', '1', ''),
('145', '145.JPG', '1', ''),
('146', '146.JPG', '1', ''),
('147', '147.JPG', '1', ''),
('148', '148.JPG', '1', ''),
('149', '149.jpg', '1', ''),
('150', '150.jpg', '1', ''),
('151', '151.jpg', '1', ''),
('152', '152.jpg', '1', ''),
('153', '153.jpg', '1', ''),
('154', '154.jpg', '1', ''),
('155', '155.jpg', '1', ''),
('156', '156.jpg', '1', ''),
('157', '157.jpg', '1', ''),
('158', '158.jpg', '1', ''),
('159', '159.jpg', '1', ''),
('160', '160.jpg', '1', ''),
('161', '161.jpg', '1', ''),
('162', '162.jpg', '1', ''),
('163', '163.jpg', '1', ''),
('164', '164.JPG', '1', ''),
('165', '165.JPG', '1', ''),
('166', '166.jpg', '1', ''),
('167', '167.JPG', '1', ''),
('168', '168.JPG', '1', ''),
('169', '169.JPG', '1', ''),
('170', '170.JPG', '1', ''),
('171', '171.JPG', '1', ''),
('172', '172.JPG', '1', ''),
('173', '173.JPG', '1', ''),
('174', '174.jpg', '1', ''),
('175', '175.jpg', '1', ''),
('176', '176.JPG', '1', ''),
('177', '177.jpg', '1', ''),
('178', '178.jpg', '1', ''),
('179', '179.jpg', '1', ''),
('180', '180.jpg', '1', ''),
('181', '181.jpg', '1', ''),
('182', '182.jpg', '1', ''),
('183', '183.jpg', '1', ''),
('184', '184.jpg', '1', ''),
('185', '185.jpg', '1', ''),
('186', '186.JPG', '1', ''),
('187', '187.jpg', '1', ''),
('188', '188.jpg', '1', ''),
('189', '189.jpg', '1', ''),
('190', '190.JPG', '1', ''),
('191', '191.JPG', '1', ''),
('192', '192.jpeg', '1', ''),
('193', '193.jpeg', '1', ''),
('194', '194.jpg', '1', ''),
('195', '195.jpg', '1', ''),
('196', '196.jpg', '1', ''),
('197', '1.jpg', '3', ''),
('198', '2.jpg', '3', ''),
('199', '3.jpg', '3', ''),
('200', '4.jpg', '3', ''),
('201', '5.jpg', '3', ''),
('202', '1.jpg', '4', ''),
('203', '2.jpg', '4', ''),
('204', '3.jpg', '4', ''),
('205', '4.jpg', '4', ''),
('206', '5.jpg', '4', ''),
('207', '6.jpg', '4', ''),
('208', '7.jpg', '4', ''),
('209', '8.jpg', '4', ''),
('210', '9.jpg', '4', ''),
('211', '10.jpg', '4', ''),
('212', '11.jpg', '4', ''),
('213', '12.jpg', '4', ''),
('214', '13.jpg', '4', ''),
('215', '14.jpg', '4', ''),
('216', '15.jpg', '4', ''),
('217', '16.jpg', '4', ''),
('218', '17.jpg', '4', ''),
('219', '18.jpg', '4', ''),
('220', '19.jpg', '4', ''),
('221', '20.jpg', '4', ''),
('222', '21.jpg', '4', ''),
('223', '22.jpg', '4', ''),
('224', '23.jpg', '4', ''),
('225', '24.jpg', '4', ''),
('226', '25.jpg', '4', ''),
('227', '26.jpg', '4', ''),
('228', '27.jpg', '4', ''),
('229', '28.jpg', '4', ''),
('230', '29.jpg', '4', ''),
('231', '30.jpg', '4', ''),
('232', '31.jpg', '4', ''),
('233', '32.jpg', '4', ''),
('234', '33.jpg', '4', ''),
('235', '34.jpg', '4', ''),
('236', '35.jpg', '4', ''),
('237', '36.jpg', '4', ''),
('238', '37.jpg', '4', ''),
('239', '38.png', '4', ''),
('240', '39.jpg', '4', ''),
('241', '40.jpg', '4', ''),
('242', '41.jpg', '4', ''),
('243', '42.jpg', '4', ''),
('244', '43.jpg', '4', ''),
('245', '44.jpg', '4', ''),
('246', '45.jpg', '4', ''),
('247', '46.jpg', '4', ''),
('248', '47.jpg', '4', ''),
('249', '48.jpg', '4', ''),
('250', '49.jpg', '4', ''),
('251', '50.jpg', '4', ''),
('252', '51.jpg', '4', ''),
('253', '52.jpg', '4', ''),
('254', '53.jpg', '4', ''),
('255', '54.jpg', '4', ''),
('256', '55.jpg', '4', ''),
('257', '56.jpg', '4', ''),
('258', '57.jpg', '4', ''),
('259', '58.jpg', '4', ''),
('260', '59.jpg', '4', ''),
('261', '60.jpg', '4', ''),
('262', '61.jpg', '4', ''),
('263', '62.jpg', '4', ''),
('264', '63.jpg', '4', ''),
('265', '64.jpg', '4', ''),
('266', '65.png', '4', ''),
('267', '66.jpg', '4', ''),
('268', '67.jpg', '4', ''),
('269', '68.jpg', '4', ''),
('270', '69.jpg', '4', ''),
('271', '70.jpg', '4', ''),
('272', '71.jpg', '4', ''),
('273', '72.jpg', '4', ''),
('274', '73.jpg', '4', ''),
('275', '74.jpg', '4', ''),
('276', '1.JPG', '5', ''),
('277', '2.JPG', '5', ''),
('278', '3.JPG', '5', '');

-- ------------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`) VALUES
('1', 'smtp_host', 'mail.shost.ca'),
('2', 'smtp_user', 'florent@floca.be'),
('3', 'smtp_pwd', 'fca-1995'),
('4', 'mail_name', 'pied de page'),
('5', 'mail_signature', 'Bonne journée'),
('6', 'smtp_port', '587'),
('7', 'footer_text', 'Les Cercles organisent de nombreuses activités très diversifiées de formations, de découvertes ... ouvertes à tous dans les régions francophone et germanophone du pays. Nous rassemblons près de 10.000 membres et éditons à leur intention un périodique trimestriel \"L''ÉRABLE\" qui annonce entre autres toutes les activités. En collaboration avec l''Entente nationale pour la Protection de la Nature, la société intervient régulièrement en faveur de la défense de la nature et de l''environnement.'),
('8', 'footer_title', 'Cercles des Naturalistes de Belgique CNB');

-- ------------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `nom`, `email`, `role`) VALUES
('1', 'florent', 'd6f679c9ef630397d858ba2328616158991fd96f', 'Florent Cardoen', 'f.cardoen@me.com', 'administrateur'),
('6', 'admin', '840ae1f2808cc9f503d23db60b909dc62225c0b1', 'Admin Test', 'admin@test.com', 'Administrateur'),
('7', 'abdon', '7d875d3cb74e8ad58d1539ab2ab7819bde980ea3', 'Cardoen Alain', 'acardoen@gmail.com', 'Correcteur');

-- ------------------------------------------------------------

--
-- Table structure for table `visites`
--

CREATE TABLE `visites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` date NOT NULL,
  `guide` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visites`
--

INSERT INTO `visites` (`id`, `title`, `text`, `date`, `guide`, `file`) VALUES
('6', 'Torgny : patrimoine et nature en RN  ', 'Comme chaque année, la Trientale retrouve la Gaume sous la conduite de Francine qui nous a concocté un <br />\nprogramme particulièrement riche et varié. Nature e t patrimoine seront bien au rendez-vous.  <br />\n  <br />\nD''abord, une touche historique : au bas de Torgny,  la Chiers tient lieu de frontière entre la France et la <br />\nBelgique ; la gare était d''ailleurs commune à Velos nes et Torgny. Le site est particulièrement intéressant <br />\npour les observations ornithologiques, tant à l''oei l nu qu''avec jumelles ou longue vue. Bondrée, milan s noir <br />\net royal, grive litorne, fauvette à tête noire, pic  épeichette, une famille de rougequeues noirs, berg eronnette <br />\ndes ruisseaux, hirondelle de rivage, chardonneret,  accenteur mouchet, pouillot fitis, linotte mélodieuse, <br />\ntroglodyte curieusement perché tout en haut d''un po teau électrique, et le chant furtif du rossignol.   <br />\n <br />\nAprès un exercice d''identification du géranium des  Pyrénées avec la flore bleue, on gagne le site de la <br />\nchapelle Notre-Dame des Affligés pour la visite de  l''ancienne carrière devenue la RN Raymond Mayné. C'' est <br />\nla saison d''explosion florale en pelouse calcaire ;  et nous ne serons pas déçus. Il y a de quoi s''émer veiller : <br />\norchis militaire, orchis homme-pendu, orchis pyrami dal, succise des pré, sainfoin, mélampyre des champ s, <br />\nancolie, aspérule odorante, sanicle d''Europe, plata nthère des montagnes, céphalanthère à grandes fleur s, <br />\nlistère à feuilles ovales, néottie, petite pyrole,  petite pimprenelle, et  j''en passe. Des oiseaux enc ore : pie-<br />\ngrièche écorcheur, pipit des arbres, bruant jaune.   <br />\n <br />\nUn clin d''oeil à la jolie fleur du plantain moyen e t aux feuilles de colchique et c''est l''heure du piq ue-nique.  <br />\n <br />\nAprès-midi, nous gagnons Charency, haut lieu de la  guerre 14-18 avec son cimetière allemand. Nous <br />\nvisitons maintenant la RN de la côte d''Urbul. Autre  pelouse calcaire en pente raide dominant la vallée  de la <br />\nChiers et gérée manuellement.   <br />\nUn massif de fusain ponctué de viornes manciennes,  le bord du chemin bien garni de résédas jaunes et l''on <br />\nse replonge dans l''explosion florale typique de la  pelouse calcaire. Aux observations du matin s''ajout ent <br />\nl''orchis pourpre, l''ophrys bourdon, l''oprhys abeill e, le lin purgatif, le serpolet, la vesce cultivée, l''arabette <br />\nhérissée, la renoncule bulbeuse, l’anémone pulsatil le, le polygala du calcaire, l''arabette hérissée… Nous <br />\nsommes admiratifs devant la quantité des différente s espèces.  <br />\n  <br />\nDe l''entomologie aussi : une volée de petits hannet ons (Phyllopertha horticola),  le demi-diable (Centrotus <br />\ncornutus ), une cigale sortie de son exuvie, un frelon, des  papillons : hespérie de la mauve, moiré franconien,  <br />\nphalènes divers ; la chenille du petit paon de nuit  et du bombyx du chêne.  <br />\n  <br />\nNous finissons la journée par la visite du Buré d''O rval : ancien complexe métallurgique du 12<br />\ne siècle avec,  <br />\nen contrebas du château, les vestiges de la halle à  charbon de bois et à minerai et le haut-fourneau à fonte. <br />\nFrancine nous explique comment fonctionnait le syst ème : gueuses martelées en lingots et transport vers la <br />\nplatinerie. Elle nous signale un arbuste de parc cu rieux, un staphylier (Staphylea pinnata) et une belle station <br />\nd''ail des ours ponctuée de parisettes. Le site cess a son activité à la fin du 17<br />\ne siècle mais, pour assurer <br />\nl''approvisionnement en canons de son armée, Louis X IV ordonna la construction du haut-fourneau du Dorlon <br />\noù nous allons jeter un dernier coup d''oeil. Pour r epérer encore au bord du chemin l''asperge, l''orme d e <br />\nmontagne et un coléoptère nécrophore ( Nicrophorus investigator).  <br />\n <br />\n17 heures : il est temps de retrouver la place du v illage, son ancien lavoir et la terrasse accueillante bien <br />\napprovisionnée dans la spécialité locale que vous s avez. Et qu''il nous reste à déguster pour clore la <br />\njournée : bilan des observations, derniers commenta ires et le merci à notre guide Francine qui nous a offert <br />\ncette journée remarquable.      <br />\nGabriel Ney', '2015-05-31', 'Francine Van den Abbeele    ', '2015-05-31_torgny---patrimoine-et-nature-en-rn--.pdf'),
('7', 'Salmchâteau : de la Ronce à Chifontaine  ', 'Groupe imposant et météo qui nous  gratifie de conditions estivales, voilà la garantie du plein succès de <br />\nl''activité que nous a préparée notre guide dans la  région berceau de la Trientale.   <br />\n  <br />\nAu départ de la centrale électrique de Cierreux ave c son ancien fronton Esmalux, Michel nous explique  les <br />\ncaractéristiques techniques de cette centrale qui f onctionne par retenue d''eau. Puis nous gagnons le p lateau <br />\nqui domine un panorama sur la vallée du Glain et l'' ancien château à Salmchâteau. Le guide nous signale   <br />\nque cette forteresse fut érigée par les comtes de S alm au 14<br />\ne siècle comme place forte plus sécurisée que <br />\nleur demeure du moyen âge à Vielsalm. La légende di t même qu''un tunnel reliait les deux sites.  <br />\n <br />\nMichel nous détaille ensuite la géologie du paysage  qui s''offre à nous : nous sommes sur le massif de <br />\nStavelot, les plus anciennes roches de Belgique du  Cambrien (500 M d''années) où salmien et gedinnien s e <br />\ntutoient. Le relief est encaissé. La région est ric he en variétés minérales : coticule connu dans le m onde <br />\nentier, phyllade, schiste métamorphisé exploité com me ardoises, arkose pour la construction et toutes une <br />\nsérie de minéraux exceptionnels qui engendrèrent un e véritable ruée des spécialistes puis des… <br />\ncollectionneurs.   <br />\nNous arrivons à l''arrière de Provedoux avant de des cendre vers le gué de la Ronce dont les eaux acides  <br />\nsont issues de la fagne de Bihain. Le site est part iculièrement pittoresque sous la lumière généreuse  du <br />\nsoleil estival.      <br />\nUn chemin forestier nous amène aux confins du villa ge de Courtil à la réserve naturelle de Chifontaine. Il est <br />\ndéjà l''heure du pique-nique, scandée par les deux n otes presque obsédantes du coucou ; au bord du chem in <br />\nbaigné de soleil, ce qui incite certains à la siest e.  <br />\n <br />\nMichel nous emmène ensuite en file indienne pour la  découverte des plantes caractéristiques de ce milieu <br />\nde haute fagne : canneberge, airelle, bruyère quate rnée, linaigrettes vaginée et à feuilles étroites, narthécie, <br />\norchis tacheté… Des chamignons, téphrocybe et mitru le des marais ; l''impressionnante araignée dolomède.  <br />\n <br />\nLe chemin de retour nous offre encore un autre pano rama sur la vallée du Glain ; on traverse le hameau de <br />\nHonvelez et, en sous-bois, un chemin dégringole ver s le ruisseau de la Ronce qui nous ramène au parkin g.  <br />\n  <br />\nBords de chemin secs, anciennes prairies de fauche,  sentiers plus humides en sous-bois nous ont gratifiés <br />\nd''une belle palette colorée : véronique officinale,  renouée bistorte, potentille tormentille, géranium  des bois, <br />\nrenoncule à feuilles de platane,  renouée bistorte,  muguet encore en fleurs, pédiculaire des bois, lis tère à <br />\nfeuilles ovales, fenouil des Alpes, lysimaque des b ois, polygala à feuilles de serpolet, populage, raiponce <br />\nnoire ; des  carex : nigra, demissa, palescens, echinata, ovalis, rostra ta…  <br />\n <br />\nDes oiseaux : milan royal,  buse, héron, hirondelle, martinet, fauvette grisett e, tarin des aulnes, moineau <br />\nfriquet, grive litorne, pouillots fitis et siffleur , pipit des arbres, roitelet huppé, becs croisés de s sapins, <br />\nrousserolle verderolle…   <br />\n  <br />\nEt encore, le gazé  (joli papillon), la veuve, autr e petit lépidoptère (Atolmis rubricollis) en grande quantité, le <br />\nbombyx de la ronce  (Macrothylacia rubi) vraiment peu impressionné, le clytre du saule ( Clytra laeviuscula) à <br />\nproximité d’une fourmilière monumentale ; la grenou ille rousse et un minuscule crapaud commun.  <br />\n  <br />\nJournée bien remplie donc, qui se termine dans la b onne humeur habituelle. Merci à notre guide Michel  pour <br />\nses explications, pour la préparation de cet itinér aire varié, pour la gestion du groupe avec le tact  qu''on lui <br />\nconnaît. Et merci à tous ceux qui ont mis leurs com pétences au service des participants.      <br />\n  <br />\n  <br />\nGabriel Ney', '2015-06-13', 'Michel Frisschen    ', '2015-06-13_salmchateau---de-la-ronce-a-chifontaine--.pdf'),
('8', 'Furfooz : Nature et histoire au parc naturel  ', 'Au programme, la visite du parc naturel de Furfooz, propriété de la ville de Dinant mais géré par Ardenne et <br />\nGaume. Ce sera la journée la plus chaude de la péri ode caniculaire, a dit la météo. De fait, mais le couvert <br />\nvégétal, la fraîcheur des trous dans les rochers où  l''on apprécie les commentaires prolongés, le parco urs <br />\nquelque peu adapté, l''arrêt pique-nique à la buvett e en bord de Lesse… voilà bien de quoi narguer la <br />\ncanicule et profiter pleinement des ressources du s ite.  <br />\n  <br />\nOn sait les compétences de nos deux guides dans les  divers domaines des sciences de la nature, la minutie <br />\navec laquelle ils préparent leur sujet et rassemble nt documentation et schémas expressifs ; ce sera do nc <br />\nune thématique variée, enrichie de commentaires et  de détails spécifiques.    <br />\n <br />\nIl y eut les observations « nature ». Epiaire des A lpes, aconit tue-loup, bois-joli, silène enflé, genêt des <br />\nteinturiers, bugrane rampante, campanule à feuilles  de pêcher, molène lychnide, érythrée petite centaurée, <br />\ncétérach, astragale à feuille de réglisse, campanul e gantelée, lunaire vivace, dentaire à bulbilles… Les <br />\npapillons demi-deuil, petit sylvain et un accouplem ent de tristans, l’araignée trogloxène Meta menardi et <br />\nCtenopius sulphureus,  coléoptère jaune sur ombellifère. Un spectaculaire  polypore géant tout frais éclos <br />\n( Meripilus giganteus )…  Et pour les spécialistes les lichens  Dermatocarpon miniatum et Peltigera <br />\nhorizontalis.    <br />\n  <br />\nIl y eut la géologie et les phénomènes karstiques :  nos guides nous ont emmenés dans le dédale des <br />\ndifférentes formations géologiques qui se rencontre nt dans la région : formations de Waulsort, de Bayard, de <br />\nLeffe, de Landelies, de la Molignée... Trou qui fum e qui communique avec le Trou du chantoir des Nuton s et <br />\nqui a révélé tout un systèmes de salles ; trou du f rontal, trou de la mâchoire où furent repérées des  traces du <br />\nmagdalénien (-12000). On devine les mystères de la  Lesse souterraine. Nos guides nous expliquent encor e <br />\nles 4 stades des monticules waulsortiens qui furent  déterminés par l''analyse des sédiments, avant de n ous <br />\nfaire toucher au cm près la zone de contact entre l a formation d''Hastière et la formation de Pont d''Arcole.  <br />\n <br />\nIl y eut l''histoire du site et son passé plus ou mo ins lointain. Des thermes romains reconstitués avec  <br />\nchauffage par hypocauste ; des vestiges de murs d''e nceinte et de murs de barrage, preuves d''une <br />\noccupation à différentes périodes de notre histoire  (de - 850 jusqu''au moyen âge). Des fouilles ont pe rmis d''y <br />\nretrouver de la céramique sigillée, des pointes d''a rmement, différents objets en os et en bronze.    <br />\n   <br />\nIl y eut les paysages émaillés de points de vue spe ctaculaires sur la vallée de la Lesse, la rivière tortueuse <br />\nceinturée de pans rocheux, le tilleul de Furfooz dé jà mentionné sur la carte Ferraris, les champs de c éréales <br />\nbrûlés par le soleil.    <br />\nNos guides nous ont épargné la montée finale vers l ''aiguille et le trou de Chaleux : les explications de ce <br />\nsite, au parking à l''ombre du feuillage protecteur,  suffirent à notre bonheur.  <br />\n <br />\nEt l''on peut dire que cette fois, le rafraîchisseme nt et un bon moment de récupération au hameau voisi n <br />\ns''imposaient. Merci à nos deux guides qui ont adapt é le programme du jour aux circonstances, sans <br />\ntoutefois ménager leurs explications.       <br />\nGabriel Ney', '2015-07-04', 'Eric et Gene Lebrun-Moréas   ', '2015-07-04_furfooz---nature-et-histoire-au-parc-naturel--.pdf'),
('9', 'Hotton : Découvertes en Calestienne  ', 'La météo pessimiste est battue  en brèche : nous allons passer une magnifique journée de mai, entre Ard enne et <br />\nFamenne, en Calestienne, toujours riche de découver tes pour les naturalistes.  <br />\n  <br />\nLe  guide  nous  accueille  devant  le  SI  de  Hotton,  nou s  présente  la  localité,  son  histoire,  ses  curiosités  les  plus <br />\nremarquables  et  nous  décrit  le  parcours  qui  nous  at tend :  une  petite  dizaine  de  km  qui  nous  permettron t <br />\nd''apprécier la vallée de l''Ourthe à partir des haut eurs des deux versants.  <br />\n <br />\nNous  sommes  au  bord  de  l''Ourthe,  Jean-Claude  ne  pou vait  donc  manquer  de  nous  parler  de  la faune aquatique <br />\nsauvage et ses caractéristiques : ombre, barbeau, h otu, ablette… sans oublier la truite fario.   <br />\n  <br />\nSuivez-nous  au  fil  de  l''itinéraire.  Première  étape  :  le  moulin  Faber.  Jolie  bâtisse  témoignage  d''une  é poque <br />\nrévolue, aujourd''hui musée. La passerelle sur le bi ef donne accès à l''île d''Oneux.   <br />\n  <br />\nLe  sentier  nous  amène  au  pied  des  rochers  de  Reniss art  dont  le  club  d''alpinisme  doit  assurer  l''entretien  en <br />\ndébroussaillant  le  site.  Pans  de  rochers  majestueux   qui  trahissent  la  géologie  tourmentée  de  la  région.  Il  faut <br />\nmaintenant  gagner  le  sommet  de  la  colline  par  un  se ntier  escarpé.  Vue  sublime  sur  la  vallée  avant  de  plonger <br />\ndans  le  passé  de  Ti  Château :  ancien  camp  romain  do nt  on  peut  encore  deviner  les  levées  de  terre  érigées  en <br />\nfossé. Nous sommes sur un promontoire en triangle d ont un seul accès devait être barré. Le guide précise que le <br />\nsite  aurait  servi  de  refuge  déjà  au  néolithique.  Il   situe  encore  les  anciennes  voies  romaines  de  la  ré gion :  la  voie <br />\nTongres-Arlon et la voie de la Famenne ?    <br />\nLa région est riche en phénomènes karstiques. Le ch emin forestier nous amène à la grotte de la Porte Aïve. Cette <br />\ngrotte fut utilisée dès le néolithique ; on y mit à  jour une sépulture collective et, plus près de nou s, les Allemands y <br />\ninstallèrent un poste de commandement lors de l''off ensive 44. Et comme c''est l''heure du pique-nique…  <br />\n <br />\nPetit retour sur nos pas pour descendre  par  la  Voie  des morts, un sentier moins escarpé qui mène à l''I sbelle. Le <br />\nguide  nous  explique  que  ce  ruisseau,  affluent  de  l'' Ourthe,  présente  les  3    types  de  résurgences :  perm anente, <br />\nsaisonnière et fossile. Trou béant dans la roche fr acturée ;  le lit  est à sec  en cette saison, ce qui rend  le joli petit <br />\npont superflu ; mais quelques dizaines de m plus lo in, la résurgence permanente est bien alimentée.  <br />\n <br />\nIl  faut  gagner  la  rive  gauche  de  l''Ourthe  dont  on  a pprécie  le  cours  paisible  et…  l''absence  du  cincle  p longeur <br />\npourtant  hôte  du  lieu.  Un  regard  pour  un  séquoia  gé ant  et  on  grimpe  sur  l''autre  versant.  On  s''arrête  d''abord  en <br />\nbordure  de  l''ancienne  carrière,  les  jumelles  balaie nt  les  parois  verticales  à  la  recherche  du  grand  du c  mais  ce <br />\nn''est pas son heure.   <br />\nSolide  grimpette  jusqu''au  site  des  grottes  des  1001   Nuits  où  le  panneau  explicatif  et  les  commentaires  du  guide <br />\nsuffiront  à  notre  bonheur.  Dernière  montée  du  jour  vers  la  réserve  domaniale  de  la  Carrière  de  l''Alouette,  site <br />\nremis en lumière par le projet LIFE Hélianthème à l ’initiative de la commune de Hotton.  <br />\n  <br />\nLe  cimetière  anglais  des  victimes  de  la  dernière  gu erre,  la  plongée  vers  Hotton  avec  vue  sur  la  Famenn e  et  le <br />\nCondroz au loin, le sous-bois et son arboretum ; et  on retrouve l''Ourthe et l''île d''Oneux. <br />\n  <br />\nLe  parcours  nous  a  offert  une  belle  palette  d''obser vations :  richesse  des  bouts  de  pelouses  calcaires  sur  les <br />\nsommets  rocheux,  sous-bois  aux  espèces  variées,  fos sés  humides  et  bords  de  chemins  plus  secs.  Sceaux  d e <br />\nSalomon  odorant  et  multiflore,  silène  penché,  dompt e-venin,  ellébore  fétide,  orchis  mâle,  lamiers  blanc  et  jaune, <br />\ncompagnon  rouge,  parisette  à  quatre  feuilles,  renon cule  à  tête  d''or,  violette  de  Rivin,  listère  à  feuille  ovale, <br />\neuphorbe petit-cyprès, ancolie,  bugle rampante,  pot entille faux-fraisier, primevères élevée  et  officinale,  véronique <br />\npetit-chêne,  colchique,  ail  des  ours …  Un  tapis  mul ticolore  ponctué  par  le  genet  déjà  fleurissant.  En lisière, <br />\nquelques  beaux  spécimens  d''ormes  champêtres. Tout c ela  sous  un  ciel  bleu  valorisé  par  quelques  cumulus bien <br />\npaisibles !     <br />\nLe sous-bois doit receler quelques morilles, mais ç a, c''est une autre histoire. Nous nous contenterons  d''une belle <br />\ntouffe  de  mousserons.  Un  mignon  longicorne :  P ogonocherus  hispidulus. Des  oiseaux :  verdier,  roitelet  huppé, <br />\nmilan  royal,  grive  draine,  bouvreuil,  fauvettes  à  t ête  noire  et  grisette,  grimpereau  des  jardins,  poui llot  fitis, <br />\nbernache du canada…    <br />\nEt tout ce que j''oublie : le guide du jour ne m''en  tiendra pas rigueur ! Merci à lui de nous avoir rév élé les richesses <br />\nde son terroir avec enthousiasme et compétence dans  les diverses sciences de la nature.  <br />\n  <br />\nGabriel Ney', '2015-05-09', 'Jean-Claude Joris     ', '2015-05-09_hotton---decouvertes-en-calestienne--.pdf'),
('10', 'Palogne et Sy : Géologie   ', 'Ciel parfaitement bleu (il le restera toute la journée) quand le guide nous accueille au domaine de <br />\nPalogne pour une thématique géologique en vallée de  l’Ourthe. Après un rappel des caractéristiques <br />\ngéologiques de la W allonie, avec force cartes et sc hémas plus expressifs les uns que les autres, nous <br />\nnous situons dans le temps et dans l’espace : une b oucle de l’Ourthe en contrebas du château de <br />\nLogne sur Dévonien moyen.     <br />\nHenri nous emmène dans les âges du Dévonien, nous d étaille les effets du plissement hercynien, <br />\nnous explique l’importance de la faille eifelienne  avec une série de failles transversales. Le Couvini en <br />\net le Givetien constituent le soubassement de la Ca lestienne. Et les points d’observation ne manquent <br />\npas : on admire les bancs de roche mais on est moin s fier quand il s’agit de définir faille inverse ou <br />\nfaille normale, ligne de schistosité, modification  de faciès, rupture de sédimentation, pendage, <br />\nchevauchement sur plis faillés… Sachant qu’il ne fa ut pas se laisser piéger par l’érosion qui a donné <br />\nle relief actuel.   <br />\nOn tutoie les vestiges du château de Logne et la va llée de la Lembrée, on s’apitoie sur la chouette <br />\neffraie en cage de fauconnerie et on retrouve le pa rking pour le pique-nique au bord de l’Ourthe où les <br />\nplus attentifs repèrent le martin-pêcheur.     <br />\nAprès-midi, nous gagnons Sy pour d’autres curiosité s géologiques. Nous sommes dans la plaine <br />\nalluviale sur schiste. Henri nous emmène dans la fo rmation de Fromelenne, de l’assise du Givetien au <br />\nFrasnien et au Famennien. La rive droite de l’Ourth e que nous remontons nous amène au pied du site <br />\nspectaculaire des rochers de Sy dont le  guide nous  détaille les curiosités : bancs inversés, faille <br />\ntransverse au plissement, diaclase…, cercles en cre ux et bosses trahissant la présence d’organismes <br />\nfossilisés. Les passionnés prospectent et signale d es échantillons d’animaux et de végétaux <br />\nfossilisés : spirifères, stromatopores, crinoïdes,  thamnopora.   <br />\n <br />\nSi la géologie a captivé les moins initiés comme le s plus érudits, la nature nous a offert une belle <br />\npalette d’observations en cette saison d’explosion  printanière. Les férus de botanique ont pu signaler : <br />\nail des ours, anémone fausse-renoncule, petite perv enche, renoncule tête d’or, gouet tacheté, violette <br />\ndes bois, corydale solide, parisette, raiponce, pot entille faux-fraisier, lierre terrestre, ellébore fétide, <br />\nlinaire cymbalaire, barbarée commune, moscatelline,  stellaire des bois, véronique à feuille de lierre, <br />\npolystic à aiguillons, soclopendre, seslérie bleue,  Carex digitata…   <br />\n <br />\nLes ornithologues ont repéré : verdier, pouillot si ffleur, bernache du Canada au nid, mésange nonette,  <br />\nchardonneret, bergeronnette des ruisseaux, épervier …   <br />\n <br />\nDes papillons encore : Robert-le-diable, citron, au rore de la cardamine.  <br />\n <br />\nEt pour finir, le clin d’œil paresseux du lézard de s murailles se chauffant en plein soleil, nullement  <br />\nimpressionné par les appareils photos.     <br />\nNous quittons Sy et le brouhaha des préparatifs de  la course de côte du lendemain pour retrouver le <br />\ndomaine de Palogne et sa terrasse où nous avons tôt  fait de mettre de l’ambiance par nos <br />\ncommentaires enthousiastes sur les découvertes de l a journée.  <br />\n <br />\nMerci à notre guide pour cette journée enrichissant e ; et à tous ceux qui ont partagé leur savoir au <br />\nprofit du groupe.     <br />\nGabriel Ney', '2015-04-18', 'Henri Wégria   ', '2015-04-18_palogne-et-sy---geologie---.pdf'),
('11', 'Projet Life et biodiversit&eacute; dans les fagnes de Stoumont    ', 'Nous sommes une vingtaine &agrave; l&#039;or&eacute;e de la for&ecirc;t pour  partir &agrave; la d&eacute;couverte des fagnes de Pansire, Banase et &lt;br /&gt;\nVecqu&eacute;e  au  programme  de  l&#039;itin&eacute;raire  du  jour.  Et  la   th&eacute;matique  promet  d&#039;&ecirc;tre  du  plus  haut  int&eacute;r&ecirc;t.  Non  &lt;br /&gt;\nseulement  par  la  richesse  du  milieu  fagnard  mais  au ssi  par  la  personnalit&eacute;  de  notre  guide,  responsable  du &lt;br /&gt;\nprojet  LIFE Ardenne  li&eacute;geois  et  particuli&egrave;rement  co mp&eacute;tent  dans  les  diverses  approches  des  composantes  &lt;br /&gt;\nde la nature.    &lt;br /&gt;\n9 km &agrave; travers bois, hors des sentiers battus et de s sentiers tout court ! Pas de tout repos, certes mais plein &lt;br /&gt;\nde  surprises.  Denis  nous  explique  que  le  projet  con siste  &agrave;  reconnecter  des  &icirc;lots,  plut&ocirc;t  que  de  reconstituer &lt;br /&gt;\nune  seule  &eacute;tendue  fagnarde ;  &agrave;  rouvrir  des  espaces  par  coupes  &agrave;  blanc  pour  le  retour  de  la  lande.  La &lt;br /&gt;\nn&eacute;cessit&eacute;  aussi  d&#039;une  gestion  suivie  pour  &eacute;viter  la   recolonisation  rapide  par  la  for&ecirc;t.  L&#039;objectif  &eacute;tant  de &lt;br /&gt;\npermettre  la circulation des plantes et des animau x propres &agrave; ce milieu. &lt;br /&gt;\n &lt;br /&gt;\nEt  les  observations  se  bousculent  au  fil  de  l&#039;itin&eacute; raire.  Le  guide  ne  m&eacute;nage  pas  ses  explications : &lt;br /&gt;\nidentification,  d&eacute;tails  caract&eacute;ristiques,  relation  avec  le  biotope.  Joncs  divers  (&eacute;pars,  bulbeux,  acut iflore, &lt;br /&gt;\nsquarreux),  Carex  echinata,  nigra,  demissa,  rostrata,  hirta,  Sp hagnum  palustre en  fructification,  scirpe &lt;br /&gt;\ncespiteux.  Les  classiques :  airelle,  canneberge,  my rtille  de  loup,  bruy&egrave;re  quatern&eacute;e,  linaigrettes  vagin&eacute;e  et &lt;br /&gt;\n&eacute;troite, narth&eacute;cie.   &lt;br /&gt;\nDenis  nous  explique  aussi  la  technique  de  l&#039;&eacute;tr&eacute;pag e,  la  capacit&eacute;  de  germination  des  graines  en  dorman ce &lt;br /&gt;\nsous  la  molinie,  les  effets  n&eacute;fastes  du  broyage.  Fr amboises  et  myrtilles  ponctuent  le  parcours,  de  quo i  se &lt;br /&gt;\nrappeler les dangers de l&#039;echinococcose &lt;br /&gt;\n   &lt;br /&gt;\nDes  fleurs  de  bords  de  chemin :  millepertuis  &eacute;l&eacute;gan t,  p&eacute;diculaire  des  bois,  gen&ecirc;t  d&#039;Angleterre,  lin  purgatif, &lt;br /&gt;\n&eacute;rythr&eacute;e  petite  centaur&eacute;e,  achill&eacute;e  sternutatoire,  mouron  rouge,  r&eacute;s&eacute;da  jaune  et  une  station  de  nard  r aide&hellip; &lt;br /&gt;\nDes  champignons :  bolet  &agrave;  pied  rouge,  caloc&egrave;re  visq ueuse,  amanite  &eacute;paisse,  russule  sp.  Des  papillons : &lt;br /&gt;\nbelle-dame, tabac d&#039;Espagne, paon du jour, sylvaine &hellip;  &lt;br /&gt;\n &lt;br /&gt;\nAu passage, l&#039;enclos o&ugrave; quelques highlands particul i&egrave;rement photog&eacute;niques nous d&eacute;visagent ; lymphatiqu es &lt;br /&gt;\naussi, comme engourdies par la chaleur de l&#039;apr&egrave;s-m idi.  &lt;br /&gt;\n &lt;br /&gt;\nUne mare, sorte de lithalse anthropique, nous r&eacute;ser ve les plus belles surprises du jour : une dizaine de pieds &lt;br /&gt;\nde lycopode inond&eacute; et quelques dros&eacute;ras &agrave; feuilles  rondes, &agrave; hampe florale g&eacute;n&eacute;reuse. Des odonates : a nax &lt;br /&gt;\nempereur, aeschne des joncs, agrion porte-coupe,  l este fianc&eacute;, leucorrhine douteuse.  &lt;br /&gt;\n &lt;br /&gt;\nLes ornithologues ne furent pas d&eacute;&ccedil;us : linotte m&eacute;l odieuse, bouvreuil pivoine, tarier p&acirc;tre, plusieurs faucons &lt;br /&gt;\nhobereaux  et  cr&eacute;cerelles,  une  &laquo; silhouette &raquo;  sugg&eacute;r ant  la  pie-gri&egrave;che  &eacute;corcheur  et  bien  av&eacute;r&eacute;e,  elle, la &lt;br /&gt;\ncigogne noire observ&eacute;e &agrave; loisir.     &lt;br /&gt;\nRemarquable journ&eacute;e dont  ce compte rendu n&#039;est qu&#039;u n aper&ccedil;u bien  incomplet.  Merci &agrave; notre  guide  pour sa &lt;br /&gt;\ndisponibilit&eacute; et ses commentaires o&ugrave; se m&ecirc;laient ju dicieusement simplicit&eacute; et pr&eacute;cision scientifique.     &lt;br /&gt;\n   &lt;br /&gt;\nGabriel Ney', '2015-07-22', 'Denis Parkinson   ', '2015-07-22_projet-life-et-biodiversite-dans-les-fagnes-de-stoumont----.pdf'),
('12', 'Odrimont : gestion de la RN du Pont du H&eacute;      ', '  &lt;br /&gt;\nL&rsquo;orage de la nuit  fut bienfaisant : la temp&eacute;rature matinale est agr&eacute;a ble et le fond de prairie n&rsquo;est pas &lt;br /&gt;\nd&eacute;tremp&eacute;. Au programme : fauchage bisannuel en &icirc;lot s pour d&eacute;gager un sentier autour des mares et a&eacute;rer la &lt;br /&gt;\nrive du ruisseau d&rsquo;Arbrefontaine&hellip; Et plus si affini t&eacute;s !  &lt;br /&gt;\n  &lt;br /&gt;\nComme d&rsquo;habitude, Ghislain et Isabelle ont tout pr&eacute; vu : outillage, mat&eacute;riel bbq, boissons pour tous les go&ucirc;ts. &lt;br /&gt;\nEt chacun apporte sa contribution : quiche, crudit&eacute; s vari&eacute;es, du ros&eacute;, du rouge, de la bi&egrave;re, de l&rsquo;eau&hellip; Il &lt;br /&gt;\nreste &agrave; m&eacute;riter toutes ces d&eacute;licatesses !    &lt;br /&gt;\nOn &eacute;value les effets positifs de la gestion de l&rsquo;an n&eacute;e derni&egrave;re, avant de se mettre &agrave; l&rsquo;&oelig;uvre. Trois &lt;br /&gt;\nd&eacute;broussailleuses pour le fauchage de la reine de p r&eacute; particuli&egrave;rement envahissante dans les parcelles &lt;br /&gt;\n&eacute;pargn&eacute;es l&rsquo;ann&eacute;e derni&egrave;re, des r&acirc;teaux et des four ches pour le ramassage. Joseph (Jamar) est le premi er &lt;br /&gt;\n&agrave; se mettre &agrave; l&rsquo;&oelig;uvre. L&rsquo;autre Joseph (Clesse) nous  rejoint bient&ocirc;t et en deux heures de temps, la prairie &lt;br /&gt;\nrespire, a&eacute;r&eacute;e en mosa&iuml;que ; les amas de foin ont p ris de la hauteur.   &lt;br /&gt;\n &lt;br /&gt;\nPendant ce temps, &agrave; coups de pinceaux g&eacute;n&eacute;reux, Gen e rafra&icirc;chit le panneau signalant la r&eacute;serve. Simon et &lt;br /&gt;\nWilly d&eacute;gagent le chenal d&rsquo;&eacute;vacuation des mares, ga rantie d&eacute;sormais par le placement d&rsquo;un tuyau en b&eacute;ton. &lt;br /&gt;\nTravail de for&ccedil;ats car ce n&rsquo;est pas une mince affai re que de d&eacute;placer ce tuyau, bien plus lourd que ce ux qui &lt;br /&gt;\nambitionnent de le man&oelig;uvrer, m&ecirc;me avec le concours  de bras additionnels !     &lt;br /&gt;\n &lt;br /&gt;\nIsabelle et &Eacute;liane se sont affair&eacute;es aux pr&eacute;paratif s culinaires. La table est dress&eacute;e : on se croirait &agrave; la &lt;br /&gt;\nterrasse d&rsquo;un restaurant. Ap&eacute;ritif rafra&icirc;chissant,  amuse-bouche, pain saucisse et tout le reste&hellip; Avec  Liliane &lt;br /&gt;\net Nicole, nous sommes maintenant douze pour y alle r de commentaires qui prolongent agr&eacute;ablement le &lt;br /&gt;\ntemps de r&eacute;cup&eacute;ration, sous la frondaison, au bord  du ruisseau et son pont de chayes.   &lt;br /&gt;\n  &lt;br /&gt;\nBien requinqu&eacute;s, on est pr&ecirc;ts pour fignoler le trav ail et faire quelques observations nature : &eacute;peire fasci&eacute;e, &lt;br /&gt;\naeschne bleue, quelques grenouilles, un l&eacute;zard, l&rsquo;e nvol pr&eacute;cipit&eacute; d&rsquo;un chevalier&hellip; Et voil&agrave;-t-il pas que Gene &lt;br /&gt;\net Eric trouvent imp&eacute;ratif d&rsquo;extirper la v&eacute;g&eacute;tation  qui enlise une mare : amas vaseux truff&eacute;s de rhizo mes de &lt;br /&gt;\ngramin&eacute;es. Il n&rsquo;en faut pas plus pour que Ghislain  les rejoigne aussit&ocirc;t et vante les bienfaits d&rsquo;un bain de &lt;br /&gt;\nboue. Toujours est-il qu&rsquo;apr&egrave;s quelques glissades s pectaculaires dans la vase, ils ont restaur&eacute; des conditions &lt;br /&gt;\nplus favorables &agrave; la vie aquatique. On se promet de  remettre le couvert en septembre pour les deux aut res &lt;br /&gt;\nmares !      &lt;br /&gt;\nDe passage fortuitement, M. Annet s&rsquo;enquiert de l&rsquo;&eacute; volution du site. C&rsquo;est lui qui fit don aux CNB du terrain &lt;br /&gt;\ndevenu depuis r&eacute;serve naturelle.   &lt;br /&gt;\nAvant l&rsquo;&eacute;pisode rangement, on fait un sort aux gauf res de Josiane et encore un dernier inventaire des restes &lt;br /&gt;\nde midi. De quoi prolonger un bon moment de partage  d&rsquo;efforts et de convivialit&eacute; dans ce coin de nature &lt;br /&gt;\nparticuli&egrave;rement accueillant.           &lt;br /&gt;\n    &lt;br /&gt;\nGabriel Ney', '2015-08-08', 'Responsables : Isabelle Deroanne et Ghislain Cardoen  ', '2015-08-08_odrimont-:-gestion-de-la-rn-du-pont-du-he------.pdf'),
('13', 'Odrimont : gestion de la RN du Pont du H&eacute;      ', '  &lt;br /&gt;\nL&rsquo;orage de la nuit  fut bienfaisant : la temp&eacute;rature matinale est agr&eacute;a ble et le fond de prairie n&rsquo;est pas &lt;br /&gt;\nd&eacute;tremp&eacute;. Au programme : fauchage bisannuel en &icirc;lot s pour d&eacute;gager un sentier autour des mares et a&eacute;rer la &lt;br /&gt;\nrive du ruisseau d&rsquo;Arbrefontaine&hellip; Et plus si affini t&eacute;s !  &lt;br /&gt;\n  &lt;br /&gt;\nComme d&rsquo;habitude, Ghislain et Isabelle ont tout pr&eacute; vu : outillage, mat&eacute;riel bbq, boissons pour tous les go&ucirc;ts. &lt;br /&gt;\nEt chacun apporte sa contribution : quiche, crudit&eacute; s vari&eacute;es, du ros&eacute;, du rouge, de la bi&egrave;re, de l&rsquo;eau&hellip; Il &lt;br /&gt;\nreste &agrave; m&eacute;riter toutes ces d&eacute;licatesses !    &lt;br /&gt;\nOn &eacute;value les effets positifs de la gestion de l&rsquo;an n&eacute;e derni&egrave;re, avant de se mettre &agrave; l&rsquo;&oelig;uvre. Trois &lt;br /&gt;\nd&eacute;broussailleuses pour le fauchage de la reine de p r&eacute; particuli&egrave;rement envahissante dans les parcelles &lt;br /&gt;\n&eacute;pargn&eacute;es l&rsquo;ann&eacute;e derni&egrave;re, des r&acirc;teaux et des four ches pour le ramassage. Joseph (Jamar) est le premi er &lt;br /&gt;\n&agrave; se mettre &agrave; l&rsquo;&oelig;uvre. L&rsquo;autre Joseph (Clesse) nous  rejoint bient&ocirc;t et en deux heures de temps, la prairie &lt;br /&gt;\nrespire, a&eacute;r&eacute;e en mosa&iuml;que ; les amas de foin ont p ris de la hauteur.   &lt;br /&gt;\n &lt;br /&gt;\nPendant ce temps, &agrave; coups de pinceaux g&eacute;n&eacute;reux, Gen e rafra&icirc;chit le panneau signalant la r&eacute;serve. Simon et &lt;br /&gt;\nWilly d&eacute;gagent le chenal d&rsquo;&eacute;vacuation des mares, ga rantie d&eacute;sormais par le placement d&rsquo;un tuyau en b&eacute;ton. &lt;br /&gt;\nTravail de for&ccedil;ats car ce n&rsquo;est pas une mince affai re que de d&eacute;placer ce tuyau, bien plus lourd que ce ux qui &lt;br /&gt;\nambitionnent de le man&oelig;uvrer, m&ecirc;me avec le concours  de bras additionnels !     &lt;br /&gt;\n &lt;br /&gt;\nIsabelle et &Eacute;liane se sont affair&eacute;es aux pr&eacute;paratif s culinaires. La table est dress&eacute;e : on se croirait &agrave; la &lt;br /&gt;\nterrasse d&rsquo;un restaurant. Ap&eacute;ritif rafra&icirc;chissant,  amuse-bouche, pain saucisse et tout le reste&hellip; Avec  Liliane &lt;br /&gt;\net Nicole, nous sommes maintenant douze pour y alle r de commentaires qui prolongent agr&eacute;ablement le &lt;br /&gt;\ntemps de r&eacute;cup&eacute;ration, sous la frondaison, au bord  du ruisseau et son pont de chayes.   &lt;br /&gt;\n  &lt;br /&gt;\nBien requinqu&eacute;s, on est pr&ecirc;ts pour fignoler le trav ail et faire quelques observations nature : &eacute;peire fasci&eacute;e, &lt;br /&gt;\naeschne bleue, quelques grenouilles, un l&eacute;zard, l&rsquo;e nvol pr&eacute;cipit&eacute; d&rsquo;un chevalier&hellip; Et voil&agrave;-t-il pas que Gene &lt;br /&gt;\net Eric trouvent imp&eacute;ratif d&rsquo;extirper la v&eacute;g&eacute;tation  qui enlise une mare : amas vaseux truff&eacute;s de rhizo mes de &lt;br /&gt;\ngramin&eacute;es. Il n&rsquo;en faut pas plus pour que Ghislain  les rejoigne aussit&ocirc;t et vante les bienfaits d&rsquo;un bain de &lt;br /&gt;\nboue. Toujours est-il qu&rsquo;apr&egrave;s quelques glissades s pectaculaires dans la vase, ils ont restaur&eacute; des conditions &lt;br /&gt;\nplus favorables &agrave; la vie aquatique. On se promet de  remettre le couvert en septembre pour les deux aut res &lt;br /&gt;\nmares !      &lt;br /&gt;\nDe passage fortuitement, M. Annet s&rsquo;enquiert de l&rsquo;&eacute; volution du site. C&rsquo;est lui qui fit don aux CNB du terrain &lt;br /&gt;\ndevenu depuis r&eacute;serve naturelle.   &lt;br /&gt;\nAvant l&rsquo;&eacute;pisode rangement, on fait un sort aux gauf res de Josiane et encore un dernier inventaire des restes &lt;br /&gt;\nde midi. De quoi prolonger un bon moment de partage  d&rsquo;efforts et de convivialit&eacute; dans ce coin de nature &lt;br /&gt;\nparticuli&egrave;rement accueillant.           &lt;br /&gt;\n    &lt;br /&gt;\nGabriel Ney', '2015-08-08', 'Isabelle Deroanne et Ghislain Cardoen  ', '2015-08-08_odrimont-:-gestion-de-la-rn-du-pont-du-he------.pdf');
