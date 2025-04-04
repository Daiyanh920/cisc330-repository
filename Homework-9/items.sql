CREATE DATABASE IF NOT EXISTS amisesh;

CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    type VARCHAR(50) NOT NULL
);

INSERT INTO products (name, type) VALUES
('Tteokbokki', 'Korean'),
('Samosa', 'Indian'),
('Pho', 'Vietnamese'),
('Sushi', 'Japanese'),
('Momo', 'Nepalese');
