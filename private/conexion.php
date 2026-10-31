<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

define("HOST", "127.0.0.1");
define("USER", "root");
define("PASSWD", ""); // If is ONLINE always PUT a password.
define("DB", "verses_bibliotec");

$conexion = new mysqli(HOST, USER, PASSWD, DB);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}
//

?>