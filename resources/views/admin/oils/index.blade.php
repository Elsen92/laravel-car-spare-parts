
@extends('admin.layouts.admin')

@section('content')
    <h1>Yağlar</h1>

    <a href="{{ route('admin.oils.create') }}" class="btn btn-primary mb-3">Yeni Yağ Əlavə Et</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>Brend</th>
            <th>Həcmi</th>
            <th>Türü</th>
            <th>Rəngi</th>
            <th>Qiymət</th>
            <th>images</th>
        </tr>
        </thead>
        <tbody>
        @foreach($oils as $oil)
            <tr>
                <td>{{ $oil->brand }}</td>
                <td>{{ $oil->volume }} L</td>
                <td>{{ $oil->type }}</td>
                <td>{{ $oil->color }}</td>
                <td>{{ $oil->price }} AZN</td>
                <td>
                    @if($oil->image)
                        <img src="{{ Storage::url($oil->image) }}" alt="Şəkil" width="50">
                    @else
                        N/A
                    @endif
                </td>


                <td>
                    <form action="{{ route('admin.oils.destroy', $oil->id) }}" method="POST" onsubmit="return confirm('Əminsiniz ki, silmək istəyirsiniz?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Sil</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
