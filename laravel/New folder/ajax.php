<html>

<body>

<?php
$query=mysql_connect("localhost","root","");
mysql_select_db("test",$query);
$name=$_POST['name'];

mysql_query("INSERT INTO mytable (name)
VALUES ('$name')");
?>
</body>
</html>