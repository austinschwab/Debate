<?php
mysql_connect('localhost', 'root', 'root') or die ("no connect");
mysql_select_db('debate') or die ("no database");
echo "The topic is: <br />";
$query = "SELECT Topic FROM Topic WHERE Name = 'admin'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
$top = $row['Topic'];
}
echo $top;



?>
	<! DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtmll/DTD/xhtmll-strict.dtd">
	<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<title>Calculator</title>

	</head>
	<body>
	What is your stance on this topic?
<form action = debate.php method=post>
<input type='radio' name='stance' value='agree' /> Agree <br />
<input type='radio' name='stance' value='disagree' /> Disagree <br />
<input type='submit' value='Continue' /><br />
</form>

	</body>
	</html>