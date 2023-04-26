<?php 

$allArticle = getAllArticle($db);

if(isset($_GET['deconnect'])){
    if(deconnect()){
        header("location: ./");
    }       
}

elseif(isset($_GET['p'])){
    if($_GET['p']==="article_delete"){
    }elseif(isset($_GET['deletePost'])&&ctype_digit($_GET['deletePost'])){
        
        $postId = (int) $_GET['deletePost'];
        
        if(postAdminDeleteById($connectPDO,$postId)){
            header("Location: ./?m=L'article dont l'id est $postId a été supprimé");
            exit();
        }else{
            header("Location: ./?m=Problème lors de la modification de l'article!");
            exit();
        }
        echo 'delete';
    }elseif($_GET['p']==="article_add"){
        
        include_once '../view/privateView/addArticleView.php';
    }else{
        
        include_once '../view/privateView/crudAdmin.php';  
    }
    
}

if(isset($_GET['article_update']) && ctype_digit($_GET['article_update'])){
    $articleUpdateId = (int) $_GET['article_update']; 
    $articleById = getArticleById($db, $articleUpdateId);
    $allCategory = getCategoryMenu($db);
    $imageByArticleId = getImageByarticleId($db, $articleUpdateId);
    include_once '../view/privateView/updateArticleView.php';
}

else{
    include_once '../view/privateView/crudAdmin.php';
}

