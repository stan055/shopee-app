@extends('layouts.app')

@section('content')
    <div class="container pt-2 pb-2">
        <div class="text-center p-2">
            <h1>Create Product</h1>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form action="/product" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control" id="name" aria-describedby="nameHelp" required>
                    </div>
                    <div class="form-group">
                      <label for="brand">Brand</label>
                      <input type="text" name="brand" class="form-control" id="brand" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" id="price" required>
                    </div>
                    <div class="form-group">
                        <label for="body">Text Description</label>
                        <textarea name="body" class="form-control" id="body" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image_path">Image Url</label>
                        <input type="text" name="image_path" class="form-control" id="image_path" required
                        placeholder="http://image-path/123.com" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-sm-3"></div>


        </div>
    </div>
@endsection
