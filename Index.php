<?php

require_once 'vendor/autoload.php';
use \ProjetPHP\models\User;
use \ProjetPHP\models\Item;
use \ProjetPHP\outils\Outils;
use \ProjetPHP\models\Liste;
use \ProjetPHP\conf\ConnectionFactory;


ConnectionFactory::setConfig('conf.ini');
ConnectionFactory::makeConnection();

$app = new \Slim\Slim();
$app->get('/', function(){
    affichageUser();
})->name('liste');
$app->get('/user', function(){
    $slim = \Slim\Slim::getInstance();
    $id = $slim->request->get()['user'];
    affichageListe($id);
})->name('repForm');



function affichageUser(){
  global $app;
  $action = $app->urlFor('repForm');
  Outils::headerHTML('Choix du client');
  echo    "<form method='GET' action='$action'>
          <select name='user'>
          <option value=''>Choisir un utilisateur</option>";
  $Liste = User::select('login', 'id')->get(); // il s'agit de la classe 
  foreach ($Liste as $rangee){
    $clientId=$rangee["id"];
    $nomClient=$rangee["login"];
    echo "<option value='".$clientId."'>".$nomClient."</option> \n";
 }
  echo '</form>';
  echo '<input type="submit" value="Afficher">';
  echo "</select>\n";
}

function affichageListe($id){
    $Facture = Liste::select('titre', 'description')->where('user_id','=',$id)->get();
    $Item = Item::select('nom', 'descr')->where('liste_id','=',$id)->get();  //classe User
    foreach ($Facture as $rangee){
      $titre=$rangee["titre"];
      $description=$rangee["description"];
      echo('Titre : '.$titre."</br>");
      echo('description de l\'évènement : '.$description."</br>");

      foreach($Item as $rangee){
        $nom=$rangee["nom"];
        $descr=$rangee["descr"];
        echo('Nom de l\'item : '.$nom."</br>");
        echo('description de l\'item : '.$descr."</br>");
      }
     }
   }

Outils :: footerHTML();

$app->run();
?>
