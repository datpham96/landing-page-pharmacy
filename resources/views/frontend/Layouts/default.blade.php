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

</head>
<body ng-app="ngApp" style="background-color: #fff" ng-cloak>
                  
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
</body>

</html>