<?php
include_once '../view/include/header.php';
var_dump($_POST);
?>

<div class="container">
    <form action="" class="col-md-6" method="post">
        <h1>créer un compte</h1>
        <div class="form-group">
            <input type="text" name="pseudo" id="" class="form-control" placeholder="Entrer votre pseudo">
        </div>
        <div class="form-group">
            <input type="password" name="password" id="" class="form-control" placeholder="Entrer votre password">
        </div>
        <div class="form-group">
            <input type="password" name="confirmPassword" id="" class="form-control" placeholder="Veuillez confirmer votre password">
            <div class="form-group">
                <input type="email" name="email" id="" class="form-control" placeholder="Veuillez confirmer votre mail">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" name="role" id="" class="form-check-input">
                <label for="role">Je souhaite devenir membre</label>
            </div>
            <div class="form-group">
                <a href="?p=connect" class="btn btn-warning">connexion</a>
                <input type="submit" value="créer mon compte" name="envoi" class="btn btn-primary">
            </div>
    </form>
</div>
<?php
include_once '../view/include/footer.php';
?>
</body>

</html>