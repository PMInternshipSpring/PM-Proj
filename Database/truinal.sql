use truinal;

show tables;

create table project(team varchar(20) primary key, project_status varchar(25), project_name varchar (25), project_description varchar(25), start_date date, project_enddate date,deliverables varchar(20), client varchar(20),eoc date);
create table Team(employee_id int(11) primary key, team varchar(25), foreign key (team) references project (team));

alter table employee_info add image blob;

select * from account;
select * from employee;
select * from employee_info;
