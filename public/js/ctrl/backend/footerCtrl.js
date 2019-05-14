ngApp.controller('footerCtrl', function ($scope, $myLoader, $myNotify, 
								$footerService, $myBootbox, $myFile, $myAvatar){   
	$scope.data = {

	}

	$scope.getData = {
		avatar: "",
		title: "",
		nameStore: "",
		address: "",
		content: "",
	}
	var processData = {
		getInfo: function(){  
			$myLoader.show();    
			$footerService.action.getInfo(1).then(function(resp){
				$scope.getData = resp.data;
				$myLoader.hide();
			}).catch(function(err){
				console.log(err);
				$myLoader.hide();
			})
		}
	}
	$scope.actions = {
		update: function () {
			$myLoader.show();
			var title = $scope.getData.title;
			var nameStore = $scope.getData.nameStore;
			var address = $scope.getData.address;

			if ($('input[name*=avatar]')[0].files[0] == undefined)
			{
				$scope.data.checkValidate = false;
			}else {
				$scope.getData.avatar = $('input[name*=avatar]')[0].files[0];
			}
			if($scope.getData.avatar == undefined){
				$scope.getData.avatar = $myAvatar.imageDefault();
			}
			var params = $footerService.data.update(title, nameStore, address, $scope.getData.avatar);
			$footerService.action.update(params).then(function(resp){
				if(resp.data){
					$myLoader.hide();
					$myNotify.success("Cập nhật thành công");
					processData.getInfo();
				}
				
			}).catch(function(err){
				console.log(err)
				$myNotify.err("Cập nhật thất bại");
				$myLoader.hide();
			});
		},
		loadImage: function (params) {          
			if(params){
				return $myFile.avatar(params);
			}else{
				return SiteUrl + '/images/new-user-image-default.jpg';
			}
		}               
	}


	processData.getInfo();

});