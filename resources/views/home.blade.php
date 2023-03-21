<html lang="en" class="no-js">
<head>
    <meta charset="utf-8"/>
    <title>Галерея</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!--styles-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container">
        <header class="d-flex justify-content-center py-3">
            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Главная</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Функции</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Ценообразование</a></li>
                <li class="nav-item"><a href="#" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="#" class="nav-link">О нас</a></li>
            </ul>
        </header>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($photos as $photo)
                @csrf
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ isset($photo['urls']['regular']) ? $photo['urls']['regular'] : '' }}" alt="{{ isset($photo['alt_description']) ? $photo['alt_description'] : '' }}">
                        <div class="card-body">
                            <p class="card-text">{{ isset($photo['description']) ? $photo['description'] : '' }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ isset($photo['user']['name']) ? $photo['user']['name'] : '' }}</small>
                                <small class="text-muted">{{ isset($photo['created_at']) ? $photo['created_at'] : ''}}</small>
                            </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
