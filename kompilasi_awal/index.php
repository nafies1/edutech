<?php

function klik ($a, $b){
    for ($i=$a; $i <= $b; $i++){
        echo "$i <br>";
    }
}
$a = 5;
$b = 10;
klik($a, $b);

$cars = ["Volvo", "BMW", "Toyota"];
echo "<br> I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
$color = "red";
echo "<br> My car is " . $color . "<br>";

echo "<br>";

for ($row = 1; $row <= 10; $row++){
    $bintang = '';

    for ($col = 0; $col < $row; $col++){
        $bintang = '*';
        echo "$bintang";
    }

    echo "<br>";
    }
    echo"<h1>Karyawan</h1>";
    $andri = array("Andri", "74898213", "adnri@gmail.com","backend developer");
    echo "<br><li> Nama : " . $andri[0] . "<br><li> NIK : " . $andri[1] . "<br><li> Email : " . $andri[2] . "<br><li> Bagian : " . $andri[3] . "";
    echo "<br>";
    $eli = array("Eli", "7532233", "eli@gmail.com","frontend developer");
    echo "<br><li> Nama : " . $eli[0] . "<br><li> NIK : " . $eli[1] . "<br><li> Email : " . $eli[2] . "<br><li> Bagian : " . $eli[3] . "";

    echo "<br><br>";

    $warna = ["blue","red","green"];
    foreach ($warna as $warnas){
        echo "Tampilkan warna <font color=$warnas>". $warnas . "</font><br>";
    }

    echo "<br><br>";

    $warna = ["blue" => 80,"red" => 90,"green" => 92];
    echo $warna ["red"];

    echo "<br><br>";

    echo"<h1>Karyawan Belum Bener</h1>";

    $andrid = ["Andri", "74898213", "adnri@gmail.com","backend developer"];
    $elid = ["Eli", "7532233", "eli@gmail.com","frontend developer"];
    $form = ["Nama : ", "NIK : ", "Email : ", "Bagian : "];
    #$forms ny belum berhasil, lihat foto kodingan Sundara
    foreach ($andrid as $andrids) {    
        echo '<li>'.$forms. $andrids . "<br>";
    }

    echo "<br>";

    foreach ($elid as $elids) {
        echo '<li>'.$form[0]. $elids . "<br>";
    }

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