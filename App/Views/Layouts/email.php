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
        <?= Html::img('admin_logo.png', 'logo', ['height' => '30', 'width' => '140']); ?>
    </div>


    <div class="sidebar-menu">

        <ul class="menu-items">
            <li class="m-t-30">
                <?= Html::link(["home", "index", "admin"],'<span class="title font-montserrat">Accueil </span>')?>
                <span class="icon-thumbnail"><?= Html::fa("home"); ?></span>
            </li>
            <li>
                <?= Html::link(["users", "manage", "admin"],'<span class="title font-montserrat">Utilisateurs </span>')?>
                <span class="icon-thumbnail"><?= Html::fa("users"); ?></span>
            </li>
            <li>
                <?= Html::link(["carnets", "index", "admin"],'<span class="title font-montserrat">Carnets</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("book"); ?></span>
            </li>
            <li>
                <?= Html::link(["visites", "index", "admin"],'<span class="title font-montserrat">Visites</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("binoculars"); ?></span>
            </li>
            <li>
                <?= Html::link(["calendars", "index", "admin"],'<span class="title font-montserrat">Calendrier</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("calendar"); ?></span>
            </li>
            <li>
                <?= Html::link(["galleries", "index", "admin"],'<span class="title font-montserrat">Galeries</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("camera"); ?></span>
            </li>
            <li>
                <?= Html::link(["abouts", "index", "admin"],'<span class="title font-montserrat">A propos</span>')?>
                <span class="icon-thumbnail"><?= Html::fa("edit"); ?></span>
            </li>
            <li>
                <?= Html::link(["messages", "index", "admin"],'<span class="title font-montserrat">Messagerie</span>')?>
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
                    <?= Html::img('admin_logo.png', 'logo', ['height' => '30', 'width' => '140']);?>
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
                        <li><?= Html::link(["home", "index"], Html::fa('arrow-left'). 'Retourner sur le site'); ?>
                        </li>
                        <li class="bg-master-lighter">
                            <?= Html::link(['users', 'logout'], '<span class="pull-right">'.Html::fa('sign-out').'</span> Déconnexion', [], ['class' => 'clearfix']); ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <div class="page-content-wrapper full-height">

        <div class="content full-height">

            <div class="email-wrapper">

                <nav class="email-sidebar padding-30">
                    <a href="email_compose.html" class="btn btn-complete btn-block btn-compose m-b-30">Compose</a>
                    <p class="menu-title">BROWSE</p>
                    <ul class="main-menu">
                        <li class="active">
                            <a href="email.html#">
                                <span class="title"><i class="pg-inbox"></i> Inbox</span>
                                <span class="badge pull-right">5</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="email.html#">
                                <span class="title"><i class="pg-folder"></i> All mail</span>
                            </a>
                            <ul class="sub-menu no-padding">
                                <li>
                                    <a href="email.html#">
                                        <span class="title">Important</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="email.html#">
                                        <span class="title">Labeled</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="email.html#">
                                <span class="title"><i class="pg-sent"></i> Sent</span>
                            </a>
                        </li>
                        <li>
                            <a href="email.html#">
                                <span class="title"><i class="pg-spam"></i> Spam</span>
                                <span class="badge pull-right">10</span>
                            </a>
                        </li>
                    </ul>
                    <p class="menu-title m-t-20 all-caps">Quick view</p>
                    <ul class="sub-menu no-padding">
                        <li>
                            <a href="email.html#">
                                <span class="title">Documents</span>
                            </a>
                        </li>
                        <li>
                            <a href="email.html#">
                                <span class="title">Flagged</span>
                                <span class="badge pull-right">5</span>
                            </a>
                        </li>
                        <li>
                            <a href="email.html#">
                                <span class="title">Images</span>
                            </a>
                        </li>
                    </ul>
                </nav>


                <div class="email-list b-r b-grey"> <a class="email-refresh" href="email.html#"><i class="fa fa-refresh"></i></a>
                    <div id="emailList">


                    </div>
                </div>


                <div class="email-opened">
                    <div class="no-email">
                        <h1>Aucun message sélectionné</h1>
                    </div>
                    <div class="email-content-wrapper" style="display:none">

                        <div class="email-content">
                            <div class="email-content-header">
                                <div class="thumbnail-wrapper d48 circular bordered">
                                    <img width="40" height="40" alt="" data-src-retina="assets/img/profiles/avatar2x.jpg" data-src="assets/img/profiles/avatar.jpg" src="assets/img/profiles/avatar2x.jpg">
                                </div>
                                <div class="sender inline m-l-10">
                                    <p class="name no-margin bold">
                                    </p>
                                    <p class="datetime no-margin"></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="subject m-t-20 m-b-20 semi-bold">
                                </div>
                                <div class="fromto">
                                    <div class="pull-left">
                                        <div class="btn-group dropdown-default">
                                            <a class="btn dropdown-toggle btn-small btn-rounded" data-toggle="dropdown" href="email.html#">
                                                David Nester
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="email.html#">Action</a>
                                                </li>
                                                <li><a href="email.html#">Friend</a>
                                                </li>
                                                <li><a href="email.html#">Report</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="email-content-body m-t-20">

                            </div>
                            <div class="wysiwyg5-wrapper b-a b-grey m-t-30">
                                <textarea class="email-reply" placeholder="Reply"></textarea>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="compose-wrapper visible-xs">
                    <a class="compose-email text-info pull-right m-r-10 m-t-10" href="email_compose.html"><i class="fa fa-pencil-square-o"></i></a>
                </div>

            </div>

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



