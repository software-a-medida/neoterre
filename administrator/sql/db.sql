-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.5.9-MariaDB-1:10.5.9+maria~buster - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla codemonkey.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `name` text DEFAULT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` text NOT NULL,
  `id_level` bigint(20) DEFAULT NULL,
  `permissions` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`id_level`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla codemonkey.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone`, `password`, `id_level`, `permissions`) VALUES
	(1, 'dgomez', 'David Miguel Gómez Macías', 'davidgomezmacias@gmail.com', 529982904203, 'fb2f9c819069a9835a73086111b53b51d4783394:VRfB6FFyQUIfL9MUajMtWlnTW8gkge1bS1Uf1lO4bQbaakmdyCd8GrA2qQLk3Z4U', 1, 'a:21:{i:0;s:12:"{users_read}";i:1;s:14:"{users_create}";i:2;s:14:"{users_update}";i:3;s:14:"{users_delete}";i:4;s:18:"{permissions_read}";i:5;s:20:"{permissions_create}";i:6;s:20:"{permissions_delete}";i:7;s:11:"{blog_read}";i:8;s:13:"{blog_create}";i:9;s:13:"{blog_update}";i:10;s:13:"{blog_delete}";i:11;s:22:"{categories_blog_read}";i:12;s:24:"{categories_blog_create}";i:13;s:24:"{categories_blog_delete}";i:14;s:15:"{services_read}";i:15;s:17:"{services_create}";i:16;s:17:"{services_update}";i:17;s:17:"{services_delete}";i:18;s:26:"{categories_services_read}";i:19;s:28:"{categories_services_create}";i:20;s:28:"{categories_services_delete}";}');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.blog_categories
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `description` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando estructura para tabla codemonkey.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `id_category` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `sm_title` text DEFAULT NULL,
  `sm_description` text DEFAULT NULL,
  `sm_image` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `status` set('draft','published','unpublished','removed') NOT NULL DEFAULT 'published',
  `publication_date` datetime NOT NULL DEFAULT current_timestamp(),
  `author` bigint(20) DEFAULT NULL,
  `lang` tinytext DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_blog_blog_categories` (`id_category`),
  KEY `FK_blog_users` (`author`),
  CONSTRAINT `FK_blog_blog_categories` FOREIGN KEY (`id_category`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_blog_users` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.blog: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`id`, `url`, `title`, `id_category`, `image`, `content`, `sm_title`, `sm_description`, `sm_image`, `tags`, `status`, `publication_date`, `author`, `lang`, `__session`) VALUES
	(1, 'Hello-World', 'Hello World', NULL, 'hello_world_uphOg5SJ.png', '"<p>Muy lejos, m&aacute;s all&aacute; de las monta&ntilde;as de palabras, alejados de los pa&iacute;ses de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la sem&aacute;ntica, un gran oc&eacute;ano de lenguas.<\\/p>\\n<p>Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un pa&iacute;s paraisom&aacute;tico en el que a uno le caen pedazos de frases asadas en la boca.<\\/p>\\n<p>Ni siquiera los todopoderosos signos de puntuaci&oacute;n dominan a los textos simulados; una vida, se puede decir, poco ortogr&aacute;fica. Pero un buen d&iacute;a, una peque&ntilde;a l&iacute;nea de texto simulado, llamada Lorem Ipsum, decidi&oacute; aventurarse y salir al vasto mundo de la gram&aacute;tica.<\\/p>\\n<p>El gran Oxmox le desanconsej&oacute; hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos de interrogaci&oacute;n salvajes y puntos y coma traicioneros, pero el texto simulado no se dej&oacute; atemorizar. Empac&oacute; sus siete versales, enfund&oacute; su inicial en el cintur&oacute;n y se puso en camino.<\\/p>\\n<p>Cuando ya hab&iacute;a escalado las primeras colinas de las monta&ntilde;as cursivas, se dio media vuelta para dirigir su mirada por &uacute;ltima vez, hacia su ciudad natal Letralandia, el encabezamiento del pueblo Alfabeto y el subt&iacute;tulo de su propia calle, la calle del rengl&oacute;n.<\\/p>\\n<p>Una pregunta ret&oacute;rica se le pas&oacute; por la mente y le puso melanc&oacute;lico, pero enseguida reemprendi&oacute; su marcha. De nuevo en camino, se encontr&oacute; con una copia.<\\/p>\\n<p>La copia advirti&oacute; al peque&ntilde;o texto simulado de que en el lugar del que ella ven&iacute;a, la hab&iacute;an reescrito miles de veces y que todo lo que hab&iacute;a quedado de su original era la palabra \\"y\\", as&iacute; que m&aacute;s le val&iacute;a al peque&ntilde;o texto simulado volver a su pa&iacute;s, donde estar&iacute;a mucho m&aacute;s seguro.<\\/p>\\n<p>Pero nada de lo dicho por la copia pudo convencerlo, de manera que al cabo de poco tiempo, unos p&eacute;rfidos redactores publicitarios lo encontraron y emborracharon con Longe y Parole para llev&aacute;rselo despu&eacute;s a su agencia, donde abusaron de &eacute;l para sus proyectos, una y otra vez.<\\/p>\\n<p>Y si a&uacute;n no lo han reescrito, lo siguen utilizando hasta ahora. Muy lejos, m&aacute;s all&aacute; de las monta&ntilde;as de palabras, alejados de los pa&iacute;ses de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la sem&aacute;ntica, un gran oc&eacute;ano de lenguas.<\\/p>\\n<p>Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias. Hablamos de un pa&iacute;s paraisom&aacute;tico en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuaci&oacute;n dominan a los textos simulados; una vida, se puede decir, poco ortogr&aacute;fica.<\\/p>\\n<p>Pero un buen d&iacute;a, una peque&ntilde;a l&iacute;nea de texto simulado, llamada Lorem Ipsum, decidi&oacute; aventurarse y salir al vasto mundo de la gram&aacute;tica.<\\/p>\\n<p>El gran Oxmox le desanconsej&oacute; hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos de interrogaci&oacute;n salvajes y puntos y coma traicioneros, pero el texto simulado no se dej&oacute; atemorizar. Empac&oacute; sus siete versales, enfund&oacute; su inicial en el cintur&oacute;n y se puso en camino.<\\/p>\\n<p>Cuando ya hab&iacute;a escalado las primeras colinas de las monta&ntilde;as cursivas, se dio media vuelta para dirigir su mirada por &uacute;ltima vez, hacia su ciudad natal Letralandia, el encabezamiento del pueblo Alfabeto y el subt&iacute;tulo de su propia calle, la calle del rengl&oacute;n.<\\/p>\\n<p>Una pregunta ret&oacute;rica se le pas&oacute; por la mente y le puso melanc&oacute;lico, pero enseguida reemprendi&oacute; su marcha. De nuevo en camino, se encontr&oacute; con una copia.<\\/p>\\n<p>La copia advirti&oacute; al peque&ntilde;o texto simulado de que en el lugar del que ella ven&iacute;a, la hab&iacute;an reescrito miles de veces y que todo lo que hab&iacute;a quedado de su original era la palabra \\"y\\", as&iacute; que m&aacute;s le val&iacute;a al peque&ntilde;o texto simulado volver a su pa&iacute;s, donde estar&iacute;a mucho m&aacute;s seguro.<\\/p>\\n<p>Pero nada de lo dicho por la copia pudo convencerlo, de manera que al cabo de poco tiempo, unos p&eacute;rfidos redactores publicitarios lo encontraron y emborracharon con Longe y Parole para llev&aacute;rselo despu&eacute;s a su agencia, donde abusaron de &eacute;l para sus proyectos, una y otra vez. Y si a&uacute;n no lo han reescrito, lo siguen utilizando hasta ahora.<\\/p>\\n<p>Muy lejos, m&aacute;s all&aacute; de las monta&ntilde;as de palabras, alejados de los pa&iacute;ses de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la sem&aacute;ntica, un gran oc&eacute;ano de lenguas. Un riachuelo llamado Pons fluye por su pueblo y los abastece con las normas necesarias.<\\/p>\\n<p>Hablamos de un pa&iacute;s paraisom&aacute;tico en el que a uno le caen pedazos de frases asadas en la boca. Ni siquiera los todopoderosos signos de puntuaci&oacute;n dominan a los textos simulados; una vida, se puede decir, poco ortogr&aacute;fica. Pero un buen d&iacute;a, una peque&ntilde;a l&iacute;nea de texto simulado, llamada Lorem Ipsum, decidi&oacute; aventurarse y salir al vasto mundo de la gram&aacute;tica.<\\/p>\\n<p>El gran Oxmox le desanconsej&oacute; hacerlo, ya que esas tierras estaban llenas de comas malvadas, signos de interrogaci&oacute;n salvajes y puntos y coma traicioneros, pero el texto simulado no se dej&oacute; atemorizar. Empac&oacute; sus siete versales, enfund&oacute; su inicial en el cintur&oacute;n y se puso en camino.<\\/p>\\n<p>Cuando ya hab&iacute;a escalado las primeras colinas de las monta&ntilde;as cursivas, se dio media vuelta para dirigir su mirada por &uacute;ltima vez, hacia su ciudad natal Letralandia, el encabezamiento del pueblo Alfabeto y el subt&iacute;tulo de su propia calle, la calle del rengl&oacute;n. Una pregunta ret&oacute;rica se le pas&oacute; por la mente y le puso melanc&oacute;lico, pero enseguida reemprendi&oacute; su marcha. De nuevo en camino, se encontr&oacute; con una copia. La copia advirti&oacute; al peque&ntilde;o texto simulado de que en el lugar del que ella ven&iacute;a, la hab&iacute;an reescrito miles de veces y que todo lo que hab&iacute;a quedado de su original era la palabra \\"y\\", as&iacute; que m&aacute;s le val&iacute;a al peque&ntilde;o texto simulado volver a su pa&iacute;s, donde estar&iacute;a mucho m&aacute;s seguro. Pero nada de lo dicho por la copia pudo convencerlo, de manera que al cabo de poco tiempo, unos p&eacute;rfidos redactores<\\/p>"', 'Hello World', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.', 'Lorem-Ipsum-alternatives_ZsRMutEX.png', 'a:2:{i:0;s:5:"hello";i:1;s:5:"world";}', 'published', '2021-09-27 14:28:30', 1, 'es', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"0yaTmM9bBBQlW9iVWuzYJ1zYj7pkvnCRSiiiqslkeBUOf60JXKj9LbTL64P4GF1eP932eJeN8GSCDNeJ6x6XXIm5BBPAZ5sMCWmwbdjMd4fB1e8lioi7O6Acvxbc9m4T";}');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Volcando datos para la tabla codemonkey.blog_categories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.comp_fleet
