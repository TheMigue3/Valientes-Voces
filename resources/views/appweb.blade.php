<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voces valientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
     rel="stylesheet">
</head>
<body>
    <!-- incluye Header -->
    @include('partials.header')

    <!-- cambia el contenido-->
    <main class="pb-6">
        @yield('content')
    </main>

     <!-- incluye footer -->
     @include('partials.footer')´

    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">

    </script>
</body>
</html>                                                                                                                                                                                                                                                                                              