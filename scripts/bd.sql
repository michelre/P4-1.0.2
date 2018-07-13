-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Juin 2018 à 12:06
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projet4`
--

-- --------------------------------------------------------

SET foreign_key_checks = 0;

--
-- Structure de la table `article`
--
DROP TABLE article;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(15) AUTO_INCREMENT NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `content` text NOT NULL,
  `date_creation` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `article` (`id`, `title`, `content`, `date_creation`) VALUES
(1, 'Le DÃ©part', '<p>Paul, newyorkais et journaliste de 37 ans, ayant accumul&eacute; les succ&egrave;s dans le New York Times, se demanda par o&ugrave; il allait commencer pour mener &agrave; bien la mission qu''il s''&eacute;tait fix&eacute; et qui l''avait amen&eacute; jusqu''ici. En arrivant en Alaska, Paul ne p&ucirc;t s''emp&ecirc;cher de se dire que ce pays ferait un article de taille pour le journal. Mais sa venue n''&eacute;tant pas d''ordre professionnelle, il metta cette id&eacute;e de c&ocirc;t&eacute; pour plus tard. Il e&ucirc;t ensuite une pens&eacute;e pour Sarah, sa femme. Elle aurait ador&eacute; cet endroit et en tant que photographe, elle aurait su retransmettre la beaut&eacute; de ces lieux &agrave; travers son appareil. D''ordinaire, Paul et Sarah voyagaient ensemble. Mais quand Paul lui expliqua la raison de son d&eacute;part, elle d&eacute;cida de ne pas l''accompagner car elle comprit qu''il devait entreprendre ce voyage seul. Durant son p&eacute;riple, Paul pr&icirc;t en photo tout les lieux et paysages que sa femme aurait &eacute;t&eacute; susceptible de photographier si elle avait &eacute;t&eacute; avec lui. Une fa&ccedil;on pour lui de lui montrer qu''elle voyagait &agrave; ses c&ocirc;t&eacute;s. Paul arriva dans une maison d''h&ocirc;te accueilli par Jacob et Cathy, un couple de quinquag&eacute;naire &agrave; l''allure imposante mais avec une tendresse dans le regard qui rappella &agrave; Paul la douceur de son p&egrave;re parti trop t&ocirc;t emport&eacute; par un cancer de la peau alors qu''il n''&eacute;tait encore qu''un adolescent. Cathy le conduisit dans une petite chambre &agrave; l''ambiance chaleureuse. Un grand lit double s''imposait face au reste de la pi&egrave;ce et la vue donnait sur des montagnes enneig&eacute;es qui invitaient &agrave; l''&eacute;vasion. Une fois correctement install&eacute;, Paul pr&icirc;t son ordinateur et &eacute;criv&icirc;t un mail &agrave; Sarah pour lui raconter le d&eacute;but de son voyage :<br />" Mon amour, <br />Ici il fait tr&egrave;s froid et le chocolat chaud que l''on a l''habitude de boire ensemble chaque matin au City Bakery me manque. Pas autant que toi &eacute;videmment. Apr&egrave;s un long trajet en voiture, je suis enfin install&eacute; dans une petite maison pleine de charme. Ici les gens sont chaleureux et de bonne humeur. Il faudrait songer &agrave; dire &agrave; Jack de venir ici en vacances dans le coin. G&eacute;rer le journal le rend parfois...irritable. J''aurai aim&eacute; que tu sois &agrave; mes c&ocirc;t&eacute;s pour partager cette aventure. Mais je pense que tu as raison, je dois le faire seul bien que ta force et ton soutien m''auraient &eacute;t&eacute; d''une aide pr&eacute;cieuse. Je ne sais pas comment aborder cette situation. Je ne sais pas ce que je vais pouvoir dire &agrave; cette personne pour qui je suis un inconnu et que je ne connais pas non plus alors qu''elle se trouve &ecirc;tre ma fille. Je ne r&eacute;alise toujours pas que Penny est attendu quinze ann&eacute;es pour m''avouer l''existence de mon propre enfant alors qu''elle conn&acirc;it ma douleur d''avoir &eacute;t&eacute; priv&eacute; de mon p&egrave;re jeune..."</p>', '2018-07-11'),
(2, 'La rencontre', '<p>Le lendemain de son arriv&eacute;e en Alaska, Paul se rendit dans l''h&ocirc;pital o&ugrave; Stella, sa fille, travaillait en tant qu''infirmi&egrave;re. Pendant le trajet, il se rappela la fa&ccedil;on dont il &eacute;tait tomb&eacute; par hasard sur Penny dans les rues de New York, son amour de jeunesse et comment, autour d''un simple caf&eacute;, il avait appris l''existence de sa fille. Elle lui avait annonc&eacute; cette nouvelle sans y mettre les formes et Paul se souv&icirc;nt avoir ressenti de la col&egrave;re &agrave; son &eacute;gard. Il essaya ensuite de comprendre pourquoi elle ne lui avait pas annonc&eacute; sa grossesse &agrave; l''&eacute;poque. Quand elle &eacute;voqua les projets qu''il avait &agrave; cette &eacute;poque de sa vie, les voyages et les d&eacute;couvertes qu''il voulait faire, il compr&icirc;t que ce n''&eacute;tait pas la faute de Penny mais la sienne si elle avait gard&eacute; ce secret pour elle. Mais Paul &eacute;tait quand m&ecirc;me en col&egrave;re contre Penny car, &agrave; cause d''elle, il &eacute;tait pass&eacute; &agrave; c&ocirc;t&eacute; de la vie de sa petite fille. Son premier mot, ses premiers pas, sa rentr&eacute;e &agrave; l''&eacute;cole, son premier chagrin d''amour. Autant de souvenirs que Paul ne pourrait rattraper. Il se gara sur le parking de l''h&ocirc;pital mais ne descendit pas tout de suite de sa voiture. Il e&ucirc;t besoin de quelques minutes pour se donner du courage et se dire qu''il allait rencontrer, pour la premi&egrave;re fois, sa petite fille qui n''en &eacute;tait plus une depuis longtemps maintenant et qu''elle ne s''attendait s&ucirc;rement pas &agrave; avoir d&eacute;barquer un inconnu en pr&eacute;textant qu''il est son p&egrave;re. Arriv&eacute; &agrave; l''accueil, il demanda &agrave; la secr&eacute;taire s''il pouvait voir Mlle Stella Jones avec qu''il avait pris rendez-vous quelques jours plus t&ocirc;t pr&eacute;textant vouloir parler des conditions de travail dans une structure hospitali&egrave;re en Alaska. On invita Paul &agrave; s''asseoir pour patienter. Apr&egrave;s plusieurs minutes d''attente, il v&icirc;t une silhouette au bout du couloir se rapprocher de plus en plus. Il distingua ses cheveux longs et boucl&eacute;s. Une fois &agrave; quelques m&egrave;tre d''elle, il f&ucirc;t troubl&eacute; par la ressemblance avec Penny. Les m&ecirc;mes yeux verts &eacute;clantants, les m&ecirc;mes petites pommettes sur les joues et cette fa&ccedil;on de se pincer les l&egrave;vres en r&eacute;fl&eacute;chissant. Quand Stella v&icirc;t Paul assis sur son si&egrave;ge &agrave; attendre, un dr&ocirc;le de sentiment la traversa. Comme si elle connaissait d&eacute;j&agrave; cette personne. Ils se retrouv&icirc;rent dans un bar plut&ocirc;t calme apr&egrave;s le service de Stella pour faire cette interview. Paul lui posa plusieurs questions sur l''ambiance au travail, les conditions ou encore le budget. Stella avait toujours la bonne remarque, dr&ocirc;le et piquante, comme sa m&egrave;re. A la fin de l''entrevue, Stella et Paul d&eacute;cid&egrave;rent de se revoir et elle lui proposa de la suivre une journ&eacute;e compl&egrave;te au sein de l''h&ocirc;pital pour qu''il se rende compte par lui m&ecirc;me des conditions dans lesquelles elle travaille. Et Paul y voyait l&agrave; une tr&egrave;s bonne occasion d''apprendre &agrave; la conna&icirc;tre d''avantage avant de lui r&eacute;v&eacute;ler sa v&eacute;ritable identit&eacute;.</p>', '2018-07-11'),
(3, 'L''aveu', '<p>La journ&eacute;e &agrave; l''h&ocirc;pital en compagnie de Stella se passa tr&egrave;s bien. Il p&ucirc;t la voir &agrave; l''oeuvre avec les patients et il constata qu''elle &eacute;tait d''une douceur extraordinaire autant avec les enfants malades, les personnes &acirc;g&eacute;es que les jeunes mamans. A l''heure du d&eacute;jeuner, Stella invita Paul &agrave; se joindre &agrave; elle.&nbsp; Ce f&ucirc;t pour lui l''occasion d''apprendre &agrave; la conna&icirc;tre personnellement. Au fil de la conversation, il appris qu''elle &eacute;tait partie en Alaska &agrave; sa majorit&eacute; pour d&eacute;couvrir le monde et qu''elle &eacute;tait tomb&eacute;e amoureuse de cet endroit. Amoureuse &eacute;galement de Tony avec qui elle &eacute;tait mari&eacute;e depuis un peu plus d''un an. Elle invita ensuite Paul &agrave; d&icirc;ner avec eux &agrave; la fin de la journ&eacute;e. Proposition que Paul ne p&ucirc;t refuser. Le reste de la journ&eacute;e &agrave; l''h&ocirc;pital f&ucirc;t plut&ocirc;t calme et pendant un moment tranquille, Paul demanda &agrave; Stella si la s&eacute;paration avec ses parents n''avait pas &eacute;t&eacute; trop dure. Elle lui avoua que sa m&egrave;re avait eu du mal &agrave; accepter sa d&eacute;cision. Mais au fil du temps et en voyant qu''elle &eacute;tait heureuse, elle avait finit par se faire une raison. Quant &agrave; son p&egrave;re, elle lui annon&ccedil;a ne pas le conna&icirc;tre. Sa m&egrave;re lui ayant annonc&eacute; qu''il &eacute;tait mort peu apr&egrave;s sa naissance. Paul n''en revenait pas de ce qu''il venait d''entendre. Il s''empressa de t&eacute;l&eacute;phoner &agrave; Penny et laissa un message sur sa bo&icirc;te vocale : "Penny, c''est Paul. Comment as-tu pu dire &agrave; notre fille que j''&eacute;tais mort ? Elle croit que je suis six pieds sous terre alors que je me trouve &agrave; quelques m&egrave;tres d''elle. Comment suis-je sens&eacute; abord&eacute; le sujet apr&egrave;s une pareille r&eacute;v&eacute;lation ? Ce n''est vraiment pas &eacute;vident comme situation. Et tout cela est de ta faute ! "</p>\r\n<p>Au moment du d&icirc;ner, Paul sonna chez sa fille. Tony ouvrit la porte. Il avait un air rassurant et tr&egrave;s gentil que Paul appr&eacute;&ccedil;ia d&egrave;s la premi&egrave;re seconde. Le d&icirc;ner se passa sans encombre et au moment du dessert, Paul prit la parole. Il avoua, avec difficult&eacute;, que sa venue ici n''&eacute;tait pas anodine et qu''il se trouvait &ecirc;tre ici pour faire connaissance avec sa fille, Stella. Tony se metta en col&egrave;re et lui ordonna de s''en aller mais Stella l''en emp&ecirc;cha. Elle voulait en savoir plus sur cet homme et pourquoi il pensait qu''elle &eacute;tait sa fille. Apr&egrave;s avoir entendu les explications de Paul, elle resta assise un moment sans rien dire puis finit par se lever et quitter la pi&egrave;ce. Tony mis alors Paul &agrave; la porte et alla r&eacute;conforter sa femme. Elle s''&eacute;tait r&eacute;fugi&eacute;e dans sa chambre pour appeler sa m&egrave;re et avoir sa version des faits. Une fois les explications obtenues, elle rattrapa Paul et lui sauta dans les bras. Ils pass&egrave;rent la nuit &agrave; discuter et &agrave; se raconter leurs vies pass&eacute;es, leurs projets.</p>\r\n<p>Paul resta en Alaska pour rattraper le temps perdu et pour continuer &agrave; faire connaissance avec Stella. Sarah finit par prendre un bille pour l''Alaska pour rejoindre son mari, vivre avec lui et le soutenir.</p>', '2018-07-11');

--
-- Structure de la table `comment`
--
DROP TABLE comment;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(15) AUTO_INCREMENT PRIMARY KEY,
  `author` VARCHAR(255) DEFAULT NULL,
  `comment` TEXT DEFAULT NULL,
  `date_creation` date DEFAULT NULL,
  `article_id` int(15),
  `is_notified` TINYINT(1) DEFAULT 0,
  FOREIGN KEY (article_id) REFERENCES article(id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Structure de la table `users`
--
DROP TABLE users;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

SET foreign_key_checks = 1;
--
-- Contenu de la table `users`
--

-- INSERT INTO user(`id`, `username`, `password`) VALUES ('1', 'admin', 'password');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

