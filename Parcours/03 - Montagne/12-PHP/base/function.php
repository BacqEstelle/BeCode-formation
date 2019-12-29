<p>
    <h3>Utilisez une fonction qui capitalise la première lettre de l'argument fourni. Exemple: "émile"devrait revenir"Émile"<h3>
        <?php
            $name = "émile";
            $name = mb_convert_case($name, MB_CASE_TITLE, 'UTF-8');

            echo $name;
        ?>

</p>

<p>
    <h3>Utilisez la fonction native vous permettant d’afficher l’année en cours.</h3>
        <?php
            $date = date("Y");
            
            echo $date;
        ?>
</p>
<p>
    <h3>Maintenant, affichez la date, l'heure, les minutes et les secondes, en utilisant la même fonction, en jouant avec les arguments.</h3>
        <?php
            $date = date("D-d-m-y H:i:s");

            echo $date;
        ?>
</p>
<p>
    <h3>Crée une fonction "Somme" qui prend 2 nombres et retourne leur somme.</h3>
        <?php
            $number1 = "67";
            $number2 = "89";

            echo $number1 + $number2;
        ?>
</p>
<p>
    <h3>Améliorez cette fonction afin qu'elle vérifie si l'argument est bien un nombre. Sinon, il devrait afficher:"Error: argument is the not a number."</h3>
        <?php
            $number1 = "45";
            $number2 = "46";
                if(is_numeric($number1) && is_numeric($number2)){
                    echo $number1 + $number2;
                } else {
                    echo "Error: argument is the not a number.";
                }
        ?>
</p>
<p>
    <h3>Créez une fonction qui prend en argument une chaîne de caractères et renvoie un acronyme composé des initiales de chaque mot.</h3>
        <?php
            $string = "In code we trust!";
            $string =  preg_replace('/\b(\w)\w*\W*/', '\1', $string);
            $string =  strtoupper ($string);

            echo $string;
        ?>
</p>
<p>
    <h3>Créez une fonction qui remplace les lettres "a" et "e" par "æ"</h3>
        <?php
            $characters = ["ae"];
            $words = ["caecotrophie","chaenichthys","microsphaera","sphaerotheca"];
                foreach ($words as $word){
                    $word = str_replace($characters,"æ",$word);
                    echo "$word ";
                }
        ?>
</p>
<p>
    <h3>Création de la fonction inverse, qui remplace « æ » par « ae »</h3>
        <?php
            $words2 = ["cæcotrophie","chænichthys","microsphæra","sphærotheca"];
                foreach ($words2 as $word2){
                        $word2= strtr($word2,"æ","ae");
                        echo "$word2 ";
                    }
        ?>
</p>
<p>
    <h3>Créez une fonction pour renvoyer des messages "notice", "warning" et "error" à un utilisateur, qui prend 2 arguments: le "message" et la "classe css" (valeurs: "info", "error", "warning ")</h3>
       

                <?php

                    $notice = "Parfait !";
                    $warning = "warning";
                    $error = "error";
                    echo '<form action="function.php" method="post">';
                        if ($_POST['mail'] == ""){
                            echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $error. '"/></p>';

                        }
                        elseif ($_POST['mail'] == preg_match('/@/', $_POST['mail'])){
                            echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $warning. '"/></p>';
                        }else{
                            echo '<p>Votre adresse mail: <input type="text" name="mail" value="'. $notice. '"/></p>';
                        }
                    echo '<p><input type="submit" value="envoyer"></p></form>';

                ?>

</p>

<p>
<h3>Créez un générateur de mots aléatoires, en sortie 2 mots: l'un dont la longueur est comprise entre 1 et 5 lettres, l'autre entre 7 et 15 lettres. L'écran affichera un titre "Générer un nouveau mot", puis les deux mots générés et, en dessous, un bouton avec le texte "Générer").</h3>
        <?php
            
            function random($nb_car, $chaine = 'abcdefghijklmnopqrstuvwxyz')
            {
                $nb_lettres = strlen($chaine) - 1;
                $generation = '';
                for($i=0; $i < $nb_car; $i++)
                {
                    $pos = mt_rand(0, $nb_lettres);
                    $car = $chaine[$pos];
                    $generation .= $car;
                }
                return $generation;
            }
            echo '<h2>Générer un nouveau mot</h2>';
            echo "Proposition 1: " .random(rand(1, 5)). "</br>" ;
            echo "Proposition 2: " .random(rand(7, 15));


            echo '<form action="function.php" method="post">';
            echo '<p><input type="submit" value="Générer" onclick="random();"></p></form>';

        ?>
</p>
<p>
    <h3>Décapitaliser la chaîne: "STOP YELLING I CAN'T HEAR MYSELF THINKING!!"</h3>
            <?php
                $string = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
                $string = strtolower($string);
                echo $string;
            ?>
</p>
<p>
    <h3>Dans votre nouvel emploi, vous devez gérer le code d'un ancien développeur. Faites le sécher en créant une fonction personnalisée calculate_cone_volume</h3>
        <form action="function.php" method="post">
        <p>Hauteur du cone en cm: <input type="text" name="coneHeight"/> </p>
        <p>Rayon du cone en cm : <input type="text" name="coneRayon"/> </p>
        <p><input type="submit" value="envoyer"></p>
        </form> 
           
           
            <?php

                    $rayon = $_POST["coneRayon"];
                    $height = $_POST["coneHeight"];
                    $calcule = 3.14 * ($rayon*2) / (3*$height);
                    echo 'The volume of a cone which ray is ' .$rayon. ' and height is '.$height.' = ' . $calcule . ' cm<sup>3</sup><br />';  
                
            ?>
</p>
