<!DOCTYPE html>
<html>
    <head>
        <title>Deret Bintang Pengganti</title>
        <style>
            img.bintang {
                width: 20px;
                height: 20px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            Batas Bawah : <input type="number" name="bawah" value="<?php echo isset($_POST['bawah']) ? $_POST['bawah'] : ''; ?>"><br>
            Batas Atas : <input type="number" name="atas" value="<?php echo isset($_POST['atas']) ? $_POST['atas'] : ''; ?>"><br>
            <input type="submit" name="submit" value="Cetak">
        </form> 

        <?php 
        if (isset($_POST['submit'])) {
            $bawah = $_POST['bawah'];
            $atas = $_POST['atas'];
            echo '<br>';
            
            $i = $bawah;
            do {
                if ((($i + 7) % 5) == 0) {
                    echo '<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png" class="bintang"> ';
                } else {
                    echo $i . " ";
                }

                $i++;

            } while ($i <= $atas);
        }
        ?>
    </body>
</html>