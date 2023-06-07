<?php
include "koneksi.php";

if (isset($_GET['search'])) {
    $search = $_GET['search'];

    // Buat query untuk mencari kategori berdasarkan nama
    $querySearch = mysqli_query($conn, "SELECT * FROM kategori WHERE nama LIKE '%$search%'");
    $jumlahKategori = mysqli_num_rows($querySearch);

    if ($jumlahKategori > 0) {
        // Jika ditemukan kategori yang sesuai, tampilkan dalam tabel
        echo '
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
        ';

        $nomor = 1;
        while ($data = mysqli_fetch_array($querySearch)) {
            echo '
                <tr>
                    <td>' . $nomor . '</td>
                    <td>' . $data['nama'] . '</td>
                    <td>
                        <a href="kategori-detail.php?id=' . $data['id'] . '" class="fas fa-search"></a>
                    </td>
                </tr>
            ';
            $nomor++;
        }

        echo '
                </tbody>
            </table>
        ';
    } else {
        // Jika tidak ditemukan kategori yang sesuai, tampilkan pesan
        echo '<p class="text-center">Data kategori tidak ditemukan</p>';
    }
} else {
    // Jika parameter 'search' tidak ada, tampilkan semua kategori
    $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    if ($jumlahKategori > 0) {
        // Tampilkan tabel kategori
        echo '
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
        ';

        $nomor = 1;
        while ($data = mysqli_fetch_array($queryKategori)) {
            echo '
                <tr>
                    <td>' . $nomor . '</td>
                    <td>' . $data['nama'] . '</td>
                    <td>
                        <a href="kategori-detail.php?id=' . $data['id'] . '" class="fas fa-search"></a>
                    </td>
                </tr>
            ';
            $nomor++;
        }

        echo '
                </tbody>
            </table>
        ';
    } else {
        // Tampilkan pesan jika tidak ada data kategori
        echo '<p class="text-center">Data kategori tidak tersedia</p>';
    }
}
