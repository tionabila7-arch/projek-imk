<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Properti | Rumah Impian</title>

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- Navbar -->
<header>
  <div class="container navbar">

    <div class="logo">
      <img src="tools/images.png" alt="Logo">
    </div>

    <nav>
      <a href="index.php">Beranda</a>
      <a href="index.php#property">Properti</a>
      <a href="index.php#tentang">Tentang</a>
      <a href="index.php#testimoni">Testimoni</a>
      <a href="index.php#kontak">Kontak</a>
    </nav>

    <a href="https://wa.me/6281362275883?text=Halo%20saya%20ingin%20bertanya%20tentang%20properti"
       class="btn-primary"
       target="_blank">

      <i class="fa-brands fa-whatsapp"></i>
      Hubungi Kami
    </a>

  </div>
</header>

<!-- Detail Properti -->
<section class="detail-section">

  <div class="container detail-container">

    <!-- Gambar -->
    <div class="detail-image">
      <img src="tools/8.jpg" alt="Villa Premium">
    </div>

    <!-- Konten -->
    <div class="detail-content">

      <span class="property-type">
        Villa Premium
      </span>

      <h1>
        Villa Modern Luxury
      </h1>

      <p class="detail-location">
        <i class="fa-solid fa-location-dot"></i>
        Bali, Indonesia
      </p>

      <h2 class="detail-price">
        Rp 2.500.000.000
      </h2>

      <!-- Info -->
      <div class="detail-info">

        <div class="info-box">
          <h3>4</h3>
          <p>Kamar Tidur</p>
        </div>

        <div class="info-box">
          <h3>3</h3>
          <p>Kamar Mandi</p>
        </div>

        <div class="info-box">
          <h3>450m²</h3>
          <p>Luas Tanah</p>
        </div>

      </div>

      <!-- Deskripsi -->
      <p class="detail-description">
        Villa modern premium dengan desain elegan,
        fasilitas lengkap, lokasi strategis,
        serta suasana nyaman yang cocok untuk keluarga
        maupun investasi jangka panjang.
      </p>

      <!-- Tombol -->
      <div class="detail-buttons">

        <a href="checkout.php" class="buy-btn">
          <i class="fa-solid fa-cart-shopping"></i>
          Beli Sekarang
        </a>

        <a href="index.php#property" class="back-btn">
          <i class="fa-solid fa-arrow-left"></i>
          Kembali
        </a>

      </div>

    </div>

  </div>

</section>

</body>
</html>