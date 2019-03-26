<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ifElseGame</title>
    <script src="main.js"></script>
</head>
<body>

<?php
    $game = "Yathzee";
    $integer = 15;
    $boolean = true;

switch ($game) {
                case "Yathzee":
                    echo '<p>'."Your game is: Yathzee". "<br>".'</p>';
                    if ($boolean == true) {
                        echo '<p>'."Yes". "<br>".'</p>';

                        if ($integer < 15 || $integer > 30 ) {
                            echo '<p>'."Je wilt Yathzee spelen want: dat vindt je gewoon leuk".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wilt Yathzee spelen want: je hebt tussende 15 en 30 minuten tijd".'</p>';
                        }
                    } 
                    else {
                        echo '<p>'."No". "<br>".'</p>';
                        if ($integer <= 100) {
                            echo '<p>'."Je wilt geen Yathzee spelen want: je wilt meer dan 100x met een dobbelsteen gooien".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wilt geen Yathzee spelen want: je wilt minder dan 100 punten halen".'</p>';
                        }
                    }
                    break;
case "Monopoly":
                    echo '<p>'."Your game is: Monopoly". "<br>".'</p>';
                    if ($boolean == true) {
                        echo '<p>'."Yes". "<br>".'</p>';

                        if ($integer == 1) {
                            echo '<p>'."Je wil Monopoly spelen want je hebt aan 1 spelletje genoeg".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wil Monopoly spelen want je houd ervan om iedereen blut te maken".'</p>';
                        }
                    } 
                    else {
                        echo '<p>'."No". "<br>".'</p>';

                        if ($integer == 2 || $integer > 120) {
                            echo '<p>'."Je wilt Monopoly niet spelen want je hebt geen zin in een spel van 2uur".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wilt Monopoly niet spelen want je houd niet van hotels".'</p>';
                        }
                    }
                    break;
case "Schaken":
                    echo '<p>'."Your game is: Schaken". "<br>".'</p>';
                    if ($boolean == true) {
                        echo '<p>'."Yes". "<br>".'</p>';

                        if ($integer == 2) {
                            echo '<p>'."Je wilt Schaken want je vindt zwart en wit leuk".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wilt Schaken want je denkt slimmer dan mij te zijn".'</p>';
                        }
                    } 
                    else {
                        echo '<p>'."No". "<br>".'</p>';

                        if ($integer == -1) {
                            echo '<p>'."Je wilt echt niet Schaken".'</p>';
                        } 
                        else {
                            echo '<p>'."Je wilt gewoon niet Schaken".'</p>';
                        }
                    }
                    break;
                default:
                    echo '<p>'."No game geselect".'</p>';
            }
          ?>

</body>
</html>





