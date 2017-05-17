<html>
<head>
<?php $title = "Hello World" ?>
<title><?php print "$title"; ?></title>
</head>

<body bgcolor=white>
<h1><?php print "$title"; ?></h1>

echo "Type an SQL query in the following box:"<br>
echo "Example: SELECT * FROM Actor WHERE id=10;"

<?php
if(isset($_POST['SubmitButton'])){
	$input=$_POST['query'];   // stores query and transfer to MYSQL
	echo "Success, You entered: ".$input;
}

?>
<!-- <form action="." method="post">
<textarea name="query" cols="60" rows="8"></textarea><br />
<input type="submit">welcome.php
</form> -->


<form action="" method="post">
<textarea name="query" cols="60" rows="8"></textarea><br />
<input type="submit" name="SubmitButton"/>



<?php
//to MYSQL
$db_connection = mysql_connect("localhost", "cs143", "");
mysql_select_db("CS143", $db_connection);
$query = "select * from Movie where id<10";	//inputs from user?
$rs = mysql_query($query, $db_connection);
while($row = mysql_fetch_row($rs)) {	//retrieving results  
    $id = $row[0];
    $title = $row[1];
    $year = $row[2];
    $rating = $row[3];
    $company = $row[4];
    //$Description = $row[2];
    print "$id, $title, $year, $rating, $company <br />";
}

mysql_close($db_connection);
?>

</body>
</html>
