<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title> @yield('title') </title>
</head>
<body>
<div class="reveal">
    <div class="slides">
        @yield('content')
    </div>
</div>
<script src="./dist/bundle.js"></script>
</body>
</html>