<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();

// On récupère nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {

    // On teste pour voir si nos variables ont bien été enregistrées
    echo '<html>';
    echo '<head>';
    echo '<title>Page de notre section membre</title>';
    echo '</head>';

    echo '<body>';
    echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
    echo '<br />';

    // On affiche un lien pour fermer notre session
   // echo '<a href="./logout.php">Déconnection</a>';
}else{
    echo "waloooooo a 3chchirrrreee";
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!--<title>Hiiiii</title> -->
    <!-- nettuts -->
    <!-- traduit et adapté par outils-web.com -->
    <!-- chargement des feuilles de style -->
    <meta charset="UTF-8">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<ul id="nav">
    <li class="current"><a href="accueil.php">Accueil</a></li><!-- n1 -->
    <li><a href="rechercher.php">Rechercher</a></li>
    <li><a href="liste_regle.php">Liste des règles de conservation</a></li>
    <li><a href="./logout.php">Deconnexion</a></li>
</ul>
<br /><br /><br /><br /><br /><br />
<!--#include file=../footer_scr.asp-->
</body>

</html>