<?php

$couleur = 'red';

if (isset($_POST['couleur'])){
    $couleur=$_POST['couleur'];
    setcookie("couleur", $couleur);

} else if (isset($_COOKIE['couleur'])) $couleur=$_COOKIE['couleur'];

function addColor($name, $label, $couleur) {
    echo '<input type="radio" name="couleur" value="'.$name.'"';
    if ($couleur===$name) echo 'checked="checked"';
    echo '/>'.$label;
}
?>

<html>
    <body>
        <font style="color: <?php echo $couleur; ?>">Bonjour</font><br/>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <fieldset><legend>Couleur de la police</legend>
                <?php
                    addColor('red', 'Rouge', $couleur);
                    addColor('blue', 'Bleu', $couleur);
                ?>
            </fieldset><input type="submit"/>
        </form>
    </body>
</html>