<?php if($theme_config['slider'] == "true"){ ?>
<div id="myCarousel" class=" respc head carousel slide transition-timer-carousel">
    <div class="carousel-inner">
        <?php if(!empty($search_slider)) { ?>
            <?php $i = 0; foreach ($search_slider as $k => $v) { ?>
            <div class="item<?php if($i == 0) { echo ' active'; } ?>">
                <img src="<?= $v['Slider']['url_img'] ?>" width="100%;" height="300px">
                <div class="carousel-caption" style=" font-family: 'Russo One', sans-serif;">
                    <h1 style="transform:rotateX(0deg); animation-name: title; animation-duration:2s;"><?= before_display($v['Slider']['title']) ?></h1>
                    <p style="margin-top:5%;" class="rotatex"><?= before_display($v['Slider']['subtitle']) ?></p>
                    <hr style="animation-name: hr; animation-duration:2s; width:80%;">
                    <a style="margin-top:2%;" href="<?= $theme_config['slider_lien'] ?>" class="btn btn-danger"><?= $theme_config['slider_text'] ?></a>
                </div>
            </div>
            <?php $i++; } ?>
        <?php } else { ?>
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1905x420&text=1905x420');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        <?php } ?>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <i class="fa fa-chevron-left ju-carousel-left" aria-hidden="true"></i>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <i class="fa fa-chevron-right ju-carousel-right" aria-hidden="true"></i>
    </a>
</div>
<?php } ?>

<!-- Titre Informations -->

<br>
<div class="ju-home-pre container">
  <hr class="hrc">
  <hr class="hrc2">
  <h2 class="hrc3">Informations</h2>
  <h4 style="text-align:center; color:grey; font-family:'MontSerra', sans-serif;"><?= $theme_config['home_text_info'] ?></h4>
  <br><br>

<!-- Informations -->
  <div class="row">
    <div class="col-lg-4">
      <i class="fa <?= $theme_config['home_ach_icon_1'] ?> fa-5x ju-home-fa"></i>
      <h4><?= $theme_config['home_ach_titre_1'] ?></h4>
      <p><?= $theme_config['home_ach_text_1'] ?></p>
    </div>
      <div class="col-lg-4">
        <i class="fa <?= $theme_config['home_ach_icon_2'] ?> fa-5x ju-home-fa"></i>
        <h4><?= $theme_config['home_ach_titre_2'] ?></h4>
        <p><?= $theme_config['home_ach_text_2'] ?></p>
      </div>
      <div class="col-lg-4">
        <i class="fa <?= $theme_config['home_ach_icon_3'] ?> fa-5x ju-home-fa"></i>
        <h4><?= $theme_config['home_ach_titre_3'] ?></h4>
        <p><?= $theme_config['home_ach_text_3'] ?></p>
      </div>
  </div>
</div>
<br><br>
<div class="container">
  <hr class="hrc">
  <hr class="hrc2">
  <h2 class="hrc3">Nouveautées</h2>
    <h4 style="text-align:center; color:grey; font-family:'MontSerra', sans-serif;"><?= $theme_config['home_text_news'] ?></h4>
  <br><br>
  <section class="news container">
    <div class="news-one">
      <div class="container">
      <?php if(!empty($search_news)) { ?>
        <?php foreach ($search_news as $k => $v) { ?>
          <div class="panel panel-default">
              <div class="panel-heading"><?= $v['News']['title']; ?><span class="pull-right"><small>Le <?= $Lang->date($v['News']['created']); ?></small></span></div>
              <div class="panel-body">
                  <?php
                      $msg = strip_tags($v['News']['content']);
                  ?>
                  <?= $msg ?>
                  <br><br>
                  <a class="read grey" href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>">
                      <?= $Lang->get('NEWS__READ_MORE') ?>
                  </a>

              </div>
          </div>
        <?php } ?>
        <ol id="pagination"></ol>
      <?php } else {  ?><center><h3> <?= $Lang->get('NEWS__NONE_PUBLISHED') ?> </h3></center><?php } ?>
   </div>
</div>
  </section>
</div>
<script type="text/javascript">

</script>
