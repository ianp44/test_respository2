<!DOCTYPE html>
<html>
<head><title>Colour Block Display Page</title></head>

<body>
<B>Colour Block Display Page</b><br><br>
Fill in the RGB values (0-255) and click submit<br>
<?php
$zred=$_POST['r'];
$zgreen=$_POST['g'];
$zblue=$_POST['b'];
echo "Values<br>";
echo "Red:".$zred."<br>";
echo "Green:".$zgreen."<br>";
echo "Blue:".$zblue."<br>";
$rgb=$zred.','.$zgreen.','.$zblue;
?>
<br>
<div style="width:150px; height:150px;
background-color:rgb(<?php echo $rgb; ?>);">
This is DIV TEXT.
</div>
</body>
</html> 