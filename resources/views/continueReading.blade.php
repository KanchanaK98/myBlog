@extends('layouts.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<div class="card mb-3 container">
    <img class="card-img-top" src="{{ asset('images/'.$posts->image) }}" alt="Card image cap">
    <div class="card-body justify-content-center border border-primary">
        <strong class="d-inline-block mb-2 text-primary text-center"><h2 class="mb-0">{{ $posts->title }}</h2></strong>
        <p class="card-text">{{ $posts->description }}</p>
        <p class="card-text"><small class="text-muted">Updated at : {{ date('Y:m:d', strtotime($posts->updated_at))}}</small></p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go Back</a>
    </div>
</div>

    
@endsection