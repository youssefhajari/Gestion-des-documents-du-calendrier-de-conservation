<?php
include("connexion.php");

if (count($tab) > 1) {
    echo "<table class=\"ana\" ><tr><td><strong>Ref : </strong>" . $tab['ref'] . "</td><td><strong>Nom Doc : </strong>". $tab['nom_doc'] ."</td></tr></table>";
    echo "<br /><br />";
    echo "<table align=\"left\" border=\"1\" cellpadding=\"0\" cellspacing=\"0\" width=\"98%\">";
    echo "<td ROWSPAN=2 width=\"20%\">Nature du document</td><td width=\"20%\" ROWSPAN=2>Unité propriétaire</td><td width=\"100%\" colspan=\"3\">Délais de conservation</td>
            </tr>
            <tr>
            <td>Actif</td>
            <td >Semi actif</td>
            <td >Inactif</td>
            </tr>";

    echo "<tbody>";
    
    
    
}
?>