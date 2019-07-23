<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!--CSS của bootstrap-->
    <link href=" {{ asset('vendor/bootstrap/css/bootstrap.css')}}" type="text/css" rel="stylesheet"/>
    <link href=" {{ asset('css/style.css')}}" type="text/css" rel="stylesheet"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3" id="logo">
                LOGO công ty
            </div>
            <div class="col-md-9" id="company-name">
                Công ty ABC
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="sidebar">
            </div>
            <div class="col-md-9" id="content">@yield('content');
            </div>
        </div>
        <div class="row">
            <div class="col-md-12" id="footer">giangpro</div>
        </div>
    </div>
    <!--JS của JQUERY-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <!--JS của popper-->
    <script src="{{asset('vendor/popper/popper.min.js')}}"></script>
    <!--Javascript của bootstrap-->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.js')}}"></script>

</body>
</html>