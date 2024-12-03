@extends('admin.layouts.admin')  <!-- Admin layout istifadə edin -->

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Yeni Blog Əlavə et</h1>

        <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Başlıq</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Məzmun</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Şəkil</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Əlavə et</button>
        </form>
    </div>
@endsection

