<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<h5 class="mt-3 ml-5">Sistem Penilaian</h5>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Belanja Online</h1>
            <form method="POST">
            <div class="form-group row">
                <label for="nama" class="col-4 col-form-label">Customer</label> 
                <div class="col-8">
                <input id="nama" name="nama" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                    <label for="radio_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                    <label for="radio_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="radio_2" type="radio" class="custom-control-input" value="mesin_cuci"> 
                    <label for="radio_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-8">
                <input id="text" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" name="kirim" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        
        </div>
        <div class="col-md-4">
            <table class="table">
                <tr class="bg-primary text-white">
                    <th>DAFTAR HARGA</th>
                </tr>
                
                <tr>
                    <td>TV : Rp. 4.200.000</td>
                </tr>
                <tr>
                    <td>KULKAS : Rp. 3.100.000</td>
                </tr>
                <tr>
                    <td>Mesin Cuci : Rp. 3.800.000</td>
                </tr>
                <tr class="bg-primary text-white">
                    <th>HARGA DAPAT BERUBAH SETIAP SAAT</th>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <table class="table">
  <thead class="table-primary">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Produk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Total Harga</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (isset($_POST['submit'])) {
        if ($_POST['produk'] == 'tv'){
            $harga = 4200000;
        }
        else if ($_POST['produk'] == 'kulkas'){
            $harga = 3100000;
        }
        if ($_POST['produk'] == 'mesin_cuci'){
            $harga = 3800000;
        }
    ?>
    <tr>
      <th><?= $_POST['nama']?></th>
      <td><?= $_POST['produk']?></td>
      <td><?= $_POST['jumlah']?></td>
      <td>Rp. <?=number_format($harga * $_POST['jumlah']) ?></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>

</body>
</html>