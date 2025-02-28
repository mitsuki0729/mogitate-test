# mogitate-test
# アプリケーション名
もぎたて
## 環境構築
1. git clone https://github.com/mitsuki0729/mogitate-test.git
2. docker-compose up -d --build
3. docker-compose exec php bash
4. composer install
5. .env.exampleファイルから.envを作成し、環境変数を変更
6. php artisan key:generate
7. php artisan migrate
8. php artisan db:seed
## 使用技術(実行環境)
・PHP 8.0
<br>
・Laravel 10.0
<br>
・MySQL 8.0
## URL
・開発環境：http://localhost/
<br>
・phpMyAdmin：http://localhost:8080
