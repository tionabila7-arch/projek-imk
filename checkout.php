<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Checkout Properti</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

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
      <a href="index.html">Beranda</a>
      <a href="index.html#property">Properti</a>
      <a href="index.html#tentang">Tentang</a>
      <a href="index.html#testimoni">Testimoni</a>
      <a href="index.html#kontak">Kontak</a>
    </nav>

    <a href="index.html#kontak" class="btn-primary">
  Hubungi Kami
</a>

  </div>
</header>

  <section class="checkout-section">

    <div class="container">

      <div class="checkout-box">

        <h1>Checkout Properti</h1>

        <form action="proses_checkout.php" method="POST">

          <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>
          </div>

          <div class="form-group">
            <label>Email</label>
           <input type="email" name="email" required>
          </div>

          <div class="form-group">
            <label>Nomor HP</label>
           <input type="text" name="no_hp" required>
          </div>

          <div class="form-group">
            <label>Metode Pembayaran</label>

          <select name="pembayaran" required>
              <option>Transfer Bank</option>
              <option>DANA</option>
              <option>OVO</option>
              <option>GoPay</option>
            </select>
          </div>

          <button type="submit" class="checkout-btn">
            Bayar Sekarang
          </button>

        </form>

      </div>

    </div>

  </section>

  <script>

    const form = document.getElementById('checkoutForm');

    form.addEventListener('submit', function(e){

      e.preventDefault();

      alert('Pembelian berhasil dilakukan!');

      window.location.href = 'success.html';

    });

  </script>

</body>
</html>