<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Kata</title>
    </head>
    <body>
        <form method="post">
            <input type="text" name="input">
            <input type="submit" name="submit" value="Submit">
        </form> 

        <?php 
        if (isset($_POST['submit'])) {
            $input = $_POST['input'];
            $panjang = strlen($input);
            
            echo "<h3><strong>Input:</strong><br></h3>";
            echo $input;
            echo "<h3><strong>Output:</strong><br></h3>";
            
            for ($i = 0; $i < $panjang; $i++) {
                $huruf = $input[$i];
                echo strtoupper($huruf);
                echo str_repeat(strtolower($huruf), $panjang - 1); 
            }
        }
        ?>
    </body>
</html>