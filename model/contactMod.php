<?php

function sendMessage(PDO $db, string $contactName, string $contactMail, string $contactMessage)
{
    $contactName = htmlspecialchars($contactName, ENT_QUOTES);
    $contactMail = filter_var($contactMail,FILTER_VALIDATE_EMAIL);// filter_var
    $contactMessage = htmlspecialchars($contactMessage, ENT_QUOTES);
    
    //$insertion = $db->prepare('INSERT INTO contact (name_contact, mail_contact, message_contact) VALUES (?,?,?) ');
    //$insertion->bindParam(1, $contactName, PDO::PARAM_STR);
    //$insertion->bindParam(2, $contactMail, PDO::PARAM_STR);
    //$insertion->bindParam(3, $contactMessage, PDO::PARAM_STR);
    $insertion = $db->prepare('INSERT INTO contact VALUES (NULL, :name_contact, :mail_contact, :message_contact)');
    
    $insertion->bindValue(':name_contact', $_POST['contactName']);
    $insertion->bindValue(':mail_contact', $_POST['contactMail']);
    $insertion->bindValue(':message_contact', $_POST['contactMessage']);
    

    try {
        $verification = $insertion->execute();
        return ($verification)?true : false ;
    } catch (PDOException $e) {

        die ($e->getMessage());
    }
}


//$insertion = $db->prepare('INSERT INTO contact VALUES (NULL, :name_contact, :mail_contact, :message_contact)');
//$insertion->bindValue(':name_contact', $_POST['contactName']);
//$insertion->bindValue(':mail_contact', $_POST['contactMail']);
//$insertion->bindValue(':message_contact', $_POST['contactMessage']);

//$verification = $insertion->execute();
