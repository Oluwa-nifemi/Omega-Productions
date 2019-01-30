<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>add_edit_work.css">
</head>
<body>

<nav>
    <a id="logo" href="<?=base_url('admin')?>"><img src="<?=base_url('public/images/')?>logo.png"></a>
    <div id="nav-links">
        <a href="<?=base_url('admin/brands')?>">BRANDS</a>
        <a href="<?=base_url('admin/reviews')?>">REVIEWS</a>
        <a href="<?=base_url('admin/categories')?>">CATEGORIES</a>
        <a href="<?=base_url('admin/products')?>">PRODUCTS</a>
        <a href="<?=base_url('admin/work')?>">WORKS</a>
    </div>
</nav>
<?php echo validation_errors(); ?>
<?php isset($error) ? print_r($error) : ''?>
<form method="post" action="<?=base_url('admin/works/edit')?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="jobname">Job Name</label> <input type="text" name="jobname" id="jobname" value="<?=$work[0]->name?>" required>
        <input type="hidden" name="id" value="<?=$work[0]->id?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label> <textarea name="description" id="description" required><?=$work[0]->description?></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label> <input type="file" name="images[]" multiple>
        <input type="hidden" id="old_images" name="old_images" value='<?=$work[0]->images?>'>
    </div>
    <button>Edit</button>
</form>
<script>
    let images = JSON.parse('<?=$work[0]->images?>');
    const deleteArr = [];
    images.forEach((e,index) => {
        const image = document.createElement('img');
        image.src = '<?=base_url('public/images/')?>' + e;
        const div = document.createElement('div');
        div.classList.add('old_image');
        const button = document.createElement('button');
        button.innerHTML = '<img src="<?=base_url('public/images/delete.svg')?>">';
        button.addEventListener('click',() => {
           div.remove();
           deleteArr.push(index);
           if(deleteArr.length === images.length){
               document.querySelector('input[type="file"]').required = true;
           }
        });
        div.appendChild(button);
        div.appendChild(image);
        document.body.appendChild(div)
    });
    document.querySelector('form').addEventListener('submit',(e) => {
        images = images.filter((e,i) =>  deleteArr.findIndex(del => del === i) === -1);
        document.querySelector('#old_images').value = JSON.stringify(images);
    })
</script>
</body>
</html>