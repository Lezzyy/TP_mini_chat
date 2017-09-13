<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>POST</title>
  </head>
  <body>
    <?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', 'gj7b!17LA');
}
catch(Exception $e)
{
  die('Erreur :'. $e->getMessage());
}

// $req = $bdd->prepare('INSERT INTO minichat(pseudo, message) VALUES(:pseudo, :message)');
// $req->execute(array(
//   'pseudo' => 'Joey',
//   'texte' => 'How you doin ?'
// ));


// $bdd->exec('INSERT INTO message(pseudo, texte) VALUES(\'Joey\', \'How you doin ?\')');
//
// $bdd->exec('INSERT INTO message(pseudo, texte) VALUES(\'Chandeler\', \'Wrong person bro\')');

 $req = $bdd->prepare('INSERT INTO message(pseudo, texte) VALUES(?, ?)');
 $req->execute(array(
   $_POST['pseudo'],
   $_POST['message']
 ));

header('Location:mini_chat.php');
     ?>
  </body>
</html>
