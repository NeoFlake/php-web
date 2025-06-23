<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container container-sm">
        <div class="row">
            <h1 class="h1 col-6">Page d'inscription</h1>
        </div>
        <div class="row">
            <form action="utilisateur.php" method="post" class="col-6">
                <div class="row mb-3">
                    <label class="col-3" for="username">Nom : </label>
                    <div class="col-4">
                        <input id="username" name="username" type="text" class="form-control" placeholder="Votre nom d'utilisateur" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-3" for="password">Mot de passe : </label>
                    <div class="col-4">
                        <input id="password" name="password" type="password" class="form-control" placeholder="Votre mot de passe" />
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-3" for="age">Age : </label>
                    <div class="col-4">
                        <input id="age" name="age" type="age" class="form-control" placeholder="Votre âge" min=0 max=150 />
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="ville" class="col-3">Ville : </label>
                    <div class="col-4">
                        <select name="ville" id="ville" class="form-select">
                            <option selected>Choisissez votre ville</option>
                            <option value="marseille">Marseille</option>
                            <option value="lyon">Lyon</option>
                            <option value="paris">Paris</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="remarque" class="col-3">Remarque : </label>
                    <div class="col-4">
                        <textarea id="remarque" name="remarque" cols=50 rows=5 class="form-control"></textarea>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <span>Genre :</span>
                    </div>
                    <div class="col-2">
                        <div>
                            <input type="radio" name="genre" value="homme" class="form-check-input" />
                            <label class="form-check-label" for="radioDefault1">
                                Homme
                            </label> 
                        </div>
                    </div>
                    <div class="col-2">
                        <div>
                            <input type="radio" name="genre" value="femme" class="form-check-input" />
                            <label class="form-check-label" for="radioDefault2">
                                Femme
                            </label> 
                        </div>
                    </div>
                    
                </div>
                <div class="row mb-3">
                    <div class="col-3">
                        <span>Sport préféré :</span>
                    </div>
                    <div class="col-6">
                        <div class="form-check row">
                            <div class="col-4 inline">
                                <input type="checkbox" name="sport" value="football" /> Football
                            </div>
                            <div class="col-4 inline">
                                <input type="checkbox" name="sport" value="tennis" /> Tennis
                            </div>
                            <div class="col-4 inline">
                                <input type="checkbox" name="sport" value="e-sport" /> E-sport
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">
                    S'inscrire
                </button>
            </form>
        </div>
    </div>
    <style>
        h1 {
            text-decoration: underline;
        }

        .form-check div {
            display: inline;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>