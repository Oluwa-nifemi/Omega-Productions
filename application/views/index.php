<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans" rel="stylesheet">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>index.css">
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
<div id="carousel">
    <img class="active" src="<?=base_url('public\images\\')?>image1.jpg">
    <img src="<?=base_url('public\images\\')?>image2.jpg">
    <img src="<?=base_url('public\images\\')?>image3.jpg">
    <img src="<?=base_url('public\images\\')?>image4.jpg">
</div>
<div id="container">
    <div id="top">
        <h1>Omega Production</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad atque rem sit error porro nesciunt similique officiis voluptatem qui consequatur aliquid autem quae molestias accusamus, eos debitis animi eligendi mollitia. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quia maxime mollitia fugiat. Quibusdam, rerum optio! Iste, earum. Culpa consequuntur illo perspiciatis omnis repudiandae autem reiciendis vero commodi fugit. Quia? </p>
    </div>
    <div id="promos" >
        <h1 class="header"><span>PROMOS</span></h1>
        <img src="<?=base_url('public\images\\')?>promo.jpg" alt="">
    </div>
    <div id="featured" >
        <h1 class="header"><span>FEATURED PRODUCTS</span></h1>
        <div id="cards">
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image5.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image6.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image7.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image8.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image5.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image6.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image7.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
            <div class="card">
                <h1 class="name">Business Card</h1>
                <img src="<?=base_url('public\images\\')?>image8.jpg">
                <div class="card-details">
                    <p class="price">List Price : 250</p>
                    <a href="single_product.html"><button>More</button></a>
                </div>
            </div>
        </div>
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
<script>
    let currentCarousel = 1;
    setInterval(() => {
        currentCarousel = currentCarousel + 1 > 4 ? 1 : currentCarousel + 1;
        document.querySelector('#carousel img.active').classList.remove('active');
        document.querySelector(`#carousel img:nth-of-type(${currentCarousel})`).classList.add('active');
    },3000)
</script>
</body>
</html>