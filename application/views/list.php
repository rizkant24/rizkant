<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?=$title?></title>
<link rel="stylesheet" href="">
</head>
<body>
<style>
table {
 font-family: arial, sans-serif;
 border-collapse: collapse;
 width: 100%;
}
td, th {
 border: 1px solid #dddddd;
 text-align: left;
 padding: 8px;
}
tr:nth-child(even) {
 background-color: #dddddd;
}
</style>
<hr>
<center><h3>DATA MAHASISWA</h3></center>
<hr><br>
<?php
if($this->session->flashdata('simpan')) {
 echo '<div align="center">'.$this->session->flashdata('simpan').'</div>';
} else if($this->session->flashdata('update')) {
 echo '<div align="center">'.$this->session->flashdata('update').'</div>';
} else if($this->session->flashdata('hapus')) {
 echo '<div align="center">'.$this->session->flashdata('hapus').'</div>';
} else if($this->session->flashdata('gagal')) {
 echo '<div align="center">'.$this->session->flashdata('gagal').'</div>';
}
?>
<a href="<?=base_URL()?>mahasiswa/tambah" type="button"><input type="button"
value="Tambah Mahasiswa"></a>
<br><br>
<table>
 <thead>
 <tr>
 <th>NO</th>
 <th>NIM</th>
 <th>NAMA</th>
 <th>JENIS KELAMIN</th>
 <th>PROGRAM STUDI / JENJANG</th>
 <th>NO. TELP / HP</th>
 <th>AKSI</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $no = 1;
 foreach($mhs as $m) :
 ?>

 <tr>
 <td><?=$no?></td>
 <td><?=$m->nim?></td>
 <td><?=$m->nama?></td>
 <td><?=$m->jeniskelamin?></td>
 <td><?=$m->programstudi?> / <?=$m->jenjang?></td>
 <td><?=$m->notelp?></td>
 <td>
 <a href="<?=base_URL()?>mahasiswa/edit/<?=$m->nim?>" data-toggle="tooltip"
title="Edit Data"> <input type="button" value="Edit"></a>
 <a href="<?=base_URL()?>mahasiswa/hapus/<?=$m->nim?>" onclick="return
confirm('Kamu yakin ingin menghapus data ini ?')" data-toggle="tooltip" title="Hapus Data">
<input type="button" value="Hapus"></a>
 </td>
 </tr>
 <?php $no++; endforeach; ?>

 </tbody>
 <tfoot>
 </tfoot>
</table>
</body>
</html>
