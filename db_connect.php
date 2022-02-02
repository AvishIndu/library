<?php
// Get the database name from the environment
$db = getenv("MYSQL_ADDON_DB");
// Get the database user from the environment
$user = getenv("MYSQL_ADDON_USER");
// Get the database password from the environment
$pass = getenv("MYSQL_ADDON_PASSWORD");
// This variable is injected during the deployment
$socket = getenv("CC_MYSQL_PROXYSQL_SOCKET_PATH");
$dsn = "mysql:unix_socket=$socket;dbname=$db";
try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}

?> 
