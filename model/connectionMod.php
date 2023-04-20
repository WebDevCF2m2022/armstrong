<?php


function connectUser(PDO $theDB, string $login, string $pwd) {

    $sqlConnect = "SELECT * FROM user WHERE login_user ='$login'";

    try {

        $queryConnect = $theDB->query($sqlConnect);

    } catch (PDOException $e) {

        return $e->getMessage();

    }

    if ($queryConnect->rowCount() === 0) {

        return "on te connait pas";

    }

    $recup = $queryConnect->fetch(PDO::FETCH_ASSOC);

    if (password_verify($pwd , $recup['pwd_user'])) {

        $_SESSION = $recup;

        unset($_SESSION['pwd'], $_SESSION['login']);

        $_SESSION['myID'] = session_id();

        return true;

    } else {

        return "on te connait pas";

    }
}



function inscriptionUser(PDO $db, string $pseudo, string $mdp, string $email)
{
    $pseudo = htmlspecialchars($pseudo, ENT_QUOTES);
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
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
