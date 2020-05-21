<?php

namespace ProjetPHP\outils;

require_once './vendor/autoload.php';

class Outils{
    public static function headerHTML(string $titre){
        echo(
"<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <title>$titre</title>
</head>
<body>");
    }

    public static function footerHTML(){
        echo(
"</body>
</html>");
    }
}
