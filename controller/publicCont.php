<?php

// affiche les pages codée en dure
if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'homePage':
            $allArticle = getAllArticle($db);
            include_once '../view/publicView/homepageView.php';
            break;
        case 'contact':
            include_once '../view/publicView/contactView.php';
            break;
        case 'connect':
            include_once '../view/publicView/connectView.php';
            break;  
        default: 
            $allArticle = getAllArticle($db);
            include_once '../view/publicView/homepageView.php';
            break;
    }      

}

// affiche les categories par id et les articles par catégorie
elseif(isset($_GET['categoryId'])&&ctype_digit($_GET['categoryId'])){   
    
    $categoryId = (int) $_GET['categoryId'];

    $categoryById = getCategoryById($db,$categoryId);
    

    if(!$categoryById){
        // création de l'erreur pour la 404
        $error = "Cet catégorie n'existe plus";
        // appel de la vue 404
        include_once "../view/404.php";

    }else{

        $articlesByCategory = getArticleByCategory($db, $categoryId);
        $nbPost = count($articlesByCategory);
        include_once("../view/publicView/categoryView.php");      

    }
}



else{
    $allArticle = getAllArticle($db);
    include_once '../view/publicView/homepageView.php';

}