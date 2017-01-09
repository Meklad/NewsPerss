<!DOCTYPE html>
<html dir="rtl">
    <head>
        <!-- Head Section -->
        @include('includes.head')
    </head>
    <body>
        <!-- Header Section -->
        @include('includes.header')

        <!-- Content Section -->
        @yield('content')

        <!-- Footer Section -->
        @include('includes.footer')

        <!-- JavaScript Section -->
        @include('includes.js')

        <!-- Other Js Files -->
        @yield('js')

    </body>
</html>