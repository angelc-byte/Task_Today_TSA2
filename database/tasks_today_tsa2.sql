CREATE DATABASE IF NOT EXISTS `tasks_today_tsa2` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tasks_today_tsa2`;

DROP TABLE IF EXISTS `tasks`;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`), UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `tasks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `task_date` date NOT NULL,
  `is_archived` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`username`,`password`,`full_name`,`email`,`created_at`,`updated_at`) VALUES
('angel','$2y$10$aang1uteKf0fzWluCcADYe3QtP7FYO2TZB62zv7zavU/jwXc71qj6','Angel Clarise C. Tolentino','angel.tolentino@example.com',NOW(),NOW());

INSERT INTO `tasks` (`title`,`description`,`status`,`task_date`,`is_archived`,`created_at`,`updated_at`) VALUES
('Review project requirements','Check all TSA2 requirements before implementation.','completed',CURDATE(),0,NOW(),NOW()),
('Test authentication flow','Verify logged-out redirects and logged-in management actions.','pending',CURDATE(),0,NOW(),NOW()),
('Prepare submission package','Review the repository, database, README, and documentation.','pending',DATE_ADD(CURDATE(), INTERVAL 1 DAY),0,NOW(),NOW());

