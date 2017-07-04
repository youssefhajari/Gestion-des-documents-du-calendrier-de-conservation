<?php

include("connexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Rechercher les documents</title>

    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<ul id="nav">
    <li ><a href="accueil.php">Accueil</a></li><!-- n1 -->
    <li class="current"><a href="rechercher.php">Rechercher</a></li>
    <li><a href="liste_regle.php">Liste des règles de conservation</a></li>
    <li><a href="./logout.php">Deconnexion</a></li>
</ul>
<br /><br /><br /><br /><br /><br />
<p>Tapez le nom du document que vous voulez Rechercher :</p>
<form action="" method="get">
    <input type="text" name="nom_rechercher">

    <input type="submit" value="Rechercher">
</form>
<br /><br /><br /><br />
<?php
if (!empty($_GET['nom_rechercher'])){
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => $_GET['nom_rechercher']));
    $tab = $stmt->fetch();
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

       //try {
       $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
       $rep->execute(array('name_doc' => $_GET['nom_rechercher']));
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
       echo "<tr><td class=\"ana2\" >" . $tab['remarque_doc'] . "</td></tr>";
       echo"</table>";

   }
  /* else {
       echo '<body onLoad="alert(\'NoN Trouvé !!Sorry ):\')">';
       // puis on le redirige vers la page d'accueil
       echo '<meta http-equiv="refresh" content="0;URL=rechercher.php">';
   }*/

    //catch (Exception $e) { echo 'Exception reçue : '. $e->getMessage()."<br>";}
  //  print_r($rep->errorInfo());
    //$rep->closeCursor();

}
/*else {
 echo '<body onLoad="alert(\'Ziyer a 3chire !!Le champ khawi ):\')">';
 // puis on le redirige vers la page d'accueil
 echo '<meta http-equiv="refresh" content="0;URL=rechercher.php">';

}*/
    ?>



<!--#include file=../footer_scr.asp-->
</body>

</html>
