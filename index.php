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
include_once ('ArraysTest.php');
include_once ('AllOthers.php');

$stringOperations=new StringTest();
$arrayOperations=new ArraysTest();
$otherOperations=new AllOthers();
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

    <h1 class="main_section_heading">PHP Strings</h1>
    <h2><?php echo $stringOperations->hereDocSyntax()?></h2>
    <h2><?php echo $stringOperations->nowDocSyntax()?></h2>
    <h2><?php echo $stringOperations->stringConversion()?></h2>

    <h1 class="main_section_heading">PHP Arrays</h1>
    <h2><?php echo $arrayOperations->arrayComplexSyntax() ?></h2>
    <h2><?php print_r($arrayOperations->keyValueArray())?></h2>
    <h2><?php print_r($arrayOperations->indexedArray())?></h2>
    <h2><?php print_r($arrayOperations->multiDimensionArray())?></h2>

    <h1 class="main_section_heading"> PHP Others</h1>
    <h2><?php echo "Value of constant is: ".AllOthers::GOOGLE;  ?></h2>
    <h2><?php printf ("Variable function example {%s} ",$otherOperations->variableExample())?></h2>
    <h2><?php printf ("Anon function output { %s }",$otherOperations->anonInMe())?></h2>

    <button onclick="animateText()">Osama</button>
</div>

</body>

</html>


