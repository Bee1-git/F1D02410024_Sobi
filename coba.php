<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>belajar PHP </title>
</head>
<body>
  <h1>Nama Anda</h1>
  <form method="post" action="">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>
  <h1>Form Kritik dan Saran</h1>
    <label for="saran">Saran:</label>
    <textarea id="saran" name="saran" rows="4" required></textarea>

    <button type="submit">Kirim</button>
  </form>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = htmlspecialchars($_POST['nama']);
      $kritik = htmlspecialchars($_POST['kritik']);
      $saran = htmlspecialchars($_POST['saran']);
      echo "<p>Halo, $nama!</p>";
      echo "<p><strong>Kritik:</strong> $kritik</p>";
      echo "<p><strong>Saran:</strong> $saran</p>";
    }
  ?>
</body>
</html>

