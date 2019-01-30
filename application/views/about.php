<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>about.css">
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
    <div id="whoweare">
        <h1 class="header">Who are we</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Unde nihil animi enim at libero quo, a quam totam soluta ex, ipsam voluptatibus aspernatur deserunt quisquam laborum obcaecati eveniet corporis eum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro ducimus perspiciatis impedit magnam repellat recusandae rerum consectetur, quae hic praesentium sint libero id illo molestias error accusantium. Eum, natus id</p>
    </div>
    <div class="split"></div>
    <div id="whatwedo">
        <h1 class="header">What do we do</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos illo odio mollitia sapiente commodi inventore molestiae consequatur adipisci dolorem, laborum sed nemo sunt, atque asperiores quasi magni soluta accusantium repellendus! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate, provident. Quidem repellat blanditiis ex quia commodi minus ab eum, quod totam quam consequatur hic accusantium quasi natus voluptatibus rerum. Itaque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, deleniti neque ullam dolores veniam, voluptate reprehenderit voluptates eum sit ipsam quia veritatis fugiat sunt adipisci ut consequuntur alias beatae temporibus?</p>
    </div>
    <div class="split"></div>
    <div id="brands">
        <h1 class="header">Brands we've worked with</h1>
        <div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
            <div class="brand">
                <img src="<?=base_url('public\images\\')?>cowry-logo.jpg">
                <p>Cowry Asset Management</p>
            </div>
        </div>
    </div>
    <div class="split"></div>
    <div id="reviews">
        <h1 class="header">Reviews</h1>
        <button id="prevrev"><img src="<?=base_url('public\images\\')?>back-dark.svg"></button>
        <button id="nextrev"><img src="<?=base_url('public\images\\')?>next-dark.svg"></button>
        <div>
            <div class="review">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Very easy to work with fast delivery</p>
            </div>
            <div class="review active">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Joyful man</p>
            </div>
            <div class="review ">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Trustworthy Quality Business</p>
            </div>
            <div class="review">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Value for your money</p>
            </div>
            <div class="review">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Unique designs that set the pace </p>
            </div>
            <div class="review">
                <img src="<?=base_url('public\images\\')?>potrait.jpg" alt="">
                <h1>Cowry Asset Management</h1>
                    <p>Groundbreaking service</p>
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
</body>
<script>
    const reviews = document.querySelectorAll('.review').length;
    document.querySelector('#prevrev').onclick = () => {
        document.querySelector('#reviews .review.active').previousElementSibling.classList.add('active');
        document.querySelectorAll('#reviews .review.active')[1].classList.remove('active');
        document.querySelector('#reviews div').scrollBy(-350,0);
        if(document.querySelectorAll('.review').length > reviews){
            document.querySelector('.review:last-child').remove()
        }
    }
    document.querySelector('#nextrev').onclick = () => {
        document.querySelector('#reviews .review.active + div').classList.add('active');
        document.querySelector('#reviews .review.active').classList.remove('active');
        document.querySelector('#reviews div').scrollBy(350,0);
    }
    document.querySelector('#reviews > div').onscroll = (e) => {
        const div = e.target;
        if(div.scrollLeft && div.scrollLeft % 350 === 0){
            const append = [];
            document.querySelectorAll('.review').forEach((e,i) => {
                if(e.offsetLeft < div.scrollLeft){
                    append.push(e)
                }
            })
            append.forEach(elem => {
                div.innerHTML += `<div class = 'review'>${elem.innerHTML}</div>`;
            })
            checkReviews()
        }
    }
    const checkReviews = () => {
        document.querySelectorAll('.review').forEach((e) => {
            const div = document.querySelector('#reviews > div')
            // console.log(e.offsetLeft)
            // console.log(div.scrollLeft)
        })
    }
</script>
</html>