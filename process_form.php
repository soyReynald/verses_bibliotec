<?php
require_once("private/conexion.php");

//
$verse_label = mysqli_real_escape_string($conexion, $_POST['verse_box']);
$verse_label_goal = mysqli_real_escape_string($conexion, $_POST['purpose']);

$querying_sql = $conexion->query("INSERT INTO verses (verse_box_text, verse_box_purpose) VALUES('{$verse_label}', '{$verse_label_goal}')");

$request = $conexion->query("SELECT verse_box_text, verse_box_purpose FROM verses WHERE verse_box_purpose = 'security in live'");
$row = $request->fetch_assoc();

printf("verse_box_text = %s (%s)\n", $row['verse_box_text'], gettype($row['verse_box_text']));
printf("verse_box_purpose = %s (%s)\n", $row['verse_box_purpose'], gettype($row['verse_box_purpose']));
?>