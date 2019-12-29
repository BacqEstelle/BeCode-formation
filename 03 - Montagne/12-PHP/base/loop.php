<p>
<h3>Exercices 1</h3>

<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

foreach ($pronouns as $key => $pronoun){
    if ($key==2){

        echo ucfirst($pronoun);
        echo " codes</br>";

    }else{
        echo ucfirst($pronoun);
        echo " code</br>";
    }

}
?>

</p>
<p>
<h3>Des exercices</h3>
<p>Ecrivez un script qui imprime les nombres de 1 à 120 en utilisant  while</p>
    <?php
    $nombre = 1;

        while ($nombre <= 120)
        {
            echo "$nombre, ";
            $nombre++; 
        }
    ?>
<p>Ecrivez un script qui imprime les nombres de 1 à 120 en utilisant  for</p>
    <?php
        for ($nombre2 = 1; $nombre2 <= 120; $nombre2 ++)
        {
            echo "$nombre2, ";
        }
    ?>
</p>

<p>
<h3>Créez un tableau contenant le prénom de tous les membres de votre startup. Affichez chaque prénom à l'aide d'une boucle.</h3>
    <?php
    $names = ["Ludo","Lois","Martine","Murielle","Marc","Bernard"];
        foreach ($names as $name){
        
                echo "$name ,";   
        }


    ?>
</p>

<p>
    <h3>Créez un tableau contenant au moins 10 pays. Générez ensuite le code HTML qui affichera une zone de sélection dans un formulaire HTML (voir la maquette ci-dessous). Bien sûr, une boucle sera utile ...</h3>


    <?php

        $countries = ["Belgique","France","Allemagne","Portugal","Autriche","Pologne","Croatie","Norvège","Espagne","Italie"];
        $codesIso = ["BE","FR","A","P","AU","PO","CR","N","E","I"];

        $countriesIso = array_combine($codesIso, $countries);

            echo '<select id="country">';
                foreach ($countriesIso as $key => $countryIso ){
                    echo '<option value="'.$key.'">'.$countryIso.'</option>';
                }
            echo '</select>';
    ?>


</p>