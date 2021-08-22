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
                                <li><a id="active" href="property.html">Property</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">Contact</a></li>
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
                        <li><a id="active" href="property.html">Property</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
             <!-- navbar end -->
        </section>
        <!-- banner section start -->
        <div class="property-banner banner">
            <div class="banner-overlay">
                <h1 class="banner-header">Property</h1>
                <p> <a href="#">Home</a>  > Property</p>
            </div>
        </div>
    <!-- banner section end -->
    </header>
    <main>
        <!-- section 1 start-->
        <div class="serach-bar-main">
            <div class="search-bar-child searchbar-child-one">
                <h3>21 properties</h3>
            </div>
            <div class="search-bar-child searchbar-child-two">
                <input type="search" name="" id="" class="search" placeholder="Search by district">
                <i class="fa fa-search"></i>
            </div>
            <div class="search-bar-child searchbar-child-three custom-select">
                    <select>
                        <option value="0">Select District:</option>
                        <option value="1">Chandpur</option>
                        <option value="1">Cumilla</option>
                        <option value="1">Dhaka</option>
                    </select>
            </div>
        </div>
        <!-- section 1 end-->
        <!-- section 2 start -->
                        <!-- card start  -->
                        <div class="card-main container">
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                               
                            </div>  
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                              
                            </div>  
                    
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                              
                            </div>  
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                                
                            </div>  
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                                 
                            </div>  
                            <div class="card-area" style="position: relative;">
                                <img src='images/adspicture.jpg'>
                                <h2 class="card-price">4000</h2>
                                     
                                        <h3 class="card-title">Title goes here</h3>
                                        <table>
                                            <tr>
                                                <td><i class="fas fa-map-marker-alt"></i></td>
                                                <td><h6>Bari no:32, Road:A block,Matlab</h6></td>
                                             </tr>
                                        </table>
                                        <div class="card-footer">
                                            <table>
                                                <tr>
                                                    <td><i class="fas fa-bed"></i></td>
                                                    <td>1</td>
                                                    <td>Bedroom</td>
                                                </tr>
                                            </table>
                                   
                                            <table>
                                                    <tr>
                                                        <td><i class="fas fa-bath"></i></td>
                                                        <td>1</td>
                                                        <td>Bathroom</td>
                                                    </tr>
                                            </table>   
                                        </div>
                                               
                            </div>   
                        </div>
                        <!-- card end -->
            <!-- section 2 end -->
    </main>

<!-- // -->
<div style="margin:50px"></div>
<!-- // -->

    <!-- footer start -->
        <footer>
            <!-- before footer -->
            <section class="beforefooter-section">
                <div class="before-footer">
                    <div class="bf-one">
                        <img src="images/logo.png" alt="">
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