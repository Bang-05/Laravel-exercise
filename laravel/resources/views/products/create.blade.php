<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Create product</title>
    </head>
    <body>
        @extends('layouts.app') @section('content')
        <div class="container mt-5">
            <h2>Thêm sản phẩm</h2>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <label for="">Product name:</label>
                <input type="text" name="name" placeholder="Tên sản phẩm" required class="form-control mb-3" />

                <label for="">Product description:</label>
                <textarea name="description" placeholder="Mô tả" class="form-control mb-3"></textarea>

                <label for="">Product price:</label>
                <input type="number" name="price" placeholder="Giá" required class="form-control mb-3" />

                <label for="">Product quantity:</label>
                <input type="number" name="quantity" placeholder="Số lượng" required class="form-control mb-3" />
                <button type="submit" class="btn btn-success">Lưu</button>
            </form>
        </div>
        @endsection
    </body>
</html>
