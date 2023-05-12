<?php

$title = 'inscription';
include_once '../view/include/header.php';
var_dump($reponse, $inscrit);
?>


<div class="container-sub">
    <form action="" method="post">
        <h2>créer un compte</h2>       
        <input class="field" type="text" name="pseudo" id="" placeholder="Entrer votre pseudo">        
        <input class="field" type="password" name="password" id="" placeholder="Entrer votre password">               
        <input class="field" type="password" name="confirmPassword" id="" placeholder="Veuillez confirmer votre password">            
        <input class="field" type="email" name="email" id="" placeholder="Veuillez confirmer votre mail">
        <input type="submit" value="inscription" name="envoi" class="btn">      
    </form>
    <?php 
    if(isset($reponse)): 
    ?>
    <h3><?= $reponse ?></h3>
    <?php endif ?>
</div>
<?php
include_once '../view/include/footer.php';
?>
</body>

</html>