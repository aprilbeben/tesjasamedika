
<h1> FORM TAMBAH PASIEN</h1>
<form  id='form_regis' method="POST" action='view/operator/registrasi_action.php'class="form-horizontal" role="form">
  <div id='form_regis_errorloc' style='color:white; background: yellow;'> </div>

  <div class="form-group">
    <label  class="col-sm-3 control-label">NAMA PASIEN</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="nama" name='nama' placeholder="Masukan nama Pasien">
    </div>
  </div>

    <div class="form-group">
    <label  class="col-sm-3 control-label">ALAMAT</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="alamat" name='alamat' placeholder="Masuka alamat">
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-3 control-label">RT</label>
    <div class="col-sm-3">
      <input type="number" class="form-control required span3" id="rt" name='rt' placeholder="RT">
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-3 control-label">RW</label>
    <div class="col-sm-3">
      <input type="number" class="form-control required span3" id="rw" name='rw' placeholder="RW">
    </div>
  </div>
<div class="form-group">
    <label  class="col-sm-3 control-label">CARI KELURAHAN</label>
    <div class="col-sm-5">
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal_kelurahan" >
     <b>Cari</b> <span class="glyphicon glyphicon-search"><i class="icon-search" ></i></span></button>
      <input type="hidden" class="form-control required span3" id="id_kelurahan" name='id_kelurahan' readonly>
    </div>
  </div>
   <div class="form-group">
    <label  class="col-sm-3 control-label">KELURAHAN</label>
    <div class="col-sm-5">
      <input type="text" class="form-control required span3" id="kelurahan" name='kelurahan' readonly>  
    </div>
  </div>

<div class="form-group">
    <label class="col-sm-3 control-label">KECAMATAN</label>
    <div class="col-sm-5">
      <input type="text" class="form-control required span3" id="kecamatan" name='kecamatan' readonly>
    </div>
  </div>

   <div class="form-group">
    <label  class="col-sm-3 control-label">KOTA</label>
    <div class="col-sm-5">
      <input type="text" class="form-control required span3" id="kota" name='kota' readonly>
    </div>
  </div>

  <div class="form-group">
    <label  class="col-sm-3 control-label">TANGGAL LAHIR</label>
    <div class="col-sm-5">
      <input type="date" class="form-control required span3" id="tanggal_lahir" name='tanggal_lahir'>
    </div>
  </div>
   
   <div class="form-group">
    <label  class="col-sm-3 control-label">JENIS KELAMIN</label>
    <div class="col-sm-5">
      <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="laki-laki">LAKI-LAKI</label>
         <label><input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="perempuan">PEREMPUAN</label>
    </div>
  </div>

 <div class="form-group">
    <label  class="col-sm-3 control-label">NO TELEPON</label>
    <div class="col-sm-5">
      <input type="number" class="form-control required span3" id="no_telepon" name='no_telepon'>
    </div>
  </div>

 </div>
  
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='tambah'>tambah</button>
    </div>
  </div>
</form>
                
<div class='modal fade' id='modal_kelurahan' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'style='width:600px; background-color: white;'> 
           <div class='modal-dalog' style='width:600px' >
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
                     <h1>Pilih Kelurahan </h1>
                    </div>
                    <div class='modal-body widget-content' id="data_detail_kelurahan">
                      <?php
                                //Data mentah yang ditampilkan ke tabel    
                                $kelurahan=new Kelurahan();
                                $data=$kelurahan->find('all');
 ?>
 <table id="tabel" class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Kelurahan</th>
                                    <th>kecamatan</th>
                                    <th>kota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                foreach ($data as $kelurahan) {
                                    $id_kelurahan=$kelurahan->id_kelurahan;
                                    $nama_kelurahan=$kelurahan->kelurahan;
                                    $kecamatan=$kelurahan->kecamatan;
                                    $kota=$kelurahan->kota;
                                    ?>
                                    <tr class="pilih" id-kelurahan="<?php echo $id_kelurahan?>" kota="<?php echo $kota?>"
                                    kecamatan="<?php echo $kecamatan?>"kota="<?php echo $nama_kelurahan?>" kelurahan="<?php echo $nama_kelurahan?>">
                                        <td><?=$kelurahan->kelurahan?></td>
                                        <td><?=$kelurahan->kecamatan?></td>
                                        <td><?=$kelurahan->kota?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>               
                    

  <script language="JavaScript" type="text/javascript">
  var frmvalidator_r  = new Validator("form_regis");
  frmvalidator_r.EnableOnPageErrorDisplaySingleBox();
  frmvalidator_r.EnableMsgsTogether();
 
  frmvalidator_r.addValidation("nama","req","nama belum di isi");
  frmvalidator_r.addValidation("nama","alpha_s","nama tidak boleh mengandung angka atau symbol");
  frmvalidator_r.addValidation("nama","maxlen=40","nama maksimal 40 digit");

  frmvalidator_r.addValidation("alamat","req","alamat belum di isi");
 
  frmvalidator_r.addValidation("rt","req","RT belum di isi");
  frmvalidator_r.addValidation("rt","numeric","RT input harus pakai angka");
  frmvalidator_r.addValidation("rt","maxlen=5"," RT maksimal 5 digit");

  frmvalidator_r.addValidation("rw","req","RW belum di isi");
  frmvalidator_r.addValidation("rw","numeric","RW input harus pakai angka");
  frmvalidator_r.addValidation("rw","maxlen=5"," RW maksimal 5 digit");

  frmvalidator_r.addValidation("kelurahan","req","anda belum memilih kelurahan");

  frmvalidator_r.addValidation("jenis_kelamin","selone","jenis kelamin belum di pilih");

  frmvalidator_r.addValidation("no_telepon","req","No telepon belum di isi");
  frmvalidator_r.addValidation("no_telepon","numeric","No telepon input harus pakai angka");
  frmvalidator_r.addValidation("no_telepon","maxlen=12"," No telepon maksimal 12 digit");
  frmvalidator_r.addValidation("no_telepon","minlen=12"," No telepon Minimal 12 digit");

</script>            