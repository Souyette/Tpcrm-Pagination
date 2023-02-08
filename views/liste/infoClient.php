<!DOCTYPE html>
<html>
    <head>
        <title>Cours Complet Bootstrap 4</title>
        <meta charset='utf-8'>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
    <body>
    <br><br>
        <div class="container">
        <div class="card-header">Client/ <?= $infoClient->getNom(); ?>/ Informations </div>
        <br><br>
            <div class="card-group mb-5">
                <div class="card">
                    <div class="card-header">Données générales</div>
                    <div class="card-body">
                        <h3 class="card-title">Nom</h5>
                        <p class="card-text"><?= $infoClient->getNom(); ?></p>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Prenom</h5>
                        <p class="card-text"><?= $infoClient->getPrenom(); ?></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">Données générales</div>
                    <div class="card-body">
                        <h3 class="card-title">Téléphone</h5>
                        <p class="card-text"><?= $infoClient->getTelephone(); ?></p>
                    </div> 
                    <div class="card-body">
                        <h3 class="card-title">Email</h5>
                        <p class="card-text"><?= $infoClient->getEmail(); ?></p>
                    </div>   
                </div>
                
            </div>
            <div class="card-deck">
                <div class="card">
                    <div class="card-header">Les produits</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                
                                <th scope="col">ID</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Description</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Crée le</th>
                                <th scope="col"><button type="button" class="btn btn-success" id="myBtnProduit">+Produit</button></th>
                                    
                                </tr>
                           
                            </thead>
                            <tbody>
                            <?php 
                            $produit = $infoClient->lesProduits();
                            foreach($produit as $leProduit){ ?>
                                    <tr>  
                                    <th scope="row"><?php echo $leProduit->getId() ?></th>    
                                    <td scope="row"><?php echo $leProduit->getNom()?></td>
                                    <td class="returnline" scope="row"><?php echo $leProduit->getDescription() ?></td> 
                                    <td scope="row"><?php echo $leProduit->getPrix() ?></td>  
                                    <td scope="row"><?php echo $leProduit->getPrix() ?></td>                                
                                
                            <?php } ?>
                                    </tr>                  
   
                            </tbody>
                        </table>
                    </div>
                </div>
                <br><br>
                <div class="card-deck">
                <div class="card">
                    <div class="card-header">Les adresses</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                
                                <th class="tableauecart" scope="col">Nom</th>
                                <th class="tableauecart"  scope="col">Rue</th>
                                <th class="tableauecart"  scope="col">Code Postal</th>
                                <th class="tableauecart"  scope="col">Ville</th>
                                <th class="tableauecart"  scope="col"><button type="button" id="myBtnAdresse" class="btn btn-success">Ajouter</button></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                            $adresse = $infoClient->lesAdresses();
                            foreach($adresse as $ladresse){ ?>
           
                                    <tr>  
                                    <th scope="row"><?php echo $ladresse->getNom() ?></th>    
                                    <td scope="row"><?php echo $ladresse->getRue()?></td>
                                    <td scope="row"><?php echo $ladresse->getCodePostal() ?></td> 
                                    <td scope="row"><?php echo $ladresse->getVille() ?></td>                               
                                    <th scope="row"><button type="button" id="" class="btn btn-danger">Supprimer</button></th>
                            <?php } ?>
                                    </tr>   

                                    <div id="myModal" class="modal">
                                    <!-- Modal content -->
                                    <div class="modal-content">
                                    <span class="close">&times;</span>
                                    <form action="./" >
                                        <div><input type="text" id="nom" class="fadeIn second" name="nom" placeholder="nom"/></div>
                                        <div><input type="text" id="rue" class="fadeIn third" name="rue" placeholder="rue"/></div>
                                        <div><input type="text" id="codepostal" class="fadeIn third" name="codepostal" placeholder="codepostal"/></div>
                                        <div><input type="text" id="ville" class="fadeIn second" name="ville" placeholder="ville"/></div>
                                        <input type="submit" class="fadeIn fourth" value="Ajouter">
                                    </form>
                                    </div>
                                    </div>

                             
                            </tbody>
                        </table>
                        <div id="myModalProduit" class="modal">
                            <div class="modal-content">
                                    <form action="../AjoutCommande/<?=  $infoClient->getId();?>" method="post">
                                    <select name="produitId">
                                    <option value="">--Choississez un produit--</option>
                                    <?php                                
                                        foreach($listeproduit as $leproduit){ ?>                          
                                        <option value="<?php echo $leproduit->id ?>"><?php echo $leproduit->nom ?></option>
                       
                                        </form>
                                    <?php } ?>
                                    </select>
                                    <input type="submit" class="fadeIn fourth" value="Ajouter">
                         
                            </div>
                        </div> 
                        <div id="myModalAdresse" class="modal">
                            <div class="modal-content">
                            <span class="closeAdresse">&times;</span>
                                    <form action="../AjoutAdresse/<?=  $infoClient->getId();?>" method="post">
                                    <div><input type="text" id="nom" class="fadeIn second" name="nom" placeholder="nom"/></div>
                                        <div><input type="text" id="rue" class="fadeIn third" name="rue" placeholder="rue"/></div>
                                        <div><input type="text" id="codepostal" class="fadeIn third" name="codepostal" placeholder="codepostal"/></div>
                                        <div><input type="text" id="ville" class="fadeIn second" name="ville" placeholder="ville"/></div>
                                    <input type="submit" value="Ajoute">
                         
                            </div>
                        </div> 
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
    // Get the modal
var modal = document.getElementById("myModalProduit");
var myModalAdresse = document.getElementById("myModalAdresse");

// Get the button that opens the modal
var btn = document.getElementById("myBtnProduit");
var myBtnAdresse = document.getElementById("myBtnAdresse");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
var span = document.getElementsByClassName("closeAdresse")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
modal.style.display = "block";
}

myBtnAdresse.onclick = function() {
myModalAdresse.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
modal.style.display = "none";
}
span.onclick = function() {
    myModalAdresse.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}

window.onclick = function(event) {
if (event.target == modal) {
    myModalAdresse.style.display = "none";
}
}

</script>