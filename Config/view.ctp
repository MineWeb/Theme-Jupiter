<?php
$json = file_get_contents('https://tronai.fr/theme/jupiter.json');
$inf = json_decode($json, true);
?>
<section class="content">

  <?php if($inf != ""){ ?>
  <div class="card card-warning">
    <div class="card-header with-border">
      <h3 class="card-title"><?= $inf['title'] ?></h3>
    </div>
    <div class="card-body">
      <?= $inf['contenue'] ?>
    </div>
  </div>
  <?php } ?>

  <!-- Admin -->

  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header with-border">
          <h3 class="card-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3><span class="pull-right">Tronai</span>
        </div>
        <div class="card-body">



          <div class="tabbable">
            <ul class="nav nav-tabs">
             <li class="active"><a href="#tab1" class="nav-link text-dark" data-toggle="tab">Option General</a></li>
             <li><a href="#tab2" class="nav-link text-dark" data-toggle="tab">Maintenance</a></li>
             <li><a href="#tab3" class="nav-link text-dark" data-toggle="tab">Menu</a></li>
             <li><a href="#tab4" class="nav-link text-dark" data-toggle="tab">Home</a></li>
             </ul>
             <form method="post" enctype="multipart/form-data" data-ajax="false">
          <div class="tab-content">
            <div class="tab-pane active" id="tab1">
              <br>
               <div class="form-group">
                 <label>General</label>

                 <table class="table">
                   <tr>
                     <td>Couleur du background</td>
                     <td><i>Par default : #dc4f4f</i></td>
                     <td><input type="text" class="form-control" name="color" value="<?= $theme_config['color'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Text sur le footer</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="footer-text" value="<?= $theme_config['footer-text'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Slider</td>
                     <td><i>Par default : oui</i></td>
                     <td>
                       <select name="slider" class="form-control">
                          <option value="true"<?= ($config['slider'] == "true") ? ' selected' : '' ?>>Oui</option>
                          <option value="false"<?= ($config['slider'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                     </td>
                   </tr>
                   <tr>
                     <td>Lien sur le slider</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="slider_lien" value="<?= $theme_config['slider_lien'] ?>"></td>
                   </tr>
                   <tr>
                     <td>Texte bouton slider</td>
                     <td><i>Par default : #</i></td>
                     <td><input type="text" class="form-control" name="slider_text" value="<?= $theme_config['slider_text'] ?>"></td>
                   </tr>
                   <tr>
                     <td>IP</td>
                     <td><i>Par default : 127.0.0.1</i></td>
                     <td>
                       <input type="text" class="form-control" name="ip" value="<?= $theme_config['ip'] ?>"></td>
                     </td>
                   </tr>
                 </table>
               </div>
            </div>

            <!-- Section 2 -->
            <div class="tab-pane" id="tab2">
              <br>

              <div class="form-group">
                <label>Maintenance</label>

                <table class="table">

                  <tr>
                    <td>Compteur</td>
                    <td>
                      <select name="compteur" class="form-control">
                         <option value="true"<?= ($config['compteur'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['compteur'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>


                  <tr>
                    <td>Mois</td>
                    <td>
                      <select name="mois" class="form-control">
                         <option value="January"<?= ($config['mois'] == "January") ? ' selected' : '' ?>>January</option>
                         <option value="February"<?= ($config['mois'] == "February") ? ' selected' : '' ?>>February</option>
                         <option value="March"<?= ($config['mois'] == "March") ? ' selected' : '' ?>>March</option>
                         <option value="April"<?= ($config['mois'] == "April") ? ' selected' : '' ?>>April</option>
                         <option value="May"<?= ($config['mois'] == "May") ? ' selected' : '' ?>>May</option>
                         <option value="June"<?= ($config['mois'] == "June") ? ' selected' : '' ?>>June</option>
                         <option value="July"<?= ($config['mois'] == "July") ? ' selected' : '' ?>>July</option>
                         <option value="August"<?= ($config['mois'] == "August") ? ' selected' : '' ?>>August</option>
                         <option value="September"<?= ($config['mois'] == "September") ? ' selected' : '' ?>>September</option>
                         <option value="October"<?= ($config['mois'] == "October") ? ' selected' : '' ?>>October</option>
                         <option value="November"<?= ($config['mois'] == "November") ? ' selected' : '' ?>>November</option>
                         <option value="December"<?= ($config['mois'] == "December") ? ' selected' : '' ?>>December</option>
                       </select>
                    </td>
                  </tr>
                  <tr>
                    <td>Jour</td>
                    <td><input type="text" class="form-control" name="day" value="<?= $theme_config['day'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Année</td>
                    <td><input type="text" class="form-control" name="years" value="<?= $theme_config['years'] ?>"></td>
                  </tr>
                  <tr>
                    <td>Heure</td>
                    <td><input type="text" class="form-control" name="hour" value="<?= $theme_config['hour'] ?>" placeholder="15:00:00"></td>
                  </tr>


                </table>


              </div>
            </div>


            <!-- Section 3 -->
            <div class="tab-pane" id="tab3">
              <br>

              <div class="form-group">
                <label>Menu</label>

                <table class="table">
                  <tr>
                    <td>Top</td>
                    <td><i>Par default : oui</i></td>
                    <td>
                      <select name="top" class="form-control">
                         <option value="true"<?= ($config['top'] == "true") ? ' selected' : '' ?>>Oui</option>
                         <option value="false"<?= ($config['top'] == "false") ? ' selected' : '' ?>>Non</option>
                       </select>
                    </td>
                  </tr>


                </table>
              </div>
            </div>

                          <!-- Section 3 -->
                          <div class="tab-pane" id="tab4">
                            <br>
                            <div class="form-group">
                              <label>Page principale</label>
                              <small>Pour les icons, vous pouvez ajouter fa-spin pour qu'il tourne !</small>
                              <table class="table">
                                <tr>
                                  <td>Texte sous Informations</td>
                                  <td><i>Par default : #</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_text_info" value="<?= $theme_config['home_text_info'] ?>" placeholder="Voici les informations importantes du serveur !">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Texte sous Nouveautées</td>
                                  <td><i>Par default : #</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_text_news" value="<?= $theme_config['home_text_news'] ?>" placeholder="Voici les nouveautées excitant du serveur !">
                                  </td>
                                </tr>
                                

                                <!-- Achievement 1 -->
                                <tr>
                                  <td>Achievement 1</td>
                                  <td><i>Icon</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_icon_1" value="<?= $theme_config['home_ach_icon_1'] ?>" placeholder="Ex: fa-cog">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 1</td>
                                  <td><i>Titre</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_titre_1" value="<?= $theme_config['home_ach_titre_1'] ?>" placeholder="Titre">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 1</td>
                                  <td><i>Texte</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_text_1" value="<?= $theme_config['home_ach_text_1'] ?>" placeholder="Texte">
                                  </td>
                                </tr>

                                <!-- Achievement 2 -->
                                <tr>
                                  <td>Achievement 2</td>
                                  <td><i>Icon</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_icon_2" value="<?= $theme_config['home_ach_icon_2'] ?>" placeholder="Ex: fa-cog">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 2</td>
                                  <td><i>Titre</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_titre_2" value="<?= $theme_config['home_ach_titre_2'] ?>" placeholder="Titre">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 2</td>
                                  <td><i>Texte</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_text_2" value="<?= $theme_config['home_ach_text_2'] ?>" placeholder="Texte">
                                  </td>
                                </tr>

                                <!-- Achievement 3 -->
                                <tr>
                                  <td>Achievement 3</td>
                                  <td><i>Icon</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_icon_3" value="<?= $theme_config['home_ach_icon_3'] ?>" placeholder="Ex: fa-cog">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 3</td>
                                  <td><i>Titre</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_titre_3" value="<?= $theme_config['home_ach_titre_3'] ?>" placeholder="Titre">
                                  </td>
                                </tr>
                                <tr>
                                  <td>Achievement 3</td>
                                  <td><i>Texte</i></td>
                                  <td>
                                    <input type="text" class="form-control" name="home_ach_text_3" value="<?= $theme_config['home_ach_text_3'] ?>" placeholder="Texte">
                                  </td>
                                </tr>

                              </table>
                            </div>

                          </div>



                <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden"> <button class="btn btn-primary" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button> <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
