<?php
try{
    $bd = "mysql:host=localHost;dbname=notes";
    $pdo = new PDO($bd,'kalmar', 'root');
    return $pdo;
}catch(PDOException $e){
    echo $e->getMessage();
}
?>