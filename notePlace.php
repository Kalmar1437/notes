<!DOCTYPE html>
<html lang="en">
<head>
    <link rel='stylesheet' href='style.css'>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class='header'><a class='link' href='index.html'>Create Note</a></header>

    <?php
    
    require "dbConnect.php";

    echo '<div class=\'container\'>';

    $sql =$pdo -> query('SELECT * FROM notes');
    while($row = $sql->fetch(PDO::FETCH_OBJ)){
        echo'<table class =\'noteTable\'>
                <tr class=\'dateHead\'>
                    <td class=\'head\'>' . $row->head . '</td>
                    <td class=\'date\'>' . $row->date . '</td>
                    <td class =\'delete\'>
                        <a class=\'button\' href=\'deleteNote.php?id='.$row->id.'\'>
                        <button class=\'button\'>delete</button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class=\'oneNote\' colspan=\'2\'>
                        <div class = \'note\'>' . $row->note . '</div>
                    </td>
                    <td>
                        <button class=\'edit\' id=\''.$row->id.'\'>edit</button>
                    </td>
                </tr>
            </table>';   
    }

    echo '</div>';
    ?>
    <script src='edit.js'></script>  
</body>
</html>