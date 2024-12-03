@extends('admin.layouts.admin')

@section('content')
    <div class="container my-5">
        <h2>Ehtiyat Hissələri</h2>
        <a href="{{ route('admin.spare_parts.create') }}" class="btn btn-success mb-3">Yeni Ehtiyat Hissəsi Əlavə Et</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Adı</th>
                <th>Model</th>
                <th>Kod</th>
                <th>Qiymət</th>
                <th>Şəkil</th>
                <th>Əməliyyatlar</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($spareParts as $part)
                <tr>
                    <td>{{ $part->name }}</td>
                    <td>{{ $part->car_model }}</td>
                    <td>{{ $part->product_code }}</td>
                    <td>{{ $part->price }} ₼</td>
                    <td>
                        @if ($part->image)
                            <img src="{{ asset('storage/' . $part->image) }}" alt="{{ $part->name }}" style="width: 50px; height: auto;">
                        @else
                            <span>Şəkil Yoxdur</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('admin.spare_parts.edit', $part->id) }}" class="btn btn-warning">Redaktə Et</a>
                        <form action="{{ route('admin.spare_parts.destroy', $part->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bu ehtiyat hissəsini silmək istəyirsinizmi?')">Sil</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
