use truinal;

show tables;

create table project(team varchar(20) primary key, project_status varchar(25), project_name varchar (25), project_description varchar(25), start_date date, project_enddate date,deliverables varchar(20), client varchar(20),eoc date);
create table Team(employee_id int(11) primary key, team varchar(25), foreign key (team) references project (team));

alter table employee_info add image blob;
alter table project add department_name varchar(25);
alter table account drop account_id;
alter table account add employee_id int(11);
rename table account to account_details;
rename table employee_info to personal_details;
rename table employee to employee_info;
rename table project to project_details;

create table date_time_log
(employee_id int(11) primary key, employee_job_category varchar(10),department_name varchar(25), login date, log_out date);

create table raci_chart
(employee_id int(11) primary key, executive_position varchar(25), project_assigned varchar(100), department_name varchar(25));

create table on_call(employee_id int(11) primary key, time date, date date, issue varchar(100), status varchar(25));

desc employee_info;

drop table sample;
select * from account;
select * from employee;
select * from employee_info;


