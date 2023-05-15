<?php

$title = "Connect";
include_once '../view/include/header.php';


?>
<!--<form action="" method="POST">
  <label for="login">Nom d'utilisateur :</label>
  <input type="text" id="login" name="login"><br>

  <label for="pwd">Mot de passe :</label>
  <input type="password" id="pwd" name="pwd"><br>


  <input type="submit" name="connect">
</form>
<button type="button"><a href="?p=sub">Inscrivez vous ici</a></button>-->
<form action="" method="POST" class="formcontact">

    <div class="container">
        <div class="contact-connect">
            <div class="left">
                <img src="asset/img/img2.jpg" class="bg" alt="image cuivre music">
            </div>
            <div class="right">
                <h2 class="contactezns">Connectez-vous</h2>
                <?php if (isset($message)) {
                    echo "<h2>$message</h2>";
                }
                ?>
                <!--<label for="login">Nom d'utilisateur :</label>-->
                <input type="text" id="login" name="login" class="field" placeholder="Nom d'utilisateur">

                <!--<label for="pwd">Mot de passe :</label>-->
                <input type="password" id="pwd" name="pwd" class="field" placeholder="mot de passe">

                <input type="submit" name="connect" class="btn">
            </div>
</form>

<button class="btn" type="button"><a href="?p=sub">Inscrivez vous ici</a></button>
</div>

</div>

<?php
?>