<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <nav>
       <x-nav-links></x-nav-links>
    </nav>
    <!-- to show the content after the nav 
    laravel has var called slot 
    -->
    {{ $slot }}
</body>
</html>