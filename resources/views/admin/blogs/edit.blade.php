@extends('admin.layouts.admin')  <!-- Admin layout istifadə edin -->

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Blogu Redaktə et</h1>

        <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Başlıq</label>
                <input type="text" class="form-control" id="title" name="title" required value="{{ old('title', $blog->title) }}">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Məzmun</label>
                <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $blog->content) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Yeni Şəkil (Opsiyonel)</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                @if($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 100px;">
                @else
                    <p>Şəkil yoxdur</p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Yenilə</button>
        </form>
    </div>
@endsection

