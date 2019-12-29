<?php
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
        try
        {
            include('db.php');


            if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["add"]) ) { 
                $nameBrut= $_POST['name'];
                $name= filter_var($nameBrut, FILTER_SANITIZE_STRING);
                $difficultyBrut= $_POST['difficulty'];
                $difficulty= filter_var($difficultyBrut, FILTER_SANITIZE_STRING);
                $distanceBrut= $_POST['distance'];
                $distance= filter_var($distanceBrut, FILTER_SANITIZE_STRING);
                $durationBrut= $_POST['duration'];
                $duration= filter_var($durationBrut, FILTER_SANITIZE_STRING);
                $height_differenceBrut= $_POST['height_difference'];
                $height_difference = filter_var($height_differenceBrut, FILTER_SANITIZE_STRING);
                if (empty($_POST["name"])) { 
                            echo "<p>* Veuillez entrer un nom de randonnées.</p>";
                }
                if (empty($_POST["difficulty"])) { 
                    echo "<p>* Veuillez entrer un niveau de difficulté.</p>";
                }
                if (empty($_POST["distance"])) { 
                    echo "<p>* Veuillez entrer une distance.</p>";
                }
                if (empty($_POST["duration"])) { 
                    echo "<p>* Veuillez entrer une durée.</p>";
                }
                if (empty($_POST["height_difference"])) { 
                    echo "<p>* Veuillez entrer un dénivelé.</p>";
                }
                else {
                    $req = $bdd->prepare('INSERT INTO hiking(name, difficulty, distance, duration, height_difference) VALUES(:name, :difficulty, :distance, :duration, :height_difference)');
                    $req->execute(array(
                        'name' => $name,
                        'difficulty' => $difficulty,
                        'distance' => $distance,
                        'duration' => $duration,
                        'height_difference' => $height_difference,
                        ));
                    
                    echo 'La randonnée a bien été ajoutée';
                }

            }
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
}