<!DOCTYPE html>

<head>
    <title>Cetak Daftar Mahasiswa oleh Muhamad Bagus Bijaksana (2110020064)</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Program Studi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>