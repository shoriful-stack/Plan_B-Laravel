<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href={{asset("css/bootstrap/bootstrap.min.css")}}>
</head>
<body>
    @include("Layout.header")
    @yield("content")
    @include("Layout.footer")
<script src={{asset("js/bootstrap/bootstrap.bundle.js")}}></script>
</body>
</html>