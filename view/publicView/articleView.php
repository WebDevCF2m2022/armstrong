<?php 

$title = "articles";
include_once '../view/include/header.php';

// var_dump($articleById);  
?>

<?php foreach($articleById as $article): 
    $textArticle = $article['max_description_article']; 
    $paragraphe = breakText($textArticle, strlen($textArticle)/2);
?>
    <main>
        <div class="contitreart">
    <h2 class="titreart"><?= $article['name_article'] ?></h2>
        </div>
    <!-- on a d'office un première photo qu'on va afficher -->
    <section class="conteneurart">

    <div class="contimgart1">
    <img class="imgart1" src="<?= $imageByArticleID[0]['url'] ?> " alt=""> 
    </div>
        <div class="conteneurpara">
        <p><?= $paragraphe['0']?></p>   
        

        <p><?= $paragraphe['1']?></p>
        </div>
    <!-- par contre si on pas d'autres photos doit vérifier si elle existe avant d'essayer de l'afficher sinon ça fait une erreur -->
    
    <div class="contimgart">
    <div>
    <?php if(!empty($imageByArticleID[1]['url'])):?>
        <img class="imgart" src="<?= $imageByArticleID[1]['url'] ?> " alt="">
    <?php endif; ?>
    </div>
    <div>
    <?php if(!empty($imageByArticleID[2]['url'])):?>
        <img class="imgart" src="<?= $imageByArticleID[2]['url'] ?> " alt="">
    <?php endif; ?>
    </div>
    </div>
<div class="conteneurpara">
    <?php
    if(!empty($article['wiki_article'])):?>
        <p><a href="<?=$article['wiki_article']?>">Cliquez sur ce lien pour plus d'info</a></p> 
<?php endif;?>
        </div>
    </section>
    </main>

<?php endforeach; ?>
<?php include_once "../view/include/footer.php";?>
