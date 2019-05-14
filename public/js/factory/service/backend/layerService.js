ngApp.factory('$layerService', function ($http, $httpParamSerializer)
{
    var service = {
        action: {},
        data: {}
    };

    service.data.update = function(titleMax, type, titleMin, content,
    								contentOne, contentTwo, contentThree,
    								contentFour, avatar, titleContentOne,
                                    titleContentTwo, titleContentThree, titleContentFour,
                                    avatarOne, avatarTwo, avatarThree, avatarFour){
        var params = new FormData();
        params.append('titleMax', titleMax || "");
        params.append('type', type || "");
        params.append('titleMin', titleMin || "");
        params.append('content', content || "");
        params.append('contentOne', contentOne || "");
        params.append('contentTwo', contentTwo || "");
        params.append('contentThree', contentThree || "");
        params.append('contentFour', contentFour || "");
        params.append('avatar', avatar || "");
        params.append('titleContentOne', titleContentOne || "");
        params.append('titleContentTwo', titleContentTwo || "");
        params.append('titleContentThree', titleContentThree || "");
        params.append('titleContentFour', titleContentFour || "");
        params.append('avatarOne', avatarOne || "");
        params.append('avatarTwo', avatarTwo || "");
        params.append('avatarThree', avatarThree || "");
        params.append('avatarFour', avatarFour || "");
        
        return params;
    };

    //action
    service.action.update = function(data){       
        var config = {
            headers : {
                'Content-Type': undefined,
                'processData': false,
                'contentType': false
            }
        };       
        var url = SiteUrl + '/backend/rest/layer';
        return $http.post(url, data, config);
    };

    service.action.getInfo = function(type){             
        var url = SiteUrl + '/backend/rest/layer?type=' + type;
        return $http.get(url);
    };

    return service;
});