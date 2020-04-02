@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Welcome to Free Ads !</h2>
            <p class="col-md-9"></p>
        </div>
    </div>

    <div class="container">
        @foreach($allads as $allad)
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span class="col-md-9">{{ $allad->updated_at }}
                                <span class="offset-md-8">{{ $allad->name }}</span>
                            <span>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="form-group row">
                                <p class="col-md-9">{{ $allad->title }}</p>
                                <p class="col-md-9">{{ $allad->description }}</p>
                                <p class="col-md-9">{{ $allad->price }}.00 €</p>
                                <p>
                                    <a href="mailto:{{ $allad->contact }}" title="{{ $allad->contact }}">Contact seller</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="col-md-9"></p>
        @endforeach
    </div
@endsection
