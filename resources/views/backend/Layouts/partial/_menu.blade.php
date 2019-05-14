<!--new menu -->
<nav id="mainnav-container" ng-controller="headerCtrl">
    <div id="mainnav">
        <!--Menu-->
        <!--================================-->
        <div id="mainnav-menu-wrap">
            <div class="nano has-scrollbar">
                <div class="nano-content" tabindex="0" style="right: -17px;">

                    <!--Profile Widget-->
                    <!--================================-->
                    <div id="mainnav-profile" class="mainnav-profile">
                        <div class="profile-wrap text-center">
                            <div class="pad-btm">
                                <img class="img-circle img-md" ng-src="@{{loadImage()}}" alt="Profile Picture">
                            </div>
                            <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                <span class="pull-right dropdown-toggle">
                                    <i class="dropdown-caret"></i>
                                </span>
                                <p class="mnp-name">{{Auth::user()->name}}</p>
                                <!-- <span class="mnp-desc">aaron.cha@themeon.net</span> -->
                            </a>
                        </div>
                        <div id="profile-nav" class="collapse list-group bg-trans">
                            <a href="{{url('')}}/admin/userInfo" class="list-group-item">
                                <i class="demo-pli-male icon-lg icon-fw"></i>
                                Tài khoản
                            </a>

                            <a href="{{url('/logout')}}" class="list-group-item">
                                <i class="demo-pli-unlock icon-lg icon-fw"></i>Đăng xuất 
                            </a>
                        </div>
                    </div>

                    <!--================================-->
                    <!--End shortcut buttons-->


                    <ul id="mainnav-menu" class="list-group">
                        <li class="{{ request()->is('admin/categorys') ? 'active-link' : '' }}">
                            <a href="{{url('')}}/admin/categorys">
                                <!-- <i class="fa fa-user"></i> -->
                                <i class="ti-notepad"></i>
                                <span class="menu-title">
                                    <b>Đơn hàng</b>
                                </span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/links') ? 'active-link' : '' }}">
                            <a href="{{url('')}}/admin/links">
                                <!-- <i class="fa fa-user"></i> -->
                                <i class="ti-image"></i>
                                <span class="menu-title">
                                    <b>Ảnh phản hồi</b>
                                </span>
                            </a>
                        </li> 
                        <li class="{{ request()->is('admin/banner') ? 'active-link' : '' }}">
                            <a href="{{url('')}}/admin/banner">
                                <!-- <i class="fa fa-user"></i> -->
                                <i class="demo-pli-receipt-4"></i>
                                <span class="menu-title">
                                    <b>Banner</b>
                                </span>
                            </a>
                        </li> 
                        <li class="{{ request()->is('admin/layer/*') ? 'active-link' : '' }}">
                            <a href="">
                                <i class="demo-pli-split-vertical-2"></i>
                                <span class="menu-title">Layer</span>
                                <i class="arrow"></i>
                            </a>

                            <!--Submenu-->
                            <ul class="collapse" aria-expanded="false" style="height: 0px;">
                                <li class="{{ request()->is('admin/layer/one') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/one?type=layerOne">Layer 1</a>
                                </li>
                                <li class="{{ request()->is('admin/layer/two') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/two?type=layerTwo">Layer 2</a>
                                </li>
                                <li class="{{ request()->is('admin/layer/three') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/three?type=layerThree">Layer 3</a>
                                </li>
                                <li class="{{ request()->is('admin/layer/four') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/four?type=layerFour">Layer 4</a>
                                </li>
                                <li class="{{ request()->is('admin/layer/five') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/five?type=layerFive">Layer 5</a>
                                </li>
                                <li class="{{ request()->is('admin/layer/six') ? 'active-link' : '' }}">
                                    <a href="{{ url('') }}/admin/layer/six?type=layerSix">Layer 6</a>
                                </li>
                            </ul>
                        </li>  
                        <li class="{{ request()->is('admin/footer') ? 'active-link' : '' }}">
                            <a href="{{url('')}}/admin/footer">
                                <!-- <i class="fa fa-user"></i> -->
                                <i class="demo-pli-boot-2"></i>
                                <span class="menu-title">
                                    <b>Footer</b>
                                </span>
                            </a>
                        </li>                     
                    </ul>
                </div>           
            </div>
        </div>
        <!--================================-->
        <!--End menu-->

    </div>
</nav>