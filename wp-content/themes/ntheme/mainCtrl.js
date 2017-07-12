angular.module('myApp', [])
    .controller('mainCtrl', function ($scope, $log, $timeout) {
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


    });



