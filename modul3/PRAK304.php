<!DOCTYPE html>
<html>
    <head>
        <title>Deret Jumlah Bintang</title>
        <style>
            img.bintang {
                width: 70px;
                height: 70px;
            }
        </style>
    </head>
    <body>
        <?php session_start(); ?>

        <?php 
        if (isset($_POST['submit'])) {
            $_SESSION['jumlah'] = $_POST['jumlah'];
        } elseif (isset($_POST['tambah'])) {
            $_SESSION['jumlah'] += 1;
        } elseif (isset($_POST['kurang'])) {
            if ($_SESSION['jumlah'] > 0) {
                $_SESSION['jumlah'] -= 1;
            }
        } else {
            session_unset();
            session_destroy();
        }
        ?>

        <?php if (!isset($_SESSION['jumlah'])): ?>
            <form method="post">
                Jumlah bintang : <input type="number" name="jumlah" required><br>
                <input type="submit" name="submit" value="Submit">
            </form>
        <?php else: ?>
            <p>Jumlah bintang <?= $_SESSION['jumlah'] ?></p>
            
            <?php
            if ($_SESSION['jumlah'] > 0) {
                $i = 1;
                do {
                    echo '<img src="https://www.freepnglogos.com/uploads/star-png/file-featured-article-star-svg-wikimedia-commons-8.png" class="bintang">';
                    $i++;
                } while ($i <= $_SESSION['jumlah']);
            }
            ?>
            
            <form method="post" style="margin-top: 10px;">
                <input type="submit" name="tambah" value="Tambah"><input type="submit" name="kurang" value="Kurang">
            </form>
        <?php endif; ?>
    </body>
</html>