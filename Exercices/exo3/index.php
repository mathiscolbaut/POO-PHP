<?php
include_once("Panier.php");
include_once("Fruit.php");

// Création d'instances de pommes et de cerises
$pomme1 = new Fruit(Fruit::POMME, 150, 1.5, "pomme.jpg");
$pomme2 = new Fruit(Fruit::POMME, 200, 2.0, "pomme2.jpg");
$cerise1 = new Fruit(Fruit::CERISE, 50, 2.0, "cerise.jpg");
$cerise2 = new Fruit(Fruit::CERISE, 30, 2.5, "cerise2.jpg");

// Création de paniers
$paniers = array(
    'panier1' => new Panier(),
    'panier2' => new Panier(),
);

// Ajout de fruits aux paniers
$paniers['panier1']->ajouterFruit($pomme1);
$paniers['panier1']->ajouterFruit($cerise1);

$paniers['panier2']->ajouterFruit($pomme2);
$paniers['panier2']->ajouterFruit($cerise2);

// Traitement du formulaire de sélection de panier
$panierSelectionne = isset($_POST['panier']) ? $_POST['panier'] : '';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Déroulante</title>
    <style>
        /* Ajoutez du style pour rendre la liste déroulante plus attrayante */
        select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
</head>
<body>

<!-- Formulaire de sélection de panier -->
<form method="post" action="">
    <label for="panier">Choisissez un panier :</label>
    <select id="panier" name="panier">
        <?php
        // Boucle sur les paniers pour générer les options de la liste déroulante
        foreach ($paniers as $id => $panier) {
            echo "<option value=\"$id\"";
            echo ($panierSelectionne === $id) ? ' selected' : '';
            echo ">$id</option>";
        }
        ?>
    </select>
    <button type="submit">Afficher le Panier</button>
</form>

<?php
// Afficher le contenu du panier sélectionné
if (isset($paniers[$panierSelectionne])) {
    $paniers[$panierSelectionne]->afficherContenu();
}
?>

</body>
</html>
