ngApp.factory('$contactService', function ($http)
{
    var service = {
        action: {},
        data: {}
    };

    service.data.insert = function (name,phone,address) {
        return {
            name: name || "",
            phone: phone || "",
            address: address || ""
        }
    };

    service.action.insert = function(params) {
        var url = SiteUrl + '/frontend/rest/contact';
        return $http.post(url, params);
    };
    
    service.action.refreshCaptcha = function () {
        var url = SiteUrl + '/frontend/rest/refereshcapcha';
        return $http.get(url);
    };
    
    return service;
});