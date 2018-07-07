<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Edit Mahasiswa</title>
<link rel="stylesheet" href="">
</head>
<body>
<hr>
<center><h3>FORM Edit MAHASISWA</h3></center>
<hr><br>
<?=form_open('mahasiswa/edit')?>
 <div class="box-body">
 <div class="form-group">
 <label>NIM : </label>
 <input type="number" name="nim" value="<?=$mhs['nim']?>" placeholder="Masukkan
NIM" readonly>
 </div><br>
 <div class="form-group">
 <label>Nama Mahasiswa : </label>
 <input type="text" name="nama" value="<?=$mhs['nama']?>" placeholder="Masukkan
Nama Mahasiswa" required autofocus>
 </div><br>
 <div class="form-group">
 <label>Jenis Kelamin : </label>
 <select name="jeniskelamin" required autofocus>
 <option value="">Pilih Jenis Kelamin</option>
 <option value="Laki-Laki" <?php if($mhs['jeniskelamin'] == 'Laki-Laki') { echo
"selected=selected";} ?>>Laki-Laki</option>
 <option value="Perempuan" <?php if($mhs['jeniskelamin'] == 'Perempuan') { echo
"selected=selected";} ?>>Perempuan</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Program Studi : </label>
 <select name="programstudi" required autofocus>
 <option value="">Pilih Program Studi</option>
 <option value="Teknik Informatika" <?php if($mhs['programstudi'] == 'Teknik
Informatika') { echo "selected=selected";} ?>>Teknik Informatika</option>
 <option value="Sistem Informasi" <?php if($mhs['programstudi'] == 'Sistem
Informasi') { echo "selected=selected";} ?>>Sistem Informasi</option>
 <option value="Manajemen Informatika" <?php if($mhs['programstudi'] ==
'Manajemen Informatika') { echo "selected=selected";} ?>>Manajemen
Informatika</option>

 <option value="Komputer Akuntansi" <?php if($mhs['programstudi'] == 'Komputer
Akuntansi') { echo "selected=selected";} ?>>Komputer Akuntansi</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Jenjang : </label>
 <select name="jenjang" required autofocus>
 <option value="">Pilih Jenjang</option>
 <option value="S1" <?php if($mhs['jenjang'] == 'S1') { echo "selected=selected";}
?>>S1</option>
 <option value="D3" <?php if($mhs['jenjang'] == 'D3') { echo "selected=selected";}
?>>D3</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>Semester : </label>
 <select name="semester" required autofocus>
 <option value="">Pilih Semester</option>
 <option value="1" <?php if($mhs['semester'] == '1') { echo "selected=selected";}
?>>Semester 1</option>
 <option value="2" <?php if($mhs['semester'] == '2') { echo "selected=selected";}
?>>Semester 2</option>
 <option value="3" <?php if($mhs['semester'] == '3') { echo "selected=selected";}
?>>Semester 3</option>
 <option value="4" <?php if($mhs['semester'] == '4') { echo "selected=selected";}
?>>Semester 4</option>
 <option value="5" <?php if($mhs['semester'] == '5') { echo "selected=selected";}
?>>Semester 5</option>
 <option value="6" <?php if($mhs['semester'] == '6') { echo "selected=selected";}
?>>Semester 6</option>
 <option value="7" <?php if($mhs['semester'] == '7') { echo "selected=selected";}
?>>Semester 7</option>
 <option value="8" <?php if($mhs['semester'] == '8') { echo "selected=selected";}
?>>Semester 8</option>
 </select>
 </div><br>
 <div class="form-group">
 <label>No. Telp / HP : </label>
 <input type="number" name="notelp" value="<?=$mhs['notelp']?>"
placeholder="Masukkan No. Telp / HP" required autofocus>
 </div><br>
 </div>
 <!-- /.box-body -->
 <div class="box-footer">
 <button type="submit" name="submit">Update</button>
 </div>
<?=form_close()?>
</body>
</html>