<?php


    $host = "localhost";
    $db = "movie";
    $user = "root";
    $pass = "";


    try{
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            surname VARCHAR(255) NOT NULL,
            username VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            confirm_password VARCHAR(255) NOT NULL
        );


        CREATE TABLE IF NOT EXISTS movies (
            id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            m_name VARCHAR(255) NOT NULL,
            m_desc VARCHAR(255) NOT NULL,
            m_category VARCHAR(255) NOT NULL,
            m_year VARCHAR(255) NOT NULL
        );


        CREATE TABLE IF NOT EXISTS bookings (
            id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
            user_id INT(20) NOT NULL,
            movie_id INT(20) NOT NULL,
            nr_tickets INT(20) NOT NULL,
            date VARCHAR(255) NOT NULL,
            time VARCHAR(255) NOT NULL
        );
        
        
        INSERT INTO users (name, surname, username, email, password, confirm_password) VALUES
        ('Lulush', 'Lulushi', 'lulush.lulushi', 'lulush.lulushi@example.com', 'password123', 'password123'),
        ('Selena', 'Selenaqi', 'selena.selenaqi', 'selena.selenaqi@example.com', 'password456', 'password456');

        INSERT INTO movies (m_name, m_desc, m_category, m_year) VALUES
        ('SR', 'Two men bond', 'Drama', '1994'),
        ('GF', 'Vito transfers control', 'Drama', '1972');

        INSERT INTO bookings (user_id, movie_id, nr_tickets, date, time) VALUES
        (1, 1, 2, '2025-10-14', '19:00'),
        (2, 2, 1, '2025-10-15', '20:00');
        ";


        $conn->exec($sql);


        echo("Tables created successfully");
        
    }catch(Exception $e){


        echo("Error: " . $e->getMessage());


    }
?>