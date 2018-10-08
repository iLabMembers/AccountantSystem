create table cards(
  id varchar(255) primary key,
  user_id varchar(10),
  card_name varchar(10),
  created datetime default null,
  updated datetime default null,
  foreign key(user_id)
    references users(id)
);