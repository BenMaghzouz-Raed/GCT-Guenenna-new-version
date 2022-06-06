<?php
// SET LANGUAGE INTO SESSION
session_start();
if (!isset($_SESSION["lang"])) { $_SESSION["lang"] = "en"; }
if (isset($_POST["select-lang"])) { $_SESSION["lang"] = $_POST["select-lang"]; }
 
// LOAD LANGUAGE FILE
require_once "lang-" . $_SESSION["lang"] . ".php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../Images/favicon.ico" type="image/x-icon">
    <title>GUENENNA Commerce Tunisie (GCT) | 
        <?php if(PAGE == 'Our Product'){echo $_Our_Product[1];} else{echo PAGE;} ?> 
    </title>
    <meta name="description" content="GCT Guenenna Commerce De Tunisie is an import/export trading company, providing quality products and a Tunisian biological Extra Virgin olive oil">
    <meta name="keywords" content="GCT, GUENENNA, IMPORT, EXPORT, COMMERCE TUNISIE, OLIVE OIL">
    <meta name="author" content="GUENENNA Commerce Tunisie">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="../Sass/style.css" type="text/css">

</head>

<body lang="<?=$_SESSION["lang"]?>">
    