<!DOCTYPE html>
<html>
    <head>
        <title>Data Diri</title>
        <style>
            .warning {
                color: red;
            }
        </style>
    </head>
    <body>      
        <?php 
        $nama = "";
        $nim = "";
        $jenisKelamin = "";
        $warningNama = "";
        $warningNim = "";
        $warningJenisKelamin = "";
        $showOutput = false;

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $nim = $_POST['nim'];
            $jenisKelamin = isset($_POST['jenisKelamin']) ? $_POST['jenisKelamin'] : "";

            if (empty($nama)) {
                $warningNama = "nama tidak boleh kosong";
            }
            if (empty($nim)) {
                $warningNim = "nim tidak boleh kosong";
            } 
            if (empty($jenisKelamin)) {
                $warningJenisKelamin = "jenis kelamin tidak boleh kosong";
            } 
            if (!empty($nama) && !empty($nim) && !empty($jenisKelamin)) {
                $showOutput = true;
            }
        }
        ?>

        <form method="post">
            Nama: <input type="text" name="nama" value="<?php echo $nama; ?>">
            <span class="warning">* <?php echo $warningNama; ?></span><br>

            Nim: <input type="text" name="nim" value="<?php echo $nim; ?>">
            <span class="warning">* <?php echo $warningNim; ?></span><br>

            Jenis Kelamin : <span class="warning">* <?php echo $warningJenisKelamin; ?></span><br>
            <input type="radio" name="jenisKelamin" value="Laki-laki" <?php if ($jenisKelamin == "Laki-laki") echo "checked";?>>
            <label>Laki-laki</label><br>
            <input type="radio" name="jenisKelamin" value="Perempuan" <?php if ($jenisKelamin == "Perempuan") echo "checked";?>>
            <label>Perempuan</label><br>
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        if ($showOutput) {
            echo "<h1>Output:</h1>";
            echo "$nama <br>";
            echo "$nim <br>";
            echo "$jenisKelamin <br>";
        }
        ?>
    </body>
</html>