@extends('admin.layouts.admin')

@section('content')
    <div class="container my-5">
        <h2>Yeni Ehtiyat Hissəsi Əlavə Et</h2>

        <form action="{{ route('admin.spare_parts.store') }}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="name">Adı</label>
                <input type="text" name="name" id="name" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="car_model">Avtomobil Modeli</label>
                <input type="text" name="car_model" id="car_model" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="product_code">Məhsul Kodu</label>
                <input type="text" name="product_code" id="product_code" class="form-control" value="" required>
            </div>

            <div class="form-group">
                <label for="price">Qiymət</label>
                <input type="number" name="price" id="price" class="form-control" value="" required>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                <input class="form-control" type="file" name="image" >
            </div>

            <button type="submit" class="btn btn-primary mt-3">Əlavə Et</button>
        </form>
    </div>
@endsection

