<!DOCTYPE html>
<html lang="en">
	<head>
        <!-- META -->
        @include('website.includes.meta')
        <!-- /META -->

		<title>CreativeFolders | Search 1000 Folders Icons For Windows PC</title>

        <!-- PRE_STYLES -->
        @stack('pre_styles')
        <!-- /PRE_STYLES -->

        <!-- GLOBAL-STYLES -->
        @include('website.includes.styles')
        <!-- /GLOBAL-STYLES -->

        <!-- POST-STYLES -->
        @stack('post_style')

    </head>
	<body>

        <!-- HEADER -->
        @include('website.includes.header')
        <!-- /HEADER -->

        <!-- DYNAMIC-CONTENT -->
        @yield('content')
        <!-- /DYNAMIC-CONTENT -->
		
		<!-- FOOTER -->
		@include('website.includes.footer')
		<!-- /FOOTER -->

        <!-- PRE-SCRIPT -->
        @stack('pre_script')
        <!-- /PRE-SCRIPT -->

        <!-- GLOBAL-SCRIPT -->
        @include('website.includes.scripts')
        <!-- /GLOBAL-SCRIPT -->

        <!-- POST-SCRIPT -->
        @yield('post_script')
        <!-- /POST-SCRIPT -->

	</body>
</html>
