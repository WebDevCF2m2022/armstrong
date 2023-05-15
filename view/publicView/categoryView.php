<?php 

$title = $categoryById['name_category'];
include_once '../view/include/header.php';
// var_dump($articlesByCategory);

?>



<!-- affichage titre la catégory et la descritpion -->
    <h2 class="gategName"><?= $categoryById['name_category'];?></h2>
    <p class="gategDesc"><?= $categoryById['description_category'];?></p>


<!-- affichage des articles de la catégory -->
<div class="gridCard">
<?php foreach($articlesByCategory as $item) : ?>
    <div class='card1'>
    <a href="?articleId=<?=$item['id_article']?>"><img src="<?=$item['url']?>" alt="<?= $item['name_article']?>" width="300px"></a>
    <h2 class="positionCard"><?= $item['name_article']?></h2>
    <img src="asset/img/bouton-jouer.png" class="ctrlIcon" />
    <p class="positionCard"><?=$item['min_description_article']?></p>
    <div>
    <audio controls src="<?= $item['sound_article'] ?>"></audio>
  </div>
</div>
<?php endforeach; ?>
</div>






<?php
    include_once "../view/include/footer.php";
?>
