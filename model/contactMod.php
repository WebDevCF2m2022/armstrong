<?php
function inscriptionUser(PDO $db, string $pseudo, string $mdp, string $email)
{
    $pseudo = htmlspecialchars($pseudo, ENT_QUOTES);
    $email = filter_var($email, ENT_QUOTES);// filter_var
    $mdp = htmlspecialchars($mdp, ENT_QUOTES);
    $mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $insertInscrip = $db->prepare('INSERT INTO user (login_user, pwd_user, email_user) VALUES (?,?,?) ');
    $insertInscrip->bindParam(1, $pseudo, PDO::PARAM_STR);
    $insertInscrip->bindParam(2, $mdp, PDO::PARAM_STR);
    $insertInscrip->bindParam(3, $email, PDO::PARAM_STR);
    try {
        $insertInscrip->execute();
    } catch (Exception $e) {

        return $e->getMessage();
    }
}