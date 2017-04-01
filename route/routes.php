<?php

  if (!isset($_GET['page'])) {
                        include ('view/dashboard/dashboard.php');
                    } else {
                    	 $modul = $_GET['modul'];
                        $page = $_GET['page'];
                       
                        include 'view/'.$modul . '/' . $page . ".php";
                    }

?>