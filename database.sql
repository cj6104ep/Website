use ics311sp1631;

create table user 
	(id int unsigned not null auto_increment primary key,
	firstname varchar(50),
	lastname varchar(50),
	email varchar(50),
	username varchar(50),
	password varchar(50)
);

insert into user values
	(NULL, "Yeng","Vue","cj6104ep@metrostate.ecu","cj6104ep","admin");

select * from user;

