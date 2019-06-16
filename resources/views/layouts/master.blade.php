<html>
    <head>
        <title>@yield('title')</title>
    </head>
    <body dir="rtl">
        @section('sidebar')
            هنا يوجد محتوى المقطع sidebar في المخطط الرئيس.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>