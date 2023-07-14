SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mi_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `cedula` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `cedula`) VALUES
(1, 'Pepito', 'Perez', 100000000),
(2, 'Camilo', 'Gutiérrez', 200000000),
(3, 'José', 'Pardo', 300000000),
(4, 'Nicolás', 'Pérez', 400000000),
(5, 'ANGEL', 'MENDOZA', 500000000),
(6, 'Diego', 'Rodriguez', 6000000),
(7, 'Hector', 'Beltran', 70000000),
(9, 'Claudia', 'Suarez', 800000000),
(13, 'Julian', 'Acosta', 9000000),
(14, 'Wilmer', 'Alexis', 2147483647),
(15, 'JHOAN', 'CAMACHO', 1200000),
(16, 'MARIANA', 'GARCIA', 1300000),
(17, 'BRAYAN', 'MARTINEZ', 1400000),
(18, 'Laura', 'Espitia', 1500000);
(19, 'Karen', 'Ramirez', 1900000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
