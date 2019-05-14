ngApp.directive('myCkeditorOne', function($apply) {
    return {
        restrict: 'C',
        require: '?ngModel',
        link: function(scope, element, attrs, ngModel) {
        // if(typeof CKEDITOR.instances != 'undefined'){
        //     for(name in CKEDITOR.instances){
        //         CKEDITOR.instances[name].destroy(false);
        //     }
        // }
         
        var ck = CKEDITOR.replace(element[0], {
            language: 'vi',
            extraPlugins :'pastefromword'
        }); 
        if (!ngModel) return;
        ck.on('instanceReady', function () {
            ck.setData(ngModel.$viewValue);
        });
        function updateModel() {
            scope.$apply(function () {
                ngModel.$setViewValue(ck.getData());
            });
        }
        ck.on('change', updateModel);
        ck.on('key', updateModel);
        ck.on('dataReady', updateModel);

        ngModel.$render = function (value) {
            ck.setData(ngModel.$viewValue);
        };
    }
}
});