<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://matcha.mizu.sh/matcha.css">
    <title> {{ $title }} </title>
</head>

<body>
    <!-- naviagation menu -->
    <menu>
        <li> <a href="/">Home</a></li>
        <li> <a href="/form">form</a></li>
        <li> <a href="/contact">contact</a></li>
        <li> <a href="/loginform">login</a></li>
    </menu>



    {{ $slot }}


</body>

</html>