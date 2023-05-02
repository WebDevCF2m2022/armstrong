<?php 

// De copier coller dans articleMod.php et à supprimer : 

function updateArticle(PDO $db, $articleId, $articleName, $articleMin, $articleMax, $articleSound, $articleWiki, $imageUrl){

    $db -> beginTransaction();

    $sqlArticle = "UPDATE `article` SET `name_article`= :name, `min_description_article`= :min_desc ,`max_description_article`= :max_desc,`sound_article`= :sound, `wiki_article`=:wiki WHERE id_article = $articleId";

    $prepareArticle = $db->prepare($sqlArticle);

    $prepareArticle -> bindValue(":name", $articleName, PDO::PARAM_STR);
    $prepareArticle -> bindValue(":min_desc", $articleMin, PDO::PARAM_STR);
    $prepareArticle -> bindValue(":max_desc", $articleMax, PDO::PARAM_STR);
    $prepareArticle -> bindValue(":sound", $articleSound, PDO::PARAM_STR);
    $prepareArticle -> bindValue(":wiki", $articleWiki, PDO::PARAM_STR);   
    $prepareArticle->execute();

    $sqlImage = "UPDATE `image` SET `url`= :url WHERE `position`=1 AND  `article_id_article`=$articleId ";

    $prepareImage = $db->prepare($sqlImage);
    $prepareImage-> bindValue(":url", $imageUrl, PDO::PARAM_STR);

    $prepareImage->execute();

    try{
        $db->commit();
        return true;
    }catch(Exception $e){
        $db->rollBack();
        return $e->getMessage();
    }

}