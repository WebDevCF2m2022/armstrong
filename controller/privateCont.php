<?php 

if(isset($_GET['deconnect'])){
    if(deconnect()){
        header("location: ./");
    }       
}
if(isset($_GET['p'])){
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
    }elseif($_GET['p']==="article_update"){

        echo 'update';
    }elseif($_GET['p']==="article_add"){

        echo 'add';
    }else{

        $allArticle = getAllArticle($db);
        include_once '../view/privateView/crudAdmin.php';  
    }

}
else{
    $allArticle = getAllArticle($db);
    include_once '../view/privateView/crudAdmin.php';
}
