<!DOCTYPE html>
<html>
<head>
      	<title>A3 Hospitals</title>
<style>
       	body {background-color: lightcoral;}
        h1   {color: blue;}
</style>
</head>
<body>
<h1 align="center">Hospital</h1>
<hr>
<hr>
<?php
 include "connecttodb.php"
?>
<?php
 $query = "select h.name, d.firstname, d.lastname, h.headDocDate from hospital h join doctor d on (h.headDocId = d.licensenumber)";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=\"$row[name],$row[firstname], $row[lastname], $row[headDocDate]\">$row[name], $row[firstname], $row[lastname], $row[headDocDate]</option>";
 }
 mysqli_free_result($result);
?>

</body>
</html>

