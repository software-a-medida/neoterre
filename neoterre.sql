-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-02-2022 a las 12:53:50
-- Versión del servidor: 10.3.31-MariaDB-0+deb10u1
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `neoterre_v2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
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
  `__session` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id`, `url`, `title`, `id_category`, `image`, `content`, `sm_title`, `sm_description`, `sm_image`, `tags`, `status`, `publication_date`, `author`, `__session`) VALUES
(1, 'prueba', 'Prueba', NULL, 'img-test-2_FQFmsci4.jpg', '\"<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,<\\/p>\"', NULL, NULL, NULL, NULL, 'published', '2022-02-14 14:54:09', 1, 'a:3:{s:4:\"user\";s:6:\"dgomez\";s:2:\"id\";s:1:\"1\";s:5:\"token\";s:128:\"5NqSmaJK6SESUL6y2Tdmn25Iy3PPUEMnkKp79QkzeH3Qpfd6j8f6EgZ8onoDqbKQcxMxoDn0hloeLeD81YGNc2KWJJtVtG2ebWLIfTD7e3gFYf4sxggv5cbzGogcbGSv\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `__session` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `code`, `title`) VALUES
(1, '{sysadmin}', 'Administrador de sistemas'),
(2, '{administrator}', 'Administrador'),
(11, '{customer}', 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `media`
--

CREATE TABLE `media` (
  `id` bigint(20) NOT NULL,
  `type` text DEFAULT NULL,
  `media` text DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `__session` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `media`
--

INSERT INTO `media` (`id`, `type`, `media`, `date`, `__session`) VALUES
(1, 'image/jpeg', 'img-test-1_GXtzYVtt.jpg', '2022-02-14 14:54:09', 'a:3:{s:4:\"user\";s:6:\"dgomez\";s:2:\"id\";s:1:\"1\";s:5:\"token\";s:128:\"5NqSmaJK6SESUL6y2Tdmn25Iy3PPUEMnkKp79QkzeH3Qpfd6j8f6EgZ8onoDqbKQcxMxoDn0hloeLeD81YGNc2KWJJtVtG2ebWLIfTD7e3gFYf4sxggv5cbzGogcbGSv\";}'),
(2, 'image/jpeg', 'img-test-2_FQFmsci4.jpg', '2022-02-14 16:21:33', 'a:3:{s:4:\"user\";s:6:\"dgomez\";s:2:\"id\";s:1:\"1\";s:5:\"token\";s:128:\"awQTJJVv7P84KOsihTBDVbWcj0vYI6Us436U4kU4nm0vkJbBntKyPjO1TwwvP3pb8PB39xkSHmlh7RCFWQukCvgYYGAv1Veayg5gg0TryRibwceY80iItmgdPAC2wFkB\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permissions`
--

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
(14, '{categories_blog_delete}', 'Eliminar categorías del blog.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` bigint(20) NOT NULL,
  `id_user` bigint(20) DEFAULT NULL,
  `token` longtext NOT NULL,
  `login_date` datetime DEFAULT NULL,
  `logout_date` datetime DEFAULT NULL,
  `connection` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `id_user`, `token`, `login_date`, `logout_date`, `connection`) VALUES
(1, 1, '5NqSmaJK6SESUL6y2Tdmn25Iy3PPUEMnkKp79QkzeH3Qpfd6j8f6EgZ8onoDqbKQcxMxoDn0hloeLeD81YGNc2KWJJtVtG2ebWLIfTD7e3gFYf4sxggv5cbzGogcbGSv', '2022-02-14 14:15:36', NULL, 'a:5:{s:2:\"ip\";s:3:\"::1\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36\";}'),
(2, 1, 'awQTJJVv7P84KOsihTBDVbWcj0vYI6Us436U4kU4nm0vkJbBntKyPjO1TwwvP3pb8PB39xkSHmlh7RCFWQukCvgYYGAv1Veayg5gg0TryRibwceY80iItmgdPAC2wFkB', '2022-02-14 16:16:06', NULL, 'a:5:{s:2:\"ip\";s:14:\"187.189.49.146\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36\";}'),
(3, 2, 'dBPknUWv1diYtcl2oxBGnDrtw7zUcmMaNiaTwWUbcU9DfCzgKp6GxUaMWQA1HCcrTFkuNbLcHX93q9OhJrwculBN7f8evkgLOlOytD2tw7CftbI1HtMAt0LDwTlUmoOQ', '2022-02-17 10:43:40', NULL, 'a:5:{s:2:\"ip\";s:15:\"187.190.174.153\";s:7:\"browser\";s:6:\"CHROME\";s:6:\"device\";s:7:\"Desktop\";s:2:\"so\";s:3:\"WIN\";s:15:\"HTTP_USER_AGENT\";s:114:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/98.0.4758.82 Safari/537.36\";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` text NOT NULL,
  `name` text DEFAULT NULL,
  `email` text NOT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `password` text NOT NULL,
  `id_level` bigint(20) DEFAULT NULL,
  `permissions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `phone`, `password`, `id_level`, `permissions`) VALUES
(1, 'dgomez', 'David Miguel Gómez Macías', 'davidgomezmacias@gmail.com', 529982904203, '2974a468ca7f3af0eb9ed1214f2110685db3029b:CAxsVkdEPGx7jf4jJTLKg0WHr7HCbMoF9DkTYd7WXP7ANG3QD1igtGAoQZnMhtJs', 1, 'a:14:{i:0;s:12:\"{users_read}\";i:1;s:14:\"{users_create}\";i:2;s:14:\"{users_update}\";i:3;s:14:\"{users_delete}\";i:4;s:18:\"{permissions_read}\";i:5;s:20:\"{permissions_create}\";i:6;s:20:\"{permissions_delete}\";i:7;s:11:\"{blog_read}\";i:8;s:13:\"{blog_create}\";i:9;s:13:\"{blog_update}\";i:10;s:13:\"{blog_delete}\";i:11;s:22:\"{categories_blog_read}\";i:12;s:24:\"{categories_blog_create}\";i:13;s:24:\"{categories_blog_delete}\";}'),
(2, 'neoterremx', 'Neoterre', 'info@neoterre.mx', 52, '21b9ecbecbb8db38625b43557a640cc8c2ec336d:rN24PfttC2UbBOlWhi2KFVFeHDfGYygAugMQFJwVv5xzpeseIMKGlfNXlTTlB9yG', 2, 'a:14:{i:0;s:12:\"{users_read}\";i:1;s:14:\"{users_create}\";i:2;s:14:\"{users_update}\";i:3;s:14:\"{users_delete}\";i:4;s:18:\"{permissions_read}\";i:5;s:20:\"{permissions_create}\";i:6;s:20:\"{permissions_delete}\";i:7;s:11:\"{blog_read}\";i:8;s:13:\"{blog_create}\";i:9;s:13:\"{blog_update}\";i:10;s:13:\"{blog_delete}\";i:11;s:22:\"{categories_blog_read}\";i:12;s:24:\"{categories_blog_create}\";i:13;s:24:\"{categories_blog_delete}\";}');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_blog_blog_categories` (`id_category`),
  ADD KEY `FK_blog_users` (`author`);

--
-- Indices de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`id_level`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_blog_blog_categories` FOREIGN KEY (`id_category`) REFERENCES `blog_categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `FK_blog_users` FOREIGN KEY (`author`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD CONSTRAINT `sessions_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
