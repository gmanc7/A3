<!DOCTYPE html>
<html>
<head>
      	<title>A3 Doctors</title>
<style>
       	body {background-color: darkcyan;}
        h1   {color: cyan;}
</style>
</head>
<body>
<?php
    include "connecttodb.php"
?>
<h1 align="center">Doctor</h1>
<hr>
<hr>
Doctors:
<?php
 $time = strtotime($_POST['ldate']);
 $query = "select * from doctor";
 if ($time) {
   $valid_date = date('Y-m-d', $time);
   echo "date is $valid_date";
   $query = "select firstname, lastname, specialty, licensedate from doctor where cast(licensedate as date) < '$valid_date'";
 } else {
   echo "invalid date!";
 }
 $result = mysqli_query($connection,$query);
 if (!$result) {
 echo "query failed";
 die("databases query failed.");
 }
 echo "<table><tr><th>First Name</th><th>Last Name</th><th>Specialty</th><th>License Date</th></tr";
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["specialty"]."</td><td>".$row["licensedate"]."</td></tr>";
 }
 echo "</table>";
 mysqli_free_result($result);
?>
</body>
</html>

