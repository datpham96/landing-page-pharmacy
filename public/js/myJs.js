// Load avatar khong duoc xoa
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah')
                .attr('src', e.target.result)
                .width(140)
                .height(150);
        };

        reader.readAsDataURL(input.files[0]);
    }

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#max-size')
                .attr('src', e.target.result)
                .width('')
                .height('');
        };

        reader.readAsDataURL(input.files[0]);
    }

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img-layer')
                .attr('src', e.target.result)
                .width('440')
                .height('400');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlOne(input){
     if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgLoadOne')
                .attr('src', e.target.result)
                .width('120')
                .height('120');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlTwo(input){
     if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgLoadTwo')
                .attr('src', e.target.result)
                .width('120')
                .height('120');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlThree(input){
     if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgLoadThree')
                .attr('src', e.target.result)
                .width('120')
                .height('120');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlFour(input){
     if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgLoadFour')
                .attr('src', e.target.result)
                .width('120')
                .height('120');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function readUrlAvatar(input){
     if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imgLoadAvatar')
                .attr('src', e.target.result)
                .width('')
                .height('');
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
	var height = $('.cat-admin').height();
	$('#mainnav').css("padding-top",height);

});
