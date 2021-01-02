<?php

//---------------------------------
// on défini la base de donnée --- localhost=adresseIPweb

// $user = 'root';
// $mdp = '';

// $db = new PDO ('mysql:host=localhost;dbname=miniexo',$user,$mdp);

//---------------------------------

// génération du hash
// $pass = 'kiki';
// $hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 9]);
// echo $hash; 


// cette fonction verifie que le hash généré lors de la connexion correspond 
// bien au hashage stocké en base de donnée
// if (password_verify($pass, $hash)) {
//  echo '</br> </br> connexion réussie';
// exit; 
// } else {
//    echo 'mot de passe ou identifiant erroné';
// }

// password_get_info () retourne infos sur le hash

// require 'utile.php';
// init_php_session();

//---------------------------------


$pass = 'bambi';
$username = 'regis';
$hash = password_hash($pass, PASSWORD_BCRYPT, ['cost' => 9]);
echo $hash; 

// $_POST['form_password'] = $pass;
// $_POST['form_username'] = 'agnes';


// vérification de la validation du formulaire //
if(isset($_POST['valid_connection']))
    // vérifie que les champs ont été complétés //
    if(isset($_POST['form_username']) && !empty($_POST['form_username']) &&
       isset($_POST['form_password']) && !empty($_POST['form_password']))
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre> ';
    }


    if ($pass != ($_POST['form_password'])) {
        echo '</br> </br> Mot de passe incorrect !  Essayer à nouveau ';
      //  exit; 
    } elseif ($username != ($_POST['form_username'])) {
        echo "</br> </br> Nom d'utilisateur erroné ! Essayer à nouveau ";
         
    } else {
        echo 'Connexion correcte !';

    } 

    ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page d'acceuil</title>
</head>
<body>
    <h2>Saisissez vos noms et mots de passe pour ouvrir une session</h2>

    <form method="post">
       Nom d'utilisateur : <input type="text" name="form_username" placeholder="Identifiant..."></br>
      Mot de passe :  <input type="password" name="form_password" placeholder="Mot de passe...">
        <input type="submit" name="valid_connection" value="connexion">

    </form>

<nav>
    <ul>
        <li><a href="index.php">Acceuil</a></li>
        <li><a href="content.php">Page</a></li>
    </ul>
</nav>



 

 <!--

<form method="post">
        <input type="text" name="form_username" placeholder="Identifiant...">
        <input type="password" name="form_password" placeholder="Mot de passe...">
        <input type="submit" name="valid_connection" value="connexion">

    </form>



$user = 'root';
$pass = '';

try 
{
    $db = new PDO ('mysql:hoost=localhost;dbname=miniexo', $user, $pass);
    foreach($db->query('SELECT * FROM articles') as $row) {
        print_r($row);
    }



} catch (PDOExcetpion $e)
{
    print "Erreur :" . $e->getMessage() . "<br/>";
    die;
}

-->

