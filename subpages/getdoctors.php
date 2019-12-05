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
<select>
<?php
 $namevalue = "notselected";
 $ordervalue = "notselected";
 if (isset($_POST['orderbyname'])) {
    $namevalue=$_POST['orderbyname'];
 }
 if (isset($_POST['ascdesc'])) {
    $ordervalue=$_POST['ascdesc'];  
 }
 $query = "select firstname, lastname from doctor order by $namevalue $ordervalue";
 $result = mysqli_query($connection,$query);
 if (!$result) {
 die("databases query failed.");
 }
 while ($row = mysqli_fetch_assoc($result)) {
  echo "<option value=\"$row[lastname],$row[firstname]\">$row[lastname], $row[firstname]</option>";
 }
 mysqli_free_result($result);
?>
</select>
</body>
</html>
