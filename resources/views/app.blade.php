<!-- GENERAL LAYOUT -->
<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        <!-- SECTION CONTENT -->
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            <!-- DISPLAY SECTION CONTENT -->
            @yield('content')
        </div>
    </body>
</html>