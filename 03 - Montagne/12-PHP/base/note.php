<form action="note.php" method="post">
<p>Nom de l'enfant: <input type="text" name="lastName"/> </p>
<p>Prénom de l'enfant: <input type="text" name="firstName"/> </p>
<p>Sexe :
    <input type="radio" name="genre" value="girl">Fille
    <input type="radio" name="genre" value="boys">Garçon
</p>
<p>Ne participera pas :
    <input type="radio" name="participate" value="gym">Gymnastique
    <input type="radio" name="participate" value="swim">Piscine
    <input type="radio" name="participate" value="schoolTrip">Sortie Scolaire
    <p><input type="submit" value="envoyer"></p>
</p>
</form>

<p>Madame, Monsieur,</p>
<p>
<?php

    if ($_POST["genre"] == "girl")
    {
        echo "Ma fille ";
    }
    if ($_POST["genre"] == "boys")
    {
        echo "Mon fils ";
    }

?>
<?php echo  $_POST['lastName']  ; ?> <?php echo  $_POST['firstName']  ; ?> ne pourra pas

<?php

    if ($_POST["participate"] == "gym")
    {
        echo "pratiquer la gym cette semaine.";
    }
    if ($_POST["participate"] == "swim")
    {
        echo "pratiquer la natation cette semaine. ";
    }
    if ($_POST["participate"] == "schoolTrip")
    {
        echo "participer à la sortie scolaire.";
    }

?></p>
<p> Je vous remercie d'avance</p>