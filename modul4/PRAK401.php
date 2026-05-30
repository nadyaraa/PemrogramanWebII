<!DOCTYPE html>
<html>
    <head>
        <title>Matriks</title>
        <style>
            table, td {
                border: 1px solid black;
                border-collapse: collapse;
                text-align: center;
                width: 90px;
                height: 30px;
            }
        </style>
    </head>
    <body>
        <?php
        $panjang = "";
        $lebar = "";
        $nilai = "";
        
        if (isset($_POST["cetak"])) {
            $panjang = $_POST["panjang"];            
            $lebar = $_POST["lebar"];            
            $nilai = $_POST["nilai"];
        }
        ?>

        <form method="post">
            Panjang : <input type="text" name="panjang" value="<?= htmlspecialchars($panjang)?>"><br>
            Lebar : <input type="text" name="lebar" value="<?= htmlspecialchars($lebar)?>"><br>
            Nilai : <input type="text" name="nilai" value="<?= htmlspecialchars($nilai)?>"><br>
            <button type="submit" name="cetak">Cetak</button>
        </form>

        <?php
        if (isset($_POST["cetak"])) {
            $isi = explode(" ", trim($nilai));
            
            if ($panjang * $lebar == count($isi)) {
                $count = 0;
                $tampil = [];

                for ($i = 0; $i < $panjang; $i++) { 
                    for ($j = 0; $j < $lebar; $j++) { 
                        $tampil[$i][$j] = $isi[$count];
                        $count++;
                    }
                }
                echo "<table>";
                for ($i = 0; $i < $panjang; $i++) { 
                    echo "<tr>";

                    for ($j = 0; $j < $lebar; $j++) { 
                        echo "<td>" . htmlspecialchars($tampil[$i][$j]) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
        ?>
    </body>
</html>