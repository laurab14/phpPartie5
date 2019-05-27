<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Partie 5 Exo 8</title>
    </head>
    <body>
        <?php
        // pour créer un tableau : array() ou [ ...]
        $month = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

        foreach ($month as $v) {
            ?>
        <p><?php echo 'mois de : ' . $v . ' '; ?></p>
        <?php
        }
        ?>
    </body>
</html>
