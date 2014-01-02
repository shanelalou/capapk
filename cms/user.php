<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', '');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("dbccsportal", $con);

$sql="SELECT * FROM sannouncement  ORDER BY id DESC";

$result = mysql_query($sql);
echo "<table border='0'>";

while($row = mysql_fetch_array($result))
  {
  
  echo "<h5>" . $row['title'] . "</h5>";
  echo "<p>" . $row['text'] . "</p>";
  }

mysql_close($con);
?> 