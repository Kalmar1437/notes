<?php

$note = $_POST['note'];
$head = $_POST['head'];

if ($note == "" || $head == ""){
    echo "error";
    exit();
}

$currentDate = date('Y-m-d H:i:s');

require 'dbConnect.php';

$sqlNote = 'INSERT INTO notes(note, head, date) VALUES(:note, :head, :date)';

$sendNote = $pdo -> prepare($sqlNote);
$sendNote -> execute(['note' => $note, 'head' => $head, 'date' => $currentDate]);

header('Location: /notes');

?>