<?php
// 
require_once("../private/conexion.php");

// GET and FILTER

$request = $conexion->query("SELECT verse_box_text, verse_box_purpose FROM verses");
$verses = [];
while ($row = $request->fetch_assoc()) {
    $verses[] = $row;
}

// Showing the API
// echo "<div style='background-color: green; padding: 1%; font-weight: bold; color: white;'>JSON data REST API:</div>";
// echo "<br/>";
echo "<li>".json_encode($verses, JSON_PRETTY_PRINT)."</li>";


?>