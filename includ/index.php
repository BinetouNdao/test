<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'insertion de données</title>
    <!-- Ajout du CDN Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Formulaire d'insertion de données</h1>
          <!-- Formulaire pour inscrire un utilisateur -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Inscrire un utilisateur</h2>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="nom_utilisateur">Nom d'utilisateur:</label>
                        <input type="text" class="form-control" name="nom_utilisateur" id="nom_utilisateur">
                    </div>
                    <div class="form-group">
                        <label for="mot_de_passe">Mot de passe:</label>
                        <input type="password" class="form-control" name="mot_de_passe" id="mot_de_passe">
                    </div>
                    <button type="submit" class="btn btn-primary">Inscrire Utilisateur</button>

        <h1 class="mt-4 mb-4">Formulaire d'inscription</h1>

<!-- Formulaire pour inscrire un utilisateur -->
<div class="card mb-4">
    <div class="card-body">
        <form action="traitement_inscription.php" method="post">
            <div class="form-group">
                <label for="nom">Nom:</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Saisir votre nom">
            </div>
            <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Saisir votre prénom">
            </div>
            <div class="form-group">
                <label for="ine">INE:</label>
                <input type="text" class="form-control" name="ine" id="ine" placeholder="Saisir votre INE">
            </div>
            <div class="form-group">
                <label for="filiere">Filière:</label>
                <input type="text" class="form-control" name="filiere" id="filiere" placeholder="Saisir votre filière">
            </div>
            <div class="form-group">
                <label for="classe">Classe:</label>
                <input type="text" class="form-control" name="classe" id="classe" placeholder="Saisir votre classe">
            </div>
            <div class="form-group">
                <label for="date_naissance">Date de naissance:</label>
                <input type="date" class="form-control" name="date_naissance" id="date_naissance">
            </div>
            <!-- Champ pour la date d'inscription -->
            <div class="form-group">
                <label for="date_inscription">Date d'inscription:</label>
                <input type="date" class="form-control" name="date_inscription" id="date_inscription">
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
</div>


        <!-- Formulaire pour insérer un livre -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Ajouter un livre</h2>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="isbn">ISBN:</label>
                        <input type="text" class="form-control" name="isbn" id="isbn">
                    </div>
                    <div class="form-group">
                        <label for="titre">Titre:</label>
                        <input type="text" class="form-control" name="titre" id="titre">
                    </div>
                    <div class="form-group">
                        <label for="auteur">Auteur:</label>
                        <input type="text" class="form-control" name="auteur" id="auteur">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter Livre</button>
                </form>
            </div>
        </div>

        <!-- Formulaire pour insérer un membre -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">Ajouter un membre</h2>
                <form action="insert.php" method="post">
                    <div class="form-group">
                        <label for="numero_membre">Numéro de membre:</label>
                        <input type="text" class="form-control" name="numero_membre" id="numero_membre">
                    </div>
                    <div class="form-group">
