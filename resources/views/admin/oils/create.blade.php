<!-- resources/views/admin/oils/create.blade.php -->

@extends('admin.layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Yeni Yağ Əlavə Et</h1>

        <!-- Form -->
        <form action="{{ route('admin.oils.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="brand">Brend</label>
                <input type="text" class="form-control" id="brand" name="brand" required>
            </div>

            <div class="form-group">
                <label for="volume">Həcmi</label>
                <input type="number" class="form-control" id="volume" name="volume" required>
            </div>

            <div class="form-group">
                <label for="type">Novu</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <div class="form-group">
                <label for="color">Rəngi</label>
                <input type="text" class="form-control" id="color" name="color" required>
            </div>

            <div class="form-group">
                <label for="price">Qiyməti</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="image">Şəkil</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Yadda Saxla</button>
        </form>
    </div>
@endsection

