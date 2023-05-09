<?php

$title = "mise à jour d'article";
include_once '../view/include/header.php';
// var_dump($allCategory);    

?>

<!-- balise style à enlever quand on fera le css -->
<style>
    form input, form textarea {
        display: block;
        margin: 0.5rem;
    }
</style>

<h2>salut <?= $_SESSION['login_user']?></h2>
<?php if(isset($problem)): ?>
    <h2><?= $problem ?></h2>
    <?php endif; ?>    
    <?php foreach($articleById as $item) :?>
        
        <form action="" method="POST">
            <label for="name_article_update">Nom</label>
            <input type="text" value="<?=$item['name_article']?>" id="name_article_update" name="name_article_update">
            <label for="min_description_article_update">Résumé de l'article</label>
            <textarea name="min_description_article_update" id="min_description_article_update" cols="30" rows="10"><?=$item['min_description_article']?></textarea>
            <label for="max_description_article_update">Article complet</label>
            <textarea name="max_description_article_update" id="max_description_article_update" cols="30" rows="10"><?=$item['max_description_article']?></textarea>
            <label for="sound_article_update">Extrait audio mp3</label>
            <input type="text" value="<?=$item['sound_article']?>" id="sound_article_update" name ="sound_article_update">
            <label for="wiki_article_update">Wikipedia</label>
            <input type="text" value="<?=$item['wiki_article']?>" id="wiki_article_update" name="wiki_article_update"> 
            

                <?php  

                    $categoryId = (is_null($item['id_category']))? [] :explode(',', $item['id_category']);                  
                    foreach($allCategory as $category):
                    $checked = (in_array($category['id_category'],$categoryId))? " checked " : "";
                ?>
                
                <label for="inlineCheckbox1"><?= $category['name_category'] ?></label>
                <input name="id_category[]"  type="checkbox" id="inlineCheckbox1" value="<?= $category['id_category'] ?>" <?=$checked?>>
                
                
                <?php endforeach; ?>   


                <label for="image_add">Photo 1 URL : </label>              
                <input type="text" value="<?=$imageByArticleId[0]['url']?>" name="image_update[]">
                <label for="image_wiki_url">Wikipedia 1 URL :</label>
                <input type="text" value="<?= $imageByArticleId[0]['credit_image_link']?>" name="image_wiki_url[]">
                <label for="image_wiki_url">Wikipedia 1 source name :</label>
                <input type="text" value="<?= $imageByArticleId[0]['credit_image_name']?>" name="image_wiki_name[]">
                <br>
                
                
                <?php if(!empty($imageByArticleId[1])) :?>
                    <label for="image_add">Photo 2 URL : </label>              
                    <input type="text" value="<?=$imageByArticleId[1]['url']?>" name="image_update[]">
                    <label for="image_wiki_url">Wikipedia 2 URL :</label>
                    <input type="text" value="<?= $imageByArticleId[1]['credit_image_link']?>" name="image_wiki_url[]">
                    <label for="image_wiki_url">Wikipedia 2 source name :</label>
                    <input type="text" value="<?= $imageByArticleId[1]['credit_image_name']?>" name="image_wiki_name[]">
                    <?php else: ?>                                     
                        <label for="image_add">Photo 2 URL : </label>              
                        <input type="text" value="" name="image_update[]">      
                        <label for="image_wiki_url">Wikipedia 2 URL :</label>
                        <input type="text" value="" name="image_wiki_url[]">
                        <label for="image_wiki_url">Wikipedia 2 source name :</label>
                        <input type="text" name="image_wiki_name[]">
                        
                        
                        <?php endif; ?>
                        <br>
                        
                        <?php if(!empty($imageByArticleId[2])) :?>  
                            <label for="image_add">Photo 3 URL : </label>              
                            <input type="text" value="<?=$imageByArticleId[2]['url']?>" name="image_update[]">
                            <label for="image_wiki_url">Wikipedia 3 URL :</label>    
                            <input type="text" value="<?= $imageByArticleId[2]['credit_image_link']?>" name="image_wiki_url[]">
                            <label for="image_wiki_url">Wikipedia 3 source name :</label>
                            <input type="text" value="<?= $imageByArticleId[2]['credit_image_name']?>" name="image_wiki_name[]">
                            <?php else: ?>
                    <label for="image_add">Photo 3 URL : </label>              
                    <input type="text" value="" name="image_update[]">
                    <label for="image_wiki_url">Wikipedia 3 URL :</label>    
                    <input type="text" value="" name="image_wiki_url[]">
                    <label for="image_wiki_url">Wikipedia 3 source name :</label>
                    <input type="text" name="image_wiki_name[]">
                    <?php endif; ?>
                    <br>    
                    
                    <input type="submit">
                    <?php endforeach; ?>
                </form>
                
                
                <?php
include_once '../view/include/footer.php';
