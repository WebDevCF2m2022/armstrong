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

function sendMessage(PDO $db, string $contactName, string $contactMail, string $contactMessage)
{
    $contactName = htmlspecialchars($contactName, ENT_QUOTES);
    $contactMail = filter_var($contactMail, ENT_QUOTES);// filter_var
    $contactMessage = htmlspecialchars($contactMessage, ENT_QUOTES);
    
    $insertion = $db->prepare('INSERT INTO contact (name_contact, mail_contact, message_contact) VALUES (?,?,?) ');
    $insertion->bindParam(1, $contactName, PDO::PARAM_STR);
    $insertion->bindParam(2, $contactMail, PDO::PARAM_STR);
    $insertion->bindParam(3, $contactMessage, PDO::PARAM_STR);
    try {
        $verification = $insertion->execute();
    } catch (PDOException $e) {

        return ($e->getMessage());
    }
}

