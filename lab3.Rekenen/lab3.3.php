<?php  

$nummer = array (3 , 5 , 8 , 120);

function tafel($getal){
    for ( $c = 1; $c<=10 ; $c++) {
        echo $c*$getal;
        echo " <br>";
    }
}

foreach ($nummer as $value) {
    tafel($value);
    echo "<br>";
}
?>