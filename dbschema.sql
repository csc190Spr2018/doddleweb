DROP DATABASE IF EXISTS db_posts;
CREATE DATABASE db_posts;
USE db_posts;
CREATE TABLE tbl_posts(
	author varchar(255),
	post text,
	ts timestamp
);

INSERT INTO tbl_posts (author, post) VALUES ('xfu', 'Hi everybody!');
INSERT INTO tbl_posts (author, post) VALUES ('mini me', 'Dr. Evil is running an exam. God bless us...');
