CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(100) NOT NULL,
                       email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO users (name, email) VALUES
                                    ('Jan Kowalski', 'jan@example.com'),
                                    ('Anna Nowak', 'anna@example.com');