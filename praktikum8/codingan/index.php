<?php include "pagination.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <style>
        body {
            font-family: Poppins, Arial;
            background: #eef2f7;
            padding: 40px;
        }

        .container {
            width: 900px;
            margin: auto;
        }

        h2 { text-align: center; color: #333; }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .btn-add {
            padding: 10px 18px;
            background: #3b82f6;
            color: white;
            text-decoration: none;
            border-radius: 6px;
        }

        .search-box input {
            padding: 10px;
            width: 200px;
            border-radius: 5px;
            border: 1px solid #aaa;
        }

        .search-box button {
            padding: 10px 14px;
            border: none;
            background: #10b981;
            color: white;
            border-radius: 5px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }

        th {
            background: #3b82f6;
            color: white;
            padding: 12px;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            text-align: center;
        }

        #pagination {
            margin-top: 20px;
            text-align: center;
        }

        .pg {
            margin: 4px;
            padding: 6px 12px;
            background: #fff;
            border: 1px solid #3b82f6;
            color: #3b82f6;
            border-radius: 5px;
            text-decoration: none;
        }

        .pg-active {
            margin: 4px;
            padding: 6px 12px;
            background: #3b82f6;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2>DATA PELANGGAN</h2>

    <div class="top-bar">
        <a class="btn-add" href="input.php">+ Tambah Pelanggan</a>

        <form class="search-box" method="GET">
            <input type="text" name="search" value="<?= $search ?>" placeholder="Cari nama/alamat/no hp...">
            <button type="submit">Cari</button>
        </form>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Pelanggan</th>
            <th>Alamat</th>
            <th>No. HP</th>
        </tr>

        <?php 
        if ($total == 0) {
            echo "<tr><td colspan='4'>Tidak ada data pelanggan...</td></tr>";
        } else {
            while($row = mysqli_fetch_assoc($data)) { ?>
                <tr>
                    <td><?= $row['id_pelanggan']; ?></td>
                    <td><?= $row['nama_pelanggan']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td><?= $row['no_hp']; ?></td>
                </tr>
        <?php } } ?>
    </table>

    <div id="pagination">
        <?= $pagination ?>
    </div>
</div>

</body>
</html>
