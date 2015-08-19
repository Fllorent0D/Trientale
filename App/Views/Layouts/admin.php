<?php use Core\Helpers\Html; ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title><?= isset($title_for_layout) ? $title_for_layout : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?= Html::css("pace-theme-flash"); ?>
    <?= Html::css("bootstrap.min"); ?>
    <?= Html::css("jquery.scrollbar"); ?>
    <?= Html::css("select2"); ?>
    <?= Html::css("switchery.min"); ?>
    <?= Html::css("pages-icons"); ?>
    <?= Html::css("pages"); ?>
    <?= Html::css("datepicker3"); ?>
    <?= Html::js("jquery-1.11.1.min"); ?>

</head>
<body class="fixed-header">

<nav class="page-sidebar" data-pages="sidebar">

    <div class="sidebar-header">
        <?= Html::img('logoblackbg.png', 'logo', ['height' => '30', 'width' => '150']); ?>
    </div>


    <div class="sidebar-menu">

        <ul class="menu-items">
            <li class="m-t-30">
                <?= Html::link(["home", "index", "admin"],'<span class="title">Accueil </span>', ["class" => "detailled"])?>
                <span class="icon-thumbnail"><?= Html::fa("home"); ?></span>
            </li>
            <li class="">
                <a href="javascript:;"><span class="title">A propos</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail "><?= Html::fa("question"); ?></span>
                <ul class="sub-menu">
                    <li>
                        <?= Html::link(["abouts", "index", "admin"],'<span class="title">De la trientale</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("edit"); ?></span>
                    </li>
                    <li>
                        <?= Html::link(["carnets", "index", "admin"],'<span class="title">Des réserves naturels</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("leaf"); ?></span>
                    </li>
                </ul>
            </li>
            <li>
                <?= Html::link(["calendars", "index", "admin"],'<span class="title">Calendrier</span>', [date("m"), date("Y")])?>
                <span class="icon-thumbnail"><?= Html::fa("calendar"); ?></span>
            </li>
            <li class="">
                <a href="javascript:;"><span class="title">Dossiers</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail "><?= Html::fa("newspaper-o"); ?></span>
                <ul class="sub-menu">
                    <li>
                        <?= Html::link(["visites", "index", "admin"],'<span class="title">Comptes rendus</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("binoculars"); ?></span>
                    </li>
                    <li>
                        <?= Html::link(["carnets", "index", "admin"],'<span class="title">Carnets</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("book"); ?></span>
                    </li>
                </ul>
            </li>



            <li class="">
                <a href="javascript:;"><span class="title">Galeries</span>
                    <span class=" arrow"></span></a>
                <span class="icon-thumbnail "><?= Html::fa("camera"); ?></span>
                <ul class="sub-menu">
                    <li>
                        <?= Html::link(["galleries", "index", "admin"],'<span class="title">Galeries de la Trientale</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("leaf"); ?></span>
                    </li>
                    <li>
                        <?= Html::link(["galleries", "index", "admin"],'<span class="title">Galeries des membres</span>')?>
                        <span class="icon-thumbnail"><?= Html::fa("users"); ?></span>
                    </li>
                </ul>
            </li>
            <li>
                <?= Html::link(["glossaires", "index", "admin"],'<span class="title">Glossaire</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("asterisk"); ?></span>
            </li>
            <li>
                <?= Html::link(["links", "index", "admin"],'<span class="title">Liens</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("link"); ?></span>
            </li>
            <li>
                <?= Html::link(["messages", "index", "admin"],'<span class="title">Messagerie</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("envelope"); ?></span>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
</nav>



<div class="page-container">

    <div class="header ">

        <div class="pull-left full-height visible-sm visible-xs">

            <div class="sm-action-bar">
                <a href="#" class="btn-link toggle-sidebar" data-toggle="sidebar">
                    <?= Html::fa("align-justify"); ?>
                </a>
            </div>

        </div>

        <div class=" pull-left sm-table">
            <div class="header-inner">
                <div class="brand inline">
                    <?= Html::img('logowhitebg.png', 'logo', ['height' => '30', 'width' => '150']);?>
                </div>

            </div>
        </div>

        <div class=" pull-right">

            <div class="visible-lg visible-md m-t-10">
                <div class="dropdown pull-right">
                    <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
                            <?= $_SESSION['nom']; ?> <?= Html::fa("sort-down"); ?>
                        </div>

                    </button>
                    <ul class="dropdown-menu profile-dropdown" role="menu">
                        <li>
                            <?= Html::link(["home", "index"], Html::fa('arrow-left fa-fw'). 'Retourner sur le site'); ?>

                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <?= Html::link(["users", "manage", "admin"],Html::fa("users fa-fw") .'Utilisateurs')?>
                        </li>
                        <li>
                            <?= Html::link(["settings", "index", "admin"],Html::fa("cog fa-fw").'Réglages')?>
                        </li>
                        <li>
                            <?= Html::link(["backups", "index", "admin"],Html::fa("database fa-fw") . 'Backups')?>
                        </li>
                        <li>
                            <?= Html::link(["settings", "changelog", "admin"], Html::fa("info fa-fw").'Changelog')?>
                        </li>
                        <li class="bg-master-lighter">
                            <?= Html::link(['users', 'logout'], '<span class="pull-right">'.Html::fa('sign-out').'</span> Déconnexion', [], ['class' => 'clearfix']); ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="page-content-wrapper">

        <div class="content">

            <div class="jumbotron" data-pages="parallax">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <ul class="breadcrumb">
                            <li>
                                <a href="">Admin</a>
                            </li>
                            <li>
                                <a href="" class="active"><?= $pageTitle; ?></a>
                            </li>
                        </ul>
                </div>

            </div>
            <div class="container col-md-offset-3 col-md-6 container-fixed-ld">
                <?= $this->Session->flash(); ?>
            </div>

            <div class="container-fluid container-fixed-lg">

                <?= $content_for_layout; ?>
            </div>
        </div>



        <div class="container-fluid container-fixed-lg footer">
            <div class="copyright sm-text-center">
                <span class="small no-margin">
                    <?= Html::fa('code') ?> Version 0.1
                </span>
                <span class="small no-margin pull-right sm-pull-reset">
                    Powered by <a href="//mvc.swith.fr/">Swith Framework</a> <span class="hint-text">&amp; Made with Love <?= Html::fa("heart"); ?></span>
                </span>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>

</div>
<?= Html::js("bootstrap-datepicker"); ?>
<?= Html::js("pace.min"); ?>
<?= Html::js("modernizr.custom"); ?>
<?= Html::js("jquery-ui.min"); ?>
<?= Html::js("bootstrap.min"); ?>
<?= Html::js("jquery-easy"); ?>
<?= Html::js("jquery.unveil.min"); ?>
<?= Html::js("jquery.bez.min"); ?>
<?= Html::js("jquery.ioslist.min"); ?>
<?= Html::js("jquery.actual.min"); ?>
<?= Html::js("jquery.scrollbar.min"); ?>
<?= Html::js("select2.min"); ?>
<?= Html::js("classie"); ?>
<?= Html::js("switchery.min"); ?>
<?= Html::js("pages.min"); ?>
<?= Html::js("jquery.menuclipper"); ?>
<?= Html::js("scripts"); ?>
<?= Html::js('pages.email'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.1/masonry.pkgd.min.js"></script>
</body>
</html>



