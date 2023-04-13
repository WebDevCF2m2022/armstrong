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

elseif(isset($_POST['connect'])){ 

    // si la personne a envoyé le formulaire
    if(isset($_POST['login'],$_POST['pwd'])){
        $connect = connectUser($db,
                            $_POST['login'],
                            $_POST['pwd']
                        );
        // si $connect est du texte
        if(is_string($connect)) {
            $message = $connect;
            echo $message;
        // sinon (par défaut un booléen)
        }else{
            //header("Location: ./");
        }
    }
}


else{
    $allArticle = getAllArticle($db);
    include_once '../view/publicView/homepageView.php';

}
