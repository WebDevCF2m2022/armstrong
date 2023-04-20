<?php 

$title = "Connect";
include_once '../view/include/header.php';

echo 'Connect';
?>
<form action="" method="POST">
  <label for="login">Nom d'utilisateur :</label>
  <input type="text" id="login" name="login"><br>

  <label for="pwd">Mot de passe :</label>
  <input type="password" id="pwd" name="pwd"><br>


  <input type="submit" name="connect">
</form>
<button type="button"><a href="?p=sub">Inscrivez vous ici</a></button>

<?php
  if (isset($message)) {
    echo "<h1>$message</h1>";
  }
?>