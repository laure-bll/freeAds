@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <form method="POST" action="/createad" enctype="multipart/form-data">
                @csrf

                    <div class="card-header">Let's create a new ad !</div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label for="create_title" class="col-md-4 col-form-label text-md-right">Title</label>
                                <div class="col-md-6">
                                    <input type="text" name="create_title" id="create_title" minlength="2" maxlength="20" class="form-control" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="create_description" class="col-md-4 col-form-label text-md-right">Description</label>
                                <div class="col-md-6">
                                    <input type="textarea" name="create_description"  minlength="10" maxlength="200" id="create_description" class="form-control" rows="20" cols="10" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="create_photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                                <div class="col-md-6">
                                    <input type="file" name="create_photo" id="create_photo"/>
                                </div>
                            </div>  

                            <div class="form-group row">
                                <label for="create_price" class="col-md-4 col-form-label text-md-right">Price (€)</label>
                                <div class="col-md-3">
                                    <input type="number" name="create_price"  min="1" max="9999" id="create_price" class="form-control" required/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="create_contact" class="col-md-4 col-form-label text-md-right">Contact</label>
                                <div class="col-md-6">
                                    <input type="email" name="create_contact" id="create_contact" class="form-control" required/>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Create Ad</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection