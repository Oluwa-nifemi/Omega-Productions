<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public\css\\')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public\css\admin\\')?>index.css">
</head>
<body>
<nav>
    <a id="logo" href="<?=base_url('admin')?>"><img src="<?=base_url('public/images/')?>logo.png"></a>
    <div id="nav-links">
        <a href="<?=base_url('admin\brands')?>">BRANDS</a>
        <a href="<?=base_url('admin\reviews')?>">REVIEWS</a>
        <a href="<?=base_url('admin\categories')?>">CATEGORIES</a>
        <a href="<?=base_url('admin\products')?>">PRODUCTS</a>
        <a href="<?=base_url('admin\works')?>">WORKS</a>
    </div>
</nav>
<div id="container">
    <h1>Introduction</h1>
    <div id="intro">
        <button><img src="<?=base_url('public/images/')?>pencil.svg"></button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet. Magni laborum magnam nulla neque eum nostrum dignissimos. Perferendis deserunt sit quas iure quasi corporis, soluta atque tenetur aliquam assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus autem esse a corporis vel rem non! Quisquam vel corporis molestiae excepturi accusamus in ullam aut optio? Aspernatur ea quibusdam minima?</p>
        <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet. Magni laborum magnam nulla neque eum nostrum dignissimos. Perferendis deserunt sit quas iure quasi corporis, soluta atque tenetur aliquam assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus autem esse a corporis vel rem non! Quisquam vel corporis molestiae excepturi accusamus in ullam aut optio? Aspernatur ea quibusdam minima?</textarea>
        <div class="editbuttons">
            <button><img src="<?=base_url('public/images/')?>forbidden.svg"></button>
            <button><img src="<?=base_url('public/images/')?>tick.svg"></button>
        </div>
    </div>
    <h1>Who are we</h1>
    <div id="whoweare">
        <button><img src="<?=base_url('public/images/')?>pencil.svg"></button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet. Magni laborum magnam nulla neque eum nostrum dignissimos. Perferendis deserunt sit quas iure quasi corporis, soluta atque tenetur aliquam assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus autem esse a corporis vel rem non! Quisquam vel corporis molestiae excepturi accusamus in ullam aut optio? Aspernatur ea quibusdam minima?</p>
        <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet. Magni laborum magnam nulla neque eum nostrum dignissimos. Perferendis deserunt sit quas iure quasi corporis, soluta atque tenetur aliquam assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus autem esse a corporis vel rem non! Quisquam vel corporis molestiae excepturi accusamus in ullam aut optio? Aspernatur ea quibusdam minima?</textarea>
        <div class="editbuttons">
            <button><img src="<?=base_url('public/images/')?>forbidden.svg"></button>
            <button><img src="<?=base_url('public/images/')?>tick.svg"></button>
        </div>
    </div>
    <h1>What do we do</h1>
    <div id="whatwedo">
        <button><img src="<?=base_url('public/images/')?>pencil.svg"></button>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias praesentium architecto blanditiis perspiciatis accusamus recusandae deleniti ducimus ipsum non ut enim fugit, esse necessitatibus nesciunt impedit amet dolorem iusto consequatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio incidunt modi, nam libero tempore aliquam distinctio sed vel voluptatem suscipit asperiores odit saepe cum illo. Facilis atque at corporis. Doloribus!</p>
        <textarea>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, amet. Magni laborum magnam nulla neque eum nostrum dignissimos. Perferendis deserunt sit quas iure quasi corporis, soluta atque tenetur aliquam assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus autem esse a corporis vel rem non! Quisquam vel corporis molestiae excepturi accusamus in ullam aut optio? Aspernatur ea quibusdam minima?</textarea>
        <div class="editbuttons">
            <button><img src="<?=base_url('public/images/')?>forbidden.svg"></button>
            <button><img src="<?=base_url('public/images/')?>tick.svg"></button>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('div:not(.editbuttons) > button').forEach((e,index) => {
        e.addEventListener('click',() => {
            document.querySelector(`#container div:not(.editbuttons):nth-of-type(${index+1})`).classList.add('edit')
        })
    });
    document.querySelectorAll('div.editbuttons button:first-child').forEach((e,index) => {
        e.addEventListener('click',() => {
            document.querySelector(`#container div:not(.editbuttons):nth-of-type(${index+1})`).classList.remove('edit')
        })
    });

    document.querySelectorAll('div.editbuttons button:last-child').forEach((e,index) => {
        e.addEventListener('click',() => {
            alert(document.querySelector(`div:nth-of-type(${index+1}) textarea`).value)
        })
    })
</script>
</body>
</html>