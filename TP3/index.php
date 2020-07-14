<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

$nbPortraits = 4;

function displayPortrait($array)
{
  echo '<div class="col s4 offset-s3">';
  echo '<h1' . $array['name'] . ' ' . $array['firstname'] . '</h1>';
  echo '<img class="materialboxed" width="400" src="' . $array['portrait']  . '" alt="' . $array['name'] . ' ' . $array['firstname'] . '">';
  echo '</div>';
}
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="row">
      <?php
      for ($i = 1; $i <= $nbPortraits; $i++) {
        $portrait = 'portrait' . $i;
        displayPortrait($$portrait);
      }
      ?>
    </div>
  </div>

</body>

</html>