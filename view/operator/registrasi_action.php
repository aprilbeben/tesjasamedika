<?php

session_start();
require_once ('../../ormlib/ActiveRecord.php');
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_model_directory('../../model');
    $cfg->set_connections(array('development' => 'mysql://root:@127.0.0.1/aprilianto'));
});

$aksi = mysql_real_escape_string($_REQUEST['aksi']);



if ($aksi == 'tambah') {
	  $data_pasien_terakhir=Pasien::last();
  $id_pasien_terakhir=$data_pasien_terakhir->id_pasien;
   $kodeawal=substr($id_pasien_terakhir,4,7)+1;
        if($kodeawal<10){
            $kode='000000'.$kodeawal;
        }
        elseif($kodeawal>10 && $kodeawal<100){
          $kode='00000'.$kodeawal;
        }
         elseif($kodeawal>100 && $kodeawal<1000){
          $kode='0000'.$kodeawal;
        }
         elseif($kodeawal>1000 && $kodeawal<10000){
          $kode='000'.$kodeawal;
        }
         elseif($kodeawal>10000 && $kodeawal<100000){
          $kode='00'.$kodeawal;
        }
         elseif($kodeawal>100000 && $kodeawal<1000000){
          $kode='0'.$kodeawal;
        }
         elseif($kodeawal>100000 && $kodeawal<1000000){
          $kode=$kodeawal;
        }
        else{
            $kode=001;
        }
    $c=$kode;
    $tahun=date("y");
    $bulan=date("m");
    $id_pasien=$tahun.$bulan.$c;
	$Pasien= new Pasien();
	$Pasien -> id_pasien = $id_pasien;
	$Pasien -> nama = $_POST['nama'];
	$Pasien -> alamat = $_POST['alamat'];
	$Pasien -> no_telepon = $_POST['no_telepon'];
	$Pasien -> rt = $_POST['rt'];
	$Pasien -> rw = $_POST['rw'];
	$Pasien -> id_kelurahan = $_POST['id_kelurahan'];
	$Pasien -> tanggal_lahir = $_POST['tanggal_lahir'];
	$Pasien -> jenis_kelamin = $_POST['jenis_kelamin'];
	$Pasien -> save();

} else if ($aksi == 'edit') {
	$id_pasien = $_REQUEST['id_pasien'];
	$Pasien = Pasien::find($id_pasien);
		$Pasien -> nama = $_POST['nama'];
	$Pasien -> alamat = $_POST['alamat'];
	$Pasien -> no_telepon = $_POST['no_telepon'];
	$Pasien -> rt = $_POST['rt'];
	$Pasien -> rw = $_POST['rw'];
	$Pasien -> id_kelurahan = $_POST['id_kelurahan'];
	$Pasien -> tanggal_lahir = $_POST['tanggal_lahir'];
	$Pasien -> jenis_kelamin = $_POST['jenis_kelamin'];
	$Pasien -> save();

} else if ($aksi == 'hapus') {
	$id_pasien = $_REQUEST['id_pasien'];
	$Pasien = Pasien::find($id_pasien);
	$result = $Pasien -> delete();

}

//check if query successful
if ($result > 0) {
	header('location:../../index.php?modul=operator&page=operator&status=0');
} else {
	header('location:../../index.php?modul=operator&page=operator&status=1');
}
?>
