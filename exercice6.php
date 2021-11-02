<?php
/**
 *ercicExe6
 *ecrire un script qui initialise un tableau de classe 
 *le script genere des listes (ul) (li) des classes par niveau (c a d que les l1 sont ensemble les l2 ensemble...)

 */
$tableau=["MAIE","GLRS","Physique_chimie","SVT"];
echo("le tableau des classes est: <br>");
foreach($tableau as $position =>$value)
{
    echo("[$value]");
}
echo("<br>");
?>
<html>
    <u><p>la liste de classe par niveau est: </p></u>
    <p style="color:purple;">L1</p>
    <ul>
        <?php
        foreach($tableau as $position=>$value){
            ?>
            <li>l1
                <?php echo("$value"); ?>
        </li>
        <?php
        }
        ?>
        </u>
        <p style="color:peru;">L2</p>
        <ul>
            <?php
            foreach($tableau as $position=>$value){
                ?>
                <li>L2
                    <?php echo("$value"); ?>
            </li>
            <?php
            }
            ?>
        </ul>
        <p style="color:peru;">L2</p>
        <ul>
            <?php
            foreach($tableau as $position=>$value){
                ?>
                <li>L2
                    <?php echo("$value"); ?>
            </li>
            <?php
            }
            ?>
        </ul>
        }
    </ul>
</html>