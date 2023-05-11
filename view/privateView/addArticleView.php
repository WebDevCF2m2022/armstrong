<?php

$title = "ajout d'article";
include_once '../view/include/header.php';
var_dump($_POST);
?>

<!-- <style> et <hr> à enlever quand il faudra styliser -->
<style>
    form input, form textarea {
        display: block;
        margin: 0.5rem;
    }
</style>

<h2>Salut <?= $_SESSION['login_user']?></h2>

<form action="" method="POST">
    <input type="text" placeholder="nom de l'instrument" name="name_article">
    <textarea name="min_description_article" id="" cols="30" rows="5" placeholder="une courte introduction de votre article"></textarea>
    <textarea name="max_description_article" id="" cols="30" rows="20" placeholder="votre texte"></textarea>
    <input type="text" placeholder="extrait sonore mp3 (url)" name="sound_article">
    <input type="text" placeholder="URL photo 1 (obligatoire)" name="url_image_1">
    <input type="text" placeholder="URL photo 2 (optionnelle)" name="url_image_2">
    <input type="text" placeholder="URL photo 3 (optionnelle)" name="url_image_3">
    <hr>
    <p>Choisissez une ou plusieurs catégorie(s)</p>
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
    <input type="submit" value="envoie" name="submit">

    <!--//-->

</form>