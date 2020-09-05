<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWWWSME - @yield('title') </title>
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{!! asset('css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/app.css') !!}" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script>/* Google Embed API */(function(w,d,s,g,js,fjs){ g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(cb){this.q.push(cb)}}; js=d.createElement(s);fjs=d.getElementsByTagName(s)[0]; js.src='https://apis.google.com/js/platform.js';fjs.parentNode.insertBefore(js,fjs);js.onload=function(){g.load('analytics')};}(window,document,'script'));</script>
    
</head>
<body>

  <!-- Wrapper-->
    <div id="wrapper">

        <!-- Navigation -->
        @include('admin.layouts.navigation')

        <!-- Page wraper -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Page wrapper -->
            @include('admin.layouts.topnavbar')

            <!-- Main view  -->
            @yield('content')

            <!-- Footer -->
            @include('admin.layouts.footer')

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

<script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>

@section('scripts')
<script src="https://apis.google.com/js/platform.js?onload=onLoadCallback" async defer></script>



<script>var GOOGLE_API_CLIENT_ID = '337223120798-17qgt4n3s6k2cer5vtbarsu7of8jcgv3.apps.googleusercontent.com'; </script>

<script src="{!! asset('js/bootboard.0.2.min.js') !!}" type="text/javascript"></script>


@show

</body>
</html>
