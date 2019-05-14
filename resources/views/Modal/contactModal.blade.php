<div class="modal fade" id="showModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" ng-dom='modalDom'>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Đăng ký tư vấn</h5>
            </div>
            <div class="modal-body">
                <div class=" panel-primary">
                    <!--Panel body-->
                    <div class="panel-body">
                        <form class="form-horizontal" id="formData" data-parsley-validate enctype="multipart/form-data" ng-enter="actions.handleBtn()">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Họ tên: </label>
                                <div class="col-sm-9">
                                    <input autocomplete="off" type="text" placeholder="Họ tên" class="form-control input-sm" ng-model="getData.name" id="demo-is-inputsmall" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Điện thoại: </label>
                                <div class="col-sm-9">
                                    <input autocomplete="off" type="text" placeholder="Điện thoại" class="form-control input-sm" ng-model="getData.phone" id="demo-is-inputsmall" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Tình trạng da: </label>
                                <div class="col-sm-9">
                                    <input autocomplete="off" type="text" placeholder="Tình trạng da" class="form-control input-sm" ng-model="getData.skinCondition" id="demo-is-inputsmall" required>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" ng-click="actions.handleBtn()">Đăng ký</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal User