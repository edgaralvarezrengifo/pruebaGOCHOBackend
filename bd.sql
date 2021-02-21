--pruebatecnica
--eeGRNfBYLGcSJDx2

CREATE DATABASE  pruebatecnica;

USE pruebatecnica;

-- Estructura de tabla para la tabla `users`

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` int(100) NOT NULL,
  `password` int(100) NOT NULL,
  `api_token` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


  ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


-- Estructura de tabla para la tabla `tasks`

 CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_at` timestamp NOT NULL,
  `expiration_date` date NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



 -- Indices de la tabla `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

 ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);


  -- AUTO_INCREMENT de la tabla `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;