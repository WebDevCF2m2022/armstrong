<?php 

$title = "contact";
include_once '../view/include/header.php';


?>


<div class="box">
        <form action="./" class="formbloc" method="POST">
            <div class="formgroupe">
                <label for="Nom" class="labelAll">Utilisateur</label>
                <input type="text" id="utilisateur"class="inputUser" name="contactName" required
                maxlength="16">
            </div>

            <div class="formgroupe">
                <label for="mail" class="labelAll">Mail</label>
                <input name="contactMail" type="exemple@mail.com" id="mdp"class="inputUser" required
                maxlength="16">
            </div>

            <div class="formgroupe">
                <label for="message" class="labelAll">Message</label>
                <textarea name="contactMessage" id="message" required /></textarea>
            </div>   


            <div class="formgroupe">
                <input type="submit" value="LOGIN" class="buttonsub inputUser" id="submit">
                </div>
        
        </form>
    </div>
<?php
    include_once '../view/include/footer.php';

