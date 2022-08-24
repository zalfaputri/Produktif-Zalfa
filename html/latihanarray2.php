<?php
    $kelas=[
            ["id"=> "XR1", "namakelas"=>"XRPL 1"],
            ["id"=> "XR2", "namakelas"=>"XRPL 2"],
            ["id"=> "XR3", "namakelas"=>"XRPL 3"],
    ];
    echo '<table border ="1">';
    echo '<tr>';
    echo '<th>id</th><th>kelas</th>';
    echo '</tr>';
    foreach($kelas as $k_kelas =>$v_kelas){
        echo '<tr>';
        echo '<td>'.$v_kelas ['id'].'</td>';
        echo '<td>'.$v_kelas ['namakelas']. '</td>';

        echo '</tr>';
    }
    echo'</table>'
?>