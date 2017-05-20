/*Every movie has a unique identification number.
Every movie must have a year and a title
year should be greater than 1800*/
CREATE TABLE Movie(
	id INT NOT NULL, 
	title VARCHAR(100) NOT NULL, 
	year INT NOT NULL, 
	rating VARCHAR(10), 
	company VARCHAR(50),
	PRIMARY KEY (id),
	CHECK (year > 1800),
	UNIQUE(title, year, rating, company)
	) ENGINE = INNODB;

/*Every actor must have a date of birth and a unique id.
dob should be greater than dob or dob is NULL*/
CREATE TABLE Actor(
	id INT 	NOT NULL, 
	last VARCHAR(20), 
	first VARCHAR(20), 
	sex VARCHAR(6), 
	dob DATE NOT NULL, 
	dod DATE,
	PRIMARY KEY (id),
	UNIQUE (last, first, sex, dob),
	CHECK ((dob IS NULL) OR (dob > dob))
	) ENGINE = INNODB;