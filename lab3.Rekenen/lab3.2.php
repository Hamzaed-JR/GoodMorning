<?php  

$getal = 6;
tafel($getal);
function tafel($getal){
    for ( $c = 1; $c<=10 ; $c++) {
        echo( ($c*$getal));
        echo "<br>";
    }
}

?>