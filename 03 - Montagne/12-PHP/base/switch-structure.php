<p>
<h3>8. La structure "Switch".</h3>
<form action="switch-structure.php" method="post">
<p>Les notes: <input type="text" name="grade"/> </p>
<p><input type="submit" value="envoyer"></p>
</form>
<?php
    switch ($_POST["grade"]) {
        case "1" :
            echo "Ce travail est vraiment mauvais ! Quel Gamin Idiot !";
            break;
        case "2" : 
            echo "Ce travail est vraiment mauvais ! Quel Gamin Idiot !";
            break;
        case "3" :
            echo "Ce travail est vraiment mauvais ! Quel Gamin Idiot !";
            break;
        case "4" :
            echo "Ce travail est vraiment mauvais ! Quel Gamin Idiot !";
            break;
        case "5" :
            echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
            break;
        case "6" :
            echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
            break;
        case "7" : 
            echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
            break;
        case "8" :
            echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
            break;
        case "9":
            echo "Ce n'est pas suffisant. Plus d'études sont necessaires !";
            break;
        case "10":
            echo "Pas assez !";
            break;
        case "11":
            echo "Pas mal !";
            break;
        case "12":
            echo "Pas mal !";
            break;
        case "13":
            echo "Pas mal !";
            break;
        case "14":
            echo "Pas mal !";
            break;
        case "15":
            echo "Bravo, bravissimo !";
            break;
        case "16":
            echo "Bravo, bravissimo !";
            break;
        case "17":
            echo "Bravo, bravissimo !";
            break;
        case "18":
            echo "Bravo, bravissimo !";
            break;
        case "19":
            echo "Trop beau pour être vrai : tricheur !";
            break;
        case "20":
            echo "Trop beau pour être vrai : tricheur !";
            break;
        default :
            echo "Indiquez un chiffre entre 1 & 20";
            break;
    }
    

?>
</p>