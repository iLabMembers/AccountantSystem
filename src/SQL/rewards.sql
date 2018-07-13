create table rewards(
  id INT PRIMARY KEY AUTO_INCREMENT,
  user_id varchar(10),
  title varchar(30),
  price int,
  created datetime DEFAULT NULL,
  updated datetime DEFAULT NULL,
  FOREIGN KEY(user_id) REFERENCES users(id)
);
