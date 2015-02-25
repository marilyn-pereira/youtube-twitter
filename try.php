<!DOCTYPE html>
<html>
<body>

<?php
$z="haha";
$age = array("Peter"=>"Fernandes.$z", "Ben"=>"Lobo", "Joe"=>"Pereira");

foreach($age as $x => $x_value) {
     echo "Key=" . $x . ", Value=" . $x_value;
     echo "<br>";
}
?>

</body>
</html>