<?php

$title = 'admin';
include_once '../view/include/header.php';
// var_dump($allArticle);

?>
<button><a href="?deconnect">deconnection</a></button>
<button><a href="?p=article_add">ajoutez article</a></button>
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
        var_dump($_GET);
        ?>
        <?php
        foreach ($allArticle as $item) :
        ?>
            <td><?= $item['name_article'] ?></td>
            <td><?= $item['min_description_article'] ?></td>
            <td><?= $item['date_article'] ?></td>
            <td><?= $item['login_user'] ?></td>
            <td><?= $item['name_category'] ?></td>
            <td><a href="?article_update=<?= $item['id_article'] ?>">update</a></td>
            <td><a onclick="void(0);let a=confirm('Voulez-vous vraiment supprimer \'<?= $item['name_article'] ?>\' ?'); if(a){ document.location = '?p=d&article_delete=<?= $item['id_article'] ?>'; };" href="#">delete</a></td>


    </tr>
<?php
        endforeach;
?>
</table>

<?php
include_once '../view/include/footer.php';
?>