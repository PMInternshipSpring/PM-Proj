use truinal;

create table project(team varchar(20) primary key, project_status varchar(25), project_name varchar (25), project_description varchar(25), start_date date, project_enddate date,deliverables varchar(20), client varchar(20),eoc date);
create table Team(employee_id int(11) primary key, team varchar(25), foreign key (team) references project (team));

alter table employee_info add image blob;
alter table project add department_name varchar(25);
rename table employee_info to personal_details;
rename table employee to employee_info;
rename table project to project_details;

drop table account_details;
create table account_details
(employee_id int(11) primary key, username varchar(25), password varchar(128));

create table date_time_log
(employee_id int(11) primary key, employee_job_category varchar(10),department_name varchar(25), login date, log_out date);

create table raci_chart
(employee_id int(11) primary key, executive_position varchar(25), project_assigned varchar(100), department_name varchar(25));

create table on_call(employee_id int(11) primary key, time date, date date, issue varchar(100), status varchar(25));

select * from account_details;
select * from personal_details;
select * from employee_info;

create table iteration(iteration_id int(11) primary key, features varchar(255), 
status_type varchar(15), start_date date, end_date date, user_story varchar(255));




