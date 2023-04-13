<?php 

$title = "accueil";
include_once '../view/include/header.php';

// var_dump($allArticle);

foreach($allArticle as $item):
?>

<h2><?= $item['name_article']; ?> (<?= $item['id_article'];?>)</h2>
<a href="?articleId=<?=$item['id_article']?>"><img src="<?=$item['url']?>" alt="<?= $item['name_article']?>" width="300px"></a>
<p><?= $item['sound_article']; ?></p>
<p><?= $item['min_description_article']; ?></p>
<p><?= $item['date_article']; ?></p> by <p><?= $item['login_user']; ?></p>
<hr>
<?php endforeach;?>


<?php include_once "../view/include/footer.php";?>