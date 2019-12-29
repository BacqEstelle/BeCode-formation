<form action="ternary.php" method="post">
<p>Votre Sexe:
    <input type="radio" name="gender" value="femme">Femme
    <input type="radio" name="gender" value="homme">Homme
    <p><input type="submit" value="envoyer"></p>
</p>
</form>
<?php
$is_gender = ($_POST["gender"] == "femme") ? "Madame" : "Monsieur";
echo "Bonjour à vous $is_gender";
?>