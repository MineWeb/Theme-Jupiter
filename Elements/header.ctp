<div class="menu">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="col-lg-10 col-lg-offset-1">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <!-- Titre -->

                <div class="navbar-header">
              			<div class="ggt">
                <a class="navbar-brand h2" href="<?= $this->Html->url('/') ?>"><b><?= $website_name[0] ?></b><?= substr($website_name, 1); ?></a>
              </div>
                </div>
              </div>
              <!-- Lien -->
              <div id="navbar" class="navbar-collapse collapse" style="padding-top:20px;">
                <ul class="nav navbar-nav navbar-right">
                    <li class="li-nav"><a href="<?= $this->Html->url('/') ?>"><span class="white hcolor" style="transition: 0.3s linear;"><?= $Lang->get('GLOBAL__HOME') ?></span></a></li>
                    <?php
                    if(!empty($nav)) {
                      $i = 0;
                      foreach ($nav as $key => $value) { ?>
                        <?php if(empty($value['Navbar']['submenu'])) { ?>
                          <li class="li-nav">
                              <a href="<?= $value['Navbar']['url'] ?>"><span class="white hcolor" style="transition: 0.3s linear;"><?= $value['Navbar']['name'] ?></span></a>
                          </li>
                        <?php } else { ?>
                          <li class="dropdown">
                            <a id="menu-dropdown" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="white hcolor"><?= $value['Navbar']['name'] ?> <span class="caret"></span></span></a>
                            <ul class="dropdown-menu" role="menu">
                            <?php
                            $submenu = json_decode($value['Navbar']['submenu']);
                            foreach ($submenu as $k => $v) {
                            ?>
                              <li><a style="transition: 0.3s linear;" href="<?= rawurldecode(rawurldecode($v)) ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>><?= rawurldecode(str_replace('+', ' ', $k)) ?></a></li>
                            <?php } ?>
                            </ul>
                          </li>
                        <?php } ?>
                        <?php
                          $i++;
                        }
                      } ?>
                      <li class="dropdown ju-menu-bg">
                        <a href="#" class="ju-menu-bg" id="menu-dropdown" data-toggle="dropdown" role="button" aria-expanded="false"><span class="white hcolor ju-menu-bg" style="transition: 0.3s linear;">Membre <span class="caret"></span></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <?php if(!$isConnected){ ?>
                              <li><a href="#login">Connexion</a></li>
                              <li><a href="#register">Inscription</a></li>
                          <?php }else{ ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => false)); ?>"><?= $Lang->get('USER__PROFILE'); ?></a></li>
                            <li><a href="#notifications_modal" onclick="notification.markAllAsSeen(2)"><span class="notification-indicator"></span>Notification</a></li>
                            <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'admin', 'action' => 'index', 'plugin' => false, 'admin' => true)) ?>"><?= $Lang->get('GLOBAL__ADMIN_PANEL') ?></a></li>
                            <?php } ?>
                            <li><a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => false)) ?>"><?= $Lang->get('USER__LOGOUT') ?></a></li>
                          <?php } ?>
                        </ul>
                      </li>
                  </ul>
              </div>
            </div>
        </div>
    </nav>
</div>
