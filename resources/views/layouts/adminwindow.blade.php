<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Image Gallery</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="{{asset('assets')}}/admin2/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin2/css/custom.css" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <![endif]-->
</head>


@section('title','Content Image List')

<body class="dashboard dashboard_1">
<div class="full_container">
    <div class="inner_container">


        <div id="content">
            
            <div class="midde_cont">
            @yield('content')


            @yield('foot')

            </div>
        </div>
    </div>
</div>
<script src="{{asset('assets')}}/admin2/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin2/js/popper.min.js"></script>
<script src="{{asset('assets')}}/admin2/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="{{asset('assets')}}/admin2/js/animate.js"></script>
<!-- select country -->
<script src="{{asset('assets')}}/admin2/js/bootstrap-select.js"></script>
<!-- owl carousel -->
<script src="{{asset('assets')}}/admin2/js/owl.carousel.js"></script>
<!-- chart js -->
<script src="{{asset('assets')}}/admin2/js/Chart.min.js"></script>
<script src="{{asset('assets')}}/admin2/js/Chart.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin2/js/utils.js"></script>
<script src="{{asset('assets')}}/admin2/js/analyser.js"></script>
<!-- nice scrollbar -->
<script src="{{asset('assets')}}/admin2/js/perfect-scrollbar.min.js"></script>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<script>
    var ps = new PerfectScrollbar('#sidebar');
</script>
<!-- custom js -->
<script src="{{asset('assets')}}/admin2/js/custom.js"></script>
<script src="{{asset('assets')}}/admin2/js/chart_custom_style1.js"></script>
</body>
</html>