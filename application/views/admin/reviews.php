<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>reviews.css">
</head>
<body>
<nav>
    <a id="logo" href="<?=base_url('admin')?>"><img src="<?=base_url('public/images/')?>logo.png"></a>
    <div id="nav-links">
        <a href="<?=base_url('admin/brands')?>">BRANDS</a>
        <a href="<?=base_url('admin/reviews')?>">REVIEWS</a>
        <a href="<?=base_url('admin/categories')?>">CATEGORIES</a>
        <a href="<?=base_url('admin/products')?>">PRODUCTS</a>
        <a href="<?=base_url('admin/works')?>">WORKS</a>
    </div>
</nav>
<div id="container">
    <h1>Reviews</h1>
    <div id="reviews">
        <?php foreach ($reviews as $review) : ?>
        <div class="review">
            <img src="<?=base_url('public/images/').$review->image?>">
            <?=$review->name?><br>
            <?=$review->review?>
            <div class="links">
                <a href="<?=base_url('admin/edit_review').'?edit='.$review->id?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/reviews/delete/').$review->id?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <?php endforeach; ?>
        <a href="<?=base_url('admin/add_review')?>" id="add" >Add review</a>
        <?php if($pages > 1) : ?>
            <div id="pages">
                <a class="link" href="<?=base_url('admin/reviews/').(($page - 1) > 0 ? $page - 1 : 1)?>"><img src="<?=base_url('public\images\\')?>back-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>back.svg" alt=""></a>
                <?php for($i = 1;$i <= $pages;$i++) : ?>
                    <a href="<?=base_url('admin/reviews/').$i?>" class="<?=$i == $page ? 'active' : ''?>"><?=$i?></a>
                <?php endfor ?>
                <a class="link" href="<?=base_url('admin/reviews/').(($page + 1) > $pages ? $pages : ($page + 1))?>"><img src="<?=base_url('public\images\\')?>next-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>next.svg" alt=""></a>
            </div>
        <?php endif ?>
    </div>
</body>
</html>