<?php
// Connexion à la base de données
$conn = mysqli_connect("localhost", "root", "", "atelier2-3-2") 
    or die("Erreur de connexion : " . mysqli_connect_error());

// Requête pour récupérer les désignations des catégories
$req_categories = "SELECT ID_CAT, NOM_CAT FROM categories";
$res_categories = mysqli_query($conn, $req_categories);

if (!$res_categories) {
    die("Erreur dans la requête : " . mysqli_error($conn));
}

// Vérification et récupération de l'ID de catégorie sélectionnée
$idCat = 1; // Valeur par défaut
if (isset($_POST['idCat'])) {
    $idCat = intval($_POST['idCat']); // Récupère l'ID sélectionné
}

// Préparation de la requête SQL pour récupérer les produits
$req_produits = "SELECT * FROM produits WHERE ID_CAT = $idCat";
$res_produits = mysqli_query($conn, $req_produits);

if (!$res_produits) {
    die("Erreur dans la requête produits : " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits par Catégorie</title>
</head>
<body>
    <h1>Liste des Produits par Catégorie</h1>

    <!-- Formulaire avec menu déroulant -->
    <form method="POST" action="">
        <label for="categories">Choisissez une catégorie :</label>
        <select name="idCat" id="categories">
            <?php
            // Boucle pour remplir les options du menu déroulant
            while ($row = mysqli_fetch_assoc($res_categories)) {
                // Ajouter "selected" si l'ID correspond à la sélection actuelle
                $selected = ($row['ID_CAT'] == $idCat) ? "selected" : "";
                echo "<option value='" . $row['ID_CAT'] . "' $selected>" . $row['NOM_CAT'] . "</option>";
            }
            ?>
        </select>
        <button type="submit">Envoyer</button>
    </form>

    <!-- Affichage du tableau -->
    <h2>Produits dans la catégorie sélectionnée</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>DES</th>
            <th>PRIX</th>
            <th>QUANTITE</th>
            <th>PROMO</th>
        </tr>
        <?php
        // Parcours des résultats et affichage des produits
        while ($p = mysqli_fetch_assoc($res_produits)) { ?>
            <tr>
                <td><?php echo htmlspecialchars($p['ID_PROD']); ?></td>
                <td><?php echo htmlspecialchars($p['DESIGNATION']); ?></td>
                <td><?php echo htmlspecialchars($p['PRIX']); ?></td>
                <td><?php echo htmlspecialchars($p['QUANTITE']); ?></td>
                <td><?php echo htmlspecialchars($p['PROMO']); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
