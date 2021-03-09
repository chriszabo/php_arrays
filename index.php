<?php

function getFrameworks() {
    $fws = [];
    $fws[] = "CakePhp";
    $fws[] = "Symfony";
    $fws[] = "ZendFramework";
    $fws[] = "CodeIgniter";
    $fws[] = "Laravel";

    return $fws;
}

$frameworks = getFrameworks();

// key-value pairs haben in der Aufgabe gefehlt. Habe einige ausgedacht:
$books = ["HarryPotter" => "J.K. Rowling", "Stephen Hawking" => "A brief history of time", "Stephen King" => "On Writing"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML-Boilerplate</title>
</head>
<body>
    <h1>Aufgabe 22</h1>
    <?php
    echo "<ol>";
    foreach ($frameworks as $fw) {
        echo "<li>" . $fw . "</li>";
    }
    echo "</ol>";
    ?>

    <h2>Aufgabe 25</h2>
    <?php
    echo "<ol>";
    foreach ($books as $key => $value) {
        echo "<li><b>" . $key . "</b> " . $value . "</li>";
    }
    echo "</ol>";
    ?>

</body>
</html>