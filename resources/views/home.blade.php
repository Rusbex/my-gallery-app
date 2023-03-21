@extends('layout')
@section('content')
<main>
    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($photos as $photo)
                    @csrf
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="{{ isset($photo['urls']['regular']) ? $photo['urls']['regular'] : '' }}" alt="{{ isset($photo['alt_description']) ? $photo['alt_description'] : '' }}">
                        <div class="card-body">
                            <p class="card-text">{{ isset($photo['description']) ? $photo['description'] : '' }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ isset($photo['user']['name']) ? $photo['user']['name'] : '' }}</small>
                                <small class="text-muted">{{ isset($photo['created_at']) ? $photo['created_at'] : ''}}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</main>
@endsection





