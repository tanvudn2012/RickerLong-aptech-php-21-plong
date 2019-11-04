------------- Bt 1 -------------
create database vu;
create table vu.aptech_php_21(
	id int primary key
);
------------ bt 2,4 ---------------
drop table vu.aptech_php_21;
drop database vu;
------------- Bt 3 -------------
create database aptech_php_21;
create table aptech_php_21.user(
	id int primary key,
    firt_name varchar(50),
    last_name varchar(50),
    andress varchar(255),
    phone char(11)
);
------------- Bt 5 -------------
alter table aptech_php_21.user add  firt_date date;
alter table aptech_php_21.user drop column firt_date;
------------- Bt 6 -------------
insert into aptech_php_21.user(id,firt_name,last_name,andress,phone) values(1,N'Huỳnh',N'vu',N'36 tôn đản',0898239927);
insert into aptech_php_21.user(id,firt_name,last_name,andress,phone) values(2,N'Nguễn ',N'An',N'36 tôn đản',0898239927);
insert into aptech_php_21.user(id,firt_name,last_name,andress,phone) values(3,N'Võ',N'Vũ',N'36 tôn đản',0898239927);
insert into aptech_php_21.user(id,firt_name,last_name,andress,phone) values(4,N'Lê',N'Nam',N'36 tôn đản',0898239927);
insert into aptech_php_21.user(id,firt_name,last_name,andress,phone) values(5,N'Ngô',N'Thương',N'36 tôn đản',0898239927);
------------- Bt 7 -------------
select * from aptech_php_21.user;
select id from aptech_php_21.user;
select id from aptech_php_21.user limit 2; 
select * from aptech_php_21.user where id=5 and last_name='Thương';
------------- Bt 8 -------------
select * from aptech_php_21.user where id=1;
------------- Bt 9 -------------
update aptech_php_21.user set id=10 where id=1;
select * from aptech_php_21.user;
------------- Bt 10 -------------
delete from aptech_php_21.user where id=2;
select * from aptech_php_21.user;
------------- Bt 11 -------------
alter table aptech_php_21.user MODIFY COLUMN id int NOT NULL AUTO_INCREMENT; 
------------- Bt 12 -------------
create table aptech_php_21.admin(
	id int auto_increment primary key,
    account_name varchar(50) not null unique,
    pass varchar(50) not null
);
insert into aptech_php_21.admin(id,account_name,pass) value(5,'ngothuong',190496);
alter table aptech_php_21.admin add foreign key(id) references aptech_php_21.user(id);
alter table aptech_php_21.user modify column firt_name varchar(255)  not null unique;
Insert into aptech_php.user(id,firt_Name,last_Name,email) VALUES(N'Tan',N'Vu',N'tanvudn2012@gmail.com');
