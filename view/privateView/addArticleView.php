<?php

$title = "ajout d'article";
include_once '../view/include/headerCrud.php';
var_dump($_POST, $problem);
?>
<button><a href="?deconnect">deconnection</a></button>
<button > <a href="?deconnect"> Accueil<i class='fas fa-home'></i></a></button>

<div class="container-add">
    <div class="champs">
    <h2 id="salut">Salut <?= $_SESSION['login_user']?> ! </h2>

    <?php if(isset($problem)): ?>
        <h2><?= $problem ?></h2>
        <?php endif; ?> 
    
    <form action="" method="POST">
        <input class="field" type="text" placeholder="nom de l'instrument" name="name_article">
        <textarea class="field" name="min_description_article" id="" cols="30" rows="5" placeholder="une courte introduction de votre article"></textarea>
        <textarea class="field" name="max_description_article" id="" cols="30" rows="20" placeholder="votre texte"></textarea>
        <input class="field" type="text" placeholder="extrait sonore mp3 (url)" name="sound_article">
        <input class="field" type="text" placeholder="URL photo 1 (obligatoire)" name="url_image_1">
        <input class="field" type="text" placeholder="URL photo 2 (optionnelle)" name="url_image_2">
        <input class="field" type="text" placeholder="URL photo 3 (optionnelle)" name="url_image_3">
        <hr>
        </div>
        <div class="checkbox">
        <h3>Choisissez une ou plusieurs catégorie(s) : </h3>
        <?php
        //modif
        foreach ($allCateg as $item) :
        ?>
            <input type="checkbox" name="category_id_category[]" value="<?= $item['id_category'] ?>" id="<?= $item['name_category'] ?>">
            <label for="<?= $item['name_category'] ?>"><?= $item['name_category'] ?></label>
            <hr>
        <?php
        endforeach;
        ?>
        <!-- <input type="submit" value="envoie" name="submit" class="btn"> -->
        <input type="submit" class="btn">
        </form>
    </div>
</div>



<?php


include_once '../view/include/footer.php';

?>