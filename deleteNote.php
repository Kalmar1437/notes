<?php

require 'dbConnect.php';
try{
    $id = $_GET['id'];
    
    $sql = 'DELETE FROM notes WHERE id= ?';
    
    $delete = $pdo -> prepare($sql);
    $delete -> execute([$id]);
    
    header('Location: notePlace.php');
}catch(PDOException $exc){
    echo $e->getMessage();
}
?>
