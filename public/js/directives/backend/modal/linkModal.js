ngApp.directive('linkModal', function ($apply, $myLoader, $linkService, $myAvatar, $myFile) {
    var templateUrl = SiteUrl + "/modal/linkModal";
    var restrict = 'E';
    var scope = {
        retFunc: "&",
        modalDom: '=',
        modalData:'=singleData',
        formData:'=formData',
        domAvatar: '=domAvatar'
    };

    var link = function (scope) {       
        scope.getData = {
            name: "",
            link: "",
            avatar: ""
        };
        scope.data = {
            errors: {}
        };
        scope.actions = {
            update: function () {
                if ($(scope.formData).parsley().validate()) {
                    $myLoader.show();
                    var name = scope.getData.name;
                    var email = scope.getData.link;
                    if ($('input[name*=avatar]')[0].files[0] == undefined)
                    {
                        scope.data.checkValidate = false;
                    }else {
                        scope.getData.avatar = $('input[name*=avatar]')[0].files[0];
                    }
                    if(scope.getData.avatar == undefined){
                        scope.getData.avatar = $myAvatar.imageDefault();
                    }
                    var id = scope.modalData.id || 0;
                    var params = $linkService.data.update(name,email,scope.getData.avatar);
                    if(id > 0){                        
                        $linkService.action.update(params, id).then(function(resp){
                            scope.retFunc({ data: true , id: id});
                            $myLoader.hide();
                        }).catch(function(err){
                            scope.retFunc({ data: false });
                            scope.errors = err.status;
                            $myLoader.hide();
                        });
                    }else{
                        $linkService.action.insert(params).then(function(resp){
                            scope.retFunc({ data: true });
                            $myLoader.hide();
                        }).catch(function(err){
                            scope.retFunc({ data: false });
                            scope.errors = err.data;
                            $myLoader.hide();
                        });
                    }
                }               
            },
            loadImage: function (params) {          
                if(params){
                    return $myFile.avatar(params);
                }else{
                    return SiteUrl + '/images/new-user-image-default.jpg';
                }
            },
        };

        scope.$watch('modalData', function (newVal, oldVal) {
            
            var id = (newVal.id) ? parseInt(newVal.id) : 0;
            $apply(function () {
                scope.getData = {};
                if(id > 0){
                    scope.title = "Sửa ảnh";
                    scope.getData = angular.copy(newVal);
                    $("#blah").attr('src',$myAvatar.image(newVal.avatar));
                }else{
                    $("#blah").attr('src',$myAvatar.imageDefault());
                    scope.title = "Thêm ảnh";
                    scope.getData = {};
                }
            });
        });

        
    };

    
    return {
        restrict: restrict,
        scope: scope,
        templateUrl: templateUrl,
        link: link
    };
});