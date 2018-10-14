<style>
    #global {
        margin-left: auto;
        margin-right: auto;
        width: 500px;
    }
</style>
<div id="content">
    <div class="container">
      <hr class="hrc">
      <hr class="hrc2">
      <h2 class="hrc3">Donnation</h2>
      <h4 class="grey montserrat" style="text-align:center;">Envie de faire un don ?</h4>
        <div class="row">
            <div class="col-md-12">
                <section>
                    <div id="text-page">
                        <div class="">
                                <div style="text-align: center;" class="panel-heading">Faire un don via PayPal</div>
                                <div class="panel-body">
                                    <p>
                                        <?php foreach($datas as $data) { ?>
                                            <?php if(!empty($data['Infos']['msg'])) { ?>
                                                <?= $data['Infos']['msg']; ?>
                                            <?php } else { ?>
                                                Créer un serveur c'est bien, mais pour cela divers frais rentrent en jeu.<br>
                                                Chaque mois, nous devons payer nos machines sur lesquels sont hébergés notre site internet mais surtout notre serveur Minecraft.<br>
                                                Nous devons également payer les développeurs qui sont derrières, qui permettent jour après jour d'ajouter et améliorer les fonctionnalités du serveur.<br>
                                                <br>
                                                En effectuant un don, vous ne gagnez pas de points boutique, mais vous nous remerciez pour le serveur que nous vous proposons !
                                            <?php } ?>
                                        <?php } ?>
                                    </p>


                                    <?php if(isset($_SESSION['flash'])): ?>
                                        <?php foreach($_SESSION['flash'] as $type => $message) : ?>
                                            <div class="alert alert-<?= $type; ?>">
                                                <?= $message; ?>
                                            </div>
                                        <?php endforeach; ?>
                                        <?php unset($_SESSION['flash']); ?>
                                    <?php endif; ?>

                                    <?php foreach($datas as $data) { ?>

                                        <?php if(!empty($data['Infos']['user'] && $data['Infos']['password'] && $data['Infos']['signature'])) { ?>

                                            <?php if($isConnected) { ?>

                                                <?php if(isset($_POST['montant']) && !empty($_POST['montant']) && !preg_match('/^[a-zA-Z]+$/', $_POST['montant'])) { ?>
                                                    <form method="post" action="<?= $paypal ?>">
                                                        <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden" />
                                                        <button type="submit" class="btn btn-success btn-block">Valider sur PayPal votre don de <?= $_POST['montant'] ?>€</button>
                                                    </form>
                                                <?php } else { ?>
                                                    <form method="post">
                                                        <div class="form-group">
                                                            <input type="text" name="montant" class="form-control" placeholder="Veuillez indiquer le montant de votre don en Euro" />
                                                        </div>
                                                        <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden" />
                                                        <button type="submit" class="btn btn-primary btn-block">Continuer</button>
                                                    </form>
                                                <?php } ?>

                                            <?php  } else { ?>
                                                <button type="button" class="btn btn-danger btn-block" disabled>Vous devez être connecter pour faire un don.</button>
                                            <?php } ?>

                                        <?php  } else { ?>
                                            <button type="button" class="btn btn-danger btn-block" disabled>Impossible de faire un don pour le moment.</button>
                                        <?php } ?>

                                    <?php } ?>
                                </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
