<?php
function triAngle($bottom,$high){
    return $bottom * $high / 2;
}
function squAre($bottom,$high){
    return $bottom * $high;
}
function trapezoid($bottom,$top,$high){
    return ($bottom+$top) * $high / 2;
}
echo triAngle(5,2);
echo '<br>';
echo squAre(5,2);
echo '<br>';
echo trapezoid(5,4,3);
echo '<br>';
