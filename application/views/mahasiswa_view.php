<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa oleh Muhamad Bagus Bijaksana (2110020064)</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-4">Selamat Datang di web Muhamad Bagus Bijaksana</h1>
        <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Tambah Data Mahasiswa</a>
        <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="btn btn-success mb-3" target="_blank">
            <i class="fas fa-plus"></i> Cetak Data Mahasiswa</a>
        <table class="table table-bordered mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
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
                        <td>
                            <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="btn btn-secondary mr-2">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="btn btn-danger">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>