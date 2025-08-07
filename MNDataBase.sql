CREATE DATABASE  IF NOT EXISTS `mndatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `mndatabase`;
-- MySQL dump 10.13  Distrib 8.0.42, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mndatabase
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tcarrito`
--

DROP TABLE IF EXISTS `tcarrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tcarrito` (
  `IdCarrito` bigint(11) NOT NULL AUTO_INCREMENT,
  `IdUsuario` bigint(11) NOT NULL,
  `IdProducto` bigint(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `FechaCarrito` datetime NOT NULL,
  PRIMARY KEY (`IdCarrito`),
  KEY `FK_Carrito_Usuario` (`IdUsuario`),
  KEY `FK_Carrito_Producto` (`IdProducto`),
  CONSTRAINT `FK_Carrito_Producto` FOREIGN KEY (`IdProducto`) REFERENCES `tproducto` (`IdProducto`),
  CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tcarrito`
--

LOCK TABLES `tcarrito` WRITE;
/*!40000 ALTER TABLE `tcarrito` DISABLE KEYS */;
INSERT INTO `tcarrito` VALUES (54,1,4,1,'2025-08-06 21:00:04');
/*!40000 ALTER TABLE `tcarrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tdetalle`
--

DROP TABLE IF EXISTS `tdetalle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tdetalle` (
  `IdDetalle` bigint(11) NOT NULL AUTO_INCREMENT,
  `IdMaestro` bigint(11) NOT NULL,
  `IdProducto` bigint(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Precio` decimal(18,2) NOT NULL,
  `SubTotal` decimal(18,2) NOT NULL,
  `Impuesto` decimal(18,2) NOT NULL,
  `Total` decimal(18,2) NOT NULL,
  PRIMARY KEY (`IdDetalle`),
  KEY `FK_DetalleMaestro` (`IdMaestro`),
  KEY `FK_DetalleProducto` (`IdProducto`),
  CONSTRAINT `FK_DetalleMaestro` FOREIGN KEY (`IdMaestro`) REFERENCES `tmaestro` (`IdMaestro`),
  CONSTRAINT `FK_DetalleProducto` FOREIGN KEY (`IdProducto`) REFERENCES `tproducto` (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tdetalle`
--

LOCK TABLES `tdetalle` WRITE;
/*!40000 ALTER TABLE `tdetalle` DISABLE KEYS */;
INSERT INTO `tdetalle` VALUES (1,1,4,1,600.00,600.00,78.00,678.00),(2,1,5,2,1000.00,2000.00,260.00,2260.00),(4,2,3,3,400.00,1200.00,156.00,1356.00);
/*!40000 ALTER TABLE `tdetalle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terror`
--

DROP TABLE IF EXISTS `terror`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terror` (
  `IdError` bigint(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(5000) NOT NULL,
  `FechaHora` datetime NOT NULL,
  PRIMARY KEY (`IdError`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terror`
--

LOCK TABLES `terror` WRITE;
/*!40000 ALTER TABLE `terror` DISABLE KEYS */;
INSERT INTO `terror` VALUES (1,'PROCEDURE mndatabase.ValidarInicioSesion2 does not exist','2025-06-18 19:49:23'),(2,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:23'),(3,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:29'),(4,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:30'),(5,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:30'),(6,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:30'),(7,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:31'),(8,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:31'),(9,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:32'),(10,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:32'),(11,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:32'),(12,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:33'),(13,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:33'),(14,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:08:33'),(15,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:10:39'),(16,'Unknown column \'Identificacion2\' in \'field list\'','2025-06-18 20:14:00'),(17,'Unknown column \'pCorreo\' in \'field list\'','2025-07-09 19:01:06'),(18,'PROCEDURE mndatabase.ConsultarProductos does not exist','2025-07-16 18:30:23'),(19,'PROCEDURE mndatabase.ConsultarProductos does not exist','2025-07-16 18:30:25'),(20,'PROCEDURE mndatabase.ConsultarProductos does not exist','2025-07-16 18:30:26'),(21,'PROCEDURE mndatabase.ConsultarProductos does not exist','2025-07-16 18:30:30'),(22,'PROCEDURE mndatabase.ConsultarProductos does not exist','2025-07-16 18:30:33'),(23,'PROCEDURE mndatabase.onsultarUsuarios does not exist','2025-07-23 20:03:29'),(24,'PROCEDURE mndatabase.onsultarUsuarios does not exist','2025-07-23 20:03:31'),(25,'Column \'IdRol\' in field list is ambiguous','2025-07-23 20:07:23'),(26,'PROCEDURE mndatabase.ConsultarRoles does not exist','2025-07-23 20:38:21'),(27,'PROCEDURE mndatabase.ConsultarRoles does not exist','2025-07-23 20:38:23'),(28,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:24:57'),(29,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:21'),(30,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:22'),(31,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:22'),(32,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:22'),(33,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:23'),(34,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:23'),(35,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:24'),(36,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:24'),(37,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:25'),(38,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:25'),(39,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:26'),(40,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:26'),(41,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:27'),(42,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:27'),(43,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:27'),(44,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:25:27'),(45,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:15'),(46,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:16'),(47,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:17'),(48,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:17'),(49,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:18'),(50,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:18'),(51,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:26:19'),(52,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:27:40'),(53,'Cannot add or update a child row: a foreign key constraint fails (`mndatabase`.`tcarrito`, CONSTRAINT `FK_Carrito_Usuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`))','2025-07-30 20:29:02'),(54,'La cantidad agregada supera el inventario del producto','2025-08-06 20:33:36'),(55,'La cantidad agregada supera el inventario del producto','2025-08-06 20:34:01'),(56,'La cantidad agregada supera el inventario del producto','2025-08-06 20:58:58');
/*!40000 ALTER TABLE `terror` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmaestro`
--

DROP TABLE IF EXISTS `tmaestro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tmaestro` (
  `IdMaestro` bigint(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `IdUsuario` bigint(11) NOT NULL,
  `Total` decimal(18,2) NOT NULL,
  PRIMARY KEY (`IdMaestro`),
  KEY `FK_MaestroUsuario` (`IdUsuario`),
  CONSTRAINT `FK_MaestroUsuario` FOREIGN KEY (`IdUsuario`) REFERENCES `tusuario` (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmaestro`
--

LOCK TABLES `tmaestro` WRITE;
/*!40000 ALTER TABLE `tmaestro` DISABLE KEYS */;
INSERT INTO `tmaestro` VALUES (1,'2025-08-06 20:55:55',1,2938.00),(2,'2025-08-06 20:59:05',1,1356.00);
/*!40000 ALTER TABLE `tmaestro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tproducto`
--

DROP TABLE IF EXISTS `tproducto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tproducto` (
  `IdProducto` bigint(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`IdProducto`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tproducto`
--

LOCK TABLES `tproducto` WRITE;
/*!40000 ALTER TABLE `tproducto` DISABLE KEYS */;
INSERT INTO `tproducto` VALUES (3,'PlayStation 4 ',400.00,'Consola de videojuegos del año 2018',0,_binary '','/Curso/Views/ImagenProductos/1.png'),(4,'PlayStation 5',600.00,'Consolo más nueva',11,_binary '','/Curso/Views/ImagenProductos/2.png'),(5,'PlayStation 6',1000.00,'Esto no existe pero igual lo vendemos',0,_binary '','/Curso/Views/ImagenProductos/2.png');
/*!40000 ALTER TABLE `tproducto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trol`
--

DROP TABLE IF EXISTS `trol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `trol` (
  `IdRol` int(11) NOT NULL AUTO_INCREMENT,
  `NombreRol` varchar(50) NOT NULL,
  PRIMARY KEY (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trol`
--

LOCK TABLES `trol` WRITE;
/*!40000 ALTER TABLE `trol` DISABLE KEYS */;
INSERT INTO `trol` VALUES (1,'Usuario Regular'),(2,'Usuario Administrador');
/*!40000 ALTER TABLE `trol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tusuario`
--

DROP TABLE IF EXISTS `tusuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tusuario` (
  `IdUsuario` bigint(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Identificacion` varchar(20) NOT NULL,
  `Contrasenna` varchar(10) NOT NULL,
  `IdRol` int(11) NOT NULL,
  `Estado` bit(1) NOT NULL,
  PRIMARY KEY (`IdUsuario`),
  KEY `FK_tusuario_trol` (`IdRol`),
  CONSTRAINT `FK_tusuario_trol` FOREIGN KEY (`IdRol`) REFERENCES `trol` (`IdRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tusuario`
--

LOCK TABLES `tusuario` WRITE;
/*!40000 ALTER TABLE `tusuario` DISABLE KEYS */;
INSERT INTO `tusuario` VALUES (1,'CALVO CASTILLO EDUARDO JOSE','ecalvo90415@ufide.ac.cr','304590415','90415',1,_binary ''),(2,'HEBLYN JOSUE NAVARRO BARRANTES','hnavarro60373@ufide.ac.cr','604460373','60373',2,_binary '');
/*!40000 ALTER TABLE `tusuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'mndatabase'
--
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarContrasenna` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarContrasenna`(pIdUsuario bigint(11),
     pContrasenna varchar(10))
BEGIN

	UPDATE 	tusuario
	SET 	Contrasenna = pContrasenna
    WHERE 	IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarPerfilUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarPerfilUsuario`(pIdUsuario bigint(11),
	 pNombre varchar(255),
	 pCorreo varchar(100),
     pIdentificacion varchar(20),
     pIdRol int(11))
BEGIN

	UPDATE tusuario
    SET Nombre = pNombre,
        Correo = pCorreo,
        Identificacion = pIdentificacion,
        IdRol = CASE WHEN pIdRol != -1 THEN pIdRol ELSE IdRol END
	WHERE IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ActualizarProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarProducto`(pIdProducto bigint(11),
	 pNombre varchar(100),
	 pDescripcion varchar(1000),
     pPrecio decimal(10,2),
     pCantidad int(11),
     pImagen varchar(255))
BEGIN

	UPDATE 	tproducto
	SET		Nombre = pNombre,
			Precio = pPrecio,
			Descripcion = pDescripcion,
			Cantidad = pCantidad,
			Imagen = CASE WHEN pImagen != '' THEN pImagen ELSE Imagen END
	WHERE 	IdProducto = pIdProducto;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `AgregarCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `AgregarCarrito`(pIdUsuario BIGINT(11),
	 pIdProducto BIGINT(11))
BEGIN

	DECLARE cantidadActual INT;
	DECLARE cantidadInventario INT;

	IF NOT EXISTS (SELECT 1 FROM tcarrito 
		WHERE 	IdUsuario = pIdUsuario
			AND IdProducto = pIdProducto) 
	THEN

		INSERT INTO tcarrito (IdUsuario, IdProducto, Cantidad, FechaCarrito)
		VALUES (pIdUsuario, pIdProducto, 1, NOW());
    
    ELSE
           
		/*CANTIDAD ACTUAL*/
        SELECT  Cantidad + 1 INTO cantidadActual
        FROM 	tcarrito
        WHERE	IdUsuario = pIdUsuario
			AND IdProducto = pIdProducto;

		/*CANTIDAD INVENTARIO*/
		SELECT  Cantidad INTO cantidadInventario
        FROM 	tproducto
        WHERE	IdProducto = pIdProducto;
    
		IF(cantidadActual <= cantidadInventario) THEN
    
			UPDATE 	tcarrito
			SET		Cantidad = Cantidad + 1,
					FechaCarrito = NOW()
			WHERE 	IdUsuario = pIdUsuario
				AND IdProducto = pIdProducto;
	
		ELSE
        
			SIGNAL SQLSTATE '45000'
			SET MESSAGE_TEXT = 'La cantidad agregada supera el inventario del producto';
    
		END IF;

    END IF;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CambiarEstadoProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CambiarEstadoProducto`(pIdProducto bigint(11))
BEGIN

	UPDATE tproducto
    SET   Estado = CASE WHEN Estado = 1 THEN 0 ELSE 1 END
	WHERE IdProducto = pIdProducto;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `CambiarEstadoUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `CambiarEstadoUsuario`(pIdUsuario bigint(11))
BEGIN

	UPDATE tusuario
    SET   Estado = CASE WHEN Estado = 1 THEN 0 ELSE 1 END
	WHERE IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarCarrito`(pIdUsuario bigint(11))
BEGIN

	SELECT 	IdCarrito,
			IdUsuario,
            C.IdProducto,
			P.Nombre,
			IFNULL(C.Cantidad,0) 'Cantidad',
            IFNULL(P.Precio,0) 'Precio',
			FechaCarrito,
            IFNULL((C.Cantidad * P.Precio),0) 'SubTotal',
            IFNULL(((C.Cantidad * P.Precio) * 0.13),0) 'Impuesto',
            IFNULL(((C.Cantidad * P.Precio) * 1.13),0) 'Total'
	FROM 	TCarrito C
    INNER 	JOIN TProducto P ON C.IdProducto = P.IdProducto
    WHERE 	IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarInfoProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarInfoProducto`(pIdProducto bigint(11))
BEGIN

	SELECT 	IdProducto,
			Nombre,
			Precio,
			Descripcion,
			Cantidad,
			Estado,
			Imagen
	FROM 	tproducto
	WHERE 	IdProducto = pIdProducto;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarInfoUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarInfoUsuario`(pIdUsuario bigint(11))
BEGIN

	SELECT	IdUsuario,
			Nombre,
            Correo,
            Identificacion,
            Contrasenna,
			Estado,
			U.IdRol,
            R.NombreRol,
            (CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END) 'EstadoDescripcion'
	FROM 	tusuario U
    INNER 	JOIN tRol R ON U.IdRol = R.IdRol
	WHERE 	IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarProductos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarProductos`(pEstado int(11))
BEGIN

	SELECT 	IdProducto,
			Nombre,
			Precio,
			Descripcion,
			Cantidad,
			Estado,
            (CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END) 'EstadoDescripcion',
			Imagen
	FROM 	tproducto
    WHERE 	Estado = CASE WHEN pEstado = -1 THEN Estado ELSE pEstado END;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarResumenCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarResumenCarrito`(pIdUsuario bigint(11))
BEGIN

	SELECT 	IFNULL(SUM((C.Cantidad * P.Precio) * 1.13),0) 'Total',
			IFNULL(SUM(C.Cantidad),0) 'Cantidad'
	FROM 	TCarrito C
    INNER 	JOIN TProducto P ON C.IdProducto = P.IdProducto
    WHERE 	IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarRoles` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarRoles`()
BEGIN

	SELECT	IdRol,
            NombreRol
	FROM 	tRol;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ConsultarUsuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ConsultarUsuarios`()
BEGIN

	SELECT	IdUsuario,
			Nombre,
            Correo,
            Identificacion,
            Contrasenna,
            Estado,
			U.IdRol,
            R.NombreRol,
            (CASE WHEN Estado = 1 THEN 'Activo' ELSE 'Inactivo' END) 'EstadoDescripcion'
	FROM 	tusuario U
    INNER JOIN tRol R ON U.IdRol = R.IdRol;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `EliminarProductoCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarProductoCarrito`(pIdUsuario bigint(11), pIdProducto bigint(11))
BEGIN

	DELETE FROM TCARRITO
	WHERE 	IdProducto = pIdProducto
		AND IdUsuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RealizarPagoCarrito` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RealizarPagoCarrito`(pIdUsuario bigint(11))
BEGIN

	/*Maestro*/
    INSERT 	INTO tmaestro(fecha,IdUsuario,Total)
	SELECT 	NOW(), C.IdUSuario, IFNULL(SUM((C.Cantidad * P.Precio) * 1.13),0)
    FROM tcarrito C
    INNER JOIN tproducto P ON C.IdProducto = P.IdProducto
    WHERE IdUSuario = pIdUsuario;

    /*Detalle*/
    INSERT 	INTO tdetalle(IdMaestro,IdProducto,Cantidad,Precio,SubTotal,Impuesto,Total)
	SELECT 	LAST_INSERT_ID(),
			C.IdProducto,
            C.Cantidad,
            P.Precio,
            IFNULL((C.Cantidad * P.Precio),0),
            IFNULL(((C.Cantidad * P.Precio) * 0.13),0),
            IFNULL(((C.Cantidad * P.Precio) * 1.13),0)
    FROM tcarrito C
    INNER JOIN tproducto P ON C.IdProducto = P.IdProducto
    WHERE IdUSuario = pIdUsuario;

    /*Producto*/
    UPDATE 	tproducto P
    INNER JOIN	tcarrito C ON C.IdProducto = P.IdProducto
    SET P.Cantidad = P.Cantidad - C.Cantidad
    WHERE IdUSuario = pIdUsuario;
    
    /*Carrito*/
    DELETE FROM tcarrito
    WHERE IdUSuario = pIdUsuario;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarError` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarError`(pDescripcion varchar(5000))
BEGIN

	INSERT INTO terror(Descripcion,FechaHora)
	VALUES (pDescripcion,NOW());

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarProducto` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarProducto`(pNombre varchar(100),
	 pDescripcion varchar(1000),
     pPrecio decimal(10,2),     
     pCantidad int,
	 pImagen varchar(255))
BEGIN

	INSERT INTO tproducto (Nombre,Precio,Descripcion,Cantidad,Estado,Imagen)
	VALUES (pNombre,pPrecio,pDescripcion,pCantidad,1,pImagen);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `RegistrarUsuario` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `RegistrarUsuario`(pNombre varchar(255),
	 pCorreo varchar(100),
     pIdentificacion varchar(20),
     pContrasenna varchar(10))
BEGIN

	INSERT INTO tusuario(Nombre,Correo,Identificacion,Contrasenna,IdRol,Estado)
	VALUES (pNombre,pCorreo,pIdentificacion,pContrasenna,1,1);

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ValidarCorreo` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarCorreo`(pCorreo varchar(100))
BEGIN

	SELECT	Nombre,
            IdUsuario
	FROM 	tusuario
	WHERE 	Correo = pCorreo;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `ValidarInicioSesion` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarInicioSesion`(pCorreo varchar(100),
     pContrasenna varchar(10))
BEGIN

	SELECT	IdUsuario,
			Nombre,
			Correo,
			Identificacion,
            Contrasenna,
            U.IdRol,
            NombreRol
	FROM 	tusuario U
    INNER JOIN trol R ON U.IdRol = R.IdRol
	WHERE 	Correo = pCorreo
		AND Contrasenna = pContrasenna
        AND Estado = 1;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-08-06 22:09:06
