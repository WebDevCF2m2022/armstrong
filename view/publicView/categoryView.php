<?php 

$title = $categoryById['name_category'];
include_once '../view/include/header.php';
// var_dump($articlesByCategory);

?>



<!-- affichage titre la catégory et la descritpion -->
    <h2><?= $categoryById['name_category'];?></h2>
    <p><?= $categoryById['description_category'];?></p>


<!-- affichage des articles de la catégory -->

<?php foreach($articlesByCategory as $item) : ?>
    <h2><?= $item['name_article']?></h2>
    <img src="<?=$item['url']?>" alt="<?= $item['name_article']?>" width="300px">
    <p><?=$item['sound_article']?></p>
    <p><?=$item['min_description_article']?></p>

<?php endforeach; ?>






<?php
    include_once "../view/include/footer.php";
?>
