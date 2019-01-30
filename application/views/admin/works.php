<!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>works.css">
</head>
<body>
<nav>
    <a id="logo" href="<?=base_url('admin')?>"><img src="<?=base_url('public/images/')?>logo.png"></a>
    <div id="nav-links">
        <a href="<?=base_url('admin/brands')?>">BRANDS</a>
        <a href="<?=base_url('admin/works')?>">REVIEWS</a>
        <a href="<?=base_url('admin/categories')?>">CATEGORIES</a>
        <a href="<?=base_url('admin/products')?>">PRODUCTS</a>
        <a href="<?=base_url('admin/works')?>">WORKS</a>
    </div>
</nav>
<div id="container">
    <h1>Works</h1>
    <div id="works">
        <?php foreach ($works as $work) : ?>
        <div class="work">
            <img src="<?=base_url('public/images/').json_decode($work->images)[0]?>" alt="">
            <?=$work->name?>
            <div class="links">
                <a href="<?=base_url('admin/edit_work').'?edit='.$work->id?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/works/delete/').$work->id?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <?php endforeach; ?>
    </div>
    <?php if($pages > 1) : ?>
        <div id="pages">
            <a class="link" href="<?=base_url('admin/works/').(($page - 1) > 0 ? $page - 1 : 1)?>"><img src="<?=base_url('public\images\\')?>back-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>back.svg" alt=""></a>
            <?php for($i = 1;$i <= $pages;$i++) : ?>
                <a href="<?=base_url('admin/works/').$i?>" class="<?=$i == $page ? 'active' : ''?>"><?=$i?></a>
            <?php endfor ?>
            <a class="link" href="<?=base_url('admin/works/').(($page + 1) > $pages ? $pages : ($page + 1))?>"><img src="<?=base_url('public\images\\')?>next-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>next.svg" alt=""></a>
        </div>
    <?php endif ?>
    <a href="<?=base_url('admin/add_work')?>" id="add" >Add Job</a>
</div>
</body>
</html>