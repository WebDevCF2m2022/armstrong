<?php

use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mime\Email;

 function sendMessage(PDO $db, string $contactName, string $contactMail, string $contactMessage)
{
     $contactName = htmlspecialchars($contactName, ENT_QUOTES);
     $contactMail = filter_var($contactMail,FILTER_VALIDATE_EMAIL);// filter_var
     $contactMessage = htmlspecialchars($contactMessage, ENT_QUOTES);

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





function sendMail()
{
    $name = htmlspecialchars(strip_tags(trim($_POST['contactName'])), ENT_QUOTES);
    $mail = htmlspecialchars(strip_tags(trim($_POST['contactMail'])));
    $message = htmlspecialchars(strip_tags(trim($_POST['contactMessage'])), ENT_QUOTES);
    
    $transport = Transport::fromDsn(MAIL_DSN);
    $mailer = new Mailer($transport);

   // pour l'admin :
   $email = (new Email())

   ->from(MAIL_FROM)
   ->to(MAIL_ADMIN)
   ->subject("Nouveau message de " . $name)
   ->text($message)
   ->html($message);

   $mailer->send($email);

   //pour le user :
   $email = (new Email())

   ->from(MAIL_FROM)
   ->to($mail)
   ->subject("t'as envoyé")
   ->text("t'as envoyé je t'ai dit")
   ->html("pareil");

   $mailer->send($email);
}
