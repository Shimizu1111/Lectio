@extends('lectio.layout.template')

@section('title', '気になる本')

@section('content')
    <div class="container mt-5">
        <div class="float-end">ログインID：</div>
        <h3 class="mb-3" style="text-align: center;">気になる本</h3>

        <div class="mb-5"><a href="/favorite/create" class="btn btn-primary btn-lg" style="color:white;text-decoration:none;">新規作成</a></div>

        <table class="table table-striped">
            <thead class="thead-dark">
                <tr><th>書籍名</th><th>著者名</th><th>出版社</th><th>価格</th><th>日付</th><th colspan="2"></th></tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->publisher }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->registration_date }}</td>
                        <td><a class="btn btn-outline-primary btn-sm" href="">編集</a></td>
                        <td>
                            <form action="" method="post">
                            <button class="delete-action btn btn-outline-danger btn-sm" type="submit">削除</button>
                            <input type="hidden" value="" name="id">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection