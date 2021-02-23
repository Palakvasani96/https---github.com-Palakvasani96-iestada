<!DOCTYPE html>
<html lang="en">
    <head>
        @include('website.includes.head') 
    </head>
    <body>
        @include('website.includes.header_menu')
        @yield('content')
        @include('website.includes.footer')
    </body>
    @include('website.includes.footer_js')
</html>