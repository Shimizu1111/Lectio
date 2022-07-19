@extends('lectio.layout.template')

@section('title', 'トップ')

@section('content')
    <div class="container mt-5">
        <div class="float-end">ログインID：</div>
        <h3 class="mb-3" style="text-align: center;">トップ画面</h3>
        <div class="d-grid gap-2 my-5">
            <a href="/" class="btn btn-lg btn-secondary mb-5 w-50 mx-auto">読みたい本</a>
            <a href="/" class="btn btn-lg btn-secondary mb-5 w-50 mx-auto">読んだ本</a>
            <a href="/favorite" class="btn btn-lg btn-secondary mb-5 w-50 mx-auto">お気に入りの本</a>
        </div>
    </div>
@endsection