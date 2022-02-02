<?php
	  $bdd = new PDO(
    	"mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    	getenv("MYSQL_ADDON_USER"),
    	getenv("MYSQL_ADDON_PASSWORD")
  );
?>
