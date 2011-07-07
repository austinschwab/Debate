<?php
$name = $_POST['name'];
$email = $_POST['email'];

mysql_connect('localhost', 'root', 'root') or die ("no connect");
mysql_select_db('debate') or die ("no database");

mysql_query("INSERT INTO users(Name, Email, Stance, Support) VALUES('$name', '$email', 'Agree', 'A')
");
session_start();
$_SESSION['email'] = '$email';
echo "<a href='debateroom.php'>Enter Debate</a>"

?>