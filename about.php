<!-- second header -->
<?php include('inc/second-header.php') ?>
<head>
<title>About</title>
</head>
            <!-- banner section start -->
            <div class="login-banner banner">
                    <div class="banner-overlay">
                        <h1 class="banner-header">About</h1>
                        <p> <a href="#">Home</a>  > About</p>
                    </div>
                </div>
            <!-- banner section end -->
        </header>
<!-- second header -->
    <!-- section start -->
    <section class="section">
    <h1 class="text">Team information</h1>
    <hr class="team-hr">
        <div class="team-main about-container">
            <div class="team-01">
                <a class="team-link" href="http://mahibulmasud.brandyourself.com/" target="_blank">
                    <img id="img1" class="card-image" src="images/masud.jpg" alt="masudur rahman picture">
                    <div class="card" id="card">
                        <h2 class="h2">Kazi Masudur rahman</h2>
                        <h2 class="h2">181-15-1743</h2>
                </a>
                    </div>
            </div>
            <div class="team-02">
                    <img id="img2" class="card-image" src="images/marjanjpg.jpg" alt="jannatul marjan picture">
                    <div class="card" id="card">
                        <h2 class="h2">Jannatul Marjan</h2>
                        <h2 class="h2">181-15-1744</h2>
                    </div>
            </div>
            <div class="team-03">
                    <img id="img3" class="card-image" src="images/tanvir.jpg" alt="tanvir ahamed picture">
                    <div class="card" id="card">
                        <h2 class="h2">Md. Tanvir Ahmed</h2>
                        <h2 class="h2">181-15-1866</h2>
                    </div>
            </div>
        </div>
    </section>
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