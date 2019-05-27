<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 5 Exo4</title>
    </head>
    <body>
        <?php
        // pour créer un tableau : array() ou [ ...]
        $month = array('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
        $replacements = array(7 => 'Août');
        $newMonth = array_replace($month, $replacements);
//        aussi possible $month[7] = 'Août';
        print_r($newMonth); // Print_r équivalent d'un echo pour afficher un tableau (Array).
        ?>
    </body>
</html>
