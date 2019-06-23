<?php

$password = 'monpassword';

/* Comme paramètre de la fonction, on a :
    - le mot de passe
    - l'algorithme souhaité : ici 'PASSWORD_DEFAULT'
*/
$hash = password_hash($password, PASSWORD_DEFAULT);

var_dump($hash);

// Vérifier que le mot de passe est correct :
if(password_verify($password, $hash)) {
    echo "OK";
} else {
    echo "NOK";
}

?>


<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <!-- Librairies de Style -->
  <!-- ------------------- -->
  <link rel="stylesheet" href="./css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="./css/main.css">

</head>
<body>
  ...
  <!-- Le reste du contenu -->
  ...

  <!-- Librairies JavaScrip -->
  <!-- -------------------- -->
  <script src="./js/jquery/jquery_3_3_1.js"></script>
  <script src="./js/bootstrap/bootstrap.min.js"></script>
</body>
</html>