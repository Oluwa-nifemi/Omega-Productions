<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>works.css">
</head>
<body>
<nav>
    <a id="logo" href="<?=base_url()?>"><img src="<?=base_url('public\images\\')?>logo.png"></a>
    <div id="nav-links">
        <a href="<?=base_url('about')?>">ABOUT</a>
        <a href="<?=base_url('products')?>">PRODUCT</a>
        <a href="<?=base_url('works')?>">WORKS</a>
        <a href="<?=base_url('contact')?>">CONTACT</a>
    </div>
</nav>
<div id="container">
    <h1>MY WORKS</h1>
    <div class="work">
        <img src="<?=base_url('public\images\\')?>image1.jpg">
        <h2><a href="<?=base_url()?>works\debo">DEBO BUSINESS CARD</a></h2>
    </div>
    <div class="work">
        <img src="<?=base_url('public\images\\')?>image1.jpg">
        <h2><a href="<?=base_url()?>works\debo">DEBO BUSINESS CARD</a></h2>
    </div>
    <div class="work">
        <img src="<?=base_url('public\images\\')?>image1.jpg">
        <h2><a href="<?=base_url()?>works\debo">DEBO BUSINESS CARD</a></h2>
    </div>
    <div id="pages">
        <a class="link" href="<?=current_url()?>\1"><img src="<?=base_url('public\images\\')?>back-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>back.svg" alt=""></a>
        <a href="<?=current_url()?>\1" class="active">1</a>
        <a href="<?=current_url()?>\2">2</a>
        <a class="link" href="<?=current_url()?>\3"><img src="<?=base_url('public\images\\')?>next-dark.svg" alt=""><img src="<?=base_url('public\images\\')?>next.svg" alt=""></a>
    </div>
</div>
<footer>
    <div id="address">
        <p>31 Ijaiye Road Ogba Lagos Nigeria</p>
        <p class="number">+2349023148193</p>
        <p class="number">+2349023148193</p>
    </div>
    <div id="connect">
        <p>Connect with us.</p>
        <div>
            <a href=""><img src="<?=base_url('public\images\\')?>instagram1.svg"></a>
            <a href="https://twitter.com/yemidafidi"><img src="<?=base_url('public\images\\')?>twitter1.svg"></a>
            <a href=""><img src="<?=base_url('public\images\\')?>facebook.svg"></a>
            <a href=""><img src="<?=base_url('public\images\\')?>whatsapp.svg"></a>
        </div>
    </div>
    <div id="newsletter">
        <p>Sign up for our newletter</p>
        <form>
            <input type="text" name="email" placeholder="Email">
            <button><img src="<?=base_url('public\images\\')?>right-arrow.svg"></button>
        </form>
    </div>
</footer>
</body>
</html>