
select company from Movie where title='Die An other Day';
-- to select 
SELECT CONCAT(first, " ", last) FROM Actor WHERE id IN 
	(SELECT aid FROM MovieActor WHERE mid IN 
		(SELECT id FROM Movie WHERE title = 'Die Another Day')); 

--Give me the count of all the actors who acted in multiple movies.
SELECT COUNT(*) FROM (
	SELECT aid FROM MovieActor GROUP BY aid HAVING COUNT(aid) > 1
) AS A;

--Give me the title of movies that sell more than 1,000,000 tickets.
SELECT title FROM Movie WHERE id IN
	(SELECT mid FROM Sales WHERE ticketsSold > 1000000);

-- Retrieve all actors that have acted in movies that are "Certified Fresh" ( >75% score) on Rotten Tomatoes.
SELECT CONCAT(first, " ", last) FROM Actor WHERE id IN 
	(SELECT aid FROM MovieActor WHERE mid IN 
		(SELECT mid FROM MovieRating WHERE rot > 75));

-- Retrieves number of movies in the "Adult" genre.
SELECT COUNT(*) FROM Movie WHERE id IN 
	(SELECT mid FROM MovieGenre WHERE genre = "Adult");