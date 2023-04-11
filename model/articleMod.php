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
    JOIN image ON image.article_id_article = article.id_article WHERE image.position = 1
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

function getCategoryById(PDO $db, $id):array|bool{
    $sql = "SELECT * FROM category where id_category=?";
    $prepare = $db -> prepare($sql);
    try{
        $prepare->execute([$id]);
    }catch(Exception $e){
        die($e->getMessage());
    }
    $bp = $prepare->fetch(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $bp;
}

function getArticleByCategory(PDO $db, $id){
    $sql = "SELECT * FROM `category_has_article`";

    $prepare = $db->prepare($sql);
    // $prepare->bindValue(':id',$id,PDO::PARAM_INT);
    try{
        $prepare->execute();
    }catch(Exception $e){
        die($e->getMessage());
    }
    $result = $prepare->fetchAll(PDO::FETCH_ASSOC);
    $prepare->closeCursor();
    return $result;
}
