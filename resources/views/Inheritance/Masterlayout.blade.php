<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chandan - @yield('titile')</title>
    <link rel="stylesheet" href="/css/inhert.css">
</head>
<body>

    <!-- Header -->
    <header>
        <h1>Hello Chandan</h1>
        <nav>
            <a href="/Inheritance/about">About</a>
            <a href="/Inheritance/post">Post</a>
            <a href="/Inheritance/detail">Detail</a>
        </nav>
    </header>

    <!-- Main Layout -->
    <div class="container">

        <!-- Sidebar -->
        <aside class="sidebar">
            @section('sidebar')
             <h3>Menu</h3>
            <a href="/Inheritance/about">About</a>
            <a href="/Inheritance/post">Post</a>
            <a href="/Inheritance/detail">Detail</a>
            @show
        </aside>

        <!-- Content -->
        @hasSection('content')
          @yield('content')
        @else
         <h2>No Content Found</h2>
        @endif
    </div>

    <!-- Footer -->
    <footer></footer>

</body>
</html>