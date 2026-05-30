<!DOCTYPE html>
<html>
    <head>
        <title>Data Mahasiswa</title>
        <style>
            table {
                width: 600px;
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: lightgray;
            }
            .revisi {
                background-color: red;
            }
            .tidakRevisi {
                background-color: green;
            }
        </style>
    </head>
    <body>
        <?php
        $mahasiswa = [
            [
                "nama" => "Ridho",
                "matkul" => [
                    ["mk" => "Pemrograman I", "sks" => "2"],
                    ["mk" => "Praktikum Pemrograman I", "sks" => "1"],
                    ["mk" => "Pengantar Lingkungan Lahan Basah", "sks" => "2"],
                    ["mk" => "Arsitektur Komputer", "sks" => "3"]
                ]
            ],
            [
                "nama" => "Ratna",
                "matkul" => [
                    ["mk" => "Basis Data I", "sks" => "2"],
                    ["mk" => "Praktikum Basis Data I", "sks" => "1"],
                    ["mk" => "Kalkulus", "sks" => "3"]
                ]
            ],
            [
                "nama" => "Tono",
                "matkul" => [
                    ["mk" => "Rekayasa Perangkat Lunak", "sks" => "3"],
                    ["mk" => "Analisis dan Perancangan Sistem", "sks" => "3"],
                    ["mk" => "Komputasi Awan", "sks" => "3"],
                    ["mk" => "Kecerdasan Bisnis", "sks" => "3"],
                ]
            ]
        ];

        foreach ($mahasiswa as $key => $data) {
            $total_sks = 0;
            foreach ($data['matkul'] as $mataKuliah) {
                $total_sks += $mataKuliah['sks'];
            }
            $mahasiswa[$key]['total_sks'] = $total_sks;
            $mahasiswa[$key]['keterangan'] = ($total_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
        }
        ?>

        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Mata Kuliah Diambil</th>
                <th>SKS</th>
                <th>Total SKS</th>
                <th>Keterangan</th>
            </tr>

            <?php
            $no = 1;
            foreach ($mahasiswa as $data) {
                foreach ($data['matkul'] as $index => $mataKuliah) {
                    echo "<tr>";
                    if ($index == 0) {
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . htmlspecialchars($data['nama']) . "</td>";
                        echo "<td>" . htmlspecialchars($mataKuliah['mk']) . "</td>";
                        echo "<td>" . $mataKuliah['sks'] . "</td>";
                        echo "<td>" . $data['total_sks'] . "</td>";

                        $class = ($data['keterangan'] == "Revisi KRS") ? "revisi" : "tidakRevisi";
                        echo "<td class='$class'>" . $data['keterangan'] . "</td>";
                    } else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>" . htmlspecialchars($mataKuliah['mk']) . "</td>";
                        echo "<td>" . $mataKuliah['sks'] . "</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
            ?>
        </table>
    </body>
</html>