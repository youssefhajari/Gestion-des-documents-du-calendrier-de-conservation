<?php

include("connexion.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Liste des règles</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/my_function.js"></script>
</head>
<body>
<ul id="nav">
    <li ><a href="accueil.php">Accueil</a></li><!-- n1 -->
    <li ><a href="rechercher.php">Rechercher</a></li>
    <li class="current"><a href="liste_regle.php">Liste des règles de conservation</a></li>
    <li><a href="./logout.php">Deconnexion</a></li>
</ul>
<br /><br /><br /><br /><br /><br />
<h1>1- DIRECTION GENERALE</h1>

<h2>1-1 STRUCTURE ORGANISATIONNELLE</h2>
<h3>1-1-1 Documents constitutifs</h3>

<div id="source"
     onclick="toggle('cible')">
    <a href="javascript:void(0)">1-1-1-1 Historique</a>
</div>
<div id="cible" style="display:none;">
        <?php
        $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
        $stmt->execute(array('name_doc' => 'historique'));
        $tab = $stmt->fetch();
        include("tablo.php");
        $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
        $rep->execute(array('name_doc' => 'historique'));
        include("tablo2.php");
?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible2')">
    <a href="javascript:void(0)">1-1-1-2 Statut</a>
</div>
<br/>
<div id="cible2" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'statut'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'statut'));
    include("tablo2.php");
    ?>
</div>

<h3>1-1-2 Organisation interne</h3>

<div id="source"
     onclick="toggle('cible3')">
    <a href="javascript:void(0)">1-1-2-1 Organigramme </a>
</div>
<div id="cible3" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Organigramme'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Organigramme'));
    include("tablo2.php");
    ?>
</div>
<br/>

<div id="source"
     onclick="toggle('cible4')">
    <a href="javascript:void(0)">1-1-2-2 Politiques et procédure</a>
</div>
<div id="cible4" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Politique et proc&eacute;dures'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Politique et proc&eacute;dures'));
    include("tablo2.php");
    ?>
</div>
<br/>

<div id="source"
     onclick="toggle('cible5')">
    <a href="javascript:void(0)">1-1-2-3 Plan d’action</a>
</div>
<br/>
<div id="cible5" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Plan d&acute;action'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Plan d&acute;action'));
    include("tablo2.php");
    ?>
</div>

<h2>1-2 REUNIONS ADMINISTRATIVES</h2>

<div id="source"
     onclick="toggle('cible500')">
    <a href="javascript:void(0)">1-2-1 PV et documents d’assemblée </a>
</div>
<br/>
<div id="cible500" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'PV et documents d&acute;assembl&eacute;e'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'PV et documents d&acute;assembl&eacute;e'));
    include("tablo2.php");
    ?>
</div>



<h2>1-3 LEGISLATION ET REGLEMENTS</h2>
<div id="source"
     onclick="toggle('cible9')">
    <a href="javascript:void(0)">1-3-1 Lois, Règlements </a>
</div>
<div id="cible9" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Lois et R&egrave;glements'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Lois et R&egrave;glements'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible10')">
    <a href="javascript:void(0)">1-3-2 Poursuites judiciaires </a>
</div>
<div id="cible10" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Poursuites judiciaires'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Poursuites judiciaires'));
    include("tablo2.php");
    ?>
</div>

<h2>1-4 RAPPORTS ADMINISTRATIFS</h2>
<div id="source"
     onclick="toggle('cible11')">
    <a href="javascript:void(0)">1-4-1 Rapport d’activités des unités du CNRST </a>
</div>
<div id="cible11" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Rapport d&acute;activit&eacute;s des unit&eacute;s'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Rapport d&acute;activit&eacute;s des unit&eacute;s'));
    include("tablo2.php");
    ?>
</div>


<h2>1-5 RELATIONS PUBLIQUES</h2>
<div id="source"
     onclick="toggle('cible13')">
    <a href="javascript:void(0)">1-5-1 Associations </a>
</div>
<div id="cible13" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Associations'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Associations'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible14')">
    <a href="javascript:void(0)">1-5-2 Congrès, colloques, expositions et conférences </a>
