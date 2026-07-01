<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield("title", "Cloud-Verse")</title>

</head>

<body class="bg-gray-950 text-white">

    @include("partials.header")

    @yield('content')


    @include("partials.footer")

    @include("partials.scripts")
    </body>
</html>