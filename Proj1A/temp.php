<html>
<head>
<?php $title = "Hello World" ?>
<title><?php print "$title"; ?></title>
</head>

<body bgcolor=white>
<h1><?php print "$title"; ?></h1>

echo "Type an SQL query in the following box:"<br>
echo "Example: SELECT * FROM Actor WHERE id=10;"

<!-- <form action="." method="post">
<textarea name="query" cols="60" rows="8"></textarea><br />
<input type="submit">
</form> -->


<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">

<!-- <?php
// $param = $_GET["param"];  //??
// if($param) {
//     print "Thanks for the lovely param='$param' binding.";
// }





//to MYSQL
// $db_connection = mysql_connect("localhost", "cs143", "");
// mysql_select_db("CS143", $db_connection);
// $query = "select * from Student";	//inputs from user?
// $rs = mysql_query($query, $db_connection);
// while($row = mysql_fetch_row($rs)) {	//retrieving results  
//     $sid = $row[0];
//     $name = $row[1];
//     $email = $row[2];
//     print "$sid, $name, $email<br />";
// }

// mysql_close($db_connection);
?> -->

</body>
</html>
