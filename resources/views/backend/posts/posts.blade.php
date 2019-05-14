
    <div id="page-head">
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow"> Quản lý bài viết</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->
</div>
<div class="col-md-12">
    <div class="panel panel-success">
        <div class="panel-body " >
            <div class="row form-group">
                <div class="col-md-12">
                    <div style="margin-top: 6px">
                        <label class="cat-email">Tìm kiếm theo tên bài viết</label>
                        <input placeholder="Tìm kiếm theo tên bài viết" type="text" class="form-control" ng-enter="actions.filter()"  ng-model="filter.freeText">
                    </div>
                </div>
            </div>
            <div class="row cat-margin" >
                <div class="col-md-12 form-group" align="right" text-align="right">
                    <a href="#/insert" class="btn btn-primary btn-md" style="margin-bottom: 5px;"><i class="fa fa-plus fa-lg cat-fa-del" aria-hidden="true" ></i>Thêm bài viết
                    </a>
                </div>
            </div>
            <div class="panelContact">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên sản phẩm</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Ảnh</th>
                            <th style="width: 105px;">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="(key, val) in data.list">
                            <td>@{{ actions.isSTT(key + 1) }}</td>
                            <td>@{{ val.name }}</td>
                            <td>@{{ val.description }}</td>
                            <td>
                                <img style="width: 80px" ng-src="{{url('')}}/@{{ val.avatar }}" alt="@{{ val.name }}">
                            </td>
                            <td>
                                <a href="#/update/@{{ val.id }}"><i ng-click="actions.showModal(contact)" class="fa fa-pencil-square-o btn btn-info btn-icon btn-circle" aria-hidden="true"></i></a>
                                <i ng-click="actions.delete(val.id)" class="btn btn-danger btn-icon btn-circle  fa fa-times" aria-hidden="true"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="row text-center">
                     <ul class="pagination" >
                         <div paging
                              page="paging.current_page" 
                              page-size="paging.per_page" 
                              total="paging.total"
                              paging-action="actions.changePage(page)"
                              >
                         </div>  
                     </ul>
                 </div>
            </div>
        </div>
    </div>    
</div>
