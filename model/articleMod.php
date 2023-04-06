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
    $sql = "SELECT * FROM article ORDER BY date_article ASC";

    try{
        $query = $db->query($sql);
    }catch(Exception $e){
        die($e->getMessage());
    }
    
    $bp = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $bp;
}

