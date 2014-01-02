<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'gordonco_ccsweb', 'ccsadmin2012');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("gordonco_reg", $con);

$sql="SELECT * FROM sannouncement  ORDER BY id";

$result = mysql_query($sql);
echo "<table border='0'>";

while($row = mysql_fetch_array($result))
  {
  
  echo "<a href=''>" . $row['title'] . "</a>";
  echo "<p>" . $row['text'] . "</p>";
  }

mysql_close($con);
?> 