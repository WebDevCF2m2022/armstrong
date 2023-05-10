<?php 

$title = "contact";
include_once '../view/include/header.php';

  
                    
?>


<!--<div class="box">
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
                <input type="submit" value="ENVOYER" class="buttonsub inputUser" id="submit">
                </div>
        
        </form>
    </div>-->

<form action="" class="formcontact" method="POST">
        
<div class="container">

    <div class="contact-box">
        <div class="left"></div>
        <div class="right">
            <h2 class="contactezns">Contactez-nous</h2>

            <input type="text" id="utilisateur"class="field" name="contactName" placeholder= "nom" required
                maxlength="16">
            
            <input name="contactMail" type="exemple@mail.com" id="mdp"class="field" placeholder= "email" required
                maxlength="30">
            
            <textarea name="contactMessage" id="message" class="field area" placeholder= "message" required /></textarea>   
            
            <input type="submit" value="ENVOYER" class="btn" id="submit">
                
        </div>
    </div>
</div>
</form>


<?php
    include_once '../view/include/footer.php';

