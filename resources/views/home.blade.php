@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header" style="text-align: center">
            Contents
            </div>
            <div class="card-body">
                @foreach ($data as $item)
                <div>
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <a href="#" class="btn btn-primary">View</a><hr>
                </div><br>
                    
                @endforeach
            </div>
        </div>
    </div>

@endsection