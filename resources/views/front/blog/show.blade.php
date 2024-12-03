@extends('front.layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-center mt-5 text-center">
        <h1 class="mb-4" style="font-size: 2.5rem;">{{ $blog->title }}</h1>
        <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="mb-4" style="width: 60%; height: auto;">
        <p class="mt-3" style="font-size: 1.2rem; line-height: 1.6; width: 60%;">{{ $blog->content }}</p>
        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">Geri Qayıt</a>
    </div>
@endsection


<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .container h1 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .container img {
        width: 60%;
        height: auto;
        margin-bottom: 20px;
    }

    .container p {
        font-size: 1.2rem;
        line-height: 1.6;
        width: 60%;
        margin-bottom: 20px;
    }
</style>
