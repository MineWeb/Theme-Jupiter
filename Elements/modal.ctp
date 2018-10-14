<div id="login" class="modalDialog">
    <div>

      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header border-b">
            <a class="close" href="#close"><span aria-hidden="true" href="#close" class="close">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></a></span></a>
            <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__LOGIN') ?></h4>
          </div>
          <div class="modal-body">
            <form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_login')) ?>" data-redirect-url="?">

              <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label"><?= $Lang->get('USER__USERNAME') ?></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="pseudo" id="inputEmail3" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
                </div>
              </div>

              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember_me">
                      <?= $Lang->get('USER__REMEMBER_ME') ?>
                    </label>
                  </div>
              <a href="#lostpassword" class="color"><?= $Lang->get('USER__PASSWORD_FORGOT_LABEL') ?></a>
                </div>
              </div>

          </div>
          <div class="modal-footer border-t">
            <a class="btn btn-danger" data-dismiss="modal" href="#close"><?= $Lang->get('GLOBAL__CLOSE') ?></a>
            <button type="submit" class="btn"><?= $Lang->get('USER__LOGIN') ?></button>
          </form>
          </div>
        </div>
      </div>
</div>
</div>

<div id="register" class="modalDialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-b">
        <a class="close" href="#close"><span aria-hidden="true" href="#close" class="close">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></a></span></a>
        <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__REGISTER') ?></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_register')) ?>" data-redirect-url="?">
          <div class="form-group">
            <label  class="col-sm-2 control-label"><?= $Lang->get('USER__USERNAME') ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="pseudo" placeholder="<?= $Lang->get('USER__USERNAME_LABEL') ?>">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="password_confirmation" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
            </div>
          </div>
          <div class="form-group">
            <label  class="col-sm-2 control-label"><?= $Lang->get('USER__EMAIL') ?></label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
            </div>
          </div>
          <?php if($reCaptcha['type'] == "google") { ?>
            <script src='https://www.google.com/recaptcha/api.js'></script>
            <div class="form-group">
              <label class="col-sm-2 control-label"><?= $Lang->get('FORM__CAPTCHA') ?></label>
              <div class="col-sm-10">
                <div class="g-recaptcha" data-sitekey="<?= $reCaptcha['siteKey'] ?>"></div>
              </div>
            </div>
          <?php } else { ?>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label"><?= $Lang->get('FORM__CAPTCHA') ?></label>
              <div class="col-sm-10">
                <?php
                  echo $this->Html->image(array('controller' => 'user', 'action' => 'get_captcha', 'plugin' => false, 'admin' => false), array('plugin' => false, 'admin' => false, 'id' => 'captcha_image'));
                  echo $this->Html->link($Lang->get('FORM__RELOAD_CAPTCHA'), 'javascript:void(0);',array('id' => 'reload'));
                ?>
              </div>
            </div>
            <div class="form-group">
              <label class="col-sm-2 control-label"></label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="captcha" id="inputPassword3" placeholder="<?= $Lang->get('FORM__CAPTCHA_LABEL') ?>">
              </div>
            </div>
          <?php } ?>
      </div>
      <div class="modal-footer border-t">
        <a class="btn btn-danger" data-dismiss="modal" href="#close"><?= $Lang->get('GLOBAL__CLOSE') ?></a>
        <button type="submit" class="btn"><?= $Lang->get('USER__REGISTER') ?></button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Password -->

<div id="lostpassword" class="modalDialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-b">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
        <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__PASSWORD_FORGOT_LABEL') ?></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_lostpasswd')) ?>">
          <div class="form-group">
            <label class="col-sm-2 control-label"><?= $Lang->get('USER__EMAIL') ?></label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="email" placeholder="<?= $Lang->get('USER__EMAIL_LABEL') ?>">
            </div>
          </div>
      </div>
      <div class="modal-footer border-t">
          <a class="btn-red-small button" data-dismiss="modal" href="#close"><?= $Lang->get('GLOBAL__CLOSE') ?></a>
        <button type="submit" class="btn-green-small button"><?= $Lang->get('USER__PASSWORD_FORGOT_SEND_MAIL') ?></button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php if(!empty($resetpsswd)) { ?>
  <div id="lostpassword" class="modalDialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header border-b">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></span></button>
          <h4 class="modal-title" id="myModalLabel"><?= $Lang->get('USER__PASSWORD_FORGOT_LABEL') ?></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" method="POST" data-ajax="true" action="<?= $this->Html->url(array('plugin' => null, 'admin' => false, 'controller' => 'user', 'action' => 'ajax_resetpasswd')) ?>" data-redirect-url="?">
            <input type="hidden" name="key" value="<?= $resetpsswd['key'] ?>">
            <input type="hidden" name="email" value="<?= $resetpsswd['email'] ?>">
            <div class="form-group">
              <label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD') ?></label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="<?= $Lang->get('USER__PASSWORD_LABEL') ?>">
              </div>
            </div>
            <div class="form-group">
              <label  class="col-sm-2 control-label"><?= $Lang->get('USER__PASSWORD_CONFIRM') ?></label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password2" placeholder="<?= $Lang->get('USER__PASSWORD_CONFIRM_LABEL') ?>">
              </div>
            </div>
        </div>
        <div class="modal-footer border-t">
            <a class="btn-red-small button" data-dismiss="modal" href="#close"><?= $Lang->get('GLOBAL__CLOSE') ?></a>
          <button type="submit" class="btn-green-small button"><?= $Lang->get('GLOBAL__SAVE') ?></button>
        </form>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<!-- Notification -->

<?php if($isConnected) { ?>
  <div id="notifications_modal" class="modalDialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title"><?= $Lang->get('NOTIFICATIONS__LIST') ?></h4>
          <a class="close" href="#close"><span aria-hidden="true" href="#close" class="close">&times;</span><span class="sr-only"><?= $Lang->get('GLOBAL__CLOSE') ?></a></span></a>
        </div>
        <div class="modal-body" style="padding:0;">

          <div class="notifications-list" style="color:black;"></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" onclick="notification.markAllAsSeen()" data-dismiss="modal"><?= $Lang->get('NOTIFICATIONS__MARK_ALL_AS_SEEN') ?></button>
          <button type="submit" class="btn btn-danger" onclick="notification.clearAll()" data-dismiss="modal"><?= $Lang->get('NOTIFICATIONS__CLEAR_ALL') ?></button>
        </div>
      </div>
    </div>
  </div>
<?php } ?>

<style media="screen">
/**--------------------------------
*----------------MODAL----------
---------------------------------*/

 .modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
}
.modal-close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.modal-close:hover {
    background: #00d9ff;
}

.modal-header, .modal-footer{
  background-color: #27272a;
  color: white;
}

</style>
<script type="text/javascript">
setTimeout(function()
    {
      document.getElementById("login").style.display = "block";
      document.getElementById("register").style.display = "block";
      document.getElementById("notifications_modal").style.display = "block";
    }, 3000);
</script>
