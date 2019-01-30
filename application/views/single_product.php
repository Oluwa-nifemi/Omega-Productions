<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>single_product.css">
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
<h1>Business Card</h1>
<div id="container">
    <img id="display_image" src="<?=base_url('public\images\\')?>image1.jpg">
    <div id="desc">
        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet cupiditate dolorem voluptas libero.</li>
        <li>Quod pariatur praesentium doloremque harum dolorum tenetur aliquam maiores, accusamus quam laborum eius consequuntur, ducimus nam nostrum.</li>
        <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet cupiditate dolorem voluptas libero.</li>
        <li>Quod pariatur praesentium doloremque harum dolorum tenetur aliquam maiores, accusamus quam laborum eius consequuntur, ducimus nam nostrum.</li>
    </div>
    <div class="split"></div>
    <h1 class="pricesheader">PRICES</h1>
    <div class="split"></div>
    <div class="pricecategory">
        <h1 class="pricecategory-header">With Matte Paper</h1>
        <table>
            <tr>
                <td>Quantity</td>
                <td>Price (NGN)</td>
            </tr>
            <tr>
                <td>100</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>200</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>300</td>
                <td>45000</td>
            </tr>
            <tr>
                <td>450</td>
                <td>60000</td>
            </tr>
            <tr>
                <td>600</td>
                <td>90000</td>
            </tr>
        </table>
    </div>
    <div class="pricecategory">
        <h1 class="pricecategory-header">With Green Paper</h1>
        <table>
            <tr>
                <td>Quantity</td>
                <td>Price (NGN)</td>
            </tr>
            <tr>
                <td>100</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>200</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>300</td>
                <td>45000</td>
            </tr>
            <tr>
                <td>450</td>
                <td>60000</td>
            </tr>
            <tr>
                <td>600</td>
                <td>90000</td>
            </tr>
        </table>
    </div>
    <div class="pricecategory">
        <h1 class="pricecategory-header">With Purple Paper</h1>
        <table>
            <tr>
                <td>Quantity</td>
                <td>Price (NGN)</td>
            </tr>
            <tr>
                <td>100</td>
                <td>20000</td>
            </tr>
            <tr>
                <td>200</td>
                <td>30000</td>
            </tr>
            <tr>
                <td>300</td>
                <td>45000</td>
            </tr>
            <tr>
                <td>450</td>
                <td>60000</td>
            </tr>
            <tr>
                <td>600</td>
                <td>90000</td>
            </tr>
        </table>
    </div>
    <div class="contact-us">
        <h1>You can reach us on:</h1>
        <p>Whatsapp : <a href="">08023148193</a></p>
        <p>Twitter <a href="">@adeyemidavid</a></p>
        <p>Email: yemidavid@gmail.com</p>
        <p>Or send a message via the <a href="">contact</a> page</p>
    </div>
</div>

<footer>
    <div id="address">
        <p>31 Ijaiye Road Ogba Lagos Nigeriau
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