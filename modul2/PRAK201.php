<!DOCTYPE html>
<html>
    <head>
        <title>Urutkan Nama</title>
    </head>
    <body>
        <form method="post">
            Nama: 1 <input type="text" name="nama1"><br>
            Nama: 2 <input type="text" name="nama2"><br>
            Nama: 3 <input type="text" name="nama3"><br>
            <input type="submit" name="submit" value="Urutkan">
        </form>

        <?php
        if(isset($_POST['submit'])){
            $a = $_POST['nama1'];
            $b = $_POST['nama2'];
            $c = $_POST['nama3'];
            
            $hasil = "";
            
            if ($a <= $b && $a <= $c) {
                if ($b <= $c) {
                    $hasil = "$a <br> $b <br> $c";
                } else {
                    $hasil = "$a <br> $c <br> $b";
                }
            } elseif ($b <= $a && $b <= $c) {
                if ($a <= $c) {
                    $hasil = "$b <br> $a <br> $c";
                } else {
                    $hasil = "$b <br> $c <br> $a";
                }
            } else {
                if ($a <= $b) {
                    $hasil = "$c <br> $a <br> $b";
                } else {
                    $hasil = "$c <br> $b <br> $a";
                }
            }

            echo $hasil;
        }
        ?>
    </body>
</html>