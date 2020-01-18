<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META-TAGS -->
    @include('admin.includes.meta')
    <!-- /META-TAGS -->
    
    <title>Admin Dashboard | Control Everything Over Single Place</title>
    
    <!-- PRE-STYLES -->
    @stack('pre_styles')
    <!-- PRE-StYLES -->

    <!-- GLOBAL-STYLE -->
    @include('admin.includes.styles')
    <!-- /GLOBAL-STYLE -->

    <!-- POST-STYLES -->
    @stack('post_styles')
    <!-- /POST-STYLES -->

</head>

<body class="logo-center fix-header fix-sidebar card-no-border">

    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
        </svg>
    </div>
    <!-- /Preloader -->
    
    <div id="main-wrapper">

        <!-- HEADER -->
        @include('admin.includes.header')
        <!-- /HEADER -->

        <!-- MENU-SIDEBAR -->
        @include('admin.includes.sidebar')
        <!-- /MENU-SIDEBAR -->
        
        <!-- ============================================================== -->
        <!---------------------------- Page wrapper  ------------------------>
        <!-- ============================================================== -->

        <div class="page-wrapper">
            
            <!-- DYNAMIC-PAGE-CONTENT -->
            @yield('content')
            <!-- /DYNAMIC-PAGE-CONTENT -->

            <!-- FOOTER -->
            @include('admin.includes.footer')
            <!-- /FOOTER -->
        </div>
        <!-- ============================================================== -->
        <!---------------------------- /Page wrapper  ------------------------>
        <!-- ============================================================== -->
    </div>

    <!-- PRE-SCRIPT -->
    @stack('pre_scripts')
    <!-- /PRE-SCRIPT -->

    <!-- GLOBAL-SCRIPT -->
    @include('admin.includes.scripts')
    <!-- /GLOBAL-SCRIPT -->

    <!-- POST-SCRIPT -->
    @stack('post_scripts')
    <!-- /POST-SCRIPT -->

</body>

</html>
