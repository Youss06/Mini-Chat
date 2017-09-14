<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini-Chat</title>
  </head>
  <body>
    <form class="" action="minichat_post.php" method="post">
    <label for="pseudo">Pseudo :</label> <input type="text" name="pseudo" value=""><br />
    <label for="message">Message :</label> <input type="text" name="message" value=""><br />
    <button type="submit" name="button">Envoyer</button>
    </form>


    <?php

    try {

      $bdd = new PDO('mysql:host=localhost;dbname=Mini-Chat;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    } catch (Exception $e) {


    die('Erreur : ' . $e->getMessage());


    }

$reponse = $bdd->query('SELECT * FROM messages  LIMIT 0, 10');

while ($donnees = $reponse->fetch())
{

	echo '<p><strong>' . ($donnees['pseudo']) . '</strong> : ' . ($donnees['message']) . '</p>';
}


$reponse->closeCursor();

     ?>

  </body>
</html>
