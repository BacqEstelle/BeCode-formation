
<?php
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
$req = $bdd->query('SELECT * FROM utilisateur');
while ($info = $req->fetch())
{
$login_valide = $info['pseudo'];
$pwd_valide = $info['pwd'];

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {
    $verifyPwd = $_POST['pwd'];
	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ($login_valide == $_POST['login'] && $pwd_valide == sha1($verifyPwd)) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		// on redirige notre visiteur vers la page index
        header ('location: index.php');
        echo '<body onLoad="alert(\'Vous êtes maintenant connecté\')">';
    }
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.htm">';
	}
}
else {
	echo $pwd_valide;
}
}

?>