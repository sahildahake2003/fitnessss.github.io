<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive fitness and gym website design</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    
    
<!-- header section starts      -->

<header class="header">

    <a href="#" class="logo"> <span>BE</span>FIT </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        
        <a id="xyz" href="http://127.0.0.1:7860">Fitness Ai</a>

        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#features">features</a>
        <a href="#pricing">pricing</a>
        <a href="#trainers">trainers</a>
        <a href="#blogs">blogs</a>
        
        <a href="index.html">
            <div class="profile-icon">
                <i class="fa fa-user-circle"></i>
            </div>
        </a>
    </nav>
    </nav>

</header>

<!-- header section ends     -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(./images/home-bg-1.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./images/home-bg-2.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

            <div class="swiper-slide slide" style="background: url(./images/home-bg-3.jpg) no-repeat;">
                <div class="content">
                    <span>be strong, be fit</span>
                    <h3>Make yourself stronger than your excuses.</h3>
                    <a href="#" class="btn">get started</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="./images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3 class="title">Every day is a chance to become better</h3>
        <p>Every day you have a new chance to start a new clean page of your life, to become better than yesterday. Work for it, think what you can do today better than yesterday. Use your time smartly!</p>
        <div class="box-container">
            <div class="box">
                <h3><i class="fas fa-check"></i>body and mind</h3>
                <p>The body holds your physical health and your ability to function.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>healthy life</h3>
                <p>According to a recent study, very few adults actually meet the criteria for a healthy lifestyle.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>strategies</h3>
                <p>Strategy is a well defined roadmap of an organization. It defines the overall mission, vision and direction of an organization.</p>
            </div>
            <div class="box">
                <h3><i class="fas fa-check"></i>workout</h3>
                <p>One surefire way to attack your fitness regimen effectively? Keep the fuss to a minimum and stick with the basics.</p>
            </div>
        </div>
        <div class="btn"><a href="https://en.wikipedia.org/wiki/Everyday_life">read more</a></div>

    </div>

</section>

<!-- about section ends -->

<!-- features section starts  -->

<section class="features" id="features">

    <h1 class="heading"> <span>gym features</span> </h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./images/f-img-1.jpg" alt="">
            </div>
            <div class="content">
                <img src="./images/icon-1.png" alt="">
                <h3>body building</h3>
                <p>Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles (muscle building) by muscle hypertrophy for aesthetic purposes.</p>
                <div class="btn"><a href="https://en.wikipedia.org/wiki/Bodybuilding">read more</a></div>

            </div>
        </div>

        <div class="box second">
            <div class="image">
                <img src="./images/f-img-2.jpg" alt="">
            </div>
            <div class="content">
                <img src="./images/icon-2.png" alt="">
                <h3>gym for men</h3>
                <p>Men's Fitness was a men's magazine published by American Media, Inc and founded in the United States in 1987.</p>
                <div class="btn"><a href="https://en.wikipedia.org/wiki/Men%27s_Fitness">read more</a></div>

            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./images/f-img-3.jpg" alt="">
            </div>
            <div class="content">
                <img src="./images/icon-3.png" alt="">
                <h3>gym for women</h3>
                <p>Gyms for Womens in Bhopal - Best Body Building, Gym, Gymnastics, Fitness Center, Ladies gym, Health club, Fitness Club.</p>
                <div class="btn"><a href="https://en.wikipedia.org/wiki/Men%27s_Fitness">read more</a></div>

            </div>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- pricing section starts  -->

<section class="pricing" id="pricing">

    <div class="information">
        <span>pricing plan</span>
        <h3>affordable pricing plan for your</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsam dolore excepturi ea suscipit fugiat cum quae, rerum optio mollitia! Tempora?</p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
        <div class="btn">all pricing</div>
    </div>

    <div class="plan basic">
        <h3>basic plan</h3>
        <div class="price"><span>₹</span>499<span>/mo</span></div>
       <div class="list">
        <p> <i class="fa fa-times" style="color: #e60000;"></i> personal training </p>
        <p> <i class="fa fa-times" style="color: #e60000;"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="http://localhost:4242/checkout.html" class="btn">PAY NOW</a>
    </div>

    <div class="plan">
        <h3>premium plan</h3>
        <div class="price"><span>₹</span>999<span>/mo</span></div>
       <div class="list">
        <p> <i class="fas fa-check"></i> personal training </p>
        <p> <i class="fas fa-check"></i> cardio exercise </p>
        <p> <i class="fas fa-check"></i> weight lifting </p>
        <p> <i class="fas fa-check"></i> diet plans </p>
        <p> <i class="fas fa-check"></i> overall results </p>
       </div>
       <a href="http://localhost:4242/checkout.html" class="btn">PAY NOW</a>
    </div>

</section>

<!-- pricing section ends -->

<!-- trainers section starts  -->

<section class="trainers" id="trainers">

    <h1 class="heading"> <span>expert trainers</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="./images/trainer-1.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>Arnold Schwarzenegger</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="./images/trainer-2.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3> Andrea Shaw</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="./images/trainer-3.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>Ronnie Coleman</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div class="box">
            <img src="./images/trainer-4.jpg" alt="">
            <div class="content">
                <span>expert trainer</span>
                <h3>Monique Jones</h3>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-pinterest"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- trainers section ends -->

<!-- banner section starts  -->

<section class="banner">

    <span>join us now</span>
    <h3>get upto 50% discount</h3>
    <p>Joining a gym and maintaining your membership can involve some hefty costs, but there's good news: If you have health insurance, you may be able to get a free or greatly reduced gym membership.</p>
    <div href="#" id="getdis" class="btn" onclick="generateCoupon()">get discount</div>


</section>

<!-- banner section ends -->

<!-- review section starts  -->

<section class="review">

    <div class="information">
        <span>testimonials</span>
        <h3>what our clients says</h3>
        <p>Fitness within is the cleanest and most organized gym I’ve ever seen! I have no words to say how wonderful they are! Domenic makes you feel super comfortable, Kaitlyn helps you eat better and healthy!</p>
        <a href="#" class="btn">read more</a>
    </div>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p>made with using html css js</p>
                <div class="user">
                    <img src="./images/pic-1.png" alt="">
                    <div class="info">
                        <h3>Team  
                            sahil 
                            rituraj 

                            sohail 
                            yash</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="./images/pic-2.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="./images/pic-3.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Accusamus, quo.</p>
                <div class="user">
                    <img src="./images/pic-4.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>designer</span>
                    </div>
                    <i class="fas fa-quote-left"></i>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading"> <span>daily posts</span> </h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="./images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Fitness Within Is The Cleanest And Most Organized Gym I’ve Ever Seen! I Have No Words To Say How Wonderful They Are! Domenic Makes You Feel Super Comfortable, Kaitlyn Helps You Eat Better And Healthy!

                    </p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>
            
            <div class="swiper-slide slide">
                <div class="image">
                    <img src="./images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="./images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="./images/blog-4.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquam, tenetur?</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="image">
                    <img src="./images/blog-5.jpg" alt="">
                </div>
                <div class="content">
                    <div class="link"> <a href="#">by user</a> <span>|</span> <a href="#">21st may, 2021</a> </div>
                    <h3>fitness is not about being better than someone else</h3>
                    <p>Fitness Within Is The Cleanest And Most Organized Gym I’ve Ever Seen!</p>
                    <a href="#" class="btn">read more</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<!-- blogs section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="links" href="#home">home</a>
            <a class="links" href="#about">about</a>
            <a class="links" href="#features">features</a>
            <a class="links" href="#pricing">pricing</a>
            <a class="links" href="#trainers">trainers</a>
            <a class="links" href="#blogs">blogs</a>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> monday : <i> 7:00am - 10:30pm </i> </p>
            <p> tuesday : <i> 7:00am - 10:30pm </i> </p>
            <p> wednesday : <i> 7:00am - 10:30pm </i> </p>
            <p> friday : <i> 7:00am - 10:30pm </i> </p>
            <p> saturday : <i> 7:00am - 10:30pm </i> </p>
            <p> sunday : <i> closed </i> </p>
        </div>

        <div class="box">
            <h3>opening hours</h3>
            <p> <i class="fas fa-phone"></i> +91-456-78904566 </p>
            <p> <i class="fas fa-phone"></i> +91-222-3333-444 </p>
            <p> <i class="fas fa-envelope"></i> team@gmail.com </p>
            <p> <i class="fas fa-map"></i> bhopal, india - 462001 </p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-pinterest"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for latest updates</p>
            <form action="">
                <input type="email" name="" class="email" placeholder="enter your email" id="">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

</section>

<div class="credit">  <span></span>  </div>

<!-- footer section ends -->

<script>
    let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};


