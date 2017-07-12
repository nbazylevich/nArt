<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>Создание сайтов</title>
    <?php wp_head() ?>
</head>
<body ng-controller="mainCtrl">
<div class="main" style="background-image: url('<?php bloginfo('template_url')?>/img/fon.jpg')">
<!---Header-->
<?php get_header()?>
    <div class="alert alert-success showMsg displayNone" role="alert">
        Сообщение успешно отправлено.
    </div>
    <div id="formReq" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Заявка</h4>
                </div>
                <div class="modal-body">
                    <?php echo do_shortcode('[contact-form-7 id="16" title="Контактная форма 1"]');?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<!---Footer-->
<?php get_footer()?>
</div>