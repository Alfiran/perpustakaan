<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>@yield('title') - Perpustakaan</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, member-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href={{asset('assets/css/bootstrap.min.css')}} rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href={{asset('assets/css/animate.min.css')}} rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href={{asset('assets/css/light-bootstrap-dashboard.css')}} rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href={{asset('assets/css/demo.css')}} rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href={{asset('assets/css/pe-icon-7-stroke.css')}} rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/sweetalert.css')}}>
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/select2.min.css')}}>
    
@yield('styles')
</head>

<body>

    <div class="wrapper">
        
        @include('partials.sidebar')
        <div class="main-panel">
           
        @include('partials.navbar')

            <div class="content">
                 @yield('content')
            </div>


           @include('partials.footer')
        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src={{asset('assets/js/jquery-1.10.2.js')}} type="text/javascript"></script>
<script src={{asset('assets/js/bootstrap.min.js')}} type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src={{asset('assets/js/bootstrap-checkbox-radio-switch.js')}}></script>

<!--  Charts Plugin -->
<script src={{asset('assets/js/chartist.min.js')}}></script>

<!--  Notifications Plugin    -->
<script src={{asset('assets/js/bootstrap-notify.js')}}></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src={{asset('assets/js/light-bootstrap-dashboard.js')}}></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src={{asset('assets/js/demo.js')}}></script>

<script src={{asset('assets/js/sweetalert.min.js')}}></script>

<script src={{asset('assets/js/select2.min.js')}}></script>

<script>
    $(document).ready(function(){
        var pathname = window.location.pathname;
        console.log('url path =>',pathname);
        switch (pathname) {
            case '/':
                $('#nav-list-transaction').removeClass('active');
                $('#nav-list-book').removeClass('active');
                $('#nav-list-member').removeClass('active');
                $('#nav-dashboard').addClass('active');
                break; 
            case '/transactions':
            case '/transactions/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-book').removeClass('active');
                $('#nav-list-member').removeClass('active');
                $('#nav-list-transaction').addClass('active');
                break; 
            case '/books':
            case '/books/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-transaction').removeClass('active');
                $('#nav-list-member').removeClass('active');
                $('#nav-list-book').addClass('active');
                break;  
            case '/members':
            case '/members/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-transaction').removeClass('active');
                $('#nav-list-book').removeClass('active');
                 $('#nav-list-member').addClass('active');
                break; 
            case '/users':
            case '/users/create':
                $('#nav-dashboard').removeClass('active');
                $('#nav-list-transaction').removeClass('active');
                $('#nav-list-book').removeClass('active');
                $('#nav-list-member').removeClass('active');
                $('#nav-list-user').addClass('active');
                break;  
            default: 
                text = "Looking forward to the Weekend";
        }
    });
</script>

@yield('scripts')
</html>