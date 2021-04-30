<!DOCTYPE html>
<html>

<head>
   <title>COMMENTS GENERATOR</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

   <body>
   <form method='POST'>

 <h2>Introduction:</h2>
 <input type="text" name="0">

 <h2>Behavior in Classroom:</h2>
 <input type="text" name="1">

 <h2>Behavior outside Classroom:</h2>
 <input type="text" name="2">
 
 <h2>CLAIRE values:</h2>
 <input type="text" name="3">

 <h2>Conlusion:</h2>
 <input type="text" name="4">
 <input type="submit" value="Submit Name">

 </form>
 
<?php
$name  = $_POST['0'];
$name1 = $_POST['1'];
$name2 = $_POST['2'];
$name3 = $_POST['3'];
$name4 = $_POST['4'];

echo "<h3> $name $name1 $name2 $name3 $name4</h3>";

?>
</body>
</html>
