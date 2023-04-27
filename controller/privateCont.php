<?php 

$allArticle = getAllArticle($db);

if(isset($_GET['deconnect'])){
    if(deconnect()){
        header("location: ./");
    }       
}

if(isset($_GET['p'])){
    if($_GET['p']==="article_id"){
        
    }elseif(isset($_GET['article_delete'])&&ctype_digit($_GET['article_delete'])){
        
        $postId = (int) $_GET['article_delete'];
        
        if(postAdminDeleteById($db,$postId)){
            header("Location: ./?m=L'article dont l'id est $postId a été supprimé");
            exit();
        }else{
            header("Location: ./?m=Problème lors de la modification de l'article!");
            exit();
        }
        echo 'delete';
    }elseif($_GET['p']==="article_update"){
        
        echo 'update';
    }elseif($_GET['p']==="article_add"){
        
        include_once '../view/privateView/addArticleView.php';
    }else{
        
        include_once '../view/privateView/crudAdmin.php';  
    }
    
}

elseif(isset($_GET['article_update']) && ctype_digit($_GET['article_update'])){
    $articleUpdateId = (int) $_GET['article_update']; 
    $articleById = getArticleById($db, $articleUpdateId);
    $allCategory = getCategoryMenu($db);
    $imageByArticleId = getImageByarticleId($db, $articleUpdateId);
    include_once '../view/privateView/updateArticleView.php';
}

else{
    if(isset($_SESSION) && $_SESSION['permission_user']===0){

        include_once '../view/privateView/crudAdmin.php';
    }else{
        $articleByUser = getArticleByUserId($db, $_SESSION['id_user']);
        include_once '../view/privateView/crudUser.php';
    }
}

