create table items(
  id INT PRIMARY KEY AUTO_INCREMENT,
  name varchar(30),
  unit varchar(10),
  price int,
  description text,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);
