<div class="container">
  <br>
    <hr class="hrc">
    <hr class="hrc2">
    <h2 class="hrc3"><?= before_display($page['title']) ?></h2>
    <br>
  <div class="panel panel-default">
      <div class="panel-body">
          <?= $page['content'] ?>
      </div>

        <div class="container">
          Par <?= $page['author'] ?> | <span class=""><small>Le <?= $Lang->date($page['updated']) ?></small></span>
        </div>

  </div>

</div>
