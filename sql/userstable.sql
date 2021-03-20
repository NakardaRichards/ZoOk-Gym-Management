
CREATE TABLE users (
   
	   id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) unique  NULL,
    email varchar(50) NOT NULL,
    pass VARCHAR(255) NOT NULL   
)