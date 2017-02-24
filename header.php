<?php
/**
 * Created by PhpStorm.
 * User: tripleheader
 * Date: 2/24/17
 * Time: 11:06 PM
 */
 ?>

 <html>
 <head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
         body {margin: 0;}
         ul.topnav {
             list-style-type: none;
             margin: 0;
             padding: 0;
             overflow: hidden;
             background-color: #333;
             box-shadow: 0 0 10px 10px #969696;
             elevation: above;
         }
         ul.topnav li {float: left;}
         ul.topnav li a {
             display: block;
             color: white;
             text-align: center;
             padding: 14px 16px;
             text-decoration: none;
         }
         ul.topnav li a:hover:not(.active) {background-color: #111;}
         ul.topnav li a.active {background-color: #4CAF50;}
         ul.topnav li.right {float: right;}
         @media screen and (max-width: 600px){
             ul.topnav li.right,
             ul.topnav li {float: none;}
         }
     </style>
 </head>
 <body>

 <ul class="topnav">
     <li><a class="active" href="#google">Home</a></li>
     <li><a href="#what">What</a></li>
     <li class="right"><a href="#about">About</a></li>
 </ul>

 </body>
 </html>