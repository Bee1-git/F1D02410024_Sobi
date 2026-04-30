<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar PHP - Database</title>
</head>
<body>
  <h1>Form Kritik dan Saran</h1>
  
  <form method="post" action="">
    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="kritik">Kritik/Saran:</label><br>
    <textarea id="kritik" name="kritik" rows="4" required></textarea><br><br>

    <button type="submit" name="submit">Kirim</button>
  </form>

  <?php
    if (isset($_POST['submit'])) {
   
      $host     = "localhost";
      $user     = "root";
      $pass     = "";     
      $db_name  = "web";

      $conn = mysqli_connect($host, $user, $pass, $db_name);

      if (!$conn) {
          die("Koneksi gagal: " . mysqli_connect_error());
      }

      $nama   = mysqli_real_escape_string($conn, $_POST['nama']);
      $kritik = mysqli_real_escape_string($conn, $_POST['kritik']);


      $sql = "INSERT INTO saran (nama, kritik) VALUES ('$nama', '$kritik')";

      if (mysqli_query($conn, $sql)) {
          echo "<p style='color: green;'>Data berhasil disimpan ke tabel saran!</p>";
          echo "<p>Halo, $nama! Terima kasih atas masukannya.</p>";
      } else {
          echo "<p style='color: red;'>Error: " . mysqli_error($conn) . "</p>";
      }

      mysqli_close($conn);
    }
  ?>
</body>
</html>