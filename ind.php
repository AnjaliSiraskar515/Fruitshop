<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits Store By Sapana</title>
    <link rel="icon" type="image/icon" href="images/simple.jpeg" class="favicon">
    <!--Code for font awesome cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Code for font awesome cdn-->
    <!--Code for linking css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Code for linking css file -->


    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

    <!--Header section-->
    <header class="header">
        <a href="#" class="logo"><i class="fa fa-shopping-basket" aria-hidden="true"></i>FRUITS</a>


    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#features">features</a>
        <a href="#products">Products</a>
        <a href="#categories">Categories</a>
        <a href="#review">Review</a>
        <a href="#blogs">Blogs</a>
    </nav>

    <div class="icons">
        <div class="fa fa-bars" id="menu-btn"></div>
        <div class="fa fa-search" id="search-btn"></div>
        <div class="fa fa-shopping-cart" id="cart-btn"></div>
        <div class="fa fa-user" id="login-btn"></div>
    </div>


    <form class="search-form">
        <input type="search" id="search-box" placeholder="search here....">
        <label for="search-box" class="fa fa-search"></label>
    </form>


    <div class="shopping-cart">
        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="images/fruits-watermelons.jpg" height="50" width="100">
            <div class="content">
                <h3>Watermelon</h3>
                <span class="price">$5.99/-</span>
                <span class="quantity">Qty : 1</span>
            </div>
        </div>


        <div class="box">
            <i class="fa fa-trash"></i>
            <img src="images/ananas.jpeg" height="50" width="100">
            <div class="content">
                <h3>Pineapple</h3>
                <span class="price">$4.99/-</span>
                <span class="quantity">Qty : 1</span>
            </div>
        </div>
    <div class="box">
        <i class="fa fa-trash"></i>
        <img src="images/guava.jpg" height="50" width="100">
        <div 
        class="content">
            <h3>Guava</h3>
            <span class="price">$3.99/-</span>
            <span class="quantity">Qty : 1</span>
        </div>
    </div>

    <div class="total">total : $14.97/-</div>
    <a href="#" class="btn">Checkout</a>
    </div>
        



    <form action="#"  class="login-form">
    <h3>login now</h3>
    <input type="email" placeholder="enter your email" class="box">
    <input type="password" placeholder="enter your password"  class="box">

    <p>Forgot your password<a href="#">  click here</a></p>
    <p>Don't have an account<a href="#">  create now</a></p>
    <input type="submit" value="Login Now"  class="btn"></form>
    </header>
    <!--Header section-->
    <!--banner section-->
    <section class="home" id="home">
        <div class="content">
            <h1>Fresh And <span>Organic </span>Fruits For You</h1>
            <p><h2>"Squeeze the day with our ripe and succulent fruit selection!"</h2></p>

            <a href="#" class="btn">Shop Now</a>
        </div>
    </section>
    <!--banner section-->

    <!--Our features section-->
    <section class="features" id="features">
        <h1 class="heading"> Our <span>Features</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/fruit-14.jpg" width="200" height="150">
                <h3>Fresh and Organic</h3>
                <p>Harvested with care, enjoyed with love – our organic fruits are a symphony of freshness.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="box">
                <img src="images/delivery-clipart.png" width="200" height="150">
                <h3>Free and Fast Delivery</h3>
                <p>Speed meets savings with our lightning-fast and free delivery service. Your satisfaction, our priority!</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="box">
                <img src="images/easy-payments.png" width="200" height="150">
                <h3>Easy Payments</h3>
                <p>Say goodbye to hassle, hello to easy payments. Your purchases, your way, effortlessly.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </section>
    <!--Our features section-->

    <!--Our features section-->
    <section class="products" id="products">
        <h1 class="heading">Our <span>Products</span></h1>
        <div class="swiper products-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/ananas.jpeg" width="150" height="100">
                    <h1>Fresh Pineapple</h1>
                    <div class="price">$12.99/- -15.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/apple.jpg" width="150" height="100">
                    <h1>Fresh Apple</h1>
                    <div class="price">$11.99/- -16.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/dragon.jpg" width="150" height="100">
                    <h1>Fresh Dragon Fruit</h1>
                    <div class="price">$10.99/- -14.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/fru2.jpg" width="150" height="100">
                    <h1>Fresh Orange</h1>
                    <div class="price">$09.99/- -13.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>





        <div class="swiper products-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/fruits-watermelons.jpg" width="150" height="100">
                    <h1>Fresh Watermelon</h1>
                    <div class="price">$12.99/- -15.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/banana.jpg" width="150" height="100">
                    <h1>Fresh Banana</h1>
                    <div class="price">$11.99/- -16.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/kiwis.jpg" width="150" height="100">
                    <h1>Fresh Kiwis</h1>
                    <div class="price">$10.99/- -14.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
                <div class="swiper-slide box">
                    <img src="images/pomegranate.jpg" width="150" height="100">
                    <h1>Fresh Pomegranate</h1>
                    <div class="price">$09.99/- -13.99/-</div>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>
    <!--Our products section-->


    <!--Our Categories section-->
    <section class="categories" id="categories">
        <h1 class="heading"> Product <span>Categories</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="images/one_seed_fruits.png" width="150" height="150">
                <h3>Simple Fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="box">
                <img src="images/simple.jpeg" width="150" height="150">
                <h3>Aggregate Fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="box">
                <img src="images/all fru.jpg" width="150" height="150">
                <h3>Multiple Fruits</h3>
                <p>upto 45% off</p>
                <a href="#" class="btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!--Our Categories section-->
    <!--Our costomer review section-->

    <section class="review" id="review">
        <h1 class="heading">Costomer's<span>review
        </span></h1>
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="images/supriya shailja.jpeg">
                    <p>I've been ordering fruits from them for months now, and every time, the fruits arrive incredibly fresh. The quality is unmatched, and it feels like they were just picked. I'm consistently impressed with the standard of their produce.</p>
                    <h3>Supriya Shailja</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/pretty.jpg">
                    <p> Company Goes above and beyond in customer service. I had a minor issue with my order, and their support team was quick to respond and resolve it. It's refreshing to see a company that genuinely cares about its customers.</p>
                    <h3>Pretty</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/tanishka.jpg">
                    <p>What I love about them is the diverse selection of fruits they offer. From exotic choices to local favorites, there's something for everyone. The quality is consistently high, and it's evident that they source their fruits with care.</p>
                    <h3>Tanishka Patil</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
                </div>
                <div class="swiper-slide box">
                    <img src="images/jungkook.jpeg">
                    <p>I appreciate the reliability of Company when it comes to delivery. My orders always arrive on time, and the packaging ensures that the fruits are in perfect condition. It's great to know I can count on them for fresh fruits whenever I need them.</p>
                    <h3>Jungkook</h3>
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half"></i>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--Our costomer review section-->
    <!--Our Blog section-->
