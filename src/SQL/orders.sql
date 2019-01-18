create table orders(
  id varchar(10) PRIMARY KEY AUTO_INCREMENT,
  user_id varchar(10),
  item_id varchar(10),
  num int,
  total int, /*未対応：totalは商品数を表す変数numと商品価格を表す変数とを掛け合わせる必要がある*/
  created datetime DEFAULT NULL,
  updated datetime DEFAULT NULL,
  FOREIGN KEY(user_id)
    REFERENCES users(id)
  FOREIGN KEY(item_id)
    REFERENCES users(item_id)
);