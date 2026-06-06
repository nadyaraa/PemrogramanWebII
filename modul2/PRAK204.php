<!DOCTYPE html>
<html>
    <head>
        <title>Konversi Nilai</title>
    </head>
    <body>
        <?php 
        if (isset($_POST["submit"])) {
            $nilai = $_POST["nilai"];
        }
        ?>
    
        <form action="" method="post">
            Nilai: <input type="number" name="nilai" value="<?php echo $nilai; ?>"><br>
            <input type="submit" name="submit" value="Konversi">
        </form>
        
        <?php 
        if (isset($_POST["submit"])) {
            $nilai = $_POST["nilai"];
                if ($nilai == 0) {
                    echo "<h3>Hasil: Nol</h3>";
                } else if ($nilai > 0 && $nilai < 10) {
                    echo "<h3>Hasil: Satuan</h3>";
                } else if ($nilai == 10) {
                    echo "<h3>Hasil: Puluhan</h3>";
                } else if ($nilai > 10 && $nilai < 20) {
                    echo "<h3>Hasil: Belasan</h3>";
                } else if ($nilai >= 20 && $nilai < 100) {
                    echo "<h3>Hasil: Puluhan</h3>";
                } else if ($nilai >= 100 && $nilai < 1000) {
                    echo "<h3>Hasil: Ratusan</h3>";
                } else {
                    echo "<h3>Hasil: Anda Menginput Melebihi Limit Bilangan</h3>";
                }
        }
        ?>
    </body>
</html>