<html lang="ru">
<head>
    <meta charset="utf-8"/>
    <title>Gallery-API</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!--styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">О проекте</a></li>
        </ul>
    </header>
</div>
@yield('content')
</body>
</html>
