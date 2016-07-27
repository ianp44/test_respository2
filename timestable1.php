<!DOCTYPE html>
<html>
<head><title>PHP Times Table Page</title></head>

<body>
<B>Times Table Page</b><br><br>
<table cellspacing="0"  cellpadding="0" border="1">

<?php
$y=0;
while($y<=10){
$x=0;
echo "<tr>";
while($x<=10){
echo "<td>";
echo $x*$y;
echo "</td>"; 

$x++;
}
echo "</tr>\n";
$y++;
}
?>
</table>
</body>
</html> 