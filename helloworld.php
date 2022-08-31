<!DOCTYPE html>
<html lang="nl">
    <head>
        <title>Hello world</title>
    </head>
    <body>
        <h1>
            <?php
            echo "goedemorgen<br><br>";
            $name="Arash";
            echo "mijn naam is ; $name";

            ?>

        </h1>
        <?php
        date_default_timezone_set("Europe/Amsterdam");

        $today = date("l j F Y");
        echo "Het is vandaag  : $today";

        echo "<br>";

        $yearnumber = date("z");
        echo "vandaag is het de : {$yearnumber}e dag van het jaar";

        echo "<br>";
        $dagnaam=date("l");

        $weeknumber = date("w");
        echo "$dagnaam is {$weeknumber}e dag van de week";

        echo "<br>";

        $maandnumber = date("t");
        echo "deze maan maart heeft $maandnumber dagen";

        echo "<br>";

     if(date("L")==1){
         echo "het jaar " .date("Y") . "is een schrikeljaar.";
        } else{
         echo "het jaar " . date("Y") . " is geen schrikeljaar";
        }
        ?>


    </body>
</html>
<?php
