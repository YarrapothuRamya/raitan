<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Area</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="">

@include('layouts.adminHeader')

<main class="py-4">
    @yield('content')
</main>

</body>

</html>