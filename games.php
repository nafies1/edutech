<?php
    echo '<h1> Coba 1 </h1>';
    for ($row = 1; $row <= 10; $row++){
        switch ($row) {
            case "5":
                echo "Gedung 5 Internet kabelnya putus <br>";
                break;
            case "7":
                echo "Gedung 7 Tokennya habis <br>";
                break;
            case "9":
                echo "Gedung 9 Internet kabelnya putus <br>";
                break;
            default:
                echo "Gedung ". $row . " Internet 240mbps <br>";
        }
    }

    echo "<br><br>";
  
    echo '<h1> Coba 2 </h1>';
    for ($nomor = 1; $nomor <= 10; $nomor++){
        if ($nomor == 5 || $nomor == 9) {
            $status = " Internetnya putus";
        } elseif ($nomor == 7) {
            $status = " Token habis";
        } else {
            $status = " Internet 24 mbps";
        } 
        $gedung = "Gedung $nomor $status";
        echo "$gedung <br>";
    }
   
?>