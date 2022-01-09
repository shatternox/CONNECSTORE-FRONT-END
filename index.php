<?php require "header.php"; ?>


<main>


    <carousel>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./assets/images/carousel1.jpg" class="d-block w-10" alt="..." width="1000px">
            </div>
            <div class="carousel-item">
            <img src="./assets/images/carousel2.jpg" class="d-block w-10" alt="..." width="1000px">
            </div>
            <div class="carousel-item">
            <img src="./assets/images/carousel3.jpg" class="d-block w-10" alt="..." width="1000px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </carousel>

    <hr>

    <div class="cards">
        <cards>
            <div class="card">
                <img src="./assets/images/d2609a64-6c31-4f47-ba82-771f0a4b9aa0.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Fortigate | Firewall</h5>
                    <p class="card-text">Price: [Enterprise Agreement]</p>
                    <p class="card-text">One of the best firewall around</p>
                    <p class="card-text">Category: Firewall</p>
                    <a href="item.php" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Crowdstrike Falcon | EDR</h5>
                    <p class="card-text">Price: [Enterprise Agreement]</p>
                    <p class="card-text">One of the best EDR around</p>
                    <p class="card-text">Category: EDR</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">DrayTek | Load Balancer</h5>
                    <p class="card-text">Price: [Enterprise Agreement]</p>
                    <p class="card-text">One of the best LB around</p>
                    <p class="card-text">Category: Load Balancer</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Heimdall | Antivirus</h5>
                    <p class="card-text">Price: [Enterprise Agreement]</p>
                    <p class="card-text">One of the best AV around</p>
                    <p class="card-text">Category: Anti Virus</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
    </div>

    <div class="cards-notfirst">
        <cards>
            <div class="card">
                <img src="./assets/images/product5.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Google Play | Gift Card</h5>
                    <p class="card-text">Price: Rp100.000,00</p>
                    <p class="card-text">Google Play Gift Card</p>
                    <p class="card-text">Category: Gift Card</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product6.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Garena Shell | Gaming Voucher</h5>
                    <p class="card-text">Price: Rp100.000,00</p>
                    <p class="card-text">Garena Shell Voucher</p>
                    <p class="card-text">Category: Gaming Voucher</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product7.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Minecraft | Game</h5>
                    <p class="card-text">Price: Rp300.000,00</p>
                    <p class="card-text">Play together and have fun!</p>
                    <p class="card-text">Category: Game</p>
                    <a href="#" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
        <cards>
            <div class="card">
                <img src="./assets/images/product8.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Netflix | Suscribtion</h5>
                    <p class="card-text">Price: Based on Tier</p>
                    <p class="card-text">The best streaming platform around</p>
                    <p class="card-text">Category: Suscribiton</p>
                    <a href="item.php" class="btn btn-primary">Buy now</a>
                </div>
            </div>
        </cards>
    </div>





</main>

<?php require "footer.php"; ?>