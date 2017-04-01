<?php
require_once ('../../ormlib/ActiveRecord.php');
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../../model');
    $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/aprilianto'));
});

$id=$_GET['id'];
$pasienku= new Pasien();
$Pasien=$pasienku->find($id);
$id_kelurahan=$Pasien->id_kelurahan;
$kelurahan=Kelurahan::find($id_kelurahan);
?>
<table class="table">
<tr>
<td>ID PASIEN</td>
<td><?=$Pasien->id_pasien?></td>
</tr>
<tr>
<td>NAMA</td>
<td><?=$Pasien->nama?></td>
</tr>
<tr>
<td>ALAMAT</td>
<td><?=$Pasien->alamat?> &nbsp; RT :<?=$Pasien->rt?> RW :<?=$Pasien->rw?>
<br>KELURAHAN :<?=$kelurahan->kelurahan?> KECAMATAN :<?=$kelurahan->kecamatan?><br> KOTA :<?=$kelurahan->kota?></td>
</tr>
<tr>
<td>TANGGAL LAHIR</td>
<td><?=$Pasien->tanggal_lahir->format("d-m-Y")?></td>
</tr>
<tr>
<td>JENIS KELAMIN</td>
<td><?=$Pasien->jenis_kelamin?></td>
</tr>
<tr>
<td>NO TELEPON</td>
<td><?=$Pasien->no_telepon?></td>
</tr>
</table>