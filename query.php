
<html>
			if(mysql_select_db($database, $db_connection)) { 
<head><title>CS143 Project 1B Demo</title></head>
<body>
<p>
Due to security concerns, this demo does not follow the spec exactly.
It is just to give you a rough idea of how your code should work.</p>

<p>Please do not run a complex query here. You may kill the server. </p>
Type an SQL query in the following box: <p>
Example: <tt>SELECT * FROM Actor WHERE id=10;</tt><br />
<p>
<form action="." method="GET">
<textarea name="query" cols="60" rows="8">SELECT * FROM Actor WHERE id=10</textarea><br />
<input type="submit" value="Submit" />
</form>
</p>
<p><small>Note: tables and fields are case sensitive. All tables in Project 1B are availale.</small>
</p>

<h3>Results from MySQL:</h3>

<table border=1 cellspacing=1 cellpadding=2>
<tr align=center><td><b>id</b></td><td><b>last</b></td><td><b>first</b></td><td><b>sex</b></td><td><b>dob</b></td><td><b>dod</b></td></tr>
<tr align=center><td>10</td><td>Aaltonen</td><td>Minna</td><td>Female</td><td>1966-09-17</td><td>N/A</td></tr>
</table>

</body>
</html>
