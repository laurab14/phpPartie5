<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 5 Exo9</title>
    </head>
    <body>
        <?php
        // pour créer un tableau : array() ou [ ...]
        $hautDeFrance = [02 => 'Aisne', 59 => 'Nord', 60 => 'Oise', 62 => 'Pas-de-Calais', 80 => 'Somme'];
        foreach ($hautDeFrance as $v) {
            echo 'département de  : ' . $v . ' ';
        }
        ?>
    </body>
</html>
