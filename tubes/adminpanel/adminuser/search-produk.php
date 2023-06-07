<?php
// require "session.php";
include "koneksi.php";

// Ambil nilai keyword dari URL
$keyword = isset($_GET['search']) ? $_GET['search'] : '';

// Buat query pencarian
$searchQuery = "SELECT a.*, b.nama AS nama_kategori 
                FROM produk a 
                JOIN kategori b ON a.kategori_id=b.id
                WHERE a.nama LIKE '%$keyword%'
                ORDER BY a.nama ASC";

// Eksekusi query pencarian
$searchResult = mysqli_query($conn, $searchQuery);
$jumlahProduk = mysqli_num_rows($searchResult);

?>

<?php
if ($jumlahProduk == 0) {
    echo '<div class="table-responsive mt-5">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>Kategori</th>';
    echo '<th>Nama</th>';
    echo '<th>Foto</th>';
    echo '<th>Detail</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    echo '<tr>';
    echo '<td colspan="6" class="text-center">Data produk tidak ditemukan</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
} else {
    echo '<div class="table-responsive mt-5">';
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>No</th>';
    echo '<th>Kategori</th>';
    echo '<th>Nama</th>';
    echo '<th>Foto</th>';
    echo '<th>Detail</th>';
    echo '<th>Action</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    $jumlah = 1;
    while ($data = mysqli_fetch_array($searchResult)) {
        echo '<tr>';
        echo '<td>' . $jumlah . '</td>';
        echo '<td>' . $data['nama_kategori'] . '</td>';
        echo '<td>' . $data['nama'] . '</td>';
        echo '<td><img src="../../assets/images/' . $data['foto'] . '" alt="" width="200px"></td>';
        echo '<td>' . $data['detail'] . '</td>';
        echo '<td><a href="produk-detail.php?id=' . $data['id'] . '" class="fas fa-search"></a></td>';
        echo '</tr>';
        $jumlah++;
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}
?>
