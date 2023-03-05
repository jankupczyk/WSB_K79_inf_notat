<?php
// DB


$conn = new mysqli("localhost", "root", "", "k79");


if (!$conn) {
    die("Error - " .mysqli_connect_error());
}
echo ("<br><p style='color:green; font-size: 18px; text-align: centre;'>Connected to k79!!</p><br>");

$qrr = "SELECT firstName, lastName, created_at as data_utworzenia FROM users"; 



$result = $conn->query($qrr);

while($user = $result->fetch_assoc()){

    echo <<< USER
        IMIE     NAZWISKO    DATA <br> $user[firstName] $user[lastName] $user[data_utworzenia] <br><br><hr>

USER;
}



?>