</div>
<div id="cible14" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Congr&egrave;s, colloques, expositions et conf&eac'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Congr&egrave;s, colloques, expositions et conf&eac'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible15')">
    <a href="javascript:void(0)">1-5-3 Cérémonies officielles </a>
</div>
<div id="cible15" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'C&eacute;r&eacute;monies officielles'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'C&eacute;r&eacute;monies officielles'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible16')">
    <a href="javascript:void(0)">1-5-4 Communiqués </a>
</div>
<div id="cible16" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Communiqu&eacute;s'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Communiqu&eacute;s'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible17')">
    <a href="javascript:void(0)">1-5-5 Coopération </a>
</div>
<div id="cible17" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Coop&eacute;ration'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Coop&eacute;ration'));
    include("tablo2.php");
    ?>
</div>




<h2>1-6 GESTION DES COMMUNICATIONS</h2>
<div id="source"
     onclick="toggle('cible18')">
    <a href="javascript:void(0)">1-6-1 Publications internes </a>
</div>
<div id="cible18" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Publications internes'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Publications internes'));
    include("tablo2.php");
    ?>
</div>


    <h3>1-6-2 Correspondances </h3>

<div id="source"
     onclick="toggle('cible20')">
    <a href="javascript:void(0)">1-6-2-1 Notes </a>
</div>
<div id="cible20" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Notes'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Notes'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible21')">
    <a href="javascript:void(0)">1-6-2-2 Avis au personnel </a>
</div>
<div id="cible21" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Avis au personnel'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Avis au personnel'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible22')">
    <a href="javascript:void(0)">1-6-2-3 Courriers arrivés/départs, Fax </a>
</div>
<div id="cible22" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Courriers arriv&eacute;s/d&eacute;parts, Fax'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Courriers arriv&eacute;s/d&eacute;parts, Fax'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible23')">
    <a href="javascript:void(0)">1-6-2-4 Ordres de mission </a>
</div>
<div id="cible23" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Ordres de mission'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Ordres de mission'));
    include("tablo2.php");
    ?>
</div>

<h1>2-AFFAIRES JURIDIQUES ET CONTENTIEUX</h1>
<div id="source"
     onclick="toggle('cible24')">
    <a href="javascript:void(0)">2-1 Bulletins officiels </a>
</div>
<div id="cible24" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Bulletins officiels'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Bulletins officiels'));
    include("tablo2.php");
    ?>
</div>
<h2>2-2 Législation</h2>
<div id="source"
     onclick="toggle('cible25')">
    <a href="javascript:void(0)">2-2-1 Lois </a>
</div>
<div id="cible25" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Lois'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Lois'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible25')">
    <a href="javascript:void(0)">2-2-2 Règlementation </a>
</div>
<div id="cible25" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'R&egrave;glementation'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'R&egrave;glementation'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible25')">
    <a href="javascript:void(0)">2-2-3 Décrets</a>
</div>
<div id="cible25" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'D&eacute;crets'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'D&eacute;crets'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible25')">
    <a href="javascript:void(0)">2-3-4 Arrêtés </a>
</div>
<div id="cible25" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Arrêt&eacute;s'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Arrêt&eacute;s'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible26')">
    <a href="javascript:void(0)">2-3 Contrat </a>
</div>
<div id="cible26" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Contrats'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Contrats'));
    include("tablo2.php");
    ?>
</div>
<h1> 3-GESTION DES RESSOURCES HUMAINES ET AFFAIRES SOCIALES </h1>
<h2>3-1 DOTATION DES RESSOURCES HUMAINES</h2>
<div id="source"
     onclick="toggle('cible27')">
    <a href="javascript:void(0)">3-1-1 Recrutement </a>
</div>
<div id="cible27" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Recrutement'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Recrutement'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible28')">
    <a href="javascript:void(0)">3-1-2 Concours et sélection </a>
