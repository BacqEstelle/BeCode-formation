<h2>Formulaire n°1</h2>
        <?php
          $nom = $_GET["nom"];
          $prenom = $_GET["prenom"];
        ?>
<form action="user.php?nom=<?php $nom?>&prenom=<?php $prenom?> method="get">
  <p><i>Complétez le formulaire. Les champs marqué par </i><em>*</em> sont <em>obligatoires</em></p>
  <fieldset>
    <legend>Contact</legend>
      <p>
        <label for="nom">Nom <em>*</em></label>
        <input name = "nom" id="nom" type="text" placeholder="Durant" autofocus="" required="">
      </p>
      <p>
      <label for="prenom">Prénom</label>
      <input name ="prenom" id="prenom" type="text" placeholder="John" autofocus="" required="">
      </p>
 
  </fieldset>
  <p><input type="submit" value="Soumettre"></p>
</form>
