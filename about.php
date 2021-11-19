<!-- second header -->
<?php include('inc/second-header.php') ?>
<head>
<title>About</title>
</head>
            <!-- banner section start -->
            <div class="login-banner banner">
                    <div class="banner-overlay">
                        <h1 class="banner-header">About</h1>
                        <p> <a href="index.php">Home</a>  > About</p>
                    </div>
                </div>
            <!-- banner section end -->
        </header>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
<link rel="stylesheet" href="css/about.css">
    <!-- section start -->
    <div class="about-grid-main">
        <div> <div class="about-container">
         <div class="wrapper">
            <a href="#">
            <img src="images/masud1.jpg" alt="">
            </a>
            <div class="title">
            Masudur Rahman
            </div>
            <div class="place">
            181-15-1743
            </div>
         </div>
         <div class="content">
            <p style="margin: 15px 0px;">
                Full Stack Developer
            </p>
            <div class="buttons">
               <div class="btn">
                  <button>Message</button>
               </div>
               <div class="btn">
                  <button>Following</button>
               </div>
            </div>
         </div>
         <div class="icons">
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
         </div>
      </div></div>
        <div>
        <div class="about-container">
         <div class="wrapper">
            <a href="#">
            <img src="images/marjanjpg.jpg" alt="">
            </a>
            <div class="title">
            Jannatul Marjan
            </div>
            <div class="place">
            181-15-1744
            </div>
         </div>
         <div class="content">
            <p style="margin: 15px 0px;">
                Front-end Developer
            </p>
            <div class="buttons">
               <div class="btn">
                  <button>Message</button>
               </div>
               <div class="btn">
                  <button>Following</button>
               </div>
            </div>
         </div>
         <div class="icons">
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
         </div>
      </div>
        </div>
        <div>
        <div class="about-container">
         <div class="wrapper">
            <a href="#">
            <img src="images/tanvir.jpg" alt="">
            </a>
            <div class="title">
            Tanvir Ahmed
            </div>
            <div class="place">
            181-15-1866
            </div>
         </div>
         <div class="content">
            <p style="margin: 15px 0px;">
                UI/UX Designer and Dev
            </p>
            <div class="buttons">
               <div class="btn">
                  <button>Message</button>
               </div>
               <div class="btn">
                  <button>Following</button>
               </div>
            </div>
         </div>
         <div class="icons">
            <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
         </div>
      </div>
        </div>
    </div>
      <script>
         const img = document.querySelector("img");
         const icons = document.querySelector(".icons");
         img.onclick = function(){
           this.classList.toggle("active");
           icons.classList.toggle("active");
         }
      </script>
    <!-- section end -->

<!-- footer -->
<?php include('inc/footer.php') ?>
<!-- footer -->

       <!-- animation icon js -->
       <script>
        dt = document.getElementById("navchild5-top");
        dm = document.getElementById("navchild5-middle");
        db = document.getElementById("navchild5-bottom");
        dd = document.getElementsByClassName("dropdown");
        pa = document.getElementById("p");
        function myFunction(x) {
        document.getElementById("navchild5").addEventListener("click",function(){
        if(dt.style.transform === "rotate(0deg)"){
            dt.style.transform="rotate(45deg)";
            dt.style.position="relative";
            dt.style.top="4px";
            dm.style.display="none";
            db.style.transform="rotate(135deg)";
            db.style.position="relative";
            db.style.top="-4px";
            dd[0].style.display = "block";
        }else{
            dt.style.transform="rotate(0deg)";
            dt.style.position="static";
            dm.style.display="block";
            db.style.transform="rotate(0deg)";
            db.style.position="static";
            dd[0].style.display="none";
        }
    })
    if (x.matches) { // If media query matches
                dd[0].style.display = "none";
            } else {
            dd[0].style.display = "none";
            dt.style.transform="rotate(0deg)";
            dt.style.position="static";
            dm.style.display="block";
            db.style.transform="rotate(0deg)";
            db.style.position="static";
            dd[0].style.display="none";
            }
    }

    var x = window.matchMedia("(min-width: 769px)")
    myFunction(x)
    x.addListener(myFunction)
    </script>
     <!-- javascript code write here -->
     <script>
         let image1 = document.getElementById('img1');
        let image2 = document.getElementById('img2');
        let image3 = document.getElementById('img3');
        let card = document.getElementsByClassName('card');
        let images = document.getElementsByClassName('card-image');

        for (let c = 0; c < card.length; c++) {
            card[c].addEventListener('mouseover',function(){
                if(c == 0){
                    image1.style.filter='brightness(0.1)';
                }
                if(c == 1){
                    image2.style.filter='brightness(0.1)';
                }
                if(c == 2){
                    image3.style.filter='brightness(0.1)';
                }
            })
        }
        for (let c = 0; c < card.length; c++) {
            card[c].addEventListener('mouseout',function(){
                if(c == 0){
                    image1.style.filter='brightness(1)';
                }
                if(c == 1){
                    image2.style.filter='brightness(1)';
                }
                if(c == 2){
                    image3.style.filter='brightness(1)';
                }
            })
        }
        for (let c = 0; c < images.length; c++) {
            images[c].addEventListener('mouseover',function(){
                if(c == 0){
                    image1.style.filter='brightness(0.1)';
                    image1.style.transition = 'filter 1s';
                    // image1.style.transitionDuration= '1s';
                }
                if(c == 1){
                    image2.style.filter='brightness(0.1)';
                    image2.style.transition = 'filter 1s';
                }
                if(c == 2){
                    image3.style.filter='brightness(0.1)';
                    image3.style.transition = 'filter 1s';
                }
            })
        }
        for (let c = 0; c < images.length; c++) {
            images[c].addEventListener('mouseout',function(){
                if(c == 0){
                    image1.style.filter='brightness(1)';
                }
                if(c == 1){
                    image2.style.filter='brightness(1)';
                }
                if(c == 2){
                    image3.style.filter='brightness(1)';
                }
            })
        }
     </script>
</body>
</html>