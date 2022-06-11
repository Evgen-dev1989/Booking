<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">

a:<input type="text" name="a">
    b:<input type="text" name="b">
    <input type="submit">
</form>
<?php
echo "Решение линейного уравнения a+bx=0 <br>";
$a=isset($_GET['a']) ? $_GET['a'] : 6;
$b=isset($_GET['b']) ? $_GET['b'] : 2;
$x;
if($b!=0)
{
    $x=(-$a)/$b;
    echo "x=";
    echo $x;
}
else{
    echo "Решения нет";
}
?>
