<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('css/main.css')}}">
    <script src="{{url("https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js")}}"></script>

</head>
<body>
@include('include.header')
<div class="container">
    @yield('content')</div>
<script type="text/javascript">

</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="{{url("//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js")}}"></script>
<script>
    $.ajaxSetup({
     headers:   {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
    });
</script>
<script src="{{url('js/script.js')}}"  ></script>
</body>
