<?php

$nilai=40 ;

if($nilai >90){
    $grade = "A+";
} elseif ($nilai > 80 && $nilai <= 90){
    $grade = "A";
} elseif ($nilai > 70 && $nilai <= 80){
    $grade = "B+";
} elseif ($nilai > 60 && $nilai <= 70){
    $grade = "B";
} elseif ($nilai > 50 && $nilai <= 60){
    $grade = "C+";
} elseif ($nilai > 40 && $nilai <= 50){
    $grade = "C";
} elseif ($nilai > 30 && $nilai <= 40){
    $grade = "D";
} elseif ($nilai < 30){
    $grade = "E";
}
echo "nilai anda :$nilai<br>";
echo "grade:$grade";
?>
