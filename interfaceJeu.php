
<form action="jeu.php" method="post">

<div class="questions">
<fieldset>
<legend class="w-auto px-2 border-bottom"><h3><?php echo $question->text?></h3></legend>
  <label class="form-check-label">
    <div class="mt-3">
        <div class="d-flex w-auto">
    <?php foreach ($question->choices as $answer){
        echo "<div class='form-check m-3'>
  <label class='form-check-label'>
    <input type='checkbox' class='form-check-input' name='answer' id='answer' value='$answer'>
    $answer
  </label>
</div>";
    }
?></div>
  </label>
  </fieldset>
</div>

<div><?php include "pixelart.php"; ?></div>
<div class="text-center m-5"><button class="btn-romantique m-2" type="submit">Trouve ta Choupinette ! 💖</button></div>
</form>
<form method="post" action="destroy.php">
<div class="text-center m-5"><button type="submit" class="btn-giveUp">💣Laisser tomber Choupinette</button></div>
</form>


