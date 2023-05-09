<?php 

// De copier coller dans articleMod.php et à supprimer : 

function updateArticle(PDO $db, $articleId, $articleName, $articleMin, $articleMax, $articleSound, $articleWiki, $imageUrl=[], $imageWikiUrl=[] , $imageWikiName=[] , $category= []){

        $db -> beginTransaction();

        $sqlArticle = "UPDATE `article` SET `name_article`= :name, `min_description_article`= :min_desc ,`max_description_article`= :max_desc,`sound_article`= :sound, `wiki_article`=:wiki WHERE id_article = $articleId";

        $prepareArticle = $db -> prepare($sqlArticle);

        $prepareArticle -> bindValue(":name", $articleName, PDO::PARAM_STR);
        $prepareArticle -> bindValue(":min_desc", $articleMin, PDO::PARAM_STR);
        $prepareArticle -> bindValue(":max_desc", $articleMax, PDO::PARAM_STR);
        $prepareArticle -> bindValue(":sound", $articleSound, PDO::PARAM_STR);
        $prepareArticle -> bindValue(":wiki", $articleWiki, PDO::PARAM_STR);   
        $prepareArticle  ->  execute();


        foreach($imageUrl as $key=>$value){       
            if(!empty($imageUrl[$key])){                  
                $sqlImageUpdate = "UPDATE `image` SET `url`= :url WHERE `position`= $key+1 AND `article_id_article`=$articleId ";
                $prepareImageUpdate = $db -> prepare($sqlImageUpdate);
                $prepareImageUpdate -> bindValue(":url", $value, PDO::PARAM_STR);
                // $prepareImageUpdate->bindValue(":position", $key, PDO::PARAM_INT);
                $prepareImageUpdate -> execute();
            
            }else{
                $keys = (int) $key+1;
                $idString = $articleName . (string) $keys ;
                $sqlImageInsert = "INSERT INTO `image`(`nom`, `url`, `position`,`credit_image_name`,`credit_image_link`, `article_id_article`) VALUES (:nom, :url, :position, 
            :wikiname, :wikilink, :id)";
                $prepareImageInsert = $db->prepare($sqlImageInsert);
                $prepareImageInsert -> bindValue(":nom", $idString, PDO::PARAM_STR);
                $prepareImageInsert -> bindValue(":url", $value, PDO::PARAM_STR);
                $prepareImageInsert -> bindValue(":position", $keys, PDO::PARAM_INT);
                $prepareImageInsert -> bindValue(":wikiname", $imageWikiName[$key],PDO::PARAM_STR);
                $prepareImageInsert -> bindValue(":wikilink", $imageWikiUrl[$key],PDO::PARAM_STR);
                $prepareImageInsert -> bindValue(":id",$articleId, PDO::PARAM_INT);
                $prepareImageInsert -> execute();
            }
        }


        $db->exec("DELETE FROM `category_has_article` WHERE `article_id_article` = $articleId");
    
        if(isset($category)){
            foreach($category as $item){

                $sqlCategory = "INSERT INTO `category_has_article`(`category_id_category`, `article_id_article`) VALUES (:category, :article)";               
                $prepareCategory = $db->prepare($sqlCategory);
                $prepareCategory->bindValue(":category", $item, PDO::PARAM_INT);
                $prepareCategory->bindValue(":article", $articleId, PDO::PARAM_INT);
                $prepareCategory->execute();
            }
        }                   


        try{
            $db->commit();
            return true;
        }catch(Exception $e){
            $db->rollBack();
            return $e->getMessage();
        }

    }
