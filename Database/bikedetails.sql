-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 12:27 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--creating table bikedetails
CREATE TABLE `bikedetails` (
	`Serial_number` INT(50) NOT NULL AUTO_INCREMENT,
	`Bike_name` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`Model` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`Color` VARCHAR(30) NOT NULL,
	PRIMARY KEY (`Serial_number`)
);

--inserting values
INSERT INTO `bikes` (`Serial_number`, `Bike_name`, `Model`, `Color`) values (1, Himalayan, 1230, Black)

--creating table for administrator login
CREATE TABLE `log` (
	`user_id` INT(50) NOT NULL AUTO_INCREMENT,
	`mail_id` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
	`password` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
	PRIMARY KEY (`user_id`)
);

--inserting login credentials
INSERT INTO log (`user_id`, `mail_id`, `password`) values ('user_id','mail_id','password');

--creating contact table
CREATE TABLE `contact` (
	`name` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`company` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`email` VARCHAR(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
	`phone` INT(30) NOT NULL,
	`message` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB;

--inserting values by user
INSERT INTO contact (`name`, `copmany`, `email`, `phone`, `messsage`) values ('name','copmany','email','phone','messsage');