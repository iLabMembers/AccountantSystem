create table items(
  id varchar(10),
  name varchar(30),
  unit varchar(10),
  price int,
  description text,
  created datetime DEFAULT NULL,
  modified datetime DEFAULT NULL
);
