<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>categories.css">
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
<?php isset($errors) ? print_r($errors) : ''?>

<div id="container">
    <form method="post" action="<?=base_url('admin/categories/').(isset($_GET['edit']) && !empty($_GET['edit']) ? 'edit' : 'add')?>" enctype="multipart/form-data">
        <input type="text" name="category" value="<?=isset($category) ? $category[0]->category : ''?>">
        <input type="hidden" name="id" value="<?=isset($_GET['edit']) && !empty($_GET['edit']) ? $_GET['edit'] : ''?>">
        <button><?=isset($_GET['edit']) && !empty($_GET['edit']) ? 'Edit' : 'Add'?></button>
    </form>
    <div id="categories">
        <table>
            <tr>
                <td></td>
                <td>Categories</td>
                <td></td>
            </tr>
            <?php foreach ($categories as $category) : ?>
                <tr>
                    <td><a href="<?=base_url('admin/categories').'?edit='.$category->id?>"><img src="<?=base_url('public/images/')?>pencil.svg" alt=""></a></td>
                    <td><?=$category->category?></td>
                    <td><a href="<?=base_url('admin/categories/delete/').$category->id?>"><img src="<?=base_url('public/images/')?>delete.svg" alt=""></a></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
</body>
</html>