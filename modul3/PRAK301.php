<!DOCTYPE html>
<html>
    <head>
        <title>Para Peserta</title>
    </head>
    <body>
        <form method="post">
            Jumlah Peserta : <input type="number" name="peserta" value="<?php echo isset($_POST['peserta']) ? $_POST['peserta'] : ''; ?>"><br>
            <input type="submit" name="submit" value="Cetak">
        </form> 

        <?php
        if(isset($_POST['submit'])) {
            $amount = (int)$_POST['peserta'];

            $i = 1;
            while($i <= $amount) {
                if($i % 2 != 0) {
                    $coloring = "red";    
                } else {
                    $coloring = "green";
                }
                echo "<h2 style='color: $coloring';><b>Peserta ke-$i</b></h2>";

                $i++;
            }
        }       
        ?>
    </body>
</html>