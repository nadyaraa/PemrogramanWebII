<!DOCTYPE html>
<html>
    <head>
        <title>Konversi Suhu</title>
    </head>
    <body>
        <?php 
        if (isset($_POST["submit"])) {
            $suhu = $_POST["suhu"];
            $suhuAwal = $_POST["suhuAwal"];
            $suhuKonversi = $_POST["suhuKonversi"];
        }
        ?>

        <form action="" method="post">
            Nilai: <input type="text" name="suhu" value="<?php if (isset($suhu)) echo $suhu ?>"><br>
            Dari : <br>
            <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Celcius") echo "checked"; ?> value="Celcius">Celcius<br>
            <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Fahrenheit") echo "checked"; ?> value="Fahrenheit">Fahrenheit<br>
            <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Rheamur") echo "checked"; ?> value="Rheamur">Rheamur<br>
            <input type="radio" name="suhuAwal" <?php if (isset($suhuAwal) && $suhuAwal == "Kelvin") echo "checked"; ?> value="Kelvin">Kelvin<br>
                
            Ke : <br>
            <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Celcius") echo "checked"; ?> value="Celcius">Celcius<br>
            <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Fahrenheit") echo "checked"; ?> value="Fahrenheit">Fahrenheit<br>
            <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Rheamur") echo "checked"; ?> value="Rheamur">Rheamur<br>
            <input type="radio" name="suhuKonversi" <?php if (isset($suhuKonversi) && $suhuKonversi == "Kelvin") echo "checked"; ?> value="Kelvin">Kelvin<br>
             
            <input type="submit" name="submit" value="Konversi">
        </form>

        <?php 
        if (isset($_POST["submit"])) {
            switch ($suhuAwal) {
                case "Celcius":
                    switch ($suhuKonversi) {
                        case 'Celcius':
                            $hasil = $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °C</h2>";
                            break;
                        case 'Fahrenheit':
                            $hasil = (9/5) * $suhu + 32;
                            echo "<h2>Hasil Konversi: ".$hasil." °F</h2>";
                            break;
                        case 'Rheamur':
                            $hasil = (4/5) * $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °R</h2>";
                            break;
                        case 'Kelvin':
                            $hasil = $suhu + 273.15;
                            echo "<h2>Hasil Konversi: ".$hasil." °K</h2>";
                            break;
                    }
                    break;
                case "Fahrenheit":
                    switch ($suhuKonversi) {
                        case 'Celcius':
                            $hasil = (5/9) * ($suhu - 32);
                            echo "<h2>Hasil Konversi: ".$hasil." °C</h2>";
                            break;
                        case 'Fahrenheit':
                            $hasil = $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °F</h2>";
                            break;
                        case 'Rheamur':
                            $hasil = (4/9) * ($suhu - 32);
                            echo "<h2>Hasil Konversi: ".$hasil." °R</h2>";
                            break;
                        case 'Kelvin':
                            $hasil = (5/9) * ($suhu - 32) + 273.15;
                            echo "<h2>Hasil Konversi: ".$hasil." °K</h2>";
                            break;
                    }
                    break;
                case "Rheamur":
                    switch ($suhuKonversi) {
                        case 'Celcius':
                            $hasil = (5/4) * $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °C</h2>";
                            break;
                        case 'Fahrenheit':
                            $hasil = (9/4) * $suhu + 32;
                            echo "<h2>Hasil Konversi: ".$hasil." °F</h2>";
                            break;
                        case 'Rheamur':
                            $hasil = $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °R</h2>";
                            break;
                        case 'Kelvin':
                            $hasil = (5/4) * $suhu + 273.15;
                            echo "<h2>Hasil Konversi: ".$hasil." °K</h2>";
                            break;
                    }
                    break;
                case "Kelvin":
                    switch ($suhuKonversi) {
                        case 'Celcius':
                            $hasil = $suhu - 273.15;
                            echo "<h2>Hasil Konversi: ".$hasil." °C</h2>";
                            break;
                        case 'Fahrenheit':
                            $hasil = (9/5) * ($suhu - 273.15) + 32;
                            echo "<h2>Hasil Konversi: ".$hasil." °F</h2>";
                            break;
                        case 'Rheamur':
                            $hasil = (4/5) * ($suhu - 273.15);
                            echo "<h2>Hasil Konversi: ".$hasil." °R</h2>";
                            break;
                        case 'Kelvin':
                            $hasil = $suhu;
                            echo "<h2>Hasil Konversi: ".$hasil." °K</h2>";
                            break;
                    }
                    break;
                default:
                    echo "Invalid";
                    break;
            }
        }
        ?>
    </body>
</html>