# sql example ( board )

# Start
# mysql -u root -p DBPW
# mysql> source sqlfilepath;

create database bogyeong_db;
use bogyeong_db;

create table boards( 
	id int not null auto_increment,
	password varchar(12) not null,		
	title varchar(70) not null,		
	content text not null, 		
	regdate datetime not null, 		
	hits int default 0,
	ip varchar(16),
	PRIMARY KEY(id)
 );

# Set auto_increment
alter table boards auto_increment=1;

# Test
insert into boards(password, title, content, hits, ip) 
	values('test', 'test', 'title test', 'content test', '20190325', '0', '127.0.0.1');

# Check
show tables;
desc boards;
select * from boards;

# Remove
# drop table boards;