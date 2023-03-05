<!DOCTYPE html>
<html lang="PL-pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Welcome!!! | Start </title>
</head>
<body>

<div style="width: 50%; height: 40%; float: left; background-color: darkgrey;">
<h4>Lista 1</h4>
<ol>
    <li>Rozdział 1</li>
        <ul>
            <li>Poznań</li>
            <li>Gniezno</li>
            <li>Wrzesnia</li>
        </ul>
    <li>Rozdział 2</li>
    <li>Rozdział 3</li>
</ol>
</div>

<?php
include "./script.php";
?>


<?php
    $authorName = "Jan";
    $authorSurname = "Kupczyk" ;

    echo "Imię i Nazwisko: <br> $authorName<br> $authorSurname <br>";

// heredoc
    $heredoc = <<< DATA
    Imię: <br>
    Nazwisko: 
    <br>
DATA;


// baseconvert
    $bin = 0b111000011111001111;
    echo $bin;
?>




<?php
require "./conn.php";
?>


</body>
</html>
