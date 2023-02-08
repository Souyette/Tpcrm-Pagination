<?php

namespace routes;

use controllers\Account;
use controllers\ClientController;
use controllers\ficheControleur;
use controllers\SampleWebController;
use controllers\VideoWeb;
use routes\base\Route;
use utils\SessionHelpers;

class Web
{
    function __construct()
    {
        $main = new SampleWebController();
        $client = new ClientController();
        $clientInfo = new ficheControleur();

        Route::Add('/', [$main, 'home']);
        Route::Add('/client/{id}', [$main, 'client']);
        Route::Add('/clients/liste', [$client, 'listClients']);
        Route::Add('/clients/info/{id}', [$client, 'fiche']);
        Route::Add('/clients/liste/{page}', [$client, 'listClients']);
        Route::Add('/clients/AjoutCommande/{idClient}', [$client, 'ajoutCommande']);
        Route::Add('/clients/AjoutAdresse/{idClient}', [$client, 'ajoutAdresse']);

        //        Exemple de limitation d'accès à une page en fonction de la SESSION.
        //        if (SessionHelpers::isLogin()) {
        //            Route::Add('/logout', [$main, 'home']);
        //        }
    }
}

