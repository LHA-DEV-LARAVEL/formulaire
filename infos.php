<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$contact = $_POST['contact'];
$sexe = $_POST['sexe'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails</title>
    <!-- Inclusion du CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclusion du CSS -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main class="container mt-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Détails sur vos informations</h5>
                <p class="card-text"><?php echo $sexe == 'masculin' ? "M. " : "Mme."; ?> <?php echo $nom . " " . $prenom ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Adresse : <?php echo $adresse ?></li>
                <li class="list-group-item">Contact : <?php echo $contact ?></li>
            </ul>
        </div>
    </main>
    <!-- Inclusion du JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- Inclusion du JS -->
    <script src="./app.js"></script>
</body>

</html>