<?php 

namespace controllers;

use utils\Template;
use models\AdresseModel;
use models\ClientsModele;
use models\ProduitsModele;
use controllers\base\WebController;

class ClientController extends WebController
{
    private $ClientModele;
    private $ProduitsModele;
    private $AdresseModele;

    function __construct(){
        $this->ClientModele = new ClientsModele();
        $this->ProduitsModele = new ProduitsModele();
        $this->AdresseModele = new AdresseModel();
    }
    function listClients($rechercher ="",$page = 0) 
    {
        if($page<0){$page=0;}
        if(@$rechercher != ""){
            $clients = $this->ClientModele->recherche($rechercher,10,$page);
        }else $clients = $this->ClientModele->liste(10,$page);
          
        return Template::render("views/liste/listeClient.php", array("listeClients" => $clients, "page" => $page, "rechercher" => $rechercher));
    }

    public function fiche($id="")
    {
        // À compléter avec les bons appels de méthode.
        $infoClient = $this->ClientModele->getByClientId($id);
        $listeproduit = $this->ProduitsModele->getAll();
        return Template::render("views/liste/infoClient.php", array("infoClient" => $infoClient,"listeproduit" => $listeproduit));
    }
    
    public function ajoutCommande($idClient = "" , $produitId = ""){

        $this->ProduitsModele->affecterProduit($idClient,$produitId);
        $this->redirect("../info/$idClient");

    }
    
    public function ajoutAdresse($idClient = "",$nom ="", $rue="", $codepostal="", $ville =""){

        $this->AdresseModele->AddAdresseClient($idClient,$nom, $rue, $codepostal, $ville);
        $this->redirect("../info/$idClient");

    }
}