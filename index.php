
<?php
require_once __DIR__ . '/ormlib/ActiveRecord.php';
                    include('inc/config.php');

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>TES JASAMEDIKA APRILIANTO</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/datatables/dataTables.bootstrap.css"/>
      <script src="assets/js/validjs.js"></script>
	<style type='text/css'>
		body {
  padding-top: 50px;
}
.starter-template {
  padding: 40px 15px;
  text-align: left;
}
	</style>
    <!-- Custom styles for this template -->
  
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

    <body>
     <?php include"view/menu/navbar.php";?>
    <div class="container">
    <div class="starter-template">
    <?php include"route/routes.php"; ?>
    </div>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- jQuery Version 1.11.0 -->
    <script src="assets/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/datatables/jquery.dataTables.js"></script>
    <script src="assets/datatables/dataTables.bootstrap.js"></script>
   
    <script type="text/javascript">
            $(document).on('click', '.pilih', function (e) {
                document.getElementById("id_kelurahan").value = $(this).attr('id-kelurahan');
                 document.getElementById("kelurahan").value = $(this).attr('kelurahan');
                  document.getElementById("kecamatan").value = $(this).attr('kecamatan');
                   document.getElementById("kota").value = $(this).attr('kota');
                $('#modal_kelurahan').modal('hide');
            });
 
            $(function () {
                $("#tabel").dataTable();
            });
    </script>
    <script type="text/javascript">
    function fungsi_detail_pasien(str) {
    if (str == "") {
        document.getElementById("data_detail_pasien").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("data_detail_pasien").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","view/operator/detail_pasien.php?id="+str,true);
        xmlhttp.send();
    }
}
</script>
  
    </body>
</html>
