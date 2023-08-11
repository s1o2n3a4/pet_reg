<?php

require_once "./connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cute Cats</title>

    <!-- swiper link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- cdn icon link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file  -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- header section start here  -->
    <header class="header">
        <div class="logoContent">
            <a href="#" class="logo"><img src="image/logo.png" alt=""></a>
            <h1 class="logoName">Fur Babies </h1>
        </div>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#product">product</a>
            <a href="#blogs">blogs</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="icon">
            <i class="fas fa-bars" id="menu"></i>
         <a href="register.php"><i class="fas fa-user" id="user" ></i> </a> 
        </div>
    
       
    </header>
    <!-- header section end here  -->

    <!-- home section start here  -->
    <section class="home" id="home">
        <div class="homeContent">
            <h2>Cute Cats for everyone! </h2>
            <p>Who doesnt love cats? Come on a journey with us to see some cats and brighten our day</p>
            <div class="home-btn">
                <a href="#"><button>see more</button></a>
            </div>
        </div>
    </section>

    <!-- home section end here  -->

    <!-- product section start here  -->
    <section class="product" id="product">
        <div class="heading">
            <h2>EXPLORE MORE</h2>
        </div>
        <div class="product-row">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <div class="img">
                       <a href="second/random.html"> <img src="image/cat1.png" alt="cat"></a>
                    </div>
                    <div class="product-content">
                        <h3>Random Cat Pictures</h3>
                        
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                       <a href="second/breed.html"> <img src="image/cat2.png" alt="cat"> </a> 
                    </div>
                    <div class="product-content">
                        <h3>Different Breeds</h3>
                        
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="img">
                       <a href="second/vote.html"> <img src="image/cat3.png" alt="cat"></a>
                    </div>
                    <div class="product-content">
                        <h3>Vote your favourite</h3>
                        
                    </div>
                </div>
                
    </section>

    <!-- product section end here  -->

    <!-- blogs section start here  -->
    <section class="blogs" id="blogs">

        <div class=" swiper blogs-row">
            <div class="swiper-wrapper">
                <div class=" swiper-slide box">
                    <div class="img">
                        <img src="image/cat4.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Some Interesting Facts!</h3>
                        <p>--Did you know that originally it was thought that Egyptians domesticated the cat? But in 2004, French archaeologists discovered a 9,500 year old cat grave in Cyprus. This makes this the oldest known pet cat and it predates Egyptian art about cats by over 4,000 years!</p>
                        <p>--If you thought cats spent a lot of their lives sleeping, you'd be right. According to Veterinary Hub, Cats actually spend 70% of their lives sleeping, which works out to around 13-16 hours a day. It's a cat's life!</p>
                        <a href="#blogs" class="btn">learn more</a>
                    </div>
                </div>
                
                </div>
            </div>
            


        </div>
    </section>

    <!-- blogs section ends here  -->

    

    <!-- footer section start here  -->

    <footer class="footer" id="contact">
        <div class="box-container">
            <div class="mainBox">
              
           
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="#" class="fab fa-pinterest"></a>
        </div>
    </footer>




   

    <!-- custom js file  -->
    <script src="index.js"></script>


</body>

</html>