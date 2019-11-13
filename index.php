<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $x = 2;
            $y = 3;
            $z = 4;
            echo '$x stocke ' .$x. ', $y stocke ' .$y. ', $z stocke ' .$z. '<br>';
            
            $a = $x + 1; //$a stocke 2 + 1 = 3
            $b = $x + $y; //$b stocke 2 + 3 = 5
            $c = $x - $y; //$c stocke 2 - 3 = -1
            echo '$a stocke ' .$a. ', $b stocke ' .$b. ', $c stocke ' .$c. '<br>';
            
            $x = $x * $y; //$x stocke désormais 2 * 3 = 6
            echo 'La variable $x stocke désormais : ' .$x. '<br>';
            
            $z = $x / $y; //$z stocke désormais 6 / 3 = 2
            echo 'La variable $z stocke désormais : ' .$z. '<br>';
            
            $m = 5 % 3; //$m stocke le reste de la division euclidienne de 5 par 3
            echo 'Le reste de la division euclidienne de 5 par 3 est ' .$m. '<br>';
            
            $p = $z ** 4; //$p stocke 2^4 = 2 * 2 * 2 * 2 = 16
            echo 'La variable $p stocke le résultat de 2 puissance 4 = ' .$p;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>