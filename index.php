<?php
/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/24/17
 * Time: 10:17 PM
 */
//set error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

//include files
include_once('header.php');
include_once('StringTest.php');

$stringOperations=new StringTest();
?>

<html>
<head>
    <title>Osama Bin Omar</title>
    <meta charset="UTF-8">
    <meta content="*/*">
    <link rel="stylesheet" href="index_style.css">
    <script src="index.js"></script>
</head>
<body style="margin: 0 .5%">
<div id="whole_page">
    <div id="header_section">

    </div>
    <h1 id="welcome_message">Welcome! You have reached the website of Osama Bin Omar</h1>
    <h1><?php echo $stringOperations->hereDocSyntax()?></h1>
    <h1><?php echo $stringOperations->nowDocSyntax()?></h1>
    <h1><?php echo $stringOperations->stringConversion()?></h1>

    <button onclick="animateText()">Osama</button>
</div>

</body>

</html>


