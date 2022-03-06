<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>from belanja</title>
</head>

<body>
  <form action="from_belanja.php" method="POST"><br>
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Coustomer</label>
      <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Coustomer" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4">Pilih Produk</label>
      <div class="col-8">
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
          <label for="produk_0" class="custom-control-label">TV</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS">
          <label for="produk_1" class="custom-control-label">KULKAS</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
          <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
          <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
      <div class="col-8">
        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <input name="proses" type="submit" value="SIMPAN" class="btn btn-primary" />
      </div>
    </div>
  <form action="from_belanja.php" method="POST">  
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Produk</th>
          <th scope="col">Harga</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>TV</td>
          <td name="harga" id="harga">4.200.000</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>KULKAS</td>
          <td name="harga" id="harga">3.100.000</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>MESIN CUCI</td>
          <td name="harga" id="harga">3.800.000</td>
        </tr>
      </tbody>
    </table>
  </form>
  </form>

  <!-- Kode PHP -->
  <?php

  // Menangkap Data
$proses = $_POST["proses"];
$nama = $_POST["nama"];
$produk = $_POST["produk"];
$jumlah = $_POST["jumlah"]; 
 
if ($produk == "TV") {
  $total = $jumlah * 4200000;
}elseif ($produk == "KULKAS") {
  $total = $jumlah * 3100000;
}elseif ($produk == "MESIN CUCI") {
  $total = $jumlah * 3800000;
}else {
  $total =0;
}
// $bayar = $harga*$jumlah*$produk ;
echo 'Proses :' . $proses;
echo '<br> Nama Coustomer :' . $nama;
echo '<br> Produk :' . $produk;
echo '<br> jumlah :' . $jumlah;
echo '<br> Harga :' . $total;
// echo '<br> bayar :' . $bayar";


?>

</body>

</html>