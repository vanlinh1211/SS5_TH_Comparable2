<?php
include "Circle.php";
include "Comparable.php";

class ComparableCircle implements Comparable
{
    public $circle1;
    public $circle2;
    public function __construct($_circle1,$_circle2)
    {
        $this->circle1 = $_circle1;
        $this->circle2 = $_circle2;
    }

    public function comparableTo()
    {
        $radius1 = $this->circle1->getRadius();
        $radius2 = $this->circle2->getRadius();
        if ($radius1>$radius2) {
            return 1;
        }
        if ($radius1<$radius2) {
            return -1;
        } else {
            return 0;
        }
    }
}
