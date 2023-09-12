<?php
try{
    $editedNote = $_POST['editedNote'];
    $id = $_POST['id'];
    
    require "dbConnect.php";
    
    $sql ='UPDATE notes SET note=:editedNote WHERE id=:id';
    $edit = $pdo -> prepare($sql);
    $edit -> execute(['editedNote' => $editedNote, 'id' => $id]);
    
    header('Location: notePlace.php');
}catch(PDOException $exce){
    echo $exce->getMessage();
}