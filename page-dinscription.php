<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inscription</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <nav>

            <h2 class="logo">MonSite</h2>

            <div class="menu">
                <a href="index.html">Accueil</a>
                <a href="inscription.php">Inscription</a>
            </div>

        </nav>
    </header>


    <main class="inscription">

        <div class="form-container">

            <h1>Créer un compte</h1>

            <p>
                Remplissez le formulaire ci-dessous
                pour créer votre compte.
            </p>


            <form action="traitement.php" method="POST">

                <div class="form-group">

                    <label for="nom">
                        Nom
                    </label>

                    <input
                        type="text"
                        id="nom"
                        name="nom"
                        placeholder="Entrez votre nom"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="prenom">
                        Prénom
                    </label>

                    <input
                        type="text"
                        id="prenom"
                        name="prenom"
                        placeholder="Entrez votre prénom"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="email">
                        Adresse e-mail
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="exemple@email.com"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="telephone">
                        Téléphone
                    </label>

                    <input
                        type="tel"
                        id="telephone"
                        name="telephone"
                        placeholder="Ex : 0700000000"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="mot_de_passe">
                        Mot de passe
                    </label>

                    <input
                        type="password"
                        id="mot_de_passe"
                        name="mot_de_passe"
                        placeholder="Créez votre mot de passe"
                        required
                    >

                </div>


                <div class="form-group">

                    <label for="confirmation">
                        Confirmer le mot de passe
                    </label>

                    <input
                        type="password"
                        id="confirmation"
                        name="confirmation"
                        placeholder="Confirmez votre mot de passe"
                        required
                    >

                </div>


                <button type="submit">
                    S'inscrire
                </button>

            </form>


            <p class="retour">
                Vous avez déjà un compte ?
                <a href="connexion.php">Se connecter</a>
            </p>

        </div>

    </main>

</body>
</html>