@extends('layout')
@section('content')

<!-- <h1>PAGINA PERFIL</h1></br>

<h3>{{Auth::user()->name}}</h3></br>
<h3>{{Auth::user()->email}}</h3></br> -->
<div class="container-fluid" align="center">
    <h1>Datos de usuario</h1>


{{--<table id="dtUsers" class="display table table-striped table-hover" cellspacing="0" width="100%">--}}
  {{--<tr>--}}
      {{--<th>ID</th>--}}
      {{--<th>Name</th>--}}
      {{--<th>Email</th>--}}
  {{--</tr>--}}

  {{--@foreach ($users as $user)--}}
  {{--@if((Auth::user()->id) == 1)--}}
  {{--<tr>--}}
      {{--<td>{{ $user->id }}</td>--}}
      {{--<td>{{ $user->name }}</td>--}}
      {{--<td>{{ $user->email }}</td>--}}
  {{--</tr>--}}
  {{--@endif--}}
  {{--@endforeach--}}
  {{--@if((Auth::user()->id) != 1)--}}
  {{--<tr>--}}
      {{--<td>{{ Auth::user()->id }}</td>--}}
      {{--<td>{{ Auth::user()->name }}</td>--}}
      {{--<td>{{ Auth::user()->email }}</td>--}}
  {{--</tr>--}}
  {{--@endif--}}
{{--</table>--}}

 <table id="dtUsers" class="display table table-striped table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              @if((Auth::user()->id) == 1)
          <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
          </tr>
              @endif
          @endforeach
          @if((Auth::user()->id) != 1)
              <tr>
                  <td>{{ Auth::user()->id }}</td>
                  <td>{{ Auth::user()->name }}</td>
                  <td>{{ Auth::user()->email }}</td>
              </tr>
            @endif
 </table>
</div>
@stop
@section('script')

@endsection
