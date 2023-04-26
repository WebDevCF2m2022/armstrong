<div class="col-lg-12">
        <h3>Insertion d'un article :  </h3>
                    <form method="POST" action="" name="Insert">
                    <?php
      if(isset($message)):
    ?>
<button type="button" class="btn btn-warning"><?=$message?></button><br>
    <?php
      endif;
    ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text" max="160" min="6">title</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">content</label>
    <textarea name="content" type="text" class="form-control" id="exampleInputPassword1" required></textarea>
  </div>

<div class="mb-3">
  
  <?php
foreach($categoryChoice as $item):
  ?>
  <div class="form-check form-check-inline">
  <input name="category_id[]" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="<?= $item['id'] ?>">
  <label class="form-check-label" for="inlineCheckbox1"><?= $item['title'] ?></label>
</div>
<?php
endforeach;
var_dump($_POST);
?>
<div class="mb-3">
<select name='user_id' class="form-select" aria-label="Default select example">
  <?php
foreach($userChoice as $item):
  $we = "";
  if($item['id']==$_SESSION['id']){
    $we=" selected";
  }
  ?>
  <option value="<?=$item['id']?>" <?=$we?>><?=$item['userscreen']?></option>
  <?php
endforeach;
  ?>
</select>
</div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                
                </div>
            </div>
            </div>