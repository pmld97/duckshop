DROP DATABASE IF EXISTS duckshop;
CREATE DATABASE duckshop;
USE duckshop;

CREATE TABLE products (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Name varchar(50),
    Price int(10),
    Description varchar(255),
    Photo LONGBLOB
);

CREATE TABLE news(
    NewsID int NOT NULL PRIMARY KEY,
    NewsTitle varchar(50),
    NewsBody varchar(250),
    NewsPicture LONGBLOB
);

CREATE TABLE users (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user varchar(100),
    pass varchar(100)
);

