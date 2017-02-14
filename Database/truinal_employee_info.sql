create truinal;
use truinal;

create table employee_info 
	(employee_id int(11) primary key, employee_first_name varchar(25),
    employee_middle_name varchar(25), employee_last_name varchar(25),
    employee_address_1 varchar(100), employee_address_2 varchar(100),
    employee_address_city varchar(40), employee_address_state char(2),
    employee_zipcode varchar(10), employee_address_country varchar(15),
    birth_date date);
    
alter table employee_info add employee_email varchar (50) after birth_date; 
alter table employee_info add contact_number varchar (15) after birth_date;
    
show tables;
drop tables employee_info;

desc employee_info;   

create table employee 
	(employee_id int(11) primary key, supervisor_employee_id int(11), 
    employee_department varchar(25), employee_designation varchar(25),
    employee_job_category varchar(10), employee_hourly_rate decimal(5,2),
    employee_hours_worked dec(3,2),
    hire_date date, termination_date date);
    
create table account ( account_id int(11) primary key, user_name varchar(50), password varchar (128)); 
select * from account;

desc employee_info;

insert into employee_info values ( 12345, "peter", "null", "sedrak", "valparaiso", "grad school", "valparaiso", "IN", 46383, "USA", '12-12-12', null, null ) ;
insert into account values 
((12345,"peter",12345), (3888256,"rkhan1",3888256), (3912003, "cfcalina", 3912003), 
(3913019, "ngopalapuram", 3913019), (3913259, "rsmallela", 3913259), (3914624, "nrbandakunta",3914624),
(3915358, "smeda", 3915358), (3915467,"srpolangari", 3915467), (3915607,"ndburri",3915607), 
(3921989,"rmathew",3921989), (3922707,"rbalusu",3922707), (3925550,"nyeluripati",3925550), 
(3940165,"apola1",3940165));








select * from employee_info;
 
select * from employee;

select * from account;

