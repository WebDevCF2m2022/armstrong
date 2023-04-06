<?php

if(isset($_GET['p'])){
    switch($_GET['p']){
        case 'homePage':
            include_once '../view/homepageView.php';
            break;
        case 'contact':
            include_once '../view/contactView.php';
            break;
        case 'connect':
            include_once '../view/connectView.php';
            break;  
        default: 
            include_once '../view/homepageView.php';
            break;
    }      

}

elseif(false){

}

else{
    include_once '../view/homepageView.php';
}