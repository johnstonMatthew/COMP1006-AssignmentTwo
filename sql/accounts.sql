CREATE DATABASE assignmentTwo;

CREATE TABLE accounts (
    accountId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    uname VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255)
);