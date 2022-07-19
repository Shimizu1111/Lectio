<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class LectioController extends Controller
{
    public function top() {
        return view('lectio.top');
    }

    public function favoriteBook() {
        // TODO: ログインしているユーザーを画面に表示
        // TODO: bookAPIを利用して一覧取得を行う
        $books = Book::where('book_status', 'favorite')
            ->where('is_deleted', false)
            ->get();
        return view('lectio.favorite_book')
            ->with('books', $books);
    }

    public function createFavoriteBook() {
        // TODO: ログインしているユーザーを画面に表示
        return view('lectio.create_favorite_book');
    }

    public function createFavoriteBookExec() {
        // TODO: ログインしているユーザーを画面に表示
        // TODO: bookAPIを利用して新規作成処理を行う
    }
}
