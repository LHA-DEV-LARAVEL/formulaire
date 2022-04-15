<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <!-- Inclusion du CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclusion du CSS -->
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <main class="container mt-3">
        <h1 class="text-center">Informations personnelles</h1>
        <form class="my-5" action="infos.php" method="POST">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom(s) :</label>
                <input type="text" class="form-control" id="nom" name="nom" onkeyup="checkIfUpperThanThree()">
                <div id="nomHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prenom(s) :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" onkeyup="checkIfUpperThanThree()">
                <div id="prenomHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse :</label>
                <input type="text" class="form-control" id="adresse" name="adresse" onkeyup="checkIfUpperThanThree()">
                <div id="adresseHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="contact" class="form-label">Contact :</label>
                <input type="number" class="form-control" id="contact" name="contact" onkeyup="checkContact()">
                <div id="contactHelp" class="form-text"></div>
            </div>
            <div class="form-check form-check-inline my-4">
                <input class="form-check-input" type="radio" name="sexe" id="masculin" value="masculin">
                <label class="form-check-label" for="masculin">Masculin</label>
            </div>
            <div class="form-check form-check-inline my-4">
                <input class="form-check-input" type="radio" name="sexe" id="feminin" value="feminin">
                <label class="form-check-label" for="feminin">Feminin</label>
            </div>
            <div class="d-flex my-4 justify-content-around">
            <input type="submit" class="btn btn-primary" value="Valider">
            <input type="reset" class="btn btn-secondary" value="Annuler">
            </div>
        </form>
    </main>
    <!-- Inclusion du JS de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
    <!-- Inclusion du JS -->
    <script src="./app.js"></script>
</body>

</html>