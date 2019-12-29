<?php
$my_name = "Estelle";
$age = 30;
$color_eyes = "green";
$family = array (0 => "Jean-Marc", 1 => "Lohan", 2 => "Matheo");
$hungry = true;
?>

<p> Salut ! Mon nom est <?php echo $my_name; ?>.</p>
<p> J'ai <?php echo $age; ?> ans.</p>
<p> J'ai les yeux <?php echo $color_eyes?>. </p>
<p> La première personne de ma famille est <?php echo $family[0] ?>.</p>
<p> 
<?php if ($hungry == true) {
        echo "j'ai faim";
    }else {
        echo "j'ai pas faim";
    }?>.</p>
<p>
