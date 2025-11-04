<!DOCTYPE html>
<html>
<head>
    <title>Proses Input</title>
</head>
<body>
    <?php
    // Gunakan <?php agar dikenali semua server PHP
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";
    ?>
    
    <h2>Hasil Input</h2>
    <hr>
    <p>Username: <strong><?php echo htmlspecialchars($username); ?></strong></p>
    <p>Password: <strong><?php echo htmlspecialchars($password); ?></strong></p>
</body>
</html>
