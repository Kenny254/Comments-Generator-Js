<!DOCTYPE html>
<html>

<head>
   <title>COMMENTS GENERATOR</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

   <body>
   <form method='POST'>

 <h2>Introduction:</h2>
 <select id="cars" name="0">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

 <h2>Behavior in Classroom:</h2>
 <select id="cars" name="1">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

 <h2>Behavior outside Classroom:</h2>
 <select id="cars" name="2">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
 
 <h2>CLAIRE values:</h2>
 <select id="cars" name="3">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>


  <h2>drop down trial:</h2>
  <select id="cars" name="4">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>


 <h2>Conlusion:</h2>
  <select id="cars" name="5">
  <option value="volvo">Volvo</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
 <input type="submit" value="Submit Name">

 </form>
 
<?php
$name  = $_POST['0'];
$name1 = $_POST['1'];
$name2 = $_POST['2'];
$name3 = $_POST['3'];
$name4 = $_POST['4'];
$name5 = $_POST['5'];

echo "<h3> $name $name1 $name2 $name3 $name4 $name5</h3>";

?>
</body>
</html>

