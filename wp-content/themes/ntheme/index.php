<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <?php wp_head() ?>
</head>
<body ng-controller="mainCtrl">
<div class="main" style="background-image: url('<?php bloginfo('template_url')?>/img/fon.jpg')">
<!---Header-->
<?php get_header()?>

<!---Footer-->
<?php get_footer()?>
</div>