<?php
echo '<table border="1">';
for ($e=1;$e<=5;$e++){
    echo '<tr>';
for ($b=1;$b<=4;$b++){
    echo '<td>' .$e*$b.'</td>';
}
echo '</tr>';
}
echo '<table>';
?>

