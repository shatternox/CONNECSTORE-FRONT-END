<?php require "header.php"; ?>

<main>
    <div class="cart-div">
        <div class="main-cart">
            <div class="cart-title">
                <h3 class="main-cart-title">
                    Shopping Cart
                </h3>
                <div class="item-count">
                    3 Items
                </div>
            </div>
            <hr>
            <table class="item-table">
                <thead>
                    <tr>
                        <th>Product Detail</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Total</th>
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
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id" value="1">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td id="price">120000</td>
                    <td id="totalprice">120000</td>
                </tr>
                <!-- <tr>
                    <td>
                        <div class="product-detail">
                            <img src="assets/images/product3.png" alt="" class="product-image">
                            <div>Item 2</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id" value="0">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                </tr>
                <tr>
                    <td>
                        <div class="product-detail">
                            <img src="assets/images/product2.png" alt="" class="product-image">
                            <div> Item 4</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id" value="0">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                </tr>

                <tr>
                    <td>
                        <div class="product-detail">
                            <img src="assets/images/product2.png" alt="" class="product-image">
                            <div> Item 3</div>
                        </div>
                    </td>
                    <td>
                        <div class="quantity-col">
                            <button class="btn btn-primary change-qty ">-</button>
                            <input type="text" name="" id="quantity-id" value="0">
                            <button class="btn btn-primary change-qty">+</button>
                        </div>
                    </td>
                    <td>3000</td>
                    <td>9000</td>
                </tr> -->
            </table>
        </div>
        <div class="order-summary">
            <div class="cart-title">
                <h3 class="main-cart-title">
                    Order Summary
                </h3>
            </div>
            <hr>
            <div class="count-price">
                <!-- <p>ITEMS 3</p>
                <p>4000</p> -->
            </div>
            <div class="payment-form">
                <label for="">Payment Method</label>
                <select class="form-select" aria-label="Default select example" style="margin-bottom: 40px;">
                    <option selected>Select Payment Type...</option>
                    <option value="1">OVO</option>
                    <option value="2">Go Pay</option>
                    <option value="3">Dana</option>
                </select>
                <!-- <label for="">Promo Code</label> -->
                <input class="form-control" type="text" placeholder="Input promo code" aria-label="default input example">
                <button class="btn btn-danger" >Apply</button>
            </div>
            <hr>
            <div class="count-price">
                <p>TOTAL COST</p>
                <p id="totalcost">120000</p>
            </div>
            <button class="btn checkout-btn checkout-btn" id="payment">CHECKOUT</button>
        </div>
    </div>
</main>

<script>


    document.getElementById('payment').addEventListener('click',()=>{
        Swal.fire({
        title: 'Please complete your transaction',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: 'green',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, I want it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Payment Success!',
            'Your payment have been processed',
            'success'
            ).then(()=>{window.location.href = "status.php?quantity="+ document.getElementById('quantity-id').value})

            
        }
        })
    })
  </script>
<script>
    document.getElementById('quantity-id').value = 1
    document.querySelectorAll('.change-qty').forEach((e)=>{
            e.addEventListener('click',()=>{
                let inputValue = e.parentNode.children[1]
                e.innerText === "+" ? 
                inputValue.value = parseInt(inputValue.value)+1
                :
                inputValue.value > 0 && (inputValue.value = parseInt(inputValue.value)-1)

                price = document.getElementById('price')

                total = parseInt(price.innerText) * inputValue.value
                console.log(total)

                totalprice = document.getElementById('totalprice')
                totalprice.innerText = total

                totalcost = document.getElementById('totalcost')
                totalcost.innerText = total

            })
            
        })

    

</script>
<?php require "footer.php"; ?>
