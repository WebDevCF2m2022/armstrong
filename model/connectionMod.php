
<?php
function connectUser(PDO $theDB, string $login, string $pwd) {


//$userLogin = $theDB->quote($login);

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
?>