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
<h1> Get Doctors Ordered: </h1>
<form method="post" action ="getdoctors.php">
<p> Please select order by: </p>
   <input type="radio" name="orderbyname" value="firstname"> first name<br>
   <input type="radio" name="orderbyname" value="lastname"> last name<br>
<p> Please select ascending or descending: </p>
   <input type="radio" name="ascdesc" value="asc">ascending<br>
   <input type="radio" name="ascdesc" value="desc">descending<br>
<br>
   <input type="submit" value="Get list of Doctors!">
</form>
<hr>
<hr>
<h1> Get doctors licensed before a specific date:</h1>
<form method="post" action="getdoctorsdate.php">
 Enter Date: <input type="date" name="ldate">
 <input type="submit">
</form>
<hr>
<hr>
<h1> Add a New Doctor: </h1>
<form method="post" action="createnewdoctor.php">
 First Name: <input type="text" name="firstname"><br>
 Last Name: <input type="text" name="lastname"><br>
 Specialty: <input type="text" name="specialty"><br>
 License: <input type="text" name="licensenumber" size="4" maxlength="4"><br>
 License Date: <input type="date" name="licensedate"><br>
 Select Hospital:
 <select name="hospital">
	<option value="St.Joes">BBC</option>
	<option value="Victoria">ABC</option>
	<option value="Victoria(london)">DDE</option>
</select>
<input type="submit" value"Add Doctor">
</form>
</body>
</html>
