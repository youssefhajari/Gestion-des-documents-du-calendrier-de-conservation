<?php
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
//$login_valide = 'a';
//$pwd_valide = 'a';

// on teste si nos variables sont définies

    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
  /*  if ($login_valide == $_GET['login'] && $pwd_valide == $_GET['pwd']) {
        // dans ce cas, tout est ok, on peut démarrer notre session

        // on la démarre :)
        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['pwd'] = $_GET['pwd'];

        // on redirige notre visiteur vers une page de notre section membre
        header ('location: page_membre.php');*/
    include("connexion.php");
    $sel=$pdo->prepare("select * from utilisateurs where login=? and pwd=? limit 1");
    $sel->execute(array($_GET['login'],$_GET['pwd']));
    $tab=$sel->fetchAll();
    if(count($tab)>0){
        session_start ();
        // on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['pwd'] = $_GET['pwd'];
        header ('location: accueil.php');
    }
    else {
        // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
        echo '<body onLoad="alert(\'Membre non reconnu...\')">';
        // puis on le redirige vers la page d'accueil
        echo '<meta http-equiv="refresh" content="0;URL=index.html">';
    }


?>