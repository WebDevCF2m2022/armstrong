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
        case 'Inscription':
             if (!empty($_POST) && $_POST['password'] == $_POST['confirmPassword']) {
                    echo inscriptionUser($db, $_POST['pseudo'], $_POST['password'], $_POST['email'],);
                }
                include_once '../view/publicView/inscriptionView.php';
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

elseif(isset($_GET['articleId'])&&ctype_digit($_GET['articleId'])){
    $articleId = $_GET['articleId'];
    $articleById = getArticleById($db, $articleId);
    $imageByArticleID = getImageByarticleId($db, $articleId);
    include_once '../view/publicView/articleView.php';
}


else{
    $allArticle = getAllArticle($db);
    include_once '../view/publicView/homepageView.php';

}

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
            echo "oui";
        }

}

if(isset($_POST['contactName']) &&
    isset($_POST['contactMail']) &&
    isset($_POST['contactMessage'])) {
        
    $insertion = $db->prepare('INSERT INTO contact VALUES (NULL, :name_contact, :mail_contact, :message_contact)');
    $insertion->bindValue(':name_contact', $_POST['contactName']);
    $insertion->bindValue(':mail_contact', $_POST['contactMail']);
    $insertion->bindValue(':message_contact', $_POST['contactMessage']);
    
    $verification = $insertion->execute();
    
    if($verification) {
        echo "Insertion réussie";
    } else {
        echo "Echec de l'insertion";
    }
} else {
    echo "une variable n'est pas déclarée";
}



