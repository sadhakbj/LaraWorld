<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"--}}
    {{--crossorigin="anonymous">--}}
</head>
<body>
@include('includes.header')
<div class="container">
    @yield('content')
</div>

<script src="{{ asset('/js/jquery-1.12.0.min.js') }}" > </script>
<script src="{{asset('/js/bootstrap.min.js')}}"> </script>
</body>
</html>