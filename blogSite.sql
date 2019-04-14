-- create a database (it's probablly easier to use PHPMyAdmin and create one as usual)
CREATE DATABASE blogSite;
use blogSite;

CREATE TABLE blog_user(
	user_id int not null primary key AUTO_INCREMENT,
	first_name varchar(30) not null,
	last_name varchar(50) not null,
	bio varchar (255),
	email varchar (25) not null,
	password varchar (15) not null
	);
	
CREATE TABLE blog_post(
	post_id int not null primary key AUTO_INCREMENT,
	user_id int not null,
	post_content text,
	date_created date not null,
	post_title varchar (100),
	FOREIGN KEY (user_id) REFERENCES blog_user(user_id)

	);
	
CREATE TABLE comment_post(
	comment_id int not null primary key AUTO_INCREMENT,
	post_id int not null,
	comment_content varchar (255),
	date_created date not null,
	user_id int not null,
	FOREIGN KEY (user_id) REFERENCES blog_user(user_id),
	FOREIGN KEY (post_id) REFERENCES blog_post(post_id)
	);
	
