<!DOCTYPE html>

<html lang="en">


<head>

<meta charset="utf-8">

<meta name="viewport" content="width=devide-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"></link>

</head>



<body>
<header>
        @include('layouts.header')
</header>

@include('layouts.nav')
    <div class="container">

@yield('content')

</div>

<footer>
    @include('layouts.footer')

</footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootsrap@5.2.1/js/bootstrap.min.js"></script>


</html>
