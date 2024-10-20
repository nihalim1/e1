CREATE DATABASE your_database;

USE your_database;

CREATE TABLE your_table (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    age INT,
    email VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO your_table (name, age, email) VALUES 
('John Doe', 30, 'john@example.com'),
('Jane Smith', 25, 'jane@example.com'),
('Mark Johnson', 35, 'mark@example.com');
