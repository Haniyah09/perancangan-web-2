<!DOCTYPE html>
<html>
<head>
    <title>Form Input Pelanggan</title>
</head>
<body>
<h2>Form Pendaftaran Pelanggan</h2>
<form action="simpan_pelanggan.php" method="post">
    <label>Nama Pelanggan :</label>
    <input type="text" name="nama_pelanggan" required><br><br>

    <label>Email :</label>
    <input type="email" name="email" required><br><br>

    <label>Password :</label>
    <input type="password" name="password" required><br><br>

    <label>No. Telepon :</label>
    <input type="text" name="no_telp" required><br><br>

    <label>Alamat :</label><br>
    <textarea name="alamat" required></textarea><br><br>

    <button type="submit">Simpan</button>
</form>
</body>
</html>
