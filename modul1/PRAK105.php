<?php
$hp = [
    "Samsung Galaxy S22",
    "Samsung Galaxy S22+",
    "Samsung Galaxy A03",
    "Samsung Galaxy Xcover 5"
]
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                border: 2px solid black;
                width: 310px;
                border-spacing: 0;
            }
            th {
                font-weight: bold;
            }
            .title {
                height: 67px;
                font-size: 24px;
                font-weight: bold;
                background-color: red;
                display: flex;
                align-items: center;
            }
            .innerbox {
                border: 2px solid black;
                padding: 1px;
            }
        </style>
    </head>
    <body>
        <table>
            <tr>
                <th><div class='innerbox title'>Daftar Smartphone Samsung</div></th>
            </tr>

            <?php
            foreach ($hp as $item) {
                echo "<tr><td><div class='innerbox'>$item</div></td></tr>";
            }
            ?>
        </table>
    </body>
</html>