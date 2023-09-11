<?php

require 'dbConnect.php';

$id = $_GET['id'];

$sql = 'DELETE FROM notes WHERE id= ?';

$delete = $pdo -> prepare($sql);
$delete -> execute([$id]);

header('Location: notePlace.php');
?>
