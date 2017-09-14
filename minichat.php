<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mini-Chat</title>
  </head>
  <body>
    <form class="" action="minichat_post.php" method="post">
    <label for="pseudo">Pseudo :</label> <input type="text" name="" value=""><br />
    <label for="message">Message :</label> <input type="text" name="" value=""><br />
    <button type="submit" name="button">Envoyer</button>
    </form>


    <?php

    try {

      $bdd = new PDO('mysql:host=localhost;dbname=Mini-Chat;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    } catch (Exception $e) {


    die('Erreur : ' . $e->getMessage());


    }

$reponse = $bdd->query('SELECT * FROM messages');

while ($donnees = $reponse->fetch())
{
  echo $donnees['pseudo']. ':' .$donnees['message'] .'<br />' ;
}


$reponse->closeCursor();

     ?>

  </body>
</html>
