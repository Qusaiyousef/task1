<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="origin" name="referrer">
    <meta content="/images/branding/googleg/1x/googleg_standard_color_128dp.png" itemprop="image">
    <title dir="rtl">جامعه المعرفه اليمن - Google Search</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

    <!-- font awesome cdn link  -->
    <!-- <link rel="stylesheet" href="./fontawesome-free-6.1.2-web/css/all.min.css"> -->
    <link rel="stylesheet" href="css/all.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header  class="header">
    
    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#home" class="logo">university knowledge<span>.</span></a>

    <nav class="navbar">
        <a href="#home" >home</a>
        <a href="#about" >about</a>
        <a href="#products">colleges</a>
        <a href="#contact">contact</a>
        <a href="#good">ads</a>
        <a href="#location">location</a>
        
    </nav>
    
     <div class="headrabsolute">
       
        <a href="#" class="fas fa-user"></a>
    </div> 
    <script src="java.js/java.js"></script>
</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>university knowledge</h3>
        <span> university of knowledge & modern sciences </span>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae laborum ut minus corrupti dolorum dolore assumenda iste voluptate dolorem pariatur.</p>
        <a href="#" class="btn">see now</a>
    </div>
    
</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading" > <span> about </span> us </h1>

    <div class="row">

        <div class="video-container">
        
         <video src="images/about.mp4" loop autoplay muted ></video>
            <h3>best university</h3>
        </div>

        <div class="content">
             <h3>why choose us?</h3> 
            <p>Lorem ipsum dolor sit, amet consectetuincidunt ratione, provident qui dolorem.</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aspernatur fugiat quod necessitatibus ratione dignissimos vel, quaerat ipsa temporibus, sint, laudantium facere laboriosam exercitationem sed velit eius sunt voluptatum explicabo beatae?</p>
            <a href="about.html" class="btn">learn more</a>
        </div>

    </div>

</section>

<!-- about section ends -->
<!-- colleges section starts  -->

<section class="products" id="products">
    <h1 class="heading" > <span> coll</span>eges </h1>
    

    <div class="box-container">

        <div class="box">
           
            <div class="image">
                <img src="images/admin.jpg" alt="">
                <div class="absolute">
                    
                    <a href="dean.html" class="cart-btn">go to content</a>
                   
                </div>
            </div>
            <div class="content">
                 <h3>humanities & administrative sciences</h3> 
                <div class="price"> $300.99 <span>$15.99</span> 
                </div>
            </div>
        </div>

        <div class="box">
         
            <div class="image">
                <img src="images/it.jpg" alt="">
                <div class="absolute">
               
                    <a href="dean2.html" class="cart-btn">go to content</a>
                  
                </div>
            </div>
            <div class="content">
                <h3> engineering  & information technology</h3> 
                <div class="price"> $250.99 <span>$10.99</span> </div>
            </div>
        </div>

        <div class="box ">
           
            <div class="image">
                <img src="images/3.jpg" alt="">
                <div class="absolute">
               
                    <a href="dean3.html" class="cart-btn">go to content</a>
                   
                </div>
            </div>
            <div class="content">
                <h3>sharia law</h3>
                <div class="price"> $280.99 <span>$20.99</span> </div>
            </div>
        </div>

    </div>

</section>

<!-- colleges section ends -->



<!-- adver section starts  -->
<section class="footer anno"  id="good">
    <h1 class="heading"> <span> advertise</span>ment </h1>
    <div  class="new" >
  
        <img class="mySlides" src="images/3.jpg"  >
        <img class="mySlides" src="images/1.jpg" >
        <img class="mySlides" src="images/2.jpg" >
        <img class="mySlides" src="images/a3.jpg" >
        <img class="mySlides" src="images/a4.jpg" >
        <img class="mySlides" src="images/a5.jpg" >
    
        <button class="display-left" onclick="plusDiva(-1)" style="font-size:20px;color:#a4c639;">&#10094;</button>
        <button class="display-right" onclick="plusDiva(1)"style="font-size:20px;color:#a4c639;" >&#10095;</button>
        
     
        </div>
        
        
   
</section>

 <script>
    var slideIndex = 1;
    showDiva(slideIndex);
    
    function plusDiva(n) {
      showDiva(slideIndex += n);
    }
    
    function showDiva(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
    </script>  



<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span> contact </span> us </h1>





    <div class="row color">

        <form action="./contact.php" method="post"  target="_blank" >
            <input type="text" name="con_name" placeholder="الاسم" class="box">
            <input type="email" name="email" placeholder="البريد الالكتروني" class="box">
            <input type="number" name="phone" placeholder="رقم الهاتف" class="box">
            <textarea name="commit" class="box" placeholder="اكتب رسالتك" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="ارسال" class="btn btnta">
        </form>

        <div class="image">
            <img src="images/Get in touch-amico.svg" alt="">
        </div>

    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer  backfoter" id="location">
    <h1 class="heading"> <span> loca</span>tion </h1>
        <img class="imgfot" src="images/map.jpg" alt="الموقع">
</section>



<section class="footer">

    <div class="box-container">

        <div class="boxfoot">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#products">colleges</a>
            <a href="#contact">contact</a>
            <a href="#location">location</a>
            <a href="#good">ads</a>
        </div>

        <div class="boxfoot">
            <h3>electronic gateways </h3>
              <a   class="afott" href="http://www.kmsu.edu.ye/Accounts/StuffLogin">   <i   id="user" class="fa-solid fa-users-line"></i> employees  gateway</a>
              <a   class="afott" href="student.php">    <i   id="user" class="fa-solid fa-users-line"></i> student gateway</a>
              <a   class="afott" href="http://www.kmsu.edu.ye/Home/PhoneList">    <i   id="user" class="fa-solid fa-users-line"></i> internal transfers</a>
              <a   class="afott" href="https://p.oasyemen.net/portal/"><i   id="user" class="fa-solid fa-users-line"></i> electronic registration</a>
        </div>

        <div class="boxfoot">
            <h3>connect with us</h3>
            
            <a   class="afott" href="http://www.kmsu.edu.ye/Home/EmailList"><i   id="user" class="fa-solid fa-users-line"></i> mailing list</a>
            <a   class="afott" href="contact.html"> <i class="fa-solid fa-envelope"></i>contact us</a>
            <a href="#"> <i class="fa-solid fa-phone"></i> 01/484772  </a>
            <a href="#"> <i class="fa-solid fa-phone-volume"></i> 777333918</a>
        </div>

        <div class="boxfoot">
            <h3>contact info</h3>
            <a href="#"> 01/484772</a>
            <a href="#">  <i class="fa-solid fa-envelopes"></i> qusai@gmail.com</a>
            <a href="#">Sana'a, Yemen - 9654+85M</a>
        </div>

        <div class=" iconfot footer">
            <div class=" ">
              <a   class="icon" href="https://www.facebook.com/Kmsu.edu.ye/"><i id="fas" class="fab fa-facebook"></i></a>
              <a   class="icon" href="#"><i  id="twi" class=" fab fa-twitter"></i><a>
               <a  class="icon" href="#"><i  id="goo" class=" fab fa-google-plus-g"></i></a>
              <a   class="icon" href="#"><i  id="ins" class=" fab fa-instagram" ></i></a>
            
            </div>
            </div>
    </div>

    <div class="credit"> created by <span> mr.qusai al-Rumayma designer </span> | all rights reserved </div>

</section>


<img  class="svgg" src="images/wave.svg" alt=""> 



<!-- footer section ends -->


</body>
</html>