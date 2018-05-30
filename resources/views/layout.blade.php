
<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('partials.header')
    </header>

    <div id="main" class="row">

            @yield('content')

    </div>

    <footer class="row">
      @include('partials.footer')
    </footer>

</div>
</body>
</html>
