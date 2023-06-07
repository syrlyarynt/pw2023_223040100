<?php
// require "session.php";
include "koneksi.php";
require "../vendor/autoload.php";

$queryKategori = mysqli_query($conn, "SELECT * FROM kategori");
$jumlahkategori = mysqli_num_rows($queryKategori);

// Generate PDF
if (isset($_GET['generate_pdf'])) {
    $mpdf = new \Mpdf\Mpdf();
    ob_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Kategori</title>
        <style>
            .no-decoration {
                text-decoration: none;
            }
        </style>
    </head>

    <body>
        <div class="container mt-5">
            <h2>List Kategori</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($jumlahkategori == 0) {
                    ?>
                        <tr>
                            <td colspan="2" class="text-center">Data kategori tidak tersedia</td>
                        </tr>
                        <?php
                    } else {
                        $jumlah = 1;
                        while ($data = mysqli_fetch_array($queryKategori)) {
                        ?>
                            <tr>
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                    <?php
                            $jumlah++;
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </body>

    </html>

<?php
    $html = ob_get_contents();
    ob_end_clean();
    $mpdf->WriteHTML($html);
    $mpdf->Output(); // Mengunduh file PDF dengan nama "kategori.pdf"
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    .no-decoration {
        text-decoration: none;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <a href="admin.php" class="no-decoration text-muted">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Kategori
                </li>
            </ol>
        </nav>

        <div class="mt-3">
            <h2>List Kategori</h2>

            <form id="search-form" class="mb-3">
                <input type="text" id="search-input" name="search" placeholder="Cari kategori" class="form-control">
                <button type="submit" class="btn btn-primary mt-2">Cari</button>
                <a href="tambah-kategori.php" class="btn btn-primary mt-2">Tambah</a>
            </form>

            <div class="table-responsive" id="kategori-table">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($jumlahkategori == 0) {
                            ?>
                                <tr>
                                    <td colspan=3 class="text-center">Data kategori tidak tersedia</td>
                                </tr>
                                <?php
                            } else {
                                $jumlah = 1;
                                while ($data = mysqli_fetch_array($queryKategori)) {
                                ?>
                                    <tr>
                                        <td><?php echo $jumlah; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td>
                                            <a href="kategori-detail.php?id=<?php echo $data['id']; ?>" class="fas fa-search"></a>
                                        </td>
                                    </tr>
                            <?php
                                    $jumlah++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mb-5 text-end">
            <a href="?generate_pdf" class="btn btn-danger">Generate PDF</a>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/84b8f8fd02.js" crossorigin="anonymous"></script>

    <script>
        // Fungsi untuk melakukan permintaan Ajax
        function searchKategori() {
            var searchInput = document.getElementById('search-input').value;
            var url = 'search.php?search=' + encodeURIComponent(searchInput);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('kategori-table').innerHTML = this.responseText;
                }
            };
            xhttp.open('GET', url, true);
            xhttp.send();
        }

        // Menangani submit form pencarian
        document.getElementById('search-form').addEventListener('keyup', function(event) {
            event.preventDefault(); // Menghentikan pengiriman form
            searchKategori(); // Memanggil fungsi pencarian
        });

        // Tampilkan semua kategori saat halaman pertama kali dimuat
        searchKategori();
    </script>


</body>

</html>