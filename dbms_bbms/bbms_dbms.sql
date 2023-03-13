
use dbms_bbms;
create table blood_don
(
	fname varchar(30) not null,
	minit varchar(10) not null,
	lname varchar(20),
	age int not null,
	b_grp varchar(10) not null,
	don_id int not null AUTO_INCREMENT,
	address varchar(90) not null,
	contact varchar(15) not null,
	email varchar(50) not null,
	primary key(don_id)
);
insert into blood_don(fname,minit,lname,age,b_grp,don_id,address,contact,email) values('Arun','M','Shetty',35,'O+',1,'KP Nagara,Mangaluru','+918746741200','arunshetty1198@gmail.com');



create table admin(
username char(5),
pwd varchar(4)
);
insert into admin values('admin','1234');



create table blood_rep(
	bgrp varchar(10) primary key,
	bcost real,
	bunits int
);
insert into blood_rep values('A+',30000,100);
insert into blood_rep values('B+',40000,90);
insert into blood_rep values('O+',35000,75);
insert into blood_rep values('A-',50000,95);
insert into blood_rep values('B-',60000,80);
insert into blood_rep values('O-',80000,40);
insert into blood_rep values('AB+',45000,50);
insert into blood_rep values('AB-',50000,75);


alter table blood_don 
add foreign key(b_grp) references
blood_rep(bgrp);


CREATE TABLE feedback_table(msg_id int AUTO_INCREMENT, 
sender_fname varchar(20) NOT NULL, 
sender_lname varchar(20) NOT NULL, 
sender_mail varchar(60) NOT NULL,
sender_msg varchar(200) NOT NULL,
PRIMARY KEY(msg_id)
);
insert into feedback_table(sender_fname,sender_lname,sender_mail,sender_msg) values('Shreya','Shetty','shetty@gmail.com','Hello');


alter table blood_don add column gender varchar(5) after age;

insert into blood_don (fname,minit,lname,age,gender,b_grp,address,contact,email) values('Shipra','P','Shetty',20,'F','O+','Mangalore','7564897712','shettyshipra@gmail.com');

create table hospital(
hname varchar(80) not null,
cname varchar(30) not null,
sname varchar(20) not null,
rname varchar(30) not null,
b_grp varchar(6) not null,
bunits int not null,
h_id int primary key not null auto_increment,
foreign key (b_grp) references blood_rep(bgrp) on delete cascade on update cascade
);

insert into hospital(hname,cname,sname,rname,b_grp,bunits,phone,email)values('KMC','Manipal','Karnataka','Mr.Prashant','O-',140,'8970086114','kmcmnpl@gmail.com');

alter table hospital add column phone varchar(10) after bunits;
alter table hospital add column email varchar(40) after phone;