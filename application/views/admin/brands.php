<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>brands.css">
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
    <h1>Brands</h1>
    <div id="brands">
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
        <div class="split"></div>
        <div class="brand"><img src="<?=base_url('public/images/')?>cowry-logo.jpg" alt="">
            Cowry Asset Management
            <div class="links">
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a>
                <a href="<?=base_url('admin/edit_brand')?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a>
            </div>
        </div>
    </div>
    <a href="<?=base_url('admin/add_brand')?>" id="add" >Add Brand</a>
</div>
</body>
</html>