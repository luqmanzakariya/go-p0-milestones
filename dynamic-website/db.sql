CREATE DATABASE IF NOT EXISTS dynamic;
 
use dynamic;
 
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) UNIQUE,
  email varchar(100) UNIQUE,
  password varchar(100),
  isLoggedIn boolean,
  isAdmin boolean
);

CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  full_name varchar(100),
  email varchar(100),
  message TEXT
);

-- SEED ADMIN USER
INSERT INTO users (username, email, password, isLoggedIn, isAdmin)
VALUES
  ('admin', 'admin@mail.com', 'admin', false, true)
