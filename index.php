<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumah Impian</title>

  <!-- Font Modern -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&family=Great+Vibes&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="style.css">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<body>

  <!-- Navbar -->
  <header>
    <div class="container navbar">
      <div class="logo">
  <img src="tools/images.png" alt="Logo">
</div>

      <nav>
        <a href="#">Beranda</a>
        <a href="#property">Properti</a>
        <a href="#tentang">Tentang</a>
        <a href="#testimoni">Testimoni</a>
        <a href="#kontak">Kontak</a>
      </nav>

     <a href="https://wa.me/6281362275883?text=Halo%20saya%20ingin%20bertanya%20tentang%20properti"
      class="btn-primary"
      target="_blank">
  <i class="fa-brands fa-whatsapp"></i>
  Hubungi Kami
</a>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
    <div class="container hero-wrapper">

      <div class="hero-text">
        <span class="tag">Properti Premium 2026</span>

        <h1>
          Temukan Rumah Elegan untuk Masa Depan Anda
        </h1>

        <p>
          Kami menghadirkan hunian modern dengan desain eksklusif,
          lokasi strategis, dan suasana nyaman untuk keluarga Anda.
        </p>

        <!-- Search -->
        <div class="search-box">
          <input type="text" id="searchInput" placeholder="Cari lokasi atau nama properti...">

          <select id="typeFilter">
            <option value="all">Semua Properti</option>
            <option value="rumah">Rumah</option>
            <option value="villa">Villa</option>
            <option value="apartemen">Apartemen</option>
          </select>

          <button id="searchBtn">Cari Properti</button>
        </div>
      </div>

      <div class="hero-image">
        <div class="slider">
          <button class="slide-btn prev">❮</button>

          <div class="slides">
            <img class="slide active" src="tools/8.jpg" alt="Rumah 1">
            <img class="slide" src="tools/3.webp" alt="Rumah 2">
            <img class="slide" src="tools/6.jpg" alt="Rumah 3">
          </div>

          <button class="slide-btn next">❯</button>
        </div>
      </div>

    </div>
  </section>

  <!-- Property -->
  <section id="property" class="property-section">
    <div class="container">

      <div class="section-title">
        <span>Properti Pilihan</span>
        <h2>Hunian Modern & Mewah</h2>
      </div>

      <div class="property-grid" id="propertyContainer">

        <div class="property-card" data-name="Rumah Minimalis Modern" data-location="Medan" data-type="rumah">
          <img src="tools/3.webp">
          <div class="property-content">
            <span class="property-type">Rumah</span>
            <h3>Rumah Minimalis Modern</h3>
            <p>📍 Medan, Sumatera Utara</p>
            <h4>Rp 850 Juta</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail
</a>
          </div>
        </div>

        <div class="property-card" data-name="Villa Premium" data-location="Bali" data-type="villa">
          <img src="tools/8.jpg">

          <div class="property-content">
            <span class="property-type">Villa</span>
            <h3>Villa Premium</h3>
            <p>📍 Bali</p>
            <h4>Rp 2.5 Miliar</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail
</a>
          </div>
        </div>

        <div class="property-card" data-name="Apartemen City View" data-location="Jakarta" data-type="apartemen">
          <img src="tools/6.jpg">

          <div class="property-content">
            <span class="property-type">Apartemen</span>
            <h3>Apartemen City View</h3>
            <p>📍 Jakarta Selatan</p>
            <h4>Rp 1.3 Miliar</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail
</a>
          </div>
        </div>

        <div class="property-card" data-name="Rumah Scandinavian" data-location="Bandung" data-type="rumah">
          <img src="tools/2.jpeg">

          <div class="property-content">
            <span class="property-type">Rumah</span>
            <h3>Rumah Scandinavian</h3>
            <p>📍 Kalimantan</p>
            <h4>Rp 100 Juta</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail
</a>
          </div>
        </div>

        <div class="property-card" data-name="Villa Premium" data-location="Bali" data-type="villa">
          <img src="tools/4.jpg">

          <div class="property-content">
            <span class="property-type">Villa</span>
            <h3>Villa Premium</h3>
            <p>📍 Balige</p>
            <h4>Rp 2.5 Miliar</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail
</a>
          </div>
        </div>

         <div class="property-card" data-name="Apartemen City View" data-location="Jakarta" data-type="apartemen">
          <img src="tools/7.jpg">

          <div class="property-content">
            <span class="property-type">Apartemen</span>
            <h3>Apartemen City View</h3>
            <p>📍 Jakarta Selatan</p>
            <h4>Rp 1.4 Miliar</h4>
            <a href="detail.html" class="detail-btn">
  Lihat Detail </a>
          </div>
        </div>

      </div>

      <p id="notFound">Properti tidak ditemukan.</p>

    </div>
  </section>

  <!-- Why Us -->
  <section id="tentang">
    <div class="container">

      <div class="section-title">
        <span>Mengapa Kami</span>
        <h2>Pelayanan Eksklusif untuk Anda</h2>
      </div>

      <div class="why-grid">

        <div class="why-card">
          <h3>Desain Premium</h3>
          <p>Hunian modern dengan desain elegan dan futuristik.</p>
        </div>

        <div class="why-card">
          <h3>Lokasi Strategis</h3>
          <p>Berada di kawasan terbaik dan mudah diakses.</p>
        </div>

        <div class="why-card">
          <h3>Harga Kompetitif</h3>
          <p>Investasi properti terbaik untuk masa depan Anda.</p>
        </div>

      </div>
    </div>
  </section>

  <!-- Testimoni -->
  <section id="testimoni">
    <div class="container">

      <div class="section-title">
        <span>Testimoni</span>
        <h2>Apa Kata Mereka?</h2>
      </div>

      <div class="testimonial-grid">

        <div class="testimonial-card">

  <div class="testimonial-profile">
    <img src="tools/org1.jpg" alt="Andi">

    <div>
      <h4>Pak Chairul</h4>
      <span>Pengusaha</span>
    </div>
  </div>

  <p>
    “Desain rumahnya sangat elegan dan proses pembelian sangat mudah.”
  </p>

</div>

        <div class="testimonial-card">

  <div class="testimonial-profile">
    <img src="tools/org2.webp">

    <div>
      <h4>Nabila Putri</h4>
      <span>Interior Designer</span>
    </div>
  </div>

  <p>
    “Saya sangat suka properti-properti yang ada disini.”
  </p>

</div>

        <div class="testimonial-card">

  <div class="testimonial-profile">
    <img src="tools/org3.jpg">

    <div>
      <h4>Rizky Pratama</h4>
      <span>Content Creator</span>
    </div>
  </div>

  <p>
    “Lokasi rumah sangat strategis dan desainnya premium sekali.”
  </p>

</div>
  </section>

  <!-- Footer -->
  <footer id="kontak">
    <div class="container footer-content">

      <div>
        <h3>RumahImpian</h3>
        <p>Website properti modern dengan desain premium dan elegan.</p>
      </div>

      <div>
        <h3>Kontak</h3>
        <p>📍 Medan, Indonesia</p>
        <p>📞 0813-6227-5883</p>
        <p>✉ tyoo@gmail.com</p>
      </div>

    </div>

    <div class="copyright">
      © 2026 RumahImpian. All Rights Reserved.
    </div>
  </footer>

  <!-- JS -->
  <script src="script.js"></script>

</body>
</html>
