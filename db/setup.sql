CREATE TABLE `project_management`.`projects` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)
CHARACTER SET utf8;

CREATE TABLE `project_management`.`tasks` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `project_id` INT NOT NULL,
  `name` varchar(255) NOT NULL,
  `due_at` timestamp NOT NULL,
  `completed` boolean NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
)
CHARACTER SET utf8;
