CREATE DATABASE IF NOT EXISTS todods;

USE todods; 

CREATE TABLE IF NOT EXISTS class (
  classCode INT UNSIGNED NOT NULL,
  class ENUM("1º ETIM DS", "2º ETIM DS", "3º INFO", "1º ADM", "2º ADM", "3º ADM"),
  team ENUM('A','B') NOT NULL
);

ALTER TABLE class ADD CONSTRAINT PK_classCode PRIMARY KEY (classCode);
ALTER TABLE class AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS events (
  eventCode INT UNSIGNED NOT NULL,
  date DATETIME NOT NULL,
  subject VARCHAR(100) NOT NULL, 
  description TEXT NOT NULL,
  status ENUM('0', '1'),
  photo TEXT NOT NULL,
  classCode INT UNSIGNED NOT NULL,
  CONSTRAINT FK_classCode FOREIGN KEY (classCode) REFERENCES class(classCode)
);

ALTER TABLE events ADD CONSTRAINT PK_eventCode PRIMARY KEY (eventCode);
ALTER TABLE events AUTO_INCREMENT = 1;

CREATE TABLE IF NOT EXISTS users (
  userCode INT UNSIGNED NOT NULL,
  firstname VARCHAR(25) NOT NULL,
  lastname VARCHAR(25) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(32) NOT NULL, 
  gender ENUM('M', 'F', 'O') NOT NULL,  
  classCode INT UNSIGNED NOT NULL,
  CONSTRAINT FOREIGN KEY (classCode) REFERENCES class(classCode)
);

ALTER TABLE users ADD CONSTRAINT PK_userCode PRIMARY KEY (userCode);
ALTER TABLE users AUTO_INCREMENT = 1;

