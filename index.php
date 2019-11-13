<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
    </head>
        <h1>Titre principal</h1>
        <?php
            $prenom = "Pierre";
            $nom = "Giraud";
            $age = 28;
            
            echo "Je m'appelle $prenom et j'ai $age ans <br>";
            echo "Je m'appelle {$prenom} et j'ai {$age} ans <br>";
            echo 'Je m\'appelle $prenom et j\'ai $age ans <br>';
            
            $prez = "Je suis $prenom $nom, j'ai $age ans <br>";
            $prez2 = "Je suis {$prenom} {$nom}, j'ai {$age} ans <br>";
            $prez3 = 'Je suis $prenom $nom, j\'ai $age ans';
            
            echo $prez;
            echo $prez2;
            echo $prez3;
        ?>
        <p>Un paragraphe</p>
    </body>
</html>