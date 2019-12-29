<p>
<h3>1. Nettoye ta chambre !</h3>
<?php
$room_is_filthy = true;
$cleanup_room = false;

if( $room_is_filthy == true ){
	echo "Yuk, Room is dirty : let's clean it up !";
	    if ($cleanup_room == true){
	echo "<br>Room is now clean!";
    $room_is_filthy = false;
        }
} else {
	echo "<br>Nothing to do, room is neat.";
};
?>
</p>


<p>
<h3>1.2. L'améliorer </h3>
<?php
$possible_states = array (
    0 => "filthy",
    1 => "dirty",
    2 => "clean",
    3 => "immaculate"
);


$room_filthiness = $possible_states[1]; 

if( $room_filthiness == "filthy"  ){
	echo "Yuk, Room is Disgusting! Let's clean it up !";
} else if( $room_filthiness == "dirty" ){
	echo "Yuk, Room is dirty : let's clean it up !";
} else {
	echo "<br>Nothing to do, room is neat.";
};
?>
</p>

<p>
<h3>Affichez un message d'accueil différent selon l'heure du jour</h3>
<?php 


$today = date("H:i:s"); 

echo"$today";
if ($today >= "21:01:00"){
    echo "<p> Bonne nuit !</p>";
}
elseif ($today >= "16:01:00")
{
    echo "<p> Bonsoir ! </p>";
}
elseif ($today >= "12:01:00")
{
    echo "<p> Bon après-midi </p>";
}
elseif ($today >= "09:01:00")
{
    echo "<p>Bonne journée !</p>";
}
elseif ($today >= "05:00:OO" )
{
    echo "<p>Bonjour !</p>";
}
else {
    echo "<p> Bonne nuit ! </p>";
}

?>

</p>


<p>
<h3>3. Affichez un message d'accueil différent en fonction de l'âge de l'utilisateur.</h3>


<form action="condition.php" method="post">


<p>Votre age: <input type="text" name="age"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>


<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>

<?php 

if ($_POST['age'] > 115)
{
    echo "Wow! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
}
if ($_POST['age'] >= 18 && $_POST['age']< 115)
{
    echo " Hello Adult!";
}
if ($_POST['age'] < 18 && $_POST['age']>12)
{
    echo "Hello Teenager!";
}

if ($_POST['age'] <= 12)
{
    echo "Hello Kiddo !";
}
?>
</p>


<p>
<h3>3.1 Affichez un message d'accueil différent en fonction de l'âge et du sexe de l'utilisateur.</h3>


<form action="condition.php" method="post">
<p>Votre Sexe:
    <input type="radio" name="genre" value="femme">Femme
    <input type="radio" name="genre" value="homme">Homme
</p>

<p>Votre age: <input type="text" name="age"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>


<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>
<p>vous être <?php echo  $_POST['genre']  ; ?></p>

<?php 

if ($_POST["genre"] == "homme")
{

    if ($_POST['age'] > 115)
    {
        echo "Wow Mister! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
    }
    if ($_POST['age'] >= 18 && $_POST['age']< 115)
    {
        echo " Hello Mister Adult!";
    }
    if ($_POST['age'] < 18 && $_POST['age']>12)
    {
        echo "Hello Mister Teenager!";
    }

    if ($_POST['age'] <= 12)
    {
        echo "Hello Mister Kiddo !";
    }
}
if ($_POST["genre"] == "femme")
{

if ($_POST['age'] > 115)
{
    echo "Wow Miss! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
}
if ($_POST['age'] >= 18 && $_POST['age']< 115)
{
    echo " Hello Miss Adult!";
}
if ($_POST['age'] < 18 && $_POST['age']>12)
{
    echo "Hello Miss Teenager!";
}

if ($_POST['age'] <= 12)
{
    echo "Hello Miss Kiddo !";
}
}
?>
</p>

<p>
<h3>Affichez un message d'accueil différent en fonction de l'âge, du sexe et de la langue maternelle de l'utilisateur.</h3>
<form action="condition.php" method="post">
<p>Parlez-vous anglais ?
    <input type="radio" name="langage" value="oui">Oui
    <input type="radio" name="langage" value="non">non
