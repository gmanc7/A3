<!DOCTYPE html>
<html>
<head>
      	<title>A3 Patient</title>
<style>
       	body {background-color: darkcyan;}
        h1   {color: cyan;}
</style>
</head>
<body>
<?php
 include "connecttodb.php"
?>
<?php
 $onum = $_POST["ohipNumber"];
 $query =  "select p.lastname, p.firstname from patient p join treats  t on (p.ohipNumber = t.patientId) join doctor d";
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
