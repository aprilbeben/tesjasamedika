<?php
class Pasien extends ActiveRecord\Model {
	 static $table_name = 'pasien';
 
    # explicit pk since our pk is not "id" 
    static $primary_key = 'id_pasien';

 }
?>