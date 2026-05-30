<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Gambar</title>
    </head>
    <body>
        <form method="post">
            Tinggi : <input type="number" name="tinggi" value="<?php echo isset($_POST['tinggi']) ? $_POST['tinggi'] : ''; ?>"><br>
            Alamat Gambar : <input type="url" name="url" value="<?php echo isset($_POST['url']) ? $_POST['url'] : ''; ?>"><br>
            <input type="submit" name="submit" value="Cetak">
        </form> 

        <?php 
        if (isset($_POST['submit'])) {
            $tinggi = $_POST['tinggi'];
            $url = $_POST['url'];
            echo '<br>';

            $baris = 0;
            while ($baris < $tinggi) {
                echo '<div style="display:flex; justify-content:flex-end; width:' . ($tinggi * 22) . 'px;">';

                $gambar = 0;
                while ($gambar < ($tinggi - $baris)) {
                    echo '<img src="' . $url . '" width="20px" height="20px" style="margin-bottom:5px">';
                    $gambar++;
                }

                echo '</div>';
                $baris++;
            }
        }
        ?>
    </body>
</html>