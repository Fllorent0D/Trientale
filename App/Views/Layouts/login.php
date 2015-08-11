<?php use Core\Helpers\Html; ?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>Administration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <script type="text/javascript">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"02ca35df1e619dff21f481fc05df1c0b",petok:"02615e6c1c81ab8405c9e5f3b1b998f6476b212a-1432756174-1800",zone:"revox.io",rocket:"0",apps:{}}];CloudFlare.push({"apps":{"ape":"40986037a14bc6e58c928a380a4909a8"}});!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=7e13c32551/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
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
    <![endif]-->
    <script type="text/javascript">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
</head>
<body class="fixed-header   ">

<div class="login-wrapper ">
    <?= $content_for_layout; ?>

</div>


<?= Html::js("pace.min"); ?>
<?= Html::js("jquery-1.11.1.min"); ?>
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
<?= Html::js("scripts"); ?>

</body>
</html>