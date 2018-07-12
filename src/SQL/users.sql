create table users (
  id varchar(10) PRIMARY KEY,
  first_name varchar(10) ,
  last_name varchar(10)  ,
  role enum('admin','teacher','doctor','master','bachelor'),
  password varchar(10),
  created DATE,
  updated DATE
);
