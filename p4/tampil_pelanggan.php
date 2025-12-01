<?php
include 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM pelanggan");
?>

<h2>Data Pelanggan</h2>
<table border="1" cellpadding="8">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>No Telp</th>
    <th>Alamat</th>
</tr>

<?php
$no = 1;
while($row = mysqli_fetch_assoc($result)) {
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama_pelanggan']; ?></td>
    <td><?= $row['email']; ?></td>
    <td><?= $row['no_telp']; ?></td>
    <td><?= $row['alamat']; ?></td>
</tr>
<?php } ?>
</table>
