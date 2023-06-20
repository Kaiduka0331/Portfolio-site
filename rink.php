<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>関連記事</title>
</head>
<body>
  <h1>関連記事</h1>

  <div id="related-articles">
    <!-- 関連記事が表示される場所 -->
    <?php
    // 関連記事のデータ
    $relatedArticles = [
      [
        'title' => '記事1',
        'url' => 'article1.html',
        'image' => 'article1.jpg'
      ],
      [
        'title' => '記事2',
        'url' => 'article2.html',
        'image' => 'article2.jpg'
      ],
      // 他の関連記事を追加
    ];

    // ランダムな関連記事を選択
    $randomIndex = array_rand($relatedArticles);
    $randomArticle = $relatedArticles[$randomIndex];
    ?>

    <a href="<?php echo $randomArticle['url']; ?>">
      <img src="<?php echo $randomArticle['image']; ?>" alt="">
      <h3><?php echo $randomArticle['title']; ?></h3>
    </a>
  </div>
</body>
</html>
