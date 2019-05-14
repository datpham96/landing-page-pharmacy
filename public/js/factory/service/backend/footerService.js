ngApp.factory('$footerService', function ($http, $httpParamSerializer)
{
    var service = {
        action: {},
        data: {}
    };

    service.data.update = function(title, nameStore, address, avatar){
        var params = new FormData();
        params.append('title', title || "");
        params.append('nameStore', nameStore || "");
        params.append('address', address || "");
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
        var url = SiteUrl + '/backend/rest/footer';
        return $http.post(url, data, config);
    };

    service.action.getInfo = function(){             
        var url = SiteUrl + '/backend/rest/footer';
        return $http.get(url);
    };

    return service;
});