<h2 style="text-align: center"> MENU OPERTAOR</h2>
<div class='col-md-8 col-md-offset-2'>
<a href="index.php?modul=operator&page=tambah" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
<table id="tabel"class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>ID PASIEN</th>
<th> NAMA </th>
<th> ALAMAT </th>
<th> RT </th>
<th> RW </th>
<th> KELURAHAN </th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
      <?php
      $no=0;
     $data = Pasien::find_by_sql('select pasien.* ,kelurahan.* from pasien join kelurahan on pasien.id_kelurahan=kelurahan.id_kelurahan');
      foreach ($data as $Pasien) {
                             
      ?>              
<tr>
<td><?=$Pasien-> id_pasien; ?></td>
<td><?=$Pasien -> nama ?></td>
<td><?=$Pasien -> alamat ?></td>
<td><?=$Pasien -> rt ?></td>
<td><?=$Pasien -> rw ?></td>
<td><?=$Pasien -> kelurahan ?></td>
<td>
<button class="btn btn-warning" title="detail" value="<?=$Pasien->id_pasien?>" onclick="fungsi_detail_pasien(this.value)" data-toggle="modal" data-target="#detail_pasien_modal">
<i class='glyphicon glyphicon-file' ></i></button>

<a href='index.php?modul=operator&page=edit&id_pasien=<?=$Pasien -> id_pasien ?>' title="edit" class="btn btn-info">
<i class='glyphicon glyphicon-pencil' ></i>
</a>&nbsp;

<a href='view/operator/registrasi_action.php?aksi=hapus&id_pasien=<?=$Pasien -> id_pasien ?>' title="hapus" 
onclick="return confirm('Yakin data akan dihapus?') "; class="btn btn-danger"> <i class='glyphicon glyphicon-remove' ></i>
</a>
</td>
</tr>
     <?php
      $no++;
	    }
      ?>                         

</tbody>
</table>
</div>
                        
<div class='modal fade' id='detail_pasien_modal' tabindex='-2' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:600px; background-color: white;'> 
           <div class='modal-dalog' style='width:600px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>Detail Pasien </h1>
                    </div>
                    <div class='modal-body widget-content' id='data_detail_pasien'>
                   
</div>
</div>
</div>  

