
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
  <h2 class="titre1">MOST RECENT ARTICLES</h2>

  <br>

<div class="gridCard" >
<?php
foreach($allArticle as $item):
    $image = explode(',', $item['url'])
?>
<div class='card1'>
  <a href="?articleId=<?=$item['id_article']?>"><img src="<?=$image[0]?>" alt="<?= $item['name_article']?>" width="300px"></a>
  <h2 class="positionCard"><?= $item['name_article']; ?></h2>
  <img src="asset/img/bouton-jouer.png" class="ctrlIcon" />

  <!-- url a mettre dans la bonne balise -->
  <div>
    <audio controls src="<?= $item['sound_article'] ?>"></audio>
  </div>

  <p class="positionCard"><?= $item['min_description_article']; ?></p>
</div>
  <!-- <div class="card1"> -->

<?php endforeach;?>
</div>


<script>
  let ctrlIcons = document.querySelectorAll('.ctrlIcon');

  for (let ctrlIcon of ctrlIcons) {
    ctrlIcon.addEventListener('click', playPause);
  }

  function playPause() {
    console.log(this);
    let audioElement = this.parentElement.querySelector('audio');

    if (audioElement.paused) {
      audioElement.play();
      this.src = "asset/img/bouton-pause.png";
    } else {
      audioElement.pause();
      this.src = "asset/img/bouton-jouer.png";
    }
  }
</script>

<?php include_once "../view/include/footer.php";?>