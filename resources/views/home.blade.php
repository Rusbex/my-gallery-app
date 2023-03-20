@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($photos as $photo)
                @csrf
                <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top" src="{{ $photo['urls']['regular'] }}" alt="{{ $photo['alt_description'] }}">
                        <div class="card-body">
                            <p class="card-text">{{ $photo['description'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <small class="text-muted">{{ $photo['user']['name'] }}</small>
                                <small class="text-muted">{{ $photo['created_at'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
