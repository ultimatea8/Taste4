<?php

include 'configure.php';
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
        <script src="jquery-2.1.4.js"></script>
        <script src="ajax.js"></script>
        
    </head>
    <body onload="intAJAX()">
    <div class="containz">      
        <div class="pickbox">
            fff
        </div>
            
        <div class="pickbox">
            <fieldset>
            <legend>What do you have a taste for?</legend>
            .
            input elements
            .
            </fieldset>
        </div>
            
        <div class="pickbox">
            3456
        </div>
            
        <div class="pickbox">
            <div id="Portfolio"> </div>Enter text:
            <input type="text" id="daInput" />
            <div id="daOutput" style="color: blue;">Checkings</div>
        </div>
    </div>
        
    </body>
</html>