<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LoginDemo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-screen h-screen bg-gray-800 text-white flex justify-center items-center">
    {{ $slot }}
</body>
</html>
