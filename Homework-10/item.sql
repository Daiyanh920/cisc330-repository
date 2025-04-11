CREATE DATABASE IF NOT EXISTS homework10_db;
USE homework10_db;

CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL
);

INSERT INTO products (name, price) VALUES
('Sample Product 1', 10.00),
('Sample Product 2', 25.50);