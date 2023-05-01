<html>
<head>
<title>PHP Program To Calculate Arithmetic operations using Switch Case</title>
</head>
<body>
<form method="post">
<table border="5">
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter 1st number"/> </td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter 2nd number"/> </td>
</tr>
<tr>
<td> <input type="text" name="option" value="" placeholder="Enter any option"/> </td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/> </td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$a = $_POST['num1'];
$b = $_POST['num2'];
$ch = $_POST['option'];
echo "1 -> Addition<br>";
echo "2 -> Subtraction<br>";
echo "3 -> multiplication<br>";
echo "4 -> Divison<br>";
switch($ch)
{
case 1:
$r = $a+$b;
echo " Addition = ".$r ;
break;
case 2:
$r = $a-$b;
echo " Subtraction = ".$r ;
break;
case 3:
$r = $a*$b;
echo " Multiplication = ".$r ;
break;
case 4:
$r = $a/$b;
echo " Divison = ".$r ;
break;
default:
echo ("invalid option\n");
}
return 0;
}
?>
</body>
</html>
