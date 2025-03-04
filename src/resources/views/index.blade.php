<?php
// 商品データを配列で定義
$products = [
['name' => 'キウイ', 'price' => 800, 'image' => 'kiwi.jpg'],
['name' => 'ストロベリー', 'price' => 1200, 'image' => 'strawberry.jpg'],
['name' => 'オレンジ', 'price' => 850, 'image' => 'orange.jpg'],
['name' => 'スイカ', 'price' => 700, 'image' => 'watermelon.jpg'],
['name' => 'ピーチ', 'price' => 1000, 'image' => 'peach.jpg'],
['name' => 'シャインマスカット', 'price' => 1400, 'image' => 'grape.jpg'],
];
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
        <a class="header__logo" href="/">
            mogitate
        </a>
        </div>
    </header>
<body>
    <div class="container">
        <h1>【商品一覧画面】</h1>
        <div class="search-bar">
            <input type="text" placeholder="検索">
            <button>検索</button>
        </div>
        <div class="product-list">
            <?php foreach ($products as $product): ?>
                <div class="product-item">
                    <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                    <h2><?php echo $product['name']; ?></h2>
                    <p>¥<?php echo number_format($product['price']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>       
    </div>
</body>
</html>