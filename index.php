<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $a = "Bonjour";
            $a .= " le monde"; //$a stocke "Bonjour le monde"
            echo '$a stocke : ' .$a. '<br>';
            
            $x = 5;
            $x -= 3; //$x stocke désormais 2
            echo '$x stocke : ' .$x. '<br>';
            
            $y = 3;
            $y **= $x; //$y stocke 3^2 = 3 * 3 = 9
            echo '$y stocke : ' .$y;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>