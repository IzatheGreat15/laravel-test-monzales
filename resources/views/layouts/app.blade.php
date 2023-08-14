<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>

    <!-- Include Tailwind CSS via CDN -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-slate-800">
    <main>
        @yield('content')
    </main>
</body>
</html>