-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20230127.4260efdc58
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-07-2023 a las 17:49:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epico_items`
--

CREATE TABLE `epico_items` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `cost_price` decimal(15,2) NOT NULL,
  `unit_price` decimal(15,2) NOT NULL,
  `pic_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `epico_items`
--

INSERT INTO `epico_items` (`name`, `category`, `cost_price`, `unit_price`, `pic_filename`) VALUES
('la divina comedia', 'academico literatura', 175000.00, 12000.00, 'http://localhost/CRUD_TEST/uploads/la divina comedia.jpg'),
('Yo robot', 'Tecnologia', 56000.00, 1500.00, 'http://localhost/CRUD_TEST/uploads/yo robot.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
