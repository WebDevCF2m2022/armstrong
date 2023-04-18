<?php
 require_once(dirname(__FILE__)."/../config.php");
function connectUser(PDO $db){
    $req = $db->prepare("SELECT * FROM user WHERE pseudo = :login_user AND password = :pwd_user");
   $req->bindParam(":login_user", $_POST["pseudo"]);
   $req->bindParam(":pwd_user", $_POST["password"]);
   $req->execute();
       
  
}

function inscriptionUser(PDO $db){
    if(isset($_POST['envoi'])){
        if(!empty($_POST['login_user']) and !empty($_POST['pwd_user'])){
            $pseudo= htmlspecialchars($_POST['login_user']);
            $mdp = sha1($_POST['pwd_user']);
            $insertInscrip = $db->prepare('INSERT INTO user(login_user, pwd_user) VALUES (?,?) ');
            $insertInscrip->bindValue('user', $pseudo, $mdp , PDO::PARAM_INT);
            $insertInscrip ->execute(array($pseudo,$mdp));
            
    
        }else{
            echo 'veuillez compléter tout les champs...';
        }
    }
    }
   
     
      
   
