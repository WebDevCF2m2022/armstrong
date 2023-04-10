<?php

// CATEGORY :
function getCategoryMenu(PDO $db): array {
    $sql ="SELECT id_category, name_category FROM category ORDER BY id_category ASC";
    try{
        $query=$db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

// ARTICLES :

function getAllArticle(PDO $db): array{
    $sql = "SELECT `id_article`, `name_article`, `min-description_article`, `date_article`, `sound_article`, `user_id_user`, `login_user`, `url` FROM `article` JOIN user ON article.user_id_user = user.id_user 
    JOIN image ON image.article_id_article = article.id_article
    ORDER BY `id_article` ASC";

    try{
        $query = $db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    
    $bp = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $bp;
}