var swiper = new Swiper(".home-slider", {
    spaceBetween: 20,
    effect: "fade",
    grabCursor: true,
    loop:true,
    centeredSlides: true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        600:{
            slidesPerView:2,
        },
    },
});

var swiper = new Swiper(".blogs-slider", {
    spaceBetween: 20,
    grabCursor: true,
    loop:true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints:{
        0:{
            slidesPerView:1,
        },
        768:{
            slidesPerView:2,
        },
        991:{
            slidesPerView:3,
        },
    },
});
</script>

<script>
    function generateCoupon() {
      const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
      let couponCode = '';
      for (let i = 0; i < 5; i++) {
        couponCode += characters.charAt(Math.floor(Math.random() * characters.length));
      }
      document.getElementById('getdis').textContent = couponCode;
    }
    </script>
<script>
    const profileIcon = document.querySelector('.profile-icon');
    let pressTimer, logoutTimeout;
  
    profileIcon.addEventListener('mousedown', function() {
      pressTimer = setTimeout(function() {
        const logoutOption = document.createElement('a');
        logoutOption.innerHTML = 'Logout';
        logoutOption.href = 'javascript:void(0);';
        profileIcon.appendChild(logoutOption);
  
        logoutOption.addEventListener('click', function() {
          window.location.href = 'index.html';
        });
  
        logoutTimeout = setTimeout(function() {
          profileIcon.removeChild(logoutOption);
        }, 3000);
      }, 3000);
    });
  
    profileIcon.addEventListener('mouseup', function() {
      clearTimeout(pressTimer);
      clearTimeout(logoutTimeout);
      const logoutOption = profileIcon.lastChild;
      if (logoutOption.tagName === 'A') {
        profileIcon.removeChild(logoutOption);
      }
    });
  </script>
  









<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>