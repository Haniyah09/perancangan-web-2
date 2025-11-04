<!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>
    <?php
    // Gunakan <?php bukan <? agar dikenali oleh semua versi PHP
    $nama = $_POST["nama"] ?? "";
    $email = $_POST["email"] ?? "";
    $komentar = $_POST["komentar"] ?? "";
    ?>
    
    <h1>Data Buku Tamu</h1>
    <hr>
    <p>Nama Anda: <strong><?php echo htmlspecialchars($nama); ?></strong></p>
    <p>Email Address: <strong><?php echo htmlspecialchars($email); ?></strong></p>
    <p>Komentar:</p>
    <textarea name="komentar" cols="40" rows="5" readonly><?php echo htmlspecialchars($komentar); ?></textarea>
</body>
</html>
