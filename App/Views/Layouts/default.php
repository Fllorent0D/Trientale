<?php
    use Core\Helpers\Form;
    use Core\Helpers\Html;
?>
<!DOCTYPE html>
<html>
<head>
    <title>La Trientale</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Styles -->
    <?= Html::css('bootstrap.min'); ?>
    <?= Html::css('theme'); ?>
    <?= Html::css('animate'); ?>
    <?= Html::css('isotope'); ?>
    <?= Html::css('lightbox'); ?>
    <?= Html::css('flexslider'); ?>

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
    <body class="">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="home/index" class="navbar-brand"><strong><i class="fa fa-leaf"></i> LA TRIENTALE</strong></a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li><?= Html::link(['home', 'index'], "ACCUEIL"); ?></li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">A PROPOS<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><?= Html::link(['abouts', 'trientale'], "La Trientale"); ?></li>
                                <li><?= Html::link(['abouts', 'reserves'], "Les réserves naturelles"); ?></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">DOSSIERS<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Programme des activités</a></li>
                                <li><?= Html::link(['carnets', 'index'], "Carnets"); ?></li>
                                <li><?= Html::link(['visites', 'index'], "Comptes rendus"); ?></li>
                                <li><a href="#">Articles</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="index.html#" class="dropdown-toggle" data-toggle="dropdown">GALERIES<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><?= Html::link(['galleries', 'index'], "Galeries de la Trientale"); ?></li>
                                <li><a href="#">Galeries des membres</a></li>
                            </ul>
                        </li>
                        <li><a href="#">LIENS</a></li>
                        <li><a href="#">GLOSSAIRE</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <?= $this->Session->flash(); ?>

        <div class="container-fluid">
            <?= $content_for_layout; ?>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row info">
                    <div class="col-sm-6 testimonials">
                        <h4>
                            Cercles des Naturalistes de Belgique CNB
                        </h4>
                        <div class="quote">
                            Les Cercles organisent de nombreuses activités très diversifiées de formations, de découvertes ... ouvertes à tous dans les régions francophone et germanophone du pays. Nous rassemblons près de 10.000 membres et éditons à leur intention un périodique trimestriel "L'ÉRABLE" qui annonce entre autres toutes les activités. En collaboration avec l'Entente nationale pour la Protection de la Nature, la société intervient régulièrement en faveur de la défense de la nature et de l'environnement.
                        </div>
                    </div>
                    <div class="col-sm-6 contact">
                        <h4>
                            Contact
                        </h4>

                        <?= Form::start($this->Request->url.'#footer'); ?>
                            <?= Form::input("text", "name", false, [], isset($contactData)? $contactData->name : "", "Nom"); ?>
                            <?= (isset($contactErrors['name']))? "<label class=\"text-danger\">".$contactErrors['name']."</label>":""; ?>
                            <?= Form::input("text", "email", false, [], isset($contactData)? $contactData->email : "", "Email"); ?>
                            <?= (isset($contactErrors['email']))? "<label class=\"text-danger\">".$contactErrors['email']."</label>":""; ?>
                            <?= Form::textarea('message', ['placeholder' => 'Message', 'rows' => '8'], isset($contactData)? $contactData->message : ""); ?>
                            <?= (isset($contactErrors['message']))? "<label class=\"text-danger\">".$contactErrors['message']."</label><br>":""; ?>
                            <?= isset($contactInfo)? "<label class=\"text-success\">".$contactInfo." </label>" : "" ?>
                        <?= Form::end("Envoyer"); ?>
                    </div>
                </div>
                <div class="row credits">
                    <div class="col-md-12">
                        <div class="row copyright">
                            <div class="col-md-12">
                                © 2015 <a href="//floca.be">Cardoen Florent</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <?= Html::js('bootstrap.min'); ?>
        <?= Html::js('theme'); ?>
        <?= Html::js('jquery.isotope.min'); ?>
        <?= Html::js('lightbox.min'); ?>
        <?= Html::js('index-slider'); ?>

    </body>
</html>


