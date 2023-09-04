-- CREATE database myjackpot;

CREATE TABLE `selectcat` 
( `id` INT NOT NULL AUTO_INCREMENT,
  `selectcat` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `emptitle` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `empdesc` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
  `profilepic` VARCHAR(255) COLLATE utf8_unicode_ci NOT NULL,
     PRIMARY KEY (`id`) )ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;


-- DROP SCHEMA IF EXISTS myjackpot;
CREATE TABLE `admin_user` ( 
     `id` INT NOT NULL AUTO_INCREMENT,
     `username` VARCHAR(25) COLLATE utf8_unicode_ci NOT NULL,
     `email` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
     `password` VARCHAR(10) COLLATE utf8_unicode_ci NOT NULL,
 PRIMARY KEY (`id`) )ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_unicode_ci;
 INSERT INTO `admin_user` (`id`, `username`,`email`, `password`) VALUES
(1, 'subash', 'subashcb7799@gmail.com', 'subash'),
(2, 'anand', 'yanianand571@gmail.com', 'anand');