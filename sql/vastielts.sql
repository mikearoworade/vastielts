-- CREATE DATABASE vastielts;

-- GRANT ALL PRIVILEGES ON vastielts.* TO 'vast'@'localhost';

-- USE vastielts;

CREATE TABLE IF NOT EXISTS `users` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    image VARCHAR(255),
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,  -- Added column to store the hashed password
    gender ENUM('male', 'female', 'other') NOT NULL,
    role ENUM('admin', 'user') DEFAULT 'user',
    created_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- $password = password_hash('admin', PASSWORD_BCRYPT);
INSERT INTO `users` (firstname, lastname, image, username, email, password, gender, role, created_date)
VALUES ('Admin', 'User', NULL, 'admin', 'admin@example.com', '$2y$10$SRdZPbVoXzXKYco7XWMaa.hinF2P/zKY2mkKHc7hk7AUhb88JPiIG', 'male', 'admin', NOW());