<?php
/**
 * Created by PhpStorm.
 * User: Youssef
 * Date: 03/06/2017
 * Time: 21:59
 */
while ($tab2 = $rep->fetch()) // $res = $pdo->query($query) ;
{

    //$nom = $donnees['nom_doc'];
    $nature = $tab2['nature_doc'];
    $uni = $tab2['unite_proprietaire'];
    $act = $tab2['actif'];
    $semi = $tab2['semi_actif'];
    $inact = $tab2['inactif'];

    echo "<tr>";
    echo "<td>" . $nature . "</td>";
    echo "<td>" . $uni . "</td>";
    echo "<td>" . $act . "</td>";
    echo "<td>" . $semi . "</td>";
    echo "<td>" . $inact . "</td>";
    echo "</tr>";

}
echo "</table>";
echo "<br/><br/><br/><br/><br/><br/>";

/*remarque  du ducument*/
echo "<table   align=\"left\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"50%\">";
echo "<tr><td>" . $tab['remarque_doc'] . "</td></tr>";
echo"</table>";
echo "<br/><br/>";

?>