<html>
<head>
<?php $title = "Hello World" ?>
<title><?php print "$title"; ?></title>
</head>

<body bgcolor=green>
<h1><?php print "$title"; ?></h1>

<?php
$param = $_GET["param"];
if($param) {
    print "Thanks for the lovely param='$param' binding.";
}
echo "Type an SQL query in the following box:"<br>
echo "Example: SELECT * FROM Actor WHERE id=10;"

<form action="." method="post">
<textarea name="query" cols="60" rows="8">SELECT * FROM Actor WHERE id=10</textarea><br />
<input type="submit">
</form>


?>

</body>
</html>
