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
            <fieldset>
            <legend>What do you have a taste for?</legend>
            <input type="radio" name="Culture" value="american" />American<br />
            <input type="radio" name="Culture" value="jamacian" />Jamacian<br />
            <input type="radio" name="Culture" value="korean" />Korean<br />
            <input type="radio" name="Culture" value="japanese" />Japanese<br />
            <input type="radio" name="Culture" value="westindian" />West Indian<br />
            <input type="radio" name="Culture" value="none" />Unknown<br />
            </fieldset>
        </div>
        <div class="pickbox">
            Choose a primary food group:<br/><br/>
            <input type="radio" name="FoodGroup" value="grain" />Grain<br />
            <input type="radio" name="FoodGroup" value="starch" />Starch<br />
            <input type="radio" name="FoodGroup" value="vegetable" />Vegetable<br />
            <input type="radio" name="FoodGroup" value="fruit" />Fruit<br />
            <input type="radio" name="FoodGroup" value="protein" />Protein<br />
            <input type="radio" name="FoodGroup" value="dairy" />Dairy<br />
            <input type="radio" name="FoodGroup" value="none" />Any<br/>
        </div>
        <div class="pickbox">
            What do you feel like tasting?<br/><br/>
            <input type="checkbox" name="Taste" value="bland" />Bland<br />
            <input type="checkbox" name="Taste" value="sweet" />Sweet<br />            
            <input type="checkbox" name="Taste" value="bitter" />Bitter<br />
            <input type="checkbox" name="Taste" value="spicy" />Spicy<br/>
            <input type="checkbox" name="Taste" value="tart" />Tart<br />
            <input type="checkbox" name="Taste" value="sour" />Sour<br />
            <input type="checkbox" name="Taste" value="minty" />Minty<br />
            <input type="checkbox" name="Taste" value="salty" />Salty<br />
            <input type="checkbox" name="Taste" value="tangy" />Tangy<br/>  
        </div>
            
        <div class="pickbox">
            <div id="ByNameArea"> </div>Name:
            <input type="text" id="NameInput" />
            <div id="NameOutput" style="color: blue;">Loading...</div>
        </div>
    </div>
        
    </body>
</html>