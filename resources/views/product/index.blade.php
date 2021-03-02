@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row m-1 mb-4">
        <a href="product/create">
          <button class="btn btn-success">
            Add Product ->
          </button>
        </a>
      </div>
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Brand/Name</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->brand }}/{{ $product->name }}</td>
                        <td>${{ $product->price }}</td>
                        <td><img src="{{ $product->image_path }}" alt="img" height="100"></td>
                        <td>
                          <form action="/product/{{ $product->id }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" style="border: none; background-color: transparent;">
                              <i class="far fa-trash-alt" style="font-size: 19px; color: red;"></i>
                            </button>
                          </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
