
<?php
session_start();
?>
 
 <?php
if($_SESSION["name"]) {
?>





<?php
}else echo "<h1>Please login first .</h1>";
?>
 

 
       
  

                

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <title>Document</title>

</head>
<style>
a{
    text-decoration: none;
    color: #000;
}
</style>
<body>
    <nav class="navbar navbar-expand-lg  p-3 ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:black;">            <?php echo $_SESSION["name"]; ?>
 </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="products.html">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="logout.php">Logout</a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <div class="hero">
        <div class="overlay"></div>
        <div class="hero-container">
            <h1 class="heading">TRY OUT OUR LATEST PRODUCTS </h1>
            <h1 class="heading">Sale 2022</h1>
            <button class="btn">
                Shop Now
            </button>

        </div>
    </div>

    <!-- Products section -->
    <div class="top-products">

        <div class="products-container">
            <h1 class="heading">Featured Products </h1>

            <div class="card-container">
                <div class="card">
                    <img src="orange.webp" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Orange Bag</h4>
                        <p>$100</p>
                    </div>
                </div>
                <div class="card">
                    <img src="yellow.jpg" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Yellow Bag</h4>
                        <p>$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="black.jpg" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Black Bag</h4>
                        <p>$400</p>
                    </div>
                </div>
                <div class="card">
                    <img src="red.jpg" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Red Bag</h4>
                        <p>$500</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- About  Us section -->
    <div class="about" id="about">

        <div class="about-container">
            <h1 class="heading">About Us</h1>

        </div>
        <div class="flex-container">
            <img src="about.jpg" alt="Avatar" style="width:500px;height: 500px;">
            <div>
                <p class="para">
                    We are a company which deals in ladies bags and other related products. We are an ecommerce business
                    also with multiple shops
                    in different areas of Pakistan. We provide quality products with full gurantee. Our business was
                    first founded in 2010 and since
                    then we have become one of the top selling ecommerce brand in Pakistan.
                </p>
                <button class="btn">Read More</button>
            </div>

        </div>
    </div>

    <!--Service section -->
    <div class="about">

        <div class="service-container">
            <h1 class="heading">Our Services</h1>

        </div>
        <div class="flex-container">
            <div class="service-card">
                <div class="container2">
                    <h4>Free Home Delivery</h4>
                    <p>We provide free home delivery with purchase.</p>
                    <button class="btn2">Read More</button>
                </div>
            </div>
            <div class="service-card">
                <div class="container2">
                    <h4>30 days return service</h4>
                    <p>You can return the product if you dont like it within 30 days</p>
                    <button class="btn2">Read More</button>
                </div>
            </div>
            <div class="service-card">
                <div class="container2">
                    <h4>Money Back Gurantee</h4>
                    <p>We provide full refund in case of any issue.</p>
                    <button class="btn2">Read More</button>
                </div>
            </div>

        </div>
    </div>

    
    <!-- Featured Products section -->
    <div class="top-products">

        <div class="products-container">
            <h1 class="heading">Featured Products </h1>

            <div class="card-container">
                <div class="card">
                    <img src="purse.webp" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Purse</h4>
                        <p>$250</p>
                    </div>
                </div>
                <div class="card">
                    <img src="show1.jpg"Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Shows</h4>
                        <p>$200</p>
                    </div>
                </div>
                <div class="card">
                    <img src="neck.jpg" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Necklace</h4>
                        <p>$350</p>
                    </div>
                </div>
                <div class="card">
                    <img src="dress.jpg" alt="Avatar" style="width:300px;height: 300px;">
                    <div class="container">
                        <h4>Dress</h4>
                        <p>$500</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

        <!-- Newsletter section -->
        <div class="news">
            <div class="news-container">
                <h1>Subscribe to out newsletter</h1>
                <p>You can subscribe to our newsletter if you want latest news and updates from us.</p>
                <button class="btn3">Subscribe</button>
            </div>
        </div>

          <!-- Footer section -->
    <footer class="footer">
        <h1>copyright@2022</h1>
    </footer>
</body>

</html>