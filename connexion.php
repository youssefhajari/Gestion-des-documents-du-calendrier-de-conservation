<?php
/**
 * Created by PhpStorm.
 * User: Sanae
 * Date: 08/03/2016
 * Time: 20:59
 */

/*
 * L'extension PDO : c'est un outil complet qui permet d'accéder à n'importe quel type de base de données.
 * On peut donc l'utiliser pour se connecter aussi bien à MySQL que PostgreSQL ou Oracle.
 */

/*
 * Normalement, PDO est activé par défaut. Pour le vérifier,
 * faites un clic gauche sur l'icône de WAMP dans la barre des tâches,
 *  puis allez dans le menu PHP / Extensions PHP et vérifiez que php_pdo_mysql est bien coché.
 */


try {
    $dns = 'mysql:host=localhost;dbname=ma_base_document';
    $user = 'root';
    $motDePasse = '';

    $pdo = new PDO($dns, $user, $motDePasse);

    // Déclaration d'un tableau associatif

    /* $etudiant = array(

         'idETUD' => '1',
         'nom' => 'sanae',
         'prenom' => 'tbatou',
         'classe' => 'GI'
     );
 */

// sans les requtes preperés
    //$rep = $pdo->query ('SELECT * FROM utilisateurs');
    /*while ($donnees = $rep->fetch())
        // $res = $pdo->query($query) ;
    {

        //echo 'id : ', $donnees['idETUD'], '<br/>';
        echo 'nom : ', $donnees['nom'], '<br/>';
        echo 'prenom : ', $donnees['prenom'], ' <br/>';
        echo 'login : ', $donnees['login'], '<br/>';

    }*/

    //$rep->closeCursor();

//$sth = $pdo->prepare("SELECT nom, prneom FROM etudiant");
//$sth->execute();

    /* Récupération de toutes les lignes d'un jeu de résultats */
//print("Récupération de toutes les lignes d'un jeu de résultats :\n");
//$result = $sth->fetchAll();
//print_r($result);


    //$arr = $pdo->query($query)->fetch(); //Sur une même ligne ...
    //$arr->execute();

    /*
        $query = 'SELECT * FROM etudiant;';
        $stmt = $pdo->query($query);
        $arrAll = $stmt->fetchAll();

       */
    /* // ---- Requetes préparé -----
     $query = 'INSERT INTO etudiant (idETUD,nom,prenom,classe) VALUES (1,,,,);';
     $prep = $pdo->prepare($query);
     $prep->execute();

     //Récupérer toutes les données retournées
     $arrAll = $prep->fetchAll();

 //Clore la requête préparée
     $prep->closeCursor();
     $prep = NULL;
    */
}



catch(Exception $e)
{ echo 'Exception reçue : '. $e->getMessage()."<br>"; }

catch(Exception $e)
{ exit( 'Exception exit  : '. $e->getCode())."<br>"; }


/*catch(PDOExeception $e){
   die( 'erreur!: '. $e->getMessage());}
*/
/*
$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
die($msg);
*/
?>