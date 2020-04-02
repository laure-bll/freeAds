@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="/editprofile">
                @csrf

                    <div class="card-header">My profile</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                <div class="col-md-6">
                                    <input type="text" name="name" id="name" minlength="2" maxlength="12" value="{{ Auth::user()->name }}" class="form-control" autocomplete="name" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                <div class="col-md-6">
                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" required class="form-control" autocomplete="email"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input type="password" name="password" minlength="8" maxlength="16" id="password" required class="form-control" autocomplete="current-password"/>
                                </div>
                            </div>

                            {{-- <div class="form-group row">
                                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div> --}}

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection