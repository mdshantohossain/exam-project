<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('/')}}assets/style.css" />
</head>
<body>

<nav class="navbar navbar-expand bg-black navbar-dark">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{ route('exam') }}" class="nav-link">Exam</a></li>
            <li><a href="{{ route('question') }}" class="nav-link">Make Question</a></li>
            <li><a href="{{ route('result') }}" class="nav-link">Result</a></li>
        </ul>
    </div>
</nav>

@yield('body')

</body>
</html>
