@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Your published ads !</h2>
        </div>
    </div>

    @foreach ($myads as $myad)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <form id="delete-form" action="/deletead" method="POST">
                            @csrf
                            <input type="hidden" id="id_product" name="id_product" value="{{ $myad->id }}">
                        </form>

                        <form method="POST" action="/editad" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">{{ $myad->updated_at }}</div>
                                <div class="card-body">
                                    <input type="hidden" id="id_product" name="id_product" value="{{ $myad->id }}">

                                    <div class="form-group row">
                                        <span class="col-md-9">
                                            <a class="dropdown-item col-md-2" href="/deletead"
                                                onclick="event.preventDefault();
                                                document.getElementById('delete-form').submit();">Delete</a>
                                        <span>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edit_title" class="col-md-4 col-form-label text-md-right">Title</label>
                                        <div class="col-md-6">
                                            <input type="text" name="edit_title" id="edit_title" minlength="2" maxlength="20" class="form-control" required value="{{ $myad->title }}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edit_description" class="col-md-4 col-form-label text-md-right">Description</label>
                                        <div class="col-md-6">
                                            <input type="textarea" name="edit_description"  minlength="10" maxlength="200" id="edit_description" class="form-control" required value="{{ $myad->description }}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edit_photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                                        <div class="col-md-6">
                                            <input type="file" name="edit_photo" id="edit_photo"/>
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <label for="edit_price" class="col-md-4 col-form-label text-md-right">Price (€)</label>
                                        <div class="col-md-2">
                                            <input type="number" name="edit_price"  min="1" max="5000" id="edit_price" class="form-control" required value="{{ $myad->price }}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="edit_contact" class="col-md-4 col-form-label text-md-right">Contact</label>
                                        <div class="col-md-6">
                                            <input type="email" name="edit_contact" id="edit_contact" class="form-control" required value="{{ $myad->contact }}"/>
                                        </div>
                                    </div><br>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-5">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection