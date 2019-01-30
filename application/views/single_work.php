<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>single_work.css">
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
    <h1>BABAJIDE WORK</h1>
    <div id="description">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio modi at totam ab aliquid molestias beatae dolorum eos earum hic architecto minus error ut aperiam suscipit voluptatum, fuga corporis perspiciatis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab, incidunt mollitia cumque minus aliquid quia alias ea nisi ex assumenda nulla tempora, soluta voluptates labore magnam, iusto iste natus quam? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, soluta culpa? Aut, ullam. Ad beatae id ipsa, non sed, omnis obcaecati, voluptas cumque iusto exercitationem labore dolorum ipsam magni tempora.
    </div>
    <h1>Images</h1>
    <div id="carousel">
        <img class="active" src="<?=base_url('public\images\\')?>image1.jpg" alt="">
        <img src="<?=base_url('public\images\\')?>image1.jpg" alt="">
        <img src="<?=base_url('public\images\\')?>image2.jpg" alt="">
        <img src="<?=base_url('public\images\\')?>cowry-logo.jpg" alt="">
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