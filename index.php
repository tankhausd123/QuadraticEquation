<?php
include('QuadraticEquation.php');
$a=1;
$b=3;
$c=1;

$quadraticEquation = new QuadraticEquation($a, $b, $c);
$delta = $quadraticEquation->getDiscriminant();
$x = $quadraticEquation->getRoot();
$x1 = $quadraticEquation->getRoot1();
$x2 = $quadraticEquation->getRoot2();
if ($delta > 0){
    echo 'x1: ' .$x1;
    echo "<br>";
    echo 'x2: ' .$x2;
}elseif($delta == 0){
    echo "x: " .$x;
}else{
    echo 'The equation has no roots';
}
