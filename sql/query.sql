CREATE TABLE users(
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_pwd varchar(256) not null);

CREATE TABLE cat(
    category varchar(20) PRIMARY KEY);

CREATE TABLE movies(
	category varchar(256),
	title varchar(256) PRIMARY KEY,
	filesize varchar(20),
    torfile varchar(256),
    FOREIGN KEY(category) REFERENCES fasttorrent.cat(category));

CREATE TABLE software(
	category varchar(256),
	title varchar(256) PRIMARY KEY,
	filesize varchar(20),
    torfile varchar(256),
    FOREIGN KEY(category) REFERENCES fasttorrent.cat(category));

CREATE TABLE books(
	category varchar(256),
	title varchar(256) PRIMARY KEY,
	filesize varchar(20),
    torfile varchar(256),
    FOREIGN KEY(category) REFERENCES fasttorrent.cat(category));

CREATE TABLE music(
	category varchar(256),
	title varchar(256) PRIMARY KEY,
	filesize varchar(20),
    torfile varchar(256),
    FOREIGN KEY(category) REFERENCES fasttorrent.cat(category));

CREATE TABLE games(
	category varchar(256),
	title varchar(256) PRIMARY KEY,
	filesize varchar(20),
    torfile varchar(256),
    FOREIGN KEY(category) REFERENCES fasttorrent.cat(category));