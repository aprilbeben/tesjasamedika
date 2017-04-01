s<?php
class Kelurahan extends ActiveRecord\Model {
	 static $table_name = 'kelurahan';
 
    # explicit pk since our pk is not "id" 
    static $primary_key = 'id_kelurahan';
  
}
?>