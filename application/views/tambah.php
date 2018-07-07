<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tambah Mahasiswa</title>
<link rel="stylesheet" href="">
</head>
<body>
<hr>
<center><h3>FORM Tambah MAHASISWA</h3></center>
<hr><br>
<?=form_open('mahasiswa/tambah')?>
 <div class="box-body">
 <div class="form-group">
 <label>NIM : </label>
 <input type="number" name="nim" placeholder="Masukkan NIM" required autofocus>
 </div><br>
 <div class="form-group">
 <label>Nama Mahasiswa : </label>
 <input type="text" name="nama" placeholder="Masukkan Nama Mahasiswa" required
autofocus>
 </div><br>
 <div class="form-group">
 <label>Jenis Kelamin : </label>
 <select name="jeniskelamin" required autofocus>
 <option value="">Pilih Jenis Kelamin</option>
 <option value="Laki-Laki">Laki-Laki</option>
 <option value="Perempuan">Perempuan</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Program Studi : </label>
 <select name="programstudi" required autofocus>
 <option value="">Pilih Program Studi</option>
 <option value="Teknik Informatika">Teknik Informatika</option>
 <option value="Sistem Informasi">Sistem Informasi</option>
 <option value="Manajemen Informatika">Manajemen Informatika</option>
 <option value="Komputer Akuntansi">Komputer Akuntansi</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Jenjang : </label>
 <select name="jenjang" required autofocus>
 <option value="">Pilih Jenjang</option>
 <option value="S1">S1</option>
 <option value="D3">D3</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Semester : </label>
 <select name="semester" required autofocus>
 <option value="">Pilih Semester</option>
 <option value="1">Semester 1</option>
 <option value="2">Semester 2</option>
 <option value="3">Semester 3</option>
 <option value="4">Semester 4</option>
 <option value="5">Semester 5</option>
 <option value="6">Semester 6</option>
 <option value="7">Semester 7</option>
 <option value="8">Semester 8</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>No. Telp / HP : </label>
 <input type="number" name="notelp" placeholder="Masukkan No. Telp / HP" required
autofocus>
 </div><br>
 </div>
 <!-- /.box-body -->
 <div class="box-footer">
 <button type="submit" name="submit">Tambah</button>
 </div>
 <?=form_close()?>
 </body>
 </html>

