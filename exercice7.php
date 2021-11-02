<?php
/**
 * exercice7
 *Ecrire un script qui initialise un tableau d'entier puis genere une table html 
 *dont le nombre de lignes est egal au nombre d'elements du tableau
 *le nombre de colonne de chaque ligne correspond respectivement à la valeur se trouvant dans le tableau d'entier
 */
?>

<!Doctype html>
<html>
<meta charset="utf-8">
    <head><title>tableau avec couleurs</title>
    <link rel="stylesheet" >
    </head>
    <body>
        <?php
            $tab=[2,5,11,9,6,7,16,4,10,6,14];
            echo(" le tableau est : <br>");
            foreach($tab as $pos => $value)
                {
                    echo("$pos => [$value] ");
                }
                echo("<br>");
            echo("<u>la table est :</u> <br> <br>");
        ?>
            <table border="2">
            <?php
                foreach($tab as $pos=>$value){
                ?>  
                    <tr>
                    <th colspan="2"  style="border: 2px;">
                         <?php echo("$pos"); ?>
                    </th>
                        <th >
                            <?php echo("$value"); ?>
                        </th>
                        
                    </tr>
                    <?php 
                }
                ?>
            </table>
        ?>
</html>
