
<h2>Formulaire n°1</h2>
  <fieldset>
    <legend>Bienvenue <?php echo $_GET['nom'];?> <?php echo $_GET['prenom']; ?></legend>
      <p>
      <p style="text-decoration:underline;"><strong> Votre profil </strong></p>
        <label for="nom">Nom: <em></em></label>
        <label><?php echo $_GET['nom']?> </label>
      </p>
      <p>
      <label for="prenom">Prénom: </label>
      <label><?php echo $_GET['prenom']?> </label>
      </p>
 
  </fieldset>
</form>