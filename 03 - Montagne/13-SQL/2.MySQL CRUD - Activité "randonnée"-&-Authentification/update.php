<?php
    session_start();
    if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) {
    try
    {
        // On se connecte à MySQL
        include('db.php');
        $idSelected = $_GET["id"];
        $reponseModify = $bdd->query("SELECT * FROM hiking where id='$idSelected'");
        $donnesModify = $reponseModify->fetch();
        $idFinal = $donnesModify['id'];
        ?>
        <fieldset>
                <form class="modify" action="update.php?id=<?php echo $donnesModify['id']; ?>" method="POST">
                    <input type="number" name="idCorrect" value="<?php echo $donnesModify['id'];?>"hidden>
                    <p>Nom de la randonnée : <input type="textarea" name="nameNew" value="<?php echo $donnesModify['name'];?>"></p>
                    <p><label for="difficulty">Difficulté</label>
                                <select id="difficulty" name="difficultyNew">
                                    <option value="<?php echo $donnesModify['difficulty'];?>"><?php echo $donnesModify['difficulty'];?></option>
                                    <option value="Très Facile">Très Facile</option>
                                    <option value="Facile">Facile</option>
                                    <option value="Moyen">Moyen</option>
                                    <option value="Difficile">Difficile</option>
                                    <option value="Très Difficile">Très Difficile</option>
                                </select>
                    </label></p>
                    <p>Distance : <input type="number" name="distanceNew" value="<?php echo $donnesModify['distance'];?>"></p>
                    <p>Durée : <input type="time" name="durationNew" value="<?php echo $donnesModify['duration'];?>"></p>
                    <p>Dénivelée : <input type="number" name="height_differenceNew" value="<?php echo $donnesModify['height_difference'];?>"></p>

                    <button type="submit" name="modifySelect">Modifier</button>
                    <p><input type="button" onclick="window.location.href = 'index.php';" value="Retour"></input></p>
                </form>
        </fieldset>
        <?php
            if ( $_SERVER["REQUEST_METHOD"] == "POST" AND isset($_POST["modifySelect"]) ) {
                    $idCorrect = $_POST['idCorrect']; 
                    $nameNewBrut= $_POST['nameNew'];
                    $nameNew= filter_var($nameNewBrut, FILTER_SANITIZE_STRING);
                    $difficultyNewBrut= $_POST['difficultyNew'];
                    $difficultyNew= filter_var($difficultyNewBrut, FILTER_SANITIZE_STRING);
                    $distanceNewBrut= $_POST['distanceNew'];
                    $distanceNew= filter_var($distanceNewBrut, FILTER_SANITIZE_STRING);
                    $durationNewBrut= $_POST['durationNew'];
                    $durationNew= filter_var($durationNewBrut, FILTER_SANITIZE_STRING);
                    $height_differenceNewBrut= $_POST['height_differenceNew'];
                    $height_differenceNew = filter_var($height_differenceNewBrut, FILTER_SANITIZE_STRING);
                    // set the PDO error mode to exception
                    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                    $sql = "UPDATE hiking SET name='$nameNew', difficulty='$difficultyNew', distance='$distanceNew', duration='$durationNew', height_difference='$height_differenceNew'  WHERE id='$idCorrect'";
                
                    // Prepare statement
                    $stmt = $bdd->prepare($sql);
                
                    // execute the query
                    $stmt->execute();
                
                    // echo a message to say the UPDATE succeeded
                    echo "<script>alert('Modification effectuée')</script>";
                    header("Refresh:0");
                    }
    }
    catch(Exception $e)
    {
        // En cas d'erreur
            die('Erreur : '.$e->getMessage());
    }
}else{
    echo "Vous devez être connecté pour avoir accès a cette page";
}