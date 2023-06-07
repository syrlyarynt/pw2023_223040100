<?php

require('partials/header.php');
require('../functions.php');

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);

?>
<!-- Navbar -->
<?php require('partials/nav.php'); ?>

<!-- Post Content -->
<section class="post-header">
  <div class="header-content post-container">
    <!-- Tittle -->
    <h1 class="header-title"><?php echo $produk['nama']; ?></h1>
    <!-- Back to home -->
    <a href="../product.php" class="back-home"><i class='bx bx-arrow-back'></i></a>
    <!-- Post img -->
    <img style="border-radius: 20px;" src="../assets/images/<?php echo $produk['foto']; ?>" alt="" width="45%">
  </div>
</section>

<!-- post -->
<section class="post-content post-container">
  <h2 class="sub-heading"><?php echo $produk['nama']; ?></h2>
  <p class="post-text"><?php echo $produk['detail']; ?></p>
  <!-- <h2 class="sub-heading">Sejarah dan Perkembangan Radio</h2> -->
  <!-- <p class="post-text"><?php echo $produk['detail']; ?></p> -->
</section>

<!-- ... bagian lain dari halaman ... -->

<?php require('partials/footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./assets/js/script.js"></script>
</body>

</html>