<?php 

$title = "articles";
include_once '../view/include/header.php';

// var_dump($articleById,$imageByArticleID);
?>

<?php foreach($articleById as $article): 
    $textArticle = $article['max_description_article']; 
    $paragraphe = breakText($textArticle, strlen($textArticle)/2);
?>
    
    <h2><?= $article['name_article'] ?></h2>

    <!-- on a d'office un première photo qu'on va afficher -->
        <img src="<?= $imageByArticleID[0]['url'] ?> " alt=""> 
        <p><?= $paragraphe['0']?></p>   
        
    <!-- par contre si on pas d'autres photos doit vérifier si elle existe avant d'essayer de l'afficher sinon ça fait une erreur -->
    <?php if(!empty($imageByArticleID[1]['url'])):?>
        <img src="<?= $imageByArticleID[1]['url'] ?> " alt="">
    <?php endif; ?>

        <p><?= $paragraphe['1']?></p>


    <?php if(!empty($imageByArticleID[2]['url'])):?>
        <img src="<?= $imageByArticleID[2]['url'] ?> " alt="">
    <?php endif; ?>
   

<?php endforeach; ?>

