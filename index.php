<?php

require 'vendor/autoload.php';
use tdnote\models\Client;
use tdnote\models\Facture;
use tdnote\outils\Outils;
use tdnote\conf\ConnectionFactory;



ConnectionFactory::setConfig('conf.ini');
ConnectionFactory::makeConnection();

$app = new \Slim\Slim();
$app->get('/', function(){
    affichageForm();
})->name('form');
$app->get('/client', function(){
    $slim = \Slim\Slim::getInstance();
    $id = $slim->request->get()['client'];
    affichageClient($id);
})->name('repForm');



function affichageForm(){
  global $app;
  $action = $app->urlFor('repForm');
  Outils::headerHTML('Choix du client');
  echo    "<form method='GET' action='$action'>
          <select name='client'>
          <option value=''>Choisir un client</option>";
  $Liste = Client::select('nomcli', 'id')->get();
  foreach ($Liste as $rangee){
    $clientId=$rangee["id"];
    $nomClient=$rangee["nomcli"];
    echo "<option value='".$clientId."'>".$nomClient."</option> \n";
 }
  echo '</form>';
  echo '<input type="submit" value="Afficher">';
  echo "</select>\n";
}

function affichageClient($id){
    $Facture = Facture::select('datefact', 'montant')->where('client_id','=',$id)->get();
    foreach ($Facture as $rangee){
      $date=$rangee["datefact"];
      $prix=$rangee["montant"];
      echo $date ."\n" . $prix . " euros" ."<br>";
     }
   }

Outils :: footerHTML();

$app->run();
?>