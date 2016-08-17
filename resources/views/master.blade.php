<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="{{ $description or get_bloginfo('description') }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>{{ $title or get_bloginfo('title') }}</title>

    <!--[if lte IE 10]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <!--[if lte IE 10]><script src="https://cdn.polyfill.io/v2/polyfill.min.js" type="text/javascript"></script><![endif]-->
    <!--[if lte IE 10]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
    <!--[if lte IE 10]><script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" type="text/javascript"></script><![endif]-->

    {{ wp_head() }}

    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">

    @yield('head')
</head>
<body>

    {{ wp_nav_menu([
        'container' => 'nav',
    ])  }}

    @yield('body')


    {{ wp_footer() }}

    <script src="{{ asset('js/app.js')  }}"></script>
</body>
</html>