<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>

<body>
    <h1>Page d'inscription</h1>
    <form action="utilisateur.php" method="get">
        <div>
            <label for="username">Nom : </label>
            <input id="username" name="username" type="text" placeholder="Votre nom d'utilisateur" />
        </div>
        <div>
            <label for="password">Mot de passe : </label>
            <input id="password" name="password" type="password" placeholder="Votre mot de passe" />
        </div>
        <div>
            <label for="age">Age : </label>
            <input id="age" name="age" type="age" placeholder="Votre âge" min=0 max=150 />
        </div>
        <div>
            <label for="ville">Ville : </label>
            <select name="ville" id="ville">
                <option value="marseille">Marseille</option>
                <option value="lyon">Lyon</option>
                <option value="paris">Paris</option>
            </select>
        </div>
        <div>
            <label for="remarque">Remarque : </label>
            <textarea id="remarque" name="remarque" cols=50 rows=5></textarea>
        </div>
        <div>
            Genre : 
            <input type="radio" name="genre" value="homme" /> Homme
            <input type="radio" name="genre" value="femme" /> femme
        </div>
        <div>
            Sport préféré :
            <input type="checkbox" name="sport" value="football" /> Football
            <input type="checkbox" name="sport" value="tennis" /> Tennis
            <input type="checkbox" name="sport" value="e-sport" /> E-sport
        </div>
        <button>
            S'inscrire
        </button>
    </form>
</body>

</html>