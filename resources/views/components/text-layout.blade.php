<!DOCTYPE html>
<html lang="en">
<head>

<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-GH5FX43R40');
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="description" content="@yield('description')">

<link rel="apple-touch-icon" sizes="180x180" href="{{url('../img/favicon/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{url('../img/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{url('../img/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{url('../img/favicon/site.webmanifest')}}">
<link rel="mask-icon" href="{{url('../img/favicon/safari-pinned-tab.svg')}}" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">

<link rel="canonical" href="https://www.vexely.com/@yield('slug')">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&display=swap"/>
<link href="{{ asset('css/style.css') }}" rel="stylesheet">

<title>@yield('title') | Vexely</title>
</head>
<body>
    @include('partials._nav2')
    {{$slot}}
</body>
</html>