<?php
/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/24/17
 * Time: 10:17 PM
 */
//include header file
include_once('header.php');
function showString(){
    $variable=10;
    $string=<<<EOD
            Hello, the universe is dying.
            We need to save it by substituting a $variable.
            But can I do \n in this and "Osama" is just 'simple'.
EOD;
echo "<h1>$string</h1>";

}
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
    <?php showString()?>
    <button onclick="animateText()">Osama</button>
</div>

</body>

</html>


