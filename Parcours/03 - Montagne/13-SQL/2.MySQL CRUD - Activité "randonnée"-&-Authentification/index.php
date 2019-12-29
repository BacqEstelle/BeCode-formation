<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php include ("create.php") ?>
    <?php include ("read.php"); ?>
<?php
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.';
	echo '<br />';
    echo '<a href="logout.php">Déconnection</a>';
}else{
?>
<h2> Connexion </h2>
<form action="login.php" method="post">
Votre login : <input type="text" name="login">
<br />
Votre mot de passé : <input type="password" name="pwd"><br />
<input type="submit" value="Connexion">
</form>
<?php
}
?>
<h2> Inserer des données </h2>
    <?php
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    ?>
            <form class="add" action="index.php" method="post">
                <p>Nom de la randonnée : <input type="textarea" name="name"></p>
                <p><label for="difficulty">Difficulté</label>
                            <select id="difficulty" name="difficulty" >
                                <option value="Très Facile">Très Facile</option>
                                <option value="Facile">Facile</option>
                                <option value="Moyen">Moyen</option>
                                <option value="Difficile">Difficile</option>
                                <option value="Très Difficile">Très Difficile</option>
                            </select>
                </label></p>
                <p>Distance : <input type="number" name="distance"></p>
                <p>Durée : <input type="time" name="duration"></p>
                <p>Dénivelée : <input type="number" name="height_difference"></p>

                <button type="submit" name="add" value="add">ajouter</button>
            </form>
    <?php
    }else{
        echo "Vous devez être connecté pour pouvoir ajouter des éléments";
    }
    ?>
<H2>Affiche toutes les données</h2>
<p> <?php affiche(); ?></p>
</body>
</html>