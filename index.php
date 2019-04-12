<?php
include "ComparableCircle.php";

$circleOne = new Circle(8, "circleOne");
$circleTwo = new Circle(2, "circleTwo");
$hinhtron = new ComparableCircle($circleOne,$circleTwo);
echo $hinhtron->comparableTo();
