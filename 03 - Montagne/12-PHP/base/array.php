<p>
<h3>Exercice 1</h3>
<?php


$family = ["Jean-Marc", "Lohan", "Matheo"];

$recipes = ["Steack", "Bolo","Hamburger"];

$films = ["Gladiator","Matrix","The Lord of the Ring"];
?>


<p> <?php print_r($family); ?> </p>
<p> <?php print_r($recipes); ?> </p>
<p> <?php print_r($films[1]); ?> </p>
</p>


<p>
<h3>Exercice 2</h3>
        <?php
        $me = ["firstname" => "Estelle", "lastname" => "Bacq", "age" => 31, "saison" => "Ete", "foot" => false ];
        echo "<pre>";
        print_r($me);
        echo "</pre>";


        if ($me ["foot"] == false){
            echo "<pre>";
            $me ["foot"] = "je n'aime pas";
            print_r($me);
            echo "</pre>";
        }
        else{
            echo "<pre>";
            $me ["foot"] = "J'aime bien !";
            print_r($me);
            echo "</pre>";
        }

        ?>
</p>
<p>
    <h3>Exercice 3</h3>
        <?php
        $me2 = ["firstname" => "Estelle", "lastname" => "Bacq", "age" => 31, "saison" => "Ete", "foot" => false ];

        $me2 ["hobbies"] = ["code","run","children"];

        $me2 ["father"] = ["firstname" => "Bernard", "lastname" => "Bacq", "age" => "54", "saison" => "Printemps", "foot" => false];

        $me2 ["father"] ["hobbies"] = ["fishing","driving","travels"];

        echo  ' <pre> ' ; 
        print_r ( $me2 ); 
        echo  ' </ pre> ' ;
        ?>
</p>

<p>
    <h3>Exercices de manipulation de tableaux</h3>

    <p>Supposons que vous souhaitiez connaître le nombre de loisirs de votre mère. Essayez de deviner la fonction php native qui vous permet de compter le nombre d'éléments dans un tableau.</p>
    <?php 
    echo "Nombres des loisirs de mon papa : ";
    print_r (count($me2 ["father"] ["hobbies"]));
    ?>


    <p>Ci-dessous, comptez vos propres loisirs</p>
    <?php
    echo "Nombres de mes loisirs : ";
    print_r (count($me2 ["hobbies"]));
    ?>

    <p>Ci-dessous, ajoutez les deux totaux et affichez le nombre total de loisirs.</p>
    <?php
    echo "Nombres total des loisirs: ";
    print_r ((count($me2 ["hobbies"])) + (count($me2 ["father"] ["hobbies"])));

    ?>
</p>

<p>
    <h3>Ajouter un élément dans un tableau multidimensionnel</h3>
    <p>Un ami vous a présenté les joies de la taxidermie: cela devient rapidement votre nouveau passe-temps. Essayez de trouver le bon moyen d’ajouter ce nouveau passe-temps à la 'hobbies'clé de votre baie .</p>


    <?php
    $me2 ["hobbies"] [] = "Taxidermie";

    print_r ($me2["hobbies"]);
    ?>

</p>

<p>
    <h3>Remplacer</h3>
    <p>Vous décidez que vous avez besoin d’une réinitialisation et changez votre nom de famille en Durand. Comment mettriez-vous à jour votre tableau?</p>
    <?php

    $me2 ["lastname"] = "Durant";
    print_r ($me2);
    ?>
</p>


<p>
<h3>Créer un nouveau tableau à partir de 2 autres (ou plus)</h3>
<?php
$me3 = ["firstname" => "Estelle", "lastname" => "Bacq", "age" => 31, "saison" => "Ete", "foot" => false ];
$me3 ["hobbies"] = ["code","run","children"];

$soulmate = ["firstname" => "Jean-Marc", "lastname" => "Daubry", "age" => 55, "saison" => "Ete", "foot" => false];
$soulmate ["hobbies"] = ["code","children","cooking"];

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me3 ["hobbies"],$soulmate ["hobbies"]);
$possible_hobbies_via_merge = array_merge ($me3 ["hobbies"],$soulmate ["hobbies"]);



echo '<pre>';
print_r($possible_hobbies_via_intersection);
print_r($possible_hobbies_via_merge);
echo '</pre>';

?>

</p>

<p>
<h3>Plus d'exercices de tableau</h3>
<p>Créez un tableau $web_developmentcontenant une 'frontend'et une 'backend'clé. Attribuez un tableau vide à chaque clé.</p>
<p>Ensuite, ajoutez une ligne en dessous qui insère 'xhtml'le bon tableau.</p>
<p>Ensuite, ajoutez une ligne en dessous qui insère 'Ruby on Rails'le bon tableau.</p>
<p>Ensuite, ajoutez une ligne en dessous qui insère 'CSS'le bon tableau.</p>
<p>Ensuite, ajoutez une ligne en dessous qui insère 'Flash'le bon tableau.</p>
<p>Ensuite, ajoutez une ligne en dessous qui insère 'JavaScript'le bon tableau.</p>
<p>Ensuite, ajoutez une ligne en dessous qui sera remplacée 'xhtml'par 'html'.</p>
<p>Ensuite, ajoutez une ligne en dessous qui supprime 'Flash'du tableau.</p>
<?php

$webdevopment = ["frontend" => [],"backend"=> []];
array_push($webdevopment ["frontend"],"xhtml");
array_push($webdevopment ["backend"],"Ruby On Rails");
array_push($webdevopment ["frontend"],"Css");
array_push($webdevopment ["backend"],"Flash");
array_push($webdevopment ["frontend"],"Javascript");
$xhtml_key = array_search('xhtml', $webdevopment["frontend"]);
$webdevopment["frontend"][$xhtml_key] = 'html';
unset($webdevopment["backend"][1]);
print_r($webdevopment);
?>


