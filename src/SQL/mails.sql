create table mails(
  id varchar(10),
  subject varchar(40),
  body text,
  created datetime DEFAULT NULL,
  updated datetime DEFAULT NULL
);