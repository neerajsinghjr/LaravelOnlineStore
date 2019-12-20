<!DOCTYPE html>
<html lang="en">

    <head lang="en">

        @include('frontend.includes.meta')

        <title>MeStore</title>

        @include('frontend.includes.styles')

        @yield('pre_styles')

    </head>


    <body class=" ">

    <!--======================================= Header ========================================-->

        @include('frontend.includes.header')

    <!--======================================= Body ==========================================-->

        <div class="content-wrapper">

            @include('frontend.includes.brand')

            @yield('content')

        </div>

    <!--======================================= Footer ========================================-->
        
        @include('frontend.includes.footer')

    <!--======================================= Scripts ========================================-->

        @yield('pre_script')

        @include('frontend.includes.scripts')

        @yield('post_script')

    </body>

</html>