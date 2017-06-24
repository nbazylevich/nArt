<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <?php wp_head() ?>
</head>
<body>

<header class="posRelative">
    <div id="logo">
        <img id="logo-img" src="<?php bloginfo('template_url')?>/img/logo.png" alt="Разработка сайтов">
    </div>
    <div id="contacts" class="text-right">
        <div>
            <i class="fa fa-phone" aria-hidden="true"></i>
            8-911-140-48-95
        </div>
        <div>
            <a id="linkToMail" href="mailto:nbazylevich@gmail.com">nbazylevich@gmail.com</a>
        </div>

    </div>
</header>