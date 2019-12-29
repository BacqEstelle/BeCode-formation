<form action="unicorn.php" method="post">
<p>Êtes-vous :
    <input type="radio" name="type" value="human">Humain
    <input type="radio" name="type" value="cat">Chat
    <input type="radio" name="type" value="unicorn">Licorne
    <p><input type="submit" value="envoyer"></p>
</p>
</form>
    <?php

    $is_human = ($_POST["type"] == "human") ?  '<img src ="images/human.gif"><p>Human</p></img>' : false;
    $is_cat = ($_POST["type"] == "cat") ?  '<img src ="images/cat.gif"><p>Cat</p></img>' : false;
    $is_unicorn = ($_POST["type"] == "unicorn") ?  '<img src ="images/unicorn.gif"><p>Unicorn</p></img>' : false;

        echo "$is_human";
        echo "$is_cat";
        echo "$is_unicorn";
    ?>