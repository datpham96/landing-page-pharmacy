ngApp.controller('contactCtrl', function ($myNotify,$scope, $myLoader, $myBootbox, $myNotifyClient, $contactService)
{
    $scope.formData;
    $scope.data = {
        name: "",
        phone: "",
        address: "",
    };
    $scope.actions = {
        sendOrder: function (){   
            $myLoader.show();
            $scope.errors = {};
            var name = $scope.data.name;
            var address = $scope.data.address;
            var phone = $scope.data.phone;
            var params = $contactService.data.insert(name,phone,address);
                $contactService.action.insert(params).then(function(resp){
                    if (resp.data.status == true) {
                            $myNotifyClient.success('Đặt hàng thành công!');
                            $scope.data = {};
                            $myLoader.hide();
                        }else{
                            $myLoader.hide();
                            $myNotifyClient.err('Đặt hàng thất bại');
                        }
                }).catch(function(err){
                    console.log(err);
                    $scope.errors = err;
                    $myLoader.hide();
                });
        }
    };
});
