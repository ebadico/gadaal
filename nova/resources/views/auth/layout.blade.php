<!DOCTYPE html>
<html lang="en" class="h-full font-sans">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NRC Wash App</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('/nova-assets/app.css') }}">
=======
    <link rel="stylesheet" href="{{ mix('app.css', 'nova-assets') }}">
>>>>>>> 4356d8bf7b1edc7b0c182b9e1a519ff606eac5fb
</head>
<body class="bg-40 text-black h-full">
    <div class="h-full">
        <div class="px-view py-view mx-auto">
            @yield('content')
        </div>
    </div>
</body>
</html>
