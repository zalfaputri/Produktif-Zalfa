<?php
function siswa()
{
    $siswa = array(
        '1' => array(
            'nama' => 'Zalfa',
            'alamat' => 'Jl. Ranau',
            'kelas' => 'XIR5',
            'nilai_p' => '95',
            'nilai_k' => '85',
        ),
        '2' => array(
            'nama' => 'Azizah',
            'alamat' => 'Jl. Buyan',
            'kelas' => 'XIR5',
            'nilai_p' => '93',
            'nilai_k' => '80',
        ),
        '3' => array(
            'nama' => 'Putri',
            'alamat' => 'Jl. Poso',
            'kelas' => 'XIR5',
            'nilai_p' => '90',
            'nilai_k' => '97',
        ),
    );
    echo '<br>';
    echo '<table border="1" width="35%" height="35px" align="center">';
    echo '<tr align="center">';
    echo '<td>Index</td>';
    echo '<td>Nama</td>';
    echo '<td>Alamat</td>';
    echo '<td>kelas</td>';
    echo '<td>Nilai_P</td>';
    echo '<td>Nilai_K</td>';
    echo '<td>Rata - Rata</td>';
    echo '</tr>';
    foreach ($siswa as $key => $value) {

        echo '<tr align="center">';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $value['nama'] . '</td>';
        echo '<td>' . $value['alamat'] . '</td>';
        echo '<td>' . $value['kelas'] . '</td>';
        echo '<td>' . $value['nilai_p'] . '</td>';
        echo '<td>' . $value['nilai_k'] . '</td>';
        $nilai_tambah = $value['nilai_p'] + $value['nilai_k'];  
        $nilai_rata2 = $nilai_tambah / 2;
        echo '<td>' . $nilai_rata2 . '</td>';
        echo '</tr>';
    }
}
siswa();