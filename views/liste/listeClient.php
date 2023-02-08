
<form action="/clients/liste" method="POST" >
<input type="text" placeholder="Recherche" id="rechercher" name="rechercher"></input>
</form>

<table class="table">
  <thead>
    <tr>
    
      <th scope="col">ID</th>
      <th scope="col">Nom Prénom</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Email</th>
      <th scope="col"><button type="button" class="btn btn-success">+ Créer un client</button></th>
    </tr>
  </thead>
  <tbody>
   
      
    <?php foreach ($listeClients as $client) { ?>
        <tr>  
        <th scope="row"><?php echo $client->getId() ?></th>    
        <td scope="row"><?php echo $client->getNom()." ".$client->getPrenom()?></td>
        <td scope="row"><?php echo $client->getTelephone() ?></td> 
        <td scope="row"><?php echo $client->getEmail() ?></td>  
        <td scope="row"><a type="button" class="btn btn-outline-success" href="./info/<?= $client->getId() ?>">Info</button></td>  
        <?php } ?>
   
        </tr>
    <tr>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col"></th>
    <th scope="col">Ligne par page <?php echo "10"?>
    
   
    </input>
    </form>
    <?php  if($rechercher !=""){$rechercher = "?rechercher=".$rechercher; } ?>
    <a href="/clients/liste/<?php echo ($page-1 . $rechercher); ?>" class="btn btn-outline-success"><
    </a>
    <a href="/clients/liste/<?php echo ($page+1 . $rechercher); ?>" class="btn btn-outline-success">>
    </a>
    </th>
    </tr>    
  </tbody>
</table>

