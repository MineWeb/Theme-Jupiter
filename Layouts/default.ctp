<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Tronai, MineWeb">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <title><?= $website_name ?> - <?= $title_for_layout; ?></title>
    <!-- Bootstrap & FA -->
    <?= $this->Html->css('bootstrap.min.css'); ?>
    <?= $this->Html->css('font-awesome.min.css'); ?>
    <?= $this->Html->css('../font-awesome-4.1.0/css/font-awesome.min.css'); ?>

    <!-- Autre -->
    <?= $this->Html->css('modern-businesss.css') ?>



    <!-- Custom CSS -->

    <?= $this->Html->css('custom.css'); ?>
    <?= $this->Html->css('animation.css'); ?>
    <?= $this->Html->css('phone.css'); ?>


    <link rel="icon" type="image/png" href="<?= $theme_config['favicon_url'] ?>" />
  </head>
  <body>
    <?= $this->element('css'); ?>

    <?php if($theme_config['top'] == "true") { ?>
      <?= $this->element('top'); ?>
    <?php } ?>
    <?= $this->element('header'); ?>
    <?= $this->fetch('content'); ?>

    <footer>
      <div class="container">
        <!-- IL EST INTERDIT DE RETIRER LES LIENS ET CREDITS SOUS PEINE DE BLOQUAGE DE LA LICENSE ! -->
        <div class="row">
      <div class="col-lg-10"><?php if(!empty($theme_config['footer-text'])){ echo $theme_config['footer-text']." |"; } ?> Propulsé par <a href="http://mineweb.org/" class="hcolor">Mineweb</a> | Thème <a class="hcolor" href="https://mineweb.org/market/theme/Jupiter">Jupiter</a> par <a href="https://twitter.com/Tronaidev" class="hcolor">Tronai</a>.</div>
        <div class="col-lg-2">
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
          <?php } ?></div>
          <br>
      </div>
        </div>
    </footer>
    <!-- Modal -->

    <?= $this->element('modal'); ?>
    <!-- JS -->




    <?= $this->Html->script('app.js') ?>
    <?= $this->Html->script('form.js') ?>
    <?= $this->Html->script('notification.js') ?>
    <?= $this->Html->script('easy_paginate.js'); ?>
    <?= $this->Html->script('bootstrap-carousel.js'); ?>
    <?= $this->Html->script('particles.js'); ?>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.3.1/vegas.min.js"></script>

    <script>
    <?php if($isConnected) { ?>
      // Notifications
        var notification = new $.Notification({
          'url': {
            'get': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'getAll')) ?>',
            'clear': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clear', 'NOTIF_ID')) ?>',
            'clearAll': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'clearAll')) ?>',
            'markAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAsSeen', 'NOTIF_ID')) ?>',
            'markAllAsSeen': '<?= $this->Html->url(array('plugin' => false, 'controller' => 'notifications', 'action' => 'markAllAsSeen')) ?>'
          },
          'messages': {
            'markAsSeen': '<?= $Lang->get('NOTIFICATION__MARK_AS_SEEN') ?>',
            'notifiedBy': '<?= $Lang->get('NOTIFICATION__NOTIFIED_BY') ?>'
          }
        });
    <?php } ?>
    // Config FORM/APP.JS

    var LIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'like')) ?>";
    var DISLIKE_URL = "<?= $this->Html->url(array('controller' => 'news', 'action' => 'dislike')) ?>";

    var LOADING_MSG = "<?= $Lang->get('GLOBAL__LOADING') ?>";
    var ERROR_MSG = "<?= $Lang->get('GLOBAL__ERROR') ?>";
    var INTERNAL_ERROR_MSG = "<?= $Lang->get('ERROR__INTERNAL_ERROR') ?>";
    var FORBIDDEN_ERROR_MSG = "<?= $Lang->get('ERROR__FORBIDDEN') ?>"
    var SUCCESS_MSG = "<?= $Lang->get('GLOBAL__SUCCESS') ?>";

    var CSRF_TOKEN = "<?= $csrfToken ?>";
    </script>

    <?php if(isset($google_analytics) && !empty($google_analytics)) { ?>
      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', '<?= $google_analytics ?>', 'auto');
        ga('send', 'pageview');
      </script>
    <?php } ?>
    <?= $configuration_end_code ?>

  </body>
  </html>
