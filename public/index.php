<?php

require_once '../config.php';
require_once '../model/articleMod.php';
require_once '../model/connectionMod.php';
require_once '../model/contactMod.php';



if(true){
    include_once '../controller/publicCont.php';
}else{
    include_once '../controller/privateCont.php';
}

