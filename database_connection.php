<?php 
require("app_config.php");
mysql_connect(DATABASE_HOST,DATABASE_USERNAME,DATABASE_PASSWORD)
	or die("<p>Error:".mysql_error()."</p>");
mysql_select_db(DATABASE_NAME)
	or die("<p>Error:".mysql_error()."</p>");
 ?>