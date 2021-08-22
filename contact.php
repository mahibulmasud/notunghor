<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <!-- font-awesome cdn link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;1,500&display=swap" rel="stylesheet">
    <title>Document</title>
    <style>
.contact-inputfeild{
    margin: 10px 0px;
    position: relative;
}
.contact-inputfeild input[type=text] {
    display: block;
    width: 100%;
    padding: 20px 27px;
    font-size: 18px;
    box-shadow: 1px 1px 1px 1px #0080007a;
    border: 0;
}
.contact-inputfeild textarea{
    padding: 20px 27px;
    width: 100%;
    font-size: 18px;
    box-shadow: 1px 1px 1px 1px #0080007a;
    border: 0;
}
.contact-inputfeild label{
    position: absolute;
    top:50%;
    left: 50px;
    transform: translate(-50%,-50%);
    transition: all 0.3s;
    pointer-events: none;
    color: #999;
}
input:focus ~ label, input:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: 27%;
    left: 8%;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}
.textarea label{
    position: absolute;
    top:30px;
    left: 60px;
    transform: translate(-50%,-50%);
    transition: all 0.3s;
    pointer-events: none;
    color: #999;
}
textarea:focus ~ label, textarea:valid ~ label {
    font-size: 0.75em;
    color: #999;
    top: 15px;
    -webkit-transition: all 0.225s ease;
    transition: all 0.225s ease;
}
</style>
</head>
<body>
    <header>
        <!-- second header -->
        <section class="second-header">
            <!-- navbar start -->
            <nav class="container">
                <div class="second-nav-main">
                    <div class="navchild1">
                        <img src="images/logo.png" alt="sitelogo">
                    </div>
                    <div class="navchild2">
                        <div>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="property.html">Property</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a id="active" href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="second-navchild3">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="second-navchild4" id="navchild4">
                        <a href="submit.html"><span>Submit Ads</span></a>
                        <i class="fas fa-plus" id="fa-plus"></i>
                    </div>
                    <div class="seocnd-navchild5" id="navchild5"><!-- for display 768px -->
                            <div class="top" id="navchild5-top"></div>
                            <div class="middle" id="navchild5-middle"></div>
                            <div class="bottom" id="navchild5-bottom"></div>
                    </div>
                </div>
                <div class="dropdown second-dropdown">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="property.html">Property</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a id="active" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
             <!-- navbar end -->
        </section>
        <!-- banner section start -->
        <div class="contact-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Contact</h1>
                <p> <a href="#">Home</a>  > Contact</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>

<!-- // -->
<div style="margin:50px"></div>
<!-- // -->

    <div class="contact-div">
        <div class="contact-clip-one"></div>
        <div class="contact-clip-two"></div>
        <div class="contact-section container">
            <div class="cs-child-one ">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets10.lottiefiles.com/packages/lf20_eBcQGa.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop autoplay></lottie-player>
            </div>
            <div class="cs-child-two">
                <h1>Contact Us</h1>
                <h4 style="text-align:center">We'd love to hear from you!</h4>
                <form action="">
                    <div class="contact-inputfeild">
                        <input type="text" required>
                        <label> Name</label>
                    </div>
                    <div class="contact-inputfeild">
                        <input type="text" required>
                        <label> Email</label>
                    </div>
                    <div class="contact-inputfeild">
                        <input type="text" required>
                        <label> Phone</label>
                    </div>
                    <div class="contact-inputfeild textarea">
                        <textarea name="" id="" cols="100%" rows="10"></textarea>
                        <label> Message</label>
                    </div>
                    <div class="contact-inputfeild">
                        <button class="button">Send</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
   
<!-- // -->
<div style="margin:50px"></div>
<!-- // -->

    <!-- footer start -->
        <footer>
            <!-- before footer -->
            <section class="beforefooter-section">
                <div class="before-footer">
                    <div class="bf-one">
                        <img src="images/logo.png" alt="" >
                    </div>
                    <div class="bf-two">
                        <table>
                            <tr>
                                <td><a href="#" class="footer-icon"><i class="fab fa-facebook-f"></i></a></td>
                                <td><a href="#" class="footer-icon"><i class="fab fa-twitter"></i></a></td>
                                <td><a href="#" class="footer-icon"><i class="fab fa-instagram"></i></a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>
            
            <!-- end -->
            <section class="container">
                <div class="top-footer">
                    <div class="tf-one">
                        <h1>Contact Us</h1>
                        <table>
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>420 Love Sreet 133/2 Mirpur City, Dhaka</td>
                                
                            </tr>
                            <tr>
                                <td><i class="fas fa-phone-volume"></i></td>
                                <td>+8801980573601</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-envelope"></i></td>
                                <td>jannatul15-1744@diu.edu.bd</td>
                            </tr>
                        </table>
                    </div>
                    <div class="tf-two">
                        <h1>Quick link</h1>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">See Ads</a></li>
                            <li><a href="#">Give Ads</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="tf-three">
                        <h1 class="newslatter">Newslatter</h1>
                        <p>Lorem ipsum dolor sit amet,</p>
                        <div class="subscribe-div">
                            <input type="text" name="" id="#" placeholder="Your mail"><a href="#" class="subscribe">Subscribe</a>
                        </div>
                    </div>
                    <div class="tf-four">
                        <div class="copyright-area">
                            <small class="copyright-text">©2021, Copy Right By Skybird. All Rights Reserved</small>
                        </div>
                        
                    </div>
                </div>
            </section>
        </footer>
    <!-- footer end -->

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
</body>
</html>