<?php

$nameRegex =  '/^[a-zA-Z_çzáàâãéèêíïóôõöúñ-]{3,15}$/';
$adressRegex = '/^[a-zA-Z ]+$/';
$mailRegex =  '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
$phoneRegex =  '/^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/';
$unemploymentRegex = '/^[a-zA-Z0-9_-]{3,15}$/';
$academyRegex =  '/^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()!@:%_\+.~#?&\/\/=]*)/';

$error = array();
var_dump($_POST);

if (isset($_POST['lastname'])) {
    if (!preg_match($nameRegex, $_POST['lastname'])) {
        $error['lastname'] = 'Mauvais format';
    };
    if (empty($_POST['lastname'])) {
        $error['lastname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['firstname'])) {
    if (!preg_match($nameRegex, $_POST['firstname'])) {
        $error['firstname'] = 'Mauvais format';
    };
    if (empty($_POST['firstname'])) {
        $error['firstname'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['nationality'])) {
    if (!preg_match($nameRegex, $_POST['nationality'])) {
        $error['nationality'] = 'Mauvais format';
    };
    if (empty($_POST['nationality'])) {
        $error['nationality'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['birthplace'])) {
    if (!preg_match($nameRegex, $_POST['birthplace'])) {
        $error['birthplace'] = 'Mauvais format';
    };
    if (empty($_POST['birthplace'])) {
        $error['birthplace'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['unemployment'])) {
    if (!preg_match($unemploymentRegex, $_POST['unemployment'])) {
        $error['unemployment'] = 'Mauvais format';
    };
    if (empty($_POST['unemployment'])) {
        $error['unemployment'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['adress'])) {
    if (!preg_match($adressRegex, $_POST['adress'])) {
        $error['adress'] = 'Mauvais format';
    };
    if (empty($_POST['adress'])) {
        $error['adress'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['mail'])) {
    if (!preg_match($mailRegex, $_POST['mail'])) {
        $error['mail'] = 'Mauvais format';
    };
    if (empty($_POST['mail'])) {
        $error['mail'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['phone'])) {
    if (!preg_match($phoneRegex, $_POST['phone'])) {
        $error['phone'] = 'Mauvais format';
    };
    if (empty($_POST['phone'])) {
        $error['phone'] = 'Veuillez renseigner le champ';
    };
}

if (isset($_POST['codeacademy'])) {
    if (!preg_match($academyRegex, $_POST['codeacademy'])) {
        $error['codeacademy'] = 'Mauvais format';
    };
    if (empty($_POST['codeacademy'])) {
        $error['codeacademy'] = 'Veuillez renseigner le champ';
    };
}

//var_dump($error);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style type="text/css">
        form {
            background-color: #f8edeb;
        }

        input {
            text-align: center;
        }

        legend {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
    <title>TP1</title>
</head>

<body>
    <div class="container justify-content-center text-center form-control">
        <legend>Formulaire</legend>
        <?php if (!empty($_POST) && count($error) < 1) { ?>
            <p>Vous avez bien été enregistré !</p>
            <p>NOM : <?= htmlspecialchars($_POST['lastname']) ?></p>
            <p>Prénom : <?= htmlspecialchars($_POST['firstname']) ?></p>
            <p>Date de naissance : <?= htmlspecialchars($_POST['birthdate']) ?></p>
            <p>Pays de naissance : <?= htmlspecialchars($_POST['birthplace']) ?></p>
            <p>Nationalité : <?= htmlspecialchars($_POST['nationality']) ?></p>
            <p>Adresse : <?= htmlspecialchars($_POST['adress']) ?></p>
            <p>E-mail : <?= htmlspecialchars($_POST['mail']) ?></p>
            <p>Téléphone : <?= htmlspecialchars($_POST['phone']) ?></p>
            <p>Diplôme : <?= htmlspecialchars($_POST['degree']) ?></p>
            <p>Numéro pôle emploi : <?= htmlspecialchars($_POST['unemployment']) ?></p>
            <p>Nombre de badge : <?= htmlspecialchars($_POST['badge']) ?></p>
            <p>Liens codecademy : <?= htmlspecialchars($_POST['codeacademy']) ?></p>
            <p>Questions : <?= htmlspecialchars($_POST['answerone']) ?></p>
            <p>Questions : <?= htmlspecialchars($_POST['answertwo']) ?></p>
            <p>Questions : <?= htmlspecialchars($_POST['answerthree']) ?></p>

        <?php } else { ?>


            <form action="index.php" method="POST" novalidate>
                <div class="form-group">
                    <label for="lastname">Nom</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="ex. NOM" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['lastname']) ? $error['lastname'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="firstname">Prénom</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="ex. PRENOM" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['firstname']) ? $error['firstname'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="birthdate">Date de naissance</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="" value="<?= isset($_POST['birthdate']) ? $_POST['birthdate'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['birthdate']) ? $error['birthdate'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="birthplace">Pays de naissance</label>
                    <input type="text" class="form-control" id="birthplace" name="birthplace" placeholder="ex. France" value="<?= isset($_POST['birthplace']) ? $_POST['birthplace'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['birthplace']) ? $error['birthplace'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="nationality">Nationalité</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="ex. Français(e)" value="<?= isset($_POST['nationality']) ? $_POST['nationality'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['nationality']) ? $error['nationality'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="adress">Adresse</label>
                    <input type="text" class="form-control" id="adress" name="adress" placeholder="ex. Rue Discord" value="<?= isset($_POST['adress']) ? $_POST['adress'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['adress']) ? $error['adress'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="mail">E-mail</label>
                    <input type="email" class="form-control" id="mail" name="mail" placeholder="ex. gary@finalspace.fr" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['mail']) ? $error['mail'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="phone">Téléphone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="0612345678" value="<?= isset($_POST['phone']) ? $_POST['phone'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['phone']) ? $error['phone'] : '' ?></span>
                </div>

                <div>
                    <label for="degree">Diplôme</label>
                    <select name="degree" class="text-center form-control">
                        <option>Aucun</option>
                        <option>Bac</option>
                        <option>Bac+2</option>
                        <option>Bac+3</option>
                        <option>Supérieur</option>
                    </select>
                        <span class="text-danger"><?= isset($error['degree']) ? $error['degree'] : '' ?></span>
                </div>

                <div class="form-group">
                    <label for="unemployment">Numéro Pole Emploi</label>
                    <input type="text" class="form-control" id="unemployment" name="unemployment" placeholder="" value="<?= isset($_POST['unemployment']) ? $_POST['unemployment'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['unemployment']) ? $error['unemployment'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="badge">Nombre de badge</label>
                    <input type="number" min="0" class="form-control" id="badge" name="badge" placeholder="" value="<?= isset($_POST['badge']) ? $_POST['badge'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['badge']) ? $error['badge'] : '' ?></span>
                </div>
                <div class="form-group">
                    <label for="codeacademy">Lien Code Academy</label>
                    <input type="url" class="form-control" id="codeacademy" name="codeacademy" placeholder="Mettre le lien ici" value="<?= isset($_POST['codeacademy']) ? $_POST['codeacademy'] : '' ?>" required>
                    <span class="text-danger"><?= isset($error['codeacademy']) ? $error['codeacademy'] : '' ?></span>
                </div>
                <label>Questions</label>
                <div class="form-group">
                    <p>Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?</p>
                    <textarea id="answerone" name="answerone"></textarea>
                    <span class="text-danger"><?= isset($error['answerone']) ? $error['answerone'] : '' ?></span>
                </div>
                <div>
                    <p>Racontez-nous un de vos "hacks" (pas forcément technique ou informatique</p>
                    <textarea id="answertwo" name="answertwo"></textarea>
                    <span class="text-danger"><?= isset($error['answertwo']) ? $error['answertwo'] : '' ?></span>
                </div>
                <div>
                    <p>Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?</p>
                    <textarea id="answerthree" name="answerthree"></textarea>
                    <span class="text-danger"><?= isset($error['answerthree']) ? $error['answerthree'] : '' ?></span>
                </div>
                <button type="submit" class="btn btn-dark mt-3" value="envoyer">Envoyer</button>
            </form>
        <?php } ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>