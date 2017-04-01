  <?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $aksi = "edit";
 $Kelurahanku=new Kelurahan();
 $kelurahan=$Kelurahanku->find($id);
}
?>                   
<form  id='form_kelurahan' method="POST" action='view/admin/kelurahan_action.php'class="form-horizontal" role="form">

<div id='form_kelurahan_errorloc' style='color:white; background: yellow;'>
                              </div>
<input type='hidden' name='id' value='<?=$id?>'>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kelurahan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="kelurahan" name='kelurahan' value='<?=$kelurahan->kelurahan?>'
       placeholder="Masukan nama kecamatan">
    </div>
  </div>

    <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kecamatan</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="kecamatan" name='kecamatan' value='<?=$kelurahan->kecamatan?>'
       placeholder="Masukan nama kecamatan">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Nama Kota</label>
    <div class="col-sm-9">
      <input type="text" class="form-control required" id="kota" name='kota' value='<?=$kelurahan->kota?>'
       placeholder="Masukan nama kecamatan">
    </div>
  </div>

 </div>
  
 
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-8">
      <button type="submit" class="btn btn-primary" name='aksi' value='<?=$aksi?>'><?=$aksi?></button>
    </div>
  </div>
</form>
                
<script language="JavaScript" type="text/javascript">
  var frmvalidator_k  = new Validator("form_kelurahan");
 frmvalidator_k.EnableOnPageErrorDisplaySingleBox();
 frmvalidator_k.EnableMsgsTogether();
 
  frmvalidator_k.addValidation("kelurahan","req","kelurahan belum di isi");
  frmvalidator_k.addValidation("kelurahan","alpha_s","kelurahan tidak boleh mengandung angka atau symbol");

  frmvalidator_k.addValidation("kecamatan","req","kecamatan belum di isi");
  frmvalidator_k.addValidation("kecamatan","alpha_s","kecamatan tidak boleh mengandung angka atau symbol");
  
  frmvalidator_k.addValidation("kota","req","kota belum di isi");
  frmvalidator_k.addValidation("kota","alpha_s","kota tidak boleh mengandung angka atau symbol");
</script>     
                    

                