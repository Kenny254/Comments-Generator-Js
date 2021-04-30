<!DOCTYPE html>
<html>

<head>
   <title>COMMENTS GENERATOR</title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

   <body>
   <form method='POST'>

 <h2>Full names</h2>
 <input type="text" name="5">

 <h2>Gender:</h2>
  <select id="cars" name="6">
  <option value="">choose</option>
  <option value="He">Male</option>
  <option value="She">Female</option>
</select>

 <h2>Introduction:</h2>
 <select id="cars" name="0">
 <option value="">choose</option>
  <option value="is a calm and collected student">Calm and collected student</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

 <h2>Behavior in Classroom:</h2>
 <select id="cars" name="1">
 <option value="">choose</option>
  <option value="is active and asks questions in class">Active and asks questions in class.</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>

 <h2>Behavior outside Classroom:</h2>
 <select id="cars" name="2">
 <option value="">choose</option>
  <option value="enjoys sports and does well in tennis">Enjoys sports and does well in tennis</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>
 
 <h2>CLAIRE values:</h2>
 <select id="cars" name="3">
  <option value="">choose</option>
  <option value="is innovative and likes technology">Innovative and likes technology</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select>


  <h2>Conclusion:</h2>
  <select id="cars" name="4">
  <option value="">choose</option>
  <option value="Keep it up">Keep it up</option>
  <option value="saab">Saab</option>
  <option value="fiat">Fiat</option>
  <option value="audi">Audi</option>
</select> <br><br>

<div>
 <input type="submit" value="GENERATE COMMENTS">
</div>

 </form>
 
<?php
$name  = $_POST['0'];
$name1 = $_POST['1'];
$name2 = $_POST['2'];
$name3 = $_POST['3'];
$name4 = $_POST['4'];
$name5 = $_POST['5'];
$name6 = $_POST['6'];

echo "<h3>  $name5, $name. $name6 $name1. $name5 $name2. $name6 $name3. $name4 $name5! </h3>"; 

//echo "<h3> $name $name1 $name2 $name3 $name4 $name5 $name6 </h3>";

?>
</body>
</html>