<p>Votre Sexe:
    <input type="radio" name="genre" value="femme">Femme
    <input type="radio" name="genre" value="homme">Homme
</p>

<p>Votre age: <input type="text" name="age"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>


<p>Tu as <?php echo (int)$_POST['age']; ?> ans.</p>
<p>vous être <?php echo  $_POST['genre']  ; ?></p>

<?php 
    if ($_POST["langage"] == "oui"){
        if ($_POST["genre"] == "homme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Wow Mister! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Mister Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Hello Mister Kiddo !";
            }
        }
        if ($_POST["genre"] == "femme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Wow Miss! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Hello Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Hello Miss Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Hello Miss Kiddo !";
            }
        }
    }
    if ($_POST["langage"] == "non"){
        if ($_POST["genre"] == "homme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Mister! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Mister Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Mister Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Aloha Mister Kiddo !";
            }
        }
        if ($_POST["genre"] == "femme")
        {

            if ($_POST['age'] > 115)
            {
                echo "Aloha Wow Miss! Encore en vie! Es-tu un robot, comme moi? Puis-je te prendre dans mes bras?";
            }
            if ($_POST['age'] >= 18 && $_POST['age']< 115)
            {
                echo " Aloha Miss Adult!";
            }
            if ($_POST['age'] < 18 && $_POST['age']>12)
            {
                echo "Aloha Miss Teenager!";
            }

            if ($_POST['age'] <= 12)
            {
                echo "Aloha Miss Kiddo !";
            }
        }
    }
?>
</p>

<p>
<h3>L'équipe de football féminin</h3>

<form action="condition.php" method="post">
<p>Votre age: <input type="text" name="age"/> </p>
<p>Votre Sexe:
    <input type="radio" name="genre" value="femme">Femme
    <input type="radio" name="genre" value="homme">Homme
</p>
<p><input type="submit" value="envoyer"></p>
</form>

<?php

    if ($_POST["genre"] == "homme")
    {
        echo "Désolé, vous ne remplissez pas les critères";
    }
    if ($_POST["genre"] == "femme")
    {
        if ($_POST["age"]>=21 && $_POST["age"]<=40){
            echo "Bienvenue dans l'équipe";
        }
        else {
            echo "Désolé, vous ne remplissez pas les critères";
        }
    }


?>

</p>
<p>
<h3>Atteindre le même objectif, sans ELSE.</h3>

<form action="condition.php" method="post">
<p>Votre age: <input type="text" name="age"/> </p>
<p>Votre Sexe:
    <input type="radio" name="genre" value="femme">Femme
    <input type="radio" name="genre" value="homme">Homme
</p>
<p><input type="submit" value="envoyer"></p>
</form>

<?php
    $equip = "Désolé, vous ne remplissez pas les critères";
    if ($_POST["genre"] == "femme" && $_POST["age"]>=21 && $_POST["age"]<=40)
    {
        $equip = "Bienvenue dans l'équipe";   

    }
    echo $equip;


?>

</p>

<p>
<h3>7. "L'école est nul!" Exercice</h3>
<form action="condition.php" method="post">
<p>Les notes: <input type="text" name="grade"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>
<?php
    if($_POST["grade"] == 19 || $_POST["grade"] == 20)
    {
        echo "Trop beau pour être vrai : tricheur !";
    }
    elseif($_POST["grade"]==15 || $_POST["grade"]==16 || $_POST["grade"]==17 || $_POST["grade"]==18)
    {
        echo "Bravo, bravissimo !";
    }
    elseif($_POST["grade"]==11 || $_POST["grade"]==12 || $_POST["grade"]==13 || $_POST["grade"]==14)
    {
        echo "Pas mal !";
    }
    elseif($_POST["grade"]=10)
    {
        echo "Pas assez !";
    }
    elseif($_POST["grade"]>=5 && $_POST["grade"]<=9)
    {
        echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
    }
    elseif ($_POST["grade"]<=4)
    {
        echo "Ce travail est vraiment mauvais ! Quel Gamin Idiot !";
    }
    else {
        echo "Ceci n'est pas une note valable";
    }

?>
</p>