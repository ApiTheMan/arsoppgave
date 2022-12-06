<?php
include 'tilkoblingInfo.php';

//Opprette kobling
$kobling = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);

//Sjekk om kobling virker
if ($kobling->connect_error) {
    die("Noe gikk galt: " . $kobling->connect_error);
}


$sql = "SELECT * FROM users ORDER BY clicks DESC LIMIT 10";

$resultat = $kobling->query($sql);

if (!$resultat) {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
} else {
    echo '<table><tr><th>Navn</th><th>Score</th></tr>';

    while ($rad = $resultat->fetch_assoc()) {
        $navn = $rad["username"];
        $score = $rad["clicks"];
        echo '<tr><td>' . $navn . '</td><td>' . $score . '</td></tr>';
    }
    echo '</table>';
}
?>