CREATE TABLE admins ( 
	id int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
	fname varchar(100) NOT NULL, 
    lname varchar(100) NOT NULL, 
    location varchar(200) NOT NULL, 
    time_slot varchar(400) NOT NULL, 
	email varchar(100) NOT NULL, 
    gym_name varchar(100) NOT NULL, 
	cost_per_month varchar(100) NOT NULL, 
	pass varchar(100) NOT NULL


) 
