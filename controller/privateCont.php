<?php 

$allArticle = getAllArticle($db);

if(isset($_GET['deconnect'])){
    if(deconnect()){
        header("location: ./");
    }       
}
if(isset($_GET['p'])){
    if($_GET['p']==="article_delete"){

        echo 'delete';
    }elseif($_GET['p']==="article_update"){

        echo 'update';
    }elseif($_GET['p']==="article_add"){

        include_once '../view/privateView/addArticleView.php';
    }else{

        include_once '../view/privateView/crudAdmin.php';  
    }

}
else{
    include_once '../view/privateView/crudAdmin.php';
}
