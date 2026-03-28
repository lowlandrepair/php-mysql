-- Create users table with the specified structure
CREATE TABLE `users` (
    `id` int(7) NOT NULL AUTO_INCREMENT,
    `name` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    `surname` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    `username` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    `email` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    `password` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    `confirmPassword` varchar(255) NOT NULL COLLATE utf8mb4_general_ci,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
