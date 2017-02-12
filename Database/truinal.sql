create database truinal;
use truinal;

create table employee_info 
	(employee_id int(11) primary key, employee_first_name varchar(25),
    employee_middle_name varchar(25), employee_last_name varchar(25),
    employee_address_1 varchar(100), employee_address_2 varchar(100),
    employee_address_city varchar(40), employee_address_state char(2),
    employee_zipcode varchar(10), employee_address_country varchar(15),
    birth_date date);
    
show tables;
desc employee_info;   

create table employee 
	(employee_id int(11) primary key, supervisor_employee_id int(11), 
    employee_department varchar(25), employee_designation varchar(25),
    employee_job_category varchar(10), employee_hourly_rate decimal(5,2),
    employee_hours_worked dec(3,2),
    hire_date date, termination_date date);
