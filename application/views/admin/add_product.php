<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito|PT+Sans|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('public/css/')?>common.css">
    <link rel="stylesheet" href="<?=base_url('public/css/admin/')?>add_edit_product.css">
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
<form method="post" action="<?=base_url('admin/products/add')?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="display_image">Display Image</label>
        <input type="file" id="display_image" name="image">
    </div>
    <div class="form-group details-group">
        <label for="details">Details</label>
        <input type="text" id="details">
        <input type="hidden" name="details">
        <button type="button" class="add-detail"><img src="<?=base_url('public/images/')?>plus.svg" alt=""></button>
    </div>
    <div class="form-group" id="prices">
        <label>Prices</label>
        <input name="prices" type="hidden" id="price">
        <button type="button" class="add-price"><img src="<?=base_url('public/images/')?>plus.svg" alt=""></button>
    </div>
    <button id="submitBtn">Add</button>
</form>
<div class="modal-container">
    <div class="modal-content">
        <h1>Add Price Section <button class="close-modal"><img src="<?=base_url('public/images/')?>cancel.svg" alt=""></button></h1>
        <div class="split"></div>
        <div class="section-name">
            <label>Section Name</label><input type="text" placeholder="Section Name">
        </div>
        <div class="split"></div>
        <div class="modal-form">
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="split"></div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="split"></div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="split"></div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
            <div class="input-section">
                <label>Quantity</label>
                <input type="number" min = '0' placeholder="Quantity">
                <br>
                <label>Price</label>
                <input type="number" min = '0' placeholder="Price">
            </div>
        </div>
        <button class="add">Add</button>
    </div>
</div>
<script>
    //Define a few variables
    const addPrice = document.querySelector('.add-price');
    const prices = [];
    const details = [];
    const pricesDiv = document.querySelector('#prices');
    const modalContainer = document.querySelector('.modal-container');
    document.querySelector('.modal-content .add').addEventListener('click',() => {
        //ON SUBMIT
        const sectionName = document.querySelector('.section-name input').value //Get section name
        const priceType = {
            name : sectionName,
            prices : []
        }
        if(!sectionName){
            alert('Fill in section name'); //Check whether section name is empty is true show error message
            return;
        }
        //Set valid variable for validation
        let valid = true;
        //Loop through each input section
        document.querySelectorAll('.input-section').forEach(e => {
            //Set quantity and price
            const quantity = e.children[1].value
            const price = e.children[4].value
            //Check if one of the field is filled and the other is empty if true show error message
            if((price && !quantity) || (quantity && !price)){
                alert('Fill fields appropriately')
                valid = false
            }else if(price && quantity){
                //If both are filled input the values intot he array
                priceType.prices.push({
                    quantity,price
                })
            }
        })
        if(priceType.prices.length && valid){
            if(modalContainer.classList.contains('edit')){
                //If in editing mode get target
                const edit = modalContainer.dataset.edit;
                //Get index of target in prices array
                const index = edit.split('-')[1];
                //Changed value of datavalue of edited input
                document.getElementById(edit).dataset.value = JSON.stringify(priceType)
                document.getElementById(edit).value = priceType.name;
                prices[index] = priceType; //Set change the value in prices array
                document.querySelector('.modal-container .add').innerHTML = 'Add' //Reset text of modal container
                modalContainer.classList.remove('edit') //Remove edit class
            }else{
                //Create elements
                const generated = document.createElement('div');
                const input = document.createElement('input');
                const button = document.createElement('button')
                //Set value and dataset value to name of section and stringified version of pricetype array respectively
                input.dataset.value = JSON.stringify(priceType);
                input.value = priceType.name;
                //Set id of input and make it disabled
                input.id = 'price-' + prices.length;
                input.type = 'text';
                input.disabled = true;
                //Set class,type and target of button
                button.dataset.target = 'price-' + prices.length;
                button.classList.add('edit-price')
                button.type = 'button';
                //Put image in button
                button.innerHTML = '<img src="<?=base_url('public/images/')?>pencil.svg" alt="">';
                //Append children
                generated.appendChild(input);
                generated.appendChild(button);
                //Add click event listener to fire of edit function
                button.addEventListener('click',() => {
                    showModal(generated.children[1].dataset.target)
                });
                //Append elements to prices div
                pricesDiv.appendChild(generated);
                pricesDiv.appendChild(addPrice);
                prices.push(priceType);
            }
            //Set value of hidden input to stringified version of overall prices array
            document.querySelector('#price').value = JSON.stringify(prices);
            document.querySelectorAll('.modal-container input').forEach(e => {e.value = ''}) //Empty inputs
            modalContainer.classList.remove('active') //Hide modal
        }else{
            alert('Please fill in prices') //Show error message
        }
    });
    addPrice.addEventListener('click',() => {
        modalContainer.classList.add('active') //Make modal visible
    });
    document.querySelector('.close-modal').addEventListener('click',() => {
        modalContainer.classList.remove('active') //Hide modal
    });
    const showModal = (target) => {
        modalContainer.classList.add('active'); //Make modal visible
        modalContainer.classList.add('edit'); //Add edit class to modal
        modalContainer.dataset.edit = target; //Set target of editing for modal
        const priceType = JSON.parse(document.getElementById(target).dataset.value); //Get current details of to be edited price type
        document.querySelector('.section-name input').value = priceType.name; //Input name of section
        //Input quantities
        priceType.prices.forEach((e,index) => {
            document.querySelectorAll('.input-section')[index].children[1].value = e.quantity
            document.querySelectorAll('.input-section')[index].children[4].value = e.price
        });
        document.querySelector('.modal-container .add').innerHTML = 'Edit' //Change text of button
    };
    document.querySelector('.add-detail').addEventListener('click',() => {
        const detail = document.querySelector('#details').value;
        if(detail){
            const div = document.createElement('div');
            div.classList.add('detail');
            const input = document.createElement('input');
            input.disabled = true;
            input.id = 'detail-' + details.length;
            input.type = 'text';
            const button = document.createElement('button');
            button.innerHTML = '<img src="<?=base_url('public/images/')?>pencil.svg">';
            button.classList.add('edit-detail');
            button.type = 'button';
            button.addEventListener('click',() => {
                input.disabled = false;
                div.classList.add('edit')
            });
            const save = document.createElement('button');
            save.innerHTML = '<img src="<?=base_url('public/images/')?>tick.svg">';
            save.classList.add('save-detail');
            save.type = 'button';
            const target = details.length;
            save.addEventListener('click',() => {
                details[target] = input.value;
                input.disabled = true;
                div.classList.remove('edit');
                document.querySelector('#details + input').value = JSON.stringify(details)
            });
            const deleteBtn = document.createElement('button');
            deleteBtn.innerHTML = '<img src="<?=base_url('public/images/')?>delete.svg">';
            deleteBtn.classList.add('delete-detail')
            deleteBtn.type = 'button';
            deleteBtn.addEventListener('click',() => {
                details.splice(target,1);
                document.querySelector('#details + input').value = JSON.stringify(details);
                div.remove()
            });
            input.value = detail;
            div.appendChild(input);
            div.appendChild(button);
            div.appendChild(deleteBtn)
            div.appendChild(save);
            document.querySelector('.details-group').appendChild(div);
            details.push(detail);
            document.querySelector('#details + input').value = JSON.stringify(details);
            document.querySelector('#details').value = '';
        }
    })
</script>
</body>
</html>