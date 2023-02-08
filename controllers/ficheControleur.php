<?php 

namespace controllers;

use controllers\base\WebController;
use utils\Template;
use models\classes\Client;

class ficheControleur extends WebController
{
    private $ficheCLientModele;

    function __construct(){
        $this->ficheCLientModele = new Client();
    }
    
    // public function fiche($id="")
    // {
    //     // À compléter avec les bons appels de méthode.
    //     $infoClient = $this->ficheClientModele->getByClientId($id);
    //     return Template::render("views/liste/infoClient.php", array("id" => $infoClient));
    // }

}