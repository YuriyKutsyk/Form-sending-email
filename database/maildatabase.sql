-- SQL Dump
-- Table structure for table `mail`

CREATE TABLE `mail` (
                        `id` int NOT NULL AUTO_INCREMENT,
                        `email_from` varchar(50) NOT NULL,
                        `email_to` varchar(50) NOT NULL,
                        `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                        `email_cc` varchar(50) DEFAULT NULL,
                        `user_agent` varchar(200) NOT NULL,
                        `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                        `ip` varchar(15) NOT NULL,
                        `UUID` varchar(36) NOT NULL,
                        PRIMARY KEY (`id`),
                        UNIQUE KEY `UUID` (`UUID`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci



--
-- Dumping data for table `moviedetails`
--
INSERT INTO mail(email_from, email_to, email_cc, user_agent, ip, UUID) VALUES
('test@gmail.com', 'alex@gmail.com', 'alex@gmail.com', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36', '127.0.0.1', 'fcfb41d5-8230-4d14-bec3-19a641f6f823');
