<?php
 include 'tilkoblingInfo.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klokk Klikker</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="innpakning">
       <button id="knapp">
   <div class="clock">
        <div class="hand hour" data-hour-hand=""></div>
        <div class="hand minute" data-minute-hand=""></div>
        <div class="hand second" data-second-hand=""></div>
        <div class="number number1">1</div>
        <div class="number number2">2</div>
        <div class="number number3">3</div>
        <div class="number number4">4</div>
        <div class="number number5">5</div>
        <div class="number number6">6</div>
        <div class="number number7">7</div>
        <div class="number number8">8</div>
        <div class="number number9">9</div>
        <div class="number number10">10</div>
        <div class="number number11">11</div>
        <div class="number number12">12</div>
        
   </div>
    </button>
    <div class="knappOmrade">
        <button id="oppgrader1">-10 for +1</button>
        <button id="oppgrader2">-100 for +10</button>
        <button id="oppgrader3">-1000 for +100</button>
        
        <div>
            <p id="utskrift"></p> 
            <p id="error"></p>
        </div>

        <form name="saveScore" method="POST" action="lagreInfo.php">
                <input type="text" name="username">
                <input type="hidden" value="0" name="score">
                <input type="submit" name="lagrepoeng">
        </form>
    </div>
    <div class="lederBord">
        <?php
        include('lederBord.php');
        ?>
    </div>
    <script src="script.js"></script>
    <?php
        include('lagreInfo.php')
    ?>
</div>
</body>
</html>
