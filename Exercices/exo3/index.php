<?php
include_once("Panier.php");

include_once("Fruit.php");


// Création d'instances de pommes et de cerises
$pomme1 = new Fruit(Fruit::POMME,150, 1.5, "pomme.jpg");
$pomme2 = new Fruit(Fruit::POMME,200, 2.0, "pomme2.jpg");
$cerise1 = new Fruit(Fruit::CERISE,50, 2.0, "cerise.jpg");
$cerise2 = new Fruit(Fruit::CERISE,30, 2.5, "cerise2.jpg");

// Création de deux paniers
$panier1 = new Panier();
$panier2 = new Panier();

// Ajout de fruits aux paniers
$panier1->ajouterFruit($pomme1);
$panier1->ajouterFruit($cerise1);

$panier2->ajouterFruit($pomme2);
$panier2->ajouterFruit($cerise2);



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
        <option value="panier1" <?php echo ($panierSelectionne === 'panier1') ? 'selected' : ''; ?>>Panier 1</option>
        <option value="panier2" <?php echo ($panierSelectionne === 'panier2') ? 'selected' : ''; ?>>Panier 2</option>
    </select>
    <button type="submit">Afficher le Panier</button>
</form>

<?php
// Afficher le contenu du panier sélectionné
if ($panierSelectionne === 'panier1') {
    $panier1->afficherContenu();
} elseif ($panierSelectionne === 'panier2') {
    $panier2->afficherContenu();
}
?>


</body>
</html>
