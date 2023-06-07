<?php require('partials/header.php'); ?>
<?php require('partials/nav.php'); ?>
<?php
require "functions.php";

// Get produk by nama produk/menu search
if (isset($_GET['keyword'])) {
  $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
}

// Get produk by kategori
else if (isset($_GET['kategori'])) {
  $kategori = $_GET['kategori'];

  // Query produk
  $queryProduk = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_id IN (SELECT id FROM kategori WHERE nama='$kategori')");
}

// Get produk default
else {
  $queryProduk = mysqli_query($conn, "SELECT * FROM produk");
}

$countData = mysqli_num_rows($queryProduk);

?>

<!-- Home -->
<section class="home" id="home">
  <div class="home-text container">
    <form class="container-fluid" method="GET" action="product.php">
      <div class="search-form">
        <input type="text" id="search-input" name="keyword" placeholder="Cari kategori" class="form-control">
        <button type="submit" class="btn btn-secondary mt-2">Cari</button>
      </div>
    </form>
  </div>
</section>

<div class="post-filter container">
  <?php
  // Query kategori
  $queryKategori = mysqli_query($conn, "SELECT * FROM kategori");

  while ($kategori = mysqli_fetch_array($queryKategori)) { ?>
    <a class="text-decoration-none text-dark" href="product.php?kategori=<?php echo $kategori['nama']; ?>">
      <span class="filter-item" data-filter="tk"><?php echo $kategori['nama']; ?></span>
    </a>
  <?php } ?>
</div>

<div class="post container mt-4">
  <!-- Post 1 -->
  <?php while ($produk = mysqli_fetch_array($queryProduk)) { ?>
    <div class="post-box tk">
      <img src="assets/images/<?php echo $produk['foto']; ?>" alt="" class="post-img" />
      <h2 class="category"><?php echo $produk['nama']; ?></h2>
      <a href="postpage/post.page2.php?nama=<?php echo $produk['nama']; ?>" class="post-title"><?php echo $produk['nama']; ?></a>
      <p class="post-description">
        <?php echo $produk['detail']; ?>
      </p>
      <div class="profile">
        <img src="assets/images/p1.jpg" alt="" class="profile-img" />
        <span class="profile-name">STRA</span>
      </div>

    </div>
  <?php } ?>

</div>

<?php require('partials/footer.php'); ?>