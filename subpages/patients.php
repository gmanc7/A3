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
<h1 align="center">Patient</h1>
<hr>
<hr>
<h1> Get Patient Info: </h1>
<form method="post" action ="getpatients.php">
<p> Please enter ohip number: </p>
   <input type="text" name="ohipNumber"><br>
   <input type="submit" value="Get Patient Info!">
</form>
<hr>
<hr>
</body>
</html>

