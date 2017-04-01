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
	$Kelurahan= new Kelurahan();
	$Kelurahan -> kelurahan = $_POST['kelurahan'];
	$Kelurahan -> kecamatan = $_POST['kecamatan'];
	$Kelurahan -> kota = $_POST['kota'];
	$Kelurahan -> save();

} else if ($aksi == 'edit') {
	$id = $_REQUEST['id'];
	$Kelurahan = Kelurahan::find($id);
	$Kelurahan -> kelurahan = $_POST['kelurahan'];
	$Kelurahan -> kecamatan = $_POST['kecamatan'];
	$Kelurahan -> kota = $_POST['kota'];
	$Kelurahan -> save();

} else if ($aksi == 'hapus') {
	$id = $_REQUEST['id'];
	$Kelurahan = Kelurahan::find($id);
	$result = $Kelurahan -> delete();

}

//check if query successful
if ($result > 0) {
	header('location:../../index.php?modul=admin&page=admin&status=0');
} else {
	header('location:../../index.php?modul=admin&page=admin&status=1');
}
?>
