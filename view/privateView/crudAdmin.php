<?php

$title = 'admin';
include_once '../view/include/headerCrud.php';
// var_dump()

?>
<button><a href="?deconnect">deconnection</a></button>
<button><a href="?p=article_add">ajoutez article</a></button>
<button > <a href="./"> Accueil<i class='fas fa-home'></i></a></button>

<?php if(empty($allArticle)):?>
    <h2>y'a pas d'articles frer</h2>
    <?php else: ?>
<div class="container-crud">
    <table>
        <tr>
            <th>nom d'article</th>
            <th>description</th>
            <th>date</th>
            <th>auteur</th>
            <th>catégorie</th>
            <th>update</th>
            <th>delete</th>
        </tr>
        <tr>
            <?php
            foreach ($allArticle as $item) :
                ?>
                <td class="case"><?= $item['name_article'] ?></td>
                <td class="case"><?= $item['min_description_article'] ?></td>
                <td class="case"><?= $item['date_article'] ?></td>
                <td class="case"><?= $item['login_user'] ?></td>
                <td class="case"><?= $item['name_category'] ?></td>
                <td id="update-crud"><button class="btn"><a href="?article_update=<?= $item['id_article'] ?>">update</a></button></td>
                <td id="delete-crud"><button class="btn"><a  onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer \'<?= $item['name_article'] ?>\' ?'); if(a){ document.location = '?p=d&article_delete=<?= $item['id_article'] ?>'; };" href="#">delete</a></button></td>
                
                
            </tr>
    <?php
        endforeach;
    endif;
    ?>

    </table>
</div>

<?php
include_once '../view/include/footer.php';
?>