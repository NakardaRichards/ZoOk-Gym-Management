CREATE TABLE messages (
  msg_id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  incoming_msg_id int(255) NOT NULL,
  outgoing_msg_id int(255) NOT NULL,
  msg varchar(2000) NOT NULL
) ;
