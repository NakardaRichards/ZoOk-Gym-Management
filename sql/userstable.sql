
CREATE TABLE users (
   
	id int(10) UNIQUE,
    username VARCHAR(50) NOT NULL,
    email varchar(50) NOT NULL,
    pass VARCHAR(255) NOT NULL   
)