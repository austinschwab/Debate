<?php

$new = $_POST['topic'];
mysql_connect('localhost', 'root', 'root') or die ("no connect");
mysql_select_db('debate') or die ("no database");

$query = "UPDATE Topic SET Topic= '$new' WHERE Name='admin'";
$result = mysql_query($query);
echo "The topic has now been posted. <br />";
echo "<a href='debate.php'>Enter Debate Room</a><br />";
?>