CREATE TABLE IF NOT EXISTS `comp_fleet` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` tinytext DEFAULT NULL,
  `unit_data` longtext DEFAULT NULL,
  `nickname` tinytext DEFAULT NULL,
  `transport_number` tinytext DEFAULT NULL,
  `rates` longtext DEFAULT NULL,
  `media_data` longtext DEFAULT NULL,
  `version` tinytext DEFAULT NULL,
  `status` enum('enabled','disabled') NOT NULL DEFAULT 'enabled',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.comp_fleet: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `comp_fleet` DISABLE KEYS */;
INSERT INTO `comp_fleet` (`id`, `type`, `unit_data`, `nickname`, `transport_number`, `rates`, `media_data`, `version`, `status`) VALUES
	(1, 'yacht', 'a:5:{s:10:"brand_name";s:7:"Sea Ray";s:11:"brand_model";s:9:"Sundancer";s:10:"model_year";s:4:"2003";s:2:"ft";s:2:"25";s:3:"pax";s:1:"8";}', 'Rey', NULL, 'a:2:{s:18:"price_per_overtime";s:4:"1500";s:4:"rate";a:2:{s:6:"ZwpJBj";a:3:{s:3:"hrs";s:1:"1";s:12:"price_report";s:4:"2000";s:12:"public_price";s:4:"3000";}s:6:"34bDEG";a:3:{s:3:"hrs";s:1:"2";s:12:"price_report";s:4:"3000";s:12:"public_price";s:4:"4500";}}}', 'a:1:{s:11:"image_cover";a:4:{s:6:"status";s:2:"OK";s:4:"file";s:29:"triana-1920x1080_i78gVavp.jpg";s:4:"size";i:195003;s:13:"size_compress";i:195003;}}', '1.0.0', 'enabled');
/*!40000 ALTER TABLE `comp_fleet` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.levels
CREATE TABLE IF NOT EXISTS `levels` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `title` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla codemonkey.levels: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
INSERT INTO `levels` (`id`, `code`, `title`) VALUES
	(1, '{sysadmin}', 'Administrador de sistemas'),
	(2, '{administrator}', 'Administrador'),
	(11, '{customer}', 'Cliente');
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.media
CREATE TABLE IF NOT EXISTS `media` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` text DEFAULT NULL,
  `media` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.media: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `media` DISABLE KEYS */;
