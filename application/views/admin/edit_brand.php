<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>add_edit_brand.css">
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
<?php echo validation_errors(); ?>
<?php isset($error) ? print_r($error) : ''?>
<form method="post" action="<?=base_url('admin/brands/edit')?>" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$brand[0]->id?>">
    <div class="form-group">
        <label for="brand">Brand</label> <input type="text" name="brand" id="brand" value="<?=$brand[0]->brand?>" required>
    </div>
    <div class="form-group">
        <label for="image">Image</label> <input type="file" name="image">
    </div>
    <img src="<?=base_url('public/images/').$brand[0]->image?>" id="old_image">
    <button>Edit</button>
</form>
</body>
</html>