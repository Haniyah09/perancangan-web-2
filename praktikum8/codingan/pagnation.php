<?php
include "koneksi.php";

$search = "";
$where  = "";

if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $where = "WHERE nama_pelanggan LIKE '%$search%'
              OR alamat LIKE '%$search%'
              OR no_hp LIKE '%$search%'";
}

$count = mysqli_fetch_row(mysqli_query($conn, "SELECT COUNT(id_pelanggan) FROM pelanggan $where"));
$total = $count[0];

$perpage = 5;
$pages   = ceil($total / $perpage);

$page = isset($_GET['page']) ? $_GET['page'] : 1;
if ($page < 1) $page = 1;
if ($page > $pages) $page = $pages;

$start = ($page - 1) * $perpage;

$data = mysqli_query($conn, "SELECT * FROM pelanggan $where LIMIT $start, $perpage");

$pagination = "";

// previous
if ($page > 1) {
    $pagination .= "<a class='pg' href='?page=".($page - 1)."&search=$search'>Previous</a>";
}

// numbering
for ($i = 1; $i <= $pages; $i++) {
    if ($i == $page) $pagination .= "<b class='pg-active'>$i</b>";
    else $pagination .= "<a class='pg' href='?page=$i&search=$search'>$i</a>";
}

// next
if ($page < $pages) {
    $pagination .= "<a class='pg' href='?page=".($page + 1)."&search=$search'>Next</a>";
}
?>
