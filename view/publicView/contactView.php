<?php 

$title = "contact";
include_once '../view/include/header.php';
var_dump($problem);
  
                    
?>

<form action="" class="formcontact" method="POST">
        
<div class="container">


    <div class="contact-box">
        <div class="left">
        <img src="asset/img/img2.jpg" class="bg" alt="image cuivre music">
        </div>
        <div class="right">
            <h2 class="contactezns">Contactez-nous</h2>
            <?php if(isset($problem)): ?>
                <h2><?= $problem ?></h2>
            <?php endif; ?> 


            <input type="text" id="utilisateur"class="field" name="contactName" placeholder= "nom" required>
            
            <input name="contactMail" type="exemple@mail.com" id="mdp"class="field" placeholder= "email" required>
            
            <textarea name="contactMessage" id="message" class="field area" placeholder= "message" required /></textarea>   
            
            <input type="submit" value="ENVOYER" class="btn" id="submit">
                
        </div>
    </div>
</div>
</form>

<?php
    include_once '../view/include/footer.php';

