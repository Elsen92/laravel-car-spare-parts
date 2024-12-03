@extends('admin.layouts.admin')

@section('content')
    <div class="container my-5">
        <h2>Ehtiyat Hissəsini Redaktə Et</h2>

        <form action="{{ route('admin.spare_parts.update', $sparePart->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Adı</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $sparePart->name) }}" required>
            </div>

            <div class="form-group">
                <label for="car_model">Avtomobil Modeli</label>
                <input type="text" name="car_model" id="car_model" class="form-control" value="{{ old('car_model', $sparePart->car_model) }}" required>
            </div>

            <div class="form-group">
                <label for="product_code">Məhsul Kodu</label>
                <input type="text" name="product_code" id="product_code" class="form-control" value="{{ old('product_code', $sparePart->product_code) }}" required>
            </div>

            <div class="form-group">
                <label for="price">Qiymət</label>
                <input type="number" name="price" id="price" class="form-control" value="{{ old('price', $sparePart->price) }}" required>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Yenilə</button>
        </form>
    </div>
@endsection
