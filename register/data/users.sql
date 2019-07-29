CREATE TABLE users (
id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
name VARCHAR(200) NOT NULL,
user VARCHAR(200) NOT NULL,
email VARCHAR(200) NOT NULL,
pass VARCHAR(200) NOT NULL,
color VARCHAR(10) NOT NULL,
avatarFinal VARCHAR(500) NOT NULL
)

INSERT INTO user (name, user, email, pass, color, avatarFinal) 
VALUES ('andre', 'andreuchi', 'andreamaldonado.dg@gmail.com', '$2y$10$8p\/yNWkGDshaZ9mGDpZmAeYC7\/6nkDXiC9609NCBxFZfQ2KNyMWh.', 'red', 'data\/avatar\/img-5d2168345b7c1.jpg')username

SELECT user, pass 
FROM user
WHERE user LIKE 'lili';

SELECT * FROM user;