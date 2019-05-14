ngApp.directive('contactModal', function ($apply, $myLoader, 
                                            $myNotifyClient, $contactService) {
    var templateUrl = SiteUrl + "/modal/contactModal";
    var restrict = 'E';
    var scope = {
        retFunc: "&",
        modalDom: '=',
        formData: '='
    };

    var link = function (scope) {       
        scope.getData = {
            name: "",
            phone: "",
            skinCondition: ""
        };
        scope.actions = {
            handleBtn: function () {
                var name = scope.getData.name || "";
                var phone = scope.getData.phone || "";
                var skinCondition = scope.getData.skinCondition || "";

                var params = $contactService.data.insert(name,phone,skinCondition);
                if($("#formData").parsley().validate()){
                    $myLoader.show();
                    $contactService.action.insert(params).then(function(resp){
                        if (resp.data.status == true) {
                            scope.getData = {};
                            $myLoader.hide();
                            scope.retFunc({ status: true});
                        }else{
                            scope.retFunc({ status: false});
                            $myLoader.hide();
                        }
                    }).catch(function(err){
                        console.log(err);
                        $myLoader.hide();
                        scope.retFunc({ status: false});
                    });     
                }                       
            }
        };
    };

    
    return {
        restrict: restrict,
        scope: scope,
        templateUrl: templateUrl,
        link: link
    };
});