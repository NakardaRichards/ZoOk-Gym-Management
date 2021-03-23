CREATE TABLE Chatusers (
  user_id int(11)  NOT NULL,
  unique_id int(255) NOT NULL,
  fname varchar(255) NOT NULL,
  lname varchar(255) NOT NULL,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  img varchar(255) NOT NULL,
  status varchar(255) NOT NULL
);
