<?php
require_once "layouts/header.php";
require_once "layouts/menu.php";
?>
<div class="container">
    <h2>Form Input Nilai Mahasiswa</h2>
<form>
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select" required="required">
        <option value="Pemograman Web">Pemograman Web</option>
        <option value="Basis Data">Basis Data</option>
        <option value="UI/UX">UI/UX</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="UTS" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="UTS" name="UTS" placeholder="Masukkan Nilai UTS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="UAS" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="UAS" name="UAS" placeholder="Masukkan Nilai UAS" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="Tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="Tugas" name="Tugas" placeholder="Masukkan Nilai Tugas" type="text" class="form-control" required="required">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>
<hr>
<div class="container">
    <table class="table text-uppercase table-bordered">
        <tr class="table-primary">
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Tugas</th>
            <th>Total Nilai</th>
            <th>keterangan</th>
        </tr>
        <?php 
        if (isset($_GET['submit'])) {
        require_once '../../Praktikum2/proses_nilai.php';
        ?>
        <tr>
            <td><?= $nama;?></td>
            <td><?= $matkul;?></td>
            <td><?= $UTS;?></td>
            <td><?= $UAS;?></td>
            <td><?= $Tugas;?></td>
            <td><?= $total_nilai;?></td>
            <td><?= $keterangan;?></td>
        </tr>
        <?php } ?>
    </table>
</div>
<?php require_once "layouts/footer.php"; ?>