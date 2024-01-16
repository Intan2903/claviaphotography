<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <title>Admin Dashboard - Clavia Photography</title>

    @stack('css')

</head>

<body>

    @yield('nav')

    <div class="container-fluid">
        <div class="row content">

            @include('partials.sidebar')

        </div>
    </div>

    @yield('content')


</body>

</html>