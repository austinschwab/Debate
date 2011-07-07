<?php
session_start();

$name = $_SESSION['email'];
$stance = $_POST['stance'];
$support = $_POST['support'];
$_SESSION['stance'] = $stance;
$finalstance = $_SESSION['stance'];
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
echo "<br /><br />";
mysql_query("UPDATE users SET Stance='$stance' WHERE Email = '$name'");

mysql_query("UPDATE users SET Support='$support'
WHERE Email = '$name'");

$que = "SELECT Support FROM users WHERE Email = '$name'";
$res = mysql_query($que);
while($rowtwo = mysql_fetch_array($res))
{
$post = $rowtwo['Support'];
}

$qu = "SELECT Stance FROM users WHERE Email = '$name'";
$re = mysql_query($qu);
while($rowtw = mysql_fetch_array($re))
{
$pos = $rowtw['Stance'];
}

echo "$name has chosen the stance:
$finalstance. His/Her support is: $post";

?>

	<body>
	<form action='debate.php' method='post'>
Support your Stance:
<input type='text' name='support' /><br />
<input type='submit' value='Post!' /><br />
	</form>
	</body>
