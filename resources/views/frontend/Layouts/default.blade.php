<!DOCTYPE html>
<html>
<head>
    <title> @yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @includeif('frontend.Layouts.partial._css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ url('') }}/images/phamarcy-logo.png" type="image/jpg" >
    @includeif('frontend.Layouts.partial._angular') 
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var SiteUrl = '{{url("/")}}';

    </script>
    <script type="text/javascript" src="{{ url('') }}/js/directives/frontend/modal/contactModal.js"></script>
    <script type="text/javascript" src="{{ url('') }}/js/factory/service/frontend/contactService.js"></script>

    <!-- include ctrl -->
    <script type="text/javascript" src="{{ url('') }}/js/ctrl/frontend/contactCtrl.js"></script>

</head>
<body ng-app="ngApp" style="background-color: #fff" ng-cloak ng-controller="contactCtrl">

    @includeif('frontend.Layouts.partial._header')               
    @includeif('frontend.Layouts.partial._banner')               

    <div class="content-product">
        <div class="container-fluid">             
            @yield('content')
        </div>
    </div>
    

    @yield('myJs')
    @includeif('frontend.Layouts.partial._modalLoader')
    @includeif('frontend.Layouts.partial._js')
    @includeif('frontend.Layouts.partial._footer')
    <contact-modal modal-dom="modalDom" form-data ret-func="actions.saveHandle(status)"></contact-modal>
    <script>
        $(function(){
            setTimeout(function(){
                $("#showModal").modal("show");
            }, 5000);            
        })
    </script>
</body>

</html>