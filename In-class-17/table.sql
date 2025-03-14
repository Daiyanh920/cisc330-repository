CREATE DATABASE cisc3300;
USE cisc3300;

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    category VARCHAR(50) NOT NULL,
    transaction_date DATE NOT NULL,
    description TEXT
);


INSERT INTO transactions (user_id, amount, category, transaction_date, description)
VALUES 
    (1, 250.00, 'Rent', '2025-03-01', 'Monthly apartment rent'),
    (1, 50.75, 'Groceries', '2025-03-05', 'Walmart purchase'),
    (2, 20.00, 'Transport', '2025-03-06', 'Subway ticket'),
    (3, 100.00, 'Entertainment', '2025-03-07', 'Concert ticket');


SELECT * FROM transactions;
