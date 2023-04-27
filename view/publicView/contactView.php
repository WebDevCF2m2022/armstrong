<?php 

$title = "conctact";
include_once '../view/include/header.php';

echo 'contact';

?>
<h1>Contactez nous :)</h1>
<div>
    <form name="contact" action=" " method="post">
        <label for="Nom">Nom</label>
        <input type="text" name="contactName" placeholder="nom d'utilisateur"required><br>
        <label for="mail">Mail</label>
        <input type="text" name="contactMail" placeholder="exemple@mail.com"required><br>
        <label for="message">Message</label>
        <textarea type="text" name="contactMessage" placeholder="entrez ici votre message"required></textarea><br>
        <input type="submit" value="sendMessage">
    </form>
</div>