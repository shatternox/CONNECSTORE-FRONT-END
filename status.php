<?php require "header.php"; ?>
<main>
    <div class="cart-div">
        <div class="main-cart">
            <div class="cart-title">
                <h3 class="main-cart-title" style="font-size: 3rem;">
                    Purchased Status
                </h3>
            </div>
            <hr>
            <table class="item-table">
                <thead>
                    <tr>
                        <th>Product Detail</th>
                        <th>Quantity</th>
                        <!-- <th>Price</th> -->
                        <th style="text-align: center;">Total</th>
                        <th style="text-align: center;">Status</th>
                    </tr>
                </thead>
                <tr>
                    <td>
                        <div class="product-detail">
                            <img src="assets/images/netflix-panjang.jpeg" alt="" class="product-image">
                            <div>Netflix | Basic</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col" style="justify-content: center;">
                            <!-- <button class="btn btn-primary change-qty ">-</button> -->
                            <input type="text" name="" id="quantity-id" value=<?= $_GET['quantity'] ?> disabled>
                            <!-- <button class="btn btn-primary change-qty">+</button> -->
                        </div>
                    </td>
                    <!-- <td>3000</td> -->
                    <td><div id="total-price" style="text-align: center; padding: 0 30px;">120000</div></td>
                    <td>
                        <div class="bg-danger status">On Proccess</div>
                    </td>
                </tr>
                <!-- <tr>
                    <td>
                        <div class="product-detail">
                            <img src="slider1.png" alt="" class="product-image">
                            <div>Item 2</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                    <td>
                        <div class="bg-warning status">On Delivery</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="product-detail">
                            <img src="slider1.png" alt="" class="product-image">
                            <div> Item 3</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                    <td>
                        <div class="bg-success status">Complete</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="product-detail">
                            <img src="slider1.png" alt="" class="product-image">
                            <div> Item 4</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                    <td>
                        <div class="bg-success status">Complete</div>
                    </td>
                </tr> -->
            </table>
        </div>
        
    </div>
</main>
<script>
    let price = document.getElementById('total-price')
    let qty = document.getElementById('quantity-id')
    price.innerText = qty.value * 120000
</script>
<?php require "footer.php"; ?>
