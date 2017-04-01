<h2 style="text-align: center"> MENU ADMIN</h2>
<div class='col-md-8 col-md-offset-2'>
<a href="index.php?modul=admin&page=tambah" class="btn btn-success"><i class='glyphicon glyphicon-plus'></i> Tambah</a>
<table id="tabel"class="table table-bordered table-hover table-striped">
<thead>
<tr>
<th>No</th>
<th> Nama Kelurahan </th>
<th> Nama Kecamatan </th>
<th> Nama Kota </th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
      <?php
      $no=0;
      $kelurahan=new Kelurahan();
      $data=$kelurahan->find('all');
      foreach ($data as $kelurahan) {                      
      ?>              
<tr>
<td><?=$no+1; ?></td>
<td><?=$kelurahan -> kelurahan ?></td>
<td><?=$kelurahan -> kecamatan ?></td>
<td><?=$kelurahan -> kota ?></td>
<td>

<a href='index.php?modul=admin&page=edit&id=<?=$kelurahan -> id_kelurahan ?>' title="edit" class="btn btn-info">
<i class='glyphicon glyphicon-pencil' ></i>
</a>&nbsp;

<a href='view/admin/kelurahan_action.php?aksi=hapus&id=<?=$kelurahan -> id_kelurahan ?>' title="hapus" 
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
                        

                        
                    