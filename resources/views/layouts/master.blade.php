<!DOCTYPE html>
<html>
<head>
    @include('layouts.head')
</head>

<body>
    <div class="container">
        <div id="header">
            @include('layouts.header')
        </div>
        @yield('content')
        <div id="footer">
            @include('layouts.footer')
        </div>
    </div>
    @yield('myjsfile')
</body>
</html>