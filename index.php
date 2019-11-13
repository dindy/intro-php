<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $age = 28; //Stocke le nombre 28
            $distance = 2.84;
            
            echo 'La variable $age contient une valeur de type ';
            echo gettype($age);
            
            echo '<br>La variable $distance contient une valeur de type ';
            echo gettype($distance);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>