@extends('admin.layouts.admin')  <!-- Admin layout istifadə edin -->

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Bloglar</h1>

        <a href="{{ route('admin.blogs.create') }}" class="btn btn-success mb-3">Yeni Blog Əlavə et</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>#</th>
                <th>Başlıq</th>
                <th>Şəkil</th>
                <th>Yaradılma Tarixi</th>
                <th>Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>
                        @if($blog->image)
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" style="width: 100px;">
                        @else
                            N/A
                        @endif
                    </td>

                    <td>{{ $blog->content }}</td>
                    <td>{{ $blog->created_at->format('d-m-Y') }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm">Redaktə et</a>

                        <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bu blogu silmək istəyirsiniz?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>
@endsection

