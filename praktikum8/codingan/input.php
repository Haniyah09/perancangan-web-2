<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {

    $nama   = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    $no_hp  = $_POST['no_hp'];

    mysqli_query($conn, "INSERT INTO pelanggan (nama_pelanggan, alamat, no_hp)
                         VALUES ('$nama', '$alamat', '$no_hp')");

    echo "<script>alert('Pelanggan berhasil ditambahkan!'); 
          window.location='index.php';
          </script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>
    <style>
        body { font-family: Poppins, Arial; background: #eef2f7; padding: 40px; }

        .box {
            width: 380px;
            margin: auto;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,.1);
        }

        input, textarea, button {
            width: 100%;
            padding: 12px;
            margin-top: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        textarea { height: 80px; resize: none; }

        button {
            background: #3b82f6;
            color: white;
            border: none;
            cursor: pointer;
        }

        a {
            text-align: center;
            display: block;
            margin-top: 16px;
            text-decoration: none;
            color: #3b82f6;
        }
    </style>
</head>

<body>

<div class="box">
    <h2 align="center">Tambah Pelanggan</h2>

    <form method="POST">

        <input type="text" name="nama_pelanggan" placeholder="Nama Pelanggan" required>

        <textarea name="alamat" placeholder="Alamat" required></textarea>

        <input type="text" name="no_hp" placeholder="No HP" required>

        <button name="simpan">SIMPAN</button>
    </form>

    <a href="index.php">← Kembali</a>
</div>

</body>
</html>
