ngApp.controller('layerCtrl', function ($scope, $myLoader, $myNotify, 
	$layerService, $myBootbox, $myFile, 
	$myAvatar, $myFunc){   
	$scope.data = {

	}

	$scope.type = $myFunc.getUrlVars()["type"];

	$scope.getData = {
		titleMax: "",
		type: "",
		content: "",
		contentOne: "",
		contentTwo: "",
		contentThree: "",
		contentFour: "",
		avatar: "",
		titleContentOne: "",
		titleContentTwo: "",
		titleContentThree: "",
		titleContentFour: "",
		avatarOne: "",
		avatarTwo: "",
		avatarThree: "",
		avatarFour: "",
	}
	var processData = {
		getInfo: function(){  
			$myLoader.show();    
			$layerService.action.getInfo($scope.type).then(function(resp){
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
			var titleMax = $scope.getData.titleMax;
			var titleMin = $scope.getData.titleMin;
			var content = $scope.getData.content;
			var contentOne = $scope.getData.contentOne;
			var contentTwo = $scope.getData.contentTwo;
			var contentThree = $scope.getData.contentThree;
			var contentFour = $scope.getData.contentFour;
			var titleContentOne = $scope.getData.titleContentOne;
			var titleContentTwo = $scope.getData.titleContentTwo
			var titleContentThree = $scope.getData.titleContentThree;
			var titleContentFour = $scope.getData.titleContentFour;

			if ($('input[name*=avatar]') && $('input[name*=avatar]')[0].files[0] == undefined)
			{
				$scope.getData.avatar = $myAvatar.imageDefault();
			}else {
				$scope.getData.avatar = $('input[name*=avatar]')[0].files[0];
			}
			if($scope.type == "layerFive"){
				if ($('input[name*=avatarOne]') && $('input[name*=avatarOne]')[0].files[0] == undefined)
				{
					$scope.getData.avatarOne = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarOne = $('input[name*=avatarOne]')[0].files[0];
				}

				if ($('input[name*=avatarTwo]') && $('input[name*=avatarTwo]')[0].files[0] == undefined)
				{
					$scope.getData.avatarTwo = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarTwo = $('input[name*=avatarTwo]')[0].files[0];
				}

				if ($('input[name*=avatarThree]') && $('input[name*=avatarThree]')[0].files[0] == undefined)
				{
					$scope.getData.avatarThree = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarThree = $('input[name*=avatarThree]')[0].files[0];
				}

				if ($('input[name*=avatarFour]') && $('input[name*=avatarFour]')[0].files[0] == undefined)
				{
					$scope.getData.avatarFour = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarFour = $('input[name*=avatarFour]')[0].files[0];
				}
			}

			if($scope.type == "layerSix"){
				if ($('input[name*=avatarOne]') && $('input[name*=avatarOne]')[0].files[0] == undefined)
				{
					$scope.getData.avatarOne = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarOne = $('input[name*=avatarOne]')[0].files[0];
				}

				if ($('input[name*=avatarTwo]') && $('input[name*=avatarTwo]')[0].files[0] == undefined)
				{
					$scope.getData.avatarTwo = $myAvatar.imageDefault();
				}else {
					$scope.getData.avatarTwo = $('input[name*=avatarTwo]')[0].files[0];
				}
			}

			var params = $layerService.data.update(titleMax, $scope.type, titleMin, content,
				contentOne, contentTwo, contentThree,
				contentFour, $scope.getData.avatar, titleContentOne,
				titleContentTwo, titleContentThree, titleContentFour,
				$scope.getData.avatarOne, $scope.getData.avatarTwo, 
				$scope.getData.avatarThree, $scope.getData.avatarFour);
			$layerService.action.update(params).then(function(resp){
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