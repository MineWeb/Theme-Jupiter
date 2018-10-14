<?php $user = ClassRegistry::init('User'); ?>
<div class="ju-top">
  <div class="container">
    <div class="row">
      <div class="">
			<div class="col-xs-2 col-sm-5">
          <ul>
            <li class="ju-top-stat"><i class="fa fa-user"></i> <?= $user->find('count'); ?> inscrit(s)</li>
            <li class="ju-top-stat ju-top-inc"><i class="fa fa-users"></i> <?= $server_infos['GET_PLAYER_COUNT'] ?> / <?= $server_infos['GET_MAX_PLAYERS'] ?></li>
          </ul>
      </div>
    </div>
    <div class="ju-top-m">
      <?php if(!empty($twitter_link)){ ?>
      <a href="<?= $twitter_link ?>" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <?php }
      if(!empty($facebook_link)){
      ?>
      <a href="<?= $facebook_link ?>" class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      <?php }
      if(!empty($youtube_link)){
      ?>
      <a href="<?= $youtube_link ?>" class="yt"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      <?php } 
	  if(!empty($skype_link)){
      ?>
      <a href="<?= $skype_link ?>" class="skype"><i class="fa fa-skype" aria-hidden="true"></i></a>
      <?php } ?>
    </div>
    </div>
  </div>
</div>
