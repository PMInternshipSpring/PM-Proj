use truinal;
  
alter table employee_info add employee_email varchar (50) after birth_date; 
alter table employee_info add contact_number varchar (15) after birth_date;
      
drop table account_details;     
create table account_details ( account_id int(11) primary key, user_name varchar(50), password varchar (128)); 
select * from account;

insert into employee_info values ( 12345, "peter", "null", "sedrak", "valparaiso", "grad school", "valparaiso", "IN", 46383, "USA", '12-12-12', null, null ) ;
insert into account_details values  (12345,"peter", "12345"), (3888256,"rkhan1","3888256"), 
(3912003, "cfcalina", "3912003"), 
(3913019, "ngopalapuram", "3913019"), (3913259, "rsmallela", "3913259"), 
(3914624, "nrbandakunta","3914624"),
(3915358, "smeda", "3915358"), (3915467,"srpolangari", "3915467"), (3915607,"ndburri","3915607"), 
(3921989,"rmathew","3921989"), (3922707,"rbalusu","3922707"), (3925550,"nyeluripati","3925550"), 
(3940165,"apola1","3940165");

select * from employee_info;
select * from employee;
select * from account_details;

drop table account

