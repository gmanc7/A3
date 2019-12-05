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
<?php
 $firstname = $_POST["firstname"];
 $lastname =$_POST["lastname"];
 $specialty = $_POST["specialty"];
 $licensenumber = $_POST["licensenumber"];
 $time = strtotime($_POST['licensedate']);
 $licensedate = $time;
 if ($time) {
   $licensedate = date('Y-m-d', $time);
 } else {
   echo "invalid date";
 }
 echo "trying to insert ($firstname, $lastname, $licensenumber, $licensedate, $specialty)"; 
 $query = "INSERT INTO doctor (firstname, lastname, licensenumber, licensedate, specialty) VALUE ('$firstname', '$lastname', '$licensenumber', '$licensedate', '$specialty')";
 $result = mysqli_query($connection,$query);
 if ($connection->query($query) === TRUE) {
   echo "new doctor created successfully";
 } else {
   echo "Error: " . $query . "<br>" . $connection->error;
 }
 $connection->close();
?>
</body>
</html>
