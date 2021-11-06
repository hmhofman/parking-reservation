-- Valentina Studio --
-- MySQL dump --
-- ---------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- ---------------------------------------------------------


-- CREATE DATABASE "example_app" ---------------------------
CREATE DATABASE IF NOT EXISTS `example_app` CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `example_app`;
-- ---------------------------------------------------------


-- CREATE TABLE "reservation" ----------------------------------
CREATE TABLE `reservation`( 
	`id` Int( 0 ) AUTO_INCREMENT NOT NULL,
	`arrival` DateTime NOT NULL,
	`departure` DateTime NOT NULL,
	`status` Int( 0 ) NOT NULL,
	`parking_id` Int( 0 ) NOT NULL,
	`spot` Int( 0 ) NOT NULL,
	`license_plate` VarChar( 15 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
	PRIMARY KEY ( `id` ) )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- CREATE TABLE "parking" --------------------------------------
CREATE TABLE `parking`( 
	`id` Int( 0 ) NOT NULL,
	`location` Int( 0 ) NOT NULL,
	`spaces` Int( 0 ) NOT NULL,
	`description` VarChar( 255 ) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL )
CHARACTER SET = utf8mb4
COLLATE = utf8mb4_0900_ai_ci
ENGINE = InnoDB;
-- -------------------------------------------------------------


-- Dump data of "reservation" ------------------------------
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */

BEGIN;

INSERT INTO `reservation`(`id`,`parking_id`,`arrival`,`departure`,`status`,`spot`,`license_plate`) VALUES 
( '1', '1', '2021-11-06 12:51:10', '2021-11-06 12:51:10', '8', '1', 'AA-100-A' );
COMMIT;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */

-- ---------------------------------------------------------


-- Dump data of "parking" ----------------------------------
/*!40000 ALTER TABLE `parking` DISABLE KEYS */

BEGIN;

INSERT INTO `parking`(`id`,`location`,`spaces`,`description`) VALUES 
( '1', '1', '360', 'Schiphol P1' );
COMMIT;
/*!40000 ALTER TABLE `parking` ENABLE KEYS */

-- ---------------------------------------------------------


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- ---------------------------------------------------------


