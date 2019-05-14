<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-dom='modalDom'>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">@{{title}}</h5>
            </div>
            <div class="modal-body">
                <div class=" panel-primary">
                    <!--Panel body-->
                    <div class="panel-body">
                        <form class="form-horizontal" data-parsley-validate ng-dom="formData" enctype="multipart/form-data" ng-enter="actions.update()">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tên ảnh: </label>
                                <div class="col-sm-9">
                                    <input autocomplete="off" type="text" placeholder="Họ và tên" class="form-control" ng-model="getData.name" id="demo-is-inputsmall" required>
                                    <div style="margin-top: 5px; color: red;" ng-repeat="err in errors.name">@{{err}}</div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Đường dẫn: </label>
                                <div class="col-sm-9">
                                    <input autocomplete="off" type="text" placeholder="Đường dẫn" class="form-control input-sm"  ng-model="getData.link" id="demo-is-inputsmall" required >
                                    <div style="margin-top: 5px; color: red;" ng-repeat="err in errors.link">@{{err}}</div>
                                </div>
                            </div> -->
                           
                            <div class="form-group">
                                <label for="demo-vs-definput" class="control-label col-sm-3">Ảnh đại diện: </label>
                                <div class="col-md-8">
                                    <img id="blah" class="avatar" ng-src="@{{ actions.loadImage(getData.avatar) }}" alt="" style="width: 140px; height: 150px;">
                                    <br>
                                    <div>
                                        <button class="cat-button-file" onclick="$('#upload-user').click()">Chọn file</button>
                                        <input onchange="readURL(this);" type="file" name="avatar" id="upload-user" style="display: none;" ng-model="getData.avatar">
                                    </div>
                                    <p class="text-danger" style="margin-top: 5px;" ng-repeat="er in errors.avatar">
                                        @{{ er }}
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" ng-click="actions.update()">Cập nhật</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal User