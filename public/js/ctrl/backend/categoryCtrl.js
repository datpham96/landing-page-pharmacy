ngApp.controller('categoryCtrl', function ($scope, $myLoader, $myNotify, $categoryService, $myBootbox){   
	$scope.domData;
	$scope.formData;
	
	$scope.data = {
		list: []
	}
    $scope.dataSingle = {};
	$scope.filter = {
        freeText:''
    } 
    var processData = {
    	getList: function(){  
            $myLoader.show();
            var params = $categoryService.data.list($scope.filter.freeText);       
    		$categoryService.action.list(params).then(function(resp){
    			$scope.data.list = resp.data;
                $myLoader.hide();
    		}).catch(function(err){
    			console.log(err);
    		})
    	}
    }
    $scope.actions = {
        filter: function(){
            processData.getList();
        },
        delete: function(id){
            $myBootbox.confirm('Bạn có muốn xóa không?', function (result) {
                if (result) {
                    $categoryService.action.delete(id).then(function(resp){
                        if(resp.status){
                            $myNotify.success('Xóa chuyên mục thành công!');
                        }else{
                            $myNotify.err('Xóa chuyên mục thất bại!');
                        }
                        $myLoader.hide();
                        $($scope.domData).modal('hide');
                        processData.getList();
                    }).catch(function(err){
                        $($scope.domData).modal('hide');
                        $myNotify.err('Xóa chuyên mục thành công!');
                        $myLoader.hide();
                    });
                }
            })
        }
        
    }

    $scope.$watch('filter.freeText', function(newVal, oldVal){
        $myLoader.hide();
        processData.getList();
    });	

    processData.getList();
});