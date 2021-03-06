
<!doctype html>
<html>
<head>
    @include('partials.head')
    <link href="css/layout.css" rel="stylesheet" type="text/css">
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#dtUsers').DataTable({
            "pageLength": 10,
            "pagingType": "full_numbers"
        });
        $('#dtUsers').removeClass( 'display' ).addClass('table table-striped table-bordered');
    });
</script>
</body>
</html>
