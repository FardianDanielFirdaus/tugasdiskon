<!DOCTYPE html>
<html>
<head>
    <title>Diskon</title>
</head>
<body>
    <h1>Diskon</h1>
    
    <form method="post" action="">
        <label for="no_transaksi">No. Transaksi:</label>
        <input type="text" id="no_transaksi" name="no_transaksi"><br>

        <label for="nama_pembeli">Nama Pembeli:</label>
        <input type="text" id="nama_pembeli" name="nama_pembeli"><br>

        <label for="judul_buku">Judul Buku:</label>
        <input type="text" id="judul_buku" name="judul_buku"><br>

        <label for="jumlah_buku">Jumlah Buku:</label>
        <input type="number" id="jumlah_buku" name="jumlah_buku" min="1"><br>

        <label for="harga_buku">Harga Buku:</label>
        <input type="number" id="harga_buku" name="harga_buku" min="1"><br>

        <input type="submit" name="submit" value="Hitung Total">
    </form>

    <?php
   if (isset($_POST['submit'])) {
       $no_transaksi = $_POST['no_transaksi'];
       $nama_pembeli = $_POST['nama_pembeli'];
       $judul_buku = $_POST['judul_buku'];
       $jumlah_buku = $_POST['jumlah_buku'];
       $harga_buku = $_POST['harga_buku'];
   
       $total = $jumlah_buku * $harga_buku;
   
       // tambahkan kode disini untuk menghitung diskon
       $diskon_belanja = 0;
       $diskon_transaksi = 0;
   
       if ($total > 150000) {
           $diskon_belanja = $total * 0.1;
       }
   
       if ($no_transaksi < 50) {
           $diskon_transaksi = $total * 0.05;
       }
   
       $total_bayar = $total - $diskon_belanja - $diskon_transaksi;
       echo "<h2>Hasil Perhitungan</h2>";
        echo "<p>No. Transaksi: $no_transaksi</p>";
        echo "<p>Nama Pembeli: $nama_pembeli</p>";
        echo "<p>Judul Buku: $judul_buku</p>";
        echo "<p>Jumlah Buku: $jumlah_buku</p>";
        echo "<p>Harga Buku: $harga_buku</p>";
        echo "<p>Total Belanja: $total</p>";
        echo "<p>Diskon Belanja: $diskon_belanja</p>";
        echo "<p>Diskon Transaksi: $diskon_transaksi</p>";
        echo "<p>Total Bayar: $total_bayar</p>";
    }
   ?>
    
</body>
</html>