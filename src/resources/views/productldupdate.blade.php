<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/productldupdate.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>
    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>商品登録</h2>
            </div>
            <form class="form" action="/products/{productId}/update" method="post">
            @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">商品名</th>
                            <td class="confirm-table__text">
                            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">値段</th>
                            <td class="confirm-table__text">
                            <input type="price" name="price" value="{{ $contact['price'] }}" readonly />
                            </td>
                        </tr>
                        <tr class="confirm-form__row">
                            <th class="confirm-form__label">季節</th>
                            <td class="confirm-form__data">
                            ($contact['season'] == 1)
                            春
                            ($contact['season'] == 2)
                            夏
                            ($contact['season'] == 3)
                            秋
                            ($contact['season'] == 4)
                            冬
                            </td>
                            <input type="hidden" name="season" value="{{ $contact['season'] }}" readonly />
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                            <input type="text" name="content" value="{{ $contact['content'] }}" readonly />
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
