<?php
$bd = "mysql:host=localHost;dbname=notes";
$pdo = new PDO($bd,'kalmar', 'root');
return $pdo;
?>