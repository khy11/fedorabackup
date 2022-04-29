create table search_result (
	name char(10) not null,
	subject char(200) not null,
	content text not null,
	primary key(subject)
);