</div>
<div id="cible28" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Concours et s&eacute;lection'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Concours et s&eacute;lection'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible29')">
    <a href="javascript:void(0)">3-2 DOSSIERS PERSONNEL </a>
</div>
<div id="cible29" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'DOSSIERS PERSONNEL'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'DOSSIERS PERSONNEL'));
    include("tablo2.php");
    ?>
</div>

<h2>3-3 CONDITIONS DE TRAVAIL</h2>
<div id="source"
     onclick="toggle('cible30')">
    <a href="javascript:void(0)">3-3-1 Gestion des temps de travail</a>
</div>
<div id="cible30" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Gestion des temps de travail'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Gestion des temps de travail'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible31')">
    <a href="javascript:void(0)">3-3-2 Listes de présence </a>
</div>
<div id="cible31" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Listes de pr&eacute;sence'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Listes de pr&eacute;sence'));
    include("tablo2.php");
    ?>
</div>
<h2>3-4 RELATIONS DE TRAVAIL</h2>
<div id="source"
     onclick="toggle('cible31')">
    <a href="javascript:void(0)">3-4-1  Documents syndicats et associations </a>
</div>
<div id="cible31" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Documents syndicats et associations'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Documents syndicats et associations'));
    include("tablo2.php");
    ?>
</div>
<h2>3-5 FORMATION ET PERFECTIONNEMENT DES RESSOURCES HUMAINES</h2>
<div id="source"
     onclick="toggle('cible32')">
    <a href="javascript:void(0)">3-5-1 Activités de formation et de perfectionnement </a>
</div>
<div id="cible32" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Activit&eacute;s de formation et de perfectionneme'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Activit&eacute;s de formation et de perfectionneme'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible320')">
    <a href="javascript:void(0)">3-5-2 Documents de stages </a>
</div>
<div id="cible320" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Documents de stages'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Documents de stages'));
    include("tablo2.php");
    ?>
</div>

<h1>4-GESTION ET FINANCES</h1>
<h2>4-1 FINANCES</h2>
<div id="source"
     onclick="toggle('cible34')">
    <a href="javascript:void(0)">4-1-1 Budget de fonctionnement </a>
</div>
<div id="cible34" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Budget de fonctionnement'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Budget de fonctionnement'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible35')">
    <a href="javascript:void(0)">4-1-2 Budget d’investissement </a>
</div>
<div id="cible35" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Budget d&acute;investissement'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Budget d&acute;investissement'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible36')">
    <a href="javascript:void(0)">4-1-3 Comptes hors budget </a>
</div>
<div id="cible36" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Comptes hors budget'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Comptes hors budget'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible37')">
    <a href="javascript:void(0)">4-1-4 Budget par année </a>
</div>
<div id="cible37" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Budget par ann&eacute;e'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Budget par ann&eacute;e'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible38')">
    <a href="javascript:void(0)">4-1-5 Relevés bancaires </a>
</div>
<div id="cible38" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Relev&eacute;s bancaires'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Relev&eacute;s bancaires'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible39')">
    <a href="javascript:void(0)">4-1-6 Taxe sur la valeur ajoutée </a>
</div>
<div id="cible39" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Taxe sur la valeur ajout&eacute;e'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Taxe sur la valeur ajout&eacute;e'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible40')">
    <a href="javascript:void(0)">4-1-7 Impôt sur le revenu </a>
</div>
<div id="cible40" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Imp&ocirc;t sur le revenu'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Imp&ocirc;t sur le revenu'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible41')">
    <a href="javascript:void(0)">4-1-8 Impôt sur société </a>
</div>
<div id="cible41" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Imp&ocirc;t sur soci&eacute;t&eacute;'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Imp&ocirc;t sur soci&eacute;t&eacute;'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible42')">
    <a href="javascript:void(0)">4-1-9 Etat de synthèse </a>
</div>
<div id="cible42" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Etat de synth&egrave;se'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Etat de synth&egrave;se'));
    include("tablo2.php");
    ?>
</div>
<h2>4-2 COMPTABILITE</h2>
<div id="source"
     onclick="toggle('cible43')">
    <a href="javascript:void(0)">4-2-1 Ordre de paiement </a>
