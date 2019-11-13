<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $prenom = "Sylvain";
            $age = 28; //$age stocke le nombre 28
            
            echo "La variable $age contient : ";
            echo $age;
            echo "<br>";
            
            $age = 31; //$age stocke le nombre 31
            echo 'La variable $age contient : ';
            echo $age;
            echo "<br>";
            
            $age = 65; //$age stocke le nombre 31
            echo "La variable \$age contient : ";
            echo $age;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>