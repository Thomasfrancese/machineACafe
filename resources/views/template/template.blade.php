<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Machine a café</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" media="screen" href="screen.css" type="text/css" />
    <link rel="stylesheet" media="print" href="print.css" type="text/css" />
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<header>
    @include('template.menu')
</header>
<body>
<section>
    <div class="content">
        <div class="title m-b-md">
            @yield('titre')
        </div>
        @yield('image')
        @yield('content')
    </div>
</section>
<footer>
    @include('template.footer')
</footer>

</body>
</html>