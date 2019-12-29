<?php
function affiche(){
try
{
	// On se connecte à MySQL
	include('db.php');
}
catch(Exception $e)
{
	// En cas d'erreur
        die('Erreur : '.$e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM hiking');

while ($donnees = $reponse->fetch())
{
?>
<fieldset>
    <p>
    <strong>Randonnée</strong> :<a href="update.php?id=<?php echo $donnees['id']; ?>"> <?php echo $donnees['name']; ?> </a>
    </p>
    <p>
    <strong>Niveau :</strong> <?php echo $donnees['difficulty']; ?>
   </p>
   <p>
   <strong>Distance : </strong> <?php echo $donnees['distance']; ?> kilomètres
   </p>
   <p>
   <strong>Durée : </strong> <?php echo $donnees['duration']; ?> heure
   </p>
   <p>
   <strong>Dénivelée : </strong> <?php echo $donnees['height_difference']; ?> mètres
   </p>
   <p>
   <button><a href="delete.php?id=<?php echo $donnees['id']; ?>">Delete</a></button>
   </p>
</fieldset>
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête
}
