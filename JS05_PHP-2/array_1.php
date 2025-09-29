<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
        $Listdosen = ["Elok Nur Hamdana", "Unggul Pemenang", "Bagas Nugraha"];

        echo $Listdosen[2] . "<br>";
        echo $Listdosen[0] . "<br>";
        echo $Listdosen[1] . "<br>";

        echo "Menggunakan loop <br>";
        for ($i=0; $i <= 2; $i++) { 
            echo $Listdosen[$i] . "<br>";
        }
        ?>
    </body>
</html>