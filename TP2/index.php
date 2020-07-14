 <?php
    $nameRegex =  '/^[a-zA-Z_çzáàâãéèêíïóôõöúñ-]{3,15}$/';
    $mailRegex =  '/^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$/';
    $ageRegex = '/^[0-9]{1,2}$/';
    $error = array();
    

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

    if (isset($_POST['age'])) {
        if (!preg_match($ageRegex, $_POST['age'])) {
            $error['age'] = 'Mauvais format';
        };
        if (empty($_POST['age'])) {
            $error['age'] = 'Veuillez renseigner le champ';
        };
    }

    if (isset($_POST['company'])) {
        if (!preg_match($nameRegex, $_POST['company'])) {
            $error['company'] = 'Mauvais format';
        };
        if (empty($_POST['company'])) {
            $error['company'] = 'Veuillez renseigner le champ';
        };
    }

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
     <title>TP2</title>
 </head>

 <body>
     <div class="container justify-content-center text-center form-control">
         <legend>Formulaire</legend>





         <form action="index.php" method="POST" novalidate>
             <div class="form-group">
                 <label for="gender">Civilité</label>
                 <select name="gender" class="form-group">
                     <option>Madame</option>
                     <option>Monsieur</option>
                 </select>
                 <span class="text-danger"><?= isset($error['gender']) ? $error['gender'] : '' ?></span>
             </div>
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
                 <label for="age">Age</label>
                 <input type="text" class="form-control" id="age" name="age" placeholder="ex. 33" value="<?= isset($_POST['age']) ? $_POST['age'] : '' ?>" required>
                 <span class="text-danger"><?= isset($error['age']) ? $error['age'] : '' ?></span>
             </div>
             <div class="form-group">
                 <label for="company">Société</label>
                 <input type="text" class="form-control" id="company" name="company" placeholder="" value="<?= isset($_POST['company']) ? $_POST['company'] : '' ?>" required>
                 <span class="text-danger"><?= isset($error['company']) ? $error['company'] : '' ?></span>
                 <button type="submit" class="btn btn-dark mt-3" name="submit" value="envoyer">Envoyer</button>
             </div>
         </form>
         <?php
 if(isset($_POST['submit']) && count($error) < 1 ){ ?>

        <div>
             <p>Vous avez bien été enregistré !</p>
             <p>Civilité : <?= htmlspecialchars($_POST['gender']) ?></p>
             <p>NOM : <?= htmlspecialchars($_POST['lastname']) ?></p>
             <p>Prénom : <?= htmlspecialchars($_POST['firstname']) ?></p>
             <p>Votre Age : <?= htmlspecialchars($_POST['age']) ?></p>
             <p>Nom de votre societé : <?= htmlspecialchars($_POST['company']) ?></p>
         </div>

 <?php } ?>
        
     </div>
 </body>

 </html>