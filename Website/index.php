<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website</title>
    <link rel="stylesheet" href="index.css">
    <meta http-equiv="refresh" content="30">
</head>
<body>
    <?php include 'menu.php'; ?>
    <div class="container">
        <?php
            date_default_timezone_set("Europe/Amsterdam");
            $uur = date("G");
            $minuut = date("i");         
            echo date_default_timezone_get();

            if ($uur >= "6" && $uur < "12") {
                echo '<body class= "morning">';
                $dagdeel= "Morgen";
            }
            elseif ($uur >= "12" && $uur < "18"){
                    echo '<body class= "afternoon">';
                    $dagdeel= "Middag";
                }
            elseif ($uur >= "18" && $uur < "23") {
                        echo '<body class= "evening">';
                        $dagdeel= "Avond";
                    }
            elseif ($uur >= "00" && $uur < "6") { 
                            echo '<body class= "night">';
                            $dagdeel= "Nacht";
                        }

            echo '<h1>','Goede ',$dagdeel,'</h1>';
            echo '<h1>','Het is ',$uur,":",$minuut,'</h1';
            ?>
            <?php include 'footer.php'; ?>
        </div>


</body>
</html>