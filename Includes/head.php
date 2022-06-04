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
    <link rel="icon" href="../Images/logo3.svg">
    <title>GCT GUENENNA | <?php echo PAGE ?> </title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="../Sass/style.css" type="text/css">

    <!-- JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script src="../JavaScript/main.js" defer></script>

</head>

<body lang="<?=$_SESSION["lang"]?>">
    