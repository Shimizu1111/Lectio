# Lectio

### 環境構築
* Macの場合
```
brew install php@バージョン
```

```
brew install composer
```

```
cd FabulousNight/
```

```
composer install
```

```
cp .env.example .env
```

```
php artisan key:generate
```

```
mysql -uroot
mysql> CREATE DATABASE fabulous_night;
```

<details>
<summary>SQLSTATE[HY000] [2002] Connection refusedのエラーが出た場合のみ行う対応</summary>
```
# mysqlをローカルにインストールしていない場合のみ
brew install mysql
# (mysqlをインストールしてもうまくいかない場合).envファイルのDB_HOSTをlocalhostに変更
```

</details>

```
php artisan migrate
```

```
php artisan db:seed --class=CharacterMasterSeeder
```

```
php artisan serve
```

### ユーザ作成方法
```
php artisan tinker

use App\Models\User;
$user = new User();
$user->name = "username";
$user->book_id = "1";
$user->email = "mail@example.com";
$user->password = Hash::make('password');
$user->save();
```

### 本のデータ作成方法
```
php artisan tinker

use App\Models\Book;
$book = new Book();
$book->user_id = 3;
$book->name = 'この素晴らしい世界に祝福を!';
$book->author = '暁なつめ';
$book->publisher = '角川スニーカー文庫';
$book->price = 700;
$book->book_status = 'favorite';
$book->save();
```