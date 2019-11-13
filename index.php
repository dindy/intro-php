<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $vide = NULL;
            $vide2;
            
            echo 'La variable $vide contient une valeur de type ';
            echo gettype($vide);
            
            echo '<br>La variable $vide2 contient une valeur de type ';
            echo gettype($vide2);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>