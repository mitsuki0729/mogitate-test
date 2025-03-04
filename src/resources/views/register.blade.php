<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/">
            mogitate
        </a>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>商品登録</h2>
            </div>   
            <form class="form" action="/products/{productId}/update" method="post">
            @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品名</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('name')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">値段</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="price" name="price" placeholder="値段を入力" value="{{ old('price') }}" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
                            @error('price')
                            {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <label class="form__group__label">
                        季節<span class="form__label--required">必須</span>
                    </label>
                    <div class="form__season-inputs">
                        <div class="form__season-option">
                            <label class="form__season-label">
                                <input class="form__season-input" name="season" type="checkbox" id="spring" value="1" {{
                                old('season')==1 || old('season')==null ? 'checked' : '' }}>
                                <span class="form__season-text">春</span>
                                
                                <input class="form__season-input" name="season" type="checkbox" id="sammer" value="2" {{
                                old('season')==2 || old('season')==null ? 'checked' : '' }}>
                                <span class="form__season-text">夏</span>
                                
                                <input class="form__season-input" name="season" type="checkbox" id="autam" value="3" {{
                                old('season')==3 || old('season')==null ? 'checked' : '' }}>
                                <span class="form__season-text">秋</span>
                                <input class="form__season-input" name="season" type="checkbox" id="spring" value="4" {{
                                old('season')==4 || old('season')==null ? 'checked' : '' }}>
                                <span class="form__season-text">冬</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">商品説明</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="商品の説明を入力"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">登録</button>
                </div>
                </div>
            </from>
        </div>
    </main>
</body>
</html>