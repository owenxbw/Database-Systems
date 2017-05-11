

CREATE TABLE Actors (Name varchar(40), Movie varchar(80), Year int, Role varchar(40));

load data local infile '~/data/actor1.csv' into table Actors fields terminated by ',' optionally enclosed by '"';
load data local infile '~/data/actor2.csv' into table Actors fields terminated by ',' optionally enclosed by '"';
load data local infile '~/data/actor3.csv' into table Actors fields terminated by ',' optionally enclosed by '"';

select Name from Actors where Movie='Die Another Day';

drop table Actors;