/*!40000 ALTER TABLE `media` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mycatalog_category
CREATE TABLE IF NOT EXISTS `mycatalog_category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `icon` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` enum('enabled','disabled') DEFAULT 'enabled',
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mycatalog_category: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `mycatalog_category` DISABLE KEYS */;
INSERT INTO `mycatalog_category` (`id`, `name`, `image`, `icon`, `description`, `status`, `__session`) VALUES
	(1, 'Desarrollo', NULL, NULL, NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(2, 'Hosting', NULL, NULL, NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}');
/*!40000 ALTER TABLE `mycatalog_category` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mycatalog_subcategory
CREATE TABLE IF NOT EXISTS `mycatalog_subcategory` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_category` bigint(20) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `status` enum('enabled','disabled') DEFAULT 'enabled',
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mycatalog_subcategory_catalog_category` (`id_category`),
  CONSTRAINT `FK_mycatalog_subcategory_catalog_category` FOREIGN KEY (`id_category`) REFERENCES `mycatalog_category` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mycatalog_subcategory: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `mycatalog_subcategory` DISABLE KEYS */;
INSERT INTO `mycatalog_subcategory` (`id`, `id_category`, `name`, `status`, `__session`) VALUES
	(1, 1, 'Páginas Web', 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(2, 2, 'Compartido', 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(3, 1, 'Componentes', 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(4, 1, 'Dashboard', 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}');
/*!40000 ALTER TABLE `mycatalog_subcategory` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mycatalog_product
CREATE TABLE IF NOT EXISTS `mycatalog_product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_subcategory` bigint(20) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('enabled','disabled') DEFAULT 'enabled',
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mycatalog_product_catalog_subcategory` (`id_subcategory`),
  CONSTRAINT `FK_mycatalog_product_catalog_subcategory` FOREIGN KEY (`id_subcategory`) REFERENCES `mycatalog_subcategory` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mycatalog_product: ~20 rows (aproximadamente)
/*!40000 ALTER TABLE `mycatalog_product` DISABLE KEYS */;
INSERT INTO `mycatalog_product` (`id`, `id_subcategory`, `name`, `price`, `image`, `status`, `__session`) VALUES
	(1, 1, 'Landingpage estática.', '3000', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(2, 1, 'Base de sitio web estático.', '1300', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(3, 1, 'Base de sitio web dinámico.', '2200', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(4, 3, 'Blog.', '4000', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(5, 3, 'Servicios.', '1400', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(6, 3, 'Galería.', '800', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(7, 3, 'Portafolio.', '900', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(8, 1, 'Sección estática.', '1100', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(9, 1, 'Sección dínamica.', '1700', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(10, 2, 'Plan básico - Anual - 1gb espacio en disco, 1 dominio, 3 correos electrónicos.', '1200', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(11, 3, 'Catálogo.', '1400', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(12, 4, 'Cotizaciones y ventas.', '3600', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(13, 3, 'Pasarela de pagos Stripe.', '1300', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(14, 3, 'Pasarela de pagos Paypal.', '1300', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(15, 3, 'Contacto.', '0', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(16, 3, 'Acerca de nosotros.', '0', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(18, 3, 'Multilenguaje.', '1100', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(19, 3, 'Proyectos.', '2300', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(20, 2, 'Plan correos electrónicos - Anual - 5gb espacio en disco, 5 dominios, correos electrónicos ilimitados.', '6200', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"eHJeUPdx9vQYKFQMTCbgk9NoNMLBOGyi6nJ2Q7QjHidAo1fP2Kh0dj6pxwo8fdvWzHTxmVmR2X6i1fdEWBT3Ik7ZBFJrKq2W52Gom1tiACNFfPh6rfmrFUX4aM6F9ycC";}'),
	(21, 3, 'Real Home.', '5500', NULL, 'enabled', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"QIOUZbTg4rL3uzCKixPe36OpeozZE6Bs84C5RLbDfbvQbe5kLf3fDacOAenTmSI4Ot6391HnRDWVswzjoAXsylUOz9cTw1bEVafXGljElJnW1otPdW1oObPMKLfCpqZa";}');
/*!40000 ALTER TABLE `mycatalog_product` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mygalleries
CREATE TABLE IF NOT EXISTS `mygalleries` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `ids` longtext DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mygalleries: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `mygalleries` DISABLE KEYS */;
/*!40000 ALTER TABLE `mygalleries` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.myquotes
CREATE TABLE IF NOT EXISTS `myquotes` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `folio` text DEFAULT NULL,
  `customer_email` text DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `data` longtext DEFAULT NULL,
  `total_price` text DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('quotation','sale','cancelled') NOT NULL DEFAULT 'quotation',
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.myquotes: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `myquotes` DISABLE KEYS */;
INSERT INTO `myquotes` (`id`, `folio`, `customer_email`, `customer_name`, `data`, `total_price`, `creation_date`, `status`, `__session`) VALUES
	(1, 'QKWGTDJ0', 'davidgomezmacias@gmail.com', 'Benny', 'a:16:{s:13:"customer_name";s:5:"Benny";s:17:"customer_business";N;s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:26:"davidgomezmacias@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9995936979";s:8:"products";a:7:{s:6:"KB9448";a:5:{s:4:"name";s:55:"Desarrollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:5:"Bacab";s:10:"annotation";s:0:"";s:5:"price";s:4:"2200";s:8:"quantity";s:1:"1";}s:6:"IywLOm";a:5:{s:4:"name";s:31:"Desarrollo, Componentes - Blog.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"4000";s:8:"quantity";s:1:"1";}s:6:"909qpp";a:5:{s:4:"name";s:45:"Desarrollo, Componentes - Acerca de nosotros.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"qlZrG2";a:5:{s:4:"name";s:35:"Desarrollo, Componentes - Contacto.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"Oml8Qq";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Proyectos.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"2300";s:8:"quantity";s:1:"1";}s:6:"Cli69A";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Servicios.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1400";s:8:"quantity";s:1:"1";}s:6:"yoBIQA";a:5:{s:4:"name";s:40:"Desarrollo, Componentes - Multilenguaje.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}}s:11:"annotations";s:67:"Se requiere el 50% del total como depósito al iniciar el proyecto.";s:8:"discount";s:10:"percentage";s:19:"discount_percentage";s:2:"60";s:14:"discount_price";N;s:5:"taxes";s:2:"16";s:8:"due_date";N;s:7:"payment";s:7:"deposit";}', '4593.6', '2021-08-17 14:02:02', 'sale', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"yFEIzc26CYRxim4wDcWqMImkImjGH1MP1wOlX3QWQlr7b8yGTxnGMJmiZbgbLtZuNBOoDu9bEFLCOyXZvPmI81x5ccDqqv1v8D4wBQQzBNHJ6P8s1wx15eu0Otr3MYOE";}'),
	(2, 'KNPTJD0F', 'davidgomezmacias@gmail.com', 'Jade Chavez', 'a:16:{s:13:"customer_name";s:11:"Jade Chavez";s:17:"customer_business";N;s:16:"customer_address";N;s:13:"customer_city";N;s:11:"customer_cp";N;s:14:"customer_email";s:26:"davidgomezmacias@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9981716076";s:8:"products";a:5:{s:6:"H48T3L";a:5:{s:4:"name";s:23:"Hosting - Plan a medida";s:13:"extra_options";s:54:"25gb espacio en disco, 5 dominios, correos ilimitados.";s:10:"annotation";s:15:"Anual (288 USD)";s:5:"price";s:7:"5872.77";s:8:"quantity";s:1:"1";}s:6:"ROtj4p";a:5:{s:4:"name";s:14:"Licencia Plesk";s:13:"extra_options";s:90:"Panel de administración para servidor, correos electrónicos y certificados de seguridad.";s:10:"annotation";s:15:"Anual (242 USD)";s:5:"price";s:7:"4934.76";s:8:"quantity";s:1:"1";}s:6:"crK5Qk";a:5:{s:4:"name";s:13:"IP dinámicas";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:3:"250";s:8:"quantity";s:1:"2";}s:6:"rslRp6";a:5:{s:4:"name";s:24:"Protección anti-rastreo";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"2400";s:8:"quantity";s:1:"1";}s:6:"Wlovr1";a:5:{s:4:"name";s:42:"Instalación y configuración de servidor.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:3:"200";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:10:"percentage";s:19:"discount_percentage";s:2:"20";s:14:"discount_price";N;s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"cash";}', '11126.024', '2021-08-20 15:13:43', 'sale', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"eHJeUPdx9vQYKFQMTCbgk9NoNMLBOGyi6nJ2Q7QjHidAo1fP2Kh0dj6pxwo8fdvWzHTxmVmR2X6i1fdEWBT3Ik7ZBFJrKq2W52Gom1tiACNFfPh6rfmrFUX4aM6F9ycC";}');
/*!40000 ALTER TABLE `myquotes` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mysales
CREATE TABLE IF NOT EXISTS `mysales` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `folio` text DEFAULT NULL,
  `customer_email` text DEFAULT NULL,
  `customer_name` text DEFAULT NULL,
  `data` text DEFAULT NULL,
  `total_price` text DEFAULT NULL,
  `total_payment` text DEFAULT NULL,
  `creation_date` datetime NOT NULL DEFAULT current_timestamp(),
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mysales: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `mysales` DISABLE KEYS */;
INSERT INTO `mysales` (`id`, `folio`, `customer_email`, `customer_name`, `data`, `total_price`, `total_payment`, `creation_date`, `__session`) VALUES
	(1, 'SVVERUNB', 'marisolchanv@gmail.com', 'Marisol Chan', 'a:16:{s:13:"customer_name";s:12:"Marisol Chan";s:17:"customer_business";s:24:"Mexico Notary Consulting";s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:22:"marisolchanv@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9981619833";s:8:"products";a:6:{s:6:"SILfEA";a:5:{s:4:"name";s:54:"Desarollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:26:"mexiconotaryconsulting.com";s:10:"annotation";s:0:"";s:5:"price";s:4:"2200";s:8:"quantity";s:1:"1";}s:6:"yqt0Nw";a:5:{s:4:"name";s:45:"Desarollo, Páginas Web - Sección estática.";s:13:"extra_options";s:0:"";s:10:"annotation";s:9:"Servicios";s:5:"price";s:4:"1100";s:8:"quantity";s:1:"1";}s:6:"zi45SQ";a:5:{s:4:"name";s:45:"Desarollo, Páginas Web - Sección estática.";s:13:"extra_options";s:0:"";s:10:"annotation";s:8:"Contacto";s:5:"price";s:4:"1100";s:8:"quantity";s:1:"1";}s:6:"2ldr9y";a:5:{s:4:"name";s:30:"Desarollo, Componentes - Blog.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"4000";s:8:"quantity";s:1:"1";}s:6:"1CvulB";a:5:{s:4:"name";s:50:"Desarollo, Componentes - Pasarela de pagos Stripe.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1300";s:8:"quantity";s:1:"1";}s:6:"f3WM1L";a:5:{s:4:"name";s:94:"Hosting, Compartido - Plan básico - 1gb espacio en disco, 1 dominio, 3 correos electrónicos.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1200";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:5:"price";s:19:"discount_percentage";N;s:14:"discount_price";s:4:"7900";s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"cash";}', '3000', NULL, '2021-06-07 17:30:20', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(2, 'BKLB1H2C', 'rafiknached@gmail.com', 'Rafik', 'a:16:{s:13:"customer_name";s:5:"Rafik";s:17:"customer_business";s:11:"Chan Hachas";s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:21:"rafiknached@gmail.com";s:6:"prefix";s:1:"1";s:14:"customer_phone";s:10:"4389881287";s:8:"products";a:2:{s:6:"vHQntt";a:5:{s:4:"name";s:48:"Desarollo, Páginas Web - Landingpage estática.";s:13:"extra_options";s:14:"chanhachas.com";s:10:"annotation";s:0:"";s:5:"price";s:4:"3000";s:8:"quantity";s:1:"1";}s:6:"9gMNFK";a:5:{s:4:"name";s:94:"Hosting, Compartido - Plan básico - 1gb espacio en disco, 1 dominio, 3 correos electrónicos.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1200";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:5:"price";s:19:"discount_percentage";N;s:14:"discount_price";s:4:"1200";s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"cash";}', '3000', NULL, '2021-06-07 18:00:55', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(3, 'ZGJ7GPLN', 'alexposme99@gmail.com', 'Alex Posadas', 'a:16:{s:13:"customer_name";s:12:"Alex Posadas";s:17:"customer_business";s:24:"Business Holding México";s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:21:"alexposme99@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9982407580";s:8:"products";a:5:{s:6:"Vqrufk";a:5:{s:4:"name";s:54:"Desarollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:17:"businesshm.com.mx";s:10:"annotation";s:0:"";s:5:"price";s:4:"2200";s:8:"quantity";s:1:"1";}s:6:"37zJqt";a:5:{s:4:"name";s:35:"Desarollo, Componentes - Servicios.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1400";s:8:"quantity";s:1:"1";}s:6:"SbwdRM";a:5:{s:4:"name";s:35:"Desarollo, Componentes - Catálogo.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1400";s:8:"quantity";s:1:"1";}s:6:"jb3QM8";a:5:{s:4:"name";s:45:"Desarollo, Dashboard - Cotizaciones y ventas.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"3600";s:8:"quantity";s:1:"1";}s:6:"ekNvWG";a:5:{s:4:"name";s:19:"Componente a medida";s:13:"extra_options";s:0:"";s:10:"annotation";s:6:"Docman";s:5:"price";s:4:"4000";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:5:"price";s:19:"discount_percentage";N;s:14:"discount_price";s:4:"7900";s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"spei";}', '4700', NULL, '2021-04-20 12:10:23', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(4, 'LB3YQLTU', 'alexposme99@gmail.com', 'Alex Posadas', 'a:16:{s:13:"customer_name";s:12:"Alex Posadas";s:17:"customer_business";s:11:"Notaria 110";s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:21:"alexposme99@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9982407580";s:8:"products";a:2:{s:6:"l91QGn";a:5:{s:4:"name";s:45:"Desarollo, Páginas Web - Sección dínamica.";s:13:"extra_options";s:20:"panel.notaria110.com";s:10:"annotation";s:0:"";s:5:"price";s:4:"1700";s:8:"quantity";s:1:"1";}s:6:"BIlJlw";a:5:{s:4:"name";s:19:"Componente a medida";s:13:"extra_options";s:48:"Seguimiento de procesos en un proyecto notarial.";s:10:"annotation";s:0:"";s:5:"price";s:4:"4300";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:2:"no";s:19:"discount_percentage";N;s:14:"discount_price";N;s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"spei";}', '6000', NULL, '2021-04-20 12:28:19', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(5, 'QKWGTDJ0', 'davidgomezmacias@gmail.com', 'Benny', 'a:16:{s:13:"customer_name";s:5:"Benny";s:17:"customer_business";s:5:"Bacab";s:16:"customer_address";N;s:13:"customer_city";s:7:"Cancún";s:11:"customer_cp";N;s:14:"customer_email";s:26:"davidgomezmacias@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9995936979";s:8:"products";a:7:{s:6:"KB9448";a:5:{s:4:"name";s:55:"Desarrollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:5:"Bacab";s:10:"annotation";s:0:"";s:5:"price";s:4:"2200";s:8:"quantity";s:1:"1";}s:6:"IywLOm";a:5:{s:4:"name";s:31:"Desarrollo, Componentes - Blog.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"4000";s:8:"quantity";s:1:"1";}s:6:"909qpp";a:5:{s:4:"name";s:45:"Desarrollo, Componentes - Acerca de nosotros.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"qlZrG2";a:5:{s:4:"name";s:35:"Desarrollo, Componentes - Contacto.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"Oml8Qq";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Proyectos.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"2300";s:8:"quantity";s:1:"1";}s:6:"Cli69A";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Servicios.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1400";s:8:"quantity";s:1:"1";}s:6:"yoBIQA";a:5:{s:4:"name";s:40:"Desarrollo, Componentes - Multilenguaje.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}}s:11:"annotations";s:67:"Se requiere el 50% del total como depósito al iniciar el proyecto.";s:8:"discount";s:10:"percentage";s:19:"discount_percentage";s:2:"60";s:14:"discount_price";N;s:5:"taxes";s:2:"16";s:8:"due_date";N;s:7:"payment";s:7:"deposit";}', '4593.6', NULL, '2021-08-24 15:55:27', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"Gz8FwkMDPrx85urescfxKaadDQEuRGBJC0NEPH2plQzIDEYKXcdRmnXPxYqRoqEro4NTzxqMdTSnyXIPqfMAbM4RouBPM4fzBY9l5V21dR71Xfhwg1bMGsn6GA7AIBYY";}'),
	(7, 'KNPTJD0F', 'davidgomezmacias@gmail.com', 'Jade Chavez', 'a:16:{s:13:"customer_name";s:11:"Jade Chavez";s:17:"customer_business";N;s:16:"customer_address";N;s:13:"customer_city";N;s:11:"customer_cp";N;s:14:"customer_email";s:26:"davidgomezmacias@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9981716076";s:8:"products";a:5:{s:6:"H48T3L";a:5:{s:4:"name";s:23:"Hosting - Plan a medida";s:13:"extra_options";s:54:"25gb espacio en disco, 5 dominios, correos ilimitados.";s:10:"annotation";s:15:"Anual (288 USD)";s:5:"price";s:7:"5872.77";s:8:"quantity";s:1:"1";}s:6:"ROtj4p";a:5:{s:4:"name";s:14:"Licencia Plesk";s:13:"extra_options";s:90:"Panel de administración para servidor, correos electrónicos y certificados de seguridad.";s:10:"annotation";s:15:"Anual (242 USD)";s:5:"price";s:7:"4934.76";s:8:"quantity";s:1:"1";}s:6:"crK5Qk";a:5:{s:4:"name";s:13:"IP dinámicas";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:3:"250";s:8:"quantity";s:1:"2";}s:6:"rslRp6";a:5:{s:4:"name";s:24:"Protección anti-rastreo";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"2400";s:8:"quantity";s:1:"1";}s:6:"Wlovr1";a:5:{s:4:"name";s:42:"Instalación y configuración de servidor.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:3:"200";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:10:"percentage";s:19:"discount_percentage";s:2:"20";s:14:"discount_price";N;s:5:"taxes";N;s:8:"due_date";N;s:7:"payment";s:4:"cash";}', '11126.024', NULL, '2021-08-31 13:12:58', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"um7henppbSwM3yAdkTwjRhoW8mGabi6x7yrmYzBcoVBOtl6eL4uhOPy114h1mBH4nqvfxCS90nhztZpfZML6snDBEpjGCLzTT821ca2Ytz95WSfTbhOZhECHSuNUSSPw";}'),
	(8, 'ZESFRMOE', 'davidgomezmacias@gmail.com', 'Miriam Vega', 'a:16:{s:13:"customer_name";s:11:"Miriam Vega";s:17:"customer_business";s:15:"JC Producciones";s:16:"customer_address";N;s:13:"customer_city";N;s:11:"customer_cp";N;s:14:"customer_email";s:26:"davidgomezmacias@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9982025375";s:8:"products";a:7:{s:6:"ll1Iva";a:5:{s:4:"name";s:55:"Desarrollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:24:"jcproduccionescancun.com";s:10:"annotation";s:0:"";s:5:"price";s:4:"3800";s:8:"quantity";s:1:"1";}s:6:"Qbck0j";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Servicios.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"4699";s:8:"quantity";s:1:"1";}s:6:"iIqkx7";a:5:{s:4:"name";s:35:"Desarrollo, Componentes - Galería.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1600";s:8:"quantity";s:1:"1";}s:6:"OkXMK7";a:5:{s:4:"name";s:45:"Desarrollo, Componentes - Acerca de nosotros.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"19qSrX";a:5:{s:4:"name";s:35:"Desarrollo, Componentes - Contacto.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"cYfOSz";a:5:{s:4:"name";s:46:"Desarrollo, Páginas Web - Sección dínamica.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"2799";s:8:"quantity";s:1:"1";}s:6:"txTvGG";a:5:{s:4:"name";s:102:"Hosting, Compartido - Plan básico - Anual - 1gb espacio en disco, 1 dominio, 3 correos electrónicos.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1200";s:8:"quantity";s:1:"1";}}s:11:"annotations";s:310:"Garantía de sitio web ya hecho, no cargan las imágenes porque el peso y el tamaño son superiores y ocupan mucho espacio de servidor, tarda en entrar o a veces se agota el tiempo de espera y no se accede al sitio web, por el mismo peso, el servido bloquea el tiempo de espera por no agotar el ancho de banda.";s:8:"discount";s:10:"percentage";s:19:"discount_percentage";s:3:"100";s:14:"discount_price";N;s:5:"taxes";s:2:"16";s:8:"due_date";N;s:7:"payment";s:7:"deposit";}', '0', NULL, '2021-09-23 13:40:22', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"MpzG7z1tjJ1onOxfvA4yhKnDpEfERdx60Fil8AzY1uAfnxx7SMra16uivHsCZ9WWjpS5is3Ns58XGHOQE0m6OomvEPfuo4ZS1B6kiysF7cnT2FDEk6RJaHfBpPj1TptI";}'),
	(9, 'ZXDYFWCS', 'pgjauregui@gmail.com', 'Pedro Gonzalez', 'a:16:{s:13:"customer_name";s:14:"Pedro Gonzalez";s:17:"customer_business";s:12:"Living Tulum";s:16:"customer_address";s:116:"Av. Satélite Norte Mza 5 Local 4 (Entre Av. Tulum y Calle Polar Oriente), Col. Centro, 77780, Tulum, Q. Roo, Mexico";s:13:"customer_city";s:5:"Tulum";s:11:"customer_cp";s:5:"77780";s:14:"customer_email";s:20:"pgjauregui@gmail.com";s:6:"prefix";s:2:"52";s:14:"customer_phone";s:10:"9841134398";s:8:"products";a:8:{s:6:"RM4VWu";a:5:{s:4:"name";s:55:"Desarrollo, Páginas Web - Base de sitio web dinámico.";s:13:"extra_options";s:15:"livingtulum.com";s:10:"annotation";s:0:"";s:5:"price";s:4:"2200";s:8:"quantity";s:1:"1";}s:6:"7DRtqV";a:5:{s:4:"name";s:45:"Desarrollo, Componentes - Acerca de nosotros.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"d5Jgel";a:5:{s:4:"name";s:31:"Desarrollo, Componentes - Blog.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"4000";s:8:"quantity";s:1:"1";}s:6:"1OWrFF";a:5:{s:4:"name";s:46:"Desarrollo, Páginas Web - Sección dínamica.";s:13:"extra_options";s:0:"";s:10:"annotation";s:17:"Proceso de compra";s:5:"price";s:4:"1700";s:8:"quantity";s:1:"1";}s:6:"iQN9S8";a:5:{s:4:"name";s:35:"Desarrollo, Componentes - Contacto.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:1:"0";s:8:"quantity";s:1:"1";}s:6:"8Z6Cza";a:5:{s:4:"name";s:40:"Desarrollo, Componentes - Multilenguaje.";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:4:"1100";s:8:"quantity";s:1:"1";}s:6:"wiERQq";a:5:{s:4:"name";s:18:"Meta etiquetas SEO";s:13:"extra_options";s:0:"";s:10:"annotation";s:0:"";s:5:"price";s:3:"600";s:8:"quantity";s:1:"1";}s:6:"2h9tKQ";a:5:{s:4:"name";s:36:"Desarrollo, Componentes - Real Home.";s:13:"extra_options";s:0:"";s:10:"annotation";s:11:"Propiedades";s:5:"price";s:4:"5500";s:8:"quantity";s:1:"1";}}s:11:"annotations";N;s:8:"discount";s:2:"no";s:19:"discount_percentage";N;s:14:"discount_price";N;s:5:"taxes";s:2:"16";s:8:"due_date";N;s:7:"payment";s:4:"spei";}', '17516', NULL, '2021-09-29 22:02:31', 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"QIOUZbTg4rL3uzCKixPe36OpeozZE6Bs84C5RLbDfbvQbe5kLf3fDacOAenTmSI4Ot6391HnRDWVswzjoAXsylUOz9cTw1bEVafXGljElJnW1otPdW1oObPMKLfCpqZa";}');
/*!40000 ALTER TABLE `mysales` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.mysales_payments
CREATE TABLE IF NOT EXISTS `mysales_payments` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_sale` bigint(20) DEFAULT NULL,
  `amount` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `payment` text DEFAULT NULL,
  `attached` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mysales_payments_mysales` (`id_sale`),
  CONSTRAINT `FK_mysales_payments_mysales` FOREIGN KEY (`id_sale`) REFERENCES `mysales` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.mysales_payments: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `mysales_payments` DISABLE KEYS */;
INSERT INTO `mysales_payments` (`id`, `id_sale`, `amount`, `date`, `payment`, `attached`, `__session`) VALUES
	(1, 3, '1500', '2021-04-28', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(2, 3, '1500', '2021-07-06', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(3, 4, '2000', '2021-05-31', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(4, 1, '1500', '2021-06-07', 'cash', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(5, 1, '1500', '2021-07-07', 'deposit', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(6, 2, '1500', '2021-06-07', 'cash', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(7, 2, '1500', '2021-08-05', 'deposit', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(8, 3, '850', '2021-08-14', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f";}'),
	(10, 5, '2296.8', '2021-08-26', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"4byvjBopsx9wdONI86VA9FjFVQ3GRlU3flQzV9rsEvWxvugRTq2BF0Uar1oR5P1O18wTDvq9uRTOQq94OFrdyr4QOHHMUcvLk0w2dMwNBnmAByWwgvspGNqrOOlFnrGh";}'),
	(11, 7, '11126.02', '2021-08-31', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"um7henppbSwM3yAdkTwjRhoW8mGabi6x7yrmYzBcoVBOtl6eL4uhOPy114h1mBH4nqvfxCS90nhztZpfZML6snDBEpjGCLzTT821ca2Ytz95WSfTbhOZhECHSuNUSSPw";}'),
	(12, 5, '2296.80', '2021-09-09', 'spei', NULL, 'a:3:{s:4:"user";s:6:"dgomez";s:2:"id";s:1:"1";s:5:"token";s:128:"006GOW3PhdDtng6jSIqu5iCq9HM6UIyfTaj3IHKy9LbId2rDg4uNrFLSRDGhPYMr1Jjw7BkZ7TYdJv9ujsAN3wyOo9wndLP1vdjJFHBKQid7krRTXqUJYM5fh0vhtyCl";}');
/*!40000 ALTER TABLE `mysales_payments` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.myservices_categories
CREATE TABLE IF NOT EXISTS `myservices_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `description` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.myservices_categories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `myservices_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `myservices_categories` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.myservices
CREATE TABLE IF NOT EXISTS `myservices` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `id_category` bigint(20) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `sm_title` text DEFAULT NULL,
  `sm_description` text DEFAULT NULL,
  `sm_image` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `status` set('draft','published','unpublished','removed') NOT NULL DEFAULT 'published',
  `publication_date` datetime NOT NULL DEFAULT current_timestamp(),
  `author` bigint(20) DEFAULT NULL,
  `lang` tinytext DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_myservices_myservices_categories` (`id_category`),
  KEY `FK_myservices_users` (`author`),
  CONSTRAINT `FK_myservices_myservices_categories` FOREIGN KEY (`id_category`) REFERENCES `myservices_categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_myservices_users` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.myservices: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `myservices` DISABLE KEYS */;
/*!40000 ALTER TABLE `myservices` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `page` text DEFAULT NULL,
  `settings` text DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.pages: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` (`id`, `page`, `settings`, `value`) VALUES
	(1, 'aboutus', '{"name":"Acerca de nosotros"}', NULL),
	(2, 'contact', '{"name":"Contacto"}', NULL);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `title` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.permissions: ~28 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` (`id`, `code`, `title`) VALUES
	(1, '{users_read}', 'Ver los usuarios.'),
	(2, '{users_create}', 'Crear usuarios.'),
	(3, '{users_update}', 'Modificar usuarios.'),
	(4, '{users_delete}', 'Eliminar usuarios.'),
	(5, '{permissions_read}', 'Ver los permisos de usuario.'),
	(6, '{permissions_create}', 'Crear permisos de usuario.'),
	(7, '{permissions_delete}', 'Eliminar permisos de usuario.'),
	(8, '{blog_read}', 'Ver el blog.'),
	(9, '{blog_create}', 'Crear artículos en el blog.'),
	(10, '{blog_update}', 'Editar artículos en el blog.'),
	(11, '{blog_delete}', 'Eliminar artículos en el blog.'),
	(12, '{categories_blog_read}', 'Ver las categorías del blog.'),
	(13, '{categories_blog_create}', 'Crear categorías en el blog.'),
	(14, '{categories_blog_delete}', 'Eliminar categorías del blog.'),
	(15, '{services_read}', 'Ver los servicios.'),
	(16, '{services_create}', 'Crear servicios.'),
	(17, '{services_update}', 'Editar los servicios.'),
	(18, '{services_delete}', 'Eliminar servicios.'),
	(19, '{categories_services_read}', 'Ver las categorías del los servicios.'),
	(20, '{categories_services_create}', 'Crear categorías en los servicios.'),
	(21, '{categories_services_delete}', 'Eliminar categorías del los servicios.'),
	(22, '{services_read}', 'Ver los servicios.'),
	(23, '{services_create}', 'Crear servicios.'),
	(24, '{services_update}', 'Editar servicios.'),
	(25, '{services_delete}', 'Eliminar servicios.'),
	(26, '{categories_services_read}', 'Ver las categorías del los servicios.'),
	(27, '{categories_services_create}', 'Crear categorías en los servicios.'),
	(28, '{categories_services_delete}', 'Eliminar categorías del los servicios.');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.realhomes_amenities
CREATE TABLE IF NOT EXISTS `realhomes_amenities` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.realhomes_amenities: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `realhomes_amenities` DISABLE KEYS */;
/*!40000 ALTER TABLE `realhomes_amenities` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.realhomes_categories
CREATE TABLE IF NOT EXISTS `realhomes_categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.realhomes_categories: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `realhomes_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `realhomes_categories` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.realhomes_locations
CREATE TABLE IF NOT EXISTS `realhomes_locations` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.realhomes_locations: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `realhomes_locations` DISABLE KEYS */;
/*!40000 ALTER TABLE `realhomes_locations` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.realhomes_properties
CREATE TABLE IF NOT EXISTS `realhomes_properties` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `url` text NOT NULL,
  `title` text NOT NULL,
  `id_category` bigint(20) DEFAULT NULL,
  `lang` tinytext DEFAULT NULL,
  `locations` longtext DEFAULT NULL,
  `amenities` longtext DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `attachment` text DEFAULT NULL,
  `id_gallery` bigint(20) DEFAULT NULL,
  `sm_title` text DEFAULT NULL,
  `sm_image` text DEFAULT NULL,
  `sm_description` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `status` set('draft','published','unpublished','removed') NOT NULL DEFAULT 'published',
  `publication_date` datetime NOT NULL DEFAULT current_timestamp(),
  `author` bigint(20) DEFAULT NULL,
  `__session` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_realhomes_realhomes_categories` (`id_category`),
  KEY `FK_realhomes_mygalleries` (`id_gallery`),
  KEY `FK_realhomes_users` (`author`),
  CONSTRAINT `FK_realhomes_mygalleries` FOREIGN KEY (`id_gallery`) REFERENCES `mygalleries` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_realhomes_realhomes_categories` FOREIGN KEY (`id_category`) REFERENCES `realhomes_categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  CONSTRAINT `FK_realhomes_users` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla codemonkey.realhomes_properties: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `realhomes_properties` DISABLE KEYS */;
/*!40000 ALTER TABLE `realhomes_properties` ENABLE KEYS */;

-- Volcando estructura para tabla codemonkey.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) DEFAULT NULL,
  `token` longtext NOT NULL,
  `login_date` datetime DEFAULT NULL,
  `logout_date` datetime DEFAULT NULL,
  `connection` longtext DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla codemonkey.sessions: ~30 rows (aproximadamente)
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` (`id`, `id_user`, `token`, `login_date`, `logout_date`, `connection`) VALUES
	(1, 1, 'dhXwqSgH0O7vHPcljdvIcdnpeND1dYA0rgjAVU1TG3oMY9dKtevYA8e6Y5WkfmrqRPvAiMsdsBzuK95aAcbx4bN6TuZQEBxgZ0RPFl2p8J5kBeVsn5W83Cr8THGpmn4f', '2021-08-11 01:14:49', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36";}'),
	(2, 1, 't4vMOoqCRhbjZ15sis3OXEJlDO262QvlaShAUC8tCGQhLBKM1FOpWrOMFk8Bp9nXwwR5BOvbQ3bNC5gejefVK7wkmlNnvz9IgPYio0fHwZ0HoePvuRGrUmvDKCGHpCDU', '2021-08-12 12:08:28', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36";}'),
	(3, 1, 'QUWpqvPyXNy4u0Vv4YWi8t8YMp9hFMADd1v4EdZqQqIW3lWjiFnm8xUO6C1WKGbc5DwDUMSluXmDoCEAV6w7qhfEpvPcnfRg4YVmGlEKOZtlLFmeE11nEFUg9IwKQsIp', '2021-08-14 10:29:00', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36";}'),
	(4, 1, 'yFEIzc26CYRxim4wDcWqMImkImjGH1MP1wOlX3QWQlr7b8yGTxnGMJmiZbgbLtZuNBOoDu9bEFLCOyXZvPmI81x5ccDqqv1v8D4wBQQzBNHJ6P8s1wx15eu0Otr3MYOE', '2021-08-17 13:54:39', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.131 Safari/537.36";}'),
	(5, 1, 'eHJeUPdx9vQYKFQMTCbgk9NoNMLBOGyi6nJ2Q7QjHidAo1fP2Kh0dj6pxwo8fdvWzHTxmVmR2X6i1fdEWBT3Ik7ZBFJrKq2W52Gom1tiACNFfPh6rfmrFUX4aM6F9ycC', '2021-08-20 11:19:19', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(6, 1, 'Gz8FwkMDPrx85urescfxKaadDQEuRGBJC0NEPH2plQzIDEYKXcdRmnXPxYqRoqEro4NTzxqMdTSnyXIPqfMAbM4RouBPM4fzBY9l5V21dR71Xfhwg1bMGsn6GA7AIBYY', '2021-08-24 15:55:07', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(7, 1, '4byvjBopsx9wdONI86VA9FjFVQ3GRlU3flQzV9rsEvWxvugRTq2BF0Uar1oR5P1O18wTDvq9uRTOQq94OFrdyr4QOHHMUcvLk0w2dMwNBnmAByWwgvspGNqrOOlFnrGh', '2021-08-26 11:41:21', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(8, 1, 'oiEF2nhsS8ocD3hGT9ik9MIJzQpXMbdd5TA1nt3ecfZ71TI1ffYeKN0g7eD0mHuQqFov7G1UnljPHHuo5dUe3b4QMePGLuK6Iuz0JoXpqcKYsvI9tkItNqD2CuuyL6Rq', '2021-08-27 12:27:15', '2021-08-27 13:10:52', 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(9, 1, 'h2zMipqGzG1CeA9mawcYY21N1Eb6w0GBPfpwp3lN7jo1PAac2ImzHQe3iNZKCjWS0riGFX7iPAsidb7JEde3mKcvQVvHgLvzA98FBqDJrAWfnU5KwboCiyZj9MajIMs0', '2021-08-27 13:10:54', '2021-08-27 13:11:08', 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(10, 1, 'Nh8YhOqi7jZLDYt8FoGpt0oY99QUqgAMUjMfuadchdHJIIaCoTchbCwl2ECyh6iLjAgSE53BRJF1mAmDT1Tz3e9C0EoDIm6Vo8EIZLvRvnfCCUFo9Jh0DReLhQUxRiP3', '2021-08-27 13:11:10', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(11, 1, 'L2nFN5cPGx4bm1Ykp4grUambKLs5QaB6vw8ENx8pZFOZ0eQm2BbpNuk2Ynj5jd8Bi1DcuXuupu2GGovT72OV0WYIZZaqDs4PldbOu8JAYKxQT5j7o2dSuw8IL4mg5z2N', '2021-08-29 18:55:21', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(12, 1, 'um7henppbSwM3yAdkTwjRhoW8mGabi6x7yrmYzBcoVBOtl6eL4uhOPy114h1mBH4nqvfxCS90nhztZpfZML6snDBEpjGCLzTT821ca2Ytz95WSfTbhOZhECHSuNUSSPw', '2021-08-30 18:55:32', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(13, 1, 'EQ6PxA2HsPhX001r633g18aZztkFoJGlpKK9F0Jxd6haq11BKWPGyxkuD3HOY1jCrwAFsIfQJ3L5Ci9GK7DxO1t9cw2g0vJQaMe6csetsL34tauqeoKM4KrOVhINrr26', '2021-08-31 18:59:46', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(14, 1, 'r0ADKLSOZ6mIBrbIGXFKnKsthROSJgK0MjcUj2xBghJ5Kjhlp8bjChyR7zrQUiAqWtjkdHr732rBLs7HhPlvT92Fhzb1RD4iJkZEhCw761LO0GFlAYf0wWnepsgpuajo', '2021-09-01 19:16:01', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(15, 1, '1mDohQSWIEEaRnrlzkGqOOyCMKg1tCZyOk94IRGGB3ozqkkaBnk6vq7kwQ3vCTB3DjHk7aEK7pH5XdpsXnSt3yUmSAprQkGUsayIDvdBLO3kaEM5IjZo9mmZcHUjhxtu', '2021-09-07 11:42:21', '2021-09-07 19:10:10', 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(16, 1, 'M4Km7RMgqkOJCLccDAfu4RoEpTEcgwl8m16ezfmwi5VQkd4EToCzUkiNeCafZMaLMqZ7bsi3vwuWuiTGWbfZ4YpzsH1bbjvoFLFRWO5CQWxuLvLXYo6PUjZaPMlsTwJu', '2021-09-07 19:10:12', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:115:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36";}'),
	(17, 1, 'HmvouEJNqt8b2z5szWCCcZ9IKUuPGps69XWVunbYedJO3TzsF8ob87LVKbn0TwxxgDDL0C8lwIFdRgwU5CWRLyhdyjeq5Yf3DWtRI9hFkcNjt3bFFPTdvHWlJjAXsQOA', '2021-09-08 11:54:03', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36";}'),
	(18, 1, '006GOW3PhdDtng6jSIqu5iCq9HM6UIyfTaj3IHKy9LbId2rDg4uNrFLSRDGhPYMr1Jjw7BkZ7TYdJv9ujsAN3wyOo9wndLP1vdjJFHBKQid7krRTXqUJYM5fh0vhtyCl', '2021-09-09 12:49:10', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36";}'),
	(19, 1, 'Eq05ZomatFvRtQ7O78Uuog3LvrdOdqWEu78jM4qEbYhSYVDLwsagcMDyXk5oG5KYEWvy3Ha9mVX0DtujzCr5f22oTgi0NclVozIUTOu3dRs1AlkqKiimhDP1EmJemZeo', '2021-09-13 12:23:28', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36";}'),
	(20, 1, 'H1IvAD89PBqtefbSCgNKuaL0U5PgD6acTkaNPJ5hMXjlsn8pqhGNJyR6xOBtJSB2i5Y4CkqsDgMofur5OcUvD8t6czOZAKMvOqEaZe3ukZWAuGxotBamoUsgh3fBoCpp', '2021-09-15 14:43:32', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(21, 1, 'j6DibSav2vl1C9UyZgkuKppB8ygxQ3MWlVI6i2aL5bz5nPOBNRqesrmmyPSAIHHN62prahaFBYd6sPuwaeM6nHiVPEB9GYs5owe5YFMrqTeZHfnIWtvqOwCDdNtfuoid', '2021-09-17 11:39:36', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(22, 1, 'JqBu5jM7dE981xkbn5wEn0QhQOz2Alc5ZEQS0pYjyelggsg4RYWE9K3vD47JImrK5iQTQbAY5NZe1N8vgW19TjsrTkvxnkEgGfysexpZhHSRH84pGVbe7HghqrrZ7DnC', '2021-09-20 17:28:58', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(23, 1, 'JFM4sfDppZVMY4IYvAvPow3RxzYO3WVrgFDQqPE2F5B90jSFIeDVOV493g4OLNjEo3bzCVTxH7vDkB1McGCQghsNRYFdlwu1DAJP0fjioYHDgararDyL4C8tTOT7faeP', '2021-09-21 19:17:51', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(24, 1, 'MpzG7z1tjJ1onOxfvA4yhKnDpEfERdx60Fil8AzY1uAfnxx7SMra16uivHsCZ9WWjpS5is3Ns58XGHOQE0m6OomvEPfuo4ZS1B6kiysF7cnT2FDEk6RJaHfBpPj1TptI', '2021-09-22 20:40:54', '2021-09-23 19:30:08', 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(25, 1, 'AZNz2iGUQ75NzEs7ezGs7yW7uF6TzIfTEVScpJpm1CvaP4sz47HL8OBBra3oYoN3sRM6UM6zFNquQgU7MlQqTOJKx5BHtTrZgmiW3YbmEhAy0mboxpt93Tt8ZA4lxowA', '2021-09-23 19:30:10', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(26, 1, 'lkMOmBHN45NCTZ6Mpp18gjaeRumLQS93LHNefsBF1twH4r0j6LUahYYuvH63plKkZ91MGHN6yOMzTE6qik8AZ5yaITCFWIba0wrsVMqQ51JMM1k58OHVvALOJqhQUAWg', '2021-09-25 11:08:45', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(27, 1, '0yaTmM9bBBQlW9iVWuzYJ1zYj7pkvnCRSiiiqslkeBUOf60JXKj9LbTL64P4GF1eP932eJeN8GSCDNeJ6x6XXIm5BBPAZ5sMCWmwbdjMd4fB1e8lioi7O6Acvxbc9m4T', '2021-09-27 12:36:46', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(28, 1, '8OS2uKmCNBvTWh2Y7yJMVMdEnoP7cRHKg3YgJYzuQDha8jp5hwleyH04QZ1nfZ86wtjW5bAgL7b2dW9l2Mzb0eKdwJNun8Yp0CrrcXb1JNu2vwVNFIHhCdfW2jWXsVib', '2021-09-28 15:32:38', '2021-09-28 16:07:42', 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(29, 1, 'jwJIttC00JCeVjBnq9hihb3J4nkpbvKWHMQWt29NSroiyUW57XiJw8JTPTMD2am1lHlTDm1BevRH9cRpGI0iHbw8ILAhINIhsMDqH7afRDzdfQxRX56iOIMFnctTlYaV', '2021-09-28 16:07:45', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}'),
	(30, 1, 'QIOUZbTg4rL3uzCKixPe36OpeozZE6Bs84C5RLbDfbvQbe5kLf3fDacOAenTmSI4Ot6391HnRDWVswzjoAXsylUOz9cTw1bEVafXGljElJnW1otPdW1oObPMKLfCpqZa', '2021-09-29 15:41:52', NULL, 'a:5:{s:2:"ip";s:3:"::1";s:7:"browser";s:6:"CHROME";s:6:"device";s:7:"Desktop";s:2:"so";s:3:"WIN";s:15:"HTTP_USER_AGENT";s:114:"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36";}');
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
