#创建数据表user
create table user(
userid int(6) primary key not null auto_increment,
username varchar(24) not null,
userpsd varchar(20) not null,
usesex enum('0','1') not null default '0',
borndate int(4) not null default 1999
);
#插入数据

insert into user(username,userpsd,usesex,borndate) values('魏明遥','zero19920710','1',1992);
insert into user(username,userpsd,usesex,borndate) values('魏明焱','lingfeng1994','1',1994);
insert into user(username,userpsd,usesex,borndate) values('魏明慧','lingyu1991','0',1991);
