# sql example ( member )

# Start
# mysql -u root -p DBPW
# mysql> source sqlfilepath;

create database bogyeong_db;
use bogyeong_db;

create table members( 
	mem_id int not null auto_increment,
	mem_userid varchar(20) not null,
 	mem_username varchar(20) not null,
	mem_password varchar(12) not null,	
 	mem_homepage text not null,
	mem_email varchar(20) not null,
	mem_phone varchar(20) not null,
	mem_sex char(1) not null,
	PRIMARY KEY(mem_id)	
 );

# Set auto_increment
alter table members auto_increment=1;

# Test
insert into members(mem_userid, mem_username, 
	mem_password, mem_homepage, mem_email, mem_phone, mem_sex) 
	values('test', 'test', 'test', 'http://test.com', 'test@naver.com', '010-0000-0000', 'M');
	# M = male, F = female

# Check
show tables;
desc members;
select * from members;

# Remove
# drop table members;