<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula02</title>
</head>
<body>
    <h1>AULA 02 - PHP + HTML</h2>
    <?php
        $nome = "cindy";
        echo "<p><span style=\"color:red\">bem vindo ... $nome </p></span>";

        echo "<ul>";
        for ($i=1; $i <= 5 ; $i++) { 
           echo "<li>item $i</li>";
           echo "<br>";
        }

    ?>

    