<section class="blogs" id="blogs">
    <h1 class="heading">Our<span>Blogs</span></h1>
    <div class="box-container">
        <div class="box">
            <img src="images/blog1.jpg" width="100" height="100">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"> Neha</i></a>
                    <a href="#"><i class="fa fa-calendar"> 1,May 2023</i></a>
                </div>
                <h3>Fresh and Organic Fruits</h3>
                <p>In every piece of fruit, nature gives us a sweet gift. Let's savor the flavors and appreciate the vibrant colors that Mother Earth provides.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog2.jpeg" width="100" height="100">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"> Savi</i></a>
                    <a href="#"><i class="fa fa-calendar"> 10,April 2023</i></a>
                </div>
                <h3>Fresh and Organic Fruits</h3>
                <p>From the juicy burst of a ripe mango to the crisp bite of a fresh apple, the world of fruits is a celebration of diversity. Each bite tells a story of the land it comes from.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog3.jpg" width="100" height="100">
            <div class="content">
                <div class="icons">
                    <a href="#"><i class="fa fa-user"> Shreeya</i></a>
                    <a href="#"><i class="fa fa-calendar"> 3,july 2023</i></a>
                </div>
                <h3>Fresh and Organic Fruits</h3>
                <p>Fruits are not just food; they are a symphony of nutrients that fuel our bodies and lift our spirits. Let's embrace the goodness they bring to our lives.</p>
                <a href="#" class="btn">Read More</a>
            </div>
        </div>
    </div>
</section>
    <!--Our Blog section-->
     <!--Our Footer section-->
     <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Fruit<i class="fa fa-shopping-basket">
                </i></h3>
                <p>Send us a message on Our Social Media Handlers for any queries or to get in touch. We're here to help! 💬📘
                    All the links are given below:</p>
                    <div class="share">
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                    </div>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#" class="links"><i class="fa fa-phone"></i>+6785439876  </a>
                <a href="#" class="links"><i class="fa fa-phone"></i>    +6785439887  </a>
                <a href="#" class="links"><i class="fa fa-envelope"></i>  info@gmail.com  </a>
                <a href="#" class="links"><i class="fa fa-map-marker"></i>  Pune,maharashtra india  </a>

            </div>
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i> Home  </a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>    Features </a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>  Products  </a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>  Categories </a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>  Review </a>
                <a href="#" class="links"><i class="fa fa-arrow-right"></i>  Blogs </a>
            </div>
            <div class="box">
                <h3> Newsletter </h3>
                <p>Subscribe For Latest Updates</p>
                <input type="email" placeholder="Enter your email" class="email">
                <input type="submit" value="Subscribe" class="btn">
                <img src="images/payments.jpeg" class="payment-img" height="40" width="200">
            </div>
        </div>


        <div class="credit">Created By <span> Sapana Jangale </span> | All Rights Reserved</div>
     </section>
      <!--Our Footer section-->


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <script src="js/script.js"></script>
    
</body>
</html>