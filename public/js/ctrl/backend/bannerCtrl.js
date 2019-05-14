ngApp.controller('bannerCtrl', function ($scope, $myLoader, $myNotify, 
								$bannerService, $myBootbox, $myFile, $myAvatar){   
	$scope.data = {

	}

	$scope.getData = {
		avatar: ""
	}
	var processData = {
		getInfo: function(){  
			$myLoader.show();    
			$bannerService.action.getInfo(1).then(function(resp){
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
			if ($('input[name*=avatar]')[0].files[0] == undefined)
			{
				$scope.data.checkValidate = false;
			}else {
				$scope.getData.avatar = $('input[name*=avatar]')[0].files[0];
			}
			if($scope.getData.avatar == undefined){
				$scope.getData.avatar = $myAvatar.imageDefault();
			}
			var params = $bannerService.data.update($scope.getData.avatar);
			$bannerService.action.update(params).then(function(resp){
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