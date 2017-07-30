angular.module('myApp', [])
    .controller('mainCtrl', function ($scope, $log, $timeout) {

        //кнопка "Отправить заявку"
        $scope.clickReq = function(){
            $log.log("clickReq")
            $('#formReq').modal('show');
            $('.wpcf7-mail-sent-ok').hide();
        };

        $(document).on('mailsent.wpcf7', function () {
            console.log('mailsent.wpcf7 was triggered!');
            $('#formReq').modal('hide');
            $('.showMsg').fadeIn(1000);
            $timeout(function(){
                $('.showMsg').fadeOut(1000);
            }, 3000);
        });

        //кнопка "Заполнить бриф"
        $scope.clickBrif = function(){
            $scope.openBrif = true;
            $('footer').css('display', 'none');
        };

        //Закрыть бриф
        $scope.closeBrif = function(){
            $scope.openBrif = false;
            $('footer').css('display', 'block');
        };

    });



