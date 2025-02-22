<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Sahaje</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
      rel="stylesheet">
    @vite(['resources/bs5/css/bootstrap.min.css', 'resources/bs5/js/bootstrap.min.js', 'resources/js/app.js' ])
</head>
<body>
    <x-navbar></x-navbar>
    {{$slot}}
</body>
</html>