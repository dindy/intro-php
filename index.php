<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $vrai = true;
            $faux = false;
            
            echo 'La variable $vrai contient une valeur de type ';
            echo gettype($vrai);
            
            echo '<br>La variable $faux contient une valeur de type ';
            echo gettype($faux);
        ?>
        <p>Un paragraphe</p>
    </body>
</html>