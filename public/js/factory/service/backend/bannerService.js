ngApp.factory('$bannerService', function ($http, $httpParamSerializer)
{
    var service = {
        action: {},
        data: {}
    };

    service.data.update = function(avatar){
        var params = new FormData();
        params.append('avatar', avatar || "");
        
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
        var url = SiteUrl + '/backend/rest/banner';
        return $http.post(url, data, config);
    };

    service.action.getInfo = function(){             
        var url = SiteUrl + '/backend/rest/banner';
        return $http.get(url);
    };

    return service;
});