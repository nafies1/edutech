<?php
echo"<h1>Karyawan</h1>";

    $karyawan = [
        ["Andri", "74898213", "adnri@gmail.com","backend developer"],
        ["Eli", "7532233", "eli@gmail.com","frontend developer"],
    ];

    foreach ($karyawan as list($nama, $nik, $email, $bagian)) {    
        echo 
        "<ul>
            <li> Nama : $nama </li>
            <li> NIK : $nik </li>
            <li> Email : $email </li>
            <li> Bagian : $bagian </li>
        </ul>
        <br>";
    }
?>