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
        <div class="clip-one-team">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,128L30,138.7C60,149,120,171,180,160C240,149,300,107,360,80C420,53,480,43,540,32C600,21,660,11,720,48C780,85,840,171,900,176C960,181,1020,107,1080,117.3C1140,128,1200,224,1260,229.3C1320,235,1380,149,1410,106.7L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        </div>
        <div class="clip-two-team">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#061539" fill-opacity="1" d="M0,96L30,80C60,64,120,32,180,53.3C240,75,300,149,360,202.7C420,256,480,288,540,282.7C600,277,660,235,720,229.3C780,224,840,256,900,229.3C960,203,1020,117,1080,90.7C1140,64,1200,96,1260,128C1320,160,1380,192,1410,208L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
        </div>
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
     <!-- button overlay script -->
     <script>
        function openSearch() {
          document.getElementById("myOverlay").style.display = "block";
        }
        
        function closeSearch() {
          document.getElementById("myOverlay").style.display = "none";
        }
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