<?php

echo"<h1>Liste des inscrits</h1>";

?>
<table align="center" border="1">
    <tr><th>Date</th><th>Nom</th><th>Prenom</th><th>Email</th><th>tel</th></tr>

<?php
$id = fopen("inscription.log", "r");
if ($id==false) {
    die("Erreur lors douverture de fichier");
} else {
    //echo "$id";
    while ($ligne = fgets($id))
    {
        $tab = explode(";",$ligne);  // on decoupe la ligne courante selon le delimitateur ";"
var_dump($tab);
        echo"<tr>";
            echo"<td>$tab[0]</td>";
            echo"<td>$tab[1]</td>";
            echo"<td>$tab[2]</td>";
            echo"<td>$tab[3]</td>";
            echo"<td>$tab[4]</td>";

        echo"</tr>";
    }
        echo"</table>";
    $r=fclose($id);
    if ($r==false) {
        die("Erreur lors de la fermeture du fichier");
    }
}
?>