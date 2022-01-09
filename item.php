<?php require "header.php"; ?>
<div class="item-detail-container" style="color: white;">
        <div class="item-thumbnail">
            <img src="assets/images/netflix-panjang.jpeg" alt="" id="big-thumbnail">
            <div class="slider-img">
                <img src="assets/images/netflix-panjang.jpeg" alt="" selected>
                <img src="assets/images/netflix3.jpg" alt="">
                <img src="assets/images/netflix4.jpg" alt="">
                <img src="assets/images/netflix5.jpg" alt="">    
            </div>
        </div>
        <div class="item-detail">
            <h1>Netflix</h1>
            <p>
                Netflix Description
                Netflix Description
                Netflix Description
                Netflix Description
                Netflix Description
            </p>
            <div class="form-type">
                <label for="">Account Type</label>
                <select class="form-select" aria-label="Default select example" id="acc-type-id">
                    <option selected>Select Account Type</option>
                    <option value="1">Mobile</option>
                    <option value="2">Basic</option>
                    <option value="3">Standard</option>
                    <option value="3">Premium</option>
                </select>
            </div>
            <p id="changePrice"></p>
            <div class="checkout-qty">
                <a href="cart.php"><button class="btn btn-primary">Add to cart</button></a>
            </div>
        </div>
    </div>
<script>
        document.getElementById('acc-type-id').addEventListener('change',(e)=>{
            console.log(e.target.value)
            let price = document.getElementById('changePrice')
            if(e.target.value == 1){
                price.innerText = "Rp54.000,00"
            }
            else if(e.target.value == 2){
                price.innerText = "Rp120.000,00"
            }
            else if(e.target.value == 3){
                price.innerText = "Rp153.000,00"
            }
            else{
                price.innerText = "Rp153.000,00"
            }
        })
        document.querySelectorAll('.slider-img > img').forEach((e)=>{
            e.addEventListener('click',()=>{
                console.log( e.getAttribute('src'))
                document.getElementById('big-thumbnail').setAttribute('src',e.getAttribute('src'))
            })
        })
</script>
<?php require "footer.php"; ?>
