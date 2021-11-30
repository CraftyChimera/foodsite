CREATE DATABASE IF NOT EXISTS food;
GRANT ALL on food.* to 'drake'@'localhost';
use food;
CREATE TABLE IF NOT EXISTS foodlist(name varchar(50),number int,foodorder varchar(50),extrafood varchar(100),count int,time DATETIME,address varchar(200),
message varchar(200));
