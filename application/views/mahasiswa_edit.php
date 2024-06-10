<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa oleh Muhamad Bagus Bijaksana (2110020064)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('https://source.unsplash.com/random/1920x1080') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"],
        .btn-back {
            background-color: #28a745;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin: 5px;
        }

        input[type="submit"]:hover,
        .btn-back:hover {
            background-color: #218838;
        }

        .btn-back {
            background-color: #007bff;
        }

        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <form action="<?php echo site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
        <h1>Form Edit Mahasiswa</h1>
        <label for="nim">NIM</label>
        <input type="text" name="nim" value="<?php echo $mahasiswa->NIM ?>"><br>
        <label for="nama_mhs">Nama Mahasiswa</label>
        <input type="text" name="nama_mhs" value="<?php echo $mahasiswa->nama_mhs ?>"><br>
        <label for="id_prodi">Program Studi</label>
        <div class="select-container">
            <select name="id_prodi" id="id_prodi" required>
                <option value="">Pilih Program Studi</option>
                <?php foreach ($prodi as $ps) : ?>
                    <option value="<?= $ps->id_prodi ?>" <?= $mahasiswa->id_prodi == $ps->id_prodi ? 'selected' : '' ?>>
                        <?= $ps->nama_prodi ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <input type="submit" value="Perbaharui">
        <a href="<?php echo site_url('mahasiswa') ?>" class="btn-back">Kembali</a>
    </form>
</body>

</html>