<?php
$email = $_POST['email'];

mysql_connect('localhost', 'root', 'root') or die ("no connect");
mysql_select_db('debate') or die ("no database");

$query = "SELECT Email FROM users WHERE Email = '$email'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
$emailverif = $row['Email'];
}

if ($email = $emailverif) {
session_start();
$_SESSION['email'] = $email;
echo "Hello $email! <a href='debateroom.php'>Enter Debate Room</a><br /><br />";
} else {
	echo "Sign In failed. Try again.";
}

?>


<! DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtmll/DTD/xhtmll-strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Sign In</title>

</head>
<body>
Sign In:
<form action='signin.php' method='post'>
St. Pat's Email:
<input type='text' name='email' />@stpaddys.org<br />
<input type='submit' value='Sign In' />
</form>
</body>
</html>