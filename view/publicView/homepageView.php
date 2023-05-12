
<?php 

$title = "accueil";
include_once '../view/include/header.php';

// var_dump($allArticle);
?>
<div class="slider">
    <img src="asset/img/img3.jpg" alt="img3" class="img__slider active" />
    <img src="asset/img/img2.jpg" alt="img2" class="img__slider" />
    <i class="fa-thin fa-user" style="color: #000000;"></i>
    <div class="suivant">
      <!--       <i class="fas fa-chevron-circle-right"></i> -->
    </div>
    <div class="precedent">
      <!--       <i class="fas fa-chevron-circle-left"></i> -->
    </div>
  </div>
  <br>
  <h2 class="titre1">Most Recent Articles</h2>
  <hr>
  <?php
foreach($allArticle as $item):
    $image = explode(',', $item['url'])
?>

<a href="?articleId=<?=$item['id_article']?>"><img src="<?=$image[0]?>" alt="<?= $item['name_article']?>" width="300px"></a>
<h2 class="positionCard"><?= $item['name_article']; ?></h2>
<img src="asset/img/bouton-jouer.png" onclick="playPause()" id="ctrlIcon" />

<!-- url a mettre dans la bonne balise -->
<p><?= $item['sound_article']; ?></p> 
<div>
      <audio controls id="song">
        <source src="<?= $item['sound_article'];?>" type="audio">
      </audio>
    </div>
    <script>
      let song = document.getElementById("song");
      let ctrlIcon = document.getElementById("ctrlIcon");

      function playPause() {
        if (song.paused) {
          song.play();
          ctrlIcon.src = "asset/img/bouton-pause.png";
        } else {
          song.pause();
          ctrlIcon.src = "asset/img/bouton-jouer.png";
        }
      }
    </script>

<p class="positionCard"><?= $item['min_description_article']; ?></p>
<p><?= $item['date_article']; ?></p> <p><?= $item['login_user']; ?></p>
<hr>
<?php endforeach;?>



<?php include_once "../view/include/footer.php";?>