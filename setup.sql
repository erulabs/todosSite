CREATE DATABASE todosDB;

CREATE USER 'todosuser'@'localhost' IDENTIFIED BY 'todospasswd';
GRANT ALL PRIVILEGES ON todosDB.* TO 'todosuser'@'localhost';

CREATE TABLE `todosDB`.`todos` (
	`id` int(11) NOT NULL auto_increment,
	`task` TEXT,
	`dateAdded` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	`dateCompleted` DATETIME DEFAULT NULL,
	`priority` SET('low', 'medium', 'high'),
	primary KEY (id)
);