</div>
<div id="cible43" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Ordre de paiement'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Ordre de paiement'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible44')">
    <a href="javascript:void(0)">4-2-2 Régie </a>
</div>
<div id="cible44" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'R&eacute;gie'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'R&eacute;gie'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible45')">
    <a href="javascript:void(0)">4-2-3 Lettre de virement </a>
</div>
<div id="cible45" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Lettre de virement '));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Lettre de virement '));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible46')">
    <a href="javascript:void(0)">4-2-4 Ordres de mission </a>
</div>
<div id="cible46" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Ordres de mission'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Ordres de mission'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible47')">
    <a href="javascript:void(0)">4-2-5 Ordres de recettes </a>
</div>
<div id="cible47" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Ordres de recettes'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Ordres de recettes'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible48')">
    <a href="javascript:void(0)">4-2-6 Factures </a>
</div>
<div id="cible48" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Factures'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Factures'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible49')">
    <a href="javascript:void(0)">4-2-7 Déclarations </a>
</div>
<div id="cible49" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'D&eacute;clarations'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'D&eacute;clarations'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible50')">
    <a href="javascript:void(0)">4-2-8 Registres </a>
</div>
<div id="cible50" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Registres'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Registres'));
    include("tablo2.php");
    ?>
</div>
<br/>
<div id="source"
     onclick="toggle('cible51')">
    <a href="javascript:void(0)">4-2-9 Bon de commande </a>
</div>
<div id="cible51" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'Bon de commande'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'Bon de commande'));
    include("tablo2.php");
    ?>
</div>


<br/>
<div id="source"
     onclick="toggle('cible55')">
    <a href="javascript:void(0)">4-3 BOURSES </a>
</div>
<div id="cible55" style="display:none;">
    <?php
    $stmt = $pdo->prepare("SELECT * FROM document WHERE nom_doc = :name_doc");
    $stmt->execute(array('name_doc' => 'BOURSES'));
    $tab = $stmt->fetch();
    include("tablo.php");
    $rep = $pdo->prepare("SELECT * FROM document  WHERE nom_doc = :name_doc");
    $rep->execute(array('name_doc' => 'BOURSES'));
    include("tablo2.php");
    ?>
</div>






<h2>4-4 APPELS D’OFFRES / MARCHES PUBLICS</h2>

PROMOTION DE LA RECHERCHE ET DE L’INNOVATION
<h1>5-PROGRAMMES SCIENTIFIQUES ET STRUCTURES D’EXCELLENCE</h1>
<h2>5-1 PROJETS DE RECHERCHE</h2>
5-1-1 Retenus
5-1-2 Liste d’attente
5-1-3 Non retenus
<h2>5-2 STRUCTURES DE RECHERCHE</h2>
5-2-1 Unités de Recherche Associées aux CNRST (URAC)
5-2-2-1 Retenus
5-2-2-2 Liste d’attente
5-2-2-3 Non retenus
<h2>5-3 RESEAUX DE RECHERCHE</h2>
5-3-1 Laboratoire International Associé/Laboratoire de chimie Moléculaire Maroco-Français (LIA/LCMMF)
5-3-2 Pôles de compétences
<h2>5-4 SOUTIEN AUX MANIFESTATIONS ET PUBLICATIONS SCIENTIFIQUES</h2>
5-4-1 Soutien aux manifestations scientifiques
5-4-2 Soutien aux publications scientifiques

<h1>6- COOPERATION AVEC LES ORGANISMES DE RECHERCHE</h1>
<h2>6-0 GENERALITES</h2>
6-0-1 Rapport de stage
6-1 CONVENTION DE COOPERATION
<h2>6-2 PROGRAMMES NATIONAUX</h2>
6-2-1 PROTARS/PARS

<h1>7- BOURSES DE RECHERCHE</h1>
7-1 UNIVERSITES
7-1 Boursiers
7-2 Candidats non retenus
7-3 Refus



</body>

<!--#include file=../footer_scr.asp-->
</body>

</html>
